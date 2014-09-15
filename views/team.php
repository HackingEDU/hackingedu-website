
<div id="team" class="container ">
	<div class="row mt marg-btm-3">
		<div class="col-lg-12">
			<h1>The HackingEDU Team</h1>
		</div><!-- col-lg-12 -->
		<!-- <div class="col-lg-8"> -->
			<!-- <p>We're excited to get the sponsors underway.  We plan to have Google, Evernote, Visa, and more!</p> -->
		<!-- </div> --><!-- col-lg-8 -->

	    <ul class="grid effect-2" id="grid">
		    <?php foreach ($teamMembers as $teamMember): ?>
			    <?php $editedName = str_replace(' ', '_', $teamMember['Name']); ?>
			    <?php if ($teamMember['Picture'] == ' ' || $editedName == '_') { continue; } // // Need Name + Photo to show up ?>
		    	<li>
			        <center>
		    	        <a href="#aboutModal" data-toggle="modal" data-target="#<?php echo $editedName; ?>Modal"><img src="<?php echo $teamMember['Picture']; ?>" name="aboutme" width="140" height="140" class="img-circle"></a>
		    	        <h3 class="mg-bottom-none"><?php echo $teamMember['Name']; ?></h3>
		    	        <h5 class="mg-top-none"><?php echo $teamMember['team name']; ?><?php echo rtrim($teamMember['Position'], ':'); ?></h5 class="mg-top-none">
					</center>
		    	</li>
			<?php endforeach; ?>
	    </ul>
	    <!-- MODALS -->
	    <?php foreach ($teamMembers as $teamMember): ?>
		    <?php $editedName = str_replace(' ', '_', $teamMember['Name']); ?>
		    <?php if ($teamMember['Picture'] == ' ' || $editedName == '_') { continue; } // Need Name + Photo to show up ?>
		    <div class="modal fade" id="<?php echo $editedName; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		                    <h4 class="modal-title" id="myModalLabel">More About <?php echo $teamMember['Name']; ?></h4>
	                    </div>
		                <div class="modal-body">
		                    <center>
			                    <img src="<?php echo $teamMember['Picture']; ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"><!-- </a> -->
			                    <h3 class="media-heading"><?php echo $teamMember['Name']; ?></h3>
			                    <span><strong><?php echo $teamMember['team name']; ?><?php echo rtrim($teamMember['Position'], ':'); ?></strong></span>
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
                            <div class="text-center center-block">
                                <!-- <p class="txt-railway">- Bootsnipp.com -</p> -->
                                <!-- <br /> -->
                                <a href="<?php echo $teamMember['LinkedIn']; ?>" target="rss"><i id="social" class="fa fa-linkedin-square fa-3x social-linkedin"></i></a>
                	            <a href="https://twitter.com/<?php echo $teamMember['Twitter']; ?>" target="rss"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
                	            <a href="<?php echo $teamMember['G+']; ?>" target="rss"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
                	            <a href="https://github.com/<?php echo $teamMember['GitHub']; ?>" target="rss"><i id="social" class="fa fa-github-square fa-3x"></i></a>
		                    </div>
		                    <button type="button" class="btn btn-default pull-right modal-up-2em" data-dismiss="modal">Close</button>
		                </div>
		            </div>
		        </div>
		    </div>
		<?php endforeach; ?>
	</div>
</div><!-- container -->
