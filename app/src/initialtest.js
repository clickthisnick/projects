/* istanbul ignore next */

function returnTrue() {
    return true;
}

if (typeof module !== 'undefined' && module.exports !== null) {
    exports.returnTrue = returnTrue;
}
