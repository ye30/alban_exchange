<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <a class="navbar-brand" href="/">ADMIN </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
            aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample09" style="">
        <ul class="navbar-nav mr-auto">
            @if(\App\User::isSuperAdmin())
                <a class="nav-link {{request()->is('address*') ? 'active' : ''}}" href="{{request()->is('address*') ? '#' : '/address'}}">Address</a>
                <a class="nav-link {{request()->is('report*') ? 'active' : ''}}" href="{{request()->is('report*') ? '#' : '/report'}}">Report</a>
                <a class="nav-link {{request()->is('users*') ? 'active' : ''}}" href="{{request()->is('users*') ? '#' : '/users'}}">User</a>
                <a class="nav-link {{request()->is('comments*') ? 'active' : ''}}" href="{{request()->is('comments*') ? '#' : '/comments'}}">Comments</a>
                <a class="nav-link {{request()->is('news*') ? 'active' : ''}}" href="{{request()->is('news*') ? '#' : '/news'}}">News</a>
                <a class="nav-link {{request()->is('request*') ? 'active' : ''}}" href="{{request()->is('request*') ? '#' : '/request'}}">Request</a>
                <a class="nav-link {{request()->is('rates*') ? 'active' : ''}}" href="{{request()->is('rates*') ? '#' : '/rates'}}">Rates</a>
            @else
                <a class="nav-link {{request()->is('address*') ? 'active' : ''}}" href="{{request()->is('address*') ? '#' : '/address'}}">Address</a>
                <a class="nav-link {{request()->is('report*') ? 'active' : ''}}" href="{{request()->is('report*') ? '#' : '/report/add'}}">Report</a>
{{--                <a class="nav-link {{request()->is('users*') ? 'active' : ''}}" href="{{request()->is('users*') ? '#' : '/users'}}">User</a>--}}
                <a class="nav-link {{request()->is('comments*') ? 'active' : ''}}" href="{{request()->is('comments*') ? '#' : '/comments'}}">Comments</a>
                <a class="nav-link {{request()->is('news*') ? 'active' : ''}}" href="{{request()->is('news*') ? '#' : '/news'}}">News</a>
                <a class="nav-link {{request()->is('request*') ? 'active' : ''}}" href="{{request()->is('request*') ? '#' : '/request'}}">Request</a>
                <a class="nav-link {{request()->is('rates*') ? 'active' : ''}}" href="{{request()->is('rates*') ? '#' : '/rates'}}">Rates</a>
            @endif
        </ul>
        <form class="form-inline my-2 my-md-0">
            <a href="/logout" class="logout">Logout</a>
        </form>
    </div>
</nav>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

