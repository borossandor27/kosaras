
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
        $response = "<form action='#?kosar' method='post'>";
        $sql = "SELECT `termekid`,`termeknev`,`termekdb`,`termekar`,`fajta` FROM `termekek`";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response .= $this->termekCard($row["termekid"], $row["termeknev"], $row["termekdb"], $row["termekar"], $row["fajta"]);
            }
        } else {
            $response = "No results found";
        }
        return $response . "</form>";
    }

    private function termekCard($termekid, $termeknev, $termekdb, $termekar, $fajta) {
        $kep ="images\\". ($fajta=="macska"?"Smiling-Cat.png":"Smiling-Dog.jpg");
        $inputdb='<input type="number" id="rendelesdb" name="rendelesdb" min="0" max="'.$termekdb.'" value="0">';
        $button='<button type="submit" class="btn btn-outline-secondary" name="kosarba" value="1"><i class="fa-solid fa-cart-plus"></i> Kosárba</button>';
        $card = '<div class="card m-2" style="width: 18rem;float: left;">' .
                '<img src="'.$kep.'" class="card-img-top" alt="'.$fajta.'">'.
                '<div class="card-body">' . 
                '<h5 class="card-title text-center">' . $termeknev . '</h5>' .
                '<p class="card-text text-center">' . number_format($termekdb, 0, ',', ' ') . '/'.$inputdb.' db</p>' .
                '<p class="card-text text-center">Egységár: ' . number_format($termekar, 0, ',', ' ') . ' Ft</p>' .
                '<p class="text-center">'.$button.'</p>'.
                '<input type="hidden" name="termekid" value="'.$termekid.'">'.
                '<input type="hidden" name="termekar" value="'.$termekar.'">'.
                '<input type="hidden" name="termeknev" value="'.$termeknev.'">'.
                '</div>
        </div>';
        return $card;
    }
}
