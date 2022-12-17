<!-- <script src="https://cdn.tailwindcss.com"></script> -->

<h1 class="text-3xl mb-4 font-bold text-center">
    DAFTAR MERK
</h1>
<div class="container align-content-center">
    <div class="row align-self-center">
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <a href="test.php"><img src="./assets/picture-brand/brand-1.png" alt="Photo of sunset"></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-2.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-3.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-4.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-5.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-6.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-7.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-8.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-9.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-10.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-2.png" alt="Photo of sunset">
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card card-block">
                <img src="./assets/picture-brand/brand-7.png" alt="Photo of sunset">
            </div>
        </div>
    </div>
</div>
</div>

<style>
    */ div [class^="col-"] {
        padding-left: 5px;
        padding-right: 5px;
    }

    .card {
        transition: 0.5s;
        cursor: pointer;
    }

    .card-title {
        font-size: 15px;
        transition: 1s;
        cursor: pointer;
    }

    .card-title i {
        font-size: 15px;
        transition: 1s;
        cursor: pointer;
        color: #ffa710
    }

    .card-title i:hover {
        transform: scale(1.25) rotate(100deg);
        color: #18d4ca;

    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
    }

    .card-text {
        height: 80px;
    }

    .card::before,
    .card::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform: scale3d(0, 0, 1);
        transition: transform .3s ease-out 0s;
        background: rgba(255, 255, 255, 0.1);
        content: '';
        pointer-events: none;
    }

    .card::before {
        transform-origin: left top;
    }

    .card::after {
        transform-origin: right bottom;
    }

    .card:hover::before,
    .card:hover::after,
    .card:focus::before,
    .card:focus::after {
        transform: scale3d(1, 1, 1);
    }
</style>