import React from "react";
import PlayingGames from "../images/PlayingGames.svg";

import "../styles/Hero.css";

const Hero = () => {
  return (
    <div>
      <img className="PlayingGames" src={PlayingGames} alt="albert-app-cash" />
    </div>
  );
};

export default Hero;
