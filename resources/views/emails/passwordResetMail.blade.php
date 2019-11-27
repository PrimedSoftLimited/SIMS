<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>
    <style>
        /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

    </style>
</head>

<body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content">

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table class="main">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class="wrapper">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <h3>Hello</h3>
                                            <p>You are receiving this email because we received a password reset request for your account</p>
                                            <p>Password Reset Token</p>

                                            <pre>
                                                <Strong>
                                                    <input type="text" value="{{ $token }}">
                                                </Strong>
                                            </pre>

                                            <p>If you did not request a password reset, no further action is required.</p>
                                            <p>Regards,</p>
                                            <p>SIMS</p>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>

                    <!-- START FOOTER -->
                    <div class="footer">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="content-block">
                                    <span class="apple-link">Primedsoft Limited</span>
                                    <br>
                                    <span>Port Harcourt Office: Km 34 East West road,
                                        <br> Opposite Overcomers Junction by Rumudara,
                                        <br> Port Harcourt.</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="content-block">
                                    <a href="#">Subscribe</a> To Our Newsletter
                                </td>
                            </tr>
                            <tr>
                                <td class="content-block powered-by">
                                    <a href="http://primedsoft.com/">Powered by primedsoft limited </a>.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->

                    <!-- END CENTERED WHITE CONTAINER -->
                </div>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
</body>

</html>