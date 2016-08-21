<h1>All Adds</h1>
<?php foreach ($ads as $key => $ad) { ?>
	<?php echo $key; ?>.
	<?php echo $ad->title; ?>.
	<?php echo $ad->category; ?>.
	<?php echo $ad->location; ?>.
	<?php echo $ad->description; ?>.
	<?php echo $ad->price; ?>.
	<br>

<?php } ?>
