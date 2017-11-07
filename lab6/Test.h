#ifndef TEST_H
#define TEST_H

#include "LinkedListOfInts.h"

class Test {
public:
  Test(LinkedListOfInts  *list);
  ~Test();
  void run();
  bool listEmpty() const;
  void listSize() const;

private:
  LinkedListOfInts *m_list = nullptr;
};

#endif
