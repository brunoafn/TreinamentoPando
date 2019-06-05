<table border = "1">
    <thead>
        <tr>
            <th> id</th>
            <th> name</th>
            <th> fone</th>
            <th> email</th>
            <th> action</th>   
        </tr>
    </thead>
    <tbody>
        @foreach ($cows as $vaca)
        <tr>
            <td>{{ $vaca->id}}</td>
            <td>{{ $vaca->nome}}</td>
            <td>{{ $vaca->fone}}</td>
            <td>{{ $vaca->email}}</td>  
            <td><a href="/deletar/{{$vaca->id}}">deletar</a></td>
        </tr>    
        @endforeach
    <tbody>
</table>
<br>
<button onclick="window.location.href = '/cadastro';">Cadastrar Vaca</button>   