import React from "react"

const Card = ({ title, description, imgUrl, date, featured }) => {
  return (
    <div className="card">
      <div className="card-header">
        <img src={imgUrl} ></img>
        <h3 className="title">{title}</h3>
      </div>
      <div className="card-body">
        <p className="text">{description}</p>
      </div>
      <div className="card-footer">
        {featured ? <icon>❤</icon> : <span></span>}
        <span className="date">{date}</span>
      </div>
    </div>
  )
}

export default Card
