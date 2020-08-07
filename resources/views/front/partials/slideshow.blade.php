<div class="slideshow">
    <div data-glide-el="track" class="glide__track">
        <ul class="glide__slides">
            @forelse ($slideData as $item)
            <li class="glide__slide">
                <div class="item">
                    <div class="content">
                        <h2 class="c-title">{{$item['title']}}</h2>
                        @if ($item['lead'])
                        <p class="c-lead">{{$item['lead']}}</p>
                        @endif
                        @if ($item['btn']['call'])
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#extend">{{$item['btn']['call']}}</button>
                        @endif
                    </div>
                    <div class="over"></div>
                    <img class="bg-slide" src="{{$item['imgUrl']}}" alt="">
                </div>
            </li>
            @empty
            <li class="glide__slide">
                <div class="item">
                    <div class="content">
                        <h2>Hola mundo</h2>
                    </div>
                    <img class="bg-slide"
                        src="https://www.speakgif.com/wp-content/uploads/2015/12/confused-travolta-original-pulp-fiction-animated-gif.gif"
                        alt="">
                </div>
            </li>
            @endforelse
        </ul>
    </div>
</div>