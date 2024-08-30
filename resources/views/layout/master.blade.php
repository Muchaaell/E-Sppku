@include('layout.shead')
@include('layout.shidemenu')
<div id="app">
    <div class="page-content"> 
      @yield('content')  
    </div>
    @include('layout.footer')
    