#include <stdio.h>
#define SIZE 100000


int main(){
    int score[SIZE];
    printf("HIGHSCORE KAMU ADALAH");

    printf("%d", highscore(score));
}

int highscore(int score[]){
    int i, j;
    int tmp, score[SIZE];

    for(i=SIZE; i>=1; i--){
        for(j=1; j<=SIZE; j++){
            if(score[j-1]>score[j]){
                tmp = score[j-1];
                score[j-1] = score[j];
                score[j] = tmp;
            }
        }
    }

    return score;
}
