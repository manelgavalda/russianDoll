@cache($card)

<div class="card">
    <div class="card-image">
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-left">
            </div>
            <div class="media-content">
                <p class="title is-4">{{ $card->title }}</p>
            </div>
        </div>

        <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
            <a>#css</a> <a>#responsive</a>
            <br>
            <small>11:09 PM - 1 Jan 2016</small>
        </div>
    </div>
</div>

    <article class="Card">
        <h2></h2>

        <ul>
            @foreach ($card->notes as $note)
                @include ('cards/_note')
            @endforeach
        </ul>
    </article>
@endcache
