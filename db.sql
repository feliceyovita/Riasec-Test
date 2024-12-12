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


INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Mengadakan paduan suara musikal",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Merancang karya seni untuk majalah",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Melakukan aksi laga untuk film atau acara televisi",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Memainkan alat musik",'A');

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Menyutradarai sebuah drama panggung",'A');  



INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Mempelajari struktur tubuh manusia",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Mengembangkan perawatan atau prosedur medis baru",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Membuat peta dasar laut",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Melakukan penelitian tentang tumbuhan atau hewan",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Bekerja di laboratorium biologi",'I'); 



INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Uji kualitas bagian sebelum pengiriman",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Pasang bata atau ubin",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Perbaiki keran yang rusak",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Bekerja di rig pengeboran minyak lepas pantai",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Pasang lantai di rumah",'R'); 



INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Berikan bimbingan karier kepada orang-orang",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Melakukan kerja sukarela di organisasi nirlaba",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Membantu orang yang memiliki masalah dengan obat-obatan atau alkohol",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Mengajarkan seseorang rutinitas olahraga",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Membantu orang dengan masalah yang terkait keluarga",'S'); 


INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (1, "Menjual waralaba restoran ke orang yang tertarik", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (2, "Menjual produk di toko untuk pelanggan", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (3, "Mengelola semua kegiatan di hotel", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (4, "Menjalankan salon atau tempat potong rambut", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (5, "Mengatur dan memimpin bagian dalam perusahaan besar", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (1, "Membuat dan membagikan cek gaji untuk karyawan", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (2, "Memeriksa dan menghitung stok barang menggunakan komputer genggam", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (3, "Menggunakan program komputer untuk membuat tagihan pelanggan", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (4, "Menyimpan dan mengatur data karyawan dengan rapi", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (5, "Menghitung dan mencatat data angka atau statistik dengan akurat", 'C');