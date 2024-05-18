<!-- <table class="table m-4">
        <thead>
            <tr>
                <th scope="col">Hari/Tanggal</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
         <?php
        // while ($user_data = mysqli_fetch_array($result)) {
        //     echo "<tr>";
        //     echo "<td>" . $user_data['name'] . "</td>";
        //     echo "<td>" . $user_data['keterangan'] . "</td>";

        //     echo '<td width=250>';
        //     echo '<a class="btn btn-warning" href="edit.php?id=$user_data[id]">Edit</a> | <a class="btn btn-Danger">Hapus</a>  ';
        //     echo '</td>';
        //     echo "<td><a class="btn btn-primary" href="#" role="button">Link</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        //     echo "<td><a class="btn btn-primary" href='edit.php?id=$user_data[id]' role="button">Edit</a> | <a class="btn btn-primary" href='delete.php?id=$user_data[id]' role="button">Hapus</a></td></tr>";
        //     echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        // }
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['tanggal']; ?> Kg</td>
                <td><?php echo $data['kelas']; ?> bulan</td>
                <td><?php echo $data['keterangan']; ?></td>
                <td>
                    <a href="index.php?aksi=update&id=<?php echo $data['id']; ?>&nama=<?php echo $data['nama_tanaman']; ?>&hasil=<?php echo $data['hasil_panen']; ?>&lama=<?php echo $data['lama_tanam']; ?>&tanggal=<?php echo $data['tanggal_panen']; ?>">Ubah</a> |
                    <a href="index.php?aksi=delete&id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>