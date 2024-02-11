#include <stdio.h>
int queue[20] = {0}, adj[20][20] = {0}, i, j, nov, v, f = 0, r = 0,visited[20]={0};
void bfs(int);
int main()
{
    printf("enter the no of vertices");
    scanf("%d", &nov);

    printf("enter the adjacency matrix");
    for (i = 0; i < nov; i++)
    {
        for (j = i; j < nov; j++)
        {
            scanf("%d", &adj[i][j]);
            adj[j][i] = adj[i][j];
        }
    }

    printf("enter the starting vertex");
    scanf("%d", &v);
    visited[v]=1;
    queue[r]=v;
    bfs(v);
 
}

void bfs(int v)
{
   for ( i = 0; i < nov; i++)
   {
         if(adj[v][i]==1 && visited[i]==0)
         {
            r++;
            queue[r]=i;
            visited[i]=1;
         }
   }
   if(f<=r)
   {
        printf("%d",queue[f]);
        bfs(queue[f++]);
   }
   
}