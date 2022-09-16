// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyCRjQj7giylNH3SppmT2p_pfJ8a4WiirDs",
    authDomain: "opticenter-e0da8.firebaseapp.com",
    projectId: "opticenter-e0da8",
    storageBucket: "opticenter-e0da8.appspot.com",
    messagingSenderId: "514988723133",
    appId: "1:514988723133:web:fc2b0d052688e66ce7a0d4",
    measurementId: "G-KGQ2CNTVGH"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);