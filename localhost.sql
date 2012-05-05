-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 05, 2007 at 08:53 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.2
-- 
-- Database: `englishtobangla`
-- 
CREATE DATABASE `englishtobangla` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE englishtobangla;

-- --------------------------------------------------------

-- 
-- Table structure for table `aftersubjectbeforeverb`
-- 

CREATE TABLE `aftersubjectbeforeverb` (
  `english` varchar(50) NOT NULL,
  `bangla` varchar(50) NOT NULL,
  PRIMARY KEY  (`english`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `aftersubjectbeforeverb`
-- 

INSERT INTO `aftersubjectbeforeverb` VALUES ('always', 'cÖwZw`b');

-- --------------------------------------------------------

-- 
-- Table structure for table `extension`
-- 

CREATE TABLE `extension` (
  `englishword` varchar(30) NOT NULL,
  `banglaword` varchar(30) NOT NULL,
  PRIMARY KEY  (`englishword`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `extension`
-- 

INSERT INTO `extension` VALUES ('to walk', 'nvU‡Z');
INSERT INTO `extension` VALUES ('to sleep', 'Nygv‡Z');
INSERT INTO `extension` VALUES ('to', '‡Z');
INSERT INTO `extension` VALUES ('a', 'GKwU');
INSERT INTO `extension` VALUES ('an', 'GKwU');
INSERT INTO `extension` VALUES ('good', 'fvj');
INSERT INTO `extension` VALUES ('bad', 'Lvivc');
INSERT INTO `extension` VALUES ('at night', 'iv‡Z');
INSERT INTO `extension` VALUES ('the', 'wU');
INSERT INTO `extension` VALUES ('you', '‡Zvgv‡K');
INSERT INTO `extension` VALUES ('me', 'Avgv‡K');
INSERT INTO `extension` VALUES ('his', 'Zv‡K');
INSERT INTO `extension` VALUES ('her', 'Zv‡K');
INSERT INTO `extension` VALUES ('beautifull', 'myb`i');
INSERT INTO `extension` VALUES ('fresh', 'ZvRv');
INSERT INTO `extension` VALUES ('idle', 'Ajm');
INSERT INTO `extension` VALUES ('to eat', '‡L‡Z');
INSERT INTO `extension` VALUES ('him', 'Zv‡K');
INSERT INTO `extension` VALUES ('honest', 'mZ');
INSERT INTO `extension` VALUES ('officer', 'Kg©KZ©v');
INSERT INTO `extension` VALUES ('for', 'Rb¨');
INSERT INTO `extension` VALUES ('since', 'nB‡Z');
INSERT INTO `extension` VALUES ('here', 'GLv‡b');
INSERT INTO `extension` VALUES ('poor', 'Mwie');
INSERT INTO `extension` VALUES ('rich', 'awb');
INSERT INTO `extension` VALUES ('from', 'nB‡Z');
INSERT INTO `extension` VALUES ('two', '`yB');
INSERT INTO `extension` VALUES ('three', 'wZb');
INSERT INTO `extension` VALUES ('days', 'w`b');
INSERT INTO `extension` VALUES ('my', 'Avgvi ');
INSERT INTO `extension` VALUES ('daily', 'cÖwZw`b');
INSERT INTO `extension` VALUES ('in', 'G');
INSERT INTO `extension` VALUES ('with', 'm‡OM');
INSERT INTO `extension` VALUES ('university', ' wek¦we`¨vjq');
INSERT INTO `extension` VALUES ('hj', ' kl');
INSERT INTO `extension` VALUES ('your', '‡Zvgvi');
INSERT INTO `extension` VALUES ('result', 'dj');
INSERT INTO `extension` VALUES ('more', 'A‡bK');
INSERT INTO `extension` VALUES ('weak', '`~e©j');
INSERT INTO `extension` VALUES ('walk', 'nvU‡Z');
INSERT INTO `extension` VALUES ('so', 'GZ');
INSERT INTO `extension` VALUES ('but', 'wKb&Zz');
INSERT INTO `extension` VALUES ('or', 'A_ev');
INSERT INTO `extension` VALUES ('and', 'Ges');
INSERT INTO `extension` VALUES ('many', 'A‡bK');
INSERT INTO `extension` VALUES ('a lot of', 'cÖPzi');
INSERT INTO `extension` VALUES ('some', 'wKQz');
INSERT INTO `extension` VALUES ('every', 'cÖ‡ZK');
INSERT INTO `extension` VALUES ('all', 'me');
INSERT INTO `extension` VALUES ('great', ' eo');
INSERT INTO `extension` VALUES ('cash crop', ' A_©Kix dmj');
INSERT INTO `extension` VALUES ('important', ' ¸i“Z¡c~Y©');
INSERT INTO `extension` VALUES ('useful', ' ¸i“Z¡c~b©');
INSERT INTO `extension` VALUES ('ma', ' Gg.G');
INSERT INTO `extension` VALUES ('after', ' c‡i');
INSERT INTO `extension` VALUES ('one eyed', ' GK PK&Ly wewkó');
INSERT INTO `extension` VALUES ('one', ' GK');
INSERT INTO `extension` VALUES ('very', ' Lye');
INSERT INTO `extension` VALUES ('nice', ' my›`i');
INSERT INTO `extension` VALUES ('fine', ' my›`i');
INSERT INTO `extension` VALUES ('on', ' Dc‡i');
INSERT INTO `extension` VALUES ('sweet', ' wgwó');

-- --------------------------------------------------------

-- 
-- Table structure for table `inactiveverb`
-- 

CREATE TABLE `inactiveverb` (
  `english` varchar(30) NOT NULL,
  `bangla` varchar(30) NOT NULL,
  PRIMARY KEY  (`english`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `inactiveverb`
-- 

INSERT INTO `inactiveverb` VALUES ('eat', '‡L');
INSERT INTO `inactiveverb` VALUES ('sleep', 'Nygv');
INSERT INTO `inactiveverb` VALUES ('read', 'co');
INSERT INTO `inactiveverb` VALUES ('break', 'fvOM');
INSERT INTO `inactiveverb` VALUES ('run', '‡`Šov');
INSERT INTO `inactiveverb` VALUES ('tell', 'ej');
INSERT INTO `inactiveverb` VALUES ('become', 'n');
INSERT INTO `inactiveverb` VALUES ('come', 'Avm');
INSERT INTO `inactiveverb` VALUES ('go', '‡h');
INSERT INTO `inactiveverb` VALUES ('see', '‡`L');
INSERT INTO `inactiveverb` VALUES ('work', 'KvRKi');
INSERT INTO `inactiveverb` VALUES ('begin', 'ïi“Ki');
INSERT INTO `inactiveverb` VALUES ('do', 'Ki');
INSERT INTO `inactiveverb` VALUES ('know', 'Rvb');
INSERT INTO `inactiveverb` VALUES ('sit', 'em');
INSERT INTO `inactiveverb` VALUES ('speak', 'KLvej');
INSERT INTO `inactiveverb` VALUES ('take', 'KLvej');
INSERT INTO `inactiveverb` VALUES ('wear', 'cwiavbKi');
INSERT INTO `inactiveverb` VALUES ('win', 'wRZ');
INSERT INTO `inactiveverb` VALUES ('write', '‡jL');
INSERT INTO `inactiveverb` VALUES ('buy', '‡Kb');
INSERT INTO `inactiveverb` VALUES ('call', 'WvK');
INSERT INTO `inactiveverb` VALUES ('can', 'cvi');
INSERT INTO `inactiveverb` VALUES ('cut', 'KvU');
INSERT INTO `inactiveverb` VALUES ('die', 'gi');
INSERT INTO `inactiveverb` VALUES ('put', 'ivL');
INSERT INTO `inactiveverb` VALUES ('say', 'ej');
INSERT INTO `inactiveverb` VALUES ('sell', 'wewµKi');
INSERT INTO `inactiveverb` VALUES ('send', 'cvVv');
INSERT INTO `inactiveverb` VALUES ('play', '‡Lj');
INSERT INTO `inactiveverb` VALUES ('make', '‰Zix Ki');
INSERT INTO `inactiveverb` VALUES ('want', '‡P');
INSERT INTO `inactiveverb` VALUES ('drink', 'cvb Ki');
INSERT INTO `inactiveverb` VALUES ('sing', '‡M');
INSERT INTO `inactiveverb` VALUES ('need', 'cÖ‡qvR');
INSERT INTO `inactiveverb` VALUES ('give', '‡`Iq');
INSERT INTO `inactiveverb` VALUES ('teste', '¯^v');
INSERT INTO `inactiveverb` VALUES ('suck', '‡Pvk');

-- --------------------------------------------------------

-- 
-- Table structure for table `noun`
-- 

CREATE TABLE `noun` (
  `englishword` varchar(30) NOT NULL,
  `number` int(11) NOT NULL,
  `person` int(11) NOT NULL,
  `banglaword` varchar(30) NOT NULL,
  PRIMARY KEY  (`englishword`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `noun`
-- 

INSERT INTO `noun` VALUES ('I', 1, 1, 'Avwg');
INSERT INTO `noun` VALUES ('rice', 1, 3, 'fvZ');
INSERT INTO `noun` VALUES ('he', 1, 3, '‡m');
INSERT INTO `noun` VALUES ('you', 1, 2, 'Zzwg');
INSERT INTO `noun` VALUES ('we', 2, 1, 'Avgiv');
INSERT INTO `noun` VALUES ('they', 2, 3, 'Zviv');
INSERT INTO `noun` VALUES ('my brother', 1, 3, 'Avgvi fvB');
INSERT INTO `noun` VALUES ('school', 1, 3, '¯‹zj');
INSERT INTO `noun` VALUES ('she', 1, 3, '‡m');
INSERT INTO `noun` VALUES ('boy', 1, 3, 'evjK');
INSERT INTO `noun` VALUES ('boys', 2, 3, 'evjK¸‡jv');
INSERT INTO `noun` VALUES ('girl', 1, 3, 'evwjKv');
INSERT INTO `noun` VALUES ('girls', 2, 3, 'evwjKv¸‡jv');
INSERT INTO `noun` VALUES ('book', 1, 3, 'eB');
INSERT INTO `noun` VALUES ('babu', 1, 3, 'evey');
INSERT INTO `noun` VALUES ('asad', 1, 3, 'Avmv`');
INSERT INTO `noun` VALUES ('anika', 1, 3, 'AwbKv');
INSERT INTO `noun` VALUES ('football', 1, 3, 'dzUej');
INSERT INTO `noun` VALUES ('yesterday', 1, 3, 'MZKvj');
INSERT INTO `noun` VALUES ('hour', 1, 3, 'NÈv');
INSERT INTO `noun` VALUES ('hours', 2, 3, 'NÈv');
INSERT INTO `noun` VALUES ('morning', 1, 3, 'mKvj');
INSERT INTO `noun` VALUES ('letter', 1, 3, 'wPwV');
INSERT INTO `noun` VALUES ('letters', 2, 3, 'wPwV¸wj');
INSERT INTO `noun` VALUES ('my sister', 1, 3, 'Avgvi †evb');
INSERT INTO `noun` VALUES ('my father', 1, 3, 'Avgvi evev');
INSERT INTO `noun` VALUES ('my mother', 1, 3, 'Avgvi gv');
INSERT INTO `noun` VALUES ('brother', 1, 3, 'fvB');
INSERT INTO `noun` VALUES ('brothers', 2, 3, 'fvBiv');
INSERT INTO `noun` VALUES ('there', 1, 3, '‡mLv‡b');
INSERT INTO `noun` VALUES ('this', 1, 3, 'Bnv');
INSERT INTO `noun` VALUES ('food', 2, 3, 'Lv`¨');
INSERT INTO `noun` VALUES ('apple', 1, 3, 'Av‡cj');
INSERT INTO `noun` VALUES ('home', 1, 3, 'evwo');
INSERT INTO `noun` VALUES ('eating', 1, 3, 'LvIqv');
INSERT INTO `noun` VALUES ('running', 1, 3, '‡`Šov‡bv');
INSERT INTO `noun` VALUES ('takeing', 1, 3, '‡bIqv');
INSERT INTO `noun` VALUES ('wearing', 1, 3, 'cwiavb Kiv');
INSERT INTO `noun` VALUES ('winning', 1, 3, '‡RZv');
INSERT INTO `noun` VALUES ('writing', 1, 3, '‡jLv');
INSERT INTO `noun` VALUES ('buying', 1, 3, '‡Kbv');
INSERT INTO `noun` VALUES ('cutting', 1, 3, 'KvUv');
INSERT INTO `noun` VALUES ('reading', 1, 3, 'cov');
INSERT INTO `noun` VALUES ('playing', 1, 3, '‡Ljv');
INSERT INTO `noun` VALUES ('sleeping', 1, 3, 'Nygv‡bv');
INSERT INTO `noun` VALUES ('working', 1, 3, 'KvRKiv');
INSERT INTO `noun` VALUES ('habit', 1, 3, 'kL');
INSERT INTO `noun` VALUES ('habits', 2, 3, 'kL¸‡jv');
INSERT INTO `noun` VALUES ('books', 2, 3, 'eB¸wj');
INSERT INTO `noun` VALUES ('shakil', 1, 3, 'mvwKj');
INSERT INTO `noun` VALUES ('patient', 1, 3, '‡ivMx');
INSERT INTO `noun` VALUES ('doctor', 1, 3, 'Wv³vi');
INSERT INTO `noun` VALUES ('it', 1, 3, 'Bnv');
INSERT INTO `noun` VALUES ('student', 1, 3, 'QvG');
INSERT INTO `noun` VALUES ('cow', 1, 3, 'Miy');
INSERT INTO `noun` VALUES ('cows', 2, 3, 'Miy¸wj');
INSERT INTO `noun` VALUES ('tanvir', 1, 3, 'Zvbfxi');
INSERT INTO `noun` VALUES ('wanting', 1, 3, 'PvIqv');
INSERT INTO `noun` VALUES ('drinking', 1, 3, 'cvb Kiv');
INSERT INTO `noun` VALUES ('shirt', 1, 1, 'Rvgv');
INSERT INTO `noun` VALUES ('shirts', 2, 1, 'Rvgv¸wj');
INSERT INTO `noun` VALUES ('poet', 1, 3, 'Kwe');
INSERT INTO `noun` VALUES ('poets', 2, 3, 'KweMb');
INSERT INTO `noun` VALUES ('song', 1, 3, 'Mvb');
INSERT INTO `noun` VALUES ('songs', 2, 3, 'Mvb¸wj');
INSERT INTO `noun` VALUES ('singing', 1, 3, 'MvIqv');
INSERT INTO `noun` VALUES ('jute', 1, 3, 'cvU');
INSERT INTO `noun` VALUES ('jutes', 2, 3, 'cvU¸wj');
INSERT INTO `noun` VALUES ('orange', 1, 3, 'Kgjv');
INSERT INTO `noun` VALUES ('oranges', 2, 3, 'Kgjv¸wj');
INSERT INTO `noun` VALUES ('baby', 1, 3, 'wkï');
INSERT INTO `noun` VALUES ('babies', 2, 3, 'wkï¸wj');
INSERT INTO `noun` VALUES ('egg', 1, 3, 'wWg');
INSERT INTO `noun` VALUES ('egges', 2, 3, 'wWg¸wj');
INSERT INTO `noun` VALUES ('father', 1, 3, 'wcZv');
INSERT INTO `noun` VALUES ('fathers', 2, 3, 'wcZvMY');
INSERT INTO `noun` VALUES ('european', 1, 3, 'BD‡ivcxqvb');
INSERT INTO `noun` VALUES ('iron', 1, 3, '‡jvnv');
INSERT INTO `noun` VALUES ('irons', 2, 3, '‡jvnv¸wj');
INSERT INTO `noun` VALUES ('metal', 1, 3, 'avZz');
INSERT INTO `noun` VALUES ('metals', 2, 3, 'avZz¸wj');
INSERT INTO `noun` VALUES ('mother', 1, 3, 'gv');
INSERT INTO `noun` VALUES ('mothers', 2, 3, 'gviv');
INSERT INTO `noun` VALUES ('ewe', 1, 3, '‡fov');
INSERT INTO `noun` VALUES ('ewes', 2, 3, '‡fov¸wj');
INSERT INTO `noun` VALUES ('historian', 1, 3, 'HwZnvwmK');
INSERT INTO `noun` VALUES ('historians', 2, 3, 'HwZnvwmKiv');
INSERT INTO `noun` VALUES ('everybody', 1, 3, 'cÖ‡Z¨‡K');
INSERT INTO `noun` VALUES ('man', 1, 3, 'gvbyl');
INSERT INTO `noun` VALUES ('men', 2, 3, 'gvbylMb');
INSERT INTO `noun` VALUES ('needing', 1, 3, 'cÖ‡qvRb');
INSERT INTO `noun` VALUES ('umbrella', 1, 3, 'QvZv');
INSERT INTO `noun` VALUES ('umbrellas', 2, 3, 'QvZv¸wj');
INSERT INTO `noun` VALUES ('beggar', 1, 3, 'wfK&LyK');
INSERT INTO `noun` VALUES ('beggars', 2, 3, 'wfK&LyK¸wj');
INSERT INTO `noun` VALUES ('taka', 1, 3, 'UvKv');
INSERT INTO `noun` VALUES ('takas', 2, 3, 'UvKv¸wj');
INSERT INTO `noun` VALUES ('note', 1, 3, '‡bvU');
INSERT INTO `noun` VALUES ('notes', 2, 3, '‡bvU¸wj');
INSERT INTO `noun` VALUES ('giveing', 1, 3, '‡`Iqv');
INSERT INTO `noun` VALUES ('flower', 1, 3, 'dzj');
INSERT INTO `noun` VALUES ('flowers', 2, 3, 'dzj¸wj');
INSERT INTO `noun` VALUES ('pen', 1, 3, 'Kjg');
INSERT INTO `noun` VALUES ('pens', 2, 3, 'Kjg¸wj');
INSERT INTO `noun` VALUES ('table', 1, 3, '‡Uwej');
INSERT INTO `noun` VALUES ('tables', 2, 3, '‡Uwej¸wj');
INSERT INTO `noun` VALUES ('mango', 1, 3, 'Avg');
INSERT INTO `noun` VALUES ('mangoes', 2, 3, 'Avg¸wj');
INSERT INTO `noun` VALUES ('testeing', 1, 3, '¯^v`');
INSERT INTO `noun` VALUES ('sinthiea', 1, 3, 'wQbw_qv');
INSERT INTO `noun` VALUES ('field', 1, 3, 'gvV');
INSERT INTO `noun` VALUES ('fields', 2, 3, 'gvV¸wj');
INSERT INTO `noun` VALUES ('friend', 1, 3, 'e›`y');
INSERT INTO `noun` VALUES ('friends', 2, 3, 'e›`yMb');
INSERT INTO `noun` VALUES ('sucking', 1, 3, '‡Pvkv');
INSERT INTO `noun` VALUES ('name', 1, 3, 'bvg');
INSERT INTO `noun` VALUES ('names', 2, 3, 'bvg¸wj');
INSERT INTO `noun` VALUES ('anik', 1, 3, 'AvwbK');

-- --------------------------------------------------------

-- 
-- Table structure for table `number`
-- 

CREATE TABLE `number` (
  `singular` varchar(10) NOT NULL,
  `plural` varchar(10) NOT NULL,
  PRIMARY KEY  (`singular`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `number`
-- 

INSERT INTO `number` VALUES ('book', 'books');
INSERT INTO `number` VALUES ('pen', 'pens');
INSERT INTO `number` VALUES ('dog', 'dogs');
INSERT INTO `number` VALUES ('boy', 'boys');
INSERT INTO `number` VALUES ('girl', 'girls');
INSERT INTO `number` VALUES ('house', 'houses');
INSERT INTO `number` VALUES ('bus', 'buses');
INSERT INTO `number` VALUES ('box', 'boxes');
INSERT INTO `number` VALUES ('baby', 'babies');
INSERT INTO `number` VALUES ('man', 'men');
INSERT INTO `number` VALUES ('child', 'children');
INSERT INTO `number` VALUES ('brother', 'brothers');
INSERT INTO `number` VALUES ('cow', 'cows');
INSERT INTO `number` VALUES ('shirt', 'shirts');
INSERT INTO `number` VALUES ('poet', 'poets');
INSERT INTO `number` VALUES ('song', 'songs');
INSERT INTO `number` VALUES ('jute', 'jutes');
INSERT INTO `number` VALUES ('orange', 'oranges');
INSERT INTO `number` VALUES ('egg', 'egges');
INSERT INTO `number` VALUES ('father', 'fathers');
INSERT INTO `number` VALUES ('iron', 'irons');
INSERT INTO `number` VALUES ('metal', 'metals');
INSERT INTO `number` VALUES ('mother', 'mothers');
INSERT INTO `number` VALUES ('ewe', 'ewes');
INSERT INTO `number` VALUES ('historian', 'historians');
INSERT INTO `number` VALUES ('umbrella', 'umbrellas');
INSERT INTO `number` VALUES ('beggar', 'beggars');
INSERT INTO `number` VALUES ('taka', 'takas');
INSERT INTO `number` VALUES ('note', 'notes');
INSERT INTO `number` VALUES ('flower', 'flowers');
INSERT INTO `number` VALUES ('table', 'tables');
INSERT INTO `number` VALUES ('mango', 'mangoes');
INSERT INTO `number` VALUES ('field', 'fields');
INSERT INTO `number` VALUES ('friend', 'friends');
INSERT INTO `number` VALUES ('name', 'names');

-- --------------------------------------------------------

-- 
-- Table structure for table `prenoun`
-- 

CREATE TABLE `prenoun` (
  `english` varchar(50) NOT NULL,
  `bangla` varchar(50) NOT NULL,
  PRIMARY KEY  (`english`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `prenoun`
-- 

INSERT INTO `prenoun` VALUES ('my', 'Avgvi');
INSERT INTO `prenoun` VALUES ('our', 'Avgv`i');
INSERT INTO `prenoun` VALUES ('his', 'Zvi');
INSERT INTO `prenoun` VALUES ('him', 'Zvi');
INSERT INTO `prenoun` VALUES ('their', 'Zv`i');
INSERT INTO `prenoun` VALUES ('your', '‡Zvgvi');
INSERT INTO `prenoun` VALUES ('her', 'Zvi');
INSERT INTO `prenoun` VALUES ('once upon a time', 'GK`v');
INSERT INTO `prenoun` VALUES ('everyday', 'cÖwZw`b');
INSERT INTO `prenoun` VALUES ('many', 'A‡bK');
INSERT INTO `prenoun` VALUES ('a lot of', 'cÖPzi');
INSERT INTO `prenoun` VALUES ('some', 'wKQz');
INSERT INTO `prenoun` VALUES ('every', 'cÖ‡ZK');
INSERT INTO `prenoun` VALUES ('all', 'me');
INSERT INTO `prenoun` VALUES ('since', '‡h‡nZz');
INSERT INTO `prenoun` VALUES ('as', '‡h‡nZz');
INSERT INTO `prenoun` VALUES ('because', '‡h‡nZz');
INSERT INTO `prenoun` VALUES ('because of', 'Kvib');
INSERT INTO `prenoun` VALUES ('before', 'c~‡e©');
INSERT INTO `prenoun` VALUES ('after', 'c‡i');
INSERT INTO `prenoun` VALUES ('the', 'wU');

-- --------------------------------------------------------

-- 
-- Table structure for table `question`
-- 

CREATE TABLE `question` (
  `english` varchar(30) NOT NULL,
  `bangla` varchar(30) NOT NULL,
  PRIMARY KEY  (`english`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `question`
-- 

INSERT INTO `question` VALUES ('what', 'wK');
INSERT INTO `question` VALUES ('where', '‡Kv_vq');
INSERT INTO `question` VALUES ('who', '‡K');
INSERT INTO `question` VALUES ('which', '‡Kvb');
INSERT INTO `question` VALUES ('whom', 'Kv‡K');
INSERT INTO `question` VALUES ('when', 'KLb');
INSERT INTO `question` VALUES ('why', '‡Kb');
INSERT INTO `question` VALUES ('whose', 'Kv‡K');
INSERT INTO `question` VALUES ('how', 'KZ');

-- --------------------------------------------------------

-- 
-- Table structure for table `verb`
-- 

CREATE TABLE `verb` (
  `present` varchar(10) NOT NULL,
  `past` varchar(10) NOT NULL,
  `pastperticiple` varchar(10) NOT NULL,
  `presentcontinuous` varchar(10) default NULL,
  `present3` varchar(10) NOT NULL,
  PRIMARY KEY  (`present`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `verb`
-- 

INSERT INTO `verb` VALUES ('eat', 'ate', 'eaten', 'eating', 'eats');
INSERT INTO `verb` VALUES ('go', 'went', 'gone', 'going', 'goes');
INSERT INTO `verb` VALUES ('am', 'was', 'been', 'being', 'is');
INSERT INTO `verb` VALUES ('are', 'were', 'been', 'being', 'are');
INSERT INTO `verb` VALUES ('have', 'had', 'had', 'having', 'has');
INSERT INTO `verb` VALUES ('become', 'became', 'become', 'becoming', 'becomes');
INSERT INTO `verb` VALUES ('break', 'broke', 'broken', 'breaking', 'breaks');
INSERT INTO `verb` VALUES ('come', 'came', 'come', 'coming', 'comes');
INSERT INTO `verb` VALUES ('do', 'did', 'done', 'doing', 'does');
INSERT INTO `verb` VALUES ('know', 'knew', 'known', 'knowing', 'knows');
INSERT INTO `verb` VALUES ('run', 'ran', 'run', 'running', 'runs');
INSERT INTO `verb` VALUES ('see', 'saw', 'seen', 'seeing', 'sees');
INSERT INTO `verb` VALUES ('sit', 'sat', 'sat', 'sitting', 'sits');
INSERT INTO `verb` VALUES ('take', 'took', 'taken', 'taking', 'takes');
INSERT INTO `verb` VALUES ('wear', 'wore', 'worn', 'wearing', 'wears');
INSERT INTO `verb` VALUES ('win', 'won', 'won', 'winning', 'wins');
INSERT INTO `verb` VALUES ('write', 'wrote', 'written', 'writing', 'writes');
INSERT INTO `verb` VALUES ('buy', 'bought', 'bought', 'buying', 'buys');
INSERT INTO `verb` VALUES ('call', 'called', 'called', 'calling', 'calls');
INSERT INTO `verb` VALUES ('can', 'could', 'could', NULL, 'cans');
INSERT INTO `verb` VALUES ('cut', 'cut', 'cut', 'cutting', 'cuts');
INSERT INTO `verb` VALUES ('die', 'died', 'died', 'dieing', 'dies');
INSERT INTO `verb` VALUES ('put', 'put', 'put', 'putting', 'puts');
INSERT INTO `verb` VALUES ('read', 'read', 'read', 'reading', 'reads');
INSERT INTO `verb` VALUES ('say', 'said', 'said', 'saying', 'says');
INSERT INTO `verb` VALUES ('sell', 'sold', 'sold', 'selling', 'sells');
INSERT INTO `verb` VALUES ('send', 'sent', 'sent', 'sending', 'sends');
INSERT INTO `verb` VALUES ('play', 'played', 'played', 'playing', 'plays');
INSERT INTO `verb` VALUES ('tell', 'told', 'told', 'telling', 'tells');
INSERT INTO `verb` VALUES ('work', 'worked', 'worked', 'working', 'works');
INSERT INTO `verb` VALUES ('sleep', 'slept', 'slept', 'sleeping', 'sleeps');
INSERT INTO `verb` VALUES ('love', 'loved', 'loved', 'loving', 'loves');
INSERT INTO `verb` VALUES ('hate', 'hated', 'hated', 'hatting', 'hates');
INSERT INTO `verb` VALUES ('marry', 'married', 'married', 'marrying', 'marrys');
INSERT INTO `verb` VALUES ('fuck', 'fucked', 'fucked', 'fucking', 'fucks');
INSERT INTO `verb` VALUES ('like', 'liked', 'liked', 'likeing', 'likes');
INSERT INTO `verb` VALUES ('be', 'ikikik', 'ikikik', 'ikikik', 'ikikik');
INSERT INTO `verb` VALUES ('rain', 'rained', 'rained', 'raining', 'rains');
INSERT INTO `verb` VALUES ('want', 'wanted', 'wanted', 'wanting', 'wants');
INSERT INTO `verb` VALUES ('drink', 'drank', 'drunk', 'drinking', 'drinks');
INSERT INTO `verb` VALUES ('sing', 'sang', 'sang', 'singing', 'sings');
INSERT INTO `verb` VALUES ('need', 'ned', 'ned', 'needing', 'needs');
INSERT INTO `verb` VALUES ('give', 'gave', 'given', 'giveing', 'gives');
INSERT INTO `verb` VALUES ('taste', 'tasted', 'tasted', 'tasteing', 'tasts');
INSERT INTO `verb` VALUES ('suck', 'sucked', 'sucked', 'sucking', 'sucks');

-- --------------------------------------------------------

-- 
-- Table structure for table `verbbangla`
-- 

CREATE TABLE `verbbangla` (
  `english` varchar(30) NOT NULL,
  `prein1` text,
  `prein2` text,
  `prein3` text,
  `preco1` text,
  `preco2` text,
  `preco3` text,
  `prepe1` text,
  `prepe2` text,
  `prepe3` text,
  `prepc1` text,
  `prepc2` text,
  `prepc3` text,
  `pasin1` text,
  `pasin2` text,
  `pasin3` text,
  `pasco1` text,
  `pasco2` text,
  `pasco3` text,
  `paspe1` text,
  `paspe2` text,
  `paspe3` text,
  `paspc1` text,
  `paspc2` text,
  `paspc3` text,
  `futin1` text,
  `futin2` text,
  `futin3` text,
  `futco1` text,
  `futco2` text,
  `futco3` text,
  `futpe1` text,
  `futpe2` text,
  `futpe3` text,
  `futpc1` text,
  `futpc2` varchar(30) default NULL,
  `futpc3` varchar(30) default NULL,
  PRIMARY KEY  (`english`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `verbbangla`
-- 

INSERT INTO `verbbangla` VALUES ('eat', 'LvB', 'LvI', 'Lvq', 'LvB‡ZwQ', 'LvB‡Z‡Qv', 'LvB‡Z‡Q', '‡L‡qwQ', '‡L‡q‡Qv', '‡L‡q‡Q', 'Lvq‡ZwQ', 'Lvq‡Z‡Qv', 'Lvq‡Z‡Q', '‡L‡qwQjvg', '‡L‡qwQ‡j', '‡L‡qwQ‡jv', 'LvB‡ZwQjvg', 'LvB‡ZwPQjv', 'LvB‡ZwPQj', 'LvBwQjvg', 'LvBwQjv', 'LvBwQj', 'LvB‡ZwQjvg', 'LvB‡ZwPQ‡j', 'LvB‡ZwPQj', 'LvBe', 'LvBev', 'LvB‡e', 'LvB‡Z _vwKe', 'LvB‡Z _vwKev', 'LvB‡Z _vwK‡e', 'LvBqv _vwKe', 'LvBqv _vwKev', 'LvBqv _vwK‡e', 'LvB‡Z _vwKe', 'LvB‡Z _vwKev', 'LvB‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('go', 'hvB', 'hvI', 'hvq', 'hvB‡ZwQ', 'hvB‡Z‡Qv', 'hvB‡Z‡Q', 'wMqvwQ', 'wMqv‡Qv', 'wMqv‡Q', 'hvB‡ZwQ', 'hvB‡Z‡Qv', 'hvB‡Z‡Q', 'wM‡qwQjvg', 'wM‡qwQjv', 'wM‡qwQ‡jv', 'qvB‡ZwQjvg', 'qvB‡ZwQjv', 'qvB‡ZwQ‡jv', 'qvBqvwQjvg', 'qvBqvwQjv', 'qvBqvwQ‡jv', 'qvB‡ZwQjvg', 'qvB‡ZwQjv', 'qvB‡ZwQ‡jv', 'qvBe', 'qvBev', 'qvB‡e', 'qvB‡Z _vwKe', 'qvB‡Z _vwKev', 'qvB‡Z _vwK‡e', 'qvBqv _vwKe', 'qvBqv _vwKev', 'qvBqv _vwK‡e', 'qvB‡Z _vwKe', 'qvB‡Z _vwKev', 'qvB‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('am', 'nq', 'nq', 'nq', 'nB‡ZwQ', 'nB‡Z‡Qv', 'nB‡Z‡Q', 'nBqvwQ', 'nBqv‡Qv', 'nBqv‡Q', NULL, NULL, NULL, 'wQjvg', 'wQjv', 'wQj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ne', 'nev', 'n‡e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `verbbangla` VALUES ('are', 'nq', 'nq', 'nq', 'nB‡ZwQ', 'nB‡Z‡Qv', 'nB‡Z‡Q', 'nBqvwQ', 'nBqv‡Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `verbbangla` VALUES ('become', 'ne', 'n‡e', 'n‡e', 'nB‡ZwQ', 'nB‡Z‡Qv', 'nB‡Z‡Q', 'nBqvwQ', 'nBqv‡Qv', 'nBqv‡Q', 'nB‡ZwQ', 'nB‡Z‡Qv', 'nB‡Z‡Q', 'n‡qwQjvg', 'n‡qwQjv', 'n‡qwQj', 'nB‡ZwQjvg', 'nB‡ZwQ‡j', 'nB‡ZwQj', 'nB‡ZwQjvg', 'nB‡ZwQjv', 'nB‡ZwQj', 'nB‡ZwQjvg', 'nB‡ZwQjv', 'nB‡ZwQj', 'ne', 'nev', 'n‡e', 'nB‡Z _vwKe', 'nB‡Z _vwKev', 'nB‡Z _vwK‡e', 'nBqv _vwKe', 'nBqv _vwKev', 'nBqv _vwK‡e', 'nB‡Z _vwKe', 'nB‡Z _vwKev', 'nB‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('break', '‡f‡OMwQ', '‡f‡OM‡Qv', '‡f‡OM‡Q', '‡f‡OM‡ZwQ', '‡f‡OM‡Z‡Qv', '‡f‡OM‡Z‡Q', '‡fwOMqvwQ', '‡fwOMqv‡Qv', '‡fwOMqv‡Q', 'fvw½‡ZwQ', 'fvw½‡Z‡Qv', 'fvw½‡Z‡Q', 'fvwOMqvwQjvg', 'fvwOMqvwQjv', 'fvwOMqvwQj', 'fvwOM‡ZwQjvg', 'fvwOM‡ZwQjv', 'fvwOM‡ZwQj', 'fvOMwQjvg', 'fvOMwQjv', 'fvOMwQj', 'fvOM‡ZwQjvg', 'fvOM‡ZwQjv', 'fvOM‡ZwQj', 'fvwOMe', 'fvwOMev', 'fvwOM‡e', 'fvwOM‡Z _vwKe', 'fvwOM‡Z _vwKev', 'fvwOM‡Z _vwK‡e', 'fvwOMqv _vwKe', 'fvwOMqv _vwKev', 'fvwOMqv _vwK‡e', 'fvwOM‡Z _vwKe', 'fvwOM‡Z _vwKev', 'fvwOM‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('begin', 'ïi“Kwi', 'ïi“K‡iv', 'ïi“K‡i', 'ïi“Ki‡ZwQ', 'ïi“Ki‡Z‡Qv', 'ïi“Ki‡Z‡Q', 'ïi“KiqvwQ', 'ïi“Kiqv‡Qv', 'ïi“Kiqv‡Q', 'ïi“Ki‡ZwQ', 'ïi“Ki‡Z‡Qv', 'ïi“Ki‡Z‡Q', 'ïi“ K‡iwQjvg', 'ïi“ K‡iwQjv', 'ïi“ K‡iwQj', 'ïi“ Kwi‡ZwQjvg', 'ïi“ Kwi‡ZwQjv', 'ïi“ Kwi‡ZwQj', 'ïi“ K‡iwQjvg', 'ïi“ K‡iwQjv', 'ïi“ K‡iwQj', 'ïi“ Ki‡ZwQjvg', 'ïi“ Ki‡ZwQjv', 'ïi“ Ki‡ZwQj', 'ïi“ Kie', 'ïi“ Kiev', 'ïi“ Ki‡e', 'ïi“ Kwi‡Z _vwKe', 'ïi“ Kwi‡Z _vwKev', 'ïi“ Kwi‡Z _vwK‡e', 'ïi“ Kwiqv _vwKe', 'ïi“ Kwiqv _vwKev', 'ïi“ Kwiqv _vwK‡e', 'ïi“ Kwi‡Z _vwKe', 'ïi“ Kwi‡Z _vwKev', 'ïi“ Kwi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('come', 'Avwm', 'Av‡mv', 'Av‡m', 'Avm‡ZwQ', 'Avm‡Z‡Qv', 'Avm‡Z‡Q', 'AvwmqvwQ', 'Avwmqv‡Qv', 'Avwmqv‡Q', 'Avm‡ZwQ', 'Avm‡Z‡Qv', 'Avm‡Z‡Qv', 'AvmwQjvg', 'AvmwQjv', 'AvmwQj', 'Avm‡ZwQjvg', 'Avm‡ZwQjv', 'Avm‡ZwQj', 'AvwmqvwQjvg', 'AvwmqvwQjv', 'AvwmqvwQj', 'Avm‡ZwQjvg', 'Avm‡ZwQjv', 'Avm‡ZwQj', 'Avme', 'Avmev', 'Avm‡e', 'Avwm‡Z _vwKe', 'Avwm‡Z _vwKev', 'Avwm‡Z _vwK‡e', 'Avwmqv _vwKe', 'Avwmqv _vwKev', 'Avwmqv _vwK‡e', 'Avwm‡Z _vwKe', 'Avwm‡Z _vwKev', 'Avwm‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('do', 'Kwi', 'K‡iv', 'K‡i', 'Ki‡ZwQ', 'Ki‡Z‡Qv', 'Ki‡Z‡Q', 'KwiqvwQ', 'Kwiqv‡Qv', 'Kwiqv‡Q', 'Ki‡ZwQ', 'Ki‡Z‡Qv', 'Ki‡Z‡Q', 'K‡iwQjvg', 'K‡iwQjv', 'K‡iwQj', 'Kwi‡ZwQjvg', 'Kwi‡ZwQjv', 'Kwi‡ZwQj', 'KwiqvwQjvg', 'KwiqvwQjv', 'KwiqvwQj', 'Kwi‡ZwQjvg', 'Kwi‡ZwQjv', 'Kwi‡ZwQj', 'Kwie', 'Kwiev', 'Kwi‡e', 'Kwi‡Z _vwKe', 'Kwi‡Z _vwKev', 'Kwi‡Z _vwK‡e', 'Kwiqv _vwKe', 'Kwiqv _vwKev', 'Kwiqv _vwK‡e', 'Kwi‡Z _vwKe', 'Kwi‡Z _vwKev', 'Kwi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('know', 'Rvwb', 'Rv‡bv', 'Rv‡b', 'Rvb‡ZwQ', 'Rvb‡Z‡Qv', 'Rvb‡Z‡Q', 'RvwbqvwQ', 'Rvwbqv‡Qv', 'Rvwbqv‡Q', 'Rvb‡ZwQ', 'Rvb‡Z‡Qv', 'Rvb‡Z‡Q', 'RvbZvg', 'Rv‡bv', 'Rv‡b', 'Rvwb‡ZwQjvg', 'Rvwb‡ZwQjv', 'Rvwb‡ZwQj', 'RvwbqvwQjvg', 'RvwbqvwQjv', 'RvwbqvwQj', 'Rvwb‡ZwQjvg', 'Rvwb‡ZwQjv', 'Rvwb‡ZwQj', 'Rvbe', 'Rvbev', 'Rvb‡e', 'Rvwb‡Z _vKe', 'Rvwb‡Z _vKev', 'Rvwb‡Z _vK‡e', 'Rvwbqv _vKe', 'Rvwbqv _vKev', 'Rvwbqv _vK‡e', 'Rvwb‡Z _vKe', 'Rvwb‡Z _vKev', 'Rvwb‡Z _vK‡e');
INSERT INTO `verbbangla` VALUES ('run', '‡`xovB', '‡`xovI', '‡`xovq', '‡`xovB†ZwQ', '‡`xovB†Z‡Qv', '‡`xovB†Z‡Q', '‡`xovBqvwQ', '‡`xovBqv‡Qv', '‡`xovBqv‡Q', '‡`xovB‡ZwQ', '‡`xovB‡Z‡Qv', '‡`xovB‡Z‡Q', '‡`x‡owQjvg', '‡`x‡owQjv', '‡`x‡owQj', '‡`xov‡ZwQjvg', '‡`xov‡ZwQjv', '‡`xov‡ZwQj', '‡`xovqvwQjvg', '‡`xovqvwQjv', '‡`xovqvwQj', '‡`xovB‡ZwQjvg', '‡`xovB‡ZwQjv', '‡`xovB‡ZwQj', '‡`xove', '‡`Šovev', '‡`Šov‡e', '‡`Šov‡Z _vwKe', '‡`Šov‡Z _vwKev', '‡`Šov‡Z _vwK‡e', '‡`Šovqv _vwKe', '‡`Šovqv _vwKev', '‡`Šovqv _vwK‡e', '‡`Šov‡Z _vwKe', '‡`Šov‡Z _vwKev', '‡`Šov‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('see', '‡`wL', '‡`‡Lv', '‡`‡L', '‡`wL‡ZwQ', '‡`wL‡Z‡Qv', '‡`wL‡Z‡Q', '‡`wLqvwQ', '‡`wLqv‡Qv', '‡`wLqv‡Q', '‡`L‡ZwQ', '‡`L‡ZQ', '‡`L‡Z‡Q', '‡`‡LwQ', '‡`‡LQ', '‡`L‡Q', '‡`L‡ZwQjvg', '‡`L‡ZwQjv', '‡`L‡ZwQj', '‡`wLqvwQjvg', '‡`wLqvwQjv', '‡`wLqvwQj', '‡`wL‡ZwQjvg', '‡`wL‡ZwQjv', '‡`wL‡ZwQj', '‡`Le', '‡`Lev', '‡`L‡e', '‡`wL‡Z _vwKe', '‡`wL‡Z _vwKev', '‡`wL‡Z _vwK‡e', '‡`wLqv _vwKe', '‡`wLqv _vwKev', '‡`wLqv _vK‡e', '‡`wL‡Z _vKe', '‡`wL‡Z _vKev', '‡`wL‡Z _vK‡e');
INSERT INTO `verbbangla` VALUES ('sit', 'ewm', 'e‡mv', 'e‡m', 'ewm‡ZwQ', 'ewm‡Z‡Qv', 'ewm‡Z‡Q', 'ewmqvwQ', 'ewmqv‡Qv', 'ewmqv‡Q', 'em‡ZwQ', 'em‡Z‡Qv', 'em‡Z‡Q', 'emwQjvg', 'emwQjv', 'emwQj', 'ewm‡ZwQjvg', 'ewm‡ZwQjv', 'ewm‡ZwQj', 'ewmqvwQjvg', 'ewmqvwQjv', 'ewmqvwQj', 'ewm‡ZwQjvg', 'ewm‡ZwQjv', 'ewm‡ZwQj', 'eme', 'emev', 'em‡e', 'em‡Z _vwKe', 'em‡Z _vwKev', 'em‡Z _vwK‡e', 'ewmqv _vwKe', 'ewmqv _vwKev', 'ewmqv _vwK‡e', 'ewm‡Z _vwKe', 'ewm‡Z _vwKev', 'ewm‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('take', '‡bB', '‡bI', '‡bq', '‡bq‡ZwQ', '‡bq‡Z‡Qv', '‡bq‡Z‡Q', 'wbqvwQ', 'wbqv‡Qv', 'wbqv‡Q', 'wb‡ZwQ', 'wb‡Z‡Qv', 'wb‡Z‡Q', 'wbwQjvg', 'wbwQjv', 'wbwQj', '‡b‡ZwQjvg', '‡b‡ZwQjv', '‡b‡ZwQj', 'wbqvwQjvg', 'wbqvwQjv', 'wbqvwQj', '‡b‡ZwQjvg', '‡b‡ZwQjv', '‡b‡ZwQj', '‡be', '‡bev', '‡b‡e', '‡b‡Z _vwKe', '‡b‡Z _vwKev', '‡b‡Z _vwK‡e', 'wbqv _vwKe', 'wbqv _vwKev', 'wbqv _vwK‡e', 'wb‡Z _vwKe', 'wb‡Z _vwKev', 'wb‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('wear', 'cwi', 'c‡iv', 'c‡i', 'cwi‡ZwQ', 'cwi‡Z‡Qv', 'cwi‡Z‡Q', 'cwiqvwQ', 'cwiqv‡Qv', 'cwiqv‡Q', 'ci‡ZwQ', 'ci‡Z‡Qv', 'ci‡Z‡Q', 'ciwQjvg', 'ciwQjv', 'ciwQj', 'cwi‡ZwQjvg', 'cwi‡ZwQjv', 'cwi‡ZwQj', 'cwiqvwQjvg', 'cwiqvwQjv', 'cwiqvwQj', 'cwi‡ZwQjvg', 'cwi‡ZwQjv', 'cwi‡ZwQj', 'cie', 'ciev', 'ci‡e', 'cwi‡Z _vwKe', 'cwi‡Z _vwKev', 'cwi‡Z _vwK‡e', 'cwiqv _vwKe', 'cwiqv _vwKev', 'cwiqv _vwK‡e', 'cwi‡Z _vwKe', 'cwi‡Z _vwKev', 'cwi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('win', 'wRZwQ', 'wRZ‡Qv', 'wRZ‡Q', 'wRZ‡ZwQ', 'wRZ‡Z‡Qv', 'wRZ‡Z‡Q', 'wRZqvwQ', 'wRZqv‡Qv', 'wRZqv‡Q', 'wRZ‡ZwQ', 'wRZ‡Z‡Qv', 'wRZ‡Z‡Q', 'wR‡ZwQjvg', 'wR‡ZwQjv', 'wR‡ZwQj', 'wR‡ZwQjvg', 'wR‡ZwQjv', 'wR‡ZwQj', 'wRwZqvwQjvg', 'wRwZqvwQjv', 'wRwZqvwQj', 'wR‡ZwQjvg', 'wR‡ZwQjv', 'wR‡ZwQj', 'wRZe', 'wRZev', 'wRZ‡e', 'wRZ‡Z _vwKe', 'wRZ‡Z _vwKev', 'wRZ‡Z _vwK‡e', 'wRZqv _vwKe', 'wRZqv _vwKev', 'wRZqv _vwK‡e', 'wRZ‡Z _vwKe', 'wRZ‡Z _vwKev', 'wRZ‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('write', '‡jwL', '‡j‡Lv', '‡j‡L', '‡jL‡ZwQ', '‡jL‡Z‡Qv', '‡jL‡Z‡Q', '‡jwLqvwQ', '‡jwLqv‡Qv', '‡jwLqv‡Q', '‡jL‡ZwQ', '‡jL‡Z‡Qv', '‡jL‡Z‡Q', '‡jLwQjvg', '‡jLwQjv', '‡jLwQj', '‡jwL‡ZwQjvg', '‡jwL‡ZwQjv', '‡jwL‡ZwQj', '‡jwLqvwQjvg', '‡jwLqvwQjv', '‡jwLqvwQj', '‡jwL‡ZwQjvg', '‡jwL‡ZwQjv', '‡jwL‡ZwQj', '‡jLe', '‡jLev', '‡jL‡e', '‡jwL‡Z _vKe', '‡jwL‡Z _vKev', '‡jwL‡Z _vK‡e', '‡jwLqv _vKe', '‡jwLqv _vKev', '‡jwLqv _vK‡e', '‡jwL‡Z _vKe', '‡jwL‡Z _vKev', '‡jwL‡Z _vK‡e');
INSERT INTO `verbbangla` VALUES ('buy', '‡Kwb', '‡K‡bv', '‡K‡b', '‡Kwb‡ZwQ', '‡Kwb‡Z‡Qv', '‡Kwb‡Z‡Q', '‡KwbqvwQ', '‡Kwbqv‡Qv', '‡Kwbqv‡Q', 'wKb‡ZwQ', 'wKb‡Z‡Qv', 'wKb‡Z‡Q', 'wK‡bwQjvg', 'wK‡bwQjv', 'wK‡bwQj', 'wKb‡ZwQjvg', 'wKb‡ZwQjv', 'wKb‡ZwQj', 'wKwbqv wQjvg', 'wKwbqv wQjv', 'wKwbqv wQj', 'wKb‡ZwQjvg', 'wKb‡ZwQjv', 'wKb‡ZwQj', 'wKbe', 'wKbev', 'wKb‡e', 'wKb‡Z _vwKe', 'wKb‡Z _vwKev', 'wKb‡Z _vwK‡e', 'wKbqv _vwKe', 'wKbqv _vwKev', 'wKbqv _vwK‡e', 'wKb‡Z _vwKe', 'wKb‡Z _vwKev', 'wKb‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('can', 'cvwi', 'cv‡iv', 'cv‡i', 'cvi‡ZwQ', 'cvi‡Z‡Qv', 'cvi‡Z‡Q', 'cvwiqvwQ', 'cvwiqv‡Qv', 'cvwiqv‡Q', 'cvi‡ZwQ', 'cvi‡Z‡Qv', 'cvi‡Z‡Q', 'cviZvg', 'cviZv', 'cviZ', 'cvi‡Z _vwKZvg', 'cvi‡Z _vwKZv', 'cvi‡Z _vwKZ', 'cvwiqv wQjvg', 'cvwiqv wQjv', 'cvwiqv wQj', 'cvwi‡Z wQjvg', 'cvwi‡Z wQjv', 'cvwi‡Z wQj', 'cvie', 'cviev', 'cvi‡e', 'cvwi‡Z _vKe', 'cvwi‡Z _vKev', 'cvwi‡Z _vK‡e', 'cvwiqv _vKe', 'cvwiqv _vKev', 'cvwiqv _vK‡e', 'cvwi‡Z _vKe', 'cvwi‡Z _vKev', 'cvwi‡Z _vK‡e');
INSERT INTO `verbbangla` VALUES ('call', 'WvwK', 'Wv‡Kv', 'Wv‡K', 'WvwK‡ZwQ', 'WvwK‡Z‡Qv', 'WvwK‡Z‡Q', 'WvwKqvwQ', 'WvwKqv‡Qv', 'WvwKqv‡Q', 'WvK‡ZwQ', 'WvK‡Z‡Qv', 'WvK‡Z‡Qv', 'WvKwQjvg', 'WvKwQjv', 'WvKwQj', 'WvwK‡ZwQjvg', 'WvwK‡ZwQjv', 'WvwK‡ZwQj', 'WvwKqvwQjvg', 'WvwKqvwQjv', 'WvwKqvwQj', 'WvwK‡ZwQjvg', 'WvwK‡ZwQjv', 'WvwK‡ZwQj', 'WvKe', 'WvKev', 'WvK‡e', 'WvwK‡Z _vwKe', 'WvwK‡Z _vwKev', 'WvwK‡Z _vwK‡e', 'WvwKqv _vwKe', 'WvwKqv _vwKev', 'WvwKqv _vwK‡e', 'WvwK‡Z _vwKe', 'WvwK‡Z _vwKev', 'WvwK‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('cut', 'KvwU', 'Kv‡Uv', 'Kv‡U', 'KvwU‡ZwQ', 'KvwU‡Z‡Qv', 'KvwU‡Z‡Q', 'KvwUqvwQ', 'KvwUqv‡Qv', 'KvwUqv‡Q', 'KvU‡ZwQ', 'KvU‡Z‡Qv', 'KvU‡Z‡Q', 'KvUwQjvg', 'KvUwQjv', 'KvUwQj', 'KvU‡ZwQjvg', 'KvU‡ZwQjv', 'KvU‡ZwQj', 'KvwUqvwQjvg', 'KvwUqvwQjv', 'KvwUqvwQj', 'KvU‡ZwQjvg', 'KvU‡ZwQjv', 'KvU‡ZwQj', 'KvUe', 'KvUev', 'KvU‡e', 'KvU‡Z _vwKe', 'KvU‡Z _vwKev', 'KvU‡Z _vwK‡e', 'KvwUqv _vwKe', 'KvwUqv _vwKev', 'KvwUqv _vwK‡e', 'KvU‡Z _vwKe', 'KvU‡Z _vwKev', 'KvU‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('die', 'gwi', 'g‡iv', 'g‡i', 'gwi‡ZwQ', 'gwi‡Z‡Qv', 'gwi‡Z‡Q', 'gwiqvwQ', 'gwiqv‡Qv', 'gwiqv‡Q', 'gi‡ZwQ', 'gi‡Z‡Qv', 'gi‡Z‡Q', 'giwQjvg', 'giwQjv', 'giwQj', 'gwi‡ZwQjvg', 'gwi‡ZwQjv', 'gwi‡ZwQj', 'gwiqvwQjvg', 'gwiqvwQjv', 'gwiqvwQj', 'gwi‡ZwQjvg', 'gwi‡ZwQjv', 'gwi‡ZwQj', 'gie', 'giev', 'gi‡e', 'gi‡Z _vwK‡e', 'gi‡Z _vwKev', 'gi‡Z _vwK‡e', 'gwiqv _vwKe', 'gwiqv _vwKev', 'gwiqv _vwK‡e', 'gi‡Z _vwK‡e', 'gi‡Z _vwKev', 'gi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('put', 'ivwL', 'iv‡Lv', 'iv‡L', 'ivwL‡ZwQ', 'ivwL‡Z‡Qv', 'ivwL‡Z‡Q', 'ivwLqvwQ', 'ivwLqv‡Qv', 'ivwLqv‡Q', 'ivL‡ZwQ', 'ivL‡Z‡Qv', 'ivL‡Z‡Q', 'ivLwQjvg', 'ivLwQjv', 'ivLwQj', 'ivL‡ZwQjvg', 'ivL‡ZwQjv', 'ivL‡ZwQj', 'ivwLqvwQjvg', 'ivwLqvwQjv', 'ivwLqvwQj', 'ivL‡ZwQjvg', 'ivL‡ZwQjv', 'ivL‡ZwQj', 'ivLe', 'ivLev', 'ivL‡e', 'ivL‡Z _vwKe', 'ivL‡Z _vwKev', 'ivL‡Z _vwK‡e', 'ivwLqv _vwKe', 'ivwLqv _vwKev', 'ivwLqv _vwK‡e', 'ivL‡Z _vwKe', 'ivL‡Z _vwKev', 'ivL‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('read', 'cwi', 'c‡iv', 'c‡i', 'cwi‡ZwQ', 'cwi‡Z‡Qv', 'cwi‡Z‡Q', 'cwiqvwQ', 'cwiqv‡Qv', 'cwiqv‡Q', 'co‡ZwQ', 'co‡Z‡Qv', 'co‡Z‡Q', 'cowQjvg', 'cowQjv', 'cowQj', 'co‡ZwQjvg', 'co‡ZwQjv', 'co‡ZwQj', 'cwoqvwQjvg', 'cwoqvwQjv', 'cwoqvwQj', 'co‡ZwQjvg', 'co‡ZwQjv', 'co‡ZwQj', 'coe', 'coev', 'co‡e', 'co‡Z _vwKe', 'co‡Z _vwKev', 'co‡Z _vwK‡e', 'cwoqv _vwKe', 'cwoqv _vwKev', 'cwoqv _vwK‡e', 'co‡Z _vwKe', 'co‡Z _vwKev', 'co‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('say', 'ewj', 'e‡jv', 'e‡j', 'ej‡ZwQ', 'ej‡Z‡Qv', 'ej‡Z‡Q', 'ewjqvwQ', 'ewjqv‡Qv', 'ewjqv‡Q', 'ej‡ZwQ', 'ej‡Z‡Qv', 'ej‡Z‡Q', 'ejwQjvg', 'ejwQjv', 'ejwQj', 'ej‡ZwQjvg', 'ej‡ZwQjv', 'ej‡ZwQj', 'ewjqvwQjvg', 'ewjqvwQjv', 'ewjqvwQj', 'ej‡ZwQjvg', 'ej‡ZwQjv', 'ej‡ZwQj', 'eje', 'ejev', 'ej‡e', 'ej‡Z _vwKe', 'ej‡Z _vwKev', 'ej‡Z _vwK‡e', 'ewjqv _vwKe', 'ewjqv _vwKev', 'ewjqv _vwK‡e', 'ej‡Z _vwKe', 'ej‡Z _vwKev', 'ej‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('sell', 'wewµKwi', 'wewµK‡iv', 'wewµK‡i', 'wewµKwi‡ZwQ', 'wewµKwi‡Z‡Qv', 'wewµKwi‡Z‡Q', 'wewµKwiqvwQ', 'wewµKwiqv‡Qv', 'wewµKwiqv‡Q', 'wewµKi‡ZwQ', 'wewµKi‡Z‡Qv', 'wewµKi‡Z‡Q', 'weªwµ KiwQjvg', 'weªwµ KiwQjv', 'weªwµ KiwQj', 'weªwµ Kwi‡ZwQjvg', 'weªwµ Kwi‡ZwQjv', 'weªwµ Kwi‡ZwQj', 'weªwµ KwiqvwQjvg', 'weªwµ KwiqvwQjv', 'weªwµ KwiqvwQj', 'weªwµ Kwi‡ZwQjvg', 'weªwµ Kwi‡ZwQjv', 'weªwµ Kwi‡ZwQj', 'weªwµ Kie', 'weªwµ Kiev', 'weªwµ Ki‡e', 'weªwµ Kwi‡Z_vwKe', 'weªwµ Kwi‡Z_vwKev', 'weªwµ Kwi‡Z_vwK‡e', 'weªwµ Kwiqv_vwKe', 'weªwµ Kwiqv_vwKev', 'weªwµ Kwiqv_vwK‡e', 'weªwµ Kwi‡Z_vwKe', 'weªwµ Kwi‡Z_vwKev', 'weªwµ Kwi‡Z_vwK‡e');
INSERT INTO `verbbangla` VALUES ('send', 'cvVvB', 'cvVvI', 'cvVvq', 'cvVvB‡ZwQ', 'cvVvB‡Z‡Qv', 'cvVvB‡Z‡Q', 'cvVvBqvwQ', 'cvVvBqv‡Qv', 'cvVvBqv‡Q', 'cvVvB‡ZwQ', 'cvVvB‡Z‡Qv', 'cvVvB‡Z‡Q', 'cvwV‡qwQjvg', 'cvwV‡qwQjv', 'cvwV‡qwQj', 'cvVvB‡ZwQjvg', 'cvVvB‡ZwQjv', 'cvVvB‡ZwQj', 'cvwV‡qwQjvg', 'cvwV‡qwQjv', 'cvwV‡qwQj', 'cvVvB‡ZwQjvg', 'cvVvB‡ZwQjv', 'cvVvB‡ZwQj', 'cvVve', 'cvVvev', 'cvVv‡e', 'cvVvB‡Z _vwKe', 'cvVvB‡Z _vwKev', 'cvVvB‡Z _vwK‡e', 'cvVvBqv _vwKe', 'cvVvBqv _vwKev', 'cvVvBqv _vwK‡e', 'cvVvB‡Z _vwKe', 'cvVvB‡Z _vwKev', 'cvVvB‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('play', '‡Lwj', '‡L‡jv', '‡L‡j', '‡Lwj‡ZwQ', '‡Lwj‡Z‡Qv', '‡Lwj‡Z‡Q', '‡LwjqvwQ', '‡Lwjqv‡Qv', '‡Lwjqv‡Q', '‡Lj‡ZwQ', '‡Lj‡Z‡Qv', '‡Lj‡Z‡Q', '‡LjwQjvg', '‡LjwQjv', '‡LjwQj', '‡Lj‡ZwQjvg', '‡Lj‡ZwQjv', '‡Lj‡ZwQj', '‡LwjqvwQjvg', '‡LwjqvwQjv', '‡LwjqvwQj', '‡Lj‡ZwQjvg', '‡Lj‡ZwQjv', '‡Lj‡ZwQj', '‡Lje', '‡Ljev', '‡Lj‡e', '‡Lj‡Z _vwKe', '‡Lj‡Z _vwKev', '‡Lj‡Z _vwK‡e', '‡Lwjqv _vwKe', '‡Lwjqv _vwKev', '‡Lwjqv _vwK‡e', '‡Lj‡Z _vwKe', '‡Lj‡Z _vwKev', '‡Lj‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('sleep', 'NygvB', 'NygvI', 'Nygvq', 'NygvB‡ZwQ', 'NygvB‡Z‡Qv', 'NygvB‡Z‡Q', 'NygvBqvwQ', 'NygvBqv‡Qv', 'NygvBqv‡Q', 'NygvB‡ZwQ', 'NygvB‡Z‡Qv', 'NygvB‡Z‡Q', 'NygvBqvwQjvg', 'NygvBqvwQjv', 'NygvBqvwQj', 'NygvB‡ZwQjvg', 'NygvB‡ZwQjv', 'NygvB‡ZwQj', 'NygvBqvwQjvg', 'NygvBqvwQjv', 'NygvBqvwQj', 'NygvB‡ZwQjvg', 'NygvB‡ZwQjv', 'NygvB‡ZwQj', 'Nygve', 'Nygvev', 'Nygv‡e', 'NygvB‡Z _vwKe', 'NygvB‡Z _vwKev', 'NygvB‡Z _vwK‡e', 'NygvBqv _vwKe', 'NygvBqv _vwKev', 'NygvBqv _vwK‡e', 'NygvB‡Z _vwKe', 'NygvB‡Z _vwKev', 'NygvB‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('tell', 'ewj', 'e‡jv', 'e‡j', 'ewj‡ZwQ', 'ewj‡Z‡Qv', 'ewj‡Z‡Q', 'ewjqvwQ', 'ewjqv‡Qv', 'ewjqv‡Q', 'ej‡ZwQ', 'ej‡Z‡Qv', 'ej‡Z‡Q', 'e‡jwQjvg', 'e‡jwQjv', 'e‡jwQj', 'ewj‡ZwQjvg', 'ewj‡ZwQjv', 'ewj‡ZwQj', 'ewjqvwQjvg', 'ewjqvwQjv', 'ewjqvwQj', 'ewj‡ZwQjvg', 'ewj‡ZwQjv', 'ewj‡ZwQj', 'eje', 'ejev', 'ej‡e', 'ewj‡Z _vwKe', 'ewj‡Z _vwKev', 'ewj‡Z _vwK‡e', 'ewjqv _vwKe', 'ewjqv _vwKev', 'ewjqv _vwK‡e', 'ewj‡Z _vwKe', 'ewj‡Z _vwKev', 'ewj‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('work', 'KvRKwi', 'KvRK‡iv', 'KvRK‡i', 'KvRKwi‡ZwQ', 'KvRKwi‡Z‡Qv', 'KvRKwi‡Z‡Q', 'KvRKwiqvwQ', 'KvRKwiqv‡Qv', 'KvRKwiqv‡Q', 'KvRKi‡ZwQ', 'KvRKi‡Z‡Qv', 'KvRKi‡Z‡Q', 'KvRKiwQjvg', 'KvRKiwQjv', 'KvRKiwQj', 'KvR Kwi‡ZwQjvg', 'KvR Kwi‡ZwQjv', 'KvR Kwi‡ZwQj', 'KvR KwiqvwQjvg', 'KvR KwiqvwQjv', 'KvR KwiqvwQj', 'KvR Kwi‡ZwQjvg', 'KvR Kwi‡ZwQjv', 'KvR Kwi‡ZwQj', 'KvR Kie', 'KvR Kiev', 'KvR Ki‡e', 'KvR Kwi‡Z _vwKe', 'KvR Kwi‡Z _vwKev', 'KvR Kwi‡Z _vwK‡e', 'KvR Kwiqv _vwKe', 'KvR Kwiqv _vwKev', 'KvR Kwiqv _vwK‡e', 'KvR Kwi‡Z _vwKe', 'KvR Kwi‡Z _vwKev', 'KvR Kwi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('love', 'fvjevwm', 'fvjev‡mv', 'fvjev‡m', 'fvjevwm‡ZwQ', 'fvjevwm‡Z‡Qv', 'fvjevwm‡Z‡Q', 'fvjevwmqvwQ', 'fvjevwmqv‡Qv', 'fvjevwmqv‡Q', 'fvjevm‡ZwQ', 'fvjevm‡Z‡Qv', 'fvjevm‡Z‡Q', 'fvjevmZvg', 'fvjevmZv', 'fvjevmZ', 'fvjevwm‡Z _vwKZvg', 'fvjevwm‡Z _vwKZv', 'fvjevwm‡Z _vwKZ', 'fvjevwmqvwQjvg', 'fvjevwmqvwQjv', 'fvjevwmqvwQj', 'fvjevwm‡Z _vwKZvg', 'fvjevwm‡Z _vwKZv', 'fvjevwm‡Z _vwKZ', 'fvjevme', 'fvjevmev', 'fvjevm‡e', 'fvjevwm‡Z _vwKe', 'fvjevwm‡Z _vwKev', 'fvjevwm‡Z _vwK‡e', 'fvjevwmqv _vwKe', 'fvjevwmqv _vwKev', 'fvjevwmqv _vwK‡e', 'fvjevwm‡Z _vwKe', 'fvjevwm‡Z _vwKev', 'fvjevwm‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('hate', 'N„bvKwi', 'N„bvK‡iv', 'N„bvK‡i', 'N„bvKwi‡ZwQ', 'N„bvKwi‡Z‡Qv', 'N„bvKwi‡Z‡Qv', 'N„bvKwiqvwQ', 'N„bvKwiqv‡Qv', 'N„bvKwiqv‡Q', 'N„bvKi‡ZwQ', 'N„bvKi‡Z‡Qv', 'N„bvKi‡Z‡Q', 'N„bvKiZvg', 'N„bvKiZv', 'N„bvKiZ', 'N„bvKi‡ZwQjvg', 'N„bvKi‡ZwQjv', 'N„bvKi‡ZwQj', 'N„bvKwiqvwQjvg', 'N„bvKwiqvwQjv', 'N„bvKwiqvwQj', 'N„bvKi‡ZwQjvg', 'N„bvKi‡ZwQjv', 'N„bvKi‡ZwQj', 'N„bvKie', 'N„bvKiev', 'N„bvKi‡e', 'N„bvKwi‡Z _vwKe', 'N„bvKwi‡Z _vwKev', 'N„bvKwi‡Z _vwK‡e', 'N„bvKwiqv _vwKe', 'N„bvKwiqv _vwKev', 'N„bvKwiqv _vwK‡e', 'N„bvKwi‡Z _vwKe', 'N„bvKwi‡Z _vwKev', 'N„bvKwi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('marry', 'weqvKwi', 'weqvK‡iv', 'weqvK‡i', 'weqvKwi‡ZwQ', 'weqvKwi‡Z‡Qv', 'weqvKwi‡Z‡Q', 'weqvKwiqvwQ', 'weqvKwiqv‡Qv', 'weqvKwiqv‡Q', 'weqv‡ZwQ', 'weqv‡Z‡Qv', 'weqv‡Z‡Q', 'weqvKiwQjvg', 'weqvKiwQjv', 'weqvKiwQj', 'weqvKwi‡ZwQjvg', 'weqvKwi‡ZwQjv', 'weqvKwi‡ZwQj', 'weqvKwiqvwQjvg', 'weqvKwiqvwQjv', 'weqvKwiqvwQj', 'weqvKwi‡ZwQjvg', 'weqvKwi‡ZwQjv', 'weqvKwi‡ZwQj', 'weqvKie', 'weqvKiev', 'weqvKi‡e', 'weqvKwi‡Z _vwKe', 'weqvKwi‡Z _vwKev', 'weqvKwi‡Z _vwK‡e', 'weqvKwiqv _vwKe', 'weqvKwiqv _vwKev', 'weqvKwiqv _vwK‡e', 'weqvKwi‡Z _vwKe', 'weqvKwi‡Z _vwKev', 'weqvKwi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('fuck', 'Pzw`', 'Pz‡`v', 'Pz‡`', 'Pz‡`‡ZwQ', 'Pz‡`‡Z‡Qv', 'Pz‡`‡Z‡Q', 'Pz‡`qvwQ', 'Pz‡`qv‡Qv', 'Pz‡`qv‡Q', 'Pz‡`qv‡ZwQ', 'Pz‡`qv‡Z‡Qv', 'Pz‡`qv‡Z‡Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `verbbangla` VALUES ('have', 'Av‡Q', 'Av‡Q', 'Av‡Q', 'AvwQ‡ZwQ', 'AvwQ‡Z‡Qv', 'AvwQ‡Z‡Q', 'AvwQqvwQ', 'AvwQqv‡Qv', 'AvwQqv‡Q', 'AvwQ‡ZwQ', 'AvwQ‡Z‡Qv', 'AvwQ‡Z‡Q', 'wQj', 'wQj', 'wQj', '_vwK‡ZwQj', '_vwK‡ZwQj', '_vwK‡ZwQj', '_vwKqvwQj', '_vwKqvwQj', '_vwKqvwQj', '_vwK‡ZwQj', '_vwK‡ZwQj', '_vwK‡ZwQj', '_vK‡e', '_vK‡e', '_vK‡e', '_vwK‡Z _vK‡e', '_vwK‡Z _vK‡e', '_vwK‡Z _vK‡e', '_vwKqv _vK‡e', '_vwKqv _vK‡e', '_vwKqv _vK‡e', '_vwK‡Z _vK‡e', '_vwK‡Z _vK‡e', '_vwK‡Z _vK‡e');
INSERT INTO `verbbangla` VALUES ('like', 'cQb`Kwi', 'cQb`Ki', 'cQb`K‡i', 'cQb`Kwi‡ZwQ', 'cQb`Kwi‡Z‡Qv', 'cQb`Kwi‡Z‡Q', 'cQb`KwiqvwQ', 'cQb`Kwiqv‡Qv', 'cQb`Kwiqv‡Q', 'cQb`Kwi‡ZwQ', 'cQb`Kwi‡Z‡Qv', 'cQb`Kwi‡Z‡Q', 'cQb`K‡iwQjvg', 'cQb`K‡iwQjv', 'cQb`K‡iwQj', 'cQb`Ki‡ZwQjvg', 'cQb`Ki‡ZwQjv', 'cQb`Ki‡ZwQj', 'cQb`KwiqvwQjvg', 'cQb`KwiqvwQjv', 'cQb`KwiqvwQj', 'cQb`Ki‡ZwQjvg', 'cQb`Ki‡ZwQjv', 'cQb`Ki‡ZwQj', 'cQb` Kie', 'cQb` Kiev', 'cQb` Ki‡e', 'cQb` Kwi‡Z _vwKe', 'cQb` Kwi‡Z _vwKev', 'cQb` Kwi‡Z _vwK‡e', 'cQb` Kwiqv _vwKe', 'cQb` Kwiqv _vwKev', 'cQb` Kwiqv _vwK‡e', 'cQb` Kwi‡Z _vwKe', 'cQb` Kwi‡Z _vwKev', 'cQb` Kwi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('be', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ne', 'nev', 'n‡e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `verbbangla` VALUES ('rain', 'e„wó', 'e„wó', 'e„wó', 'e„wó n‡”Q', 'e„wó n‡”Q', 'e„wó n‡”Q', 'e„wó n‡q‡Q', 'e„wó n‡q‡Q', 'e„wó n‡q‡Q', 'e„wó n‡”Q', 'e„wó n‡”Q', 'e„wó n‡”Q', 'e„wó n‡q‡Q', 'e„wó n‡q‡Q', 'e„wó n‡q‡Q', 'e„wó nB‡ZwQj', 'e„wó nB‡ZwQj', 'e„wó nB‡ZwQj', 'e„wó n‡q‡Q', 'e„wó n‡q‡Q', 'e„wó n‡q‡Q', 'e„wó nB‡ZwQj', 'e„wó nB‡ZwQj', 'e„wó nB‡ZwQj', 'e„wó n‡e', 'e„wó n‡e', 'e„wó n‡e', 'e„wó nB‡Z _vK‡e', 'e„wó nB‡Z _vK‡e', 'e„wó nB‡Z _vK‡e', 'e„wó  n‡q _vK‡e', 'e„wó  n‡q _vK‡e', 'e„wó  n‡q _vK‡e', 'e„wó nB‡Z _vK‡e', 'e„wó nB‡Z _vK‡e', 'e„wó nB‡Z _vK‡e');
INSERT INTO `verbbangla` VALUES ('want', 'PvB', 'PvI', 'Pvq', 'PvB‡ZwQ', 'PvB‡Z‡Qv', 'PvB‡Z‡Q', 'PvBqvwQ', 'PvBqv‡Qv', 'PvBqv‡Q', 'PvB‡ZwQ', 'PvB‡Z‡Qv', 'PvB‡Z‡Q', 'PvBqvwQjvg', 'PvBqvwQjv', 'PvBqvwQj', 'PvB†ZwQjvg', 'PvB†ZwQjv', 'PvB†ZwQj', 'PvBqvwQjvg', 'PvBqvwQjv', 'PvBqvwQj', 'PvB†ZwQjvg', 'PvB†ZwQjv', 'PvB†ZwQj', 'PvBe', 'PvBev', 'PvB‡e', 'PvB‡Z _vwKe', 'PvB‡Z _vwKev', 'PvB‡Z _vwK‡e', 'PvBqv _vwKe', 'PvBqv _vwKev', 'PvBqv _vwK‡e', 'PvB‡Z _vwKe', 'PvB‡Z _vwKev', 'PvB‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('drink', 'cvb Kwi', 'cvb K†iv', 'cvb K†i', 'cvb Kwi‡ZwQ', 'cvb Kwi‡Z‡Qv', 'cvb Kwi‡Z‡Q', 'cvb KwiqvwQ', 'cvb Kwiqv‡Qv', 'cvb Kwiqv‡Q', 'cvb Kwi‡ZwQ', 'cvb Kwi‡Z‡Qv', 'cvb Kwi‡Z‡Q', 'cvb KwiqvwQjvg', 'cvb KwiqvwQjv', 'cvb KwiqvwQj', 'cvb Kwi†ZwQjvg', 'cvb Kwi†ZwQjv', 'cvb Kwi†ZwQj', 'cvb KwiqvwQjvg', 'cvb KwiqvwQjv', 'cvb KwiqvwQj', 'cvb Kwi†ZwQjvg', 'cvb Kwi†ZwQjv', 'cvb Kwi†ZwQj', 'cvb Kwie', 'cvb Kwiev', 'cvb Kwi‡e', 'cvb Kwi‡Z _vwKe', 'cvb Kwi‡Z _vwKev', 'cvb Kwi‡Z _vwK‡e', 'cvb Kwiqv _vwKe', 'cvb Kwiqv _vwKev', 'cvb Kwiqv _vwK‡e', 'cvb Kwi‡Z _vwKe', 'cvb Kwi‡Z _vwKev', 'cvb Kwi‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('sing', 'MvB', 'MvI', 'Mvq', 'MvB‡ZwQ', 'MvB‡Z‡Qv', 'MvB‡Z‡Q', 'MvBqvwQ', 'MvBqv‡Qv', 'MvBqv‡Q', 'MvB‡ZwQ', 'MvB‡Z‡Qv', 'MvB‡Z‡Q', 'MvBqvwQjvg', 'MvBqvwQjv', 'MvBqvwQj', 'MvB†ZwQjvg', 'MvB†ZwQjv', 'MvB†ZwQj', 'MvBqvwQjvg', 'MvBqvwQjv', 'MvBqvwQj', 'MvB†ZwQjvg', 'MvB†ZwQjv', 'MvB†ZwQj', 'MvBe', 'MvBev', 'MvB‡e', 'MvB‡Z _vwKe', 'MvB‡Z _vwKev', 'MvB‡Z _vwK‡e', 'MvBqv _vwKe', 'MvBqv _vwKev', 'MvBqv _vwK‡e', 'MvB‡Z _vwKe', 'MvB‡Z _vwKev', 'MvB‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('need', 'cÖ‡qvRb', 'cÖ‡qvRb', 'cÖ‡qvRb', 'cÖ‡qvRb‡ZwQ', 'cÖ‡qvRb‡Z‡Qv', 'cÖ‡qvRb‡Z‡Q', 'cÖ‡qvRbqvwQ', 'cÖ‡qvRbqv‡Qv', 'cÖ‡qvRbqv‡Q', 'cÖ‡qvRb‡ZwQ', 'cÖ‡qvRb‡Z‡Qv', 'cÖ‡qvRb‡Z‡Q', 'cÖ‡qvRbqvwQjvg', 'cÖ‡qvRbqvwQjv', 'cÖ‡qvRbqvwQj', 'cÖ‡†ZRb†ZwQjvg', 'cÖ‡†ZRb†ZwQjv', 'cÖ‡†ZRb†ZwQj', 'cÖ‡qvRbqvwQjvg', 'cÖ‡qvRbqvwQjv', 'cÖ‡qvRbqvwQj', 'cÖ‡†ZRb†ZwQjvg', 'cÖ‡†ZRb†ZwQjv', 'cÖ‡†ZRb†ZwQj', 'cÖ‡qvRbe', 'cÖ‡qvRbev', 'cÖ‡qvRb‡e', 'cÖ‡qvRb‡Z _vwKe', 'cÖ‡qvRb‡Z _vwKev', 'cÖ‡qvRb‡Z _vwK‡e', 'cÖ‡qvRbqv _vwKe', 'cÖ‡qvRbqv _vwKev', 'cÖ‡qvRbqv _vwK‡e', 'cÖ‡qvRb‡Z _vwKe', 'cÖ‡qvRb‡Z _vwKev', 'cÖ‡qvRb‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('give', '‡`B', '‡`I', '‡`q', '‡`B‡ZwQ', '‡`B‡Z‡Qv', '‡`B‡Z‡Q', '‡`BqvwQ', '‡`Bqv‡Qv', '‡`Bqv‡Q', '‡`B‡ZwQ', '‡`B‡Z‡Qv', '‡`B‡Z‡Q', '‡`BqvwQjvg', '‡`BqvwQjv', '‡`BqvwQj', '‡`B†ZwQjvg', '‡`B†ZwQjv', '‡`B†ZwQj', '‡`BqvwQjvg', '‡`BqvwQjv', '‡`BqvwQj', '‡`B†ZwQjvg', '‡`B†ZwQjv', '‡`B†ZwQj', '‡`Be', '‡`Bev', '‡`B‡e', '‡`B‡Z _vwKe', '‡`B‡Z _vwKev', '‡`B‡Z _vwK‡e', '‡`Bqv _vwKe', '‡`Bqv _vwKev', '‡`Bqv _vwK‡e', '‡`B‡Z _vwKe', '‡`B‡Z _vwKev', '‡`B‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('taste', '¯^v`', '¯^v`', '¯^v`', '¯^v`‡ZwQ', '¯^v`‡Z‡Qv', '¯^v`‡Z‡Q', '¯^v`qvwQ', '¯^v`qv‡Qv', '¯^v`qv‡Q', '¯^v`‡ZwQ', '¯^v`‡Z‡Qv', '¯^v`‡Z‡Q', '¯^v`qvwQjvg', '¯^v`qvwQjv', '¯^v`qvwQj', '¯^v`†ZwQjvg', '¯^v`†ZwQjv', '¯^v`†ZwQj', '¯^v`qvwQjvg', '¯^v`qvwQjv', '¯^v`qvwQj', '¯^v`†ZwQjvg', '¯^v`†ZwQjv', '¯^v`†ZwQj', '¯^v`e', '¯^v`ev', '¯^v`‡e', '¯^v`‡Z _vwKe', '¯^v`‡Z _vwKev', '¯^v`‡Z _vwK‡e', '¯^v`qv _vwKe', '¯^v`qv _vwKev', '¯^v`qv _vwK‡e', '¯^v`‡Z _vwKe', '¯^v`‡Z _vwKev', '¯^v`‡Z _vwK‡e');
INSERT INTO `verbbangla` VALUES ('suck', '‡Pvwk', '‡Pv†kv', '‡Pv†k', '‡Pvwk‡ZwQ', '‡Pvwk‡Z‡Qv', '‡Pvwk‡Z‡Q', '‡PvwkqvwQ', '‡Pvwkqv‡Qv', '‡Pvwkqv‡Q', '‡Pvwk‡ZwQ', '‡Pvwk‡Z‡Qv', '‡Pvwk‡Z‡Q', '‡PvwkqvwQjvg', '‡PvwkqvwQjv', '‡PvwkqvwQj', '‡Pvwk†ZwQjvg', '‡Pvwk†ZwQjv', '‡Pvwk†ZwQj', '‡PvwkqvwQjvg', '‡PvwkqvwQjv', '‡PvwkqvwQj', '‡Pvwk†ZwQjvg', '‡Pvwk†ZwQjv', '‡Pvwk†ZwQj', '‡Pvwke', '‡Pvwkev', '‡Pvwk‡e', '‡Pvwk‡Z _vwKe', '‡Pvwk‡Z _vwKev', '‡Pvwk‡Z _vwK‡e', '‡Pvwkqv _vwKe', '‡Pvwkqv _vwKev', '‡Pvwkqv _vwK‡e', '‡Pvwk‡Z _vwKe', '‡Pvwk‡Z _vwKev', '‡Pvwk‡Z _vwK‡e');
