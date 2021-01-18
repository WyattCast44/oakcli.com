<div>

    @if ($emailSent)
        <x-alerts.success message="Password reset email sent!" />
    @endif

    <form wire:submit.prevent="attempt" class="space-y-2">

        <label for="email" class="block">

            <span>Your Email Address</span>

            <input 
                class=""
                id="email"
                type="email" 
                name="email"
                wire:model.lazy="email"
                required>

        </label>

        <x-errors.inline-validation key="email" />

        <div class="block">

            <button type="submit" class="p-2 border">
                Send Password Reset Email
            </button>

        </div>

    </form>
</div>
