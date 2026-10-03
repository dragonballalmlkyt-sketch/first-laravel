<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
    <h1>Job Listings</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>{{ $job['title'] }} - {{ $job['salary'] }}$</li>
            <li>{{ $job['description'] }}</li>
            <li>{{ $job['location'] }}</li>
            <hr />

        @endforeach
    </ul>
    
</div>
