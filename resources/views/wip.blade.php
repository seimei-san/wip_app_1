<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
  <title>WIP</title>
</head>
<body>
  <div id="app">
    <header>
      <div class="logo">

      </div>
      <div class="title">
        <h1>WIP - White-Collar Improvement Program</h1>
        <h3>ホワイトカラー・カイゼン・プログラム</h3>
      </div>
      <div class="menu_box">
        <div class="navigation">
          <ol class="menus">
            <li class="menu_item" id="training">トレーニング</li>
            <li class="menu_item" id="config">機能設定</li>
            <li class="menu_item" id="admin" v-on:click="admin">管理機能</li>
          </ol>
          <Transition name=fade>
            <ol class="menus_sub" v-if="admin_menu">
              <li class="menu_item_sub" id="company">会社登録</li>
              <li class="menu_item_sub" id="users">ユーザー登録</li>
              <li class="menu_item_sub" id="group">グループ登録</li>
            </ol>
          </Transition>
        </div>
      </div>
    </header>
    <div class="main_wrapper">

    </div>
  </div>
  <footer>
    footer
  </footer>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>