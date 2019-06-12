@extends ( 'page.overview' )

@section ( 'title' )
    Inbox
@endsection

@section ( 'content' )
    @if ( count ( $goals ) )
        <ul id="goals-list" class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
            @foreach ( $goals as $goal )
                <li class="mdc-list-item">
                    <a href="/{{ $goal->id}}/habits/add" 
                        class="mdc-list-item__graphic" 
                        aria-hidden="true">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </span>


                    <a href="/{{ $goal->id }}" style="position: relative">
                        <span class="mdc-list-item__text" style="width: 100%; display: grid; padding-right: 16px;">
                            <span class="mdc-list-item__primary-text">{{ $goal->description }}</span>
                            <span class="mdc-list-item__secondary-text">Created at {{  date ( 'M d, Y ', $goal->createdAt ) }}</span>
                        </span>
                    </a>

                    <a href="/{{ $goal->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </a>
                </li>

                <ul class="mdc-list--nested">                
                    @foreach ( $goal->habits as $habit )
                        <li class="mdc-list-item">
                            <a href="/{{ $goal->id }}/habits/{{ $habit->id }}/{{ $habit->isCompleted ( ) ? 'uncomplete' : 'complete ' }}"
                                class="mdc-list-item__graphic {{ $habit->isCompleted ( ) ? 'completed' : '' }}" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>


                            <a href="/{{ $goal->id }}/habits/{{ $habit->id }}" style="position: relative">
                                <span class="mdc-list-item__text" style="width: 100%; display: grid; padding-right: 16px;">
                                    <span class="mdc-list-item__primary-text">{{ $habit->title }}
                                        <span style="color: var(--mdc-theme-text-secondary-on-background, rgba(0, 0, 0, 0.54)); vertical-align: super; font-size: 0.785rem;">(lvl {{ $habit->level ( ) }})</span>
                                    </span>
                                    <span class="mdc-list-item__secondary-text">{{ ! empty ( $habit->levels ) ?  $habit->levels [ $habit->level ]->description : 'No levels available' }}</span>
                                </span>
                            </a>

                            <a href="/{{ $goal->id }}/habits/{{ $habit->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </ul>
    @else
        <div style="text-align: center; margin: 56px auto 0; width: 230px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-primary)" style="opacity: 0.87;">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 13h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
            </svg>

            <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">No goals here</h3>
            <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">Add a goal with the
                <span style="vertical-align: text-top;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--mdc-theme-text-secondary-on-background); position: relative; top: 4px;">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                    </svg>
                </span> button
            </p>
        </div>
    @endif

    @include ( 'partials.link.fab', [ 'action' => 'add', 'link' => '/add' ] )
@endsection

@section ( 'js' )
    @parent
    
    <script>
        const goalsList = mdc.list.MDCList.attachTo ( document.getElementById ( 'goals-list' ) );
        const goalsListItemRipples = goalsList.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
    </script>
@endsection