
#to check palindrome or not.

s=input("Enter the string")
#print("the string is palindrome",bool(s==s[::-1]))

s=list(map(int,s.split(',')))

#print(s)
#print(type(s[0]))
#print([x for x in s if not x%2])

x=sorted(s,reverse=='true')

print(x)
