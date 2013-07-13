#include <stdio.h>
#include <stdlib.h> 

int main()
{
	srand(time(0));
	//declaran los arreglor
	double arr[20];
	double may[20];
	
	int i = 0;
	double num_random;
	double suma = 0;
	double prom = 0.0;
	
	double num_arrelgo; //para obtener un num del arreglo (ejem: arr[0])
	int may_prom = 0; //cantidad de mayores que el promedio

	//llenar el arrelgo
	for(i = 0; i < 20 ; i++){
		num_random = (rand()%(70-10+1)+10)/10.0;
		//[0 - 60] + 10
		//[10 - 70] /10.0
		//[1.0 - 7.0]
		arr[i] = num_random;
		printf("%.1lf ",arr[i]);	
		suma = suma +  arr[i];
		
	}

	prom = suma / 20.0; //calcula el promedio


	printf("xxxxxxxxxxxxxxxxxxxxxxxxxxxxx\n");
	//recorre el arreglo arr y obtiene los mayores que el pro
	for(i = 0; i < 20 ; i++){
		num_arrelgo = arr[i];
		if(num_arrelgo > prom){ //PREGUNTA si el num obtenido es mayor que el prom
			may[i] = num_arrelgo; 
			may_prom++;
		}
	}
	

    printf("Hola mundo\n");
	printf("suma: %f\n",suma);
	printf("prom: %f\n",prom);
	printf("cant mayores: %d\n",may_prom);
	
    return 0;
}



