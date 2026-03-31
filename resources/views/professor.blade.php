<!-- pega tudo que tem em 'professores' / todos os professores e coloca no 'professor' -->
@foreach($professores as $professor)
    <h3>Nome: {{ $aluno->nome }}</h3>
    <h3>Telefone: {{ $aluno->telefone }}</h3>
    <h3>E-mail: {{ $aluno->email }}</h3>

@endforeach