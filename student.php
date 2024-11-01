<?php

class Student {
    public $students = [
        ['Козачук', 'Кирило', 19, 'Київ', '+380 123 456 789'],
        ['Дворецький', 'Іван', 21, 'Львів', '+380 234 567 890'],
        ['Соколова', 'Вікторія', 22, 'Одеса', '+380 345 678 901'],
        ['Петров', 'Олексій', 23, 'Харків', '+380 456 789 012'],
        ['Коваленко', 'Андрій', 24, 'Дніпро', '+380 567 890 123'],
        ['Левчук', 'Марія', 25, 'Запоріжжя', '+380 678 901 234'],
    ];

    // Функція зміни віку
    public function updateAges() {
        foreach ($this->students as $index => &$student) {
            if (($index + 1) % 2 == 0) {
                $student[2] = 7;
            } elseif (($index + 1) % 3 == 0) {
                $student[2] = 8;
            } else {
                $student[2] = 9;
            }
        }
    }

    // Функція обчислення загального віку
    public function calculateTotalAge() {
        $total = 0;
        foreach ($this->students as $student) {
            $total += $student[2];
        }
        return $total;
    }

    // Функція додавання нового студента
    public function addStudent($newStudent) {
        if (is_array($newStudent) && count($newStudent) == 5) {
            list($surname, $name, $age, $birthplace, $phone) = $newStudent;
            if ($surname && $name && $age && $birthplace && $phone) {
                $this->students[] = $newStudent;
            }
        }
    }
}
