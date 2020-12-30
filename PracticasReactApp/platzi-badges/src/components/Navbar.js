import React, { Component } from "react";

import "./styles/Navbar.css";
import logo from "../images/logo.svg";

class Navbar extends Component {
  state = {};
  render() {
    return (
      <div className="Navbar">
        <a href="/">
          <img src={logo} alt="Logo" />
          <span className="font-weight-light">Platzi</span>
          <span className="font-weight-bold">Conf</span>
        </a>
      </div>
    );
  }
}

export default Navbar;
