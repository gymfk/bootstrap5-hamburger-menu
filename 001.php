<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>会員メニュー</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .menu-header {
      background-color: #00BFE5;
      color: white;
      padding: 1rem;
    }

    .menu-list a {
      text-decoration: none;
      color: #000;
      padding: 0.5rem 1rem;
      display: block;
    }

    .menu-list a:hover {
      background-color: #f1f1f1;
    }

    .offcanvas-header {
      background-color: #00BFE5;
      color: white;
    }

    @media (min-width: 768px) {
      .menu-inline a {
        color: #212529; 
        text-decoration: none;
        margin-right: 1rem;
      }

      .menu-inline a:hover {
        text-decoration: underline;
      }
    }
  </style>
</head>
<body>

<!-- ナビゲーション -->
<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <span class="navbar-brand">◯◯◯◯.com</span>

    <!-- ハンバーガーボタン（モバイルのみ表示） -->
    <button class="btn btn-outline-light d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuDrawer">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- メニュー（PCのみ表示） -->
    <div class="d-none d-md-flex align-items-center ms-auto menu-inline">
      <a href="#">メールアドレス</a>
      <a href="#">パスワード</a>
      <a href="#">登録情報</a>
      <a href="#">支払方法</a>
      <a href="#" class="text-danger">ログアウト</a>
      <div class="mx-3 text-end text-nowrap">
        <div class="fw-bold">山田太郎 様</div>
        <small class="text-muted">会員ID 1234567890</small>
      </div>
    </div>
  </div>
</nav>

<!-- オフキャンバスメニュー（モバイル用） -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="menuDrawer">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">会員メニュー</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body menu-list">
    <div class="fw-bold mb-2">山田太郎 様<br><small class="text-muted">会員ID 1234567890</small></div>
    <a href="#">メールアドレス</a>
    <a href="#">パスワード</a>
    <a href="#">登録情報</a>
    <a href="#">支払方法</a>
    <hr>
    <a href="#" class="text-danger">ログアウト</a>
  </div>
</div>





  <!-- ヒーローセクション -->
<style>
    .hero {
      background: linear-gradient(45deg, #377aff 0%, #00d9ff 100%);
      color: white;
      padding: 80px 0 80px 0;
      text-align: center;
      position: relative;
    }
    .hero h1 {
      font-size: 2rem;
      font-weight: bold;
    }
    .hero p {
      max-width: 600px;
      margin: 10px auto 30px;
    }
    .hero input {
      max-width: 300px;
      display: inline-block;
    }
    @media (max-width: 575.98px) {
      .hero h1 { font-size: 1.3rem; }
      .hero p { font-size: 0.9rem; }
    }
</style>    

  <section class="hero">
    <div class="container">
      <h1>新たな価値を創造し、社会の進化に貢献する</h1>
      <p>To create new value and contribute to the advancement of society.</p>
      <form class="d-flex justify-content-center mt-4">
        <input type="text" class="form-control me-2" placeholder="Enter your tracking number">
        <button type="submit" class="btn btn-warning">Track Now</button>
      </form>
    </div>
  </section>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
