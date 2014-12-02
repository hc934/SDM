#ifndef INPUTOBSERVER_H_
#define INPUTOBSERVER_H_

#include <string>
#include "Subject.h"
#include "Observer.h"

class InputObserver : public Observer
{
public:
	//InputObserver() {}
	virtual ~InputObserver() {}
	virtual void Observe(ObserverData* data);
};

#endif