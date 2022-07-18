<div class="{{ $block->classes }} techniques">
  <div class="techniques__container container">

    <h2 class="techniques__title title title_secondary">{!! $title !!}</h2>

    @if ($articles)
    <div class="techniques__articles">

      @foreach ($articles as $post)
        @php
          setup_postdata($post);
          $id = $post->ID;
          $title = get_field('page_short_title', $id);
          $permalink = get_permalink($post->ID);
        @endphp

        <article class="techniques__article">
          <a href="{{ $permalink }}" class="techniques__link">
            <div class="techniques__image">
              {!! get_the_post_thumbnail( $id , 'full', []) !!}
            </div>
            <div class="techniques__entry">
              @if ($title)
                <h3 class="techniques__item-title">{!! $title !!}</h3>
              @endif
              <span class="techniques__more">Подробнее</span>
            </div>
          </a>
        </article>

      @endforeach

      @php( wp_reset_postdata() )
    </div>
    @endif

  </div>
</div>
