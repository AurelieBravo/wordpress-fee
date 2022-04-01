
<?php get_header()?>


<div class="leftSideBar d-flex flex-row">
	<ul>
		<?php
			


	$args = array(
		'numberposts' => 3,
'category' => get_the_ID(false),
	'exclude' => get_the_ID()
	);

	$presentation_posts = get_posts($args);

	if(!empty($presentation_posts))
{
	foreach($presentation_posts as $pst)
	{
	?>
	<div class="card">
	<div><?php echo get_the_post_thumbnail($pst); ?></div>
	<div class="card-body">
	<h5 class="card-title"><?= get_the_title($pst); ?></h5>
	<p class="card-text"><?= get_the_excerpt($pst); ?></p>
<p class="card-text">Catégorie : <?= the_category($pst); ?></p>
	<p class="card-text">Auteur : <?= get_the_author($pst); ?></p>
	<p class="card-text">Date de création : <?= get_the_date('',$pst); ?></p>
	<a href="<?= the_permalink($pst); ?>" class="btn btn-primary">Lire l'article</a>
	</div>
		</div>
		<hr>
		<?php
		}
		}
		?>
	<?php dynamic_sidebar( 'Sidebar' ); ?> 
	<!-- </ul>
</div>
<section>	<article class="post">
	<header>		
		<div class="">
	</header>
	</article>
	<hr>
<div class="posts">
 Mini Post  -->
 <!-- <hp 
	$args = array(
											
	'exclude' => get_the_ID()
	); -->

	<!-- $homepage_posts = get_posts($args);

	if(!empty($homepage_posts))
	{

	foreach($homepage_posts as $pst) -->
	<!-- {
	?> -->
										
	
	
 <!-- </div>
</section>   -->