import { NextResponse } from "@/node_modules/next/server";
import React, { useState, useEffect } from 'react';
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { collection, getDocs } from "firebase/firestore";
import { getFirestore } from "firebase/firestore";


const firebaseConfig = {
  apiKey: "AIzaSyC3ZlXYt3nYnT-CgAZOSq628TkBfIozro8",
  authDomain: "aula6-e9715.firebaseapp.com",
  projectId: "aula6-e9715",
  storageBucket: "aula6-e9715.appspot.com",
  messagingSenderId: "236199966352",
  appId: "1:236199966352:web:0838bc8569677be8d6ca15",
  measurementId: "G-3P9721LWXL"
};

const app = initializeApp(firebaseConfig);
export const db = getFirestore(app)

const fetchData = async () => {
  await getDocs(collection(db, "Nomes"))
    .then((querySnapshot)=>{
      const newData = querySnapshot.docs
        .map((doc)=> ({...doc.data(), id:doc.id}));
        console.log(newData)
    })
}
useEffect(()=>{
  fetchData();
},[])

export default function requisita(){
  return(
    
    <h1>EXE</h1>
  )
};


