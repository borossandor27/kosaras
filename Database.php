class Database {
private $host = "localhost";
private $username = "root";
private $password = "";
private $database = "webshop";

// Constructor
public function __construct() {
// Connect to the database
$this->connect();
}

// Connect to the database
private function connect() {
$conn = new mysqli($this->host, $this->username, $this->password, $this->database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
}

public function getAllTermekCards() {
$response="";
$sql = "SELECT `termekid`,`termeknev`,`termekdb`,`termekar`,`fajta` FROM `termekek`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$response+= termekCard($row["termekid"], $row["termeknev"], $row["termekdb"], $row["termekar"], $row["fajta"]); }
} else {
echo "No results found";
}
}
private function termekCard($termekid, $termeknev, $termekdb, $termekar, $fajta) {
return '<div class="card">'.
    '<div class="card-body">'.$termekid. 
        '<p>Termek nev: ' . $termeknev . '</p>'.
        '<p>Termek db: ' . $termekdb . '</p>'.
        '<p>Termek ar: ' . $termekar . '</p>'.
        '<p>Fajta: ' . $fajta . '</p>'.
        '</div></div>';
}
}