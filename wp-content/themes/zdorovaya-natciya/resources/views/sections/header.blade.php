@php
  $logo     = get_field('logo_image', 'option');
  $address  = get_field('address', 'option');
  $phone    = get_field('phone', 'option');
  $vk       = get_field('vk_url', 'option');
  $telegram = get_field('telegram_url', 'option');
  $whatsup  = get_field('whatsup_url', 'option');
@endphp

<header class="header">

  <div class="header__topline topline">
    <div class="topline__container container">
      <div class="topline__contacts-w">

        <div class="topline__contacts">

          <div class="topline__address">{{ $address }}</div>
          <a href="{{'tel:' . str_replace( [
            ")",
            "(",
            " ",
            "-",
          ], "", $phone )}}" class="topline__phone">{{ $phone }}</a>

        </div>

        <ul class="topline__social social">
          <li class="social__item">
            <a href="{{ $vk }}" class="social__link">
              <svg class="social__icon" width="36px" height="21px">
                <use xlink:href="{{ svg_path() }}/svg-symbols.svg#vk-icon"></use>
              </svg>
            </a>
          </li>
          <li class="social__item">
            <a href="{{ $telegram }}" class="social__link">
              <svg class="social__icon" width="33px" height="33px">
                <use xlink:href="{{ svg_path() }}/svg-symbols.svg#telegram-icon"></use>
              </svg>
            </a>
          </li>
          <li class="social__item">
            <a href="{{ $whatsup }}" class="social__link">
              <svg class="social__icon" width="32px" height="33px">
                <use xlink:href="{{ svg_path() }}/svg-symbols.svg#whatsapp-icon"></use>
              </svg>
            </a>
          </li>
        </ul>

        <a class="topline__button button button_stroke" data-modal="modal-callback">Обратный звонок</a>

      </div>
    </div>
  </div>

  <div class="header__container container">
    <div class="header__w">

      <a href="{{ home_url('/') }}" class="header__logo">
        {!! wp_get_attachment_image($logo, 'full', null, '')!!}
      </a>

      @if (has_nav_menu('primary_navigation'))
      <nav class="header__nav nav nav_primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">

        <button class="nav__trigger">
          <svg class="nav__close-icon" width="20px" height="20px">
            <use xlink:href="{{ svg_path() }}/svg-symbols.svg#close-icon"></use>
          </svg>

          <svg class="nav__menu-icon" width="25px" height="18px">
            <use xlink:href="{{ svg_path() }}/svg-symbols.svg#menu-icon"></use>
          </svg>
        </button>

        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav__list',
          'container' => false,
          'echo' => false
          ]) !!}
        {{-- <ul class="nav__list">
          <li class="nav__item">
            <a href="" class="nav__link"></a>
          </li>
        </ul> --}}
      </nav>
      @endif

    </div>

  </div>
</header>
