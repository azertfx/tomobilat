@include('public.includes.header')
<section id="nouvelles_page">
  <div  class="container @yield('classContent1')">
    <div class="row z-depth-1 white @yield('classContent2')">
      <div class="col l12 m12 s12 elements @yield('classContent3')">
        <div class="col l8 m12 s12 left">
          @include('public.includes.direction')
          @yield('content')
          @include('public.includes.comments')
        </div>
        @include('public.includes.sidebar')
      </div>
    </div>
  </div>
</section><!--/ARTICLE PAGE-->


@include('public.includes.footer')
@yield('jsFiles')
