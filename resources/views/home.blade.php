<html>
    <head>
        <title>SOX: Home</title>
    </head>
    <body>
        <center>
        </center>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="/animate.min.css" rel="stylesheet" type="text/css" media="all">
        <style>
            td{font-family:calibri;font-size:14px;}
            input[type=text]{border:1px solid #ccc;width:120px;padding:6px;background-color:white;outline-width:0px}
            input[type=email]{border:1px solid #ccc;width:120px;padding:6px;background-color:white;outline-width:0px}
            input[type=password]{border:1px solid #ccc;width:120px;padding:6px;background-color:white;outline-width:0px}
            button{border:0px solid;padding:8px;background-color:#009688;color:white;cursor:pointer;font-size:12px;border-radius:3px;outline-width:0px;font-family:verdana}
            button:hover{background-color:rgb(100,185,94, 0.7)}
            .clearBut{background-color:rgb(220,20,60,0.5);color:white;cursor:pointer}
            .clearBut:hover{background-color:crimson;color:white}
            a{text-decoration:none;color:#3b5998;font-weight:normal;font-family:verdana;font-size:13px}
            a:hover{text-decoration:underline}
            .TRMNU{cursor:pointer}
            .TRMNUON{background-color:rgb(29, 161, 242,0.3);}
            .TRMNU:hover{background-color:rgb(29, 161, 242,0.1);}
            .bl{border-bottom:1px dashed #ddd}
            body {margin:30px;font-size:14px;font-family:calibri;margin-top:0px;margin-left:80px;}
            .noti{background-color:red;color:white;padding:5px;border-radius:100%;height:14px;border:1px dashed white;font-size:10px;padding-right:7px;padding-left:7px;position:absolute;margin-top:-8px;margin-left:-22px;min-width:10px}
            .R{color:red;text-align:center;padding:3px;cursor:pointer;display:inline-block;font-size:15px}
            .G{color:#009688;text-align:center;padding:3px;cursor:pointer;display:inline-block;font-size:15px}
            .A{color:gold;text-align:center;padding:3px;cursor:pointer;display:inline-block;font-size:15px}
            .Gr{color:rgb(100,100,100,0.3);text-align:center;padding:3px;cursor:pointer;display:inline-block;font-size:15px}
            .MnuRAG{cursor:pointer}
            .MnuRAG:hover{background-color:#eee}
            .Submitted{background-color:lawngreen;color:#555;padding:4px;padding-left:8px;padding-right:8px;border:1px dashed white}
            .NotSubmitted{background-color:#eee;color:#555;padding:4px;padding-left:8px;padding-right:8px;border:1px dashed white}
            .Approved{background-color:#2196f3;color:white;padding:4px;padding-left:8px;padding-right:8px;border:1px dashed white}
            .SentBack{background-color:crimson;color:white;padding:4px;padding-left:8px;padding-right:8px;border:1px dashed white}
            .EditingReq{background-color:red;color:white;padding:4px;padding-left:8px;padding-right:8px;border:1px dashed white}
            .Open{background-color:gold;color:white;padding:4px;padding-left:8px;padding-right:8px;border:1px dashed white}
            .box {
            box-shadow: 3px 3px 8px rgb(29 101 42 / 20%);
            margin: 5px;
            padding: 5px;
            padding-right: 10px;
            padding-left: 10px;
            cursor: pointer;
            border-radius: 3px;
            white-space: nowrap;
            background-color: rgb(255,255,255,0.2);
            border:1px solid #ddd;
            display:inline-block;
            }
            .boxon {
            box-shadow: 3px 3px 8px rgb(29 101 42 / 30%);
            margin: 5px;
            padding: 5px;
            padding-right: 10px;
            padding-left: 10px;
            cursor: default;
            border-radius: 3px;
            white-space: nowrap;
            background-color: #294c67;/*rgba(29, 101, 242, 0.95);*/
            color: white;
            display:inline-block;
            }
        </style>
        <script>
            function copyClipboard(Container) {
              var elm = document.getElementById(Container);
              if(document.body.createTextRange) {
                var range = document.body.createTextRange();
                range.moveToElementText(elm);
                range.select();
                document.execCommand("Copy");
                alert("Data Copied to clipboard");
              }
              else if(window.getSelection) {
                var selection = window.getSelection();
                var range = document.createRange();
                range.selectNodeContents(elm);
                selection.removeAllRanges();
                selection.addRange(range);
                document.execCommand("Copy");
                alert("Data Copied to clipboard");
              }
            }
        </script>
        <style>
            .tabmnu{width:250px;border:1px solid #ccc;margin:10px;cursor:pointer;}
            .tabmnu:hover{background-color:#f4f4f4}
            .caltd{background-color:crimson;olor:white}
        </style>
        <table style="position:fixed;border:0px solid;left:0px;top:0px;width:220px;height:100%;z-index:1550" bgcolor="white" cellspacing="0" cellpadding="15">
            <tbody>
                <tr valign="top">
                    <td style="padding-top:20px;padding-left:50px">
                        <img title="Click to go back" onclick="top.location='/home/';" src="{{ asset('images/Logo.png') }}" style="cursor:pointer;width:150px">
                        <p>
                        </p>
                        <div style="margin-left:20px">
                            <img src="{{ asset('images/SMART.png') }}" style="position: fixed; top: 0px; z-index: 1450; left: 1196px;" id="SMART">
                            <script>
                                SMART.style.left=(window.innerWidth)-170+"px";
                                
                                function ReadNoti()
                                {
                                if (top.document.getElementById("ReadNoti").style.display=="none")
                                    {
                                    top.document.getElementById("ReadNoti").src="/ReadNotifications.asp";
                                    top.document.getElementById("ReadNoti").style.display="";
                                    }
                                else
                                    {top.document.getElementById("ReadNoti").style.display="none";}
                                }
                                
                                function Reset()
                                {
                                var con=confirm("This cannot be undone!!!\n\nSURE RE-START?");
                                if (con)
                                    {
                                    document.getElementById("ifrestart").src="/Reset.asp?id=||";
                                    }
                                }
                            </script>
                            <iframe style="display:none" id="ifrestart"></iframe>
                            <style>
                                .lmenu{cursor:pointer;height:40px}
                                .lmenu:hover{background-color:rgb(23, 55, 74, 1);color:white}
                            </style>
                            <p><br>
                                <img src="{{ asset('images/Profile.png') }}" onclick="document.location='/home/'" style="cursor:pointer;width:80px;height:80px;border-radius:100%;border:0px solid #aaa">
                                <br><b style="font-size:17px">R2R FINANCE E</b>
                                <br>
                            </p>
                            <p>
                            <table cellspacing="0" cellpadding="10" style="margin-left:-25px">
                                <tbody>
                                    <tr class="lmenu" onclick="document.location='/home/'">
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
                                    <tr class="lmenu" onclick="document.location='/Profile/'">
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
                            <iframe src="/Notifications.asp" style="display:none"></iframe>
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <iframe id="ReadNoti" style="position:fixed;top:0px;left:220px;border:0px solid;height:100%;z-index:1540;background-color:rgb(0,0,0,0.3);display:none" class="animated slideInLeft"></iframe>
        <center class="animated fadeIn">
            <table align="center" height="80px" width="800px" cellspacing="0" cellpadding="15">
                <tbody>
                    <tr>
                        <td align="center"><a href="/GFCF_Complianc_Portal-Training_Guide.pdf" target="_blank">User Manual</a></td>
                    </tr>
                </tbody>
            </table>
            <table style="height:60px">
                <tbody>
                    <tr>
                        <td>
                            <div id="bus">
                                <iframe id="ifsetBU" name="ifsetBU" style="display:none"></iframe>
                                Select BU: 
                                <div id="BUIN02" class="boxon">IN02</div>
                                <div id="BUIN09" onclick="document.getElementById('ifsetBU').src='/SetBU.asp?BU=IN09';document.getElementById('bus').style.display='none'" class="box">IN09</div>
                                <div id="BUIN06" onclick="document.getElementById('ifsetBU').src='/SetBU.asp?BU=IN06';document.getElementById('bus').style.display='none'" class="box">IN06</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellspacing="0" cellpadding="10" style="width:800px;margin-bottom:20px;">
                <tbody>
                    <tr style="background-color:rgb(29, 161, 242);color:white">
                        <td>Loc / Func / Period</td>
                        <td>Maker</td>
                        <td>Checker</td>
                        <td align="center">Red</td>
                        <td align="center">Amber</td>
                        <td align="center">Green</td>
                        <td align="center">Unmarked</td>
                        <td>Action</td>
                    </tr>
                    <tr>
                        <td>
                            COR / R2R / 
                            <b>Aug-2021</b>
                            <i title="Change Month" style="margin-left:5px;cursor:pointer;padding:6px;padding-right:20px;padding-left:0px" class="far fa-caret-square-down" onmouseover="othmthsCORR2R.style.display='';this.style.color='#2196f3'" onmouseout="othmthsCORR2R.style.display='none';this.style.color='black'">
                                <table style="position:absolute;border:1px solid #ddd;background-color:white;display:none;" id="othmthsCORR2R" cellspacing="0" cellpadding="5">
                                    <tbody>
                                        <tr style="background-color:rgb(23, 55, 74, 1);color:white;cursor:pointer">
                                            <td colspan="5">Change Month</td>
                                        </tr>
                                        <tr height="40px">
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Oct-2021'">Oct-2021</td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Sep-2021'">Sep-2021</td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Aug-2021'">Aug-2021</td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Jul-2021'">Jul-2021</td>
                                        </tr>
                                        <tr height="40px">
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Jun-2021'">Jun-2021</td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=May-2021'">May-2021</td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Apr-2021'">Apr-2021</td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Mar-2021'">Mar-2021</td>
                                        </tr>
                                        <tr height="40px">
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Feb-2021'">Feb-2021</td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=Jan-2021'">Jan-2021</td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=<font color='#aaa'>Dec-2020</font>'"><font color="#aaa">Dec-2020</font></td>
                                            <td class="trmnu" style="font-size:13px" onclick="document.location='/Home/?LID=COR&amp;FID=R2R&amp;MthYear=<font color='#aaa'>Nov-2020</font>'"><font color="#aaa">Nov-2020</font></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </i>
                        </td>
                        <td style="background-color:rgb(23, 55, 74, 1);color:white">R2R FINANCE E</td>
                        <td>R2R FINANCE M</td>
                        <td align="center"><a href="/Self-Assessment/?id=COR|R2R|Aug-2021|R"><i class="fab fa-font-awesome-flag" style="color:red"></i> 0</a></td>
                        <td align="center"><a href="/Self-Assessment/?id=COR|R2R|Aug-2021|A"><i class="fab fa-font-awesome-flag" style="color:gold"></i> 0</a></td>
                        <td align="center"><a href="/Self-Assessment/?id=COR|R2R|Aug-2021|G"><i class="fab fa-font-awesome-flag" style="color:#009688"></i> 25</a></td>
                        <td align="center"><a href="/Self-Assessment/?id=COR|R2R|Aug-2021|Gr"><i class="fab fa-font-awesome-flag" style="color:#bbb"></i> 0</a></td>
                        <td>
                            <button onclick="top.location='/Self-Assessment/?id=COR|R2R|Aug-2021'">Self-Assessment</button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="border-bottom:1px solid #ddd;border-top:1px solid #ddd">
                            <iframe src="Pie.asp?U=0&amp;R=0&amp;Amb=0&amp;G=25" style="height: 300px; width: 400px;border:0px solid;" scrolling="no" border="no"></iframe>
                            <br><button align="center" style="background-color:orange" id="classupload" onclick="window.open('/ClassUpload/?LID=COR&amp;FID=R2R')">Class Upload</button>
                            <iframe id="OpenNextPeriod" name="OpenNextPeriod" style="display:none"></iframe>
                            <button align="center" style="background-color:dodgerblue;margin-left:30px" id="nextperiodb" onclick="nextperiodb.style.display='none';document.getElementById('OpenNextPeriod').src='/OpenNextPeriod.asp?id=COR|R2R|Aug-2021'">Open Next Period</button>
                        </td>
                        <td colspan="10" style="border-bottom:1px solid #ddd;border-top:1px solid #ddd" align="center">
                            <table class="tabmnu animated fadeInRight" cellspacing="0" cellpadding="5" onclick="document.location='/Self-Assessment/?id=COR|R2R|Sep-2021&amp;Status=Submitted'">
                                <tbody>
                                    <tr>
                                        <td style="border-left:6px solid red;padding-left:10px;"><a style="font-size:11px">Pending Review - Sep-2021</a></td>
                                        <td style="border-left:1px dashed #ccc;background-color:gold;color:white;font-size:12px" width="40px" align="center">13</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="tabmnu animated fadeInRight" cellspacing="0" cellpadding="5" onclick="document.location='/Self-Assessment/?id=COR|R2R|Aug-2021&amp;Status=Submitted'">
                                <tbody>
                                    <tr>
                                        <td style="border-left:6px solid rgb(29, 161, 242);padding-left:10px"><a style="font-size:11px">Pending Review Aug-2021</a></td>
                                        <td style="border-left:1px dashed #ccc;background-color:rgb(29, 161, 242);color:white;font-size:12px" width="40px" align="center">11</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="tabmnu animated fadeInRight" cellspacing="0" cellpadding="5" onclick="document.location='/Self-Assessment/?id=COR|R2R|Aug-2021&amp;Status=Approved'">
                                <tbody>
                                    <tr>
                                        <td style="border-left:6px solid #009688;padding-left:10px"><a style="font-size:11px">Approved</a></td>
                                        <td style="border-left:1px dashed #ccc;background-color:#009688;color:white;font-size:12px" width="40px" align="center">14</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p style="margin-bottom:150px">
            </p>
        </center>
        <table id="pictback" name="pictback" onclick="pictback.style.display='none'" style="position:fixed;top:0px;left:0px;width:100%;height:100%;background-color:rgb(0,0,0,0.5);z-index:50000;display:none;">
            <tbody>
                <tr>
                    <td align="center">
                        <iframe id="RTSR" name="RTSR" style="background-color:white;width:450px;height:250px;border:0px solid"></iframe>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>