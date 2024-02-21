import React from 'react';
import { useNavigate } from 'react-router-dom';
const Page2 = () => {
    const navigate = useNavigate();
    return (
        <>
            <h1>This text come from page 2</h1>
            <button onClick={() => navigate("/page1")}>Go page 1</button>
        </>
    );
}

export default Page2;
