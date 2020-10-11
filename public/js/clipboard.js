document.addEventListener("DOMContentLoaded", function(){
    document.querySelector('#btnCopy').addEventListener("click", () => {
        const element = document.querySelector('#targetID'),
            selection = window.getSelection(),
            range = document.createRange();
        range.selectNodeContents(element);
        selection.removeAllRanges();
        selection.addRange(range);
        console.log('選択された文字列: ', selection.toString());
        const succeeded = document.execCommand('copy');
        if (succeeded) {
            alert('コピーしました');
        } else {
            alert('コピーが失敗しました');
        }
        selection.removeAllRanges();
    });
}, false);
