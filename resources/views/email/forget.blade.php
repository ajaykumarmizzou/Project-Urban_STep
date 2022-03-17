<html xmlns = "http://www.w3.org/1999/xhtml" style = "font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" >
<head >
    <meta name = "viewport" content = "width=device-width" />
    <meta http - equiv = "Content-Type" content = "text/html; charset=UTF-8" />
    <title > Sign Up </title >
    <link href = "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel = "stylesheet" >
</head >
<body style = "font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f8f8f8; margin: 0;" >

<table border = "0" cellpadding = "0" cellspacing = "0" style = "width: 100%; background-color: #f4f8fb; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 15px;" bgcolor = "#f8f8f8" >

    <tr >
        <td >
            <table align = "center" border = "0" cellpadding = "0" cellspacing = "0" width = "600" style = "width:600; background-color: #ffffff; color: #514d6a; padding: 40px; margin-top: 40px; line-height: 28px;" bgcolor = "#ffffff" >
            {{--<tr >--}}
                    {{--<td style = "text-align: center; vertical-align: top; padding-top: 20px;" >--}}
                        {{--<img src = "{{url('local/resources/assets/img/nuzzellogo.png')}}" alt = "" style = "border:none; display:inline-block;" height = "36" width = "138" >--}}
                    {{--</td >--}}
                {{--</tr >--}}

                <tr >
                    <td style = "text-align: center; padding-top: 40px; font-weight: 300; line-height: 48px; font-size: 42px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; color: #111; letter-spacing: -1px;" >
                        {{$admin['name']}}
                    </td >
                </tr >

                <tr >
                    <td style = "text-align: center; padding-top: 10px; font-weight: 300; line-height: 36px; font-size: 24px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; color: #999; letter-spacing: -1px;" >
                        Enjoy unlimited access to our app's content by confirming your Update Password.
                    </td>
                </tr>

                {{--<tr>--}}
                    {{--<td style="text-align: center; padding-top: 30px; vertical-align: top;">--}}
                        {{--<img src="{{url('local/resources/assets/img/nuzzellogo.png')}}" alt="" style="border:none; display:inline-block;" height="128" width="128">--}}
                    {{--</td>--}}
                {{--</tr>--}}

                <tr>
                    <td style="text-align: center; padding-top: 30px; padding-bottom: 60px;">
                        <a href="{{url('forgot/updatepwd', $admin['id'])}}" style="letter-spacing: -1px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; text-decoration: none; display: inline-block; line-height: 70px; padding-left: 30px; padding-right: 30px; border-radius: 3px; font-size: 24px; color: #fff; background-color: #1976d2;" target="_blank">
                            Click For Update Password

                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>