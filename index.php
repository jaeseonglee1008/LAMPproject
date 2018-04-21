<?php 
include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Home1</h2>
		<p>Main page link here</p>
		
		<?php 
		if(isset($_SESSION['u_id'])){
			echo"You are logged in!";
		}
		?>
		
		<script type="text/javascript">
			document.write(new Date());
		</script>
	</div>
</section>


<?php 
include_once 'footer.php';
?>
