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
    id_rezyser int auto_increment primary key,
    imie varchar(45),
    nazwisko varchar(45),
    opis text,
    zdjecie text
);

create table filmy(
    id_rezyser int auto_increment primary key,
    tytul varchar(45),
    opis text,
    gatunek varchar(45),
    rezyser int,
    FOREIGN KEY (rezyser) REFERENCES rezyserzy(id_rezyser),
    zdjecie text
);