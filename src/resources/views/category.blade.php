@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<!-- メッセージの表示 -->
<div class="category__alert">
    @if(session('message'))
    <div class="category__alert--success">
        {{ session('message') }}
    </div>
    @endif
    @if($errors->any())
    <div class="category__alert--danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<!-- カテゴリー作成 -->
<div class="category__content">

    <!-- 新規作成 -->
    <form class="create-form">
        <div class="create-form__item">
            <input class="create-form__item-input" type="text">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">作成</button>
        </div>
    </form>

    <!-- 登録一覧の表示 -->
    <div class="category-table">
        <table class="category-table__inner">
            <tr class="category-table__row">
                <th class="category-table__header">
                    category
                </th>
            </tr>
            @foreach ($categories as $category)
            <tr class="category-table__row">
                <td class="category-table__item">
                    <form class="update-form">
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text">
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">
                                更新
                            </button>
                        </div>
                    </form>
                </td>
                <td class="category-table__item">
                    <form class="delete-form">
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="submit">
                                削除
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection