#ifndef FACTORY_H_
#define FACTORY_H_

#include "Widgets.h"
#define override

class WidgetsFactory
{
public:
  virtual ~WidgetsFactory() {}
  virtual widget::Window* CreateWindow() = 0;
  virtual widget::Button* CreateButton() = 0;
  virtual widget::TextField* CreateTextField() = 0;
};

class WidgetsConcreteFactory: public WidgetsFactory
{
public:
  widget::Window* CreateWindow() override;
  widget::Button* CreateButton() override;
  widget::TextField* CreateTextField() override;
  ~WidgetsConcreteFactory() override;
};

#endif /* FACTORY_H_ */
