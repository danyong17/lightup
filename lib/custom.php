<?php
// namespace Roots\Sage\Custom;
// use Roots\Sage\Assets;

add_action( 'wp_ajax_nopriv_post_find_package', 'post_find_package' );
add_action( 'wp_ajax_post_find_package', 'post_find_package' );

function post_find_package() {
	$avekwh = $_POST['avekwh'];
	$pageID = $_POST['pageID'];
	$toCeil = (($avekwh / 30) / 12);
	$aveCeil = ceiling($toCeil,0.5);
	
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) { ?>
		<?php $packs = get_field('packages',$pageID) ?>
		<?php $usePack = array(); ?>
		<?php foreach($packs as $pack) { ?>
			<?php $usePack[] = $pack['watts_value']; ?>
		<?php } ?>
		<?php $closer = getClosest($aveCeil,$usePack); ?>
		<?php foreach($packs as $pack) {  ?>
			<?php if($closer == $pack['watts_value'] ) { ?>
				<div class="right-pack-container">
					<div class="title">
						<?php if(get_field('right_package_title',$pageID)) ?>
						<h4><?php echo get_field('right_package_title',$pageID); ?></h4>
					</div>
					<ul>
						<li class="w"><?php echo $pack['watts']; ?></li>
						<li class="p"><?php echo $pack['price']; ?></li>
						<li class="es">Estimated Monthly Savings: <?php echo $pack['estimated_savings']; ?></li>
						<li class="d"><?php echo $pack['description']; ?></li>
					</ul>
				</div>
			<?php } ?>
		<?php } ?>
	<?php }
	die();
}

function getClosest($search, $arr) {
	$closest = null;
	foreach ($arr as $item) {
	   if ($closest === null || abs($search - $closest) > abs($item - $search)) {
		  $closest = $item;
	   }
	}
	return $closest;
 }

 if( !function_exists('ceiling') )
{
    function ceiling($number, $significance = 1)
    {
        return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
    }
}