import React, {useState, useEffect} from "react"
import axios from 'axios';

import Layout from "../components/layout"
import SEO from "../components/seo"
// Components
import Album from "../components/album"
import About from "../components/about"
import Footer from "../components/footer"
import Navbar from "../components/navbar";

const IndexPage = () => {
  const [profileData, setProfileData] = useState(null);

  const getData=()=>{
    axios.get('/data/landscapes.json', {
      headers : {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
        }
    })
    .then(function (response) {
      console.log(response)
      setProfileData(response.data);
    })
    .catch(function (error) {
        console.log(error)
    });
  }

  useEffect(()=>{
    getData()
  },[])

  return (
            <Layout>
              <SEO title="Portfolio For Photographer - Skill Test" />
              {
                profileData ? (
                  <>
                    <Navbar></Navbar>
                    <About data={profileData}></About>
                    <Album data={profileData}></Album>
                    <Footer data={profileData}></Footer>
                  </>
                ) : <p>Loading...</p>
              }
            </Layout>
        )
}

export default IndexPage
