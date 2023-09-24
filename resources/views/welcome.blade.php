<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elderly easy check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex m-1">
        <div class="row">
            <div class="col mt-2">
                <a href="/" class="btn text-light rounded-pill" style="background-color: #001B48"
                    type="button">หน้าหลัก</a>

                <a href="/About" type="button" class="btn text-light rounded-pill" style="background-color: #001B48">
                    เกี่ยวกับเรา
                </a>
                <a href="/QandA" type="button" class="btn text-light rounded-pill" style="background-color: #001B48">
                    กระทู้ ถาม-ตอบ
                </a>
            </div>
            <div class="col mt-2">
                <h2 class="text-end">Elderly easy check</h2>
            </div>
        </div>


    </div>

    <img src="/icon/dash.png" class="img-fluid" alt="...">

</head>

<body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg rounded-4">
        <div class="py-12 ">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <div class="container-sm text-center m-5">
                            <div class="row">
                                <div class="col">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                        <div class="d-grid gap-2 mx-auto">
                                            <a href="/Examination" class="btn text-light rounded-4 "
                                                style="background-color: #02457A" type="button"><b>Physical
                                                    Examination</b><img src="icon/IMG_0587.png" class="img-fluid pb-2"
                                                    alt=""></a>
                                            <a href="/Examination" style="background-color: #02457A"
                                                class="btn text-light rounded-pill mx-5" type="button"><b>click</b></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                        <div class="d-grid gap-2  mx-auto">
                                            <a href="/Exam" style="background-color: #02457A"
                                                class="btn text-light rounded-4 " type="button"><b>ทบทวนความรู้</b>
                                                <img src="icon/IMG_8709.png" style="background-color: #02457A"
                                                    class="img-fluid pb-2" alt=""></a>
                                            <a href=" /Exam" style="background-color: #02457A"
                                                class="btn text-light rounded-pill mx-5" type="button"><b>click</b></a>
                                        </div>
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