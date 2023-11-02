#include<stdio.h>
#include<conio.h>
#include<stdlib.h>

int ele,cele;
struct node
{
    int data;
    struct node *left,*right;
};

struct node *create(int ele)
{
    struct node *newnode= (struct node *)(malloc(sizeof(struct node)));
    newnode->data=ele;
    newnode->left=NULL;
    newnode->right=NULL;


    return newnode;
}


struct node *insert(struct node *root,int ele)
{
   if(root==NULL)
   {
        return create(ele);
   }
   

   if (ele < root->data)
   {
        root->left=insert(root->left,ele);
   }
   else if(ele>root->data)
   {
        root->right=insert(root->right,ele);
   }
      

   return root;
}
void inorder(struct node *root)
{
     if (root!=NULL)
    {
        inorder(root->left);
        printf("%d,",root->data);
        inorder(root->right);

    }
    
}
void search(struct node *root,int cele)
{
    if (root==NULL)
    {
        printf("\nNOT FOUND \n");
    }
    else if(root->data==cele)
    {
        printf("\nelement found\n");
    }
    else if(cele<root->data)
    {
        return search(root->left,cele);
    }
    else if(cele>root->data)
    {
        return search(root->right,cele);
    }
   
}
// struct node *delete(struct node *root,int cele)
// {
//     if(root<root->left)
//     {
//         root->left=delete(root->left,cele);
//     }
//     else if(root>root->right)
//     {
//         root->right=delete(root->right,cele);
//     }
//     else
//     {
//         if(root->left==NULL&&root->right==NULL)
//         {
//             struct node *temp=root;
//             root=NULL;
//             free(temp);
//             printf("DELETED");
            
//         }
//         else if(root->left==NULL)
//         {
//             struct node *temp=root;
//             root=temp->right;
//             free(temp);
//                  printf("DELETED 1");
//         }
//         else if(root->right==NULL)
//         {
//             struct node *temp=root;
//             root=temp->left;
//             free(temp);
//                  printf("DELETED 2");
//         }
//         else
//         {
//             struct node *temp=root;
//             root=temp->right;
//             free(temp);
//                  printf("DELETED 3");
//         }
//     }
//     return root;
// }
int main()
{
    int ch;
    struct node *root=NULL;

    while (1)
    {
        printf("\n\nENTER THE CHOICE\n");
        printf("1.insert\n2.search\n3.inorder traversal\n4.delete\n5.exit");
        scanf("%d",&ch);

        switch (ch)
        {
        case 1:
            printf("ENTER THE ELEMENT \n");
            scanf("%d",&ele);
            root=insert(root,ele);
            break;
        case 2:
            printf("ENTER THE ELEMENT TO SEARCH");
            scanf("%d",&cele);
            search(root,cele);
            break;
        case 3:
            inorder(root);
            break;
        // case 4:
        //     printf("\nenter the element to delete\n");
        //     scanf("%d",&cele);
        //     delete(root,cele);
        //     break;
        case 5:
            return 0;
    
        
        default:
            break;
        }
    }
    
}