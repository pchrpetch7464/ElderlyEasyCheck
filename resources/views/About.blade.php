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
                    <div class="d-grid gap-2 col-8 mx-auto">
                        <div class="container-{breakpoint} text-center mt-5">

                            <div class="row border-bottom ">
                                <div class="col">
                                    <h1 class="bg-primary rounded-4 text-light">About Us</h1>
                                </div>
                                <div class="col">
                                    <p>เว็บไซต์นี้จัดทําขึ้นภายใต้<br>

                                        โครงการนวัตกรรมการพัฒนาสื่อการเรียนรู้อิเล็คโทรนิคบนเครือข่ายอินเตอร์เน็ต<br>
                                        “Elderly Easy Check” ตรวจร่างกายในผู้สูงอายุ สำหรับนักศึกษาพยาบาล<br>

                                        (Physical Examination of the Older Adult)</p>
                                </div>
                            </div>
                            <div class="row border-bottom m-3">
                                <div class="col">
                                    <p>จัดทำโดย</p>

                                    <p>นางสาวรุ่งทิวา พงษ์ลุน รหัสนักศึกษา 633060082-5<br>
                                        นางสาวปิยะภรณ์ ชื่นชม รหัสนักศึกษา 633060122-9<br>
                                        นางสาวเกวลิน นามพลแสน รหัสนักศึกษา 633060124-5<br>
                                        นายจิรสิน นาปรัง รหัสนักศึกษา 633060134-2<br>
                                        นางสาวพรนิภา จันลาลี รหัสนักศึกษา 633060148-1<br>
                                        นายรัฐพล ไม่หวั่น รหัสนักศึกษา 633060149-9<br>
                                        นางสาวสุรีญา จันทรประทักษ์ รหัสนักศึกษา 633060157-0</p>
                                    <p>นักศึกษาพยาบาลชั้นปีที่ 4</p>
                                </div>
                                <div class="col">
                                    <p>ที่ปรึกษาโครงการ</p>
                                    <p>
                                        รศ.ดร.มยุรี ลี่ทองอินทร์<br>
                                        ผศ.ดร.นัดดา คำนิยม</p>
                                    <p>สาขาการพยาบาลผู้สูงอายุ<br>
                                        รายวิชา 113 312 โครงการนวัตกรรมทางการพยาบาล<br> (Nursing Innovation)<br>
                                        ภาคการศึกษาต้น ปีการศึกษา 2565<br>
                                        คณะพยาบาลศาสตร์ มหาวิทยาลัยขอนแก่น</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <p>Content Reference : หนังสือ การประเมินภาวะสุขภาพผู้ใหญ่และผู้สูงอายุ :
                                    การประยุกต์ใช้ในการพยาบาล</p>
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