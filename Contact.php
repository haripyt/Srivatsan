<?php
$submit=false;
if(isset($_POST['name']))
{
   $server="localhost";
   $username="root";
   $password="";

   $con =mysqli_connect($server,$username,$password);
   if(!$con){
     die("Connect failed due to" .mysqli_connect_error());

   }
   // echo "sucessfull";


   $email=$_POST['email'];
   $msg=$_POST['msg'];
   
  
   $sql="INSERT INTO `shopperstop`.`feedback` (`email`,`msg`) VALUES ('$email','$msg')";
   
  
   // echo $sql;

   if($con->query($sql)== true){
      $submit = true;
   }
   else{
      echo"ERROR: $sql <br> $con->error";
   }
   $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.png" />

    <link rel="stylesheet" type="text/css" href="1.css"
    />



</head>

<body class="animsition">

    <header class="header-v3">

        <div class="container-menu-desktop trans-03">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop p-l-45">

                    <a href="#" class="logo">
                        <script data-pagespeed-no-defer>
                            //<![CDATA[
                            (function() {
                                for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                        if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                        b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                    }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                                    var m = k[l];
                                    m in h || (h[m] = {});
                                    h = h[m]
                                }
                                var n = k[k.length - 1],
                                    p = h[n],
                                    q = p ? p : function(b) {
                                        var c;
                                        if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                                        c = this + "";
                                        if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                        b |= 0;
                                        for (var a = ""; b;)
                                            if (b & 1 && (a += c), b >>>= 1) c += c;
                                        return a
                                    };
                                q != p && null != q && g(h, n, {
                                    configurable: !0,
                                    writable: !0,
                                    value: q
                                });
                                var t = this;

                                function u(b, c) {
                                    var a = b.split("."),
                                        d = t;
                                    a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                    for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                                };

                                function v(b) {
                                    var c = b.length;
                                    if (0 < c) {
                                        for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                        return a
                                    }
                                    return []
                                };

                                function w(b) {
                                    var c = window;
                                    if (c.addEventListener) c.addEventListener("load", b, !1);
                                    else if (c.attachEvent) c.attachEvent("onload", b);
                                    else {
                                        var a = c.onload;
                                        c.onload = function() {
                                            b.call(this);
                                            a && a.call(this)
                                        }
                                    }
                                };
                                var x;

                                function y(b, c, a, d, e) {
                                    this.h = b;
                                    this.j = c;
                                    this.l = a;
                                    this.f = e;
                                    this.g = {
                                        height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                                        width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                                    };
                                    this.i = d;
                                    this.b = {};
                                    this.a = [];
                                    this.c = {}
                                }

                                function z(b, c) {
                                    var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                    if (a = e && !(e in b.c))
                                        if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                        else {
                                            d = c.getBoundingClientRect();
                                            var f = document.body;
                                            a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                            d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                            f = a.toString() + "," + d;
                                            b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                        }
                                    a && (b.a.push(e),
                                        b.c[e] = !0)
                                }
                                y.prototype.checkImageForCriticality = function(b) {
                                    b.getBoundingClientRect && z(this, b)
                                };
                                u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                                    x.checkImageForCriticality(b)
                                });
                                u("pagespeed.CriticalImages.checkCriticalImages", function() {
                                    A(x)
                                });

                                function A(b) {
                                    b.b = {};
                                    for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                                    if (a.length && a[0].getBoundingClientRect) {
                                        for (d = 0; c = a[d]; ++d) z(b, c);
                                        a = "oh=" + b.l;
                                        b.f && (a += "&n=" + b.f);
                                        if (c = !!b.a.length)
                                            for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                                var e = "," + encodeURIComponent(b.a[d]);
                                                131072 >= a.length + e.length && (a += e)
                                            }
                                        b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                                        C = a;
                                        if (c) {
                                            d = b.h;
                                            b = b.j;
                                            var f;
                                            if (window.XMLHttpRequest) f =
                                                new XMLHttpRequest;
                                            else if (window.ActiveXObject) try {
                                                f = new ActiveXObject("Msxml2.XMLHTTP")
                                            } catch (r) {
                                                try {
                                                    f = new ActiveXObject("Microsoft.XMLHTTP")
                                                } catch (D) {}
                                            }
                                            f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                        }
                                    }
                                }

                                function B() {
                                    var b = {},
                                        c;
                                    c = document.getElementsByTagName("IMG");
                                    if (!c.length) return {};
                                    var a = c[0];
                                    if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                    for (var d = 0; a = c[d]; ++d) {
                                        var e = a.getAttribute("data-pagespeed-url-hash");
                                        e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                            rw: a.width,
                                            rh: a.height,
                                            ow: a.naturalWidth,
                                            oh: a.naturalHeight
                                        })
                                    }
                                    return b
                                }
                                var C = "";
                                u("pagespeed.CriticalImages.getBeaconData", function() {
                                    return C
                                });
                                u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                                    var r = new y(b, c, a, e, f);
                                    x = r;
                                    d && w(function() {
                                        window.setTimeout(function() {
                                            A(r)
                                        }, 0)
                                    })
                                });
                            })();

                            pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', 'https://preview.colorlib.com/theme/cozastore/home-03.html', '-ilGEe-FWC', true, false, 'GQ2fCmDWmRM');
                            //]]>
                        </script>
                        <script type="text/javascript" style="display:none">
                            //<![CDATA[
                            window.__mirage2 = {
                                petok: "ac57a78d4e823635cb74ec2edaeb6a660fd42f9c-1631090132-1800"
                            };
                            //]]>
                        </script>
                        <script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                        <!-- <img data-cfsrc="images/icons/logo-02.png" alt="IMG-LOGO" data-pagespeed-url-hash="1081474911" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/icons/logo-02.png" alt="IMG-LOGO" data-pagespeed-url-hash="1081474911" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
                    </a> -->



                    <div class="wrap-menu-desktop how-shadow1" >
                       <nav class="limiter-menu-desktop container" style="margin-top:-50px">
                         <h4 style="color:black">Shoppers</h4><h5 style="margin-top:25px;">Stop</h6>
                        <ul class="main-menu" >
                            <li style="margin-top: -10px;" style="color:black;">
                                <a href="index.html" style="color:black" >Home</a>
                                
                            </li>
                            <li>
                                <a href="product.html" style="color:black">Shop</a>
                            </li>
                             <li>
                                <a href="men.html" style="color:black">Men</a>
                            </li>
                             <li>
                                <a href="women.html" style="color:black">Women</a>
                            </li>
                            <li>
                                <a href="about.html" style="color:black">About</a>
                            </li>
                            <li>
                                <a href="contact.html" style="color:black">Contact</a>
                            </li>
                        </ul>
                    </div>

                   
                </nav>
            </div>
        </div>


        <div class="wrap-header-mobile">

            <div class="logo-mobile">
                <a href="index.html"><h4 style="Color:black">Shoppers</h4><h5 style="margin-left: 60px;margin-top: -5px;">Stop</h6></a>
               
            </div>

            <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                <div class="flex-c-m h-full p-r-5">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
