t = open('ssidadd', 'r')
target = t.read()
t.close()

targetfin = target.split(':::', 1)

if targetfin[1] is '':
	regex = "\n\n\nnetwork={\n\tssid=\"" + targetfin[0] + "\"\n}" 

else:

	#print targetfin

	regex = "\n\n\nnetwork={\n\tssid=\"" + targetfin[0] + "\"\n\tpsk=\"" + targetfin[1] + "\"\n}" 




w = open('/etc/wpa_supplicant/wpa-roam.conf', 'a')
w.write(regex)
w.close()