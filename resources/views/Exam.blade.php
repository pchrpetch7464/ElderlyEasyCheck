<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elderly easy check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">




    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <h1 class="navbar-brand position-absolute end-0">Elderly easy check</h1>
            <button class="navbar-toggler position start-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header ">
                    <button class="navbar-toggler position start-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <a href="/" class="btn mb-3 text-light" style=" background-color: #02457A"
                            type="button">หน้าหลัก</a>
                        <a href="/Examination" class="btn mb-3 text-light" style=" background-color: #02457A"
                            type="button">Physical
                            examination</a>
                        <a href="/Exam" class="btn mb-3 text-light" style=" background-color: #02457A"
                            type="button">ทบทวนความรู้</a>
                        <a href="/QandA" class="btn mb-3 text-light" style=" background-color: #02457A"
                            type="button">กระทู้ ถาม-ตอบ</a>
                        <a href="/About" class="btn mb-3 text-light" style=" background-color: #02457A"
                            type="button">เกี่ยวกับเรา</a>
                </div>
            </div>
        </div>
    </nav>


    <img src="/icon/dash.png" class="img-fluid" alt="...">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

        <div class="py-12">

            <div class="d-grid gap-2 col-8 mx-auto">
                <div class="container m-5">

                    <div class="row">
                        <a class="btn d-flex mb-3">
                            <div class="row rounded-4" style=" background-color: #02457A">
                                <div class="col d-grid ">
                                    <h3 class="text-left text-light p-3 my-auto " type="button">
                                        ทบทวนความรู้
                                    </h3>
                                </div>


                            </div>
                        </a>
                        <h5>ชี้แจง : จับคู่คำถามและคำตอบที่ถูกต้องที่สุด</h5>
                        <div class="col">
                            <div class="row">
                            </div>
                            <div class="row">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <img src="icon/QR.jpg" class="w-100 " alt="">

                            </div>
                            <div class="row">
                                <a class="text-dark text-center mx-auto" target="_blank"
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSeSXuUhvGmBHHt9mAMUoKn2bjzY4XvSWbAeKfT7AoIbtlQe7w/viewform">
                                    คลิกทบทวนความรู้</a>
                            </div>
                        </div>
                        <div class="col">
                            <img src="icon/IMG_8709.png" class="w-25 position-absolute end-0 " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>