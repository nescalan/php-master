import NavBar from "./compnents/NavBar";
import MusicForm from "./compnents/MusicForm";
import logo from "./images/logo.svg";
import "./App.css";
import "bootstrap/dist/css/bootstrap.css";

function App() {
  return (
    <div className="App">
      <img src={logo} className="" alt="logo" />
      <header className="">
        <div className="container">
          <div className="row">
            <div className="col-6 ">
              <NavBar />
              <MusicForm />
            </div>
          </div>
        </div>
      </header>
    </div>
  );
}

export default App;
