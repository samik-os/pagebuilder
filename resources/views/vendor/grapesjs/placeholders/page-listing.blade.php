@foreach(App\Models\Page::listable()->get() as $page)
<h3>{{ $page->title }}</h3>
<p>{{ Str::limit($page->body, 50) }}</p>
<p><a href="{{ url("pages/{$page->id}") }}">Read More...</a></p>
@endforeach