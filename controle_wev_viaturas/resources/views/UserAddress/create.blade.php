


<form method="POST" action="{{ route('salvar.usuario') }}">
    @csrf

    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" >
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" >
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" >
    </div>

    <div>
        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" value="{{ old('rua') }}" >
    </div>

    <div>
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}" >
    </div>

    <div>
        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" value="{{ old('pais') }}" required>
    </div>

    <button type="submit">Salvar</button>
</form>
