<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <!-- For development, pass document through inliner -->
    <style type="text/css">
        /* Your custom styles go here */

        * {
            margin: 0;
            padding: 0;
            font-size: 100%;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            line-height: 1.65;
        }

        img {
            max-width: 100%;
            margin: 0 auto;
            display: block;
        }

        body,
        .body-wrap {
            width: 100% !important;
            height: 100%;
            background: #111;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            padding-top: 8px;
        }

        a {
            color: #ffffff;
            text-decoration: none;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .button {
            display: inline-block;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            background-color: #D1111D;
            border-top-width: 10px;
            border-right-width: 20px;
            border-bottom-width: 8px;
            border-left-width: 20px;
            border-top-style: solid;
            border-right-style: solid;
            border-bottom-style: solid;
            border-left-style: solid;
            border-top-color: #D1111D;
            border-right-color: #D1111D;
            border-bottom-color: #D1111D;
            border-left-color: #D1111D;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: 20px;
            line-height: 1.25;
        }

        h1 {
            font-size: 28px;
        }

        h2 {
            font-size: 24px;
        }

        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 16px;
        }

        p,
        ul,
        ol {
            font-size: 11px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .container {
            display: block !important;
            clear: both !important;
            margin: 0 auto !important;
            max-width: 580px !important;
        }

        .container table {
            width: 100% !important;
            border-collapse: collapse;
        }

        .container .masthead {
	padding: 5px;
	background: #F0F0F0 !important;
	color: black;
	font-size: 24px;
        }

        .container .masthead h1 {
            margin: 0 auto !important;
            max-width: 80%;
            text-transform: uppercase;
            color: #27313A;
            font-size: 24px;
        }

        .container .content {
            background: #F0F0F0;
            padding: 30px 35px;
            text-align: justify;
            letter-spacing: 1px;
        }

        .container .content.footer {
            background: none;
        }

        .container .content.footer p {
            margin-bottom: 0;
            color: #ffffff;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
        }

        .container .content.footer a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        .content a {
            color: #000;
        }
    </style>
</head>

<body>
    <table class="body-wrap">
        <tr>
            <td class="container">
                <!-- Message start -->
                <table>
<tr style="background-color:#000; border-top:4px solid #D1111D; border-bottom:4px solid #D1111D">
                        <td align="center">
                            <p>&nbsp;</p>
                            <p>
                                <img src="https://www.massaggi24.com/beta/web/img/logo-massaggi24.png" alt="Massagi24" />
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" class="masthead">
                          <strong style="font-size: medium"><br />
                          Benvenuto/a nel nostro<br />  {{ $name }}
                          Centro Assistenza Clienti</strong><br>
                            <p class="text-center">All'interno del Portale sono già riportate<strong> tutte le info necessarie per la Pubblicazione e Gestione degli Annunci,</strong> bisogna solamente <strong>leggere le informazioni</strong> riportate sulle pochissime pagine di questo Portale e sulla propria Area Riservata.  </p>
                          <p class="text-center">Di conseguenza <strong>NON è necessario</strong> contattare la nostra Assistenza per conoscere 'Come Funziona' il Portale, poichè è già tutto spiegato dettagliatamente sul Sito, è sufficiente leggere.</p>
                          <p><span class="text-center">Il Centro Assistenza è esclusivamente costituito dalle <strong>F.A.Q.</strong> presenti in questa pagina ed, eventualmente, dal <strong>Modulo Contatti </strong>che si trova a fondo pagina.</span><br />
                            <br />
                            <br />
                        <a style="color:white" class="button"  href="{{ url('/register/verify/' . $confirmation_code) }}">Accesso a massaggi24 </a>                          </p></td>
                    </tr>

                    <tr>
                        <td align="center" valign="middle" class="content">
                            <hr />
                            <p class="text-center">
                                <a href="https://www.massaggi24.com/">Massaggi<b style="color:#D1111D">24</b></a> | Massaggi Italia, centro massaggio e annunci massaggi Italia.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="container">
                <!-- Message start -->
                <table align="center" class="body-wrap">
                    <tr>
                        <td class="content footer" align="center">
                            <p>Inviato da
                                <a href="https://www.massaggi24.com" style="color:white;">Massagi<b style="color:#D1111D">24</b>.com </a>
                            </p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
<b></b>