var React = require('react');
var renderReact = require('hypernova-react').renderReact;

function HelloComponent(props) {
  return React.createElement('div', {
    onClick: function () {
      alert('Click handlers work.');
    },
  }, 'Hello, ' + props.name + '!');
}

module.exports = renderReact('Hello.js', HelloComponent);