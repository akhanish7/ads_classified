<?php include_layout_template ('application/view/layouts/admin_header.php'); ?>
<h2>Feedback</h2>
        <p>
            Please provide your feedback below:
        </p>


<form action="feedback_control.php" method="post" name="feedback">

<div class="radio_buttons">
                <label>How do you rate your overall experience?</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>
</div>

<div class="name_email">
                   <label for="name">
                        Your Name:</label>
                    <input type="text" name="name" required>

                    <label>
                        Your Email:</label>
                    <input type="text" name="email" required>
</div>

 <div class="comments">
                    <label>
                        Write Your Comment:</label>
                    <input type="text" name="comment" required>

</div>


<div>
Submit: <input type="submit" value="Submit">
</div>
</form>



