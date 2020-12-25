    
    <footer class="offset-3 col-md-6 col-sm-6">
        <span class="">&copy Copyright {{date('Y')}}</span> 
        @if(! Route::is('about'))
            &middot <a href="{{route('about')}}" class="link">A propos</a>
        @endif
    </footer>