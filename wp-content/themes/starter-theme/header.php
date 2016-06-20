<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', TRUE,'right' ); bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
	<div class="header">
		<h1>Jason's Custom Starter Theme</h1>
	</div><!-- #header -->

	<div class="main">
		
<i>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</i>

<hr />

<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>

<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="paragraph">Paragraph</h2>
<p>
Lorem ipsum dolor sit amet, <a title="test link" href="#">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.

Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.
</p>

<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="list_types">List Types</h2>
<h3>Definition List</h3>
<dl><dt>Definition List Title</dt><dd>This is a definition list division.</dd></dl>
<h3>Ordered List</h3>
<ol>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ol>
<h3>Unordered List</h3>
<ul>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ul>
<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="form_elements">Forms</h2>
<p><fieldset><legend>Legend</legend>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>

<form>
<h2>Form Element</h2>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.

<label for="text_field">Text Field:</label>

<input id="text_field" type="text" /><label for="text_area">Text Area:</label>
<textarea id="text_area"></textarea>

<label for="select_element">Select Element:</label>

<select name="select_element"> <optgroup label="Option Group 1"> <option value="1">Option 1</option> <option value="2">Option 2</option> <option value="3">Option 3</option></optgroup></select>&nbsp;
<select name="select_element"> <optgroup label="Option Group 2"> <option value="1">Option 1</option> <option value="2">Option 2</option> <option value="3">Option 3</option></optgroup></select>&nbsp;
<label for="radio_buttons">Radio Buttons:</label>

<input class="radio" type="radio" name="radio_button" value="radio_1" /> Radio 1 <input class="radio" type="radio" name="radio_button" value="radio_2" /> Radio 2 <input class="radio" type="radio" name="radio_button" value="radio_3" />Radio 3<label for="checkboxes">Checkboxes:</label>

<input class="checkbox" type="checkbox" name="checkboxes" value="check_1" /> Radio 1 <input class="checkbox" type="checkbox" name="checkboxes" value="check_2" /> Radio 2 <input class="checkbox" type="checkbox" name="checkboxes" value="check_3" />Radio 3<label for="password">Password:</label>

<input class="password" type="password" name="password" /><label for="file">File Input:</label>

<input class="file" type="file" name="file" /> <input class="button" type="reset" value="Clear" /> <input class="button" type="submit" value="Submit" /></form></fieldset>
<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="tables">Tables</h2>
<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<th>Table Header 1</th>
<th>Table Header 2</th>
<th>Table Header 3</th>
</tr>
<tr>
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>
<tr class="even">
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>
<tr>
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>
</tbody>
</table>
<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="misc">Misc Stuff – abbr, acronym, pre, code, sub, sup, etc.</h2>
Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. <abbr title="Avenue">AVE</abbr>
<pre>
Lorem ipsum dolor sit amet,
 consectetuer adipiscing elit.
 Nullam dignissim convallis est.
 Quisque aliquam. Donec faucibus.
Nunc iaculis suscipit dui.
Nam sit amet sem.
Aliquam libero nisi, imperdiet at,
 tincidunt nec, gravida vehicula,
 nisl.
Praesent mattis, massa quis
luctus fermentum, turpis mi
volutpat justo, eu volutpat
enim diam eget metus.
Maecenas ornare tortor.
Donec sed tellus eget sapien
 fringilla nonummy.
<acronym title="National Basketball Association">NBA</acronym>
Mauris a ante. Suspendisse
 quam sem, consequat at,
commodo vitae, feugiat in,
nunc. Morbi imperdiet augue
 quis tellus.
<abbr title="Avenue">AVE</abbr></pre>
<blockquote>“This stylesheet is going to help so freaking much.”
-Blockquote</blockquote>
<small><a href="#wrapper">[top]</a></small>
<!-- End of Sample Content -->