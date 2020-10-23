import React from "react";
import logo from "./logo.svg";
import "./App.css";
import HelloWorld from "./components/HelloWorld";
import Hello from "./components/Hello";
import ComponentStates from "./components/ComponentStates";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          <HelloWorld />
          <Hello name="Ing.-Mark Skalant" />
        </p>
        <ComponentStates />
      </header>
    </div>
  );
}

export default App;
