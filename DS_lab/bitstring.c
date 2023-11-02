#include<stdio.h>
#define n 10
int main()
{
    
    int i,j,k,t;

    int u[n]={1,2,3,4,5,6,7,8,9,10};
    int a[n]={1,2,3,4,5};
    int b[n]={4,5,6,7,8,9};

    int bu[n],ba[n],bb[n],union_set[n],intersect_set[n],differA[n];


    for ( i = 0; i < n; i++)
    {
       if (u[i]!=-1)
       {
          bu[i]=1;
       }
       
    }

    printf("\nBIT STRING REPERESENTATION OF UNIVERAL SET\n");
    for ( i = 0; i < n; i++)
    {
        printf("%d \t",bu[i]);
    }
    printf("\n");

    for ( i = 0; i < n; i++)
    {
        t=0;

        for ( j = 0; j < n; j++)
        {
            if(a[j]==u[i])
            {
                t=1;
                break;
            }
        }

        if (t==1)
        {
            ba[i]=1;
        }
        else
        {
            ba[i]=0;
        }
        
    }
    printf("\nenter the bit representation of set A\n");
    for ( i = 0; i < n; i++)
    {
        printf("%d \t",ba[i]);
    }

    printf("\n");

    for ( i = 0; i < n; i++)
    {
        t=0;

        for ( j = 0; j < n; j++)
        {
            if(b[j]==u[i])
            {
                t=1;
                break;
            }
        }

        if (t==1)
        {
            bb[i]=1;
        }
        else
        {
            bb[i]=0;
        }
        
    }
    printf("\nenter the bit representation of set B\n");
    for ( i = 0; i < n; i++)
    {
        printf("%d \t",bb[i]);
    }
    
    
    for ( i = 0; i < n; i++)
    {
        if (ba[i]==1 || bb[i]==1)
        {
            union_set[i]=1;
        }
        else
        {
            union_set[i]=0;
        }
        
    }
     printf("\nset A union B\n");
    for ( i = 0; i < n; i++)
    {
        printf("%d \t",union_set[i]);
    }

    for ( i = 0; i < n; i++)
    {
        if (ba[i]==1 && bb[i]==1)
        {
            intersect_set[i]=1;
        }
        else
        {
            intersect_set[i]=0;
        }
        
    }
     printf("\nset A intersection B\n");
    for ( i = 0; i < n; i++)
    {
        printf("%d \t",intersect_set[i]);
    }
    


    for ( i = 0; i < n; i++)
    {
        if (ba[i]==1 && bb[i]==0)
        {
            differA[i]=1;
        }
        else
        {
            differA[i]=0;
        }
        
    }

     printf("\nset A - B\n");
    for ( i = 0; i < n; i++)
    {
        printf("%d \t",differA[i]);
    }
    
}