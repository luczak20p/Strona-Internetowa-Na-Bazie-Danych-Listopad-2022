create table rezyserzy(
    id_rezyser int auto_increment primary key,
    imie varchar(45),
    nazwisko varchar(45),
    opis text,
    zdjecie text
);

INSERT INTO `rezyserzy` (`id_rezyser`, `imie`, `nazwisko`, `opis`, `zdjecie`) VALUES
(1, "Cezary", "Pazura", "Taki aktor no", "link do img");

create table aktorzy(
    id_rezyser int auto_increment primary key,
    imie varchar(45),
    nazwisko varchar(45),
    opis text,
    zdjecie text
);