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
            background-color: #f7fafc;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 20px;
        }

        ul li {
            margin-bottom: 10px;
        }

        strong {
            font-weight: 600;
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
            <h1>Report Details</h1>

            <ul>
                <li><strong>ID:</strong> {{ $report->report_id }}</li>
                <li><strong>User ID:</strong> {{ $report->user_id }}</li>
                <li><strong>Report Type:</strong> {{ $report->report_type }}</li>
                <li><strong>Start Date:</strong> {{ $report->start_date }}</li>
                <li><strong>End Date:</strong> {{ $report->end_date }}</li>
                <li><strong>Status:</strong> {{ $report->status }}</li>
                <li><strong>File Name:</strong> {{ $report->file_name }}</li>
                <li><strong>Created Date:</strong> {{ $report->created_date }}</li>
                <li>
                    <strong>Roster:</strong>
                    <ul>
                        <li><strong>Name:</strong> {{ $report->roster->name }}</li>
                        <li><strong>Start Time:</strong> {{ $report->roster->start_time }}</li>
                        <li><strong>End Time:</strong> {{ $report->roster->end_time }}</li>
                        <li><strong>Date:</strong> {{ $report->roster->date }}</li>
                        <li><strong>Day:</strong> {{ $report->roster->day }}</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
