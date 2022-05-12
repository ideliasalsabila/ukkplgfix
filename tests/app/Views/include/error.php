<?php
if (session()->get("gagal")){
    ?>
    <div class="alert alert-danger"><?= session()->get("gagal") ?></di>
    <?php
}