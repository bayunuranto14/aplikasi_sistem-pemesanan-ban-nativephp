<?php
include_once('./layouts/topbar.php');

?>

<div class="container">
    <h1 class="text-center mt-4 text-2xl font-bold">DETAIL PRODUK</h1>
    <div class="row mt-4">
        <div class="col">
            <img src="./assets/banner.png" alt="">
        </div>
        <div class="col">
            <h1 class="text-center text-2xl font-semibold">Ban Maxis Extramaxx</h1>
            <p class="mt-4 text-center text-xl">Harga</p>
            <p class="mt-4 text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed praesentium, nulla, labore qui soluta recusandae cumque, quia amet eos commodi cum earum! Facere odio ipsum accusamus perferendis, ab mollitia illum.
            </p>
        </div>

    </div>
    <div class="mt-4">
        <?php require_once('./pemesanan.php'); ?>
    </div>
</div>


<?php
include_once('./layouts/footer.php');
?>