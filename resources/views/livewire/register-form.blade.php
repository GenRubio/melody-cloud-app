<div>
    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label class="sr-only">User</label>
            @error('name') <span class="error text-sm" style="color: red">{{ $message }}</span> @enderror
            <input type="text" name="name" id="name" class="form-control" placeholder="Username" wire:model="name"
                required>
        </div>
        <div class="form-group mb-4">
            <label for="password" class="sr-only">Password</label>
            @error('password') <span class="error text-sm" style="color: red">{{ $message }}</span> @enderror
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                wire:model="password" required>
        </div>
        <div class="form-group mb-4">
            <label for="password" class="sr-only">Password</label>
            @error('passwordRepeat') <span class="error text-sm" style="color: red">{{ $message }}</span> @enderror
            <input type="password" name="passwordRepeat" id="password" class="form-control"
                placeholder="Password Repeat" wire:model="passwordRepeat" required>
        </div>
        <div class="form-group mb-4">
            <label for="email" class="sr-only">Password</label>
            @error('email') <span class="error text-sm" style="color: red">{{ $message }}</span> @enderror
            <input type="email" name="email" id="name" class="form-control" placeholder="Email" wire:model="email"
                required>
        </div>
        <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Sing Up">
    </form>
</div>
