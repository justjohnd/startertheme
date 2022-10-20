<?php
/**
 * The template for displaying the contact page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter_Theme
 *
 * Template Name: Contact Page
 */

get_header();
?>

<main id="primary" class="site-main">
	<h1></h1>
	<form>
		<div>
			<label for="name">氏名</label>
			<input id="name" name="name" placeholder="" type="text"></input>
		</div>
		<div>
			<label for="email">メールアドレス</label>
			<input id="email" name="email"placeholder="" type="email"></input>
		</div>
		<div>
			<label for="message" >お問い合わせ内容</label>
			<textbox id="message" name="message" placeholder="" type="text"></textbox>
		</div>
		<button type="submit">送信</button>
	</form>

</main><!-- #main -->

<?php
get_footer();
