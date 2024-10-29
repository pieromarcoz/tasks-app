<x-app-layout>
    <main class="container py-10 lg:py-20">
        <div class="mb-6 flex justify-end">
            <a href="{{ route('tasks.create') }}"
               class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                <x-heroicon-o-plus class="w-4 h-4 mr-2" /> Create New Task
            </a>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($tasks as $task)
                <x-task-card :task="$task" />
            @endforeach
        </div>
    </main>
</x-app-layout>
