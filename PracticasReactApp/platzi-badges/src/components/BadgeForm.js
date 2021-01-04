import React, { Component } from "react";

class BadgeForm extends Component {
  state = {};

  handleOnChange = (e) => {
    // console.log({ name: e.target.name, value: e.target.value });
    this.setState({
      [e.target.name]: e.target.value,
    });
  };

  handleOnClick = (e) => {
    console.log("Button was clicked");
  };

  handleOnSubmit = (e) => {
    e.preventDefault();
    console.log("handleOnSubmit stops the submit");
    console.log(this.state);
  };

  render() {
    return (
      <div>
        <h1>New Attendant</h1>

        <form onSubmit={this.handleOnSubmit}>
          <div className="form-group">
            <label>First Name</label>
            <input
              onChange={this.handleOnChange}
              className="form-control"
              type="text"
              name="firstName"
              value={this.state.firstName}
            />
          </div>
          <div className="form-group">
            <label>Last Name</label>
            <input
              onChange={this.handleOnChange}
              className="form-control"
              type="text"
              name="lastName"
              value={this.state.lastName}
            />
          </div>
          <div className="form-group">
            <label>Email</label>
            <input
              onChange={this.handleOnChange}
              className="form-control"
              type="email"
              name="email"
              value={this.state.email}
            />
          </div>
          <div className="form-group">
            <label>Job Title</label>
            <input
              onChange={this.handleOnChange}
              className="form-control"
              type="text"
              name="jobTitle"
              value={this.state.value}
            />
          </div>
          <div className="form-group">
            <label>Twitter</label>
            <input
              onChange={this.handleOnChange}
              className="form-control"
              type="text"
              name="twitter"
              value={this.state.twitter}
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
