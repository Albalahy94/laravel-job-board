<x-layout>

    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <!-- This is the job index page where you can list all jobs -->
    <h1>Job Listings</h1>
    <p>Welcome to the job board. Here you can find various job listings.</p>

    <!-- You can add more content here, such as a list of jobs or a search form -->
    <!-- For example, you might want to loop through jobs and display them -->
     @foreach($jobs as $job)
         <div class="job-item">
            <h2>{{ $job['title'] }}</h2>
            <h2>{{ $job['company'] }}</h2>
            <p>{{ $job['description'] }}</p>
            <p>{{ $job['location'] }}</p>
        </div>
    @endforeach
</x-layout>