<?php include 'partials/header.php'; ?>
	<div class="post">
		<a href="<?= route('post', ['slug' => $post->slug]) ?>" class="title"><?= $post->title; ?></a>
		<p><?= $post->content; ?></p>

		<?php if(config('blog')['socialButtons'] == 1):?>
			<!-- AddToAny BEGIN -->
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
				<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
				<a class="a2a_button_facebook"></a>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_google_plus"></a>
			</div>
			<script async src="https://static.addtoany.com/menu/page.js"></script>
			<!-- AddToAny END -->
		<?php endif;?>

		<div class="published-at">
			<p>Posted by <?= $post->user()->name; ?> on <?= $post->created_at; ?></p>
		</div>
	</div>
<?php include 'partials/footer.php'; ?>