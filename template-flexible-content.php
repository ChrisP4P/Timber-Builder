<?php
/**
* Template Name: ACF Flexible Content Builder
* Description: ACF & Timber page builder by Chris at P4P
* @package WordPress
* @subpackage Timber
* @since
Timber 0.1
*/

$context = Timber::context();

$timber_post     = Timber::get_post();
$context ['post'] = $timber_post;
Timber:: render ('views/templates/page-flexible-content.twig', $context );