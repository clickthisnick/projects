/* istanbul ignore next */

function returnTrue() {
    return true;
}

function returnTrue2() { // eslint-disable-line no-unused-vars
    return true;
}

function returnTrue3() { // eslint-disable-line no-unused-vars
    return true;
}

if (typeof module !== 'undefined' && module.exports !== null) {
    exports.returnTrue = returnTrue;
}
