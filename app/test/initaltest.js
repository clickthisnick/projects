var expect = require('expect'),
    ss = require('../src/initialtest.js');

describe('Initial Test To Pass CI', function() {
    it('should pass', function() {
        expect(ss.returnTrue()).toBe(true);
    });
});
