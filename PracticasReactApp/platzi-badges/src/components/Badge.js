import React, { Component } from "react";
import confgLogo from "../images/badge-header.svg";
import marcoImage from "../images/Marco.jpg";

import "./styles/Badge.css";
import "bootstrap/dist/css/bootstrap.css";

class Badge extends Component {
  state = {};
  render() {
    return (
      <div className="Badge">
        <div className="Badge__header">
          <img src={confgLogo} alt="Logo de la Conferencia" />
        </div>

        <div className="Badge__section-name">
          <img className="Badge__avatar" src={marcoImage} alt="" />
          <h1>
            Ing. Nelson <br /> Gonzalez
          </h1>
        </div>

        <div className="Badge__footer">
          <p>Frontend Engineer</p>
          <p>@lurkie</p>
        </div>
        <div>#platziconf</div>
      </div>
    );
  }
}

export default Badge;
