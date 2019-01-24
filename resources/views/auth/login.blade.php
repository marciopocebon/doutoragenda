<!doctype html>
<html lang="pt-br" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doutor Agenda</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap-4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-5.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="vendor/js/modernizr.js"></script>
    <style>
        html, body, div, a, button, form, label, input {
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            color: inherit;
            font: inherit;
            text-decoration: none;
            cursor: default;
            max-width: 100%;
            border-radius: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            appearance: none;
            box-sizing: border-box
        }

        body {
            color: #4E596B;
            background-color: #F3F6F8;
            max-width: 100%;
            min-width: 290px;
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.05em;
            line-height: 1.38;
            text-align: center;
            -webkit-text-size-adjust: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-overflow-scrolling: touch
        }

        body ::-webkit-input-placeholder {
            color: inherit
        }

        body ::-moz-placeholder {
            color: inherit
        }

        body :-ms-input-placeholder {
            color: inherit
        }

        body :-moz-placeholder {
            color: inherit
        }

        hr {
            border-top: 1px solid #E1EAF0;
            padding-top: 20px;
            margin-top: 20px
        }

        .fieldset {
            margin-bottom: 15px
        }

        .fieldset:last-of-type {
            margin-bottom: 0
        }

        input[type=text],
        input[type=password],
        input[type=email] {
            color: #9DB2C2;
            background-color: #fff;
            border: 1px solid #E1EAF0;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: text;
            width: 100%;
            transition: all 0.1s linear
        }

        input[type=text]:hover,
        input[type=password]:hover,
        input[type=email]:hover {
            color: #4E596B
        }

        input[type=text]:focus,
        input[type=password]:focus,
        input[type=email]:focus {
            color: #1E70B7;
            border-left: 3px solid #1E70B7
        }

        input[type="checkbox"] {
            display: inline-block;
            margin: 0 6px 0 0;
            vertical-align: middle;
            position: relative;
            width: auto !important
        }

        button,
        .submit-button {
            color: #fff;
            background-color: #1E70B7;
            padding: 13px 15px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: all 0.1s linear
        }

        button:hover,
        .submit-button:hover {
            background-color: #3183ca
        }

        button i,
        .submit-button i {
            font-size: 0.8em;
            top: 1px;
            margin-left: 5px
        }

        a {
            cursor: pointer;
            transition: all 0.1s linear
        }

        i {
            position: relative;
            transition: all 0.1s linear
        }

        .box-wrapper {
            display: table;
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #fff 0%, #f3f6f8 100%)
        }

        .box-wrapper::before {
            content: "";
            position: fixed;
            left: -22%;
            top: 60%;
            right: 0;
            width: 125%;
            height: 100%;
            background: linear-gradient(135deg, #f3f6f8 0%, #fff 100%);
            transform: rotate(15deg)
        }

        .box-wrapper .box-container {
            display: table-cell;
            vertical-align: middle;
            position: relative;
            padding: 20px
        }

        .box-wrapper .box-container .box-content-block {
            width: 330px;
            margin: auto;
            position: relative
        }

        .box-wrapper .box-container .box-content-block .logo {
            background-image: url(img/logo-padrao.png);
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            margin-bottom: 16px;
            text-align: left;
            position: relative;
            width: 150px;
            height: 34px
        }

        .box-wrapper .box-container .box-content-block .box-toggle {
            position: absolute;
            right: 0;
            top: 7px;
            left: auto
        }

        .box-wrapper .box-container .box-content-block .box-toggle a {
            color: #9DB2C2;
            padding: 6px 10px 7px 10px;
            border-radius: 50px;
            font-size: 0.7em
        }

        .box-wrapper .box-container .box-content-block .box-toggle a:hover {
            color: #4E596B
        }

        .box-wrapper .box-container .box-content-block .box-toggle a.active {
            color: #fff;
            background-color: #9DB2C2
        }

        .box-wrapper .box-container .box-content-block .vendor-message ul li {
            color: #CE4C55;
            text-align: left;
            font-size: 0.85em;
            margin-bottom: 5px
        }

        .box-wrapper .box-container .box-content-block .vendor-message ul li:last-of-type {
            margin-bottom: 15px
        }

        .box-wrapper .box-container .box-content-block .box-form .name-inputs input {
            display: inline-block;
            width: 48%
        }

        .box-wrapper .box-container .box-content-block .box-form .name-inputs input:first-of-type {
            margin-right: 5px
        }

        .box-wrapper .box-container .box-content-block .box-form .name-inputs input:last-of-type {
            margin-left: 5px
        }

        .box-wrapper .box-container .box-content-block .box-form .password-field .password-strength span {
            display: block;
            background-color: #E1EAF0;
            border-radius: 4px;
            height: 35px;
            width: 5px;
            transition: all 0.1s linear
        }

        .box-wrapper .box-container .box-content-block .box-form .submit-button {
            margin-top: 15px
        }

        .box-wrapper .box-container .box-content-block .box-form .submit-button:hover i {
            margin-left: 7px
        }

        .box-wrapper .box-container .box-content-block .tandc a {
            text-decoration: underline
        }

        .box-wrapper .box-container .box-content-block .tandc a:hover {
            color: #4f687b
        }

        .box-wrapper .box-container .box-content-block .password-reset {
            color: #9DB2C2;
            font-size: 0.75em;
            text-align: left;
            margin-top: 10px;
            font-size: 0.68em;
            margin-top: 15px
        }

        .box-wrapper .box-container .box-content-block .password-reset a {
            text-decoration: underline
        }

        .box-wrapper .box-container .box-content-block .password-reset a:hover {
            color: #4f687b
        }
    </style>
</head>
<body>

<div class="box-wrapper">
    <div class="box-container">
        <div class="box-content-block">
            <div class="logo"></div>
            <div class="box-toggle">
                <a href="#">Cadastre-se</a>
                <a class="active">Login</a>
            </div>
            <div class="box-form">
                <form>
                    <input type="hidden" name=" " value="">
                    <div class="fieldset">
                        <input placeholder="E-mail" type="email" name="email" required="">
                    </div>
                    <div class="fieldset">
                        <input placeholder="Senha" type="password" name="password" required="">
                    </div>
                    <button class="submit-button success" type="submit">Entrar</button>
                </form>
                <p class="password-reset">Esqueceu a senha? <a href="/recuperar-senha">Recupere aqui</a>.</p>
            </div>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="vendor/bootstrap-4.1.3/js/bootstrap.min.js"></script>

</body>
</html>
