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
            <Th>Alamat rumah sakit</Th>
            <Th>Kelurahan</Th>
            <Th>Kecamatan</Th>
            <Th>Kota/Kab</Th>

        </Tr>
    </Thead>
    <Tbody>
        <?Php Foreach ($Data As $Row): ?>
            <Tr>
                <Td><?= $Row["nama_rumah_sakit"] ?></Td>
                <Td><?= $Row["alamat_rumah_sakit"] ?></Td>
                <Td><?= $Row["kelurahan"] ?></Td>
                <Td><?= $Row["kecamatan"] ?></Td>
                <Td><?= $Row["kab_administrasi"] ?></Td>
            </Tr>
        <?Php Endforeach ?>
    </Tbody>
</Table>
</Body>
</Html>