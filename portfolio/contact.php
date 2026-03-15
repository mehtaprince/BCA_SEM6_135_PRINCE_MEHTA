<?php

$conn = mysqli_connect("localhost","root","","portfolio");

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

$sql = "INSERT INTO contact(name,email,message) VALUES('$name','$email','$msg')";
mysqli_query($conn,$sql);

header("Location: contact.php?success=1");
exit();

}

?>



<?php include 'header.php'; ?>

<section class="contact-page">

<div class="contact-container">

<div class="contact-info">

<h2>📩 Contact Me</h2>

<p>If you have any project, opportunity, or collaboration idea, feel free to contact me.</p>

<div class="info-box">
<i class="fas fa-map-marker-alt"></i>
<span>Pune, Maharashtra, India</span>
</div>

<div class="info-box">
<i class="fas fa-envelope"></i>
<span>princemehta592@gmail.com</span>
</div>


</div>


<div class="contact-form">

<?php
if(isset($_GET['success'])){
echo "<p class='success-msg'>Message Sent Successfully!</p>";
}
?>
<form method="POST">

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Your Email" required>

<textarea name="message" rows="6" placeholder="Your Message" required></textarea>

<button type="submit" name="submit">Send Message</button>

</form>

</div>

</div>

</section>

<?php include 'footer.php'; ?>