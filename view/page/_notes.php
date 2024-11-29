<?php
require_once "shared\_head.php"; ?>
	<div class="min-h-full">
  <?php require_once "shared\_nav.php"; ?>
		<?php require_once "shared\_header.php"; ?>
	<main>
    	<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    	  <!-- Your content -->
		    <ul>
				<?php /** @var $notes */
				foreach($notes as $note): ?>
					<li class="text-blue-600">
						<a href="/note?id=<?php echo $note['id']?>"><?php echo htmlspecialchars($note['body'])?></a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="bg-blue-800 w-40 mt-8 p-2 rounded-2xl text-center text-xl font-serif">
				<a href="/notes/create" class="text-cyan-100">Create Note</a>
			</div>
    	</div>

    </main>
</div>
<?php require_once "shared\_footer.php"; ?>