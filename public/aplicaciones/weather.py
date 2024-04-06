import requests
import json

def obtener_tiempo(ciudad, api_key):
    # URL de la API de OpenWeatherMap
    url = f"http://api.openweathermap.org/data/2.5/weather?q={ciudad}&appid={api_key}&units=metric"
    
    # Realizar la solicitud GET a la API
    response = requests.get(url)
    
    # Verificar si la solicitud fue exitosa
    if response.status_code == 200:
        # Convertir la respuesta a JSON
        data = response.json()
        
        # Extraer la información del tiempo
        tiempo = data['weather'][0]['description']
        temperatura = data['main']['temp']
        humedad = data['main']['humidity']
        
        # Imprimir el tiempo actual
        print(f"El tiempo en {ciudad} es: {tiempo}")
        print(f"Temperatura: {temperatura}°C")
        print(f"Humedad: {humedad}%")
    else:
        # Imprimir un mensaje de error si la solicitud falla
        print("Error al obtener el tiempo. Por favor, verifica la ciudad y tu clave API.")

# Ciudad y clave API (obtén tu clave API registrándote en OpenWeatherMap)
ciudad = "TuCiudad"
api_key = "TuClaveAPI"

# Llama a la función para obtener el tiempo
obtener_tiempo(ciudad, api_key)