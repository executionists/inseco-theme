<?
	$id   = get_the_ID();
	$flag = ($id == 18 || $id == 24) ? true : false;
?>
<!--<div id="<? //if($flag) echo 'submenu'; else echo 'submenu2';
 			//echo 'submenu'; ?>">
<ul>
<li><a href="?page_id=67" rel="section" title="Go to Life Sciences">&nbsp;</a>
<li><a href="?page_id=41" rel="section" title="Go to Pharma Process" id="hapar">&nbsp;</a>
<li><a href="?page_id=69" rel="section" title="Go to Site Bilt" id="areaofexp">&nbsp;</a></li> 
<li><a href="?page_id=71" rel="section" title="Go to Pumps and Mechanical Seals">&nbsp;</a>
<li><a href="?page_id=73" rel="section" title="Go to Spare Parts and Field Services">&nbsp;</a>
</ul>

</div>-->
<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'subnav' ) ); ?>