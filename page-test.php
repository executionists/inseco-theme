<?php

$posts = get_posts(array("post_type" => "inseco_company", "numberposts" => -1));

foreach($posts as $post) {
	//print_r($post);
	echo get_the_post_thumbnail($post->ID, 'logo');
}


?>