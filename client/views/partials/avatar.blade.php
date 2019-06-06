<div id="demo-menu" class="mdc-menu-surface--anchor" style="position: relative; right: 16px;">
    <button id="menuButton" class="mdc-top-app-bar__action-item" style="width: 28px; height: 28px; padding: 0; border-radius: 50%;">
        <img src="/resources/images/avatar.png" style="width: 100%; height: 100%; border-radius: 50%;">
    </button>

    <div class="mdc-menu mdc-menu-surface" id="avatar-menu">
        <ul class="mdc-list mdc-list--linked" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1" style="min-width: 240px;">
            <li class="mdc-list-item" role="menuitem">
                <a href="/logout">
                    <span class="mdc-list-item__text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

@section ( 'js' )
    <script>
        const menu = mdc.menu.MDCMenu.attachTo ( document.querySelector ( '.mdc-menu' ) );
        menuButton.onclick = function ( ) { menu.open = ! menu.open; }
    </script>
@endsection