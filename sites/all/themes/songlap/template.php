<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function songlap_preprocess_page(&$vars)
{
    if(drupal_is_front_page()){
        $breadcrumb = array();
        $breadcrumb[] = t('Home');
        drupal_set_breadcrumb($breadcrumb);
    }
    if(arg(0)=='taxonomy' && arg(1)=='term' && is_null(arg(3))){
        $term = taxonomy_term_load(arg(2));
        $breadcrumb = '';
        $breadcrumb .='<div class="breadcrumb">';
        $breadcrumb .='<a href="'.$vars['front_page'].'">'.t('Home').'</a> ';
        $breadcrumb .='» '.$term->name;
        $breadcrumb .='</div>';
        $vars['breadcrumb'] = $breadcrumb;
    }
    if($_GET['q']=='projects'){
        $breadcrumb = '';
        $breadcrumb .='<div class="breadcrumb">';
        $breadcrumb .='<a href="'.$vars['front_page'].'">'.t('Home').'</a> ';
        $breadcrumb .='» '.t('Projects');
        $breadcrumb .='</div>';
        $vars['breadcrumb'] = $breadcrumb;
    }
}