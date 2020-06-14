<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['alias']])?>">
        <?= $category['name']?>
        <?php if(isset($category['childs'])) :?>
            <i class="zmdi zmdi-chevron-right"></i>
        <?php endif;?>
    </a>

    <?php if(isset($category['childs'])) :?>
        <ul>
            <li>
                <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['alias']])?>">
                    Все <?= mb_strtolower($category['name'])?>
                </a>
            </li>
            <?= $this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
</li>