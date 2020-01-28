--criação do banco
CREATE DATABASE bancodeteste;

--alternar para o novo banco
USE bancodeteste;

--criação da tabela de usuários
CREATE TABLE tb_usuarios(
	idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	deslogin VARCHAR(64) NOT NULL,
	dessenha VARCHAR(256) NOT NULL,
	dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);


--Stored procedure para inserir usuario no banco
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuarios_insert`(
	pdeslogin VARCHAR(64),
	pdessenha VARCHAR(256)
)
BEGIN
	INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(pdeslogin, pdessenha);

	SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
END