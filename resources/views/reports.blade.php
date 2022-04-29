@extends('layouts.app')

@section('content')
<div class="animated fadeIn" style="position:fixed;">
<table style="margin-left:200px;margin-top:50px">
<tbody><tr><td>
    <table style="height:60px">
    <tbody><tr><td>
        <div id="bus">
    <iframe id="ifsetBU" name="ifsetBU" style="display:none"></iframe>
        Select BU: 
        
            <div id="BUIN02" class="boxon">IN02</div>
        
            <div id="BUIN09" onclick="document.getElementById('ifsetBU').src='/SetBU.asp?BU=IN09';document.getElementById('bus').style.display='none'" class="box">IN09</div>       
        
            <div id="BUIN06" onclick="document.getElementById('ifsetBU').src='/SetBU.asp?BU=IN06';document.getElementById('bus').style.display='none'" class="box">IN06</div>       
        
        </div>
    </td></tr>
    </tbody></table>

</td>
</tr>

<tr><td><h1>REPORTS</h1></td></tr>
</tbody></table>
<div id="periodscb" name="periodscb" style="border:1px dashed;margin-left:200px;display:none"></div>
<table style="margin-left:200px">
<tbody><tr>
<td>

    
    <span id="reportname" style="text-decoration:underline">All India</span> GFCF : 
    
        <span style="padding:5px;white-space:nowrap"><b>Jan-2022</b></span>
    
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARJan-2022' name='cbAMIDMTHYEARJan-2022'>";
        periods=periods+"Jan-2022;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARDec-2021' name='cbAMIDMTHYEARDec-2021'>";
        periods=periods+"Dec-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARNov-2021' name='cbAMIDMTHYEARNov-2021'>";
        periods=periods+"Nov-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEAROct-2021' name='cbAMIDMTHYEAROct-2021'>";
        periods=periods+"Oct-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARSep-2021' name='cbAMIDMTHYEARSep-2021'>";
        periods=periods+"Sep-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARAug-2021' name='cbAMIDMTHYEARAug-2021'>";
        periods=periods+"Aug-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARJul-2021' name='cbAMIDMTHYEARJul-2021'>";
        periods=periods+"Jul-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARJun-2021' name='cbAMIDMTHYEARJun-2021'>";
        periods=periods+"Jun-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARMay-2021' name='cbAMIDMTHYEARMay-2021'>";
        periods=periods+"May-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARApr-2021' name='cbAMIDMTHYEARApr-2021'>";
        periods=periods+"Apr-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARMar-2021' name='cbAMIDMTHYEARMar-2021'>";
        periods=periods+"Mar-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARFeb-2021' name='cbAMIDMTHYEARFeb-2021'>";
        periods=periods+"Feb-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARJan-2021' name='cbAMIDMTHYEARJan-2021'>";
        periods=periods+"Jan-2021;";
        </script>
        
    <i title="Change Month" style="margin-left:1px;cursor:pointer;padding:6px;padding-right:20px;padding-left:0px" class="far fa-caret-square-down" onmouseover="document.getElementById('othmths').style.display='';this.style.color='#2196f3'" onmouseout="document.getElementById('othmths').style.display='none';this.style.color='black'">
        <table style="position:absolute;border:1px solid #ddd;background-color:white;display:none;z-index:1100" id="othmths" cellspacing="5" cellpadding="5"><tbody><tr>
        
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Jan-2022'">Jan-2022</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Dec-2021'">Dec-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Nov-2021'">Nov-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Oct-2021'">Oct-2021</td>
            
                </tr><tr>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Sep-2021'">Sep-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Aug-2021'">Aug-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Jul-2021'">Jul-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Jun-2021'">Jun-2021</td>
            
                </tr><tr>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=May-2021'">May-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Apr-2021'">Apr-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Mar-2021'">Mar-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Feb-2021'">Feb-2021</td>
            
                </tr><tr>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Reports/?MthYear=Jan-2021'">Jan-2021</td>
            
        </tr></tbody></table>
    </i>
