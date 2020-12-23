import logo from "./logo.svg";
import "./App.css";

function App() {
  const helloWorld = "Welcome to the Road to learn React";
  const secondMessage = "It's a Long And Winding Road 2";
  return (
    <div className="App">
      <h1> {helloWorld} </h1>
      <h2> {secondMessage} </h2>
      <h3>Today is {new Date().toLocaleDateString()}.</h3>
      <h3>The Time is: {new Date().toLocaleTimeString()}.</h3>
      <p>Well is going to be hard, but I think it's a great oportunity</p>
    </div>
  );
}

export default App;
