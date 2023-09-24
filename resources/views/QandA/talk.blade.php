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
                        <div class="container m-5">

                            <div class="p-3 bg-dark bg-opacity-10 border border-dark  rounded-4 mb-5">

                                <h1><b>{{$Question->Question}}</b></h1>
                                <p class="text-secondary">{{$Question->Content}}</p>

                            </div>
                            <div class="my-3">
                                <form action="{{route('addRmessage')}}" method="post">
                                    @csrf


                                    <input type="hidden" name="q_id" value="{{$Question->id}}" />
                                    <button type="button" class="btn mb-3" style="background-color:#018ABE"
                                        data-bs-toggle="modal" data-bs-target="#addQuestion">
                                        ตอบกลับกระทู้
                                    </button>
                                    @php($i=1)
                                    @foreach($Message as $row )
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            ข้อความตอบกลับที่ {{$i++}}
                                        </div>
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                {{$row->Rmessage}}
                                            </blockquote>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="modal fade" id="addQuestion" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        พิมพ์ข้อความตอบกลับ</h1>

                                                </div>
                                                <div class="modal-body text-start">

                                                    <label for="exampleFormControlTextarea1" class="form-label">
                                                    </label>
                                                    <textarea class="form-control" name="Rmessage" rows="3"></textarea>
                                                    @error('Rmessage')
                                                    <span class="text-danger my-1">{{$message}}</span>
                                                    @enderror


                                                    <!-- <div class="my-2">
                                                        <label for="MPassword">รหัสผ่าน </label>
                                                        <input class="form-control" type="password" name="MPassword"
                                                            placeholder="ป้อนรหัสผ่านเพื่อสามารถแก้ไขกระทู้หรือลบกระทู้">


                                                    </div> -->



                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                                    <input type="submit" value="ตอบกลับ" class="btn btn-primary">
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