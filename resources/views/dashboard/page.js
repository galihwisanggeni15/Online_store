
"use client";
import styles from "../../public/css/dashboard.css";
import Sidbar from "../header/page";
import Navbar from "../navbar/page";
import { useState } from "react";
import { Bar, Line } from "react-chartjs-2";
import {
  Chart as ChartJS,
  CategoryScale,
  LinearScale,
  BarElement,
  Title,
  Tooltip,
  Legend,
  LineElement,
  PointElement,
  Filler
} from "chart.js";

ChartJS.register(
  CategoryScale,
  LinearScale,
  BarElement,
  Title,
  Tooltip,
  Legend,
  LineElement,
  PointElement,
  Filler
);

const ChartData1 = {
  labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6"],
  datasets: [
    {
      type: "bar",
      label: "Chart 1",
      data: [10, 20, 15, 25, 30, 35],
      backgroundColor: "rgba(255, 0, 0, 0.8)",
      borderColor: "rgba(255, 0, 0, 1)",
      borderWidth: 1,
    },
  ],
};

const ChartData2 = {
  labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6"],
  datasets: [
    {
      type: "bar",
      label: "Chart 2",
      data: [5, 15, 10, 20, 25, 30],
      backgroundColor: "rgba(0, 255, 0, 0.8)",
      borderColor: "rgba(0, 255, 0, 1)",
      borderWidth: 1,
    },
  ],
};

const ChartData3 = {
  labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6"],
  datasets: [
    {
      type: "bar",
      label: "Chart 3",
      data: [30, 25, 20, 15, 10, 5],
      backgroundColor: "rgba(0, 0, 255, 0.8)",
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 1,
    },
  ],
};

const ChartData4 = {
  labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6"],
  datasets: [
    {
      type: "line",
      label: "Chart 4 - Line",
      data: [10, 25, 30, 15, 20, 30],
      borderColor: "rgba(0, 0, 255, 1)",
      borderWidth: 2,
      tension: 0.5,
      fill: true,
      yAxisID: "y-axis-line",
      backgroundColor: (context) => {
        const ctx = context.chart.ctx;
        const gradient = ctx.createLinearGradient(0, 0, 0, 500);
        gradient.addColorStop(0, "#f797e1");
        gradient.addColorStop(1, "#3b71d6");
        return gradient;
      },
    },
  ],
};

const ChartOptions = {
  responsive: true,
  plugins: {
    title: {
      display: true,
      text: (ctx) => `Chart: ${ctx.chart.data.datasets[0].label}`,
    },
  },

  scales: {
    yAxes: [
      {
        id: "y-axis-bar",
        type: "bar",
        position: "left",
        ticks: {
          beginAtZero: true,
        },
      },
      {
        id: "y-axis-line",
        type: "linear",
        position: "right",
        ticks: {
          beginAtZero: true,
        },
      },
    ],
  },
};

const MultiBarChart = () => {
  return (
    <main>
        <Navbar />
        <div className="containerdasboard">
            <Sidbar />
            <div className="contentdsb">
                <div className="Cardbar">
                    <h2>Chart 1</h2>
                    <Bar data={ChartData1} options={ChartOptions} />
                </div>
                <div className="Cardbar">
                    <h2>Chart 2</h2>
                    <Bar data={ChartData2} options={ChartOptions} />
                </div>
                <div className="Cardbar">
                    <h2>Chart 3</h2>
                    <Bar data={ChartData3} options={ChartOptions} />
                </div>
                <div className="Cardbar2">
                    <h2>Chart 3</h2>
                  <div className="isit">
                      <Line data={ChartData4} options={ChartOptions} />
                  </div>
                </div>
            </div>
        </div>
    </main>
  );
};

export default MultiBarChart;

