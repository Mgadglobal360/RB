<html>
    <head>
        <title>SOX: Home</title>
    </head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <script type="text/javascript" src="{{ URL::asset('public/js/sweetalert.min.js') }}"></script>
         <script type="text/javascript" src="{{ URL::asset('public/js/custome.js') }}"></script>

        <link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}" />
    <body>
        <table style="position:fixed;border:0px solid;left:0px;top:0px;width:220px;height:100%;z-index:1550" bgcolor="white" cellspacing="0" cellpadding="15">
            <tbody>
                <tr valign="top">
                    <td style="padding-top:20px;padding-left:50px">
                        <img title="Click to go back" onclick="top.location='<?php if(Auth::user()->type==2){ echo route('managereport.home');}else { echo route('home');}?>';" src="{{ asset('public/images/Logo.png') }}" style="cursor:pointer;width:150px">
                        <p>
                        </p>
                        <div style="margin-left:20px">
                            <img src="{{ asset('public/images/SMART.png') }}" style="position: fixed; top: 0px; z-index: 1450; left: 1196px;" id="SMART">
                            <style>
                                .lmenu{cursor:pointer;height:40px}
                                .lmenu:hover{background-color:rgb(23, 55, 74, 1);color:white}
                            </style>
                            <p><br>
                                <img src="{{ isset(Auth::user()->profile_image)?asset('public/uploads/'.Auth::user()->profile_image):asset('public/images/Profile.png') }}" onclick="document.location='<?php if(Auth::user()->type==2){ echo route('managereport.home');}else { echo route('home');}?>'" style="cursor:pointer;width:80px;height:80px;border-radius:100%;border:0px solid #aaa">
                                <br><b style="font-size:17px">{{ Auth::user()->profile_name }}</b>
                                <br>
                            </p>
                            <p>
                            <table cellspacing="0" cellpadding="10" style="margin-left:-25px">
                                <tbody>
                                    <tr class="lmenu" onclick="document.location='<?php if(Auth::user()->type==2){ echo route('managereport.home');}else { echo route('home');}?>'">
                                        <td style="padding-right:0px" align="right"><i class="fas fa-home"></i></td>
                                        <td style="font-size:20px;font-weight:normal">Home</td>
                                    </tr>
                                    <tr class="lmenu" onclick="ReadNoti()" onmouseover="Noti.style.border='1px dashed rgb(23, 55, 74, 1)'" onmouseout="Noti.style.border='1px dashed white'">
                                        <td style="width:40px;padding-right:0px" align="right">
                                            <i class="fas fa-bell"></i>
                                            <font class="Noti" id="Noti" style="text-align: center;">9+</font>
                                        </td>
                                        <td style="font-size:20px;font-weight:normal">Notifications</td>
                                    </tr>
                                    <tr class="lmenu">
                                        <td style="padding-right:0px" align="right"><i class="fas fa-hands-helping"></i></td>
                                        <td style="font-size:20px;font-weight:normal">Support</td>
                                    </tr>
                                    <tr class="lmenu" onclick="document.location='{{ route('profilepage') }}'">
                                        <td style="padding-right:0px" align="right"><i class="fas fa-user-tie"></i></td>
                                        <td style="font-size:20px;font-weight:normal">Profile</td>
                                    </tr>
                                    <tr class="lmenu" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <td style="padding-right:0px" align="right"><i class="fas fa-sign-out-alt"></i></td>
                                        <td style="font-size:20px;font-weight:normal">Logout</td>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </tr>
                                    <tr onclick="Reset()" class="lmenu" style="display:none">
                                        <td></td>
                                        <td style="font-size:20px;font-weight:normal">Re-Start</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        
        @if( Session::has( 'success' ))
            <script>
                swal({
                    title: "{{ Session::get( 'success' ) }}",
                    icon: "success",
                    text: "{{ Session::get( 'success' ) }}",
                    timer: 3000,
                    showConfirmButton: false,
                    type: 'success',
                  
                });
            </script>
             
        @elseif( Session::has( 'error' ))
            <script>
                    swal({
                        title: " {{ Session::get( 'error' ) }}",
                        icon: "success",
                        text: " {{ Session::get( 'error' ) }}",
                        timer: 3000,
                        showConfirmButton: false,
                        type: 'error',
                      
                    });
                </script>
            
        @endif
        @yield('content')
    </body>
</html>
            
      
