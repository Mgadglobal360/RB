@extends('layouts.app')
@section('content')

<table cellspacing="0" cellpadding="2" style="margin-top:50px;margin-bottom:20px;margin-left:250px">
    <tbody>
        <tr>
            <td style="color:rgb(23, 55, 74, 1);font-size:30px;padding:0px"><b style="margin:0px">{{ Auth::user()->profile_name }}</b></td>
        </tr>
    </tbody>
</table>
<table style="margin-left:250px" cellspacing="0" cellpadding="8">
    <tbody>
        <tr>
            <td colspan="2" align="center">
                <table cellspacing="0" cellpadding="5">
                    <tbody>
                        <tr valign="bottom">
                            <td>
                                <img src="{{ isset(Auth::user()->profile_image)?asset('public/uploads/'.Auth::user()->profile_image):asset('public/images/Profile.png') }}" style="width:110px;border-radius:10px;border:2px solid #bbb">
                            </td>
                            <td>
                                <b>Tips:</b><br>Profile image should be square eg. 80px X 80px<br>
                                <p>Upload Profile Image:<br>
                                </p>

                                <form action="{{ Route('updateprofile',Auth::user()->id)}}" id="frmSend" name="frmSend" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="profile_image" style="font-size:10px" size="50" required>
                                <input type="submit" value="Upload">
                                 @error('profile_image')
                                    <p class="error-message">{{$message}}</p>
                                @enderror   
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td style="width:70px" align="right"><b>eMail</b></td>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr valign="top">
            <td style="width:70px" align="right"><b>Password</b></td>
            <td>
                Change Password
               
                <table>
                    <form method="post" id ="change-password-form" action="{{ Route('changepassword',Auth::user()->id)}}">
                        @csrf
                    <tbody>
                        <tr>
                            <td><input type="password" id="current_password" name="current_password" required autocomplete="off" placeholder="Current Password" style="width:200px">
                            </td>
                        </tr>
                        @if ($errors->has('current_password'))
                            <tr><td>
                                <span class="error-message">{{ $errors->first('current_password') }}</span>
                            </tr></td>
                        @endif
                        <tr>
                            <td><input type="password" id="new_password" name="new_password"  required autocomplete="off" placeholder="New Password" style="width:200px">
                            
                            </td>
                        </tr>
                        @if ($errors->has('new_password'))
                            <tr><td><span class="error-message">{{ $errors->first('new_password') }}</span></tr></td>
                            @endif
                        <tr>
                            <td><input type="password" id="confirm_password" name="confirm_password" autocomplete="off" required placeholder="Confirm Password" style="width:200px">
                            
                            </td>
                        </tr>
                        @if ($errors->has('confirm_password'))
                            <tr><td> <span class="error-message">{{ $errors->first('confirm_password') }}</span></td></tr>
                         @endif
                        
                        <tr>
                            <td align="center"><button type="submit">Change Password</button></td>
                        </tr>
                    </tbody>
                    </form>
                </table>
            </td>
        </tr>
    </tbody>
</table>
@endsection
   