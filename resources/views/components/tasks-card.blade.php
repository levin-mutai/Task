@props(["task"])

<article class="flex bg-gray-100 space-x-4 border border-gray-200 p-6 rounded-xl bg-gray-100 mt-5">
    <div class="flex-shrink-0">

    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">
                {{$task->title}}
            </h3>
            <p class="text-xs">
                <time>{{$task->due_date}}</time>
            </p>

            <p>
                {{$task->description}}
            </p>
        </header>
    </div>
</article>

