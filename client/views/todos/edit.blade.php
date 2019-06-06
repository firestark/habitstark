@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => input::get ( 'up', '/' ) ] )
@endsection

@section ( 'title' )
    Created at {{  date ( 'M d, Y ', $todo->createdAt ) }}
@endsection

@section ( 'content' )

    <form method="POST" style="display: grid; height: 100%;">
        <textarea class="mdc-typography--body1" name="description" placeholder="Description" style="width: 100%; height: 100%; box-sizing: border-box; resize: none; border: none; padding: 0 24px;">{{ $todo->description }}</textarea>
    
        @include ( 'partials.form.fab', [ 'action' => 'save' ] )
    </form>
@endsection

@section ( 'bottom-app-bar' )
    <footer class="mdc-bottom-app-bar">
        <div class="mdc-bottom-app-bar__row">
            <section class="mdc-bottom-app-bar__section mdc-bottom-app-bar__section--align-start">
                @if ( $todo->completed )
                    <a href="/{{ $todo->id }}/uncomplete" class="mdc-bottom-app-bar__action-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </a>
                @else
                    <a href="/{{ $todo->id }}/complete" class="mdc-bottom-app-bar__action-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                            <path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                        </svg>
                    </a>
                @endif
                <a href="/{{ $todo->id }}/remove" class="mdc-bottom-app-bar__action-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/>
                    </svg>
                </a>
            </section>

            <section class="mdc-bottom-app-bar__section mdc-bottom-app-bar__section--align-end">
            </section>
        </div>
    </footer>
@endsection