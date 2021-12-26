# 🇧🇷 opencart reset admin user
 Resete um usário do painel de amdinistração
 ### Execute o arquivo "reset.php" ou o comando direto no SQL
  - Coloque o arquivo "reset.php" na raiz da instalação de sua loja
  - Acesse a URL de sua loja "minhaloja.com/reset"
  - Antes de executar, altere a senha ao seu gosto e/ou altere apos o primeiro acesso.
  - Atenção: Altere o prefixo da tabela caso sua instalação for diferente. 

<code>
UPDATE `oc_user` SET `password` = md5('newpassword') WHERE `username` = 'admin';
</code>