<br>
<iframe id="ifpie" name="ifpie" src="Pie.asp?U=1&amp;R=0&amp;Amb=1&amp;G=14&amp;NU=16&amp;RP=0" style="height: 300px; width: 400px;border:0px solid;" scrolling="no" border="no"></iframe>
</td></tr>
<tr><td>
<script>
function OpenNextMth()
{
top.document.location="https://www.rbindiagfcf.com/Reports/?MthYear=Feb-2022";
}
</script>
<button onclick="OpenNextMth()">Feb-2022</button>

<p><b>Note:</b><br>
Only the "Approved" tasks are picked for the reports.
</p></td></tr>
</tbody></table>
</div>
</br>
<div style="margin-left:650px;margin-top:95px;">
    <button style="position:absolute;margin-left:5px;margin-top:-40px" onclick="document.getElementById('RTSR').src='ReadyToReport.asp?R=ALL&amp;MthYear=Jan-2022';pictback.style.display=''" id="butSendMIS">Send Report</button>
    <button style="position:absolute;margin-left:120px;margin-top:-40px;display:none" id="butAdvMis" onclick="tabadvmis.style.display='';this.style.display='none'">Advance MIS</button>

<iframe src="Report.asp?MthYear=Jan-2022" style="display:none"></iframe>


<table style="border-bottom:0px solid #ddd;width:450px;margin-bottom:25px" cellspacing="1" cellpadding="7">
    <tbody><tr><td id="content" name="content" colspan="20">

<div class="animated fadeIn">
<table style="margin-left:0px;margin-top:0px;display:none">
<tbody><tr><td><h1>AUDIT REPORT</h1></td></tr>
</tbody></table>
<div id="periodscb" name="periodscb" style="border:1px dashed;margin-left:0px;display:none"></div>
<table style="margin-left:0px">
<tbody><tr style="display:none">
<td>
    
    <table style="height:60px">
    <tbody><tr><td>
        <div id="bus">
    <iframe id="ifsetBU" name="ifsetBU" style="display:none"></iframe>
        Select BU: 
        
            <div id="BUIN02" class="boxon">IN02</div>
        
            <div id="BUIN09" onclick="document.getElementById('ifsetBU').src='/SetBU.asp?BU=IN09';document.getElementById('bus').style.display='none'" class="box">IN09</div>       
        
            <div id="BUIN06" onclick="document.getElementById('ifsetBU').src='/SetBU.asp?BU=IN06';document.getElementById('bus').style.display='none'" class="box">IN06</div>       
        
        </div>
    </td></tr>
    </tbody></table>
    
    <span id="reportname">All India</span> GFCF : 
    
        <font style="padding:7px;background-color:#ccc;color:white;white-space:nowrap" title="Not the Current Month">Jan-2022</font>
    
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARJan-2022' name='cbAMIDMTHYEARJan-2022'>";
        periods=periods+"Jan-2022;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARDec-2021' name='cbAMIDMTHYEARDec-2021'>";
        periods=periods+"Dec-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARNov-2021' name='cbAMIDMTHYEARNov-2021'>";
        periods=periods+"Nov-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEAROct-2021' name='cbAMIDMTHYEAROct-2021'>";
        periods=periods+"Oct-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARSep-2021' name='cbAMIDMTHYEARSep-2021'>";
        periods=periods+"Sep-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARAug-2021' name='cbAMIDMTHYEARAug-2021'>";
        periods=periods+"Aug-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARJul-2021' name='cbAMIDMTHYEARJul-2021'>";
        periods=periods+"Jul-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARJun-2021' name='cbAMIDMTHYEARJun-2021'>";
        periods=periods+"Jun-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARMay-2021' name='cbAMIDMTHYEARMay-2021'>";
        periods=periods+"May-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARApr-2021' name='cbAMIDMTHYEARApr-2021'>";
        periods=periods+"Apr-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARMar-2021' name='cbAMIDMTHYEARMar-2021'>";
        periods=periods+"Mar-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARFeb-2021' name='cbAMIDMTHYEARFeb-2021'>";
        periods=periods+"Feb-2021;";
        </script>
        
        <script>
        document.getElementById("periodscb").innerHTML=document.getElementById("periodscb").innerHTML+"<input type='checkbox' id='cbAMIDMTHYEARJan-2021' name='cbAMIDMTHYEARJan-2021'>";
        periods=periods+"Jan-2021;";
        </script>
        
    <i title="Change Month" style="margin-left:1px;cursor:pointer;padding:6px;padding-right:20px;padding-left:0px" class="far fa-caret-square-down" onmouseover="othmths.style.display='';this.style.color='#2196f3'" onmouseout="othmths.style.display='none';this.style.color='black'">
        <table style="position:absolute;border:1px solid #ddd;background-color:white;display:none;z-index:1100" id="othmths" cellspacing="5" cellpadding="5"><tbody><tr>
        
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Jan-2022'">Jan-2022</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Dec-2021'">Dec-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Nov-2021'">Nov-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Oct-2021'">Oct-2021</td>
            
                </tr><tr>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Sep-2021'">Sep-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Aug-2021'">Aug-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Jul-2021'">Jul-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Jun-2021'">Jun-2021</td>
            
                </tr><tr>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=May-2021'">May-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Apr-2021'">Apr-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Mar-2021'">Mar-2021</td>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Feb-2021'">Feb-2021</td>
            
                </tr><tr>
            
                <td class="trmnu" style=";white-space:nowrap" onclick="document.location='/Audit/?MthYear=Jan-2021'">Jan-2021</td>
            
        </tr></tbody></table>
    </i>
