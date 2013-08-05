<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />

  <meta name="viewport" content="width=device-width" />

  <title><?php the_title(); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>
<body>
    <div class="row">
        <header class="header">
            <div class="twelve columns">
                <div class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
                <?php if (get_bloginfo('description')): ?>
                <p class="subtitle"><?php bloginfo('description'); ?></p>
                <?php endif; ?>
                <hr />
            </div>
        </header>

        <div class="content">
