<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .pagination {
            display: flex;
            gap: 20px  ;
            list-style-type: none;
        }
        .pagination .page-link {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach($listName as $user)
        <tr>
            {{-- <td>{{ $loop->index + 1 }}</td> --}}
            <td>{{ $user }}</td> 
        </tr>
        @endforeach
    </div>
    
    {{ $listName->links() }}
    {{
        gettype($listName)
    }}
    {{-- {{ var_dump($listName) }} --}}
</body>
</html>

