//how to make addition of two numbers?  
#include <stdio.h>
#include <stdint.h>
#include <inttypes.h>

int main()
{
    uint32_t a;

    printf("Enter number 1: ");
    scanf("%hd", (uint16_t *)(&a));

    printf("Enter number 2: ");
    scanf("%hd", ((uint16_t *)(&a))+1);

    printf("%X\n", a);

    printf("Sum = %"PRIu32"\n", (uint32_t)(*(uint16_t *)(&a)) + *(((uint16_t *)(&a)) + 1));

    return 0;
}


//how to make substraction of two numbers? 