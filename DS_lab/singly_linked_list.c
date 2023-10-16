#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *link;
};

struct node *head=NULL;
int var;
void insert_beg()
{
    struct node *newnode=(struct node *)malloc(sizeof(struct node));

    printf("ENTER THE ELEMENT TO BE INSERTED");
    scanf("%d",&var);

    newnode->data=var;
    newnode->link=head;

    head=newnode;
   
}

void insert_end()
{
    struct node *newnode=(struct node *)malloc(sizeof(struct node));

     printf("ENTER THE ELEMENT TO BE INSERTED");
     scanf("%d",&var);

    struct node *temp;
    temp=head;
    while(temp->link!=NULL)
    {
        temp=temp->link;
    }
    temp->link=newnode;
    newnode->data=var;
    newnode->link=NULL;
    printf("\nadded sucessfully\n");
}
void insert_pos()
{
    struct node *newnode=(struct node *)malloc(sizeof(struct node));
    int pos,i=1;
    printf(" \n enter the postion to be which added \n"); 
    scanf("%d",&pos);
    printf("\n enter the element \n");
    scanf("%d",&var);

    struct node *temp;
    temp=head;

    while (i<pos-1)
    {
        temp=temp->link;
        i++;
    }

     newnode->link=temp->link;
     temp->link=newnode;
     newnode->data=var;

}

void display()
{
    if(head==NULL)
    {
        printf("UNDER FLOW");
    }
    else
    {
        struct node *temp;
        temp=head;
            while (temp!=NULL)
            {
                printf("\n node= %d",temp->data);
                temp=temp->link;
            }
            
    }
}
void del_pos()
{
int pos,i=1;
printf("enter the postion");
scanf("%d",&pos);
struct node *temp,*old;
temp=head;

while(i<pos-1)
{
    temp=temp->link;
    i++;
}
old = temp->link;
temp->link=old->link;
free(old);
}

int main()
{
    int ch;
    while(1)
    {
        printf("\n ENTER THE CHOICE \n");
        printf("\n*********************************************************************\n");
        printf("MENU \n 1.INSERT AT BEGINNING \n 2.DISPLAY \n 3.INSERT AT END \n 4.INSERT AT POSITION \n5.delete pos \n 6.EXIT");
        scanf("%d",&ch);
        printf("\n*********************************************************************\n");
        switch(ch)
        {
            case 1:
                insert_beg();
                break;
            case 2:
                display();
                break;
            case 3:
                insert_end();
                break;
            case 4:
                insert_pos();
                break;
            case 5:
                del_pos();
                break;
            case 6:
                return 0;           
        }
    }
}