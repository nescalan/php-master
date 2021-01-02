import React from "react";

import smirnoffLogo from "../../images/smirnoff/smirnoff-logo.svg";

const BadgeSmirnoff = (props) => {
  const drizlyURL =
    "https://drizly.com/liquor/vodka/smirnoff-no-21-vodka/p4683";
  return (
    <div className="container">
      <div className="row">
        <div className="col">
          <div className="card width">
            <img
              className="card-img-top img-width"
              src={smirnoffLogo}
              alt="Marco"
            />
            <div className="card-body">
              <h5 className="card-title"> {props.title} </h5>
              <p className="card-text card__text-size">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <h6> {props.firstPrice} </h6>
              <h6> {props.secondPrice} </h6>
              <a href={drizlyURL} className="btn btn-primary">
                Go somewhere
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default BadgeSmirnoff;
