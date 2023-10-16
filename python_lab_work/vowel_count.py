#word=input("enter the word")
#wordlist=list(word)

#vowels=[i for i in wordlist if i[0]=='a' or i[0] =='e' or i[0] =='i' or i[0] =='o' or i[0] =='u' or
#i[0]=='A' or i[0] =='E' or i[0] =='I' or i[0] =='O' or i[0] =='U']
#print("c.Vowels in",wordlist,"is\n\t",vowels)

#num_list=[1,2,3,4,5]
#result=[i for i in num_list if i%2!=0]
#print(result)

year=int(input("Enter year greater than 2023\n"))
leap=[i for i in range(2023,year) if(i%400==0 or (i%100!=0 and i%4==0))]
print(leap)

