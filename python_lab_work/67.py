class rectangle:
    def __init__(self,l=0,b=0):
        self.__len=l
        self.__wid=b
    def area(self):
        self.__len=int(input('enter the length'))
        self.__wid=int(input('enter the width'))
        self.area=self.__len*self.__wid 
    def __str__(self):
        return str('area=%d'%(self.area))
    def __lt__(self,other):
        return self.area<other.area
    
    
rect=rectangle()
rect.area()
print(rect)
rect1=rectangle()
rect1.area()
print(rect1)
if(rect<rect1):
    print('1 st rectangle is small')
else:
    print('2 nd rectangle is small')