</td></tr>
<tr><td>
<p style="display:none"><b>Note:</b><br>
Only the "Approved" tasks are picked for the reports.
</p>



<table style="border-bottom:0px solid #ddd;width:450px;margin-bottom:25px" cellspacing="1" cellpadding="7">
    <tbody><tr style="background-color:#eee"><td>Compliance Status</td>
    <td align="center">R</td><td align="center">A</td><td align="center">G</td><td align="center">NU</td><td align="center">RP</td><td align="center">Total</td>
    </tr>
    <tr>
    <td style="border-bottom:1px solid #eee;">
        <table style="cursor:pointer" title="Click for All India View" cellspacing="0" cellpadding="2" onclick="document.getElementById('reportname').innerHTML='All India';document.getElementById('ifpie').src='Pie.asp?U=1&amp;R=0&amp;Amb=1&amp;G=14'"><tbody><tr>
        <td style="width:10px;cursor:pointer;"><img title="Click to View Pie" src="images/Pie.png"></td>
        <td align="left"><b style="margin-left:2px">All India View</b></td>
        </tr></tbody></table>
    </td>
    <td align="center" style="cursor:pointer;background-color:crimson;color:white;width:30px" onclick="window.open('DrillDown.asp?RAG=R&amp;MthYear=Jan-2022')">0</td>
    <td align="center" style="cursor:pointer;background-color:#fcba03;color:white;width:30px" onclick="window.open('DrillDown.asp?RAG=A&amp;MthYear=Jan-2022')">1</td>
    <td align="center" style="cursor:pointer;background-color:#009688;color:white;width:30px" onclick="window.open('DrillDown.asp?RAG=G&amp;MthYear=Jan-2022')">14</td>
    <td align="center" style="cursor:pointer;background-color:#aaa;color:white;width:30px" onclick="window.open('DrillDown.asp?RAG=NU&amp;MthYear=Jan-2022')">16</td>
    <td align="center" style="cursor:pointer;background-color:#aaa;color:white;width:30px" onclick="window.open('DrillDown.asp?RAG=RP&amp;MthYear=Jan-2022')">0</td>
    <td align="center" style="cursor:pointer;background-color:#302263;color:white;width:30px" onclick="window.open('DrillDown.asp?MthYear=Jan-2022')">31</td>
    </tr>
