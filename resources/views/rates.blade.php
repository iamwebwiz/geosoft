<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome  Home Admin</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{asset('admin/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/form-elements.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/ico/favicon.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('admin/assets/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('admin/assets/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('admin/assets/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('admin/assets/ico/apple-touch-icon-57-precomposed.png')}}">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Update Your </strong> Exchange Rates</h1>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">

                            </div>
                            <div class="form-bottom">
                                <form role="form" action="{{ route('updateRates') }}" method="post" class="login-form">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <div class="form-group">
                                        <label>Bitcoin</label>
                                        <input type="text" name="bitcoin" placeholder="Bitcoin" class="form-username form-control"
                                        value="{{ $rates->bitcoin }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Etherum</label>
                                        <input type="text" name="etherum" placeholder="Etherum" class="form-password form-control"
                                        value="{{ $rates->etherum }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Paypal</label>
                                        <input type="text" name="paypal" placeholder="Paypal" class="form-password form-control"
                                        value="{{ $rates->paypal }}">
                                    </div>

                                    <div class="form-group">
                                        <label>WebMoney</label>
                                        <input type="text" name="webmoney" placeholder="WebMoney" class="form-password form-control"
                                        value="{{ $rates->webmoney }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Itunes</label>
                                        <input type="text" name="itunes" placeholder="Itunes" class="form-password form-control"
                                        value="{{ $rates->itunes }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Perfect Money</label>
                                        <input type="text" name="perfect_money" placeholder="Perfect Money" class="form-password form-control"
                                        value="{{ $rates->perfect_money }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Amazon</label>
                                        <input type="text" name="amazon" placeholder="Amazon" class="form-password form-control"
                                        value="{{ $rates->amazon }}">
                                    </div>


                                    <button type="submit" class="btn">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                            <h3>...or login with:</h3>
                            <div class="social-login-buttons">
                                <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                                <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-twitter"></i> Twitter
                                </a>
                                <a class="btn btn-link-2" href="#">
                                    <i class="fa fa-google-plus"></i> Google Plus
                                </a>
                            </div>
                        </div>
                    </div>
                    -->
<br>
<br>
<br>

                    <div class="bwt-footer-copyright">
<div class="container">
<div class="row">

<div class="left-text">Designed by <a href="http://fb.me/adewale.b.temytope">Adewale Temitope Blessing</a></div>
</div>

</div>
</div>
</div>
                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="{{ asset('admin/assets/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('admin/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
