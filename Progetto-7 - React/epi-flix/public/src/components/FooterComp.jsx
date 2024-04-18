import React from 'react'
import { Row, Col, Button } from 'react-bootstrap'

export default function FooterComp() {
  return (
    <Row className="mt-5">
      <Col className="offset-3">
        <Row>
          <Col className="text-left mb-2">
            <a href="#"><i className="fa-brands fa-facebook"></i></a>
            <a href="#"><i className="fa-brands fa-instagram"></i></a>
            <a href='#'><i className="fa-brands fa-x-twitter"></i></a>
            <a href='#'><i className="fa-brands fa-youtube"></i></a>
          </Col>
        </Row>
        <Row xs={1} sm={2} md={4} lg={4} className='g-0'>
          <Row>
            <Col xs={12}>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Audio and Subtitles</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Media Center</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Privacy</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Contact us</a>
              </p>
            </Col>
          </Row>
          <Row>
            <Col xs={12}>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Audio Description</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Investor Relations</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Legal Notices</a>
              </p>
            </Col>
          </Row>
          <Row>
            <Col xs={12}>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Help Center</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Jobs</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Cookie Preferences</a>
              </p>
            </Col>
          </Row>
          <Row>
            <Col xs={12}>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Gift Cards</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Terms of Use</a>
              </p>
              <p>
                <a href="#" alt="footer link" className="text-decoration-none text-secondary" style={{ fontSize: '0.8rem' }}>Corporate Information</a>
              </p>
            </Col>
          </Row>
        </Row>
        <Row>
          <Col xs={12} className='my-2 ms-2'>
            <Button size='sm' variant="outline-dark border border-secondary rounded-0 text-secondary">Service Code</Button>
          </Col>
        </Row>
        <Row>
          <Col xs={12} className="text-left my-2 copyright text-secondary ms-2" style={{ fontSize: '0.6rem' }}>
            © 1997-2022 Netflix, Inc.
          </Col>
        </Row>
      </Col>
    </Row>
  )
}
