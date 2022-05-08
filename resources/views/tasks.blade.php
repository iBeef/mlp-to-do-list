<x-layout.app>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ url('/tasks') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="hidden" for="description">Task Description</label>
                        <input
                            name="description"
                            id="description"
                            type="text"
                            class="form-control"
                            placeholder="Insert task name"
                        >
                    </div>
                    <div class="form-group">
                        <input
                            type="submit"
                            value="Add"
                            class="btn btn-primary btn-block"
                        >
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="tasks">
                    @if(empty($tasks))
                        <p>There are currently no tasks to display.</p>
                    @else
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Task</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                    <x-tasks.task-table-item
                                        :id="$task->id"
                                        :index="$loop->iteration"
                                        :description="$task->description"
                                        :completed="$task->completed"
                                    />
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout.app>