import "../src/styles/style.scss";

import ExampleReactComponent from "./scripts/ExampleReactComponent";
import Header from "./layout/header/header";
import React from "react";
import ReactDOM from "react-dom";

if (document.querySelector("#render-react-example-here")) {
  ReactDOM.render(
    <ExampleReactComponent />,
    document.querySelector("#render-react-example-here")
  );
}

if (document.querySelector("#header")) {
  ReactDOM.render(<Header />, document.querySelector("#header"));
}
