<div>

    <form wire:submit.prevent="authenticate" class="space-y-2">

        <label for="email" class="block">

            <span>Email Address</span>

            <input 
                class=""
                id="email"
                type="email" 
                name="email"
                wire:model.lazy="email"
                required>

        </label>

        <x-errors.inline-validation key="email" />

        <label for="password" class="block">

            <span>Password</span>

            <input 
                class=""
                id="password"
                type="password" 
                name="password"
                wire:model.lazy="password"
                required>

        </label>

        <x-errors.inline-validation key="password" />

        <div class="block">

            <button type="submit" class="p-2 border">
                Login
            </button>

        </div>

    </form>

    <a href="{{ route('password.email') }}">Forgot Password?</a>
    
</div>
