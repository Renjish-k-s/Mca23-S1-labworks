inp=int(input("enter the number"))
c=0
j=0
for i in range(1,inp):
    if not inp%i:
        j=j+i
        print(j)
        c=c+1
print("NO.factors:",c)
