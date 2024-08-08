<h2>{{ $job->title }}</h2>
<div>
    Congrats! Your job is now Live on our website.
</div>


<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your Job Listing</a>
</p>