// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getFirestore, setDoc, doc } from "firebase/firestore";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyBSk7aPyIvzmoHiXrxTKx4isPWcsF0_UOc",
  authDomain: "reusability-ecefa.firebaseapp.com",
  projectId: "reusability-ecefa",
  storageBucket: "reusability-ecefa.appspot.com",
  messagingSenderId: "837668182158",
  appId: "1:837668182158:web:254534cb97170707e091df"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const firestore = getFirestore();

const test = doc(firestore, 'users/base');

function writeLogin(){
    const docData = {
        username : 'tester1',
        password : 'testerpassword',
        email : 'emailtest'
    };
    setDoc(test, docData);
}

document.getElementById('helloworld').innerHTML("Goodbye World!");
writeLogin();
/*
function initApp() {
    // Listening for auth state changes.
    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        // User is signed in.
        var displayName = user.displayName;
        var email = user.email;
        var emailVerified = user.emailVerified;
        var photoURL = user.photoURL;
        var isAnonymous = user.isAnonymous;
        var uid = user.uid;
        var providerData = user.providerData;
        document.getElementById('quickstart-sign-in-status').textContent = 'Signed in';
        document.getElementById('quickstart-sign-in').textContent = 'Sign out';
    
      } else {
        // User is signed out.
        document.getElementById('quickstart-sign-in-status').textContent = 'Signed out';
        document.getElementById('quickstart-sign-in').textContent = 'Sign in';
      }
      document.getElementById('quickstart-sign-in').disabled = false;
    });

    document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);
    document.getElementById('quickstart-sign-up').addEventListener('click', handleSignUp, false);
}

window.onload = function() {
    initApp();
};*/