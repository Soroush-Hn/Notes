<?php
require_once "shared\_head.php"; ?>
<div class="min-h-full">
  <?php require_once "shared\_nav.php"; ?>
	<?php require_once "shared\_header.php"; ?>
	<main>
    	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    	  <!-- Your content -->
		    <?php /** @var $note */?>
		    <p class="text-gray-800 text-2xl font-serif"><?php echo htmlspecialchars($note['body'])?></p>
    	</div>
    </main>
</div>
<?php require_once "shared\_footer.php"; ?>
