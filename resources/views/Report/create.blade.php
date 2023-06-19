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
            max-width: 500px;
            margin: 0 auto;
            padding: 40px;
            background-color: #FFFFFF;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #D1D5DB;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        select {
            height: 40px;
        }

        button {
            padding: 12px 24px;
            background-color: #4F46E5;
            color: #FFFFFF;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4338CA;
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
            <h1>Create Report</h1>

            <form action="{{ route('report.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="report_type">Report Type:</label>
                    <input type="text" name="report_type" id="report_type" class="form-control" value="{{ old('report_type') }}">
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date') }}">
                </div>

                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date') }}">
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" name="status" id="status" class="form-control" value="{{ old('status') }}">
                </div>

                <div class="form-group">
                    <label for="file_name">File Name:</label>
                    <input type="text" name="file_name" id="file_name" class="form-control" value="{{ old('file_name') }}">
                </div>

                <div class="form-group">
                    <label for="roster_id">Roster:</label>
                    <select name="roster_id" id="roster_id" class="form-control">
                        <option value="">Select a Roster</option>
                        @foreach($rosters as $roster)
                            <option value="{{ $roster->id }}">{{ $roster->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</body>
</html>
