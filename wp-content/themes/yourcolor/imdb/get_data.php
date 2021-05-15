<?php
ob_start();
define('WP_USE_THEMES', false);
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
?>
<?php
require get_template_directory().'/imdb/class_IMDb.php';
$imdb = new IMDb(true);

$q = trim(stripslashes($_GET['id']));
$movie = $imdb->find_by_id($q);
////////////////////////////////////////////////
?>
<script>
$(document).ready(function(e) {
	<?php if( get_option('imdb_set_title') == 'yes' ) { ?>
    $('#Title').val('<?php echo str_replace('%s', $movie->title, get_option('imdb_set_title_perma'))?>');
	<?php } ?>
    $('#released').val('<?php echo $movie->released?>');
    $('#runtime').val('<?php echo $movie->runtime?>');
    $('#imdbRating').val('<?php echo $movie->rating?>');
    $('#imdbVotes').val('<?php echo $movie->votes?>');
	$('#new-tag-actor').val('<?php echo $movie->actors?>');
	$('#new-tag-director').val('<?php echo $movie->director?>');
	$('#new-tag-escritor').val('<?php echo $movie->writer?>');
	$('#new-tag-release-year').val('<?php echo $movie->year?>');
	<?php if( get_option('imdb_set_title') == 'yes' ) { ?>
	<?php $perma = get_option('imdb_set_title_perma'); ?>
	<?php $perma = str_replace('%title', $movie->title, $perma); ?>
	<?php $perma = str_replace('%year', $movie->year, $perma); ?>
	$('#title').val('<?php echo $perma?>');
	<?php } ?>
	<?php if( get_option('imdb_set_trailer') == 'yes' ) { ?>
		<?php
		$imdb = new IMDb(false);
		$imdb_2 = new IMDb(true);
		$imdb_2->summary=false;
		
		$q = trim(stripslashes($_GET['id']));
		$movie_2 = $imdb_2->find_by_id($q);
		?>
		<?php $i = 0; foreach( $movie_2->trailer->encodings as $triler ) { ?>
			<?php if( $i == 0 ) { ?>
				<?php $trilerLink = '<video controls="" name="media"><source src="'.$triler->url.'" type="video/mp4"></video>'; ?>
			<?php } ?>
		<?php $i++; } ?>
		$('#Trailer').val('<?php echo $trilerLink?>');
	<?php } ?>
});
</script>