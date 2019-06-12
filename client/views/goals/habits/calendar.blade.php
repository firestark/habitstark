@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' . $goalid . '/habits' ] )
@endsection

@include ( 'goals.habits.tab-bar', [ 'goalid' => $goalid, 'habitid' => $habitid ] )

@section ( 'title' )
    My habit
@endsection

@section ( 'content' )
    <table class="calendar">
        <thead>
            <tr>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
                <th>S</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $weeks as $week )
                <tr>
                    @foreach ( $week as $day )
                        <td class="{{ $day === $today ? 'today' : '' }}"><span>{{ $day }}</span></td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection