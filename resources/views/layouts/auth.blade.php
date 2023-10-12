<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image"
        content="https://yashadmin.dexignzone.com/yashadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ env('APP_NAME') }}</title>
    <link href="/css/app.css" rel="stylesheet">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body class="vh-100" style="background-color: #5e72e4; background-position:center;">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div id="app">
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="/assets/vendor/global/global.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/deznav-init.js"></script>
    <script src="/js/app.js"></script>

</body>

</html>
