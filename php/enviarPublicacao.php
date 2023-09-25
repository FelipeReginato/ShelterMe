<?php

class Database
{
    private static $instance;
    private $conn;

    private $servername = "localhost";
    private $username = "usu@ShelterMe";
    private $password = "root";
    private $database = "shelterme";

    private function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function closeConnection()
    {
        mysqli_close($this->conn);
    }
}

session_start();
$id = $_SESSION["id"];
$data = date("d/m/Y");
$nome = $_SESSION["nome"];

$db = Database::getInstance();
$conn = $db->getConnection();

$resultA = mysqli_query($conn, "SELECT CodAnimal,CodPessoa FROM animal WHERE Nome LIKE '$nome'");

$rowA = mysqli_fetch_assoc($resultA);

$codAnimal = $rowA["CodAnimal"];
$codPessoa = $rowA["CodPessoa"];

$sql = "INSERT INTO postagem (CodAnimal, CodPessoa, DataPostagem) 
    VALUES ('$codAnimal', '$id', '$data')";

if ($result = mysqli_query($conn, $sql)) {
    unset($_SESSION["nome"]);
    ?>
    <script>
    window.location.replace("paginaPrincipal.php");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("../paginas/paginaAnimal.html");
    alert("<?php echo "Erro executando INSERT: " . mysqli_error($conn); ?>");
    </script>
    <?php
}

$db->closeConnection();
?>