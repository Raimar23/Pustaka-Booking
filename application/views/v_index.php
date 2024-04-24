<section>
    <h1>
        <?php echo $judul ?>
    </h1>

    <p>Pada penjelasan sebelumnya, CodeIgniter disebutkan menggunakan metode MVC. Apa itu MVC? Memahami MVC penting
        sebelum mempelajari CodeIgniter lebih lanjut.</p>

    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama aplikasi menjadi tiga bagian: model, view, dan
        controller.</p>

    <ol type="a">
        <li>Model</li>

        <p>Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang digunakan aplikasi. Model juga dapat
            didefinisikan sebagai bagian yang menangani pengolahan database, seperti mengambil data, memasukkan data,
            dan manipulasi database lainnya. Semua instruksi atau fungsi terkait database diletakkan di dalam model.</p>

        <p>Sebagai catatan, semua model harus disimpan di dalam folder `application/models`.</p>

        <li>View</li>

        <p>View menangani halaman user interface (UI) atau halaman yang muncul pada browser. Tampilan UI dikumpulkan di
            view untuk memisahkannya dengan controller dan model. Hal ini memudahkan web designer dalam mengembangkan
            tampilan website.</p>

        <li>Controller</li>

        <p>Controller adalah kumpulan instruksi aksi yang menghubungkan model dan view. User tidak akan berhubungan
            dengan model secara langsung. Intinya, data yang tersimpan di database (model) diambil oleh controller dan
            kemudian ditampilkan ke view. Jadi, controllerlah yang mengolah instruksi.</p>

        <p>Dari penjelasan di atas, dapat disimpulkan bahwa controller berperan sebagai penghubung antara view dan
            model. Contohnya, pada aplikasi yang menampilkan data dengan metode MVC, controller memanggil instruksi pada
            model untuk mengambil data dari database, kemudian controller meneruskannya ke view untuk ditampilkan.</p>

        <p>Dengan konsep MVC, pengembangan aplikasi menjadi lebih mudah dan terstruktur. Web designer atau front-end
            developer hanya perlu berhubungan dengan view untuk mendesain tampilan aplikasi, karena back-end developer
            yang menangani bagian controller dan model. Pembagian tugas ini memudahkan dan mempercepat pengembangan
            aplikasi.</p>
    </ol>
</section>