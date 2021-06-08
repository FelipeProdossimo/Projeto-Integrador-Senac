# Projeto-Integrador-Senac
---
## Estrutura do Banco de Dados
```sql
CREATE TABLE `bd_vendas`.`tb_usuario` ( `usuario_id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `senha` VARCHAR(30) NOT NULL , `email` VARCHAR(60) NOT NULL , PRIMARY KEY (`usuario_id`)) ENGINE = InnoDB;

ALTER TABLE `tb_usuario` ADD `data` DATE NOT NULL AFTER `email`;
```