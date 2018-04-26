<div id="first-nav">
    <div class="first-nav-items">

        @if (Route::has('login'))
                <span class="top-rightt linkss">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('first-nav.login') }}</a> |
                        <a href="{{ route('register') }}">{{ __('first-nav.register') }}</a>
                        @endauth
                </span>
            @endif

            | <a href="lang/fr">Fr</a> | <a href="lang/en">En</a>

    </div>
</div>