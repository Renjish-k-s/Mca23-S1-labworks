ele=input("ENTER THE ELEMENT")
list_1=ele.split(' ')
print(list_1)
n=int(input("ENTER THE LIMIT"))
for i in list_1:
    if(len(i)>=n):
        print(i)

