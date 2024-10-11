import { NextResponse } from "@/node_modules/next/server";
import React, { useState } from 'react';
import firebase from 'firebase/compat/app';
import 'firebase/compat/firestore';

// Configurações do Firebase (substitua pelos seus valores)
const firebaseConfig = {
  apiKey: "AIzaSyC3ZlXYt3nYnT-CgAZOSq628TkBfIozro8",
  authDomain: "aula6-e9715.firebaseapp.com",
  projectId: "aula6-e9715",
  storageBucket: "aula6-e9715.appspot.com",
  messagingSenderId: "236199966352",
  appId: "1:236199966352:web:0838bc8569677be8d6ca15",
  measurementId: "G-3P9721LWXL"
};

// Inicialize o Firebase antes de qualquer uso
firebase.initializeApp(firebaseConfig);

export  function requisita(){
  return(
    <h1>cu</h1>
  )
};


