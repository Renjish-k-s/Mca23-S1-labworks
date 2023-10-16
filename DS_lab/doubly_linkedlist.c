#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *prev,*next;
};
struct node *head=NULL;
void insert_beg()
{
    int val;
    struct node *newnode=(struct node *)(malloc(sizeof(struct node)));
    printf("\nEnter the value to enter\n");
    scanf("%d",&val);

    if(head==NULL)
    {
    newnode->data=val;
    newnode->next=head;
    head=newnode;
    newnode->prev=NULL;
    }
    else
    {
    newnode->data=val;
    head->prev=newnode;
    newnode->next=head;
    head=newnode;
    newnode->prev=NULL;
    }
    
}
void insert_end()
{
    int val;
    struct node *newnode=(struct node *)(malloc(sizeof(struct node)));
    printf("\nEnter the value to enter\n");
    scanf("%d",&val);
    // renjish pavam alle error corrext akki thada
    struct node *temp;
    temp=head;

    while (temp->next!=NULL)
    {
            temp=temp->next;
    }
    newnode->data=val;
    temp->next=newnode;
    newnode->prev=temp;
    newnode->next=NULL;

    
    
}
void display()
{
    struct node *temp;
    temp=head;

    while (temp!=NULL)
    {
        printf("\nnode= %d",temp->data);
        temp=temp->next;
    }
    


}
void insert_pos()
{
    int i=1,val,pos;
    struct node *newnode=(struct node *)(malloc(sizeof(struct node)));
    printf("\nENTER THE POSTION\n");
    scanf("%d",&pos);
    printf("\nENTER THE ELEMENT\n");
    scanf("%d",&val);

    struct node *temp;
    temp=head;

    while (i<pos)
    {
        temp=temp->next;
        i++;
    }
    
    newnode->data=val;
    newnode->next=temp->next;
    newnode->prev=temp;
    temp->next=newnode;

}
void delete_beg()
{
    struct node *temp;
    temp=head;

        head=head->next;       
        head->prev=NULL;
        printf("DELETED SUCCESSFULLY");

}
void delete_pos()
{
    int i=1,pos;
    printf("\nenter the position to delete\n");
    scanf("%d",&pos);
    struct node *temp,*old;
    temp=head;

    while (i<pos)
    {
        temp=temp->next;
        i++;
    }
    old=temp->next;
    temp->next=old->next;
    old->next->prev=temp;
    printf("deleted");
}
void delete_end()
{
    struct node *temp;
    temp=head;

    while (temp->next!=NULL)
    {
            temp=temp->next;
    }
     temp->prev->next=NULL;
     free(temp);
    
}

int main()
{
    int ch;
    while (1)
    {
        printf("\nMENU\n1.INSERT AT BEGGINNING\n2.DISPLAY\n3.EXIT\n4.INSERT END\n5.INSERT AT POSITION\n6.DELETE FROM BEGGINNING\n7.delete at position\n8.delete at end\n");
        scanf("%d",&ch);

        switch(ch)
        {
            case 1:
                    insert_beg();
                    break;
            case 2: 
                    display();
                    break;
            case 4: 
                    insert_end();
                    break;
            case 5:
                    insert_pos();
                    break;
            case 6:
                    delete_beg();
                    break;
            case 7:
                    delete_pos();
                    break;
            case 8: 
                    delete_end();
                    break;

            case 3:
                    return 0;
        }
    }
    
}