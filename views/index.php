<?php
/* @var $images [] */
/* @var $width int */
/* @var $height int */
/* @var $id string */
?>

<div id="<?= $id ?>">
	<?php $first = true; ?>
	<?php foreach ($images as $image) : ?>
		<a href="<?= $image['src'] ?>" itemprop="image" class="zoom" title="<?= $image['title'] ?>" data-rel="prettyPhoto[<?= $id ?>]">
			<img style="max-width: <?= $width ?>px; max-height: <?= $height ?>px; <?= (!$first)?'display: none;':'' ?>" src="<?= $image['thumb'] ?>" alt="<?= $image['title'] ?>" />
		</a>
		<?php
		if ($first) {
			$first = false;
		}
		?>
	<?php endforeach; ?>
</div>
