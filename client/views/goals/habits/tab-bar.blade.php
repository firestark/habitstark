@section ( 'top-app-bar' )
    <div class="mdc-tab-bar mdc-tab-bar--top" role="tablist" id="habit-tabbar">
        <div class="mdc-tab-scroller">
            <div class="mdc-tab-scroller__scroll-area">
                <div class="mdc-tab-scroller__scroll-content">
                    
                    <a href="/{{ $goalid }}/habits/{{ $habitid }}" class="mdc-tab {{ ( request::uri ( ) === "/{$goalid}/habits/{$habitid}" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Details</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/{$goalid}/habits/{$habitid}" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>

                    <a href="/{{ $goalid }}/habits/{{ $habitid }}/levels" class="mdc-tab {{ ( request::uri ( ) === "/{$goalid}/habits/{$habitid}/levels" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Levels</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/{$goalid}/habits/{$habitid}/levels" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section ( 'js' )
    @parent

    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.getElementById ( 'habit-tabbar' ) );
    </script>
@endsection