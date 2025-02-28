@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<!-- フラッシュメッセージ -->
<div class="todo__alert">
    <!-- 成功時メッセージ -->
    <div class="todo__alert--success">Todoを作成しました</div>

    <!--エラー時メッセージ-->
    <div class="todo__alert--danger">
        <ul>
            <li>Todoを入力してください</li>
            <li>エラー2</li>
        </ul>
    </div>
</div>

<div class="todo__content">
    <!-- Todo作成フォーム -->
    <form class="create-form" action="" method="post">
        <div class="create-form__item">
            <input class="create-form__item-input" type="text" name="content" value="">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">作成</button>
        </div>
    </form>

    <!-- Todo一覧テーブル -->
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__row">
                <th class="todo-table__header">Todo</th>
            </tr>
            <tr class="todo-table__row">
                <!-- 更新機能 -->
                <td class="todo-table__item">
                    <form class="update-form" action="" method="post">
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text" name="content" value="test">
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <!-- 削除機能 -->
                <td class="todo-table__item">
                    <form class="delete-form" action="" method="post">
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    <form class="update-form" action="" method="post">
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text" name="content" value="test2">
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table__item">
                    <form class="delete-form" action="" method="post">
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection