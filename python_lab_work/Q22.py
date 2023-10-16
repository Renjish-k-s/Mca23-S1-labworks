word={}
line=input("ENTER THE SENTENCE")
for w in line.split():
    word[w]=word.get(w,0)+1
print(word)
