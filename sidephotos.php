<?php if ( ! defined('HABARI_PATH' ) ) { die( _t('Please do not load this page directly.') ); }
$theme->sidephoto_height = 0;
foreach($content->tvi_photos as $photo)
{
	if($photo instanceof MediaAsset) {
		// Calculate real thumbnail height and save it
		if($photo->thumb_width > 206)
			$theme->sidephoto_height += $photo->thumb_height / $photo->thumb_width * 206;
		else
			$theme->sidephoto_height += $photo->thumb_height;
		?><a href="<?php echo Site::get_url('site'); ?>gallery/<?php echo $content->slug; ?>?start=<?php echo $photo->path; ?>"><img src="<?php echo $photo->thumbnail; ?>" alt="<?php echo $photo->title; ?>"></a><?php
	}
	else {
		echo $photo;
	}
}
?>