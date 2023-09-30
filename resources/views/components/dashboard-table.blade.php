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
    {{-- model start here  --}}
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form id="edit-form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">

                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group">
                            <label>Image</label>
                            <input type="text" name="image" class="form-control">
                          </div>

                        <button type="submit" class="btn btn-primary mt-2">Submit</button>

                </div>
            </form>
            </div>
            </div>
        </div>
        {{-- model end here  --}}
        @foreach ($posts as $post)
        <tr>
            <td>
                <div class="d-flex justify-content-between">
                    {{ $post->title }}
                    <div class="d-flex align-content-center">
                        <form action="{{ route('deleteData', ['id' => $post->id]) }}" method="get">
                            <input type="image" src="{{ asset('assets/trash.svg') }}" class='btn-primary mx-1 control-buttons' />
                        </form>
                        <input type="image" src="{{ asset('assets/view.svg') }}" class='btn-primary mx-2 control-buttons' />
                        <input type="image" src="{{ asset('assets/setting.svg') }}" class='btn-primary mx-1 control-buttons edit-button' data-toggle="modal" data-edit-link="{{ route('updateData', ['id' => $post->id]) }}" data-title="{{ $post->title }}" data-content="{{ $post->content }}" data-image="{{ $post->image }}" data-target="#editModal"/>
                        {{-- pop model start here  --}}
                        <!-- Button trigger modal -->
                        {{-- <input type="image" src="{{ asset('assets/setting.svg') }}" class='btn-primary mx-1 control-buttons edit-button' data-toggle="modal" data-edit-link="{{ $post->id }}" data-title="{{ $post->title }}" data-content="{{ $post->content }}" data-image="{{ $post->image }}" data-target="#editModal"/> --}}
                        <!-- Modal -->
                        {{-- pop model end here  --}}
                    </div>
                </div>
            </td>
            <td>{{ $post->visitors }}</td>
            <td>{{ $post->comment }}</td>
            <td>{{ $post->engagement }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
        $('.edit-button').on('click', function () {
            const title = $(this).data('title');
            const content = $(this).data('content');
            const image = $(this).data('image');

            $('#editModal input[name="title"]').val(title);
            $('#editModal textarea[name="content"]').val(content);
            $('#editModal input[name="image"]').val(image);
            $('#edit-form').attr('action', $(this).data('edit-link'));
        });
</script>