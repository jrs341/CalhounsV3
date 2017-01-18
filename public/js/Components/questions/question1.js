var React = require("react");

var Form = React.createClass({

  getInitialState: function() {
    return { text: "" };
  },

  handleChange: function(event) {
    var newState = {};
    newState[event.target.id] = event.target.value;
    this.setState(newState);
  },

  handleSubmit: function(event) {
    event.preventDefault();

    this.props.submit(this.state.text)
    this.setState({ text: "" });
  },

  render: function() {
    return (
    <form action="#">
      <p>
        <input name="group1" 
        type="radio" 
        id="test1"
        value={this.state.id}
        onChange={this.handleChange}
        />
        <label for="test1">Red</label>
      </p>
      <p>
        <input name="group1" 
        type="radio" 
        id="test2"
        value={this.state.id}
        onChange={this.handleChange}
        />
        <label for="test2">Yellow</label>
      </p>
      <button className="btn waves-effect waves-light" type="submit" name="action">Submit
      <i className="material-icons right">send</i>
      </button>
    </form>
    );
  }
});

module.exports = question1;