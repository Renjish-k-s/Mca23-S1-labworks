#include <stdio.h>
#include <stdlib.h>

struct node {
    int data;
    struct node *left, *right;
};

struct node *createNode(int ele) {
    struct node *newNode = (struct node *)malloc(sizeof(struct node));
    newNode->data = ele;
    newNode->left = NULL;
    newNode->right = NULL;
    return newNode;
}

struct node *insert(struct node *root, int ele) {
    if (root == NULL) {
        return createNode(ele);
    }

    if (ele < root->data) {
        root->left = insert(root->left, ele);
    } else if (ele > root->data) {
        root->right = insert(root->right, ele);
    }

    return root;
}

void inorder(struct node *root) {
    if (root != NULL) {
        inorder(root->left);
        printf("%d, ", root->data);
        inorder(root->right);
    }
}
// void printSpaces(int n) {
//     for (int i = 0; i < n; ++i) {
//         printf(" ");
//     }
// }

// void printTree(struct node *root, int space) {
//     if (root == NULL) {
//         return;
//     }

//     space += 5;

//     printTree(root->right, space);
//     printf("\n");
//     printSpaces(space);
//     printf("%d\n", root->data);
//     printTree(root->left, space);
// }

// void inorder(struct node *root) {
//     if (root != NULL) {
//         printTree(root, 0);
//     }
// }

struct node *findMin(struct node *node) {
    struct node *current = node;

    while (current && current->left != NULL) {
        current = current->left;
    }
    return current;
}

struct node *deleteNode(struct node *root, int cele) {
    if (root == NULL) {
        printf("ELEMENT NOT FOUND");
        return root;
    }

    if (cele < root->data) {
        root->left = deleteNode(root->left, cele);
    } else if (cele > root->data) {
        root->right = deleteNode(root->right, cele);
    } else {
        if (root->left == NULL) {
            struct node *temp = root->right;
            free(root);
            printf("Element Deleted\n");
            return temp;
        } else if (root->right == NULL) {
            struct node *temp = root->left;
            free(root);
            printf("Element Deleted\n");
            return temp;
        }

        struct node *temp = findMin(root->right);
        root->data = temp->data;
        root->right = deleteNode(root->right, temp->data);
    }
    return root;
}

int main() {
    int ch, ele;
    struct node *root = NULL;

    while (1) {
        printf("\n\nENTER THE CHOICE\n");
        printf("1. Insert\n2. Search\n3. Inorder Traversal\n4. Delete\n5. Exit\n");
        scanf("%d", &ch);

        switch (ch) {
            case 1:
                printf("ENTER THE ELEMENT: ");
                scanf("%d", &ele);
                root = insert(root, ele);
                break;
            case 2:
                printf("ENTER THE ELEMENT TO SEARCH: ");
                scanf("%d", &ele);
                // Implement search logic here
                break;
            case 3:
                printf("Inorder Traversal: ");
                inorder(root);
                printf("\n");
                break;
            case 4:
                printf("ENTER THE ELEMENT TO DELETE: ");
                scanf("%d", &ele);
                root = deleteNode(root, ele);
                break;
            case 5:
                exit(0);
            default:
                printf("Invalid choice\n");
                break;
        }
    }
    return 0;
}
