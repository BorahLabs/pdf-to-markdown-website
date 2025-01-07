import copy from 'copy-to-clipboard';

window.copyToClipboard = (text) => {
    copy(text);

    new window.FilamentNotification().title('Markdown copied to clipboard!').success().send();
};
