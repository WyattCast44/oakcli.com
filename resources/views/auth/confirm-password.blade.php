<div>

    <h2 class="text-2xl">Confirm your password to continue</h2>

    <form wire:submit.prevent="attempt" class="space-y-2">

        <label for="password" class="block">

            <span>Your Password</span>

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
                Confirm Password
            </button>

        </div>

    </form>
</div>
