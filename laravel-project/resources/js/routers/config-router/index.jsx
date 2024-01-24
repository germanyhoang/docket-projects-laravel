import Page1 from '../../pages/Page1';
import Page2 from '../../pages/Page2';
import React from 'react';

export const configRouters = [
    {
        path: "/page1",
        element: <Page1/>
    },
    {
        path: "/page2",
        element: <Page2/>
    }
];
