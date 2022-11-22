drop database if exists osskars;
create database osskars;
use osskars

create table rezyserzy(
    id_rezyser int auto_increment primary key,
    imie varchar(45),
    nazwisko varchar(45),
    opis text,
    zdjecie text
);

INSERT INTO `rezyserzy` (`id_rezyser`, `imie`, `nazwisko`, `opis`, `zdjecie`) VALUES
(2, "imie2", "nazwisko2", "Taki aktor no", "user.png"),
(3, "imie3", "nazwisko3", "Taki aktor no", "user.png"),
(4, "imie4", "nazwisko4", "Taki aktor no", "user.png");


create table aktorzy(
    id_aktor int auto_increment primary key,
    imie varchar(45),
    nazwisko varchar(45),
    opis text,
    zdjecie text
);

INSERT INTO `aktorzy` (`id_aktor`,`imie`,`nazwisko`,`opis`,`zdjecie`) VALUES
(1,"Cezary","Pazura","no taki aktor no","user.png");

create table filmy(
    id_filmu int auto_increment primary key,
    tytul varchar(45),
    opis text,
    gatunek varchar(45),
    rezyser int,
    FOREIGN KEY (rezyser) REFERENCES rezyserzy(id_rezyser),
    zdjecie text
);

INSERT INTO `filmy` (`id_filmu`, `tytul`, `opis`, `gatunek`, `rezyser`,`zdjecie`) VALUES
(2, "Morbius2", "filmy o chłopie co wampirem jest", "najlepszy", 2,"logowanieSmall.png"),
(3, "Morbius3", "filmy o chłopie co wampirem jest", "najlepszy", 2,"logowanieSmall.png"),
(4, "Morbius4", "filmy o chłopie co wampirem jest", "najlepszy", 2,"logowanieSmall.png"),
(5, "Morbius5", "filmy o chłopie co wampirem jest", "najlepszy", 2,"logowanieSmall.png");
