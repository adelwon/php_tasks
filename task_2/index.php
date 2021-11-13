<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">

    <title>PHP task 2</title>
</head>
<body>
<div class="container">
    <main>
        <div class="py-3 text-center">
            <h2>Форма для заповнення даних</h2>
        </div>
        <div class="row">
            <form class="needs-validation" action="data.php" method="post" name="data" novalidate="" enctype='multipart/form-data'>
                <div class="row g-3">
                    <div class="col-12">
                        <label for="full_name" class="form-label">ПІБ</label>
                        <input type="text" name="full_name" class="form-control" id="full_name"
                               placeholder="Введіть своє прізвище, ім'я та по-батькові" required="">
                        <div class="invalid-feedback">
                            Будь ласка, введіть вірні дані.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="education" class="form-label">Освіта</label>
                        <input type="text" name="education" class="form-control" id="education" required="">
                        <div class="invalid-feedback">
                            Будь ласка, введіть вірні дані.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="year" class="form-label">Вік</label>
                        <input type="number" name="year" class="form-control" id="year" min="0" max="100" required="">
                        <div class="invalid-feedback">
                            Будь ласка, введіть вірні дані.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="experience" class="form-label">Стаж</label>
                        <input type="number" name="experience" class="form-control" id="experience" min="0" max="60" required="">
                        <div class="invalid-feedback">
                            Будь ласка, введіть вірні дані.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="image" class="form-label">Прикрипіть своє фото</label>
                        <input class="form-control" name="image" type="file" id="image" required="">
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" name="about" id="about"
                                  style="height: 100px"></textarea>
                        <label for="about">Напишіть коротко про себе</label>
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Відправити</button>
            </form>
        </div>
    </main>
</div>
</body>
<script>
    (function () {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</html>
