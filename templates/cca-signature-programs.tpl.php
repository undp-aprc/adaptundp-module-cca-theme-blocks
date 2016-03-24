<ul class="signature-programs-list inline-menu">
    <?php foreach($variables['elements']['#items'] as $item): ?>
        <?php $path_alias = url('taxonomy/term/'.$item['tid']); ?>
        <div class="col-sm-2">
            <a href="/taxonomy/term/<?php print $path_alias ?>">
                <span class="hidden-xs"><?php print(render($item['img'])); ?></span>
                <h5><?php print $item['title']; ?></h5>
            </a>cd
        </div>
    <?php endforeach; ?>
</ul>