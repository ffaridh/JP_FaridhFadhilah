<?Php 
// file
$File = (array) "daftarrsjakarta.Json";
$File = (array) "rujukancv19.Json";
// get file
$DataAPIA = File_get_contents($File1);
$DataAPIB = File_get_contents($File2);
// decode
$Data = json_encode(array_merge(json_decode($DataAPIA, true),json_decode($DataAPIB, true)))
 ?>
<!DOCTYPE Html>
<Html>
<Head>
    <Title>Rumah Sakit Rujukan</Title>
</Head>
<Body>
<H1>Rumah Sakit Rujukan</H1>
<Table Border="1" Style="Width: 100%">
    <Thead>
        <Tr>
            <Th>Nama Rumah Sakit</Th>
            <Th>Jenis rumah sakit</Th>
            <Th>Alamat rumah sakit</Th>
            <Th>Kelurahan</Th>
            <Th>Kecamatan</Th>
            <Th>Kota/Kab</Th>
            <Th>Kode pos</Th>
            <Th>Nomor Telepon</Th>
            <Th>Nomor Fax</Th>
            <Th>Website</Th>
            <Th>Email</Th>
        </Tr>
    </Thead>
    <Tbody>
        <?Php Foreach ($Data As $Row): ?>
            <Tr>
                <Td><?= $Row["nama_rumah_sakit"] ?></Td>
                <Td><?= $Row["jenis_rumah_sakit"] ?></Td>
                <Td><?= $Row["alamat_rumah_sakit"] ?></Td>
                <Td><?= $Row["kelurahan"] ?></Td>
                <Td><?= $Row["kecamatan"] ?></Td>
                <Td><?= $Row["kota_madya"] ?></Td>
                <Td><?= $Row["kode_pos"] ?></Td>
                <Td><?= $Row["nomor_telepon"] ?></Td>
                <Td><?= $Row["nomor_fax"] ?></Td>
                <Td><?= $Row["website"] ?></Td>
                <Td><?= $Row["email"] ?></Td>
            </Tr>
        <?Php Endforeach ?>
    </Tbody>
</Table>
</Body>
</Html>