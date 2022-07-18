<section class="about">
  <div class="about__container container">
    <div class="about__image">
      {!! wp_get_attachment_image( $about_image , 'about_thumb' ) !!}

    </div>
    <div class="about__entry">
      <div class="about__text text">
        {!! $about_text !!}
      </div>
      <a href="mailto:{{ $about_button_link }}" class="about__button button button_secondary">{{ $about_button_text }}</a>
    </div>

  </div>
</section>
