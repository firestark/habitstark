@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' . $goalid . '/habits' ] )
@endsection

@section ( 'title' )
    New habit
@endsection

@section ( 'content' )

    <form method="POST" style="display: grid; height: 100%;" action="/{{ $goalid }}/habits">
        <div style="padding: 24px;">
            @include ( 'partials.input.title' )
        </div>
    
        @include ( 'partials.form.fab', [ 'action' => 'save' ] )
    </form>
@endsection