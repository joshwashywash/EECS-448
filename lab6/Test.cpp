#include "Test.h"
#include <iostream>
#include <functional>

using namespace std;

Test::Test() : m_list(new LinkedListOfInts) {
	cout << "The list has been initialized." << endl;
	this->emptyByDef();
}

void Test::tester(const bool &test) const {
	test ? cout << "PASS" : cout << "FAIL";
	cout << endl;
}

void Test::run() {
	this->isEmpty();
	this->multiAddFronts();
	this->multiAddBacks();
	this->orderedAddFronts();
	this->orderedAddBacks();
	this->removeFront();
	this->removeBack();
	this->search();
}

void Test::emptyByDef() const {
	cout << "List is empty by default: ";
	this->tester(m_list->isEmpty());
	cout << "Check if the size is 0 by default: ";
	this->tester(m_list->size() == 0);
}

//clears the list. and makes a new empty one.
void Test::resetList() {
	delete m_list;
	m_list = new LinkedListOfInts;
}

// convenience function for testing.
void Test::printList() const {
	for (auto i : m_list->toVector()) {
		cout << i;
	}
}

void Test::isEmpty() {
	cout << "List is not empty after adding a node: ";
	m_list->addFront(1);
	this->tester(!m_list->isEmpty());
	this->resetList();
}

void Test::multiAddFronts() {
	bool pass = true;
	cout << "Size is consistent with multiple addFronts: ";
	for (auto i = 0; i < 5; ++i) {
		m_list->addFront(i);
		if (m_list->size() != i + 1) {
			pass = !pass;
			break;
		}
	}
	this->tester(pass);
	this->resetList();
}

void Test::multiAddBacks() {
	bool pass = true;
	cout << "Size is consistent with multiple addBacks: ";
	for (auto i = 0; i < 5; ++i) {
		m_list->addBack(i);
		if (m_list->size() != i + 1) {
			pass = !pass;
			break;
		}
	}
	this->tester(pass);
	this->resetList();
}

void Test::orderedAddFronts() {
	bool pass = true;
	cout << "Order is maintained with multiple addFronts: ";
	for (auto i = 0; i < 5; ++i) {
		m_list->addFront(i);
		if (m_list->toVector().front() != i) {
			pass = !pass;
			break;
		}
	}
	this->tester(pass);
	this->resetList();
}

void Test::orderedAddBacks() {
	bool pass = true;
	cout << "Order is maintained with multiple addBacks: ";
	for (auto i = 0; i < 5; ++i) {
		m_list->addBack(i);
		if (m_list->toVector().back() != i) {
			pass = !pass;
			break;
		}
	}
	this->tester(pass);
	this->resetList();
}

void Test::removeFront() {
	bool pass;
	cout << "Removing values from the front of the list works as expected: ";
	for (auto i = 0; i < 5; ++i) {
		m_list->addFront(i);
		m_list->removeFront();
		if (m_list->size()) {
			pass = !pass;
			break;
		}
	}
	this->tester(pass);
	this->resetList();
}

void Test::removeBack() {
	bool pass = true;
	cout << "Removing values from the back of the list works as expected: ";
	for (auto i = 0; i < 5; ++i) {
		m_list->addBack(i);
		m_list->removeBack();
		if (m_list->size()) {
			pass = !pass;
			break;
		}
	}
	this->tester(pass);
	this->resetList();
}

void Test::search() {
	cout << "Searching finds a known value in the list: ";
	bool pass = true;
	for (auto i = 0; i < 100; ++i) {
		m_list->addFront(i);
		if (!m_list->search(i)) {
			pass = !pass;
			break;
		}
	}
	this->tester(pass);
	this->resetList();
}

Test::~Test() {
	delete m_list;
	m_list = nullptr;
}
