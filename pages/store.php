<?php
$page_css = ["store.css"];

?>


<section class="members-only">
    <div class="members-only__container">
        <h3>Эксклюзивно для участников</h3>
        <h4>СКИДКА 15% НА ВСЕ + ДОПОЛНИТЕЛЬНЫЕ 1500 РУБЛЕЙ ЗА СТАТУС "ПЛЮС"</h4>
        <p>Не участник? Присоединяйтесь сейчас, чтобы совершать покупки.</p>
    </div>
</section>

<div class="store-app" data-store-container>

    <aside>

        <div class="filters-header">
            <h3 class="filters-title">Фильтры</h3>
            <button class="filter-reset" data-reset-filters>Сбросить все</button>
        </div>

        <div class="filter-group__content" data-filter-content>
            <div class="filter-cetegory" data-category="bedroom">
                <button class="filter-category__toggle" data-toggle-subcategory>
                    <span>Спальная комната</span>
                    <span class="toggle-icon">▶</span>
                </button>
                <div class="filter-subcategories" data-subcategories>
                    <label><input type="checkbox" name="category" value="duvet" data-filter> Комплекты пододеяльников</label>
                    <label><input type="checkbox" name="category" value="sheets" data-filter> Простыни</label>
                    <label><input type="checkbox" name="category" value="bedspreads" data-filter> Покрывала и одеяла</label>
                    <label><input type="checkbox" name="category" value="blankets" data-filter> Пледы/Одеяла</label>
                    <label><input type="checkbox" name="category" value="curtains" data-filter> Шторы</label>
                    <label><input type="checkbox" name="category" value="pillowcases" data-filter> Наволочки</label>
                    <label><input type="checkbox" name="category" value="rugs" data-filter> Ковры</label>
                </div>
            </div>
            <label><input type="checkbox" name="category" value="living-room" data-filter>Гостиная</label>
            <label><input type="checkbox" name="category" value="child-droom" data-filter>Детская комната</label>
            <label><input type="checkbox" name="category" value="bathroom" data-filter>Ванная комната</label>
            <label><input type="checkbox" name="category" value="outdoor" data-filter>Улица/Сад</label>
        </div>
</div>
<div class="filter-group" data-filter-group="gender">
    <button class="filter-group__header" data-toggle-filter>
        <span>Пол</span>
    </button>
    <div class="filter-group__content" data-filter-content>
        <label><input type="radio" name="gender" value="man" data-filter>Мужской</label>
        <label><input type="radio" name="gender" value="woman" data-filter>Женский</label>
    </div>
</div>

<div class="filter-group" data-filter-group="color">
    <div>
        <div class="filter-group__content filter-colors" data-filter-content>
            <label data-color="black"><input type="checkbox" name="color" value="black" data-filter>Черный</label>
            <label data-color="white"><input type="checkbox" name="color" value="white" data-filter>Белый</label>
            <label data-color="red"><input type="checkbox" name="color" value="red" data-filter>Красный</label>
            <label data-color="gray"><input type="checkbox" name="color" value="gray" data-filter>Серый</label>
            <label data-color="yelow"><input type="checkbox" name="color" value="yelow" data-filter>Желтый</label>
            <label data-color="orange"><input type="checkbox" name="color" value="orange" data-filter>Оранжевый</label>
            <label data-color="blue"><input type="checkbox" name="color" value="blue" data-filter>Голубой</label>
            <label data-color="purple"><input type="checkbox" name="color" value="purple" data-filter>Пурпурный</label>
            <label data-color="pink"><input type="checkbox" name="color" value="pink" data-filter>Розовый</label>
            <label data-color="brown"><input type="checkbox" name="color" value="brown" data-filter>Коричневый</label>
            <label data-color="green"><input type="checkbox" name="color" value="green" data-filter>Зеленый</label>
        </div>
    </div>
</div>
</aside>

<section>
    <div class="category-info">
        <h1 class="category-title">Вещи для дома</h1>
        <p class="category-description">С ПОМОЩЬЮ НАШЕГО БОЛЬШОГО ВЫБОРА АКСЕССУАРОВ ЛЕГКО ПРЕОБРАЗИТЬ ИНТЕРЬЕР ВАШЕЙ КВАРТИРЫ.</p>
    </div>

    <div class="products-grid" data-products-grid>

        <article class="product-card" data-product-id="1">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/1.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="1">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Покрытый бархатом</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="2">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/2.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="2">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Свеча в стеклянном подсвечнике</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="3">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/3.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="3">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Металлическая рамка для фотографии</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="4">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/4.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="4">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Круглый коврик для пола</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="5">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/5.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="5">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Держатель фонаря класса</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="6">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/6.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="6">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Комплект фланелевого пододеяльника</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="7">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/7.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="7">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Облегающая хлопчатобумажная простыня</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="8">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/8 png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="8">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Маленькая свеча в маленькой баночке</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="9">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/9.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="9">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Комплект пододеяльников в клетку</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="10">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/10.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="10">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Выстиранная льняная наволочка</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="11">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/11.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="11">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Накидка из полушерстяной ткани в рубчик</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

        <article class="product-card" data-product-id="12">
            <div class="product-image">
                <img src="/assets/images/store/bedroom/12.png" alt="#" loading="lazy">
                <button class="wishlist-btn" data-wishlist data-product-id="12">❤️</button>
            </div>
            <div class="product-info">
                <h3 class="product-title">Мини-фарфоровое блюдо</h3>
                <div class="product-price">$39</div>
                <div class="product-rating" data-rating="4.5">★★★★☆</div>
            </div>
        </article>

    </div>
</section>

</div>