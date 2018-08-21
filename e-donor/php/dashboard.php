<?php include 'connection.php'; ?>
<?php include 'navbar.php'; ?>

<div>
	<?php if (isset($_SESSION['username'])): ?>
		<?php include 'donor_content.php'; 
		
		?>
	<?php endif ?>
	<?php if (isset($_SESSION['recipient'])): ?>
		<?php include 'rec_content.php';
		
		 ?>
	<?php endif ?>
	
</div>

