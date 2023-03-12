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
                <li><a href="{{ route('d.home.index') }}">Главная</a></li>
                <li><a href="{{ route('d.post.index') }}">Посты</a></li>
                <li><a href="{{ route('d.user.index') }}">Пользователи</a></li>
                <li><a href="{{ route('d.page.index') }}">Страницы</a></li>
                <li><a href="{{ route('d.sheet.index') }}">Google Sheet</a></li>
            </ul>
        </nav>
    </div>
</div>