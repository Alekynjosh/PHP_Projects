<?php if (count($errors) > 0): ?>
	<div class="text-danger" style="border-radius: 5px;margin: 0px auto;padding: 2px;border: 1px solid #a94442;" >
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>