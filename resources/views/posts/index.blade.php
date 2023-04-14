<h1>Posts</h1>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td align="center" width="50">{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td align="center" width="100">
                    <a href="/posts/{{ $post->slug }}">Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
