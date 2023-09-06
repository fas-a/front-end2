<table class="mt-4 table thead-border table-rounded fs-5" style="width:94%;">
    <thead>
        <tr class="align-middle">
            <th width="86%" scope="col">
                Title <input type="image" src="{{ asset('assets/sort.svg') }}" class='btn-primary ms-1' />
            </th>
            <th width="14%" scope="col">
                Total <br>Comment <input type="image" src="{{ asset('assets/sort.svg') }}" class='btn-primary ms-1' />
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>
                <div class="d-flex justify-content-between">
                {{ $post->title ?? "Tittle's post belongs here" }}
                    <div class="d-flex align-content-center">
                        <input type="image" src="{{ asset('assets/trash.svg') }}" class='btn-primary mx-1 control-buttons' />
                        <input type="image" src="{{ asset('assets/view.svg') }}" class='btn-primary mx-2 control-buttons' />
                        <input type="image" src="{{ asset('assets/setting.svg') }}" class='btn-primary mx-1 control-buttons' />
                    </div>
                </div>
            </td>
            <td>
                {{ $post->totalComments ?? '234' }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>