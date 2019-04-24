import sys
import serial
import time
import gc

param = sys.argv[1]
byk = sys.argv[2]
# ser = serial.Serial("/dev/ttyACM0", 9600)
data = param + byk
time.sleep(1)
if float(param) == 1:
    # ser.write(byk.encode())
    print(byk.encode())
elif float(param) == 0:
    # ser.write(data.encode())
    print(data.encode())
else:
    pass

x = '66'.encode()

print(x)
print(type(x))
time.sleep(1)
gc.collect()    
raise SystemExit()
sys.exit()