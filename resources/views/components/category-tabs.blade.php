<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center items-center">
    <li class="me-2">
        <a href="#" class="inline-block px-4 py-2  text-white bg-blue-600 rounded-lg active "
            aria-current="page">All</a>
    </li>


    @forelse  ($categories as $category)
        <li class="me-2">
            <a :href="`/dashboard/`${$category->name}"
                class="inline-block px-4 py-2 bg-gray-100 hover:text-white hover:bg-blue-600 rounded-lg active my-2"
                aria-current="page">{{ $category->name }}</a>
        </li>

    @empty
        {{ $slot }}
    @endforelse
</ul>
