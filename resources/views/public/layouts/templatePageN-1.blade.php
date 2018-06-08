@include('public.includes.header')
<section id="nouvelles_page">
  <div  class="container">
    <div class="row z-depth-1 white announcement">
      <div class="col l12 m12 s12 elements about">
        <div class="col l8 m12 s12 left">
          @include('public.includes.direction')
          @yield('content')
        </div>
        @include('public.includes.sidebar')
      </div>
    </div>
  </div>
</section><!--/ARTICLE PAGE-->


@include('public.includes.footer')
@yield('jsFiles')
