<!--
Template Name: Bitcoin Trade
Title: Bitcoin Trade - one page bootstrap website template bitcion website
Description: Bitcoin Trade a one page bootstrap website template suitable for creating your next bitcoin website.
Keyword: Bitcoin Trade bootstrap website template, one page bootstrap website template, cryptocurrency bootstrap website templates, bitcoin price bootstrap website template, bitcoin kurs bootstrap website template
Author URI: https://bootstrapwebtemplates.com/
Tags: bitcoin, bitcoin price, bitcoin kurs, onecoin, bitcoin mining, localbitcoins, ethereum, btc e, litecoin, free bitcoin, blockchain, coinbase, btc to usd, bitcoin miner, cryptocurrency, bitcoin wallet, bitcoin value, one page, onepage
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Bootstrap Website Templates">

    <title>GEOSOFT Drills Hydroconsult</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.lightbox.min.css') }}">

    <!-- Theme CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="{{ asset('images/geosoft.png') }}" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#buyrate">E-currency</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sellrate">Hydro Drills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

     <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="bwt-header-content">
                        <div class="bwt-header-content-inner">
                            <h1>Buy Sell E-currency Easily</h1>
                            <h2>E-currency Trade is the fastest and easiest way to Buy and Sell E-currencies. We guarantee fast transaction processing and the best  rates.</h2>
                            <a href="#about" class="btn btn-box btn-xl page-scroll">Know More About E-currency Trade</a>
                        </div>
                    </div>
                    <div class="bwt-click-to-bottom">
                <a href="#about" class="scroll">
                    <i class="fa  fa-chevron-down"></i>
                </a>
            </div>
                </div>
            </div>
        </div>
    </header>

<!--about-->
<section id="about" class="bwt-about text-left">
<div class="container">
<div class="row">
<div class="col-md-6"><h1 class="bwt-section-title text-uppercase">ABOUT HYDRO DRILLS CONSULT</h1>
<hr>
<h2>Powered by GEOSOFT</h2>
<p>We are aimed at providing safe, adequate and quality water supply in order to meet the growing demands of the population</p>
<p>With our simple and reliable low investment drilling technology for boreholes, we drill any material, including rock and it wont get troubled by boulders cobbles, or large gravel. Requires no mud , mud pits, mud pumps, tanks, drill rods, hammers or compressors.</p>
</div>





<div class="col-md-6">
<h1 class="bwt-section-title text-uppercase">ABOUT E-currency Trade</h1>
<hr>
<h2>Powered by GEOSOFT</h2>
<p>At Geosoft we buy and sell E-currencies at a very good rate. We are a reliable and fast source of funding and converting your E-currencies(Bitcoin,Perfect Money,Skrill, Paypal and many others) and Gift Cards(Itunes , Amazon , Walmart and many others) into Naira </p>
<p>We are known for our instant funding as our customers satisfaction is a top priority</p>


</div>
</div>
</div>
</section>
<!--//about-->

<!--Buy Rate-->
<section id="buyrate" class="bwt-buyrate text-center">
<div class="container text-center">
<h1 class="bwt-section-title text-uppercase">E-Currencies</h1>
<hr>
<div class="row">
<div class="col-sm-4">
<div class="bdr">
<h2>Bitcoin</h2>
<div class="image"><img src="{{ asset('images/btc.png') }}" class="img-responsive" alt=""></div>
<p><div class="button">Calculator</div><br>
<p>Bitcoin :
<input type="number" id="outputbitcoin"  placeholder="Bitcoin"  onkeyup="bitcoin_nairaConverter(this.value)">
</p>

<p>Naira :
<input type="number" id="outputbitcoin_Naira" placeholder="Naira" onkeyup="bitcoinConverter(this.value)">
</p>

</div>
</div>
<div class="col-sm-4">
<div class="bdr">
<h2>Etherum</h2>
<div class="image"><img src="{{ asset('images/ether.png') }}" class="img-responsive" alt=""></div>
<p><div class="button">Calculator</div><br>
<p>Etherum :
<input type="number" id="outputether"  placeholder="Etherum"  onkeyup="ether_nairaConverter(this.value)">
</p>

<p>Naira :
<input type="number" id="outputether_Naira" placeholder="Naira" onkeyup="etherConverter(this.value)">
</p>
</div>
</div>
<div class="col-sm-4">
<div class="bdr">
<h2>Perfect Money</h2>
<div class="image"><img src="{{ asset('images/pmoney.png') }}" class="img-responsive" alt=""></div>
<p><div class="button">Calculator</div><br>
<p>Perfectmoney :
<input type="number" id="outputpmoney"  placeholder="Perfectmoney"  onkeyup="pmoney_nairaConverter(this.value)">
</p>

<p>Naira :
<input type="number" id="outputpmoney_Naira" placeholder="Naira" onkeyup="pmoneyConverter(this.value)">
</p>

</div>
</div>
<div class="col-sm-4">
<div class="bdr">
<h2>PayPal</h2>
<div class="image"><img src="{{ asset('images/paypal.png') }}" class="img-responsive" alt=""></div>
<p><div class="button">Calculator</div><br>
<p>Paypal :
<input type="number" id="outputpaypal"  placeholder="Paypal"  onkeyup="paypal_nairaConverter(this.value)">
</p>

<p>Naira :
<input type="number" id="outputpaypal_Naira" placeholder="Naira" onkeyup="paypalConverter(this.value)">
</p>


