@section ( 'top-app-bar' )
    <div class="mdc-tab-bar mdc-tab-bar--top" role="tablist" id="goal-tabbar">
        <div class="mdc-tab-scroller">
            <div class="mdc-tab-scroller__scroll-area">
                <div class="mdc-tab-scroller__scroll-content">
                    
                    <a href="/{{ $goalid }}" class="mdc-tab {{ ( request::uri ( ) === "/{$goalid}" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Details</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/{$goalid}" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>

                    <a href="/{{ $goalid }}/habits" class="mdc-tab {{ ( request::uri ( ) === "/{$goalid}/habits" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Habits</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/{$goalid}/habits" ) ? 'mdc-tab-indicator--active' : '' }}">
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
        mdc.tabBar.MDCTabBar.attachTo ( document.getElementById ( 'goal-tabbar' ) );
    </script>
@endsection