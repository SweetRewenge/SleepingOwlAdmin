<?php

return [
    'dashboard' => 'Панель приладів',
    '404' => 'Сторінку не знайдено.',

    'auth' => [
        'title' => 'Авторизація',
        'username' => 'Логін',
        'password' => 'Пароль',
        'login' => 'Увійти',
        'logout' => 'Вийти',
        'wrong-username' => 'Не вірний логін',
        'wrong-password' => 'або пароль',
        'since' => 'Зареєстрований :date',
    ],
    'model' => [
        'create' => 'Створення документа в розділі :title',
        'edit' => 'Редагування запису в розділі :title',
    ],
    'links' => [
        'index_page' => 'На сайт',
    ],
    'ckeditor' => [
        'upload' => [
            'success' => 'Файл був успішно завантажений: \\n - Розмір: :size кб \\n - ширина / висота: :width x :height',
            'error' => [
                'common' => 'Виникла помилка при спробі завантажити файл.',
                'wrong_extension' => 'Файл ":file" має не вірний тип.',
                'filesize_limit' => 'Максимальний розмір файлу: :size кб.',
                'imagesize_max_limit' => 'Ширина x Висота = :width x :height \\n Максимальний розмір зображення повинен бути: :maxwidth x :maxheight',
                'imagesize_min_limit' => 'Ширина x Висота = :width x :height \\n Мінімальний розмір зображення повинен бути: :minwidth x :minheight',
            ],
        ],
        'image_browser' => [
            'title' => 'Вставка зображення з серверу',
            'subtitle' => 'Виберіть зображення для вставки',
        ],
    ],
    'table' => [
        'no-action' => 'Без дiй',
        'make-action' => 'Вiдправити',
        'new-entry' => 'Новий запис',
        'edit' => 'Редагувати',
        'restore' => 'Відновити',
        'delete' => 'Видалити',
        'delete-confirm' => 'Ви впевнені що хочете видалити цей запис ? ',
        'delete-error' => 'Неможливо видалити цей запис. Потрібно спочатку видалити всі пов\'язані записи.',
        'destroy' => 'Видалити',
        'destroy-confirm' => 'Ви впевнені що хочете видалити цей запис ? ',
        'destroy-error' => 'Неможливо видалити цей запис. Потрібно спочатку видалити всі пов\'язані записи.',
        'moveUp' => 'Посунути вгору',
        'moveDown' => 'Посунути вниз',
        'error' => 'В процесі обробки вашого запиту виникла помилка',
        'filter' => 'Показати подібні записи',
        'filter-goto' => 'Перейти',
        'save' => 'Зберегти',
        'save_and_close' => 'Зберегти і закрити',
        'save_and_create' => 'Зберегти і створити',
        'cancel' => 'Скасувати',
        'download' => 'Завантажити',
        'all' => 'Все',
        'processing' => '<i class="fa fa-5x fa-circle-o-notch fa-spin"></i>',
        'loadingRecords' => 'Зачекайте...',
        'lengthMenu' => 'Відображати _MENU_ записів',
        'zeroRecords' => 'Не знайдено відповідних записів.',
        'info' => 'Записи починаючи з _START_ до _END_ із _TOTAL_',
        'infoEmpty' => 'Записи починаючи з 0 по 0 із 0',
        'infoFiltered' => '(відфільтровано з _MAX_ записів)',
        'infoThousands' => '',
        'infoPostFix' => '',
        'search' => 'Пошук: ',
        'emptyTable' => 'Немає записів',
        'paginate' => [
            'first' => 'Перша',
            'previous' => '&larr;',
            'next' => '&rarr;',
            'last' => 'Остання',
        ],
    ],
    'editable' => [
        'checkbox' => [
            'checked' => 'Так',
            'unchecked' => 'Ні',
        ],
    ],
    'select' => [
        'nothing' => 'Нічого не вибрано',
        'selected' => 'вибрано',
        'placeholder' => 'Виберіть зі списку',
    ],
    'image' => [
        'browse' => 'Вибір зображення',
        'browseMultiple' => 'Вибір зображень',
        'remove' => 'Видалити',
        'removeMultiple' => 'Видалити',
    ],
    'file' => [
        'browse' => 'Вибір файлу',
        'remove' => 'Видалити',
    ],
    'button' => [
        'yes' => 'Так',
        'no' => 'Ні',
    ],
    'message' => [
        'created' => '<i class="fa fa-check fa-lg"></i> Запис успішно створено',
        'updated' => '<i class="fa fa-check fa-lg"></i> Запис успішно обновлено',
        'deleted' => '<i class="fa fa-check fa-lg"></i> Запис успішно видалено',
        'restored' => '<i class="fa fa-check fa-lg"></i> Запис успішно відновлено',
        'something_went_wrong' => 'Щось пішло не так!',
        'are_you_sure' => 'Ви впевнені?',
        'access_denied' => 'Доступ заборонено',
        'validation_error' => 'Помилка валідації',
    ],
];
