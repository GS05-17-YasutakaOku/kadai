<?php 
if($_SESSION["kanri_flg"]!=1){
?>
 <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="bm_select.php">一覧</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>

<?}else if($_SESSION["kanri_flg"]!=0){?>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="bm_list_view.php">一覧</a>
      <a class="navbar-brand" href="user_select.php">ユーザー一覧/ユーザー登録</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<?}?>