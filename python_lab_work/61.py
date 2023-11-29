
try:
    num=int(input("enter the number"))
    if 90>num:
        raise ValueError
    else:
        print("valid input")
except ValueError as ve:
    print("not correct")
