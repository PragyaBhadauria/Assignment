#include <cstdio>
#include <iostream>

#define MOD 1000000007

using namespace std;

void bit_string(long int A[2][2], long int M[2][2])
{
  long int x =  ((A[0][0]*M[0][0])%MOD + (A[0][1]*M[1][0])%MOD)%MOD;
  long int y =  ((A[0][0]*M[0][1])%MOD + (A[0][1]*M[1][1])%MOD)%MOD;
  long int z =  ((A[1][0]*M[0][0])%MOD + (A[1][1]*M[1][0])%MOD)%MOD;
  long int w =  ((A[1][0]*M[0][1])%MOD + (A[1][1]*M[1][1])%MOD)%MOD;
 
  A[0][0] = x;
  A[0][1] = y;
  A[1][0] = z;
  A[1][1] = w;
}

void power(long int A[2][2], long int N)
{
  if( N == 0 || N == 1)
      return;
  long int M[2][2] = {{1,1},{1,0}};
 
  power(A, N/2);
  bit_string(A, A);
 
  if (N%2 != 0)
     bit_string(A, M);
}

long int modolus(long long int N)
{
  long int A[2][2] = {{1,1},{1,0}};
  if (N == 0)
    return 0;
  if (N == 1)
    return 2;
  if (N == 2)
    return 3;
  power(A, N-2);
  return (A[0][0]*3+A[0][1]*2)%MOD;
}

int main()
{
	freopen("in.txt","r",stdin);
	long long int I;
	cin >> I;
	while(I--)
	{
		long  int number;
		cin >> number;
		cout << modolus(number) << endl;
	}
	return 0;
}
