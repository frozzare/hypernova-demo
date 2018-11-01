var hypernova = require('hypernova/server');
var path = require('path');

hypernova({
  devMode: true,

  getComponent(name) {
    var p = path.join(process.cwd(), 'src', name);
    return require(p);
  },

  port: 3030,
});