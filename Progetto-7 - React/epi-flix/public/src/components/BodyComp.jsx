import React, { Component } from 'react'
import { Dropdown, Row, Col } from 'react-bootstrap'
import { token } from '../dati/dati'

export default class BodyComp extends Component {

    state = {
        films1: [],
        films2: [],
        films3: [],
    }

    componentDidMount = () => {
        fetch(`http://www.omdbapi.com/?apikey=${token}&s=star%20wars`, {})
        .then(response => response.json())
        .then(json => this.setState({ films1: json }))
        .catch(err => console.error(err));

        fetch(`http://www.omdbapi.com/?apikey=${token}&s=matrix`, {})
        .then(response => response.json())
        .then(json => this.setState({ films2: json }))
        .catch(err => console.error(err));

        fetch(`http://www.omdbapi.com/?apikey=${token}&s=back%20to%20the%20future`, {})
        .then(response => response.json())
        .then(json => this.setState({ films3: json }))
        .catch(err => console.error(err));
          }

            render() {
        return (
            <>
            <div className="container-fluid px-4">
                <div className="d-flex justify-content-between">
                <div className="d-flex">
                    <h2 className="mb-4 text-white">TV Shows</h2>
            <Dropdown>
            <Dropdown.Toggle variant="success" id="dropdown-basic" className='rounded-0 border border-secondary py-1 px-2 mx-4'>
                Genres
            </Dropdown.Toggle>

            <Dropdown.Menu className='menu'>
                <Dropdown.Item href="#/action-1" className='text-white scritte'>Comedy</Dropdown.Item>
                <Dropdown.Item href="#/action-2" className='text-white scritte'>Drama</Dropdown.Item>
                <Dropdown.Item href="#/action-3" className='text-white scritte'>Thriller</Dropdown.Item>
            </Dropdown.Menu>
            </Dropdown>
            </div>
            <div>
            <i className="fa fa-th-large icons"></i>
            <i className="fa fa-th icons"></i>
            </div>
            </div>
            </div>

        <h4 className='text-white mx-4'>Trending Now</h4>
            <Row xs={1} sm={2} lg={4} xl={6} className='g-3 text-center my-3 mx-4'>
                {this.state.films1.Search && this.state.films1.Search.slice(0, 6).map((film) => (
            <Col key={film.imdbID}>
                <img src={film.Poster} alt={film.Title} className="imgCarousel img-fluid h-100" />
            </Col>
        ))}
            </Row>
        <h4 className='text-white mx-4'>Watch it Again</h4>
            <Row xs={1} sm={2} lg={4} xl={6} className='g-3 text-center my-3 mx-4'>
                {this.state.films2.Search && this.state.films2.Search.slice(0, 6).map((film) => (
            <Col key={film.imdbID}>
                <img src={film.Poster} alt={film.Title} className="imgCarousel img-fluid h-100" />
            </Col>
        ))}
            </Row>
        <h4 className='text-white mx-4'>New Releases</h4>
            <Row xs={1} sm={2} lg={4} xl={6} className='g-3 text-center my-3 mx-4'>
                {this.state.films3.Search && this.state.films3.Search.slice(0, 6).map((film) => (
            <Col key={film.imdbID}>
                <img src={film.Poster} alt={film.Title} className="imgCarousel img-fluid h-100" />
            </Col>
        ))}
            </Row>
            </>
        )
        }
        }

