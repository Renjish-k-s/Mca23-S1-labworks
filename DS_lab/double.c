#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *left,*right;
};
struct node *root=NULL;
int count=-1,ch,pos,ele;

void insert()
{
    struct node *newnode=(struct node *)(malloc(sizeof(struct node)));
    struct node *temp;
    int i=0;
    printf("enter the position");
    scanf("%d",&pos);

    printf("enterr the element");
    scanf("%d",&ele);

    if(root==NULL)
    {
            newnode->data=ele;
            newnode->right=root;
            newnode->left=NULL;
            root=newnode;
            count++;
    }
    else if (pos==0)
    {
       newnode->data=ele;
       root->left=newnode;
       newnode->right=root;
       newnode->left=NULL;
        root=newnode;
        count++;
    }
    else if(pos>0 && pos<=count)
    {
        struct node *temp;
        temp=root;

        while (i<pos-1)
        {
            temp=temp->right;
            i++;
        }
        
        newnode->data=ele;
        newnode->right=temp->right;
        newnode->left=temp;
        temp->right=newnode;
        
         count++;

    }
    else if(pos==count+1)
    {
        temp=root;

        while (temp->right!=NULL)
        {
            temp=temp->right;
        }
        newnode->data=ele;
        temp->right=newnode;
        newnode->left=temp;
        newnode->right=NULL;
        count++;
    }
    else
    {
        printf("invalid position");
    }
    
}

void delete_1()
{
    int i=0;
    struct node *temp,*old;
    temp=root;

    printf("enter the position");
    scanf("%d",&pos);

    if(count==0 || pos==0)
    {
        root=root->right;
        free(temp);
        count--;
    }
    else if(pos>0 && pos<=count)
    {
        while (i<pos-1)
        {
            temp=temp->right;
            i++;
        }
            old=temp->right;
            temp->right=old->right;
            old->right->left=temp;
            count--;
        
    }
    else if (pos==count+1)
    {
        while (temp->right!=NULL)
        {
            temp=temp->right;
        }
       temp->left->right=NULL;
       free(temp);
    }
    
}
void display()
{
    struct node *temp=root;
    int i=0;
    if(root==NULL)
    {
        printf("no nodes");
    }
    else
    {
        while (temp!=NULL)
        {
            printf("<-[%d::%d::%d]->",i,temp->data,i);
            temp=temp->right;
            i++;
        }
        
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
