<?php
// --- KODE ASLI ANDA (TIDAK DIUBAH) ---
$lamaJam = 4;
$jenis = "Mobil";

ob_start();

if ($jenis == "Mobil"){
    if ($lamaJam <=2) 
        {echo "Tarif parkir Rp.5.000";
        }
    else {
        $lamaJam = 5000 + (($lamaJam - 2) * 3000);
        echo "Tarif parkir Rp." . $lamaJam;
    }
} 
elseif ($jenis == "mobil"){
    if ($lamaJam <=2) 
        {echo "Tarif parkir Rp.5.000";
        }
    else {
        $lamaJam = 5000 + (($lamaJam - 2) * 3000);
        echo "Tarif parkir Rp." . $lamaJam;
    }
} 
elseif ($jenis == "Motor"){
    if ($lamaJam <=2) 
        {echo "Tarif parkir Rp.2.000";
        }
    else {
        $lamaJam = 2000 + (($lamaJam - 2) * 1000);
        echo "Tarif parkir Rp." . $lamaJam;
    }
} 
elseif ($jenis == "motor"){
    if ($lamaJam <=2) 
        {echo "Tarif parkir Rp.2.000";
        }
    else {
        $lamaJam = 2000 + (($lamaJam - 2) * 1000);
        echo "Tarif parkir Rp." . $lamaJam;
    }
}

$hasilTarif = ob_get_clean();
// --- AKHIR KODE ASLI ANDA ---
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Parkir</title>
    <style>
        body {
            background-color: #0f172a;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            width: 100%;
            max-width: 350px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .header {
            background-color: #4f46e5;
            color: white;
            padding: 24px;
            text-align: center;
        }
        .header h2 {
            margin: 0;
            font-size: 18px;
            letter-spacing: 0.5px;
        }
        .badge {
            background-color: rgba(255, 255, 255, 0.2);
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
            padding: 4px 10px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 8px;
        }
        .body {
            padding: 24px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8fafc;
            padding: 12px 16px;
            border-radius: 10px;
            border: 1px solid #f1f5f9;
            margin-bottom: 12px;
            font-size: 13px;
        }
        .label {
            color: #64748b;
            font-weight: 500;
        }
        .value {
            color: #1e293b;
            font-weight: bold;
            text-transform: uppercase;
        }
        .result-box {
            background-color: #e0e7ff;
            border: 1px solid #c7d2fe;
            border-radius: 10px;
            padding: 16px;
            text-align: center;
            margin-top: 16px;
        }
        .result-title {
            font-size: 10px;
            color: #4f46e5;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 4px;
        }
        .result-value {
            color: #059669;
            font-size: 16px;
            font-weight: 900;
        }
        .footer {
            padding: 16px 24px;
            background-color: #f8fafc;
            border-top: 1px solid #f1f5f9;
            text-align: center;
            font-size: 10px;
            color: #94a3b8;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <span class="badge">Sistem Parkir Otomatis</span>
            <h2>DETAIL PARKIR KENDARAAN</h2>
        </div>

        <div class="body">
            <div class="row">
                <span class="label">Jenis Kendaraan</span>
                <span class="value"><?php echo $jenis; ?></span>
            </div>

            <div class="row">
                <span class="label">Durasi Parkir</span>
                <span class="value">4 Jam</span>
            </div>

            <div class="result-box">
                <div class="result-title">Rincian Biaya</div>
                <div class="result-value">
                    <?php echo $hasilTarif; ?>
                </div>
            </div>
        </div>

        <div class="footer">
            Pastikan karcis disimpan dengan baik sebelum keluar area parkir.
        </div>
    </div>

</body>
</html>