import React from "react";

import smirnoffBanner from "../../images/smirnoff/smirnoff-banner.png";
import NavbarSmirnoff from "../../components/SmirnoffComponents/NavbarSmirnoff";
import BadgeSmirnoff from "../../components/SmirnoffComponents/BadgeSmirnoff";
import FormSmirnoff from "../../components/SmirnoffComponents/FormSmirnoff";

import "./SmirnoffNew.css";

const SmirnoffNew = () => {
  return (
    <div>
      <NavbarSmirnoff />
      <div className="container conteiner__banner">
        <img className="img-fluid" src={smirnoffBanner} alt="Logo" />
      </div>

      <div className="container">
        <div className="row">
          <div className="col-6">
            <BadgeSmirnoff
              title="Smirnoff No. 21 Vodka"
              firstPrice="750ml bottle - from $14.99 "
              secondPrice="1.750l plastic bottle - from $22.99 "
            />
          </div>
          <div className="col-6">
            <FormSmirnoff />
          </div>
        </div>
      </div>
    </div>
  );
};

export default SmirnoffNew;
