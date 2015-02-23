<div id="navigation-wrapper">
    <div id="navigation">
        <ul>
            <?php foreach($nav as $item) : ?>
            <li><?php echo anchor(base_url() . $item['url'], $item['display'], 'class="' . $item['status'] . '"'); ?></li>
            <?php endforeach;; ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>