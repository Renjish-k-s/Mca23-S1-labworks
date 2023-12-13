import csv

fields=['id','name','age']

details=[[1,'ram',23],
         [2,'sam',24],
         [3,'hari',56]]

file="test1.csv"

with open(file,'w',newline='')as fcsv:
    csvw=csv.writer(fcsv)

    csvw.writerow(fields)

    csvw.writerows(details)

    
fcsv.close()
