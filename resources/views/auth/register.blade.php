<div>

    <form wire:submit.prevent="register" class="space-y-2">

        <label for="name" class="block">

            <span>Your Name</span>

            <input 
                class=""
                id="name"
                type="text" 
                name="name"
                wire:model.lazy="name"
                required>

        </label>

        <x-errors.inline-validation key="name" />

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

        <label for="password_confirmation" class="block">

            <span>Password Confirmation</span>

            <input 
                class=""
                type="password" 
                id="password_confirmation"
                name="password_confirmation"
                wire:model.lazy="password_confirmation"
                required>

        </label>

        <x-errors.inline-validation key="password_confirmation" />

        <div class="block">

            <button type="submit" class="p-2 border">
                Register
            </button>

        </div>

    </form>
    
</div>
