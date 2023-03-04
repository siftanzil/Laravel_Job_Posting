<h1>{{ $heading }}</h1>

@unless($listing == null)
    <h2>{{ $listing['title'] }}</h2>
    <p>{{ $listing['description'] }}</p>
@else
    <h3>Not Found in Listings</h3>
@endunless
