
inpc=int(input('enter the four digit number'))
stop=int(input('enter the stop'))
def even(inp):
    flag=0
    for i in str(inp):
        j=int(i)      
        if(j%2):
            flag=1
            break
    if(flag==0):
       return True
    else:
        return False

def pfsqare(inp):
    flag=0
    for i in range(1,inp//2):
        if(i*i==inp):
            flag=1
            break
    if(flag==1):
        return True
    else:
        return False

    

for inp in range(inpc,stop+1):
    if(even(inp) and pfsqare(inp)):
        print(inp)
    
