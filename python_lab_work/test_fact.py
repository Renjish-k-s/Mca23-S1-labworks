
def factorial(ele):
    if(ele==1 or ele==0):
        return 1
    else:
        return ele*factorial(ele-1)
ele=int(input("ENTER THE number"))
print(factorial(ele))
#print(fact(ele))
