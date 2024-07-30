<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action = "{{ url('user_task')}}" method="POST">
            @csrf
            <div>
                <label for="task_name">Task Name:</label>
                <input type="text" id="name" name="task_name" value="{{ old('task_name')}}">
                @error('task_name')
                <div> {{ $message }} </div>
                @enderror
            </div>
            <div>
                <label for="status">Status:</label>
                <select name="status" id="status">
                <option value="">--</option>
                <option value="">Pending</option>
                <option value="">On Process</option>
                <option value="">Completed</option> 
                </select>
            
            </div>
            @error ('status')
            <div> {{ $message }} </div>
                @enderror
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="5"></textarea>
                @error('description')
                <div>{{ $message }}</div>
            </div>
            @enderror
            <div>
                <label for="deadline">Deadline</label>
                <input type="date" id="deadline" name="deadline" value="{{ old('deadline') }}" />
                @error ('deadline')
                <div> {{$message}}</div>
                @enderror
            </div>
            <div>
            <button type="submit">submit</button>
            </div>
        </form>

    </body>
</html>
