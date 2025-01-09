<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Tidex Titan Persada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./user/asset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .bi {
            margin-right: 5px;
        }
    </style>
</head>

<body onload="gettabProductFromUrl()">
    <?php include "./user/navbar.php" ?>

    <div class="news px-3">
        <div class="row container mx-auto">
            <div class="title mb-3">OUR PRODUCT AND SERVICE</div>
            <div class="tab px-0">
                <button class="tablinks" onclick="openCity('tab1')"><span><i
                            class="bi bi-building-fill"></i></span>Infrastructure</button>
                <button class="tablinks" onclick="openCity('tab2')"><span><i
                            class="bi bi-modem-fill"></i></span> Information Technology (IT)
                </button>
                <button class="tablinks" onclick="openCity('tab3')"><span><i
                            class="bi bi-cpu-fill"></i></span>Information Communication Technology (ICT)</button>
                <button class="tablinks" onclick="openCity('tab4')"><span><i class="bi bi-robot"></i></span>Internet of
                    Things (IoT)</button>
            </div>

            <div class="red-line"></div>

            <!-- INFRASTRUCTURE -->
            <div id="tab1" class="tabcontent">
                <!-- content 1 -->
                <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-wrap flex-md-nowrap">
                            <div class="col-12 col-md-5 p-0 order-1">
                                <div class="product-img" style="background-image: url('./user/product-service/infrastructure/scs.png')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">Structured Cable Systems</div>
                                <div class="product-desc">We offer a structured cable system that includes vertical and horizontal cabling up to the backbone. Our solution supports voice, data, and video through a single wiring system, adhering to international standards for multi-vendor environments. This approach ensures long-term cost savings and includes a 25-year warranty for added peace of mind.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/7.svg" alt="">
                                    <img src="./user/partner/33.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">
                <!-- content 2 -->
                <div class="product-content">
                    <div class="container">
                        <div class="row flex-wrap flex-md-nowrap ">
                        <div class="col-12 col-md-7 order-md-1 order-2 d-flex flex-column justify-content-center p-0 pe-md-4" style="gap: 10px;">
                                <div class="product-title">Gigabit Passive Optical Network (GPON)
                                </div>
                                <div class="product-desc">
                                Fiber-to-the-Home (FTTH) networks are highly demanded due to their ability to support higher speeds and long-distance data transmission. GPON solutions enhance these networks by reducing active equipment, supporting triple-play services (voice, data, and IP video), and enabling point-to-multipoint connections with higher downstream speeds.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/30.svg" alt="">
                                    <img src="./user/partner/24.svg" alt="">
                                </div>  
                            </div>
                            <div class="col-12 order-md-2 order-1 col-md-5 p-0">
                                <div class="product-img" style="background-image: url('./user/product-service/infrastructure/gpon.png')">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>



            <!-- INFORMATION TECHNOLOGY -->
            <div id="tab2" class="tabcontent">
                <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-wrap flex-md-nowrap ">
                            <div class="col-12 col-md-5 p-0 order-1">
                                <div class="product-img" style="background-image: url('./user/product-service/it/nw.png')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">Network Switch</div>
                                <div class="product-desc">The increasing bandwidth demands in network usage drive the development of advanced network devices, including Multi-Gig technology on switches to support devices like Access Point Gen.6 and IoT devices. Many Multi-Gig Switch units have been implemented alongside WiFi Gen.6 and other IT devices to meet these growing needs.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/26.svg" alt="">
                                    <img src="./user/partner/27.svg" alt="">
                                    <img src="./user/partner/32.svg" alt="">
                                    <img src="./user/partner/19.svg" alt="">
                                    <img src="./user/partner/5.svg" alt="">
                                    <img src="./user/partner/6.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

                <div class="product-content">
                    <div class="container">
                        <div class="row flex-wrap flex-md-nowrap ">
                        <div class="col-12 col-md-7 order-md-1 order-2 d-flex flex-column justify-content-center p-0 pe-md-4" style="gap: 10px;">
                                <div class="product-title">Access Point
                                </div>
                                <div class="product-desc">The increasing bandwidth demands in network usage drive the development of advanced network devices, including Multi-Gig technology on switches to support devices like Access Point Gen.6 and IoT devices. Many Multi-Gig Switch units have been implemented alongside WiFi Gen.6 and other IT devices to meet these growing needs.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                <img src="./user/partner/26.svg" alt="">
                                    <img src="./user/partner/27.svg" alt="">
                                    <img src="./user/partner/32.svg" alt="">
                                    <img src="./user/partner/19.svg" alt="">
                                    <img src="./user/partner/5.svg" alt="">
                                    <img src="./user/partner/6.svg" alt="">
                                </div>  
                            </div>
                            <div class="col-12 order-md-2 order-1 col-md-5 p-0 p-md-1 ">
                                <div class="product-img" style="background-image: url('./user/product-service/it/ap.png')">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-wrap flex-md-nowrap ">
                            <div class="col-12 col-md-5 p-0 order-1 p-0 p-md-1 ">
                                <div class="product-img" style="background-image: url('./user/product-service/it/ss.jpg')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">Server and Storage</div>
                                <div class="product-desc">The development of server systems must anticipate future needs with hyper-converged systems that integrate servers, storage, and virtualization. Storage systems should support scalable designs with compression to save capacity, while prioritizing automated redundancy for reliability.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/18.svg" alt="">
                                    <img src="./user/partner/23.svg" alt="">
                                    <img src="./user/partner/10.svg" alt="">
                                    <img src="./user/partner/19.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">


                <div class="product-content">
                    <div class="container">
                        <div class="row flex-wrap flex-md-nowrap ">
                        <div class="col-12 col-md-7 order-md-1 order-2 d-flex flex-column justify-content-center p-0 pe-md-4" style="gap: 10px;">
                                <div class="product-title">Hyper Converged Infrastructure (HCI)
                                </div>
                                <div class="product-desc">
                                The integration of servers and storage into a distributed infrastructure platform with intelligent software provides flexible building blocks, replacing traditional infrastructure that relied on separate servers, storage networks, and storage arrays</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/8.svg" alt="">
                                </div>  
                            </div>
                            <div class="col-12 order-md-2 order-1 col-md-5 p-0 p-md-1 ">
                                <div class="product-img" style="background-image: url('./user/product-service/it/hci.png')">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

            </div>



            <!-- INFORMATION COMMUNICATION TECHNOLOGY -->
            <div id="tab3" class="tabcontent">
                <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-wrap flex-md-nowrap ">
                            <div class="col-12 col-md-5 p-0 order-1">
                                <div class="product-img" style="background-image: url('./user/product-service/ict/nw.jpg')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">Network Security</div>
                                <div class="product-desc">Network security is highly dynamic, evolving continuously to meet technological demands. It addresses both external threats attempting to access the internal network and internal practices within the local network, covering areas such as internet connections, email, viruses, and hacking.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/12.svg" alt="">
                                    <img src="./user/partner/20.svg" alt="">
                                    <img src="./user/partner/2.svg" alt="">
                                    <img src="./user/partner/4.svg" alt="">
                                    <img src="./user/partner/14.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

                <div class="product-content">
                <div class="container">
                    <div class="row flex-wrap flex-md-nowrap ">
                        <div class="col-12 col-md-7 order-md-1 order-2 d-flex flex-column justify-content-center p-0 pe-md-4" style="gap: 10px;">
                                <div class="product-title">Integrated Security System</div>
                                <div class="product-desc">The important thing that becomes an important issue  when implementing a security system is to integrate so that the system can run more automatically, and easily but provides higher security. We have combined CCTV, Access Control, and Fire Alarm systems so that the system can run optimally.
                                </div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/15.svg" alt="">
                                    <img src="./user/partner/1.svg" alt="">
                                    <img src="./user/partner/28.svg" alt="">
                                    <img src="./user/partner/29.svg" alt="">
                                    <img src="./user/partner/16.svg" alt="">
                                    <img src="./user/partner/17.svg" alt="">
                                    <img src="./user/partner/21.svg" alt="">
                                </div>  
                            </div>
                            <div class="col-12 order-md-2 order-1 col-md-5 p-0">
                                <div class="product-img" style="background-image: url('./user/product-service/ict/iss.png')">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

                <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-wrap flex-md-nowrap ">
                            <div class="col-12 col-md-5 p-0 order-1">
                                <div class="product-img" style="background-image: url('./user/product-service/ict/it.png')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">IP Telephone / IP-PBX</div>
                                <div class="product-desc">
                                IP PBX phone systems use the internet to place and receive calls by converting analog voice signals into digital ones, routing them through a VoIP service provider. Key benefits include lower communication costs, cloud-based reliability, the ability to retain existing hardware with minimal setup, and easy scalability to add voice channels as needed.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/32.svg" alt="">
                                    <img src="./user/partner/31.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

                <div class="product-content">
                <div class="container">
                    <div class="row flex-wrap flex-md-nowrap ">
                        <div class="col-12 col-md-7 order-md-1 order-2 d-flex flex-column justify-content-center p-0 pe-md-4" style="gap: 10px;">
                                <div class="product-title">MATV IP-TV</div>
                                <div class="product-desc">Master Antenna Television (MATV) provides TV services to multiple outlets using a single antenna system, while Internet Protocol Television (IPTV) delivers TV services over packet-switched networks like LAN or the internet, replacing traditional terrestrial, satellite, and cable formats.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/13.svg" alt="">
                                </div>  
                            </div>
                            <div class="col-12 order-md-2 order-1 col-md-5 p-0">
                                <div class="product-img" style="background-image: url('./user/product-service/ict/matv.png')">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

                
                <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-wrap flex-md-nowrap ">
                            <div class="col-12 col-md-5 p-0 order-1">
                                <div class="product-img" style="background-image: url('./user/product-service/ict/avp.jpg')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">Audio-Video Phone</div>
                                <div class="product-desc">Intercom is a Customer Communications Platform that enables personalized communication with users through targeted content, behavior-driven messages, and conversational support. Additionally, we have implemented Audio-Video Phones in many apartments to enhance communication and coordination for residents.