<span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <div class="menu-mobile" >
            
            <ul class="main-menu-m" >
                <li>
                    <a href="index.html">Home</a>
                   
                    <span class="arrow-main-menu-m">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
                </li>
                <li>
                    <a href="product.html">Shop</a>
                </li>
                <li>
                    <a href="men.html">Men</a>
                </li>
                <li>
                    <a href="women.html">Women</a>
                </li>
                
                
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div><br><br><br><br><br><br>


 <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image:url(https://www.axisbank.com/images/default-source/revamp_new/contact-us/contactus.jpg)">
<h2 class="ltext-105 cl0 txt-center">
Contact
</h2>
</section>

<section class="bg0 p-t-104 p-b-116">
<div class="container">
<div class="flex-w flex-tr">
                    <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action='Contact.php' >
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                    Send Us A Message
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
                    <img class="how-pos4 pointer-none" src="./Contact_files/xicon-email.png.pagespeed.ic.46uVGPLVWK.webp" alt="ICON">
                    </div>
                    <div class="bor8 m-b-30">
                    <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
                    </div>
                     <?php
             if($submit == true){
             echo"<div class='alert alert-success'>Thank You for your feedback. Happy to deliver you in future. Explore Summer Offer.</div>";
             }
             ?> 
               
                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                    Submit
                    </button><br>

                <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer"><a href="index.html" style="color:white">Return to homepage</a></button>  
                    </form>
                    </div>
<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
<div class="flex-w w-full p-b-42">
<span class="fs-18 cl5 txt-center size-211">
<span class="lnr lnr-map-marker"></span>
</span>
<div class="size-212 p-t-2">
<span class="mtext-110 cl2">
Address
</span>
<p class="stext-115 cl6 size-213 p-t-18">
 Jawaharlal Nehru Rd, Thirumangalam, Anna Nagar, Chennai, Tamil Nadu 600040
</p>
</div>
</div>
<div class="flex-w w-full p-b-42">
<span class="fs-18 cl5 txt-center size-211">
<span class="lnr lnr-phone-handset"></span>
</span>
<div class="size-212 p-t-2">
<span class="mtext-110 cl2">
Lets Talk
</span>
<p class="stext-115 cl1 size-213 p-t-18">
9800123687
</p>
</div>
</div>
<div class="flex-w w-full">
<span class="fs-18 cl5 txt-center size-211">
<span class="lnr lnr-envelope"></span>
</span>
<div class="size-212 p-t-2">
<span class="mtext-110 cl2">
Sale Support
</span>
<p class="stext-115 cl1 size-213 p-t-18">
shoppers_stop@gmail.com
</p>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="map">
    <h2 class="ltext-105 cl0 txt-center" style="color:black">
Location
</h2>
<iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.2938856240203!2d80.19494331433516!3d13.080551716018523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526402be882bef%3A0xad2f3f45016d6710!2sVR%20Chennai!5e0!3m2!1sen!2sin!4v1631167880379!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
    
   



    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>
                    <ul>
                        <li class="p-b-10">
                            <a href="women.html" class="stext-107 cl7 hov-cl1 trans-04">
Women
</a>
                        </li>
                        <li class="p-b-10">
                            <a href="men.html" class="stext-107 cl7 hov-cl1 trans-04">
Men
</a>
                        </li>
                        <li class="p-b-10">
                            <a href="product.html" class="stext-107 cl7 hov-cl1 trans-04">
Shoes
</a>
                        </li>
                        <li class="p-b-10">
                            <a href="product.html" class="stext-107 cl7 hov-cl1 trans-04">
Watches
</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>
                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Track Order
</a>
                        </li>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Returns
</a>
                        </li>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Shipping
</a>
                        </li>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
FAQs
</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>
                    <p class="stext-107 cl7 size-201">
                        
                         VR MALL,ANNA NAGAR,CHENNAI<br><br>
                         9678166879<br><br>
                         shoppers_stop@gmail.com

                    </p>
                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-facebook"></i>
</a>
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-instagram"></i>
</a>
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-pinterest-p"></i>
</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Mail Us
                    </h4>
                    <form >
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>
                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
Send
</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
<img data-cfsrc="images/icons/icon-pay-01.png" alt="ICON-PAY" data-pagespeed-url-hash="1669214741" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/icons/icon-pay-01.png" alt="ICON-PAY" data-pagespeed-url-hash="1669214741" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
</a>
                    <a href="#" class="m-all-1">
<img data-cfsrc="images/icons/icon-pay-02.png" alt="ICON-PAY" data-pagespeed-url-hash="1963714662" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/icons/icon-pay-02.png" alt="ICON-PAY" data-pagespeed-url-hash="1963714662" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
</a>
                    <a href="#" class="m-all-1">
<img data-cfsrc="images/icons/icon-pay-03.png" alt="ICON-PAY" data-pagespeed-url-hash="2258214583" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/icons/icon-pay-03.png" alt="ICON-PAY" data-pagespeed-url-hash="2258214583" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
</a>
                    <a href="#" class="m-all-1">
<img data-cfsrc="images/icons/icon-pay-04.png" alt="ICON-PAY" data-pagespeed-url-hash="2552714504" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/icons/icon-pay-04.png" alt="ICON-PAY" data-pagespeed-url-hash="2552714504" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
</a>
                    <a href="#" class="m-all-1">
<img data-cfsrc="images/icons/icon-pay-05.png" alt="ICON-PAY" data-pagespeed-url-hash="2847214425" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/icons/icon-pay-05.png" alt="ICON-PAY" data-pagespeed-url-hash="2847214425" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
</a>
                </div>
                <p class="stext-107 cl6 txt-center">

                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This website is made by <a href="https://www.instagram.com/srivatsan29/" target="_blank">Sri Vatsan</a>

                </p>
            </div>
        </div>
    </footer>

    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
<i class="zmdi zmdi-chevron-up"></i>
</span>
    </div>

    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
<img data-cfsrc="images/icons/icon-close.png" alt="CLOSE" data-pagespeed-url-hash="4109876151" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/icons/icon-close.png" alt="CLOSE" data-pagespeed-url-hash="4109876151" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
</button>
                <div class="row">
                    <div class="col-md-6 col-lg-7 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img data-cfsrc="images/product-detail-01.jpg" alt="IMG-PRODUCT" data-pagespeed-url-hash="4262103647" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/product-detail-01.jpg" alt="IMG-PRODUCT" data-pagespeed-url-hash="4262103647" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
<i class="fa fa-expand"></i>
</a>
                                        </div>
                                    </div>
                                    <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img data-cfsrc="images/product-detail-02.jpg" alt="IMG-PRODUCT" data-pagespeed-url-hash="261636272" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/product-detail-02.jpg" alt="IMG-PRODUCT" data-pagespeed-url-hash="261636272" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
<i class="fa fa-expand"></i>
</a>
                                        </div>
                                    </div>
                                    <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img data-cfsrc="images/product-detail-03.jpg" alt="IMG-PRODUCT" data-pagespeed-url-hash="556136193" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="display:none;visibility:hidden;"><noscript><img src="images/product-detail-03.jpg" alt="IMG-PRODUCT" data-pagespeed-url-hash="556136193" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></noscript>
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
<i class="fa fa-expand"></i>
</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Lightweight Jacket
                            </h4>
                            <span class="mtext-106 cl2">
$58.79
</span>
                            <p class="stext-102 cl3 p-t-23">
                                Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                            </p>

                            <div class="p-t-33">
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Size
                                    </div>
                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
<option>Choose an option</option>
<option>Size S</option>
<option>Size M</option>
<option>Size L</option>
<option>Size XL</option>
</select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Color
                                    </div>
                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
<option>Choose an option</option>
<option>Red</option>
<option>Blue</option>
<option>White</option>
<option>Grey</option>
</select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-204 flex-w flex-m respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
Add to cart
</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                <div class="flex-m bor9 p-r-10 m-r-11">
                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
<i class="zmdi zmdi-favorite"></i>
</a>
                                </div>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
<i class="fa fa-facebook"></i>
</a>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
<i class="fa fa-twitter"></i>
</a>
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
<i class="fa fa-google-plus"></i>
</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition,_js,_animsition.min.js+bootstrap,_js,_popper.js.pagespeed.jc.ED2vGulZGz.js"></script>
    <script>
        eval(mod_pagespeed_8JawVzd5Oy);
    </script>

    <script>
        eval(mod_pagespeed_$PacBXQ5pm);
    </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>

    <script src="vendor,_slick,_slick.min.js+js,_slick-custom.js+vendor,_parallax100,_parallax100.js.pagespeed.jc.gjiX9dX1GK.js"></script>
    <script>
        eval(mod_pagespeed_Z6dhgItSiH);
    </script>
    <script>
        eval(mod_pagespeed_jjvC8YlSkl);
    </script>

    <script>
        eval(mod_pagespeed_Uv866_6dUG);
    </script>
    <script>
        $('.parallax100').parallax100();
    </script>

    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>

    <script src="vendor/isotope,_isotope.pkgd.min.js+sweetalert,_sweetalert.min.js.pagespeed.jc.4v0LQHF1JD.js"></script>
    <script>
        eval(mod_pagespeed_9syktgbIeO);
    </script>

    <script>
        eval(mod_pagespeed_i148H$vDXF);
    </script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>

    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>

    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"68b6d80e8efc3983","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
</body>

</html>