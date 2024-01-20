<h1>Termékeink</h1>
<div id="lebegoKerdes">
    <div class="d-flex p-2">
        <p class="d-flex justify-content-center text-center w-100">Kérdés szöveg</p>
    </div>
    <div  class="d-flex justify-content-evenly w-100">
        <a href="#" class="btn btn-outline-dark mt-2" onclick="hideDiv('lebegoKerdes')">További válogatás</a>
        <a href="#?kosar" class="btn btn-outline-dark mt-2">Ugrás a kosárra</a>
    </div>
</div>
<div class="d-flex">
    <aside class="align-self-stretch p-3" id="termekFilter" style="width: 200rem;">
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