</tbody></table>
<table style="border-bottom:0px solid #ddd;width:450px;" cellspacing="1" cellpadding="7">
    <tbody><tr style="background-color:#eee"><td>Region Wise Report</td>
    <td align="center">R</td><td align="center">A</td><td align="center">G</td><td align="center">NU</td><td align="center">RP</td><td align="center">Total</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    North
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=North&amp;MthYear=Jan-2022&amp;LID=DL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=North&amp;MthYear=Jan-2022&amp;LID=DL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=North&amp;MthYear=Jan-2022&amp;LID=DL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=North&amp;MthYear=Jan-2022&amp;LID=DL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=North&amp;MthYear=Jan-2022&amp;LID=DL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=North&amp;MthYear=Jan-2022&amp;LID=DL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    East
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=East&amp;MthYear=Jan-2022&amp;LID=KO&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=East&amp;MthYear=Jan-2022&amp;LID=KO&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=East&amp;MthYear=Jan-2022&amp;LID=KO&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=East&amp;MthYear=Jan-2022&amp;LID=KO&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=East&amp;MthYear=Jan-2022&amp;LID=KO&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=East&amp;MthYear=Jan-2022&amp;LID=KO')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    West
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=West&amp;MthYear=Jan-2022&amp;LID=HO&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=West&amp;MthYear=Jan-2022&amp;LID=HO&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">1</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=West&amp;MthYear=Jan-2022&amp;LID=HO&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">14</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=West&amp;MthYear=Jan-2022&amp;LID=HO&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=West&amp;MthYear=Jan-2022&amp;LID=HO&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=West&amp;MthYear=Jan-2022&amp;LID=HO')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">15</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    South
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=South&amp;MthYear=Jan-2022&amp;LID=CH&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=South&amp;MthYear=Jan-2022&amp;LID=CH&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=South&amp;MthYear=Jan-2022&amp;LID=CH&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=South&amp;MthYear=Jan-2022&amp;LID=CH&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=South&amp;MthYear=Jan-2022&amp;LID=CH&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=South&amp;MthYear=Jan-2022&amp;LID=CH')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Central
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=Central&amp;MthYear=Jan-2022&amp;LID=MP&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=Central&amp;MthYear=Jan-2022&amp;LID=MP&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=Central&amp;MthYear=Jan-2022&amp;LID=MP&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=Central&amp;MthYear=Jan-2022&amp;LID=MP&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">16</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=Central&amp;MthYear=Jan-2022&amp;LID=MP&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=Central&amp;MthYear=Jan-2022&amp;LID=MP')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">16</td>
    </tr>
    
</tbody></table>
<br>
<table style="border-bottom:0px solid #ddd;width:450px;" cellspacing="1" cellpadding="7">
    <tbody><tr style="background-color:#eee"><td>Factory Finance</td>
    <td align="center">R</td><td align="center">A</td><td align="center">G</td><td align="center">NU</td><td align="center">RP</td><td align="center">Total</td>
    </tr>
    
</tbody></table>

