<?php

return [
    'users' => [
        'create' => [
            'success' => '従業員アカウントの登録に成功しました。',
            'fail' => '従業員アカウントの登録に失敗しました。 再試行するか、管理者に通知してください。'
        ],
        'update' => [
            'success' => 'アカウント情報が正常に更新されました。',
            'fail' => 'アカウント情報の更新に失敗しました。 再試行するか、管理者に通知してください。'
        ],
        'delete' => [
            'success' => 'アカウントが正常に削除されました。',
            'fail' => 'アカウントの削除に失敗しました。',
        ],
        'update_password' => [
            'success' => 'パスワードの更新が成功しました。',
            'fail' => 'パスワードの更新に失敗しました。',
        ]
    ],
    'account_is_disabled' => '申し訳ありませんが、あなたのアカウントはロックされています。 管理者に連絡してください。',
    'error_exist' => 'エラーが発生しました。管理者に通知してください。'
];