<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title><?php $settings->out( 'site-meta', 'title' ); ?></title>
		<meta name="description" content="<?php $settings->out( 'site-meta', 'description' ); ?>" />
		<meta name="author" content="<?php $settings->out( 'site-meta', 'author' ); ?>" />
		<?php $hook->apply( 'head' ); ?>
	</head>
	
	<body>
		<div class="container">	
			<div id="bl-main" class="bl-main">
				<section>
					<div data-lf-edit="about" class="bl-box">
						<h2 class="bl-icon bl-icon-about">About</h2>
					</div>
					<div class="bl-content">
						<h2><?php $content->out( 'about', 'title' ); ?></h2>
						<p><?php $content->out( 'about', 'text' ); ?></p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section id="bl-work-section">
					<div data-lf-edit="portfolio" class="bl-box">
						<h2 class="bl-icon bl-icon-works">Works</h2>
					</div>
					<div class="bl-content">
						<h2>My Works</h2>
						<p><?php $content->out( 'portfolio', 'text' ); ?></p>
						<ul id="bl-work-items">
						    <?php $items = $content->get( 'portfolio', 'items' ); ?>
						    <?php if ( $items ) : ?>
						        <?php foreach ( $items as $item ) : ?>
						        <li data-panel="<?php echo str_replace(' ', '-', $item['title']); ?>"><a href="#"><?php if ( isset( $item['screenshot'] ) && $item_screenshot = $image->get( 'intro', $item['screenshot'] ) ) { echo $item_screenshot; } ?></a></li>
						        <?php endforeach; ?>
						    <?php endif; ?>
						</ul>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div data-lf-edit="entries" class="bl-box">
						<h2 class="bl-icon bl-icon-blog">Blog</h2>
					</div>
					<div class="bl-content">
						<h2>My Blog</h2>
						<?php $entries = $content->get( 'entries' ); if ( $entries ) : ?>
						<?php foreach ( $entries as $entry ) : if ( !isset( $entry['entry'] ) || !$entry['entry'] ) return; ?>
						<article>
							<h3><?php echo $entry['title']; ?></h3>
							<?php echo $entry['entry']; ?>
						</article>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<section>
					<div data-lf-edit="contact" class="bl-box">
						<h2 class="bl-icon bl-icon-contact">Contact</h2>
					</div>
					<div class="bl-content">
						<h2><?php $content->out( 'contact', 'title' ); ?></h2>
						<p><?php $content->out( 'contact', 'text' ); ?></p>
					</div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				<!-- Panel items for the works -->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<?php $items_detail = $content->get( 'portfolio', 'items' ); ?>
					<?php if ( $items_detail ) : ?>
					    <?php foreach ( $items_detail as $item_detail ) : ?>
					    <div data-panel="<?php echo str_replace(' ', '-', $item_detail['title']); ?>">
					    	<div>
					    		<?php if ( isset( $item_detail['screenshot'] ) && $item_detail_screenshot = $image->get( 'details', $item_detail['screenshot'] ) ) { echo $item_detail_screenshot; } ?>
					    		<h3><?php echo $item_detail['title']; ?></h3>
					    		<p><?php echo $item_detail['text']; ?></p>
					    	</div>
					    </div>
					    <?php endforeach; ?>
					<?php endif; ?>
					
					<nav>
						<span class="bl-next-work">&gt; Next Project</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		
		<?php $hook->apply( 'footer' ); ?>
		<script>
			$(function() {
				Boxlayout.init();
			});
		</script>
	</body>
</html>
