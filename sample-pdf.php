<?php

require_once __DIR__ . '/vendor/autoload.php';

// Generate PDF
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tryout SNBT 1</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .container {
                width: 95%;
                margin: 0 auto;
            }

            .header {
                text-align: center;
                font-size: 17px;

            }

            .bold {
                font-weight: bold;

            }

            .subtes {
                font-weight: bold !important;
                font-size: 18px !important;
            }

            .soal {
                margin-bottom: 10px;
            }

            .pilihan {
                margin-bottom: 5px;
            }

            .jawaban {
                margin-top: 10px;
                font-weight: bold;
            }

            .pembahasan {
                margin-top: 20px;
            }

            .kotak {
                width: 100%;
                background-color: #FFF;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid black;
                margin:0;
                padding:0px;
                font-size:15px
            }

            .kotak:nth-child(3) {
                border-bottom: none;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <p class="header">PEMBAHASAN</p>
            <p class="header bold">TRYOUT SNBT PERTAMA #1</p>

            <div class="kotak">
                <p class="">SUBTES</p>
            </div>
            <div class="kotak">
                <p class="subtes">PENALARAN UMUR #1</p>
            </div>


            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
            <p class="soal">1. Konsumsi air putih yang cukup dapat membantu menjaga kesehatan tubuh. Minum air putih
                sebelum makan dikatakan bisa membantu menurunkan berat badan karena dapat membuat
                perut terasa lebih penuh, sehingga mengurangi jumlah makanan yang dikonsumsi. Manakah
                pernyataan berikut yang PALING TEPAT?</p>

            <ul class="pilihan">
                <li>a. Minum air putih hanya efektif untuk menurunkan berat badan pada pagi hari.</li>
                <li>b. Air putih tidak memiliki manfaat lain selain untuk hidrasi.</li>
                <li>c. Minum air putih sebelum makan tidak membantu dalam penurunan berat badan.</li>
                <li>d. Konsumsi air putih dalam jumlah banyak dapat menggantikan kebutuhan nutrisi lain.</li>
                <li>e. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat badan.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: E. Minum air putih sebelum makan dapat membantu dalam proses penurunan berat
                badan.</p>

            <p class="pembahasan">Pembahasan:<br>
                Informasi di soal menunjukkan bahwa minum air putih sebelum makan bisa membuat perut
                terasa lebih penuh, yang secara langsung mendukung pilihan e sebagai jawaban yang paling
                tepat.</p>

            <p class="soal">2. Menggunakan sepeda sebagai alat transportasi harian tidak hanya ramah lingkungan tetapi
                juga baik untuk kesehatan. Namun, di beberapa kota besar, kurangnya infrastruktur seperti
                jalur sepeda yang aman menjadi penghalang. Manakah pernyataan berikut ini yang PASTI
                SALAH?</p>

            <ul class="pilihan">
                <li>a. Bersepeda dapat meningkatkan polusi udara di kota besar.</li>
                <li>b. Jalur sepeda yang aman mempengaruhi jumlah pengguna sepeda.</li>
                <li>c. Bersepeda dapat meningkatkan risiko kecelakaan di jalan raya.</li>
                <li>d. Bersepeda dapat membantu mengurangi emisi karbon.</li>
                <li>e. Bersepeda dapat menjadi solusi alternatif untuk mengatasi kemacetan di kota besar.</li>
            </ul>

            <p class="jawaban">Kunci Jawaban: a. Bersepeda dapat meningkatkan polusi udara di kota besar.</p>

            <p class="pembahasan">Pembahasan:<br>
                Bersepeda tidak meningkatkan polusi udara, melainkan **mengurangi** emisi karbon. Pilihan a
                adalah jawaban yang salah karena bertentangan dengan fakta ini.</p>
        </div>
    </body>

    </html>
');
$mpdf->Output();
