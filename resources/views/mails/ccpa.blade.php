<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>CCPA Mail</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <style type="text/css">
            a[x-apple-data-detectors] {color: inherit !important;}
        </style>

    </head>
    <body style="margin: 0; padding: 0;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding: 20px 0 30px 0;">

                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
                        <tr>
                            <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;">
                                <h3>CCPA Request</h3>
                                <!--<img src="https://assets.codepen.io/210284/h1_1.gif" alt="Creating Email Magic." width="300" height="230" style="display: block;" />-->
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tr>
                                        <td style="color: #153643; font-family: Arial, sans-serif;">
                                            <h1 style="font-size: 24px; margin: 0;">Hello,</h1>
                                            <h4>Please find the CCPA Request information below:</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="container">

                                                <table border=1 frame=void rules=rows>
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>The Requestor is a: </td>
                                                            <td>{{ $validData['requestor'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Request Option(s): </td>
                                                            <td>
                                                                @foreach ($validData['requestoptions'] AS $option)
                                                                {{ $option }} </br>
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>First Name: </td>
                                                            <td>{{ $validData['first_name'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Last Name: </td>
                                                            <td>{{ $validData['last_name'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Street Number and Street Name: </td>
                                                            <td>{{ $validData['street'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Apartment, Floor, Suite Number: </td>
                                                            <td>{{ $validData['apt'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>City: </td>
                                                            <td>{{ $validData['city'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>State: </td>
                                                            <td>{{ $validData['state'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Zip Code: </td>
                                                            <td>{{ $validData['zip_code'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Email Address: </td>
                                                            <td>{{ $validData['email_address'] }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Phone number: </td>
                                                            <td>{{ $validData['primary_phone'] }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ee4c50" style="padding: 30px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tr>

                                        <td align="right">
                                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                <tr>
                                                    <td>
                                                        <a href="http://www.twitter.com/">
                                                            <img src="https://assets.codepen.io/210284/tw.gif" alt="Twitter." width="38" height="38" style="display: block;" border="0" />
                                                        </a>
                                                    </td>
                                                    <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                    <td>
                                                        <a href="http://www.twitter.com/">
                                                            <img src="https://assets.codepen.io/210284/fb.gif" alt="Facebook." width="38" height="38" style="display: block;" border="0" />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
    </body>
</html>