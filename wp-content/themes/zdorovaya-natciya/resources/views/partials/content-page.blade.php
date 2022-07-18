@if ( is_page(2) )
  @php(the_content())
@else
<div class="main__container container">
  <div class="main__entry text">
    @php(the_content())
  </div>
</div>
@endif
