<?php 
require_once 'loadenv.php';


readonly class ConnectDB {

    public string $hostname;
    public string $username;
    public string $password;
    public string $database;
    public string $dbPort;

    public function __construct()
    {
        $this->hostname = $_ENV['DB_HOST'] ?? '';
        $this->username = $_ENV['DB_USER'] ?? '';
        $this->password = $_ENV['DB_PASS'] ?? '';
        $this->database = $_ENV['DB_NAME'] ?? '';
        $this->dbPort = $_ENV['DB_PORT'] ?? '';
    }

}

class Notes{
    public int $id;
    public string $title;
    public string $content;
    public string $created_date;

    public function __construct(int $id, string $title, string $content, string $created_date)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->created_date = $created_date;
    }
}

class NoteQuery{


    public $conn;

    public function __construct()
    {
        $this->conn = connect_mysql();

        if ($this->conn->connect_error){
            echo "<script>
                            window.location.href = '404.php';
                </script>";
        }
    }

    public function get_all_note():mysqli_result {
        return $this->conn->query("CALL getAllNotes()");
    }

    public function get_note(string $id):mysqli_result {

        return $this->conn->query("CALL getNote($id)");
    }

    public function add_note(string $title, string $content):bool{
    
        if(trim($title) === "") return false;
        if(trim($content) === "") return false;

        $stmt = $this->conn->prepare("CALL addNote(?,?)");
        $stmt->bind_param("ss", $title, $content);
    
        if($stmt->execute()) return true;

        return false;
    }

    public function update_note(string $id,string $title, string $content):bool{
        
        if(trim($id) === "") return false;
        if(trim($title) === "") return false;
        if(trim($content) === "") return false;

        $stmt = $this->conn->prepare("CALL updateNote(?,?,?)");
        $stmt->bind_param("ssi",$title,$content,$id);

        if ($stmt->execute()) return true;

        return false;
    }

    public function delete_note(string $id): mysqli_result | bool {
        if(trim($id) === "") return false;

        $stmt = $this->conn->prepare("CALL deleteNote(?)");
        $stmt->bind_param("i", $id);

        if($stmt->execute()) return true;
        
        return false;
    }

}

function connect_mysql(){
    $connect_db = new ConnectDB();
    return new mysqli(
                        $connect_db->hostname, 
                        $connect_db->username, 
                        $connect_db->password, 
                        $connect_db->database
                    );
}

$note_query = new NoteQuery();

                    
?>