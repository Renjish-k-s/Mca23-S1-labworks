try:
    num=int(input("enter the input no."))
    assert(num>0),'negative number'
except AssertionError as a:
    print(a)
    
        
