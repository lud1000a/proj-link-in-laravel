<form wire:submit.prevent="submit">
    {{ $email }} <br>
    {{ $pass }} <br>

    @php 
    var_dump($data);
    @endphp
    <div class="form-group">
        <label for="exampleInputEmail1">Endereço de email</label>
        <input name="email" type="email" class="form-control" placeholder="Seu email" wire:model="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input name="pass" type="password" class="form-control" placeholder="Senha" wire:model="pass">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
