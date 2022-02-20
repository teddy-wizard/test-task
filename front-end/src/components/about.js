import React from "react"
import Fade from "react-reveal/Fade"

const About = (props) => {
  return (
    <div className="section" id="about">
      <div className="container">
        <div className="about-section">
          <div className="image-wrapper">
            <img src={"/" + props.data.profile_picture} alt="about"></img>
          </div>
          <div className="content">
            <Fade bottom cascade>
              <h1>{props.data.name}</h1>
            </Fade>
            <p>
              {props.data.bio}
            </p>
          </div>
        </div>
      </div>
    </div>
  )
}

export default About