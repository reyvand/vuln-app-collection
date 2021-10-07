#include <stdio.h>

/*

    Deploy: gcc simplebof1.c -fno-stack-protector -no-pie -z execstack -o simplebof1
    Exploit: 1234567890 + something you want

*/

int main(){


    int must = 0;
    char ip[10];
    printf("Enter the value: ");
    gets(ip);

    if(must == 0 ){

        printf("Nothing changed!");

    }else{

        printf("Something changed! must=%d", must);
    }

}