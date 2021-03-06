<?php include_once '../includes/auth-bg.php'; ?>
<html>

<head>
<?php 
$pgtitle = 'Rescue Cache';
include_once '../includes/head.php'; 
?>
</head>

<body>
<div class="container">
<div class="row" id="header" style="padding-top: 10px;">
	<?php include_once '../includes/top-left.php'; ?>
	<div class="col-sm-8 white" style="text-align: center; height: 100px; vertical-align: middle;">
		<br /><span class="sechead">Rescue Cache FAQ</span><br /><br />
		Please join the in-game channel <span style="color: gold; font-weight: bold;">EvE-Scout</span> for further assistance.
	</div>
	<?php include_once '../includes/top-right.php'; ?>
</div>
<div class="ws"></div>
<div class="row">
	<div class="col-sm-12">
		<div class="panel-group" id="faqAccordion">
			<?php include_once '../includes/faq-q1.php'; ?>
			<div class="panel panel-default">
				<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
					<h4 class="panel-title">
						<a href="#" class="ing">What is the Rescue Cache program?</a>
					</h4>
				</div>
				<div id="question2" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p>The EvE-Scout Rescue Cache (ESRC) program, founded in early YC 118 by <a href="https://gate.eveonline.com/Profile/Forcha%20Alendare">Forcha Alendare</a>, provides a basic emergency resource kit for capsuleers stranded in wormholes, regardless of alliance, sovereignty, or play style.</p>
						<p>ESRC is only one facet of the EvE-Scout Rescue division, a dedicated group of Signal Cartel pilots who have answered to call of service to the greater New Eden community. As well as being a service to the EVE community, this program provides Signal Cartel members an opportunity to expand their exploration experiences, wormhole lifestyle, and game play content.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
					<h4 class="panel-title">
						<a href="#" class="ing">What is a rescue cache?</a>
					</h4>
				</div>
				<div id="question3" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p>A rescue cache is a small secure container that contains one (1) core probe launcher and eight (8) core scanner probes (and, usually, a few "hugs" [fireworks, snowballs] or other trinkets for fun) which is anchored somewhere in a wormhole.</p>
						<p>When a capsuleer is stranded and in need, they can contact a Signal Cartel scout in the public EvE-Scout channel for assistance. If the contents of a cache meet the stranded capsuleer's need, the scout will look up the rescue cache's location and password, provide these to the stranded pilot, and assist them in locating and gaining access to it.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
					<h4 class="panel-title">
						<a href="#" class="ing">Who <em>won't</em> be helped by a rescue cache?</a>
					</h4>
				</div>
				<div id="question4" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						<p>Because a rescue cache is a small secure container that contains a minimum of one (1) core probe launcher and eight (8) core scanner probes, it will not be any help to you if you do not already have a probe launcher fitted to your ship, if you do not have a way to change your fit in your current wormhole, or if you no longer have a ship at all!</p>
						<p>In these cases, be sure to see if we have a <a href="../rf/">rescue frigate</a> that is accessible to you.</p>
					</div>
				</div>
			</div>
			<?php include_once '../includes/faq-q10.php'; ?>
			<?php include_once '../includes/faq-q20.php'; ?>
		</div>
	</div>
</div>
</div>
</body>
</html>