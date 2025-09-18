-- Apaga a tabela se ela já existir (opcional)
DROP TABLE IF EXISTS respostas;

-- Cria o banco de dados se não existir
CREATE DATABASE IF NOT EXISTS quiz_final;
USE quiz_final;

-- Cria a tabela com os campos exatos do seu formulário
CREATE TABLE respostas (
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- Armazena os valores dos checkboxes (quem foi o melhor)
    melhor JSON,

    -- Perguntas técnicas
    q1 VARCHAR(50),
    q2 VARCHAR(50),
    q3 VARCHAR(50),
    q4 VARCHAR(50),
    q5 VARCHAR(50),

    -- Perguntas pessoais
    continuar VARCHAR(10),
    faculdade VARCHAR(10),
    curso VARCHAR(10),
    parar VARCHAR(10),

    -- Data de envio
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
