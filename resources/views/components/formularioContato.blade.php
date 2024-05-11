{{ $slot }}

<form action = {{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class={{ $tipoBorda }}>
    <br>
    <input name="telfone" type="text" placeholder="Telefone" class={{ $tipoBorda }}>
    <br>
    <input name="email" type="text" placeholder="E-mail" class={{ $tipoBorda }}>
    <br>
    <select name="motivo" class={{ $tipoBorda }}>
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class={{ $tipoBorda }}>Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class={{ $tipoBorda }}>ENVIAR</button>
</form>