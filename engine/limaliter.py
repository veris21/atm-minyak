import os
import sys
import serial
import struct
import time
import gc
ser = serial.Serial("/dev/ttyACM0", 9600)
stat = ser.readline()

while ser.write(b'5') :
    print("5 Liter")
    gc.collect()
    raise SystemExit()
