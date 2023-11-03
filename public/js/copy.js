const copyButton = document.getElementById('copyButton');
const textToCopy = document.getElementById('textToCopy');

copyButton.addEventListener('click', () => {
    navigator.clipboard.writeText(textToCopy.value)
        .then(() => {
            alert('Text copied to clipboard');
        })
        .catch((err) => {
            alert('Unable to copy text: ', err);
        });
});
