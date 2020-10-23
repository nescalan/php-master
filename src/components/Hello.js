import React, { Component } from "react";

class Hello extends Component {
  constructor(props) {
    super(props);

    let firstName = this.props.name.split(" ")[0];

    this.state = {
      name: firstName,
    };
  }

  render() {
    return (
      <div>
        <h1>Hello {this.state.name} </h1>
      </div>
    );
  }
}

export default Hello;
