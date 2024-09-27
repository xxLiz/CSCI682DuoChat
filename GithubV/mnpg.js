document.getElementById('send-button').addEventListener('click', function() {
    const chatWindow = document.getElementById('chat-window');
    const chatInput = document.getElementById('chat-input');
    const message = chatInput.value;

    if (message.trim()) {
        const newMessage = document.createElement('div');
        newMessage.classList.add('chat-message');
        newMessage.innerHTML = `<span>You:</span> ${message}`;
        chatWindow.appendChild(newMessage);
        chatInput.value = '';
        chatWindow.scrollTop = chatWindow.scrollHeight; // Auto scroll to the bottom
    }
});

// Optional: Allow sending messages with Enter key
document.getElementById('chat-input').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        document.getElementById('send-button').click();
    }
});
