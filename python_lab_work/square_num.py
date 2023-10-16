num=input("enter the numbers")
list_num=num.split(',')
result=[int(num)*int(num) for num in list_num]
print(result)
