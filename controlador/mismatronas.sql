CREATE TABLE `usuarios`(
	`idUser` int(10) auto_increment,
	`dni` varchar(9) NOT NULL,
	`tipoUser` int(1),
	`nombre` text(20),
	`apellidos` text(30),
	`nacimiento` date NOT NULL,
	`direccion` varchar(60),
	`telefono` int(9),
	`mail` varchar(30),
	`password` varchar(10),
	primary key(idUser)
);

CREATE TABLE `historial_clinico`(
	`nhc` int(10) auto_increment,
	`evolucion` varchar(500),
	`idUser` int(10),
	`observaciones` varchar(200),
	primary key(nhc),
	FOREIGN KEY (idUser) REFERENCES usuarios(idUser)
);

CREATE TABLE `tipo_empleado`(
	`idEmpleado` int(10) auto_increment,
	`especialidad` varchar(30),
	`idUser` int(10),
	primary key(idEmpleado),
	FOREIGN KEY (idUser) REFERENCES usuarios(idUser)
);

CREATE TABLE `embarazo`(
	`idEmbarazo` int(10) auto_increment,
	`nhc` int(10),
	`informacion` varchar(200),
	primary key(idEmbarazo),
	FOREIGN KEY (idUser) REFERENCES usuarios(idUser),
	FOREIGN KEY (nhc) REFERENCES historial_clinico(nhc)
);

CREATE TABLE `citas`(
	`idEmbarazo` int(10),
	`idEmpleado` int(10),
	`fecha` date,
	`hora` time,
	primary key(idEmbarazo, idEmpleado),
	FOREIGN KEY (idEmpleado) REFERENCES tipo_empleado(idEmpleado),
	FOREIGN KEY (idEmbarazo) REFERENCES embarazo(idEmbarazo)
);

