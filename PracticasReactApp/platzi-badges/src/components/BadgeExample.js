import React, { Component } from "react";

import "./styles/BadgeExample.css";

class BadgeExample extends Component {
  state = {};
  render() {
    let url = "https://www.pinterest.com";
    return (
      <div className="container">
        <div>
          <form
            autoComplete="off"
            id="w3-exerciseform"
            action="exercise_bs3.asp?filename=exercise_bs3_badges1"
            method="post"
            target="blank"
          >
            <h2>Test Yourself With Exercises</h2>

            <div className="exercisewindow">
              <h2>Exercise:</h2>
              <p>
                After the "Comments" text, use a span element to make a badge
                with the number two inside.
              </p>
              <div className="exerciseprecontainer">
                <pre className="pre">
                  "Comments"
                  <input
                    className="pre__input"
                    name="ex1"
                    maxLength="28"
                    type="text"
                  />
                </pre>
              </div>
              <br />
              <button type="submit" className="w3-btn w3-margin-bottom">
                Submit Answer
              </button>
              <p>
                <a href={url}>Start the Exercise</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    );
  }
}

export default BadgeExample;
