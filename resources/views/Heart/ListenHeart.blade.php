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
    <div class=" dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style=" background-color: #0f587b">
        <div class="py-12 ">

            <div class="max-w-7xl  sm:px-6 lg:px-8">
                <div class="d-grid gap-2 col-10  m-auto ">

                    <div class="container-fluid mt-5  rounded-4 ">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active " id="v-pills-video-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-video" type="button" role="tab"
                                    aria-controls="v-pills-video" aria-selected="false">video</button>
                                <button class="nav-link " id="v-pills-one-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-one" type="button" role="tab" aria-controls="v-pills-one"
                                    aria-selected="true">1</button>
                                <button class="nav-link" id="v-pills-two-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-two" type="button" role="tab" aria-controls="v-pills-two"
                                    aria-selected="false">2</button>

                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane " id="v-pills-one" role="tabpanel"
                                    aria-labelledby="v-pills-one-tab" tabindex="0">
                                    <img src="/result/ผลตรวจหัวใจ ฟัง 1.jpg" class="img-fluid" alt="...">

                                </div>

                                <div class="tab-pane " id="v-pills-two" role="tabpanel"
                                    aria-labelledby="v-pills-two-tab" tabindex="0">


                                    <img src="/result/ผลตรวจหัวใจ ฟัง 2.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="tab-pane  show active" id="v-pills-video" role="tabpanel"
                                    aria-labelledby="v-pills-video-tab" tabindex="0">
                                    <div class="m-5 p-5">
                                        <iframe width="820" height="460"
                                            src="https://www.youtube.com/embed/9elWPZURDEA?si=iUgiKlrLQZJQKiEV"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</body>

</html>