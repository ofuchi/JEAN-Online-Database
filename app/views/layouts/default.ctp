<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('ema.generic');

		echo $scripts_for_layout;
	?>
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>  
        <script type="text/javascript">google.load("jquery", "1.6");</script>
        <?php echo $this->Html->script('jquery');?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link('Japanese Emergency Medicine Research Alliance', 'http://www.emalliance.org/wp/jemra'); ?></h1>
                        <?php if ($loginuser != null) {
                            e('<h3>logged in as '.$loginuser['User']['username']
                                    .$this->Html->link(
                                    $this->Html->image('logout.png', array('alt'=>'logout','border' => '0','valign' => 'middle')),
                                    array('controller'=>'users','action'=>'logout'),
                                    array('escape' => false)).'</h3>'
                            );
                        }; ?>
		</div>
		<div id="content">

			<?php
                            echo $session->flash();
                            echo $session->flash('auth');
                        ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php
                            echo $this->Html->link(
                                        $this->Html->image('ema.power.gif', array('alt'=>'EMAlliance','border' => '0')),
					'http://www.emalliance.org/wp/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
</body>
</html>