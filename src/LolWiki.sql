-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-02-2022 a las 09:27:24
-- Versión del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `LolWiki`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220201091714', '2022-02-01 10:17:27', 7531),
('DoctrineMigrations\\Version20220201092944', '2022-02-01 10:29:53', 6421),
('DoctrineMigrations\\Version20220201093353', '2022-02-01 10:33:58', 1432),
('DoctrineMigrations\\Version20220202081723', '2022-02-02 09:17:37', 3492),
('DoctrineMigrations\\Version20220209085901', '2022-02-09 09:59:14', 2567),
('DoctrineMigrations\\Version20220211101909', '2022-02-11 11:19:31', 7115),
('DoctrineMigrations\\Version20220211105848', '2022-02-11 11:58:59', 2693);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int NOT NULL,
  `region_id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daño` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `region_id`, `nombre`, `daño`, `rol`, `imagen`, `descripcion`) VALUES
(1, 1, 'Garen', 'AD', 'TOP', '/media/garen.jpg', 'Garen, un orgulloso y noble guerrero, lucha a la cabeza de la Vanguardia Valerosa. Es popular entre sus compañeros y tiene el respeto de sus enemigos; no podría esperarse menos de un descendiente de la prestigiosa familia Guardia de la Corona, encargada de defender a Demacia y a sus ideales.'),
(2, 2, 'Darius', 'AD', 'TOP', '/media/darius.jpg', 'No hay símbolo más grande del poder noxiano que Darius, el líder más temido y endurecido por las batallas. Desde sus orígenes humildes hasta convertirse en la Mano de Noxus, Darius se encarga de los enemigos del imperio, aunque muchos de ellos sean noxianos.'),
(3, 3, 'Irelia', 'AD', 'MID', '/media/irelia.jpg', 'La invasión de Jonia a manos de Noxus produjo muchos héroes, pero ninguno fue tan improbable como la joven Irelia de Navori. Entrenada en las ancestrales danzas de su región, adaptó su arte para la guerra y ahora usa sus movimientos refinados y llenos de gracia para controlar un arsenal de cuchillas letales.'),
(4, 4, 'Sejuani', 'AP', 'JUNGLE', '/media/sejuani.webp', 'Sejuani es la brutal e implacable Matriarca de la Garra Invernal, una de las tribus más temibles del Fréljord. La supervivencia de su gente es una constante y desesperada batalla contra los elementos, lo que los obliga a invadir a noxianos, demacianos y avarosanos por igual para sobrevivir a los duros inviernos.'),
(5, 1, 'Galio', 'AP', 'SUPP', '/media/galio.jpg', 'En las afueras de la resplandeciente ciudad de Demacia, el coloso de piedra Galio se mantiene en guardia constante. Construido como un baluarte contra los magos enemigos, se mantiene inmóvil durante décadas hasta que la presencia de magia poderosa lo despierta.'),
(6, 2, 'Draven', 'AD', 'ADC', '/media/draven.jpg', 'En Noxus, algunos guerreros se enfrentan unos a otros en arenas donde la sangre corre y la fuerza se pone a prueba, pero nadie ha sido tan celebrado como Draven. Este antiguo soldado encontró que el público apreciaba en realidad su habilidad para lo dramático, sin mencionar los chorros de sangre que emergían de cada una de sus Hachas Giratorias Hachas Giratorias.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

CREATE TABLE `regiones` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`id`, `nombre`, `descripcion`, `imagen`, `video`) VALUES
(1, 'Demacia', 'Demacia es un reino poderoso y honesto con una prestigiosa historia militar, y su gente siempre ha valorado profundamente los ideales de justicia, honor y deber.\r\n', '/media/demacia.webp', 'https://www.youtube.com/embed/ik8LZIELwnk'),
(2, 'Noxus', 'Noxus es un poderoso imperio con una reputación aterradora. Para quienes no se encuentran en el interior de sus fronteras, Noxus es una civilización amenazante cuya expansión no se detiene.', '/media/noxus.jpg', 'https://www.youtube.com/embed/Q8UhMETbrB4'),
(3, 'Jonia', 'El equilibrio es una de las piedras angulares de la cultura en Jonia, por lo que los límites que separan el mundo material del espiritual son aquí más difusos que en el resto de Runaterra, especialmente en las profundidades de sus bosques y lo alto de sus cumbres.', '/media/jonia.webp', 'https://www.youtube.com/embed/etSpW7rVSZ4'),
(4, 'Freljord', 'Freljord es un lugar duro e implacable en el que la gente nace lista para luchar por la supervivencia contra todo pronóstico. Las tribus de Freljord hacen gala de un orgullo y una independencia feroces, aunque sus vecinos de Valoran suelen considerarlos salvajes, brutos e incluso primitivos, dado que desconocen las tradiciones ancestrales que los moldearon.', '/media/freljord.jpg', 'https://www.youtube.com/embed/NlDffHAVNIg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'raimon@gmail.com', '[]', '$2y$13$I0FOKX1epVoBXECTJIRhaenLSIo1cXlXef9C4p6KvItHdcv5JhSQC'),
(2, 'raimonbn@gmail.com', '[]', '$2y$13$GHNCFdBr7kBU8XwuFvKndei2l/jigyFNBSvieqcQHj9mMIv2e2u0.'),
(3, 'rai@gmail.com', '[]', '$2y$13$0LEMFo2/njZUziXGWkX3vu7GkFWI5PF90SvEm4efXrN.RESuXL7ea');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F83E600998260155` (`region_id`);

--
-- Indices de la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `regiones`
--
ALTER TABLE `regiones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD CONSTRAINT `FK_F83E600998260155` FOREIGN KEY (`region_id`) REFERENCES `regiones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
