<?php
if(has_flashdata('success_msg')) {
?>
<div class="alert alert-success">
	<?php echo get_flashdata('success_msg'); ?>
</div>
<?php
}
?>
<?php
if(has_flashdata('error_msg')) {
?>
<div class="alert alert-danger">
	<?php echo get_flashdata('error_msg'); ?>
</div>
<?php
}
?>