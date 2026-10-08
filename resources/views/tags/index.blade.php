<x-layout title="Tags">
    
    <h1 class="text-3xl font-bold">Tags</h1>
    

    <div class="mt-6">
        @foreach ($tags as $tag)
            <div class="mb-4 p-4 border rounded shadow">
                <h2 class="text-xl font-semibold">{{ $tag->title }}</h2>
            </div>
        @endforeach
    </div>
    
</x-layout>