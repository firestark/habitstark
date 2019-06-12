@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' . $goalid . '/habits/' . $habitid ] )
@endsection

@section ( 'title' )
    My habit level
@endsection

@section ( 'content' )
    <form method="POST" style="display: grid; height: 100%;" action="/{{ $goalid }}/habits/{{ $habitid }}/levels/{{ $number }}">
        <textarea class="mdc-typography--body1" name="description" placeholder="Description" style="width: 100%; height: 100%; box-sizing: border-box; resize: none; border: none; padding: 24px;">{{ $level->description }}</textarea>
    
        @include ( 'partials.form.fab', [ 'action' => 'save' ] )
    </form>
@endsection