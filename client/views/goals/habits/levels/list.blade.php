@extends ( 'page.details' )

@section ( 'title' )
    My habit
@endsection

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' . $goalid . '/habits' ] )
@endsection

@section ( 'top-app-bar--actions' )
    <a href="/{{ $goalid }}/habits/{{ $habit->id }}/levelup" class="mdc-top-app-bar__action-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M10 8H8v4H4v2h4v4h2v-4h4v-2h-4zm4.5-1.92V7.9l2.5-.5V18h2V5z"/>
        </svg>
    </a>
@endsection

@include ( 'goals.habits.tab-bar', [ 'goalid' => $goalid, 'habitid' => $habit->id ] )

@section ( 'content' )
    @if ( count ( $habit->levels ) )
        <ul id="habits-levels-list" class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
            @foreach ( $habit->levels as $number => $level )
                <li class="mdc-list-item">
                    <span
                        class="mdc-list-item__graphic {{ $number === $habit->level ? 'completed' : '' }}" 
                        aria-hidden="true">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M16 18H6V8h3v4.77L15.98 6 18 8.03 11.15 15H16v3z"/>
                            <path fill="none" d="M0 0h24v24H0z"/>
                        </svg>
                    </span>


                    <a href="/{{ $goalid }}/habits/{{ $habit->id }}/levels/{{ $number }}" style="position: relative">
                        <span class="mdc-list-item__text" style="width: 100%; display: grid; padding-right: 16px;">
                            <span class="mdc-list-item__primary-text">{{ $level->description }}</span>
                            <span class="mdc-list-item__secondary-text">Level {{ $number + 1 }}</span>
                        </span>
                    </a>

                    <a href="/{{ $goalid }}/habits/{{ $habit->id }}/levels/{{ $number }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <div style="text-align: center; margin: 56px auto 0; width: 230px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-primary)" style="opacity: 0.87;">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 13h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
            </svg>

            <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">No levels here</h3>
            <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">Add a level with the
                <span style="vertical-align: text-top;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--mdc-theme-text-secondary-on-background); position: relative; top: 4px;">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                    </svg>
                </span> button
            </p>
        </div>
    @endif

    @include ( 'partials.link.fab', [ 'action' => 'add', 'link' => '/' . $goalid . '/habits/' . $habit->id . '/levels/add' ] )
@endsection

@section ( 'js' )
    @parent
    
    <script>
        const habitsLavelsList = mdc.list.MDCList.attachTo ( document.getElementById ( 'habits-levels-list' ) );
        const habitsLavelsListItemRipples = habitsLavelsList.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
    </script>
@endsection