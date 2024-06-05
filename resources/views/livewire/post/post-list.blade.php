{{-- <div>
    <ol>

        @foreach ($posts as $post)
        <li>{{ $post ->id }} {{ $posts->title }} </li>
            
        @endforeach
</div> --}}

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    TITLE
                </th>
                <th scope="col" class="px-6 py-3">
                    CONTENT
                </th>
                <th scope="col" class="px-6 py-3">
                    ACTION
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $post->id }} 
                </th>
                <td class="px-6 py-4">
                    {{ $post->title }} 
                </td>
                <td class="px-6 py-4">
                    {{ $post->content }} 
                </td>
                <td class="px-6 py-4">
                    Edit / View/ Delete
                </td>
            </tr>
            @endforeach
       
      
        </tbody>
    </table>
</div>
