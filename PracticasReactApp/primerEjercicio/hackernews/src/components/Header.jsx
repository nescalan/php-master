import React from "react";
import "../styles/Header.css";

const Header = () => {
  return (
    <div className="topnav" id="myTopnav">
      <a href="#home" className="active">
        Home
      </a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
      <i className="fa fa-bars"></i>
    </div>
  );
};

export default Header;
