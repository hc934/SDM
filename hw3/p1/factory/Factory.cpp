#include "Factory.h"
#include "WidgetsImpl.h"

widget::Window* WidgetsConcreteFactory::CreateWindow()
{
	return new widget::WindowImpl();
}

widget::Button* WidgetsConcreteFactory::CreateButton()
{
	return new widget::ButtonImpl();
}

widget::TextField* WidgetsConcreteFactory::CreateTextField()
{
	return new widget::TextFieldImpl();
}

WidgetsConcreteFactory::~WidgetsConcreteFactory()
{
}