<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета студента</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Козачук Кирило</h1>
        <div class="photo-placeholder">
            <span>?</span>
        </div>
        <p>Вік: 19</p>
        <p>Місце народження: Запоріжжя</p>
        <p>Номер телефону: +380 123 456 789</p>
    </div>

    <h2>Список студентів</h2>

    <?php
    // Підключення файлу класу Student
    require_once 'Student.php';

    // Створення об'єкта класу Student
    $studentClass = new Student();

    // Виклик методу для зміни віку студентів
    $studentClass->updateAges();

    // Виклик методу для обчислення загального віку студентів
    $totalAge = $studentClass->calculateTotalAge();

    // Додавання нового студента
    $newStudent = ['Новий', 'Студент', 20, 'Київ', '+380 999 888 777'];
    $studentClass->addStudent($newStudent);
    ?>

    <!-- Таблиця зі списком студентів -->
    <table>
        <thead>
            <tr>
                <th>Прізвище</th>
                <th>Ім'я</th>
                <th>Вік</th>
                <th>Місто народження</th>
                <th>Телефон</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Виведення студентів з масиву класу Student
            foreach ($studentClass->students as $student) {
                echo "<tr>";
                foreach ($student as $info) {
                    echo "<td>$info</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Блок з відображенням загального віку студентів -->
    <div class="total-age">
        Загальний вік студентів - <?php echo $totalAge; ?>
    </div>
</body>
</html>


