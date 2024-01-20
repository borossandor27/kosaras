<?php
var_dump($_POST);
var_dump($_SESSION['kosar']);
if(filter_input(INPUT_POST, "kosarba",FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
    $rendelesdb = filter_input(INPUT_POST, "rendelesdb", FILTER_SANITIZE_NUMBER_INT);
    //-- Csak akkor tesszük a kosárba, ha a rendelt darabszám nagyobb, mint 0
    if($rendelesdb>0){
    $termekid = filter_input(INPUT_POST, "termekid", FILTER_VALIDATE_INT | FILTER_SANITIZE_NUMBER_INT);
    $termekar = filter_input(INPUT_POST, "termekar", FILTER_VALIDATE_INT | FILTER_SANITIZE_NUMBER_INT);
    $termeknev = filter_input(INPUT_POST, "termeknev", FILTER_SANITIZE_STRING);
    $_SESSION['kosar']->addTermek($termekid, $termeknev,$termekar, $rendelesdb);
    ?>
    <div id="lebegoKerdes">
    <div class="d-flex p-2">
        <p class="d-flex justify-content-center text-center w-100">Kérdés szöveg</p>
    </div>
    <div  class="d-flex justify-content-evenly w-100">
        <a href="#" class="btn btn-outline-dark mt-2" onclick="hideDiv('lebegoKerdes')">További válogatás</a>
        <a href="#?kosar" class="btn btn-outline-dark mt-2">Ugrás a kosárra</a>
    </div>
</div>
<?php
    }}
?>
<h1>Termékeink</h1>

<div class="d-flex">
    <aside class="align-self-stretch p-3" id="termekFilter" style="width: 100rem;">
        <div>
            <fieldset>
                <legend> Kategóriák </legend>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="fajta" value="macska" checked>
                    <label class="form-check-label" for="macska">
                        Macska
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="kutya" checked>
                    <label class="form-check-label" for="kutya">
                        Kutya
                    </label>
                </div>
            </fieldset>
            <button class="btn btn-outline-primary mt-2"><i class="fa-solid fa-filter"></i> Szűrés</button>
        </div>
        <?php
        ?>
    </aside>
    <main class="align-self-stretch" style="width: auto;">
        <?php
        echo $db->getAllTermekCards();
        ?>
    </main>
</div>

