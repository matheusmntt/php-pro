<?php $this->layout('master', ['title' => $title]) ?>

<h1>User Profile</h1>

<form action="/user/update/12" method="post">

  <input type="text" name="firstName" value="Matheus" />
  <input type="text" name="lastName" value="Monteiro" />
  <input type="email" name="email" value="matheus@meempresta.net" />
  <input type="password" name="password" value="1234" />

  <button type="submit">Atualizar</button>

</form>