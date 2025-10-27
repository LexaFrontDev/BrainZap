import React from 'react'
import ReactDOM from 'react-dom/client'
import {RouterDom} from './router/router';
import './ui/styles/main.scss';
import './ui/styles/tailwind.css';



// @ts-ignore
const root = ReactDOM.createRoot(document.getElementById('root'));

root.render(
    <React.StrictMode>
            <RouterDom />
    </React.StrictMode>
);