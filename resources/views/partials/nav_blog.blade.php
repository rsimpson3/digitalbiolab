<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item active" href="#">Home</a>
      <a class="blog-nav-item" href="/about">About</a>
      <a class="blog-nav-item" href="/">Big Ideas</a>
      <a class="blog-nav-item" href="/gallery-2">Lab Data</a>
      
      {{-- check if user signed in, if true show name --}}
      @if (Auth::check())

      	<a class="blog-nav-item ml-auto" href="#">{{ Auth::user()->name }}</a>

      @endif

    </nav>
  </div>
</div>