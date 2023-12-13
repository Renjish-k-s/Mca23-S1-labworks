class time:
    def __init__(self,hour=0,minute=0,second=0):
        self.hour=hour
        self.minute=minute
        self.second=second
    def get_time(self):
        a=self.hour=int(input())
        b=self.minute=int(input())
        c=self.second=int(input())
    def __add__(self,other):
        a=self.hour=self.hour+other.hour
        b=self.minute=self.minute+other.minute
        c=self.second=self.second+other.second
        return self.hour,self.minute,self.second
    def __str__(self):
        return str('%d:%d:%d'%(self.hour,self.minute,self.second))

t1=time()
t1.get_time()
print(t1)
t2=time()
t2.get_time()
print(t2)
print(t1,'+',t2,'=',t1+t2)

