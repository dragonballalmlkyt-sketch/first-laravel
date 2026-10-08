<x-layout title="Blog">
    <h1>welcome to our blog!</h1>
    <p>Stay updated with the latest news and insights.</p>
    <hr />
    @foreach ($posts as $post)
        <div class="post" stylye="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <h2>title: {{ $post->title }}</h2>
            <p>Content: {{ $post->content }}</p>
            <p>Author: {{ $post->author }}</p>
            <p>Created at: {{ $post->created_at }}</p>
            <p>Updated at: {{ $post->updated_at }}</p>
          

            @if($post->comments->count() > 0)
                <h3>Comments:</h3>
                @foreach ($post->comments as $comment)
                    <div class="comment" style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                        <h4>Author: {{ $comment->author }}</h4>
                        <p>Content: {{ $comment->content }}</p>
                    </div>
                @endforeach
            @else
                <p>No comments yet.</p>
            @endif
        </div>

          <hr  style="width: 100%; height: 2px; color: black;" />
    @endforeach 

    {{ $posts->links() }}
</x-layout>