<?php
	// New Team Members
	$members[] = new TeamMember(
		/* NAME        */ 'Alex Cory',
		/* DESCRIPTION */ 'Alex does some cool stuff for his really freaking cool description.',
		/* IMAGE       */ 'alexcory.jpg',
		/* LINKEDIN    */ 'in/alexcory',
		/* GOOGLE+     */ '+AlexCory',
		/* TWITTER     */ 'AlexCory_'
	);
	$members[] = new TeamMember(
		/* NAME        */ 'Jessica Allen',
		/* DESCRIPTION */ 'Jessica does some cool stuff for her really freaking cool description.',
		/* IMAGE       */ 'jessicaallen.jpg',
		/* LINKEDIN    */ 'pub/jessica-allen/50/820/b17',
		/* GOOGLE+     */ '+JessicaAllen1',
		/* TWITTER     */ ''
	);
	$members[] = new TeamMember(
		/* NAME        */ 'Jessica Ou',
		/* DESCRIPTION */ 'Jessica does some cool stuff for her really freaking cool description.',
		/* IMAGE       */ 'jessicaou.jpg',
		/* LINKEDIN    */ 'in/jessicaou',
		/* GOOGLE+     */ '111122167171528863086',
		/* TWITTER     */ ''
	);
	$members[] = new TeamMember(
		/* NAME        */ 'Yanny Zhang',
		/* DESCRIPTION */ 'Yanny does some cool stuff for her really freaking cool description.',
		/* IMAGE       */ 'yannyzhang.jpg',
		/* LINKEDIN    */ 'pub/yanny-zhang/9b/a20/83',
		/* GOOGLE+     */ '+YanHongZhang',
		/* TWITTER     */ ''
	);
	// $members[] = new TeamMember(
	// /* NAME        */ 'Catherine Mullings',
	// 	/* DESCRIPTION */ 'Jessica does some cool stuff for her really freaking cool description.',
	// 	/* IMAGE       */ '13.png',
	// 	/* LINKEDIN    */ 'alexcory',
	// 	/* GOOGLE+     */ 'AlexCory',
	// 	/* TWITTER     */ 'AlexCory_'
	// );
	// $members[] = new TeamMember(
	// /* NAME        */ 'Blake Tsuzaki',
	// 	/* DESCRIPTION */ 'Jessica does some cool stuff for her really freaking cool description.',
	// 	/* IMAGE       */ '13.png',
	// 	/* LINKEDIN    */ 'alexcory',
	// 	/* GOOGLE+     */ 'AlexCory',
	// 	/* TWITTER     */ 'AlexCory_'
	// );


?>

	<div id="team" class="container ">

			<div class="col-lg-12 mt">
				<h1>The HackingEDU Team</h1>
			</div><!-- col-lg-12 -->
			<!-- <div class="col-lg-8"> -->
				<!-- <p>We're excited to get the sponsors underway.  We plan to have Google, Evernote, Visa, and more!</p> -->
			<!-- </div> --><!-- col-lg-8 -->

			<br><!-- this br tag keeps everyone's pictures in line -->

 			<div id="links" class="">
				<ul class="grid effect-2" id="grid">
					<?php for ($i=0; $i < count($members); $i++): ?>
						<li>
							<a href="assets/img/team_img/<?php echo $members[$i]->getPicture(); ?>" title="<?php echo $members[$i]->getName(); ?>" data-gallery>
								<img class="team_img_size pull-left col-lg-12" src="assets/img/team_img/<?php echo $members[$i]->getPicture(); ?>" alt="<?php echo $members[$i]->getName(); ?>">
								<h2><?php echo $members[$i]->getName(); ?></h2>
								<a class="pull-left marg-left-1" href="<?php echo $members[$i]->getLinkedIn(); ?>">LinkedIn</a>
								<a class="pull-left marg-left-1" href="<?php echo $members[$i]->getGooglePlus(); ?>">Google+</a>
								<a class="pull-left marg-left-1" href="<?php echo $members[$i]->getTwitter(); ?>">Twitter</a>
							</a>
						</li>
					<?php endfor; ?>
				</ul>
			</div>

			<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
			<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
			    <!-- The container for the modal slides -->
			    <div class="slides"></div>
			    <!-- Controls for the borderless lightbox -->
			    <h3 class="title"></h3>
			    <a class="prev">‹</a>
			    <a class="next">›</a>
			    <a class="close">×</a>
			    <a class="play-pause"></a>
			    <ol class="indicator"></ol>
			    <!-- The modal dialog, which will be used to wrap the lightbox content -->
			    <div class="modal fade">
			        <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" aria-hidden="true">&times;</button>
			                    <h4 class="modal-title"></h4>
			                </div>
			                <div class="modal-body next"></div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-default pull-left prev">
			                        <i class="glyphicon glyphicon-chevron-left"></i>
			                        Previous
			                    </button>
			                    <button type="button" class="btn btn-primary next">
			                        Next
			                        <i class="glyphicon glyphicon-chevron-right"></i>
			                    </button>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

    </div><!-- container -->