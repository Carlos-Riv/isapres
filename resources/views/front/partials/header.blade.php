<header class="navbar navbar-expand">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('img/brand.svg')}}" alt="">
    </a>
    <ul class="navbar-nav mr-auto">
        @foreach ($navitems as $item)
        <li class="nav-item">
            <button type="button" class="to-form btn btn-success" data-toggle="modal" data-target="#modalForm"><i data-feather="trending-up"></i> {{$item['name']}}</button>
        </li>
        @endforeach
    </ul>
    <a href="#" class="call btn btn-primary"><i data-feather="phone-call"></i>+569 965876028</a>
</header>