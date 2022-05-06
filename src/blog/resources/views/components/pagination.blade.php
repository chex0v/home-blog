@if ($total && $total > $perPage)
    @php
        $step = 1;
        $countPage = (int) ceil($total / $perPage);
        $pages = range(1, $countPage);
        $prev = $page - $step > 0 ? $page - $step : null;
        $next = $page + $step <= $countPage ? $page + $step : null;
    @endphp
    <ul class="pagination">
        @if ($prev)
            <li class="waves-effect">
                <a href="{{ route($route, ['page' => $prev]) }}">
                    <i class="material-icons">chevron_left</i>
                </a>
            </li>
        @endif
        @foreach ($pages as $number)
            <li @if ($number === $page) class="active"@else class="waves-effect" @endif>
                <a href="{{ route($route, ['page' => $number]) }}">{{ $number }}</a>
            </li>
        @endforeach
        @if ($next)
            <li class="waves-effect">
                <a href="{{ route($route, ['page' => $next]) }}">
                    <i class="material-icons">chevron_right</i>
                </a>
            </li>
        @endif
    </ul>
@endif
