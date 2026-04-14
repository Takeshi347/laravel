<!-- post, pois é oque está na rota adicionar -->
<form action="{{  route('aluno.adicionar')  }}" method="post">
    @csrf
    <!-- @csrf - serve para impedir que invadam o site -->
     <label for="nome">Nome</label>
     <input type="text" name="nome" id="nome">

     <label for="email">E-mail</label>
     <input type="text" name="email" id="email">

     <button type="submit">Salvar</button>
     <!-- Verifica se a variável existe -->
     @isset($sucesso)
        {{ $sucesso }}
     @endisset
</form>