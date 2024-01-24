import React from 'react';
import {useNavigate} from 'react-router-dom';

const Page1 = () => {
    const navigate = useNavigate();
    return (
        <>
            <h1>This text come from page 1</h1>
            <button onClick={() => navigate("/page2")}>Switch to page2</button>
        </>
    );
}

export default Page1;
