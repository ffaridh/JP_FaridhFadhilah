<?Php 
// file
$File = "daftarrsjakarta.Json";
// get file
$DataAPI = File_get_contents($File);
// decode
$Data = Json_decode($DataAPI, True);
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
                <Td><?= $Row["kab_administrasi"] ?></Td>
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