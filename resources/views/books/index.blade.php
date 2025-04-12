@include('partials.header')

<table class="w-full table-auto bg-white shadow rounded-lg overflow-hidden">
    <thead class="bg-gray-200 text-gray-700">
        <tr>
            <th class="px-4 py-2 text-left">ISBN</th>
            <th class="px-4 py-2 text-left">Title</th>
            <th class="px-4 py-2 text-left">Author</th>
            <th class="px-4 py-2 text-left">Description</th>
            <th class="px-4 py-2 text-left">Published</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
        @foreach ($books as $book)
            <tr>
                <td class="px-4 py-2">{{ $book->isbn }}</td>
                <td class="px-4 py-2">{{ $book->title }}</td>
                <td class="px-4 py-2">{{ $book->author }}</td>
                <td class="px-4 py-2">{{ Str::limit($book->description, 50) }}</td>
                <td class="px-4 py-2">{{ $book->date_published }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('partials.footer')
