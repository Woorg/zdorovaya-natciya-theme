{{-- <div class="{{ $block->classes }}">
  @if ($items)
    <ul>
      @foreach ($items as $item)
        <li>{{ $item['item'] }}</li>
      @endforeach
    </ul>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif

  <div>
    <InnerBlocks />
  </div>
</div> --}}

@php( $i = 1)

<div class="contacts">
  <div class="contacts__container container">
    <h2 class="contacts__title title title_secondary">{{ $title }}</h2>
    <div class="contacts__w">

      @if ($contacts)
      <ul class="contacts__list">
        @foreach ($contacts as $contact)
          @if ($loop->first)

            <li class="contacts__item">
              <a class="contacts__contact" href="{{'tel:' . str_replace( [
              ")",
              "(",
              " ",
              "-",
              "/",
            ], "", $contact['contact'] )}}">
                <svg class="contacts__icon" width="31px" height="31px">
                  <use xlink:href="{{ svg_path() }}/svg-symbols.svg#contact-{{ $i }}-icon"></use>
                </svg>
                {{ $contact['contact'] }}
              </a>
              <span class="contacts__note">{{ $contact['note'] }}</span>
            </li>
          @else

            <li class="contacts__item">
              <span class="contacts__contact">
                <svg class="contacts__icon" width="31px" height="31px">
                  <use xlink:href="{{ svg_path() }}/svg-symbols.svg#contact-{{ $i }}-icon"></use>
                </svg>
                {{ $contact['contact'] }}
              </span>
              <span class="contacts__note">{{ $contact['note'] }}</span>
            </li>

          @endif

          @php($i++)

        @endforeach
      </ul>
      @endif

      {{-- @php( $coords = get_field('map_coords', 'option') ) --}}

      <div id="map" class="contacts__map lazy" ></div>

    </div>
  </div>
</div>
