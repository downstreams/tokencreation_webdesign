<!doctype html>
<html>
<head>
    <title>Email Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->

</head>

<body>

<table width="100%" cellspacing="50" cellpadding="50" border="0" bgcolor="#E7E7E7" class="wrapper">
    <tbody>
    <tr>
        <td>
            <table bgcolor="#ffffff" cellpadding="0" cellspacing="0" align="center" style="border:1px solid #acacac; border-radius:4px; padding:20px 50px 100px; width:632px;" >
                <tr>
                    <td>
                        <table>
                            <tr align="center" style="text-align:center">
                                <td align="center"><img src="{{asset('assets/home/images/downstreams.png')}}" /></td>
                            </tr>

                            <tr>
                                <td style="text-align:left"><h1 style="font-weight:normal; color:#2e2e2e; font-size:30px; margin:0px; padding-top:60px;">Hello</h1>
                                    <p style="font-size:16px; color:#2e2e2e; line-height:25px; margin:0px; padding-top:20px;">Your unique Code is below Thanks</p>
                                </td>
                            </tr>
                            <tr style="text-align:center">
                                <td>{{$code}}</td>
                            </tr>


                        </table>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
    </tbody>
</table>
</body>
</html>