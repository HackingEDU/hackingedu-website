<?php // SPONSOR FORM ?>
<form>
    <!-- Company Name -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Name:</label> -->
        <!-- <div class=""> -->
        <input id="textinput" name="textinput" placeholder="Sponsor Name:  Google Inc." class="form-control input-md" type="text">
          <!-- <span class="help-block">help</span> -->
        <!-- </div> -->
    </div>

    <!-- Contact Name -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Name:</label> -->
        <!-- <div class=""> -->
        <input id="textinput" name="textinput" placeholder="Contact's Name:  Mary Example" class="form-control input-md" type="text">
          <!-- <span class="help-block">help</span> -->
        <!-- </div> -->
    </div>

    <!-- Contact Email -->
    <div class="form-group">
        <!-- <label class=" control-label" for="textinput">Your Email</label> -->
        <div class="">
            <input id="textinput" name="textinput" placeholder="Contact's Email:  you@yourSchool.edu" class="form-control input-md" type="text">
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

    <!-- Levels Of Sponsorship -->
    <div class="form-group">
        <label class=" control-label" for="grade">Which level of sponsorship would you like to participate in?</label>
        <div class="">
            <label class="radio-inline" for="grade-0">
                <input name="grade" id="grade-0" value="1" checked="checked" type="radio">
                1st Level
            </label>
            <label class="radio-inline" for="grade-1">
                <input name="grade" id="grade-1" value="2" type="radio">
                2nd Level
            </label>
            <label class="radio-inline" for="grade-2">
                <input name="grade" id="grade-2" value="3" type="radio">
                3rd Level
            </label>
            <label class="radio-inline" for="grade-2">
                <input name="grade" id="grade-2" value="3" type="radio">
                4th Level
            </label>
            <label class="radio-inline" for="grade-2">
                <input name="grade" id="grade-2" value="3" type="radio">
                5th Level
            </label>
        </div>
    </div>

    <!-- First Hackathon? -->
<!--     <div class="form-group">
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
 -->
    <!-- Travel Arrangements? -->
<!--     <div class="form-group">
        <label class=" control-label" for="radios">Will you need a travel reimbersment/arrangement to attend Hacking Edu?</label>
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
    </div> -->

    <!-- Textarea -->
    <div class="form-group">
        <label class=" control-label" for="textarea">At Hacking Edu we want to show the world the new ways we can learn.  How do you plan to tackle this challenge?</label>
        <div class="">
          <textarea class="form-control" id="textarea" name="textarea">Tell us about your idea! :)</textarea>
        </div>
    </div>

    <button id="singlebutton" name="singlebutton" class="btn btn-default pull-right">Submit</button>

</form>