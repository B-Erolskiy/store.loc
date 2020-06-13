
    <?php if(isset($category['childs'])) :?>
        <li>
            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['alias']])?>"><?= $category['name']?><i class="zmdi zmdi-chevron-right"></i></a>
            <div class="category-menu-dropdown">
                <?php foreach ($category['childs'] as $categoryChildFirst):?>
                    <div class="category-common mb--30">
                        <h4 >
                            <a class="categories-subtitle" href="<?= \yii\helpers\Url::to(['category/view', 'id' => $categoryChildFirst['alias']])?>">
                                <?= $categoryChildFirst['name']?></a>
                        </h4>
                        <ul class="block">
                            <?php if(isset($categoryChildFirst['childs'])) :?>
                                <?php foreach ($categoryChildFirst['childs'] as $categoryChildSec):?>
                                    <li>
                                        <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $categoryChildSec['alias']])?>">
                                            <?= $categoryChildSec['name']?></a>
                                    </li>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                    </div>
                <?php endforeach;?>
            </div>
        </li>
    <?php else:?>
        <li>
            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['alias']])?>" class="categories-subtitle">
                <?= $category['name']?></a>
        </li>
    <?php endif;?>