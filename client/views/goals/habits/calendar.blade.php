@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' . $goalid . '/habits' ] )
@endsection

@include ( 'goals.habits.tab-bar', [ 'goalid' => $goalid, 'habitid' => $habitid ] )

@section ( 'title' )
    My habit
@endsection

@section ( 'content' )
    <section style="padding: 24px; height: 100%; box-sizing: border-box;">
        <div class="mdc-calendar">
            <header>
                <h1>{{ date ( 'F' ) }}</h1>
            </header>    
            <table>
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
                                <td class="{{ $day === $today ? 'today' : '' }}"><span>{{ $day }}</span>
                                    @if ( in_array ( $day, $completedDays ) )
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                        </svg>
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection