<?php
include('./includes/header.php');
?>

<div class="form-container">
    <form action="contactinfo.php" method="get">
        <div class="field">
            <label for=""> Full Name</label>
            <input type="text" name="fname">
        </div>
        <div class="field">
            <label for=""> Email</label>
            <input type="email" name="email">
        </div>
        <div class="field">
            <label for=""> Phone</label>
            <input type="text" name="phone">
        </div>
        <div class="field">
            <label for=""> Message</label>
            <textarea rows="10" name="msg"></textarea>
        </div>
        <div class="field">
            <input type="submit" value="Send Message">
        </div>

    </form>

</div>

<?php
include('./includes/footer.php');
?>