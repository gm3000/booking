<div>
    <ul id="home-slider">
        @foreach($images as $index=>$image)
        <li>
            <div id="slide-{{$index}}" class="home-slide" style="background-image: url({{$image}});">
                @if(isset($captions))
                    <h1 class="ui inverted header">
                        <span class="slide-caption">{{$captions[$index]}}</span>
                    </h1>
                @endif
            </div>
        </li>
        @endforeach
    </ul>
</div>
