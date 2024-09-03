<x-form.input-checkbox
    id="show_password"
    name="show_password"
    label="{{ __('Show password') }}"
    classLabel="{{ $classLabel }}"
/>

<script>
    document.getElementById('show_password').addEventListener('change', function() {
        const passwordField = document.getElementById('password');
        const passwordConfirmationField = document.getElementById('password_confirmation');

        if (this.checked) {
            passwordField.type = 'text';
            passwordConfirmationField.type = 'text';
        } else {
            passwordField.type = 'password';
            passwordConfirmationField.type = 'password';
        }
    });
</script>
