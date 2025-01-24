import requests
from bs4 import BeautifulSoup
import pandas as pd
 
def scrape_Prueba(section):
    url = f"https://apps.mypurecloud.com/directory/#/analytics/interactions/{section}/admin/details?tabId=f87590be-fa5c-49e7-b588-9ed2f01d43f7"
    response =requests.get(url)
    soup =BeautifulSoup(response.content, 'html.parser')
 
    productos = []
 
    for producto in soup.find_all('div',class_ ='producto'):
        nombre = producto.find ('span class= truncated-text tooltip-indicator').text
        Motivo = producto.find ('span class= disconnect-type').text
 
        return producto
       
df =pd.read_excel("Prueba_Scraping.xlsx")
 
nuevos_Casos = scrape_Prueba("Pruebas")
 
df_Nuevos = pd.DataFrame(Nuevos_Productos,
columns = ["Nombre", "Motivo" ])
 
df_final =pd.concat([df, df_Nuevos], ignore_index = True)
 
df_final.to_excel("productos_Actualizados.xlsx", index = False)