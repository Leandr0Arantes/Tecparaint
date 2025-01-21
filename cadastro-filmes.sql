-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/01/2025 às 14:55
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro-filmes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text DEFAULT NULL,
  `genero_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `descricao`, `imagem`, `genero_id`, `status`) VALUES
(1, 'Inception', 'Um ladrão especializado em extrair segredos corporativos por meio de sonhos precisa realizar o inverso: plantar uma ideia na mente de um CEO.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS-1t6PkPosP80FBAsRzIM_SuZGdcY6svaMfWP8X9BdiqNUvyQ8', 7, 1),
(2, 'The Dark Knight', 'Batman enfrenta o Coringa, um vilão psicopata que deseja espalhar o caos em Gotham.', 'https://m.media-amazon.com/images/S/pv-target-images/e9a43e647b2ca70e75a3c0af046c4dfdcd712380889779cbdc2c57d94ab63902.jpg', 1, 1),
(3, 'The Matrix', 'Um hacker descobre que o mundo em que vive é uma simulação criada por máquinas para controlar a humanidade.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQwLB63Bm8WaqqWPmYLi9_wEXXt47qq1UZBSzw05b9NrXlQyN-O', 6, 1),
(4, 'The Shawshank Redemption', 'Um homem injustamente condenado pela morte de sua esposa cria uma amizade com outro prisioneiro ao longo dos anos na prisão de Shawshank.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ3STb1Mb90NjZhOJwrSGKhgsiHZtxoSrR11RIY4N5-Q28HdsHT', 1, 1),
(5, 'Fight Club', 'Um homem entediado com a vida cria um clube secreto de luta como uma forma de escapar de sua rotina cotidiana.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQniWEvNpxLnjT2IgQ9Q7WrmPwlyRVqTg12aKPezb612FsrtJzg', 3, 1),
(6, 'The Godfather', 'A história da poderosa família mafiosa Corleone e os dilemas de Michael Corleone para assumir os negócios da família.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSBpoI6n7XA2qtOch9OJceK6jnkiiivSmCy6ciEGF4W8137SSY5', 3, 1),
(7, 'Forrest Gump', 'A vida extraordinária de um homem simples que, sem querer, se envolve em vários momentos históricos dos EUA.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTFEXK7nOeOlpnsn9IxrdUc1Z53qnHLkE7kPAkhyCTf0mwJ8beF', 3, 1),
(8, 'Gladiator', 'Maximus, um general romano, busca vingança contra o imperador que assassinou sua família e destruiu sua vida.', 'https://upload.wikimedia.org/wikipedia/pt/4/44/GladiadorPoster.jpg', 3, 1),
(9, 'Pulp Fiction', 'Três histórias entrelaçadas que exploram o mundo do crime, envolvendo criminosos, gangsters e outros personagens inesquecíveis.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgdnAx4RcqdeSRes2ziir-xst2CwO0G99WDZHHTe1a3bQzlsxw', 6, 1),
(10, 'Interstellar', 'Um grupo de astronautas viaja por um buraco de minhoca em busca de um novo lar para a humanidade.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRm2leyMGMJ84bXC4xcNE3nhwuFw__agAGieUDxrkA8qSLNAfh5', 7, 1),
(11, 'The Lion King', 'O jovem leão Simba é exilado após a morte de seu pai, mas retorna para recuperar seu lugar como rei da savana.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSx7NafhyWHuPCm59_KZR056kyHZC2ZICar9kU5wMcmMB7EWpdt', 2, 1),
(12, 'Star Wars: A New Hope', 'Luke Skywalker une forças com Han Solo e a Princesa Leia para derrotar o Império Galáctico e salvar a galáxia.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgDnDH4nBpREQqcfIgSAuZQ1n4N31hGZo-Dn2jZH3pga-xuo0q', 3, 1),
(13, 'Avengers: Endgame', 'Os Vingadores tentam reverter os danos causados por Thanos, o vilão que eliminou metade da população do universo.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMwtU95JygcmCq4e3XPpL9W0ATjGFoQCQm16dbpIp7BM36B7lH', NULL, 1),
(14, 'The Silence of the Lambs', 'Uma jovem agente do FBI pede ajuda a um psicopata encarcerado, Hannibal Lecter, para capturar um serial killer.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQxtXKG_lILiu_lLeN22oWvqC7V5WzuULu0MwufcTgxXw01GRQM', 2, 1),
(15, 'The Avengers', 'Os heróis mais poderosos da Terra se reúnem para enfrentar uma ameaça global representada por Loki e seus aliados alienígenas.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQmkXsIZ89RVeyZkI_v3cLLB4MFd-KlVNXub-M16petJKffpZiw', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `generos`
--

CREATE TABLE `generos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `generos`
--

INSERT INTO `generos` (`id`, `categoria`, `status`) VALUES
(1, 'Ação', 1),
(2, 'Terror', 1),
(3, 'Drama', 1),
(6, 'Suspense', 1),
(7, 'Ficção Cientifíca', 1),
(8, 'Comédia', 1),
(10, 'Fantasia', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `administrador` tinyint(1) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `nome`, `senha`, `administrador`, `foto`, `status`) VALUES
('306.986.480-56', 'Julsisd', '232323DSDbd@', 0, NULL, 1),
('485.692.208-47', 'Leandro Henrique Arantes', '78An324c$', 1, NULL, 1),
('495.999.240-96', 'Julia', 'Bomdia0982#', 0, NULL, 1),
('681.777.420-94', 'Sofia', 'Bomdia123@@', 1, NULL, 1),
('866.320.110-98', 'Heitor2', 'Bomdia123@@', 0, NULL, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_filmes_generos` (`genero_id`);

--
-- Índices de tabela `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `generos`
--
ALTER TABLE `generos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `filmes`
--
ALTER TABLE `filmes`
  ADD CONSTRAINT `fk_filmes_generos` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
