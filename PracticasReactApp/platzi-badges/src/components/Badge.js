import React, { Component } from "react";
import confgLogo from "../images/badge-header.svg";

class Badge extends Component {
  state = {};
  render() {
    return (
      <div>
        <div>
          <img src={confgLogo} alt="Logo de la Conferencia" />
        </div>

        <div>
          <img src="" alt="" />
          <h1>
            Ing. Nelson <br /> Gonzalez
          </h1>
        </div>

        <div>
          <p>Frontend Engineer</p>
          <p>@lurkie</p>
        </div>
        <div>#platziconf</div>
      </div>
    );
  }
}

export default Badge;
