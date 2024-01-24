import './bootstrap';
import ReactDOM from 'react-dom/client';
import React from 'react';
import {BrowserRouter} from 'react-router-dom';
import AllRouters from './routers/all-routers';

const App = () => {
    return (
        <AllRouters/>
    );
}

ReactDOM.createRoot(document.getElementById('root')).render(
    <BrowserRouter>
        <App/>
    </BrowserRouter>
);
