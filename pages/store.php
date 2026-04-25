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

</div>