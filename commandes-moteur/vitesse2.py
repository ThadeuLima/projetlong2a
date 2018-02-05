#!/usr/bin/env python

#RPi Pinouts

#I2C Pins 
#GPIO2 -> SDA
#GPIO3 -> SCL

#Import the Library Required 
import smbus
import time

# for RPI version 1, use "bus = smbus.SMBus(0)"
bus = smbus.SMBus(1)

# This is the address we setup in the Arduino Program
#Slave Address 1
addressG = 0x04

#Slave Address 2
addressD = 0x05

def writeNumberG(value):
	bus.write_i2c_block_data(addressG, 0, value)
	return -1

def writeNumberD(value):
	bus.write_i2c_block_data(addressD, 0, value)
	return -1    
while True:
#Receives the data from the User
	dataG = raw_input("Enter the Left Motor Data to be sent : ")	
	list_intG = []
	list_dataG = list(dataG)
	for i in list_dataG:
		k = int(ord(i))
		list_intG.append(k)
	dataD = raw_input("Enter the Right Motor Data to be sent : ")	
	list_intD = []
	list_dataD = list(dataD)
	for i in list_dataD:
		k = int(ord(i))
		list_intD.append(k)		
	#Sends to the Slaves
	writeNumberD(list_intG) 
	writeNumberG(list_intD)
	time.sleep(.1)


#End of the Script