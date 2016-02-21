<div>
    <ul id="home-slider">
        @foreach($images as $index=>$image)
        <li>
            <div id="slide-{{$index}}" class="home-slide" style="background-image: url({{$image['image']}});">
                <h1 class="ui inverted header">
                    <span class="slide-caption">{{$image['caption']}}</span>
                </h1>
            </div>
        </li>
        @endforeach
    </ul>
</div>
