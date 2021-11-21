<a href="/post/{{ $post->id }}">
  <div class="card">
    <div class="card-content">
      <div class="media">
        <div class="media-content">
          <p class="title is-4">{{ $post->author }}</p>
        </div>
      </div>

      <div class="content">
        <p class="text-md max-h-72 overflow-hidden">
          {{ $post->content }}
        </p>
        <time class="text-sm">{{ $post->time }}</time>
      </div>
    </div>
  </div>
</a>  