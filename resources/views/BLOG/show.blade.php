<x-layout title="Blog">
    <h1>welcome to our blog!</h1>
    <p>Stay updated with the latest news and insights.</p>
    <hr />
        <div class="post" stylye="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <h2>title: {{ $post->title }}</h2>
            <p>Content: {{ $post->content }}</p>
            <p>Author: {{ $post->author }}</p>
            <p>Created at: {{ $post->created_at }}</p>
            <p>Updated at: {{ $post->updated_at }}</p>
            <hr />
        </div>

</x-layout>