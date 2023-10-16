numbers=input("enter the numbers")
list_num=numbers.split(',')
print(list_num)
result=[num for num in list_num if int(num)>=0]
print(result)
