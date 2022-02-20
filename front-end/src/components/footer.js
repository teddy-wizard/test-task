import React from "react"
import Fade from "react-reveal/Fade"

const Footer = (props) => {
  return (
    <div className="section" id="contact">
      <div className="container">
        <div className="footer-container">
          <Fade bottom cascade>
            <h1>Contact</h1>
          </Fade>
          <p>Phone: {props.data.phone}</p>
          <p>
            Email: <a href={`mailto:${props.data.email}`}>
              {props.data.email}
            </a>
          </p>
        </div>
      </div>
    </div>
  )
}

export default Footer
