<li>
    <a href="#"><?= $category['name']?>
        <?php if(isset($category['childs'])) :?>
            <i class="zmdi zmdi-chevron-right"></i>
        <?php endif;?>
    </a>
    <?php if(isset($category['childs'])) :?>
        <div class="category-menu-dropdown">
            <?= $this->getMenuHtml($category['childs'])?>
        </div>
    <?php endif;?>
    <div class="category-menu-dropdown">
        <div class="category-part-1 category-common mb--30">
            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
            <ul>
                <li><a href="#"> Men’s Clothing</a></li>
                <li><a href="#"> Computer & Office</a></li>
                <li><a href="#"> Jewelry & Watches</a></li>
                <li><a href="#"> Bags & Shoes</a></li>
                <li><a href="#"> Phones & Accessories</a></li>
            </ul>
        </div>
        <div class="category-part-2 category-common mb--30">
            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
            <ul>
                <li><a href="#"> Men’s Clothing</a></li>
                <li><a href="#"> Computer & Office</a></li>
                <li><a href="#"> Jewelry & Watches</a></li>
                <li><a href="#"> Bags & Shoes</a></li>
                <li><a href="#"> Phones & Accessories</a></li>
            </ul>
        </div>
        <div class="category-part-3 category-common">
            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
            <ul>
                <li><a href="#"> Men’s Clothing</a></li>
                <li><a href="#"> Computer & Office</a></li>
                <li><a href="#"> Jewelry & Watches</a></li>
                <li><a href="#"> Bags & Shoes</a></li>
                <li><a href="#"> Phones & Accessories</a></li>
            </ul>
        </div>
        <div class="category-part-4 category-common">
            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
            <ul>
                <li><a href="#"> Men’s Clothing</a></li>
                <li><a href="#"> Computer & Office</a></li>
                <li><a href="#"> Jewelry & Watches</a></li>
                <li><a href="#"> Bags & Shoes</a></li>
                <li><a href="#"> Phones & Accessories</a></li>
            </ul>
        </div>
    </div>
</li>
</ul>
</div>