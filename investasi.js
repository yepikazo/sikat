let chart;

document.addEventListener("DOMContentLoaded", function () {
    const bungaInput = document.getElementById("bunga");
    const modalInput = document.getElementById("modal");
    const tenorInput = document.getElementById("tenor");
    const hasilKata = document.getElementById("hasilKata");
    const profitText = document.querySelector(".profit");
    const btnSimulasi = document.getElementById("simulasiInvestasi");

    const ctx = document.getElementById("grafikInvestasi");

    btnSimulasi.addEventListener("click", function () {
        let bungaBulananPersen = parseFloat(bungaInput.value); // langsung bunga bulanan
        let modal = parseFloat(modalInput.value);
        let tenor = parseInt(tenorInput.value);

        if (isNaN(bungaBulananPersen) || isNaN(modal) || isNaN(tenor)) {
            alert("Harap isi semua input dengan benar!");
            return;
        }

        // Bunga bulanan dalam rupiah
        let bungaBulananRupiah = modal * (bungaBulananPersen / 100);

        // Total keuntungan deposito sederhana
        let totalKeuntungan = bungaBulananRupiah * tenor;
        // let totalAkhir = modal + totalKeuntungan;

        hasilKata.textContent =
            `Total keuntungan anda dari ${tenor} bulan deposito adalah :`;

        profitText.textContent =
            "Rp " + Math.round(totalKeuntungan).toLocaleString("id-ID");
        // ====== DATA GRAFIK ======
        let labels = [];
        let data = [];
        let saldo = modal;

        for (let i = 1; i <= tenor; i++) {
            saldo += bungaBulananRupiah; // simple interest – naik flat
            labels.push("Bulan " + i);
            data.push(Math.round(saldo));
        }

        // ====== REFRESH GRAFIK ======
        if (chart) chart.destroy();

        chart = new Chart(ctx, {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    label: "Perkembangan Nilai Deposito",
                    data: data,
                    borderColor: "#ff4d00",
                    backgroundColor: "rgba(255, 77, 0, 0.2)",
                    borderWidth: 3,
                    tension: 0.25
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        ticks: {
                            callback: value =>
                                "Rp " + value.toLocaleString("id-ID")
                        }
                    }
                }
            }
        });
    document.querySelector(".grafik-placeholder").style.display = "flex";

    });
});
