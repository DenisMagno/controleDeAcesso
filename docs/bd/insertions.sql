-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: controledeacesso
-- ------------------------------------------------------
-- Server version	5.7.19-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `colaborador`
--

LOCK TABLES `colaborador` WRITE;
/*!40000 ALTER TABLE `colaborador` DISABLE KEYS */;
INSERT INTO `colaborador` VALUES (1,102938475,3),(2,192837465,4),(15,172730182,13),(16,921663874,14),(17,198239123,3),(18,128392171,4),(19,201283618,13),(25,938932842,14),(26,495409285,20),(27,234762413,21),(28,428723453,22),(29,912831027,20),(30,109101208,21),(31,802648234,25),(32,302634218,20),(33,207200234,21),(34,249502346,22);
/*!40000 ALTER TABLE `colaborador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `gerente`
--

LOCK TABLES `gerente` WRITE;
/*!40000 ALTER TABLE `gerente` DISABLE KEYS */;
INSERT INTO `gerente` VALUES (3,'Administração',5),(4,'Logistica',6),(13,'TI',11),(14,'Gestão de projetos',12),(20,'Administração',5),(21,'Logistica',6),(22,'TI',11),(23,'Gestão de projetos',12),(24,'RH',9),(25,'TI',10);
/*!40000 ALTER TABLE `gerente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'João','da Silva','jsilva','123','123456789'),(2,'Maria','Benedito','mbenedito','123','987654321'),(3,'Paulo','Dias','pdias','123','132435465'),(4,'Vitor','Santos','vsantos','123','756453423'),(5,'Cecilia','Alves','calves','123','132243354'),(6,'Marcos','Silva','msilva','123','645534423'),(7,'Fernanda','Dias','fdias','123','019283746'),(8,'Celio','dos Santos','csantos','123','132765986'),(9,'Manuela','Rocha','mrocha','123','074926182'),(10,'Marisa','Costa','mcosta','123','648251728'),(11,'Vinicius','Pereira','vpereira','123','092816738'),(12,'Bruna','Ribeiro','bribeiro','123','092619239'),(13,'Douglas','Cardoso','dcardoso','123','091046281'),(14,'Giovanna','Carvalho','gcarvalho','123','093889482'),(15,'Igor','Rodrigues','irodrigues','123','082674836'),(16,'Rafael','Gomes','rgomes','123','091728324'),(17,'Júlio','Melo','jmelo','123','098124836'),(18,'Rodrigo','Pereira','rpereira','123','061836482'),(19,'Gustavo','Barbosa','bbarbosa','123','073926482'),(20,'Felipe','Reis','freis','123','017946383'),(21,'Leticia','Vaz','lvaz','123','062934628'),(22,'Laura','Costa','ccosta','123','026483284'),(23,'Mauro','Dias','mdias','123','593628252'),(24,'Wagner','Leite','wleite','123','952732454'),(25,'Gabriel','Santos','gsantos','123','817339812'),(26,'Fernando','Leite','fleite','123','182738219'),(27,'Eduardo','Santos','esantos','123','849382934'),(28,'Edgard','Souza','esouza','123','298391289'),(29,'Roberto','Leite','rleite','123','192839232'),(30,'Juliano','Lima','jlima','123','192389212'),(31,'Tania','Azevedo','tazevedo','123','063812743'),(32,'Marcos','Ferreira','mferreira','123','123921831'),(33,'Leila','Cavalcanti','lcavalcanti','123','012932138'),(34,'Luana','Araujo','laraujo','123','123129389');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `presidente`
--

LOCK TABLES `presidente` WRITE;
/*!40000 ALTER TABLE `presidente` DISABLE KEYS */;
INSERT INTO `presidente` VALUES (7,'Alimentício'),(8,'Financeiro');
/*!40000 ALTER TABLE `presidente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `supervisor`
--

LOCK TABLES `supervisor` WRITE;
/*!40000 ALTER TABLE `supervisor` DISABLE KEYS */;
INSERT INTO `supervisor` VALUES (5,'Matemática','Estatística',7),(6,'Química','Produtos químicos',8),(9,'RH','Administração',7),(10,'Línguas','Libras',8),(11,'Administração','RH',7),(12,'Qúimica','Produtos químicos',7);
/*!40000 ALTER TABLE `supervisor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-05 17:47:59
