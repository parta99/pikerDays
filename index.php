<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test phase 1</title>
    <link rel="stylesheet" href="src/assets/style.css">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class=" px-4 py-2 flex justify-center">
                <p>Today is <a id="current-day-title" class=" font-bold text-green-500" href=""></a> </p> 
            </div>
            <div class="container bg-slate-400 rounded-sm">
            <div class=" px-4 py-2 flex justify-center">
                <div class="font-bold rounded-md" id="days"></div>
            </div>
            </div>
            <div class=" px-4 py-2 flex justify-center">
             <p>Selected Day Is <a id="selected-day" class=" font-bold text-blue-500" href=""></a></p>
            </div>
        </div>
    </div>

    <script>
        var daysOfWeek = [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
        ];

        var currentDay = new Date().toLocaleDateString("en-US", { weekday: "long" });
        
        //menampilkan hari ini 
        var currentDayTitle = document.getElementById("current-day-title");
        currentDayTitle.textContent = "" + currentDay;

        // Melakukan perulangan melalui array daysOfWeek
        daysOfWeek.forEach(function(day) {
            // Membuat elemen div untuk setiap hari
            var div = document.createElement("div");

            // Menambahkan teks nama hari ke dalam elemen div
            div.textContent = day;
            div.classList.add("day");

            // Menambahkan kelas perbedaan jika ini adalah hari saat ini
            if (day === currentDay) {
                div.classList.add("current-day");
            }

            // Menambahkan elemen div ke dalam elemen dengan id "hari-hari"
            var daysContainer = document.getElementById("days");
            daysContainer.appendChild(div);

            // Menambahkan event listener untuk mengubah tampilan saat diklik
            div.addEventListener("click", function() {
                // Menghapus kelas "hari-terpilih" dari semua elemen hari
                var selectedDays = document.querySelectorAll(".selected-day");
                selectedDays.forEach(function(el) {
                    el.classList.remove("selected-day");
                });

                // Menambahkan kelas "hari-terpilih" pada elemen yang diklik
                this.classList.add("selected-day");

                // Memperbarui teks pada elemen dengan id "hari-terpilih-text" sesuai dengan hari yang dipilih
                var selectedDayText = document.getElementById("selected-day");
                selectedDayText.textContent = "" + this.textContent;
            });
        });

        // Fungsi untuk mendapatkan hari saat ini
        function getCurrentDay() {
            var days = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
            var today = new Date().getDay();
            return days[today];
        }
    </script>
</body>
</html>
