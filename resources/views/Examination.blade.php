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
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="container text-center my-5 overflow-auto">
                            <!-- <a class="btn d-flex flex-row mb-3 rounded-5" href="/ChestandLung" type="button">
                                <div class="row rounded-5" style=" background-color: #02457A">
                                    <div class="col d-grid ">
                                        <h3 class="text-left text-light p-3 my-auto " type="button">
                                            ทรวงอกและปอด
                                            <br>(Chest
                                            and
                                            Lung)
                                        </h3>
                                    </div>
                                    <div class="col-2 p-2 mx-2 my-auto "><img src="icon/IMG_0803.PNG"
                                            class="img-fluid end-0 rounded-circle bg-light" alt="">
                                    </div>
                                    <div class="col-2 p-2 my-auto"><svg xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" class="bi bi-arrow-right-circle text-light"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <a class="btn d-flex flex-row mb-3 rounded-5" href="/Heart" type="button">
                                <div class="row rounded-5" style=" background-color: #02457A">
                                    <div class="col d-grid ">
                                        <h3 class="text-left text-light p-3 my-auto " type="button">
                                            หัวใจ (Heart)
                                        </h3>
                                    </div>
                                    <div class="col-2 p-2 mx-2 my-auto "><img src="icon/IMG_0799.PNG"
                                            class="img-fluid end-0 rounded-circle bg-light" alt="">
                                    </div>
                                    <div class="col-2 p-2 my-auto"><svg xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" class="bi bi-arrow-right-circle text-light"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                        </svg>
                                    </div>
                                </div>
                            </a> -->
                            <div class="row ">
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                <div class="card mb-3">
                                        <div class="card-header text-light" style="background-color: #001B48">
                                            <b>ทรวงอกและปอด
                                            <br>(Chest
                                            and
                                            Lung)</b>
                                        </div>
                                        <div class="card-body" style="background-color: #02457A">
                                            <img src="icon/IMG_0803.PNG" class="img-fluid pb-2" alt="">
                                            <a href="/ChestandLung" style="background-color: #001B48"
                                                class="btn text-light rounded-pill mx-5" type="button"><b>click</b></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12 col-lg-6 col-md-6">
                                    <div class="card mb-3">
                                        <div class="card-header text-light" style="background-color: #001B48">
                                            <b>หัวใจ<br> (Heart)</b>
                                        </div>
                                        <div class="card-body" style="background-color: #02457A">
                                            <img src="icon/IMG_0799.PNG" class="img-fluid pb-2" alt="">
                                            <a href="/Heart" style="background-color: #001B48"
                                                class="btn text-light  rounded-pill mx-5" type="button"><b>click</b></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end m-1">
                <a class="btn btn-primary " href="{{ url()->previous() }}">ย้อนกลับ</a>
            </div> -->
            </div>
        </div>
    </div>
</body>

</html>
