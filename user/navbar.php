<head>
    <style>
        .navbar {
            transition: transform 0.3s ease-in-out;
        }

        .invert {
            filter: brightness(0) invert(1);
        }

        .black-text {
            color: black;
        }

        .nav-item>a {
            z-index: 999;
            position: relative;
        }

        .nav-item>a::before {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 100%;
            background-color: red;
            content: "";
            transform: scaleX(0);
            transition: 0.3s ease-in-out;
        }

        .nav-item>a:hover::before {
            transform: scaleX(1);
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .btn {
            height: 100%;
            width: 40px;
            background-color: #25d366;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: 0;
            top: 0;
            margin-right: 25px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .btn:hover,
        .btn-circle:hover {
            background-color: green;
            transition: all 0.3s ease-in-out;
        }

        .btn-circle {
            height: 55%;
            width: 40px;
            background-color: #25d366;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: 0;
            top: 50;
            margin-right: 25px;
            border-radius: 50%;
            z-index: 999;
        }

        .dropdown-item:hover {
            color: red;
        }

        .dropdown-menu {
            display: none;
        }

        .dropdown-toggle:hover .dropdown-menu {
            display: block;
        }

        .nav-link{
            text-transform: uppercase;
        }

        .navbar-toggler{
            outline: none;
            border: none;
        }

        .nav-item-collapse{
            border-bottom: 1px solid white;
        }
        .nav-item-collapse a{
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            text-transform: uppercase;
        }

        .dropdown-menu-collapse {
            max-height: 0;
            transition: all 0.3s ease-out;
            overflow: hidden;
            padding-inline: 10px;
            width: 100%;
        }

        .show{
            max-height: 100vh;
            transition: all 0.3s ease-out;
            margin: 0 !important;
        }


        .dropdown-menu-collapse li{
            list-style: none;
            margin-bottom: 5px !important;
        }

        .dropdown-item-collapse{
            font-size: 0.95rem !important;
        }


    </style>
</head>

<nav class="navbar navbar-expand-lg fixed-top py-3 px-2">
    <div class="container-fluid">
        <a class="navbar-brand position-absolute" href="#">
            <img id="logo" src="./user/img/logo.svg" class="invert" style="width: 80px" alt="">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list" id="#btn-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" style="gap: 20px">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Product and Service
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="product.php?tabProduct=tab1">Infrastructure</a></li>
                        <li><a class="dropdown-item" href="product.php?tabProduct=tab2">Information Technology (IT) </a></li>
                        <li><a class="dropdown-item" href="product.php?tabProduct=tab3">
                                 Information Comunnication
                                Technology (ICT) </a>
                        </li>
                        <li><a class="dropdown-item" href="product.php?tabProduct=tab4">Internet of Things (IoT) </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="./project.php">Project</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="./news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="./about.php">About Us</a>
                </li>
            </ul>
        </div>
        <div class="btn d-none d-lg-flex p-0 ms-5 ">
            <p class="text-white m-0"><i class="bi bi-telephone-fill"></i></p>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-start border-0" style="width: 100vw !important;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-dark" data-bs-theme="dark" style="border-bottom: none !important;">
            <h5 class="offcanvas-title text-light" id="offcanvasExampleLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-theme="light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-dark" style="border-top: none !important; ">
            <ul class="navbar-nav mx-auto" style="gap: 20px">
                <li class="nav-item-collapse">
                    <a href="./index.php">Home</a>
                </li>
                <li class="nav-item-collapse">
                    <a href="#" id="navbarDropdown" role="button">
                            Product & Services <span><i class="bi bi-caret-down-fill"></i></span></a>
                    <ul class="dropdown-menu-collapse" id="#dropdownMenu">
                        <li><a class="dropdown-item-collapse mb-5" href="product.php?tabProduct=tab1">Infrastructure</a></li>
                        <li><a class="dropdown-item-collapse" href="product.php?tabProduct=tab2">Information Technology (IT) </a></li>
                        <li><a class="dropdown-item-collapse" href="product.php?tabProduct=tab3">
                                Information Comunnication
                                Technology (ICT) </a>
                        </li>
                        <li><a class="dropdown-item-collapse" href="product.php?tabProduct=tab4">Internet of Things (IoT) </a></li>
                    </ul>
                </li>
                <li class="nav-item-collapse">
                    <a href="./news.php">News</a>
                </li>
                <li class="nav-item-collapse">
                    <a href="./about.php">About Us</a>
                </li>
            </ul>
        </div>
</div>

<script>
    const navs = document.querySelectorAll('nav');
    const logo = document.querySelector('#logo');
    const navLinks = document.querySelectorAll('.nav-link');
    const btn = document.querySelector('.btn');
    const btn_menu = document.getElementById('#btn-menu');

    document.addEventListener("scroll", function () {
        if (window.scrollY > 10 && window.scrollY < window.innerHeight) {
            navs.forEach(nav => {
                nav.style.transform = "translateY(-100%)";
                nav.style.backgroundColor = "transparent";
                btn_menu.style.color = "white";
            });

            navLinks.forEach(link => {
                link.classList.remove('black-text');
                link.classList.add('text-light');
            });
        } else if (window.scrollY > window.innerHeight) {
            navs.forEach(nav => {
                nav.style.transform = "translateY(0)";
                nav.style.backgroundColor = "white";
                btn_menu.style.color = "black";

            });
            btn.classList.remove('btn');
            btn.classList.add('btn-circle');
            logo.classList.remove('invert');
            navLinks.forEach(link => {
                link.classList.remove('text-light');
                link.classList.add('black-text');
            });
        } else if (window.scrollY < 50) {
            navs.forEach(nav => {
                nav.style.transform = "translateY(0)";
                nav.style.backgroundColor = "transparent";
            });
            btn.classList.add('btn');
            btn.classList.remove('btn-circle');
            logo.classList.add('invert');
            navLinks.forEach(link => {
                link.classList.remove('black-text');
                link.classList.add('text-light');
            });
        }
    });


    const btnDropdownToggle = document.getElementById('navbarDropdown');
    const dropdownMenuContent = document.getElementById('#dropdownMenu');

    btnDropdownToggle.addEventListener('click', function(){
        console.log(dropdownMenuContent);
        dropdownMenuContent.classList.toggle('show');
    })
</script>