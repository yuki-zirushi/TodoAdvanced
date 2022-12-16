<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TodoAdvanced</title>
  <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
  <style>

    .card_header {
      display: flex;
      justify-content: space-between;
    }

    .btn-logout {
      border: 2px solid #FF0000;
      color: #FF0000;
    }

    .select-tag {
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 14px;
      outline: none;
    }

    .btn {
      text-align: left;
      font-size: 12px;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .btn-add {
      border: 2px solid #dc70fa;
      color: #dc70fa;
    }

    .btn-back {
      border: 2px solid #6d7170;
      color: #6d7170;
      background-color: #fff;
      text-decoration: none;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card_header">
        <p class="title mb-15">タスク検索</p>
        <div class="auth mb-15">
          <p class="detail"></p>
          <form action="#" method="post">
            <input class="btn btn-logout" type="submit" value="ログアウト">
          </form>
        </div>
      </div>
      <div class="todo">
        <form action="#" class="flex between mb-30" method="get">
          <input type="text" class="input-add" name="content">
          <select name="tag_id" class="select-tag">
            <option disabled selected value></option>
            <option value="1">家事</option>
            <option value="2">勉強</option>
            <option value="3">運動</option>
            <option value="4">食事</option>
            <option value="5">移動</option>
          </select>
          <input type="submit" class="btn btn-add" value="検索">
        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>タグ</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
          </tbody>
        </table>
      </div>
      <a href="#" class="btn btn-back">戻る</a>
    </div>
  </div>
</body>
</html>