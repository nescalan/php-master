import React, { Component } from "react";
import Header from "./components/Header";
import Hero from "./components/Hero";
import FistSection from "./components/firstSection";

import "./App.css";
import "bootstrap/dist/css/bootstrap.min.css";

class App extends Component {
  state = {};
  render() {
    return (
      <div>
        <Header />
        <Hero />
        <FistSection />
      </div>
    );
  }
}

export default App;
