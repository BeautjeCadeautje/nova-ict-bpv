<-x-base-layout>
<h1>Dit is de statische pagina met links</h1>
<h2>
    {{ $title }}
    Hoi
</h2>
<p>
    {{ $name }}
</p>

foreach ($links as $link)
    <div class="link-item">
        <a href="{{ $link }}">{{ $link }}</a>
    </div>
</x-base-layout>