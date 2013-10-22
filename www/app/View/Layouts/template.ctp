<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('foundation');
		echo $this->html->script('foundation.min');
		echo $this->html->script('foundation/foundation');
		echo $this->html->script('foundation/foundation.alerts');
		echo $this->html->script('foundation/foundation.dropdown');
		echo $this->html->script('foundation/foundation.forms');
		echo $this->html->script('foundation/foundation.placeholder');
		echo $this->html->script('foundation/foundation.tooltip');
		// echo $this->Html->css('normalize');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="header row">
	<div class="small-2 large=1 columns" >
			<a class="th radius" href="../img/cake.icon.png">
			<img src="/img/logo.png">
			</a>
	</div>
	<div class="small-10 large=11 columns">
		<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
	</div>
		
	</div>
	<div class="row">
		<div class="small-4 large-3 columns">
			<ul class="side-nav">
			  <li class="active"><a href="#">Link 1</a></li>
			  <li><a href="#">Link 2</a></li>
			  <li class="divider"></li>
			  <li><a href="#">Link 3</a></li>
			  <li><a href="#">Link 4</a></li>
			</ul>
		</div>
		<div class="small-8 large-9 columns">
			<dl class="sub-nav">
			  <dt>Filter:</dt>
			  <dd class="active"><a href="#">All</a></dd>
			  <dd><a href="#">Active</a></dd>
			  <dd><a href="#">Pending</a></dd>
			  <dd><a href="#">Suspended</a></dd>
			</dl>
			<div class="panel">
  				<h6>This is a tiny header.</h6>
  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  				</p>
			</div>

			<form>
			 <div class="row">
			  <fieldset>
			 <div class="large-4 columns">
			      <label for="customDropdown1">Medium Example</label>
			      <select id="customDropdown1" class="medium">
			        <option>This is another option</option>
			        <option>This is another option too</option>
			        <option>Look, a third option</option>
			      </select>
    			</div>
    			<div class="large-4 columns">
			      <label for="customDropdown1">Medium Example</label>
			      <select id="customDropdown1" class="medium">
			        <option>This is another option</option>
			        <option>This is another option too</option>
			        <option>Look, a third option</option>
			      </select>
    			</div>
    			<div class="large-4 columns">
			      <label for="customDropdown1">Medium Example</label>
			      <select id="customDropdown1" class="medium">
			        <option>This is another option</option>
			        <option>This is another option too</option>
			        <option>Look, a third option</option>
			      </select>
    			</div>
			    <legend>Додати відгук</legend>
			    <div class="large-12 columns">
			        <label>Відгук</label>
			        <textarea placeholder="Тут введіть ваш відгук"></textarea>
			      </div>
			      <div class="large-8 columns">
			        <label>Ім'я користувача</label>
			        <input type="text" placeholder="Вася">
			    </div>
			    <div class="large-4 columns">
			        <label>Тривалість</label>
			        <input type="text" placeholder="3 дні">
			    </div>
			  </fieldset>
			  </div>
			</form>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<div class="footer row">
		<span>Усі торгові марки та логотипи належать їхнім власникам. Сайт не веде співпрацю з якимись магазинами. Сайт лише збегірає відгуки про відносини магазинів та покупців.</span>
		<?php echo date("Y"); ?>
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>
