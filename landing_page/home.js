// Get the sign-up section element
let signupSection = document.getElementById('signup-section');
// Get the button that triggers the sign-up section
let signupButton = document.getElementById('sign-up-btn');
// Get the close button inside the sign-up section
let closeSignupBtn = document.querySelector('.signup-section .close-btn1');

// Get the login modal and button elements
let loginModal = document.getElementById('login-modal');
let loginBtn = document.getElementById('login-btn');
let closeLoginBtn = document.querySelector('.login-body .close-btn');

// Show the sign-up section when the sign-up button is clicked
signupButton.onclick = function() {
    signupSection.classList.add('show'); // Show the sign-up section
    document.getElementById('generalFields').classList.add('hidden');
    document.getElementById('studentFields').classList.add('hidden');

    // Add a small delay to ensure the section is visible before scrolling
    setTimeout(function() {
        signupSection.scrollIntoView({ behavior: 'smooth' });
    }, 100); // Delay for 100ms
};

// Close the sign-up section when the close button is clicked
closeSignupBtn.onclick = function() {
    signupSection.classList.remove('show'); // Hide the sign-up section
};

// Show the login modal when the login button is clicked
loginBtn.onclick = function() {
    loginModal.style.display = 'block'; // Show the login modal
};

// Close the login modal when the close button is clicked
closeLoginBtn.onclick = function() {
    loginModal.style.display = 'none'; // Hide the login modal
};

// Close the login modal when clicking outside the modal
window.onclick = function(event) {
    if (event.target === loginModal) {
        loginModal.style.display = 'none';
    }
};

document.getElementById('role').addEventListener('change', function() {
    const role = this.value;

    // Hide all role-specific field sections and remove 'required' from their inputs
    document.getElementById('studentFields').classList.add('hidden');
    document.getElementById('houseWardenFields').classList.add('hidden');
    document.getElementById('hallSecretaryFields').classList.add('hidden');
    document.getElementById('maintenanceFields').classList.add('hidden');

    // Remove 'required' from all role-specific inputs
    document.querySelectorAll('#studentFields input, #houseWardenFields input, #hallSecretaryFields input, #maintenanceFields input, #studentFields select, #houseWardenFields select, #hallSecretaryFields select').forEach(input => {
        input.required = false; // Remove required from inputs
    });

    // Ensure the general fields are always visible and required
    document.getElementById('generalFields').classList.remove('hidden');
    document.querySelectorAll('#generalFields input').forEach(input => input.required = true); // Set general fields to required

    // Show the relevant role-specific fields and set them to required
    if (role === 'student') {
        document.getElementById('studentFields').classList.remove('hidden');
        document.querySelectorAll('#studentFields input, #studentFields select').forEach(input => input.required = true); // Ensure all student fields are required

    } else if (role === 'house warden') {
        document.getElementById('houseWardenFields').classList.remove('hidden');
        document.querySelectorAll('#houseWardenFields input, #houseWardenFields select').forEach(input => input.required = true); // Ensure house warden fields are required

    } else if (role === 'hall secretary') {
        document.getElementById('hallSecretaryFields').classList.remove('hidden');
        document.querySelectorAll('#hallSecretaryFields input, #hallSecretaryFields select').forEach(input => input.required = true); // Ensure hall secretary fields are required

    } else if (role === 'maintenance_staff') {
        document.getElementById('maintenanceFields').classList.remove('hidden');
        document.querySelectorAll('#maintenanceFields input').forEach(input => input.required = true); // Set maintenance fields to required
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const errorMessage = document.getElementById('error-message').textContent.trim();

    // Check if there is any error message to display
    if (errorMessage) {
        // Create a custom pop-up
        const popup = document.createElement('div');
        popup.id = 'custom-popup';
        popup.innerHTML = `
            <p>${errorMessage}</p>
            <button onclick="this.parentElement.style.display='none'">Close</button>
        `;
        document.body.appendChild(popup);
        popup.style.display = 'block';
    }
});

// // Function to close the modal
// function closeModal() {
//     document.getElementById('messageModal').style.display = 'none';
// }

// // Check for session messages
// document.addEventListener('DOMContentLoaded', function() {
//     const messageContent = document.getElementById('messageContent');
//     if (messageContent) {
//         const message = messageContent.getAttribute('data-message');
//         const messageType = messageContent.getAttribute('data-message-type');

//         if (message) {
//             // Set the message content and add appropriate class
//             messageContent.textContent = message;
//             messageContent.classList.add(messageType);

//             // Display the modal
//             document.getElementById('messageModal').style.display = 'block';
//         }
//     }
// });

