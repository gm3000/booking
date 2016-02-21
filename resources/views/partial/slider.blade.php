<div>
    <ul id="home-slider">
        @foreach($images as $index=>$image)
        <li>
            <div id="slide-{{$index}}" class="home-slide" style="background-image: url({{$image}});"></div>
        </li>
        @endforeach
    </ul>
</div>
