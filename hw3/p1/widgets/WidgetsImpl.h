#ifndef WIDGETS_IMPL_H
#define WIDGETS_IMPL_H

#include "Widgets.h"
#define override

namespace widget {

class WindowImpl : public Window {
public:
  virtual ~WindowImpl() {}
  std::string GetTitle();
  Dimension GetDimension();
};

class ButtonImpl : public Button {
public:
  virtual ~ButtonImpl() {}
  std::string GetLabel();
  Dimension GetDimension();
};

class TextFieldImpl : public TextField {
  virtual ~TextFieldImpl() {}
  std::string GetText();
  Dimension GetDimension();
};

} // namespace widget

#endif

