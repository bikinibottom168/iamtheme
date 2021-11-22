<!DOCTYPE html>
<html lang="en">
<head>
    <title>เว็บสำเร็จรูป รับทำเว็บหนัง รับทำเว็บผลบอลสด ช่องทีวีออนไลน์</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="รับทำเว็บดูหนังออนไลน์ เว็บผลอบลสด บริการช่องทีวีออนไลน์ ฟุตบอลสด ขายสคริปเว็บหนังสำเร็จรูป">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,600;1,100;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        html, body {
            font-family: 'Prompt', sans-serif;
        }
        .dropdown-toggle::after {
            display: none;
        }
        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            background-color: #0d6efd;
            transition: 0.2s;
            color: white;
        }
        .columns1 {
            margin: 0px auto;
            background-image: url(https://metamask.io/images/hero2.2.png);
            background-position: 100% 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-attachment: scroll;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent my-3">
            <div class="container">
                <a href="navbar-brand" href="#">
                    <img src="https://www.img.in.th/images/856d761b9bdaa4dbb30d231a5fe2f7fb.png" alt="" width="200px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="serviceDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Service</b>
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu rounded-3" id="dropdownservice" aria-labelledby="serviceDropdown">
                                <li>
                                    <a href="#" class="dropdown-item">เว็บดูหนังออนไลน์</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">เว็บผลบอลสด</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">เซิฟเวอร์หนัง</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">ช่องทีวีออนไลน์</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-dark dropdown-toggle" id="demoDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Demo
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu rounded-3" id="dropdowndemo" aria-labelledby="demoDropdown">
                                <li>
                                    <a href="#" class="dropdown-item">
                                        เว็บหนังออนไลน์
                                    </a>
                                </li>
                                <li><a href="" class="dropdown-item">เว็บดูอะนิเมะ</a></li>
                                <li><a href="" class="dropdown-item">เว็บเอวี</a></li>
                                <li>
                                    <a href="#" class="dropdown-item">
                                        เว็บผลบอลสด
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link text-dark">
                                แจ้งปัญหา
                            </a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link btn btn-warning text-white rounded-pill px-4" href="#contact">
                                ติดต่อเรา
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="mt-4">
        <div class="container gap-4">
            @yield('main')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
