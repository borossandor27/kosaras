
<?php

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
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

// Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        //-- echo "Connected successfully";
    }

    public function getAllTermekCards() {
        $response = "";
        $sql = "SELECT `termekid`,`termeknev`,`termekdb`,`termekar`,`fajta` FROM `termekek`";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response .= $this->termekCard($row["termekid"], $row["termeknev"], $row["termekdb"], $row["termekar"], $row["fajta"]);
            }
        } else {
            $response = "No results found";
        }
        return $response;
    }

    private function termekCard($termekid, $termeknev, $termekdb, $termekar, $fajta) {
        $kep ="images\\". ($fajta=="macska"?"Smiling-Cat.png":"Smiling-Dog.jpg");
        $card = '<div class="card m-1" style="width: 18rem;float: left;">' .
                '<img src="'.$kep.'" class="card-img-top" alt="'.$fajta.'">'.
                '<div class="card-body">' . 
                '<h5 class="card-title">' . $termeknev . '</h5>' .
                '<p class="card-text">' . number_format($termekdb, 0, ',', ' ') . ' db</p>' .
                '<p class="card-text">Termek ar: ' . number_format($termekar, 0, ',', ' ') . ' Ft</p>' .
                '<a href="#?kosarba&termekid='.$termekid.'" class="btn btn-outline-secondary"><i class="fa-solid fa-cart-plus"></i> Kosárba</a>'.
                '</div>
        </div>';
        return $card;
    }
}
