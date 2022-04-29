<html>
    <head>
        <title>SOX: Home</title>
    </head>
        <style>
            td{font-family:calibri;font-size:14px;}
            input[type=text]{border:1px solid #ccc;width:150px;padding:8px;background-color:white;outline-width:0px}
            input[type=password]{border:1px solid #ccc;width:100px;padding:8px;background-color:white;outline-width:0px}
            input[type=submit]{height:34px;border:0px solid #64b95e;width:80px;padding:8px;background-color:white;background-color:#009688;color:white;cursor:pointer;border-radius:3px}
            a{text-decoration:none;color:#3b5998}
            a:hover{text-decoration:underline}
        </style>
        <title>{{ config('app.name', 'SOX Compliance') }}</title>
    <body style="margin:0px;background-image:url('public/images/WP1.jpg');background-size:cover;background-repeat:no-repeat;background-position:center">
        <iframe id="ifhid" name="ifhid" style="display:none"></iframe>
        <table style="width:100%;height:100%;border:0px solid">
            <tbody>
                <tr>
                    <td align="center">
                        <table cellpadding="10" width="500px" style="background-color:white">
                            <tbody>
                                <tr>
                                    <td align="center"><img src="{{ asset('public/images/logo.png') }}"></td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <table>
                                            <form method="post" action="{{ route('login') }}">
                                                @csrf
                                            
                                            <tbody>
                                                <tr valign="bottom">
                                                    <td>UserName:<br><input type="text" required="" autofocus="" id="RBUN" name="name"></td>
                                                    <td>Password:<br><input type="password" required="" id="RBPASS" name="password"></td>
                                                    <td colspan="2" align="center"><input type="submit" value="Sign in"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" align="center"><br><a href="{{ route('password.request') }}" style="cursor:pointer;color:#3b5998">Forgot Password</a></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" align="center">
                                                        <img src="{{ asset('public/images/SMART.png') }}">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            </form>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>