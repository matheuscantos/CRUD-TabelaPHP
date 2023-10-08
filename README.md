# CRUD-TabelaPHP
Crud de uma tabela feita com Jquery e PHP

Configurações banco:

Dados de conexão estão presentes no arquivos master/master_database.php e master/master_dbconfig.php.

Estrutura do banco: 

Tabela: 

  - id - INT(11)
  - nome - VARCHAR(255)
  - email - VARCHAR(255)
  - dataadmissao - DATETIME
  - datacadastro - DATETIME
  - dataatualizacao - DATETIME - current_timestamp()
  - status - INT(11) - comentário: 0 ativo 1 inativo	
