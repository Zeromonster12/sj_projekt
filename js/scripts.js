document.addEventListener('DOMContentLoaded', function() {
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var togglePasswordButton = document.getElementById('togglePassword');
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePasswordButton.classList.remove('fa-eye');
            togglePasswordButton.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = "password";
            togglePasswordButton.classList.remove('fa-eye-slash');
            togglePasswordButton.classList.add('fa-eye');
        }
    }
    document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
});