<title>Card Checker - TGTBF</title>
<?php
include('header.php');
?>
</div>

<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Card Checker</h1>
</div>
<div class="content">
 
<div style="margin: 0px auto;text-align:center;">
<ul class="pagination" style="margin-top: 0px;">
<li><a href="../acc?page=A">A</a></li>
<li><a href="../acc?page=B">B</a></li>
<li><a href="../acc?page=C">C</a></li>
<li><a href="../acc?page=D">D</a></li>
<li><a href="../acc?page=E">E</a></li>
<li><a href="../acc?page=F">F</a></li>
<li><a href="../acc?page=G">G</a></li>
<li><a href="../acc?page=H">H</a></li>
<li><a href="../acc?page=I">I</a></li>
<li><a href="../acc?page=J">J</a></li>
<li><a href="../acc?page=K">K</a></li>
<li><a href="../acc?page=L">L</a></li>
<li><a href="../acc?page=M">M</a></li>
<li><a href="../acc?page=N">N</a></li>
<li><a href="../acc?page=O">O</a></li>
<li><a href="../acc?page=P">P</a></li>
<li><a href="../acc?page=Q">Q</a></li>
<li><a href="../acc?page=R">R</a></li>
<li><a href="../acc?page=S">S</a></li>
<li><a href="../acc?page=T">T</a></li>
<li><a href="../acc?page=U">U</a></li>
<li><a href="../acc?page=V">V</a></li>
<li><a href="../acc?page=W">W</a></li>
<li><a href="../acc?page=X">X</a></li>
<li><a href="../acc?page=Y">Y</a></li>
<li><a href="../acc?page=Z">Z</a></li>
</ul>
</div>
<div class="row">
<div class="col-xs-11" style="margin: 0px auto;float:none;">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> Card Checker</h3>
</div>
<div class="box-body table-responsive no-padding">
<table class="table table-hover table-striped">
<thead>
<tr>
<th width="30px" class="center">#</th>
<th width="25%">Name</th>
<th>Description</th>
<th width="80px" class="center">Live</th>
<th width="80px" class="center">Die</th>
<th width="40px" class="center">Status</th>
</tr>
</thead>
<tbody>
<tr>
<td class="center">1</td>
<td>
<a style="color: #08c;" href="../ccn1">CCN Gate 1 </a>
</td>
<td>
Support Visa, Amex and Master Card. Charge $1-$4. Only <font color=blue><b>Paid User</b></font> up who can use this feature.</td>
<td class="center">-1 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center"><span style="color:green;" class="fa fa-check"></span></td>
</tr>
<tr>
<td class="center">2</td>
<td>
<a style="color: #08c;" href="../ccn2">CCN Gate 2</a>
</td>
<td>
Support Visa, Amex and Master Card. Charge $5-$9. Only <font color=blue><b>Paid User</b></font> up who can use this feature.</td>
<td class="center">-2 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center"><span style="color:green;" class="fa fa-check"></span></td>
</tr>
<tr>
<td class="center">3</td>
<td>
<a style="color: #08c;" href="../ccn3">CCN Gate 3</a>
</td>
<td>
Support Visa, Amex and Master Card. Charge $10-$20. Only <font color=blue><b>Paid User</b></font> up who can use this feature.</td>
<td class="center">-3 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center"><span style="color:green;" class="fa fa-check"></span></td>
</tr>
<tr>
<td class="center">4</td>
<td>
<a style="color: #08c;" href="../ccn4">CCN Gate 4</a>
</td>
<td>
Support Visa, Amex and Master Card. Charge $25-$50. Only <font color=blue><b>Paid User</b></font> up who can use this feature.</td>
<td class="center">-5 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center"><span style="color:green;" class="fa fa-check"></span></td>
</tr>
<td class="center">5</td>
<td>
<a style="color: #08c;" href="../ccn5">CCN Gate 5 [Beta]</a>
</td>
<td>
Support Visa, Amex and Master Card. Charge $1-$4. Only <font color=red><b>Free User</b></font> up who can use this feature. </td>
<td class="center">-1 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center"><span style="color:green;" class="fa fa-check"></span></td>
</tr>
<td class="center">6</td>
<td>
<a style="color: #08c;" href="../card#">3D-Secure Checker [Beta]</a>
</td>
<td>
VBV/MCSC (3D-Secure) Checker </td>
<td class="center">-2 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center"><span style="color:red;" class="fa fa-times"></span></td>
</tr>
<tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i> Alert Message</h4>
</div>
<div class="modal-body">
Checking done!
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="../style/js/custom.js"></script>
<script type="text/javascript">
    var cacheNews = '';
    function getNews(){
        $.ajax({
            url: SITE_URL + '/',
            dataType: 'json',
            type: 'POST',
            data: 'ajax=1&do=getnews',
            success:function(data){
                if(cacheNews!=data.news)
                    $('#news').html('<marquee>'+data.news+'</marquee>');
                cacheNews = data.news;
                setTimeout("getNews()", 60*1000);
            }
        });
    }
    $(document).ready(function(){
        getNews();
    });
	</script>
 
</body>
</html>