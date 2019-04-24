import serial
import time
import gc
import sys

ser = serial.Serial("/dev/ttyACM0", 9600)
stat = ser.readline() 
while ser.write(b'4'):
    print("TEST")
    time.sleep(1)
    gc.collect()
  
raise SystemExit()
sys.exit()