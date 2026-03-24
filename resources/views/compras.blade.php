<h1>Produtos em Estoque</h1>
<table style="outline: 1px solid red">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>Id: {{ $produto['id'] }}</td>
            <td>Nome: {{ $produto['nome'] }}</td>
            <td>Preço: {{ $produto['preco'] }}</td>
        </tr>
        @endforeach
    </table>