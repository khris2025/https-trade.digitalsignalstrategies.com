<?php
include('include/header.php');
?>
<style>
    .contact-container {
        padding-top: 200px;
        padding-bottom: 150px;
    }

    .contact-hero {
        background-image: url('images/Hero5.png');
        /* adjust path */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 250px;
        opacity: 0.8;
        /* adjust height as needed */
        position: relative;
    }
</style>
<div class="contact-hero text-white d-flex align-items-center justify-content-center">
    <h1 class="text-center fw-bold">Contact Us</h1>
</div>

<div class="container contact-container">
    <h1>Contact Us</h1>

    <form action="#" method="post">
        <div class="form-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="Subject" required>
        </div>
        <br>
        <div class="form-group">
            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Body" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>



<?php
include('include/footer.php');
?>