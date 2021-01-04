import React, { Component } from "react";
import confgLogo from "../images/badge-header.svg";

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
          <img className="Badge__avatar" src={this.props.avatarUrl} alt="" />
          <h1>
            {this.props.firstName} <br /> {this.props.lastName}
          </h1>
        </div>

        <div className="Badge__section-info">
          <h3>{this.props.jobTitle}</h3>
          <div>@{this.props.twitter}</div>
        </div>
        <div className="Badge__footer">#platziconf</div>
      </div>
    );
  }
}

export default Badge;
