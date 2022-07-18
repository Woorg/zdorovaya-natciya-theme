<div id="modal-callback" class="{{ $block->classes }} modal" >
  <div class="modal__bg modal-exit"></div>
  <div class="modal__container">
    <div class="modal__title">{{ $title }}</div>
    <div class="modal__form">{!! $form_shortcode !!}</div>
    <div class="modal__note">{!! $note !!}</div>
    <button class="modal__close modal-exit">
      <svg class="modal__close-icon" width="20px" height="20px">
        <use xlink:href="{{ svg_path() }}/svg-symbols.svg#close-icon"></use>
      </svg>
    </button>
  </div>
</div>
