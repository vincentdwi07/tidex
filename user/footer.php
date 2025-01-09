<head>
    <style>
        .footer {
            padding-block: 20px;
        }

        .footer img {
            width: 100px;
            filter: brightness(0) invert(1);
            margin-top: -22px;
        }

        .company {
            color: white;
            font-size: calc(0.7em + 0.2vw);
            font-weight: bold;
            margin-top: -20px;
        }

        .title {
            color: white;
            font-size: calc(1em + 0.2vw);
            font-weight: bold;
        }

        .contact {
            color: white;
        }

        .contact .row {
            margin-top: 10px;
        }

        .navigation a {
            color: white;
            text-decoration: none;
        }

        .footer-nav {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        .form input[type="text"] {
            background-color: #1A2125;
            outline: none;
            border: none;
            padding: 10px;
            background-position: 10px center;
            padding-inline: 40px;
            color: white;
        }

        .form input[type="text"]:focus,
        .form textarea:focus {
            border-bottom: 1px solid red;
            transition: 0.3s ease-in-out;
        }

        .form textarea {
            background-color: #1A2125;
            outline: none;
            border: none;
            padding: 10px;
            background-position: 10px center;
            padding-inline: 40px;
            color: white;
        }

        .form input[type="submit"] {
            background-color: red;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px;
            margin-top: 10px;
        }

        .navigation a:hover {
            color: red;
        }
    </style>
</head>

<body>
    <div class="footer bg-black px-md-3 px-1">
        <div class="row container mx-auto">
            <div class="col-lg-2 col-12 col-md-4 mb-5">
                <img src="./user/img/logo.svg" alt="">
                <div class="company">PT. Tidex Titan Persada</div>
            </div>
            <div class="col-lg-4 col-12 col-md-4 mb-5 contact">
                <div class="title">CONTACT US</div>
                <div class="row">
                    <div class="col-1">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="col-11">
                        <div class="contact-desc">Jl. Wonorejo Permai Utara Raya Blok BB, No. 577, Nirwana Eksekutif
                            Surabaya, Jawa Timur, Indonesia</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="col-11">
                        <div class="contact-desc">031-8782446</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="col-11">
                        <div class="contact-desc">info@tidex.co.id</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12 col-md-4 mb-5 navigation">
                <div class="title">NAVIGATION</div>
                <div class="footer-nav" style="margin-top: 10px;">
                    <a href="">HOME</a>
                    <a href="">PRODUCT AND SERVICE</a>
                    <!-- <a href="">PROJECT</a> -->
                    <a href="">NEWS</a>
                    <a href="">ABOUT US</a>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-5">
                <div class="title">GET IN TOUCH</div>
                <form action="" class="form">
                    <input type="text"
                        style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'16\' height=\'16\' fill=\'gray\' class=\'bi bi-person-fill\' viewBox=\'0 0 16 16\'%3E%3Cpath d=\'M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6\'/%3E%3C/svg%3E'); background-repeat: no-repeat;"
                        placeholder="Name">
                    <input type="text" placeholder="E-Mail"
                        style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'16\' height=\'16\' fill=\'gray\' class=\'bi bi-envelope-at-fill\' viewBox=\'0 0 16 16\'%3E%3Cpath d=\'M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671\'/%3E%3Cpath d=\'M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791\'/%3E%3C/svg%3E'); background-repeat: no-repeat;">

                    <textarea type="text"
                        style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'16\' height=\'16\' fill=\'gray\' class=\'bi bi-envelope-fill\' viewBox=\'0 0 16 16\'%3E%3Cpath d=\'M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z\'/%3E%3C/svg%3E'); background-repeat: no-repeat;"
                        placeholder="Message"></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
        </div>
        <div class="hr px-5 mt-4 text-light">
            <hr style="border-bottom: 1px solid white; opacity: 0.8;">
            <div style="text-align:end" class="text-secondary">
                Copyright &copy; 2024. PT. Tidex Titan Persada
            </div>
        </div>
    </div>
</body>