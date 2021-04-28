<?php
session_start();
include('../../header.php');
$email = $_SESSION['email'];
?>
</div><TITLE>User Profile</TITLE>
<div id="main">
<div id="navigation">
<ul class="mainNav" data-open-subnavs="multi">
<li>
<a href="https://blockchain.info.tm/"><i class="icon-home icon-white"></i><span>Dashboard</span></a>
</li>
<li>
<a href="https://blockchain.info.tm/acc">
<i class="icon-group icon-white"></i>
<span>Account Checker</span>
<span class="label"><?php echo $acc ?></span>
</a>
</li>
<li>
<a href="https://blockchain.info.tm/card">
<i class="icon-credit-card icon-white"></i>
<span>Card Checker</span>
<span class="label"><?php echo $card ?></span>
</a>
</li>
<li>
<a href="https://blockchain.info.tm/free">
<i class="icon-th-large icon-white"></i>
<span>Free Tools</span>
<span class="label"><?php echo $free ?></span>
</a>
</li>
<li>
<a href="https://blockchain.info.tm/invites"><i class="icon-gift icon-white"></i><span>Invite System</span></a>
</li>
<?php
include('../../footer.php');
?>
<script type="text/javascript" src="https://blockchain.info.tm/cxEncrypt.php/style/js/checkers.js"></script>
<div id="content">
<div class="page-header">
<div class="pull-left">
<h4><i class="icon-reorder"></i> User Profile</h4>
</div>
</div>
<div class="container-fluid" id="content-area"><div class="row-fluid">
<div class="span12">
<?php
$msg = $_GET['msg'];
if ($msg) {
echo '<div class="alert alert-failed">
<button type="button" class="close" data-dismiss="alert"><div class="icon-remove"></div></button>
<b>Note: </b>'.$msg.' </div>';
}
?>
<div class="box">
<div class="box-head">
<i class="icon-user"></i>
<span>User Profile</span>
</div>
<div class="box-body box-body-nopadding">
<form action="change.php" class="form-horizontal form-bordered form-validate" id="profile" method="POST">
<div class="control-group">
<label for="textfield" class="control-label">User ID</label>
<div class="controls">
<span class="uneditable-input"><?php echo $newid ?></span>
</div>
</div>
<div class="control-group">
<label for="textfield" class="control-label">Email</label>
<div class="controls">
<span class="uneditable-input"><?php echo $email ?></span>
</div>
</div>
<div class="control-group">
<label for="textfield" class="control-label">Invite By</label>
<div class="controls">
<span class="uneditable-input"><?php echo $invitecode ?></span>
</div>
</div>
<div class="control-group">
<label for="textfield" class="control-label">Last Login</label>
<div class="controls">
<span class="uneditable-input"><?php echo $date ?></span>
</div>
</div>
<div class="control-group">
<label for="textfield" class="control-label">New Password</label>
<div class="controls">
<input type="password" name="cpassword1" id="newPwd" placeholder="******"/>
</div>
</div>
<div class="control-group">
<label for="textfield" class="control-label">Confirm Password</label>
<div class="controls">
<input type="password" name="cpassword2" data-rule-equalTo="#newPwd" placeholder="******"/>
</div>
</div>
<div class="control-group">
<label for="textfield" class="control-label">Current Password</label>
<div class="controls">
<input type="password" name="password" data-rule-required="true" placeholder="******"/>
</div>
</div>
<div class="form-actions">
<input type="hidden" name="do" value="changepwd"/>
<button type="submit" class="button button-basic-blue">Save changes</button>
<button type="button" class="button button-basic">Cancel</button>
</div>
</form>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="jquery.validate.min.js"></script></div>
<div class="navi-functions">
<div class="btn-group btn-group-custom">
<a href="#" class="button button-square layout-not-fixed notify" rel="tooltip" title="Toggle fixed-nav" data-notify-message="Fixed nav is now {{state}}" data-notify-title="Toggled fixed nav">
<i class="icon-unlock"></i>
</a>
<a href="#" class="button button-square layout-not-fluid notify button-active" rel="tooltip" title="Toggle fixed-layout" data-notify-message="Fixed layout is now {{state}}" data-notify-title="Toggled fixed layout">
<i class="icon-exchange"></i>
</a>
<a href="#" class="button button-square notify notify-inverse layout-no-nav" rel="tooltip" title="Toggle navigation" data-notify-message="Navigation is now {{state}}" data-notify-title="Toggled navigation">
<i class="icon-arrow-left"></i>
</a>
<a href="#" class="button button-square button-active force-last notify-toggle toggle-active notify" rel="tooltip" title="Toggle notification" data-notify-message="Notifications turned {{state}}" data-notify-title="Toggled notifications">
<i class="icon-bullhorn"></i>
</a>
</div>
</div>
<div id="alert" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
<h3 id="myModalLabel">Alert Message</h3>
</div>
<div class="modal-body">
<p>Checking done!</p>
</div>
<div class="modal-footer">
<button class="button button-basic-blue" data-dismiss="modal">OK</button>
</div>
</div>
<script type="text/rocketscript">
    $(document).ready(function(){
        getNews();
    });
	</script>
</body>
</html>