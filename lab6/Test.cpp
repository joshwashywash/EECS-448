#include "Test.h"
#include <iostream>

using namespace std;

Test::Test(LinkedListOfInts *list): m_list(list) {
  cout << "The list has been initialized.";
}

void Test::run() {

}

bool Test::listEmpty() const {
  return m_list->isEmpty();
}

void Test::listSize() const {
  cout << m_list->size() << endl;
}

Test::~Test() {
  delete m_list;
  m_list = nullptr;
}
