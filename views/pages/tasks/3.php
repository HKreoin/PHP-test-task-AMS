<!DOCTYPE html>
<html lang="en">

<?php
require_once __DIR__ . '/../components/head.php';
?>

<body>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img height="60" src="/assets/img/ams-logo.png" alt="ams logo">
                <span class="fs-4 ms-3">Тестовое задание для AMS</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
                <li class="nav-item"><a href="/tasks/1" class="nav-link">Запрос №1</a></li>
                <li class="nav-item"><a href="/tasks/2" class="nav-link">Запрос №2</a></li>
                <li class="nav-item"><a href="/tasks/3" class="nav-link active">Запрос №3</a></li>
            </ul>
        </header>
    </div>

    <h2 class="text-center">Список автомобилей</h2>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Start date</th>
                    <th scope="col">End date</th>
                    <th scope="col">Body type</th>
                    <th scope="col">Image</th>
                </tr>

            </thead>
            <tbody id="cars_sorted">
                <?php foreach ($sortedCars as $car) : ?>
                    <tr>
                        <td><?= $car['id'] ?></td>
                        <td><?= $car['brand_name'] ?></td>
                        <td><?= $car['model'] ?></td>
                        <td><?= $car['start_date'] ?></td>
                        <td><?= $car['end_date'] ?></td>
                        <td><?= $car['body_type'] ?></td>
                        <td><img src="<?= $car['image'] ?>" alt="<?= $car['model'] ?>" width="100px"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <?php require_once __DIR__ . '/../components/footer.php'; ?>
</body>

</html>