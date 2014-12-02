#include <iostream>
#include "InputObserver.h"

void InputObserver::Observe(ObserverData* data){
	std::cout << (char *) data;
}
