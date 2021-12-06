const userId = document.getElementById('userId');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const age = document.getElementById('age');
const addBtn = document.getElementById('addBtn');
const updateBtn = document.getElementById('updateBtn');
const readBtn = document.getElementById('readBtn');
const removeBtn = document.getElementById('removeBtn');

import { initializeApp } from 'firebase/app';
import { getDatabase } from "firebase/database";
import { getDatabase, ref, set } from "firebase/database";


// Set the configuration for your app
// TODO: Replace with your project's config object
const firebaseConfig = {
  apiKey: "AIzaSyAA6ivv8uB1lBTxoaT2MyjqkSj4YJD3e5Y",

    authDomain: "projetcloudcompu.firebaseapp.com",

    projectId: "projetcloudcompu",

    storageBucket: "projetcloudcompu.appspot.com",

    messagingSenderId: "583578801932",

    appId: "1:583578801932:web:0bf2ed50e8c97aa16ddb29",

    measurementId: "G-RCVK6QZE80"

};

const app = initializeApp(firebaseConfig);

function writeUserData(){
  const db = getDatabase();
  set(ref(db, 'users/' + userId), {
    username: "1",
    email: "2"
  });
}