</div>
</div>
<div class="col-sm-4">
<div class="bdr">
<h2>WebMoney</h2>
<div class="image"><img src="{{ asset('images/webmoney.png') }}" class="img-responsive" alt=""></div>
<p><div class="button">Calculator</div><br>
<p>Webmoney :
<input type="number" id="outputwebmoney"  placeholder="Webmoney"  onkeyup="webmoney_nairaConverter(this.value)">
</p>

<p>Naira :
<input type="number" id="outputwebmoney_Naira" placeholder="Naira" onkeyup="webmoneyConverter(this.value)">
</p>


</div>
</div>

<div class="col-sm-4">
<div class="bdr top-marg">
<h2>Itunes</h2>
<div class="image"><img src="{{ asset('images/itunes.jpg') }}" class="img-responsive" alt=""></div>
<p><div class="button">Calculator</div><br>
<p>Itunes :
<input type="number" id="outputItunes"  placeholder="Itunes"  onkeyup="nairaConverter(this.value)">
</p>

<p>Naira :
<input type="number" id="outputNaira" placeholder="Naira" onkeyup="itunesConverter(this.value)">
</p>


</div>
</div>

<div class="col-sm-4">
<div class="bdr top-marg">
<h2>Amazon</h2>
<div class="image"><img src="{{ asset('images/amazon.jpg') }}" class="img-responsive" alt=""></div>
<p><div class="button">Calculator</div><br>
<p>Amazon :
<input type="number" id="outputAmazon"  placeholder="Amazon"  onkeyup="amazonNairaConverter(this.value)">
</p>

<p>Naira :
<input type="number" id="outputamazon_Naira" placeholder="Naira" onkeyup="amazonConverter(this.value)">
</p>


</div>
</div>

</div>
</div>
</section>
<!--//Buy Rate-->

<!--Sell Rate-->
<section id="sellrate" class="bwt-sellrate text-left">
<div class="container text-center">
<h1 class="bwt-section-title text-uppercase">HYDRO DRILLS CONSULT</h1>
<hr>
<div class="row">
<div class="col-md-6">
<div class="bdr">
<img src="{{ asset('images/hydro.jpg') }}">
</div>
</div>
<div class="col-md-6">
<div class="bdr">
<h1>Our Services</h1>
<ul>
    <li>
        HydroGeographical Investigation
    </li>

    <li>
        BoreHole Drilling

    </li>

    <li>

        Water Inventory
    </li>

    <li>

        Goegraphical Services
    </li>

</ul>
</div>
</div>
</div>
</div>
</section>
<!--//Sell Rate-->

<!--contact-->
<section id="contact" class="bwt-contact text-left">
<div class="container text-center">
<h1 class="bwt-section-title text-uppercase">CONTACT US</h1>
<hr>
<div class="row">
<div class="col-md-4 top-marg">
<input name="" type="text" placeholder="Enter Your Name">
</div>
<div class="col-md-4 top-marg">
<input name="" type="text" placeholder="Enter Your Phone Number">
</div>
<div class="col-md-4 top-marg">
<input name="" type="email" placeholder="Enter Your Email ID">
</div>
<div class="col-md-12 top-marg-2">
<textarea name="" cols="" rows="3" placeholder="Enter Your Message"></textarea>
</div>
<div class="col-md-12 top-marg">
<input name="" type="submit" value="Send Message">
</div>
</div>
</div>
</section>

<footer class="bwt-footer">
<div class="container text-left">
<div class="row">

<div class="col-sm-12 col-md-4">
<div class="icon"><i class="fa fa-map-marker"></i></div>
<div class="icon-text">
<h3>Our Location</h3>
<p>Number 24 , Zone 7 ATAOJA ESTATE off east by pass, Osogbo Osun State, Nigeria
</p>
</div>
</div>

<div class="col-sm-12 col-md-4 md-top-marg">
<div class="icon"><i class="fa fa-phone"></i></div>
<div class="icon-text">
<h3>Phone Numbers</h3>
<p>+234 803-253-9942</p>
<p>+234 706-122-6113</p>
<p>+234 812-602-3658</p>
</div>
</div>

<div class="col-sm-12 col-md-4 md-top-marg">
<div class="icon"><i class="fa fa-envelope-o"></i></div>
<div class="icon-text">
<h3>E-Mail Address</h3>
<p>info@geosoft.com
</p>
</div>
</div>

</div>
</div>
</footer>

<div class="bwt-footer-copyright">
<div class="container">
<div class="row">

<div class="left-text">Designed by <a href="http://fb.me/adewale.b.temytope">Adewale Temitope Blessing</a></div>
</div>

</div>
</div>
</div>

<!--//contact-->

    <script>
        var bitcoinRate = {{ $rates->bitcoin }};
        var etherumRate = {{ $rates->etherum }};
        var paypalRate = {{ $rates->paypal }};
        var webmoneyRate = {{ $rates->webmoney }};
        var itunesRate = {{ $rates->itunes }};
        var perfectMoneyRate = {{ $rates->perfect_money }};
        var amazonRate = {{ $rates->amazon }};
    </script>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Lightbox JavaScript-->
    <script src="{{ asset('js/jquery.lightbox.min.js') }}"></script>
    <!-- Theme JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!--Conversion Rates-->
    <script src="{{ asset('js/rates.js') }}"></script>

</body>
</html>
