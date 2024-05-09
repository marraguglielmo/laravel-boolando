@php

    $main_menu = config('menues.main_menu');

@endphp


<header>
    <section class="container">
        <!-- TOPBAR -->
        <nav>

            <ul class="categories">
                @foreach ($main_menu as $item)
                    <li><a href="{{ route($item['name']) }}">{{ $item['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        <!-- /TOPBAR -->
        <!-- LOGO -->
        <span class="logo">
            <img src="/img/boolean-logo.png" alt="logo">
        </span>
        <!-- /LOGO -->
        <!-- MENU -->
        <span>
            <nav>
                <ul class="menu">
                    <li><a href=""><i class="fa-regular fa-user"></i></a></li>
                    <li><a href=""><i class="fa-regular fa-heart"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
                </ul>
            </nav>
        </span>
        <!-- /MENU -->
    </section>
</header>
