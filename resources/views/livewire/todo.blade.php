<div>
    <h1 class = "text-center ">Todo List</h1>
    <div class="body bg-gradient-to-r from-pink-400 to-yellow-500">
        <div class="flex flex-col container mx-auto p-4">
            <div class="flex justify-center mb-4">
                <x-input-error :messages="$errors->get('todo')" class="mt-2" />
            </div>

            <form class="flex items-center mb-4" method="POST" wire:submit.prevent='addTodo'>
                <x-text-input wire:model='todo' class="w-full mr-2" />
                <x-primary-button class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 ...">
                    Add Task
                </x-primary-button>
            </form>

            <div class="mt-5">
                @forelse($todos as $todo)
                <div class="todo-item">
                    <div class="flex items-center">
                        <input id="green-checkbox" wire:click='markCompleted({{ $todo->id }})' @if($todo->is_completed)
                        checked @endif type="checkbox"
                        class="w-4 h-4 text-green-600 bg-gray-100 rounded focus:ring-green-500
                        dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600 mx-3">

                        <span @if ($todo->is_completed) class='text-green-600' @endif>{{ $todo->todo }}</span>
                    </div>
                    <div class="">
                    <div class="flex items-center space-x-2">
                        @if ($edit == $todo->id)
                        <x-text-input wire:model='editedTodo' class="w-full mr-2" />
                        <x-secondary-button wire:click='updateTodo({{ $todo->id }})'>
                            Update
                        </x-secondary-button>
                        <x-danger-button wire:click='cancelEdit'>
                            Cancel
                        </x-danger-button>
                        @else
                        <x-secondary-button wire:click='editTodo({{ $todo->id }})'>
                            Edit
                        </x-secondary-button>
                        <x-danger-button wire:click='deleteTodo({{ $todo->id }})'>
                            Delete
                        </x-danger-button>
                        @endif
                    </div>
                    </div>
                    <br>
                </>
                @empty
                <p class="text-gray-500">No todos available.</p>
                @endforelse
            </div>

            <div class="mt-5">
                {{ $todos->links() }}
            </div>
        </div>
    </div>
</div>