<?php $items = $variables['elements']['#items']; ?>
<div id="impact-stories-select-icons">
    <?php foreach($items as $key=>$item): ?>
        <div class="impact-story-select-icon inactive" id="impact-story-select-icon-<?php print($item['id']); ?>" data-id="<?php print($item['id']); ?>">
            <img src="<?php print($item['image']); ?>" />
            <div class="icon-title">
                <?php print($item['title']); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>