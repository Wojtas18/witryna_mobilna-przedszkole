CREATE TABLE rodzice (
id_rodzica int8 auto_increment primary key,
imie varchar(20) not null,
nazwisko varchar(20) not null,
plec varchar(10) not null,
data_urodzenia date,
ulica varchar(20) not null,
kod_pocztowy varchar(6) not null,
miejscowosc varchar(20) not null
);
CREATE TABLE konta (
id_rodzica int8 primary key,
login varchar(10) not null,
haslo varchar(10) not null,
CONSTRAINT rkfk FOREIGN KEY (id_rodzica) REFERENCES rodzice(id_rodzica)
);
CREATE TABLE dzieci (
id_dziecka int8 auto_increment primary key,
id_rodzica int8 not null,
imie varchar(20) not null,
nazwisko varchar(20) not null,
data_urodzenia date
);
CREATE TABLE dzieci_obecnosci (
id_dziecka int8 not null,
data date,
obecny varchar(3),
CONSTRAINT ddopk PRIMARY KEY (id_dziecka, data),
CONSTRAINT ddofk FOREIGN KEY (id_dziecka) REFERENCES dzieci(id_dziecka)
);
CREATE TABLE cennik_posilkow (
typ_posilku varchar(20) primary key,
cena decimal not null
);
CREATE TABLE posilki (
id_posilku int8 auto_increment primary key,
typ_posilku varchar(20) not null,
CONSTRAINT pcpfk FOREIGN KEY (typ_posilku) REFERENCES cennik_posilkow(typ_posilku)
);
CREATE TABLE dzieci_posilki (
id_dziecka int8 not null,
id_posilku int8 not null,
data date not null,
CONSTRAINT dppk PRIMARY KEY (id_dziecka, id_posilku),
CONSTRAINT dpdfk FOREIGN KEY (id_dziecka) REFERENCES dzieci(id_dziecka),
CONSTRAINT dppfk FOREIGN KEY (id_posilku) REFERENCES posilki(id_posilku)
);
CREATE TABLE wycieczki (
id_wycieczki int8 auto_increment primary key,
nazwa_wycieczki varchar(20) not null,
data date not null,
cena decimal not null
);
CREATE TABLE dzieci_wycieczki (
id_dziecka int8 not null,
id_wycieczki int8 not null,
CONSTRAINT dwpk PRIMARY KEY (id_dziecka, id_wycieczki),
CONSTRAINT dwwfk FOREIGN KEY (id_wycieczki) REFERENCES wycieczki(id_wycieczki),
CONSTRAINT dwdfk FOREIGN KEY (id_dziecka) REFERENCES dzieci(id_dziecka)
);