<table class="mt-4 table thead-border table-rounded fs-5" style="width:94%;">
    <thead>
        <tr class="align-middle">
            <th width="58%" scope="col">Title</th>
            <th width="14%" scope="col">Total Visitors</th>
            <th width="14%" scope="col">Total Comment</th>
            <th width="14%" scope="col">Engagement Rate</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->visitors }}</td>
            <td>{{ $post->comment }}</td>
            <td>{{ $post->engagement }}</td>
        </tr>
        @endforeach
    </tbody>
</table>