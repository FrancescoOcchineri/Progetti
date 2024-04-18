import React from 'react'
import { Button } from 'react-bootstrap';
import { useNavigate } from 'react-router-dom'

export default function NotFoundPage() {

    const navigate = useNavigate();

    const handleClick = () => {
        navigate('/')
    }

    return (
        <>
            <div style={{ minHeight: '100vh', display: 'flex', flexDirection: 'column' }}>
                <div className='d-flex flex-column align-items-center'>
                    <div className='d-flex justify-content-center mt-5'>
                        <img id="Ncloud" src='https://cdn-icons-png.flaticon.com/512/4791/4791025.png' alt='cloud' />
                    </div>
                    <h1 id='TCloud'>404</h1>
                    <Button
                        variant='light'
                        className='fs-6 mt-5'
                        onClick={handleClick}
                    >
                        Go Home
                    </Button>
                </div>
            </div>
        </>
    )
}
