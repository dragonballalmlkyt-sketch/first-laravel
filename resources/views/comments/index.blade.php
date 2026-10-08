<x-layout title="Comments">
    <h1>Welcome to our comments section!</h1>
    <p>Stay updated with the latest comments and insights.</p>
    <hr />
    @foreach ($comments as $comment)
        <div class="comment" style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <h2>Author: {{ $comment->author }}</h2>
            <p>Content: {{ $comment->content }}</p>
            <p>Post ID: {{ $comment->post_id }}</p>
            <p>Created at: {{ $comment->created_at }}</p>
            <p>Updated at: {{ $comment->updated_at }}</p>
            <a href="/blog/{{ $comment->post_id }}" class="text-blue-500 hover:underline">{{ $comment->post->title }}</a>
            <hr />
        </div>
    @endforeach
</x-layout>