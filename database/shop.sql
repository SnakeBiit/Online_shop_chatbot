-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 01:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `asset_id` int(11) NOT NULL,
  `asset_title` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `asset_para1` text COLLATE utf8_romanian_ci NOT NULL,
  `asset_para2` text COLLATE utf8_romanian_ci NOT NULL,
  `asset_id_page` int(11) NOT NULL,
  `asset_tags` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `asset_comment_count` int(11) NOT NULL,
  `asset_status` varchar(255) COLLATE utf8_romanian_ci NOT NULL DEFAULT 'denied',
  `asset_image` text COLLATE utf8_romanian_ci NOT NULL,
  `asset_price` int(11) DEFAULT NULL,
  `asset_description` text COLLATE utf8_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`asset_id`, `asset_title`, `asset_para1`, `asset_para2`, `asset_id_page`, `asset_tags`, `asset_comment_count`, `asset_status`, `asset_image`, `asset_price`, `asset_description`) VALUES
(1, 'Fantasy Heroes', 'Character Editor you will be able to create amazing human characters for your mobile games.\r\nCreate role playing games, arcades, platformers, quests and even strategies! This package contains full sprite collection, \r\ncharacter editor and all general animations.', 'Create and customize human characters, Change body parts and equipment, Basic sprite collection, Full sprite collection, \r\nCreate and customize human characters, Change body parts and equipment, Change body parts color, Mix armor parts [PRO only],\r\nFace expressions, Upper and lower body animation\r\n', 1, 'fantasy, heroes, human, characters, body parts, Character Editor', 0, 'acc', 'FantasyHeroes.jpg', 230, ''),
(2, 'Crafting ', 'An extensive and comprehensive pack of 149 crafting animations, setup as a Humanoid so you can easily \r\nswap in your own character in, with full 5 finger hands to accommodate high detail models.', 'The crafting actions in the pack include hammering, chopping, digging, fishing, sawing, eating/drinking, gathering, \r\ncarrying, sitting, harvesting, climbing, pushing, pulling...with more added upon request. Also includes low poly tool models.', 2, 'crafting, animations, crafting animations, Humanoid, crafting actions, fishing', 0, 'acc', 'crafting.jpg', 120, ''),
(3, 'FurryS2:Archer', 'Characters are designed for RPG games with separate parts for you to choose the character you like and some characters are grafted.\r\nThere are many pieces of characters separated for you to choose', 'Characters work best in Unity version 2019.4.5 and HDRP mode, How to create more Prefabs by yourself, You should open Overview \r\nscene to find out features of character package, You need create new High Definition Render Pipeline project template on Unity HUB \r\nthen import character to avoid get shader errors\r\n', 3, 'archer, furrys2, ', 0, 'acc', 'archer.jpg', 174, ''),
(4, 'RPG UI', 'This asset includes 19 premade menus and a complete kit to make your own custom menu.', '368 buttons, 45 Unique Icons, 2 different style of icon button, 2 different style of text button, 4 colours for each button ,Normal, \r\nSelected, and Highlighted states for each button, 60 Cute Icons, 2 Menu Styles, Menu Borders, 4 Menu Colours, Slider Bars\r\n', 4, 'rpg, ui, rpg ui', 0, 'acc', 'rpggui.jpg', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `tool_id` int(10) NOT NULL,
  `tool_title` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `tool_para1` text COLLATE utf8_romanian_ci NOT NULL,
  `tool_para2` text COLLATE utf8_romanian_ci NOT NULL,
  `tool_id_page` int(10) NOT NULL,
  `tool_tags` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `tool_comment_count` int(3) NOT NULL,
  `tool_status` varchar(255) COLLATE utf8_romanian_ci NOT NULL DEFAULT 'denied',
  `tool_image` text COLLATE utf8_romanian_ci NOT NULL,
  `tool_price` int(10) NOT NULL,
  `tool_description` text COLLATE utf8_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`tool_id`, `tool_title`, `tool_para1`, `tool_para2`, `tool_id_page`, `tool_tags`, `tool_comment_count`, `tool_status`, `tool_image`, `tool_price`, `tool_description`) VALUES
(5, 'Behavior Designer ', 'Behavior trees are used by AAA studios to create a lifelike AI. With Opsive s Behavior Designer, you can bring the power of behaviour trees to Unity!\r\nBehavior Designer is a behaviour tree implementation designed for everyone - programmers, artists, designers.', 'An intuitive visual editor, A powerful API, Visual runtime debugger, Variables to communicate between tasks, Conditional Aborts,\r\nBuilt in event system, Use existing code with reflection tasks, Hundreds of tasks, Evaluate tasks using Utility Theory', 5, 'behavior, designer,  behaviour designer AI, ', 0, 'acc', 'behaviortrees.jpg', 499, ''),
(6, 'Script Inspector 3', 'Si3 is an advanced IDE (a Code Editor) for scripts, shaders, and text assets, seamlessly integrated inside the Unity Editor.\r\nSi3 comes with context sensitive auto-completion for C# scripts and a rich set of additional tools, key bindings and mouse handling.', 'Si3 features a custom made advanced C# parsing and code analysis engine! Thanks to its novel approach to code analysis \r\n(a hybrid of .Net s Reflection and incremental syntactic and semantic analysis techniques) Si3 can easily outperform any other IDE', 6, 'script, inspector, script inspector 3, IDE, scripts', 0, 'acc', 'scriptinspector.jpg', 379, ''),
(7, 'Terrain To Mesh', 'Tool for converting Terrain to mesh. Includes shaders for blending 2 to 8 textures. Shaders support mobile (Unlit and One Directional Light), \r\nLegacy and PBR shading models.\r\n', 'Ultra fast converter, Vertex count control, Chunking system, Splatmaps exporter, Basemap exporter (diffuse and bump) , Heightmap exporter.\r\nTree exporter, OBJ file exporter, All above works in editor and run-time.', 7, 'terrain, mesh, terraintomesh, ', 0, 'acc', 'terrain.jpg', 59, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `user_firstname` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `user_image` text COLLATE utf8_romanian_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8_romanian_ci NOT NULL,
  `randSalt` varchar(255) COLLATE utf8_romanian_ci NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_romanian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`, `budget`) VALUES
(1, 'radus', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Radu', 'Sarpe', 'radu97_stefan@yahoo.com', '', 'admin', '$2y$10$iusesomecrazystrings22', 400),
(20, 'edwins', '$2y$10$iusesomecrazystrings2ui1qr860E30b0c9ijNqwCSwHnHdgz.1K', 'Edwin', 'Diaz', 'edwin@gmail.com', '', 'user', '$2y$10$iusesomecrazystrings22', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`tool_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
