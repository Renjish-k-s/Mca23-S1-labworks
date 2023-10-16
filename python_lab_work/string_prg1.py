string=input("ENTER THE STRING")
print(string)
temp=string[0]
string1=string.replace(temp,'&')
print(string1)
string2=temp+string1[1:]
print(string2)
