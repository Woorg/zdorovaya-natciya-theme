<section class="projects">
  <div class="projects__container">

    <h2 class="projects__title title container">{{ $title }}</h2>

    @php
      $projects = new WP_Query([
        'post_type' => 'project',
        'posts_per_page' => 6,
        'orderby' => 'id',
        'order' => 'ASC',
      ]);

      $i = 0;

    @endphp

    @if ($projects)
    <div class="projects__grid">
      @while ($projects->have_posts())
        @php
          $projects->the_post();

          $project_subtitle   = carbon_get_post_meta( get_the_ID(),'project_subtitle' );

          $i++;

        @endphp
        <article class="projects__project projects__project_{{ $i }}">
          <a class="projects__link" href="{{ the_permalink( ) }}">
            <div class="projects__image">
              {{ the_post_thumbnail( get_the_ID(), 'full' ) }}
            </div>
            <div class="projects__entry">
              {{-- <div class="projects__entry-title">{{ the_title() }}</div> --}}
              <div class="projects__entry-subtitle">{{ $project_subtitle }}</div>

            </div>

          </a>
        </article>
      @endwhile @php wp_reset_postdata(); @endphp

    </div>
    @endif

  </div>
</section>



