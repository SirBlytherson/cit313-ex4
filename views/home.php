<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
	<h1> Hello From the View <?php if(isset($_SESSION['uID'])) $_SESSION['uID']; ?></h1>
  </div>
</div>
<?php include('elements/footer.php');?>
