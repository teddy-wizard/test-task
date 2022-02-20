import React from "react"
import Card from "./atoms/card"
import Fade from "react-reveal/Fade"

const Album = (props) => {
  return (
    <div className="section" id="album">
      <div className="container">
        <div className="album-wrapper">
          <Fade bottom>
            <h1>Album</h1>
          </Fade>

          <div className="grid">
            <Fade bottom cascade>
              {props.data.album.map((album, index) => (
                <Card
                  key={index}
                  title={album.title}
                  description={album.description}
                  imgUrl={album.img}
                  date={album.date}
                  featured={album.featured}
                ></Card>
              ))}
            </Fade>
          </div>
        </div>
      </div>
    </div>
  )
}

export default Album
