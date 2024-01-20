<h1>Termékeink</h1>
<div class="row">
<aside class="col-3" id="termekFilter" style="width: 20%;">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Default checkbox
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
            Checked checkbox
        </label>
    </div>
    <?php
    ?>
</aside>
<main style="width: auto;">
    <?php
    echo $db->getAllTermekCards();
    ?>
</main>
</div>

