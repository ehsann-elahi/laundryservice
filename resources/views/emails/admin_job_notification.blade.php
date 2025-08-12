<h2>New Job Application Received</h2>
<p><strong>Name:</strong> {{ $application->name }}</p>
<p><strong>Position:</strong> {{ $application->position }}</p>
<p><strong>Email:</strong> {{ $application->email }}</p>
<p><strong>Phone:</strong> {{ $application->phone }}</p>
<p><strong>Salary Expectation:</strong> {{ $application->salary }}</p>
<p><strong>Joining Date:</strong> {{ $application->joining_date }}</p>
@if($application->document)
    <p><strong>Document:</strong> <a href="{{ $application->document }}">View Document</a></p>
@endif
