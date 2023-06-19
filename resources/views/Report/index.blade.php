<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Navigation -->
        <nav class="bg-white dark:bg-gray-800 shadow">
            <!-- Navbar content -->
        </nav>

        <div class="container">
            <h1>Reports</h1>

            <a href="{{ route('report.create') }}" class="btn btn-primary">Create Report</a>

            @if (count($reports) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Report Type</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>File Name</th>
                            <th>Created Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->report_id }}</td>
                                <td>{{ $report->user_id }}</td>
                                <td>{{ $report->report_type }}</td>
                                <td>{{ $report->start_date }}</td>
                                <td>{{ $report->end_date }}</td>
                                <td>{{ $report->status }}</td>
                                <td>{{ $report->file_name }}</td>
                                <td>{{ $report->created_date }}</td>
                                <td>
                                    <a href="{{ route('report.show', $report->report_id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('report.edit', $report->report_id) }}" class="btn btn-secondary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No reports found.</p>
            @endif
        </div>
    </div>
</body>
</html>