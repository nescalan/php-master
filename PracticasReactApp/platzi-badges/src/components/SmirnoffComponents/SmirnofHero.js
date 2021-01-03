import React from "react";
import smirnoffBanner from "../../images/smirnoff/smirnoff-banner.png";

const SmirnofHero = () => {
  return (
    <div className="container conteiner__banner">
      <img className="img-fluid" src={smirnoffBanner} alt="Logo" />
    </div>
  );
};

export default SmirnofHero;
