create database if not exists phpoo;
use phpoo;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2013 at 05:06 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
	`senha` varchar(55) NOT NULL,
	`endereco` varchar(75) NOT NULL,
	`numero` int(6) NOT NULL,
	`bairro` varchar(55) NOT NULL,
	`cidade` varchar(55) NOT NULL,
	`estado` varchar(15) NOT NULL,
	`cep` varchar(9) NOT NULL,
	`nomeMae` varchar(55) NOT NULL,
	`nomePai` varchar(55) NOT NULL,
	`numRG` varchar(15) NOT NULL,
	`numCPF` varchar(15) NOT NULL,
	`dataNasc` Date NOT NULL,
	`sexo` varchar(15) NOT NULL,
	`modalidade` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`,`endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `nomeMae`, `nomePai`, `numRG`,`numCPF`, `dataNasc`, `sexo`, `modalidade` ) VALUES
(1, 'Rodrigo Esteves', 'andrew@hagile.com.br', '1234', 'Rua Pedro Pinheiro', 20, 'Jd. Alvinópolis', 'Atibaia', 'São Paulo', '12943-180', 'Maria do Carmo Esteves', 'João Esteves', '12.333.444-5', '333.444.555-66', '1979-10-04', 'Masculino', 'Boxe Chinês');


select * from usuarios;