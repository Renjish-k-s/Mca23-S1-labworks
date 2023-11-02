#include<stdio.h>

int limit,ele,check,arr[50];
void linear();
void binary();

int main()
{
    int ch;
    printf("enter the size of the array \n");
    scanf("%d",&limit);
    printf("enter the elements \n");

        for (int i = 0; i < limit; i++)
        {
            scanf("%d",&arr[i]);
        }
    while (1)
    {
        printf("1.linear search \n2.binary search\n");
        scanf("%d",&ch);

        switch (ch)
        {
        case 1:
            linear();
            break;
        case 2:
            binary();
            break;
        case 3:
            return 0;
        
        default:
            printf("invalid!!!!!!!!!");
            break;
        }
    }
    
}
void linear()
{
        int ele,f=0;
        printf("\nenter the element to be searched\n");
        scanf("%d",&ele);

        for (int i = 0; i <limit; i++)
        {
            if(ele==arr[i])
            {
                f++;
            }
        }
        if (f==0)
            printf("ELEMENT NOT PRESENT \n");
        else
            printf("ELEMENT IS PRESENT \n");
        
        
}
void binary()
{
    int ele;
    printf("\nenter the element to be searched\n");
    scanf("%d", &ele);

    int high = limit - 1, low = 0, mid;  // value declarartion.

    while (low <= high) // loop condition.
    {
        mid = (low + high) / 2;

        if (arr[mid] == ele)
        {
            printf("ELEMENT FOUND\n");
            return;  // return statement to exit the function once the element is found.
        }
        else if (ele < arr[mid])
        {
            high = mid - 1;
        }
        else
        {
            low = mid + 1;
        }
    }

    printf("ELEMENT NOT FOUND\n"); // Print a message if the element is not found.
}
