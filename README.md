# Projeto Integrador 

--- 

## Miro com a documentação do projeto 

--- 

[https://miro.com/app/board/o9J_lBMxbWc=/] 

  

## SQL - Banco de dados 

  

``` 

CREATE DATABASE bd_projeto CHARACTER SET utf8 COLLATE utf8_general_ci; 

``` 

  

Criação da tabela de clientes 

  

``` 

CREATE TABLE `tb_clientes` ( 

  `id` int(11) NOT NULL, 

  `nome` varchar(100) NOT NULL, 

  `email` varchar(70) NOT NULL, 

  `telefone` varchar(20) NOT NULL, 

  `senha` varchar(30) NOT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

``` 

  

Criação da tabela de itens 

  

``` 

CREATE TABLE `tb_itens` ( 

  `id` int(11) NOT NULL, 

  `nome` varchar(100) NOT NULL, 

  `campInform` varchar(70) NOT NULL, 

  `preco` float NOT NULL, 

  `campoPromocao` varchar(30) NOT NULL, 

  `localProduto` varchar(50) NOT NULL, 

  `imgProduto` varchar(50) NOT NULL, 

  `id_vendedor` int(11) NOT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

``` 

  

Criação da tabela de vendedores 

  

``` 

CREATE TABLE `tb_vendedores` ( 

  `id` int(11) NOT NULL, 

  `nome` varchar(100) NOT NULL, 

  `email` varchar(70) NOT NULL, 

  `telefone` varchar(20) NOT NULL, 

  `senha` varchar(30) NOT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

  

  

Índices para tabelas despejadas 

  

Índices para tabela `tb_clientes` 

  

ALTER TABLE `tb_clientes` 

  ADD PRIMARY KEY (`id`); 

  

Índices para tabela `tb_itens` 

  

ALTER TABLE `tb_itens` 

  ADD PRIMARY KEY (`id`), 

  ADD KEY `fk_itens_vendedores` (`id_vendedor`); 

  

Índices para tabela `tb_vendedores` 

  

ALTER TABLE `tb_vendedores` 

  ADD PRIMARY KEY (`id`); 

  

AUTO_INCREMENT de tabela `tb_clientes` 

  

ALTER TABLE `tb_clientes` 

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 

  

AUTO_INCREMENT de tabela `tb_itens` 

  

ALTER TABLE `tb_itens` 

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 

  

AUTO_INCREMENT de tabela `tb_vendedores` 

  

ALTER TABLE `tb_vendedores` 

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 

  

Limitadores para a tabela `tb_itens` 

  

ALTER TABLE `tb_itens` 

  ADD CONSTRAINT `fk_itens_vendedores` FOREIGN KEY (`id_vendedor`) REFERENCES `tb_vendedores` (`id`); 

``` 