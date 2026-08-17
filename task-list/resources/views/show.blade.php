@extends('layouts.app')


@section('styles')
    <style>
        body {
            background: #f4f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .flex {
            display: flex;
            gap: 10px;
            align-items: center
        }


        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            padding: 35px;
        }

        .task-title {
            font-size: 32px;
            color: #333;
            margin-bottom: 25px;
            border-bottom: 2px solid #eef2ff;
            padding-bottom: 15px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section h3 {
            color: #4f46e5;
            margin-bottom: 5px;
            font-size: 18px;
        }

        .section p {
            color: #555;
            line-height: 1.7;
            font-size: 16px;
        }

        .meta {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }

        .meta p {
            margin: 8px 0;
            color: #666;
            font-size: 14px;
        }

        .back-btn {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            background: #4f46e5;
            color: #fff;
            padding: 10px 22px;
            border-radius: 8px;
            font-weight: 600;
            transition: .3s;
        }

        .back-btn:hover {
            background: #3730a3;
        }

        .delete-btn {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            background: #e54646;
            color: #fff;
            padding: 12px 22px;
            border-radius: 8px;
            font-weight: 600;
            transition: .3s;
            border: 0;
        }

        .delete-btn:hover {
            background: #a33030;
        }

        .success-btn {
            background-color: #46e56e !important;
            border: 0;
        }

        .text-success {
            font-size: 12px;
            color: #46e56e;
        }
    </style>
@endsection

@section('content')
    <div class="container mx-auto">

        <div class="container my-2 flex items-center">
            <a href="{{ route('tasks.index') }}" class="text-slate-500 text-sm border-b-2 border-blue-500">
                < Back
            </a>
        </div>
        <div class="card">

            <h1 class="task-title">{{ $task->title }}
                <span>
                    @if ($task->completed)
                        <span class="text-success">Completed</span>
                    @endif
                </span>
            </h1>

            <div class="section">
                <h3>Short Description</h3>
                <p>{{ $task->description }}</p>
            </div>

            @if ($task->long_description)
                <div class="section">
                    <h3>Detailed Description</h3>
                    <p>{{ $task->long_description }}</p>
                </div>
            @endif

            <div class="meta">
                <p><strong>Created:</strong> {{ $task->created_at->format('M d, Y h:i A') }}</p>
                <p><strong>Last Updated:</strong> {{ $task->updated_at->diffForHumans() }}</p>
            </div>

            <div class="flex">

                <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="back-btn">
                    Edit Task
                </a>
                <form method="POST" action="{{ route('tasks.completed', ['task' => $task]) }}">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="{{ $task->completed ? 'delete-btn' : 'success-btn btn text-success' }}">
                        {{ $task->completed ? 'Not Completed' : 'Completed' }}
                    </button>
                </form>
                <form method="POST" action="{{ route('tasks.destroy', ['task' => $task]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Delete Task</button>
                </form>
            </div>
        </div>
    </div>
@endsection
