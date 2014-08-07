<?php // VOLUNTEER FORM ?>
<form>
    <!-- Name -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Name:</label> -->
        <!-- <div class=""> -->
        <input id="textinput" name="textinput" placeholder="Volunteer Name:  Alex Cory" class="form-control input-md" type="text">
          <!-- <span class="help-block">help</span> -->
        <!-- </div> -->
    </div>

    <!-- Email -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your Email</label> -->
        <div class="">
            <input id="textinput" name="textinput" placeholder="Email:  you@yourSchool.edu" class="form-control input-md" type="text">
            <!-- <span class="help-block">help</span> -->
        </div>
    </div>

    <!-- School -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your School</label> -->
        <div class="">
            <input id="textinput" name="textinput" placeholder="School:  Example University (put N/A if not in school)" class="form-control input-md" type="text">
            <!-- <span class="help-block">help</span> -->
        </div>
    </div>

    <!-- Gender -->
<!--     <div class="form-group">
        <label class=" control-label" for="gender">Gender?</label>
        <div class="">
            <label class="radio-inline" for="gender-0">
                <input name="gender" id="gender-0" value="1" checked="checked" type="radio">
                Male
            </label>
            <label class="radio-inline" for="gender-1">
                <input name="gender" id="gender-1" value="2" type="radio">
                Female
            </label>
            <label class="radio-inline" for="gender-2">
                <input name="gender" id="gender-2" value="3" type="radio">
                Other
            </label>
        </div>
    </div> -->

    <!-- First Hackathon? -->
    <div class="form-group">
        <label class=" control-label" for="fHackathon">Is this your first hackathon?</label>
        <div class="">
            <label class="radio-inline" for="fHackathon-0">
                <input name="fHackathon" id="fHackathon-0" value="1" checked="checked" type="radio">
                Yes
            </label>
            <label class="radio-inline" for="fHackathon-1">
                <input name="fHackathon" id="fHackathon-1" value="2" type="radio">
                No
            </label>
        </div>
    </div>

    <!-- Github -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your Github</label> -->
        <!-- <div class=""> -->
            <input id="textinput" name="textinput" placeholder="Github:  @github_username" class="form-control input-md" type="text">
            <!-- <span class="help-block">help</span> -->
        <!-- </div> -->
    </div>

    <!-- LinkedIn -->
    <div class="form-group">
      <!-- <label class=" control-label" for="textinput">Your LinkedIn</label> -->
      <!-- <div class=""> -->
        <input id="textinput" name="textinput" placeholder="LinkedIn:  https://linkedin.com/in/your_linkedin_url" class="form-control input-md" type="text">
        <!-- <span class="help-block">help</span> -->
      <!-- </div> -->
    </div>

    <!-- Mentor? -->
    <div class="form-group">
        <label class=" control-label" for="radios">Will you be volunteering as a mentor?</label>
        <div class="">
            <label class="radio-inline" for="radios-0">
                <input name="radios" id="radios-0" value="1" type="radio">
                Yes
            </label>
            <label class="radio-inline" for="radios-1">
                <input name="radios" id="radios-1" value="2" checked="checked" type="radio">
                No
            </label>
        </div>
    </div>

    <!-- Company -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your Major</label> -->
        <div class="">
            <input id="textinput" name="textinput" placeholder="Company:  (put N/A if not working)" class="form-control input-md" type="text">
            <!-- <span class="help-block">help</span> -->
        </div>
    </div>

    <!-- Volunteer Request -->
<!--     <div class="form-group">
        <label class=" control-label" for="textarea">Is there a specific role you would like to have as a volunteer?</label>
        <div class="">
          <textarea class="form-control" id="textarea" name="textarea">Tell us what you would like to do! :)</textarea>
        </div>
    </div> -->

    <button id="singlebutton" name="singlebutton" class="btn btn-default pull-right">Submit</button>

</form>