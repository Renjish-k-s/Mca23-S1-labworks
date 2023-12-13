import csv

with open('test1.csv','r') as r:
    read=csv.reader(r)
    for lines in read:
        print(lines)
