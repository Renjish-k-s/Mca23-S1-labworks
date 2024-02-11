#include<stdio.h>
int arr[20],i,j,temp;
int sort(int arr[])
{
for ( i = 0; i < 7; i++)
      {
         for ( j = i; j< 7; j++)
         {
            if(arr[i]>arr[j])
            {
               temp=arr[i];
               arr[i]=arr[j];
               arr[j]=temp;               
            }
         }
         
      }
      
      // for ( i = 0; i < 7; i++)
      // {
      //    printf("%d",arr[i]);
      // }
      

}
int main()
{

      int arr[20]={5,4,3,8,6,2,1};
 for ( i = 0; i < 7; i++)
      {
         printf("%d",arr[i]);
      }
      sort(arr);
      printf("\n");
       for ( i = 0; i < 7; i++)
      {
         printf("%d",arr[i]);
      }
}

