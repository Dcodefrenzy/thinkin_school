-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2019 at 07:31 PM
-- Server version: 5.7.18
-- PHP Version: 7.0.16-4+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thinking_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `mission_statement` text NOT NULL,
  `image_1` text,
  `created_by` varchar(255) NOT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `body`, `mission_statement`, `image_1`, `created_by`, `time_created`, `date_created`, `hash_id`) VALUES
(18, '<p>We transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it.</p>', '<p>We transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it.</p>', '1545335942mailIMG-20181022-WA0003.jpg', 'jy95Ae4d739i4o02', '10:20:24', '2018-07-18', '3738229027about');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(225) DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `login_status` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `verification` varchar(255) DEFAULT NULL,
  `profile_status` varchar(255) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL,
  `defaulted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `hash`, `hash_id`, `position`, `phone_number`, `facebook_link`, `twitter_link`, `linkedin_link`, `instagram_link`, `image_1`, `time_created`, `date_created`, `last_login`, `last_logout`, `login_status`, `level`, `verification`, `profile_status`, `user_status`, `defaulted`) VALUES
(7, 'Banji', 'Akole', 'banjimayowa@gmail.com', '$2y$10$nfIX.S/vu469XEOOr4nrjupfWxF2tHfUwpX7S0sH1eyaIY8tZivs.', 'j90819542aBn72i', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '14:25:12', '2018-02-28', '2018-05-21 23:02:42', '2018-05-17 16:23:50', 'Logged In', 'MASTER', '1', NULL, '1', NULL),
(10, 'Kabiru', 'Shuaibu', 'kobyblaze@gmail.com', '$2y$10$siFhCK.SlD4mUgTMf0148.y4Emn8sA0AIAJuzyeDM6hc7Zb0tQJ9a', '3r543i0a57Kbu845', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '19:17:23', '2018-04-16', '2018-05-24 17:14:02', NULL, 'Logged In', '1', '1', NULL, '2', NULL),
(14, 'Akole', 'Banji', 'banjimayowa1@gmail.com', '$2y$10$jO/LwWCOtJ1I.oeP7PsAFum6ADpbjqPvsHRflxqIbNWfGasJj3vI6', 'admin9917900809', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '21:28:01', '2018-04-17', NULL, NULL, NULL, NULL, '1', NULL, '2', NULL),
(17, 'Ayodeji', 'Fakunle', 'ayodejisamuelfakunle@gmail.com', '$2y$10$38wjO4BJP3sEYSd47n/hTuetqf9.pXhhS/WWqDplvpDEMXgYsJUpC', 'jy95Ae4d739i4o02', NULL, '08133475878', 'facebook.com/deji', 'tweeter.com/frenzykul', 'linkedin.com/ayodeji', 'instagram.com/frenzykul', '1545775096mail13239229_487959851401256_5588409995275807808_n.jpg', '17:26:28', '2018-04-28', '2019-01-01 10:55:43', '2019-01-01 10:53:36', 'Logged In', '3', '1', NULL, '1', NULL),
(18, 'Kolade', 'Koded', 'Fakunlekolade@gmail.com', '$2y$10$ZUhQTQ2Mi.1ApKHnyQggw.WoQx2mOyGWDapd3lnpggShxM8D4yKIy', 'admin7851792597', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '09:57:06', '2018-05-01', '2018-05-18 08:07:18', '2018-05-18 09:19:59', 'Logged Out', '3', '1', NULL, '1', NULL),
(19, 'Odunola', 'Olabintan', 'olabintanodunola@yahoo.com', '$2y$10$AC6Bx8e6YYx7GTf2XRtK7OV0xIG0jyAMRga5XeJ2Fvb31L25LPQgW', 'admin5767077300', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '21:11:23', '2018-05-04', '2018-05-06 21:31:17', NULL, 'Logged In', '5', '1', NULL, '1', NULL),
(20, 'Babatunde', 'Julius', 'Iambabatundejulius@gmail.com', '$2y$10$FN2UPoaxgfb9XdTD2odMM.pBy6MtJptEheK7tL0K.BapyEubyUHkq', 'admin6561856488', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '13:51:20', '2018-05-05', '2018-05-06 18:26:58', NULL, 'Logged In', '8', '1', NULL, '1', NULL),
(21, 'Olawale', 'Kadri', 'kadriolawale@gmail.com', '$2y$10$doiNFooDhBbVeZ8.oFmAAeEHGXETuJMsf4me8sotVZPT5mQDK9wAC', 'admin3379036332', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '17:33:04', '2018-05-06', NULL, NULL, NULL, '5', '1', NULL, '1', NULL),
(22, 'ADENIJI', 'LOIS OLUWASEUN', 'adelois01@gmail.com', '$2y$10$XKxlbZkq/5gKgemcRnQH5OT/BrJRHULsERRDm.XOqqgfnf9mv55ou', 'admin5823923153', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '13:34:07', '2018-05-07', '2018-05-12 17:29:31', NULL, 'Logged In', '4', '1', NULL, '1', NULL),
(23, 'Peter', 'Oyebanji', 'adewuyipeter50@gmail.com', '$2y$10$slxLTl.5jnnNta/YSqKiAeUk6bpxVzYjJo7IsdFSgAOHbMLWj7tby', '8e1t86er265564P', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '07:38:04', '2018-05-14', '2018-05-28 07:46:47', NULL, 'Logged In', '3', '1', NULL, '1', NULL),
(24, 'Akintayo', 'Tolu', 'Tolubama@gmail.com', '$2y$10$Fr4C6sUB4QMkpYnJArOGou4NEWIMpU5AdmcETqopeir4BRj34wQze', '5Tuol327710328', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '08:33:54', '2018-05-15', '2018-05-30 23:17:07', NULL, 'Logged In', '3', '1', NULL, '1', NULL),
(25, 'Jolaoye', 'Oluwakayode', 'jolaoyekayode@yahoo.com', '$2y$10$lE1fWr1qREqYYB.jAIC/6ODNJxTeY4CFvZSySw7uJmnaD8KymYRK.', '4al26o40o21yJ1e43', NULL, NULL, NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '08:42:15', '2018-05-15', '2018-05-21 14:42:35', '2018-05-20 18:14:02', 'Logged In', '3', '1', NULL, '1', NULL),
(26, 'test', 'test', 'mayur4rf_ji@yahoo.com', '$2y$10$42NQb5iz9nXw6ixy/2T4.uwYgvQ2miAahkAEP6pV9eh4a7qmDW44S', 'e238t723ts7106', NULL, '08168785598', NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '01:08:43', '2018-05-19', '2018-05-25 07:33:26', NULL, 'Logged In', '9', '1', NULL, '1', NULL),
(27, 'Adedamola', 'Olabintan', 'damolaolabintan@gmail.com', '$2y$10$UvsATSk.IxUnbvD3fY.AsejJGR1v3IHwPtJNJbVKj7vFL8EljKHSi', '1lA81094d15a72deaom', NULL, '08107209469', NULL, NULL, NULL, NULL, '1545335942mailIMG-20181022-WA0003.jpg', '21:29:06', '2018-05-19', '2018-05-19 21:34:29', NULL, 'Logged In', '5', '1', NULL, '1', NULL),
(28, 'Folorunso', 'Obasuyi', 'obasfot2017@gmail.com', '$2y$10$GdslqRTIgbBPasimeIUqNOt81ZY7d7kWNV2q2XNsvGs/2x.pfalM6', '5s730nFluoo12r0o978', NULL, '+601131899754', NULL, NULL, NULL, NULL, NULL, '17:38:58', '2018-05-24', '2018-05-25 08:45:04', NULL, 'Logged In', '9', '1', NULL, '1', NULL),
(29, 'deejay', 'werecf', 'root@', '$2y$10$Xn7o1Ln.ltkMls7lQBbDLuos83K1OWcMWMe8hkQSJwJ0Wvp9ptT2W', '6j8e914d07y4ea10', NULL, '08133475878', NULL, NULL, NULL, NULL, NULL, '15:50:18', '2018-12-25', NULL, NULL, NULL, '3', '1', NULL, '1', NULL),
(30, 'vickie', 'fakuns', 'fakunlevic@gmail.com', '$2y$10$.xY1N5AU.FP8qZI.KbEH0OYmfnnac.fPuaYNXKVF4LfSCPKnjVzvS', '54ive1147i51c4k4', NULL, '09024901335', NULL, NULL, NULL, NULL, NULL, '11:39:38', '2019-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `visibility` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `author`, `visibility`, `body`, `image_1`, `created_by`, `time_created`, `date_created`, `hash_id`, `category_id`) VALUES
(45, 'POLITICS Ekiti ', 'Deji', 'show', '											DOCKER\nDocker is a tool that is design to make it easier to create, run and deploy applications by using containers\n\nWhen starting Docker you need to first install Docker –toolbox and this is where you run all your docker commands.\nGo to hub.docker.com the official website for docker where you can download packages/tools you want to use \n\nImages-> What is an image in Docker?  An image is an immutable file which are called upon from hub.docker.com/explore through the command build(commands will be attached at the end). An image can be a dependency, a library that is needed for web development, eg nginx(server) is an image in docker, phpmyadmin, mysql, and so on are images and examples of what might be needed for a successful, creation and deployment of any website. \nFor instance if you want to create an application using PHP, which is a backend language that cannot be assessed on a browser without a server,  we make use of a local server which will also be gotten as an image, also needed is mysql and phpmyadmin for a successful creation of an application.\nTo pull/download an image, got to hub.docker.com click on Explore (check the image below) on the home button. \n \n\n\n\n\n\n\n\nOn the next page you will see where different images names are, ensure to search for the particular image you want to download and verify if it’s an official name of the particular library or dependencies you are about to download. Most official names comes with a sub name called official check the image below.\n \nAfter this process, return to your Docker environment and write a commsnd to pull the image you need using =>docker pull (image name), for instance I want to pull nginx from hub.docker.com I will simply type => docker pull nginx Ensure you type the image name properly to avoid errors or pulling unnecessary images with similar name, this image will download in layers(image below). \n \nNOTE: Once you have successfully pulled this image from the hub.docker.com you do not have to re pull such image again even for other projects, to comfirm if an image has been successfully added type the command =>docker image (name of image) for instance=> docker image nginx Now that we have ssuccessfully pulled an image we can proceed to the next stage, you can also pull other images you will be needing for your development. For more information about Image check docs.docker.com\n\nCONTAINER=> Container, as the name sounds allows developers to package an application with all the part it needs such as dependencies, libraries and then ship it out as one package for testing or deployment. Images instantiated is called a container, hence all images pulled from hub.docker.com form containers, there can be as many containers as possible for building an application. Containers are required when starting a new project.\nCommand to instantiate an image into a container is  \n\n\n\n\n\n\n\n\n\n					Docker command lines\nDocker-machine ls => to check machine\nDocker -machine env =>setup docker environment\ndocker-machine start =>to start docker\ndocker-machine stop =>to end docker\n\ncopy the last line and paste it then press enter\ndocker version => To check the version\n\ndocker pull (image name) => to pull docker images. After downloading the docker\ndocker images =>to check all images downloaded\ndocker search (name of what u r looking for)\ndocker run nginx => to start an image\ndocker container ps => to check images in container\ndocker container run (name of image)=> to add an image to container\n\ndocker container run --name (the name u want to give it) (image name) => to add an image to container and also give it an image\n\ndocker container stop (image new name) => to stop runing container\ndocker container start(image name) => to start a container\ndocker container ps -a =>to check all container \ndocker container run --name (the name u want to give it) -d (image name)  => to add an image to a container and jump out instead of using ctrl c to jump out\ndocker container run --name (the name u want to give it) -d -p 80:(number u wanna use) (image name) => to create proxy.\ndocker container exec -it proxy bash => to start ur image\ndocker container exec -it (new image name) bash\n\nTo install nano\napt-get update\napt-get install nano\nnano default.conf\ngo to location change to var/www\nalso add =>  \nnano nginx.conf\nchange sendfile to off\n\nAdding a port----\nniginx port is 80\ndocker container rm -f (first four digits of the image)=>To remove an image \n\nMOUNTING\nWhen you use a bind mount, a file or directory on the host machine is mounted into a container. ... By contrast, when you use a volume, a new directory is created within Docker''s storage directory on the host machine, and Docker manages that directory''s contents.\n\nmounting a volume-----\nDocker container run -d -v 80:(new number) -v /c/Users/folder name:/docker-nginx/web  -w :/docker-nginx/web --name (new image name) (image)=>\n', '1545509657mailBeautiful_Design_for_API_developer_portals_nordic_APIs.png', 'jy95Ae4d739i4o02', '17:21:48', '2018-07-17', 'ia0ecs853oic5rl3tilt352p4', '3027504528Cocoa'),
(46, 'Docker.', 'Chichi', 'show', '<p>DOCKER Docker is a tool that is design to make it easier to create, run and deploy applications by using containers When starting Docker you need to first install Docker &ndash;toolbox and this is where you run all your docker commands. Go to hub.docker.com the official website for docker where you can download packages/tools you want to use Images-&gt; What is an image in Docker? An image is an immutable file which are called upon from hub.docker.com/explore through the command build(commands will be attached at the end). An image can be a dependency, a library that is needed for web development, eg nginx(server) is an image in docker, phpmyadmin, mysql, and so on are images and examples of what might be needed for a successful, creation and deployment of any website. For instance if you want to create an application using PHP, which is a backend language that cannot be assessed on a browser without a server, we make use of a local server which will also be gotten as an image, also needed is mysql and phpmyadmin for a successful creation of an application. To pull/download an image, got to hub.docker.com click on Explore (check the image below) on the home button. On the next page you will see where different images names are, ensure to search for the particular image you want to download and verify if it&rsquo;s an official name of the particular library or dependencies you are about to download. Most official names comes with a sub name called official check the image below. After this process, return to your Docker environment and write a commsnd to pull the image you need using =&gt;docker pull (image name), for instance I want to pull nginx from hub.docker.com I will simply type =&gt; docker pull nginx Ensure you type the image name properly to avoid errors or pulling unnecessary images with similar name, this image will download in layers(image below). NOTE: Once you have successfully pulled this image from the hub.docker.com you do not have to re pull such image again even for other projects, to comfirm if an image has been successfully added type the command =&gt;docker image (name of image) for instance=&gt; docker image nginx Now that we have ssuccessfully pulled an image we can proceed to the next stage, you can also pull other images you will be needing for your development. For more information about Image check docs.docker.com CONTAINER=&gt; Container, as the name sounds allows developers to package an application with all the part it needs such as dependencies, libraries and then ship it out as one package for testing or deployment. Images instantiated is called a container, hence all images pulled from hub.docker.com form containers, there can be as many containers as possible for building an application. Containers are required when starting a new project. Command to instantiate an image into a container is Docker command lines Docker-machine ls =&gt; to check machine Docker -machine env =&gt;setup docker environment docker-machine start =&gt;to start docker docker-machine stop =&gt;to end docker copy the last line and paste it then press enter docker version =&gt; To check the version docker pull (image name) =&gt; to pull docker images. After downloading the docker docker images =&gt;to check all images downloaded docker search (name of what u r looking for) docker run nginx =&gt; to start an image docker container ps =&gt; to check images in container docker container run (name of image)=&gt; to add an image to container docker container run --name (the name u want to give it) (image name) =&gt; to add an image to container and also give it an image docker container stop (image new name) =&gt; to stop runing container docker container start(image name) =&gt; to start a container docker container ps -a =&gt;to check all container docker container run --name (the name u want to give it) -d (image name) =&gt; to add an image to a container and jump out instead of using ctrl c to jump out docker container run --name (the name u want to give it) -d -p 80:(number u wanna use) (image name) =&gt; to create proxy. docker container exec -it proxy bash =&gt; to start ur image docker container exec -it (new image name) bash To install nano apt-get update apt-get install nano nano default.conf go to location change to var/www also add =&gt; nano nginx.conf change sendfile to off Adding a port---- niginx port is 80 docker container rm -f (first four digits of the image)=&gt;To remove an image MOUNTING When you use a bind&nbsp;mount, a file or directory on the host machine is&nbsp;mounted&nbsp;into a container. ... By contrast, when you use a volume, a new directory is created within&nbsp;Docker&#39;s&nbsp;storage directory on the host machine, and&nbsp;Docker&nbsp;manages that directory&#39;s contents. mounting a volume----- Docker container run -d -v 80:(new number) -v /c/Users/folder name:/docker-nginx/web -w :/docker-nginx/web --name (new image name) (image)=&gt;</p>', '1545509582mail9aa253a5ca9ad3da9b000e3731d9942e.jpg', 'jy95Ae4d739i4o02', '20:24:26', '2018-07-20', '3akcrt6d7co5rle3ei3263', '3027504528Cocoa'),
(47, 'Docker is a tool.', 'Deji', 'show', 'If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.vIf you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.', 'uploads/3948871innovationbulb.jpg', 'jy95Ae4d739i4o02', '09:16:56', '2018-07-27', 'l3c6o67ka1r1e24tdr6c9ie', '3027504528Cocoa'),
(48, 'Poultry', 'Deji', 'show', '1.5-Liter / 92-Cubic Inch capacity scoop spreader Compatible with fertilizer, seeds and salt / ice-melt Easy-crank design Lightweight and easy to maintain Great for small areas 1.5-Liter / 92-Cubic Inch capacity scoop spreader Compatible with fertilizer, seeds and salt / ice-melt Easy-crank design Lightweight and easy to maintain Great for small areas 1.5-Liter / 92-Cubic Inch capacity scoop spreader Compatible with fertilizer, seeds and salt / ice-melt Easy-crank design Lightweight and easy to maintain Great for small areas 1.5-Liter / 92-Cubic Inch capacity scoop spreader Compatible with fertilizer, seeds and salt / ice-melt Easy-crank design Lightweight and easy to maintain Great for small areas', 'uploads/5779567farmers.jpg', 'jy95Ae4d739i4o02', '11:16:23', '2018-07-27', 'tt5rl15r713l41aiu3c7yepo', '3027504528Cocoa'),
(49, 'Docker.Docker.', 'Chichi', 'show', '<p>&lt;p&gt;DOCKER Docker is a tool that is design to make it easier to create, run and deploy applications by using containers When starting Docker you need to first install Docker &amp;ndash;toolbox and this is where you run all your docker commands. Go to hub.docker.com the official website for docker where you can download packages/tools you want to use Images-&amp;gt; What is an image in Docker? An image is an immutable file which are called upon from hub.docker.com/explore through the command build(commands will be attached at the end). An image can be a dependency, a library that is needed for web development, eg nginx(server) is an image in docker, phpmyadmin, mysql, and so on are images and examples of what might be needed for a successful, creation and deployment of any website. For instance if you want to create an application using PHP, which is a backend language that cannot be assessed on a browser without a server, we make use of a local server which will also be gotten as an image, also needed is mysql and phpmyadmin for a successful creation of an application. To pull/download an image, got to hub.docker.com click on Explore (check the image below) on the home button. On the next page you will see where different images names are, ensure to search for the particular image you want to download and verify if it&amp;rsquo;s an official name of the particular library or dependencies you are about to download. Most official names comes with a sub name called official check the image below. After this process, return to your Docker environment and write a commsnd to pull the image you need using =&amp;gt;docker pull (image name), for instance I want to pull nginx from hub.docker.com I will simply type =&amp;gt; docker pull nginx Ensure you type the image name properly to avoid errors or pulling unnecessary images with similar name, this image will download in layers(image below). NOTE: Once you have successfully pulled this image from the hub.docker.com you do not have to re pull such image again even for other projects, to comfirm if an image has been successfully added type the command =&amp;gt;docker image (name of image) for instance=&amp;gt; docker image nginx Now that we have ssuccessfully pulled an image we can proceed to the next stage, you can also pull other images you will be needing for your development. For more information about Image check docs.docker.com CONTAINER=&amp;gt; Container, as the name sounds allows developers to package an application with all the part it needs such as dependencies, libraries and then ship it out as one package for testing or deployment. Images instantiated is called a container, hence all images pulled from hub.docker.com form containers, there can be as many containers as possible for building an application. Containers are required when starting a new project. Command to instantiate an image into a container is Docker command lines Docker-machine ls =&amp;gt; to check machine Docker -machine env =&amp;gt;setup docker environment docker-machine start =&amp;gt;to start docker docker-machine stop =&amp;gt;to end docker copy the last line and paste it then press enter docker version =&amp;gt; To check the version docker pull (image name) =&amp;gt; to pull docker images. After downloading the docker docker images =&amp;gt;to check all images downloaded docker search (name of what u r looking for) docker run nginx =&amp;gt; to start an image docker container ps =&amp;gt; to check images in container docker container run (name of image)=&amp;gt; to add an image to container docker container run --name (the name u want to give it) (image name) =&amp;gt; to add an image to container and also give it an image docker container stop (image new name) =&amp;gt; to stop runing container docker container start(image name) =&amp;gt; to start a container docker container ps -a =&amp;gt;to check all container docker container run --name (the name u want to give it) -d (image name) =&amp;gt; to add an image to a container and jump out instead of using ctrl c to jump out docker container run --name (the name u want to give it) -d -p 80:(number u wanna use) (image name) =&amp;gt; to create proxy. docker container exec -it proxy bash =&amp;gt; to start ur image docker container exec -it (new image name) bash To install nano apt-get update apt-get install nano nano default.conf go to location change to var/www also add =&amp;gt; nano nginx.conf change sendfile to off Adding a port---- niginx port is 80 docker container rm -f (first four digits of the image)=&amp;gt;To remove an image MOUNTING When you use a bind&amp;nbsp;mount, a file or directory on the host machine is&amp;nbsp;mounted&amp;nbsp;into a container. ... By contrast, when you use a volume, a new directory is created within&amp;nbsp;Docker&amp;#39;s&amp;nbsp;storage directory on the host machine, and&amp;nbsp;Docker&amp;nbsp;manages that directory&amp;#39;s contents. mounting a volume----- Docker container run -d -v 80:(new number) -v /c/Users/folder name:/docker-nginx/web -w :/docker-nginx/web --name (new image name) (image)=&amp;gt;&lt;/p&gt;</p>', '1545510102mailmarrygold.png', 'jy95Ae4d739i4o02', '20:21:42', '2018-12-22', '3ekci737lekde52a-o9ocr2rrcdt81', '6855739774Fish');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `booking` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `verification` varchar(255) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `booking`, `name`, `email`, `phone_number`, `verification`, `hash_id`, `booking_id`, `date_created`, `time_created`) VALUES
(1, 'event', 'Fakunle Ayodeji', 'ayodejisamuelfakunle@gmail.com', '08133475878', 'not verified', 'tneu40243a96f36e3kveln', '936ov4e9eec8t3d8sn26', '2018-12-20', '19:56:19'),
(2, 'event', 'Jane Doe', 'ricemiller@gmail.com', '08133475878', 'not verified', 'n88j0288eevn7ea0t32', '936ov4e9eec8t3d8sn26', '2018-12-20', '19:56:39'),
(3, 'event', 'Sam Doe', 'kol@gmail.com', '08133475878', 'not verified', 'ea9nmt5e8700v250s4', '936ov4e9eec8t3d8sn26', '2018-12-20', '19:56:54'),
(4, 'training', 'Fakunle Ayodeji', 'ayodejisamuelfakunle@gmail.com', '08133475878', 'not verified', 'au270ia9erig94tln4fk9nn76', 'r6atiga5e71nig04lrn47e7n', '2018-12-20', '19:57:35'),
(5, 'event', 'Fakunle Ayodeji', 'ayodejisamuelfakunle@gmail.com', '08133475878', 'not verified', 'u72le0t5ev72ak890nfen7', 'n3439svd42420eote0ce', '2019-01-01', '12:22:29'),
(6, 'event', 'Fakunle Ayodeji', 'sam@gmail.com', '08133475878', 'not verified', 'f1la0k22eneetu201083vn', '936ov4e9eec8t3d8sn26', '2019-01-01', '12:24:11'),
(7, 'training', 'Jane Doe', 'deji@gmail.com', '08133475878', 'not verified', 'tgr2e2an21naj27nii3277', 'r6atiga5e71nig04lrn47e7n', '2019-01-01', '12:32:56'),
(8, 'training', 'Fakunle Ayodeji', 'sam@gmail.com', '08133475878', 'not verified', 'r9ti1neuka084fi919lnga8n', 'iln0u7e7a286ft9arkni62n3g', '2019-01-01', '12:34:50'),
(9, 'training', 'President', 'ayodejisamuelfakunle@gmail.com', '08133475878', 'not verified', '1ipnge92r6ti25ti26s3eanrdn3', 'iln0u7e7a286ft9arkni62n3g', '2019-01-01', '12:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hash_id` varchar(255) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `hash_id`, `category_name`, `created_by`, `date_created`) VALUES
(12, '3027504528Cocoa', 'Business', 'jy95Ae4d739i4o02', '2018-07-18 15:21:34'),
(13, '6855739774Fish', 'Writing', 'jy95Ae4d739i4o02', '2018-07-18 15:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `event_time` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `venue`, `description`, `status`, `price`, `hash_id`, `image_1`, `created_by`, `start_date`, `end_date`, `event_time`, `date_created`, `time_created`) VALUES
(2, 'Code', 'Abuja', '<p>Docker a tool that is design to make it easier to create, run and deploy applications by using containers When starting Docker you need to first install Docker ï¿½toolbox and this is where you run all your docker commands. Go to hub.docker.com the official website for docker where you can download packages/tools you want to use Images-&gt; What is an image in Docker? An image is an immutable file which are called upon from hub.docker.com/explore through the command build(commands will be attached at the end). An image can be a dependency, a library that is needed for web development, eg nginx(server) is an image in docker, phpmyadmin, mysql, and so on are images and examples of what might be needed for a successful, creation and deployment of any website. For instance if you want to create an application using PHP, which is a backend language that cannot be assessed on a browser without a server, we make use of a local server which will also be gotten as an image, also needed is mysql and phpmyadmin for a successful creation of an application. To pull/download an image, got to hub.docker.com click on Explore (check the image below) on the home button. On the next page you will see where different images names are, ensure to search for the particular image you want to download and verify if itï¿½s an official name of the particular library or dependencies you are about to download. Most official names comes with a sub name called official check the image below. After this process, return to your Docker environment and write a commsnd to pull the image you need using =&gt;docker p</p>', 'upcoming', '500000', '936ov4e9eec8t3d8sn26', '1545334884mail9aa253a5ca9ad3da9b000e3731d9942e.jpg', 'jy95Ae4d739i4o02', 'January/10/2019', 'January/20/2019', '10am-3pm', '2018-12-20', '19:41:24'),
(3, 'Code', 'Abuja', '<p>Docker a tool that is design to make it easier to create, run and deploy applications by using containers When starting Docker you need to first install Docker ï¿½toolbox and this is where you run all your docker commands. Go to hub.docker.com the official website for docker where you can download packages/tools you want to use Images-&gt; What is an image in Docker? An image is an immutable file which are called upon from hub.docker.com/explore through the command build(commands will be attached at the end). An image can be a dependency, a library that is needed for web development, eg nginx(server) is an image in docker, phpmyadmin, mysql, and so on are images and examples of what might be needed for a successful, creation and deployment of any website. For instance if you want to create an application using PHP, which is a backend language that cannot be assessed on a browser without a server, we make use of a local server which will also be gotten as an image, also needed is mysql and phpmyadmin for a successful creation of an application. To pull/download an image, got to hub.docker.com click on Explore (check the image below) on the home button. On the next page you will see where different images names are, ensure to search for the particular image you want to download and verify if itï¿½s an official name of the particular library or dependencies you are about to download. Most official names comes with a sub name called official check the image below. After this process, return to your Docker environment and write a commsnd to pull the image you need using =&gt;docker .</p>', 'upcoming', '500000', 'n3439svd42420eote0ce', '1546343717mail514d9fdca04f678970d8f81caa30a910aa909d03.jpg', 'jy95Ae4d739i4o02', 'January/10/2019', 'January, 20, 2019', '10am-5pm', '2018-12-21', '19:36:06'),
(4, 'Code Hour', 'Abuja', '<p>Docker a tool that is design to make it easier to create, run and deploy applications by using containers When starting Docker you need to first install Docker ï¿½toolbox and this is where you run all your docker commands. Go to hub.docker.com the official website for docker where you can download packages/tools you want to use Images-&gt; What is an image in Docker? An image is an immutable file which are called upon from hub.docker.com/explore through the command build(commands will be attached at the end). An image can be a dependency, a library that is needed for web development, eg nginx(server) is an image in docker, phpmyadmin, mysql, and so on are images and examples of what might be needed for a successful, creation and deployment of any website. For instance if you want to&nbsp;Docker a tool that is design to make it easier to create, run and deploy applications by using containers When starting Docker you need to first install Docker ï¿½toolbox and this is where you run all your docker commands. Go to hub.docker.com the official website for docker where you can download packages/tools you want to use Images-&gt; What is an image in Docker? An image is an immutable file which are called upon from hub.docker.com/explore through the command build(commands will be attached at the end). An image can be a dependency, a library that is needed for web development, eg nginx(server) is an image in docker, phpmyadmin, mysql, and so on are images and examples of what might be needed for a successful, creation and deployment of any website. For instance if you want to&nbsp;</p>', 'upcoming', '500000', '349ee967ts184ceodnv2', '1545422594mailSprayer.jpg', 'jy95Ae4d739i4o02', 'January/10/2019', 'January/20/2019', '10am-3pm', '2018-12-21', '20:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE IF NOT EXISTS `front` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image_1` text,
  `created_by` varchar(255) NOT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `front`
--

INSERT INTO `front` (`id`, `title`, `body`, `image_1`, `created_by`, `time_created`, `date_created`, `hash_id`) VALUES
(22, 'Thinking School', '<p>With all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourself</p>', '1546287756mailCoinFlip_3.3.17_1500x500.jpg', 'jy95Ae4d739i4o02', '20:22:07', '2018-12-31', '7388563379frontage'),
(23, 'Thinking School2', '<p>With all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourself</p>', '1546287744mailBeautiful_Design_for_API_developer_portals_nordic_APIs.png', 'jy95Ae4d739i4o02', '20:22:24', '2018-12-31', '2994173401frontage'),
(24, 'Thinking School2', '<p>With all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourself</p>', '1546339833mail01Blog-Cover-image-Fullstack-Highres.jpg', 'jy95Ae4d739i4o02', '20:22:56', '2018-12-31', '1729254825frontage'),
(25, 'Thinking School4', '<p>With all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourself</p>', '1546287802mailwebsite-design-symbol.png', 'jy95Ae4d739i4o02', '20:23:22', '2018-12-31', '9126960895frontage');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(225) NOT NULL,
  `action_by` varchar(255) NOT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `hash_id` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=836 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `type`, `content`, `category`, `action_by`, `time_created`, `date_created`, `hash_id`) VALUES
(1, 'edited', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'article', 'admin7115698293', '15:00:23', '2018-03-11', 'log6960975su4i49D'),
(2, 'edited', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur lorr.', 'article', 'admin7115698293', '15:26:59', '2018-03-11', 'logi55s80D5198u'),
(3, 'added', 'Lorem ipsum', 'insight', 'admin7115698293', '15:43:47', '2018-03-11', 'log86meo476310rL98'),
(4, 'added', 'Lorem ipsum', 'training', 'admin7115698293', '15:45:39', '2018-03-11', 'log59o829r04m4eL7'),
(5, 'edited', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. hell', 'article', 'admin7115698293', '15:51:55', '2018-03-11', 'log81149u5i9sD105'),
(6, 'edited', 'Lorem ipsum dolor sit amet, consectetur adipisicing .hello', 'event', 'admin7115698293', '15:55:15', '2018-03-11', 'log8eo200m731r0L10'),
(7, 'edited', '2', 'admin level for admin441109254', 'admin7115698293', '16:01:09', '2018-03-11', 'log13353262089'),
(8, 'edited', 'Excepteur sint occaecat cupidatat non proident,hello', 'grants', 'admin7115698293', '16:03:02', '2018-03-11', 'logx883c6Epret0ue88'),
(9, 'deleted', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur lorr.', 'article', 'admin7115698293', '17:33:59', '2018-03-11', 'log73D1us4156i104'),
(10, 'deleted', 'BoyUp', 'grants', 'admin7115698293', '17:36:22', '2018-03-11', 'log08B8y2o298773Up'),
(11, 'edited', 'Lorem ipsum dolor sit amet', 'news', 'admin441109254', '22:36:19', '2018-03-11', 'loge03o8L7m105r56'),
(12, 'edited', 'Excepteur sint occaecat cupidatat non proident,hello', 'grants', 'admin7115698293', '12:43:18', '2018-03-12', 'log4205re14tEp5120eucx'),
(13, 'edited', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'grants', 'admin7115698293', '12:45:11', '2018-03-12', 'log93eo6172r3L07m8'),
(14, 'edited', 'Excepteur sint occaecat cupidatat non proident,hello', 'grants', 'admin7115698293', '12:45:24', '2018-03-12', 'log2tEexurc02033626pe7'),
(15, 'edited', 'Excepteur sint occaecat cupidatat non proident,hello', 'grants', 'admin7115698293', '12:49:23', '2018-03-12', 'log1p67exu022Ee68c6rt6'),
(16, 'edited', 'Excepteur sint occaecat cupidatat non proident,', 'grants', 'admin7115698293', '13:00:43', '2018-03-12', 'loguE8475ecr28e70tpx7'),
(17, 'edited', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'grants', 'admin7115698293', '13:01:14', '2018-03-12', 'logrmo973L661e154'),
(18, 'added', 'TECH', 'package', 'admin7115698293', '11:34:10', '2018-04-13', 'log47588TEC522H42'),
(19, 'added', 'FASHION', 'package', 'admin7115698293', '11:34:26', '2018-04-13', 'log9OA0F30838N649SHI'),
(20, 'added', 'SPORT', 'package', 'admin7115698293', '11:34:33', '2018-04-13', 'log440S22TR37PO426'),
(21, 'added', 'NIGERIA', 'news category', 'admin7115698293', '11:50:57', '2018-04-13', 'logG5N45769I6R4EAI52'),
(22, 'added', 'Global', 'news category', 'admin7115698293', '11:53:17', '2018-04-13', 'logl854ba061051l0oG'),
(23, 'added', 'African', 'news category', 'admin7115698293', '11:53:41', '2018-04-13', 'logc1fn228a57720r8Ai'),
(24, 'added', 'Nigeria', 'news category', 'admin7115698293', '11:54:30', '2018-04-13', 'log595eag31451r3iN2i'),
(25, 'added', 'Tech', 'package', 'admin7115698293', '11:55:19', '2018-04-13', 'log0h3284T151ce83'),
(26, 'added', 'Fashion', 'package', 'admin7115698293', '11:55:29', '2018-04-13', 'log96ao81F0530n5hsi4'),
(27, 'added', 'Sport', 'package', 'admin7115698293', '11:55:35', '2018-04-13', 'log67r6155o1S7t43p'),
(28, 'added', 'The Usefulnes of IT Skills', 'insight', 'admin7115698293', '12:21:41', '2018-04-13', 'log87995231e01hT'),
(29, 'added', 'The Usefulnes of IT Skills', 'news', 'admin7115698293', '12:54:16', '2018-04-13', 'log7425T016e2h46'),
(30, 'edited', 'The Usefulnes of IT Skills', 'news', 'admin7115698293', '12:55:46', '2018-04-13', 'log495h70T328e66'),
(31, 'added', 'EKSU', 'campus', 'admin7115698293', '13:26:06', '2018-04-13', 'logS6629100K1EU73'),
(32, 'added', 'FUTA', 'campus', 'admin7115698293', '13:26:48', '2018-04-13', 'log66524F1T068U8A'),
(33, 'added', 'UNILORIN', 'campus', 'admin7115698293', '13:26:57', '2018-04-13', 'logI631UN5I1RL1N89O75'),
(34, 'added', 'AAU', 'campus', 'admin7115698293', '13:30:12', '2018-04-13', 'log04U082A94A915'),
(35, 'added', 'aau', 'campus', 'admin7115698293', '13:30:37', '2018-04-13', 'log5734u1a615a53'),
(36, 'added', 'eksu', 'campus', 'admin7115698293', '13:32:11', '2018-04-13', 'log5u65s1k788e816'),
(37, 'added', 'EKSU', 'campus', 'admin7115698293', '13:39:52', '2018-04-13', 'log479ESU9K110947'),
(38, 'added', 'FUTA', 'campus', 'admin7115698293', '13:40:01', '2018-04-13', 'logT03UF49784A509'),
(39, 'added', 'UNILORIN', 'campus', 'admin7115698293', '13:40:08', '2018-04-13', 'logR7I82688INONUL3217'),
(40, 'added', 'The Usefulnes of IT Skills', 'news', 'admin7115698293', '13:57:46', '2018-04-13', 'logeTh67327073'),
(41, 'added', 'uihkln', 'news', 'admin7115698293', '14:03:12', '2018-04-13', 'logi7047470kluh47n2'),
(42, 'added', 'uigih', 'news', 'admin7115698293', '14:04:33', '2018-04-13', 'loguh78064g2i59i31'),
(43, 'edited', 'uigih', 'news', 'admin7115698293', '14:20:35', '2018-04-13', 'logu19gii2020565h'),
(44, 'edited', 'uigih', 'news', 'admin7115698293', '14:20:52', '2018-04-13', 'logi4u5g40704ih817'),
(45, 'added', 'yihlkn', 'article', 'admin7115698293', '15:30:43', '2018-04-13', 'logh726k33l165n4y8i'),
(46, 'added', 'yihlkn', 'Campus article for0UE02K017044S8', 'admin7115698293', '15:30:43', '2018-04-13', 'log601972kn0924iylh'),
(47, 'edited', 'yihlkn', 'Campus article', 'admin7115698293', '15:50:57', '2018-04-13', 'log9iy69259knh7l163'),
(48, 'edited', 'yihlkn', 'Campus article', 'admin7115698293', '18:55:06', '2018-04-13', 'logi958108h908kln5y'),
(49, 'added', 'jbkhjk/pl''', 'grant', 'admin7115698293', '19:27:48', '2018-04-13', 'logj91/bj''95773kl99kh5p'),
(50, 'added', 'jkbkljllhj', 'grant', 'admin7115698293', '19:33:25', '2018-04-13', 'loglbj507jjkk183llh3751'),
(51, 'added', 'gvjhbknjl;', 'training', 'admin7115698293', '19:33:47', '2018-04-13', 'log9hjl354;gkvjb1614n45'),
(52, 'edited', '4', 'admin level for admin441109254', 'admin7115698293', '21:50:42', '2018-04-13', 'log47497031131'),
(53, 'edited', '3', 'admin level for admin441109254', 'admin7115698293', '22:01:17', '2018-04-13', 'log76412943220'),
(54, 'edited', '2', 'admin level for admin441109254', 'admin7115698293', '22:02:03', '2018-04-13', 'log85301346832'),
(55, 'edited', '1', 'admin level for admin441109254', 'admin7115698293', '22:02:51', '2018-04-13', 'log38600190161'),
(56, 'edited', '3', 'admin level for admin441109254', 'admin7115698293', '08:19:40', '2018-04-14', 'log61490715403'),
(57, 'edited', '1', 'admin level for admin441109254', 'admin7115698293', '08:21:04', '2018-04-14', 'log84548812715'),
(58, 'edited', '2', 'admin level for admin441109254', 'admin7115698293', '08:23:24', '2018-04-14', 'log53668184423'),
(59, 'edited', '1', 'admin level for admin441109254', 'admin7115698293', '11:44:24', '2018-04-14', 'log19597542455'),
(60, 'added', 'OLa olu is a stupid Boy', 'insight', 'admin7115698293', '21:35:50', '2018-04-14', 'log340O532L964a'),
(61, 'added', 'Posi is a dickhead', 'insight', 'admin7115698293', '21:39:06', '2018-04-14', 'logP451166s769oi0'),
(62, 'added', '8hoijpk'';.', 'news', 'admin7115698293', '23:34:22', '2018-04-14', 'log6i6''10.8o6563pkhj;08'),
(63, 'added', 'dfghjkhgfh', 'news', 'admin7115698293', '23:36:34', '2018-04-14', 'logg0398hjg309f1fkhh2d2'),
(64, 'edited', 'Posi is a good boy', 'insight', 'admin7115698293', '12:43:58', '2018-04-15', 'log032s6P9591o35i'),
(65, 'edited', 'OLa olu is a stupid Boy', 'insight', 'admin7115698293', '12:50:33', '2018-04-15', 'log0317a37LO5505'),
(66, 'edited', 'Posi is a good boy', 'insight', 'admin7115698293', '12:50:52', '2018-04-15', 'log19s5o6Pi904120'),
(67, 'edited', 'The Usefulnes of IT Skills', 'insight', 'admin7115698293', '12:51:03', '2018-04-15', 'log3111h7Te47416'),
(68, 'deleted', 'uihkln', 'news', 'admin7115698293', '15:53:55', '2018-04-15', 'logh002l5ki2857u26n'),
(69, 'added', 'tghjk', 'article', 'admin7115698293', '02:21:10', '2018-04-16', 'logj27k6338478g0ht'),
(70, 'added', 'tghjk', 'Campus article for0UE02K017044S8', 'admin7115698293', '02:21:10', '2018-04-16', 'log0j1t229h4g7944k'),
(71, 'added', 'tghjktyyuhjk', 'article', 'admin7115698293', '02:21:34', '2018-04-16', 'log8h444tju2yk4t5h33ykjg0'),
(72, 'added', 'tghjktyyuhjk', 'Campus article for0UE02K017044S8', 'admin7115698293', '02:21:34', '2018-04-16', 'logh0u5y50ktt6281j9ykhjg7'),
(73, 'added', 'tyhjkl', 'article', 'admin7115698293', '02:22:21', '2018-04-16', 'log770htl8yk60j3205'),
(74, 'added', 'tyhjkl', 'Campus article for83510F3TU53A15', 'admin7115698293', '02:22:21', '2018-04-16', 'log2lk4hyt875j9188'),
(75, 'added', 'tyhjkl fghj', 'article', 'admin7115698293', '02:22:50', '2018-04-16', 'logh3k1169t3j797ly5'),
(76, 'added', 'tyhjkl fghj', 'Campus article for83510F3TU53A15', 'admin7115698293', '02:22:50', '2018-04-16', 'log185l74093y7t4kjh'),
(77, 'added', 'dfhh', 'article', 'admin7115698293', '02:23:09', '2018-04-16', 'loghh413188668d2f'),
(78, 'added', 'dfhh', 'Campus article for83510F3TU53A15', 'admin7115698293', '02:23:09', '2018-04-16', 'log9f89h3dh324592'),
(79, 'added', 'gghh', 'article', 'admin7115698293', '02:23:41', '2018-04-16', 'log97755hg9478hg3'),
(80, 'added', 'gghh', 'Campus article for83510F3TU53A15', 'admin7115698293', '02:23:41', '2018-04-16', 'log1h3g0g3424h318'),
(81, 'added', 'tyghjh', 'news', 'admin7115698293', '02:24:39', '2018-04-16', 'log244413jhyt811gh'),
(82, 'added', 'hgyuhgj', 'news', 'admin7115698293', '02:25:10', '2018-04-16', 'logy44hg2410188uhgj1'),
(83, 'added', 'ghbjk', 'news', 'admin7115698293', '02:25:37', '2018-04-16', 'logkj297h5834976bg'),
(84, 'added', 'hjkbhn', 'news', 'admin7115698293', '02:26:12', '2018-04-16', 'log9b32133hj23nh2k8'),
(85, 'added', 'yuhgjhhg', 'news', 'admin7115698293', '02:26:54', '2018-04-16', 'logy27hhg2779g2u79h3j'),
(86, 'edited', 'tghjktyyuhjk', 'Campus article', 'admin7115698293', '03:57:21', '2018-04-16', 'logut8y503g2hjy8434jhkk7t'),
(87, 'edited', 'tghjk', 'Campus article', 'admin7115698293', '03:57:47', '2018-04-16', 'logg2k2t5407181hj2'),
(88, 'edited', 'yihlkn', 'Campus article', 'admin7115698293', '03:58:04', '2018-04-16', 'logi6y44n97kl364h4'),
(89, 'edited', 'Posi is a good boy', 'insight', 'admin7115698293', '04:01:04', '2018-04-16', 'log294so4Pi601677'),
(90, 'edited', 'yuhgjhhg', 'news', 'admin7115698293', '04:02:51', '2018-04-16', 'logy3h70825g3g8hj56uh'),
(91, 'edited', 'hjkbhn', 'news', 'admin7115698293', '04:03:08', '2018-04-16', 'loghj6b984h21k861n9'),
(92, 'edited', 'gghh', 'Campus article', 'admin7115698293', '04:05:36', '2018-04-16', 'log83494gg644h9h7'),
(93, 'edited', 'gghh', 'Campus article', 'admin7115698293', '04:06:15', '2018-04-16', 'log1g6033g9h5199h'),
(94, 'edited', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'article', 'admin7115698293', '05:17:32', '2018-04-16', 'log92880646D2u4is'),
(95, 'edited', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'article', 'admin7115698293', '05:18:00', '2018-04-16', 'log9u3s7Di979165'),
(96, 'added', 'ghjguyjk hjguygj', 'insight', 'admin7115698293', '09:13:30', '2018-04-16', 'log17y493j28jgkg10uh'),
(97, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'event', 'admin7115698293', '13:13:22', '2018-04-16', 'log2e5Lm984867or91'),
(98, 'deleted', 'gvjhbknjl;', 'training', 'admin7115698293', '17:55:28', '2018-04-16', 'logv8b23nh6;kl427g1j46j'),
(99, 'deleted', 'Lorem ipsum', 'training', 'admin7115698293', '17:55:33', '2018-04-16', 'logmr5e96948o4617L'),
(100, 'deleted', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecad est laborum .', 'training', 'admin7115698293', '17:55:38', '2018-04-16', 'loge5l9259d9974oor5'),
(101, 'deleted', 'dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum .', 'training', 'admin7115698293', '17:55:44', '2018-04-16', 'logler7491o029od871'),
(102, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing.', 'training', 'admin7115698293', '17:55:48', '2018-04-16', 'log894ro0m9138L2e1'),
(103, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'training', 'admin7115698293', '17:55:53', '2018-04-16', 'log983298o6L91emr'),
(104, 'deleted', 'The Usefulnes of IT Skills', 'training', 'admin7115698293', '17:55:57', '2018-04-16', 'logh74205300eT82'),
(105, 'deleted', 'jkbkljllhj', 'grants', 'admin7115698293', '17:56:12', '2018-04-16', 'logkk7j927jb704llj04hl7'),
(106, 'deleted', 'Excepteur sint occaecat cupidatat non proident,hello', 'grants', 'admin7115698293', '17:56:16', '2018-04-16', 'logt0E8x508curp8e7459e'),
(107, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'grants', 'admin7115698293', '17:56:21', '2018-04-16', 'logL9r2545e5m245o2'),
(108, 'deleted', 'Excepteur sint occaecat cupidatat non proident,', 'grants', 'admin7115698293', '17:56:25', '2018-04-16', 'loge47177ce2E35x1prtu0'),
(109, 'deleted', 'Lorem ipsum dolor sit.', 'grants', 'admin7115698293', '17:56:30', '2018-04-16', 'log12414L774ero4m'),
(110, 'deleted', 'dfghjkhgfh', 'news', 'admin7115698293', '17:56:42', '2018-04-16', 'logf58g8hd0jh2g8hk222f6'),
(111, 'deleted', 'The Usefulnes of IT Skills', 'news', 'admin7115698293', '17:56:48', '2018-04-16', 'log2405e7T419h10'),
(112, 'deleted', 'hgyuhgj', 'campus_news', 'admin7115698293', '18:08:32', '2018-04-16', 'log2hu68g1j6g019yh14'),
(113, 'deleted', 'hjkbhn', 'campus_news', 'admin7115698293', '18:08:41', '2018-04-16', 'log25b08h50758hnjk'),
(114, 'deleted', 'ghbjk', 'campus_news', 'admin7115698293', '18:08:46', '2018-04-16', 'log501kj141b96h27g'),
(115, 'deleted', 'tyghjh', 'campus_news', 'admin7115698293', '18:08:50', '2018-04-16', 'log3916h7t8y5h5g48j'),
(116, 'deleted', 'uigih', 'campus_news', 'admin7115698293', '18:08:54', '2018-04-16', 'logu97g07iih670636'),
(117, 'deleted', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'article', 'admin7115698293', '18:09:04', '2018-04-16', 'logi77u7s0D475655'),
(118, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing.', 'article', 'admin7115698293', '18:09:08', '2018-04-16', 'log653L0m4o630er09'),
(119, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'article', 'admin7115698293', '18:09:12', '2018-04-16', 'log01282748e33oLrm'),
(120, 'deleted', 'The Usefulnes of IT Skills', 'article', 'admin7115698293', '18:09:15', '2018-04-16', 'log82173T5e131h5'),
(121, 'deleted', 'gghh', 'Campus article', 'admin7115698293', '18:09:32', '2018-04-16', 'logg14h8g3h078575'),
(122, 'deleted', 'dfhh', 'campus_article', 'admin7115698293', '18:16:19', '2018-04-16', 'logd540h2759fh66'),
(123, 'deleted', 'tyhjkl fghj', 'campus_article', 'admin7115698293', '18:16:24', '2018-04-16', 'log4517yklj986ht970'),
(124, 'deleted', 'tyhjkl', 'campus_article', 'admin7115698293', '18:16:28', '2018-04-16', 'loglk93jt3373742y0h'),
(125, 'deleted', 'tghjktyyuhjk', 'campus_article', 'admin7115698293', '18:16:32', '2018-04-16', 'logt785kt346jg6ku853jyhyh'),
(126, 'deleted', 'tghjk', 'campus_article', 'admin7115698293', '18:16:37', '2018-04-16', 'log31h62kj0g5415t6'),
(127, 'deleted', 'yihlkn', 'campus_article', 'admin7115698293', '18:16:41', '2018-04-16', 'log2k64i6l4696h4yn3'),
(128, 'deleted', 'ghjguyjk hjguygj', 'insight', 'admin7115698293', '18:16:52', '2018-04-16', 'logg2uh0yj33j7g126k46'),
(129, 'deleted', 'Posi is a good boy', 'insight', 'admin7115698293', '18:16:56', '2018-04-16', 'log739o7Pi83s6394'),
(130, 'deleted', 'OLa olu is a stupid Boy', 'insight', 'admin7115698293', '18:17:00', '2018-04-16', 'logL712217O1678a'),
(131, 'deleted', 'The Usefulnes of IT Skills', 'insight', 'admin7115698293', '18:17:04', '2018-04-16', 'log358h84T46645e'),
(132, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing .hello', 'event', 'admin7115698293', '18:17:24', '2018-04-16', 'logL268r613388eo1m'),
(133, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing .', 'event', 'admin7115698293', '18:17:29', '2018-04-16', 'logm6o01228665rLe2'),
(134, 'deleted', 'Lorem ipsum dolor sit amet, consectetur adipisicing .', 'event', 'admin7115698293', '18:17:39', '2018-04-16', 'log196922602o6meLr'),
(135, 'deleted', 'Web Seminar for women', 'event', 'admin7115698293', '18:17:43', '2018-04-16', 'log047W0be00016'),
(136, 'edited', '<blockquote><h3>Who We Are</h3><p>Thinking School is an emerging news and information platform, out to provide information to people of different, region, beliefs, cadres and status.</p><p>We curate news from various platforms and reach out to people in the internet space to provide for them real time updates on news, events, insights and articles. We support various Nigeria institutions &nbsp;and allow students to upload their articles, as we bring them news from other various institutions.</p><p>To stay&nbsp;updated on our progress and to receive our most important content, Visit our page often &nbsp;as we have various materials to keep you informed. For other enquiries, please send an email to: info@Thinking School.com.</p></blockquote>', 'about', 'admin7115698293', '18:24:02', '2018-04-16', 'logch303b8h>We>k8to67oo7<1l09qu<'),
(137, 'added', 'Herdsmen slay four policemen, 32 villagers', 'news', 'admin7115698293', '02:09:34', '2018-04-17', 'log3m33de77He41nr743s'),
(138, 'edited', 'Herdsmen slay four policemen, 32 villagers', 'news', 'admin7115698293', '02:22:07', '2018-04-17', 'logre991e6699Hsm0n7d6'),
(139, 'edited', 'Herdsmen slay four policemen, 32 villagers (Demo Content)', 'news', 'admin7115698293', '02:37:57', '2018-04-17', 'loged72s1525H9ren75m7'),
(140, 'added', 'NEWS US ambassador advises Nigerians on 2019 elections', 'news', 'admin7115698293', '03:30:11', '2018-04-17', 'logES71382W4N2651'),
(141, 'edited', 'NEWS US ambassador advises Nigerians on 2019 elections(DEMO CONTENT)', 'news', 'admin7115698293', '03:30:38', '2018-04-17', 'log3N40WS911E6896'),
(142, 'added', 'Nobody will read my biography because of my past â€“ IBB (Demo Content)', 'news', 'admin7115698293', '03:41:30', '2018-04-17', 'logo738dN716yo60b55'),
(143, 'edited', '1', 'admin level for admin9591825064', 'admin7115698293', '13:13:13', '2018-04-17', 'log93698121988'),
(144, 'edited', '3', 'admin level for admin9591825064', 'admin7115698293', '13:14:10', '2018-04-17', 'log94636303720'),
(145, 'added', 'yguhklj;', 'news', 'admin9591825064', '13:17:45', '2018-04-17', 'logl60122y;u176hkj8g'),
(146, 'edited', '2', 'admin level for admin9591825064', 'admin7115698293', '13:25:09', '2018-04-17', 'log05644482266'),
(147, 'edited', '4', 'admin level for admin9591825064', 'admin7115698293', '13:44:37', '2018-04-17', 'log253904042'),
(148, 'edited', '3', 'admin level for admin9591825064', 'admin7115698293', '13:46:16', '2018-04-17', 'log09349113774'),
(149, 'edited', '4', 'admin level for admin9591825064', 'admin7115698293', '14:03:22', '2018-04-17', 'log86591851472'),
(150, 'edited', '6', 'admin level for admin9591825064', 'admin7115698293', '14:03:57', '2018-04-17', 'log73757068473'),
(151, 'edited', '3', 'admin level for admin9591825064', 'admin7115698293', '14:04:38', '2018-04-17', 'log2051634054'),
(152, 'edited', '2', 'admin level for admin9591825064', 'admin7115698293', '14:05:00', '2018-04-17', 'log28125815332'),
(153, 'edited', '6', 'admin level for admin9591825064', 'admin7115698293', '14:14:17', '2018-04-17', 'log97616347278'),
(154, 'deleted', 'yguhklj;', 'news', 'admin7115698293', '14:14:50', '2018-04-17', 'loghl837j;71y009u28gk'),
(155, 'added', 'ghjkl', 'news', 'admin7115698293', '17:37:08', '2018-04-17', 'log3ghk6489lj411'),
(156, 'added', 'fghjkl', 'news', 'admin7115698293', '17:37:53', '2018-04-17', 'loghk86f9297l2g470j'),
(157, 'added', 'yugkjl', 'news', 'admin7115698293', '17:40:00', '2018-04-17', 'log33l884u7ky6844gj'),
(158, 'added', 'hjjkhjjij', 'news', 'admin7115698293', '17:44:12', '2018-04-17', 'logjh2jik11h66j409j25j'),
(159, 'added', 'yughoukil', 'news', 'admin7115698293', '17:44:41', '2018-04-17', 'loggu4oi4843uyh67699lk'),
(160, 'edited', 'uploads/4139148_96549173_40341f11-b1aa-4cdb-9db0-7ef37e08c74b.jpg', 'image', 'admin7115698293', '18:21:18', '2018-04-17', 'log9.1e-09d1b0473840u4511sdfl1f9b-33a6015a9d/7e477bcg4p5o4b-p3a7j9336c-_8416_3'),
(161, 'edited', '3', 'admin level for admin2023731819', 'admin7115698293', '21:46:26', '2018-04-17', 'log31727435552'),
(162, 'added', 'Lifestyle', 'package', 'admin7115698293', '11:48:26', '2018-04-18', 'log9i5f542y63t8eeL50ls'),
(163, 'added', 'WORKPLACE ETHICS: 9 THINGS YOU SHOULD KNOW', 'insight', 'admin7115698293', '12:06:05', '2018-04-18', 'logKPL66CO1A927948EWR'),
(164, 'edited', 'WORKPLACE ETHICS: 9 THINGS YOU SHOULD KNOW', 'insight', 'admin7115698293', '12:07:22', '2018-04-18', 'log2E8K0WRP285O6AL0C52'),
(165, 'edited', 'WORKPLACE ETHICS: 9 THINGS YOU SHOULD KNOW', 'insight', 'admin7115698293', '12:09:43', '2018-04-18', 'logK1OE47L586PA2CW345R'),
(166, 'edited', 'WORKPLACE ETHICS: 9 THINGS YOU SHOULD KNOW', 'insight', 'admin7115698293', '12:16:26', '2018-04-18', 'logR89E647K8OPA2L8C17W'),
(167, 'added', 'YOUR PAST AND THE FUTURE: STEPPING STONES FOR SUCCESS â€“ FEMI FOLORUNSHO (PROTEGE)', 'insight', 'admin7115698293', '12:57:54', '2018-04-18', 'log03R0Y87U22O490'),
(168, 'added', '#YOUTHNOW: 3 THINGS WE MUST DO TO MAKE OUR VOICES HEARD', 'insight', 'admin7115698293', '13:51:17', '2018-04-18', 'logN8O13T8YO7#3HUW:2128'),
(169, 'edited', '#YOUTHNOW: 3 THINGS WE MUST DO TO MAKE OUR VOICES HEARD', 'insight', 'admin7115698293', '13:53:21', '2018-04-18', 'logH8T448U#922NY22OW4:O'),
(170, 'edited', 'uploads/3286155business_ethics.jpg', 'image', 'admin7115698293', '14:44:33', '2018-04-18', 'logo6e13pl9n47.cssui5d3b09hs6utj_5867s2/iag2eps'),
(171, 'deleted', 'yughoukil', 'news', 'admin7115698293', '04:47:39', '2018-04-28', 'logl68ui813uyhk4545og7'),
(172, 'deleted', 'hjjkhjjij', 'news', 'admin7115698293', '04:47:47', '2018-04-28', 'logk07hjjj601jh9100ji8'),
(173, 'deleted', 'yugkjl', 'news', 'admin7115698293', '04:47:51', '2018-04-28', 'logk4l1uy625j39845g'),
(174, 'deleted', 'fghjkl', 'news', 'admin7115698293', '04:47:55', '2018-04-28', 'logf50495lh0g8j4k82'),
(175, 'deleted', 'ghjkl', 'news', 'admin7115698293', '04:48:01', '2018-04-28', 'log36j75kg82810h2l'),
(176, 'edited', '4', 'admin level for admin168551024', 'admin7115698293', '13:35:09', '2018-04-28', 'log91907446231'),
(177, 'added', 'WOMEN OF FAITH ANNUAL CONFERENCE', 'training', 'admin7115698293', '17:32:59', '2018-04-28', 'logOM58W63296742EN'),
(178, 'added', 'Redis  Conference', 'training', 'admin7115698293', '18:27:46', '2018-04-28', 'logd5e342R6806s46i'),
(179, 'edited', '3', 'admin level for admin8291345862', 'admin7115698293', '20:10:15', '2018-04-28', 'log43375329777'),
(180, 'added', 'SwapSpace System Web Development Training.', 'grant', 'admin7115698293', '21:04:32', '2018-04-28', 'logae6aSS49p0354w6c47p'),
(181, 'added', 'Enactus Oncampus competition', 'event', 'admin7115698293', '21:08:58', '2018-04-28', 'log3Ect936395s8a3nu0'),
(182, 'added', 'ijkl;', 'news', 'admin7115698293', '23:33:50', '2018-04-29', 'logj42k8i7157l43;7'),
(183, 'deleted', 'ijkl;', 'news', 'admin7115698293', '23:34:23', '2018-04-29', 'log260ik911;l22j54'),
(184, 'added', '5 cancer causing foods in your diet you did not know', 'article', 'admin8291345862', '23:35:14', '2018-04-29', 'log57451994175'),
(185, 'added', '5 cancer causing foods in your diet you did not know', 'article', 'admin8291345862', '23:35:14', '2018-04-29', 'log10558750391'),
(186, 'edited', '5 cancer causing foods in your diet you did not know', 'article', 'admin7115698293', '23:41:43', '2018-04-29', 'log25718292215'),
(187, 'edited', '5 cancer causing foods in your diet you did not know', 'article', 'admin7115698293', '23:41:58', '2018-04-29', 'log00518523494'),
(188, 'added', 'Boko Haram: Military winning the Lake Chad war despite losses â€“ General Irabor', 'news', 'admin8291345862', '23:48:07', '2018-04-29', 'logBk12706538o5o8'),
(189, 'added', 'General', 'campus', 'admin7115698293', '23:49:55', '2018-04-29', 'log62lr4n395Ga5e3e37'),
(190, 'added', 'PDP chieftain kidnapped', 'news', 'admin8291345862', '23:57:21', '2018-04-29', 'logD8PP7541963'),
(191, 'added', '5 signs that you''re stuck in a loveless marriage', 'article', 'admin8291345862', '00:11:38', '2018-04-30', 'log41556213128'),
(192, 'added', '5 signs that you''re stuck in a loveless marriage', 'article', 'admin8291345862', '00:11:38', '2018-04-30', 'log12520138882'),
(193, 'added', '''Indescribable emotions'' for Barca skipper Iniesta', 'news', 'admin8291345862', '00:17:00', '2018-04-30', 'lognb93lab''ie42ds9r2e9c47I6'),
(194, 'added', 'Charles Okocha''s #AccoladesChallenge is taking over social media', 'news', 'admin8291345862', '00:25:41', '2018-04-30', 'log1rC9s00l3h71e74a2'),
(195, 'added', 'Author finally explains why she asked Hillary Clinton that ''Wife'' question', 'news', 'admin8291345862', '00:29:35', '2018-04-30', 'log5441t03uo01rh5A'),
(196, 'added', 'President Buhari Arrives Washington DC, To Hold Talks With Trump', 'news', 'admin8291345862', '00:34:04', '2018-04-30', 'logei34tr9n5d22P7e421s'),
(197, 'edited', 'Charles Okocha''s #AccoladesChallenge is taking over social media', 'news', 'admin7115698293', '00:36:26', '2018-04-30', 'log73sa40e4r3441hl9C'),
(198, 'added', 'â€œObasanjo Is Not God And He Canâ€™t Decide My Fateâ€ â€“ Atiku', 'news', 'admin8291345862', '00:37:53', '2018-04-30', 'log83na7â€j516a7oœ3s6Ob1'),
(199, 'edited', 'Author finally explains why she asked Hillary Clinton that ''Wife'' question', 'news', 'admin7115698293', '00:38:58', '2018-04-30', 'log985o27rAh5u548t2'),
(200, 'edited', 'Author finally explains why she asked Hillary Clinton that ''Wife'' question', 'news', 'admin7115698293', '00:39:25', '2018-04-30', 'logh3596r5ut4o639A6'),
(201, 'edited', 'Author finally explains why she asked Hillary Clinton that ''Wife'' question', 'news', 'admin7115698293', '00:39:48', '2018-04-30', 'log44A6thor264597u1'),
(202, 'added', 'uggjhkkhn344689%6758&98)*9-9875%^46', 'article', 'admin7115698293', '00:47:27', '2018-04-30', 'log96397768%8g48h3%4896j*58)464ku1-g7k9n80^8h4&5'),
(203, 'added', 'uggjhkkhn344689%6758&98)*9-9875%^46', 'article', 'admin7115698293', '00:47:27', '2018-04-30', 'log9g368h9%&5797n%k8u3)55836*8h4j780k^g7-4943469'),
(204, 'deleted', 'uggjhkkhn344689%6758&98)*9-9875%^46', 'article', 'admin7115698293', '00:50:10', '2018-04-30', 'logu5295k0-3h891n-64944-55g5mj4h78-a-768g899pk7-68'),
(205, 'edited', 'Charles Okocha''s #AccoladesChallenge is taking over social media', 'news', 'admin7115698293', '00:54:35', '2018-04-30', 'loge6a155srl854h514c'),
(206, 'edited', 'Charles Okocha''s #AccoladesChallenge is taking over social media', 'news', 'admin7115698293', '00:55:23', '2018-04-30', 'log6681h8sl3a407er5c'),
(207, 'added', 'yuhgjhl', 'event', 'admin7115698293', '00:57:30', '2018-04-30', 'log20y858hh2lu3107gj'),
(208, 'added', 'Miracle Reveals Who He Would Be Taking Along To His All-Expense Paid Trip To Dubai', 'news', 'admin8291345862', '00:59:32', '2018-04-30', 'logci09a4lm124r0e002'),
(209, 'deleted', 'yuhgjhl', 'event', 'admin7115698293', '01:11:05', '2018-04-30', 'log7j41yuh84l991h9g7'),
(210, 'added', 'hjjvhjkg', 'article', 'admin7115698293', '01:35:04', '2018-04-30', 'log99vj096jh00gj29hk'),
(211, 'added', 'hjjvhjkg', 'article', 'admin7115698293', '01:35:04', '2018-04-30', 'logj2j6g88550kv4hh2j0'),
(212, 'edited', 'Miracle Reveals Who He Would Be Taking Along To His All-Expense Paid Trip To Dubai', 'news', 'admin7115698293', '01:37:25', '2018-04-30', 'loge3l0a8r69786imc37'),
(213, 'added', 'jkhkj', 'event', 'admin7115698293', '01:58:35', '2018-04-30', 'loghj049kj1k556928'),
(214, 'deleted', 'hjjvhjkg', 'article', 'admin7115698293', '02:31:27', '2018-04-30', 'logj7gh2v7k6740jh94j5'),
(215, 'edited', '5 cancer causing foods in your diet you did not know', 'article', 'admin7115698293', '02:38:02', '2018-04-30', 'log16215552407'),
(216, 'added', 'SwapSpace System Web Development Training.', 'grant', 'ver', '04:20:48', '2018-04-30', 'loga70wp7sp8ca0se52075'),
(217, 'added', 'SwapSpace System Web Development Training.', 'grant', 'admin7115698293', '09:40:01', '2018-04-30', 'loga9p1wpe40ssca861774'),
(218, 'edited', 'uploads/6325148unnamed.png', 'image', 'admin7115698293', '09:40:38', '2018-04-30', 'logd539nu5laa9mesnd8g71n4-29u-53p7p13o6'),
(219, 'edited', 'uploads/5177619kab.png', 'image', 'admin7115698293', '09:41:16', '2018-04-30', 'log-57-8a4lo71au218sbp4p6n76gkd5109'),
(220, 'edited', 'uploads/2550359Man_Logo_RGB.jpg', 'image', 'admin7115698293', '09:41:43', '2018-04-30', 'logl8gp-g05u5ojp52dg-a234loars5n009o1b-m65-'),
(221, 'edited', 'uploads/3725892Aptamil_pronutra_packaging_3B-3.jpg', 'image', 'admin7115698293', '09:42:18', '2018-04-30', 'log65i3g28c-tp1nr2m-97-ad5a3lpakun5i-r24bpaupoa8g9o3ltj3a--2psg'),
(222, 'edited', 'uploads/5272709Aptamil_pronutra_packaging_3B-3.jpg', 'image', 'admin7115698293', '09:43:45', '2018-04-30', 'log2dguoaot-l25g3s94a0p2rnb-31-m8tknl3376i-p7gpai1ac1rapj2--aup'),
(223, 'edited', 'uploads/5390733Aptamil_pronutra_packaging_3B-3.jpg', 'image', 'admin7115698293', '09:46:29', '2018-04-30', 'loggpbi-ac7o3kj-gu5s-87-mrlutno-0a9pldair3g3ap30p-33n102p3ata32'),
(224, 'edited', 'uploads/66659972015-12-08_11_04_30-Man_AHL_logo_cmyk_300_dpi.jpg_-_Windows_Photo_Viewer.png', 'image', 'admin7115698293', '09:46:53', '2018-04-30', 'log-oj1o1ln----hmn-o-82nd55-91-is22-8lw-e6p0cs-i2rpd-04e0-76315lk79o9ga-m-0wt40a0a-g0hwpiy3p3odo26gvpu'),
(225, 'deleted', 'SwapSpace System Web Development Training.', 'grants', 'admin7115698293', '09:47:01', '2018-04-30', 'logp3wcae8as3466s2p161'),
(226, 'deleted', 'SwapSpace System Web Development Training.', 'grants', 'admin7115698293', '09:47:09', '2018-04-30', 'log06aw83p6s7e99c2spa3'),
(227, 'edited', 'uploads/4177981DbIv2qqWAAAPnCO.jpg', 'image', 'admin7115698293', '10:13:56', '2018-04-30', 'logs5ca-g7ao32qo9117d2-nq82vpw7uj4ia1a6ppl4bd82'),
(228, 'edited', 'Software Development Training.', 'grants', 'admin7115698293', '10:24:31', '2018-04-30', 'logw3386s3a54r936tfeo'),
(229, 'added', 'Front-End Development Training', 'grant', 'admin7115698293', '10:40:41', '2018-04-30', 'log6r628t0-81o4fnn8de'),
(230, 'edited', 'uploads/7507556DbIwDgQX0AE3uNP.jpg', 'image', 'admin7115698293', '10:41:13', '2018-04-30', 'log2pui0-70pd3u53o68675gape4n0-5qsj2d0d0ax3gwbl'),
(231, 'edited', 'Front-End Development Training', 'grants', 'admin7115698293', '10:44:32', '2018-04-30', 'log47re5d5t62n35-n9f8o'),
(232, 'edited', 'Software Development Training.', 'grants', 'admin7115698293', '10:45:28', '2018-04-30', 'logr6oae621tsfw381838'),
(233, 'edited', 'Front-End Development Training', 'grants', 'admin7115698293', '10:46:05', '2018-04-30', 'logontf0-r6e1n31d93290'),
(234, 'edited', 'Front-End Development Training', 'grants', 'admin7115698293', '10:52:43', '2018-04-30', 'log1n2ndr6f-t28688e0o4'),
(235, 'edited', 'Software Development Training.', 'grants', 'admin7115698293', '11:13:40', '2018-04-30', 'log0a64tos72fw02e85r1'),
(236, 'edited', 'Software Development Training.', 'grants', 'admin7115698293', '11:16:59', '2018-04-30', 'log44os6ef944rw5at21'),
(237, 'edited', 'Software Development Training.', 'grants', 'admin7115698293', '11:18:05', '2018-04-30', 'log52ef145aw93t094sor'),
(238, 'edited', 'Software Development Training.', 'grants', 'admin7115698293', '11:36:28', '2018-04-30', 'logaftroes988131w585'),
(239, 'edited', 'Software Development Training.', 'grants', 'admin7115698293', '11:39:44', '2018-04-30', 'log3s58erf5oat613166w'),
(240, 'edited', 'Software Development Training.', 'grants', 'admin7115698293', '11:51:45', '2018-04-30', 'log545f7240arew2s82ot'),
(241, 'edited', 'Front-End Development Training', 'grants', 'admin7115698293', '19:54:19', '2018-04-30', 'logo50ten648-87dr9nf98'),
(242, 'added', 'Man escapes death after being caught having sex with married woman', 'news', 'admin8291345862', '00:24:40', '2018-05-01', 'log55a5n04990m26'),
(243, 'edited', 'uploads/3622527article-jungle_justice.jpg', 'image', 'admin8291345862', '00:26:15', '2018-05-01', 'logi-2-r23g5jd1ju2u7sc-psl9p7teleoca62l6201in8t-uejag'),
(244, 'added', '11 children killed in suicide attack on foreign convoy', 'news', 'admin8291345862', '00:34:47', '2018-05-01', 'log625103116771'),
(245, 'added', 'Things ''going very well,'' President says after talk with S.Korea''s Moon', 'news', 'admin8291345862', '00:40:25', '2018-05-01', 'logi4t91n3h754s0g29'),
(246, 'edited', '11 children killed in suicide attack on foreign convoy', 'news', 'admin8291345862', '00:41:53', '2018-05-01', 'log344321421045'),
(247, 'edited', '11 children killed in suicide attack on foreign convoy', 'news', 'admin8291345862', '00:42:44', '2018-05-01', 'log133109129681'),
(248, 'edited', 'Things ''going very well,'' President says after talk with S.Korea''s Moon', 'news', 'admin8291345862', '00:43:37', '2018-05-01', 'logs58ngt7123ih631'),
(249, 'edited', 'Man escapes death after being caught having sex with married woman', 'news', 'admin8291345862', '00:44:24', '2018-05-01', 'log42a00n593211m'),
(250, 'added', 'Protect Nigerians against spate of killings, Trump tells Buhari', 'news', 'admin8291345862', '00:53:24', '2018-05-01', 'loger28807ptc042o1t6'),
(251, 'added', '10 foods you''ve been pronouncing wrong all your life', 'article', 'admin8291345862', '01:04:04', '2018-05-01', 'log257401729259'),
(252, 'added', '10 foods you''ve been pronouncing wrong all your life', 'article', 'admin8291345862', '01:04:04', '2018-05-01', 'log880418852101'),
(253, 'added', '5 things you can only buy in Nigeria', 'article', 'admin8291345862', '01:15:23', '2018-05-01', 'log57385167939'),
(254, 'added', '5 things you can only buy in Nigeria', 'article', 'admin8291345862', '01:15:23', '2018-05-01', 'log68315703120'),
(255, 'added', 'Singer gifts Chioma with Porshe as she turns 23', 'news', 'admin8291345862', '01:42:40', '2018-05-01', 'log1sei364n44g3500r'),
(256, 'edited', 'uploads/5902655davido_porsche_chioma.jpg', 'image', 'admin8291345862', '01:46:07', '2018-05-01', 'logsa2opvo5-i551-rp5oedo5p69dh--m0h47gjd2iaasc5u5c62l'),
(257, 'edited', 'PDP chieftain kidnapped', 'news', 'admin7115698293', '08:31:09', '2018-05-01', 'log6dp12272p5859'),
(258, 'edited', '2', 'admin level for admin7851792597', 'admin7115698293', '10:00:16', '2018-05-01', 'log28585598197'),
(259, 'added', 'The secret burden of mental illness in Hong Kong', 'article', 'admin2023731819', '12:09:36', '2018-05-01', 'log46905t19904he'),
(260, 'added', 'The secret burden of mental illness in Hong Kong', 'article', 'admin2023731819', '12:09:36', '2018-05-01', 'log6h0407326e7t8'),
(261, 'added', 'Iran calls Netanyahu ''infamous liar'' over nuclear documents', 'news', 'admin2023731819', '12:18:43', '2018-05-01', 'log6r42738859ina3'),
(262, 'added', 'Facebook F8: Can Zuckerberg restore trust at developer conference?', 'news', 'admin2023731819', '12:21:45', '2018-05-01', 'logf05boao74c473e60k5'),
(263, 'added', 'Drones to the rescue!', 'article', 'admin2023731819', '12:32:50', '2018-05-01', 'log7d51oe559sn3622r'),
(264, 'added', 'Drones to the rescue!', 'article', 'admin2023731819', '12:32:50', '2018-05-01', 'log7do9e76s891n97r3'),
(265, 'added', 'Real Madrid vs Bayern Munich: Zidaneâ€™s men qualify for Champions League final', 'news', 'admin8291345862', '23:20:00', '2018-05-01', 'log045414l500r7ae'),
(266, 'added', 'BREAKING: 10 killed as herdsmen attack Guma in Benue', 'news', 'admin8291345862', '23:37:15', '2018-05-01', 'log1re2kn5ib697459g8a'),
(267, 'added', 'May Day: Buhari addresses Nigerian workers, speaks on minimum wage', 'news', 'admin8291345862', '23:56:31', '2018-05-01', 'log04038a7ym0267'),
(268, 'added', 'Reps, minister, Nigeriaâ€™s ICT stakeholders show up for CloudCover unveiling in Abuja', 'news', 'admin8291345862', '00:10:57', '2018-05-02', 'log207re205p80s57'),
(269, 'edited', 'Reps, minister, Nigeriaâ€™s ICT stakeholders show up for CloudCover unveiling in Abuja', 'news', 'admin7115698293', '02:50:02', '2018-05-02', 'log0959rp9s001e89'),
(270, 'deleted', 'Author finally explains why she asked Hillary Clinton that ''Wife'' question', 'news', 'admin7115698293', '02:56:23', '2018-05-02', 'log5711ho01a38t0ur2'),
(271, 'deleted', 'Charles Okocha''s #AccoladesChallenge is taking over social media', 'news', 'admin7115698293', '02:56:34', '2018-05-02', 'loge190lrc5152ah904s'),
(272, 'edited', 'Real Madrid vs Bayern Munich: Zidaneâ€™s men qualify for Champions League final', 'news', 'admin7115698293', '03:12:30', '2018-05-02', 'log8la7775e673r78'),
(273, 'added', 'Sports', 'news category', 'admin7115698293', '03:13:15', '2018-05-02', 'logs5opt09r03s90697'),
(274, 'edited', 'Real Madrid vs Bayern Munich: Zidaneâ€™s men qualify for Champions League final', 'news', 'admin7115698293', '03:14:19', '2018-05-02', 'loger250760a33l98'),
(275, 'edited', '''Indescribable emotions'' for Barca skipper Iniesta', 'news', 'admin7115698293', '03:15:04', '2018-05-02', 'logsi2b247elb0adc7r7nie846'),
(276, 'edited', '''Indescribable emotions'' for Barca skipper Iniesta', 'news', 'admin7115698293', '03:19:50', '2018-05-02', 'log6e42b379bi5daciren5s8l7'),
(277, 'deleted', 'jkhkj', 'event', 'admin7115698293', '03:41:07', '2018-05-02', 'logh43jj32k5615k30'),
(278, 'deleted', 'Enactus Oncampus competition', 'event', 'admin7115698293', '03:41:27', '2018-05-02', 'log20t9976usea01c80n'),
(279, 'added', 'EKSU', 'campus', 'admin7115698293', '05:21:26', '2018-05-02', 'log651sk7e03354u4'),
(280, 'added', 'Corruption', 'article', 'admin7115698293', '05:29:24', '2018-05-02', 'logti421run677r5o64co3p'),
(281, 'added', 'Corruption', 'Campus article for2KS877626U546E', 'admin7115698293', '05:29:24', '2018-05-02', 'logr1040i5nuc95t71rpoo0'),
(282, 'edited', 'uploads/9257644000_14G2H9-768x520.jpg', 'image', 'admin7115698293', '08:44:02', '2018-05-02', 'log97p1a104-oxg5j245s5602hl-04g70p-2186d572690-u02'),
(283, 'deleted', 'Iran calls Netanyahu ''infamous liar'' over nuclear documents', 'news', 'admin7115698293', '08:45:50', '2018-05-02', 'log5n9i76625r31a1'),
(284, 'edited', 'Facebook F8: Can Zuckerberg restore trust at developer conference?', 'news', 'admin7115698293', '08:53:10', '2018-05-02', 'logoc25200a3bf8koe369'),
(285, 'edited', '4', 'admin level for admin7851792597', 'admin7115698293', '17:49:22', '2018-05-02', 'log29154643164'),
(286, 'edited', '4', 'admin level for admin7851792597', 'admin7115698293', '17:49:23', '2018-05-02', 'log77329242944'),
(287, 'added', 'Enactus Students Build Machines that generates Electricity', 'article', 'admin7115698293', '15:36:08', '2018-05-03', 'logs7221e79ct514una4'),
(288, 'added', 'Enactus Students Build Machines that generates Electricity', 'Campus article for2KS877626U546E', 'admin7115698293', '15:36:08', '2018-05-03', 'logas7ucn5604494et58'),
(289, 'edited', 'Enactus Students Build Machines that generates Electricity', 'Campus article', 'admin7115698293', '15:40:38', '2018-05-03', 'log9a1cu4853s70n6te1'),
(290, 'edited', 'Enactus Students Build Machines that generates Electricity', 'Campus article', 'admin7115698293', '15:42:43', '2018-05-03', 'loge8unt452sc81a2320'),
(291, 'added', 'jkbijk', 'article', 'admin7115698293', '15:44:54', '2018-05-03', 'log664kjk14b8ji8214'),
(292, 'added', 'jkbijk', 'Campus article for2E2R5LN811G993EA3', 'admin7115698293', '15:44:54', '2018-05-03', 'logb18k89i961j74j2k'),
(293, 'edited', 'jkbijk', 'Campus article', 'admin7115698293', '15:45:17', '2018-05-03', 'log5bjik02k790j773'),
(294, 'edited', 'jkbijk', 'Campus article', 'admin7115698293', '15:46:54', '2018-05-03', 'logjjib696k390460k4'),
(295, 'edited', 'jkbijk', 'Campus article', 'admin7115698293', '15:47:23', '2018-05-03', 'log8ij39k4k6041j45b'),
(296, 'edited', 'jkbijk hjjgjh', 'Campus article', 'admin7115698293', '15:49:00', '2018-05-03', 'log2jk525k7j2b0i844'),
(297, 'edited', 'Enactus Students Build Machines that generates Electricity', 'Campus article', 'admin7115698293', '15:51:10', '2018-05-03', 'log9eun94a48st730c4'),
(298, 'edited', 'Enactus Students Build Machines that generates Electricity', 'Campus article', 'admin7115698293', '15:54:36', '2018-05-03', 'logns8ct7a7u9895e75'),
(299, 'edited', 'Enactus Students Build Machines that generates Electricity', 'Campus article', 'admin7115698293', '15:55:03', '2018-05-03', 'log435e92cs4ut2na'),
(300, 'edited', 'Enactus Students Build Machines that generates Electricity', 'Campus article', 'admin7115698293', '15:56:15', '2018-05-03', 'log95a537e8t1s6uc8n9'),
(301, 'deleted', 'Enactus Students Build Machines that generates Electricity', 'exploits', 'admin7115698293', '16:38:12', '2018-05-03', 'log8125n38astc11eu76'),
(302, 'edited', 'Drones to the rescue!', 'article', 'admin7115698293', '06:14:11', '2018-05-04', 'lognde3934ro974s069'),
(303, 'added', 'Nigerian Senator Dino Melaye and his many scandals', 'news', 'admin7115698293', '22:46:29', '2018-05-04', 'loge830r72545niing60a'),
(304, 'edited', 'Luyanda Ntshangase: South African footballer dies after lightning strike', 'news', 'admin7115698293', '22:47:22', '2018-05-04', 'log361175ly3d90nu3aa'),
(305, 'added', 'Donald Trump: Time and place set for North Korea meeting', 'news', 'admin2023731819', '07:58:17', '2018-05-05', 'log440l59d71o6a2d3n'),
(306, 'edited', '5', 'admin level for admin5767077300', 'admin7115698293', '09:18:33', '2018-05-05', 'log22595103989'),
(307, 'added', 'High winds in southern Ontario area leave 2 dead, and more than 100,000 without power', 'news', 'admin7115698293', '10:29:21', '2018-05-05', 'log414hi41409h16g'),
(308, 'edited', '8', 'admin level for admin6561856488', 'admin7115698293', '13:52:58', '2018-05-05', 'log76072928173'),
(309, 'edited', '8', 'admin level for admin6916561010', 'admin7115698293', '14:01:44', '2018-05-05', 'log27288957354'),
(310, 'added', 'uikjhi', 'article', 'admin6916561010', '14:02:55', '2018-05-05', 'log12h5ikj63880u56i'),
(311, 'added', 'uikjhi', 'Campus article for2KS877626U546E', 'admin6916561010', '14:02:55', '2018-05-05', 'log6jk856ui19i65h9'),
(312, 'added', 'ENACT ENGINE; THE FUTURE OF SUSTAINABLE POWER SUPPLY', 'article', 'admin6561856488', '14:31:04', '2018-05-05', 'logac41t186617en25'),
(313, 'added', 'ENACT ENGINE; THE FUTURE OF SUSTAINABLE POWER SUPPLY', 'Campus article for2KS877626U546E', 'admin6561856488', '14:31:04', '2018-05-05', 'logn19e131t68c95a6'),
(314, 'added', 'The HEADIES 2018: The Countdown Begins!', 'news', 'admin2023731819', '15:04:19', '2018-05-05', 'logt74986h05e876'),
(315, 'edited', 'ENACT ENGINE; THE FUTURE OF SUSTAINABLE POWER SUPPLY', 'Campus article', 'admin6561856488', '18:15:36', '2018-05-05', 'log9tn6ca81e763271'),
(316, 'deleted', 'uikjhi', 'exploits', 'admin7115698293', '19:40:41', '2018-05-05', 'log225ikuh65117i07j'),
(317, 'deleted', 'jkbijk', 'exploits', 'admin7115698293', '19:51:24', '2018-05-05', 'logjkj59498ik7235b'),
(318, 'edited', 'ENACT ENGINE; THE FUTURE OF SUSTAINABLE POWER SUPPLY', 'Campus article', 'admin7115698293', '19:53:19', '2018-05-05', 'logca799e49895t26n'),
(319, 'edited', 'YOUR PAST AND THE FUTURE: STEPPING STONES FOR SUCCESS â€“', 'insight', 'admin7115698293', '15:41:35', '2018-05-06', 'log75512o7y1u3r37'),
(320, 'added', 'NMA appeals to FG to honour agreements with JOHESU  Read more at: https://www.vanguardngr.com/2018/05/nma-appeals-fg-honour-agreements-johesu/', 'news', 'admin7115698293', '16:04:16', '2018-05-06', 'logm03683a3959n4'),
(321, 'edited', 'NMA appeals to FG to honour agreements with JOHESU', 'news', 'admin7115698293', '16:05:21', '2018-05-06', 'log669n2013m31a9'),
(322, 'added', 'City lift Premier League trophy as Huddersfield gain precious point', 'news', 'admin7115698293', '16:11:01', '2018-05-06', 'log330t62c21i838y'),
(323, 'added', 'OAU Sex-For-Mark Scandal: The Full Story', 'news', 'admin7851792597', '16:12:49', '2018-05-06', 'log6o14u1363969a'),
(324, 'added', 'OAU', 'campus', 'admin7115698293', '16:17:10', '2018-05-06', 'log44111au11387o'),
(325, 'added', 'Baraje cautions APC members against anti party activities', 'news', 'admin7115698293', '16:23:28', '2018-05-06', 'loge297838a2j3ab85r'),
(326, 'edited', 'Baraje cautions APC members against anti party activities', 'news', 'admin7115698293', '16:23:54', '2018-05-06', 'log63ja3a4r453be735'),
(327, 'added', '45 dead in attack by armed bandits in Kaduna', 'news', 'admin7115698293', '16:37:05', '2018-05-06', 'log544485835526'),
(328, 'added', 'Rector warns students against sex for mark', 'news', 'admin7115698293', '16:45:24', '2018-05-06', 'logr95t456c549e3or7'),
(329, 'added', 'Lokomotiv Leipzig fire two coaches for a Nazi salute', 'news', 'admin7115698293', '16:58:39', '2018-05-06', 'log54tkil322vo9om3o67'),
(330, 'added', 'Jos auto crash: 1 dead, 27 injured mostly students â€“ FRSC', 'news', 'admin7115698293', '17:01:26', '2018-05-06', 'log8s088121o11j1'),
(331, 'added', 'OAU', 'campus', 'admin7115698293', '17:07:02', '2018-05-06', 'log544uo103299a3'),
(332, 'added', 'OAU', 'campus', 'admin7115698293', '17:08:06', '2018-05-06', 'log4757a13u5022o'),
(333, 'edited', '5', 'admin level for admin3379036332', 'admin7115698293', '17:48:31', '2018-05-06', 'log38005745753'),
(334, 'edited', 'ENACT ENGINE; THE FUTURE OF SUSTAINABLE POWER SUPPLY', 'Campus article', 'admin6561856488', '18:27:32', '2018-05-06', 'log8c14en27480t4a1'),
(335, 'added', 'Police personnel decry continued discrepancies in salaries', 'news', 'admin7115698293', '04:14:21', '2018-05-07', 'logp7l5e1952o4661ic'),
(336, 'added', 'PDP bans Fayoseâ€™s aides from voting at primary', 'news', 'admin7115698293', '04:23:41', '2018-05-07', 'log93p5126p9066d'),
(337, 'added', 'Lassa fever outbreak slows, reduces risk to investors â€”WHO', 'news', 'admin7115698293', '04:32:06', '2018-05-07', 'log55sa92l575s355a'),
(338, 'added', 'Man drowns in Bayelsa after completing NYSC', 'article', 'admin2023731819', '08:06:25', '2018-05-07', 'log58m6n215669a'),
(339, 'added', 'Man drowns in Bayelsa after completing NYSC', 'article', 'admin2023731819', '08:06:25', '2018-05-07', 'log640a69n7927m9'),
(340, 'added', 'Protest in Eksu over Mid-Semester Exam and Smart School', 'news', 'admin7115698293', '10:53:36', '2018-05-07', 'log560e79p7st09to96r'),
(341, 'edited', 'Protest in Eksu over Mid-Semester Exam and Smart School', 'news', 'admin7115698293', '10:57:13', '2018-05-07', 'logste08t60144rp2o25'),
(342, 'edited', 'Protest in Eksu over Mid-Semester Exam and Smart School', 'news', 'admin7115698293', '10:59:44', '2018-05-07', 'log1994po72s2ett4r94'),
(343, 'edited', 'Protest in Eksu over Mid-Semester Exam and Smart School', 'news', 'admin7115698293', '11:02:58', '2018-05-07', 'logsptto7574046e95r5'),
(344, 'edited', '4', 'admin level for admin5823923153', 'admin7115698293', '15:02:08', '2018-05-07', 'log3501022934'),
(345, 'added', 'The woman who watched 300 executions in Texas', 'news', 'admin2023731819', '18:37:02', '2018-05-07', 'logh646037t1e923'),
(346, 'added', 'Russia to showcase robot tank in WW2 victory parade', 'news', 'admin7115698293', '04:03:20', '2018-05-08', 'logr056ss9u310a4i95'),
(347, 'added', 'I sold all I had to go to Europe - now I''m home, and broke', 'news', 'admin7115698293', '04:31:28', '2018-05-08', 'log3377198902i'),
(348, 'edited', 'uploads/4767150_101159055_lyons_976getty.jpg', 'image', 'admin7115698293', '04:36:27', '2018-05-08', 'log61y154e1p0906s50-o-50o-957p7yl71l0gt-5ug15-t1sdj5an559'),
(349, 'added', 'New York Attorney General Eric Schneiderman quits amid abuse reports', 'news', 'admin7115698293', '04:41:36', '2018-05-08', 'log7173e4nw47893'),
(350, 'added', 'Alabama ''miracle'' boy wakes before doctors pull plug', 'news', 'admin7115698293', '04:51:19', '2018-05-08', 'logaabma582a86437l6'),
(351, 'added', 'How police killed student doing menial job to pay school fees â€“ Reps', 'news', 'admin7115698293', '05:03:20', '2018-05-08', 'log2h9961o46998w'),
(352, 'edited', 'How police killed student doing menial job to pay school fees â€“ Reps', 'news', 'admin7115698293', '05:04:42', '2018-05-08', 'log0533o52594hw7'),
(353, 'added', 'Buhari embarks on four-day medical trip to UK today', 'news', 'admin7115698293', '05:09:56', '2018-05-08', 'logab6h53r19i18602u'),
(354, 'added', 'The Mueller probe: is the Fifth the last resort for Donald Trump?', 'news', 'admin7115698293', '11:33:11', '2018-05-08', 'log6976998e0ht3'),
(355, 'added', 'Leicester City vs Arsenal: latest team news', 'news', 'admin7115698293', '08:21:34', '2018-05-09', 'logi07l4eteerc198545s6'),
(356, 'edited', 'Leicester City vs Arsenal: latest team news', 'news', 'admin7115698293', '08:22:30', '2018-05-09', 'logl400r2sec4e5i6t189e'),
(357, 'added', 'Canada''s appetite for legal cannabis could be almost as big as it is for wine, CIBC says', 'news', 'admin7115698293', '08:31:21', '2018-05-09', 'log984an44a94a6-ds54c'),
(358, 'added', 'How to recover your stolen device as a student', 'article', 'admin7851792597', '10:41:16', '2018-05-09', 'log64372w5o2h36'),
(359, 'added', 'How to recover your stolen device as a student', 'Campus article for4A025962O734U', 'admin7851792597', '10:41:16', '2018-05-09', 'log37ho66w827089'),
(360, 'added', 'Roman Polanski threatens to sue Oscars organisers after being expelled', 'news', 'admin7115698293', '11:09:45', '2018-05-09', 'log53rn462m45o0a27'),
(361, 'added', 'Iranian lawmakers set paper US flag ablaze at parliament', 'news', 'admin2023731819', '11:58:19', '2018-05-09', 'log267nn3a435i9ar58i'),
(362, 'added', 'Anti-cancer drugs researcher made jobless, homeless by tax mistake', 'news', 'admin7115698293', '14:33:26', '2018-05-09', 'logcani842tena-6325c6r25'),
(363, 'edited', 'uploads/4446482home-office.jpg', 'image', 'admin7115698293', '14:34:58', '2018-05-09', 'logmj48li4cos328fop8-d0o462-fhp9u844-egae63'),
(364, 'added', 'FG approves Skyline varsity for Kano, N1.65bn for airport equipment', 'news', 'admin7115698293', '14:41:28', '2018-05-09', 'log077236f537g0'),
(365, 'added', 'Students attack teachers for not allowing them cheat in WASSCE', 'news', 'admin7115698293', '14:48:19', '2018-05-09', 'log7sns4439d673t31tue');
INSERT INTO `logs` (`id`, `type`, `content`, `category`, `action_by`, `time_created`, `date_created`, `hash_id`) VALUES
(366, 'added', '30-year-old woman stoned to death for having 11 husbands', 'news', 'admin7115698293', '14:51:02', '2018-05-09', 'log-8r-2l3y9330e203aod08'),
(367, 'added', 'Ex-naval officer arraigned for alleged assault on wife', 'news', 'admin7115698293', '14:54:20', '2018-05-09', 'log2v08na16al2x6-1e77'),
(368, 'added', 'Wife divorces husband who trained her from primary school to university', 'news', 'admin7115698293', '15:04:18', '2018-05-09', 'loge65228fi40w989'),
(369, 'added', 'OAU Studentsâ€™ Union Wants EFCC, ICPC, FIRS To Probe University Management For Fraud And Tax Evasion', 'news', 'admin7115698293', '17:20:05', '2018-05-09', 'log7u47255a0o26'),
(370, 'edited', 'OAU Studentsâ€™ Union Wants EFCC, ICPC, FIRS To Probe University Management For Fraud And Tax Evasion', 'news', 'admin7115698293', '17:33:37', '2018-05-09', 'log5o515ua404894'),
(371, 'edited', 'uploads/9037552images_(2).jpeg', 'image', 'admin7115698293', '17:34:09', '2018-05-09', 'log3-m6aep234ue2oai7p5826ljsgs27-dg-93502'),
(372, 'edited', 'uploads/7636803VP-Osinbajo-FEC.jpg', 'image', 'admin7115698293', '17:35:16', '2018-05-09', 'log-oel-6558s53vij9faso31o60j-6dcb-6pp7a03ugp7n'),
(373, 'edited', 'uploads/4141775VP-Osinbajo-FEC_(1).jpg', 'image', 'admin7115698293', '17:36:57', '2018-05-09', 'log7oejid7lgob1-3pp0v41-sauf-1-p4n779a5cs4-7j618o'),
(374, 'edited', 'uploads/1407341HJmeEX0ATz.jpg', 'image', 'admin7115698293', '17:37:45', '2018-05-09', 'logj461aud5lh7-0769a-5m4p7zs0txo3e3e441pgj'),
(375, 'edited', 'uploads/1219852FB_IMG_1508309748742-810x456.jpg', 'image', 'admin7115698293', '17:38:31', '2018-05-09', 'log5274497-bpi845780d-21p-f100l267o5gm0582j849xus2312a19g-9-'),
(376, 'edited', 'uploads/85844621_Q70hUe5dAZD3gz9GG1HH5w.jpeg', 'image', 'admin7115698293', '17:39:08', '2018-05-09', 'logoua80g91-7238zgpd4-e2h67z5s43qe4hdd625hj7g5w1l00aug5-p'),
(377, 'added', 'Opinions', 'package', 'admin7115698293', '17:54:58', '2018-05-09', 'log2inop2172s7i24o3n3'),
(378, 'added', 'What Exactly Are Doctors Doing In Nigeria? By ''Mayowa Tijani', 'insight', 'admin7115698293', '17:56:30', '2018-05-09', 'log067aw7936th608'),
(379, 'edited', 'What Exactly Are Doctors Doing In Nigeria?', 'insight', 'admin7115698293', '18:00:12', '2018-05-09', 'log9w111166aht821'),
(380, 'edited', 'What Exactly Are Doctors Doing In Nigeria?', 'insight', 'admin7115698293', '18:03:50', '2018-05-09', 'log59w3t91a498h45'),
(381, 'edited', 'What Exactly Are Doctors Doing In Nigeria? By ''Mayowa Tijani', 'insight', 'admin7115698293', '18:18:55', '2018-05-09', 'log670tha484w693'),
(382, 'edited', '#YOUTHNOW: 3 THINGS WE MUST DO TO MAKE OUR VOICES HEARD', 'insight', 'admin7115698293', '18:19:49', '2018-05-09', 'logwto870u2h91yo421n4'),
(383, 'edited', 'YOUR PAST AND THE FUTURE: STEPPING STONES FOR SUCCESS â€“ FEMI FOLORUNSHO (PROTEGE)', 'insight', 'admin7115698293', '18:21:22', '2018-05-09', 'log5r3920y2o78u42'),
(384, 'edited', 'What Exactly Are Doctors Doing In Nigeria?', 'insight', 'admin7115698293', '18:21:43', '2018-05-09', 'log0h4377a448tw1'),
(385, 'added', 'Police, Army Informed Of Impending Attacks On Adamawa Villages- Amnesty Nigeria', 'news', 'admin7115698293', '11:12:20', '2018-05-10', 'logpl490ce41763o7i8'),
(386, 'added', 'The 8th Senate, Not IGP Idris Is The Real Enemy Of Democracy', 'insight', 'admin7115698293', '11:17:48', '2018-05-10', 'logt6h11957e2250'),
(387, 'added', 'ISERD- 368th International Conference on Chemical and Biochemical Engineering (ICCBE)', 'event', 'admin7115698293', '11:28:30', '2018-05-10', 'logis4456d8480er8'),
(388, 'edited', 'ISERD- 368th International Conference on Chemical and Biochemical Engineering (ICCBE)', 'event', 'admin7115698293', '11:46:28', '2018-05-10', 'logir95ed1745s7914'),
(389, 'added', 'FASHIONS FINEST AFRICA CONFERENCE', 'event', 'admin7115698293', '13:28:30', '2018-05-10', 'logo8480i858s7n6s1hfa'),
(390, 'added', 'One dead from Ebola, 11 others infected, DRC confirms', 'news', 'admin2023731819', '19:12:16', '2018-05-10', 'logo64n1721e2866'),
(391, 'added', 'More than 30 killed in Kenya after dam collapse', 'news', 'admin2023731819', '19:27:37', '2018-05-10', 'log54m3e8r1o4086'),
(392, 'added', 'How To Become Indispensable At Work This Year', 'article', 'admin2023731819', '19:34:43', '2018-05-10', 'log6w8o7459h2573'),
(393, 'added', 'How To Become Indispensable At Work This Year', 'article', 'admin2023731819', '19:34:43', '2018-05-10', 'log9894990h1o69w'),
(394, 'added', 'REPOSITIONING THE ENERGY SECTOR FOR GROWTH', 'event', 'admin7115698293', '23:30:12', '2018-05-10', 'logon4rigp75ns351tieoi7475'),
(395, 'edited', 'uploads/769916How_to_stay_marketable-Blog_image-MP_0.jpg', 'image', 'admin7115698293', '03:28:42', '2018-05-11', 'logk66-ama3b-lt9re-amwt5dpa-l5og9pebu9yt8-s0g-o2oelpj4osa3mh71-g17i--'),
(396, 'edited', 'uploads/1448289new.jpg', 'image', 'admin7115698293', '03:30:35', '2018-05-11', 'logpl4ed8pw43g2j-1o3a48-12u92584s5n'),
(397, 'added', 'Malaysiaâ€™s Mahathir, 92, sworn in, now worldâ€™s oldest leader', 'news', 'admin2023731819', '07:31:03', '2018-05-11', 'log1-o40s-ary8s72iam2als8u2q3'),
(398, 'added', 'Ojudu Quits Ekiti Gubernatorial Race', 'news', 'admin7115698293', '07:36:04', '2018-05-11', 'log542j51390udou08'),
(399, 'edited', 'uploads/14321129649733Babafemi_Ojudu_896883546[1].jpg', 'image', 'admin7115698293', '07:45:08', '2018-05-11', 'log-61p1i2-f36s30m180oj81e98p4o83ugb1a943-d296uu4j5674lb12da-3a'),
(400, 'added', 'Techfest', 'event', 'admin7115698293', '13:53:25', '2018-05-11', 'log585te18h44tes65cf4'),
(401, 'edited', 'Techfest', 'event', 'admin7115698293', '13:54:06', '2018-05-11', 'logtee5f5s7ht97912c58'),
(402, 'added', '25 Things About Life I Wish I Had Known 10 Years Ago', 'article', 'admin2023731819', '14:21:35', '2018-05-11', 'log952876429749'),
(403, 'added', '25 Things About Life I Wish I Had Known 10 Years Ago', 'article', 'admin2023731819', '14:21:35', '2018-05-11', 'log243602657345'),
(404, 'edited', 'uploads/7290782iStock_000053768352_Large[1].jpg', 'image', 'admin7115698293', '16:05:35', '2018-05-11', 'log4aao33u2978394l8e779p367j5ss02lg5o0i---r02-dgpt009k2c4'),
(405, 'edited', 'uploads/781886iStock_000053768352_Large[1].jpg', 'image', 'admin7115698293', '16:06:14', '2018-05-11', 'logodg610pe35o89s60ls70g4a5p-r1u86j3l8c6532i-0-878k06a-t'),
(406, 'edited', 'uploads/8332173iStock_000053768352_Large[1].jpg', 'image', 'admin7115698293', '16:06:24', '2018-05-11', 'logjl1s55-1a3td6928c02s58g89750pp3l01uor8-7k7ea-0333goi-0'),
(407, 'edited', 'uploads/698210325-things-about-life[1].jpg', 'image', 'admin7115698293', '16:09:21', '2018-05-11', 'log60i-51gu9t-pn2g-p3a8bh4soi7l-8s6-d6t222jolfu82e6a'),
(408, 'added', 'Buhari Returns From Medical Trip 24Hours Ahead Of Schedule', 'news', 'admin7115698293', '19:53:42', '2018-05-11', 'logb8i35a83r84u1h01'),
(409, 'edited', 'uploads/1950123Muhammadu%20Buhari%202[1].jpg', 'image', 'admin7115698293', '19:54:10', '2018-05-11', 'loggpb3-prm1249aud02iam2a23uh-1uhjl7s970o95d-u003m7a-5'),
(410, 'edited', 'Buhari Returns From Medical Trip 24Hours Ahead Of Schedule', 'news', 'admin7115698293', '19:54:26', '2018-05-11', 'loga89rbu9ih1447962'),
(411, 'edited', 'uploads/8163172Muhammadu%20Buhari%202[2].jpg', 'image', 'admin7115698293', '19:55:45', '2018-05-11', 'logpm58m-iu0115adhp1-ru0122l-oa3gaj-0u62d8s644ma3u72hb'),
(412, 'edited', 'uploads/8635389Muhammadu_Buhari_2.jpg', 'image', 'admin7115698293', '19:56:47', '2018-05-11', 'logp2ihd6-8-rb-3a2pj55u8gma6s-41uuua19l385mhm9d3oa'),
(413, 'added', 'UNICEF: 400,000 children on ''verge'' of death in the DRC', 'news', 'admin2023731819', '20:06:40', '2018-05-11', 'log7fe64220nic6622u'),
(414, 'added', 'Japan''s single women a burden on the state, MP says', 'news', 'admin2023731819', '20:14:20', '2018-05-11', 'log2j30p06a0sn3a78-4'),
(415, 'added', 'THE UPGRADE', 'event', 'admin7115698293', '03:00:29', '2018-05-12', 'log8th96e3638601'),
(416, 'edited', 'THE UPGRADE', 'event', 'admin7115698293', '03:15:02', '2018-05-12', 'log92eh73t075275'),
(417, 'edited', 'THE UPGRADE', 'event', 'admin7115698293', '03:19:06', '2018-05-12', 'log1t04707he4633'),
(418, 'edited', 'THE UPGRADE', 'event', 'admin7115698293', '03:30:02', '2018-05-12', 'log4885ht1e87931'),
(419, 'edited', 'THE UPGRADE', 'event', 'admin7115698293', '03:40:28', '2018-05-12', 'log10h191t422e19'),
(420, 'edited', 'THE UPGRADE', 'event', 'admin7115698293', '03:49:47', '2018-05-12', 'loget35h41029262'),
(421, 'added', 'Woman legally banned from singing in her home; neighbours complain that she sounds like a drowning cat', 'news', 'admin2023731819', '04:36:42', '2018-05-12', 'log60m6923a79w0on2'),
(422, 'added', 'Teenager sentenced to death for killing her husband after he raped her', 'news', 'admin2023731819', '04:50:01', '2018-05-12', 'log8a7ege1ert617n4737'),
(423, 'added', '4 reasons you will miss your goals for 2018 unless you do this', 'article', 'admin2023731819', '05:05:59', '2018-05-12', 'log6543443295'),
(424, 'added', '4 reasons you will miss your goals for 2018 unless you do this', 'article', 'admin2023731819', '05:05:59', '2018-05-12', 'log024035358'),
(425, 'edited', 'uploads/6192739get-with-goals.jpg', 'image', 'admin7115698293', '07:10:09', '2018-05-12', 'log18e28632ag6sgado0op9gs3t-lw9-7i1tj1lph-7u-9'),
(426, 'added', 'CHRONICLES  OF A LADY', 'article', 'admin5823923153', '17:52:37', '2018-05-12', 'logo0s68er641li5nhc49c4'),
(427, 'added', 'CHRONICLES  OF A LADY', 'Campus article for2E2R5LN811G993EA3', 'admin5823923153', '17:52:37', '2018-05-12', 'log037ie195hocl6197srnc'),
(428, 'added', 'CHRONICLES  OF A LADY', 'article', 'admin5823923153', '17:52:37', '2018-05-12', 'log4cn375s2rio7lce91h52'),
(429, 'added', 'BREAKING: Fayemi Wins Rescheduled Ekiti APC Governorship Primary', 'news', 'admin7115698293', '22:01:35', '2018-05-12', 'logg28k2iban66r102e28'),
(430, 'added', 'Indonesia links church attacks to local ISIL', 'news', 'admin2023731819', '08:41:29', '2018-05-13', 'log5a7os541159id5n6ein'),
(431, 'edited', '4', 'admin level for admin5823923153', 'admin7115698293', '12:11:29', '2018-05-13', 'log80456764423'),
(432, 'edited', '4', 'admin level for admin6916561010', 'admin7115698293', '12:12:32', '2018-05-13', 'log18527553654'),
(433, 'edited', 'CHRONICLES  OF A LADY', 'article', 'admin7115698293', '12:18:14', '2018-05-13', 'log6ccoh393ne7sr28l25i0'),
(434, 'added', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART I', 'article', 'admin7115698293', '07:37:07', '2018-05-14', 'log6871e72o15p29n'),
(435, 'added', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART I', 'article', 'admin7115698293', '07:37:07', '2018-05-14', 'logn3e155002935op'),
(436, 'edited', '2', 'admin level for admin7386361327', 'admin7115698293', '07:46:29', '2018-05-14', 'log53962203297'),
(437, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART I', 'article', 'admin7115698293', '10:05:42', '2018-05-14', 'loge9596567n43o0p'),
(438, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART I', 'article', 'admin7115698293', '10:05:44', '2018-05-14', 'log23p5237on79e35'),
(439, 'edited', 'uploads/5055360destination.jpg', 'image', 'admin7115698293', '10:19:03', '2018-05-14', 'logig35jtsoonspp5d0-152a4d2ut83i07nl-a2e046'),
(440, 'added', 'How Much Did Patience Jonathan Allegedly Steal?', 'news', 'admin2023731819', '10:42:57', '2018-05-14', 'log6458o60h33w8'),
(441, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART I', 'article', 'admin7115698293', '15:38:55', '2018-05-14', 'log497p54e3o055n'),
(442, 'added', 'Lola Ashiru Visits Party Leaders...urges them to remain steadfast', 'news', 'admin7115698293', '18:10:04', '2018-05-14', 'logla8o142235297l'),
(443, 'edited', 'uploads/786253632530680_10209123503245193_3904193089597603840_n.jpg', 'image', 'admin7115698293', '18:12:48', '2018-05-14', 'log3p68030506-25942660390o02201421-2a1g35-3d511j5pnl393849-9801-8733s0709934220u'),
(444, 'edited', 'Lola Ashiru Visits Party Leaders...urges them to remain steadfast', 'news', 'admin7115698293', '18:17:17', '2018-05-14', 'log63o14ll376a48'),
(445, 'deleted', 'ISERD- 368th International Conference on Chemical and Biochemical Engineering (ICCBE)', 'event', 'admin7115698293', '08:35:40', '2018-05-15', 'log31935e3isrd0519'),
(446, 'added', 'She says a pilot raped her, and now she''s afraid of running into him at an airport', 'article', 'admin2023731819', '08:42:00', '2018-05-15', 'log6245080h87s4e'),
(447, 'added', 'She says a pilot raped her, and now she''s afraid of running into him at an airport', 'article', 'admin2023731819', '08:42:00', '2018-05-15', 'log9341h598996es'),
(448, 'edited', 'uploads/6789700S093761873-860x484[1].jpg', 'image', 'admin7115698293', '08:49:53', '2018-05-15', 'logxo87-180s749987p27-7ad6269438038g-79l1706p0j8us'),
(449, 'added', 'Chelsea may move for Pochettino', 'news', 'admin7386361327', '11:08:32', '2018-05-15', 'log91e8ec81ash9l8624'),
(450, 'edited', 'uploads/2064639skysports-mauricio-pochettino_4249721[1].jpg', 'image', 'admin7115698293', '12:00:35', '2018-05-15', 'log-4r--19ssp9t2c6oo-533p9nt62uslikie6puyj4so97t0g9moirc46a7dp9hao3-2'),
(451, 'edited', 'uploads/5696690skysports-mauricio-pochettino_4249721[1].jpg', 'image', 'admin7115698293', '12:00:44', '2018-05-15', 'logsu5js-92r2y9ips5n29c-imd5u07ctre0-46l26ok66o1o-o6p2gai-ppoh4t79tsa'),
(452, 'edited', '2', 'admin level for admin209976262', 'admin7115698293', '15:50:15', '2018-05-15', 'log55616701255'),
(453, 'edited', '2', 'admin level for admin6330738295', 'admin7115698293', '15:50:25', '2018-05-15', 'log70112506872'),
(454, 'added', 'hjhl', 'article', 'admin7115698293', '20:13:26', '2018-05-15', 'log4h097l8hj53084'),
(455, 'added', 'hjhl', 'article', 'admin7115698293', '20:13:26', '2018-05-15', 'log457935381j5hhl'),
(456, 'deleted', 'hjhl', 'article', 'admin7115698293', '20:14:13', '2018-05-15', 'log3jh558585hl524'),
(457, 'added', 'Lokoja Court Grants Melaye Bail', 'news', 'admin7115698293', '12:09:14', '2018-05-16', 'log1ljko951o345a35'),
(458, 'edited', 'uploads/8822309IMG-20180301-WA0004[1].jpg', 'image', 'admin7115698293', '12:11:19', '2018-05-16', 'log-p0003ul7-2oa-86s5p00084g2mj01-89090wi4034da012g'),
(459, 'edited', 'uploads/577542Dino-Melaye-arraigned-in-court-over-alleged-false-info-630x400[1].jpg', 'image', 'admin7115698293', '12:12:33', '2018-05-16', 'logrgdap0opee-mrn5ea057i4l3alceel0g6-nuy4dr-i3-jian00og-dds552o7---ilus-rlefon4et-vf7-6xao17a'),
(460, 'added', 'Politics', 'package', 'admin7115698293', '12:17:15', '2018-05-16', 'logtslp258io057737ci8'),
(461, 'added', 'Constituents Declare Federal Law maker Personal Non Grata:', 'insight', 'admin7115698293', '12:39:07', '2018-05-16', 'log8i6t2e9on46t6cs88nust5'),
(462, 'deleted', 'Techfest', 'event', 'admin7115698293', '12:54:32', '2018-05-16', 'log0stf5945c61377heet'),
(463, 'deleted', 'REPOSITIONING THE ENERGY SECTOR FOR GROWTH', 'event', 'admin7115698293', '12:54:44', '2018-05-16', 'logt245o4noipsnir3gei742'),
(464, 'edited', '2', 'admin level for admin7851792597', 'admin7115698293', '14:47:50', '2018-05-16', 'log90696596527'),
(465, 'edited', '2', 'admin level for admin6916561010', 'admin7115698293', '19:33:10', '2018-05-16', 'log04878703242'),
(466, 'added', 'Minimum wage, subsidy not captured in 2018 Budget  Read more at: https://www.vanguardngr.com/2018/05/minimum-wage-subsidy-not-captured-2018-budget/', 'news', 'admin7115698293', '11:21:38', '2018-05-17', 'log215m16454m4nim4iu'),
(467, 'edited', 'Minimum wage, subsidy not captured in 2018 Budget', 'news', 'admin7115698293', '11:24:26', '2018-05-17', 'log80641um702m5nm4ii'),
(468, 'added', 'a', 'insight', 'admin7115698293', '14:19:58', '2018-05-17', 'log5882577a215'),
(469, 'edited', 'a', 'insight', 'admin7115698293', '14:20:45', '2018-05-17', 'log99a1631623'),
(470, 'edited', 'a', 'insight', 'admin7115698293', '14:20:46', '2018-05-17', 'log19682777a49'),
(471, 'added', 'President holds private meeting with ex-PDP Chairman, Sheriff', 'news', 'admin7115698293', '15:48:46', '2018-05-17', 'log503p245e0ei7s9tdn9r'),
(472, 'edited', 'President holds private meeting with ex-PDP Chairman, Sheriff', 'news', 'admin7115698293', '15:49:38', '2018-05-17', 'lognr1tep44e908s8di616'),
(473, 'added', 'Entertainment', 'package', 'admin7115698293', '15:56:36', '2018-05-17', 'logte02mte9nr49tan10ni5e98'),
(474, 'added', 'â€˜God Decided To Be My Barberâ€™, Banky W Says As He Shares Childhood Photo', 'insight', 'admin7115698293', '16:00:12', '2018-05-17', 'log8duq28gl126so86o6-7'),
(475, 'edited', 'â€˜God Decided To Be My Barberâ€™, Banky W Says As He Shares Childhood Photo', 'insight', 'admin7115698293', '16:00:55', '2018-05-17', 'logq57os4l95o80dg-40u'),
(476, 'added', 'WATCH â€˜CCTVâ€™ BY KING PROMISE FEAT. SARKODIE X MUGEEZ - Video', 'insight', 'admin7115698293', '16:10:33', '2018-05-17', 'log5h0197t5caw1433'),
(477, 'edited', 'WATCH â€˜CCTVâ€™ BY KING PROMISE FEAT. SARKODIE X MUGEEZ - Video', 'insight', 'admin7115698293', '16:28:46', '2018-05-17', 'loght4wa024562678c'),
(478, 'added', 'The 3 Things New Landlords Need to Manage', 'article', 'admin7115698293', '16:57:30', '2018-05-17', 'log10578e4t1h842'),
(479, 'added', 'The 3 Things New Landlords Need to Manage', 'article', 'admin7115698293', '16:57:30', '2018-05-17', 'log95t33e826h746'),
(480, 'added', 'Nwakali brothers, Kelechi and Chidiebere, as well as Turkey-based striker Emem Eduok have been named on a 23-man squad for  Tuesdayâ€™s glamour friendly against newly â€“crowned Europa League kings Atletico Madrid at the Godswill Akpabio Stadium in Uyo,', 'news', 'admin7115698293', '17:04:41', '2018-05-17', 'log5211iaw981k3an47l'),
(481, 'edited', 'Nwakali brothers, Emem Eduok called up by Eagles â€˜Bâ€™ for Atletico Madrid clash', 'news', 'admin7115698293', '17:05:27', '2018-05-17', 'log8nla6821iwk8a2467'),
(482, 'added', 'Health', 'package', 'admin7115698293', '17:24:20', '2018-05-17', 'log84h85a6t2hl513e9'),
(483, 'added', 'Depression in men may lower chances for pregnancy, NIH study suggests', 'insight', 'admin7115698293', '17:27:13', '2018-05-17', 'logr702se8npos7ei357d6'),
(484, 'edited', 'Depression in men may lower chances for pregnancy, NIH study suggests', 'insight', 'admin7115698293', '17:29:33', '2018-05-17', 'logps20d6o3e7iesr833n76'),
(485, 'added', 'The First Urban Case of Ebola in the Congo Is a â€˜Game Changerâ€™', 'news', 'admin7115698293', '17:47:12', '2018-05-17', 'log725eth98599'),
(486, 'added', 'DEADPOOL 2 | Doubling down with Manchester United to beat Infinity Wa', 'insight', 'admin2023731819', '18:26:36', '2018-05-17', 'log492oed819dp8lao412'),
(487, 'edited', 'DEADPOOL 2 | Doubling down with Manchester United to beat Infinity War', 'insight', 'admin7115698293', '18:35:57', '2018-05-17', 'logdod15el0o06p0465a6'),
(488, 'edited', 'DEADPOOL 2 | Doubling down with Manchester United to beat Infinity War', 'insight', 'admin7115698293', '18:37:18', '2018-05-17', 'logdp4al8d41o2e9018o4'),
(489, 'edited', 'DEADPOOL 2 | Doubling down with Manchester United to beat Infinity War', 'insight', 'admin7115698293', '18:39:16', '2018-05-17', 'log62leo2d7p111aod164'),
(490, 'edited', 'DEADPOOL 2 | Doubling down with Manchester United to beat Infinity War', 'insight', 'admin7115698293', '18:39:58', '2018-05-17', 'logd9alo9o1de57741p25'),
(491, 'edited', 'uploads/8238774sei_3039621.jpg', 'image', 'admin7115698293', '18:55:37', '2018-05-17', 'log83si67p7052-du-8184e4643a1so3-p29l993jg9'),
(492, 'edited', 'DEADPOOL 2 | Doubling down with Manchester United to beat Infinity War', 'insight', 'admin7115698293', '19:00:32', '2018-05-17', 'logo8956pd24dol55ae8'),
(493, 'edited', 'DEADPOOL 2 | Doubling down with Manchester United to beat Infinity War - Video', 'insight', 'admin7115698293', '19:02:52', '2018-05-17', 'logo7aodped13963745l3'),
(494, 'added', 'Bandits kill 10 in Birnin Gwari â€” 72 hours after inauguration of military base', 'news', 'admin7115698293', '20:05:31', '2018-05-17', 'log4dsi265a9bt00n462'),
(495, 'added', 'jk', 'article', 'admin7115698293', '07:14:41', '2018-05-18', 'logk667j186270'),
(496, 'added', 'jk', 'article', 'admin7115698293', '07:17:33', '2018-05-18', 'log349k8458031j'),
(497, 'added', 'jk', 'article', 'admin7115698293', '07:17:33', '2018-05-18', 'logk153j7233480'),
(498, 'deleted', 'jk', 'article', 'admin7115698293', '07:18:19', '2018-05-18', 'log0994j6k81757'),
(499, 'deleted', 'jk', 'article', 'admin7115698293', '07:18:25', '2018-05-18', 'logj752k5690131'),
(500, 'added', 'yuihj', 'article', 'admin7115698293', '07:18:58', '2018-05-18', 'log9j4i6u833yh1810'),
(501, 'added', 'yuihj', 'article', 'admin7115698293', '07:18:58', '2018-05-18', 'log782893yi283huj7'),
(502, 'added', 'jgu', 'article', 'admin7115698293', '07:20:31', '2018-05-18', 'log7463gu8598j41'),
(503, 'added', 'jgu', 'article', 'admin7115698293', '07:20:31', '2018-05-18', 'log2g4353u9930j0'),
(504, 'added', 'ghfhi', 'article', 'admin7115698293', '07:22:06', '2018-05-18', 'log759h5f05ihg7771'),
(505, 'added', 'ghfhi', 'article', 'admin7115698293', '07:22:06', '2018-05-18', 'loghh812g9f18i863'),
(506, 'added', 'hgj', 'article', 'admin7115698293', '07:30:28', '2018-05-18', 'logj973hg7532448'),
(507, 'added', 'hgj', 'article', 'admin7115698293', '07:30:28', '2018-05-18', 'log67jh24g51641'),
(508, 'added', 'hgj', 'article', 'admin7115698293', '07:32:49', '2018-05-18', 'log0j8392060h3g8'),
(509, 'added', 'hgj', 'article', 'admin7115698293', '07:32:49', '2018-05-18', 'log22h1g901177j6'),
(510, 'deleted', 'hgj', 'article', 'admin7115698293', '07:34:45', '2018-05-18', 'log9068g271jh430'),
(511, 'deleted', 'hgj', 'article', 'admin7115698293', '07:34:51', '2018-05-18', 'log340g3j6h0877'),
(512, 'deleted', 'ghfhi', 'article', 'admin7115698293', '07:34:57', '2018-05-18', 'logf4g979290h918ih'),
(513, 'deleted', 'jgu', 'article', 'admin7115698293', '07:35:03', '2018-05-18', 'log7j9g99054u843'),
(514, 'deleted', 'yuihj', 'article', 'admin7115698293', '07:35:09', '2018-05-18', 'logh5i687j9616u10y'),
(515, 'added', 'NEWSWhy I empowered youths with shoe police kits, oranges â€“ Borno commissioner', 'news', 'admin2023731819', '08:24:08', '2018-05-18', 'logyn940w52462sh8ew1'),
(516, 'added', 'uihjkl', 'article', 'j90819542aBn72i', '08:56:54', '2018-05-18', 'log51i295832uhk7jl'),
(517, 'added', 'uihjkl', 'article', 'j90819542aBn72i', '08:56:54', '2018-05-18', 'log0ui29lj774740h5k'),
(518, 'added', 'uijkl', 'article', 'j90819542aBn72i', '09:00:04', '2018-05-18', 'log5k89i457536lj5u'),
(519, 'added', 'uijkl', 'article', 'j90819542aBn72i', '09:00:04', '2018-05-18', 'log7j542i62k508lu0'),
(520, 'added', 'ghjkl', 'article', 'j90819542aBn72i', '09:01:47', '2018-05-18', 'logk41l3h819g4j032'),
(521, 'added', 'ghjkl', 'article', 'j90819542aBn72i', '09:01:47', '2018-05-18', 'log227g64kl6774jh5'),
(522, 'edited', 'jgu', 'article', 'j90819542aBn72i', '09:16:02', '2018-05-18', 'log45g0j67u63255'),
(523, 'deleted', 'ghjkl', 'article', 'j90819542aBn72i', '09:16:12', '2018-05-18', 'loglk84h5435755g5j'),
(524, 'deleted', 'uijkl', 'article', 'j90819542aBn72i', '09:16:19', '2018-05-18', 'log0ji0855k3l8576u'),
(525, 'deleted', 'uihjkl', 'article', 'j90819542aBn72i', '09:16:30', '2018-05-18', 'log23lk0u12h649ij5'),
(526, 'added', 'Biafra: Why IPOBâ€™s sit-at-home order will fail â€“ Security expert, Udegbunam', 'news', 'j90819542aBn72i', '09:20:47', '2018-05-18', 'log3645f7a8350r4bia'),
(527, 'added', 'Video: South African robbers in dramatic broad daylight cash van heist', 'news', 'j90819542aBn72i', '10:32:46', '2018-05-18', 'log4o900id8v76e599'),
(528, 'edited', 'Video: South African robbers in dramatic broad daylight cash van heist', 'news', 'j90819542aBn72i', '10:43:28', '2018-05-18', 'logd9o73e5192v188i'),
(529, 'added', 'Communication', 'package', 'j90819542aBn72i', '12:49:44', '2018-05-18', 'logu476i3t6mci5aocno0912nm'),
(530, 'added', 'ON MENTORS AND THEIR INFLUENCES', 'insight', 'j90819542aBn72i', '12:56:11', '2018-05-18', 'log16112on09982'),
(531, 'edited', 'ON MENTORS AND THEIR INFLUENCES', 'insight', 'j90819542aBn72i', '12:57:34', '2018-05-18', 'logon1378977343'),
(532, 'added', 'Connection.', 'article', 'j90819542aBn72i', '13:07:15', '2018-05-18', 'log4c68tn0n270oni2o4ce'),
(533, 'added', 'Connection.', 'article', 'j90819542aBn72i', '13:07:15', '2018-05-18', 'log587n67n9ce78oc9o8tin'),
(534, 'edited', 'uploads/999817hqdefault.jpg', 'image', 'j90819542aBn72i', '13:21:14', '2018-05-18', 'logpf4tjeao9phd-1748u0qd719s-l8a1gl9521u'),
(535, 'edited', 'Connection.', 'article', 'j90819542aBn72i', '13:23:34', '2018-05-18', 'loge61coi8tnno8013c02n5'),
(536, 'edited', 'Connection', 'article', 'j90819542aBn72i', '13:24:19', '2018-05-18', 'logi06o1c2tn812cn270eno'),
(537, 'deleted', 'Connection', 'article', 'j90819542aBn72i', '14:42:51', '2018-05-18', 'log1214ot5e5cninn229co7'),
(538, 'added', 'COM101', 'insight', 'j90819542aBn72i', '14:50:17', '2018-05-18', 'log291m142c91o10151'),
(539, 'added', 'COMM102 - Developing Self-awareness', 'insight', 'j90819542aBn72i', '14:54:21', '2018-05-18', 'log122405o51128mmc04'),
(540, 'added', 'COMM103 - Listening', 'insight', 'j90819542aBn72i', '14:58:35', '2018-05-18', 'log3581c7mo21034108m'),
(541, 'added', 'COMM104 - Truth', 'insight', 'j90819542aBn72i', '15:03:15', '2018-05-18', 'log46059c4685o35m17m'),
(542, 'added', 'COMM105', 'insight', 'j90819542aBn72i', '15:06:47', '2018-05-18', 'log5886m138m0054c0o5'),
(543, 'edited', 'COMM105 - The Maxim of Quantity', 'insight', 'j90819542aBn72i', '15:08:05', '2018-05-18', 'logm58m911351c4970o3'),
(544, 'added', 'COMM106', 'insight', 'j90819542aBn72i', '15:17:08', '2018-05-18', 'log2m911m97063o544c0'),
(545, 'added', 'COMM107 - Connection', 'insight', 'j90819542aBn72i', '15:18:24', '2018-05-18', 'logm653mo500578731c1'),
(546, 'edited', 'COMM107 - Connection', 'insight', 'j90819542aBn72i', '15:23:15', '2018-05-18', 'logm6m093866o3c76701'),
(547, 'edited', 'COMM106', 'insight', 'j90819542aBn72i', '15:24:06', '2018-05-18', 'log6647116c0661mm4o8'),
(548, 'edited', 'COMM105 - The Maxim of Quantity', 'insight', 'j90819542aBn72i', '15:25:09', '2018-05-18', 'log00032965o4mmc1145'),
(549, 'edited', 'COMM104 - Truth', 'insight', 'j90819542aBn72i', '15:26:16', '2018-05-18', 'log15o84mc114103016m'),
(550, 'edited', 'COMM103 - Listening', 'insight', 'j90819542aBn72i', '15:27:04', '2018-05-18', 'log1193mc7m10715o783'),
(551, 'edited', 'ON MENTORS AND THEIR INFLUENCES', 'insight', 'j90819542aBn72i', '15:33:22', '2018-05-18', 'log553535o2393n'),
(552, 'edited', 'COM101', 'insight', 'j90819542aBn72i', '15:34:01', '2018-05-18', 'logmoc0500112513171'),
(553, 'edited', 'COMM102 - Developing Self-awareness', 'insight', 'j90819542aBn72i', '15:34:34', '2018-05-18', 'log202c07939mo2145m9'),
(554, 'added', '8 killed in shooting at Texas'' Santa Fe High School, CNN affiliates report', 'news', 'j90819542aBn72i', '15:48:05', '2018-05-18', 'log78388562057'),
(555, 'added', 'Bellerin too expensive for Barcelona', 'news', '8e1t86er265564P', '21:53:24', '2018-05-18', 'logb0ie038e88r3l20l6n'),
(556, 'added', 'hhkhjik', 'news', 'j90819542aBn72i', '22:00:39', '2018-05-18', 'log7ih14k95h7h4k390j'),
(557, 'deleted', 'hhkhjik', 'news', 'j90819542aBn72i', '22:00:56', '2018-05-18', 'log3755j31ikhh055h1k'),
(558, 'added', 'Many feared dead as Cuba airliner crashes on takeoff', 'news', '8e1t86er265564P', '22:08:31', '2018-05-18', 'lognm4446862y5a37'),
(559, 'edited', 'COMM107 - Connection', 'insight', 'j90819542aBn72i', '22:15:02', '2018-05-18', 'log7mm01245649032c5o'),
(560, 'edited', 'COMM106', 'insight', 'j90819542aBn72i', '22:16:04', '2018-05-18', 'logm05262om140773c81'),
(561, 'edited', 'COMM105 - The Maxim of Quantity', 'insight', 'j90819542aBn72i', '22:16:36', '2018-05-18', 'log515181omc20m07734'),
(562, 'edited', 'COMM104 - Truth', 'insight', 'j90819542aBn72i', '22:17:14', '2018-05-18', 'logm9004911c1804o38m'),
(563, 'edited', 'COMM103 - Listening', 'insight', 'j90819542aBn72i', '22:17:48', '2018-05-18', 'log15m50350697m14o9c'),
(564, 'edited', 'COMM102 - Developing Self-awareness', 'insight', 'j90819542aBn72i', '22:18:18', '2018-05-18', 'logmc1236787023m53o3'),
(565, 'edited', 'COM101', 'insight', 'j90819542aBn72i', '22:18:43', '2018-05-18', 'log14c98o19814m0710'),
(566, 'edited', 'COMM107 - Connection', 'insight', 'j90819542aBn72i', '22:18:50', '2018-05-18', 'log2m009o7m37628126c'),
(567, 'edited', 'COMM107 - Connection', 'insight', 'j90819542aBn72i', '22:21:20', '2018-05-18', 'log07239cm5820o07m10'),
(568, 'added', 'hgjn', 'news', 'j90819542aBn72i', '23:22:43', '2018-05-18', 'logg153j66h09451n'),
(569, 'edited', 'Many feared dead as Cuba airliner crashes on takeoff', 'news', 'j90819542aBn72i', '23:27:30', '2018-05-18', 'logm35n4702ya2087'),
(570, 'edited', 'uploads/9335582skynews-plane-crash-cuba_4314101.jpg', 'image', 'j90819542aBn72i', '23:28:46', '2018-05-18', 'log7opa3d0e04a1-c31pca298knshn2es98uwrb1-s3yj-u93g5-45l-5sa0pl4-'),
(571, 'edited', 'uploads/7810212913826516.jpg', 'image', 'j90819542aBn72i', '23:34:59', '2018-05-18', 'logd7p08161s28jp83-9-l6g12u3528172ao23820'),
(572, 'edited', 'Bellerin too expensive for Barcelona', 'news', 'j90819542aBn72i', '23:36:32', '2018-05-18', 'logr7234le59i01beln04'),
(573, 'edited', '2', 'admin level for e238t723ts7106', 'j90819542aBn72i', '01:09:50', '2018-05-19', 'log10665562388'),
(574, 'added', 'gujh', 'news', 'j90819542aBn72i', '03:58:21', '2018-05-19', 'log33125uj69h5g47'),
(575, 'added', 'uhjkj', 'news', 'j90819542aBn72i', '04:25:52', '2018-05-19', 'logh6uk4jj16248744'),
(576, 'added', 'gujhnjk', 'article', 'j90819542aBn72i', '04:33:15', '2018-05-19', 'logngjjh545uk3964640'),
(577, 'added', 'gujhnjk', 'article', 'j90819542aBn72i', '04:33:15', '2018-05-19', 'log8891jnjg3h2199k1u'),
(578, 'deleted', 'gujhnjk', 'article', 'j90819542aBn72i', '04:39:09', '2018-05-19', 'logn0154759g8h1jukj8'),
(579, 'added', 'ujhiiknkJKjkljJBJ', 'news', 'j90819542aBn72i', '04:40:15', '2018-05-19', 'logjj1k834kb5ilju5in5jk1j7jh0k'),
(580, 'added', 'hgjhjk', 'news', 'j90819542aBn72i', '04:45:58', '2018-05-19', 'log1372j244gkh91jh1'),
(581, 'added', 'hjhikj', 'news', 'j90819542aBn72i', '04:54:07', '2018-05-19', 'loghi04180j6jk8776h'),
(582, 'deleted', 'hjhikj', 'news', 'j90819542aBn72i', '04:56:12', '2018-05-19', 'log149hhi234k80j8j5'),
(583, 'added', 'l;', 'news', 'j90819542aBn72i', '05:34:21', '2018-05-19', 'log9075l649665'),
(584, 'deleted', 'l;', 'news', 'j90819542aBn72i', '05:34:31', '2018-05-19', 'log047474830l9'),
(585, 'deleted', 'THE UPGRADE', 'event', 'j90819542aBn72i', '06:57:32', '2018-05-19', 'log89ht68065e486'),
(586, 'added', 'Plane carrying 105 passengers crashes in Cuba', 'news', '4al26o40o21yJ1e43', '07:22:06', '2018-05-19', 'loga6n52475l130pe5'),
(587, 'edited', '3', 'admin level for admin7851792597', 'j90819542aBn72i', '07:36:06', '2018-05-19', 'log83576690330'),
(588, 'edited', '3', 'admin level for 8e1t86er265564P', 'j90819542aBn72i', '07:36:24', '2018-05-19', 'log28126397531'),
(589, 'edited', '3', 'admin level for 5Tuol327710328', 'j90819542aBn72i', '07:36:38', '2018-05-19', 'log46730633104'),
(590, 'edited', '3', 'admin level for 4al26o40o21yJ1e43', 'j90819542aBn72i', '07:36:54', '2018-05-19', 'log3886111511'),
(591, 'deleted', 'hbjnkmlkjknm', 'news', 'j90819542aBn72i', '07:43:57', '2018-05-19', 'logk1494nkbj8m955mknhl53j'),
(592, 'added', 'apc holds fresh ward congresses rivers today', 'news', '4al26o40o21yJ1e43', '08:15:01', '2018-05-19', 'log5654c2289ap05'),
(593, 'edited', 'COMM107 - Connection', 'insight', 'j90819542aBn72i', '12:00:01', '2018-05-19', 'log6m0m15777o8c89705'),
(594, 'edited', 'COMM107 - Connection', 'insight', 'j90819542aBn72i', '12:18:13', '2018-05-19', 'log676004mo9m294013c'),
(595, 'edited', 'APC holds fresh ward congresses rivers today', 'news', '4al26o40o21yJ1e43', '13:42:44', '2018-05-19', 'logc44589p31a071'),
(596, 'edited', '2', 'admin level for 4al26o40o21yJ1e43', 'j90819542aBn72i', '13:44:20', '2018-05-19', 'log05243809305'),
(597, 'added', 'Nigeria Police Force 2018 recruitment succecessful names are out', 'news', '8e1t86er265564P', '14:59:41', '2018-05-19', 'logii1g194aer4n57474'),
(598, 'edited', 'Nigeria Police Force 2018 recruitment succecessful names are out', 'news', '8e1t86er265564P', '15:20:17', '2018-05-19', 'logan6893e579rg28i2i'),
(599, 'added', 'Lagos APC faction challenges Tinubu, holds parallel congress', 'news', '8e1t86er265564P', '16:05:05', '2018-05-19', 'log80o503s07ag6l15'),
(600, 'edited', 'uploads/4835482NPF.jpg', 'image', 'j90819542aBn72i', '16:20:39', '2018-05-19', 'log1s4dlfjgp56-06op81-143panu243863'),
(601, 'edited', 'Lagos APC faction challenges Tinubu, holds parallel congress', 'news', 'j90819542aBn72i', '16:22:12', '2018-05-19', 'log2o14l1829a93g6s'),
(602, 'edited', 'uploads/2398387apc-logo.png', 'image', 'j90819542aBn72i', '16:24:02', '2018-05-19', 'loglpa9o8d7agnp34-co89o-s8935l2p198-ug93'),
(603, 'added', 'Chelsea vs Man United : I prefer to lose like today â€“ Mourinho', 'news', '4al26o40o21yJ1e43', '19:21:29', '2018-05-19', 'log6a66e83c77eh63s4l'),
(604, 'added', 'Chelsea vs Man United : FA Cup final three things we learned', 'news', 'j90819542aBn72i', '19:30:56', '2018-05-19', 'loga5e6h305ec9604s5l'),
(605, 'edited', '5', 'admin level for 1lA81094d15a72deaom', 'j90819542aBn72i', '21:31:43', '2018-05-19', 'log01586088143'),
(606, 'added', 'dfg', 'article', 'j90819542aBn72i', '14:37:52', '2018-05-20', 'log835184100dgf6'),
(607, 'added', 'dfg', 'article', 'j90819542aBn72i', '14:37:52', '2018-05-20', 'log65gf3d5331167'),
(608, 'deleted', 'dfg', 'article', 'j90819542aBn72i', '14:38:09', '2018-05-20', 'log8d61353gf4784'),
(609, 'added', 'Tuface And I Argue Like It Is A Hobby â€“ Sound Sultan', 'news', '5Tuol327710328', '15:56:10', '2018-05-20', 'log3e83530fuact9999'),
(610, 'added', '#RoadToRussia: NFF releases 30-man Provisional List for Russia 2018 World Cup', 'news', '5Tuol327710328', '16:09:01', '2018-05-20', 'log1o6d95aiu9t0rssro44a78'),
(611, 'added', 'African nations vow to recover stolen assets', 'news', '5Tuol327710328', '16:58:26', '2018-05-20', 'log41rif5ac48a7494n7'),
(612, 'added', 'Video: Watch the royal wedding in 90 seconds', 'news', '3r543i0a57Kbu845', '17:09:58', '2018-05-20', 'log974dv70io44826e'),
(613, 'edited', 'Video: Watch the royal wedding in 90 seconds', 'news', '3r543i0a57Kbu845', '17:10:31', '2018-05-20', 'log8de9910ov9154i0'),
(614, 'added', '41 banned items not qualified under Nigeria-China currency swap- CBN', 'news', '4al26o40o21yJ1e43', '17:14:38', '2018-05-20', 'log261964137605'),
(615, 'added', 'President Buhari to lead 1m Nigerians', 'news', '4al26o40o21yJ1e43', '17:28:24', '2018-05-20', 'log9itre3464epds55n325'),
(616, 'added', 'Nigerian aviation industry successful under Buhari â€” FAAN MD', 'news', '4al26o40o21yJ1e43', '17:35:35', '2018-05-20', 'log937age2797nn4i77ri'),
(617, 'added', 'APC never lost election under Ajomale â€“ Tinubu', 'news', '4al26o40o21yJ1e43', '17:44:00', '2018-05-20', 'logap502706c7464'),
(618, 'edited', 'APC never lost election under Ajomale â€“ Tinubu', 'news', '4al26o40o21yJ1e43', '17:46:10', '2018-05-20', 'log428472p1c55a1'),
(619, 'edited', '3', 'admin level for e238t723ts7106', 'j90819542aBn72i', '17:48:11', '2018-05-20', 'log78305431857'),
(620, 'edited', '3', 'admin level for 4al26o40o21yJ1e43', 'j90819542aBn72i', '18:13:57', '2018-05-20', 'log01277753326'),
(621, 'added', 'Entertainment', 'news category', 'j90819542aBn72i', '22:34:28', '2018-05-20', 'log2n6rmnia55t37ett0e2e18n'),
(622, 'added', 'Linda Ikeji reveals sex of her baby', 'news', '5Tuol327710328', '00:13:27', '2018-05-21', 'log3l0a5in5789d984'),
(623, 'added', 'Why I can''t ask a girl out on social media, mayorkun reveals.', 'news', '5Tuol327710328', '00:39:54', '2018-05-21', 'log3h5w78884y880'),
(624, 'edited', 'Why I can''t ask a girl out on social media, mayorkun reveals.', 'news', 'j90819542aBn72i', '03:37:14', '2018-05-21', 'log3227951w3y94h'),
(625, 'added', '2019: I can win with APGA, says Okorocha', 'news', '4al26o40o21yJ1e43', '09:02:22', '2018-05-21', 'log64905221702246'),
(626, 'added', 'Breaking: Olisa Metuh collapses in court as judge continues with trial', 'news', '4al26o40o21yJ1e43', '10:36:08', '2018-05-21', 'logr5ek7ib0n84669g7a8'),
(627, 'added', 'Under Jonathan, I wasnâ€™t framed, arraigned despite fighting govt â€“ Dino Melaye', 'news', '4al26o40o21yJ1e43', '11:05:23', '2018-05-21', 'log780e758n066dru9'),
(628, 'added', 'Why Buhari may not sign 2018 budget â€“ Minister, Udoma', 'news', '4al26o40o21yJ1e43', '11:10:25', '2018-05-21', 'log7w31y634h7578'),
(629, 'added', 'Western countries more corrupt than African countries â€“ Falana', 'news', '4al26o40o21yJ1e43', '11:17:00', '2018-05-21', 'logr91wt04s14en6625e'),
(630, 'added', 'Wike, Fed Govt in war of words', 'news', '4al26o40o21yJ1e43', '11:27:48', '2018-05-21', 'log51k10ew949i293'),
(631, 'added', 'Fani Kayode speaks on dumping PDP for SDP', 'news', '4al26o40o21yJ1e43', '14:49:39', '2018-05-21', 'log14798a9i00n57f'),
(632, 'added', 'What I said about Buhariâ€™s visit to Rivers â€“ Wike', 'news', '4al26o40o21yJ1e43', '14:56:32', '2018-05-21', 'log086awth5123452'),
(633, 'added', 'â€œA king, if he forgets who he is, will live like a common man.â€', 'article', 'j90819542aBn72i', '23:06:07', '2018-05-21', 'log19143-ou181qd8la'),
(634, 'added', 'â€œA king, if he forgets who he is, will live like a common man.â€', 'article', 'j90819542aBn72i', '23:06:07', '2018-05-21', 'log82u9od99a663-q37l'),
(635, 'edited', 'â€œA king, if he forgets who he is, will live like a common man.â€', 'article', 'j90819542aBn72i', '23:06:45', '2018-05-21', 'log0l7d50u71-57qo5a3'),
(636, 'added', 'Beyonceâ€™ buys herself a church', 'news', '5Tuol327710328', '02:42:58', '2018-05-22', 'logcb8eq-n1s5856o18u5reo6y'),
(637, 'added', 'Bambam & Teddy-A Look Adorable On The Cover Of Celebrity Magazine (Photos)', 'news', '5Tuol327710328', '02:55:01', '2018-05-22', 'logb3857maa8b10m972'),
(638, 'deleted', 'Bambam & Teddy-A Look Adorable On The Cover Of Celebrity Magazine (Photos)', 'news', '5Tuol327710328', '02:55:28', '2018-05-22', 'logmm5b83aa721b9190'),
(639, 'added', 'Bambam & Teddy-A Look Adorable On The Cover Of Celebrity Magazine (Photos)', 'news', '5Tuol327710328', '02:58:29', '2018-05-22', 'log0aba9m31503215bm'),
(640, 'added', 'Codeine: From drug usage to drug abuse', 'news', '5Tuol327710328', '03:07:09', '2018-05-22', 'loge58ic264o9e8dn511'),
(641, 'edited', 'Beyonceâ€™ buys herself a church', 'news', 'j90819542aBn72i', '04:11:16', '2018-05-22', 'logor9c-y83nb57u6es7o34eq7'),
(642, 'added', 'Minibus bomb causes heavy casualties in southern Afghan city', 'news', 'j90819542aBn72i', '10:48:36', '2018-05-22', 'log174374456imsi3nub'),
(643, 'edited', 'Minibus bomb causes heavy casualties in southern Afghan city', 'news', 'j90819542aBn72i', '10:49:35', '2018-05-22', 'log03m5u281b8ni6is90'),
(644, 'added', 'COMM108 - First Impression', 'insight', 'j90819542aBn72i', '15:07:22', '2018-05-22', 'log82mm76o12c403682'),
(645, 'edited', 'uploads/1793120hqdefault_(2).jpg', 'image', 'j90819542aBn72i', '15:17:42', '2018-05-22', 'log-7e2dh143g2q91340-pl7a5apjd1s8uf-1ulo27t'),
(646, 'added', 'Buhari Comes Out Swinging, Attacks Obasanjo, Nâ€™Assembly', 'news', '5Tuol327710328', '06:04:01', '2018-05-23', 'log2485032ri12bu6ah'),
(647, 'added', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '11:32:52', '2018-05-23', 'logoe579pn3166886'),
(648, 'added', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '11:32:52', '2018-05-23', 'log6no9p1e1102492'),
(649, 'edited', 'â€œA king, if he forgets who he is, will live like a common man.â€', 'article', 'j90819542aBn72i', '17:07:44', '2018-05-23', 'logu7-7q89l557o345ad'),
(650, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '03:57:17', '2018-05-24', 'log56n7o24e02635p'),
(651, 'edited', 'uploads/2313691Group_1.png', 'image', 'j90819542aBn72i', '03:57:51', '2018-05-24', 'logo-6g9upn3r10pau6go94162sl0313p311--d'),
(652, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '04:22:37', '2018-05-24', 'log133o269p9251ne'),
(653, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '04:24:49', '2018-05-24', 'log8672887o971epn'),
(654, 'added', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '04:28:24', '2018-05-24', 'logop7095026007ne'),
(655, 'added', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '04:28:24', '2018-05-24', 'logo40p1n376e5265'),
(656, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '04:32:04', '2018-05-24', 'log0eop2307847n64'),
(657, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '16:55:29', '2018-05-24', 'logp4884e07o417n5'),
(658, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '17:43:20', '2018-05-24', 'log97540e968n9op7'),
(659, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '17:43:41', '2018-05-24', 'log86n9p79e5o4699'),
(660, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '17:48:27', '2018-05-24', 'logo04p3n657e2929'),
(661, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'j90819542aBn72i', '17:50:13', '2018-05-24', 'logo34e455n69p848'),
(662, 'added', 'Ekiti guber: APC accuses Fayose of destroying Fayemiâ€™s billboard, petitions IGP, DSS', 'news', '5Tuol327710328', '19:37:15', '2018-05-24', 'loge2it9132i00k67'),
(663, 'added', 'BREAKING: Another mace snatched as lawmakers scamper for dear lives', 'news', '5Tuol327710328', '19:45:42', '2018-05-24', 'log1281r2a1gi5n18bek9'),
(664, 'edited', '9', 'admin level for e238t723ts7106', 'j90819542aBn72i', '07:36:45', '2018-05-25', 'log01889555427'),
(665, 'added', 'gfhkjl', 'article', 'e238t723ts7106', '07:38:02', '2018-05-25', 'logj572f4g2634hlk44'),
(666, 'added', 'gfhkjl', 'article', 'e238t723ts7106', '07:38:02', '2018-05-25', 'logfjl2hg81948k8539'),
(667, 'edited', 'OPEN LETTER TO EKITI PEOPLE: THE SELECTION EDUCATION AND THE FUTURE OF EKITI DEVELOPMENT â€“ PART II', 'article', 'e238t723ts7106', '07:47:01', '2018-05-25', 'logo43pe60589384n'),
(668, 'edited', 'gfhkjl', 'article', 'e238t723ts7106', '07:47:42', '2018-05-25', 'log1538k7jhfgl91711'),
(669, 'edited', '9', 'admin level for 5s730nFluoo12r0o978', 'j90819542aBn72i', '07:49:11', '2018-05-25', 'log94635352086'),
(670, 'added', 'Real Madrid Vs Liverpool: Five key battles for Champions League final clash', 'news', '8e1t86er265564P', '20:09:09', '2018-05-25', 'log542666el663ra'),
(671, 'edited', 'uploads/3797317gettyimages-960882996.jpg', 'image', '8e1t86er265564P', '20:12:55', '2018-05-25', 'logy7-til83a9pegj6a747635dm93epg18s0g03s67-t9-7u696o2'),
(672, 'edited', 'uploads/255153gettyimages-960882996.jpg', 'image', '8e1t86er265564P', '20:13:21', '2018-05-25', 'logds-59l98mg42jpg6925eego8p8y4412a53-894-t0i2uat6s'),
(673, 'edited', 'uploads/5816354gettyimages-960882996.jpg', 'image', '8e1t86er265564P', '20:13:39', '2018-05-25', 'log2o0-7664e1yp48a56s-8998-6m218gj635t6gpad8ule4gs9ti'),
(674, 'edited', 'uploads/944033gettyimages-960882996.jpg', 'image', '8e1t86er265564P', '20:14:15', '2018-05-25', 'log0m0s64toa-37ai5t2s8g69849yue-994637p9g34lg-je0d3p'),
(675, 'edited', 'uploads/9912213gettyimages-960882996.jpg', 'image', '8e1t86er265564P', '20:14:33', '2018-05-25', 'log9622290-3a-pg2msu5its11909ejga5987o2647dl-pt380eyg'),
(676, 'edited', 'uploads/864446gettyimages-930213280_1[1].jpg', 'image', 'j90819542aBn72i', '20:17:09', '2018-05-25', 'logo-4sy465g8s2uj5mp01ga-789a33-e059-2t6l6487gidp1te93'),
(677, 'edited', 'Real Madrid Vs Liverpool: Five key battles for Champions League final clash', 'news', 'j90819542aBn72i', '20:19:10', '2018-05-25', 'log89a7264784lre2'),
(678, 'edited', 'uploads/3678615gettyimages-960882996.jpg', 'image', '8e1t86er265564P', '20:44:43', '2018-05-25', 'log-e3p1d5651pa7t8i99osl10ag669s-3y2u28tm6ge52818j-3g'),
(679, 'edited', 'uploads/6261109gettyimages-930213280_1[2].jpg', 'image', 'j90819542aBn72i', '01:57:33', '2018-05-26', 'logs32m1625dp9at6y71g89-ej1e1-0aig9-tg90s82-30165l2oup0'),
(680, 'added', 'VIDEO: Falz Shuts Down The Internet With â€˜This Is Nigeriaâ€™, An Adaptation of Childish Gambinoâ€™s â€˜This Is Americaâ€™', 'news', 'j90819542aBn72i', '02:22:08', '2018-05-26', 'logi44492v32e811od'),
(681, 'edited', 'uploads/7216181Falz_This_Is_Nigeria.jpg', 'image', 'j90819542aBn72i', '02:23:37', '2018-05-26', 'log31n-87ae24ji-3lh9ssa1d6pu-5gtioz1is1ig3pr-l6a1-5f'),
(682, 'edited', 'VIDEO: Falz Shuts Down The Internet With â€˜This Is Nigeriaâ€™, An Adaptation of Childish Gambinoâ€™s â€˜This Is Americaâ€™', 'news', 'j90819542aBn72i', '02:36:01', '2018-05-26', 'log80v7d05o9642ie7'),
(683, 'added', 'Jonathan, Secondus, Wike, Dankwambo, other PDP leaders converge on Ekiti', 'news', 'j90819542aBn72i', '02:39:47', '2018-05-26', 'loga7j38a84n0hn2t70o0'),
(684, 'added', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:23:32', '2018-07-17', 'log8s0l2cp35i60i523ot'),
(685, 'added', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:25:13', '2018-07-17', 'logoi2p2784lct5i6693s'),
(686, 'added', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:25:54', '2018-07-17', 'logo29i7i79pl1t06cs07'),
(687, 'added', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:29:55', '2018-07-17', 'logio1675s8tpc6323il2'),
(688, 'added', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:31:01', '2018-07-17', 'logoc28lp750iis85597t'),
(689, 'added', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:31:01', '2018-07-17', 'log69i9sl0c5iot67109p'),
(690, 'deleted', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:31:13', '2018-07-17', 'logp3i4o708190c13silt'),
(691, 'deleted', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:31:18', '2018-07-17', 'log495is89pcloti18592'),
(692, 'deleted', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:31:27', '2018-07-17', 'log29s2toi9pl98399i5c'),
(693, 'deleted', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:31:31', '2018-07-17', 'logilp0s2o2t4i9c62312'),
(694, 'deleted', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'article', 'jy95Ae4d739i4o02', '17:31:34', '2018-07-17', 'logoc345i59759l9s7pit'),
(695, 'edited', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks', 'article', 'jy95Ae4d739i4o02', '09:19:01', '2018-07-18', 'logco81676pi2i9tl159s'),
(696, 'added', 'Introducing...Swap Space Systems Ltd.\r\nWe transform people''s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it.', 'about', 'jy95Ae4d739i4o02', '10:20:24', '2018-07-18', 'logitwuinc6sn272da2opr1g485-0'),
(697, 'edited', 'We transform people''s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it.', 'about', 'jy95Ae4d739i4o02', '10:43:00', '2018-07-18', 'loge96237580w1');
INSERT INTO `logs` (`id`, `type`, `content`, `category`, `action_by`, `time_created`, `date_created`, `hash_id`) VALUES
(698, 'edited', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks', 'article', 'jy95Ae4d739i4o02', '10:55:52', '2018-07-18', 'log3lp5464oit04c913is'),
(699, 'edited', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks', 'article', 'jy95Ae4d739i4o02', '10:56:02', '2018-07-18', 'logi2305o7silp3c76t85'),
(700, 'edited', 'uploads/7408124201309250928180660.jpg', 'image', 'jy95Ae4d739i4o02', '10:56:13', '2018-07-18', 'log6l0-274099u4o8s9p12dp006-7581210286793a28j98g03'),
(701, 'added', 'Poultry', 'article', 'jy95Ae4d739i4o02', '11:38:45', '2018-07-18', 'logu9p0l4yr3t138o725'),
(702, 'added', 'Poultry', 'article', 'jy95Ae4d739i4o02', '11:38:45', '2018-07-18', 'logp736y43ul41rto038'),
(703, 'added', 'Poultry', 'article', 'jy95Ae4d739i4o02', '11:40:00', '2018-07-18', 'logt9543or3l403yp0u0'),
(704, 'added', 'Poultry', 'article', 'jy95Ae4d739i4o02', '11:40:00', '2018-07-18', 'log852rlp5oy3u07044t'),
(705, 'added', 'Poultry', 'services', 'jy95Ae4d739i4o02', '14:32:49', '2018-07-18', 'log9uo25ry23lt965p89'),
(706, 'deleted', 'Poultry', 'article', 'jy95Ae4d739i4o02', '14:47:58', '2018-07-18', 'loglroup0006772y5t55'),
(707, 'deleted', 'Poultry', 'article', 'jy95Ae4d739i4o02', '14:48:11', '2018-07-18', 'log37l62po678u36try'),
(708, 'edited', 'Poultry', 'services', 'jy95Ae4d739i4o02', '15:00:51', '2018-07-18', 'logu3191y308tp6or1l1'),
(709, 'added', 'Cocoa', 'category', 'jy95Ae4d739i4o02', '15:22:03', '2018-07-18', 'log8c4481a93c396oo'),
(710, 'added', 'Corn', 'category', 'jy95Ae4d739i4o02', '15:42:47', '2018-07-18', 'log5964rnco58709'),
(711, 'edited', 'Fish', 'category', 'jy95Ae4d739i4o02', '16:22:43', '2018-07-18', 'log4s1h114i65f744'),
(712, 'added', 'huojhjk;uohuo', 'product', 'jy95Ae4d739i4o02', '09:48:37', '2018-07-19', 'log5ouj46juh22-8o3h24k4uho'),
(713, 'added', 'Rice', 'product', 'jy95Ae4d739i4o02', '09:50:51', '2018-07-19', 'log92i13rc060087e'),
(714, 'added', 'Cat fish', 'product', 'jy95Ae4d739i4o02', '10:01:24', '2018-07-19', 'log8874c128a5t70'),
(715, 'edited', '12', 'category', 'jy95Ae4d739i4o02', '15:29:31', '2018-07-19', 'log167913129161'),
(716, 'edited', '12', 'category', 'jy95Ae4d739i4o02', '15:31:11', '2018-07-19', 'log104304724625'),
(717, 'edited', '12', 'category', 'jy95Ae4d739i4o02', '15:34:58', '2018-07-19', 'log592141742456'),
(718, 'deleted', 'huojhjk;uohuo', 'product', 'jy95Ae4d739i4o02', '15:42:59', '2018-07-19', 'logu-9j1uh6oh6h18j90okuo59'),
(719, 'deleted', 'Rice', 'product', 'jy95Ae4d739i4o02', '15:51:04', '2018-07-19', 'log2769e635r1ic2'),
(720, 'added', 'yam', 'product', 'jy95Ae4d739i4o02', '15:52:16', '2018-07-19', 'log02m203128a19y'),
(721, 'deleted', 'yam', 'product', 'jy95Ae4d739i4o02', '15:52:22', '2018-07-19', 'logma740y6465461'),
(722, 'added', 'coco', 'product', 'jy95Ae4d739i4o02', '15:55:29', '2018-07-19', 'logo41cco21942194'),
(723, 'deleted', 'coco', 'product', 'jy95Ae4d739i4o02', '15:55:36', '2018-07-19', 'logcco1856085o44'),
(724, 'added', 'coco', 'product', 'jy95Ae4d739i4o02', '15:56:58', '2018-07-19', 'log2o5640c065o6c5'),
(725, 'added', 'Yam', 'product', 'jy95Ae4d739i4o02', '15:57:26', '2018-07-19', 'log4567556m3a9y'),
(726, 'deleted', 'coco', 'product', 'jy95Ae4d739i4o02', '15:57:31', '2018-07-19', 'log0c623o6o8572c0'),
(727, 'added', 'Docker is a tool that is design to make it easier to create, run and deploy applications by using containers', 'article', 'jy95Ae4d739i4o02', '20:24:26', '2018-07-20', 'log52721o44e5krd9c1'),
(728, 'added', 'Docker is a tool that is design to make it easier to create, run and deploy applications by using containers', 'article', 'jy95Ae4d739i4o02', '20:24:26', '2018-07-20', 'logedo73558607k5rc2'),
(729, 'added', 'huojhjk;uohuo', 'product', 'jy95Ae4d739i4o02', '23:02:17', '2018-07-20', 'logh6uu0j75hk85j-580o7ouoh'),
(730, 'added', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'services', 'jy95Ae4d739i4o02', '22:51:49', '2018-07-21', 'log6c4989i7ops707i2lt'),
(731, 'added', 'Project 360', 'project', 'jy95Ae4d739i4o02', '22:45:02', '2018-07-23', 'log555t5o8ecj2r82p'),
(732, 'added', 'Yam Project', 'project', 'jy95Ae4d739i4o02', '08:13:41', '2018-07-27', 'log62ma629513y81'),
(733, 'added', 'AfterLife', 'project', 'jy95Ae4d739i4o02', '08:44:25', '2018-07-27', 'log7139re4f4af20e1tli2'),
(734, 'added', 'Docker is a tool that is design to make it easier to create.', 'article', 'jy95Ae4d739i4o02', '09:16:56', '2018-07-27', 'logerk0c562d59o0794'),
(735, 'added', 'Docker is a tool that is design to make it easier to create.', 'article', 'jy95Ae4d739i4o02', '09:16:56', '2018-07-27', 'log2o96ed29k8327rc2'),
(736, 'edited', 'uploads/4771400download.jpg', 'image', 'jy95Ae4d739i4o02', '09:30:12', '2018-07-27', 'logao4w4p9206pl3017-d4g8172dln-s1jo2duoa'),
(737, 'added', 'Epower', 'project', 'jy95Ae4d739i4o02', '09:36:32', '2018-07-27', 'logr3322poe03e9829w'),
(738, 'edited', 'uploads/3948871innovationbulb.jpg', 'image', 'jy95Ae4d739i4o02', '11:14:39', '2018-07-27', 'log9ol-ba58s50dgt83boilo9nn279pnjv13a4p29uui-'),
(739, 'added', 'Poultry', 'article', 'jy95Ae4d739i4o02', '11:16:23', '2018-07-27', 'logto043r44y1lu8p552'),
(740, 'added', 'Poultry', 'article', 'jy95Ae4d739i4o02', '11:16:23', '2018-07-27', 'log2u80to4l73ypr0183'),
(741, 'edited', 'uploads/1987831download.jpg', 'image', 'jy95Ae4d739i4o02', '11:23:34', '2018-07-27', 'log9pg5ao4n8wo7d36aup8d1l6o4716jd89l8--s'),
(742, 'edited', 'uploads/9507968bbnaija-3-reasons-miracle-won-double-wahala.jpg', 'image', 'jy95Ae4d739i4o02', '11:23:51', '2018-07-27', 'logsj9eeo-063opr7-l0haawaola5-64a5lawndpj2uu-i-bi5as-0gl0e-nn1b-rsa6dmb8oc9'),
(743, 'added', 'General Election', 'training', 'jy95Ae4d739i4o02', '19:35:24', '2018-12-20', 'log7r16le4g83a636n1e'),
(744, 'edited', '1545334684mailcap.jpg', 'image', 'jy95Ae4d739i4o02', '19:38:04', '2018-12-20', 'loga61a25534lc68643i584p9gm-264jp'),
(745, 'added', 'Code Hour', 'events', 'jy95Ae4d739i4o02', '19:41:24', '2018-12-20', 'log548c2073e0do68'),
(746, 'edited', 'Code', 'events', 'jy95Ae4d739i4o02', '19:44:57', '2018-12-20', 'log64675657ode64c'),
(747, 'edited', '1545335942mailIMG-20181022-WA0003.jpg', 'image', 'jy95Ae4d739i4o02', '19:59:02', '2018-12-20', 'logiga3g338-2w9a83m419j553m004li002-3210p042520-11'),
(748, 'added', 'POLITICS Ekiti : â€˜You deserve to be attackedâ€™ â€“ I Go Dye mocks Fayose', 'services', 'jy95Ae4d739i4o02', '20:37:39', '2018-12-20', 'log5c5074i9ps4lt3i3o5'),
(749, 'edited', 'Business', 'services', 'jy95Ae4d739i4o02', '20:43:07', '2018-12-20', 'logi2648e659ub4sss93n'),
(750, 'deleted', 'Poultry', 'campus_article', 'jy95Ae4d739i4o02', '19:32:00', '2018-12-21', 'logl953y2p86rt49u39o'),
(751, 'deleted', 'POLITICS ', 'campus_article', 'jy95Ae4d739i4o02', '19:32:05', '2018-12-21', 'log4t7cs5i03pi22ol31'),
(752, 'added', 'Code Hour2', 'events', 'jy95Ae4d739i4o02', '19:36:06', '2018-12-21', 'log31e62350dc951o'),
(753, 'edited', 'Code', 'events', 'jy95Ae4d739i4o02', '19:40:43', '2018-12-21', 'logeoc685228722d1'),
(754, 'edited', 'Code', 'events', 'jy95Ae4d739i4o02', '19:41:03', '2018-12-21', 'logd79ce49310o326'),
(755, 'added', 'Code Hour', 'events', 'jy95Ae4d739i4o02', '20:03:14', '2018-12-21', 'log55c6oed027479'),
(756, 'edited', 'Docker.', 'article', 'jy95Ae4d739i4o02', '20:12:51', '2018-12-22', 'loge579ck43dro417'),
(757, 'edited', '1545509582mail9aa253a5ca9ad3da9b000e3731d9942e.jpg', 'image', 'jy95Ae4d739i4o02', '20:13:02', '2018-12-22', 'logdm9ac4a7g330a3ld570b-5i804j55a2aap0322081959935979035aee9d81'),
(758, 'edited', '1545509657mailBeautiful_Design_for_API_developer_portals_nordic_APIs.png', 'image', 'jy95Ae4d739i4o02', '20:14:18', '2018-12-22', 'logfi0lp5-ea2ug5-l-r9dig53r-o7la-5i4epc9--61-bnpse08sldrrinonueofsampa8vdtt4po5iiea'),
(759, 'added', 'Docker.Docker.', 'article', 'jy95Ae4d739i4o02', '20:21:42', '2018-12-22', 'logr7e7rok3e8c92kdd1oc54-'),
(760, 'added', 'Business daily', 'events', 'jy95Ae4d739i4o02', '10:47:07', '2018-12-23', 'log3in42u8b773se1ss80'),
(761, 'edited', '1545562090mailBeautiful_Design_for_API_developer_portals_nordic_APIs.png', 'image', 'jy95Ae4d739i4o02', '10:48:10', '2018-12-23', 'logl0-c27ibpgn-a50ip-s5sne5ovlei5orilr-ap4tf15mpde9os-teddrgaaeo72in467pru--fiu29a-l'),
(762, 'deleted', 'Business daily', 'events', 'jy95Ae4d739i4o02', '10:59:35', '2018-12-23', 'log392suei98911ssn05b'),
(763, 'edited', '1545562975mailCoinFlip_3.3.17_1500x500.jpg', 'image', 'jy95Ae4d739i4o02', '11:02:55', '2018-12-23', 'log--5xp001o46c043705513l17305ilia0fjp-55g-973n1m7-2i75'),
(764, 'added', 'General Election', 'project', 'jy95Ae4d739i4o02', '11:38:08', '2018-12-23', 'loge740rn67a39l3ge25'),
(765, 'edited', '1545565125mailBeautiful_Design_for_API_developer_portals_nordic_APIs.png', 'image', 'jy95Ae4d739i4o02', '11:38:45', '2018-12-23', 'log6f87aa11oripapsu3r5nempe66o6is-po-t4l-nrf-i5il5binpe1v5-d54g5arc-t2delue-ad0i-ogsl'),
(766, 'added', 'Content Development', 'services', 'jy95Ae4d739i4o02', '11:41:35', '2018-12-23', 'lognect560o071tn0110'),
(767, 'edited', '<p>We transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it.</p>', 'about', 'jy95Ae4d739i4o02', '11:50:34', '2018-12-23', 'log1-l6tg4-6t98-43epw57'),
(768, 'edited', '2', 'admin level for 3r543i0a57Kbu845', 'jy95Ae4d739i4o02', '12:27:47', '2018-12-23', 'log15531781424'),
(769, 'added', 'Tech Consultant', 'services', 'jy95Ae4d739i4o02', '11:28:30', '2018-12-25', 'loge62ct1h6164551'),
(770, 'added', 'Business Setup', 'services', 'jy95Ae4d739i4o02', '11:34:07', '2018-12-25', 'log94s36556bun6esis41'),
(771, 'added', 'Poultry', 'services', 'jy95Ae4d739i4o02', '11:34:33', '2018-12-25', 'log4yr75tl8378puo551'),
(772, 'deleted', 'Poultry', 'campus_article', 'jy95Ae4d739i4o02', '11:35:25', '2018-12-25', 'log02y5t25ur42o8p38l'),
(773, 'edited', '3', 'admin level for 6j8e914d07y4ea10', 'jy95Ae4d739i4o02', '16:12:19', '2018-12-25', 'log16907172943'),
(774, 'edited', '1', 'admin level for 6j8e914d07y4ea10', 'jy95Ae4d739i4o02', '16:12:49', '2018-12-25', 'log00117140103'),
(775, 'edited', '3', 'admin level for 6j8e914d07y4ea10', 'jy95Ae4d739i4o02', '16:13:06', '2018-12-25', 'log22264534144'),
(776, 'added', '<p>We transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for itWe transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it</p>', 'about', 'jy95Ae4d739i4o02', '16:59:13', '2018-12-27', 'log6t-t2-p9g3e4202-wl16'),
(777, 'added', '<p>We transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for itWe transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it</p>', 'about', 'jy95Ae4d739i4o02', '17:01:17', '2018-12-27', 'log-p927-0t80g9-4l4ew9t'),
(778, 'edited', '<p>We transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for itWe transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it</p>', 'about', 'jy95Ae4d739i4o02', '17:17:16', '2018-12-27', 'log4w-p071tte38-866-g6l'),
(779, 'edited', '<p>They lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for itWe transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it</p>', 'about', 'jy95Ae4d739i4o02', '17:17:45', '2018-12-27', 'loge-2hl0tp0300ty1-t-482g'),
(780, 'edited', '1545931096mailPMB-and-Trump-1.jpg', 'image', 'jy95Ae4d739i4o02', '17:18:16', '2018-12-27', 'log3p1m1mrti53394j09m-1bp-70u5a68177lp-g-n99ad'),
(781, 'edited', '1545931217mailPMB-and-Trump-1.jpg', 'image', 'jy95Ae4d739i4o02', '17:20:17', '2018-12-27', 'log2918p-4m50116m1al7n9drjp3-74t5p1u4m5-bi-a9g'),
(782, 'edited', '1545931520mailPMB-and-Trump-1.jpg', 'image', 'jy95Ae4d739i4o02', '17:25:20', '2018-12-27', 'log715idp11m6-0j2a3b845gmu5ar3-9-1823n3p1mltp-'),
(783, 'edited', '1545931577mailPMB-and-Trump-1.jpg', 'image', 'jy95Ae4d739i4o02', '17:26:17', '2018-12-27', 'log5ppaib9p575001n1u4rmg3jd20-9t759a5-1ml-7-m1'),
(784, 'added', '<p>With all give you a thought pattern, we present an atmosphere to express yourself&nbsp;With all give you a thought pattern, we present an atmosphere to express yourself&nbsp;With all give you a thought pattern, we present an atmosphere to express yourself&nbsp;With all give you a thought pattern, we present an atmosphere to express yourself</p>', 'about', 'jy95Ae4d739i4o02', '19:53:54', '2018-12-31', 'log8-t8g0twl34t-6i6h1-p56'),
(785, 'edited', '<p>With all give you a thought pattern, we present an atmosphere to express yourself&nbsp;With all give you a thought pattern, we present an atmosphere to express yourself&nbsp;With all give you a thought pattern, we present an atmosphere to express yourself&nbsp;With all give you a thought pattern, we present an atmosphere to express yourself</p>', 'about', 'jy95Ae4d739i4o02', '20:09:26', '2018-12-31', 'log172hg86w633tp--tli-3t2'),
(786, 'edited', '<p>With all give you a thought pattern, we present an atmosphere to express yourself&nbsp;</p>', 'about', 'jy95Ae4d739i4o02', '20:09:36', '2018-12-31', 'logw55lp--581it1h670tt-9g'),
(787, 'edited', '<p>With all give you a thought pattern, we present an atmosphere to express yourself&nbsp;</p>', 'about', 'jy95Ae4d739i4o02', '20:09:41', '2018-12-31', 'log782httwgl18t8p2-8-i0-2'),
(788, 'deleted', 'frontage with the title:', 'Frontage', 'jy95Ae4d739i4o02', '20:13:28', '2018-12-31', 'log4t7039oger65a7n5f4'),
(789, 'deleted', 'frontage with the title:', 'Frontage', 'jy95Ae4d739i4o02', '20:13:38', '2018-12-31', 'log2r1n2oea46350t15fg'),
(790, 'deleted', 'frontage with the title:', 'Frontage', 'jy95Ae4d739i4o02', '20:15:03', '2018-12-31', 'log3o8fe354110ag36nrt'),
(791, 'deleted', 'frontage with the title:', 'Frontage', 'jy95Ae4d739i4o02', '20:18:11', '2018-12-31', 'log1e19no79a6f938grt9'),
(792, 'deleted', 'Thinking School', 'front', 'jy95Ae4d739i4o02', '20:21:44', '2018-12-31', 'logt3ki9871n3nihg0315'),
(793, 'added', '<p>With all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourself</p>', 'about', 'jy95Ae4d739i4o02', '20:22:07', '2018-12-31', 'log17l8tiw-h0gt12762t--p6'),
(794, 'added', '<p>With all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourself</p>', 'about', 'jy95Ae4d739i4o02', '20:22:24', '2018-12-31', 'logt1t-t156pw-596i-g9hl70'),
(795, 'edited', '1546287756mailCoinFlip_3.3.17_1500x500.jpg', 'image', 'jy95Ae4d739i4o02', '20:22:36', '2018-12-31', 'log66g57-9c58l0-1mj8635ina32-ip4081i5274x70of3p00l317--'),
(796, 'added', '<p>With all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourself</p>', 'about', 'jy95Ae4d739i4o02', '20:22:56', '2018-12-31', 'logpt7l177i6--twht-002g29'),
(797, 'added', '<p>With all give you a thought pattern, we present an atmosphere to express yourselfWith all give you a thought pattern, we present an atmosphere to express yourself</p>', 'about', 'jy95Ae4d739i4o02', '20:23:22', '2018-12-31', 'log-lth12w5p8tg-4t87-i469'),
(798, 'edited', '1546339833mail01Blog-Cover-image-Fullstack-Highres.jpg', 'image', 'jy95Ae4d739i4o02', '10:50:33', '2019-01-01', 'log9rf7ec-urvl37-0-k31olajlechmai95stpgb48g-73gae6g3oi3-l2s143ih47m'),
(799, 'edited', 'Writing', 'category', 'jy95Ae4d739i4o02', '11:14:49', '2019-01-01', 'log8in03w0i0604g6tr1'),
(800, 'added', '<p><strong>ELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDP</strong></p>', 'about', 'jy95Ae4d739i4o02', '11:45:33', '2019-01-01', 'logrg6o1ts4e-glplg8ct-8-1oeti29-t3--tnl8nt'),
(801, 'edited', '<p><strong>ELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDP</strong></p>', 'about', 'jy95Ae4d739i4o02', '11:45:57', '2019-01-01', 'logt9o-gtpstc-o90g---lntl57riee92tnl-2t7g2'),
(802, 'edited', '1546343173mail5-signs-that-you-are-stuck-in-a-loveless-marriage.jpg', 'image', 'jy95Ae4d739i4o02', '11:46:13', '2019-01-01', 'log6gaaee3ns-18t3ea-e67i---aslmrcvt-oalsj5-7asgn-lirtrp5ui132h7u74o0-sk4i-yg054m'),
(803, 'deleted', 'ELECTION 2019;APC OR', 'front', 'jy95Ae4d739i4o02', '11:46:28', '2019-01-01', 'log64ee1t5l5i46no7c23'),
(804, 'added', '<p>ELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDP</p>', 'about', 'jy95Ae4d739i4o02', '11:46:41', '2019-01-01', 'loge-t4o3i7l-ln883gpce31t42-t'),
(805, 'edited', '1546343209mail514d9fdca04f678970d8f81caa30a910aa909d03.jpg', 'image', 'jy95Ae4d739i4o02', '11:46:49', '2019-01-01', 'logpd1676f3j11ac70339299d-af50m1a495943c54a10a980i8aa457030750840lfddg3'),
(806, 'edited', '<p>ELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC&nbsp;</p>', 'about', 'jy95Ae4d739i4o02', '11:47:01', '2019-01-01', 'log882-e11nl8o-li5c4ttte-2g9p'),
(807, 'added', 'Poultry', 'article', 'jy95Ae4d739i4o02', '11:47:34', '2019-01-01', 'logl22o05u636ryp805t'),
(808, 'edited', 'Poultry Discuss', 'article', 'jy95Ae4d739i4o02', '11:47:44', '2019-01-01', 'log33996p2r0uol7y1t'),
(809, 'edited', '1546343276mail514d9fdca04f678970d8f81caa30a910aa909d03.jpg', 'image', 'jy95Ae4d739i4o02', '11:47:56', '2019-01-01', 'log4af2f3a7adc0a081946419i0303-5fa8ad8g5599091d640736am6172jc49893p37dl'),
(810, 'deleted', 'Poultry Discuss', 'article', 'jy95Ae4d739i4o02', '11:48:03', '2019-01-01', 'logtru519l247y83o3p2'),
(811, 'added', 'business plan', 'category', 'jy95Ae4d739i4o02', '11:48:25', '2019-01-01', 'logbn2s47si7es303135u'),
(812, 'edited', 'Business Plan', 'category', 'jy95Ae4d739i4o02', '11:48:36', '2019-01-01', 'log0s8b09i53n19sus7e8'),
(813, 'added', 'Code', 'events', 'jy95Ae4d739i4o02', '11:49:14', '2019-01-01', 'logce89o39030d6'),
(814, 'edited', 'Code22', 'events', 'jy95Ae4d739i4o02', '11:49:55', '2019-01-01', 'logd678e2c02o872480'),
(815, 'deleted', 'Code22', 'events', 'jy95Ae4d739i4o02', '11:50:01', '2019-01-01', 'log59de8co022882805'),
(816, 'edited', '1546343717mail514d9fdca04f678970d8f81caa30a910aa909d03.jpg', 'image', 'jy95Ae4d739i4o02', '11:55:17', '2019-01-01', 'log7a-714fm060d87130745ig0j97f9037f18166a9d7493d3c9a9l11ap82a508d4ca9a'),
(817, 'added', 'frenzy', 'project', 'jy95Ae4d739i4o02', '11:55:42', '2019-01-01', 'log67zn767r478yfe64'),
(818, 'deleted', 'fvanjl', 'project', 'jy95Ae4d739i4o02', '11:56:00', '2019-01-01', 'log7nf63la162v836j4'),
(819, 'added', 'Fakunle Ayodeji', 'training', 'jy95Ae4d739i4o02', '11:56:25', '2019-01-01', 'log4le3u4nfk42a26119'),
(820, 'edited', '1546343852mail514d9fdca04f678970d8f81caa30a910aa909d03.jpg', 'image', 'jy95Ae4d739i4o02', '11:57:32', '2019-01-01', 'log3d298fg8a9039aa6950ca4ap6dfjd90133f68014l9345a8-i8a0439m50177dc10280'),
(821, 'edited', '1546344037mail01Blog-Cover-image-Fullstack-Highres.jpg', 'image', 'jy95Ae4d739i4o02', '12:00:37', '2019-01-01', 'log91e-r3uaks9oh305bel62-7i-cairggv44mh11j767amll08-fg3ogcp4-lites4'),
(822, 'edited', '1546344069mail7d0f141657a2b14897324bf98fc492f9a4dbff06.jpg', 'image', 'jy95Ae4d739i4o02', '12:01:10', '2019-01-01', 'log219a47f3l01b44p40f3836gf9441494752-ab27bd439m16cf4ff9668406a68jd22i5'),
(823, 'edited', 'Fakunle', 'training', 'jy95Ae4d739i4o02', '12:05:07', '2019-01-01', 'logf157n0k3e181lu88a'),
(824, 'edited', 'General', 'training', 'jy95Ae4d739i4o02', '12:10:22', '2019-01-01', 'log39r61e5eg41n6l0a8'),
(825, 'added', 'Fakunle Ayodeji 33', 'training', 'jy95Ae4d739i4o02', '12:11:37', '2019-01-01', 'log156ne3a90fu1l7k54'),
(826, 'edited', 'Fakunle', 'training', 'jy95Ae4d739i4o02', '12:12:41', '2019-01-01', 'loglf057n9ak862e58u9'),
(827, 'deleted', 'Fakunle', 'quote', 'jy95Ae4d739i4o02', '12:13:17', '2019-01-01', 'log30k40a7550n3le4uf'),
(828, 'edited', 'General', 'training', 'jy95Ae4d739i4o02', '12:13:41', '2019-01-01', 'logg2e13r138le9a820n'),
(829, 'added', 'Ikorodu Nigeria West Africa â€“ The Emerging Commercial And Residential City of Lagos State', 'services', 'jy95Ae4d739i4o02', '12:14:23', '2019-01-01', 'log6d7u8kr041oi353o9'),
(830, 'edited', '1546344870mail5-signs-that-you-are-stuck-in-a-loveless-marriage.jpg', 'image', 'jy95Ae4d739i4o02', '12:14:31', '2019-01-01', 'logs6-amisksouien-0l4c17v-ta8ry5ji-m3ute-5aa-71aegagorsr34-s-6-5nlgphl-405t2e79i'),
(831, 'edited', 'Ikorodu Nigeria West Africa â€“', 'services', 'jy95Ae4d739i4o02', '12:16:24', '2019-01-01', 'log342k5ou7dro2i2442'),
(832, 'deleted', 'Ikorodu Nigeria West Africa â€“', 'campus_article', 'jy95Ae4d739i4o02', '12:16:32', '2019-01-01', 'logi8odrok08886308u'),
(833, 'edited', '2', 'admin level for 3r543i0a57Kbu845', 'jy95Ae4d739i4o02', '12:17:07', '2019-01-01', 'log57971092737'),
(834, 'edited', '1', 'admin level for 3r543i0a57Kbu845', 'jy95Ae4d739i4o02', '12:18:34', '2019-01-01', 'log38498625111'),
(835, 'edited', 'Fakunle', 'training', 'jy95Ae4d739i4o02', '12:25:12', '2019-01-01', 'log31n3u6ale098f678k');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `visibility` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `image_1` varchar(200) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `category`, `visibility`, `price`, `hash_id`, `image_1`, `created_by`, `date_created`, `time_created`) VALUES
(8, 'Yam', 'vViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProductsViewProducts ViewProducts ViewProducts', '13', 'show', '7000', '66r9m2u3p5otd76ayc10', 'uploads/9507579download.jpg', 'jy95Ae4d739i4o02', '2018-07-19', '15:57:26'),
(9, 'Corn', 'vViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProductsViewProducts ViewProducts ViewProductsvViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProductsViewProducts ViewProducts ViewProductsvViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProductsViewProducts ViewProducts ViewProductsvViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProducts ViewProductsViewProducts ViewProducts ViewProducts', '12', 'show', '66677', 'uu79o5joo-tu75hdk5ju3rh6p12hco', 'uploads/7522448mahatma-gandhi-gandhiji.jpg', 'jy95Ae4d739i4o02', '2018-07-20', '23:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hash_id` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_location` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `hash_id`, `project_name`, `project_location`, `about`, `image_1`, `time_created`, `date_created`, `created_by`) VALUES
(1, '5877659260project360', 'Project 360', 'Ikere', 'Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push.. Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push.. Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push.. Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push.. Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push..', 'uploads/5840695463782257.jpg', '22:44:26', '2018-07-23', 'jy95Ae4d739i4o02'),
(2, '5391022340project', 'Project 1000', 'Ikere', 'If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. v', 'uploads/8384136463782257.jpg', '22:45:02', '2018-07-23', 'jy95Ae4d739i4o02'),
(3, '5391049860Yam ', 'Yam Project', 'Ado-Ekiti', 'If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.', 'uploads/47190farmers.jpg', '08:13:41', '2018-07-27', 'jy95Ae4d739i4o02'),
(4, '4492432824jy95Ae4d739i4o02', 'AfterLife', 'Ekiti', 'If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. v', 'uploads/8908461steamed_rice_artb.jpg', '08:44:25', '2018-07-27', 'jy95Ae4d739i4o02'),
(5, '4662452205jy95Ae4d739i4o02', 'Epower', 'Kogi', 'Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push.. Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push.. Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push.. Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push.. Mowing the lawn is the one of the most fundamental steps for taking care of the lawn. If you are mowing the lawn yourself, and if you have the standard size of lawn, using a small push..', '1545565125mailBeautiful_Design_for_API_developer_portals_nordic_APIs.png', '09:36:32', '2018-07-27', 'jy95Ae4d739i4o02'),
(6, '2304234895jy95ae4d739i4o02rnd', 'General Election', 'Ekiti', 'If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now. If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.If you call the Beautiful Lawn office you will be greeted with a cheerful voice and a person who asks how they can make you smile today. That is our number one goal, and right now.', '1545565088mailCoinFlip_3.3.17_1500x500.jpg', '11:38:08', '2018-12-23', 'jy95Ae4d739i4o02');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `visibility` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `visibility`, `body`, `image_1`, `created_by`, `time_created`, `date_created`, `hash_id`) VALUES
(22, 'Business', 'show', '<p>If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.</p>', '1545338233mailIMG_0433.jpg', 'jy95Ae4d739i4o02', '20:37:39', '2018-12-20', 'ose4t50c1c8s097p5sevriil8i'),
(23, 'Content Development', 'show', '<p>If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every dayIf you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every dayIf you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day</p>', '1545565295mail5-signs-that-you-are-stuck-in-a-loveless-marriage.jpg', 'jy95Ae4d739i4o02', '11:41:35', '2018-12-23', 'cv1335cs1eet0i7t3en77nsro'),
(24, 'Tech Consultant', 'show', '<p><strong>witter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.<strong>witter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.<strong>witter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.</p>', '1545737310mail31223856-10156097971800944-6404817046380927856-n-1-.jpg', 'jy95Ae4d739i4o02', '11:28:30', '2018-12-25', '6cs5ts0r0vi1eh53ce51e2'),
(25, 'Business Setup', 'show', '<p><strong>witter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.<strong>witter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.<strong>witter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.If you are not actively using&nbsp;<strong>Facebook</strong>,&nbsp;<strong>Twitter</strong>&nbsp;and other social media platforms, take the time to do so. Get into the habit of updating your business page or&nbsp;tweets&nbsp;at the same time every day.</p>', '1545737647mail514d9fdca04f678970d8f81caa30a910aa909d03.jpg', 'jy95Ae4d739i4o02', '11:34:07', '2018-12-25', '3495e4ssvnuserbc5s55iies68');

-- --------------------------------------------------------

--
-- Table structure for table `service_booking`
--

CREATE TABLE IF NOT EXISTS `service_booking` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `service_order` text NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `service_booking`
--

INSERT INTO `service_booking` (`id`, `name`, `phone_number`, `email`, `adress`, `service_order`, `hash_id`, `service_id`, `date_created`, `time_created`) VALUES
(1, 'Fakunle Ayodeji', '0802200000', 'ayodejisamuelfakunle@gmail.com', 'OtaOtaOtaOtaOtaOta', '$rnd = rand(0000000000,9999999999);\r\n  $split = explode(" ",$post[''product'']);\r\n  $id = $rnd.cleans($split[''0'']);\r\n  $hash_id = str_shuffle($id.''product'');', 'k846uc5rl7fapu8137n9eodt', '6s102rlir7eco8ps7yv8e6u9t', '2018-07-27', '10:43:40'),
(2, 'frenzy', '080229191919', 'ricemiller@gmail.com', 'OtaOtaOtaOtaOtaOta', 'Lastly, the best way to recover your stolen device is to prevent it from getting stolen. You should take adequate preventive measures at all times to secure your gadgets. Keep your devices close at hand. DonÃ¢â‚¬â„¢t abandon them, not even for a minute. Make sure you label and place inscriptions of your name and mobile number on your devices to deter thieves and for easy identification.', 'p8n534ufcrzreo08d1157yt', '6s102rlir7eco8ps7yv8e6u9t', '2018-07-27', '14:11:09'),
(3, 'Fakunle Ayodeji', '0802200000', 'ayodejisamuelfakunle@gmail.com', 'Ota', 'I want you to help train my workers on some organizational skills', 'n008atkdfcp7l0ou6213uer2', 'ose4t50c1c8s097p5sevriil8i', '2018-12-27', '16:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `twitter`, `facebook`, `linkedin`, `file_path`, `created_by`, `time_created`, `date_created`, `hash_id`) VALUES
(12, 'FASHIONS FINEST AFRICA CONFERENCE', 'Victoria Island, Lagos', '', '', '', '', 'admin7115698293', '13:28:30', '2018-05-10', 'ne23e305337tv3');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `training_time` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `name`, `venue`, `description`, `status`, `price`, `image_1`, `created_by`, `start_date`, `end_date`, `training_time`, `date_created`, `time_created`, `hash_id`) VALUES
(1, 'General', 'Abuja', '<p>DOCKER Docker is a tool that is design to make it easier to create, run and deploy applications by using containers When starting Docker you need to first install Docker ï¿½toolbox and this is where you run all your docker commands. Go to hub.docker.com the official website for docker where you can download packages/tools you want to use Images-&gt; What is an image in Docker? An image is an immutable file which are called upon from hub.docker.com/explore through the command build(commands will be attached at the end). An image can be a dependency, a library that is needed for web development, eg nginx(server) is an image in docker, phpmyadmin, mysql, and so on are images and examples of what might be needed for a successful, creation and deployment of any website. For instance if you want to create an application using PHP, which is a backend language that cannot be assessed on a browser without a server, we make use of a local server which will also be gotten as an image, also needed is mysql and phpmyadmin for a successful creation of an application. To pull/download an image, got to hub.docker.com click on Explore (check the image below) on the home button. On the next page you will see where different images names are, ensure to search for the particular image you want to download and verify if itï¿½s an official name of the particular library or dependencies you are about to download. Most official names comes with a sub name called official check the image below. After this process, return to your Docker environment and write a commsnd to pull the image you need using =&gt;docker pull&nbsp;</p>', 'upcoming', '500000', '1545562975mailCoinFlip_3.3.17_1500x500.jpg', 'January/10/2019', 'January/10/2019', 'January/ 20/ 2019', '10am-3pm', '2018-12-20', '19:35:24', 'r6atiga5e71nig04lrn47e7n'),
(3, 'Fakunle', 'Abuja', '<p>:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,</p>\r\n\r\n<p>:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,:endd,</p>', 'upcoming', '500000', '1546344697mail7d0f141657a2b14897324bf98fc492f9a4dbff06.jpg', 'jy95Ae4d739i4o02', 'January/10/2019', 'December 34, 2018', '12am-3pm', '2019-01-01', '12:11:37', 'iln0u7e7a286ft9arkni62n3g');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phone_number`, `username`, `hash`, `hash_id`) VALUES
(4, 'kayode', 'Mayowa', 'kay@gmail.com', '', 'root', '$2y$10$d/2hiay/h/aEMOYvHL4xYuf1yc1/RpIROvmVXYQuEnwKCLAcORkkC', 'b53ca374f7d4a9af823aae88df5f937e'),
(5, 'vicky', 'Fakunle', 'vicky@gmail.com', '', 'vicky', '$2y$10$0.guh52r/42OLEjeD.De9.zGvXVJvuqxY40ECm7pAVacfkpLkLavG', 'id7729920987'),
(6, 'deji', 'Fakunle', 'deji@gmail.com', '', 'deji', '$2y$10$Lit4qe6T.QpW2Wvsr455iefURhBMvDNew46I4PlOh5i4TyXE2OR.G', 'id2419747868'),
(9, 'Tese', 'Test', 'test@gmail.com', '', 'test', '$2y$10$TkVO5WaDyaGhMyhxFo02Ou2r9dbuXVPyllkuUrMKvW3W8/wmcJv/C', 'id9026759201'),
(10, 'tset', 'Test', 't@gmail.com', '', 'tee', '$2y$10$JPwFXIAYDNlwYip9mEs/3eybYYHQZlbv9PGYRCxTXcxnocDDo0LuS', 'b53ca374f7d4a9af823aae88df5f937e'),
(12, 'Ayodeji', 'Fakunle', 'ayodejisamuelfakunle@gmail.com', '08133475878', 'Frenzy', '$2y$10$nJNdMb77k65HBMTRovoRU.LKm7kZpbbB7EydcTzQLrwIlpVDM8Gky', 'ayodejisamuelfakunle781131gmail.com'),
(13, 'Ayodeji', 'samuel', 'sam@gmail.com', '08133475878', 'sammy', '$2y$10$JCAwugoZdFK1TiaJzPUhbeIggh.H3n6Vua8f.coOLzy85uPjNnMfi', 'sam33949045gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `image_1` text,
  `created_by` varchar(255) NOT NULL,
  `time_created` time NOT NULL,
  `date_created` date NOT NULL,
  `hash_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `body`, `image_1`, `created_by`, `time_created`, `date_created`, `hash_id`) VALUES
(20, '<p>They lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for itWe transform people&#39;s lives by teaching them how to code and helping them develop a successful career in Software Development Irrespective of your academic background, as long as you can read, write and comprehend, we can groom you from novice to entry-level Software Developer or Front End Developer or User Experience Designer(within a space of 3 to 4 months)Our next batch of coding classes begins 7th May, 2018. Registration Fee is N10,000. Training fee for each course(Web Development Immersive, Front End Development Immersive, User Experience Design) is N200,000. Please visit www.swapspacesystems.com for more enquiries and register on the apply page.To talk to our representative(s): 07039069923, 08078650258Please go a step further and join us to transform more lives by sharing this information with your contacts. Someday, they will thank you for it</p>', '1545931577mailPMB-and-Trump-1.jpg', 'jy95Ae4d739i4o02', '17:01:17', '2018-12-27', '3806584984views'),
(21, '<p>ELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC OR PDPELECTION 2019;APC&nbsp;</p>', '1546343209mail514d9fdca04f678970d8f81caa30a910aa909d03.jpg', 'jy95Ae4d739i4o02', '11:46:41', '2019-01-01', '2463357253views');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
