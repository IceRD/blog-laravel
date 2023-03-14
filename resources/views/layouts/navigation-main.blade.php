<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">
        <!-- Menu -->
            <nav id="menu">
                <div class="logo">
                    <img src="{{ asset('images/static/logo.png') }}" />
                </div>
                <!-- <header class="major">
                    <h2>Меню</h2>
                </header> -->
                <ul>
                    <li><a href="{{ route('post.index') }}">Главная</a></li>
                    <li>
                        <span class="opener">Обучение</span>
                        <ul>
                            <li><a href="#" target="_blank">Перейти в раздел обучения</a></li>
                            <li><a href="#" target="_blank">Курс для Администратора</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="opener">Документы</span>
                        <ul>
                            <li><a href="#" target="_blank">Все документы</a></li>
                            <li><a href="#">Роспотребнадзор</a></li>
                            <li><a href="#">Абонементы</a></li>
                            <li><a href="#">Сертификаты</a></li>
                            <li><a href="#" >Поиск по сертификатам</a></li>
                            <li><a href="#" target="_blank">Поиск по сертификатам</a></li>
                            <li><a href="#" target="_blank">Заявка Топ-Барбера</a></li>
                            <li><a href="#" target="_blank">Заявка Бренд-Барбера</a></li>
                            <li><a href="#">Контакты владельцев франшиз</a></li>
                            <li><a href="#">Штрафы по аудиту</a></li>
                            <li><a href="#">Прайс-лист</a></li>
                            <li><a href="#" target="_blank">Заказ абонементов</a></li>
                            <li><a href="#" target="_blank">Маркетинговый сбор</a></li>
                            <li><a href="#">Описание сотрудников</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Видео</a></li>
                    <li>
                        <span class="opener">Макеты</span>
                        <ul>
                            <li><a href="#">Все макеты</a></li>
                            <li><a href="#">Заявка на дизайн</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Для Админов</a></li>
                    <li>
                        <span class="opener">Вопросы по картам</span>
                        <ul>
                            <li><a href="#">Яндекс (Е. Горина) ek.gorina@yandex-team.ru</a></li>
                            <li><a href="#">2GIS (А. Китаев)</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('static.discounts') }}">Скидки</a></li>
                </ul>
            </nav>


            @if($digests)
                <section>
                    <header class="major">
                        <h2>Последние дайджесты:</h2>
                    </header>
                    <div class="mini-posts">
                        @foreach ($digests as $digest)
                        <article>
                            <h4> {{ $digest->title }} </h4>
                            <p> {!! $digest->description !!} </p>
                        </article>
                        @endforeach
                    </div>
                </section>
            @endif


        <!-- Footer -->
            <footer id="footer">
                <p class="copyright">2022 - {{ date("Y") }} | BRITVA</p>
            </footer>

    </div>
</div>
