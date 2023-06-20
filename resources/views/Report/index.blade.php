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

    <style>
        body {
    font-family: 'figtree', sans-serif;
    background-color: #F3F4F6;
}

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #FFFFFF;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        h1 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4F46E5;
            color: #FFFFFF;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #4F46E5;
        }

        .btn-secondary {
            background-color: #4338CA;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            border-bottom: 1px solid #D1D5DB;
            text-align: left;
        }

        .table th {
            background-color: #F3F4F6;
            font-weight: bold;
        }

        .table tr:hover {
            background-color: #F9FAFB;
        }

        .table td:last-child {
            text-align: right;
        }

        .table select {
            padding: 8px;
            border: 1px solid #D1D5DB;
            border-radius: 4px;
        }

        .table td div {
            margin-top: 10px;
        }

        .table li {
            margin-bottom: 8px;
        }

        /* Custom styles for a professional look */

        body {
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 40px 30px;
        }

        h1 {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            font-weight: bold;
            text-transform: uppercase;
        }

        .btn-primary:hover,
        .btn-secondary:hover {
            opacity: 0.8;
        }

        .table {
            margin-top: 30px;
        }

        .table th,
        .table td {
            padding: 12px;
        }

        .table th {
            font-weight: bold;
            background-color: #F3F4F6;
            color: #4F46E5;
            text-transform: uppercase;
        }

        .table tr:hover {
            background-color: #F9FAFB;
        }

        .table td:last-child {
            text-align: center;
        }

        .table select {
            padding: 10px;
        }

        .table td div {
            margin-top: 12px;
        }

        .table li {
            margin-bottom: 10px;
        }

    </style>
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
                            <th>Roster Name</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Date</th>
                            <th>Day</th>
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
                                <td>{{ $report->roster->name }}</td>
                                <td>{{ $report->roster->start_time }}</td>
                                <td>{{ $report->roster->end_time }}</td>
                                <td>{{ $report->roster->date }}</td>
                                <td>{{ $report->roster->day }}</td>
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
