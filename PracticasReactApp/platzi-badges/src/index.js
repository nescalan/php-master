import React from "react";
import ReactDOM from "react-dom";
import Badge from "./components/Badge";

import "bootstrap/dist/css/bootstrap.css";
import "./global.css";

ReactDOM.render(
  <Badge
    firstName="Ing. Nelson"
    lastName="Gonzalez"
    avaratUrl="https://i.postimg.cc/C5VxTstK/Marco.jpg"
    jobTitle="Frontend Engineer"
    twitter="lurkie"
  />,
  document.getElementById("root")
);
