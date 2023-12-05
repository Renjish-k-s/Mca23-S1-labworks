#include<stdio.h>
int n,i,j,visited[20],stack[20],cost[20][20],cr,top=-1,result[20],x=0;
int dfs(int);
int main()
{
    printf("\nenter the no of vetices\n");
    scanf("%d",&n);
    printf("\nEnter the elements\n");
    for ( i = 0; i < n; i++)
    {
        for ( j = i; j < n; j++)
        {
            printf("\npostition(%d,%d)",i,j);
            scanf("%d",&cost[i][j]);
            cost[j][i]=cost[i][j];
        }
        
    }

    for ( i = 0; i <n; i++)
    {
        for ( j = 0; j < n; j++)
        {
            printf("%d\t",cost[i][j]);
        }
        
        printf("\n");
    }
    
    printf("\nEnter the starting vertex\n");
    scanf("%d",&cr);
    visited[cr]=1;
    stack[top++]=cr;
    result[x]=cr;   
    dfs(cr);

for ( i = 0; i < n; i++)
{
   // printf("%d",result[i]);
}

}

int dfs(int cr)
{

    for ( i = 0; i < n; i++)
    {
        if (cost[cr][i]==1 && visited[i]==0)
        {
           // printf("%d",cr);
           ++top;
            visited[i]=1;
             stack[top]=i;
             cr=stack[top];
            
         //    result[x++]=i;
        }
        
    }
    if(top!=-1)
    {   
        
        printf("%d",stack[top]);
        dfs(stack[top--]);
    }
    
}