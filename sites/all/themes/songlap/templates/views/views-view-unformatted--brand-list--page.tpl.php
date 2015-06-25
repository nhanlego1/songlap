<?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
foreach ($letters as $letter):?>
    <div class="letter-family grid-9">
        <div id="<?php print $letter; ?>" class="letter-header">
            <?php print $letter; ?>
            <div class="back-to-top">Back to top</div>
        </div>
        <ul>
            <?php foreach ($rows as $id => $row): ?>
                <?php //dsm($view->result[$id]); ?>
                <?php $rest = substr(strtolower($view->result[$id]->taxonomy_term_data_name), 0, 1); ?>
                <?php if ($rest == strtolower($letter)): ?>
                    <li class="<?php print $classes_array[$id]; ?> grid-2"><?php print $row; ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endforeach; ?>
