import React, { Component } from "react";

import "./styles/BadgeNew.css";
import header from "../images/badge-header.svg";
import Navbar from "../components/Navbar";

import Badege from "../components/Badge";

class BadgeNew extends Component {
  state = {};
  render() {
    return (
      <div>
        <Navbar />
        <div className="BadgeNew__hero">
          <img className="img-fluid" src={header} alt="Logo" />
        </div>

        <div className="container">
          <div className="row">
            <div className="col">
              <Badege
                firstName="Ing. Nelson"
                lastName="Gonzalez"
                twitter="lurkie"
                jobTitle="Frontend Engineer"
                avatarUrl="https://i.postimg.cc/wvFNQkkn/Marco.jpg"
              />
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default BadgeNew;
