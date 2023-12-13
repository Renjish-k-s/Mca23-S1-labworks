class bankaccount:
    
    def __init__(self,accono=0,name='nil',typeofacc='nil',balance=0):
        self.accono=accono
        self.name=name
        self.typeofacc=typeofacc
        self.balance=balance
    def deposit(self):
        self.accono=input("enter the account no\n")
        self.name=input("enter the account name\n")
        self.typeofacc=input("enter the type of account\n")
        self.balance=int(input("enter the account deposit\n"))
    def show_balance(self):
        print('account no:',self.accono)
        print('account name:',self.name)
        print('account type:',self.typeofacc)
        print('account balance:',self.balance)
    def withdraw(self):
        self.wammount=int(input('ENTER THE AMMOUNT TO WITHDRAW'))
        self.balance=self.balance-self.wammount

        
bank=bankaccount()
bank.deposit()
bank.show_balance()
bank.withdraw()
bank.show_balance()
        
        
        
        
