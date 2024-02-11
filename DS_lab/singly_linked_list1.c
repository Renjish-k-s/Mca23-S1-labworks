#include<stdio.h>
#include<stdlib.h>

struct node
{
    int data;
    struct node *link;

};
struct node *root=NULL;

int ch,ele,pos,count=-1;

void insert()
{
 struct node *newnode=(struct node *)(malloc(sizeof(struct node)));
 struct node *temp;

    printf("ENTER THE ELEMENT");
    scanf("%d",&ele);
    printf("enter the position");
    scanf("%d",&pos);

        if (pos==0 || count==-1)
        {
            newnode->data=ele;
            newnode->link=root;
            root=newnode;
            count++;
        }
        else if (pos==count+1)
        {
            temp=root;

            while (temp->link!=NULL)
            {
                temp=temp->link;
            }
            newnode->data=ele;
            temp->link=newnode;
            newnode->link=NULL;
            count++;
            
        }
        else if(pos>0 && pos<=count)
        {
            int i=0;
            struct node *temp;
            temp=root;
           
            while(i<pos-1)
            {
                temp=temp->link;
                i++;
            }
            newnode->data=ele;
            newnode->link=temp->link;
            temp->link=newnode;
            count++;
            
        }
        else
        {
            printf("INVALID POSITION");
        }
        
        
          
      
}


void display()
{
    int i=0;
    if(root==NULL)
    {
        printf(" no elements");
    }
    else
    {
        struct node *temp=root;

        while (temp!=NULL)
        {
            printf("[%d::%d]->",i,temp->data);
            temp=temp->link;
            i++;
        }
        
        

    }
}

void delete_1()
{
    int i=0;
    struct node *temp=root;
    struct node *old;
    printf("enter the position");
    scanf("%d",&pos);

        if (pos==0 || count==0)
        {
           root=root->link;
           free(temp);
           count--; 

        }    
        else if(pos>0 && pos<=count)
        {
            while (i<pos-1)
            {
                temp=temp->link;
                i++;                
            }
            old=temp->link;
            temp->link=old->link;
            free(old);  
            count--;          
        }
        else
        {
            printf("INVALID POSITION");
            display();
        }
        
        
          
      
}


int main()
{
    while (1)
    {   
        printf("\ncount=%d\n",count);
        printf("\nMENU\n1.insert\n2.display\n3.exit\n4.delete\n");
        scanf("%d",&ch);

        switch (ch)
        {
        case 1:
            insert();
            break;
        case 2:
            display();
            break;
        case 4:
            delete_1();
            break;
        case 3:
                return 0;
        }
        
    }
    
}
