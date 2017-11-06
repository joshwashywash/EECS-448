#ifndef TEST_H
#define TEST_H

#include "LinkedListOfInts.h"

class Test {
public:
  Test();
  ~Test();
  void run();

private:
  LinkedListOfInts* m_list = nullptr;
};

#endif
