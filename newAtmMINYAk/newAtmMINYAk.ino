#include <HCSR04.h>
UltraSonicDistanceSensor distanceSensor(13, 12);  
// Initialize sensor that uses digital pins 13 Trigger and 12 echo.
int in1 = 10;  // Keran 1
int in2 = 11;  // Keran 2
int nol       = 23.70;
int liter1    = 22.70;
int liter2    = 22.12;
int liter3    = 21.48;

int liter4    = 20.80;
int liter5    = 19.69;

int liter9 = 17.27;

double jarak = 0;
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

//TEST DEBUG 
int test = 0;

int kosong = 0;
int kuras = 0;


double titiknol = 93.36;
double penuh = 13.05; // 13.00
double outSeliter = 20.05; // 20.05
double outDualiter = 22.50 ; // 22.50
double outTigaliter = 27.50; // 27.50
double outEmpatliter = 32.30; // 32.30
double outLimaliter = 36.50; // 36.50
double outDelapanliter = 50.50; // 48.30
double outSepuluhliter = 60.50; // 51.10
void setup() {
    Serial.begin(9600); 
    pinMode(in1, OUTPUT);
    digitalWrite(in1, HIGH);
    pinMode(in2, OUTPUT);
    digitalWrite(in2, HIGH);
    Serial.println("Ready");
}

void loop() {
  jarak = distanceSensor.measureDistanceCm();
  if(Serial.available()){
     perintah = Serial.parseInt();
  }
  if(perintah != 0){
    switch(perintah){
    case 88:
      digitalWrite(in1, LOW);
      test = 1;
      break;
    case 1: 
      digitalWrite(in1, LOW);
      satuLiter = 1;
    break;
    case 2: 
      digitalWrite(in1, LOW);
      duaLiter = 1;
    break;
    case 4: 
      digitalWrite(in1, LOW);
      empatLiter = 1;
    break;
    case 5: 
      digitalWrite(in1, LOW);
      limaLiter = 1;
    break;
    case 8: 
      digitalWrite(in1, LOW);
      delapanLiter = 1;
    break;
    case 10: 
      digitalWrite(in1, LOW);
      sepuluhLiter = 1;
    break;
    
    case 66:
      digitalWrite(in1, LOW);
      kuras =1;
    break;
    case 99:
      digitalWrite(in2, LOW);
      isiUlang = 1;
    break;
    
    case 180:
      digitalWrite(in1, LOW);
    break;
    case 181:
      digitalWrite(in2, LOW);
    break;
    case 182:
      digitalWrite(in1, HIGH);
    break;
    case 183:
      digitalWrite(in2, HIGH);
    break;

    
    case 184:
      digitalWrite(in1, LOW);
      kuras = 1;
    break;
    
    default:
      digitalWrite(in1, HIGH);
      digitalWrite(in2, HIGH);
    break;
  }
  }
 

  if(satuLiter == 1){
    if(jarak > outSeliter){
            digitalWrite(in1, HIGH);
            satuLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }

  if(duaLiter == 1){
    if(jarak > outDualiter){
            digitalWrite(in1, HIGH);
            duaLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }

  if(empatLiter == 1){
    if(jarak > outEmpatliter){
            digitalWrite(in1, HIGH);
            empatLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }
  if(limaLiter == 1){
    if(jarak > outLimaliter){
            digitalWrite(in1, HIGH);
            limaLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }
  if(delapanLiter == 1){
    if(jarak > outDelapanliter){
            digitalWrite(in1, HIGH);
            delapanLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }
  if(sepuluhLiter == 1){
    if(jarak > outSepuluhliter){
            digitalWrite(in1, HIGH);
            sepuluhLiter=0;
            pesan = 1200;
            Serial.println(pesan);
            perintah = 99;
    }
  }

  if(isiUlang == 1){
    if(jarak < penuh){
            digitalWrite(in2, HIGH);
            isiUlang = 0;
            pesan = 1200;
            perintah = 0;
            Serial.println(pesan);
    }
  }

  if(test==1){
    if(jarak < 83.55){
      digitalWrite(in1, HIGH);
      delay(100);
      perintah = 99;
      pesan = 1200;
      Serial.println(pesan);
      
    }
    
  }

  if(kuras == 1){
    if(jarak > titiknol){
      digitalWrite(in1, HIGH);
      kuras = 0;
    }
  }
  Serial.println(jarak);
  delay(500);
}
