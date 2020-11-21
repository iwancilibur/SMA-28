#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>

const  char* ssid      = "AVIS28";      //masukkan ssid
const  char* password  = "2019avis28";  //masukkan password
String namadevice      = "iwancilibur"; //isi dengan nama tanpa spasi


int indikator=LED_BUILTIN;

void setup () {

   Serial.begin(115200);
   WiFi.begin(ssid, password);
   pinMode (indikator, OUTPUT);
   
   while (WiFi.status() != WL_CONNECTED) {

    //delay(1000);
    Serial.println("Connecting..");
    digitalWrite(indikator,HIGH);
    delay(500);
    digitalWrite(indikator,LOW);
    delay(500);
  }

  if(WiFi.status() == WL_CONNECTED){
    Serial.println("Connected!!!");
    digitalWrite(indikator,HIGH);
  }
  else{
    Serial.println("Connected Failed!!!");
  }

}

void loop() {
  //Pembacaan Sensor
  int getsuhu      =random(25,30);
  int getkelembaban=random(70,85);
  
  //Pengiriman data ke Server
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    http.begin("http://192.168.10.140/irciot/data-api.php?namadevice=" + String(namadevice) + 
    "&suhu=" + String(getsuhu) + 
    "&kelembaban=" + String(getkelembaban));
    int httpCode = http.GET();

    if (httpCode > 0) {
      char json[500];
      String payload = http.getString();
      payload.toCharArray(json, 500);
      DynamicJsonDocument doc(JSON_OBJECT_SIZE(4));
      deserializeJson(doc, json);

      String waktu_dibaca         = doc["waktu"];
      String namadevice_dibaca    = doc["namadevice"];
      String suhu_dibaca          = doc["suhu"];
      String kelembaban_dibaca    = doc["kelembaban"];
  
     Serial.print("Waktu      = ");Serial.println(waktu_dibaca);
     Serial.print("Nama Device= ");Serial.println(namadevice_dibaca);
     Serial.print("Suhu       = ");Serial.println(suhu_dibaca);
     Serial.print("Kelembaban = ");Serial.println(kelembaban_dibaca);
     Serial.println();
     delay(1000);
    }
    http.end();
  }
}
