<section>
    <a href="#" class="image"><img src="{{ $imageSrc }}" alt="" data-position="{{ $position }}"/></a>
    <div class="content">
        <div class="inner">
            <h2>{{ $title }}</h2>
            <p>{{ $description }}</p>
            <x-button url="{{ $url }}" button-text="{{ $buttonText }}"></x-button>
        </div>
    </div>
</section>
