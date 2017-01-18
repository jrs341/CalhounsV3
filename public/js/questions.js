var React = require("react");
var ReactDOM = require("react-dom");

var question1 = require("./Components/questions");

var App = React.createClass({
  render: function() {
    return (
      <div className="container">
        <question1 />
      </div>
    )
  }
});


ReactDOM.render(<App />, document.getElementById("reactTest"));