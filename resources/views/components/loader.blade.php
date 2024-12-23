<div class="d-none" id="loading-div" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, #1e293b, #0f172a); display: flex; justify-content: center; align-items: center; z-index: 9999;">
    <div class="cycle-loader-container">
        <div class="cycle-ring">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <p class="loading-text">Loading, please wait...</p>
    </div>
</div>

<style>
/* Full-screen Loading Container */
#loading-div {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #1e293b, #0f172a);
    z-index: 9999;
}

/* Cycle Loader Container */
.cycle-loader-container {
    text-align: center;
    position: relative;
    width: 120px;
    height: 120px;
}

/* The Ring */
.cycle-ring {
    position: relative;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 4px solid transparent;
    border-top-color: #4f46e5;
    animation: spin 1.5s linear infinite;
}

/* Circles inside the Ring */
.circle {
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    background-color: #22d3ee;
    border-radius: 50%;
    animation: pulse 1s ease-in-out infinite;
}

/* Pulsing Circles */
.circle:nth-child(1) {
    animation-delay: 0s;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
}

.circle:nth-child(2) {
    animation-delay: 0.2s;
    top: 50%;
    left: 100%;
    transform: translateY(-50%) translateX(-100%);
}

.circle:nth-child(3) {
    animation-delay: 0.4s;
    top: 100%;
    left: 50%;
    transform: translateX(-50%) translateY(-100%);
}

/* Spin Animation */
@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

/* Pulse Animation */
@keyframes pulse {
    0%, 100% {
        transform: scale(0.8);
        opacity: 0.7;
    }
    50% {
        transform: scale(1);
        opacity: 1;
    }
}

/* Loading Text */
.loading-text {
    color: #ffffff;
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 20px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}
</style>
