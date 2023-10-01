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
    <style>
    .layered {
        display: grid;

        /* Set horizontal alignment of items in, case they have a different width. */
        /* justify-items: start | end | center | stretch (default); */
        justify-items: center;

        /* Set vertical alignment of items, in case they have a different height. */
        /* align-items: start | end | center | stretch (default); */
        align-items: center;
    }

    .layered>* {
        grid-column-start: 1;
        grid-row-start: 1;
    }


    /* for demonstration purposes only */
    .layered>* {
        background-color: rgba(255, 255, 255, 0.4)
    }

    .video {}
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <div class=" dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style=" background-color: #0f587b">
        <div class="py-12 ">

            <div class="max-w-7xl  sm:px-6 lg:px-8">
                <div class="d-grid gap-2 col-10  m-auto ">

                    <div class="container mt-5  rounded-4 overflow-auto">
                        <img src="icon/ดูปอด.png" style="width: 406px; height: 87px; " class=" img" alt="">
                        <div class="row ">
                            <div class="nav me-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <div class="col-rm-12 col-lg-2">
                                    <button class="nav-link active" id="v-pills-video-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-video" type="button" role="tab"
                                        aria-controls="v-pills-video" aria-selected="true"><img
                                            src="icon/วิธีการตรวจ.png" class="img" style="width: 182px; height: 66px; "
                                            alt=""></button>
                                </div>
                                <div class="col-rm-12 col-lg-2">
                                    <button class="nav-link" id="v-pills-one-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-one" type="button" role="tab"
                                        aria-controls="v-pills-one" aria-selected="false"><img
                                            src="icon/ผลการตรวจร่างกาย.png" style="width: 230px; height: 64px; "
                                            class="" alt="">
                                    </button>
                                </div>
                            </div>

                        </div>


                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane show active " id="v-pills-video" role="tabpanel"
                                aria-labelledby="v-pills-video-tab" tabindex="0">
                                <div class="m-5 text-center">

                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/xcERDlJLcTk?si=a8olnZoVo6OvSrb9"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>


                            </div>
                            <div class="tab-pane" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab"
                                tabindex="0">
                                <img src="/result/ผลตรวจปอด ดู.jpg" class="img-fluid" alt="...">
                                <img src="/result/ผลตรวจปอด ดู 2.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="tab-pane " id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab"
                                tabindex="0">



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