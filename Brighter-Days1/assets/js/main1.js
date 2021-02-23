/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Get All Values
const inputTxt = document.querySelector('.inputTxt');
var button = document.querySelector('.btn');
const showData = document.querySelector('.showData');

//Get API Key By Login To OpenWeather.org
const API_Key = "a0e78d3b449db7059df0a38abd3952f8";

//Now Add Event Listener
button.addEventListener('click', () => {

    //Get Input Value
    const cityInput = inputTxt.value;
    // console.log(cityInput);

    //Now Fetch Through Get API 
    fetch(`http://api.openweathermap.org/data/2.5/weather?q=${cityInput}&units=metric&APPID=${API_Key}`)
        .then(res => res.json())
        .then(data => {
            // console.log(data);

            //When Fill Input Field Then Clear Input Field
            inputTxt.value = " ";

            //Now Show All Data Value
            showData.innerHTML = `
                                <ul>
                                    <li class="city">${data.name}</li>
                                    <li class="desc">${data.weather[0].description}</li>
                                    <li class="temp">${data.main.temp}°c</li>
                                    <li class="wind">${data.wind.speed} Wind Speed</li>
                                                                      
                                </ul>
                                `; 

        });

});

