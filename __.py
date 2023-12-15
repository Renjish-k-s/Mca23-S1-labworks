inp=int(input("enter th number"))
s=inp
f=0
while(inp):
    c=inp%10    
    if(c%2):
        f=1
        break
    inp=inp//10

if(not f):
    print(s)
else:
    print("not possible")
        
