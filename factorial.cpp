/**
	*@file
	*@brief функция factorial()
	*Считает факториал числа n, для того, чтобы поменять значение n, перейдите в файл main.cpp
*/
#include "functions.h"

/**
 * @brief функция рассчета фактормала
 * @param int n число
 * @return значение фактормала
 * @todo написать комментарии
 * @note это заметка
 * @warning Это варнинг
 * @error не правильно работает для отрицательных чисел
 * @details Подробное описание
 */
int factorial(int n){
    if(n!=1){
	return(n * factorial(n-1));
    }
    else return 1;
}