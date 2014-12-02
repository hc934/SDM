#include <iostream>
#include "Observer.h"
#include "InputReaderAdapterImpl.h"

void
InputReaderAdapterImpl::AddInputObserver(Observer* aObserver)
{
  mReader->RegisterObserver(aObserver);
}

void
InputReaderAdapterImpl::BeginRead()
{
  mReader->Start();
}

InputReaderAdapterImpl::~InputReaderAdapterImpl(){}

