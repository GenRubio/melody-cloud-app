<div>
    <form wire:submit.prevent="login">
        <div class="form-group">
            <label class="sr-only">User</label>
            @if (session()->has('error'))
                <p class="text-sm" style="color: red"> {{ session('error') }}</p>
            @endif
            <input type="text" name="name" id="name" class="form-control" placeholder="Username" wire:model="name"
                required>
        </div>
        <div class="form-group mb-4">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="***********"
                wire:model="password" required>
        </div>
        <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
    </form>
</div>
