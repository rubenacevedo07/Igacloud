-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-04-2017 a las 11:24:33
-- Versión del servidor: 5.6.27
-- Versión de PHP: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rioweb13_benefit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercadocategories`
--

CREATE TABLE IF NOT EXISTS `mercadocategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercados`
--

CREATE TABLE IF NOT EXISTS `mercados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mercado` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `domicilio` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_web` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mercadocategory_id` int(10) unsigned DEFAULT NULL,
  `latitud` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitud` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horarios` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localidad` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(7000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_youtube` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mercados_id_unique` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `mercados`
--

INSERT INTO `mercados` (`id`, `mercado`, `domicilio`, `logo`, `url_web`, `url_facebook`, `categoria`, `mercadocategory_id`, `latitud`, `longitud`, `telefono`, `email`, `horarios`, `localidad`, `provincia`, `descripcion`, `url_youtube`, `imagen`, `visible`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ferreteria', 'San Luis 1515', '1489529915logo.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '42342342', NULL, NULL, 'Rosario', 'Santa Fe', NULL, NULL, '1489543076.jpg', 1, NULL, NULL, NULL),
(2, 'Tienda Ropa', 'Salta 1411', 'defaultlogo.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '234234234', NULL, NULL, 'Rosario', 'Santa Fe', NULL, NULL, 'defaultmarketimage.jpg', 1, NULL, NULL, NULL),
(3, 'Anamkara', '3 de Febrero 2077, Rosario, Santa Fe, Argentina', '1490232859logo.jpg', NULL, NULL, NULL, NULL, '-32.95046', '-60.65326', NULL, NULL, NULL, NULL, NULL, '<p><span style="color:#1d2129;font-family:Helvetica, Arial, sans-serif;">“Anam-kara”, es un lugar para tu bienestar y armonía en donde podes desarrollar todos tus potenciales.</span><br /><span style="color:#1d2129;font-family:Helvetica, Arial, sans-serif;">El nombre surge de la concepción celta de la amistad donde encuentra su inspi­ración y plenitud en la sublime idea del “Anam-kara”. Anam es la palabra gaélica que significa “alma” y kara es “amigo”, de manera que “Anam-kara” significa “Alma gemela, amigo es­piritual e íntimo”.</span><br /><span style="color:#1d2129;font-family:Helvetica, Arial, sans-serif;">“Anam kara” era una</span><span style="font-family:Helvetica, Arial, sans-serif;color:#1d2129;"> persona a quien uno podía revelar las intimidades ocultas de la vida y esta amis­tad era un acto de reconocimiento y pertenencia. Cuando se tenía un “Anam-kara”, esa amistad trascendía todas las convenciones y categorías.<br />Los amigos espirituales estaban unidos de una manera antigua y eterna, donde la idea central es aquí el reconocimiento y el despertar de la antigua comunión que hace de los dos amigos uno, puesto que el nacimiento del corazón humano es un proceso en curso, el amor es nacimiento continuo de creati­vidad en, y entre nosotros.<br />Cuando una amistad se reconoce como un don, permanecerá abierta a su propio terreno de bendición. La tradición celta posee una hermosa concepción del amor y la amistad. Una de sus ideas fascinantes es la del amor del alma, que en gaélico antiguo (celta) es “Anam-kara”. De manera que “Anam-kara” en el mundo celta es el «amigo espiritual».<br />En la comunidad celta primitiva se llamaba “Anam-kara” a un maestro, compañero o guía espiritual. Al principio era un confesor a quien uno revelaba lo más íntimo y oculto de su vida, al “Anam-kara” se le podía revelar el yo interior, la mente y el co­razón, donde esta amistad era un acto de reconocimiento y arrai­go.<br />Cuando uno tenía un “Anam-kara”, esa amistad trascen­día las convenciones, la moral y las categorías. Uno estaba unido de manera antigua y eterna con el amigo espiritual. Esta concepción celta no imponía al alma limitaciones de espacio ni tiempo. El alma no conoce jaulas. Es una luz divina que penetra en ti y en el otro. Este nexo despertaba y fomenta­ba una camaradería profunda y especial, este vínculo entre amigos es indisolu­ble, lo que no puede romper ningún azar, lo que no puede cortar ni destruir ninguna porción de tiem­po o de espacio, ni siquiera la muerte puede dividirlo.<br />En la vida todos tienen necesidad de un “Anam-kara”, un “amigo espiritual”. En este amor eres comprendido tal como eres, sin máscaras ni pretensiones. El amor permite que nazca la comprensión, y ésta es un tesoro invalorable. Allí donde te comprenden está tu casa. La comprensión nutre la pertenencia y el arraigo. Sentirte comprendido es sentirte libre para proyectar tu yo sobre la confianza y protección del alma del otro.<br />En toda la espiritualidad celta hay un hermoso motivo, “Mi fortaleza es, que vengan y rodeen mi casa y mi fogón”, e inspirados en este texto nace como objetivo el brindar conocimiento de distintas disciplinas como también desarrollar todas aquellas actividades que contribuyan al bienestar del cuerpo, de la mente y del alma. En la tarea de capacitar a las personas que se acercan para formarse de manera profesional o para si mismas, se busca siempre mantener la excelencia de las enseñanzas, en disciplinas como Reiki, Feng Shui, Terapia de Energía Integrada, Reflexología, Neuroalquimia, Numerología, La Tecnología del Yo Soy, Sistema de Sanación Vibracional, Iluminación y Automaestría, Lectura Científica del Aura…entre otras.<br />“Anam-kara” se establece en la ciudad de Villa Gobernador Gálvez, desde el 7 de Marzo de 2006, luego en el año 2013 traslada su sede a la ciudad de Rosario a Calle 3 de Febrero 2077.<br />“Anam-kara” tiene siempre las puertas abiertas a todas las personas que deseen encaminar sus vidas en la dirección de lograr un estado de bienestar y plenitud, obteniendo armonía y prosperidad, en base a las actividades que hacen bien al Alma, Cuerpo y Mente del ser humano.<br />“Anam-kara” viene a cumplir la misión de ayudar a estar mejor y despertar el Maestro que tenemos todos en nuestro interior, su disciplina principal es el Reiki en todos sus niveles y sistemas, brindando cursos de entrenamiento, capacitación durante todo el año, además sesiones de armonización.<br />Roxy Tassone &amp; Marcelo Deninotti</span></p>', NULL, '1490232859.jpg', 1, NULL, '2017-03-23 04:24:41', '2017-03-23 04:34:19'),
(6, 'Centro Holistico Anam-Kara- Esc. de Reiki', '3 de Febrero 2077, Rosario, Santa Fe, Argentina', ' ', NULL, NULL, NULL, NULL, '-32.95046', '-60.65326', NULL, '-', NULL, NULL, NULL, '', NULL, ' ', 0, NULL, '2017-04-13 00:37:57', '2017-04-13 00:37:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercado_producto`
--

CREATE TABLE IF NOT EXISTS `mercado_producto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mercado_id` int(10) unsigned NOT NULL,
  `producto_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mercado_producto_mercado_id_foreign` (`mercado_id`),
  KEY `mercado_producto_producto_id_foreign` (`producto_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_05_10_130540_create_permission_tables', 1),
(4, '2017_01_07_124413_create_mercados_table', 1),
(5, '2017_01_10_045259_create_mercadocategories_table', 1),
(6, '2017_01_10_085546_create_productos_table', 1),
(7, '2017_01_15_041201_create_mercado_producto_table', 1),
(8, '2017_03_12_213109_create_notices_table', 1),
(9, '2017_03_15_193848_create_pushes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(10) unsigned DEFAULT NULL,
  `mercado_id` int(10) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notices_mercado_id_foreign` (`mercado_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `notices`
--

INSERT INTO `notices` (`id`, `title`, `body`, `featured_image`, `link`, `video`, `published`, `visible`, `category_id`, `mercado_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 'Prueba 1', '<p><span style="color:#666666;font-family:Verdana, Geneva, sans-serif;font-size:10px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. </span></p>', '1492033143.png', NULL, NULL, 1, 1, NULL, 6, NULL, '2017-04-13 00:39:03', '2017-04-13 00:39:03'),
(3, 'Taller Teórico práctico Abundancia ', '<p><span style="text-decoration:underline;"><strong><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;text-decoration:underline;">Taller Teórico practico Abundancia </span></strong></span>\n</p>\n\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Domingo 19 de Marzo 10:00 hs a 18:00 hs </span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Facilitador: Christian Oliva "Escuela las 4 Sendas"</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Informes e Inscripción:  341 4254515  -  341 5938171. </span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Dirección 3 de Febrero 2077 info@anamkaraamigosdelalma.com</span></p>\n<p> </p>\n<p><em><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">TALLER DE ABUNDANCIA TEORICO Y PRACTICO</span></em></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">DOMINGO 19 DE 10 A 18 HS</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">La Abundancia no es solo, tener el suficiente dinero que precisamos para vivir plenamente nuestras vidas satisfaciendo nuestras necesidades físicas, mentales, emocionales y espirituales; la Abundancia también se ve en el Amor, en los vínculos y relaciones, los pensamientos, etc. La Abundancia es más que un estado, es una forma de vida. Para lograr la Abundancia en nuestra vida, debemos volvernos conscientes de quienes somos nosotros y de los bloqueos, de las creencias y mandatos personales y de nuestro árbol, que nos alejan de nuestro verdadero yo; para reconocerlos, aceptarlos, integrarlos y trascenderlos. La Abundancia debe ser manifestada para que se transforme en un verdadero poder personal. Para ello es de vital importancia, tomar consciencia e ir sanando, programando, recalibrando y soltando nuestro pasado para entrar frescos y renovados a nuestro presente, para crear nuestro mejor futuro.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">No te quejes de lo que no SOS. </span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Se lo que quieres conscientemente.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">TEMARIO A TRABAJAR</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Que es la Abundancia y como llegamos a ella.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- El Modelo de Precisión – herramienta que nos permite enfocarnos con precisión y claridad</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- El concepto del inconsciente y como opera en nosotros y nuestra abundancia – los bloqueos</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">a. El inconsciente – los acuerdos</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">b. Proyecto sentido – concepto de y como afecta</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">c. El árbol genealógico – el impacto del clan en mi vida y mi abundancia</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">d. El Estrés y la Incoherencia Cuántica</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Los Cristales de observación de la Realidad</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Revisión del vínculo con el dinero</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- El Deseo</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- La energía del dinero</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Las leyes de la Abundancia – el secreto revelado de manera práctica</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Durante todo el taller realizaremos prácticas y veremos el aspecto práctico de los conceptos aprendidos.</span></p>', ' ', NULL, NULL, 1, 1, NULL, 3, '2017-03-23 04:50:08', '2017-03-23 04:41:52', '2017-03-23 04:50:08'),
(4, 'Taller Teórico práctico Abundancia ', '<p><span style="text-decoration:underline;"><strong><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;text-decoration:underline;">Taller Teórico practico Abundancia </span></strong></span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Domingo 19 de Marzo 10:00 hs a 18:00 hs </span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Facilitador: Christian Oliva "Escuela las 4 Sendas"</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Informes e Inscripción:  341 4254515  -  341 5938171. </span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Dirección 3 de Febrero 2077 info@anamkaraamigosdelalma.com</span></p>\n<p> </p>\n<p><em><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">TALLER DE ABUNDANCIA TEORICO Y PRACTICO</span></em></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">DOMINGO 19 DE 10 A 18 HS</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">La Abundancia no es solo, tener el suficiente dinero que precisamos para vivir plenamente nuestras vidas satisfaciendo nuestras necesidades físicas, mentales, emocionales y espirituales; la Abundancia también se ve en el Amor, en los vínculos y relaciones, los pensamientos, etc. La Abundancia es más que un estado, es una forma de vida. Para lograr la Abundancia en nuestra vida, debemos volvernos conscientes de quienes somos nosotros y de los bloqueos, de las creencias y mandatos personales y de nuestro árbol, que nos alejan de nuestro verdadero yo; para reconocerlos, aceptarlos, integrarlos y trascenderlos. La Abundancia debe ser manifestada para que se transforme en un verdadero poder personal. Para ello es de vital importancia, tomar consciencia e ir sanando, programando, recalibrando y soltando nuestro pasado para entrar frescos y renovados a nuestro presente, para crear nuestro mejor futuro.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">No te quejes de lo que no SOS. </span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">Se lo que quieres conscientemente.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">TEMARIO A TRABAJAR</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Que es la Abundancia y como llegamos a ella.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- El Modelo de Precisión – herramienta que nos permite enfocarnos con precisión y claridad</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- El concepto del inconsciente y como opera en nosotros y nuestra abundancia – los bloqueos</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">a. El inconsciente – los acuerdos</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">b. Proyecto sentido – concepto de y como afecta</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">c. El árbol genealógico – el impacto del clan en mi vida y mi abundancia</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">d. El Estrés y la Incoherencia Cuántica</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Los Cristales de observación de la Realidad</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Revisión del vínculo con el dinero</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- El Deseo</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- La energía del dinero</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Las leyes de la Abundancia – el secreto revelado de manera práctica</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Durante todo el taller realizaremos prácticas y veremos el aspecto práctico de los conceptos aprendidos.</span></p>', '1490233783.png', NULL, NULL, 1, 1, NULL, 3, NULL, '2017-03-23 04:49:43', '2017-03-23 04:49:43'),
(5, 'Taller Vivencial  "Los 5 Acuerdos de Sabiduría Tolteca en la Vida Moderna”', '<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;"><span style="text-decoration:underline;"><strong>Taller Vivencial</strong></span> </span></p>\n<p><em><strong><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">"Los 5 Acuerdos de Sabiduría Tolteca en la Vida Moderna”</span></strong></em></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">- Viernes 31 de Marzo 19:00Hs</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-Reserva con anticipación y obtén un beneficio extra (y)</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-Informes e Inscripción -341 4254515 -341 5938171. </span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-Dirección 3 de Febrero 2077 Rosario </span></p>\n<p> </p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-<em>En este taller vivencial, aprenderemos a:</em></span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-Reconocer las limitaciones que has incorporado desde niño, y que como adulto las sostienes la mayor parte de las veces.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-Reconocer a quien has entregado TÚ poder personal, para poder establecer estrategias para recuperarlo.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-Reconocer los acuerdos que has establecido en tu vida, deshacerte de los que te hacen daño y sostener aquellos que corresponden a tu verdadera esencia.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-Vivir los 5 acuerdos de sabiduría tolteca, comprendiendo que ser feliz y libre de sufrimientos es posible.</span></p>\n<p><span style="color:#365899;font-family:Helvetica, Arial, sans-serif;">-Facilitadora: Vanesa Contreras Funes</span></p>', '1490556616.jpg', NULL, NULL, 1, 1, NULL, 3, NULL, '2017-03-23 04:53:08', '2017-03-26 22:30:16'),
(6, 'Sesiones TRE "Terapia de Respuesta Espiritual"', '<p><span style="text-decoration:underline;"><strong>Sesiones TRE "Terapia de Respuesta Espiritual"</strong></span>\n</p>\n\n<p>-30, 31 de Marzo y 3 de Abril -Medios de Pago </p>\n<p>-Informes e Inscripción -341 4254515 -341 5938171. </p>\n<p>-Dirección 3 de Febrero 2077 Rosario </p>\n<p> </p>\n<p>-La Terapia de Respuesta Espiritual trabaja a nivel energético y no necesitamos ser expertos en temas espirituales para que sus resultados puedan ser evidentes en nuestra vida. </p>\n<p>Esta técnica utiliza un grupo de gráficos que se trabajan con un péndulo y con la ayuda de Yo Superior que representan nuestra divinidad, podemos investigar todas las causas o motivos que están impidiendo la evolución armoniosa del Alma, ya sea por programas generados en otras vidas, eventos de vida presente, energías discordantes, etc. </p>\n<p>- Facilita Vanesa Contreras Funes</p>', '1490234153.jpg', NULL, NULL, 1, 1, NULL, 3, NULL, '2017-03-23 04:55:53', '2017-03-23 04:55:53'),
(7, 'Curso de MagnifiedHealing ', '<p><span style="text-decoration:underline;">Curso de MagnifiedHealing </span>\n</p>\n\n<p> 24, 25 y 26 de Marzo -Medios de Pago </p>\n<p>-Informes e Inscripción -341 4254515 -341 5938171. </p>\n<p>-Dirección 3 de Febrero 2077 Rosario </p>\n<p> </p>\n<p>-El Magnified Healing es una técnica de sanación y armonización energética que se ajusta a las necesidades de la humanidad en estos momentos de su camino a la ascensión. Fue transmitida directamente por una entidad de luz, la Maestra Kwan Yin (Madre Cósmica, Bodhisatva de la Compasión, manifestación femenina del Buda o Maestra Ascendida, según diferentes tradiciones), como un regalo del Altísimo Dios del universo. La técnica fue canalizada en 1992 por las reikistas Giselle King y Kathryn Anderson.</p>\n<p>Esta especialmente diseñada para prepararnos para la ascensión, ayudándonos a sutilizarnos y elevar nuestra vibración en los niveles fisico, emocional, mental, eterico y espiritual, lo que es necesario para acompañar a la tierra misma en su proceso de crear su propio cuerpo de luz.</p>\n<p>-️Facilitadores: Roxy Tassone / Marcelo Deninotti</p>', '1490234295.jpg', NULL, NULL, 1, 1, NULL, 3, NULL, '2017-03-23 04:58:15', '2017-03-23 04:58:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mercado_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `description`, `mercado_id`, `created_at`, `updated_at`) VALUES
(1, 'Down Sunday', 'today sale big', 1, NULL, NULL),
(2, 'Weekend Blue', 'Tonight 50% off !!', 1, NULL, NULL),
(3, 'Day Offer', 'New campaign', 2, NULL, NULL),
(4, 'oferta', 'Big Sale now !! ', 2, NULL, NULL),
(5, 'Anamkara', 'Curso de MagnifiedHealing  - 24, 25 y 26 de Marzo - 3 de Febrero 2077 -  Rosario', 3, '2017-03-23 05:06:20', '2017-03-23 05:12:04'),
(6, 'Sesiones TRE ', '"Terapia de Respuesta Espiritual" - 30, 31 de Marzo y 3 de Abril -', 3, '2017-03-23 05:14:30', '2017-03-30 00:31:47'),
(13, 'prueba 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. ', 6, '2017-04-13 00:41:48', '2017-04-13 00:41:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('waltercejas19@hotmail.com', '$2y$10$qkEkfxEotZyGykVOiINIMOxFbmb5Cazj6L2kw4Y0njJQFqYQTMeN2', '2017-04-05 02:17:08'),
('xdieamd@gmail.com', '$2y$10$Uwnr5xyzvr3grsdkybx.SuU3eamzXImYxivFfWoQZ2tuX1a9qvfTi', '2017-04-08 18:15:47'),
('nicolas@fullservidores.com', '$2y$10$cBjZv.ovQ3ujoS.84hadbeLH3LDNfe9sJj9Ku0ZtwW0MXYU.1v4e6', '2017-03-28 17:10:32'),
('dkdk@sis.com', '$2y$10$p1x8HH9gEAywcM/MZFwmS.o/Np66rDKz1SRpslY75kjHmowoPxPIW', '2017-03-29 20:53:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'edit-business', '2017-03-23 02:38:51', '2017-03-23 02:38:51'),
(2, 'ver-permisos-roles', '2017-03-23 05:15:45', '2017-03-23 05:15:45'),
(3, 'api', '2017-03-23 13:57:32', '2017-03-23 13:57:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_roles`
--

CREATE TABLE IF NOT EXISTS `permission_roles` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_roles_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permission_roles`
--

INSERT INTO `permission_roles` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_users`
--

CREATE TABLE IF NOT EXISTS `permission_users` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `permission_users_permission_id_foreign` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permission_users`
--

INSERT INTO `permission_users` (`user_id`, `permission_id`) VALUES
(87, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `producto` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'owner', NULL, NULL),
(3, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_users`
--

CREATE TABLE IF NOT EXISTS `role_users` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_users_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_users`
--

INSERT INTO `role_users` (`role_id`, `user_id`) VALUES
(1, 14),
(2, 12),
(2, 13),
(2, 68),
(2, 88),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 15),
(3, 17),
(3, 69),
(3, 70),
(3, 71),
(3, 72),
(3, 73),
(3, 74),
(3, 75),
(3, 76),
(3, 77),
(3, 78),
(3, 79),
(3, 80),
(3, 81),
(3, 82),
(3, 83),
(3, 84),
(3, 85),
(3, 86),
(3, 87),
(3, 89);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points` int(10) unsigned NOT NULL DEFAULT '0',
  `image` varchar(400) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mercado_id` int(10) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=90 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `points`, `image`, `password`, `mercado_id`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Gaetano Parisian IV', 'brain39@example.com', 124383, 'default.jpg', '$2y$10$2M81CYxWVtkBBkX4Y13pRu5Zb3xFKDVU.gOLxd3gJaOvHIb0u9S3e', 3, 'vNCIPINgaMGFIofind5NObSC8ZRIIh6Wy4CTrX8xqAUsH97RGOPjz0S9yFVM', NULL, '2017-03-22 08:56:46', '2017-04-13 18:36:45'),
(2, 'Rafaela Denesik', 'elza.collins@example.org', 0, 'default.jpg', '$2y$10$2M81CYxWVtkBBkX4Y13pRu5Zb3xFKDVU.gOLxd3gJaOvHIb0u9S3e', 6, 'j2xI7qtkG6', NULL, '2017-03-22 08:56:46', '2017-03-22 08:56:46'),
(10, 'Zack Cassin', 'destini.ferry@example.org', 0, '1490459184.jpg', '$2y$10$2M81CYxWVtkBBkX4Y13pRu5Zb3xFKDVU.gOLxd3gJaOvHIb0u9S3e', 3, 'JOjmunDkiR', NULL, '2017-03-22 08:56:46', '2017-03-25 19:26:24'),
(11, 'w', 'w@w.com', 0, 'default.jpg', '$2y$10$TpWKmCZ6jcZisVNJx8w5OukOGlWUn8bPUMEK.GPzZHkzd3elzbew2', 1, 'OLvV9I50wm4scRbUOCNBkeudJTkBnbBU0rnetM5HToGexUJHTCs4lJNiHR0m', NULL, '2017-03-22 09:01:17', '2017-03-22 09:01:17'),
(13, 'anamkara', 'admin@anamkara.com', 0, 'default.jpg', '$2y$10$wdCjGUU7u4yKGo8iJKB41ergFuFnL2dWY10us3tgIWeM5dID1XJNy', 3, 'w9eGL8yl8WtLQZdUGrk3uMiJdBDcMbuvsbvSl4y4k1LQVpvwa6HmbR5wTBTq', NULL, '2017-03-23 04:10:36', '2017-04-13 00:37:57'),
(14, 'admin', 'admin@admin.com', 0, 'default.jpg', '$2y$10$gd6VEI.3E8SnCuJiMxeSUOqlseWjLFLDBIc.Z08AqgQZIS4rTXPvi', 2, 'kkt5ZyUf8kBQcvfmZLi7SrtmnXvmA1tOyN4XGKHveUbAvhyyM5Wf8lqeSRVA', NULL, '2017-03-23 05:15:19', '2017-03-23 05:15:19'),
(15, 'cliente', 'cliente@cliente.com', 0, 'default.jpg', '$2y$10$KPjFBDKg9G8wrzOcdYx3wOq.RrYZTwSHIaxJGMvshYOaOu/l/WKjG', 3, 'UdPxGzedB72dvowKdaw1EA9xsEyYaT0RZH8kgftJr4tGh99FD7G6f1GhEOfr', NULL, '2017-03-23 22:20:41', '2017-03-23 22:20:41'),
(17, 'nicolas', 'xdieamd@gmail.com', 188, '1491770007.jpg', '$2y$10$AdLNms7OO5eoWe0f/byXO.Yu511cYdmv4GPfGOnvAc3hsx9GyD4hS', 3, 'XtXmtYQGO1ea0o0gW5jfLXAkZmY3nvzM8SlSgrJtChbTCnXZdNBYBipHTeMC', NULL, '2017-03-25 01:48:33', '2017-04-09 23:33:27'),
(56, 'Iceland  lala', 'nicolas2@nicolas.com', 0, 'default.jpg', '$2y$10$n3ctdBLx2Ekb.Uc64uxmlutS63Dv3qEU9TXaDzPp6bgZAazv7XwDO', 3, NULL, NULL, '2017-03-29 17:28:53', '2017-03-29 17:28:53'),
(89, 'Znsksk', 'sjsks@sjsks.com', 0, 'default.jpg', '$2y$10$a9LINNX2yGuppWwxiJAMVuqoe0BZI4ilGu5EKWXcRvdyp6m61w1xC', 3, NULL, NULL, '2017-04-14 16:47:46', '2017-04-14 16:47:46'),
(53, 'Nicolas Gliksberg', 'nicolas@fullservidores.com', 0, 'default.jpg', '$2y$10$k5gG3nhAzXf1wSwXPYssFuVgX/peoqAtYyMVZsVQO66z/FQ3264KS', NULL, '0OL7r0PvYlO8TjRwTVzEYi58BvWshbTM3IJybm5KS2kfZvtbScNtO7mKi0Tc', NULL, '2017-03-28 17:10:19', '2017-03-28 17:10:19'),
(52, 'wal', 'waltercejas19@hotmail.com', 0, 'default.jpg', '$2y$10$zb0erQpyMWnmlXWPnPDObOK/lckl/dWqkb1uaEta9.bNsLscuT8Em', NULL, 'EjABOhE4t0UTlO9qcU69f4qlEGY8Ij6vVj1mBiPRvWcDWixEC3VVcfikjGlz', NULL, '2017-03-28 07:35:55', '2017-03-28 07:35:55'),
(86, 'Sjsksk@skdkdk.co', 'dndkdk@sksks.con', 0, 'default.jpg', '$2y$10$x9H6lR8E2mKUhUlRkeJjteRP5W.6EHrb4RzL43hZVA7L/EGdztTL6', 3, NULL, NULL, '2017-04-13 01:05:20', '2017-04-13 01:05:20'),
(49, 'Hola', 'pepe@pepe.com', 0, '1490722592.jpg', '$2y$10$2gBU6QSvY.TwQ.t41bNnKe4o675w17uMxJzMBPF4Z3fWz0KfgzIqi', 3, NULL, NULL, '2017-03-25 18:39:55', '2017-03-28 20:36:32'),
(48, 'Sisk aiso', 'perla@perla.com', 0, '1490456269.jpg', '$2y$10$tmN9sh2OlGiGS3/iO477keOJLaIvrK0qpIYGmbm.1cxxDAt/.egN6', 3, NULL, NULL, '2017-03-25 17:13:55', '2017-03-25 18:37:49'),
(47, 'Dislsl alsl', 'nico@nico.com', 0, 'default.jpg', '$2y$10$jBe2RlfijkFbcs5d6LOWMufM.KiUH8tn7aewSIuuJB0e7kbBc6XB.', 3, NULL, NULL, '2017-03-25 17:13:06', '2017-03-25 17:13:06'),
(81, 'Ruben', 'ruben_drc06@hotmail.com', 0, 'default.jpg', '$2y$10$3HPg8a4yMlvhp7uJFAxcb.XDlGx9c/rd7J7c5i/oX341CXdiEjn4C', 3, NULL, NULL, '2017-04-06 15:42:40', '2017-04-06 15:42:40'),
(88, 'asd', 'asdasd@asd.com', 0, 'default.jpg', '$2y$10$pRLIL9zqdKbTbLDmYmdRgu59WEMJ8JTQ1E/1IG4G2wy39wnUiPXpi', NULL, '7L4rUeicEahIqRfrwpeCjHC0NXC3bNPFEoEOjQHJFqvFL5QItRnsXhcvFXuX', NULL, '2017-04-14 16:32:42', '2017-04-14 16:32:42'),
(87, 'Ruben', 'u@u.com', 0, 'default.jpg', '$2y$10$OW7h4x10y1GSeQS4NIVfDOdSL6PnKQ45ikQ2HVYRXk0j.kbw/oMpS', NULL, 'KhORQLAB62CUhRleDd1Jjxm6qFEoHFvT6HBB8NcVqaR0veawAPmz48CHuhXd', NULL, '2017-04-13 01:21:38', '2017-04-13 01:21:38'),
(85, 'Aristides jorge Bruno', 'Aristidesjbruno@hotmail.com', 0, 'default.jpg', '$2y$10$NTV2Ecd2HJqeoITLqmZL..nkRTrdOumJGMg79jJQL0FMeNKXZvmr6', 3, NULL, NULL, '2017-04-13 00:44:04', '2017-04-13 00:44:04'),
(79, 'Nicolasl', 'popopopo@popo.com', 0, '1491166702.jpg', '$2y$10$7puxUNXIuFj5JyEC6/IpEuO2wlienmWdwD/84csRgtIAOVHZ/MD.a', 3, NULL, NULL, '2017-04-02 23:57:27', '2017-04-02 23:58:22'),
(35, 'Nicolas', 'nicolas@nicolas.com', 0, 'default.jpg', '$2y$10$932dF.kNRqOsCzdrkyK5mOx27kldaFAdmQJz0TWqVE7Ue/kA0shvK', 3, NULL, NULL, '2017-03-25 02:56:06', '2017-03-25 02:56:06'),
(36, 'asidjasod', 'qq@qq.com', 0, 'default.jpg', '$2y$10$7QYNoxqXcwPZ3T12.WQ3D.US4jtrUAtbsJ3UaMI9S0RA5jXFYurrK', 3, NULL, NULL, '2017-03-25 02:59:37', '2017-03-25 02:59:37'),
(37, 'Nicolas gliksbeg', '1@1.com', 0, 'default.jpg', '$2y$10$wSCuV0..JUHm0nE5RIUpSetA5Yu7sP4IxbOjzm/r0W54pdfvVKs2q', 3, NULL, NULL, '2017-03-25 03:02:56', '2017-03-25 03:02:56'),
(38, 'Perla Parody', 'parody@parody.com', 0, 'default.jpg', '$2y$10$EIUsQCdkEgi/hJstCp52cOoM1gIKKtgUX820UfycMeKgR3rfmSykG', 3, NULL, NULL, '2017-03-25 03:06:42', '2017-03-25 03:06:42'),
(40, 'Skslsl', '1ho@ho.com', 0, 'default.jpg', '$2y$10$5A1IviQRt.ZPvSz.lkzMPeT4vDmLTKbBRMmPiQTuBmoQ40J1LAFWu', 3, NULL, NULL, '2017-03-25 04:37:42', '2017-03-25 04:37:42'),
(82, 'Sksksm ksks', 'nicolasg@fullservidores.com', 0, 'default.jpg', '$2y$10$feQgRyDOgDJR1MjW4uCSe.0AEqHQDEyZ43U4Azw6gTJkvEP7Pa9z6', 3, NULL, NULL, '2017-04-07 01:15:47', '2017-04-07 01:15:47'),
(42, 'Nico pepe', 'ro@ro.com', 0, 'default.jpg', '$2y$10$wSFwL2U9CMNrysMMR.8v9eNz44Tz2U4J7jLyGjIFJf0ydUNbmUP1O', 3, NULL, NULL, '2017-03-25 15:46:15', '2017-03-25 15:46:15'),
(43, 'Nicolas gloksberg', 'pedro@pedro.com', 0, 'default.jpg', '$2y$10$mrALKBZw9FdVOqlK05CNC.WExdU16SggxlK6i1cuBcCvOxuC6tw5y', 3, NULL, NULL, '2017-03-25 16:02:40', '2017-03-25 16:02:40'),
(80, 'Alejandro', 'alejandrobruno@zeusriun.com', 1, 'default.jpg', '$2y$10$tCa9mNRx.k4wyGCCv/e2We4p4Iu1j8I1Dg7fynZ/1ogEROBfbXUbO', 3, NULL, NULL, '2017-04-05 20:53:07', '2017-04-05 20:59:44'),
(44, 'Ro', 'pe@pe.com', 0, 'default.jpg', '$2y$10$7JMwtr7d2/7mMF0w.2PSZOsa1sxX3n5jrp0M/MYirX1jVdPXxhYty', 3, NULL, NULL, '2017-03-25 17:04:26', '2017-03-25 17:04:26'),
(83, 'Xnzkxkz', 'zksks@djdkd.cim', 0, '1491605600.jpg', '$2y$10$w7WDJKODAJI34XFYqXgxGeLnFjx.ZmLOzveDLR/8r53i5z17woKeC', 3, NULL, NULL, '2017-04-08 01:52:27', '2017-04-08 01:53:20'),
(57, 'Rodrigo gliksberg', 'nico@gmail.com', 0, 'default.jpg', '$2y$10$pTbfYKocaQYMa9O4e8OjYOUh5BCYUS9MvGFLzNIFtLwj352mOastO', 3, NULL, NULL, '2017-03-29 17:35:46', '2017-03-29 17:35:46'),
(58, 'kssmskdodldl', 'sksks@sksks.com', 0, '1490799403.jpg', '$2y$10$OUeFOV8LJ7gOHOEtAbFpN.M5Jvy3s.S0e4XwqXd.JfMeAh6eeuJO6', 3, NULL, NULL, '2017-03-29 17:40:12', '2017-03-29 17:56:43'),
(59, 'Nivolas gliskverg', 'sksls@skdls.com', 0, 'default.jpg', '$2y$10$bmvPiPfSSIOBFIWbRbqjdO0uyYATsI4yrZQDKNMZ4YisawMhwRSKq', 3, NULL, NULL, '2017-03-29 18:07:54', '2017-03-29 18:07:54'),
(60, 'Zbznzmzksm', 'sksks@wksks.com', 0, 'default.jpg', '$2y$10$FuHGo9ChPyTVf7eQMIJI/uifBqg3ozdLgRLZ.YFyGNqwLS0/UWJUO', 3, NULL, NULL, '2017-03-29 18:12:07', '2017-03-29 18:12:07'),
(61, 'sjzksksk', 'ssksks@sisksl.com', 0, 'default.jpg', '$2y$10$/oEfwvshMbZV/u7B.UGFoOwbdxk/oreCjExmVwLaQXbLdbEKxZAvC', 3, NULL, NULL, '2017-03-29 18:14:56', '2017-03-29 18:14:56'),
(62, 'Ekdkd dkdk', 'dkdk@sis.com', 0, 'default.jpg', '$2y$10$s4xKpbuqEySnvG5cHZhgX.89sipJrWbn.9Dkyv4S1YCOs.tXEfISO', 3, NULL, NULL, '2017-03-29 20:45:01', '2017-03-29 20:45:01'),
(84, 'Ruben', 'r@r.com', 2, 'default.jpg', '$2y$10$IC990D6IYS0Dxk3vrOONzuykLp8zHORZ4uszwlZzVqqk2zrrUEAJi', 3, NULL, NULL, '2017-04-08 18:08:01', '2017-04-13 18:36:58'),
(64, 'JSKA AKSK', 'sksla@sisls.com', 0, 'default.jpg', '$2y$10$jLlVhFMZxyCP//8kmqmgvOgLfCFukZhf4Nou8RaU2fYTffA.4QHyC', 3, NULL, NULL, '2017-03-29 23:43:10', '2017-03-29 23:43:10'),
(65, 'Sksksk sksksk', 'sksksk@dksls.com', 0, 'default.jpg', '$2y$10$uIyfihE0xGGY9uX/UMC8r.dCaQ8bte0k5iU7K3k369SFle./2TiMO', 3, NULL, NULL, '2017-03-30 01:37:47', '2017-03-30 01:37:47'),
(66, 'Sksksk', 'sksk@dksk.com', 0, 'default.jpg', '$2y$10$qkYDvpHoarlFDwnqEODxtOEghu3YmD633UyGqdXWSpHvPToA.jpjy', 3, NULL, NULL, '2017-03-31 21:07:06', '2017-03-31 21:07:06'),
(67, 'asidjasod', 'qqasdi@qq.com', 0, 'default.jpg', '$2y$10$iixwhgkf2iWm.r36oAmKRe5uNuUULIRn3MJhQvVBdruSdkzxHJ4Nu', 3, NULL, NULL, '2017-04-01 03:02:30', '2017-04-01 03:02:30'),
(68, 'walters', 'was@was.com', 0, 'default.jpg', '$2y$10$4q1sP5079A8pQTPR.LEsyeo0eIQ.09pFvu/ZXn3FDd.8/IwBJ1iJO', NULL, 'RuX6K4efiXJGhV63p4G8PlIFuZhXmzMiaeKA3DUwnmDfzOu5bEydCNJ8zyUh', NULL, '2017-04-01 17:04:13', '2017-04-01 17:04:13'),
(70, 'Hasd', 'ws@ws.com', 0, '1491701613.jpg', '$2y$10$SvwOizOY/xuKVcVK1w9rpeJnsYCwTjqtwNf2fU4uGt49J5Jj1Lwoa', 3, NULL, NULL, '2017-04-02 07:53:27', '2017-04-09 04:33:33'),
(71, 'Nicolas gliksverg', 'nicolas2@fullservidores.com', 0, 'default.jpg', '$2y$10$LOJubozzh44XVI/H8nFxeu7Uc7iMaFMb.pk3WLkAroMezY/xec.h2', 3, NULL, NULL, '2017-04-02 22:31:11', '2017-04-02 22:31:11'),
(75, 'Dldkdl', 'sjsksk@skdkdk.com', 0, 'default.jpg', '$2y$10$dklAEpbDzAXBUIjG2W8fjuUrqd1wxR/G9wv5ZhO/n1ar31L3mAcA6', 3, NULL, NULL, '2017-04-02 22:51:48', '2017-04-02 22:51:48'),
(76, 'Nicolas gola', 'pepeqwerty@gmakl.con', 0, 'default.jpg', '$2y$10$uy9fkoqgohc5MO4UP4hvFOck.BsgeEYFFlzRXKGQzfoXawgqufhv.', 3, NULL, NULL, '2017-04-02 22:53:41', '2017-04-02 22:53:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
