<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>CEB ONLINE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="description" content="CEB ONLINE">

    <script>
        document.documentElement.className =
                document.documentElement.className.replace("no-js", "js");
    </script>

    @yield('head')

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

</head>

<body>

@yield('body')

@yield('scripts')

</body>

</html>