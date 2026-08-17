@extends('layouts.app')


@section('styles')
<style>
    body{
        background:#f4f7fb;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


    .card{
        background:#fff;
        border-radius:12px;
        box-shadow:0 10px 25px rgba(0,0,0,.08);
        padding:30px;
    }

    .header{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:25px;
    }

    .header h1{
        color:#333;
        font-size:28px;
    }
   

    .add-btn{
        text-decoration:none;
        background:#4f46e5;
        color:#fff;
        padding:10px 18px;
        border-radius:8px;
        font-weight:600;
        transition:.3s;
    }

    .add-btn:hover{
        background:#3730a3;
    }

    .task-list{
        list-style:none;
        padding:0;
        margin:0;
    }

    .task-item{
        margin-bottom:15px;
    }

    .task-item a{
        display:flex;
        justify-content:space-between;
        align-items:center;
        text-decoration:none;
        color:#333;
        background:#f8fafc;
        border:1px solid #e5e7eb;
        border-radius:10px;
        padding:15px 20px;
        transition:.3s;
    }

    .task-item a:hover{
        background:#eef2ff;
        border-color:#4f46e5;
        transform:translateX(5px);
    }

    .task-title{
        font-size:17px;
        font-weight:600;
    }

    .arrow{
        color:#4f46e5;
        font-size:20px;
        font-weight:bold;
    }

    .empty{
        text-align:center;
        padding:40px;
        background:#f8fafc;
        border-radius:10px;
        color:#6b7280;
        font-size:18px;
    }
   


.text-success {
    color: #4fd888
}

</style>
@endsection

@section('content')

<div class="container mx-auto my-10">
    <div class="card">

        <div class="header">
            <h1 class="text-3xl">📋 Task List</h1>

            <a href="{{ route('tasks.create') }}" class="add-btn">
                + Add Task
            </a>
        </div>

        @if($tasks->count())

            <ul class="task-list">

                @foreach($tasks as $task)

                    <li class="task-item">
                        <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['font-bold', 'line-through' => $task->completed])>
                            <span class="task-title">{{ $task->title }}

                                <span>
                                    @if($task->completed)
                                        <span class="text-success">Completed</span>
                                    @endif
                                </span>
                            </span>
                            <span class="arrow">→</span>
                        </a>
                    </li>

                @endforeach

            </ul>

            @if($tasks->count()) 
            <div class="pagination">
                {{ $tasks->links() }}
            </div>
            @endif
        @else

            <div class="empty">
                <h2>No Tasks Found</h2>
                <p>Create your first task by clicking the <strong>Add Task</strong> button.</p>
            </div>

        @endif

    </div>
</div>

@endsection