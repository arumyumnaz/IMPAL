#include <stdio.h>
#include <math.h>
#include <stdbool.h>


bool cekNegatif(float a, float b, float c);
bool cekSisi(float a, float b, float c);


int main(){
    float a, b, c;
    printf("Masukkan nilai a : ");
    scanf("%f", &a);
    printf("Masukkan nilai b : ");
    scanf("%f", &b);
    printf("Masukkan nilai c : ");
    scanf("%f", &c);

    cekNegatif(a, b, c);

}

bool cekNegatif(float a, float b, float c){
    if(a>0.0 && b>0.0 && c>0.0){
        return true;
    }else{
        return false;
        printf("Segitiga tidak dapat dibangun.");
    }
}

bool cekSisi(float a, float b, float c){
    int i, j;
    float tmp, arr[3];
    arr[0]=a;
    arr[1]=b;
    arr[2]=c;

    for(i=3; i>=1; i--){
        for(j=1; j<=3; j++){
            if(arr[j-1]>arr[j]){
                tmp = arr[j-1];
                arr[j-1] = arr[j];
                arr[j] = tmp;
            }
        }
    }

    //cek sisi segitiga
    if(arr[2] < (arr[0]+arr[1])){
        return true;
    }else{
        return false;
        printf("Segitiga tidak dapat dibangun.");
    }


    //cek bentuk segitiga
    if(a==b || b==c || a==c){
        printf("Segitiga Sama Kaki.");
    }else if(a==b && b==c){
        printf("Segitiga Sama Sisi.");
    }else if(pow(arr[2],2) == (pow(arr[0],2)+pow(arr[1],2))){
        printf("Segitiga Siku Siku.");
    }else{
        printf("Segitiga Bebas.");
    }


}



