<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap"
            rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- <link rel="stylesheet" href="css/header.css" /> -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    </head>
    <body>
        <!-- Start Header -->
        <div class="header">
            <div class="header-section-right">
                <div>
                    <a href="#"><img src="{{asset('assets/image/logo.svg')}}" /></a>

                </div>
                <div class="info-detailss">
                    <div class="info-personal">
                        <div class="img-personal">
                            <img src="{{asset('assets/image/personal.svg')}}" alt="ee" />

                        </div>
                        <div class="name">
                            <span>خديجة محمد</span>
                            <span>طالب تمويل</span>
                        </div>
                    </div>
                    <a href="#" id="mmm"> <img src="{{asset('assets/image/drop.svg')}}" />
                    </a>

                </div>

            </div>

            <div class="header-section-left">
                <a href id="notification"><img src="{{asset('assets/image/notification.svg')}}" /></a>
                
                <div class="lang">
                    <!-- <span id="myParagraph">En</span>  -->
                    <a href="#" id="toggleBtn">EN</a>

                </div>

            </div>
        </div>

        <div class="bb">
            <ul id="itemList" class="ggg">
                <a href="#"><li>EN</li></a>
                <a href="#"><li>AR</li></a>
                <a href="#"><li>FR</li></a>
            </ul>
        </div>

        <div id="nottt" class="nott">
            <ul>
                <li>ooo</li>
                <li>ooo</li>
                <li>ooo</li>
                <li>ooo</li>
                <li>ooo</li>
            </ul>
        </div>
        <!-- End Header -->

        <!-- Start page -->
        <div class="page">
            <div class="sidebar">
                <div>
                    <ul>

                        <li>
                            <a href="#">
                                <img src="{{asset('assets/image/mos.svg')}}" />

                                <span>موّل مشترياتك</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="{{asset('assets/image/card.svg')}}" />

                                <span> المشتريات</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="{{asset('assets/image/payment.svg')}}" />

                                <span>معلومات الدفع</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="{{asset('assets/image/import.svg')}}" />

                                <span>الموردين</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="{{asset('assets/image/information.svg')}}" />

                                <span>معلوماتي</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="{{asset('assets/image/shakwa.svg')}}" />

                                <span>الشكاوي</span>
                            </a>
                        </li>

                    </ul>
                    <hr class="hrrr" />
                </div>
                <div class="about-themar">

                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{asset('assets/image/about.svg')}}" />

                                <span>عن ثمار</span>
                                <img src="{{asset('assets/image/nex.svg')}}" class="img-arrow"/>

                            </a>
                        </li>
                    </ul>

                </div>

                <div class="logout">

                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{asset('assets/image/logout.svg')}}" />

                                <span>تسجيل خروج</span>

                            </a>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- Container -->
            <div class="container">

        @yield('contain')
</div>
             <!-- End Container -->

        </div>
           </body>
</html>

<script>

    $(document).ready(function() {
      $("#toggleBtn").click(function() {
        $("#itemList").toggle();
      });
    
  
      $("#itemList li").click(function() {
        var selectedItem = $(this).text();
        $("#toggleBtn").text(selectedItem);
        $("#itemList").hide();
      });


 

    });

    
     </script>

 