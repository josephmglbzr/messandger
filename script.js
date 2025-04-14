document.addEventListener('DOMContentLoaded', function() {
    // Form validation
    const loginForm = document.querySelector('button.bg-messenger-blue');
    const emailInput = document.querySelector('input[type="text"]');
    const passwordInput = document.querySelector('input[type="password"]');
    
    if (loginForm) {
        loginForm.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Simple validation
            if (!emailInput.value.trim()) {
                emailInput.classList.add('border-red-500');
                shake(emailInput);
            } else {
                emailInput.classList.remove('border-red-500');
            }
            
            if (!passwordInput.value.trim()) {
                passwordInput.classList.add('border-red-500');
                shake(passwordInput);
            } else {
                passwordInput.classList.remove('border-red-500');
            }
            
            // If both fields are filled, show success message
            if (emailInput.value.trim() && passwordInput.value.trim()) {
                alert('This is a demo. No actual login functionality is implemented.');
            }
        });
    }
    
    // Features dropdown effect
    const featuresButton = document.querySelector('.group button');
    if (featuresButton) {
        featuresButton.addEventListener('mouseenter', function() {
            // Would normally show dropdown here
            console.log('Features dropdown would show here');
        });
    }
    
    // Helper function for shaking animation on invalid inputs
    function shake(element) {
        element.classList.add('shake-animation');
        setTimeout(() => {
            element.classList.remove('shake-animation');
        }, 500);
    }
    
    // Add shake animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        .shake-animation {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
        }
    `;
    document.head.appendChild(style);
}); 