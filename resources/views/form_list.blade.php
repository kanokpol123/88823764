<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SE - CAMP#11</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@200;400;500;700;900&display=swap"
        rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Noto Sans Thai', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">OSSD - Open Source Software Developers</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" aria-current="page">Home </a></li>&nbsp&nbsp&nbsp&nbsp
                <li class="nav-item"><a href="/camp-form-list" class="nav-link active" aria-current="page">Form list</a>
                </li>&nbsp&nbsp&nbsp&nbsp
                <li class="nav-item"><a href="/about-me" aria-current="page">About me</a></li>
            </ul>
        </header>

        <!---------------form-list-->
        <form action="/my-form" method="post">
            @csrf
            <!--section 1 -->
            <div class="information">
                <!--name -->
                <div class="form-name">
                    <label for="inputName">ชื่อ</label>
                    <input type="name" class="form-control" id="inputName" name="name" placeholder="กรุณาใส่ชื่อ">
                </div>
                <!--lastname -->
                <div class="form-lastname">
                    <label for="inputLastname">นามสกุล</label>
                    <input type="lastname" class="form-control" id="inputLastname" name="lastname"
                        placeholder="กรุณาใส่นามสกุล">
                </div>
                <!--radioGender -->
                <div class="form-gender">
                    <label for="inputGender">เพศ</label>
                    <div class="form-men">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            ชาย
                        </label>
                    </div>
                    <div class="form-women">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            หญิง
                        </label>
                    </div>
                </div>

                <!--datepicker -->
                <div class="form-calendar">
                    <label for="inputCalendar">วันเดือนปีเกิด</label>
                    <input class="form-control" type="date" id="birthday" name="birthday">
                </div>

                <!--email -->
                <div class="form-email">
                    <label for="inputEmail4">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" name="email"
                        placeholder="กรุณาใส่Email">
                </div>

                <!--cluster -->
                <div class="form-cluster">
                    <label for="inputCluster">มกุล</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>เลือก</option>
                        <option value="1">มกุล 0</option>
                        <option value="2">มกุล 1</option>
                        <option value="3">มกุล 2</option>
                        <option value="4">มกุล 3</option>
                        <option value="5">มกุล 4</option>
                        <option value="6">มกุล 5</option>
                        <option value="7">มกุล 6</option>
                        <option value="8">มกุล 7</option>
                        <option value="9">มกุล 8</option>
                        <option value="10">มกุล 9</option>
                      </select>
                </div>
                <!--detail -->
                <div class="detail">
                    <label for="inutDetail" class="form-label">รายละเอียดอื่นๆ</label>
                    <textarea class="form-control" id="detail" rows="3"></textarea>
                  </div>


            </div>
            <!--section 2 -->
            <div class="form-component">
                <!--remember -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        ยืนยันการเพิ่มข้อมูล
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <!--end-->

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-body-secondary">มกุล 1 © 2023</span>
            </div>

            <div class="nav col-md-4 justify-content-end list-unstyled d-flex">
                รหัสนิสิต 64160267 ชื่อ กนกพล พรหมทา
            </div>
        </footer><footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2019 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>




    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
