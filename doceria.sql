-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/09/2025 às 13:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `doceria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `categoriaID` int(30) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `url` varchar(225) NOT NULL,
  `descricao` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`categoriaID`, `nome`, `url`, `descricao`) VALUES
(1, 'Bolos', 'https://delicious.com.br/wp-content/uploads/2021/03/WhatsApp-Image-2021-09-10-at-14.58.50-1-1.jpeg', 'Massas fofinhas, recheios cremosos e coberturas irresistíveis.'),
(2, 'Tortas', 'https://revistadeguste.com/wp-content/uploads/2020/04/DAGUIAABR20_6.jpg', 'Crocrância e cremosidade em combinações únicas de frutas e chocolates.'),
(3, 'Bebidas', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa4-8EXI-Eu9QuKeT1kkE3uWq8xtD1DADtQw&s', 'Cafés, sucos e outras bebidas perfeitas para acompanhar nossos doces.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `produtoID` int(30) NOT NULL,
  `nome` varchar(225) NOT NULL,
  `descricao` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL,
  `categoriaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`produtoID`, `nome`, `descricao`, `url`, `categoriaID`) VALUES
(1, 'Bolo de Chocolate', 'Feito com massa fofinha e úmida, nosso bolo de chocolate é preparado com cacau de qualidade e recheado com um creme cremoso que derrete na boca. Finalizado com uma cobertura generosa de ganache artesanal, ele é perfeito para ', 'https://delicious.com.br/wp-content/uploads/2020/11/bolo-mousse-de-chocolate-2020.png', 1),
(2, 'Bolo de Morango', 'Delicada massa fofinha recheada com creme leve e pedaços de morango fresco, finalizada com chantilly suave e uma cobertura irresistível de morangos selecionados. Um bolo leve, refrescante e cheio de sabor, feito para conquist', 'https://doceriaamorosa.com/wp-content/uploads/2018/01/Site-Amorosa-41.jpg', 1),
(3, 'Bolo de Limão', 'Massa macia, toque cítrico e cobertura cremosa de limão.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSoRLIvUHRAZHzTs1K8EQRQpV0CExoKsqrgg&s', 1),
(4, 'Torta de Limão', 'Massa crocante com recheio cremoso de limão fresco e cobertura suave de merengue. Um equilíbrio perfeito entre doçura e acidez que derrete na boca.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVcprtBfsgHPOiPA-hcaD028Tz2qnYvrpoVA&s', 2),
(5, 'Torta de Morango', 'Massa crocante, recheio cremoso e morangos fresquinhos por cima. Uma sobremesa leve, colorida e irresistível!', 'https://guiadacozinha.com.br/wp-content/uploads/2019/10/torta-morango-chocolate-branco-768x619.jpg', 2),
(6, 'Torta de Chocolate', 'Massa crocante, recheio cremoso de chocolate e cobertura de coco ralado. Uma combinação irresistível de sabores e texturas!', 'https://guiadacozinha.com.br/wp-content/uploads/2019/10/Torta-de-chocolate-com-coco.jpg', 2),
(7, 'Chocolate Quente', 'Bebida cremosa e deliciosa, feita com chocolate de qualidade, perfeita para qualquer hora do dia.', 'https://www.oitedi.com.br/_next/image?url=https%3A%2F%2Ftedi-production.s3.amazonaws.com%2Fcooking_recipes%2Ffood_description%2Fecd0a301d28141444852895a784bf5759d3cd8e7.png&w=1080&q=70', 3),
(8, 'Café', 'Bebida quente e aromática, preparada com grãos selecionados, perfeita para acompanhar seus doces ou começar o dia com energia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/A_small_cup_of_coffee.JPG/1200px-A_small_cup_of_coffee.JPG', 3),
(9, 'Suco de Laranja Natural', 'Refrescante e cheio de sabor, feito com laranjas frescas espremidas na hora, perfeito para acompanhar qualquer doce.', 'https://veja.abril.com.br/wp-content/uploads/2024/02/suco-laranja.jpg?crop=1&resize=1212,909', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoriaID`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produtoID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoriaID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produtoID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
