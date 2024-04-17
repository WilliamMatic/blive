
function scrollToBottom(e) {
    setTimeout(() => {
        new SimpleBar(document.getElementById("chat-conversation")).getScrollElement().scrollTop = document.getElementById("users-conversation").scrollHeight;
    }, 100);
}
scrollToBottom(currentChatId);
