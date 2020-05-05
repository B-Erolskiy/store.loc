<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']])?>">
        <?= $category['name']?>
        <?php if(isset($category['childs'])) :?>
            <i class="zmdi zmdi-chevron-right"></i>
        <?php endif;?>
    </a>

    <?php if(isset($category['childs'])) :?>
        <ul>
            <?= $this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
</li>