
    <?php if(isset($category['childs'])) :?>
        <li>
            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['alias']])?>"><?= $category['name']?><i class="zmdi zmdi-chevron-right"></i></a>
            <div class="category-menu-dropdown">
                <?php foreach ($category['childs'] as $categoryChildFirst):?>
                    <?php if(isset($categoryChildFirst['childs'])) :?>
                    <div class="category-common mb--30">
                        <h4>
                            <a class="categories-subtitle" href="<?= \yii\helpers\Url::to(['category/view', 'id' => $categoryChildFirst['alias']])?>">
                                <?= $categoryChildFirst['name']?></a>
                        </h4>
                        <ul class="block">
                                <?php foreach ($categoryChildFirst['childs'] as $categoryChildSec):?>
                                    <li>
                                        <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $categoryChildSec['alias']])?>">
                                            <?= $categoryChildSec['name']?></a>
                                    </li>
                                <?php endforeach;?>
                        </ul>
                    </div>
                <?php else :?>
                        <a style="border-bottom: 0px" href="<?= \yii\helpers\Url::to(['category/view', 'id' => $categoryChildFirst['alias']])?>">
                            <?= $categoryChildFirst['name']?></a>
                <?php endif;?>
        <?php endforeach;?>
            </div>
        </li>
    <?php else :?>
        <li>
            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['alias']])?>">
                <?= $category['name']?></a>
        </li>
    <?php endif;?>