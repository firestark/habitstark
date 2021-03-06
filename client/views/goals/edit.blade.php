@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' ] )
@endsection

@section ( 'title' )
    Goal
@endsection

@include ( 'goals.tab-bar', [ 'goalid' => $goal->id ] )

@section ( 'content' )

    <form method="POST" style="display: grid; height: 100%;">
        <textarea class="mdc-typography--body1" name="description" placeholder="Description" style="width: 100%; height: 100%; box-sizing: border-box; resize: none; border: none; padding: 24px;">{{ $goal->description }}</textarea>
    
        @include ( 'partials.form.fab', [ 'action' => 'save' ] )
    </form>

@endsection