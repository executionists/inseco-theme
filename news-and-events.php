<div id="news-and-events">
	<div id="tabs">
		<!--Tabs go here -->
		<div class='tab active'>
			<a href="#" rel='news'>News</a>
		</div>
		<div class='tab'>
			<a href="#" rel='events'>Events</a>
		</div>
	</div>
	<div id="news" class='tab-content'>
		<?php $news = get_posts(array('numberposts' => 5, 'category' => 9)); ?>
		<?php if(count($news) > 0) { ?>
			<?php foreach($news as $new) { ?>
				<div class='item'>
					<div class='tab-content-text'>
						<div class='tab-content-image'>
							<?php echo get_the_post_thumbnail( $new->ID, 'medium' ); ?>
						</div>
						<h3><?php echo $new->post_title; ?></h3>
						<span class="date">Posted <?php echo get_the_time('M j Y', $new->ID); ?></span><br>
						<!--<p><?php echo inseco_excerpt($new->ID); ?></p>-->
						<a class="more" href="<?php echo get_permalink( $new->ID ); ?>">Read More...</a>
					</div>
				</div>
			<?php } ?>
		<?php } else { ?>
			<p>No news content to show.</p>
		<?php } ?>
	</div>
	<div id="events" style="display:none;" class='tab-content'>
		<?php $events = get_posts(array('numberposts' => 5, 'category' => 10)); ?>
		<?php if(count($events) > 0) { ?>
			<?php foreach($events as $event) { ?>
				<div class='item'>
					<div class='tab-content-text'>
						<div class='tab-content-image'>
							<?php echo get_the_post_thumbnail( $event->ID, 'medium' ); ?>
						</div>
						<h3><?php echo $event->post_title; ?></h3>
						<span class="date">Posted on: <?php echo get_the_time('M j Y', $event->ID); ?></span><br>
						<!--<p><?php echo inseco_excerpt($event->ID); ?></p>-->
						<a class="more" href="<?php echo get_permalink( $event->ID ); ?>">Read More...</a>
					</div>
				</div>
			<?php } ?>
		<?php } else { ?>
			<p>No events content to show.</p>
		<?php } ?>
	</div>
</div>
<div id="archive-sidebar">
    <h3><strong>Archives</strong></h3>
    <ul>
    <?php wp_get_archives('type=monthly&limit=12'); ?>
    </ul>
</div>