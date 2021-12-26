# 🇧🇷 opencart reset admin user

Uma das maneiras mais fáceis de redefinir os dados no banco de dados.

1. Faça login no PHPMyAdmin, para acessar o banco de dados opencart e vá para a guia SQL.
2. Execute a consulta abaixo - substitua: senha realmente longa, nome de usuário do administrador e 'oc_' pelo prefixo do seu banco de dados
<code>
UPDATE `oc_user` SET `password` = md5('newpassword') WHERE `username` = 'admin';
</code>

Outra maneira com apenas acesso ao FTP fazer o upload de um script PHP que execute a consulta acima.
Por exemplo. cole isso em um arquivo reset-admin.php e faça upload para a raiz (mesma pasta que config.php). Em seguida, visite este arquivo em um navegador ou linha de comando.

 ### Executando o arquivo "reset-admin.php"
  - Coloque o arquivo "reset-admin.php" na raiz da instalação de sua loja
  - Acesse a URL de sua loja "minhaloja.com/reset-admin"
  - Antes de executar, altere a senha ao seu gosto e/ou altere apos o primeiro acesso.
  - Atenção: Altere o prefixo da tabela caso sua instalação for diferente. 


