

var request = new XMLHttpRequest()

request.open('GET', 'https://api.open-meteo.com/v1/forecast?latitude=52.23&longitude=21.01&current_weather=true', true)
request.onload = function () {
  var data = JSON.parse(this.response)

  

  console.log(data.current_weather)
  switch(data.current_weather.weathercode){
    case 0:
    document.querySelector(".pogoda").innerHTML+="<img src=slonecznie.png alt=Clear sky>"
    break;
    case 1:
    case 2:
    case 3:
    document.querySelector(".pogoda").innerHTML+="<img src= czesciowo.png alt=Partly cloudy>"
    break;
    case 45:
    case 48:
    document.querySelector(".pogoda").innerHTML+="<img src=mgla.png alt=Fog>"
    break;
    case 51:
    case 53:
    case 55:
    case 56:
    case 57:
    document.querySelector(".pogoda").innerHTML+="<img src=mrzawka.png alt=Drizzle>"
    break;
    case 61:
    case 63:
    case 65:
    case 66:
    case 67:
    case 80:
    case 81:
    case 82:
    document.querySelector(".pogoda").innerHTML+="<img src=deszcz.png alt=Rain>"
    break; 
    case 71:
    case 73:
    case 75:
    case 77:
    case 85:
    case 86:
    document.querySelector(".pogoda").innerHTML+="<img src=snieg.png alt=Snow fall>"
    break;
    case 95:
    case 96:
    case 99:
    document.querySelector(".pogoda").innerHTML+="<img src=burza.png alt=Thunderstorm>"

    default: 
    document.querySelector(".pogoda").innerHTML+="inna niż przewidziana w WMO"
  }
  document.querySelector(".pogoda").innerHTML+="<h3>Temperatura(Warszawa): "+data.current_weather.temperature+"°C</h3> <p>prędkość wiatru: "+data.current_weather.windspeed+"km/h</p>"
}

request.send()
