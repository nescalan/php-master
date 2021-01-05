import React, { Component } from "react";

class FormSmirnoff extends Component {
  // state = {};

  // handleOnChange = (event) => {
  //   this.setState({
  //     [event.target.name]: event.target.value,
  //   });
  // };

  handleOnClick = (e) => {
    console.log("button was clicked");
  };

  handleOnSubmit = (e) => {
    e.preventDefault();
    console.log("Form was submited");
    console.log(this.state);
  };

  render() {
    return (
      <div>
        <h1>New Form</h1>

        <form onSubmit={this.handleOnSubmit}>
          <div className="form-group">
            <label htmlFor="exampleInputEmail1">Email address</label>
            <input
              onChange={this.props.onChange}
              type="email"
              className="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="Enter email"
              name="emailAddress"
              value={this.props.formValues.emailAddress}
            />
            <small id="emailHelp" className="form-text text-muted">
              We'll never share your email with anyone else.
            </small>
          </div>
          <div className="form-group">
            <label htmlFor="exampleInputPassword1">Password</label>
            <input
              onChange={this.props.onChange}
              type="password"
              className="form-control"
              id="exampleInputPassword1"
              placeholder="Password"
              name="password"
              value={this.props.formValues.password}
            />
          </div>
          <div className="form-group form-check">
            <input
              onChange={this.props.onChange}
              type="checkbox"
              className="form-check-input"
              id="exampleCheck1"
              name="checkbox"
              value={this.props.formValues.checkbox}
            />
            <label className="form-check-label" htmlFor="exampleCheck1">
              Check me out
            </label>
          </div>
          <button onClick={this.handleOnClick} className="btn btn-primary">
            Submit
          </button>
        </form>
      </div>
    );
  }
}

export default FormSmirnoff;
