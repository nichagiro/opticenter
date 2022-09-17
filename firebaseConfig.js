// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyAiMdK7fFMUzLbK1EFb1A1QpIJ0zmk6nmQ",
    authDomain: "opticenter-ef2bc.firebaseapp.com",
    projectId: "opticenter-ef2bc",
    storageBucket: "opticenter-ef2bc.appspot.com",
    messagingSenderId: "721279301797",
    appId: "1:721279301797:web:1b3d8fc1624d2094fe754c",
    measurementId: "G-69NGEYQ46N"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);