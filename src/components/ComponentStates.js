import React, { Component } from "react";

class ComponentStates extends Component {
  state = {
    days: "",
  };

  onChange = (e) => {
    this.setState({
      [e.target.name]: e.target.value,
    });
  };

  render() {
    return (
      <div>
        <h1>New Attendat</h1>
        <input
          type="text"
          onChange={this.onChange}
          name="firstName"
          placeholder="firstName"
        />
        <p>First Name: {this.state.firstName}</p>

        <br />
        <input
          type="text"
          onChange={this.onChange}
          name="lastName"
          placeholder="lastName"
        />
        <p>Last Name: {this.state.lastName}</p>
      </div>
    );
  }
}

export default ComponentStates;
