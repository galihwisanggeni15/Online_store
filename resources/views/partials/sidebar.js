"use client";
import styles from "../../public/css/header.css";
import React, {useState, useEffect} from "react";
// import { useState, useEffect } from 'react';

const Sidbar = () => {
    const [isSidbarOpen, setIsSidebarOpen] = useState(false);
    const [activeItem, setActiveItem] = useState('');

    const togglesidrbar = () => {
        setIsSidebarOpen(!isSidbarOpen);
    };

    // aktiv
    useEffect(() => {
        // Set activeItem based on the current page path
        const path = window.location.pathname;
        if (path === "/dashboard") {
            setActiveItem('dashboard');
        } else if (path === "/pembayaran") {
            setActiveItem('pembayaran');
        } else if (path === "/dataproduk") {
            setActiveItem('dataproduk');
        }
    }, []);

    const handleClick = (item) => {
        setActiveItem(item);
    };


    return (
        <div className="header">
            <div className={`navSamping ${isSidbarOpen ? "open" : ""}`}>
                <button className="btn-nav" onClick={togglesidrbar}>
                  <i className={`fa-solid fa-chevron-right ${isSidbarOpen ? "open" : ""}`}></i>
                </button>
                <a href="dashboard"  onClick={() => handleClick('dashboard')} className={activeItem === 'dashboard' ? 'active' : ''}>
                    <div className="navbar">
                        <div className="grubheader">
                            <span><i class="fa-solid fa-house"></i></span>
                        </div>
                        <div className={`h4 ${isSidbarOpen ? "open" : ""}`} >Dashboard</div>
                    </div>
                </a>
                <a href="pembayaran" onClick={() => handleClick('pembayaran')} className={activeItem === 'pembayaran' ? 'active' : ''}>
                    <div className="navbar">
                        <div className="grubheader">
                            <span><i class="fa-solid fa-cart-plus"></i></span>
                        </div>
                        <div className={`h4 ${isSidbarOpen ? "open" : ""}`} >Pembayaran</div>
                    </div>
                </a>
                <a href="dataproduk" onClick={() => handleClick('dataproduk')} className={activeItem === 'dataproduk' ? 'active' : ''}>
                    <div className="navbar">
                        <div className="grubheader">
                            <span><i class="fa-solid fa-download"></i></span>
                        </div>
                        <div className={`h4 ${isSidbarOpen ? "open" : ""}`} >Data Produk</div>
                    </div>
                </a>
                <a href="#">
                    <div className="navbar">
                        <div className="grubheader">
                            <span><i class="fa-solid fa-users"></i></span>
                        </div>
                        <div className={`h4 ${isSidbarOpen ? "open" : ""}`} >Data Memebr</div>
                    </div>
                </a>
                <a href="#">
                    <div className="navbar">
                        <div className="grubheader">
                            <span><i class="fa-solid fa-book"></i></span>
                        </div>
                        <div className={`h4 ${isSidbarOpen ? "open" : ""}`} >Laporan</div>
                    </div>
                </a>
                <a href="#">
                    <div className="navbar">
                        <div className="grubheader">
                            <span><i class="fa-solid fa-wrench"></i></span>
                        </div>
                        <div className={`h4 ${isSidbarOpen ? "open" : ""}`} >Pengatran</div>
                    </div>
                </a>
            </div>
        </div>
    );
};
export default Sidbar;