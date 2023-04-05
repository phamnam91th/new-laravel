<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
        </tr>
        {{-- @foreach($data as $post)
            <tr>
                <td>{{ $post }}</td>
            </tr>
        @endforeach --}}
    </table>
</div>
{{ gettype($list) }}
{{ var_dump($list) }}
{{ var_dump($myArr) }}
{{-- {{ $list->links() }} --}}