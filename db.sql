USE riasec_test;

-- Membuat user untuk aplikasi
CREATE USER 'riasec_user'@'localhost' IDENTIFIED BY 'secure_password';


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

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

-- Memberikan hak akses semua tabel dalam database `riasec_test` ke user
GRANT ALL PRIVILEGES ON riasec_test.* TO 'riasec_user'@'localhost';

-- Atau berikan akses terbatas hanya untuk SELECT, INSERT, dan UPDATE
GRANT SELECT, INSERT, UPDATE ON riasec_test.* TO 'riasec_user'@'localhost';


INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Menikmati mengerjakan proyek desain grafis atau seni visual",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Tertarik untuk menulis atau membuat karya sastra, seperti puisi atau cerpen",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Menyukai kegiatan seperti drama, teater, atau pembuatan film",'A'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Tertarik membuat karya seni, seperti lukisan atau patung",'A');

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Senang bekerja dengan musik atau menciptakan komposisi musik",'A');  


INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Menikmati kegiatan penelitian ilmiah atau eksperimen di laboratorium",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Tertarik memecahkan masalah teknis dengan menggunakan logika dan data",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Menyukai mempelajari cara kerja sistem, baik itu dalam teknologi atau sains",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Senang melakukan riset atau studi tentang topik-topik yang belum diketahui",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Tertarik untuk mengembangkan solusi berbasis data atau riset untuk berbagai masalah",'I'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Menikmati bekerja dengan alat atau teknologi untuk membangun atau memperbaiki sesuatu",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Senang bekerja di luar ruangan atau di lapangan, seperti dalam kegiatan konstruksi atau pertanian",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Menyukai pekerjaan yang berfokus pada keterampilan praktis, seperti teknik atau desain produk",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Tertarik dengan bidang yang melibatkan penggunaan teknologi atau perangkat keras",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Tertarik pada bidang yang melibatkan pengelolaan atau pemeliharaan peralatan fisik",'R'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"Membantu orang lain dalam menyelesaikan masalah pribadi atau profesional",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"Tertarik bekerja dalam lingkungan yang melibatkan interaksi langsung dengan banyak orang",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"Senang berpartisipasi dalam kegiatan organisasi, seperti organisasi sosial",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"Tertarik mengajar atau melatih orang lain dalam keterampilan tertentu",'S'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Senang memberikan bantuan atau dukungan kepada orang-orang yang membutuhkan",'S'); 


INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (1, "Tertarik mengelola proyek atau tim dalam sebuah organisasi atau perusahaan", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (2, "Menyukai kegiatan yang melibatkan negosiasi atau persuasi, seperti dalam penjualan atau pemasaran", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (3, "Tertarik untuk mengembangkan atau menjalankan bisnis sendiri", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (4, "Senang membuat keputusan strategis atau berperan dalam manajemen sebuah organisasi", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (5, "Menyukai tantangan yang melibatkan kepemimpinan atau pengelolaan keuangan", 'E');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (1, "Menyukai pekerjaan yang melibatkan pengorganisasian data atau informasi dalam sistem yang terstruktur", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (2, "Tertarik dalam mengelola dokumen, catatan, atau database secara efisien", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (3, "Senang bekerja dengan angka atau statistik dalam pekerjaan administratif", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (4, "Tertarik pada pekerjaan yang melibatkan pengelolaan jadwal atau proses yang teratur", 'C');

INSERT INTO statements(statement_id, statement_content, statement_category) VALUES (5, "Menyukai pekerjaan yang berhubungan dengan keuangan, akuntansi, atau administrasi perusahaan", 'C');
