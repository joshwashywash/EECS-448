#ifndef TEST_H
#define TEST_H

#include "LinkedListOfInts.h"

class Test {
public:
Test();
~Test();
void run();

private:
LinkedListOfInts *m_list;
void emptyByDef() const;
void resetList();
void printList() const;
void isEmpty();
void tester(const bool &test) const;
void multiAddFronts();
void multiAddBacks();
void orderedAddFronts();
void orderedAddBacks();
void removeFront();
void removeBack();
void search();
};

#endif
