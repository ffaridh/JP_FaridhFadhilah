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
    <Title>Filtering Rumah Sakit Rujukan</Title>
</Head>
<Body>
<H1>Filtering Rumah Sakit Rujukan</H1>
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
                <Td><?= $Row["kkota_madya"] ?></Td>
            </Tr>
        <?Php Endforeach ?>
    </Tbody>
</Table>
</Body>
</Html>