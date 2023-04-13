<div class="container">
    <div class="cards grid-row">
        @foreach($publicationsDetails as $publicationsDetails)
        <div class="card">
            <div class="card-top">
                <img src="{{ $publicationsDetails->image }}" alt="{{ $publicationsDetails->title }}">
            </div>
            <div class="card-info">
                <h2>{{ $publicationsDetails->title }}</h2>
                <span class="date">{{ $publicationsDetails->created_at->format('l, M j, Y') }}</span>
                <p class="excerpt">{{ $publicationsDetails->excerpt }}</p>
            </div>
            <div class="card-bottom flex-row">
                <a href="{{ route('publications.show', $publicationsDetails->id) }}" class="read-more">Read Full Publication</a>
                <a href="{{ $publicationsDetails->link }}" class="button btn-dpink">Publication</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@auth
<a href="/create">
    <button type="button" class="btn btn-success m-3">Create Event</button>
</a>
@endauth