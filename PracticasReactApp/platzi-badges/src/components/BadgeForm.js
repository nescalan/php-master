import React, { Component } from "react";

class BadgeForm extends Component {
  state = {};

  handleChange = (e) => {
    console.log({ name: e.target.name, value: e.target.value });
  };

  handleOnClick = (e) => {
    console.log("Button was clicked");
  };

  handleOnSubmit = (e) => {
    e.preventDefault();
    console.log("handleOnSubmit stops the submit");
  };

  render() {
    return (
      <div>
        <h1>New Attendant</h1>

        <form onSubmit={this.handleOnSubmit}>
          <div className="form-group">
            <label>First Name</label>
            <input
              onChange={this.handleChange}
              className="form-control"
              type="text"
              name="firstName"
            />
          </div>
          <button onClick={this.handleOnClick} className="btn btn-primary">
            Save
          </button>
        </form>
      </div>
    );
  }
}

export default BadgeForm;
