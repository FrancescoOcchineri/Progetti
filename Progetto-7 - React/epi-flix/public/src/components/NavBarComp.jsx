import React from 'react';
import NetflixLogo from '../components/image/logo.png';
import { Nav, Navbar } from 'react-bootstrap';

export default function NavBarComp() {
  return (
    <Navbar className="navbar-expand-lg navbar-dark" expand="lg">
      <Navbar.Brand href="#home">
        <img src={NetflixLogo} alt="Netflix Logo" className="logo ms-3" />
      </Navbar.Brand>
      <Navbar.Toggle aria-controls="basic-navbar-nav" className='me-3' />
      <Navbar.Collapse id="basic-navbar-nav">
        <Nav className="ms-3">
          <Nav.Link href="#1">Home</Nav.Link>
          <Nav.Link href="#2" className="navLink" active>
            Tv Shows
          </Nav.Link>
          <Nav.Link href="#3">Movies</Nav.Link>
          <Nav.Link href="#4">Recently Added</Nav.Link>
          <Nav.Link href="#5">My List</Nav.Link>
          </Nav>
          <Nav className="ms-auto me-3">
          <i className="fa fa-search icons me-0"></i>
          <span id="kids" className='ms-3'>KIDS</span>
          <i className="fa fa-bell icons"></i>
          <i className="fa fa-user"></i>
        </Nav>
      </Navbar.Collapse>
    </Navbar>
  );
}