/*añadiendo usuarios a la base de datos.*/

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("11111111A",1,"Jesus","Martin Castro","1982-05-31","Calle Maestro Alonso, nº3",655244985,"jesmartin82@gmail.com",1234) ;

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("07788590P",3,"Tercio","Rodarte Bahena","1993-10-18","Prolongacion San Sebastian 95",730869778,"TercioRodarteBahena@teleworm.us",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`) VALUES ("93026232H",4,"Deolinda","Garza Pulido","1983-11-04","Extramuros 33",690508190, "DeolindaGarzaPulido@jourrapide.com");

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("59366764S",3,"Mireya","Enríquez Lozada","1980-11-27","C/ Benito Guinea 10",660776465, "MireyaEnriquezLozada@jourrapide.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("79682408N",3,"Sandra","Gonzalez Lopez","1972-04-20","Avda. Whasington 35",748596325, "SandraGonzalezLopez@jourrapide.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("01654522V",2,"Gay","Villalpando Guillén","1981-06-12","C/ Rosa de los Vientos 28",689372671,"GayVillalpandoGuillen@teleworm.us",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("74757994J",3,"Breogan","Alcalá Zayas" ,"1986-06-18","C/ Domingo Beltrán 95",699707986,"BreoganAlcalaZayas@jourrapide.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("26174425B",2,"Lauren","Zúñiga Gonzales" ,"1982-04-16","Calvo Sotelo 5",739864317,"LaurenZunigaGonzales@rhyta.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("82341486Z",3,"Ladolfo"," Narváez Holguín","1994-07-20","Urzáiz 44",799515281,"LadolfoNarvaezHolguin@teleworm.us",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("30859930W",2,"Shulinen","Lomeli Ponce","1976-06-26","Bellavista, 38",606242097,"ShulinenLomeliPonce@teleworm.us",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("74668909F",3,"Areb","León Rojo","1989-01-21","Ctra. de Siles, 17",637241708,"ArebLeonRojo@rhyta.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("56609253C",3,"Amintor","Marrero Leiva","1993-05-19","Avda. Explanada Barnuevo, 66",630489988,"AmintorMarreroLeiva@armyspy.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("19817031R",3,"Valeriano","Polanco Casárez","1990-03-23","Fuente del Gallo, 54",653563954,"ValerianoPolancoCasarez@armyspy.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`) VALUES ("41917500T",4,"Giacometta","Armendáriz Lozada","1993-05-14","Ctra. Bailén-Motril 87",624742725,"GiacomettaArmendarizLozada@jourrapide.com");

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("72913883L",3,"Yoel","Velázquez Ornelas","1990-04-02","Plaza Colón, 44",772666062,"YoelVelazquezOrnelas@armyspy.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`) VALUES ("71192269R",4,"Lisette ","Heredia Muñiz","1979-03-19","Outid de Arriba, 18",664069671,"LisetteHerediaMuniz@armyspy.com");

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("76885757T",2,"Alem","Bustamante Aragón","1989-10-22","Outid de Arriba, 67",661740436,"AlemBustamanteAragon@armyspy.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("30361893F",3,"Anfos","Reséndez Cantú","1983-08-06","Caño, 31",624512284,"AnfosResendezCantu@jourrapide.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("91221766V",3,"Dunstano","Noriega Lucero","2000-04-28","Estrela, 83",773164367,"DunstanoNoriegaLucero@armyspy.com",1234);

INSERT INTO `usuarios`(`dni`, `tipoUser`, `nombre`, `apellidos`, `nacimiento`, `direccion`, `telefono`, `mail`, `password`) VALUES ("85825747M",2,"Yulan","Flórez Anguiano","1979-05-25","Maestro Puig Valera, 33",603440255,"YulanFlorezAnguiano@armyspy.com",1234); 


/*creando empleados en la base de datos.*/

INSERT INTO `tipo_empleado`(`especialidad`, `idUser`) VALUES ("Fisioterapeuta",2);

/*introduciendo alguna historia clinica en la base de datos..*/

INSERT INTO `historial_clinico`(`evolucion`, `idUser`, `observaciones`) VALUES ("Lorem fistrum a wan tiene musho peligro diodeno fistro a wan de la pradera tiene musho peligro. Llevame al sircoo fistro me cago en tus muelas de la pradera. Fistro a gramenawer sexuarl no te digo trigo por no llamarte Rodrigor qué dise usteer amatomaa quietooor. No puedor a peich papaar papaar a wan te va a hasé pupitaa ese hombree fistro la caidita amatomaa apetecan a gramenawer. Sexuarl a gramenawer te voy a borrar el cerito va usté muy cargadoo se calle ustée a peich a wan diodeno condemor me cago en tus muelas jarl. Está la cosa muy malar ese pedazo de a peich ahorarr. Está la cosa muy malar la caidita se calle ustée benemeritaar de la pradera a gramenawer qué dise usteer. Al ataquerl a peich fistro por la gloria de mi madre quietooor al ataquerl al ataquerl ese hombree mamaar está la cosa muy malar ese hombree. Torpedo apetecan qué dise usteer pecador a wan la caidita a wan caballo blanco caballo negroorl diodeno hasta luego Lucas a gramenawer.Qué dise usteer mamaar llevame al sircoo jarl qué dise usteer diodeno pecador. Te va a hasé pupitaa apetecan me cago en tus muelas torpedo. Mamaar me cago en tus muelas no te digo trigo por no llamarte Rodrigor al ataquerl tiene musho peligro va usté muy cargadoo la caidita caballo blanco caballo negroorl jarl condemor. Amatomaa a gramenawer ese pedazo de mamaar ahorarr diodenoo jarl hasta luego Lucas. A peich por la gloria de mi madre a wan está la cosa muy malar pecador tiene musho peligro fistro condemor.",3,"Bienvenido al Chiquito Ipsum, el generador de texto de relleno para tus diseños de antes de los dolores. Dale a Fistrum para que e salga ese pedaso de texto Chiquito en estado puro. Si te crees muy moderno dale a Latin que te lo pongo con cuarto y mitad de romanooo...
Jarl!");

/*embarazos en la base de datos*/

INSERT INTO `embarazo`(`idUser`, `informacion`) VALUES (3,"Bienvenido al Chiquito Ipsum, el generador de texto de relleno para tus diseños de antes de los dolores. Dale a Fistrum para que e salga ese pedaso de texto Chiquito en estado puro. Si te crees muy moderno dale a Latin que te lo pongo con cuarto y mitad de romanooo...Jarl!");

INSERT INTO `embarazo`(`idUser`, `informacion`) VALUES (3,"Bienvenido al Chiquito Ipsum, el generador de texto de relleno para tus diseños de antes de los dolores. Dale a Fistrum para que e salga ese pedaso de texto Chiquito en estado puro. Si te crees muy moderno dale a Latin que te lo pongo con cuarto y mitad de romanooo...Jarl!");

/*enlazando embarazos con los empleados que llevarían ese embarazo.*/

INSERT INTO `embarazo_empleado`(`idEmbarazo`, `idEmpleado`) VALUES (1,1);