<br>
<table style="border-bottom:0px solid #ddd;width:450px;" cellspacing="1" cellpadding="7">
    <tbody><tr style="background-color:#eee"><td>Corporate</td>
    <td align="center">R</td><td align="center">A</td><td align="center">G</td><td align="center">NU</td><td align="center">RP</td><td align="center">Total</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Financial Controlling
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=FC&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=FC&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=FC&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=FC&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=FC&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=FC')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Human Resources
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=HR&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=HR&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=HR&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=HR&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=HR&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=HR')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Legal
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=LG&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=LG&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=LG&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=LG&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=LG&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=LG')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    CORPORATE P2P
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    R2R
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Tax
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Treasury
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
</tbody></table>
<table style="border-bottom:0px solid #ddd;width:450px;display:none" cellspacing="1" cellpadding="7">
    <tbody><tr style="background-color:#eee"><td>Corporate Sales TT</td>
    <td align="center">R</td><td align="center">A</td><td align="center">G</td><td align="center">NU</td><td align="center">RP</td><td align="center">Total</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    CORPORATE P2P
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=P2P')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    R2R
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=R2R')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Tax
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TAX')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Treasury
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=TR')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    E-commerce Finance
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    MDM Fin
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MDM&amp;FID=MDML&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MDM&amp;FID=MDML&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MDM&amp;FID=MDML&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MDM&amp;FID=MDML&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MDM&amp;FID=MDML&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MDM&amp;FID=MDML')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Marketing Finance
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Modern Trade Finance
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Procurement Fin
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
</tbody></table>
<br>
<table style="border-bottom:0px solid #ddd;width:450px;" cellspacing="1" cellpadding="7">
    <tbody><tr style="background-color:#eee"><td>Manufacture to Inventory</td>
    <td align="center">R</td><td align="center">A</td><td align="center">G</td><td align="center">NU</td><td align="center">RP</td><td align="center">Total</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Supply Services
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SS&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SS&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SS&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SS&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SS&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SS')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Procurement Fin
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=PF&amp;FID=PFL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
</tbody></table>

<br>
<table style="border-bottom:0px solid #ddd;width:450px;" cellspacing="1" cellpadding="7">
    <tbody><tr style="background-color:#eee"><td>Order to Cash</td>
    <td align="center">R</td><td align="center">A</td><td align="center">G</td><td align="center">NU</td><td align="center">RP</td><td align="center">Total</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Corporate Sales Finance
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=CSF&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=CSF&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=CSF&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=CSF&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=CSF&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=CSF')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Supply(CS)
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SC&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SC&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SC&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SC&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SC&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=COR&amp;FID=SC')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    E-commerce Finance
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=ECF&amp;FID=ECFL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Marketing Finance
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MF&amp;FID=MFL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr>
    
        <td style="cursor:pointer;border-bottom:1px solid #eee">
    
    <img src="images/Pie.png" style="margin-left:-5px;margin-top:-0px;position:absolute">
    <b style="margin-left:18px">
    Modern Trade Finance
    </b></td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=R')" style="cursor:pointer;background-color:crimson;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=A')" style="cursor:pointer;background-color:#fcba03;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=G')" style="cursor:pointer;background-color:#009688;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=NU')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL&amp;RAG=RP')" style="cursor:pointer;background-color:#aaa;color:white;width:30px;border-bottom:1px solid white">0</td>
    <td align="center" onclick="window.open('DrillDown.asp?R=AI&amp;MthYear=Jan-2022&amp;LID=MT&amp;FID=MTFL')" style="cursor:pointer;background-color:#302263;color:white;width:30px;border-bottom:1px solid white">0</td>
    </tr>
    
    <tr style="height:125px"></tr>
</tbody></table>


</td></tr>
</tbody></table>

<script>
function SelRAG(RAG)
{document.getElementById("cbRAG"+RAG).checked="on";
document.getElementById("RAG"+RAG).className="boxon";}

function SelAMISMthYear(MthYear)
{document.getElementById("cbAMIDMTHYEAR"+MthYear).checked="on";
document.getElementById("AMIDMTHYEAR"+MthYear).className="boxon";}

