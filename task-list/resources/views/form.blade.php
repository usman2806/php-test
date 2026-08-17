@section('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f4f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .task-container {
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
        }

        .task-card {
            background: #fff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .task-title {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 28px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: .3s ease;
        }

        .form-control:focus {
            border-color: #4f46e5;
            outline: none;
            box-shadow: 0 0 8px rgba(79, 70, 229, .25);
        }

        textarea.form-control {
            resize: vertical;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        .btn-submit:hover {
            background: #3730a3;
        }

        .error-message {
            color: #dc2626;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="task-container">
        <div class="task-card">


            <h2 class="task-title">
                @isset($task)
                    Edit Task
                @else
                    Add a Task
                @endisset
            </h2>

            <form method="POST"
                action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
                @csrf
                @isset($task)
                    @method('PUT')
                @endisset
                <div class="form-group">
                    <label for="title">Task Title</label>
                    <input type="text" name="title" id="title" class="form-control"
                        value="{{ $task->title ?? old('title') }}" placeholder="Enter task title"
                        @class(['!border-red-500' => $errors->has('title')])>

                    @error('title')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Short Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control" @class(['border-red-500' => $errors->has('description')])
                        placeholder="Enter short description">{{ $task->description ?? old('description') }}</textarea>

                    @error('description')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="long_description">Long Description</label>
                    <textarea name="long_description" id="long_description" rows="6"
                        class="form-control @error('long_description')
                    border-red-500
                    @enderror"
                        placeholder="Enter detailed description">{{ $task->long_description ?? old('long_description') }}</textarea>

                    @error('long_description')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex gap-2">
                    <button type="submit" class="btn-submit">
                        @isset($task)
                            Update Task
                        @else
                            Add Task
                        @endisset
                    </button>
                    <div>
                        <a href="{{ route('tasks.index') }}"
                        class="back-btn border-2 text-center border-blue-500 w-50 h-full px-2 py-3 rounded-lg text-blue-500 font-bold flex-1 flex items-center justify-center">Cancel</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
