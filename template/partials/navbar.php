	<ul class="main_nav">
	<li class="lang" key="home"><a href="<?php echo base_url(); ?>">HOME</a></li>
	<li class="lang" key="haarschnitt"><a	href="#">HAARSCHNITT</a></li>
	<li class="lang" key="frisoerin"><a href="<?php echo base_url(); ?>frisoerin.php">FÜR FRISÖRIN</a></li>
	<?php if(!isset($_SESSION['is_login'])) {?>	
		<li class="lang" key="einloggen"><a href="<?php echo base_url(); ?>register.php">REGISTRIEREN</a></li>				
		<li class="lang" key="einloggen"><a href="<?php echo base_url(); ?>einloggen.php">EINLOGGEN</a></li>
	<?php } ?>

	<li><a href="#" class="translate" id="de" >DE</a> </li>
	<?php if(isset($_SESSION['is_login'])) {?>				
		<li><div class="dropdown">
			 <a href="#" class="dropdown-toggle"  data-toggle="dropdown" >Hi,<?php echo $_SESSION['name']; ?><span class="caret"></span></a> 
			 <ul class="dropdown-menu user-dropdown">
	          <li class="user_link_item"><a href="<?php echo base_url();?>logout.php">Logout</a></li>
	        </ul>
		</div></li>
	<?php } ?>
</ul>