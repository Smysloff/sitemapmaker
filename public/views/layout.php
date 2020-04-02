<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <section class="section text-section">

        <h1><?= $title ?></h1>

    </section>

    <div class="section form-section">

        <form method="post" class="form">

            <div class="form__row">
                <textarea name="inputData" id="inputData" cols="60" rows="16" class="form__textarea"><?= $inputHandler->post('inputData') ?></textarea>
                <textarea name="outputData" id="outputData" cols="60" rows="16" class="form__textarea" disabled><?= $outputData ?></textarea>
            </div>

            <div class="form__row">
                <label>
                    <span>xml</span>
                    <input type="radio" name="type" value="xml"<?= $inputHandler->post('type') == 'html' ? '' : 'checked' ?>>
                </label>
                <label>
                    <input type="radio" name="type" value="html"<?= $inputHandler->post('type') == 'html' ? ' checked' : '' ?>>
                    <span>html</span>
                </label>
                <input type="submit" name="submit" value="Отправить">
            </div>

        </form>
    </div>

    <script src="/public/js/main.js"></script>

</body>
</html>