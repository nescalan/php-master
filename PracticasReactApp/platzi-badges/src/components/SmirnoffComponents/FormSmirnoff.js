import React, { Component } from "react";

class FormSmirnoff extends Component {
  state = {};
  handleOnChange = (event) => {
    console.log({
      name: event.target.name,
      value: event.target.value,
    });
  };

  handleOnClick = (event) => {
    console.log("button was clicked");
  };

  handleOnSubmit = (event) => {
    event.preventDefault();
    console.log("Form was submited");
  };

  render() {
    return (
      <div>
        <form onSubmit={this.handleOnSubmit}>
          <div className="form-group">
            <label htmlFor="exampleInputEmail1">Email address</label>
            <input
              onChange={this.handleOnChange}
              type="email"
              className="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="Enter email"
              name="EmailAddress"
            />
            <small id="emailHelp" className="form-text text-muted">
              We'll never share your email with anyone else.
            </small>
          </div>
          <div className="form-group">
            <label htmlFor="exampleInputPassword1">Password</label>
            <input
              onChange={this.handleOnChange}
              type="password"
              className="form-control"
              id="exampleInputPassword1"
              placeholder="Password"
              name="Password"
            />
          </div>
          <div className="form-group form-check">
            <input
              onChange={this.handleOnChange}
              type="checkbox"
              className="form-check-input"
              id="exampleCheck1"
            />
            <label className="form-check-label" htmlFor="exampleCheck1">
              Check me out
            </label>
          </div>
          <button
            onClick={this.handleOnClick}
            // type="submit"
            className="btn btn-primary"
          >
            Submit
          </button>
        </form>
      </div>
    );
  }
}

export default FormSmirnoff;
