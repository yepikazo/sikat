let chartTabungan = null;

document.addEventListener("DOMContentLoaded", function () {
    const nominalInput = document.getElementById("nominal_harian");
    const waktuInput = document.getElementById("jangka_waktu");
    const btnSimulasi = document.getElementById("simulasiTabungan");
    const profitText = document.querySelector(".profit");
    const infoText = document.querySelector(".result-section p");
    const chartCanvas = document.getElementById("chartTabungan");

    btnSimulasi.addEventListener("click", function () {
        let nominal = parseInt(nominalInput.value.replace(/\D/g, ""));
        let waktu = parseInt(waktuInput.value);

        if (isNaN(nominal) || isNaN(waktu) || nominal <= 0 || waktu <= 0) {
            alert("Masukkan angka yang valid.");
            return;
        }

        let total = nominal * waktu;

        infoText.textContent =
            "Total tabungan anda jika menabung selama " + waktu + " hari adalah :";

        profitText.textContent = "Rp. " + total.toLocaleString("id-ID");
        
        // Data grafik
        let labels = [];
        let data = [];
        let akumulasi = 0;

        for (let i = 1; i <= waktu; i++) {
            akumulasi += nominal;
            labels.push("Hari " + i);
            data.push(akumulasi);
        }

        // Hapus chart lama biar tidak dobel
        if (chartTabungan !== null) {
            chartTabungan.destroy();
        }

        chartTabungan = new Chart(chartCanvas, {
            type: "line",
            data: {
                labels: labels,
                datasets: [
                    {
                        label: "Total Tabungan",
                        data: data,
                        borderColor: "#ff4d00",
                        backgroundColor: "rgba(255, 77, 0, 0.2)",
                        borderWidth: 3,
                        tension: 0.3
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: (value) =>
                                "Rp " + value.toLocaleString("id-ID")
                        }
                    }
                }
            }
        });
    });
});