function SelAMISLIDFID(LIDFID)
{
document.getElementById("AMISLIDFID"+LIDFID).className="boxon";
document.getElementById("cb"+LIDFID).checked="on";
}
//rgb(29, 101, 242,0.9)
</script>
<table id="tabDrillDown" class="animated fadeIn" style="display: none; position: fixed; z-index: 10000; left: 0px; background-color: rgba(29, 101, 242, 0.9); width: 100%; height: 500px; color: white; top: 187px;" cellspacing="0" cellpadding="30">
<tbody><tr valign="top"><td align="center" style="padding-top:10px">
    <form method="post" action="/Reports/DrillDownSel/" target="_blank">
    <table style="color:white;max-width:700px" cellspacing="0" cellpadding="10" border="0">
    <tbody><tr><td align="left" colspan="50">ADVANCE MIS</td></tr>  
    <tr>
        <td style="width:250px">Location / Function</td>
        <td style="width:100px">RAG</td>
        <td>Period</td>
    </tr>
    <tr valign="top">
        <td style="line-height:2.5;padding-top:0px">
        
            <input style="display:none" type="checkbox" id="cbAI" name="cbAI">
            <span id="AMISLIDFIDAI" onclick="SelAMISLIDFID('AI')" class="box">AI</span>
            <script>
            locfuns=locfuns+"AI;";
            </script>
            
            <input style="display:none" type="checkbox" id="cbCentral" name="cbCentral">
            <span id="AMISLIDFIDCentral" onclick="SelAMISLIDFID('Central')" class="box">Central</span>
            <script>
            locfuns=locfuns+"Central;";
            </script>
            
            <input style="display:none" type="checkbox" id="cbEast" name="cbEast">
            <span id="AMISLIDFIDEast" onclick="SelAMISLIDFID('East')" class="box">East</span>
            <script>
            locfuns=locfuns+"East;";
            </script>
            
            <input style="display:none" type="checkbox" id="cbNorth" name="cbNorth">
            <span id="AMISLIDFIDNorth" onclick="SelAMISLIDFID('North')" class="box">North</span>
            <script>
            locfuns=locfuns+"North;";
            </script>
            
            <input style="display:none" type="checkbox" id="cbSouth" name="cbSouth">
            <span id="AMISLIDFIDSouth" onclick="SelAMISLIDFID('South')" class="box">South</span>
            <script>
            locfuns=locfuns+"South;";
            </script>
            
            <input style="display:none" type="checkbox" id="cbWest" name="cbWest">
            <span id="AMISLIDFIDWest" onclick="SelAMISLIDFID('West')" class="box">West</span>
            <script>
            locfuns=locfuns+"West;";
            </script>
            
        </td>
        <td style="line-height:2.5;padding-top:0px">
            <div style="display:none"><input type="checkbox" id="cbRAGR" name="cbRAGR"><input type="checkbox" id="cbRAGA" name="cbRAGA"><input type="checkbox" id="cbRAGG" name="cbRAGG"><input type="checkbox" id="cbRAGU" name="cbRAGU"></div>
            <span class="box" onclick="SelRAG('R')" id="RAGR">R</span><span class="box" onclick="SelRAG('A')" id="RAGA">A</span><br><span class="box" onclick="SelRAG('G')" id="RAGG">G</span><span class="box" onclick="SelRAG('U')" id="RAGU">U</span>
        </td>
        <td style="line-height:2.5;padding-top:0px">
        <div id="periodscb1" name="periodscb1" style="display:none"><input type="checkbox" id="cbAMIDMTHYEARJan-2022" name="cbAMIDMTHYEARJan-2022"><input type="checkbox" id="cbAMIDMTHYEARDec-2021" name="cbAMIDMTHYEARDec-2021"><input type="checkbox" id="cbAMIDMTHYEARNov-2021" name="cbAMIDMTHYEARNov-2021"><input type="checkbox" id="cbAMIDMTHYEAROct-2021" name="cbAMIDMTHYEAROct-2021"><input type="checkbox" id="cbAMIDMTHYEARSep-2021" name="cbAMIDMTHYEARSep-2021"><input type="checkbox" id="cbAMIDMTHYEARAug-2021" name="cbAMIDMTHYEARAug-2021"><input type="checkbox" id="cbAMIDMTHYEARJul-2021" name="cbAMIDMTHYEARJul-2021"><input type="checkbox" id="cbAMIDMTHYEARJun-2021" name="cbAMIDMTHYEARJun-2021"><input type="checkbox" id="cbAMIDMTHYEARMay-2021" name="cbAMIDMTHYEARMay-2021"><input type="checkbox" id="cbAMIDMTHYEARApr-2021" name="cbAMIDMTHYEARApr-2021"><input type="checkbox" id="cbAMIDMTHYEARMar-2021" name="cbAMIDMTHYEARMar-2021"><input type="checkbox" id="cbAMIDMTHYEARFeb-2021" name="cbAMIDMTHYEARFeb-2021"><input type="checkbox" id="cbAMIDMTHYEARJan-2021" name="cbAMIDMTHYEARJan-2021"><input type="checkbox" id="cbAMIDMTHYEARJan-2022" name="cbAMIDMTHYEARJan-2022"><input type="checkbox" id="cbAMIDMTHYEARDec-2021" name="cbAMIDMTHYEARDec-2021"><input type="checkbox" id="cbAMIDMTHYEARNov-2021" name="cbAMIDMTHYEARNov-2021"><input type="checkbox" id="cbAMIDMTHYEAROct-2021" name="cbAMIDMTHYEAROct-2021"><input type="checkbox" id="cbAMIDMTHYEARSep-2021" name="cbAMIDMTHYEARSep-2021"><input type="checkbox" id="cbAMIDMTHYEARAug-2021" name="cbAMIDMTHYEARAug-2021"><input type="checkbox" id="cbAMIDMTHYEARJul-2021" name="cbAMIDMTHYEARJul-2021"><input type="checkbox" id="cbAMIDMTHYEARJun-2021" name="cbAMIDMTHYEARJun-2021"><input type="checkbox" id="cbAMIDMTHYEARMay-2021" name="cbAMIDMTHYEARMay-2021"><input type="checkbox" id="cbAMIDMTHYEARApr-2021" name="cbAMIDMTHYEARApr-2021"><input type="checkbox" id="cbAMIDMTHYEARMar-2021" name="cbAMIDMTHYEARMar-2021"><input type="checkbox" id="cbAMIDMTHYEARFeb-2021" name="cbAMIDMTHYEARFeb-2021"><input type="checkbox" id="cbAMIDMTHYEARJan-2021" name="cbAMIDMTHYEARJan-2021"><input type="checkbox" id="cbAMIDMTHYEARJan-2022" name="cbAMIDMTHYEARJan-2022"><input type="checkbox" id="cbAMIDMTHYEARDec-2021" name="cbAMIDMTHYEARDec-2021"><input type="checkbox" id="cbAMIDMTHYEARNov-2021" name="cbAMIDMTHYEARNov-2021"><input type="checkbox" id="cbAMIDMTHYEAROct-2021" name="cbAMIDMTHYEAROct-2021"><input type="checkbox" id="cbAMIDMTHYEARSep-2021" name="cbAMIDMTHYEARSep-2021"><input type="checkbox" id="cbAMIDMTHYEARAug-2021" name="cbAMIDMTHYEARAug-2021"><input type="checkbox" id="cbAMIDMTHYEARJul-2021" name="cbAMIDMTHYEARJul-2021"><input type="checkbox" id="cbAMIDMTHYEARJun-2021" name="cbAMIDMTHYEARJun-2021"><input type="checkbox" id="cbAMIDMTHYEARMay-2021" name="cbAMIDMTHYEARMay-2021"><input type="checkbox" id="cbAMIDMTHYEARApr-2021" name="cbAMIDMTHYEARApr-2021"><input type="checkbox" id="cbAMIDMTHYEARMar-2021" name="cbAMIDMTHYEARMar-2021"><input type="checkbox" id="cbAMIDMTHYEARFeb-2021" name="cbAMIDMTHYEARFeb-2021"><input type="checkbox" id="cbAMIDMTHYEARJan-2021" name="cbAMIDMTHYEARJan-2021"></div>
        <script>
        document.getElementById("periodscb1").innerHTML=document.getElementById("periodscb").innerHTML;
        document.getElementById("periodscb").innerHTML="";
        </script>
        <span id="AMIDMTHYEARJan-2022" onclick="SelAMISMthYear('Jan-2022')" class="box">Jan-2022</span> <span id="AMIDMTHYEARDec-2021" onclick="SelAMISMthYear('Dec-2021')" class="box">Dec-2021</span> <span id="AMIDMTHYEARNov-2021" onclick="SelAMISMthYear('Nov-2021')" class="box">Nov-2021</span> <span id="AMIDMTHYEAROct-2021" onclick="SelAMISMthYear('Oct-2021')" class="box">Oct-2021</span> <span id="AMIDMTHYEARSep-2021" onclick="SelAMISMthYear('Sep-2021')" class="box">Sep-2021</span> <span id="AMIDMTHYEARAug-2021" onclick="SelAMISMthYear('Aug-2021')" class="box">Aug-2021</span> <span id="AMIDMTHYEARJul-2021" onclick="SelAMISMthYear('Jul-2021')" class="box">Jul-2021</span> <span id="AMIDMTHYEARJun-2021" onclick="SelAMISMthYear('Jun-2021')" class="box">Jun-2021</span> <span id="AMIDMTHYEARMay-2021" onclick="SelAMISMthYear('May-2021')" class="box">May-2021</span> <span id="AMIDMTHYEARApr-2021" onclick="SelAMISMthYear('Apr-2021')" class="box">Apr-2021</span> <span id="AMIDMTHYEARMar-2021" onclick="SelAMISMthYear('Mar-2021')" class="box">Mar-2021</span> <span id="AMIDMTHYEARFeb-2021" onclick="SelAMISMthYear('Feb-2021')" class="box">Feb-2021</span> <span id="AMIDMTHYEARJan-2021" onclick="SelAMISMthYear('Jan-2021')" class="box">Jan-2021</span> </td>
    </tr>
    <tr><td colspan="50" align="center" valign="bottom"><p><br>
    <button type="button" class="boxbut" onclick="tabDrillDown.style.display='none';butDrillDown.style.display=''"><i class="fas fa-times"></i> Close</button> &nbsp; 
    <button type="button" class="boxbut" onclick="Restart()"><i class="fas fa-history"></i> Reset</button> &nbsp; 
    <button type="submit" class="boxbut"><i class="fas fa-check"></i> Run Report</button>
    </p></td><td></td></tr>
    </tbody></table>
    </form>
