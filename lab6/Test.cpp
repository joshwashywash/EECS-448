#include "Test.h"

Test::Test() {
  m_list = new LinkedListOfInts();
}

void Test::run() {
}

Test::~Test() {
  delete m_list;
}
