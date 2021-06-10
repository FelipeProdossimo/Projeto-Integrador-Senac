# Projeto-Integrador-Senac
---
## Estrutura do Banco de Dados
```sql
CREATE TABLE `bd_vendas`.`tb_cliente` ( `cliente_id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `email` VARCHAR(50) NOT NULL , `senha` VARCHAR(20) NOT NULL , PRIMARY KEY (`cliente_id`)) ENGINE = InnoDB;

```