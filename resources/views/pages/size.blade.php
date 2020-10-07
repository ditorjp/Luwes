<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->


    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">

    <!--CSS MAS BRO-->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        #mc_embed_signup {
            background: #fff;
            clear: left;
            font: 14px Helvetica, Arial, sans-serif;
        }

        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
    <link rel="stylesheet" href="css/landingPage.css" />
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">



    <title>LuwesAndCo</title>
</head>

<body style="overflow-x: hidden;">
    <!--Awal Navbar-->
    <div id="menu-btn" class="d-block d-md-none" onclick="coba()">
        <div class="menu-btn__burger"></div>
    </div>
    <div id="sidebar">

        <div class="nav-link w-100 d-block" style="margin-top:100px">
            <a class="nav-item nav-link active" href="">Home<span class="sr-only">(current)</span></a>
            <br>
            <a class="nav-item nav-link active" href="catalogue.html">product<span class="sr-only">(current)</span></a>
        </div>
    </div>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-luwes  fixed-top">
        <a class="navbar-brand d-lg-none d-block" href="#">
            <img src="img/brand.svg" width="120" class="d-inline-block align-top mx-5" alt="" loading="lazy" />
        </a>


        <div class="collapse d-none navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100 justify-content-center">
                <a class="nav-item nav-link active d-md-flex align-self-md-center" href="">home <span class="sr-only">(current)</span></a>
                <a class="navbar-brand d-md-block d-none" href="#">
                    <img src="img/brand.svg" width="120" class="d-inline-block align-top mx-5" alt="" loading="lazy" />
                </a>
                <a class="nav-item nav-link active d-md-flex align-self-md-center" href="catalogue.html">product <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </nav>
    <!--Akhir Navbar-->


    <main>
        <section style="margin-bottom: 100px;">
            <div class="container produk">
                <div class="row mt-md-5 mt-0">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <img src="/img/IMG_1805@2x.png" class="img-product img-fluid" alt="" />
                    </div>
                    <div class="col-md-5 item">
                        <h1>Daisy Dress</h1>
                        <h3>Rp 350.000</h3>
                        <form class="size" action="index.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <p class="text-size mt-5 mt-md-3">Size</p>

                                    <div class="form-size">
                                        <input type="radio" name="size" value="small" id="small" checked />
                                        <label class="py-1" for="small">S</label>
                                        <input type="radio" name="size" value="medium" id="medium" />
                                        <label class="py-1" for="medium">M</label>
                                        <input type="radio" name="size" value="large" id="large" />
                                        <label class="py-1" for="large">L</label>
                                        <input type="radio" name="size" value="extra large" id="extra-large" />
                                        <label class="py-1" for="extra-large">XL</label>
                                        <br>
                                        <small>
                                            <a href="sizeguide.html" class="size-chart">Size Chart<i class="ml-2 fas fa-ruler-combined"></i></a>
                                        </small>
                                        <div class="mt-3 mt-md-0 d-block d-md-none"><button type="submit" class=" btn btn-md btn-primary btn-order" style="color: #F2E1CF;">Order</button>
                                            <a class="btn btn-md btn-outline-primary btn-cons mt-1" href="https://api.whatsapp.com/send?phone=6281333550157&text=Aku%20konsul%20dong%20">Consultation</a>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="d-md-flex d-none justify-content-md-start justify-content-center">
                                <div class="bungkus-btn">
                                    <button type="submit" class=" btn btn-md btn-primary btn-order" style="color: #F2E1CF;">Order</button>
                                    <br>
                                    <a class="btn btn-md btn-outline-primary btn-cons mt-1" href="https://api.whatsapp.com/send?phone=6281333550157&text=Aku%20konsul%20dong%20">Consultation</a>
                                </div>
                            </div>
                            <h5 class="mt-5" style="border-bottom: 2px solid #9b6053;">Description</h5>
                            <p>Daisy Dress Wrap yourself in this flirty and feminine wrap dress.. The most perfect little dress for
                                brunch dates and parties!</p>
                        </form>
                    </div>


                </div>
                <div class="col-md-1"></div>
            </div>
            </div>
        </section>
        <section style="height: 100vh;">
            <h1 class="text-judul mt-5" style="text-align: center;">You may also like</h1>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-md-3 ">
                        <img src="/img/dragontop.png" class="img-fluid" alt="">

                        <h5 class="d-block text-center">Cher Tank</h5>
                        <h6 class=" text-center">Rp 119.000</h6>

                    </div>
                    <div class="col-md-3 ">
                        <img src="/img/loveytop.png" class="img-fluid" alt="">

                        <h5 class="d-block text-center">Cher Tank</h5>
                        <h6 class=" text-center">Rp 119.000</h6>

                    </div>
                    <div class="col-md-3 ">
                        <img src="/img/pinkytop.png" class="img-fluid" alt="">

                        <h5 class="d-block text-center">Cher Tank</h5>
                        <h6 class=" text-center">Rp 119.000</h6>

                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- Awal Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-xs-6 col-md-3">
                    <h5>Our Store</h5>
                    <br>
                    <ul class="footer-links">
                        <li><a href="landingPage.html">Home</a></li>
                        <li><a href="produk.html">Products</a></li>
                        <li><a href="produk.html">Pre-Order</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h5>Help & Support</h5>
                    <br>
                    <ul class="footer-links">
                        <li><a href="https://www.instagram.com/luwesandco/">Contact</a></li>
                        <li><a href="sizeguide.html">FAQ</a></li>
                        <li><a href="sizeguide.html">Size Guide</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-6">
                    <h5>Join Our Mailing List</h5>
                    <p class="text-justify">
                        <div id="mc_embed_signup">
                            <form action="https://gmail.us17.list-manage.com/subscribe/post?u=a98f2c604376557425024927c&amp;id=4d9aaee470" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <h2>Subscribe</h2>
                                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                    <div class="mc-field-group">
                                        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                                        </label>
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                    </div>
                                    <div class="mc-field-group">
                                        <label for="mce-FNAME">First Name </label>
                                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                    </div>
                                    <div class="mc-field-group">
                                        <label for="mce-LNAME">Last Name </label>
                                        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                    </div>
                                    <div class="mc-field-group size1of2">
                                        <label for="mce-BIRTHDAY-month">Birthday </label>
                                        <div class="datefield">
                                            <span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> /
                                            <span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span>
                                            <span class="small-meta nowrap">( mm / dd )</span>
                                        </div>
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a98f2c604376557425024927c_4d9aaee470" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                    </p>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-4 col-sm-6 col-xs-12">
                    <p class="copyright-text ">LuwesAndCo &copy; 2020 All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Akhir Footer -->
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>
        (function($) {
            window.fnames = new Array();
            window.ftypes = new Array();
            fnames[0] = 'EMAIL';
            ftypes[0] = 'email';
            fnames[1] = 'FNAME';
            ftypes[1] = 'text';
            fnames[2] = 'LNAME';
            ftypes[2] = 'text';
            fnames[3] = 'ADDRESS';
            ftypes[3] = 'address';
            fnames[4] = 'PHONE';
            ftypes[4] = 'phone';
            fnames[5] = 'BIRTHDAY';
            ftypes[5] = 'birthday';
        }(jQuery));
        var $mcj = jQuery.noConflict(true);
    </script>
    <script>
        function coba() {
            document.getElementById("sidebar").classList.toggle("active");

            document.getElementById("menu-btn").classList.toggle("open");
        }
    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>