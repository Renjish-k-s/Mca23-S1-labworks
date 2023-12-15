inp=int(input("enter the input"))

sum=0
while(inp!=0):
    sum=sum+inp%10
    inp=inp//10
print(sum)
