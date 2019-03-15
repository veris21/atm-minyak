import os
import sys
import serial
import struct
import time
import gc

ser = serial.Serial("/dev/ttyACM0", 9600)
stat = ser.readline()

# if stat == str("Sensor Ready"):
while ser.write(b'1') :
    print("1 Liter")
    gc.collect()
    raise SystemExit()
