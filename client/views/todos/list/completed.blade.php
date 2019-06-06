@extends ( 'page.overview' )

@section ( 'content' )
    @if ( count ( $todos ) )
        <ul id="completed-task-list" class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
            @foreach ( $todos as $todo )
                <li class="mdc-list-item">
                    <a href="/{{ $todo->id }}/uncomplete?up=/completed" 
                        class="mdc-list-item__graphic" 
                        aria-hidden="true">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm0 15l-5-5h3V9h4v4h3l-5 5z"/>
                        </svg>
                    </a>


                    <a href="/{{ $todo->id }}?up=/completed" style="position: relative">
                        <span class="mdc-list-item__text" style="width: 100%; display: grid; padding-right: 16px;">
                            <span class="mdc-list-item__primary-text">{{ $todo->description }}</span>
                            <span class="mdc-list-item__secondary-text">Created at {{  date ( 'M d, Y ', $todo->createdAt ) }}</span>
                        </span>
                    </a>

                    <a href="/{{ $todo->id }}/remove?up=/completed" class="mdc-list-item__meta" aria-hidden="true">
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

            <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">No todos here</h3>
            <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">
                Completed todo's end up here
            </p>
        </div>
    @endif
@endsection

@section ( 'js' )
    @parent
    
    <script>
        const completedTaskList = mdc.list.MDCList.attachTo ( document.getElementById ( 'completed-task-list' ) );
        const completedTaskListItemRipples = completedTaskList.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
    </script>
@endsection