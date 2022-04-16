#include <iostream>
#include <ctime>
#include <cstdlib>
using namespace std;
int main() 
{   
  srand(time(0));
 
  cout<<"Random numbers generated between 1 and 10:"<<endl;
  for(int i=0;i<10;i++)
      cout << (rand() % 10) + 1<<" ";  
  return 0; 
}