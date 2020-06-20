<?php if ($category['parent'] == 0)?>
<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['alias']])?>">
        <?= $category['name']?>
    </a>
</li>