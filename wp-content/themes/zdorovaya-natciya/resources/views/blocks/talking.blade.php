<div class="{{ $block->classes }} talking">
    @if ($list)
    <div class="talking__list">

      @foreach ($list as $item)

        @if ($loop->first)

        <article class="talking__item">
          <div class="talking__container container">
            <div class="talking__entry">
              @if ($item['title'])
                <h2 class="talking__title title title_secondary">{!! $item['title'] !!}</h2>
              @endif

              <div class="talking__text">{!! $item['text'] !!}</div>
            </div>
            <div class="talking__image">
              {!! wp_get_attachment_image( $item['image'], 'full') !!}
            </div>
          </div>
        </article>

        @elseif ($loop->last)

        <article class="talking__item">
          <div class="talking__container container">
            <div class="talking__entry">
              <div class="talking__text">{!! $item['text'] !!}</div>
              <a class="talking__button button" data-modal="modal-callback">Связаться</a>
            </div>
            <div class="talking__image">
              {!! wp_get_attachment_image( $item['image'], 'full') !!}
            </div>
          </div>
        </article>

        @else

        <article class="talking__item">
          <div class="talking__container container">
            <div class="talking__entry">
              <div class="talking__text">{!! $item['text'] !!}</div>
            </div>
            <div class="talking__image">{!! wp_get_attachment_image( $item['image'], 'full') !!}</div>
          </div>
        </article>

        @endif

      @endforeach

    </div>
    @endif
  <InnerBlocks />
</div>
