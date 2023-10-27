#include<stdio.h>

int limit,ele,check,arr[];
void linear();
void binary();

int main()
{
    int ch;
    printf("enter the size of the array /n");
    scanf("%d",&limit);
    printf("enter the elements /n");

        for (int i = 0; i < limit; i++)
        {
            scanf("%d",arr[i]);
        }
    while (1)
    {
        printf("1.linear search /n2.binary search\n");
        scanf("%d",&ch);

        switch (ch)
        {
        case 1:
            linear();
            break;
        case 2:
            binary();
            break;
        
        default:
            printf("invalid!!!!!!!!!");
            break;
        }
    }
    
}