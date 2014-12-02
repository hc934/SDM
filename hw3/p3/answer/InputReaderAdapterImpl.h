#ifndef INPUTREADERADAPTERIMPL_H
#define INPUTREADERADAPTERIMPL_H

#include <pthread.h>
#include <vector>
#include <string>
#include "Subject.h"
#include "Observer.h"
#include "InputReader.h"
#define override

class InputReaderAdapter
{
public:
	virtual void AddInputObserver(Observer* aObserver) = 0;
	virtual void BeginRead() = 0;
	virtual ~InputReaderAdapter(){}
private:
 	InputReader* mReader;
};

class InputReaderAdapterImpl : public InputReaderAdapter
{
public:
	InputReaderAdapterImpl(InputReader* reader)
	{
		mReader = reader;
	}
	void AddInputObserver(Observer* aObserver) override;
	void BeginRead() override;
	virtual ~InputReaderAdapterImpl()override;
private:
	InputReader* mReader;
};

#endif