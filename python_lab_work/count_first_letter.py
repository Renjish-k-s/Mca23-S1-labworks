names=input('ENTER THE NAMES SEPERATED WITH COMMA')
name_list=names.split(",")
c=0
for name in name_list:
    if(name[0]=='A'):
        c=c+1
print(c)
