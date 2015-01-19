<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="marg-top-20">
        <div class="col-xs-12 col-sm-12 col-lg-6 col-lg-offset-3 text-center">
            <h1>Contact Form</h1>

            <div class="auth contact-form well auth-box">
                <div id="big-form" class="">
    	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	            <h3 class="pull-left">What can we help you with?</h3>
                    <!-- Form Name -->
                    <form method='post' action='contactFormEmail.php'>

                        <!-- Name -->
                        <div class="form-group">
                        <!-- <label class="pull-left control-label" for="textinput">Your Name</label> -->
                            <div class="">
                                <input id="name" name="name" placeholder="Your Name" class="pull-left form-control input-md contact-border-bottom" type="text">
                                <!-- <span class="help-block">help</span> -->
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <!-- <label class="pull-left control-label" for="textinput">Your Email</label> -->
                            <div class="">
                            <input id="email" name="email" placeholder="example@hacker.com" class="pull-left form-control input-md contact-border-bottom" type="text">
                            <!-- <span class="help-block">help</span> -->
                            </div>
                        </div>

                        <!-- Subject & Message -->
                        <div class="form-group">
                            <!-- Subject -->
                            <textarea class="pull-left form-control subject marg-top-1" id="subject" name="subject" placeholder="Subject"></textarea>
                            <!-- Textarea -->
                            <textarea class="pull-left form-control marg-btm-1" id="message" name="message" placeholder="Ask away! :)"></textarea>
                        </div>

                        <input id="singlebutton" name="singlebutton" class="btn m-btm-1em btn-default pull-right" type="submit" style="color: black"><!--Send--></input>

                    <!-- </fieldset> -->
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
		</div>
    </div>
</div>

<?php // include_once 'contactFormEmail.php'; ?>
