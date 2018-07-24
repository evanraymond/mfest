<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>mFest</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <style>
        body, html {
            height: 100%;
        }

        body {
            background: url('http://www.designbolts.com/wp-content/uploads/2012/11/Free-Stressed-linen-patterns.jpg') repeat;
            color: #fefefe;
            /*font-family: 'Gotham SSm',sans-serif; */
            font-family: 'Assistant', sans-serif;
        }

        a {
            color: #fefefe;
        }

        ul {
            padding: 0;
            margin: 0;
        }

        header {
            z-index: 1000;
            position: absolute;
            top: 0;
            left: 0;

            width: 100%;
            height: 100px;

            color: #246bbf;
        }

        header > div {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;

            margin: 0 auto;
            max-width: 1200px;
            padding-top: 20px;
        }

        header .logo {
            margin-left: 10px;
            font-size: 2.6em;
        }

        header a {
            letter-spacing: .1em;
            color: #f1f1f1;
            text-decoration: none;
        }

        header ul {
            margin: 0;
            margin-right: 10px;
        }

        header ul li {
            display: inline-block;

            margin-right: 10px;
        }

        aside {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;

            width: 280px;
            padding-top: 160px;

            background-color: #dedede;
        }

        #content {
            margin: 100px auto 30px;
            max-width: 1200px;

            background-color: #000;
        }

        main {
            padding-left: 280px;
        }

        section {
            position: relative;
            overflow: auto;
            box-sizing: border-box;
            padding: 0;
        }

        .container {
            margin: 0 auto;
            padding: 20px 80px;
            max-width: 1200px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin-bottom: 0;
            font-size: 12px;
            font-weight: 400;
            line-height: 1.42857143;
            letter-spacing: .091em;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            background-color: #246bbf;
            color: #f1f1f1;
            text-decoration: none;
            text-transform: uppercase;

            transition: color 300ms cubic-bezier(.694,0,.335,1),background-color 300ms cubic-bezier(.694,0,.335,1)
        }

        .btn:hover {
            background-color: #3e87de;
        }

        footer {
            padding: 60px 0 10px;

            text-align: center;
            font-size: 12px;
            color: #dedede;
        }

        footer a {
            color: #246bbf;
            text-decoration: none;
        }

        footer ul li {
            display: inline-block;

            margin: 0 6px;
        }

        #fests .fest img {
            max-height: 160px;
            max-width: 600px;
            width: 100%;
        }

        .fest {
            text-align: center;
        }

        .fest h2 a, #fest h1 {
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: .3em;
        }

        .fest::after  {
            display: block;
            margin: 20px 0;
            content: "";
            height: 10px;
            background-image: url("data:image/svg+xml,%3Csvg width='10' height='10' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='#141415' fill-rule='evenodd'%3E%3Cpath d='M0 0l40 40V30L10 0M0 40h10L0 30'/%3E%3C/g%3E%3C/svg%3E");
            visibility: visible;
        }

        #fest {
            text-align: center;
        }

        #fest .logo {
            max-height: 250px;
        }

        #fest .band img {
            height: 100px;
        }

        #fest .band {
            display: inline-block;
        }

        #fest .band a {
            font-size: 20px;
        }

        #band {
            text-align: center;
        }

        #band .logo {
            max-height: 250px;
        }

        #band .albums {
            text-align: left;
        }

        #band .albums .album img {
            display: inline-block;
            vertical-align: middle;

            width: 200px;
        }

        #band .albums .album .info {
            display: inline-block;
            vertical-align: middle;
        }

        .schedule {
            margin: 0 auto;

            border: 1px solid #363636;
        }

        .schedule a {
            text-decoration: none;
        }

        .schedule img {
            max-width: 100px;
            max-height: 60px;
        }

        .schedule tr td {
            text-align: center;
        }

        .schedule tr td:nth-child(3) {
            width: 200px;
        }

        .options {
            position: absolute;
            top: 10px;
            right: 10px;

            text-align: right;
        }

        .options select {
            margin-left: 2px;
            padding: 6px 8px;
            background-color: #000;
            border: 1px solid #484848;

            color: #dedede;
        }

        h1 {
            margin: 0;
            padding-left: 10px;

            font-size: 2.2em;
            line-height: 2.2em;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: .25em;
        }

    </style>
</head>

<body>
<header>
    <div>
        <div class="logo">
            <a href="/">mFEST</a>
        </div>

        <nav>
            <ul>
                <li><a href="/news">News</a></li>
                <li><a href="/">Fests</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="content">
    {% block content %}{% endblock %}
</div>

<footer>
    <p>(c) 2018 mFEST.app</p>
</footer>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
    $( document ).ready(function() {
        $('#select-state').change(function() {
            if ($(this).val() == 'All') {
                $('.fest').show();
            } else {
                $('.fest').hide();
                $('*[data-state="' + $(this).val() + '"]').show();

            }
        });
    });
</script>

</body>
</html>