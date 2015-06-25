<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300normal,300italic,400normal,400italic,600normal,600italic,700normal,700italic,800normal,800italic|Roboto:400normal|Merriweather:400normal|Oswald:400normal|Open+Sans+Condensed:300normal|Lato:400normal|Source+Sans+Pro:400normal|Lato:400normal|Gloria+Hallelujah:400normal|Pacifico:400normal|Raleway:400normal&subset=all' rel='stylesheet' type='text/css'>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php global $user; if( $user->uid > 0 && in_array('admin',$user->roles)): ?>
    <div class="back-panel"><a href="/admin/portal/dashboard"> << Back to dashboard</a></div>
  <?php endif; ?>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>