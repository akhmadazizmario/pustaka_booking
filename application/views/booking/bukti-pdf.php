<style>
    table.items {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }

    table.items tr:nth-child(2n-1) td {
        background: white;

    }

    table.items th,
    table.items td {
        text-align: center;
    }

    table.items th {
        padding: 5px 20px;
        color: #5D6975;
        border-bottom: 1px solid black;
        white-space: nowrap;
        font-weight: normal;
    }

    .pullbar {
        border-bottom: 40px solid blue;
        border-top: 40px solid blue;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 0;
    }

    p {
        text-align: center;
        border: 1px solid yellow;
        color: white;
        font-size: 20px;
        margin: auto;
        mix-blend-mode: difference;
        padding: 0 50px;
        text-transform: uppercase;
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        -webkit-transition: box-shadow 0.4s;
        transition: box-shadow 0.4s;
    }

    p:hover {
        box-shadow: 0 0 0 30px black;
    }

    footer {
        color: #5D6975;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #C1CED9;
        padding: 8px 0;
        text-align: center;
    }
</style>

<div class="container">
    <table border=2 class="items">

        <tr>
            <th>Nama Anggota : <?= $user['nama']; ?></th>
        </tr>
        <tr>
            <th>Buku Yang dibooking:</th>
        </tr>
        <tr>
            <td>
                <div class="table-responsive">
                    <table border=1 class="items">
                        <tr>
                            <th>No.</th>
                            <th>Buku</th>
                            <th>Penulis</th>
                            <th>penerbit</th>
                            <th>Tahun</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($items as $i) {
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>
                                    <?= $i['judul_buku']; ?>
                                </td>
                                <td><?= $i['pengarang']; ?></td>
                                <td><?= $i['penerbit']; ?></td>
                                <td><?= $i['tahun_terbit']; ?></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
        <tr>
            <td align="center">
                <?= date('d-M-Y H:i:s'); ?>
            </td>
        </tr>
    </table>
    <br>
    <div class="pullbar">
        <p>TERIMA KASIH & SELAMAT BELAJAR :) </p>
    </div>

</div>
<footer>
    Invoice ini dicetak pada tanggal <?= date('d-M-Y H:i:s'); ?> dan merupakan bukti transaksi yang sah.
</footer>