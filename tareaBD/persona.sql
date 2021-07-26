CREATE TABLE `persona` (
   `ci` char(8) NOT NULL,
   `nombre` varchar(15) NOT NULL,
   `apellido` varchar(15) NOT NULL,
   PRIMARY KEY (`ci`)
 ) ;
 
 insert into persona values ("Roberto", "Sanchez", "1111111");
 insert into persona values ("Ricardo", "Sanchez", "22222222"); 
 insert into persona values ("Rodrigo", "Rodriguez", "33333333");
 
 select * from persona;