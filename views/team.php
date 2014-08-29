<?php
	$members[] = new TeamMember('Alex Cory', 'Alex does some cool stuff for his really freaking cool description.', '13.png');
	$members[] = new TeamMember('Catherine Mullings', 'Catherine does some cool stuff for her really freaking cool description.', '10.png');
	$members[] = new TeamMember('Jessica Allen', 'Jessica does some cool stuff for her really freaking cool description.', '9.jpg');
	$members[] = new TeamMember('Jessica Ou', 'Jessica does some cool stuff for her really freaking cool description.', '2.jpg');


?>
	<div id="team" class="container ">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>The HackingEDU Team</h1>
			</div><!-- col-lg-12 -->
			<div class="col-lg-8">
				<!-- <p>We're excited to get the sponsors underway.  We plan to have Google, Evernote, Visa, and more!</p> -->
			</div><!-- col-lg-8 -->
			<ul class="grid effect-2" id="grid" style="margin-top: 4em;">
				<?php for ($i=0; $i < count($members); $i++): ?>
					<li><a href="singleproject.html"><img src="assets/img/portfolio/<?php echo $members[$i]->getPicture(); ?>"><h2><?php echo $members[$i]->getName(); ?></h2></a></li>
				<?php endfor; ?>
				<!-- <li><a href="singleproject.html"><img src="assets/img/portfolio/1.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/3.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/4.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/12.png"></a></li> -->
				<!-- <li><a href="singleproject.html"><img src="assets/img/portfolio/13.png"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/10.png"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/9.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/2.jpg"></a></li> -->
				<li><a href="singleproject.html"><img src="assets/img/portfolio/14.png"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/5.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/6.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/7.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/6.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/9.jpg"></a></li>
				<li><a href="singleproject.html"><img src="assets/img/portfolio/11.png"></a></li>
			</ul>
    	</div><!-- row -->
    </div><!-- container -->