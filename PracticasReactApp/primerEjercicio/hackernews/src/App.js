import logo from "./logo.svg";
import "./App.css";

function App() {
  const helloWorld = "Welcome to the Road to learn React";
  const secondMessage = "It's a Long And Winding Road 2";
  return (
    <div className="App">
      <h1> {helloWorld} </h1>
      <h2> {secondMessage} </h2>
    </div>
  );
}

export default App;