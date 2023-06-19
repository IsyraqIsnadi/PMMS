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
            <h1>Edit Report</h1>

            <form action="{{ route('report.update', $report->report_id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Add form fields for each attribute -->

                <div class="form-group">
                    <label for="user_id">User ID:</label>
                    <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $report->user_id }}">
                </div>

                <div class="form-group">
                    <label for="report_type">Report Type:</label>
                    <input type="text" name="report_type" id="report_type" class="form-control" value="{{ $report->report_type }}">
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $report->start_date }}">
                </div>

                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $report->end_date }}">
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" name="status" id="status" class="form-control" value="{{ $report->status }}">
                </div>

                <div class="form-group">
                    <label for="file_name">File Name:</label>
                    <input type="text" name="file_name" id="file_name" class="form-control" value="{{ $report->file_name }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</body>
</html>