Trabalho-Curso

Site sobre minha experiência no curso de Desenvolvimento de Sistemas da Escola Estadual Presidente Dutra.
Você criou um site bem interessante! Vou detalhar o passo a passo do processo de desenvolvimento e o que cada parte do código faz. O site é composto por três páginas principais e um sistema de quiz para interatividade. Vou descrever todas as seções envolvidas.

1. Estrutura do Projeto

Arquivos envolvidos:

* **HTML** (páginas principais): Três páginas principais (página inicial, o que aprendi e quiz final).
* **CSS** (estilos.css): Estilização das páginas.
* **PHP** (salvar\_respostas.php): Processamento de respostas do quiz e armazenamento no banco de dados.

Funções principais:

1. Página Inicial (Página 1): Introdução ao desenvolvimento de sistemas.
2. O que eu Aprendi (Página 2): Compartilhamento do que você aprendeu durante o curso.
3. Quiz Final (Página 3): Um quiz interativo que coleta respostas dos usuários e envia para o servidor.

2. Página 1 - O que é o Desenvolvimento de Sistemas

HTML

* Estrutura de navegação com o `navbar` usando Bootstrap, com links para as outras páginas.
* Conteúdo principal: A descrição do que é o desenvolvimento de sistemas e suas tecnologias essenciais.
* Imagem de banner que representa o tema do desenvolvimento de sistemas.
* Botões de navegação para a próxima página e links no menu.
* Seção de autor: Bio no final da página, com foto e informações pessoais.

CSS

* Estilização básica para fontes, cores e layout.
* Imagens e banners com bordas arredondadas e sombra para melhorar a apresentação.
* Botões com efeitos de hover para melhorar a interatividade.

3. Página 2 - O que Eu Aprendi

HTML

* Tecnologias aprendidas: Uso de ícones representando as tecnologias que você aprendeu (HTML, CSS, JavaScript, etc.).
* GIF para ilustrar o aprendizado de uma maneira visualmente atraente.
* Botão de navegação para ir para a página do quiz.
  
CSS

* Tech-icons: Ícones das tecnologias aprendidas são exibidos de forma flexível e com efeitos de hover.
* GIF: Exibido de forma centralizada com uma borda arredondada.

 4. Página 3 - Quiz Final

HTML

* Formulário de perguntas: O formulário do quiz é dividido em seções:

  1. Pergunta sobre preferências pessoais (quem foi o melhor).
  2. Perguntas técnicas: Sobre HTML, CSS, JavaScript, GitHub e MySQL.
  3. Perguntas pessoais: Se a pessoa continuará na área de tecnologia, se pretende fazer faculdade ou continuar aprendendo programação.
* Botão de envio: Um botão para enviar as respostas.

CSS

* Formatação de formulário: A estilização básica do formulário e botões, com margens e espaçamentos adequados.

JavaScript

* Interatividade no quiz: Quando o formulário é enviado, ele previne o comportamento padrão de envio e exibe uma mensagem de agradecimento, antes de resetar o formulário.

PHP

Processamento de respostas:

  * O arquivo `salvar_respostas.php` recebe os dados do formulário via POST.
  * Ele limpa os dados de entrada para evitar injeções de código (usando `htmlspecialchars`).
  * O dado do checkbox "quem foi o melhor" é armazenado em formato JSON.
  * As respostas das perguntas técnicas e pessoais também são armazenadas.
  * As respostas são gravadas no banco de dados.

5. Banco de Dados (MySQL)

Estrutura do Banco

* Banco de dados: `quiz_final`
* Tabela: `respostas`, com campos para armazenar as respostas de cada pergunta.
* Campos:

  * `melhor` (JSON) para armazenar os valores dos checkboxes.
  * Respostas das perguntas técnicas (`q1`, `q2`, etc.).
  * Respostas das perguntas pessoais (`continuar`, `faculdade`, `curso`, `parar`).
  * Data de envio: Para registrar quando a resposta foi submetida.

Criação do Banco de Dados**

O código SQL cria o banco de dados e a tabela onde as respostas serão armazenadas. O tipo `JSON` é utilizado para armazenar múltiplas respostas de um único campo (ex.: quem foi o melhor).

```sql
CREATE TABLE respostas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    melhor JSON,
    q1 VARCHAR(50),
    q2 VARCHAR(50),
    q3 VARCHAR(50),
    q4 VARCHAR(50),
    q5 VARCHAR(50),
    continuar VARCHAR(10),
    faculdade VARCHAR(10),
    curso VARCHAR(10),
    parar VARCHAR(10),
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

6. Conclusão e Melhorias

O site está bem estruturado e pode ser facilmente expandido com mais páginas ou funcionalidades. Algumas melhorias que poderiam ser feitas incluem:

* Validação de Formulário: Verificar se o formulário foi preenchido corretamente antes do envio.
* Feedback visual após o envio do formulário (por exemplo, mostrar uma tela de "Obrigado por participar" ou redirecionar para uma página de resultados).
* Armazenamento seguro: Considerar o uso de uma camada de segurança, como `prepared statements` no PHP, para prevenir ataques de SQL Injection.


