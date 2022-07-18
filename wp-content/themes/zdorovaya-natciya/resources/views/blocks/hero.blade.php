
<section class="hero">
  <div class="hero__container container" >
    <div class="hero__entry">
      <h1 class="hero__title title">
        {!! $hero_title !!}
      </h1>
      <div class="hero__text">{!! $hero_text !!}</div>

      <a href="{{ $hero_url }}" class="hero__button button">Подробнее</a>

    </div>
    <div class="hero__image">
      {!! wp_get_attachment_image( $hero_image, 'full') !!}
    </div>
  </div>
</section>
{{-- end hero --}}
