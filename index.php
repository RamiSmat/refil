<?php 
  include_once 'header.php';
  
?>
<div class="paragraph-hello">
<?php
if(isset($_SESSION["useruid"])){
  echo "<p >Hello there ". $_SESSION["useruid"] ."!</p>";
}

?>
</div>
<h1 class="h1-landing">What is REFIL ?</h1>
<p class="paragraph-landing">REFIL is a Tunisian company founded by 1ATEL1 students at the
National School of Engineering of Tunis.
We specialize in recycling plastic bottles and transforming them into
high-quality filaments for 3D printers.</p>
<h1 class="h1-landing">Our Mission</h1>
<p class="paragraph-landing">Our mission is to address the plastic waste problem in tunisia,
promote sustainability, and support the growth of the 3d printing
industry. aims to make a positive environmental impact by offering
PETG filaments derived from recycled plastic bottles, providing
durability and flexibility for 3D printing applications.</p>
<h1 class="h1-landing">Our Vision</h1>
<p class="paragraph-landing">We envision a future where plastic waste is effectively managed and
transformed into valuable resources, contributing to a cleaner and
more sustainable environment.
We try to address the following SDG goals.</p>
<?php 
  include_once 'footer.php';
  
?>