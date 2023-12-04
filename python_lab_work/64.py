'''class Time:
    def __init__(self,h=0,m=0,s=0):
        self.__hour=h
        self.minute=m
        self.second=s
    def reset(self,h=0,m=0,s=0):
        self.__hour=h
        self.minute=m
        self.second=s
        return h,m,s
    def get(self):
        return self.__hour
    def format(self):
        print(self.__hour,':',self.minute,':',self.second)
        
    


t1=Time(12)
print(t1.get())
print(t1.reset(12,36,15))
print(t1.format())
        '''

class book:
    def __init__(self,t=0,a=0,nop=0):
        self.t=t
        self.a=a
        self.nop=nop
    def setbook(self,t=0,a=0,nop=0):
        self.t=t
        self.a=a
        self.nop=nop
        
    def getbook(self):
        return self.t,self.a,self.nop
    def showbook(self):
        print('TITLE:',self.t)
        print('AUTHOR:',self.a)
        print('NO OF PAGES:',self.nop)
        return 'hari'
        
  
        
t1=book()
t1.setbook('harry','potter',900)
print(t1.getbook())
t1.showbook()

        
