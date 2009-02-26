<?php 
$page = 'home';
require_once('libs/common.php');
start_html_output();
require_once('inc/header.i');
require_once('inc/menu.i');
?>

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="box1">
			<p><img src="images/img04_3.gif" alt="" width="74" height="79" class="left" /><?php echo getlocal("head.intro") ?></p>
		</div>
		<div class="post">
			<h2 class="title"><?php echo getlocal("index.how.title") ?></h2>
			<div class="entry">
				<p><?php echo getlocal("index.how.text") ?></p>
				<p><?php echo getlocal("index.license") ?></p>
			</div>
			<div class="nometa"></div>
		</div>
		<div class="post">
			<h2 class="title"><?php echo getlocal("index.post.title") ?></h2>
			<div class="entry">
				<?php echo getlocal("index.post.text") ?>
			</div>
			<div class="meta">
				<p class="byline"><?php echo getlocal("index.post.when") ?></p>
				<p class="links"><?php echo getlocal("index.post.link") ?></p>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
<?php
require_once('inc/locales.i');
?>
			<li>
				<h2>Quick <b>Navigation</b></h2>
				<ul>
					<li><a href="#">Screenshots</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Demo</a></li>
					<li><a href="#">Download</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>

<?php require_once('inc/footer.i'); ?>
