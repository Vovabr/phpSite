<?php

require_once './header.php';

?>

<section class="contact"> 
    <div class="container">
        <h2>Contact us</h2>
        <p>Proin iaculis purus consequat sem cure.</p>
        <form class="contact__form" method="post">
            <div class="contact__form_fields">
                <div class="contact__form_1">
                    <input class="field" placeholder="Your name*" required type="text" name="name">
                    <input class="field" placeholder="Your e-mail*" required type="email" name="email">
                    <input class="field" placeholder="Phone" type="tel" name="phone">
                </div>
                <div class="contact__form_2">
                    <textarea class="field" placeholder="Your message*" name="message" id="#" cols="30" rows="5"></textarea>
                </div>
            </div>
            <button class="btn_start">Send message</button> 
        </form>
    </div> 
</section>
<?php
require_once './footer.php';