</td></tr>
</tbody></table>
<script>
tabDrillDown.style.top=(window.innerHeight)-470+"px";
function Restart()
{
var tmp=locfuns.split(";");
for(var i = 0; i < tmp.length-1; i++) 
    {
    document.getElementById("cb"+tmp[i]).checked="";
    document.getElementById("AMISLIDFID"+tmp[i]).className="box";
    }

var tmp1=periods.split(";");
for(var i = 0; i < tmp1.length-1; i++) 
    {
    document.getElementById("cbAMIDMTHYEAR"+tmp1[i]).checked="";
    document.getElementById("AMIDMTHYEAR"+tmp1[i]).className="box";
    }

RAGR.className="box";document.getElementById("cbRAGR").checked="";
RAGA.className="box";document.getElementById("cbRAGA").checked="";
RAGG.className="box";document.getElementById("cbRAGG").checked="";
RAGU.className="box";document.getElementById("cbRAGU").checked="";
}
</script>
</div>

<script>
parent.document.getElementById("content").innerHTML=document.getElementById("content").innerHTML;
parent.document.getElementById("ifpie").src="Pie.asp?U=1&R=0&Amb=1&G=14&NU=16&RP=0";
</script></td></tr>
</tbody></table>
<table id="pictback" name="pictback" onclick="pictback.style.display='none'" style="position:fixed;top:0px;left:0px;width:100%;height:100%;background-color:rgb(0,0,0,0.5);z-index:50000;display:none;">
<tbody><tr><td align="center">
    
</td></tr>
</tbody></table>
</div>
@endsection