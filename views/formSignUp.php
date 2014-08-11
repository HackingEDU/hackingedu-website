<div id="apply" class="">
	<div class="container">
		<div class="row mt">
			<h1 class="white-text">Applications are Going Quickly</h1>

			<div class="auth2">
			    <div id="big-form" class="well auth-box2" style="color: #fff">
			        <fieldset>
				        <!-- Form Name -->
				        <legend>Sign Up Form</legend>
						<!-- Form Type -->
	                    <div class="mg-btm-1em btn-group">
		                    <ul class="nav panel-tabs">
		                        <li class="hackerSignup active">
		                        	<a type="button" class="btn btn-default" href="#hackerForm" data-toggle="tab">Hacker</a>
		                        </li>
		                        <li class="volunteerSignup">
		                        	<a type="button" class="hide-right-left-border btn btn-default" href="#volunteerForm" data-toggle="tab">Volunteer</a>
		                        </li>
		                        <li class="sponsorSignup">
		                        	<a type="button" class="btn btn-default" href="#sponsorForm" data-toggle="tab">Sponsor</a>
		                        </li>
		                    </ul>
	                    </div>
	                    <!-- Forms -->
		                <div class="tab-content">
		                    <div class="hackerSignup tab-pane active" id="hackerForm"><?php include_once 'formHacker.php'; ?></div>
		                    <div class="volunteerSignup tab-pane" id="volunteerForm"><?php include_once 'formVolunteer.php'; ?></div>
		                    <div class="sponsorSignup tab-pane" id="sponsorForm"><?php include_once 'formSponsor.php'; ?></div>
		                </div>
			        </fieldset>
			    </div>
			    <!-- <div class="clearfix"></div> -->
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- services section -->