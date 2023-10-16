def factorial(ele):
    if ele==1:
        return 1
    else:
        return ele*factorial(ele-1)
ele=int(input("ENTER THE NUMBER"))
print("FACTORIAL=",factorial(ele))