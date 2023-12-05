#include <stdio.h>

#define MAX_VERTICES 20

int n, i, j, visited[MAX_VERTICES], stack[MAX_VERTICES], cost[MAX_VERTICES][MAX_VERTICES], x = 0;

void dfs(int, int *);

int main() {
    printf("\nEnter the number of vertices: ");
    scanf("%d", &n);

    printf("\nEnter the adjacency matrix\n");
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            scanf("%d", &cost[i][j]);
        }
    }

    printf("\nThe adjacency matrix is:\n");
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            printf("%d\t", cost[i][j]);
        }
        printf("\n");
    }

    printf("\nTopological Sorting: ");
    for (i = 0; i < n; i++) {
        if (!visited[i]) {
            dfs(i, visited);
        }
    }

    printf("\nTopological Order: ");
    for (i = n - 1; i >= 0; i--) {
        printf("%d ", stack[i]);
    }

    return 0;
}

void dfs(int cr, int *visited) {
    visited[cr] = 1;
    for (i = 0; i < n; i++) {
        if (cost[cr][i] && !visited[i]) {
            dfs(i, visited);
        }
    }
    stack[x++] = cr;
}
