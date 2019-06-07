@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' . $goalid . '/habits' ] )
@endsection

@section ( 'title' )
    New habit
@endsection

@section ( 'content' )

    <form method="POST" style="display: grid; height: 100%;" action="/{{ $goalid }}/habits">
        <textarea class="mdc-typography--body1" name="description" placeholder="Description" style="width: 100%; height: 100%; box-sizing: border-box; resize: none; border: none; padding: 24px;"></textarea>
    
        @include ( 'partials.form.fab', [ 'action' => 'save' ] )
    </form>
@endsection