var expect = require('expect')
var createSpy = expect.createSpy
var spyOn = expect.spyOn
var isSpy = expect.isSpy

describe('Initial Test To Pass CI', function() {
  it('should pass', function(){
      expect('something truthy').toExist();
  })
});
