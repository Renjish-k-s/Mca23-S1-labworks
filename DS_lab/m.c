// Circular Queue implementation in C

#include <stdio.h>

int items[100];
int front = -1, rear = -1,SIZE;

// Check if the queue is full
int isFull() {
  if ((front == rear + 1) || (front == 0 && rear == SIZE - 1)) return 1;
  return 0;
}

// Check if the queue is empty
int isEmpty() {
  if (front == -1) return 1;
  return 0;
}

// Adding an element
void enQueue() {
 int element;

 printf("\nENTER THE ELEMENT\n");
 scanf("%d",&element);

  if (isFull())
    printf("\n Queue is full!! \n");
  else {
    if (front == -1) front = 0;
    rear = (rear + 1) % SIZE;
    items[rear] = element;
    printf("\n Inserted -> %d", element);
  }
}

// Removing an element
int deQueue() {
  int element;
  if (isEmpty()) {
    printf("\n Queue is empty !! \n");
    return (-1);
  } else {
    element = items[front];
    if (front == rear) {
      front = -1;
      rear = -1;
    } 
    // Q has only one element, so we reset the 
    // queue after dequeing it. ?
    else {
      front = (front + 1) % SIZE;
    }
    printf("\n Deleted element -> %d \n", element);
    return (element);
  }
}

// Display the queue
void display() {
  int i;
  if (isEmpty())
    printf(" \n Empty Queue\n");
  else {
    printf("\n Front -> %d ", front);
    printf("\n Items -> ");
    for (i = front; i != rear; i = (i + 1) % SIZE) {
      printf("%d ", items[i]);
    }
    printf("%d ", items[i]);
    printf("\n Rear -> %d \n", rear);
  }
}

int main()
{
    int ch;

    printf("\nenter the size of queue\n");
    scanf("%d",&SIZE);

    while (1)
    {
       printf("\nMENU\n1.enqueue\n2.dequeue\n3.display\n4.exit");
       scanf("%d",&ch);
 //       printf("\n f=%d \n",f);
   //     printf("r=%d \n",r);
        switch (ch)
        {
        case 1:
            enQueue();
            break;
         case 2:
            deQueue();
            break;
         case 3:
            display();
            break;
         case 4:
                return 0;
        
         default:
                printf("\ninvalid option\n");
               break;
        }
    }
    
}