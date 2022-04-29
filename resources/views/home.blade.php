@extends('layouts.app')

@section('content')
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
@endsection