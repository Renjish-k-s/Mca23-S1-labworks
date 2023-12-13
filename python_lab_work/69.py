class publisher:
    def __init__(self,name='nil'):
        self.name=name

    def display(self):
        print('BOOK NAME:',self.name)
        
class book(publisher):
    def __init__(self,title='nil',author='nil'):
        self.title=title
        self.author=author

    def display(self):
        print('BOOK TITLE:',self.title)
        print('BOOK AUTHOR:',self.author)
class python(book):
    def __init__(self,name='nil',title='nil',author='nil',price=0,nop=0):
        publisher.__init__(self,name)
        book.__init__(self,title,author)      
        self.price=price
        self.nop=nop
    def display(self):
        publisher.display(self)
        book.display(self)
        print('BOOK PRICE:',self.price)
        print('BOOK NO OF PAGES:',self.nop)
        
p=python('wings of fire','the rest','apj',100,100)
p.display()
        
        
