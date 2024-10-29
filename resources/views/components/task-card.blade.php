<div class="flex flex-col space-y-4 px-8 py-10 border border-gray-200 rounded-lg shadow-sm h-full" x-data>
    <h2 class="font-bold text-lg">{{ $task->title }}</h2>
    <p class="flex-grow">{{ $task->description }}</p>
    <div class="flex items-center justify-between">
        <x-status-badge :status="$task->status" />
        <div class="flex items-center">
            <a href="{{ route('tasks.edit', $task) }}"
               class="block group rounded-md p-2 transition-all duration-200 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 active:bg-gray-200">
                <x-heroicon-o-pencil class="h-5 w-5 text-gray-600 transition-colors group-hover:text-blue-600"/>
            </a>
            <button type="button"
                    @click="$dispatch('open-modal', 'confirm-task-deletion-{{ $task->id }}')"
                    class="group rounded-md p-2 transition-all duration-200 hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-red-200 active:bg-red-100">
                <x-heroicon-o-trash class="h-5 w-5 text-gray-600 transition-colors group-hover:text-red-600"/>
            </button>
        </div>
    </div>

    <x-modal :name="'confirm-task-deletion-'.$task->id" focusable>
        <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="p-6">
            @csrf
            @method('DELETE')
            <h2 class="text-lg font-medium text-gray-900">
                ¿Estás seguro de que quieres eliminar esta tarea?
            </h2>
            <p class="mt-1 text-sm text-gray-600">
                Esta acción no se puede deshacer.
            </p>
            <div class="mt-6 flex justify-end">
                <x-secondary-button type="button" @click="$dispatch('close-modal', 'confirm-task-deletion-{{ $task->id }}')">
                    Cancelar
                </x-secondary-button>
                <x-danger-button class="ml-3">
                    Eliminar Tarea
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</div>
