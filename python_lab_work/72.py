import csv

fields={'id','name','age'}

details=[{'id':1,'name':'sam','age':21},
         {'id':2,'name':'ram','age':22},
         {'id':3,'name':'jam','age':23}]
file="dict11.csv"
with open(file,'w') as f:
    writer=csv.DictWriter(f,fieldnames=fields)
    writer.writeheader()
    writer.writerows(details)


with open(file,'r') as f:
    w=csv.DictReader(f)

    for l in w:
        print(l['id'],l['name'],l['age'])
f.close()
