/**
 * @param {Function} anonymousFunction 遅延実行される無名関数
 * @param {number} delay 遅延時間(ms)
 * @returns
 */
function debounce(anonymousFunction, delay)
{
    let inDebounceTimerId;
    return function() {
        const context = this;
        const args = arguments;
        clearTimeout(inDebounceTimerId);
        inDebounceTimerId = setTimeout(() => anonymousFunction.apply(context, args), delay);
    }
}

/**
 * 1秒後に 'Click Event Called' という文字列と現在日時を console に出力する
 */
const clickEvent = debounce(function() {
    console.log('Click Event Called');
    console.log(new Date());
}, 1000);

/**
 * ページロード後、id が test-debounce の要素に対して click イベントリスナーを追加
 */
window.addEventListener('load', function() {
    document.getElementById('test-debounce').addEventListener('click', clickEvent);
});

