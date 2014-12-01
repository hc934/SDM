#ifndef WIDGETS_H
#define WIDGETS_H

#include <string>

namespace widget {

struct Dimension {
  unsigned int Width;
  unsigned int Height;
  Dimension(unsigned int aWidth, unsigned int aHeight)
    : Width(aWidth)
    , Height(aHeight)
  { }
};

class Widget {
public:
  virtual ~Widget() {}
  virtual Dimension GetDimension() = 0;
};

class Window : public Widget {
public:
  virtual ~Window() {}
  virtual std::string GetTitle() = 0;
};

class Button : public Widget {
public:
  virtual ~Button() {}
  virtual std::string GetLabel() = 0;
};

class TextField : public Widget {
public:
  virtual ~TextField() {}
  virtual std::string GetText() = 0;
};

} // namespace widget

#endif
