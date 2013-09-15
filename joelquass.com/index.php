<?php 

	defined( '_JEXEC' ) or die;
	JHTML::_('behavior.framework', true);
	$app = JFactory::getApplication();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/script.js"></script>
</head>

<body>

	<div id="jq_header">
		<div class="header_wrapper">
			<jdoc:include type="modules" name="header" /> 
			<div class="clear"></div>
		</div>
	</div>

	<div id="jq_menu">
	    <div class="jq_menu_wrapper">
			<div class="menu_wrapper">
				<jdoc:include type="modules" name="menu" /> 
				<div class="clear"></div>
			</div>
			<div class="social_wrapper">
				<jdoc:include type="modules" name="social" />
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<jdoc:include type="modules" name="breadcrumb" /> 
	
	<div class="container">
		<div class="container_wrapper">
			<?php if($this->countModules('left')) : ?>
			<div id="jq_left">
				<jdoc:include type="modules" name="left" /> 
			</div>
			<?php endif; ?>

			<!-- Checks if modules are loading in either the left or right positions and loads the proper div id -->
			<?php if($this->countModules('left') && $this->countModules('right')) : ?>
			<div id="jq_content_lr">
			<?php elseif($this->countModules('left')) : ?>
			<div id="jq_content_l">
			<?php elseif($this->countModules('right')) : ?>
			<div id="jq_content_r">
			<?php else : ?>
			<div id="jq_content">
			<?php endif; ?>
				<jdoc:include type="message" /> 
				<jdoc:include type="modules" name="top" /> 
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="bottom" />
			</div>

			<?php if($this->countModules('right')) : ?>
			<div id="jq_right">
				<jdoc:include type="modules" name="right" /> 
			</div>
			<?php endif; ?>

			<div class="clear"></div>
		</div>
	</div>
</body>

<div id="footer_header">
	<div class="footer_header_wrapper">
		<jdoc:include type="modules" name="footer_header" />
	</div>

</div>

<footer>
	<div class="footer_wrapper">
		<jdoc:include type="modules" name="footer" />
	</div>
	
	
	
	<div class="copyright_wrapper">
	<?php 
		if ( date( "Y") !== "2013" )
		{
		echo "Copyright 2013-".date( "Y");
		} else {
		echo "Copyright 2013";
		} ; 
		
		?>
		
		&copy; Good Management Is Not, LLC
	</div>
	
</footer>




<jdoc:include type="modules" name="debug" />

</html>