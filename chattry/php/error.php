

<?php if(count($errors) > 0) : ?>
<div style="background-color: red;">
	<?php foreach($errors as $error) : ?>
		<p><?php echo $error ?></p>
	<?php endforeach; ?>
</div>
<?php endif; ?>