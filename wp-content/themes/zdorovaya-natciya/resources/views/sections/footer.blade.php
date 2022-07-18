@php
  $logo       = get_field('logo_image', 'option');
  $address    = get_field('address', 'option');
  $phone      = get_field('phone', 'option');
  $vk         = get_field('vk_url', 'option');
  $telegram   = get_field('telegram_url', 'option');
  $whatsup    = get_field('whatsup_url', 'option');
  $copyright  = get_field('copyright', 'option');
  $text       = get_field('text', 'option');
  $text_2     = get_field('text_2', 'option');
@endphp

<footer class="footer">
  <div class="footer__container container">
    <div class="footer__top">
      <div class="footer__col footer__col_first">
        <a href="{{ home_url('/') }}" class="footer__logo">
          {!! wp_get_attachment_image($logo, 'full', null, '')!!}
        </a>
        <a href="{{'tel:' . str_replace( [
              ")",
              "(",
              " ",
              "-",
            ], "", $phone )}}" class="footer__phone phone">
          <svg class="phone__icon" width="31px" height="31px">
            <use xlink:href="{{ svg_path() }}/svg-symbols.svg#contact-1-icon"></use>
          </svg>
          {{ $phone }}
        </a>
      </div>

      <div class="footer__col footer__col_nav">
        <nav class="footer__nav nav nav_secondary">
          {!! wp_nav_menu([
            'theme_location' => 'secondary_navigation',
            'menu_class' => 'nav__list',
            'container' => false,
            ]) !!}
        </nav>
      </div>

      <div class="footer__col footer__col_social">
        <ul class="topline__social social social_secondary">
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

      </div>

      <div class="footer__col footer__col_last">
        <nav class="footer__nav nav nav_third">
          {!! wp_nav_menu([
            'theme_location' => 'third_navigation',
            'menu_class' => 'nav__list',
            'container' => false,
            ]) !!}
        </nav>

        <a class="footer__button button" data-modal="modal-callback">Связаться</a>
      </div>
    </div>

    <div class="footer__bottom">
      <div class="footer__text">
        {{ $text }}
      </div>

      <div class="footer__copyright">
        <div class="footer__copyright-first">
          {{ $copyright }}
        </div>
        <div class="footer__copyright-second">
          {{ $text_2 }}
        </div>
      </div>

    </div>
  </div>
</footer>
