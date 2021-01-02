import React, { Component } from "react";

class FormSmirnoff extends Component {
  state = {};
  handleOnChange = (e) => {
    console.log({
      name: e.target.name,
      value: e.target.value,
    });
  };

  handleOnClick = (e) => {
    console.log("button was clicked");
  };

  handleOnSubmit = (e) => {
    e.preventDefault();
    console.log("Form was submited");
  };

  render() {
    return (
      <div>
        <form onSubmit={this.handleOnSubmit}>
          <div className="form-group">
            <label for="exampleInputEmail1">Email address</label>
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
            <label for="exampleInputPassword1">Password</label>
            <input
              onChange={this.handleOnChange}
              type="password"
              className="form-control"
              id="exampleInputPassword1"
              placeholder="Password"
              name=""
            />
          </div>
          <div className="form-group form-check">
            <input
              onChange={this.handleOnChange}
              type="checkbox"
              className="form-check-input"
              id="exampleCheck1"
            />
            <label className="form-check-label" for="exampleCheck1">
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
