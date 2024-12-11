const descriptions = {
    Realistic: " Realistic(realistis) sering menggunakan benda seperti alat-alat, mesin, serta suka memelihara hewan dan tumbuhan. Terpaku dan memiliki fokus yang baik dalam mengerjakan sesuatu yang disukai.",
    Investigative: "Investigative(investigatif) suka mencari tahu struktur dan teori terhadap suatu hal yang terstruktur alamiah dan aturan-aturan dalam masyarakat. Memiliki rasa ingin tahu yang tinggi, serta menyukai ide-ide baru.",
    Artistic: "Artistic(artistik) suka mengekspresikan diri dalam bentuk gambar, lukisan, musik, sastra, dan drama. Lebih peka terhadap rasa dan perasaan, serta lebih mementingkan kebebasan daripada apapun.",
    Social: "Social(sosial) suka membantu orang, mendidik, dan bisa menjalin hubungan yang baik dengan lingkungan sekitar. Bisa mengendalikan diri, sabar, serta baik pada orang lain.",
    Enterprising: "Enterprising(berjiwa usaha) berusaha mencapai dan mewujudkan tujuan bersama, suka bernegosiasi dan berdiskusi. Mempunyai kepercayaan diri dalam bergaul dan bermasyarakat, bisa memimpin, serta bisa memberikan pengaruh kepada orang lain.",
    Conventional: "Conventional(konvensional) suka mengurusi berkas-berkas, menganalisa data, serta bekerja sesuai langkah atau urutan yang telah ditentukan. Tertib dan mematuhi aturan, serta berhati-hati dalam melakukan sesuatu.",
};

function selectCategory(category) {
    // Update deskripsi
    document.getElementById("description-text").textContent = descriptions[category];

    // Highlight kategori yang dipilih
    const cells = document.querySelectorAll(".category-cell");
    const images = document.querySelectorAll(".category");

    cells.forEach((cell) => {
        if (cell.textContent === category) {
            cell.classList.add("selected");
            cell.classList.remove("dimmed");
        } else {
            cell.classList.remove("selected");
            cell.classList.add("dimmed");
        }
    });

    images.forEach((image) => {
        if (image.getAttribute("onclick").includes(category)) {
            image.classList.remove("dimmed");
        } else {
            image.classList.add("dimmed");
        }
    });
}
