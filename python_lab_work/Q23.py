letter={}
a=input("Enter the  word")
for l in list(a):
    letter[l]=letter.get(l,0)+1
print(letter)
