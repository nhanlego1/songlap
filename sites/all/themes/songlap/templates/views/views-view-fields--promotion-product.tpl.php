<div class="views-field-field-product-image"><?php print $fields['field_product_image']->content ?></div>
<div class="views-field-title"><?php print $fields['title']->content ?></div>

<?php
$nid = strip_tags($fields['nid']->content);
$node = node_load($nid);
?>
<?php $product = commerce_product_load($node->field_product[LANGUAGE_NONE][0]['product_id']); ?>
<div class="views-field-field-sell-price"><?php print commerce_currency_format($product->commerce_price[LANGUAGE_NONE][0]['amount'],'VND') ?></div>

<div class="views-field-field-old-price"><?php print $fields['field_old_price']->content ?></div>
<?php
$line_item = commerce_line_item_new($product->type, $order_id = 0);
$line_item->data['context']['product_ids'] = array($product->product_id);
$line_item->quantity = 1;
$qty = 1;

$form_id = commerce_cart_add_to_cart_form_id(array($product->product_id), $qty);
$addtocart_form = drupal_get_form($form_id, $line_item);
?>
<div class="views-field-view-node "><?php print render($addtocart_form); ?></div>