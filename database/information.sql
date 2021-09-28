-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 28. 09 2021 kl. 08:41:54
-- Serverversion: 5.7.31
-- PHP-version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musik`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `musikId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `musikTitel` varchar(100) COLLATE utf16_danish_ci NOT NULL,
  `musikArtist` varchar(100) COLLATE utf16_danish_ci NOT NULL,
  `musikAlbum` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `musikGenre` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `musikOrigin` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  `musikRelease` date NOT NULL,
  `musikTime` time NOT NULL,
  `musikBandInstrument` text COLLATE utf16_danish_ci,
  `musikAlbumTracklist` text COLLATE utf16_danish_ci,
  `musikPrice` decimal(6,2) DEFAULT NULL,
  `musikBuy` text COLLATE utf16_danish_ci,
  `musikImg` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  PRIMARY KEY (`musikId`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf16 COLLATE=utf16_danish_ci;

--
-- Data dump for tabellen `information`
--

INSERT INTO `information` (`musikId`, `musikTitel`, `musikArtist`, `musikAlbum`, `musikGenre`, `musikOrigin`, `musikRelease`, `musikTime`, `musikBandInstrument`, `musikAlbumTracklist`, `musikPrice`, `musikBuy`, `musikImg`) VALUES
(1, 'Numb', 'Linkin Park', 'Meteora', 'Nu metal, alternative rock, pop rock', 'USA', '2003-09-08', '00:03:07', '<p>Mike Shinoda: vocal, rhythm guitar, MC, keyboard </p>\r\n<p>Joe Hahn: DJ, beats</p>\r\n<p>Brad Delson: lead guitar</p>\r\n<p>Rob Bourdon: drums</p>\r\n<p>Dave \"Phoenix\" Farrell: bassguitar, backup vocals</p>', '<p>1. Foreword - 0:13</p>\r\n<p>2. Don\'t stay - 3:07</p>\r\n<p>3. Somewhere I Belong - 3:33</p>\r\n<p>4. Lying from You - 2:55</p>\r\n<p>5. Hit the Floor - 2:44</p>\r\n<p>6. Easier to Run - 3:24</p>\r\n<p>7. Faint - 2:42</p>\r\n<p>8. Figure 09 - 3:17</p>\r\n<p>9. Breaking the Habit - 3:16</p>\r\n<p>10. From the Inside - 2:55</p>\r\n<p>11. Nobody\'s Listening - 2:58</p>\r\n<p>12. Session (Instrumental) - 2:24</p>\r\n<p>13. Numb - 3:07</p>', '5.00', 'https://www.amazon.com/Meteora-Linkin-Park/dp/B00008H2LB/ref=sr_1_1?dchild=1&keywords=meteora&qid=1631699055&sr=8-1', 'Meteora.jpg'),
(2, 'Another Brick In The Wall, Pt. 2', 'Pink Floyd', 'The Dark Side of the Moon', 'Progressive rock, Disco', 'England', '1979-11-30', '00:03:11', '<p>David Gilmour - vocals, guitar, synthi AKS</p>\r\n<p>Nick Mason - drums, percussion, tape effects</p>\r\n<p>Richard Wright - organ, piano, electric piano, EMS VCS 3, synthi AKS, vocals</p>\r\n<p>Roger Waters - bass guitar, vocals, VCS 3, tape effects</p>', '<p>1. \"Speak to Me\" 1:30</p>\r\n<p>2. \"Breathe\" 2:43</p>\r\n<p>3. \"On the Run\" 3:30</p>\r\n<p>4. \"Time\" 6:53</p>\r\n<p>5. \"The Great Gig in the Sky\" 4:15</p>\r\n<p>6. \"Money\" 6:30</p>\r\n<p>7. \"Us and Them\" 7:34</p>\r\n<p>8. \"Any Colour You Like\" 3:24</p>\r\n<p>9. \"Brain Damage\" 3:50</p>\r\n<p>10. \"Eclipse\" 1:45</p>', '10.00', 'https://www.amazon.com/Dark-Side-Moon-Pink-Floyd/dp/B019VQSA64/ref=sr_1_2?dchild=1&keywords=dark+side+of+the+moon&qid=1631700196&sr=8-2', 'thedarksideofthemoon.jpg'),
(3, 'Dancing Queen', 'Abba', 'Dancing Queen', 'Disco, Europop', 'Sweden', '1975-08-15', '00:03:42', '<p>Agnetha F&auml;ltskog - Vocals Organ Piano</p>\r\n<p>Bj&ouml;rn Ulvaeus - Guitar vocals</p>\r\n<p>Benny Andersson - Keyboards vocals guitar accordion</p>\r\n<p>Anni-Frid Lyngstad - Vocals piano</p>', '<p>1. \"Dancing Queen\"</p>\r\n<p>2. \"Knowing Me, Knowing You\"</p>\r\n<p>3. \"Take a Chance on Me\"</p>\r\n<p>4. \"Mamma Mia\"</p>\r\n<p>5. \"Lay All Your Love on Me\"</p>\r\n<p>6. \"Super Trouper\"</p>\r\n<p>7. \"I Have a Dream\"</p>\r\n<p>8. \"The Winner Takes It All\"</p>\r\n<p>9. \"Money, Money, Money\"</p>\r\n<p>10. \"SOS\"</p>\r\n<p>11. \"Chiquitita\"</p>\r\n<p>12. \"Fernando\"</p>\r\n<p>13. \"Voulez-Vous[a]\"</p>\r\n<p>14. \"Gimme! Gimme! Gimme! (A Man After Midnight)\"</p>\r\n<p>15. \"Does Your Mother Know\"</p>\r\n<p>16. \"One of Us\"</p>\r\n<p>17. \"The Name of the Game[b]\"</p>\r\n<p>18. \"Thank You for the Music\"</p>\r\n<p>19. \"Waterloo\"</p>', '9.99', 'https://www.amazon.com/Gold-Greatest-Hits-ABBA/dp/B004DBAUBQ/ref=sr_1_2?dchild=1&keywords=abba&qid=1632212960&s=dmusic&sr=1-2', 'abbagoldgreatesthits.jpg'),
(4, 'Alle Skuffer Over Tid', 'The Mind of 99', 'Solkongen', 'Post-punk, Rock, New Wave', 'Denmark', '2018-02-23', '00:03:14', '<p>Anders Folke Larsen - guitar</p>\r\n<p>Asger Wissing - bass</p>\r\n<p>Jacob Bech-Hansen - synthesizere, programmering og keyboard</p>\r\n<p>Louis Clausen - trommer</p>\r\n<p>Niels Brandt - vokal)</p>', '<p>1. Solkongen 3:14</p>\r\n<p>2. Ung Kniv 3:52</p>\r\n<p>3. I\'m Gonna Die 3:15</p>\r\n<p>4. Ub&aring;d 3:29</p>\r\n<p>5. Guldregn 4:00</p>\r\n<p>6. Alle Skuffer Over Tid 4:42</p>\r\n<p>7. K F&oslash;r &AElig;rlighed 4:40</p>\r\n<p>8. Stor Som En Sol / Flad Som En Pandekage 4:07</p>\r\n<p>9. En Engel 4:03</p>\r\n<p>10. Ideen Er D&oslash;d 4:03</p>\r\n<p>11. (Tak For I Dag) 4:14</p>', '9.99', 'https://www.amazon.com/Solkongen-Explicit-Minds-99/dp/B079M1CG1F/ref=sr_1_5?dchild=1&keywords=solkongen&qid=1632213472&s=dmusic&sr=1-5', 'solkongen.jpg'),
(5, 'The Nights', 'Avicii', 'Stories', 'Progressive House, Folktronica', 'Sweden', '2014-12-01', '00:02:56', '<p>Tim Bergling - DJ remixer record producer musician songwriter</p>', '<p>1. Waiting for Love 3:50</p>\r\n<p>2. Talk to Myself 3:55</p>\r\n<p>3. Touch Me 3:06</p>\r\n<p>4. Ten More Days 4:05</p>\r\n<p>5. For a Better Day 3:26</p>\r\n<p>6. Broken Arrows 3:52</p>\r\n<p>7. True Believer 4:48</p>\r\n<p>8. City Lights 6:28</p>\r\n<p>9. Pure Grinding 2:51</p>\r\n<p>10. Sunset Jesus 4:24</p>\r\n<p>11. Can\'t Catch Me 3:59</p>\r\n<p>12. Somewhere in Stockholm 3:22</p>\r\n<p>14. Gonna Love Ya 3:35</p>\r\n<p>15. The Nights 2:56</p>', '9.99', 'https://www.amazon.com/Stories-Avicii/dp/B014GWFFQ6/ref=sr_1_5?crid=127S6O21TI6ZP&dchild=1&keywords=avicii+the+nights&qid=1632213614&s=dmusic&sprefix=avicii%2Cdigital-music%2C229&sr=1-5', 'stories.jpg'),
(6, 'Misery Business', 'Paramore', 'Riot!', 'Pop Punk, Emo, Alternative Rock', 'USA', '2007-06-04', '00:03:31', '<p>Hayley Williams - Vocals keyboards guitar</p>\r\n<p>Zac Farro - Drums percussion guitar bass piano keyboards vocals</p>\r\n<p>Taylor York - Guitar drums percussion vocals piano keyboards</p>\r\n', '<p>1. \"For a Pessimist, I\'m Pretty Optimistic\" 3:48</p>\r\n<p>2. \"That\'s What You Get\" (Hayley Williams, Josh Farro, Taylor York) 3:40</p>\r\n<p>3. \"Hallelujah\" 3:23</p>\r\n<p>4. \"Misery Business\" 3:31</p>\r\n<p>5. \"When It Rains\" (Williams, J. Farro, Zac Farro) 3:35</p>\r\n<p>6. \"Let the Flames Begin\" 3:18</p>\r\n<p>7. \"Miracle\" 3:29</p>\r\n<p>8. \"Crushcrushcrush\" 3:09</p>\r\n<p>9. \"We Are Broken\" (Williams, David Bendeth, J. Farro) 3:38</p>\r\n<p>10. \"Fences\" (Williams, Bendeth, J. Farro) 3:18</p>\r\n<p>11. \"Born for This\" 3:50</p>', '9.99', 'https://www.amazon.com/Riot-Paramore/dp/B0011Z3334/ref=sr_1_3?dchild=1&keywords=paramore&qid=1632213753&s=dmusic&sr=1-3', 'riot.jpg'),
(7, 'A Sky Full of Stars', 'Coldplay', 'Ghost Stories', 'Electronica, Synth-pop', 'England', '2014-05-16', '00:04:28', '<p>Chris Martin</p>\r\n<p>Jonny Buckland</p>\r\n<p>Guy Berryman</p>\r\n<p>Will Champion</p>\r\n<p>Phil Harvey</p>', '<p><span style=\"white-space: pre;\">1. </span>Always in My Head 3:36<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. Magic 4:45<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. Ink 3:48<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. True Love 4:06<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. Midnight 4:54<span style=\"white-space: pre;\"> </span></p>\r\n<p>6. Another\'s Arms 3:54<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. Oceans 5:21<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. A Sky Full of Stars 4:27<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. O [+Hidden Tracks] 7:46</p>', '9.99', 'https://www.amazon.com/Ghost-Stories-Coldplay/dp/B00IR3W52S/ref=sr_1_2?crid=1N21EVK1G8XBO&dchild=1&keywords=coldplay+ghost+stories&qid=1632214008&s=dmusic&sprefix=coldplay+ghost+%2Cdigital-music%2C214&sr=1-2', 'ghoststories.jpg'),
(8, 'Never Gonna Give You Up', 'Rick Astley', 'Whenever You Need Somebody', 'Pop, Dance-pop', 'England', '1987-11-16', '00:03:33', '<p>Rick Astley &ndash; vocals (all tracks); guitars (tracks 8, 9)</p>\r\n<p>Mike Stock &ndash; keyboards</p>\r\n<p>Matt Aitken &ndash; keyboards, guitars</p>\r\n<p>A. Linn &ndash; drums</p>\r\n<p>Ian Curnow &ndash; Fairlight programming (all tracks); keyboards (tracks 5, 7)</p>\r\n<p>Daize Washbourn &ndash; keyboards, drums (tracks 8, 9)</p>\r\n<p>Gary Barnacle &ndash; saxophone (track 7)</p>\r\n<p>Shirley Lewis, Dee Lewis, Mae McKenna, Suzanne Rhatigan &ndash; backing vocals</p>', '<p>1. Never Gonna Give You Up 3:33<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. Whenever You Need Somebody 3:53<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. Together Forever 3:25<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. It Would Take a Strong Strong Man 3:40<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. The Love Has Gone 4:20<span style=\"white-space: pre;\"> </span></p>\r\n<p>6. Don\'t Say Goodbye 4:09<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. Slipping Away 3:52<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. No More Looking for Love 3:12<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. You Move Me 3:42<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. When I Fall in Love 3:03</p>', '9.99', 'https://www.amazon.com/Whenever-Need-Somebody-Rick-Astley/dp/B08Z1Q6PXX/ref=sr_1_3?crid=398C8ZL3ENSCZ&dchild=1&keywords=rick+astley+whenever+you+need+somebody&qid=1632214407&s=dmusic&sprefix=rick+astley+whenever+you+need+%2Cdigital-music%2C217&sr=1-3', 'wheneveryouneedsomebody.jpg'),
(9, '67 Seas in Your Eyes', 'Dizzy Mizz Lizzy', 'Dizzy Mizz Lizzy', 'Grunge, Alternative Rock, Power Rock', 'Denmark', '1994-03-04', '00:04:38', '<p>Tim Christensen &ndash; guitar, vocals, songwriter</p>\r\n<p>Martin Nielsen &ndash; bass</p>\r\n<p>S&oslash;ren Friis &ndash; drums</p>', '<p>1. \"Waterline Intro\" 0:29</p>\r\n<p>2. \"Waterline\" 4:03</p>\r\n<p>3. \"Barbedwired Baby\'s Dream\" 3:07</p>\r\n<p>4. \"Love Is a Loser\'s Game\" 3:47</p>\r\n<p>5. \"Glory\"<span style=\"white-space: pre;\"> </span>3:47</p>\r\n<p>6. \"67 Seas in Your Eyes\"<span style=\"white-space: pre;\"> </span>4:38</p>\r\n<p>7. \"Silverflame\" 5:12</p>\r\n<p>8. \"Love Me a Little\" (lyrics: Tim Christensen, Thomas Rockwell) 4:01</p>\r\n<p>9. \"Mother Nature\'s Recipe\" 3:06</p>\r\n<p>10. \"...And So Did I\" 4:41</p>\r\n<p>11. \"Wishing Well\" 3:34</p>\r\n<p>12. \"Hidden War\" (lyrics: Christensen, Rockwell) 4:44</p>\r\n<p>13. \"For God\'s Sake\" 3:55</p>\r\n<p>14. \"Too Close to Stab\" (lyrics: Christensen, Rockwell) 5:10</p>', '9.99', 'https://www.amazon.com/Dizzy-Mizz-Lizzy-Re-Mastered/dp/B073HZ9STK/ref=sr_1_2?crid=2OZZOBOQ3E8DH&dchild=1&keywords=dizzy+mizz+lizzy&qid=1632214834&s=dmusic&sprefix=dizzy+miz%2Cdigital-music%2C209&sr=1-2', 'dizzymizzlizzy.jpg'),
(10, 'Radioactive', 'Imagine Dragons', 'Night Visions', 'Rock, Pop Rock, EDM, Hip Hop', 'USA', '2012-09-04', '00:03:07', '<p>Dan Reynolds</p>\r\n<p>Wayne Sermon</p>\r\n<p>Ben McKee</p>\r\n<p>Daniel Platzman</p>', '<p>1. Radioactive 3:06<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. Tiptoe 3:13<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. It\'s Time 3:58<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. Demons 2:55<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. On Top Of The World 3:09<span style=\"white-space: pre;\"> </span></p>\r\n<p>6. Amsterdam 4:01<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. Hear Me 3:52<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. Every Night 3:35<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. Bleeding Out 3:41<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. Underdog 3:26<span style=\"white-space: pre;\"> </span></p>\r\n<p>11. Nothing Left To Say / Rocks 8:56<span style=\"white-space: pre;\"> </span></p>\r\n<p>12. My Fault 2:55<span style=\"white-space: pre;\"> </span></p>\r\n<p>13. Round And Round 3:16<span style=\"white-space: pre;\"> </span></p>\r\n<p>14. The River 3:24<span style=\"white-space: pre;\"> </span></p>\r\n<p>15. America 4:32<span style=\"white-space: pre;\"> </span></p>\r\n<p>16. Selene 4:00<span style=\"white-space: pre;\"> </span></p>', '9.99', 'https://www.amazon.com/Night-Visions-Deluxe-Imagine-Dragons/dp/B00B97TMIE/ref=sr_1_1?crid=3LEK4YCUHIJHK&dchild=1&keywords=imagine+dragons+night+visions&qid=1632215233&s=dmusic&sprefix=imagine+dragons+ni%2Cdigital-music%2C218&sr=1-1', 'nightvisions.jpg'),
(11, 'Monster', 'The Automatic', 'Not Accepted Anywhere', 'Indie Rock, Post-Punk Revival, Alternative rock', 'UK', '2006-06-19', '00:03:42', '<p>Robin Hawkins</p>\r\n<p>James Frost</p>\r\n<p>Iwan Griffiths</p>\r\n<p>Paul Mullen</p>\r\n<p>Alex Pennie</p>\r\n<p>Oliver Hansen</p>', '<p>1. \"That\'s What She Said\" 3:15</p>\r\n<p>2. \"Raoul\" 3:53</p>\r\n<p>3. \"You Shout You Shout You Shout You Shout\" 3:06</p>\r\n<p>4. \"Recover\" 2:52</p>\r\n<p>5. \"Monster\" 3:41</p>\r\n<p>6. \"Lost at Home\" 3:26</p>\r\n<p>7. \"Keep Your Eyes Peeled\" 3:01</p>\r\n<p>8. \"Seriously... I Hate You Guys\" 3:27</p>\r\n<p>9. \"On the Campaign Trail\" 3:01</p>\r\n<p>10. \"Team Drama\" 3:13</p>\r\n<p>11. \"By My Side\" 3:46</p>\r\n<p>12. \"Rats\"<span style=\"white-space: pre;\"> </span>3:39</p>', '9.99', 'https://www.amazon.com/Not-Accepted-Anywhere-Automatic/dp/B00138KMOW/ref=sr_1_1?dchild=1&keywords=the+automatic+not+accepted+anywhere&qid=1632215800&s=dmusic&sr=1-1', 'notacceptedanywhere.jpg'),
(12, 'The Man Who Can\'t Be Moved', 'The Script', 'The Script', 'Pop Rock, Alternative Rock', 'USA', '2008-08-08', '00:04:01', '', '<p>1. We Cry&nbsp; 3:43<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. Before the Worst 3:23<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. Talk You Down 3:50<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. The Man Who Can\'t Be Moved 4:01<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. Breakeven 4:21<span style=\"white-space: pre;\"> </span></p>\r\n<p>6. Rusty Halo 3:34<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. The End Where I Begin 3:34<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. Fall for Anything [Explicit] 4:32<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. If You See Kay 3:12<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. I\'m Yours 4:15<span style=\"white-space: pre;\"> </span></p>', '9.99', 'https://www.amazon.com/Script-Explicit/dp/B001J9AQA0/ref=sr_1_2?dchild=1&keywords=the+script&qid=1632216154&s=dmusic&sr=1-2', 'thescript.jpg'),
(13, 'Clap Your Hands', 'Parov Stelar', 'The Demon Diaries', 'Dance/Electronic', 'USA', '2015-04-30', '00:03:17', '', '<p>Disc 1:</p>\r\n<p>1. Demon Dance by Parov Stelar 3:29<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. Keep This Fire Burning [Explicit] by Parov Stelar 3:14<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. Hooked on You (feat. Timothy Auld) [Explicit] by Parov Stelar 3:30<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. Clap Your Hands by Parov Stelar 3:17<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. Hit Me Like a Drum (feat. Timothy Auld) by Parov Stelar 3:31</p>\r\n<p>6. The Green Frog by Parov Stelar 3:09<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. I Need L.O.V.E. by Parov Stelar 3:42<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. Djangos Revenge by Parov Stelar 3:59<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. Gin Tonic by Parov Stelar 3:18<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. Don\'t Mean a Thing by Parov Stelar 3:29<span style=\"white-space: pre;\"> </span></p>\r\n<p>11. Josephine (feat. Anduze) [1930 Version] by Parov Stelar 4:34<span style=\"white-space: pre;\"> </span></p>\r\n<p>12. Berlin Shuffle by Parov Stelar 5:13<span style=\"white-space: pre;\"> </span></p>\r\n<p>13. Hit Me Like a Drum (feat. Timothy Auld) [Club Version] by Parov Stelar 4:08<span style=\"white-space: pre;\"> </span></p>\r\n<p>Disc 2:</p>\r\n<p>1. Six Feet Underground (feat. Claudia Kane) by Parov Stelar 3:16<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. The Sun by Parov Stelar, Graham Candy 2:54<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. Walk Away (feat. Anna F.) by Parov Stelar 3:47<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. Josephine (feat. Anduze) [Candlelight Version] by Parov Stelar 3:24<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. Magenta Rising by Parov Stelar 3:32<span style=\"white-space: pre;\"> </span></p>\r\n<p>6. Golden Arrow (feat. Lilja Bloom) [Demon Diaries Version] by Parov Stelar 3:04<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. Don\'t Believe What They Say (feat. Angela McCluskey) by Parov Stelar 4:32<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. The Sea (feat. Harald Baumgartner) by Parov Stelar 4:02<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. Keep This Fire Burning (Stelartronic Remix) by Parov Stelar 5:34<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. The Lonely Trumpet (The Demon Diaries Outro) by Parov Stelar 6:05<span style=\"white-space: pre;\"> </span></p>', '9.99', 'https://www.amazon.com/Demon-Diaries-Parov-Stelar/dp/B076MBB2VC/ref=sr_1_1?dchild=1&keywords=Parov+Stelar+the+demon+diaries&qid=1632216606&s=dmusic&sr=1-1', 'thedemondiaries.jpg'),
(14, 'Come Fly With Me', 'Frank Sinatra', 'Nothing But the Best', 'Jazz, Traditional pop', 'USA', '1958-01-06', '00:03:11', '', '<p>1. Come Fly With Me 3:13</p>	\r\n<p>2. The Best Is Yet To Come 2:55</p>		\r\n<p>3. The Way You Look Tonight 3:22</p>		\r\n<p>4. Luck Be A Lady 5:14</p>		\r\n<p>5. Bewitched 2:59</p>	\r\n<p>6. The Good Life 2:27</p>		\r\n<p>7. The Girl From Ipanema 3:14</p>		\r\n<p>8. Fly Me To The Moon 2:27</p>		\r\n<p>9. Summer Wind 2:55</p>	\r\n<p>10. Strangers In The Night 2:44</p>		\r\n<p>11. Call Me Irresponsible 2:55</p>		\r\n<p>12. Somethin\' Stupid 2:40</p>		\r\n<p>13. My Kind Of Town 3:11</p>		\r\n<p>14. It Was A Very Good Year 4:27</p>		\r\n<p>15. That\'s Life 3:07</p>		\r\n<p>16. Moonlight Serenade 3:28</p>		\r\n<p>17. Nothing But The Best 3:00</p>		\r\n<p>18. Drinking Again 3:15</p>		\r\n<p>19. All My Tomorrows 4:35</p>		\r\n<p>20. My Way 4:36</p>		\r\n<p>21. Theme From New York, New York 3:24</p>		\r\n<p>22. Body And Soul 4:19</p>	', '9.99', 'https://www.amazon.com/Nothing-Best-Remastered-Frank-Sinatra/dp/B00FHU10UM/ref=sr_1_1?crid=2EFMB19AXLSH8&dchild=1&keywords=nothing+but+the+best+frank+sinatra&qid=1632220239&s=dmusic&sprefix=nothing+but+the+best%2Cdigital-music%2C222&sr=1-1', 'nothingbutthebest.jpg'),
(15, 'Stamp On the Ground', 'Italobrothers', 'Stamp!', 'Italo Dance, Techno, Hands Up, Electronica, Eurodance, Jumpstyle, Tropical House, Deep House', 'Germany', '2009-09-25', '00:03:17', '<p>Matthias Metten</p>\r\n<p>Zacharias Adrian</p>\r\n<p>Kristian Sandberg</p>', '<p>1. Stamp On The Ground by ItaloBrothers 3:18<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. Love Is On Fire by ItaloBrothers 3:23<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. Radio Hardcore by ItaloBrothers 3:08<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. Upside Down (Radio Edit) by ItaloBrothers 3:33<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. Underwater World by ItaloBrothers 3:04<span style=\"white-space: pre;\"> </span></p>\r\n<p>6. Colours Of The Rainbow by ItaloBrothers vs. Tune Up! 3:28<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. Heaven (Radio Edit) by ItaloBrothers vs. Manian 3:38<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. So Small (Dance Radio Edit) by ItaloBrothers 3:16<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. Counting Down The Days (Cascada Radio Edit) by ItaloBrothers 3:14<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. It Must Have Been Love by ItaloBrothers 3:12<span style=\"white-space: pre;\"> </span></p>\r\n<p>11. The Moon by ItaloBrothers3:21<span style=\"white-space: pre;\"> </span></p>\r\n<p>12. Put Your Hands Up In The Air by ItaloBrothers 3:07<span style=\"white-space: pre;\"> </span></p>\r\n<p>13. Where Are You Now by ItaloBrothers 3:07<span style=\"white-space: pre;\"> </span></p>\r\n<p>14. Moonlight Shadow by ItaloBrothers 3:06</p>', '9.99', 'https://www.amazon.com/Stamp-ItaloBrothers/dp/B073JDCD4X/ref=sr_1_4?dchild=1&keywords=stamp%21+italobrothers&qid=1632220660&s=dmusic&sr=1-4', 'stamp.jpg'),
(16, 'One', 'Metallica', '...And Justice For All', 'Thrash Metal, Heavy Metal', 'USA', '1989-01-10', '00:07:27', '<p>James Hetfield</p>\r\n<p>Lars Ulrich</p>\r\n<p>Kirk Hammett</p>\r\n<p>Robert Trujillo</p>', '<p><span style=\"white-space: pre;\">1. </span>Blackened (Remastered) 6:42<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. ...And Justice for All (Remastered) 9:45<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. Eye of the Beholder (Remastered) 6:26<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. One (Remastered) 7:26<span style=\"white-space: pre;\"> </span></p>\r\n<p>5.&nbsp; The Shortest Straw (Remastered) 6:35<span style=\"white-space: pre;\"> </span></p>\r\n<p>6. Harvester of Sorrow (Remastered) 5:45<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. The Frayed Ends of Sanity (Remastered) 7:43<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. To Live Is to Die (Remastered) 9:48<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. Dyers Eve (Remastered) [Explicit] 5:13<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. Digital Booklet: ...And Justice for All (Remastered)&nbsp;</p>', '9.99', 'https://www.amazon.com/Justice-All-Remastered-Metallica/dp/B07GX486Q8/ref=sr_1_2?crid=8I6F3RKFJRHO&dchild=1&keywords=and+justice+for+all+metallica&qid=1632221381&s=dmusic&sprefix=and+ju%2Cdigital-music%2C225&sr=1-2', 'andjusticeforall.jpg'),
(17, 'Summer of \'69', 'Bryan Adams', 'Reckless', 'Rock, Pop Rock', 'USA', '1984-11-05', '00:03:35', '<p>Bryan Adams</p>', '<p>1. One Night Love Affair by Bryan Adams 4:33</p>\r\n<p>2. She\'s Only Happy When She\'s Dancin\' [Explicit] by Bryan Adams 3:13</p>\r\n<p>3. Run To You by Bryan Adams 3:53<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. Heaven by Bryan Adams 4:03<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. Somebody by Bryan Adams 4:43</p>\r\n<p>6. Summer Of \'69 by Bryan Adams 3:36<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. Kids Wanna Rock by Bryan Adams 2:35</p>\r\n<p>8. It\'s Only Love. by Bryan Adams and Tina Turner 3:14<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. Long Gone by Bryan Adams 3:58<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. Ain\'t Gonna Cry by Bryan Adams 4:07<span style=\"white-space: pre;\"> </span></p>', '9.99', 'https://www.amazon.com/Reckless-2014-Remaster-Bryan-Adams/dp/B00PK5STD0/ref=sr_1_2?crid=362ZXXDC1B2N3&dchild=1&keywords=bryan+adams+reckless&qid=1632221599&s=dmusic&sprefix=bryan+adams+reck%2Cdigital-music%2C213&sr=1-2', 'reckless.jpg'),
(18, 'Transparent and Glasslike', 'Carpark North', 'Carpark North', 'Rock, Electronic Rock', 'Denmark', '2003-02-26', '00:03:36', '<p>Lau H&oslash;jen</p>\r\n<p>S&oslash;ren Balsner</p>\r\n<p>Morten Thorhauge</p>', '<p>1.<span style=\"white-space: pre;\"> </span>\"Homeland\"<span style=\"white-space: pre;\"> </span>5:10</p>\r\n<p>2.<span style=\"white-space: pre;\"> </span>\"Transparent &amp; Glasslike\"<span style=\"white-space: pre;\"> </span>3:36</p>\r\n<p>3.<span style=\"white-space: pre;\"> </span>\"There\'s a Place\"<span style=\"white-space: pre;\"> </span>4:24</p>\r\n<p>4.<span style=\"white-space: pre;\"> </span>\"I and You\"<span style=\"white-space: pre;\"> </span>5:21</p>\r\n<p>5.<span style=\"white-space: pre;\"> </span>\"In the Dark\"<span style=\"white-space: pre;\"> </span>2:28</p>\r\n<p>6.<span style=\"white-space: pre;\"> </span>\"Kiss Me\"<span style=\"white-space: pre;\"> </span>4:51</p>\r\n<p>7.<span style=\"white-space: pre;\"> </span>\"40 Days\"<span style=\"white-space: pre;\"> </span>3:07</p>\r\n<p>8.<span style=\"white-space: pre;\"> </span>\"Wild Wonders\"<span style=\"white-space: pre;\"> </span>3:54</p>\r\n<p>9.<span style=\"white-space: pre;\"> </span>\"Spain\"<span style=\"white-space: pre;\"> </span>4:25</p>\r\n<p>10.<span style=\"white-space: pre;\"> </span>\"The Last End\"<span style=\"white-space: pre;\"> </span>6:25</p>', '9.99', 'https://www.amazon.com/Carpark-North/dp/B071P8VP5B/ref=sr_1_4?crid=2WDDOJQ3BBU7X&dchild=1&keywords=carpark+north&qid=1632222236&s=dmusic&sprefix=carpark+no%2Cdigital-music%2C212&sr=1-4', 'carparknorth.jpg'),
(19, 'Cocoon', 'Catfish And The Bottleman', 'The Balcony', 'Alternative Rock, Indie Rock', 'Wales', '2015-09-15', '00:03:57', '<p>Van McCann &ndash; lead vocals, rhythm guitar, keyboards (2007&ndash;present)</p>\r\n<p>Benji Blakeway &ndash; bass guitar, backing vocals (2007&ndash;present)</p>\r\n<p>Bob Hall &ndash; drums, percussion (2010&ndash;present)</p>\r\n<p>Johnny Bond &ndash; lead guitar, backing vocals (2014&ndash;present)</p>', '<p>1.<span style=\"white-space: pre;\"> </span>\"Homesick\"<span style=\"white-space: pre;\"> </span>2:30</p>\r\n<p>2.<span style=\"white-space: pre;\"> </span>\"Kathleen\"<span style=\"white-space: pre;\"> </span>2:43</p>\r\n<p>3.<span style=\"white-space: pre;\"> </span>\"Cocoon\"<span style=\"white-space: pre;\"> </span>3:59</p>\r\n<p>4.<span style=\"white-space: pre;\"> </span>\"Fallout\"<span style=\"white-space: pre;\"> </span>3:32</p>\r\n<p>5.<span style=\"white-space: pre;\"> </span>\"Pacifier\"<span style=\"white-space: pre;\"> </span>4:00</p>\r\n<p>6.<span style=\"white-space: pre;\"> </span>\"Hourglass\"<span style=\"white-space: pre;\"> </span>2:20</p>\r\n<p>7.<span style=\"white-space: pre;\"> </span>\"Business\"<span style=\"white-space: pre;\"> </span>3:43</p>\r\n<p>8.<span style=\"white-space: pre;\"> </span>\"26\"<span style=\"white-space: pre;\"> </span>3:41</p>\r\n<p>9.<span style=\"white-space: pre;\"> </span>\"Rango\"<span style=\"white-space: pre;\"> </span>3:00</p>\r\n<p>10.<span style=\"white-space: pre;\"> </span>\"Sidewinder\"<span style=\"white-space: pre;\"> </span>3:29</p>\r\n<p>11.<span style=\"white-space: pre;\"> </span>\"Tyrants\"<span style=\"white-space: pre;\"> </span>4:41</p>', '9.99', 'https://www.amazon.com/Balcony-Explicit-Catfish-Bottlemen/dp/B00WNX0NK4/ref=sr_1_3?dchild=1&keywords=catfish+and+the+bottlemen+the+balcony&qid=1632222531&s=dmusic&sr=1-3', 'thebalcony.jpg'),
(20, 'Toxcity', 'System of a Down', 'Toxcity', 'Nu Metal, Alternative Metal', 'USA', '2001-09-04', '00:03:38', '<p>Serj Tankian</p>\r\n<p>Daron Malakian</p>\r\n<p>Shavo Odadjian</p>\r\n<p>John Dolmayan</p>', '<p>1. Prison Song [Explicit] 3:21<span style=\"white-space: pre;\"> </span></p>\r\n<p>2. Needles 3:13<span style=\"white-space: pre;\"> </span></p>\r\n<p>3. Deer Dance 2:54<span style=\"white-space: pre;\"> </span></p>\r\n<p>4. Jet Pilot 2:06<span style=\"white-space: pre;\"> </span></p>\r\n<p>5. X 1:58<span style=\"white-space: pre;\"> </span></p>\r\n<p>6. Chop Suey! 3:30<span style=\"white-space: pre;\"> </span></p>\r\n<p>7. Bounce 1:54<span style=\"white-space: pre;\"> </span></p>\r\n<p>8. Forest 4:00<span style=\"white-space: pre;\"> </span></p>\r\n<p>9. ATWA 2:56<span style=\"white-space: pre;\"> </span></p>\r\n<p>10. Science 2:42<span style=\"white-space: pre;\"> </span></p>\r\n<p>11. Shimmy 1:50<span style=\"white-space: pre;\"> </span></p>\r\n<p>12. Toxicity 3:38<span style=\"white-space: pre;\"> </span></p>\r\n<p>13. Psycho 3:45<span style=\"white-space: pre;\"> </span></p>\r\n<p>14. Aerials 3:55<span style=\"white-space: pre;\"> </span></p>\r\n<p>15. Arto 2:13<span style=\"white-space: pre;\"> </span></p>', '9.99', 'https://www.amazon.com/Toxicity-System-Down/dp/B001414XLQ/ref=sr_1_1?dchild=1&keywords=system+of+a+down&qid=1632222866&s=dmusic&sr=1-1', 'toxicity.jpg'),
(21, 'Enter Sandman', 'Metallica', 'Metallica', 'Heavy Metal', 'USA', '1991-07-29', '00:05:32', 'Kirk Hammet\r\nJames Hetfield\r\nLars Ulrich', '<p>1.\"Enter Sandman 5:31</p>\r\n<p>2. \"Sad but True\" 5:24</p>\r\n<p>3. \"Holier than Thou\" 3:47</p>\r\n<p>4. \"The Unforgiven\" 6:27</p>\r\n<p>5. \"Wherever I May Roam\" 6:44</p>\r\n<p>6. \"Don\'t Tread on Me\" 4:00</p>\r\n<p>7. \"Through the Never\" 4:04</p>\r\n<p>8. \"Nothing Else Matters\" 4:16</p>\r\n<p>10. \"The God That Failed\" 5:08</p>\r\n<p>11. \"My Friend of Misery\" 6:49</p>\r\n<p>12. \"The Struggle Within\" 3:53</p>', '5.80', 'https://www.amazon.com/Enter-Sandman-Metallica/dp/B000057L67', 'R-19926205-1629453749-7433.jpeg.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
