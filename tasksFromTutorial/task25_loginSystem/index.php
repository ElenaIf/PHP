<!-- Header is in a separate file and we include it here -->
<?php
  include_once 'header.php';
?>

<section class="index-intro">
<?php
            if (isset($_SESSION["useruid"])) {
              echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
              
            }
          
          ?>
  <h1>This Is An Introduction</h1>
  <p>This is a PHP login page creating exercise that I made by following the tutorial on YouTube</p>
</section>

<section class="index-categories">
  <h2>Some Basic Categories</h2>
  <div class="index-categories-list">
    <div>
      <h3>Fun Stuff</h3>
    </div>
    <div>
      <h3>Serious Stuff</h3>
    </div>
    <div>
      <h3>Exciting Stuff</h3>
    </div>
    <div>
      <h3>Boring Stuff</h3>
    </div>
  </div>
</section>
<!-- Also footer is in a separate file -->
<?php
  include_once 'footer.php';
?>
