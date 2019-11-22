<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('includes.head')
    </head>
    <body >
        <div id="app">
          @include('includes.header')
            <main class="py-4" style="margin-top:50px">
            <div class="row">
                
                <div class="col-md-8 col-xs-12">
                    @yield('content')
                </div>
                
            </div>
            </main>
        </div>
        <footer class="page-footer font-small cyan darken-3">
                @include('includes.footer')
        </footer>
    </body>
</html>