<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        @media screen and (max-width: 600px) {
            .content {
                width: 100% !important;
                display: block !important;
                padding: 10px !important;
            }

            .header,
            .body,
            .footer {
                padding: 20px !important;
            }
        }
    </style>
</head>

<body style="font-family: 'Hanken Grotesk', sans-serif">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" style="padding: 20px;">
                <table class="content" width="600" border="0" cellspacing="0" cellpadding="0"
                    style="border-collapse: collapse; border: 1px solid #cccccc;">
                    <!-- Header -->
                    <tr>
                        <td class="header"
                            style="background-color: #0F1729; padding: 40px; text-align: center; color: #F8FAFC; font-size: 24px;">
                            {{ $holiday_name }} Greetings!
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
                            Hello, <strong style="color: #245FEB">{{ $client_name }}</strong>! <br>
                            <br><br>
                            {{ $email_body }}
                        </td>
                    </tr>

                    <!-- Call to action Button -->
                    <tr>
                        <td style="padding: 0px 40px 0px 40px; text-align: center;">
                            <!-- CTA Button -->
                            <table cellspacing="0" cellpadding="0" style="margin: auto;">
                                <tr>
                                    <td align="center"
                                        style="background-color: hsl(227, 91%, 60%); padding: 10px 20px; border-radius: 5px;">
                                        <a href="http://localhost:8001/" target="_blank"
                                            style="color: #F8FAFC; text-decoration: none; font-weight: bold;">Plan your
                                            next trip</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
                            What better time for a special gift? Use this 20% discount for any service in our company
                            any time before your next birthday:) Enjoy
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td class="footer"
                            style="background-color: #020817; padding: 40px; text-align: center; color: #F8FAFC; font-size: 14px;">
                            Copyright &copy; 2024 | Happy Clients
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
