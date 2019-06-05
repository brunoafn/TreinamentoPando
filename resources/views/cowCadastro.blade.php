<html>
    <body>
        {{ Form::open(array('url' => 'formCadastro','method' => 'POST')) }}

        <h4>Nome da Vaca:</h4>
        {{Form::text("nameVaca", old("description") ? old("description") : (!empty($user) ? $user->description : null), 
        [
        "placeholder" => "Digite o nome da vaca",
        ])
        }}
        <br>
        <br>
        <h4>Telefone da Vaca:</h4>
        {{Form::text("foneVaca", old("description") ? old("description") : (!empty($user) ? $user->description : null), 
        [
        "placeholder" => "Digite o telefone da vaca",
        ])
        }}
        <br>
        <br>
        <h4>Email da Vaca:</h4>
        {{Form::text("emailVaca", old("description") ? old("description") : (!empty($user) ? $user->description : null), 
        [
        "placeholder" => "Digite o email da vaca",
        ])
        }}
        <br>
        <br>
        {{Form::submit('Cadastrar Vaca')}}

        {{ Form::close() }}
    </body>
</html> 