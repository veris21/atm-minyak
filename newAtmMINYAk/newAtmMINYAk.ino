#include <HCSR04.h>
UltraSonicDistanceSensor distanceSensor(13, 12);  
// Initialize sensor that uses digital pins 13 and 12.
// 13 Trigger
//12 echo
int in1 = 10;  // Keran 1
int in2 = 11;  // Keran 2

int jarak = 0;
int perintah = 0;
int satuLiter = 0;
int duaLiter = 0;
int empatLiter = 0;
int limaLiter = 0;
int delapanLiter = 0;
int sepuluhLiter = 0;
int pesan;
int isiUlang = 0;
int perintahIsi = 0;
void setup() {
    Serial.begin(9600); 
    pinMode(in1, OUTPUT);
    digitalWrite(in1, HIGH);
    pinMode(in2, OUTPUT);
    digitalWrite(in2, HIGH);
    Serial.println("Sensor Ready");
}

void loop() {
  if(distanceSensor.measureDistanceCm() != -1){
    jarak = distanceSensor.measureDistanceCm();
  }

  if(Serial.available()){
     perintah = Serial.parseInt();
  }
  if(perintah != 0){
    switch(perintah){
    case 1: 
      digitalWrite(in1, LOW);
      pesan = 1;
      satuLiter = 1;
    break;
    case 2: 
      digitalWrite(in1, LOW);
      duaLiter = 1;
      pesan = 2;
    break;
    case 4: 
      digitalWrite(in1, LOW);
      empatLiter = 1;
      pesan = 4;
    break;
    case 5: 
      digitalWrite(in1, LOW);
      limaLiter = 1;
      pesan = 4;
    break;
    case 8: 
      digitalWrite(in1, LOW);
      pesan = 8;
      delapanLiter = 1;
    break;
    case 10: 
      digitalWrite(in1, LOW);
      pesan = 10;
      sepuluhLiter = 1;
    break;
    case 99:
      digitalWrite(in2, LOW);
      pesan = 99;
      isiUlang = 1;
    break;
    default:
      digitalWrite(in1, HIGH);
      digitalWrite(in2, HIGH);
    break;
  }
  }
  
 

  if(satuLiter == 1){
    if(jarak > 7.49){
            digitalWrite(in1, HIGH);
            satuLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }

  if(duaLiter == 1){
    if(jarak > 15){
            digitalWrite(in1, HIGH);
            duaLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }

  if(empatLiter == 1){
    if(jarak > 17.5){
            digitalWrite(in1, HIGH);
            empatLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }
  if(limaLiter == 1){
    if(jarak > 20){
            digitalWrite(in1, HIGH);
            limaLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }
  if(delapanLiter == 1){
    if(jarak > 22.5){
            digitalWrite(in1, HIGH);
            delapanLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }
  if(sepuluhLiter == 1){
    if(jarak > 29.49){
            digitalWrite(in1, HIGH);
            sepuluhLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }

  if(isiUlang == 1){
    if(jarak < 4.99){
            digitalWrite(in2, HIGH);
            isiUlang = 0;
            pesan = 1200;
            perintah = 0;
            Serial.println(pesan);
    }
  }
  Serial.println(jarak);
  delay(500);
}
