class rectangle:
    def area(self):
        self.l=int(input('enter the length'))
        self.b=int(input('enter the breadth'))
        self.a=self.l*self.b
        print("AREA=",self.a)
    def perimeter(self):
        self.l=int(input('enter the length'))
        self.b=int(input('enter the breadth'))
        self.a=(self.l+self.b)*2
        print("PERIMETER=",self.a)
        
    def __eq__(self,other):
        return (self.a==other.a)



try:
    r1=rectangle()
    r2=rectangle()
    r1.area()
    r2.area()
    if(r1==r2):
        print("area are same")
    else:
        print("not same")
except Exception as e:
    print(e)
