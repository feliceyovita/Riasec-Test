USE riasec_test;

CREATE TABLE statements(
	statement_id integer(3),
	statement_content varchar(255) not null,
	statement_category char(1),
	PRIMARY KEY (statement_category,statement_id)
);

CREATE TABLE personality_test_scores(
	id integer PRIMARY KEY AUTO_INCREMENT,
	realistic float(5,2),
	investigative float(5,2), 
	artistic float(5,2), 
	social float(5,2), 
	enterprising float(5,2), 
	conventional float(5,2),
	result varchar(5) not null
);


INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Conduct a musical choir",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Design artwork for magazines",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Perform stunts for a movie or television show",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Play a musical instrument",'A');

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Direct a play",'A'); 



INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Study the structure of the human body",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Develop a new medical treatment or procedure",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Make a map of the bottom of an ocean",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Do research on plants or animals",'I'); 
	
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Work in a biology lab",'I'); 



INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Test the quality of parts before shipment",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Lay brick or tile",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Fix a broken faucet",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Work on an offshore oil-drilling rig",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Install flooring in houses",'R'); 



INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Give career guidance to people",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Do volunteer work at a non-profit organization",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Help people who have problems with drugs or alcoho...",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Teach an individual an exercise routine",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"	
Help people with family-related problems",'S'); 


INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (1, "Menjual waralaba restoran ke orang yang tertarik", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (2, "Menjual produk di toko untuk pelanggan", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (3, "Mengelola semua kegiatan di hotel", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (4, "Menjalankan salon atau tempat potong rambut", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (5, "Mengatur dan memimpin bagian dalam perusahaan besar", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (1, "Membuat dan membagikan cek gaji untuk karyawan", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (2, "Memeriksa dan menghitung stok barang menggunakan komputer genggam", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (3, "Menggunakan program komputer untuk membuat tagihan pelanggan", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (4, "Menyimpan dan mengatur data karyawan dengan rapi", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) 
VALUES (5, "Menghitung dan mencatat data angka atau statistik dengan akurat", 'C');