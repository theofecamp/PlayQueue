CREATE TABLE Reviews (
    id_review INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(255) NOT NULL,
    nota_usuario INT,
    texto_review VARCHAR(500)
);