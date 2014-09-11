<?php
	// New Team Members
	// $members[] = new TeamMember(
	// 	/* NAME        */ 'Alex Cory',
	// 	/* DESCRIPTION */ 'Alex does some cool stuff for his really freaking cool description.',
	// 	/* IMAGE       */ 'alexcory.jpg',
	// 	/* LINKEDIN    */ 'in/alexcory',
	// 	/* GOOGLE+     */ '+AlexCory',
	// 	/* TWITTER     */ 'AlexCory_'
	// );
	// $members[] = new TeamMember(
	// 	/* NAME        */ 'Jessica Allen',
	// 	/* DESCRIPTION */ 'Jessica does some cool stuff for her really freaking cool description.',
	// 	/* IMAGE       */ 'jessicaallen.jpg',
	// 	/* LINKEDIN    */ 'pub/jessica-allen/50/820/b17',
	// 	/* GOOGLE+     */ '+JessicaAllen1',
	// 	/* TWITTER     */ ''
	// );
	// $members[] = new TeamMember(
	// 	/* NAME        */ 'Jessica Ou',
	// 	/* DESCRIPTION */ 'Jessica does some cool stuff for her really freaking cool description.',
	// 	/* IMAGE       */ 'jessicaou.jpg',
	// 	/* LINKEDIN    */ 'in/jessicaou',
	// 	/* GOOGLE+     */ '111122167171528863086',
	// 	/* TWITTER     */ ''
	// );
	// $members[] = new TeamMember(
	// 	/* NAME        */ 'Yanny Zhang',
	// 	/* DESCRIPTION */ 'Yanny does some cool stuff for her really freaking cool description.',
	// 	/* IMAGE       */ 'yannyzhang.jpg',
	// 	/* LINKEDIN    */ 'pub/yanny-zhang/9b/a20/83',
	// 	/* GOOGLE+     */ '+YanHongZhang',
	// 	/* TWITTER     */ ''
	// );
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
 <!-- <div id="portfolio"> -->
<div id="team" class="container ">
	<div class="container"
    	<div class="row mt">

			<div class="col-lg-12 mt">
				<h1>The HackingEDU Team</h1>
			</div><!-- col-lg-12 -->
			<!-- <div class="col-lg-8"> -->
				<!-- <p>We're excited to get the sponsors underway.  We plan to have Google, Evernote, Visa, and more!</p> -->
			<!-- </div> --><!-- col-lg-8 -->

			<!-- <br> --><!-- this br tag keeps everyone's pictures in line -->

		    <ul class="grid effect-2" id="grid">
			    <?php foreach ($teamMembers as $teamMember): ?>

				    <?php $editedName = str_replace(' ', '_', $teamMember['Name']); ?>
				    <?php if ($teamMember['Picture'] == ' ' || $editedName == '_') { continue; } ?><!-- Filtering out for only the Core Team -->
				    	<li>
					        <center>
				    	        <a href="#aboutModal" data-toggle="modal" data-target="#<?php echo $editedName; ?>Modal"><img src="<?php echo $teamMember['Picture']; ?>" name="aboutme" width="140" height="140" class="img-circle"></a>
				    	        <h3 class="mg-bottom-none"><?php echo $teamMember['Name']; ?></h3>
				    	        <h5 class="mg-top-none"><?php echo rtrim($teamMember['Position'], ':'); ?></h5 class="mg-top-none">
							</center>
				    	</li>
				<?php endforeach; ?>
		    </ul>
		    <?php foreach ($teamMembers as $teamMember): ?>
			    <?php // $editedName = str_replace(' ', '_', $teamMember['Name']); ?>
			    <?php $editedName = str_replace(' ', '_', $teamMember['Name']); ?>
			    <?php if ($teamMember['Picture'] == ' ' || $editedName == '_') { continue; } ?><!-- Filtering out for only people who've filled out information -->
			    <!-- Modal -->
			    <div class="modal fade" id="<?php echo $editedName; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			        <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			                    <h4 class="modal-title" id="myModalLabel">More About <?php echo $teamMember['Name']; ?></h4>
			                    </div>
			                <div class="modal-body">
			                    <center>
			                    <img src="<?php echo $teamMember['Picture']; ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
			                    <h3 class="media-heading"><?php echo $teamMember['Name']; ?></h3>
			                    <span><strong><?php echo rtrim($teamMember['Position'], ':'); ?></strong></span>
			                        <!-- <span class="label label-warning">HTML5/CSS</span> -->
			                        <!-- <span class="label label-info"></span> -->
			                        <!-- <span class="label label-info">Microsoft Office</span> -->
			                        <!-- <span class="label label-success">Windows XP, Vista, 7</span> -->
			                    </center>
			                    <hr>
			                    <center>
			                    <p class="text-left"><strong>Bio: </strong><br><?php echo $teamMember['Blurb']; ?></p>
			                    <br>
			                    </center>
			                    <!-- <center> -->
				                    <div class="social text-center">
				                    	<a href="https://twitter.com/<?php echo $teamMember['Twitter']; ?>" target="rss" class="[ social-icon twitter ] animate"><span class="fa fa-twitter"></span></a>
				                    	<a href="https://github.com/<?php echo $teamMember['GitHub']; ?>" target="rss" class="[ social-icon github ] animate"><span class="fa fa-github-alt"></span></a>
				                    	<a href="<?php echo $teamMember['G+']; ?>" target="rss" class="[ social-icon google-plus ] animate"><span class="fa fa-google-plus"></span></a>
				                    	<a href="<?php echo $teamMember['LinkedIn']; ?>" target="rss" class="[ social-icon linkedin ] animate"><span class="fa fa-linkedin"></span></a>
				                    </div>
			                    <!-- </center> -->
			                    <button type="button" class="btn btn-default pull-right modal-up-2em" data-dismiss="modal">Close</button>
			                </div>
			                <!-- <div class="modal-footer">
			                </div> -->
			            </div>
			        </div>
			    </div>
			<?php endforeach; ?>

	</div>
</div><!-- container -->
