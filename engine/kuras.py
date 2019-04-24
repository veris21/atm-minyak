import os
import sys
import serial
import struct
import time
import gc
ser = serial.Serial("/dev/ttyACM0", 9600)
time.sleep(3)
ser.write(b'66') 
stat = ser.readline()
print("Kuras Tangki")
# print(stat)
time.sleep(1)
gc.collect()    
raise SystemExit()
sys.exit()