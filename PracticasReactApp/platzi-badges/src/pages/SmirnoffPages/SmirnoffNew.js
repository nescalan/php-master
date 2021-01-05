import React, { Component } from "react";

import NavbarSmirnoff from "../../components/SmirnoffComponents/NavbarSmirnoff";
import HeroSmirnoff from "../../components/SmirnoffComponents/SmirnofHero";
import BadgeSmirnoff from "../../components/SmirnoffComponents/BadgeSmirnoff";
import FormSmirnoff from "../../components/SmirnoffComponents/FormSmirnoff";

import "./SmirnoffNew.css";

class SmirnoffNew extends Component {
  state = { form: {} };

  handleChange = (e) => {
    this.setState({
      ...this.state.form,
      [e.target.name]: e.target.value,
    });
  };

  render() {
    return (
      <div>
        <NavbarSmirnoff />
        <HeroSmirnoff />

        <div className="container">
          <div className="row">
            <div className="col-6">
              <BadgeSmirnoff
                title="Smirnoff No. 21 Vodka"
                firstPrice="750ml bottle - from $14.99 "
                secondPrice="1.750l plastic bottle - from $22.99 "
              />
            </div>
            <div className="col-4">
              <FormSmirnoff
                onChange={this.handleChange}
                formValues={this.state.form}
              />
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default SmirnoffNew;