</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/15.svg" alt="">
                                    <img src="./user/partner/3.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

                <div class="product-content">
                <div class="container">
                    <div class="row flex-wrap flex-md-nowrap ">
                        <div class="col-12 col-md-7 order-md-1 order-2 d-flex flex-column justify-content-center p-0 pe-md-4" style="gap: 10px;">
                                <div class="product-title">Display Technology Information System</div>
                                <div class="product-desc">Our queue system efficiently manages patient registrations, calls, and pharmacy drug queues, offering easy, informative, and measurable processes. We can also design a FIFO system integrated with Access Control, ensuring users follow procedures, promoting discipline, and maintaining system security.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/15.svg" alt="">
                                    <img src="./user/partner/25.svg" alt="">
                                    <img src="./user/partner/9.svg" alt="">
                                </div>  
                            </div>
                            <div class="col-12 order-md-2 order-1 col-md-5 p-0">
                                <div class="product-img" style="background-image: url('./user/product-service/ict/dtis.png')">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

                <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-wrap flex-md-nowrap ">
                            <div class="col-12 col-md-5 p-0 order-1">
                                <div class="product-img" style="background-image: url('./user/product-service/ict/qs.png')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">Queuing Systems – FIFO</div>
                                <div class="product-desc">We offer a structured cable system that includes vertical and horizontal cabling up to the backbone. Our solution supports voice, data, and video through a single wiring system, adhering to international standards for multi-vendor environments. This approach ensures long-term cost savings and includes a 25-year warranty for added peace of mind.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/11.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>


            </div>



            <!-- INTERNET OF THINGS -->
            <div id="tab4" class="tabcontent">
            <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-md-nowrap ">
                            <div class="col-12 col-md-5 p-0 order-1">
                                <div class="product-img" style="background-image: url('./user/product-service/iot/robot.png')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">Robot</div>
                                <div class="product-desc">Industrial robotic arms are automated machines used in manufacturing to perform tasks like assembly, welding, and packaging. They improve efficiency by automating repetitive tasks, ensuring precision, and reducing human error. With the ability to be programmed for various applications, these robots enhance productivity and safety in production lines.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/22.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-content">
                <div class="container">
                    <div class="row flex-md-nowrap ">
                        <div class="col-12 col-md-7 order-md-1 order-2 d-flex flex-column justify-content-center p-0 pe-md-4" style="gap: 10px;">
                                <div class="product-title">Building Automation System (BAS)</div>
                                <div class="product-desc">Building Automation Systems (BAS) integrate control systems for HVAC, lighting, smart home comfort, machines, and sensors. In the manufacturing industry, BAS is increasingly used in automation solutions, working alongside PLC systems and can also be developed with IoT systems for enhanced functionality.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/22.svg" alt="">
                                </div>  
                            </div>
                            <div class="col-12 order-md-2 order-1 col-md-5 p-0">
                                <div class="product-img" style="background-image: url('./user/product-service/iot/bas.png')">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <hr class="line-separator" style="background-color: white; height: 1.5px; opacity: 0.6;">

            <div class="product-content">
                    <div class="container" style="height: 100%;">
                        <div class="row flex-md-nowrap ">
                            <div class="col-12 col-md-5 p-0 order-1">
                                <div class="product-img" style="background-image: url('./user/product-service/iot/drone.png')">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 order-2 d-flex flex-column justify-content-center p-0 ps-md-4" style="gap: 10px;">
                                <div class="product-title">Drone</div>
                                <div class="product-desc">A drone is an unmanned aerial vehicle used for various purposes, including mapping, surveillance, and capturing images and videos. Equipped with advanced technology, drones allow for precise and efficient remote control, and can be integrated with various systems to enhance productivity and real-time data collection.</div>
                                <div class="product-logos d-flex" style="gap: 15px">
                                    <img src="./user/partner/22.svg" alt="">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php include "./user/footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./user/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function openCity(tabId) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabId).style.display = "block";
            document.querySelector('[onclick="openCity(\'' + tabId + '\')"]').classList.add("active");
        }


        function gettabProductFromUrl() {
            const urlParams = new URLSearchParams(window.location.search);
            const tabProduct = urlParams.get('tabProduct');
            openCity(tabProduct);
        }
    </script>
</body>

</html>