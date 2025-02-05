<?php

?>
<!doctype html>
<html>
    <thead>
        <title>tool</title>
        <meta charset="utf-8">
    </thead>

    <tbody>
        <div id="show"></div>
    </tbody>

    <script>
        var lg = [
            {
                "lga_id": 4,
                "state_id": 1,
                "local_name": "Ikwuano"
            },
            {
                "lga_id": 8,
                "state_id": 1,
                "local_name": "Obi Ngwa"
            },
            {
                "lga_id": 6,
                "state_id": 1,
                "local_name": "Isiala Ngwa South"
            },
            {
                "lga_id": 9,
                "state_id": 1,
                "local_name": "Ohafia"
            },
            {
                "lga_id": 10,
                "state_id": 1,
                "local_name": "Osisioma"
            },
            {
                "lga_id": 11,
                "state_id": 1,
                "local_name": "Ugwunagbo"
            },
            {
                "lga_id": 12,
                "state_id": 1,
                "local_name": "Ukwa East"
            },
            {
                "lga_id": 14,
                "state_id": 1,
                "local_name": "Umuahia North"
            },
            {
                "lga_id": 15,
                "state_id": 1,
                "local_name": "Umuahia South"
            },
            {
                "lga_id": 13,
                "state_id": 1,
                "local_name": "Ukwa West"
            },
            {
                "lga_id": 16,
                "state_id": 1,
                "local_name": "Umu Nneochi"
            },
            {
                "lga_id": 17,
                "state_id": 2,
                "local_name": "Fufoure"
            },
            {
                "lga_id": 7,
                "state_id": 1,
                "local_name": "Isuikwuato"
            },
            {
                "lga_id": 20,
                "state_id": 2,
                "local_name": "Gombi"
            },
            {
                "lga_id": 21,
                "state_id": 2,
                "local_name": "Girei"
            },
            {
                "lga_id": 23,
                "state_id": 2,
                "local_name": "Jada"
            },
            {
                "lga_id": 22,
                "state_id": 2,
                "local_name": "Hong"
            },
            {
                "lga_id": 2,
                "state_id": 1,
                "local_name": "Arochukwu"
            },
            {
                "lga_id": 24,
                "state_id": 2,
                "local_name": "Lamurde"
            },
            {
                "lga_id": 25,
                "state_id": 2,
                "local_name": "Madagali"
            },
            {
                "lga_id": 18,
                "state_id": 2,
                "local_name": "Ganye"
            },
            {
                "lga_id": 1,
                "state_id": 1,
                "local_name": "Aba South"
            },
            {
                "lga_id": 19,
                "state_id": 2,
                "local_name": "Guyuk"
            },
            {
                "lga_id": 26,
                "state_id": 2,
                "local_name": "Maiha"
            },
            {
                "lga_id": 27,
                "state_id": 2,
                "local_name": "Mayo Belwa"
            },
            {
                "lga_id": 3,
                "state_id": 1,
                "local_name": "Bende"
            },
            {
                "lga_id": 29,
                "state_id": 2,
                "local_name": "Mubi North"
            },
            {
                "lga_id": 30,
                "state_id": 2,
                "local_name": "Mubi South"
            },
            {
                "lga_id": 5,
                "state_id": 1,
                "local_name": "Isiala Ngwa North"
            },
            {
                "lga_id": 31,
                "state_id": 2,
                "local_name": "Numan"
            },
            {
                "lga_id": 32,
                "state_id": 2,
                "local_name": "Shelleng"
            },
            {
                "lga_id": 28,
                "state_id": 2,
                "local_name": "Michika"
            },
            {
                "lga_id": 34,
                "state_id": 2,
                "local_name": "Toungo"
            },
            {
                "lga_id": 33,
                "state_id": 2,
                "local_name": "Song"
            },
            {
                "lga_id": 35,
                "state_id": 2,
                "local_name": "Yola North"
            },
            {
                "lga_id": 39,
                "state_id": 3,
                "local_name": "Esit Eket"
            },
            {
                "lga_id": 36,
                "state_id": 2,
                "local_name": "Yola South"
            },
            {
                "lga_id": 37,
                "state_id": 3,
                "local_name": "Eastern Obolo"
            },
            {
                "lga_id": 41,
                "state_id": 3,
                "local_name": "Etim Ekpo"
            },
            {
                "lga_id": 38,
                "state_id": 3,
                "local_name": "Eket"
            },
            {
                "lga_id": 40,
                "state_id": 3,
                "local_name": "Essien Udim"
            },
            {
                "lga_id": 42,
                "state_id": 3,
                "local_name": "Etinan"
            },
            {
                "lga_id": 43,
                "state_id": 3,
                "local_name": "Ibeno"
            },
            {
                "lga_id": 44,
                "state_id": 3,
                "local_name": "Ibesikpo Asutan"
            },
            {
                "lga_id": 45,
                "state_id": 3,
                "local_name": "Ibiono-Ibom"
            },
            {
                "lga_id": 51,
                "state_id": 3,
                "local_name": "Itu"
            },
            {
                "lga_id": 53,
                "state_id": 3,
                "local_name": "Mpat-Enin"
            },
            {
                "lga_id": 52,
                "state_id": 3,
                "local_name": "Mbo"
            },
            {
                "lga_id": 46,
                "state_id": 3,
                "local_name": "Ika"
            },
            {
                "lga_id": 54,
                "state_id": 3,
                "local_name": "Nsit-Atai"
            },
            {
                "lga_id": 55,
                "state_id": 3,
                "local_name": "Nsit-Ibom"
            },
            {
                "lga_id": 58,
                "state_id": 3,
                "local_name": "Okobo"
            },
            {
                "lga_id": 56,
                "state_id": 3,
                "local_name": "Nsit-Ubium"
            },
            {
                "lga_id": 57,
                "state_id": 3,
                "local_name": "Obot Akara"
            },
            {
                "lga_id": 60,
                "state_id": 3,
                "local_name": "Oron"
            },
            {
                "lga_id": 59,
                "state_id": 3,
                "local_name": "Onna"
            },
            {
                "lga_id": 49,
                "state_id": 3,
                "local_name": "Ikot Ekpene"
            },
            {
                "lga_id": 47,
                "state_id": 3,
                "local_name": "Ikono"
            },
            {
                "lga_id": 65,
                "state_id": 3,
                "local_name": "Urue-Offong/Oruko"
            },
            {
                "lga_id": 62,
                "state_id": 3,
                "local_name": "Undung-Uko"
            },
            {
                "lga_id": 66,
                "state_id": 3,
                "local_name": "Uyo"
            },
            {
                "lga_id": 64,
                "state_id": 3,
                "local_name": "Uruan"
            },
            {
                "lga_id": 67,
                "state_id": 4,
                "local_name": "Anambra East"
            },
            {
                "lga_id": 68,
                "state_id": 4,
                "local_name": "Anambra West"
            },
            {
                "lga_id": 70,
                "state_id": 4,
                "local_name": "Awka North"
            },
            {
                "lga_id": 71,
                "state_id": 4,
                "local_name": "Awka South"
            },
            {
                "lga_id": 72,
                "state_id": 4,
                "local_name": "Ayamelum"
            },
            {
                "lga_id": 69,
                "state_id": 4,
                "local_name": "Anaocha"
            },
            {
                "lga_id": 75,
                "state_id": 4,
                "local_name": "Idemili North"
            },
            {
                "lga_id": 61,
                "state_id": 3,
                "local_name": "Oruk Anam"
            },
            {
                "lga_id": 63,
                "state_id": 3,
                "local_name": "Ukanafun"
            },
            {
                "lga_id": 74,
                "state_id": 4,
                "local_name": "Ekwusigo"
            },
            {
                "lga_id": 50,
                "state_id": 3,
                "local_name": "Ini"
            },
            {
                "lga_id": 73,
                "state_id": 4,
                "local_name": "Dunukofia"
            },
            {
                "lga_id": 77,
                "state_id": 4,
                "local_name": "Ihiala"
            },
            {
                "lga_id": 83,
                "state_id": 4,
                "local_name": "Onitsha South"
            },
            {
                "lga_id": 84,
                "state_id": 4,
                "local_name": "Orumba North"
            },
            {
                "lga_id": 82,
                "state_id": 4,
                "local_name": "Onitsha North"
            },
            {
                "lga_id": 85,
                "state_id": 4,
                "local_name": "Orumba South"
            },
            {
                "lga_id": 87,
                "state_id": 5,
                "local_name": "Bauchi"
            },
            {
                "lga_id": 86,
                "state_id": 4,
                "local_name": "Oyi"
            },
            {
                "lga_id": 88,
                "state_id": 5,
                "local_name": "Bogoro"
            },
            {
                "lga_id": 81,
                "state_id": 4,
                "local_name": "Ogbaru"
            },
            {
                "lga_id": 90,
                "state_id": 5,
                "local_name": "Darazo"
            },
            {
                "lga_id": 89,
                "state_id": 5,
                "local_name": "Damban"
            },
            {
                "lga_id": 76,
                "state_id": 4,
                "local_name": "Idemili South"
            },
            {
                "lga_id": 91,
                "state_id": 5,
                "local_name": "Dass"
            },
            {
                "lga_id": 92,
                "state_id": 5,
                "local_name": "Gamawa"
            },
            {
                "lga_id": 93,
                "state_id": 5,
                "local_name": "Ganjuwa"
            },
            {
                "lga_id": 94,
                "state_id": 5,
                "local_name": "Giade"
            },
            {
                "lga_id": 96,
                "state_id": 5,
                "local_name": "Jama'are"
            },
            {
                "lga_id": 95,
                "state_id": 5,
                "local_name": "Itas/Gadau"
            },
            {
                "lga_id": 79,
                "state_id": 4,
                "local_name": "Nnewi North"
            },
            {
                "lga_id": 80,
                "state_id": 4,
                "local_name": "Nnewi South"
            },
            {
                "lga_id": 101,
                "state_id": 5,
                "local_name": "Shira"
            },
            {
                "lga_id": 100,
                "state_id": 5,
                "local_name": "Ningi"
            },
            {
                "lga_id": 102,
                "state_id": 5,
                "local_name": "Tafawa Balewa"
            },
            {
                "lga_id": 103,
                "state_id": 5,
                "local_name": "Toro"
            },
            {
                "lga_id": 78,
                "state_id": 4,
                "local_name": "Njikoka"
            },
            {
                "lga_id": 104,
                "state_id": 5,
                "local_name": "Warji"
            },
            {
                "lga_id": 97,
                "state_id": 5,
                "local_name": "Katagum"
            },
            {
                "lga_id": 98,
                "state_id": 5,
                "local_name": "Kirfi"
            },
            {
                "lga_id": 99,
                "state_id": 5,
                "local_name": "Misau"
            },
            {
                "lga_id": 48,
                "state_id": 3,
                "local_name": "Ikot Abasi"
            },
            {
                "lga_id": 105,
                "state_id": 5,
                "local_name": "Zaki"
            },
            {
                "lga_id": 107,
                "state_id": 6,
                "local_name": "Kolokuma/Opokuma"
            },
            {
                "lga_id": 106,
                "state_id": 6,
                "local_name": "Ekeremor"
            },
            {
                "lga_id": 108,
                "state_id": 6,
                "local_name": "Nembe"
            },
            {
                "lga_id": 109,
                "state_id": 6,
                "local_name": "Ogbia"
            },
            {
                "lga_id": 110,
                "state_id": 6,
                "local_name": "Sagbama"
            },
            {
                "lga_id": 111,
                "state_id": 6,
                "local_name": "Southern jaw"
            },
            {
                "lga_id": 114,
                "state_id": 7,
                "local_name": "Ado"
            },
            {
                "lga_id": 112,
                "state_id": 6,
                "local_name": "Yenagoa"
            },
            {
                "lga_id": 113,
                "state_id": 7,
                "local_name": "Apa"
            },
            {
                "lga_id": 116,
                "state_id": 7,
                "local_name": "Gboko"
            },
            {
                "lga_id": 115,
                "state_id": 7,
                "local_name": "Buruku"
            },
            {
                "lga_id": 117,
                "state_id": 7,
                "local_name": "Guma"
            },
            {
                "lga_id": 119,
                "state_id": 7,
                "local_name": "Gwer West"
            },
            {
                "lga_id": 120,
                "state_id": 7,
                "local_name": "Katsina-Ala"
            },
            {
                "lga_id": 118,
                "state_id": 7,
                "local_name": "Gwer East"
            },
            {
                "lga_id": 121,
                "state_id": 7,
                "local_name": "Konshisha"
            },
            {
                "lga_id": 122,
                "state_id": 7,
                "local_name": "Kwande"
            },
            {
                "lga_id": 123,
                "state_id": 7,
                "local_name": "Logo"
            },
            {
                "lga_id": 124,
                "state_id": 7,
                "local_name": "Makurdi"
            },
            {
                "lga_id": 126,
                "state_id": 7,
                "local_name": "Ogbadibo"
            },
            {
                "lga_id": 125,
                "state_id": 7,
                "local_name": "Obi"
            },
            {
                "lga_id": 127,
                "state_id": 7,
                "local_name": "Ohimini"
            },
            {
                "lga_id": 128,
                "state_id": 7,
                "local_name": "Oju"
            },
            {
                "lga_id": 129,
                "state_id": 7,
                "local_name": "Okpokwu"
            },
            {
                "lga_id": 130,
                "state_id": 7,
                "local_name": "Oturkpo"
            },
            {
                "lga_id": 132,
                "state_id": 7,
                "local_name": "Ukum"
            },
            {
                "lga_id": 131,
                "state_id": 7,
                "local_name": "Tarka"
            },
            {
                "lga_id": 133,
                "state_id": 7,
                "local_name": "Ushongo"
            },
            {
                "lga_id": 135,
                "state_id": 8,
                "local_name": "Askira/Uba"
            },
            {
                "lga_id": 134,
                "state_id": 7,
                "local_name": "Vandeikya"
            },
            {
                "lga_id": 141,
                "state_id": 8,
                "local_name": "Dikwa"
            },
            {
                "lga_id": 142,
                "state_id": 8,
                "local_name": "Gubio"
            },
            {
                "lga_id": 140,
                "state_id": 8,
                "local_name": "Damboa"
            },
            {
                "lga_id": 144,
                "state_id": 8,
                "local_name": "Gwoza"
            },
            {
                "lga_id": 143,
                "state_id": 8,
                "local_name": "Guzamala"
            },
            {
                "lga_id": 137,
                "state_id": 8,
                "local_name": "Bayo"
            },
            {
                "lga_id": 146,
                "state_id": 8,
                "local_name": "Jere"
            },
            {
                "lga_id": 145,
                "state_id": 8,
                "local_name": "Hawul"
            },
            {
                "lga_id": 149,
                "state_id": 8,
                "local_name": "Konduga"
            },
            {
                "lga_id": 150,
                "state_id": 8,
                "local_name": "Kukawa"
            },
            {
                "lga_id": 148,
                "state_id": 8,
                "local_name": "Kala/Balge"
            },
            {
                "lga_id": 147,
                "state_id": 8,
                "local_name": "Kaga"
            },
            {
                "lga_id": 151,
                "state_id": 8,
                "local_name": "Kwaya Kusar"
            },
            {
                "lga_id": 138,
                "state_id": 8,
                "local_name": "Biu"
            },
            {
                "lga_id": 139,
                "state_id": 8,
                "local_name": "Chibok"
            },
            {
                "lga_id": 157,
                "state_id": 8,
                "local_name": "Monguno"
            },
            {
                "lga_id": 136,
                "state_id": 8,
                "local_name": "Bama"
            },
            {
                "lga_id": 156,
                "state_id": 8,
                "local_name": "Mobbar"
            },
            {
                "lga_id": 159,
                "state_id": 8,
                "local_name": "Nganzai"
            },
            {
                "lga_id": 160,
                "state_id": 8,
                "local_name": "Shani"
            },
            {
                "lga_id": 155,
                "state_id": 8,
                "local_name": "Marte"
            },
            {
                "lga_id": 152,
                "state_id": 8,
                "local_name": "Mafa"
            },
            {
                "lga_id": 153,
                "state_id": 8,
                "local_name": "Magumeri"
            },
            {
                "lga_id": 161,
                "state_id": 9,
                "local_name": "Akamkpa"
            },
            {
                "lga_id": 162,
                "state_id": 9,
                "local_name": "Akpabuyo"
            },
            {
                "lga_id": 154,
                "state_id": 8,
                "local_name": "Maiduguri"
            },
            {
                "lga_id": 165,
                "state_id": 9,
                "local_name": "Biase"
            },
            {
                "lga_id": 164,
                "state_id": 9,
                "local_name": "Bekwara"
            },
            {
                "lga_id": 158,
                "state_id": 8,
                "local_name": "Ngala"
            },
            {
                "lga_id": 163,
                "state_id": 9,
                "local_name": "Bakassi"
            },
            {
                "lga_id": 166,
                "state_id": 9,
                "local_name": "Boki"
            },
            {
                "lga_id": 167,
                "state_id": 9,
                "local_name": "Calabar Municipal"
            },
            {
                "lga_id": 169,
                "state_id": 9,
                "local_name": "Etung"
            },
            {
                "lga_id": 168,
                "state_id": 9,
                "local_name": "Calabar South"
            },
            {
                "lga_id": 170,
                "state_id": 9,
                "local_name": "Ikom"
            },
            {
                "lga_id": 172,
                "state_id": 9,
                "local_name": "Obubra"
            },
            {
                "lga_id": 173,
                "state_id": 9,
                "local_name": "Obudu"
            },
            {
                "lga_id": 171,
                "state_id": 9,
                "local_name": "Obanliku"
            },
            {
                "lga_id": 175,
                "state_id": 9,
                "local_name": "Ogoja"
            },
            {
                "lga_id": 176,
                "state_id": 9,
                "local_name": "Yarkuur"
            },
            {
                "lga_id": 174,
                "state_id": 9,
                "local_name": "Odukpani"
            },
            {
                "lga_id": 178,
                "state_id": 10,
                "local_name": "Aniocha South"
            },
            {
                "lga_id": 177,
                "state_id": 9,
                "local_name": "Yala"
            },
            {
                "lga_id": 181,
                "state_id": 10,
                "local_name": "Ethiope East"
            },
            {
                "lga_id": 185,
                "state_id": 10,
                "local_name": "Isoko North"
            },
            {
                "lga_id": 186,
                "state_id": 10,
                "local_name": "Isoko South"
            },
            {
                "lga_id": 188,
                "state_id": 10,
                "local_name": "Ndokwa West"
            },
            {
                "lga_id": 189,
                "state_id": 10,
                "local_name": "Okpe"
            },
            {
                "lga_id": 187,
                "state_id": 10,
                "local_name": "Ndokwa East"
            },
            {
                "lga_id": 184,
                "state_id": 10,
                "local_name": "Ika South"
            },
            {
                "lga_id": 190,
                "state_id": 10,
                "local_name": "Oshimili North"
            },
            {
                "lga_id": 192,
                "state_id": 10,
                "local_name": "Patani"
            },
            {
                "lga_id": 191,
                "state_id": 10,
                "local_name": "Oshimili South"
            },
            {
                "lga_id": 194,
                "state_id": 10,
                "local_name": "Udu"
            },
            {
                "lga_id": 193,
                "state_id": 10,
                "local_name": "Sapele"
            },
            {
                "lga_id": 195,
                "state_id": 10,
                "local_name": "Ughelli North"
            },
            {
                "lga_id": 196,
                "state_id": 10,
                "local_name": "Ughelli South"
            },
            {
                "lga_id": 197,
                "state_id": 10,
                "local_name": "Ukwuani"
            },
            {
                "lga_id": 182,
                "state_id": 10,
                "local_name": "Ethiope West"
            },
            {
                "lga_id": 183,
                "state_id": 10,
                "local_name": "Ika North East"
            },
            {
                "lga_id": 180,
                "state_id": 10,
                "local_name": "Burutu"
            },
            {
                "lga_id": 179,
                "state_id": 10,
                "local_name": "Bomadi"
            },
            {
                "lga_id": 198,
                "state_id": 10,
                "local_name": "Uvwie"
            },
            {
                "lga_id": 199,
                "state_id": 10,
                "local_name": "Warri North"
            },
            {
                "lga_id": 201,
                "state_id": 10,
                "local_name": "Warri South West"
            },
            {
                "lga_id": 200,
                "state_id": 10,
                "local_name": "Warri South"
            },
            {
                "lga_id": 203,
                "state_id": 11,
                "local_name": "Afikpo South"
            },
            {
                "lga_id": 202,
                "state_id": 11,
                "local_name": "Afikpo North"
            },
            {
                "lga_id": 205,
                "state_id": 11,
                "local_name": "Ezza North"
            },
            {
                "lga_id": 206,
                "state_id": 11,
                "local_name": "Ezza South"
            },
            {
                "lga_id": 204,
                "state_id": 11,
                "local_name": "Ebonyi"
            },
            {
                "lga_id": 207,
                "state_id": 11,
                "local_name": "Ikwo"
            },
            {
                "lga_id": 208,
                "state_id": 11,
                "local_name": "Ishielu"
            },
            {
                "lga_id": 209,
                "state_id": 11,
                "local_name": "Ivo"
            },
            {
                "lga_id": 213,
                "state_id": 11,
                "local_name": "Onicha"
            },
            {
                "lga_id": 210,
                "state_id": 11,
                "local_name": "Izzi"
            },
            {
                "lga_id": 211,
                "state_id": 11,
                "local_name": "Ohaozara"
            },
            {
                "lga_id": 212,
                "state_id": 11,
                "local_name": "Ohaukwu"
            },
            {
                "lga_id": 215,
                "state_id": 12,
                "local_name": "Esan Central"
            },
            {
                "lga_id": 214,
                "state_id": 12,
                "local_name": "Egor"
            },
            {
                "lga_id": 216,
                "state_id": 12,
                "local_name": "Esan North-East"
            },
            {
                "lga_id": 217,
                "state_id": 12,
                "local_name": "Esan South-East"
            },
            {
                "lga_id": 218,
                "state_id": 12,
                "local_name": "Esan West"
            },
            {
                "lga_id": 219,
                "state_id": 12,
                "local_name": "Etsako Central"
            },
            {
                "lga_id": 220,
                "state_id": 12,
                "local_name": "Etsako East"
            },
            {
                "lga_id": 223,
                "state_id": 12,
                "local_name": "Ikpoba Okha"
            },
            {
                "lga_id": 228,
                "state_id": 12,
                "local_name": "Owan East"
            },
            {
                "lga_id": 226,
                "state_id": 12,
                "local_name": "Ovia North-East"
            },
            {
                "lga_id": 227,
                "state_id": 12,
                "local_name": "Ovia South-West"
            },
            {
                "lga_id": 229,
                "state_id": 12,
                "local_name": "Owan West"
            },
            {
                "lga_id": 230,
                "state_id": 12,
                "local_name": "Uhunmwonde"
            },
            {
                "lga_id": 231,
                "state_id": 13,
                "local_name": "Efon"
            },
            {
                "lga_id": 233,
                "state_id": 13,
                "local_name": "Ekiti South-West"
            },
            {
                "lga_id": 234,
                "state_id": 13,
                "local_name": "Ekiti West"
            },
            {
                "lga_id": 235,
                "state_id": 13,
                "local_name": "Emure"
            },
            {
                "lga_id": 236,
                "state_id": 13,
                "local_name": "Gbonyin"
            },
            {
                "lga_id": 224,
                "state_id": 12,
                "local_name": "Orhionmwon"
            },
            {
                "lga_id": 232,
                "state_id": 13,
                "local_name": "Ekiti East"
            },
            {
                "lga_id": 221,
                "state_id": 12,
                "local_name": "Etsako West"
            },
            {
                "lga_id": 225,
                "state_id": 12,
                "local_name": "Oredo"
            },
            {
                "lga_id": 222,
                "state_id": 12,
                "local_name": "Igueben"
            },
            {
                "lga_id": 239,
                "state_id": 13,
                "local_name": "Ikere"
            },
            {
                "lga_id": 237,
                "state_id": 13,
                "local_name": "Ido Osi"
            },
            {
                "lga_id": 240,
                "state_id": 13,
                "local_name": "Ikole"
            },
            {
                "lga_id": 242,
                "state_id": 13,
                "local_name": "Irepodun/Ifelodun"
            },
            {
                "lga_id": 241,
                "state_id": 13,
                "local_name": "Ileje meje"
            },
            {
                "lga_id": 244,
                "state_id": 13,
                "local_name": "Moba"
            },
            {
                "lga_id": 243,
                "state_id": 13,
                "local_name": "Ise/Orun"
            },
            {
                "lga_id": 246,
                "state_id": 14,
                "local_name": "Awgu"
            },
            {
                "lga_id": 238,
                "state_id": 13,
                "local_name": "Ijero"
            },
            {
                "lga_id": 250,
                "state_id": 14,
                "local_name": "Ezeagu"
            },
            {
                "lga_id": 249,
                "state_id": 14,
                "local_name": "Enugu South"
            },
            {
                "lga_id": 251,
                "state_id": 14,
                "local_name": "Igbo Etiti"
            },
            {
                "lga_id": 248,
                "state_id": 14,
                "local_name": "Enugu North"
            },
            {
                "lga_id": 247,
                "state_id": 14,
                "local_name": "Enugu East"
            },
            {
                "lga_id": 253,
                "state_id": 14,
                "local_name": "Igbo Eze South"
            },
            {
                "lga_id": 255,
                "state_id": 14,
                "local_name": "Nkanu East"
            },
            {
                "lga_id": 256,
                "state_id": 14,
                "local_name": "Nkanu West"
            },
            {
                "lga_id": 252,
                "state_id": 14,
                "local_name": "Igbo Eze North"
            },
            {
                "lga_id": 254,
                "state_id": 14,
                "local_name": "Isi Uzo"
            },
            {
                "lga_id": 257,
                "state_id": 14,
                "local_name": "Nsukka"
            },
            {
                "lga_id": 258,
                "state_id": 14,
                "local_name": "Oji River"
            },
            {
                "lga_id": 259,
                "state_id": 14,
                "local_name": "Udenu"
            },
            {
                "lga_id": 260,
                "state_id": 14,
                "local_name": "Udi"
            },
            {
                "lga_id": 261,
                "state_id": 14,
                "local_name": "Uzo Uwani"
            },
            {
                "lga_id": 262,
                "state_id": 15,
                "local_name": "Bwari"
            },
            {
                "lga_id": 263,
                "state_id": 15,
                "local_name": "Gwagwalada"
            },
            {
                "lga_id": 265,
                "state_id": 15,
                "local_name": "Kwali"
            },
            {
                "lga_id": 264,
                "state_id": 15,
                "local_name": "Kuje"
            },
            {
                "lga_id": 267,
                "state_id": 16,
                "local_name": "Balanga"
            },
            {
                "lga_id": 269,
                "state_id": 16,
                "local_name": "Dukku"
            },
            {
                "lga_id": 274,
                "state_id": 16,
                "local_name": "Nafada"
            },
            {
                "lga_id": 268,
                "state_id": 16,
                "local_name": "Billiri"
            },
            {
                "lga_id": 266,
                "state_id": 15,
                "local_name": "Municipal Area Council"
            },
            {
                "lga_id": 275,
                "state_id": 16,
                "local_name": "Shongom"
            },
            {
                "lga_id": 277,
                "state_id": 17,
                "local_name": "Ahiazu Mbaise"
            },
            {
                "lga_id": 276,
                "state_id": 16,
                "local_name": "Yamaltu/Deba"
            },
            {
                "lga_id": 278,
                "state_id": 17,
                "local_name": "Ehime Mbano"
            },
            {
                "lga_id": 279,
                "state_id": 17,
                "local_name": "Ezinihitte"
            },
            {
                "lga_id": 273,
                "state_id": 16,
                "local_name": "Kwami"
            },
            {
                "lga_id": 280,
                "state_id": 17,
                "local_name": "Ideato North"
            },
            {
                "lga_id": 281,
                "state_id": 17,
                "local_name": "Ideato South"
            },
            {
                "lga_id": 282,
                "state_id": 17,
                "local_name": "Ihitte/Uboma"
            },
            {
                "lga_id": 283,
                "state_id": 17,
                "local_name": "Ikeduru"
            },
            {
                "lga_id": 284,
                "state_id": 17,
                "local_name": "Isiala Mbano"
            },
            {
                "lga_id": 286,
                "state_id": 17,
                "local_name": "Mbaitoli"
            },
            {
                "lga_id": 285,
                "state_id": 17,
                "local_name": "Isu"
            },
            {
                "lga_id": 270,
                "state_id": 16,
                "local_name": "Funakaye"
            },
            {
                "lga_id": 271,
                "state_id": 16,
                "local_name": "Gombe"
            },
            {
                "lga_id": 272,
                "state_id": 16,
                "local_name": "Kaltungo"
            },
            {
                "lga_id": 287,
                "state_id": 17,
                "local_name": "Ngor Okpala"
            },
            {
                "lga_id": 294,
                "state_id": 17,
                "local_name": "Okigwe"
            },
            {
                "lga_id": 289,
                "state_id": 17,
                "local_name": "Nkwerre"
            },
            {
                "lga_id": 288,
                "state_id": 17,
                "local_name": "Njaba"
            },
            {
                "lga_id": 296,
                "state_id": 17,
                "local_name": "Orsu"
            },
            {
                "lga_id": 297,
                "state_id": 17,
                "local_name": "Oru East"
            },
            {
                "lga_id": 293,
                "state_id": 17,
                "local_name": "Ohaji/Egbema"
            },
            {
                "lga_id": 298,
                "state_id": 17,
                "local_name": "Oru West"
            },
            {
                "lga_id": 295,
                "state_id": 17,
                "local_name": "Orlu"
            },
            {
                "lga_id": 291,
                "state_id": 17,
                "local_name": "Obowo"
            },
            {
                "lga_id": 299,
                "state_id": 17,
                "local_name": "Owerri Municipal"
            },
            {
                "lga_id": 300,
                "state_id": 17,
                "local_name": "Owerri North"
            },
            {
                "lga_id": 302,
                "state_id": 17,
                "local_name": "Onuimo"
            },
            {
                "lga_id": 301,
                "state_id": 17,
                "local_name": "Owerri West"
            },
            {
                "lga_id": 292,
                "state_id": 17,
                "local_name": "Oguta"
            },
            {
                "lga_id": 304,
                "state_id": 18,
                "local_name": "Biriniwa"
            },
            {
                "lga_id": 303,
                "state_id": 18,
                "local_name": "Babura"
            },
            {
                "lga_id": 290,
                "state_id": 17,
                "local_name": "Nwangele"
            },
            {
                "lga_id": 305,
                "state_id": 18,
                "local_name": "Birnin Kudu"
            },
            {
                "lga_id": 306,
                "state_id": 18,
                "local_name": "Buji"
            },
            {
                "lga_id": 307,
                "state_id": 18,
                "local_name": "Dutse"
            },
            {
                "lga_id": 309,
                "state_id": 18,
                "local_name": "Garki"
            },
            {
                "lga_id": 308,
                "state_id": 18,
                "local_name": "Gagarawa"
            },
            {
                "lga_id": 245,
                "state_id": 13,
                "local_name": "Oye"
            },
            {
                "lga_id": 312,
                "state_id": 18,
                "local_name": "Gwaram"
            },
            {
                "lga_id": 311,
                "state_id": 18,
                "local_name": "Guri"
            },
            {
                "lga_id": 315,
                "state_id": 18,
                "local_name": "Jahun"
            },
            {
                "lga_id": 313,
                "state_id": 18,
                "local_name": "Gwiwa"
            },
            {
                "lga_id": 314,
                "state_id": 18,
                "local_name": "Hadejia"
            },
            {
                "lga_id": 319,
                "state_id": 18,
                "local_name": "Kiyawa"
            },
            {
                "lga_id": 320,
                "state_id": 18,
                "local_name": "Kaugama"
            },
            {
                "lga_id": 324,
                "state_id": 18,
                "local_name": "Ringim"
            },
            {
                "lga_id": 322,
                "state_id": 18,
                "local_name": "Malam Madori"
            },
            {
                "lga_id": 325,
                "state_id": 18,
                "local_name": "Roni"
            },
            {
                "lga_id": 326,
                "state_id": 18,
                "local_name": "Sule Tankarkar"
            },
            {
                "lga_id": 321,
                "state_id": 18,
                "local_name": "Maigatari"
            },
            {
                "lga_id": 316,
                "state_id": 18,
                "local_name": "Kafin Hausa"
            },
            {
                "lga_id": 327,
                "state_id": 18,
                "local_name": "Taura"
            },
            {
                "lga_id": 330,
                "state_id": 19,
                "local_name": "Giwa"
            },
            {
                "lga_id": 323,
                "state_id": 18,
                "local_name": "Miga"
            },
            {
                "lga_id": 329,
                "state_id": 19,
                "local_name": "Chikun"
            },
            {
                "lga_id": 328,
                "state_id": 18,
                "local_name": "Yankwashi"
            },
            {
                "lga_id": 317,
                "state_id": 18,
                "local_name": "Kazaure"
            },
            {
                "lga_id": 332,
                "state_id": 19,
                "local_name": "Ikara"
            },
            {
                "lga_id": 333,
                "state_id": 19,
                "local_name": "Jaba"
            },
            {
                "lga_id": 331,
                "state_id": 19,
                "local_name": "Igabi"
            },
            {
                "lga_id": 335,
                "state_id": 19,
                "local_name": "Kachia"
            },
            {
                "lga_id": 334,
                "state_id": 19,
                "local_name": "Jema'a"
            },
            {
                "lga_id": 337,
                "state_id": 19,
                "local_name": "Kaduna South"
            },
            {
                "lga_id": 336,
                "state_id": 19,
                "local_name": "Kaduna North"
            },
            {
                "lga_id": 310,
                "state_id": 18,
                "local_name": "Gumel"
            },
            {
                "lga_id": 339,
                "state_id": 19,
                "local_name": "Kajuru"
            },
            {
                "lga_id": 341,
                "state_id": 19,
                "local_name": "Kauru"
            },
            {
                "lga_id": 340,
                "state_id": 19,
                "local_name": "Kaura"
            },
            {
                "lga_id": 342,
                "state_id": 19,
                "local_name": "Kubau"
            },
            {
                "lga_id": 338,
                "state_id": 19,
                "local_name": "Kagarko"
            },
            {
                "lga_id": 343,
                "state_id": 19,
                "local_name": "Kudan"
            },
            {
                "lga_id": 318,
                "state_id": 18,
                "local_name": "Kiri Kasamma"
            },
            {
                "lga_id": 344,
                "state_id": 19,
                "local_name": "Lere"
            },
            {
                "lga_id": 345,
                "state_id": 19,
                "local_name": "Makarfi"
            },
            {
                "lga_id": 347,
                "state_id": 19,
                "local_name": "Sanga"
            },
            {
                "lga_id": 348,
                "state_id": 19,
                "local_name": "Soba"
            },
            {
                "lga_id": 346,
                "state_id": 19,
                "local_name": "Sabon Gari"
            },
            {
                "lga_id": 350,
                "state_id": 19,
                "local_name": "Zaria"
            },
            {
                "lga_id": 352,
                "state_id": 20,
                "local_name": "Bagwai"
            },
            {
                "lga_id": 351,
                "state_id": 20,
                "local_name": "Albasu"
            },
            {
                "lga_id": 349,
                "state_id": 19,
                "local_name": "Zangon Kataf"
            },
            {
                "lga_id": 355,
                "state_id": 20,
                "local_name": "Bunkure"
            },
            {
                "lga_id": 358,
                "state_id": 20,
                "local_name": "Dawakin Kudu"
            },
            {
                "lga_id": 359,
                "state_id": 20,
                "local_name": "Dawakin Tofa"
            },
            {
                "lga_id": 360,
                "state_id": 20,
                "local_name": "Doguwa"
            },
            {
                "lga_id": 361,
                "state_id": 20,
                "local_name": "Fagge"
            },
            {
                "lga_id": 362,
                "state_id": 20,
                "local_name": "Gabasawa"
            },
            {
                "lga_id": 363,
                "state_id": 20,
                "local_name": "Garko"
            },
            {
                "lga_id": 364,
                "state_id": 20,
                "local_name": "Garun Mallam"
            },
            {
                "lga_id": 357,
                "state_id": 20,
                "local_name": "Dambatta"
            },
            {
                "lga_id": 365,
                "state_id": 20,
                "local_name": "Gaya"
            },
            {
                "lga_id": 366,
                "state_id": 20,
                "local_name": "Gezawa"
            },
            {
                "lga_id": 353,
                "state_id": 20,
                "local_name": "Bebeji"
            },
            {
                "lga_id": 367,
                "state_id": 20,
                "local_name": "Gwale"
            },
            {
                "lga_id": 368,
                "state_id": 20,
                "local_name": "Gwarzo"
            },
            {
                "lga_id": 369,
                "state_id": 20,
                "local_name": "Kabo"
            },
            {
                "lga_id": 370,
                "state_id": 20,
                "local_name": "Kano Municipal"
            },
            {
                "lga_id": 371,
                "state_id": 20,
                "local_name": "Karaye"
            },
            {
                "lga_id": 354,
                "state_id": 20,
                "local_name": "Bichi"
            },
            {
                "lga_id": 356,
                "state_id": 20,
                "local_name": "Dala"
            },
            {
                "lga_id": 373,
                "state_id": 20,
                "local_name": "Kiru"
            },
            {
                "lga_id": 372,
                "state_id": 20,
                "local_name": "Kibiya"
            },
            {
                "lga_id": 374,
                "state_id": 20,
                "local_name": "Kumbotso"
            },
            {
                "lga_id": 375,
                "state_id": 20,
                "local_name": "Kunchi"
            },
            {
                "lga_id": 376,
                "state_id": 20,
                "local_name": "Kura"
            },
            {
                "lga_id": 377,
                "state_id": 20,
                "local_name": "Madobi"
            },
            {
                "lga_id": 378,
                "state_id": 20,
                "local_name": "Makoda"
            },
            {
                "lga_id": 379,
                "state_id": 20,
                "local_name": "Minjibir"
            },
            {
                "lga_id": 380,
                "state_id": 20,
                "local_name": "Nasarawa"
            },
            {
                "lga_id": 381,
                "state_id": 20,
                "local_name": "Rano"
            },
            {
                "lga_id": 382,
                "state_id": 20,
                "local_name": "Rimin Gado"
            },
            {
                "lga_id": 383,
                "state_id": 20,
                "local_name": "Rogo"
            },
            {
                "lga_id": 384,
                "state_id": 20,
                "local_name": "Shanono"
            },
            {
                "lga_id": 385,
                "state_id": 20,
                "local_name": "Sumaila"
            },
            {
                "lga_id": 386,
                "state_id": 20,
                "local_name": "Takai"
            },
            {
                "lga_id": 387,
                "state_id": 20,
                "local_name": "Tarauni"
            },
            {
                "lga_id": 388,
                "state_id": 20,
                "local_name": "Tofa"
            },
            {
                "lga_id": 389,
                "state_id": 20,
                "local_name": "Tsanyawa"
            },
            {
                "lga_id": 391,
                "state_id": 20,
                "local_name": "Ungogo"
            },
            {
                "lga_id": 390,
                "state_id": 20,
                "local_name": "Tudun Wada"
            },
            {
                "lga_id": 392,
                "state_id": 20,
                "local_name": "Warawa"
            },
            {
                "lga_id": 395,
                "state_id": 21,
                "local_name": "Batsari"
            },
            {
                "lga_id": 393,
                "state_id": 20,
                "local_name": "Wudil"
            },
            {
                "lga_id": 394,
                "state_id": 21,
                "local_name": "Batagarawa"
            },
            {
                "lga_id": 397,
                "state_id": 21,
                "local_name": "Bindawa"
            },
            {
                "lga_id": 396,
                "state_id": 21,
                "local_name": "Baure"
            },
            {
                "lga_id": 398,
                "state_id": 21,
                "local_name": "Charanchi"
            },
            {
                "lga_id": 399,
                "state_id": 21,
                "local_name": "Dandume"
            },
            {
                "lga_id": 400,
                "state_id": 21,
                "local_name": "Danja"
            },
            {
                "lga_id": 401,
                "state_id": 21,
                "local_name": "Dan Musa"
            },
            {
                "lga_id": 403,
                "state_id": 21,
                "local_name": "Dutsi"
            },
            {
                "lga_id": 402,
                "state_id": 21,
                "local_name": "Daura"
            },
            {
                "lga_id": 404,
                "state_id": 21,
                "local_name": "Dutsin Ma"
            },
            {
                "lga_id": 405,
                "state_id": 21,
                "local_name": "Faskari"
            },
            {
                "lga_id": 406,
                "state_id": 21,
                "local_name": "Funtua"
            },
            {
                "lga_id": 407,
                "state_id": 21,
                "local_name": "Ingawa"
            },
            {
                "lga_id": 410,
                "state_id": 21,
                "local_name": "Kaita"
            },
            {
                "lga_id": 411,
                "state_id": 21,
                "local_name": "Kankara"
            },
            {
                "lga_id": 409,
                "state_id": 21,
                "local_name": "Kafur"
            },
            {
                "lga_id": 408,
                "state_id": 21,
                "local_name": "Jibia"
            },
            {
                "lga_id": 412,
                "state_id": 21,
                "local_name": "Kankia"
            },
            {
                "lga_id": 414,
                "state_id": 21,
                "local_name": "Kurfi"
            },
            {
                "lga_id": 413,
                "state_id": 21,
                "local_name": "Katsina"
            },
            {
                "lga_id": 415,
                "state_id": 21,
                "local_name": "Kusada"
            },
            {
                "lga_id": 417,
                "state_id": 21,
                "local_name": "Malumfashi"
            },
            {
                "lga_id": 418,
                "state_id": 21,
                "local_name": "Mani"
            },
            {
                "lga_id": 419,
                "state_id": 21,
                "local_name": "Mashi"
            },
            {
                "lga_id": 421,
                "state_id": 21,
                "local_name": "Musawa"
            },
            {
                "lga_id": 422,
                "state_id": 21,
                "local_name": "Rimi"
            },
            {
                "lga_id": 423,
                "state_id": 21,
                "local_name": "Sabuwa"
            },
            {
                "lga_id": 416,
                "state_id": 21,
                "local_name": "Mai'Adua"
            },
            {
                "lga_id": 424,
                "state_id": 21,
                "local_name": "Safana"
            },
            {
                "lga_id": 426,
                "state_id": 21,
                "local_name": "Zango"
            },
            {
                "lga_id": 427,
                "state_id": 22,
                "local_name": "Arewa Dandi"
            },
            {
                "lga_id": 429,
                "state_id": 22,
                "local_name": "Augie"
            },
            {
                "lga_id": 428,
                "state_id": 22,
                "local_name": "Argungu"
            },
            {
                "lga_id": 425,
                "state_id": 21,
                "local_name": "Sandamu"
            },
            {
                "lga_id": 431,
                "state_id": 22,
                "local_name": "Birnin Kebbi"
            },
            {
                "lga_id": 432,
                "state_id": 22,
                "local_name": "Bunza"
            },
            {
                "lga_id": 420,
                "state_id": 21,
                "local_name": "Matazuu"
            },
            {
                "lga_id": 430,
                "state_id": 22,
                "local_name": "Bagudo"
            },
            {
                "lga_id": 433,
                "state_id": 22,
                "local_name": "Dandi"
            },
            {
                "lga_id": 434,
                "state_id": 22,
                "local_name": "Fakai"
            },
            {
                "lga_id": 435,
                "state_id": 22,
                "local_name": "Gwandu"
            },
            {
                "lga_id": 436,
                "state_id": 22,
                "local_name": "Jega"
            },
            {
                "lga_id": 444,
                "state_id": 22,
                "local_name": "Wasagu/Danko"
            },
            {
                "lga_id": 438,
                "state_id": 22,
                "local_name": "Koko/Besse"
            },
            {
                "lga_id": 440,
                "state_id": 22,
                "local_name": "Ngaski"
            },
            {
                "lga_id": 445,
                "state_id": 22,
                "local_name": "Yauri"
            },
            {
                "lga_id": 443,
                "state_id": 22,
                "local_name": "Suru"
            },
            {
                "lga_id": 446,
                "state_id": 22,
                "local_name": "Zuru"
            },
            {
                "lga_id": 447,
                "state_id": 23,
                "local_name": "Ajaokuta"
            },
            {
                "lga_id": 448,
                "state_id": 23,
                "local_name": "Ankpa"
            },
            {
                "lga_id": 437,
                "state_id": 22,
                "local_name": "Kalgo"
            },
            {
                "lga_id": 450,
                "state_id": 23,
                "local_name": "Dekina"
            },
            {
                "lga_id": 449,
                "state_id": 23,
                "local_name": "Bassa"
            },
            {
                "lga_id": 451,
                "state_id": 23,
                "local_name": "Ibaji"
            },
            {
                "lga_id": 452,
                "state_id": 23,
                "local_name": "Idah"
            },
            {
                "lga_id": 453,
                "state_id": 23,
                "local_name": "Igalamela Odolu"
            },
            {
                "lga_id": 441,
                "state_id": 22,
                "local_name": "Sakaba"
            },
            {
                "lga_id": 442,
                "state_id": 22,
                "local_name": "Shanga"
            },
            {
                "lga_id": 439,
                "state_id": 22,
                "local_name": "Maiyama"
            },
            {
                "lga_id": 456,
                "state_id": 23,
                "local_name": "Kogi"
            },
            {
                "lga_id": 454,
                "state_id": 23,
                "local_name": "Ijumu"
            },
            {
                "lga_id": 460,
                "state_id": 23,
                "local_name": "Ogori/Mangongo"
            },
            {
                "lga_id": 462,
                "state_id": 23,
                "local_name": "Okene"
            },
            {
                "lga_id": 461,
                "state_id": 23,
                "local_name": "Okehi"
            },
            {
                "lga_id": 463,
                "state_id": 23,
                "local_name": "Olamaboro"
            },
            {
                "lga_id": 459,
                "state_id": 23,
                "local_name": "Ofu"
            },
            {
                "lga_id": 457,
                "state_id": 23,
                "local_name": "Lokoja"
            },
            {
                "lga_id": 464,
                "state_id": 23,
                "local_name": "Omala"
            },
            {
                "lga_id": 466,
                "state_id": 23,
                "local_name": "Yagba West"
            },
            {
                "lga_id": 465,
                "state_id": 23,
                "local_name": "Yagba East"
            },
            {
                "lga_id": 469,
                "state_id": 24,
                "local_name": "Ekiti"
            },
            {
                "lga_id": 470,
                "state_id": 24,
                "local_name": "Ifelodun"
            },
            {
                "lga_id": 467,
                "state_id": 24,
                "local_name": "Baruten"
            },
            {
                "lga_id": 468,
                "state_id": 24,
                "local_name": "Edu"
            },
            {
                "lga_id": 472,
                "state_id": 24,
                "local_name": "Ilorin South"
            },
            {
                "lga_id": 473,
                "state_id": 24,
                "local_name": "Ilorin West"
            },
            {
                "lga_id": 471,
                "state_id": 24,
                "local_name": "Ilorin East"
            },
            {
                "lga_id": 458,
                "state_id": 23,
                "local_name": "Mopa Muro"
            },
            {
                "lga_id": 455,
                "state_id": 23,
                "local_name": "Kabba/Bunu"
            },
            {
                "lga_id": 474,
                "state_id": 24,
                "local_name": "Irepodun"
            },
            {
                "lga_id": 476,
                "state_id": 24,
                "local_name": "Kaiama"
            },
            {
                "lga_id": 475,
                "state_id": 24,
                "local_name": "Isin"
            },
            {
                "lga_id": 477,
                "state_id": 24,
                "local_name": "Moro"
            },
            {
                "lga_id": 478,
                "state_id": 24,
                "local_name": "Offa"
            },
            {
                "lga_id": 479,
                "state_id": 24,
                "local_name": "Oke Ero"
            },
            {
                "lga_id": 480,
                "state_id": 24,
                "local_name": "Oyun"
            },
            {
                "lga_id": 481,
                "state_id": 24,
                "local_name": "Pategi"
            },
            {
                "lga_id": 488,
                "state_id": 25,
                "local_name": "Eti Osa"
            },
            {
                "lga_id": 487,
                "state_id": 25,
                "local_name": "Epe"
            },
            {
                "lga_id": 490,
                "state_id": 25,
                "local_name": "Ifako-Ijaiye"
            },
            {
                "lga_id": 483,
                "state_id": 25,
                "local_name": "Alimosho"
            },
            {
                "lga_id": 489,
                "state_id": 25,
                "local_name": "Ibeju-Lekki"
            },
            {
                "lga_id": 484,
                "state_id": 25,
                "local_name": "Amuwo-Odofin"
            },
            {
                "lga_id": 491,
                "state_id": 25,
                "local_name": "Ikeja"
            },
            {
                "lga_id": 482,
                "state_id": 25,
                "local_name": "Ajeromi-Ifelodun"
            },
            {
                "lga_id": 486,
                "state_id": 25,
                "local_name": "Badagry"
            },
            {
                "lga_id": 493,
                "state_id": 25,
                "local_name": "Kosofe"
            },
            {
                "lga_id": 494,
                "state_id": 25,
                "local_name": "Lagos Island"
            },
            {
                "lga_id": 492,
                "state_id": 25,
                "local_name": "Ikorodu"
            },
            {
                "lga_id": 495,
                "state_id": 25,
                "local_name": "Lagos Mainland"
            },
            {
                "lga_id": 496,
                "state_id": 25,
                "local_name": "Mushin"
            },
            {
                "lga_id": 497,
                "state_id": 25,
                "local_name": "Ojo"
            },
            {
                "lga_id": 499,
                "state_id": 25,
                "local_name": "Shomolu"
            },
            {
                "lga_id": 500,
                "state_id": 25,
                "local_name": "Surulere"
            },
            {
                "lga_id": 498,
                "state_id": 25,
                "local_name": "Oshodi-Isolo"
            },
            {
                "lga_id": 502,
                "state_id": 26,
                "local_name": "Doma"
            },
            {
                "lga_id": 485,
                "state_id": 25,
                "local_name": "Apapa"
            },
            {
                "lga_id": 503,
                "state_id": 26,
                "local_name": "Karu"
            },
            {
                "lga_id": 501,
                "state_id": 26,
                "local_name": "Awe"
            },
            {
                "lga_id": 504,
                "state_id": 26,
                "local_name": "Keana"
            },
            {
                "lga_id": 505,
                "state_id": 26,
                "local_name": "Keffi"
            },
            {
                "lga_id": 507,
                "state_id": 26,
                "local_name": "Lafia"
            },
            {
                "lga_id": 506,
                "state_id": 26,
                "local_name": "Kokona"
            },
            {
                "lga_id": 508,
                "state_id": 26,
                "local_name": "Nasarawa"
            },
            {
                "lga_id": 510,
                "state_id": 26,
                "local_name": "Obi"
            },
            {
                "lga_id": 511,
                "state_id": 26,
                "local_name": "Toto"
            },
            {
                "lga_id": 509,
                "state_id": 26,
                "local_name": "Nasarawa Eggon"
            },
            {
                "lga_id": 512,
                "state_id": 26,
                "local_name": "Wamba"
            },
            {
                "lga_id": 515,
                "state_id": 27,
                "local_name": "Borgu"
            },
            {
                "lga_id": 514,
                "state_id": 27,
                "local_name": "Bida"
            },
            {
                "lga_id": 516,
                "state_id": 27,
                "local_name": "Bosso"
            },
            {
                "lga_id": 513,
                "state_id": 27,
                "local_name": "Agwara"
            },
            {
                "lga_id": 517,
                "state_id": 27,
                "local_name": "Chanchaga"
            },
            {
                "lga_id": 518,
                "state_id": 27,
                "local_name": "Edati"
            },
            {
                "lga_id": 519,
                "state_id": 27,
                "local_name": "Gbako"
            },
            {
                "lga_id": 520,
                "state_id": 27,
                "local_name": "Gurara"
            },
            {
                "lga_id": 521,
                "state_id": 27,
                "local_name": "Katcha"
            },
            {
                "lga_id": 524,
                "state_id": 27,
                "local_name": "Lavun"
            },
            {
                "lga_id": 526,
                "state_id": 27,
                "local_name": "Mariga"
            },
            {
                "lga_id": 525,
                "state_id": 27,
                "local_name": "Magama"
            },
            {
                "lga_id": 522,
                "state_id": 27,
                "local_name": "Kontagora"
            },
            {
                "lga_id": 523,
                "state_id": 27,
                "local_name": "Lapai"
            },
            {
                "lga_id": 527,
                "state_id": 27,
                "local_name": "Mashegu"
            },
            {
                "lga_id": 529,
                "state_id": 27,
                "local_name": "Muya"
            },
            {
                "lga_id": 528,
                "state_id": 27,
                "local_name": "Mokwa"
            },
            {
                "lga_id": 530,
                "state_id": 27,
                "local_name": "Pailoro"
            },
            {
                "lga_id": 532,
                "state_id": 27,
                "local_name": "Rijau"
            },
            {
                "lga_id": 531,
                "state_id": 27,
                "local_name": "Rafi"
            },
            {
                "lga_id": 533,
                "state_id": 27,
                "local_name": "Shiroro"
            },
            {
                "lga_id": 534,
                "state_id": 27,
                "local_name": "Suleja"
            },
            {
                "lga_id": 535,
                "state_id": 27,
                "local_name": "Tafa"
            },
            {
                "lga_id": 538,
                "state_id": 28,
                "local_name": "Ado-Odo/Ota"
            },
            {
                "lga_id": 536,
                "state_id": 27,
                "local_name": "Wushishi"
            },
            {
                "lga_id": 537,
                "state_id": 28,
                "local_name": "Abeokuta South"
            },
            {
                "lga_id": 541,
                "state_id": 28,
                "local_name": "Ewekoro"
            },
            {
                "lga_id": 539,
                "state_id": 28,
                "local_name": "Egbado North"
            },
            {
                "lga_id": 540,
                "state_id": 28,
                "local_name": "Egbado South"
            },
            {
                "lga_id": 542,
                "state_id": 28,
                "local_name": "Ifo"
            },
            {
                "lga_id": 543,
                "state_id": 28,
                "local_name": "Ijebu East"
            },
            {
                "lga_id": 544,
                "state_id": 28,
                "local_name": "Ijebu North"
            },
            {
                "lga_id": 545,
                "state_id": 28,
                "local_name": "Ijebu North East"
            },
            {
                "lga_id": 546,
                "state_id": 28,
                "local_name": "Ijebu Ode"
            },
            {
                "lga_id": 547,
                "state_id": 28,
                "local_name": "Ikenne"
            },
            {
                "lga_id": 548,
                "state_id": 28,
                "local_name": "Imeko Afon"
            },
            {
                "lga_id": 550,
                "state_id": 28,
                "local_name": "Obafemi Owode"
            },
            {
                "lga_id": 549,
                "state_id": 28,
                "local_name": "Ipokia"
            },
            {
                "lga_id": 555,
                "state_id": 28,
                "local_name": "Shagamu"
            },
            {
                "lga_id": 554,
                "state_id": 28,
                "local_name": "Remo North"
            },
            {
                "lga_id": 556,
                "state_id": 29,
                "local_name": "Akoko North-West"
            },
            {
                "lga_id": 557,
                "state_id": 29,
                "local_name": "Akoko South-West"
            },
            {
                "lga_id": 560,
                "state_id": 29,
                "local_name": "Akure South"
            },
            {
                "lga_id": 559,
                "state_id": 29,
                "local_name": "Akure North"
            },
            {
                "lga_id": 562,
                "state_id": 29,
                "local_name": "Idanre"
            },
            {
                "lga_id": 561,
                "state_id": 29,
                "local_name": "Ese Odo"
            },
            {
                "lga_id": 558,
                "state_id": 29,
                "local_name": "Akoko South-East"
            },
            {
                "lga_id": 563,
                "state_id": 29,
                "local_name": "Ifedore"
            },
            {
                "lga_id": 564,
                "state_id": 29,
                "local_name": "Ilaje"
            },
            {
                "lga_id": 565,
                "state_id": 29,
                "local_name": "Ile Oluji/Okeigbo"
            },
            {
                "lga_id": 567,
                "state_id": 29,
                "local_name": "Odigbo"
            },
            {
                "lga_id": 568,
                "state_id": 29,
                "local_name": "Okitipupa"
            },
            {
                "lga_id": 566,
                "state_id": 29,
                "local_name": "Irele"
            },
            {
                "lga_id": 569,
                "state_id": 29,
                "local_name": "Ondo East"
            },
            {
                "lga_id": 553,
                "state_id": 28,
                "local_name": "Ogun Waterside"
            },
            {
                "lga_id": 571,
                "state_id": 29,
                "local_name": "Ose"
            },
            {
                "lga_id": 570,
                "state_id": 29,
                "local_name": "Ondo West"
            },
            {
                "lga_id": 573,
                "state_id": 30,
                "local_name": "Atakunmosa West"
            },
            {
                "lga_id": 576,
                "state_id": 30,
                "local_name": "Boluwaduro"
            },
            {
                "lga_id": 577,
                "state_id": 30,
                "local_name": "Boripe"
            },
            {
                "lga_id": 572,
                "state_id": 29,
                "local_name": "Owo"
            },
            {
                "lga_id": 578,
                "state_id": 30,
                "local_name": "Ede North"
            },
            {
                "lga_id": 575,
                "state_id": 30,
                "local_name": "Aiyedire"
            },
            {
                "lga_id": 574,
                "state_id": 30,
                "local_name": "Ayedaade"
            },
            {
                "lga_id": 551,
                "state_id": 28,
                "local_name": "Odeda"
            },
            {
                "lga_id": 552,
                "state_id": 28,
                "local_name": "Odogbolu"
            },
            {
                "lga_id": 580,
                "state_id": 30,
                "local_name": "Ife Central"
            },
            {
                "lga_id": 583,
                "state_id": 30,
                "local_name": "Ife South"
            },
            {
                "lga_id": 587,
                "state_id": 30,
                "local_name": "Ifelodun"
            },
            {
                "lga_id": 579,
                "state_id": 30,
                "local_name": "Ede South"
            },
            {
                "lga_id": 581,
                "state_id": 30,
                "local_name": "Ife East"
            },
            {
                "lga_id": 585,
                "state_id": 30,
                "local_name": "Ejigbo"
            },
            {
                "lga_id": 584,
                "state_id": 30,
                "local_name": "Egbedore"
            },
            {
                "lga_id": 588,
                "state_id": 30,
                "local_name": "Ila"
            },
            {
                "lga_id": 586,
                "state_id": 30,
                "local_name": "Ifedayo"
            },
            {
                "lga_id": 589,
                "state_id": 30,
                "local_name": "Ilesa East"
            },
            {
                "lga_id": 590,
                "state_id": 30,
                "local_name": "Ilesa West"
            },
            {
                "lga_id": 591,
                "state_id": 30,
                "local_name": "Irepodun"
            },
            {
                "lga_id": 596,
                "state_id": 30,
                "local_name": "Odo Otin"
            },
            {
                "lga_id": 594,
                "state_id": 30,
                "local_name": "Iwo"
            },
            {
                "lga_id": 595,
                "state_id": 30,
                "local_name": "Obokun"
            },
            {
                "lga_id": 593,
                "state_id": 30,
                "local_name": "Isokan"
            },
            {
                "lga_id": 592,
                "state_id": 30,
                "local_name": "Irewole"
            },
            {
                "lga_id": 582,
                "state_id": 30,
                "local_name": "Ife North"
            },
            {
                "lga_id": 597,
                "state_id": 30,
                "local_name": "Ola Oluwa"
            },
            {
                "lga_id": 598,
                "state_id": 30,
                "local_name": "Olorunda"
            },
            {
                "lga_id": 601,
                "state_id": 30,
                "local_name": "Osogbo"
            },
            {
                "lga_id": 599,
                "state_id": 30,
                "local_name": "Oriade"
            },
            {
                "lga_id": 600,
                "state_id": 30,
                "local_name": "Orolu"
            },
            {
                "lga_id": 607,
                "state_id": 31,
                "local_name": "Ibadan North-East"
            },
            {
                "lga_id": 603,
                "state_id": 31,
                "local_name": "Atiba"
            },
            {
                "lga_id": 602,
                "state_id": 31,
                "local_name": "Akinyele"
            },
            {
                "lga_id": 609,
                "state_id": 31,
                "local_name": "Ibadan South-East"
            },
            {
                "lga_id": 608,
                "state_id": 31,
                "local_name": "Ibadan North-West"
            },
            {
                "lga_id": 610,
                "state_id": 31,
                "local_name": "Ibadan South-West"
            },
            {
                "lga_id": 611,
                "state_id": 31,
                "local_name": "Ibarapa Central"
            },
            {
                "lga_id": 604,
                "state_id": 31,
                "local_name": "Atisbo"
            },
            {
                "lga_id": 606,
                "state_id": 31,
                "local_name": "Ibadan North"
            },
            {
                "lga_id": 613,
                "state_id": 31,
                "local_name": "Ibarapa North"
            },
            {
                "lga_id": 612,
                "state_id": 31,
                "local_name": "Ibarapa East"
            },
            {
                "lga_id": 614,
                "state_id": 31,
                "local_name": "Ido"
            },
            {
                "lga_id": 617,
                "state_id": 31,
                "local_name": "Itesiwaju"
            },
            {
                "lga_id": 616,
                "state_id": 31,
                "local_name": "Iseyin"
            },
            {
                "lga_id": 605,
                "state_id": 31,
                "local_name": "Egbeda"
            },
            {
                "lga_id": 618,
                "state_id": 31,
                "local_name": "Iwajowa"
            },
            {
                "lga_id": 615,
                "state_id": 31,
                "local_name": "Irepo"
            },
            {
                "lga_id": 620,
                "state_id": 31,
                "local_name": "Lagelu"
            },
            {
                "lga_id": 619,
                "state_id": 31,
                "local_name": "Kajola"
            },
            {
                "lga_id": 621,
                "state_id": 31,
                "local_name": "Ogbomosho North"
            },
            {
                "lga_id": 628,
                "state_id": 31,
                "local_name": "Ori Ire"
            },
            {
                "lga_id": 623,
                "state_id": 31,
                "local_name": "Ogo Oluwa"
            },
            {
                "lga_id": 629,
                "state_id": 31,
                "local_name": "Oyo"
            },
            {
                "lga_id": 625,
                "state_id": 31,
                "local_name": "Oluyole"
            },
            {
                "lga_id": 627,
                "state_id": 31,
                "local_name": "Orelope"
            },
            {
                "lga_id": 631,
                "state_id": 31,
                "local_name": "Saki East"
            },
            {
                "lga_id": 632,
                "state_id": 31,
                "local_name": "Saki West"
            },
            {
                "lga_id": 630,
                "state_id": 31,
                "local_name": "Oyo East"
            },
            {
                "lga_id": 626,
                "state_id": 31,
                "local_name": "Ona Ara"
            },
            {
                "lga_id": 634,
                "state_id": 32,
                "local_name": "Barkin Ladi"
            },
            {
                "lga_id": 633,
                "state_id": 31,
                "local_name": "Surulere"
            },
            {
                "lga_id": 635,
                "state_id": 32,
                "local_name": "Bassa"
            },
            {
                "lga_id": 636,
                "state_id": 32,
                "local_name": "Jos East"
            },
            {
                "lga_id": 637,
                "state_id": 32,
                "local_name": "Jos North"
            },
            {
                "lga_id": 638,
                "state_id": 32,
                "local_name": "Jos South"
            },
            {
                "lga_id": 624,
                "state_id": 31,
                "local_name": "Olorunsogo"
            },
            {
                "lga_id": 622,
                "state_id": 31,
                "local_name": "Ogbomosho South"
            },
            {
                "lga_id": 640,
                "state_id": 32,
                "local_name": "Kanke"
            },
            {
                "lga_id": 639,
                "state_id": 32,
                "local_name": "Kanam"
            },
            {
                "lga_id": 641,
                "state_id": 32,
                "local_name": "Langtang South"
            },
            {
                "lga_id": 647,
                "state_id": 32,
                "local_name": "Riyom"
            },
            {
                "lga_id": 644,
                "state_id": 32,
                "local_name": "Mikang"
            },
            {
                "lga_id": 648,
                "state_id": 32,
                "local_name": "Shendam"
            },
            {
                "lga_id": 643,
                "state_id": 32,
                "local_name": "Mangu"
            },
            {
                "lga_id": 650,
                "state_id": 33,
                "local_name": "Ahoada East"
            },
            {
                "lga_id": 651,
                "state_id": 33,
                "local_name": "Ahoada West"
            },
            {
                "lga_id": 649,
                "state_id": 32,
                "local_name": "Wase"
            },
            {
                "lga_id": 653,
                "state_id": 33,
                "local_name": "Andoni"
            },
            {
                "lga_id": 652,
                "state_id": 33,
                "local_name": "Akuku-Toru"
            },
            {
                "lga_id": 642,
                "state_id": 32,
                "local_name": "Langtang North"
            },
            {
                "lga_id": 654,
                "state_id": 33,
                "local_name": "Asari-Toru"
            },
            {
                "lga_id": 655,
                "state_id": 33,
                "local_name": "Bonny"
            },
            {
                "lga_id": 646,
                "state_id": 32,
                "local_name": "Qua'an Pan"
            },
            {
                "lga_id": 658,
                "state_id": 33,
                "local_name": "Emohua"
            },
            {
                "lga_id": 656,
                "state_id": 33,
                "local_name": "Degema"
            },
            {
                "lga_id": 659,
                "state_id": 33,
                "local_name": "Etche"
            },
            {
                "lga_id": 657,
                "state_id": 33,
                "local_name": "Eleme"
            },
            {
                "lga_id": 662,
                "state_id": 33,
                "local_name": "Khana"
            },
            {
                "lga_id": 660,
                "state_id": 33,
                "local_name": "Gokana"
            },
            {
                "lga_id": 661,
                "state_id": 33,
                "local_name": "Ikwerre"
            },
            {
                "lga_id": 645,
                "state_id": 32,
                "local_name": "Pankshin"
            },
            {
                "lga_id": 663,
                "state_id": 33,
                "local_name": "Obio/Akpor"
            },
            {
                "lga_id": 664,
                "state_id": 33,
                "local_name": "Ogba/Egbema/Ndoni"
            },
            {
                "lga_id": 665,
                "state_id": 33,
                "local_name": "Ogu/Bolo"
            },
            {
                "lga_id": 666,
                "state_id": 33,
                "local_name": "Okrika"
            },
            {
                "lga_id": 667,
                "state_id": 33,
                "local_name": "Omumma"
            },
            {
                "lga_id": 671,
                "state_id": 33,
                "local_name": "Tai"
            },
            {
                "lga_id": 668,
                "state_id": 33,
                "local_name": "Opobo/Nkoro"
            },
            {
                "lga_id": 670,
                "state_id": 33,
                "local_name": "Port Harcourt"
            },
            {
                "lga_id": 669,
                "state_id": 33,
                "local_name": "Oyigbo"
            },
            {
                "lga_id": 672,
                "state_id": 34,
                "local_name": "Bodinga"
            },
            {
                "lga_id": 673,
                "state_id": 34,
                "local_name": "Dange Shuni"
            },
            {
                "lga_id": 674,
                "state_id": 34,
                "local_name": "Gada"
            },
            {
                "lga_id": 675,
                "state_id": 34,
                "local_name": "Goronyo"
            },
            {
                "lga_id": 676,
                "state_id": 34,
                "local_name": "Gudu"
            },
            {
                "lga_id": 677,
                "state_id": 34,
                "local_name": "Gadabawa"
            },
            {
                "lga_id": 678,
                "state_id": 34,
                "local_name": "Illela"
            },
            {
                "lga_id": 679,
                "state_id": 34,
                "local_name": "Isa"
            },
            {
                "lga_id": 680,
                "state_id": 34,
                "local_name": "Kebbe"
            },
            {
                "lga_id": 681,
                "state_id": 34,
                "local_name": "Kware"
            },
            {
                "lga_id": 682,
                "state_id": 34,
                "local_name": "Rabah"
            },
            {
                "lga_id": 685,
                "state_id": 34,
                "local_name": "Silame"
            },
            {
                "lga_id": 686,
                "state_id": 34,
                "local_name": "Sokoto North"
            },
            {
                "lga_id": 683,
                "state_id": 34,
                "local_name": "Sabon Birni"
            },
            {
                "lga_id": 687,
                "state_id": 34,
                "local_name": "Sokoto South"
            },
            {
                "lga_id": 684,
                "state_id": 34,
                "local_name": "Shagari"
            },
            {
                "lga_id": 688,
                "state_id": 34,
                "local_name": "Tambuwal"
            },
            {
                "lga_id": 689,
                "state_id": 34,
                "local_name": "Tangaza"
            },
            {
                "lga_id": 691,
                "state_id": 34,
                "local_name": "Wamako"
            },
            {
                "lga_id": 690,
                "state_id": 34,
                "local_name": "Tureta"
            },
            {
                "lga_id": 692,
                "state_id": 34,
                "local_name": "Wurno"
            },
            {
                "lga_id": 693,
                "state_id": 34,
                "local_name": "Yabo"
            },
            {
                "lga_id": 694,
                "state_id": 35,
                "local_name": "Bali"
            },
            {
                "lga_id": 695,
                "state_id": 35,
                "local_name": "Donga"
            },
            {
                "lga_id": 696,
                "state_id": 35,
                "local_name": "Gashaka"
            },
            {
                "lga_id": 704,
                "state_id": 35,
                "local_name": "Takum"
            },
            {
                "lga_id": 699,
                "state_id": 35,
                "local_name": "Jalingo"
            },
            {
                "lga_id": 703,
                "state_id": 35,
                "local_name": "Sardauna"
            },
            {
                "lga_id": 705,
                "state_id": 35,
                "local_name": "Ussa"
            },
            {
                "lga_id": 701,
                "state_id": 35,
                "local_name": "Kurmi"
            },
            {
                "lga_id": 702,
                "state_id": 35,
                "local_name": "Lau"
            },
            {
                "lga_id": 706,
                "state_id": 35,
                "local_name": "Wukari"
            },
            {
                "lga_id": 709,
                "state_id": 36,
                "local_name": "Bursari"
            },
            {
                "lga_id": 707,
                "state_id": 35,
                "local_name": "Yorro"
            },
            {
                "lga_id": 708,
                "state_id": 35,
                "local_name": "Zing"
            },
            {
                "lga_id": 710,
                "state_id": 36,
                "local_name": "Damaturu"
            },
            {
                "lga_id": 711,
                "state_id": 36,
                "local_name": "Fika"
            },
            {
                "lga_id": 697,
                "state_id": 35,
                "local_name": "Gassol"
            },
            {
                "lga_id": 712,
                "state_id": 36,
                "local_name": "Fune"
            },
            {
                "lga_id": 713,
                "state_id": 36,
                "local_name": "Geidam"
            },
            {
                "lga_id": 698,
                "state_id": 35,
                "local_name": "Ibi"
            },
            {
                "lga_id": 716,
                "state_id": 36,
                "local_name": "Jakusko"
            },
            {
                "lga_id": 700,
                "state_id": 35,
                "local_name": "Karim Lamido"
            },
            {
                "lga_id": 715,
                "state_id": 36,
                "local_name": "Gulani"
            },
            {
                "lga_id": 714,
                "state_id": 36,
                "local_name": "Gujba"
            },
            {
                "lga_id": 720,
                "state_id": 36,
                "local_name": "Nguru"
            },
            {
                "lga_id": 721,
                "state_id": 36,
                "local_name": "Potiskum"
            },
            {
                "lga_id": 722,
                "state_id": 36,
                "local_name": "Tarmuwa"
            },
            {
                "lga_id": 723,
                "state_id": 36,
                "local_name": "Yunusari"
            },
            {
                "lga_id": 724,
                "state_id": 36,
                "local_name": "Yusufari"
            },
            {
                "lga_id": 725,
                "state_id": 37,
                "local_name": "Bakura"
            },
            {
                "lga_id": 719,
                "state_id": 36,
                "local_name": "Nangere"
            },
            {
                "lga_id": 726,
                "state_id": 37,
                "local_name": "Birnin Magaji/Kiyaw"
            },
            {
                "lga_id": 727,
                "state_id": 37,
                "local_name": "Bukkuyum"
            },
            {
                "lga_id": 728,
                "state_id": 37,
                "local_name": "Bungudu"
            },
            {
                "lga_id": 729,
                "state_id": 37,
                "local_name": "Gummi"
            },
            {
                "lga_id": 730,
                "state_id": 37,
                "local_name": "Gusau"
            },
            {
                "lga_id": 734,
                "state_id": 37,
                "local_name": "Shinkafi"
            },
            {
                "lga_id": 733,
                "state_id": 37,
                "local_name": "Maru"
            },
            {
                "lga_id": 732,
                "state_id": 37,
                "local_name": "Maradun"
            },
            {
                "lga_id": 731,
                "state_id": 37,
                "local_name": "Kauranamoda"
            },
            {
                "lga_id": 717,
                "state_id": 36,
                "local_name": "Karasuwa"
            },
            {
                "lga_id": 718,
                "state_id": 36,
                "local_name": "Machina"
            },
            {
                "lga_id": 736,
                "state_id": 37,
                "local_name": "Tsafe"
            },
            {
                "lga_id": 735,
                "state_id": 37,
                "local_name": "Talata Mafara"
            },
            {
                "lga_id": 737,
                "state_id": 37,
                "local_name": "Zurmi"
            }
        ];

        var state = [
            {
                "state_id": 8,
                "state": "Borno",
                "state_code": "BO"
            },
            {
                "state_id": 4,
                "state": "Anambra",
                "state_code": "AN"
            },
            {
                "state_id": 9,
                "state": "Cross River",
                "state_code": "CR"
            },
            {
                "state_id": 10,
                "state": "Delta",
                "state_code": "DE"
            },
            {
                "state_id": 11,
                "state": "Ebonyi",
                "state_code": "EB"
            },
            {
                "state_id": 12,
                "state": "Edo",
                "state_code": "ED"
            },
            {
                "state_id": 13,
                "state": "Ekiti",
                "state_code": "EK"
            },
            {
                "state_id": 15,
                "state": "FCT Abuja",
                "state_code": "FC"
            },
            {
                "state_id": 2,
                "state": "Adamawa",
                "state_code": "AD"
            },
            {
                "state_id": 14,
                "state": "Enugu",
                "state_code": "EN"
            },
            {
                "state_id": 17,
                "state": "Imo",
                "state_code": "IM"
            },
            {
                "state_id": 16,
                "state": "Gombe",
                "state_code": "GO"
            },
            {
                "state_id": 3,
                "state": "Akwa Ibom",
                "state_code": "AK"
            },
            {
                "state_id": 21,
                "state": "Katsina",
                "state_code": "KT"
            },
            {
                "state_id": 20,
                "state": "Kano",
                "state_code": "KN"
            },
            {
                "state_id": 6,
                "state": "Bayelsa",
                "state_code": "BY"
            },
            {
                "state_id": 23,
                "state": "Kogi",
                "state_code": "KO"
            },
            {
                "state_id": 22,
                "state": "Kebbi",
                "state_code": "KE"
            },
            {
                "state_id": 25,
                "state": "Lagos",
                "state_code": "LA"
            },
            {
                "state_id": 24,
                "state": "Kwara",
                "state_code": "KW"
            },
            {
                "state_id": 18,
                "state": "Jigawa",
                "state_code": "JI"
            },
            {
                "state_id": 7,
                "state": "Benue",
                "state_code": "BE"
            },
            {
                "state_id": 5,
                "state": "Bauchi",
                "state_code": "BA"
            },
            {
                "state_id": 19,
                "state": "Kaduna",
                "state_code": "KD"
            },
            {
                "state_id": 26,
                "state": "Nasarawa",
                "state_code": "NA"
            },
            {
                "state_id": 27,
                "state": "Niger",
                "state_code": "NI"
            },
            {
                "state_id": 28,
                "state": "Ogun",
                "state_code": "OG"
            },
            {
                "state_id": 29,
                "state": "Ondo",
                "state_code": "ON"
            },
            {
                "state_id": 30,
                "state": "Osun",
                "state_code": "OS"
            },
            {
                "state_id": 31,
                "state": "Oyo",
                "state_code": "OY"
            },
            {
                "state_id": 32,
                "state": "Plateau",
                "state_code": "PL"
            },
            {
                "state_id": 33,
                "state": "Rivers",
                "state_code": "RI"
            },
            {
                "state_id": 34,
                "state": "Sokoto",
                "state_code": "SO"
            },
            {
                "state_id": 1,
                "state": "Abia",
                "state_code": "AB"
            },
            {
                "state_id": 35,
                "state": "Taraba",
                "state_code": "TA"
            },
            {
                "state_id": 37,
                "state": "Zamfara",
                "state_code": "ZA"
            },
            {
                "state_id": 36,
                "state": "Yobe",
                "state_code": "YO"
            }
        ]

        var colors = [
            {
                "vehicle_color_id": "1",
                "color": "Purple",
                "description": "Purple"
            },
            {
                "vehicle_color_id": "2",
                "color": "Black",
                "description": "Black"
            },
            {
                "vehicle_color_id": "3",
                "color": "White",
                "description": "White"
            },
            {
                "vehicle_color_id": "4",
                "color": "Red",
                "description": "Red"
            },
            {
                "vehicle_color_id": "5",
                "color": "Blue",
                "description": "Blue"
            },
            {
                "vehicle_color_id": "6",
                "color": "Gray",
                "description": "Gray"
            },
            {
                "vehicle_color_id": "7",
                "color": "Silver",
                "description": "Silver"
            },
            {
                "vehicle_color_id": "8",
                "color": "Light brown",
                "description": "light brown"
            },
            {
                "vehicle_color_id": "9",
                "color": "Med.dark blue",
                "description": "Med.dark blue"
            },
            {
                "vehicle_color_id": "10",
                "color": "Med.dark gray",
                "description": "Med.dark gray"
            },
            {
                "vehicle_color_id": "11",
                "color": "Med.Red",
                "description": "Med.Red"
            },
            {
                "vehicle_color_id": "12",
                "color": "Orange",
                "description": "Orange"
            },
            {
                "vehicle_color_id": "13",
                "color": "Brown",
                "description": "Brown"
            },
            {
                "vehicle_color_id": "14",
                "color": "Green",
                "description": "Green"
            },
            {
                "vehicle_color_id": "15",
                "color": "Light Green",
                "description": "Light Green"
            },
            {
                "vehicle_color_id": "16",
                "color": "Violet",
                "description": "Violet"
            },
            {
                "vehicle_color_id": "17",
                "color": "Pink",
                "description": "Pink"
            },
            {
                "vehicle_color_id": "18",
                "color": "Gold",
                "description": "Gold"
            },
            {
                "vehicle_color_id": "19",
                "color": "Bronze",
                "description": "Bronze"
            },
            {
                "vehicle_color_id": "20",
                "color": "Spice",
                "description": "Spice"
            },
            {
                "vehicle_color_id": "21",
                "color": "Carrot",
                "description": "Carrot"
            },
            {
                "vehicle_color_id": "22",
                "color": "Rose pink",
                "description": "Rose pink"
            },
            {
                "vehicle_color_id": "23",
                "color": "Punch",
                "description": "Punch"
            },
            {
                "vehicle_color_id": "24",
                "color": "Lemon",
                "description": "Lemon"
            },
            {
                "vehicle_color_id": "25",
                "color": "Cream",
                "description": "Cream"
            },
            {
                "vehicle_color_id": "26",
                "color": "Royal",
                "description": "Royal"
            },
            {
                "vehicle_color_id": "27",
                "color": "Grape",
                "description": "Grape"
            },
            {
                "vehicle_color_id": "28",
                "color": "Navy",
                "description": "Navy"
            },
            {
                "vehicle_color_id": "29",
                "color": "Navy blue",
                "description": "Navy blue"
            },
            {
                "vehicle_color_id": "30",
                "color": "Army",
                "description": "Army"
            },
            {
                "vehicle_color_id": "31",
                "color": "Chocolate",
                "description": "Chocolate"
            },
            {
                "vehicle_color_id": "32",
                "color": "Charcoal",
                "description": "Charcoal"
            },
            {
                "vehicle_color_id": "33",
                "color": "Lime",
                "description": "Lime"
            },
            {
                "vehicle_color_id": "34",
                "color": "Ash",
                "description": "Ash"
            },
            {
                "vehicle_color_id": "35",
                "color": "Creamy",
                "description": "Creamy"
            },
            {
                "vehicle_color_id": "36",
                "color": "Wine",
                "description": "Wine"
            },
            {
                "vehicle_color_id": "37",
                "color": "Custom",
                "description": "Custom"
            },
            {
                "vehicle_color_id": "38",
                "color": "Yellow",
                "description": "Yellow"
            },
            {
                "vehicle_color_id": "39",
                "color": "Burgundy",
                "description": "Burgundy"
            },
            {
                "vehicle_color_id": "40",
                "color": "Grey",
                "description": "Grey"
            }
        ]

        var vehicle_make = [
            {
                "vehicle_make_id": 1,
                "make": "Toyota",
                "description": "Toyota",
                "niip_id": "48"
            },
            {
                "vehicle_make_id": 2,
                "make": "Nissan",
                "description": "Nissan",
                "niip_id": "35"
            },
            {
                "vehicle_make_id": 3,
                "make": "Honda",
                "description": "Honda",
                "niip_id": "18"
            },
            {
                "vehicle_make_id": 4,
                "make": "Ford",
                "description": "Ford",
                "niip_id": "15"
            },
            {
                "vehicle_make_id": 5,
                "make": "Volkswagen",
                "description": "Volkswagen",
                "niip_id": "49"
            },
            {
                "vehicle_make_id": 6,
                "make": "Mercedes Benz",
                "description": "Benz",
                "niip_id": "30"
            },
            {
                "vehicle_make_id": 7,
                "make": "Chevorlet",
                "description": "Chevrolet"
            },
            {
                "vehicle_make_id": 8,
                "make": "Chrysler",
                "description": "Chrysler",
                "niip_id": "10"
            },
            {
                "vehicle_make_id": 9,
                "make": "Pontiac",
                "description": "Pontiac",
                "niip_id": "40"
            },
            {
                "vehicle_make_id": 10,
                "make": "Cadillac",
                "description": "Cadillac",
                "niip_id": "8"
            },
            {
                "vehicle_make_id": 11,
                "make": "Dodge",
                "description": "Dodge",
                "niip_id": "13"
            },
            {
                "vehicle_make_id": 12,
                "make": "Tesla",
                "description": "Tesla inc.",
                "niip_id": "1461"
            },
            {
                "vehicle_make_id": 13,
                "make": "Acura",
                "description": "Acura",
                "niip_id": "1"
            },
            {
                "vehicle_make_id": 14,
                "make": "Lexus",
                "description": "Lexus",
                "niip_id": "27"
            },
            {
                "vehicle_make_id": 15,
                "make": "Mazda",
                "description": "Mazda",
                "niip_id": "29"
            },
            {
                "vehicle_make_id": 16,
                "make": "Kia",
                "description": "Kia",
                "niip_id": "25"
            },
            {
                "vehicle_make_id": 17,
                "make": "Hyundai",
                "description": "Hyundai",
                "niip_id": "20"
            },
            {
                "vehicle_make_id": 18,
                "make": "Peugot",
                "description": "Peugot",
                "niip_id": "37"
            },
            {
                "vehicle_make_id": 19,
                "make": "GMC",
                "description": "GMC",
                "niip_id": "17"
            },
            {
                "vehicle_make_id": 20,
                "make": "Audi",
                "description": "Audi",
                "niip_id": "4"
            },
            {
                "vehicle_make_id": 21,
                "make": "Suzuki",
                "description": "Suzuki",
                "niip_id": "47"
            },
            {
                "vehicle_make_id": 22,
                "make": "Daihatsu",
                "description": "Daihatsu",
                "niip_id": "12"
            },
            {
                "vehicle_make_id": 23,
                "make": "Mitsubishi",
                "description": "Mitsubishi",
                "niip_id": "34"
            },
            {
                "vehicle_make_id": 24,
                "make": "Range Rover",
                "description": "Range Rover",
                "niip_id": "74"
            },
            {
                "vehicle_make_id": 25,
                "make": "Bajaj",
                "description": "Bajaj",
                "niip_id": "55"
            },
            {
                "vehicle_make_id": 26,
                "make": "BMW",
                "description": "BMW",
                "niip_id": "6"
            },
            {
                "vehicle_make_id": 27,
                "make": "Boxer",
                "description": "Boxer",
                "niip_id": "55"
            },
            {
                "vehicle_make_id": 28,
                "make": "Changan",
                "description": "Changan",
                "niip_id": "79"
            },
            {
                "vehicle_make_id": 29,
                "make": "Citrion",
                "description": "Citrion"
            },
            {
                "vehicle_make_id": 30,
                "make": "DAF",
                "description": "DAF",
                "niip_id": "73"
            },
            {
                "vehicle_make_id": 31,
                "make": "Datsun",
                "description": "Datsun",
                "niip_id": "139"
            },
            {
                "vehicle_make_id": 32,
                "make": "Tata",
                "description": "Tata",
                "niip_id": "96"
            },
            {
                "vehicle_make_id": 33,
                "make": "FOTON",
                "description": "FOTON",
                "niip_id": "98"
            },
            {
                "vehicle_make_id": 34,
                "make": "HERO",
                "description": "HERO"
            },
            {
                "vehicle_make_id": 35,
                "make": "Howo",
                "description": "Howo",
                "niip_id": "124"
            },
            {
                "vehicle_make_id": 36,
                "make": "Infiniti",
                "description": "Infiniti",
                "niip_id": "21"
            },
            {
                "vehicle_make_id": 37,
                "make": "Isuzu",
                "description": "Isuzu",
                "niip_id": "22"
            },
            {
                "vehicle_make_id": 38,
                "make": "Iveco",
                "description": "iveco",
                "niip_id": "56"
            },
            {
                "vehicle_make_id": 39,
                "make": "JAC",
                "description": "Jack",
                "niip_id": "127"
            },
            {
                "vehicle_make_id": 40,
                "make": "JIN BEI",
                "description": "JIN BEI"
            },
            {
                "vehicle_make_id": 41,
                "make": "JINCHENG",
                "description": "JINCHENG"
            },
            {
                "vehicle_make_id": 42,
                "make": "Land Rover",
                "description": "Land Rover",
                "niip_id": "26"
            },
            {
                "vehicle_make_id": 43,
                "make": "LEYLAND",
                "description": "LEYLAND"
            },
            {
                "vehicle_make_id": 44,
                "make": "Liberty",
                "description": "Liberty",
                "niip_id": "80"
            },
            {
                "vehicle_make_id": 45,
                "make": "LIFAN",
                "description": "LIFAN"
            },
            {
                "vehicle_make_id": 46,
                "make": "Mack",
                "description": "Mack",
                "niip_id": "81"
            },
            {
                "vehicle_make_id": 48,
                "make": "MAN",
                "description": "MAN",
                "niip_id": "72"
            },
            {
                "vehicle_make_id": 49,
                "make": "MINI",
                "description": "MINI",
                "niip_id": "33"
            },
            {
                "vehicle_make_id": 50,
                "make": "Opel",
                "description": "Opel",
                "niip_id": "53"
            },
            {
                "vehicle_make_id": 51,
                "make": "Piaggio",
                "description": "Piaggio",
                "niip_id": "64"
            },
            {
                "vehicle_make_id": 52,
                "make": "Proton",
                "description": "Proton",
                "niip_id": "212"
            },
            {
                "vehicle_make_id": 53,
                "make": "Qinqui",
                "description": "Qinqui",
                "niip_id": "154"
            },
            {
                "vehicle_make_id": 54,
                "make": "Renault",
                "description": "Renault",
                "niip_id": "42"
            },
            {
                "vehicle_make_id": 55,
                "make": "Range",
                "description": "Range",
                "niip_id": "74"
            },
            {
                "vehicle_make_id": 56,
                "make": "SEAT",
                "description": "SEAT",
                "niip_id": "63"
            },
            {
                "vehicle_make_id": 57,
                "make": "Scoda",
                "description": "Scoda",
                "niip_id": "52"
            },
            {
                "vehicle_make_id": 58,
                "make": "Skoda",
                "description": "Skoda",
                "niip_id": "52"
            },
            {
                "vehicle_make_id": 59,
                "make": "TVS",
                "description": "TVS",
                "niip_id": "86"
            },
            {
                "vehicle_make_id": 60,
                "make": "Vauxhall",
                "description": "Vauxhall",
                "niip_id": "156"
            },
            {
                "vehicle_make_id": 61,
                "make": "Yamaha",
                "description": "Yamaha",
                "niip_id": "102"
            },
            {
                "vehicle_make_id": 62,
                "make": "Volvo",
                "description": "Volvo",
                "niip_id": "50"
            },
            {
                "vehicle_make_id": 63,
                "make": "Hijet",
                "description": "Hijet"
            },
            {
                "vehicle_make_id": 64,
                "make": "Mercury",
                "description": "Mercury",
                "niip_id": "31"
            },
            {
                "vehicle_make_id": 65,
                "make": "Citroen",
                "description": "Citroen",
                "niip_id": "120"
            },
            {
                "vehicle_make_id": 66,
                "make": "GAC",
                "description": "GAC",
                "niip_id": "95"
            },
            {
                "vehicle_make_id": 67,
                "make": "Jeep",
                "description": "Jeep",
                "niip_id": "24"
            },
            {
                "vehicle_make_id": 68,
                "make": "Shacman",
                "description": "Shacman",
                "niip_id": "265"
            },
            {
                "vehicle_make_id": 69,
                "make": "MG 550",
                "description": "MG 550"
            },
            {
                "vehicle_make_id": 70,
                "make": "Porsche",
                "description": "Porsche",
                "niip_id": "41"
            },
            {
                "vehicle_make_id": 71,
                "make": "Zhontong",
                "description": "Zhontong",
                "niip_id": "280"
            },
            {
                "vehicle_make_id": 72,
                "make": "Irriza",
                "description": "Irriza"
            },
            {
                "vehicle_make_id": 73,
                "make": "Marcopolo",
                "description": "Marcopolo",
                "niip_id": "415"
            },
            {
                "vehicle_make_id": 74,
                "make": "Yutong",
                "description": "Yutong",
                "niip_id": "185"
            },
            {
                "vehicle_make_id": 75,
                "make": "Subaru",
                "description": "Subaru",
                "niip_id": "46"
            },
            {
                "vehicle_make_id": 76,
                "make": "Scania",
                "description": "Scania",
                "niip_id": "89"
            },
            {
                "vehicle_make_id": 77,
                "make": "Fiat",
                "description": "Fiat",
                "niip_id": "82"
            },
            {
                "vehicle_make_id": 78,
                "make": "SONLINK",
                "description": "SONLINK",
                "niip_id": "55"
            },
            {
                "vehicle_make_id": 79,
                "make": "Aston Martin",
                "description": "Aston Martin",
                "niip_id": "1454"
            },
            {
                "vehicle_make_id": 80,
                "make": "Jaguar",
                "description": "Jaguar",
                "niip_id": "23"
            },
            {
                "vehicle_make_id": 81,
                "make": "Maserati",
                "description": "Maserati",
                "niip_id": "209"
            },
            {
                "vehicle_make_id": 82,
                "make": "Rolls Royce",
                "description": "Rolls Royce",
                "niip_id": "85"
            },
            {
                "vehicle_make_id": 83,
                "make": "Buell (Ebr)",
                "description": "Buell (Ebr)"
            },
            {
                "vehicle_make_id": 84,
                "make": "Jialing",
                "description": "Jialing"
            },
            {
                "vehicle_make_id": 85,
                "make": "Freightliner",
                "description": "Freightliner",
                "niip_id": "148"
            },
            {
                "vehicle_make_id": 86,
                "make": "Bugatti",
                "description": "Bugatti"
            },
            {
                "vehicle_make_id": 87,
                "make": "Acg",
                "description": "Acg"
            },
            {
                "vehicle_make_id": 88,
                "make": "Latitude",
                "description": "Latitude"
            },
            {
                "vehicle_make_id": 89,
                "make": "Country Coach",
                "description": "Country Coach"
            },
            {
                "vehicle_make_id": 90,
                "make": "Lotus",
                "description": "Lotus"
            },
            {
                "vehicle_make_id": 91,
                "make": "Buick",
                "description": "Buick",
                "niip_id": "7"
            },
            {
                "vehicle_make_id": 92,
                "make": "Holden",
                "description": "Holden",
                "niip_id": "299"
            },
            {
                "vehicle_make_id": 93,
                "make": "Club Car",
                "description": "Club Car"
            },
            {
                "vehicle_make_id": 94,
                "make": "Golf Cars Of Arizona",
                "description": "Golf Cars Of Arizona"
            },
            {
                "vehicle_make_id": 95,
                "make": "Navistar",
                "description": "Navistar",
                "niip_id": "174"
            },
            {
                "vehicle_make_id": 96,
                "make": "Alfa Romeo",
                "description": "Alfa Romeo"
            },
            {
                "vehicle_make_id": 97,
                "make": "Chairiot Mobility",
                "description": "Chairiot Mobility"
            },
            {
                "vehicle_make_id": 98,
                "make": "Peterbilt",
                "description": "Peterbilt",
                "niip_id": "176"
            },
            {
                "vehicle_make_id": 99,
                "make": "Ram",
                "description": "Ram"
            },
            {
                "vehicle_make_id": 100,
                "make": "Lancia",
                "description": "Lancia",
                "niip_id": "187"
            },
            {
                "vehicle_make_id": 101,
                "make": "Mad Dawg",
                "description": "Mad Dawg"
            },
            {
                "vehicle_make_id": 102,
                "make": "Lamborghini",
                "description": "Lamborghini",
                "niip_id": "302"
            },
            {
                "vehicle_make_id": 103,
                "make": "Smart",
                "description": "Smart",
                "niip_id": "275"
            },
            {
                "vehicle_make_id": 104,
                "make": "Blue Bird",
                "description": "Blue Bird",
                "niip_id": "266"
            },
            {
                "vehicle_make_id": 105,
                "make": "Optima",
                "description": "Optima"
            },
            {
                "vehicle_make_id": 106,
                "make": "Nabi",
                "description": "Nabi"
            },
            {
                "vehicle_make_id": 107,
                "make": "PeteS Golf Carts",
                "description": "PeteS Golf Carts"
            },
            {
                "vehicle_make_id": 108,
                "make": "Hino",
                "description": "Hino",
                "niip_id": "227"
            },
            {
                "vehicle_make_id": 109,
                "make": "Oshkosh",
                "description": "Oshkosh"
            },
            {
                "vehicle_make_id": 110,
                "make": "Ud",
                "description": "Ud"
            },
            {
                "vehicle_make_id": 111,
                "make": "Owosso",
                "description": "Owosso"
            },
            {
                "vehicle_make_id": 112,
                "make": "Great Dane Trailers",
                "description": "Great Dane Trailers"
            },
            {
                "vehicle_make_id": 113,
                "make": "Caterpillar",
                "description": "Caterpillar"
            },
            {
                "vehicle_make_id": 114,
                "make": "Ic Bus",
                "description": "Ic Bus"
            },
            {
                "vehicle_make_id": 115,
                "make": "Geely",
                "description": "Geely",
                "niip_id": "84"
            },
            {
                "vehicle_make_id": 116,
                "make": "Mitsubishi Fuso",
                "description": "Mitsubishi Fuso",
                "niip_id": "34"
            },
            {
                "vehicle_make_id": 117,
                "make": "Kenworth",
                "description": "Kenworth",
                "niip_id": "191"
            },
            {
                "vehicle_make_id": 118,
                "make": "Maybach",
                "description": "Maybach",
                "niip_id": "364"
            },
            {
                "vehicle_make_id": 119,
                "make": "John Thomas",
                "description": "John Thomas",
                "niip_id": "318"
            },
            {
                "vehicle_make_id": 120,
                "make": "Thomas Built",
                "description": "Thomas Built",
                "niip_id": "446"
            },
            {
                "vehicle_make_id": 121,
                "make": "Thomas Grinding",
                "description": "Thomas Grinding",
                "niip_id": "446"
            },
            {
                "vehicle_make_id": 122,
                "make": "Morgan",
                "description": "Morgan"
            },
            {
                "vehicle_make_id": 123,
                "make": "Altec",
                "description": "Altec"
            },
            {
                "vehicle_make_id": 124,
                "make": "Beckenridge",
                "description": "Beckenridge"
            },
            {
                "vehicle_make_id": 125,
                "make": "Cruiser Rv",
                "description": "Cruiser Rv"
            },
            {
                "vehicle_make_id": 126,
                "make": "Drv",
                "description": "Drv"
            },
            {
                "vehicle_make_id": 127,
                "make": "Crane Carrier",
                "description": "Crane Carrier",
                "niip_id": "167"
            },
            {
                "vehicle_make_id": 128,
                "make": "Defiance",
                "description": "Defiance"
            },
            {
                "vehicle_make_id": 129,
                "make": "Dark Warrior",
                "description": "Dark Warrior"
            },
            {
                "vehicle_make_id": 130,
                "make": "American Teardrop",
                "description": "American Teardrop"
            },
            {
                "vehicle_make_id": 131,
                "make": "Darkside Chariots",
                "description": "Darkside Chariots"
            },
            {
                "vehicle_make_id": 132,
                "make": "Darwin Motorcycle",
                "description": "Darwin Motorcycle"
            },
            {
                "vehicle_make_id": 133,
                "make": "Dast Tanks",
                "description": "Dast Tanks"
            },
            {
                "vehicle_make_id": 134,
                "make": "Delaware Valley Cycl",
                "description": "Delaware Valley Cycle"
            },
            {
                "vehicle_make_id": 135,
                "make": "Delco Trailers",
                "description": "Delco Trailers"
            },
            {
                "vehicle_make_id": 136,
                "make": "Delta Oilfield Tank ",
                "description": "Delta Oilfield Tank Co."
            },
            {
                "vehicle_make_id": 137,
                "make": "Delta Waseca Mini",
                "description": "Delta Waseca Mini"
            },
            {
                "vehicle_make_id": 138,
                "make": "Demons Cycle",
                "description": "Demons Cycle"
            },
            {
                "vehicle_make_id": 139,
                "make": "Demountable Concepts",
                "description": "Demountable Concepts"
            },
            {
                "vehicle_make_id": 140,
                "make": "Absolutely Wild Ranc",
                "description": "Absolutely Wild Ranch"
            },
            {
                "vehicle_make_id": 141,
                "make": "Ac Propulsion",
                "description": "Ac Propulsion"
            },
            {
                "vehicle_make_id": 142,
                "make": "Activity Trailer",
                "description": "Activity Trailer"
            },
            {
                "vehicle_make_id": 143,
                "make": "Activmo Auto",
                "description": "Activmo Auto"
            },
            {
                "vehicle_make_id": 144,
                "make": "Admiral Trailers",
                "description": "Admiral Trailers"
            },
            {
                "vehicle_make_id": 145,
                "make": "Bee Trailers",
                "description": "Bee Trailers"
            },
            {
                "vehicle_make_id": 146,
                "make": "Beijing North Huade",
                "description": "Beijing North Huade Neoplan Bus"
            },
            {
                "vehicle_make_id": 147,
                "make": "Beiqi Foton Motor / ",
                "description": "Beiqi Foton Motor / Beijing Bus Branch"
            },
            {
                "vehicle_make_id": 148,
                "make": "Fulu",
                "description": "Fulu"
            },
            {
                "vehicle_make_id": 149,
                "make": "Apache Golf Cars",
                "description": "Apache Golf Cars"
            },
            {
                "vehicle_make_id": 150,
                "make": "Duralast Trailers",
                "description": "Duralast Trailers"
            },
            {
                "vehicle_make_id": 151,
                "make": "Morris garage",
                "description": "Morris garage"
            },
            {
                "vehicle_make_id": 152,
                "make": "Scion",
                "description": "Scion",
                "niip_id": "151"
            },
            {
                "vehicle_make_id": 153,
                "make": "SAIC",
                "description": "SAIC",
                "niip_id": "1462"
            },
            {
                "vehicle_make_id": 154,
                "make": "Kawasaki",
                "description": "Kawasaki",
                "niip_id": "109"
            },
            {
                "vehicle_make_id": 155,
                "make": "Cherokee",
                "description": "Cherokee",
                "niip_id": "1493"
            },
            {
                "vehicle_make_id": 156,
                "make": "Tekken",
                "description": "Tekken",
                "niip_id": "303"
            },
            {
                "vehicle_make_id": 157,
                "make": "Ashok Leyland",
                "description": "Ashok Leyland",
                "niip_id": "70"
            },
            {
                "vehicle_make_id": 158,
                "make": "KTM",
                "description": "KTM",
                "niip_id": "254"
            },
            {
                "vehicle_make_id": 159,
                "make": "Qlink",
                "description": "Qlink",
                "niip_id": "77"
            }
        ]

        var vehicle_models = [
            {
                "_id": "65a918eb42dc804a210c46f0",
                "vehicle_model_id": 1,
                "vehicle_make_id": 1,
                "model": "Camry",
                "amount": "15000",
                "description": "Camry",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:40:11.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c46f1",
                "vehicle_model_id": 2,
                "vehicle_make_id": 1,
                "model": "Corolla",
                "amount": "15000",
                "description": "Corolla",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:40:26.000Z",
                "niip_id": "589"
            },
            {
                "_id": "65a918eb42dc804a210c46f2",
                "vehicle_model_id": 3,
                "vehicle_make_id": 2,
                "model": "Murano",
                "amount": "15000",
                "description": "Murano",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:08:21.000Z",
                "niip_id": "457"
            },
            {
                "_id": "65a918eb42dc804a210c46f3",
                "vehicle_model_id": 4,
                "vehicle_make_id": 3,
                "model": "Accord",
                "amount": "15000",
                "description": "Accord",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:32:24.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c46f4",
                "vehicle_model_id": 5,
                "vehicle_make_id": 3,
                "model": "Civic",
                "amount": "15000",
                "description": "Civic",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:32:51.000Z",
                "niip_id": "248"
            },
            {
                "_id": "65a918eb42dc804a210c46f5",
                "vehicle_model_id": 6,
                "vehicle_make_id": 5,
                "model": "Passat",
                "amount": "15000",
                "description": "Passat",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:02:15.000Z",
                "niip_id": "628"
            },
            {
                "_id": "65a918eb42dc804a210c46f6",
                "vehicle_model_id": 8,
                "vehicle_make_id": 4,
                "model": "Fusion",
                "amount": "15000",
                "description": "Fusion",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:59:56.000Z",
                "niip_id": "721"
            },
            {
                "_id": "65a918eb42dc804a210c46f7",
                "vehicle_model_id": 10,
                "vehicle_make_id": 4,
                "model": "Escape",
                "amount": "15000",
                "description": "Escape",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:00:20.000Z",
                "niip_id": "200"
            },
            {
                "_id": "65a918eb42dc804a210c46f8",
                "vehicle_model_id": 11,
                "vehicle_make_id": 1,
                "model": "4Runner",
                "amount": "15000",
                "description": "4Runner",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:40:50.000Z",
                "niip_id": "584"
            },
            {
                "_id": "65a918eb42dc804a210c46f9",
                "vehicle_model_id": 12,
                "vehicle_make_id": 1,
                "model": "Avalon",
                "amount": "15000",
                "description": "Avalon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:41:09.000Z",
                "niip_id": "585"
            },
            {
                "_id": "65a918eb42dc804a210c46fa",
                "vehicle_model_id": 13,
                "vehicle_make_id": 1,
                "model": "Cammy",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:25:21.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c46fb",
                "vehicle_model_id": 14,
                "vehicle_make_id": 1,
                "model": "C-HR",
                "amount": "15000",
                "description": "C-HR",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:41:48.000Z",
                "niip_id": "3646"
            },
            {
                "_id": "65a918eb42dc804a210c46fc",
                "vehicle_model_id": 15,
                "vehicle_make_id": 1,
                "model": "Highlander",
                "amount": "15000",
                "description": "Highlander",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:42:13.000Z",
                "niip_id": "592"
            },
            {
                "_id": "65a918eb42dc804a210c46fd",
                "vehicle_model_id": 16,
                "vehicle_make_id": 1,
                "model": "Land Cruiser",
                "amount": "15000",
                "description": "Land Cruiser",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:43:00.000Z",
                "niip_id": "593"
            },
            {
                "_id": "65a918eb42dc804a210c46fe",
                "vehicle_model_id": 17,
                "vehicle_make_id": 1,
                "model": "Miral",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:43:46.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c46ff",
                "vehicle_model_id": 18,
                "vehicle_make_id": 1,
                "model": "Prius",
                "amount": "15000",
                "description": "Prius",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:44:16.000Z",
                "niip_id": "601"
            },
            {
                "_id": "65a918eb42dc804a210c4700",
                "vehicle_model_id": 19,
                "vehicle_make_id": 1,
                "model": "Prius Prime",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:46:03.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4701",
                "vehicle_model_id": 20,
                "vehicle_make_id": 1,
                "model": "Rav4",
                "amount": "15000",
                "description": "Rav4",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:47:10.000Z",
                "niip_id": "602"
            },
            {
                "_id": "65a918eb42dc804a210c4702",
                "vehicle_model_id": 21,
                "vehicle_make_id": 1,
                "model": "Sequoia",
                "amount": "15000",
                "description": "Sequoia",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:48:42.000Z",
                "niip_id": "603"
            },
            {
                "_id": "65a918eb42dc804a210c4703",
                "vehicle_model_id": 22,
                "vehicle_make_id": 1,
                "model": "Sienna",
                "amount": "15000",
                "description": "Sienna",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:48:57.000Z",
                "niip_id": "604"
            },
            {
                "_id": "65a918eb42dc804a210c4704",
                "vehicle_model_id": 23,
                "vehicle_make_id": 1,
                "model": "Supra",
                "amount": "15000",
                "description": "Supra",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:50:52.000Z",
                "niip_id": "607"
            },
            {
                "_id": "65a918eb42dc804a210c4705",
                "vehicle_model_id": 24,
                "vehicle_make_id": 1,
                "model": "Tacoma",
                "amount": "20000",
                "description": "Tacoma",
                "created_by": "",
                "created_dt": "2023-01-30T09:51:12.000Z",
                "niip_id": "609"
            },
            {
                "_id": "65a918eb42dc804a210c4706",
                "vehicle_model_id": 25,
                "vehicle_make_id": 1,
                "model": "Tundra",
                "amount": "20000",
                "description": "Tundra",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:53:12.000Z",
                "niip_id": "611"
            },
            {
                "_id": "65a918eb42dc804a210c4707",
                "vehicle_model_id": 26,
                "vehicle_make_id": 1,
                "model": "Yaris",
                "amount": "15000",
                "description": "Yaris",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:53:34.000Z",
                "niip_id": "744"
            },
            {
                "_id": "65a918eb42dc804a210c4708",
                "vehicle_model_id": 27,
                "vehicle_make_id": 1,
                "model": "Camry Solara",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:53:52.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c4709",
                "vehicle_model_id": 28,
                "vehicle_make_id": 1,
                "model": "FJ Cruiser",
                "amount": "15000",
                "description": "FJ Cruiser",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:54:37.000Z",
                "niip_id": "1290"
            },
            {
                "_id": "65a918eb42dc804a210c470a",
                "vehicle_model_id": 29,
                "vehicle_make_id": 1,
                "model": "Matrix",
                "amount": "15000",
                "description": "Matrix",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:54:49.000Z",
                "niip_id": "594"
            },
            {
                "_id": "65a918eb42dc804a210c470b",
                "vehicle_model_id": 30,
                "vehicle_make_id": 1,
                "model": "Venza",
                "amount": "15000",
                "description": "Venza",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:55:05.000Z",
                "niip_id": "692"
            },
            {
                "_id": "65a918eb42dc804a210c470c",
                "vehicle_model_id": 31,
                "vehicle_make_id": 1,
                "model": "86",
                "amount": "15000",
                "description": "86",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:57:22.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c470d",
                "vehicle_model_id": 32,
                "vehicle_make_id": 3,
                "model": "Acty",
                "amount": "20000",
                "description": "Acty",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:33:41.000Z",
                "niip_id": "1529"
            },
            {
                "_id": "65a918eb42dc804a210c470e",
                "vehicle_model_id": 33,
                "vehicle_make_id": 3,
                "model": "Amaze",
                "amount": "15000",
                "description": "Amaze",
                "created_by": "",
                "created_dt": "2023-01-30T10:34:23.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c470f",
                "vehicle_model_id": 34,
                "vehicle_make_id": 3,
                "model": "Avencier",
                "amount": "15000",
                "description": "Avencier",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:35:24.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4710",
                "vehicle_model_id": 35,
                "vehicle_make_id": 3,
                "model": "Ballade",
                "amount": "15000",
                "description": "Ballade",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:36:09.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4711",
                "vehicle_model_id": 36,
                "vehicle_make_id": 3,
                "model": "Brio",
                "amount": "15000",
                "description": "Brio",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:36:41.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4712",
                "vehicle_model_id": 37,
                "vehicle_make_id": 3,
                "model": "BR-V",
                "amount": "15000",
                "description": "BR-V",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:37:09.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4713",
                "vehicle_model_id": 38,
                "vehicle_make_id": 3,
                "model": "City",
                "amount": "15000",
                "description": "City",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:37:33.000Z",
                "niip_id": "754"
            },
            {
                "_id": "65a918eb42dc804a210c4714",
                "vehicle_model_id": 39,
                "vehicle_make_id": 3,
                "model": "Fit",
                "amount": "15000",
                "description": "Fit",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:38:03.000Z",
                "niip_id": "1256"
            },
            {
                "_id": "65a918eb42dc804a210c4715",
                "vehicle_model_id": 40,
                "vehicle_make_id": 3,
                "model": "Clarity",
                "amount": "15000",
                "description": "Clarity",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:38:43.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4716",
                "vehicle_model_id": 41,
                "vehicle_make_id": 3,
                "model": "Crider",
                "amount": "15000",
                "description": "Crider",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:39:23.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4717",
                "vehicle_model_id": 42,
                "vehicle_make_id": 3,
                "model": "CR-V",
                "amount": "15000",
                "description": "CR-V",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:40:00.000Z",
                "niip_id": "249"
            },
            {
                "_id": "65a918eb42dc804a210c4718",
                "vehicle_model_id": 43,
                "vehicle_make_id": 3,
                "model": "E",
                "amount": "15000",
                "description": "e",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:41:10.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4719",
                "vehicle_model_id": 44,
                "vehicle_make_id": 3,
                "model": "Elysion",
                "amount": "15000",
                "description": "Elysion",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:41:49.000Z",
                "niip_id": "2272"
            },
            {
                "_id": "65a918eb42dc804a210c471a",
                "vehicle_model_id": 45,
                "vehicle_make_id": 3,
                "model": "Hit",
                "amount": "15000",
                "description": "Hit",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:43:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c471b",
                "vehicle_model_id": 46,
                "vehicle_make_id": 3,
                "model": "Fit Shuttle",
                "amount": "15000",
                "description": "Fit Shuttle",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:25.000Z",
                "niip_id": "1256"
            },
            {
                "_id": "65a918eb42dc804a210c471c",
                "vehicle_model_id": 47,
                "vehicle_make_id": 3,
                "model": "HRV",
                "amount": "15000",
                "description": "HRV",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:43:43.000Z",
                "niip_id": "910"
            },
            {
                "_id": "65a918eb42dc804a210c471d",
                "vehicle_model_id": 48,
                "vehicle_make_id": 3,
                "model": "Insight",
                "amount": "15000",
                "description": "Insight",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:44:21.000Z",
                "niip_id": "252"
            },
            {
                "_id": "65a918eb42dc804a210c471e",
                "vehicle_model_id": 49,
                "vehicle_make_id": 3,
                "model": "Jade",
                "amount": "15000",
                "description": "Jade",
                "created_by": "",
                "created_dt": "2023-01-30T10:45:22.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c471f",
                "vehicle_model_id": 50,
                "vehicle_make_id": 3,
                "model": "Legend",
                "amount": "15000",
                "description": "Legend",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:46:36.000Z",
                "niip_id": "1020"
            },
            {
                "_id": "65a918eb42dc804a210c4720",
                "vehicle_model_id": 51,
                "vehicle_make_id": 3,
                "model": "Mobilio",
                "amount": "15000",
                "description": "Mobilio",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:47:18.000Z",
                "niip_id": "2538"
            },
            {
                "_id": "65a918eb42dc804a210c4721",
                "vehicle_model_id": 52,
                "vehicle_make_id": 3,
                "model": "NSX",
                "amount": "15000",
                "description": "NSX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:48:12.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4722",
                "vehicle_model_id": 53,
                "vehicle_make_id": 3,
                "model": "N-One",
                "amount": "15000",
                "description": "N-One",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:49:15.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4723",
                "vehicle_model_id": 54,
                "vehicle_make_id": 3,
                "model": "N-Van",
                "amount": "20000",
                "description": "N-Van",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:49:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4724",
                "vehicle_model_id": 55,
                "vehicle_make_id": 3,
                "model": "N-GWN",
                "amount": "15000",
                "description": "NGWN",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:50:20.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4725",
                "vehicle_model_id": 56,
                "vehicle_make_id": 3,
                "model": "Odyssey",
                "amount": "15000",
                "description": "Odyssey",
                "created_by": "",
                "created_dt": "2023-01-30T10:50:57.000Z",
                "niip_id": "253"
            },
            {
                "_id": "65a918eb42dc804a210c4726",
                "vehicle_model_id": 57,
                "vehicle_make_id": 3,
                "model": "Passort",
                "amount": "15000",
                "description": "Passort",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:51:56.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4727",
                "vehicle_model_id": 58,
                "vehicle_make_id": 3,
                "model": "Pilot",
                "amount": "15000",
                "description": "Pilot",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:52:29.000Z",
                "niip_id": "255"
            },
            {
                "_id": "65a918eb42dc804a210c4728",
                "vehicle_model_id": 59,
                "vehicle_make_id": 3,
                "model": "Ridgeline",
                "amount": "20000",
                "description": "Ridgeline",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:53:04.000Z",
                "niip_id": "789"
            },
            {
                "_id": "65a918eb42dc804a210c4729",
                "vehicle_model_id": 60,
                "vehicle_make_id": 3,
                "model": "S660",
                "amount": "15000",
                "description": "S660",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:53:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c472a",
                "vehicle_model_id": 61,
                "vehicle_make_id": 3,
                "model": "StepWGN",
                "amount": "20000",
                "description": "StegWGN",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:54:26.000Z",
                "niip_id": "3739"
            },
            {
                "_id": "65a918eb42dc804a210c472b",
                "vehicle_model_id": 62,
                "vehicle_make_id": 3,
                "model": "UR-V",
                "amount": "15000",
                "description": "UR-V",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:55:09.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c472c",
                "vehicle_model_id": 63,
                "vehicle_make_id": 3,
                "model": "WR-V",
                "amount": "15000",
                "description": "WR-V",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:55:58.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c472d",
                "vehicle_model_id": 64,
                "vehicle_make_id": 13,
                "model": "CDX",
                "amount": "15000",
                "description": "CDX",
                "created_by": "",
                "created_dt": "2023-01-30T09:19:31.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c472e",
                "vehicle_model_id": 65,
                "vehicle_make_id": 13,
                "model": "ILX",
                "amount": "15000",
                "description": "ILX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:21:16.000Z",
                "niip_id": "800"
            },
            {
                "_id": "65a918eb42dc804a210c472f",
                "vehicle_model_id": 66,
                "vehicle_make_id": 13,
                "model": "MDX",
                "amount": "15000",
                "description": "MDX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:21:36.000Z",
                "niip_id": "4"
            },
            {
                "_id": "65a918eb42dc804a210c4730",
                "vehicle_model_id": 67,
                "vehicle_make_id": 13,
                "model": "RDX",
                "amount": "15000",
                "description": "RDX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:23:02.000Z",
                "niip_id": "803"
            },
            {
                "_id": "65a918eb42dc804a210c4731",
                "vehicle_model_id": 68,
                "vehicle_make_id": 13,
                "model": "RLX",
                "amount": "15000",
                "description": "RLX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:23:45.000Z",
                "niip_id": "804"
            },
            {
                "_id": "65a918eb42dc804a210c4732",
                "vehicle_model_id": 69,
                "vehicle_make_id": 13,
                "model": "TLX",
                "amount": "15000",
                "description": "TLX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:24:10.000Z",
                "niip_id": "807"
            },
            {
                "_id": "65a918eb42dc804a210c4733",
                "vehicle_model_id": 70,
                "vehicle_make_id": 13,
                "model": "SLX",
                "amount": "15000",
                "description": "SLX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:24:48.000Z",
                "niip_id": "8"
            },
            {
                "_id": "65a918eb42dc804a210c4734",
                "vehicle_model_id": 71,
                "vehicle_make_id": 13,
                "model": "ZDX",
                "amount": "15000",
                "description": "ZDX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:26:01.000Z",
                "niip_id": "810"
            },
            {
                "_id": "65a918eb42dc804a210c4735",
                "vehicle_model_id": 72,
                "vehicle_make_id": 2,
                "model": "370Z",
                "amount": "15000",
                "description": "370Z",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:09:48.000Z",
                "niip_id": "1286"
            },
            {
                "_id": "65a918eb42dc804a210c4736",
                "vehicle_model_id": 73,
                "vehicle_make_id": 2,
                "model": "Altima",
                "amount": "15000",
                "description": "Altima",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:09:52.000Z",
                "niip_id": "452"
            },
            {
                "_id": "65a918eb42dc804a210c4737",
                "vehicle_model_id": 74,
                "vehicle_make_id": 2,
                "model": "Armada",
                "amount": "15000",
                "description": "Armada",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:10:53.000Z",
                "niip_id": "733"
            },
            {
                "_id": "65a918eb42dc804a210c4738",
                "vehicle_model_id": 75,
                "vehicle_make_id": 2,
                "model": "Frontier",
                "amount": "20000",
                "description": "Frontier",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:10:45.000Z",
                "niip_id": "454"
            },
            {
                "_id": "65a918eb42dc804a210c4739",
                "vehicle_model_id": 76,
                "vehicle_make_id": 2,
                "model": "GT-R",
                "amount": "15000",
                "description": "GT-R",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:11:26.000Z",
                "niip_id": "1799"
            },
            {
                "_id": "65a918eb42dc804a210c473a",
                "vehicle_model_id": 77,
                "vehicle_make_id": 2,
                "model": "Kick",
                "amount": "15000",
                "description": "Kick",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:11:32.000Z",
                "niip_id": "3768"
            },
            {
                "_id": "65a918eb42dc804a210c473b",
                "vehicle_model_id": 78,
                "vehicle_make_id": 2,
                "model": "Leaf",
                "amount": "15000",
                "description": "Leaf",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:12:03.000Z",
                "niip_id": "3622"
            },
            {
                "_id": "65a918eb42dc804a210c473c",
                "vehicle_model_id": 79,
                "vehicle_make_id": 2,
                "model": "Maximam",
                "amount": "15000",
                "description": "Maximam",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:12:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c473d",
                "vehicle_model_id": 80,
                "vehicle_make_id": 2,
                "model": "NV Cargo",
                "amount": "20000",
                "description": "NV Cargo",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:12:35.000Z",
                "niip_id": "2506"
            },
            {
                "_id": "65a918eb42dc804a210c473e",
                "vehicle_model_id": 81,
                "vehicle_make_id": 2,
                "model": "NV Compact Cargo",
                "amount": "20000",
                "description": "NV Compact Cargo",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:13:10.000Z",
                "niip_id": "2506"
            },
            {
                "_id": "65a918eb42dc804a210c473f",
                "vehicle_model_id": 82,
                "vehicle_make_id": 2,
                "model": "NV Passanger",
                "amount": "20000",
                "description": "NV Passanger",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:13:14.000Z",
                "niip_id": "2506"
            },
            {
                "_id": "65a918eb42dc804a210c4740",
                "vehicle_model_id": 83,
                "vehicle_make_id": 2,
                "model": "Pathifinder",
                "amount": "15000",
                "description": "Pathifinder",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:14:00.000Z",
                "niip_id": "459"
            },
            {
                "_id": "65a918eb42dc804a210c4741",
                "vehicle_model_id": 84,
                "vehicle_make_id": 2,
                "model": "Rogue",
                "amount": "15000",
                "description": "Rogue",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:14:25.000Z",
                "niip_id": "1282"
            },
            {
                "_id": "65a918eb42dc804a210c4742",
                "vehicle_model_id": 85,
                "vehicle_make_id": 2,
                "model": "Rogue Sport",
                "amount": "15000",
                "description": "Rogue Sport",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:14:44.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4743",
                "vehicle_model_id": 86,
                "vehicle_make_id": 2,
                "model": "Sentra",
                "amount": "15000",
                "description": "Sentra",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:14:57.000Z",
                "niip_id": "463"
            },
            {
                "_id": "65a918eb42dc804a210c4744",
                "vehicle_model_id": 87,
                "vehicle_make_id": 2,
                "model": "Titan",
                "amount": "20000",
                "description": "Titan",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:15:16.000Z",
                "niip_id": "951"
            },
            {
                "_id": "65a918eb42dc804a210c4745",
                "vehicle_model_id": 88,
                "vehicle_make_id": 2,
                "model": "Versa",
                "amount": "15000",
                "description": "Versa",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:15:42.000Z",
                "niip_id": "1456"
            },
            {
                "_id": "65a918eb42dc804a210c4746",
                "vehicle_model_id": 89,
                "vehicle_make_id": 2,
                "model": "Versa Note",
                "amount": "15000",
                "description": "Versa note",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:16:19.000Z",
                "niip_id": "1456"
            },
            {
                "_id": "65a918eb42dc804a210c4747",
                "vehicle_model_id": 90,
                "vehicle_make_id": 2,
                "model": "350Z",
                "amount": "15000",
                "description": "350Z",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:16:52.000Z",
                "niip_id": "451"
            },
            {
                "_id": "65a918eb42dc804a210c4748",
                "vehicle_model_id": 91,
                "vehicle_make_id": 2,
                "model": "Cube",
                "amount": "15000",
                "description": "Cube",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:17:11.000Z",
                "niip_id": "2038"
            },
            {
                "_id": "65a918eb42dc804a210c4749",
                "vehicle_model_id": 92,
                "vehicle_make_id": 2,
                "model": "Juke",
                "amount": "15000",
                "description": "Juke",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:17:43.000Z",
                "niip_id": "1648"
            },
            {
                "_id": "65a918eb42dc804a210c474a",
                "vehicle_model_id": 93,
                "vehicle_make_id": 2,
                "model": "NV 3500",
                "amount": "20000",
                "description": "NV 3500",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:18:09.000Z",
                "niip_id": "3836"
            },
            {
                "_id": "65a918eb42dc804a210c474b",
                "vehicle_model_id": 94,
                "vehicle_make_id": 2,
                "model": "NV 200",
                "amount": "20000",
                "description": "NV 200",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:18:55.000Z",
                "niip_id": "2506"
            },
            {
                "_id": "65a918eb42dc804a210c474c",
                "vehicle_model_id": 95,
                "vehicle_make_id": 2,
                "model": "Quest",
                "amount": "15000",
                "description": "Quest",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:18:49.000Z",
                "niip_id": "462"
            },
            {
                "_id": "65a918eb42dc804a210c474d",
                "vehicle_model_id": 96,
                "vehicle_make_id": 2,
                "model": "Xterra",
                "amount": "15000",
                "description": "Xterra",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:19:36.000Z",
                "niip_id": "465"
            },
            {
                "_id": "65a918eb42dc804a210c474e",
                "vehicle_model_id": 97,
                "vehicle_make_id": 4,
                "model": "EcoSport",
                "amount": "15000",
                "description": "EcoSport",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:00:40.000Z",
                "niip_id": "1517"
            },
            {
                "_id": "65a918eb42dc804a210c474f",
                "vehicle_model_id": 98,
                "vehicle_make_id": 4,
                "model": "Edge",
                "amount": "15000",
                "description": "Edge",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:01:06.000Z",
                "niip_id": "795"
            },
            {
                "_id": "65a918eb42dc804a210c4750",
                "vehicle_model_id": 99,
                "vehicle_make_id": 4,
                "model": "Expedition",
                "amount": "15000",
                "description": "Expedition",
                "created_by": "",
                "created_dt": "2023-01-30T10:01:24.000Z",
                "niip_id": "204"
            },
            {
                "_id": "65a918eb42dc804a210c4751",
                "vehicle_model_id": 100,
                "vehicle_make_id": 4,
                "model": "Explorer",
                "amount": "15000",
                "description": "Explorer",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:01:56.000Z",
                "niip_id": "205"
            },
            {
                "_id": "65a918eb42dc804a210c4752",
                "vehicle_model_id": 101,
                "vehicle_make_id": 4,
                "model": "F-150",
                "amount": "20000",
                "description": "F-150",
                "created_by": "",
                "created_dt": "2023-01-30T10:07:21.000Z",
                "niip_id": "208"
            },
            {
                "_id": "65a918eb42dc804a210c4753",
                "vehicle_model_id": 102,
                "vehicle_make_id": 4,
                "model": "F-250",
                "amount": "20000",
                "description": "F-250",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:08:08.000Z",
                "niip_id": "209"
            },
            {
                "_id": "65a918eb42dc804a210c4754",
                "vehicle_model_id": 103,
                "vehicle_make_id": 4,
                "model": "F-350",
                "amount": "20000",
                "description": "F-350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:08:47.000Z",
                "niip_id": "210"
            },
            {
                "_id": "65a918eb42dc804a210c4755",
                "vehicle_model_id": 104,
                "vehicle_make_id": 4,
                "model": "F-450",
                "amount": "20000",
                "description": "F-450",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:09:20.000Z",
                "niip_id": "1908"
            },
            {
                "_id": "65a918eb42dc804a210c4756",
                "vehicle_model_id": 105,
                "vehicle_make_id": 4,
                "model": "Fiest",
                "amount": "15000",
                "description": "Fiest",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:03:28.000Z",
                "niip_id": "1320"
            },
            {
                "_id": "65a918eb42dc804a210c4757",
                "vehicle_model_id": 106,
                "vehicle_make_id": 4,
                "model": "Flex",
                "amount": "15000",
                "description": "Flex",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:03:47.000Z",
                "niip_id": "1774"
            },
            {
                "_id": "65a918eb42dc804a210c4758",
                "vehicle_model_id": 107,
                "vehicle_make_id": 4,
                "model": "Mustang",
                "amount": "15000",
                "description": "Mustang",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:04:08.000Z",
                "niip_id": "214"
            },
            {
                "_id": "65a918eb42dc804a210c4759",
                "vehicle_model_id": 108,
                "vehicle_make_id": 4,
                "model": "Range",
                "amount": "20000",
                "description": "Range",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:10:12.000Z",
                "niip_id": "216"
            },
            {
                "_id": "65a918eb42dc804a210c475a",
                "vehicle_model_id": 109,
                "vehicle_make_id": 4,
                "model": "Taurus",
                "amount": "15000",
                "description": "Taurus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:10:48.000Z",
                "niip_id": "217"
            },
            {
                "_id": "65a918eb42dc804a210c475b",
                "vehicle_model_id": 110,
                "vehicle_make_id": 2,
                "model": "Transit",
                "amount": "20000",
                "description": "Transit",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:20:07.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c475c",
                "vehicle_model_id": 111,
                "vehicle_make_id": 2,
                "model": "Transit Connect",
                "amount": "20000",
                "description": "Transit Connect",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:20:40.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c475d",
                "vehicle_model_id": 112,
                "vehicle_make_id": 4,
                "model": "Crown Victoria",
                "amount": "15000",
                "description": "Crown Victoria",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:11:22.000Z",
                "niip_id": "198"
            },
            {
                "_id": "65a918eb42dc804a210c475e",
                "vehicle_model_id": 113,
                "vehicle_make_id": 2,
                "model": "Econoline",
                "amount": "20000",
                "description": "Econoline",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:20:53.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c475f",
                "vehicle_model_id": 114,
                "vehicle_make_id": 2,
                "model": "Five Hundred",
                "amount": "15000",
                "description": "Five Hundred",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:21:15.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4760",
                "vehicle_model_id": 115,
                "vehicle_make_id": 2,
                "model": "Focus",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:21:53.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4761",
                "vehicle_model_id": 116,
                "vehicle_make_id": 2,
                "model": "Freestar",
                "amount": "15000",
                "description": "Freestar",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:24:56.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4762",
                "vehicle_model_id": 117,
                "vehicle_make_id": 2,
                "model": "Freestyle",
                "amount": "15000",
                "description": "Freestyle",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:24:19.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4763",
                "vehicle_model_id": 118,
                "vehicle_make_id": 4,
                "model": "F - Series Pickups",
                "amount": "20000",
                "description": "F- Series Pickups",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:04:50.000Z",
                "niip_id": "3756"
            },
            {
                "_id": "65a918eb42dc804a210c4764",
                "vehicle_model_id": 119,
                "vehicle_make_id": 4,
                "model": "Super Duty",
                "amount": "20000",
                "description": "Super Duty",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:12:07.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4765",
                "vehicle_model_id": 120,
                "vehicle_make_id": 5,
                "model": "Amarok",
                "amount": "20000",
                "description": "Amarok",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:01:57.000Z",
                "niip_id": "1614"
            },
            {
                "_id": "65a918eb42dc804a210c4766",
                "vehicle_model_id": 121,
                "vehicle_make_id": 5,
                "model": "Ameo",
                "amount": "15000",
                "description": "Ameo",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:01:16.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4767",
                "vehicle_model_id": 122,
                "vehicle_make_id": 5,
                "model": "Arteon",
                "amount": "15000",
                "description": "Arteon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:00:51.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4768",
                "vehicle_model_id": 123,
                "vehicle_make_id": 5,
                "model": "Atlas",
                "amount": "15000",
                "description": "Atlas",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:00:13.000Z",
                "niip_id": "3815"
            },
            {
                "_id": "65a918eb42dc804a210c4769",
                "vehicle_model_id": 124,
                "vehicle_make_id": 5,
                "model": "Caddy",
                "amount": "20000",
                "description": "Caddy",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:59:12.000Z",
                "niip_id": "1541"
            },
            {
                "_id": "65a918eb42dc804a210c476a",
                "vehicle_model_id": 125,
                "vehicle_make_id": 5,
                "model": "Fox",
                "amount": "15000",
                "description": "Fox",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:58:34.000Z",
                "niip_id": "616"
            },
            {
                "_id": "65a918eb42dc804a210c476b",
                "vehicle_model_id": 126,
                "vehicle_make_id": 5,
                "model": "Gol G5",
                "amount": "15000",
                "description": "Gol G5",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:58:05.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c476c",
                "vehicle_model_id": 127,
                "vehicle_make_id": 5,
                "model": "Golf Mk7",
                "amount": "15000",
                "description": "Golf Mk7",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:57:37.000Z",
                "niip_id": "756"
            },
            {
                "_id": "65a918eb42dc804a210c476d",
                "vehicle_model_id": 128,
                "vehicle_make_id": 5,
                "model": "ID.3",
                "amount": "15000",
                "description": "ID.3",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:57:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c476e",
                "vehicle_model_id": 129,
                "vehicle_make_id": 5,
                "model": "Jetta A7",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:56:33.000Z",
                "niip_id": "621"
            },
            {
                "_id": "65a918eb42dc804a210c476f",
                "vehicle_model_id": 130,
                "vehicle_make_id": 5,
                "model": "Lamando",
                "amount": "15000",
                "description": "Lamando",
                "created_by": "",
                "created_dt": "2023-01-30T11:55:37.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4770",
                "vehicle_model_id": 131,
                "vehicle_make_id": 5,
                "model": "Lavida",
                "amount": "15000",
                "description": "Lavida",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:55:06.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4771",
                "vehicle_model_id": 132,
                "vehicle_make_id": 5,
                "model": "Passat B8",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:54:36.000Z",
                "niip_id": "627"
            },
            {
                "_id": "65a918eb42dc804a210c4772",
                "vehicle_model_id": 133,
                "vehicle_make_id": 5,
                "model": "Passat",
                "amount": "15000",
                "description": "Passat",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:54:09.000Z",
                "niip_id": "628"
            },
            {
                "_id": "65a918eb42dc804a210c4773",
                "vehicle_model_id": 134,
                "vehicle_make_id": 5,
                "model": "Polo Mk5",
                "amount": "15000",
                "description": "Polo Mk5",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:53:43.000Z",
                "niip_id": "755"
            },
            {
                "_id": "65a918eb42dc804a210c4774",
                "vehicle_model_id": 135,
                "vehicle_make_id": 5,
                "model": "Santana",
                "amount": "15000",
                "description": "Santana",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:52:41.000Z",
                "niip_id": "1586"
            },
            {
                "_id": "65a918eb42dc804a210c4775",
                "vehicle_model_id": 136,
                "vehicle_make_id": 5,
                "model": "Sharan",
                "amount": "20000",
                "description": "Sharan",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:51:20.000Z",
                "niip_id": "729"
            },
            {
                "_id": "65a918eb42dc804a210c4776",
                "vehicle_model_id": 137,
                "vehicle_make_id": 5,
                "model": "T-Cross",
                "amount": "15000",
                "description": "T-Cross",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:50:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4777",
                "vehicle_model_id": 138,
                "vehicle_make_id": 5,
                "model": "Tiguan",
                "amount": "15000",
                "description": "Tiguan",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:49:27.000Z",
                "niip_id": "784"
            },
            {
                "_id": "65a918eb42dc804a210c4778",
                "vehicle_model_id": 139,
                "vehicle_make_id": 5,
                "model": "Touareg II",
                "amount": "15000",
                "description": "Touareg II",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:48:36.000Z",
                "niip_id": "1057"
            },
            {
                "_id": "65a918eb42dc804a210c4779",
                "vehicle_model_id": 140,
                "vehicle_make_id": 5,
                "model": "Touran",
                "amount": "15000",
                "description": "Touran",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:47:55.000Z",
                "niip_id": "2003"
            },
            {
                "_id": "65a918eb42dc804a210c477a",
                "vehicle_model_id": 141,
                "vehicle_make_id": 5,
                "model": "Transporter T6",
                "amount": "20000",
                "description": "Transporter T6",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:47:13.000Z",
                "niip_id": "894"
            },
            {
                "_id": "65a918eb42dc804a210c477b",
                "vehicle_model_id": 142,
                "vehicle_make_id": 5,
                "model": "T-Roc",
                "amount": "15000",
                "description": "T-Roc",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:46:28.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c477c",
                "vehicle_model_id": 143,
                "vehicle_make_id": 5,
                "model": "Up",
                "amount": "15000",
                "description": "Up",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:45:25.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c477d",
                "vehicle_model_id": 144,
                "vehicle_make_id": 5,
                "model": "Vento",
                "amount": "15000",
                "description": "Vento",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:42:05.000Z",
                "niip_id": "703"
            },
            {
                "_id": "65a918eb42dc804a210c477e",
                "vehicle_model_id": 145,
                "vehicle_make_id": 5,
                "model": "XL1",
                "amount": "15000",
                "description": "XL1",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:41:14.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c477f",
                "vehicle_model_id": 146,
                "vehicle_make_id": 14,
                "model": "ES",
                "amount": "15000",
                "description": "Car",
                "niip_id": "329",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:39:24.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4780",
                "vehicle_model_id": 147,
                "vehicle_make_id": 14,
                "model": "ES300h",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:39:34.000Z",
                "niip_id": "329"
            },
            {
                "_id": "65a918eb42dc804a210c4781",
                "vehicle_model_id": 148,
                "vehicle_make_id": 14,
                "model": "ES350",
                "amount": "15000",
                "description": "ES350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:40:05.000Z",
                "niip_id": "1353"
            },
            {
                "_id": "65a918eb42dc804a210c4782",
                "vehicle_model_id": 149,
                "vehicle_make_id": 14,
                "model": "GS",
                "amount": "15000",
                "description": "GS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:40:38.000Z",
                "niip_id": "330"
            },
            {
                "_id": "65a918eb42dc804a210c4783",
                "vehicle_model_id": 150,
                "vehicle_make_id": 14,
                "model": "GS F.",
                "amount": "15000",
                "description": "GS F.",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:41:46.000Z",
                "niip_id": "330"
            },
            {
                "_id": "65a918eb42dc804a210c4784",
                "vehicle_model_id": 151,
                "vehicle_make_id": 14,
                "model": "GS350",
                "amount": "15000",
                "description": "GS350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:41:51.000Z",
                "niip_id": "1757"
            },
            {
                "_id": "65a918eb42dc804a210c4785",
                "vehicle_model_id": 152,
                "vehicle_make_id": 14,
                "model": "GX",
                "amount": "15000",
                "description": "GX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:41:56.000Z",
                "niip_id": "3887"
            },
            {
                "_id": "65a918eb42dc804a210c4786",
                "vehicle_model_id": 153,
                "vehicle_make_id": 14,
                "model": "GX460",
                "amount": "15000",
                "description": "GX460",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:02.000Z",
                "niip_id": "801"
            },
            {
                "_id": "65a918eb42dc804a210c4787",
                "vehicle_model_id": 154,
                "vehicle_make_id": 14,
                "model": "GX 460",
                "amount": "15000",
                "description": "GX 460",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:06.000Z",
                "niip_id": "801"
            },
            {
                "_id": "65a918eb42dc804a210c4788",
                "vehicle_model_id": 155,
                "vehicle_make_id": 14,
                "model": "IS",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:11.000Z",
                "niip_id": "1442"
            },
            {
                "_id": "65a918eb42dc804a210c4789",
                "vehicle_model_id": 156,
                "vehicle_make_id": 0,
                "model": "IS 350",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200423130228",
                "created_dt": "2020-05-08T00:43:53.000Z",
                "niip_id": "2085"
            },
            {
                "_id": "65a918eb42dc804a210c478a",
                "vehicle_model_id": 157,
                "vehicle_make_id": 14,
                "model": "IS 350",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:17.000Z",
                "niip_id": "2085"
            },
            {
                "_id": "65a918eb42dc804a210c478b",
                "vehicle_model_id": 158,
                "vehicle_make_id": 14,
                "model": "IS 300",
                "amount": "15000",
                "description": "IS 300",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:49:11.000Z",
                "niip_id": "333"
            },
            {
                "_id": "65a918eb42dc804a210c478c",
                "vehicle_model_id": 159,
                "vehicle_make_id": 14,
                "model": "LC",
                "amount": "15000",
                "description": "LC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:22.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c478d",
                "vehicle_model_id": 160,
                "vehicle_make_id": 14,
                "model": "LC500",
                "amount": "15000",
                "description": "LC500",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:27.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c478e",
                "vehicle_model_id": 161,
                "vehicle_make_id": 14,
                "model": "LS",
                "amount": "15000",
                "description": "LS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:32.000Z",
                "niip_id": "334"
            },
            {
                "_id": "65a918eb42dc804a210c478f",
                "vehicle_model_id": 162,
                "vehicle_make_id": 14,
                "model": "LX570",
                "amount": "15000",
                "description": "LX570",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:43:13.000Z",
                "niip_id": "897"
            },
            {
                "_id": "65a918eb42dc804a210c4790",
                "vehicle_model_id": 163,
                "vehicle_make_id": 14,
                "model": "LX",
                "amount": "15000",
                "description": "LX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:43:17.000Z",
                "niip_id": "336"
            },
            {
                "_id": "65a918eb42dc804a210c4791",
                "vehicle_model_id": 164,
                "vehicle_make_id": 14,
                "model": "NX",
                "amount": "15000",
                "description": "NX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:52:17.000Z",
                "niip_id": "2434"
            },
            {
                "_id": "65a918eb42dc804a210c4792",
                "vehicle_model_id": 165,
                "vehicle_make_id": 14,
                "model": "RC",
                "amount": "15000",
                "description": "RC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:43:49.000Z",
                "niip_id": "3678"
            },
            {
                "_id": "65a918eb42dc804a210c4793",
                "vehicle_model_id": 166,
                "vehicle_make_id": 14,
                "model": "RC 300",
                "amount": "15000",
                "description": "RC 300",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:43:49.000Z",
                "niip_id": "3678"
            },
            {
                "_id": "65a918eb42dc804a210c4794",
                "vehicle_model_id": 167,
                "vehicle_make_id": 14,
                "model": "RC350",
                "amount": "15000",
                "description": "RC 350",
                "created_by": "",
                "created_dt": "2023-01-30T10:43:49.000Z",
                "niip_id": "3678"
            },
            {
                "_id": "65a918eb42dc804a210c4795",
                "vehicle_model_id": 168,
                "vehicle_make_id": 14,
                "model": "RX 450h",
                "amount": "15000",
                "description": "RX 450h",
                "created_by": "",
                "created_dt": "2023-01-30T10:43:49.000Z",
                "niip_id": "2502"
            },
            {
                "_id": "65a918eb42dc804a210c4796",
                "vehicle_model_id": 169,
                "vehicle_make_id": 14,
                "model": "RX 350",
                "amount": "15000",
                "description": "RX 350",
                "created_by": "",
                "created_dt": "2023-01-30T10:43:49.000Z",
                "niip_id": "896"
            },
            {
                "_id": "65a918eb42dc804a210c4797",
                "vehicle_model_id": 170,
                "vehicle_make_id": 14,
                "model": "RX",
                "amount": "15000",
                "description": "RX",
                "created_by": "",
                "created_dt": "2023-01-30T10:43:56.000Z",
                "niip_id": "338"
            },
            {
                "_id": "65a918eb42dc804a210c4798",
                "vehicle_model_id": 171,
                "vehicle_make_id": 14,
                "model": "UX 250h",
                "amount": "15000",
                "description": "UX 250h",
                "created_by": "",
                "created_dt": "2023-01-30T10:44:00.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4799",
                "vehicle_model_id": 172,
                "vehicle_make_id": 14,
                "model": "UX",
                "amount": "15000",
                "description": "UX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:44:58.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c479a",
                "vehicle_model_id": 173,
                "vehicle_make_id": 14,
                "model": "UX 200",
                "amount": "15000",
                "description": "UX 200",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:45:03.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c479b",
                "vehicle_model_id": 174,
                "vehicle_make_id": 16,
                "model": "Cadenza",
                "amount": "15000",
                "description": "Cadenza",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:29:00.000Z",
                "niip_id": "1533"
            },
            {
                "_id": "65a918eb42dc804a210c479c",
                "vehicle_model_id": 175,
                "vehicle_make_id": 16,
                "model": "Forte",
                "amount": "15000",
                "description": "Forte",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:30:05.000Z",
                "niip_id": "2042"
            },
            {
                "_id": "65a918eb42dc804a210c479d",
                "vehicle_model_id": 176,
                "vehicle_make_id": 16,
                "model": "K900",
                "amount": "15000",
                "description": "K900",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:25:57.000Z",
                "niip_id": "3776"
            },
            {
                "_id": "65a918eb42dc804a210c479e",
                "vehicle_model_id": 177,
                "vehicle_make_id": 16,
                "model": "Niro",
                "amount": "15000",
                "description": "Niro",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:31:05.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c479f",
                "vehicle_model_id": 178,
                "vehicle_make_id": 16,
                "model": "Optima",
                "amount": "15000",
                "description": "Optima",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:30:35.000Z",
                "niip_id": "315"
            },
            {
                "_id": "65a918eb42dc804a210c47a0",
                "vehicle_model_id": 179,
                "vehicle_make_id": 16,
                "model": "Rio",
                "amount": "15000",
                "description": "Rio",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:30:05.000Z",
                "niip_id": "316"
            },
            {
                "_id": "65a918eb42dc804a210c47a1",
                "vehicle_model_id": 180,
                "vehicle_make_id": 16,
                "model": "Sedona",
                "amount": "15000",
                "description": "Sedona",
                "created_by": "",
                "created_dt": "2023-01-30T10:30:35.000Z",
                "niip_id": "317"
            },
            {
                "_id": "65a918eb42dc804a210c47a2",
                "vehicle_model_id": 181,
                "vehicle_make_id": 16,
                "model": "Sorento",
                "amount": "15000",
                "description": "Sorento",
                "created_by": "",
                "created_dt": "2023-01-30T10:30:35.000Z",
                "niip_id": "319"
            },
            {
                "_id": "65a918eb42dc804a210c47a3",
                "vehicle_model_id": 182,
                "vehicle_make_id": 16,
                "model": "Soul",
                "amount": "15000",
                "description": "Soul",
                "created_by": "",
                "created_dt": "2023-01-30T10:30:35.000Z",
                "niip_id": "701"
            },
            {
                "_id": "65a918eb42dc804a210c47a4",
                "vehicle_model_id": 183,
                "vehicle_make_id": 16,
                "model": "Soul EV",
                "amount": "15000",
                "description": "Soul EV",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:30:35.000Z",
                "niip_id": "701"
            },
            {
                "_id": "65a918eb42dc804a210c47a5",
                "vehicle_model_id": 184,
                "vehicle_make_id": 16,
                "model": "Spotage",
                "amount": "15000",
                "description": "Stopage",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:35:14.000Z",
                "niip_id": "321"
            },
            {
                "_id": "65a918eb42dc804a210c47a6",
                "vehicle_model_id": 185,
                "vehicle_make_id": 16,
                "model": "Stringer",
                "amount": "15000",
                "description": "Stringer",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:35:21.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47a7",
                "vehicle_model_id": 186,
                "vehicle_make_id": 16,
                "model": "Telluride",
                "amount": "15000",
                "description": "Telluride",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:35:27.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47a8",
                "vehicle_model_id": 187,
                "vehicle_make_id": 6,
                "model": "A-Class",
                "amount": "15000",
                "description": "Benz A-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:07:52.000Z",
                "niip_id": "405"
            },
            {
                "_id": "65a918eb42dc804a210c47a9",
                "vehicle_model_id": 188,
                "vehicle_make_id": 6,
                "model": "AMG GT.",
                "amount": "15000",
                "description": "Benz AMG GT.",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:09:09.000Z",
                "niip_id": "1465"
            },
            {
                "_id": "65a918eb42dc804a210c47aa",
                "vehicle_model_id": 189,
                "vehicle_make_id": 6,
                "model": "C-Class",
                "amount": "15000",
                "description": "Benz C-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:09:13.000Z",
                "niip_id": "405"
            },
            {
                "_id": "65a918eb42dc804a210c47ab",
                "vehicle_model_id": 190,
                "vehicle_make_id": 6,
                "model": "CLA.",
                "amount": "15000",
                "description": "Benz CLA.",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:09:19.000Z",
                "niip_id": "3642"
            },
            {
                "_id": "65a918eb42dc804a210c47ac",
                "vehicle_model_id": 191,
                "vehicle_make_id": 6,
                "model": "CLS.",
                "amount": "15000",
                "description": "Benz CLS.",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:09:45.000Z",
                "niip_id": "2016"
            },
            {
                "_id": "65a918eb42dc804a210c47ad",
                "vehicle_model_id": 192,
                "vehicle_make_id": 6,
                "model": "E-Class",
                "amount": "15000",
                "description": "Benz E-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:10:16.000Z",
                "niip_id": "408"
            },
            {
                "_id": "65a918eb42dc804a210c47ae",
                "vehicle_model_id": 193,
                "vehicle_make_id": 6,
                "model": "G-Class",
                "amount": "15000",
                "description": "Benz G-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:10:17.000Z",
                "niip_id": "409"
            },
            {
                "_id": "65a918eb42dc804a210c47af",
                "vehicle_model_id": 194,
                "vehicle_make_id": 6,
                "model": "GLA.",
                "amount": "15000",
                "description": "Benz GLA.",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:10:17.000Z",
                "niip_id": "2569"
            },
            {
                "_id": "65a918eb42dc804a210c47b0",
                "vehicle_model_id": 195,
                "vehicle_make_id": 6,
                "model": "GLB",
                "amount": "15000",
                "description": "Benz GLB",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:10:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47b1",
                "vehicle_model_id": 196,
                "vehicle_make_id": 18,
                "model": "206",
                "amount": "15000",
                "description": "Peugot206",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:29:37.000Z",
                "niip_id": "782"
            },
            {
                "_id": "65a918eb42dc804a210c47b2",
                "vehicle_model_id": 197,
                "vehicle_make_id": 18,
                "model": "1007",
                "amount": "15000",
                "description": "Peugot1007",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:30:09.000Z",
                "niip_id": "3790"
            },
            {
                "_id": "65a918eb42dc804a210c47b3",
                "vehicle_model_id": 198,
                "vehicle_make_id": 18,
                "model": "407",
                "amount": "15000",
                "description": "Peugot407",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:30:52.000Z",
                "niip_id": "1111"
            },
            {
                "_id": "65a918eb42dc804a210c47b4",
                "vehicle_model_id": 199,
                "vehicle_make_id": 18,
                "model": "205",
                "amount": "15000",
                "description": "Peugot205",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:31:57.000Z",
                "niip_id": "2009"
            },
            {
                "_id": "65a918eb42dc804a210c47b5",
                "vehicle_model_id": 200,
                "vehicle_make_id": 18,
                "model": "504",
                "amount": "15000",
                "description": "Peugot504",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:33:25.000Z",
                "niip_id": "889"
            },
            {
                "_id": "65a918eb42dc804a210c47b6",
                "vehicle_model_id": 201,
                "vehicle_make_id": 18,
                "model": "207",
                "amount": "15000",
                "description": "Peugot207",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:34:06.000Z",
                "niip_id": "1660"
            },
            {
                "_id": "65a918eb42dc804a210c47b7",
                "vehicle_model_id": 202,
                "vehicle_make_id": 18,
                "model": "309",
                "amount": "15000",
                "description": "Peugot309",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:37:14.000Z",
                "niip_id": "1258"
            },
            {
                "_id": "65a918eb42dc804a210c47b8",
                "vehicle_model_id": 203,
                "vehicle_make_id": 18,
                "model": "4007",
                "amount": "15000",
                "description": "Peugot4007",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:37:41.000Z",
                "niip_id": "1849"
            },
            {
                "_id": "65a918eb42dc804a210c47b9",
                "vehicle_model_id": 204,
                "vehicle_make_id": 18,
                "model": "Partner",
                "amount": "20000",
                "description": "Peugot partner",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:38:16.000Z",
                "niip_id": "1762"
            },
            {
                "_id": "65a918eb42dc804a210c47ba",
                "vehicle_model_id": 205,
                "vehicle_make_id": 18,
                "model": "307",
                "amount": "15000",
                "description": "Peugot307",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:38:48.000Z",
                "niip_id": "778"
            },
            {
                "_id": "65a918eb42dc804a210c47bb",
                "vehicle_model_id": 206,
                "vehicle_make_id": 18,
                "model": "3008",
                "amount": "15000",
                "description": "Peugot3008",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:39:18.000Z",
                "niip_id": "1204"
            },
            {
                "_id": "65a918eb42dc804a210c47bc",
                "vehicle_model_id": 207,
                "vehicle_make_id": 18,
                "model": "106",
                "amount": "15000",
                "description": "Peugot106",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:02:39.000Z",
                "niip_id": "2019"
            },
            {
                "_id": "65a918eb42dc804a210c47bd",
                "vehicle_model_id": 208,
                "vehicle_make_id": 18,
                "model": "402",
                "amount": "15000",
                "description": "Peugot402",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:03:12.000Z",
                "niip_id": "1412"
            },
            {
                "_id": "65a918eb42dc804a210c47be",
                "vehicle_model_id": 209,
                "vehicle_make_id": 18,
                "model": "107",
                "amount": "15000",
                "description": "Peugot107",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:03:35.000Z",
                "niip_id": "888"
            },
            {
                "_id": "65a918eb42dc804a210c47bf",
                "vehicle_model_id": 210,
                "vehicle_make_id": 18,
                "model": "202",
                "amount": "15000",
                "description": "Peugot202",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:04:06.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47c0",
                "vehicle_model_id": 211,
                "vehicle_make_id": 18,
                "model": "301",
                "amount": "15000",
                "description": "Peugot301",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:04:43.000Z",
                "niip_id": "1199"
            },
            {
                "_id": "65a918eb42dc804a210c47c1",
                "vehicle_model_id": 212,
                "vehicle_make_id": 15,
                "model": "CX-3",
                "amount": "15000",
                "description": "CX-3",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:01:03.000Z",
                "niip_id": "1872"
            },
            {
                "_id": "65a918eb42dc804a210c47c2",
                "vehicle_model_id": 213,
                "vehicle_make_id": 15,
                "model": "CX-30",
                "amount": "15000",
                "description": "CX-30",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:59:34.000Z",
                "niip_id": "1872"
            },
            {
                "_id": "65a918eb42dc804a210c47c3",
                "vehicle_model_id": 214,
                "vehicle_make_id": 15,
                "model": "CX-5",
                "amount": "15000",
                "description": "CX-5",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:01:03.000Z",
                "niip_id": "1872"
            },
            {
                "_id": "65a918eb42dc804a210c47c4",
                "vehicle_model_id": 215,
                "vehicle_make_id": 15,
                "model": "CX-9",
                "amount": "15000",
                "description": "CX-9",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:59:57.000Z",
                "niip_id": "1197"
            },
            {
                "_id": "65a918eb42dc804a210c47c5",
                "vehicle_model_id": 216,
                "vehicle_make_id": 15,
                "model": "Mazda3",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:00:00.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47c6",
                "vehicle_model_id": 217,
                "vehicle_make_id": 15,
                "model": "Mazda6",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:01:03.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47c7",
                "vehicle_model_id": 218,
                "vehicle_make_id": 15,
                "model": "MX-5 Miata",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:05:53.000Z",
                "niip_id": "362"
            },
            {
                "_id": "65a918eb42dc804a210c47c8",
                "vehicle_model_id": 219,
                "vehicle_make_id": 15,
                "model": "CX-8",
                "amount": "15000",
                "description": "CX-8",
                "created_by": "",
                "created_dt": "2023-01-30T11:02:18.000Z",
                "niip_id": "1197"
            },
            {
                "_id": "65a918eb42dc804a210c47c9",
                "vehicle_model_id": 220,
                "vehicle_make_id": 15,
                "model": "MX-30",
                "amount": "15000",
                "description": "MX-30",
                "created_by": "",
                "created_dt": "2023-01-30T11:02:22.000Z",
                "niip_id": "365"
            },
            {
                "_id": "65a918eb42dc804a210c47ca",
                "vehicle_model_id": 221,
                "vehicle_make_id": 17,
                "model": "Accent.",
                "amount": "15000",
                "description": "Accent.",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:12:04.000Z",
                "niip_id": "260"
            },
            {
                "_id": "65a918eb42dc804a210c47cb",
                "vehicle_model_id": 222,
                "vehicle_make_id": 17,
                "model": "Azera.",
                "amount": "15000",
                "description": "Azera.",
                "created_by": "",
                "created_dt": "2023-01-30T11:19:49.000Z",
                "niip_id": "1378"
            },
            {
                "_id": "65a918eb42dc804a210c47cc",
                "vehicle_model_id": 223,
                "vehicle_make_id": 17,
                "model": "Azera Limite",
                "amount": "15000",
                "description": "Azera Limited",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:20:40.000Z",
                "niip_id": "1378"
            },
            {
                "_id": "65a918eb42dc804a210c47cd",
                "vehicle_model_id": 224,
                "vehicle_make_id": 17,
                "model": "Elantra",
                "amount": "15000",
                "description": "Elantra",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:20:58.000Z",
                "niip_id": "261"
            },
            {
                "_id": "65a918eb42dc804a210c47ce",
                "vehicle_model_id": 225,
                "vehicle_make_id": 17,
                "model": "Elantra GT.",
                "amount": "15000",
                "description": "Elantra GT.",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:21:22.000Z",
                "niip_id": "261"
            },
            {
                "_id": "65a918eb42dc804a210c47cf",
                "vehicle_model_id": 226,
                "vehicle_make_id": 17,
                "model": "Elantra Limited",
                "amount": "15000",
                "description": "Elantra Limited",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:21:43.000Z",
                "niip_id": "261"
            },
            {
                "_id": "65a918eb42dc804a210c47d0",
                "vehicle_model_id": 227,
                "vehicle_make_id": 17,
                "model": "Elantra SE.",
                "amount": "15000",
                "description": "Car",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:22:09.000Z",
                "niip_id": "261"
            },
            {
                "_id": "65a918eb42dc804a210c47d1",
                "vehicle_model_id": 228,
                "vehicle_make_id": 17,
                "model": "Equus",
                "amount": "15000",
                "description": "Equus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:22:40.000Z",
                "niip_id": "2263"
            },
            {
                "_id": "65a918eb42dc804a210c47d2",
                "vehicle_model_id": 229,
                "vehicle_make_id": 17,
                "model": "Genesis AWD",
                "amount": "15000",
                "description": "Genesis AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:22:57.000Z",
                "niip_id": "1504"
            },
            {
                "_id": "65a918eb42dc804a210c47d3",
                "vehicle_model_id": 230,
                "vehicle_make_id": 17,
                "model": "Genesis Coup",
                "amount": "15000",
                "description": "Genesis Coupe",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:23:18.000Z",
                "niip_id": "1504"
            },
            {
                "_id": "65a918eb42dc804a210c47d4",
                "vehicle_model_id": 231,
                "vehicle_make_id": 17,
                "model": "Genesis RWD",
                "amount": "15000",
                "description": "Genesis RWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:23:39.000Z",
                "niip_id": "1504"
            },
            {
                "_id": "65a918eb42dc804a210c47d5",
                "vehicle_model_id": 232,
                "vehicle_make_id": 17,
                "model": "Ioniq",
                "amount": "15000",
                "description": "Ioniq",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:33:35.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47d6",
                "vehicle_model_id": 233,
                "vehicle_make_id": 17,
                "model": "Ioniq Blue",
                "amount": "15000",
                "description": "Ioniq Blue",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:33:51.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47d7",
                "vehicle_model_id": 234,
                "vehicle_make_id": 17,
                "model": "Ioniq Electr",
                "amount": "15000",
                "description": "Ioniq Electric",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:34:10.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47d8",
                "vehicle_model_id": 235,
                "vehicle_make_id": 17,
                "model": "Ioniq Plug-in Hybrid",
                "amount": "15000",
                "description": "Ioniq Plug-in Hybrid",
                "created_by": "",
                "created_dt": "2023-01-30T11:34:25.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47d9",
                "vehicle_model_id": 236,
                "vehicle_make_id": 17,
                "model": "Kona AWD",
                "amount": "15000",
                "description": "Kona AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:35:16.000Z",
                "niip_id": "3797"
            },
            {
                "_id": "65a918eb42dc804a210c47da",
                "vehicle_model_id": 237,
                "vehicle_make_id": 17,
                "model": "Kona Electri",
                "amount": "15000",
                "description": "Kona Electric",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:35:39.000Z",
                "niip_id": "3797"
            },
            {
                "_id": "65a918eb42dc804a210c47db",
                "vehicle_model_id": 238,
                "vehicle_make_id": 17,
                "model": "Kona FWD",
                "amount": "15000",
                "description": "Kona FWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:37:50.000Z",
                "niip_id": "3797"
            },
            {
                "_id": "65a918eb42dc804a210c47dc",
                "vehicle_model_id": 239,
                "vehicle_make_id": 17,
                "model": "Palisade AWD",
                "amount": "15000",
                "description": "Palisade AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:38:11.000Z",
                "niip_id": "5650"
            },
            {
                "_id": "65a918eb42dc804a210c47dd",
                "vehicle_model_id": 240,
                "vehicle_make_id": 17,
                "model": "Palisade FWD",
                "amount": "15000",
                "description": "Palisade FWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:38:42.000Z",
                "niip_id": "5650"
            },
            {
                "_id": "65a918eb42dc804a210c47de",
                "vehicle_model_id": 241,
                "vehicle_make_id": 17,
                "model": "Santa Fe AWD",
                "amount": "15000",
                "description": "Santa Fe AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:39:01.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47df",
                "vehicle_model_id": 242,
                "vehicle_make_id": 17,
                "model": "Santa Fe FWD",
                "amount": "15000",
                "description": "Santa Fe FWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:39:13.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e0",
                "vehicle_model_id": 243,
                "vehicle_make_id": 17,
                "model": "Santa Fe Sport AWD",
                "amount": "15000",
                "description": "Santa Fe Sport AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:39:35.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e1",
                "vehicle_model_id": 244,
                "vehicle_make_id": 17,
                "model": "Santa Fe Sport FWD",
                "amount": "15000",
                "description": "Hyundai Santa Fe Sport FWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:39:54.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e2",
                "vehicle_model_id": 245,
                "vehicle_make_id": 17,
                "model": "Santa Fe Sport Ultim",
                "amount": "15000",
                "description": "Santa Fe Sport Ultimate AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:40:16.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e3",
                "vehicle_model_id": 246,
                "vehicle_make_id": 17,
                "model": "Santa Fe Sport Ultim",
                "amount": "15000",
                "description": "Santa Fe Sport Ultimate FWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:40:34.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e4",
                "vehicle_model_id": 247,
                "vehicle_make_id": 17,
                "model": "Santa Fe Ultimate AW",
                "amount": "15000",
                "description": "Santa Fe Ultimate AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:40:51.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e5",
                "vehicle_model_id": 248,
                "vehicle_make_id": 17,
                "model": "Santa Fe Ultimate FW",
                "amount": "15000",
                "description": "Santa Fe Ultimate FWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:41:15.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e6",
                "vehicle_model_id": 249,
                "vehicle_make_id": 17,
                "model": "Santa Fe XL",
                "amount": "15000",
                "description": "Santa Fe XL AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:41:41.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e7",
                "vehicle_model_id": 250,
                "vehicle_make_id": 17,
                "model": "Santa Fe XL FWD",
                "amount": "15000",
                "description": "Santa Fe XL FWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:42:06.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e8",
                "vehicle_model_id": 251,
                "vehicle_make_id": 17,
                "model": "Santa Fe XL Ultimate",
                "amount": "15000",
                "description": "Santa Fe XL Ultimate AWD",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:43:05.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c47e9",
                "vehicle_model_id": 252,
                "vehicle_make_id": 14,
                "model": "RX 330",
                "amount": "15000",
                "description": "Lexuz RX 330",
                "created_by": "",
                "created_dt": "2023-01-30T10:30:27.000Z",
                "niip_id": "709"
            },
            {
                "_id": "65a918eb42dc804a210c47ea",
                "vehicle_model_id": 253,
                "vehicle_make_id": 14,
                "model": "RX 300",
                "amount": "15000",
                "description": "RX 300",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:15:36.000Z",
                "niip_id": "338"
            },
            {
                "_id": "65a918eb42dc804a210c47eb",
                "vehicle_model_id": 254,
                "vehicle_make_id": 15,
                "model": "E2000",
                "amount": "15000",
                "description": "E2000",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:03:44.000Z",
                "niip_id": "869"
            },
            {
                "_id": "65a918eb42dc804a210c47ec",
                "vehicle_model_id": 255,
                "vehicle_make_id": 1,
                "model": "Previa",
                "amount": "15000",
                "description": "Previa",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:57:42.000Z",
                "niip_id": "600"
            },
            {
                "_id": "65a918eb42dc804a210c47ed",
                "vehicle_model_id": 256,
                "vehicle_make_id": 11,
                "model": "Ram 50 Pickup",
                "amount": "20000",
                "description": "Ram 50 Pickup",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:58:14.000Z",
                "niip_id": "175"
            },
            {
                "_id": "65a918eb42dc804a210c47ee",
                "vehicle_model_id": 257,
                "vehicle_make_id": 1,
                "model": "Hiace",
                "amount": "20000",
                "description": "Hiace",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:58:12.000Z",
                "niip_id": "682"
            },
            {
                "_id": "65a918eb42dc804a210c47ef",
                "vehicle_model_id": 258,
                "vehicle_make_id": 1,
                "model": "Avensis",
                "amount": "15000",
                "description": "Avensis",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:58:48.000Z",
                "niip_id": "683"
            },
            {
                "_id": "65a918eb42dc804a210c47f0",
                "vehicle_model_id": 259,
                "vehicle_make_id": 5,
                "model": "Golf",
                "amount": "15000",
                "description": "Golf",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:40:26.000Z",
                "niip_id": "617"
            },
            {
                "_id": "65a918eb42dc804a210c47f1",
                "vehicle_model_id": 260,
                "vehicle_make_id": 1,
                "model": "Hilux",
                "amount": "20000",
                "description": "Hilux",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:59:17.000Z",
                "niip_id": "680"
            },
            {
                "_id": "65a918eb42dc804a210c47f2",
                "vehicle_model_id": 261,
                "vehicle_make_id": 4,
                "model": "Pickup",
                "amount": "20000",
                "description": "Pickup",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:04:26.000Z",
                "niip_id": "1192"
            },
            {
                "_id": "65a918eb42dc804a210c47f3",
                "vehicle_model_id": 262,
                "vehicle_make_id": 14,
                "model": "LX 470",
                "amount": "15000",
                "description": "LX 470",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:45:38.000Z",
                "niip_id": "337"
            },
            {
                "_id": "65a918eb42dc804a210c47f4",
                "vehicle_model_id": 263,
                "vehicle_make_id": 19,
                "model": "GMC",
                "amount": "20000",
                "description": "GMC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:30:11.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47f5",
                "vehicle_model_id": 264,
                "vehicle_make_id": 20,
                "model": "TT",
                "amount": "15000",
                "description": "TT",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:28:44.000Z",
                "niip_id": "35"
            },
            {
                "_id": "65a918eb42dc804a210c47f6",
                "vehicle_model_id": 265,
                "vehicle_make_id": 2,
                "model": "Serena",
                "amount": "15000",
                "description": "Serena",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:22:36.000Z",
                "niip_id": "707"
            },
            {
                "_id": "65a918eb42dc804a210c47f7",
                "vehicle_model_id": 266,
                "vehicle_make_id": 21,
                "model": "Alto",
                "amount": "15000",
                "description": "Alto",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:47:41.000Z",
                "niip_id": "3821"
            },
            {
                "_id": "65a918eb42dc804a210c47f8",
                "vehicle_model_id": 267,
                "vehicle_make_id": 0,
                "model": "Daihatsu",
                "amount": null,
                "description": "Daihatsu",
                "created_by": "20200417110403",
                "created_dt": "2020-08-10T11:22:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c47f9",
                "vehicle_model_id": 268,
                "vehicle_make_id": 22,
                "model": "Hijet",
                "amount": "20000",
                "description": "Hijet",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:54:39.000Z",
                "niip_id": "1410"
            },
            {
                "_id": "65a918eb42dc804a210c47fa",
                "vehicle_model_id": 269,
                "vehicle_make_id": 23,
                "model": "Fuso",
                "amount": "15000",
                "description": "Fuso",
                "created_by": "20200417110403",
                "created_dt": "2023-03-10T03:24:09.000Z",
                "niip_id": "1592"
            },
            {
                "_id": "65a918eb42dc804a210c47fb",
                "vehicle_model_id": 270,
                "vehicle_make_id": 23,
                "model": "Canter",
                "amount": "20000",
                "description": "Canter",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:02:35.000Z",
                "niip_id": "853"
            },
            {
                "_id": "65a918eb42dc804a210c47fc",
                "vehicle_model_id": 271,
                "vehicle_make_id": 24,
                "model": "Sport",
                "amount": "15000",
                "description": "Sport",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:23:35.000Z",
                "niip_id": "1455"
            },
            {
                "_id": "65a918eb42dc804a210c47fd",
                "vehicle_model_id": 272,
                "vehicle_make_id": 15,
                "model": "626",
                "amount": "15000",
                "description": "626",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:03:47.000Z",
                "niip_id": "352"
            },
            {
                "_id": "65a918eb42dc804a210c47fe",
                "vehicle_model_id": 273,
                "vehicle_make_id": 17,
                "model": "Entourage",
                "amount": "15000",
                "description": "Entourage",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:42:45.000Z",
                "niip_id": "1319"
            },
            {
                "_id": "65a918eb42dc804a210c47ff",
                "vehicle_model_id": 274,
                "vehicle_make_id": 6,
                "model": "230",
                "amount": "15000",
                "description": "230",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:16:10.000Z",
                "niip_id": "5659"
            },
            {
                "_id": "65a918eb42dc804a210c4800",
                "vehicle_model_id": 275,
                "vehicle_make_id": 13,
                "model": "Rl",
                "amount": "15000",
                "description": "Rl",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:26:17.000Z",
                "niip_id": "6"
            },
            {
                "_id": "65a918eb42dc804a210c4801",
                "vehicle_model_id": 276,
                "vehicle_make_id": 13,
                "model": "TSX",
                "amount": "15000",
                "description": "TSX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:26:59.000Z",
                "niip_id": "1620"
            },
            {
                "_id": "65a918eb42dc804a210c4802",
                "vehicle_model_id": 277,
                "vehicle_make_id": 13,
                "model": "TL Type S",
                "amount": "15000",
                "description": "TL Type S",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:28:19.000Z",
                "niip_id": "9"
            },
            {
                "_id": "65a918eb42dc804a210c4803",
                "vehicle_model_id": 278,
                "vehicle_make_id": 20,
                "model": "A8 Quattro 3.0T L",
                "amount": "15000",
                "description": "A8 Quattro 3.0T L",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:29:23.000Z",
                "niip_id": "27"
            },
            {
                "_id": "65a918eb42dc804a210c4804",
                "vehicle_model_id": 279,
                "vehicle_make_id": 20,
                "model": "80",
                "amount": "15000",
                "description": "80",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:29:55.000Z",
                "niip_id": "23"
            },
            {
                "_id": "65a918eb42dc804a210c4805",
                "vehicle_model_id": 280,
                "vehicle_make_id": 25,
                "model": "Boxer",
                "amount": "3000",
                "description": "Boxer",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:31:08.000Z",
                "niip_id": "738"
            },
            {
                "_id": "65a918eb42dc804a210c4806",
                "vehicle_model_id": 281,
                "vehicle_make_id": 25,
                "model": "Keke",
                "amount": "5000",
                "description": "keke",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:31:28.000Z",
                "niip_id": "698"
            },
            {
                "_id": "65a918eb42dc804a210c4807",
                "vehicle_model_id": 282,
                "vehicle_make_id": 25,
                "model": "RE-205-45 TRICYCLE",
                "amount": "5000",
                "description": "RE-205-45 TRICYCLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:31:46.000Z",
                "niip_id": "698"
            },
            {
                "_id": "65a918eb42dc804a210c4808",
                "vehicle_model_id": 283,
                "vehicle_make_id": 25,
                "model": "TRC",
                "amount": "5000",
                "description": "TRC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:43:16.000Z",
                "niip_id": "698"
            },
            {
                "_id": "65a918eb42dc804a210c4809",
                "vehicle_model_id": 284,
                "vehicle_make_id": 25,
                "model": "Bajaj",
                "amount": "3000",
                "description": "Bajaj",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:06:40.000Z",
                "niip_id": "738"
            },
            {
                "_id": "65a918eb42dc804a210c480a",
                "vehicle_model_id": 285,
                "vehicle_make_id": 25,
                "model": "BOXERS",
                "amount": "3000",
                "description": "BOXERS",
                "created_by": "",
                "created_dt": "2023-01-30T11:07:06.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c480b",
                "vehicle_model_id": 286,
                "vehicle_make_id": 25,
                "model": "TRICYCLE",
                "amount": "5000",
                "description": "TRICYCLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:32:58.000Z",
                "niip_id": "698"
            },
            {
                "_id": "65a918eb42dc804a210c480c",
                "vehicle_model_id": 287,
                "vehicle_make_id": 25,
                "model": "Boxer BM100",
                "amount": "3000",
                "description": "Boxer BM100",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:34:09.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c480d",
                "vehicle_model_id": 288,
                "vehicle_make_id": 25,
                "model": "MOTORCYCLE",
                "amount": "3000",
                "description": "MOTORCYCLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:34:39.000Z",
                "niip_id": "738"
            },
            {
                "_id": "65a918eb42dc804a210c480e",
                "vehicle_model_id": 289,
                "vehicle_make_id": 25,
                "model": "RE TRICYCLE",
                "amount": "5000",
                "description": "RE TRICYCLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:34:55.000Z",
                "niip_id": "698"
            },
            {
                "_id": "65a918eb42dc804a210c480f",
                "vehicle_model_id": 290,
                "vehicle_make_id": 25,
                "model": "TRC KEKE",
                "amount": "5000",
                "description": "TRC KEKE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:35:21.000Z",
                "niip_id": "698"
            },
            {
                "_id": "65a918eb42dc804a210c4810",
                "vehicle_model_id": 291,
                "vehicle_make_id": 25,
                "model": "KEKE NAPEP",
                "amount": "5000",
                "description": "KEKE NAPEP",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:36:12.000Z",
                "niip_id": "698"
            },
            {
                "_id": "65a918eb42dc804a210c4811",
                "vehicle_model_id": 292,
                "vehicle_make_id": 25,
                "model": "MUV",
                "amount": "3000",
                "description": "MUV",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:07:49.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4812",
                "vehicle_model_id": 293,
                "vehicle_make_id": 25,
                "model": "M/C",
                "amount": "3000",
                "description": "M/C",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:38:00.000Z",
                "niip_id": "738"
            },
            {
                "_id": "65a918eb42dc804a210c4813",
                "vehicle_model_id": 294,
                "vehicle_make_id": 26,
                "model": "3 Series 330i",
                "amount": "15000",
                "description": "3 Series 330i",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:38:42.000Z",
                "niip_id": "37"
            },
            {
                "_id": "65a918eb42dc804a210c4814",
                "vehicle_model_id": 295,
                "vehicle_make_id": 26,
                "model": "5 Series",
                "amount": "15000",
                "description": "5 Series",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:40:00.000Z",
                "niip_id": "38"
            },
            {
                "_id": "65a918eb42dc804a210c4815",
                "vehicle_model_id": 296,
                "vehicle_make_id": 26,
                "model": "X3",
                "amount": "15000",
                "description": "X3",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:40:16.000Z",
                "niip_id": "1016"
            },
            {
                "_id": "65a918eb42dc804a210c4816",
                "vehicle_model_id": 297,
                "vehicle_make_id": 27,
                "model": "MC",
                "amount": "3000",
                "description": "MC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:41:15.000Z",
                "niip_id": "738"
            },
            {
                "_id": "65a918eb42dc804a210c4817",
                "vehicle_model_id": 298,
                "vehicle_make_id": 27,
                "model": "BAJAJ CONTINENTAL",
                "amount": "3000",
                "description": "BAJAJ CONTINENTAL",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:41:56.000Z",
                "niip_id": "738"
            },
            {
                "_id": "65a918eb42dc804a210c4818",
                "vehicle_model_id": 299,
                "vehicle_make_id": 27,
                "model": "Bajaj",
                "amount": "3000",
                "description": "Bajaj",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:42:31.000Z",
                "niip_id": "738"
            },
            {
                "_id": "65a918eb42dc804a210c4819",
                "vehicle_model_id": 300,
                "vehicle_make_id": 28,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:44:09.000Z",
                "niip_id": "5715"
            },
            {
                "_id": "65a918eb42dc804a210c481a",
                "vehicle_model_id": 301,
                "vehicle_make_id": 7,
                "model": "SILVERADO PICKUP",
                "amount": "20000",
                "description": "SILVERADO PICKUP",
                "created_by": "",
                "created_dt": "2023-01-30T09:45:23.000Z",
                "niip_id": "110"
            },
            {
                "_id": "65a918eb42dc804a210c481b",
                "vehicle_model_id": 302,
                "vehicle_make_id": 7,
                "model": "Saloon",
                "amount": "15000",
                "description": "salo",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:45:55.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c481c",
                "vehicle_model_id": 303,
                "vehicle_make_id": 8,
                "model": "VOYAGER",
                "amount": "15000",
                "description": "VOYAGER",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:47:46.000Z",
                "niip_id": "139"
            },
            {
                "_id": "65a918eb42dc804a210c481d",
                "vehicle_model_id": 304,
                "vehicle_make_id": 8,
                "model": "Space Bus",
                "amount": "20000",
                "description": "Space Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:48:23.000Z",
                "niip_id": "1459"
            },
            {
                "_id": "65a918eb42dc804a210c481e",
                "vehicle_model_id": 305,
                "vehicle_make_id": 8,
                "model": "Sebring",
                "amount": "15000",
                "description": "Sebring",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:48:57.000Z",
                "niip_id": "136"
            },
            {
                "_id": "65a918eb42dc804a210c481f",
                "vehicle_model_id": 306,
                "vehicle_make_id": 29,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:49:15.000Z",
                "niip_id": "1459"
            },
            {
                "_id": "65a918eb42dc804a210c4820",
                "vehicle_model_id": 307,
                "vehicle_make_id": 29,
                "model": "BERLINGO",
                "amount": "15000",
                "description": "BERLINGO",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:50:18.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4821",
                "vehicle_model_id": 308,
                "vehicle_make_id": 30,
                "model": "BF 85",
                "amount": "100000",
                "description": "BF 85",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:52:54.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4822",
                "vehicle_model_id": 309,
                "vehicle_make_id": 30,
                "model": "85",
                "amount": "100000",
                "description": "85",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:53:23.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4823",
                "vehicle_model_id": 310,
                "vehicle_make_id": 30,
                "model": "Truck",
                "amount": "100000",
                "description": "Truck",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:53:43.000Z",
                "niip_id": "773"
            },
            {
                "_id": "65a918eb42dc804a210c4824",
                "vehicle_model_id": 311,
                "vehicle_make_id": 22,
                "model": "ANY",
                "amount": "15000",
                "description": "ANY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:55:28.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4825",
                "vehicle_model_id": 312,
                "vehicle_make_id": 22,
                "model": "HIJET Pick UP",
                "amount": "20000",
                "description": "HIJET Pick UP",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:55:45.000Z",
                "niip_id": "1410"
            },
            {
                "_id": "65a918eb42dc804a210c4826",
                "vehicle_model_id": 313,
                "vehicle_make_id": 22,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:56:16.000Z",
                "niip_id": "825"
            },
            {
                "_id": "65a918eb42dc804a210c4827",
                "vehicle_model_id": 314,
                "vehicle_make_id": 22,
                "model": "Hiajet",
                "amount": "20000",
                "description": "hiajet",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:57:02.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4828",
                "vehicle_model_id": 315,
                "vehicle_make_id": 31,
                "model": "HIAJET",
                "amount": "20000",
                "description": "HIAJET",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:57:42.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4829",
                "vehicle_model_id": 316,
                "vehicle_make_id": 32,
                "model": "Ace",
                "amount": "20000",
                "description": "Ace",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:54:23.000Z",
                "niip_id": "1094"
            },
            {
                "_id": "65a918eb42dc804a210c482a",
                "vehicle_model_id": 317,
                "vehicle_make_id": 4,
                "model": "Focus C-Max",
                "amount": "15000",
                "description": "Focus C-Max",
                "created_by": "",
                "created_dt": "2023-01-30T10:12:51.000Z",
                "niip_id": "212"
            },
            {
                "_id": "65a918eb42dc804a210c482b",
                "vehicle_model_id": 318,
                "vehicle_make_id": 4,
                "model": "Focus",
                "amount": "15000",
                "description": "Focus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:13:51.000Z",
                "niip_id": "212"
            },
            {
                "_id": "65a918eb42dc804a210c482c",
                "vehicle_model_id": 319,
                "vehicle_make_id": 4,
                "model": "Van",
                "amount": "20000",
                "description": "van",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:15:10.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c482d",
                "vehicle_model_id": 320,
                "vehicle_make_id": 4,
                "model": "Explorer Eddie Bauer",
                "amount": "15000",
                "description": "Explorer Eddie Bauer",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:16:07.000Z",
                "niip_id": "205"
            },
            {
                "_id": "65a918eb42dc804a210c482e",
                "vehicle_model_id": 321,
                "vehicle_make_id": 5,
                "model": "Golf 3 Wagon",
                "amount": "15000",
                "description": "Golf 3 Wagon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:40:04.000Z",
                "niip_id": "618"
            },
            {
                "_id": "65a918eb42dc804a210c482f",
                "vehicle_model_id": 322,
                "vehicle_make_id": 4,
                "model": "GALAXY",
                "amount": "15000",
                "description": "GALAXY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:16:41.000Z",
                "niip_id": "967"
            },
            {
                "_id": "65a918eb42dc804a210c4830",
                "vehicle_model_id": 323,
                "vehicle_make_id": 4,
                "model": "Ranger",
                "amount": "20000",
                "description": "Ranger",
                "created_by": "",
                "created_dt": "2023-01-30T10:18:16.000Z",
                "niip_id": "216"
            },
            {
                "_id": "65a918eb42dc804a210c4831",
                "vehicle_model_id": 324,
                "vehicle_make_id": 4,
                "model": "Pick up",
                "amount": "20000",
                "description": "pick up",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:18:49.000Z",
                "niip_id": "3756"
            },
            {
                "_id": "65a918eb42dc804a210c4832",
                "vehicle_model_id": 325,
                "vehicle_make_id": 4,
                "model": "Expedition King Ranc",
                "amount": "15000",
                "description": "Expedition King Ranc",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:20:01.000Z",
                "niip_id": "204"
            },
            {
                "_id": "65a918eb42dc804a210c4833",
                "vehicle_model_id": 326,
                "vehicle_make_id": 4,
                "model": "TRANSIT",
                "amount": "20000",
                "description": "TRANSIT",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:20:23.000Z",
                "niip_id": "661"
            },
            {
                "_id": "65a918eb42dc804a210c4834",
                "vehicle_model_id": 327,
                "vehicle_make_id": 4,
                "model": "Explorer Sport Trac",
                "amount": "20000",
                "description": "Explorer Sport Trac",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:21:34.000Z",
                "niip_id": "207"
            },
            {
                "_id": "65a918eb42dc804a210c4835",
                "vehicle_model_id": 328,
                "vehicle_make_id": 4,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:21:53.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4836",
                "vehicle_model_id": 329,
                "vehicle_make_id": 4,
                "model": "Edge SE",
                "amount": "15000",
                "description": "Edge SE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:22:24.000Z",
                "niip_id": "795"
            },
            {
                "_id": "65a918eb42dc804a210c4837",
                "vehicle_model_id": 330,
                "vehicle_make_id": 4,
                "model": "Other",
                "amount": "15000",
                "description": "Other",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:23:05.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4838",
                "vehicle_model_id": 331,
                "vehicle_make_id": 4,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "",
                "created_dt": "2023-01-30T10:23:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4839",
                "vehicle_model_id": 332,
                "vehicle_make_id": 33,
                "model": "FORLAND",
                "amount": "100000",
                "description": "FORLAND",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:24:57.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c483a",
                "vehicle_model_id": 333,
                "vehicle_make_id": 34,
                "model": "MC",
                "amount": "3000",
                "description": "MC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:31:37.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c483b",
                "vehicle_model_id": 334,
                "vehicle_make_id": 3,
                "model": "Accord EX-L",
                "amount": "15000",
                "description": "Accord EX-L",
                "created_by": "",
                "created_dt": "2023-01-30T10:56:38.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c483c",
                "vehicle_model_id": 335,
                "vehicle_make_id": 3,
                "model": "Accord LX",
                "amount": "15000",
                "description": "Accord LX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:57:08.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c483d",
                "vehicle_model_id": 336,
                "vehicle_make_id": 3,
                "model": "Civic EX",
                "amount": "15000",
                "description": "Civic EX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:57:23.000Z",
                "niip_id": "248"
            },
            {
                "_id": "65a918eb42dc804a210c483e",
                "vehicle_model_id": 337,
                "vehicle_make_id": 3,
                "model": "Odyssey DX",
                "amount": "15000",
                "description": "Odyssey DX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:58:06.000Z",
                "niip_id": "253"
            },
            {
                "_id": "65a918eb42dc804a210c483f",
                "vehicle_model_id": 338,
                "vehicle_make_id": 3,
                "model": "CR=V",
                "amount": "15000",
                "description": "CR-V",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:01:22.000Z",
                "niip_id": "249"
            },
            {
                "_id": "65a918eb42dc804a210c4840",
                "vehicle_model_id": 339,
                "vehicle_make_id": 3,
                "model": "Accord LX-P",
                "amount": "15000",
                "description": "Accord LX-P",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:01:34.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c4841",
                "vehicle_model_id": 340,
                "vehicle_make_id": 3,
                "model": "Accord EX / EX-L",
                "amount": "15000",
                "description": "Accord EX / EX-L",
                "created_by": "",
                "created_dt": "2023-01-30T11:01:47.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c4842",
                "vehicle_model_id": 341,
                "vehicle_make_id": 3,
                "model": "Pilot jeep",
                "amount": "15000",
                "description": "pilot jeep",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:02:20.000Z",
                "niip_id": "255"
            },
            {
                "_id": "65a918eb42dc804a210c4843",
                "vehicle_model_id": 342,
                "vehicle_make_id": 3,
                "model": "Jazz",
                "amount": "15000",
                "description": "Jazz",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:02:42.000Z",
                "niip_id": "1239"
            },
            {
                "_id": "65a918eb42dc804a210c4844",
                "vehicle_model_id": 343,
                "vehicle_make_id": 3,
                "model": "Accord sport",
                "amount": "15000",
                "description": "Accord sport",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:02:59.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c4845",
                "vehicle_model_id": 344,
                "vehicle_make_id": 3,
                "model": "Pilot EX-L",
                "amount": "15000",
                "description": "Pilot EX-L",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:03:18.000Z",
                "niip_id": "255"
            },
            {
                "_id": "65a918eb42dc804a210c4846",
                "vehicle_model_id": 345,
                "vehicle_make_id": 3,
                "model": "Civic DX-G",
                "amount": "15000",
                "description": "Civic DX-G",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:03:41.000Z",
                "niip_id": "248"
            },
            {
                "_id": "65a918eb42dc804a210c4847",
                "vehicle_model_id": 346,
                "vehicle_make_id": 3,
                "model": "HONDA - KING",
                "amount": "15000",
                "description": "HONDA - KING",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:03:57.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4848",
                "vehicle_model_id": 347,
                "vehicle_make_id": 3,
                "model": "Accord Touring",
                "amount": "15000",
                "description": "Accord Touring",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:04:10.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c4849",
                "vehicle_model_id": 348,
                "vehicle_make_id": 3,
                "model": "CR-V EX",
                "amount": "15000",
                "description": "CR-V EX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:05:22.000Z",
                "niip_id": "249"
            },
            {
                "_id": "65a918eb42dc804a210c484a",
                "vehicle_model_id": 349,
                "vehicle_make_id": 3,
                "model": "Accord EX",
                "amount": "15000",
                "description": "Accord EX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:05:41.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c484b",
                "vehicle_model_id": 350,
                "vehicle_make_id": 3,
                "model": "Accord DX value",
                "amount": "15000",
                "description": "Accord DX value",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:06:00.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c484c",
                "vehicle_model_id": 351,
                "vehicle_make_id": 3,
                "model": "Accord SE",
                "amount": "15000",
                "description": "Accord SE",
                "created_by": "",
                "created_dt": "2023-01-30T11:12:22.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c484d",
                "vehicle_model_id": 352,
                "vehicle_make_id": 3,
                "model": "CR-V EX-L",
                "amount": "15000",
                "description": "CR-V EX-L",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:12:55.000Z",
                "niip_id": "249"
            },
            {
                "_id": "65a918eb42dc804a210c484e",
                "vehicle_model_id": 353,
                "vehicle_make_id": 3,
                "model": "Odyssey LX",
                "amount": "15000",
                "description": "Odyssey LX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:13:40.000Z",
                "niip_id": "253"
            },
            {
                "_id": "65a918eb42dc804a210c484f",
                "vehicle_model_id": 354,
                "vehicle_make_id": 3,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:14:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4850",
                "vehicle_model_id": 355,
                "vehicle_make_id": 3,
                "model": "Stream",
                "amount": "15000",
                "description": "stream",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:14:26.000Z",
                "niip_id": "1590"
            },
            {
                "_id": "65a918eb42dc804a210c4851",
                "vehicle_model_id": 356,
                "vehicle_make_id": 3,
                "model": "Accord DX",
                "amount": "15000",
                "description": "Accord DX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:14:45.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c4852",
                "vehicle_model_id": 357,
                "vehicle_make_id": 3,
                "model": "Accord EX / SE",
                "amount": "15000",
                "description": "Accord EX / SE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:15:10.000Z",
                "niip_id": "247"
            },
            {
                "_id": "65a918eb42dc804a210c4853",
                "vehicle_model_id": 358,
                "vehicle_make_id": 3,
                "model": "Crosstour EX",
                "amount": "15000",
                "description": "Crosstour EX",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:15:29.000Z",
                "niip_id": "911"
            },
            {
                "_id": "65a918eb42dc804a210c4854",
                "vehicle_model_id": 359,
                "vehicle_make_id": 3,
                "model": "Shuttle",
                "amount": "15000",
                "description": "shuttle",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:15:47.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4855",
                "vehicle_model_id": 360,
                "vehicle_make_id": 35,
                "model": "SINO TRUCK",
                "amount": "100000",
                "description": "SINO TRUCK",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:10:24.000Z",
                "niip_id": "1090"
            },
            {
                "_id": "65a918eb42dc804a210c4856",
                "vehicle_model_id": 361,
                "vehicle_make_id": 35,
                "model": "SINO",
                "amount": "100000",
                "description": "SINO",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:11:16.000Z",
                "niip_id": "1090"
            },
            {
                "_id": "65a918eb42dc804a210c4857",
                "vehicle_model_id": 362,
                "vehicle_make_id": 17,
                "model": "Veracruz",
                "amount": "15000",
                "description": "Veracruz",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:43:21.000Z",
                "niip_id": "948"
            },
            {
                "_id": "65a918eb42dc804a210c4858",
                "vehicle_model_id": 363,
                "vehicle_make_id": 17,
                "model": "ANY",
                "amount": "15000",
                "description": "ANY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:43:46.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4859",
                "vehicle_model_id": 364,
                "vehicle_make_id": 17,
                "model": "ACCENT",
                "amount": "15000",
                "description": "ACCENT",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:43:59.000Z",
                "niip_id": "260"
            },
            {
                "_id": "65a918eb42dc804a210c485a",
                "vehicle_model_id": 365,
                "vehicle_make_id": 17,
                "model": "TUCSON",
                "amount": "15000",
                "description": "TUCSON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:44:16.000Z",
                "niip_id": "1005"
            },
            {
                "_id": "65a918eb42dc804a210c485b",
                "vehicle_model_id": 366,
                "vehicle_make_id": 17,
                "model": "Santa Fe",
                "amount": "15000",
                "description": "Santa Fe",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:44:34.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c485c",
                "vehicle_model_id": 367,
                "vehicle_make_id": 37,
                "model": "CANTER",
                "amount": "100000",
                "description": "CANTER",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:31:49.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c485d",
                "vehicle_model_id": 368,
                "vehicle_make_id": 37,
                "model": "NPR",
                "amount": "100000",
                "description": "NPR",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:32:28.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c485e",
                "vehicle_model_id": 369,
                "vehicle_make_id": 37,
                "model": "ISUZU MINI BUS",
                "amount": "20000",
                "description": "ISUZU MINI BUS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:32:43.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c485f",
                "vehicle_model_id": 370,
                "vehicle_make_id": 37,
                "model": "Mini Pick up",
                "amount": "20000",
                "description": "Mini Pick up",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:33:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4860",
                "vehicle_model_id": 371,
                "vehicle_make_id": 38,
                "model": "CANTER",
                "amount": "100000",
                "description": "CANTER",
                "created_by": "",
                "created_dt": "2023-01-30T09:20:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4861",
                "vehicle_model_id": 372,
                "vehicle_make_id": 38,
                "model": "Truck",
                "amount": "100000",
                "description": "Truck",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:22:04.000Z",
                "niip_id": "702"
            },
            {
                "_id": "65a918eb42dc804a210c4862",
                "vehicle_model_id": 373,
                "vehicle_make_id": 38,
                "model": "EUROSTAR",
                "amount": "100000",
                "description": "EUROSTAR",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:22:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4863",
                "vehicle_model_id": 374,
                "vehicle_make_id": 39,
                "model": "Any",
                "amount": "15000",
                "description": "ANY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:21:35.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4864",
                "vehicle_model_id": 375,
                "vehicle_make_id": 40,
                "model": "Bus",
                "amount": "15000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:24:56.000Z",
                "niip_id": "956"
            },
            {
                "_id": "65a918eb42dc804a210c4865",
                "vehicle_model_id": 376,
                "vehicle_make_id": 41,
                "model": "JC110-19",
                "amount": "3000",
                "description": "JC110-19",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:28:30.000Z",
                "niip_id": "1278"
            },
            {
                "_id": "65a918eb42dc804a210c4866",
                "vehicle_model_id": 377,
                "vehicle_make_id": 41,
                "model": "JC110 Motorcycle",
                "amount": "3000",
                "description": "JC110 Motorcycle",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:28:52.000Z",
                "niip_id": "1278"
            },
            {
                "_id": "65a918eb42dc804a210c4867",
                "vehicle_model_id": 378,
                "vehicle_make_id": 41,
                "model": "Ladies",
                "amount": "3000",
                "description": "Ladies",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:29:13.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4868",
                "vehicle_model_id": 379,
                "vehicle_make_id": 41,
                "model": "Lucky",
                "amount": "3000",
                "description": "Lucky",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:30:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4869",
                "vehicle_model_id": 380,
                "vehicle_make_id": 41,
                "model": "MOTORCYCLE",
                "amount": "3000",
                "description": "MOTORCYCLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:29:34.000Z",
                "niip_id": "3931"
            },
            {
                "_id": "65a918eb42dc804a210c486a",
                "vehicle_model_id": 381,
                "vehicle_make_id": 16,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:35:34.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c486b",
                "vehicle_model_id": 382,
                "vehicle_make_id": 16,
                "model": "Truck",
                "amount": "20000",
                "description": "Truck",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:37:29.000Z",
                "niip_id": "2161"
            },
            {
                "_id": "65a918eb42dc804a210c486c",
                "vehicle_model_id": 383,
                "vehicle_make_id": 16,
                "model": "KIA SPACE BUS",
                "amount": "15000",
                "description": "KIA SPACE BUS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:37:05.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c486d",
                "vehicle_model_id": 384,
                "vehicle_make_id": 16,
                "model": "Sportage",
                "amount": "15000",
                "description": "Sportage",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:37:28.000Z",
                "niip_id": "321"
            },
            {
                "_id": "65a918eb42dc804a210c486e",
                "vehicle_model_id": 385,
                "vehicle_make_id": 16,
                "model": "CARENS",
                "amount": "15000",
                "description": "CARENS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:38:15.000Z",
                "niip_id": "974"
            },
            {
                "_id": "65a918eb42dc804a210c486f",
                "vehicle_model_id": 386,
                "vehicle_make_id": 16,
                "model": "CERATO",
                "amount": "15000",
                "description": "CERATO",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:38:35.000Z",
                "niip_id": "713"
            },
            {
                "_id": "65a918eb42dc804a210c4870",
                "vehicle_model_id": 387,
                "vehicle_make_id": 42,
                "model": "Jeep",
                "amount": "15000",
                "description": "Jeep",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:38:40.000Z",
                "niip_id": "1043"
            },
            {
                "_id": "65a918eb42dc804a210c4871",
                "vehicle_model_id": 388,
                "vehicle_make_id": 42,
                "model": "LR3",
                "amount": "15000",
                "description": "LR3",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:38:49.000Z",
                "niip_id": "1043"
            },
            {
                "_id": "65a918eb42dc804a210c4872",
                "vehicle_model_id": 389,
                "vehicle_make_id": 42,
                "model": "Range Rover Supercha",
                "amount": "15000",
                "description": "Range Rover Supercha",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:39:24.000Z",
                "niip_id": "325"
            },
            {
                "_id": "65a918eb42dc804a210c4873",
                "vehicle_model_id": 390,
                "vehicle_make_id": 14,
                "model": "330",
                "amount": "15000",
                "description": "330",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:45:38.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4874",
                "vehicle_model_id": 391,
                "vehicle_make_id": 14,
                "model": "ES 350",
                "amount": "15000",
                "description": "ES 350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:45:38.000Z",
                "niip_id": "735"
            },
            {
                "_id": "65a918eb42dc804a210c4875",
                "vehicle_model_id": 392,
                "vehicle_make_id": 14,
                "model": "GX 470",
                "amount": "15000",
                "description": "GX 470",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:54:59.000Z",
                "niip_id": "736"
            },
            {
                "_id": "65a918eb42dc804a210c4876",
                "vehicle_model_id": 393,
                "vehicle_make_id": 14,
                "model": "GX-470",
                "amount": "15000",
                "description": "GX-470",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:55:10.000Z",
                "niip_id": "736"
            },
            {
                "_id": "65a918eb42dc804a210c4877",
                "vehicle_model_id": 394,
                "vehicle_make_id": 14,
                "model": "GS 350",
                "amount": "15000",
                "description": "Gs 350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:55:15.000Z",
                "niip_id": "1757"
            },
            {
                "_id": "65a918eb42dc804a210c4878",
                "vehicle_model_id": 395,
                "vehicle_make_id": 43,
                "model": "TIPPER",
                "amount": "100000",
                "description": "TIPPER",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:57:59.000Z",
                "niip_id": "1083"
            },
            {
                "_id": "65a918eb42dc804a210c4879",
                "vehicle_model_id": 396,
                "vehicle_make_id": 44,
                "model": "Jeep",
                "amount": "15000",
                "description": "Jeep",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:58:30.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c487a",
                "vehicle_model_id": 397,
                "vehicle_make_id": 45,
                "model": "Motocycle",
                "amount": "3000",
                "description": "INDUSTRY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:03:07.000Z",
                "niip_id": "1096"
            },
            {
                "_id": "65a918eb42dc804a210c487b",
                "vehicle_model_id": 398,
                "vehicle_make_id": 46,
                "model": "Ch613",
                "amount": "100000",
                "description": "Ch613",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:03:50.000Z",
                "niip_id": "1083"
            },
            {
                "_id": "65a918eb42dc804a210c487c",
                "vehicle_model_id": 399,
                "vehicle_make_id": 48,
                "model": "PICK-UP",
                "amount": "20000",
                "description": "PICK-UP",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:04:28.000Z",
                "niip_id": "761"
            },
            {
                "_id": "65a918eb42dc804a210c487d",
                "vehicle_model_id": 400,
                "vehicle_make_id": 15,
                "model": "S/wagon",
                "amount": "15000",
                "description": "S/wagon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:04:52.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c487e",
                "vehicle_model_id": 401,
                "vehicle_make_id": 0,
                "model": "626",
                "amount": null,
                "description": "626",
                "created_by": "20200511103543",
                "created_dt": "2020-08-25T06:27:58.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c487f",
                "vehicle_model_id": 402,
                "vehicle_make_id": 15,
                "model": "323",
                "amount": "15000",
                "description": "323",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:04:22.000Z",
                "niip_id": "350"
            },
            {
                "_id": "65a918eb42dc804a210c4880",
                "vehicle_model_id": 403,
                "vehicle_make_id": 15,
                "model": "5",
                "amount": "15000",
                "description": "5",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:04:22.000Z",
                "niip_id": "1941"
            },
            {
                "_id": "65a918eb42dc804a210c4881",
                "vehicle_model_id": 404,
                "vehicle_make_id": 15,
                "model": "PREMACY",
                "amount": "15000",
                "description": "PREMACY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:06:36.000Z",
                "niip_id": "781"
            },
            {
                "_id": "65a918eb42dc804a210c4882",
                "vehicle_model_id": 405,
                "vehicle_make_id": 6,
                "model": "Benz",
                "amount": "15000",
                "description": "Benz",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:16:14.000Z",
                "niip_id": "2166"
            },
            {
                "_id": "65a918eb42dc804a210c4883",
                "vehicle_model_id": 406,
                "vehicle_make_id": 6,
                "model": "C 200 SALOON",
                "amount": "15000",
                "description": "C 200 SALOON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:17:01.000Z",
                "niip_id": "1475"
            },
            {
                "_id": "65a918eb42dc804a210c4884",
                "vehicle_model_id": 407,
                "vehicle_make_id": 6,
                "model": "ANY",
                "amount": "15000",
                "description": "ANY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:17:32.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4885",
                "vehicle_model_id": 408,
                "vehicle_make_id": 6,
                "model": "C Class C230",
                "amount": "15000",
                "description": "C Class C230",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:17:32.000Z",
                "niip_id": "405"
            },
            {
                "_id": "65a918eb42dc804a210c4886",
                "vehicle_model_id": 409,
                "vehicle_make_id": 6,
                "model": "C-200",
                "amount": "15000",
                "description": "C-200",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:33:29.000Z",
                "niip_id": "1475"
            },
            {
                "_id": "65a918eb42dc804a210c4887",
                "vehicle_model_id": 410,
                "vehicle_make_id": 6,
                "model": "C220",
                "amount": "20000",
                "description": "C220",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:18:54.000Z",
                "niip_id": "892"
            },
            {
                "_id": "65a918eb42dc804a210c4888",
                "vehicle_model_id": 411,
                "vehicle_make_id": 6,
                "model": "GLC Class GLC300",
                "amount": "15000",
                "description": "GLC Class GLC300",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:20:33.000Z",
                "niip_id": "2521"
            },
            {
                "_id": "65a918eb42dc804a210c4889",
                "vehicle_model_id": 412,
                "vehicle_make_id": 6,
                "model": "GLE Class GLE350",
                "amount": "15000",
                "description": "GLE Class GLE350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:23:59.000Z",
                "niip_id": "2407"
            },
            {
                "_id": "65a918eb42dc804a210c488a",
                "vehicle_model_id": 413,
                "vehicle_make_id": 6,
                "model": "GLK Class GLK350",
                "amount": "15000",
                "description": "GLK Class GLK350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:34:04.000Z",
                "niip_id": "1669"
            },
            {
                "_id": "65a918eb42dc804a210c488b",
                "vehicle_model_id": 414,
                "vehicle_make_id": 6,
                "model": "GLK-Class",
                "amount": "15000",
                "description": "GLK-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:34:54.000Z",
                "niip_id": "1669"
            },
            {
                "_id": "65a918eb42dc804a210c488c",
                "vehicle_model_id": 415,
                "vehicle_make_id": 6,
                "model": "M-Class",
                "amount": "15000",
                "description": "M-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:35:15.000Z",
                "niip_id": "410"
            },
            {
                "_id": "65a918eb42dc804a210c488d",
                "vehicle_model_id": 416,
                "vehicle_make_id": 6,
                "model": "SALOON",
                "amount": "15000",
                "description": "SALOON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:35:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c488e",
                "vehicle_model_id": 417,
                "vehicle_make_id": 6,
                "model": "A160",
                "amount": "15000",
                "description": "A160",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:36:19.000Z",
                "niip_id": "1291"
            },
            {
                "_id": "65a918eb42dc804a210c488f",
                "vehicle_model_id": 418,
                "vehicle_make_id": 6,
                "model": "C Class C240",
                "amount": "15000",
                "description": "C Class C240",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:36:56.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4890",
                "vehicle_model_id": 419,
                "vehicle_make_id": 6,
                "model": "C Class C300",
                "amount": "15000",
                "description": "C Class C300",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:37:21.000Z",
                "niip_id": "875"
            },
            {
                "_id": "65a918eb42dc804a210c4891",
                "vehicle_model_id": 420,
                "vehicle_make_id": 6,
                "model": "C300",
                "amount": "15000",
                "description": "C300",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:37:28.000Z",
                "niip_id": "1445"
            },
            {
                "_id": "65a918eb42dc804a210c4892",
                "vehicle_model_id": 421,
                "vehicle_make_id": 6,
                "model": "C Class C350",
                "amount": "15000",
                "description": "C Class C350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:37:35.000Z",
                "niip_id": "1445"
            },
            {
                "_id": "65a918eb42dc804a210c4893",
                "vehicle_model_id": 422,
                "vehicle_make_id": 6,
                "model": "M Class ML350",
                "amount": "15000",
                "description": "M Class ML350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:38:20.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4894",
                "vehicle_model_id": 423,
                "vehicle_make_id": 6,
                "model": "C240",
                "amount": "15000",
                "description": "C240",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:38:26.000Z",
                "niip_id": "1051"
            },
            {
                "_id": "65a918eb42dc804a210c4895",
                "vehicle_model_id": 424,
                "vehicle_make_id": 6,
                "model": "E Class E350",
                "amount": "15000",
                "description": "E Class E350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:38:37.000Z",
                "niip_id": "937"
            },
            {
                "_id": "65a918eb42dc804a210c4896",
                "vehicle_model_id": 425,
                "vehicle_make_id": 6,
                "model": "E Class",
                "amount": "15000",
                "description": "E Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:38:54.000Z",
                "niip_id": "408"
            },
            {
                "_id": "65a918eb42dc804a210c4897",
                "vehicle_model_id": 426,
                "vehicle_make_id": 6,
                "model": "C180",
                "amount": "15000",
                "description": "C180",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:39:55.000Z",
                "niip_id": "793"
            },
            {
                "_id": "65a918eb42dc804a210c4898",
                "vehicle_model_id": 427,
                "vehicle_make_id": 6,
                "model": "190",
                "amount": "15000",
                "description": "190",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:40:55.000Z",
                "niip_id": "950"
            },
            {
                "_id": "65a918eb42dc804a210c4899",
                "vehicle_model_id": 428,
                "vehicle_make_id": 6,
                "model": "C204",
                "amount": "15000",
                "description": "C204",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:40:59.000Z",
                "niip_id": "875"
            },
            {
                "_id": "65a918eb42dc804a210c489a",
                "vehicle_model_id": 429,
                "vehicle_make_id": 6,
                "model": "Salon",
                "amount": "15000",
                "description": "Salon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:41:25.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c489b",
                "vehicle_model_id": 430,
                "vehicle_make_id": 6,
                "model": "P/UP 2000",
                "amount": "20000",
                "description": "P/UP 2000",
                "created_by": "",
                "created_dt": "2023-01-30T11:45:47.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c489c",
                "vehicle_model_id": 431,
                "vehicle_make_id": 6,
                "model": "A200",
                "amount": "15000",
                "description": "A200",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:47:03.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c489d",
                "vehicle_model_id": 432,
                "vehicle_make_id": 6,
                "model": "GL-Class",
                "amount": "15000",
                "description": "GL-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:47:06.000Z",
                "niip_id": "930"
            },
            {
                "_id": "65a918eb42dc804a210c489e",
                "vehicle_model_id": 433,
                "vehicle_make_id": 6,
                "model": "E200",
                "amount": "15000",
                "description": "E200",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:47:12.000Z",
                "niip_id": "2053"
            },
            {
                "_id": "65a918eb42dc804a210c489f",
                "vehicle_model_id": 434,
                "vehicle_make_id": 6,
                "model": "C Class C280",
                "amount": "15000",
                "description": "C Class C280",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:47:42.000Z",
                "niip_id": "405"
            },
            {
                "_id": "65a918eb42dc804a210c48a0",
                "vehicle_model_id": 435,
                "vehicle_make_id": 6,
                "model": "C Class",
                "amount": "15000",
                "description": "C Class",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:47:48.000Z",
                "niip_id": "405"
            },
            {
                "_id": "65a918eb42dc804a210c48a1",
                "vehicle_model_id": 436,
                "vehicle_make_id": 6,
                "model": "GLK350 JEEP",
                "amount": "15000",
                "description": "GLK350 JEEP",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:51:56.000Z",
                "niip_id": "1669"
            },
            {
                "_id": "65a918eb42dc804a210c48a2",
                "vehicle_model_id": 437,
                "vehicle_make_id": 6,
                "model": "C 230  Kompresso",
                "amount": "15000",
                "description": "C 230  Kompresso",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:52:02.000Z",
                "niip_id": "893"
            },
            {
                "_id": "65a918eb42dc804a210c48a3",
                "vehicle_model_id": 438,
                "vehicle_make_id": 49,
                "model": "RUSSIAN MINI BUS",
                "amount": "20000",
                "description": "RUSSIAN MINI BUS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:00:12.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48a4",
                "vehicle_model_id": 439,
                "vehicle_make_id": 23,
                "model": "Salon",
                "amount": "15000",
                "description": "salon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:03:09.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48a5",
                "vehicle_model_id": 440,
                "vehicle_make_id": 23,
                "model": "Pick up",
                "amount": "20000",
                "description": "pick up",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:04:23.000Z",
                "niip_id": "443"
            },
            {
                "_id": "65a918eb42dc804a210c48a6",
                "vehicle_model_id": 441,
                "vehicle_make_id": 23,
                "model": "HIJET",
                "amount": "20000",
                "description": "HIJET",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:05:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48a7",
                "vehicle_model_id": 442,
                "vehicle_make_id": 23,
                "model": "SPACE RUNNER",
                "amount": "15000",
                "description": "SPACE RUNNER",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:05:37.000Z",
                "niip_id": "855"
            },
            {
                "_id": "65a918eb42dc804a210c48a8",
                "vehicle_model_id": 443,
                "vehicle_make_id": 23,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:05:54.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48a9",
                "vehicle_model_id": 444,
                "vehicle_make_id": 23,
                "model": "S/WAGON",
                "amount": "15000",
                "description": "S/WAGON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:06:32.000Z",
                "niip_id": "715"
            },
            {
                "_id": "65a918eb42dc804a210c48aa",
                "vehicle_model_id": 445,
                "vehicle_make_id": 2,
                "model": "Salon",
                "amount": "15000",
                "description": "salon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:22:53.000Z",
                "niip_id": "768"
            },
            {
                "_id": "65a918eb42dc804a210c48ab",
                "vehicle_model_id": 446,
                "vehicle_make_id": 2,
                "model": "ALMERA",
                "amount": "15000",
                "description": "ALMERA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:23:45.000Z",
                "niip_id": "686"
            },
            {
                "_id": "65a918eb42dc804a210c48ac",
                "vehicle_model_id": 447,
                "vehicle_make_id": 2,
                "model": "Altima Base / S / SL",
                "amount": "15000",
                "description": "Altima Base / S / SL",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:24:29.000Z",
                "niip_id": "452"
            },
            {
                "_id": "65a918eb42dc804a210c48ad",
                "vehicle_model_id": 448,
                "vehicle_make_id": 2,
                "model": "Micra",
                "amount": "15000",
                "description": "Micra",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:22:57.000Z",
                "niip_id": "694"
            },
            {
                "_id": "65a918eb42dc804a210c48ae",
                "vehicle_model_id": 449,
                "vehicle_make_id": 2,
                "model": "Maxima S / SV",
                "amount": "15000",
                "description": "Maxima S / SV",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:23:23.000Z",
                "niip_id": "455"
            },
            {
                "_id": "65a918eb42dc804a210c48af",
                "vehicle_model_id": 450,
                "vehicle_make_id": 2,
                "model": "Pathfinder",
                "amount": "15000",
                "description": "Pathfinder",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:23:02.000Z",
                "niip_id": "459"
            },
            {
                "_id": "65a918eb42dc804a210c48b0",
                "vehicle_model_id": 451,
                "vehicle_make_id": 2,
                "model": "NV 200 S / SV",
                "amount": "15000",
                "description": "NV 200 S / SV",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:23:28.000Z",
                "niip_id": "2506"
            },
            {
                "_id": "65a918eb42dc804a210c48b1",
                "vehicle_model_id": 452,
                "vehicle_make_id": 2,
                "model": "INFINITY",
                "amount": "15000",
                "description": "INFINITY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:25:49.000Z",
                "niip_id": "764"
            },
            {
                "_id": "65a918eb42dc804a210c48b2",
                "vehicle_model_id": 453,
                "vehicle_make_id": 2,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:23:50.000Z",
                "niip_id": "768"
            },
            {
                "_id": "65a918eb42dc804a210c48b3",
                "vehicle_model_id": 454,
                "vehicle_make_id": 2,
                "model": "Primera",
                "amount": "15000",
                "description": "Primera",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:23:12.000Z",
                "niip_id": "668"
            },
            {
                "_id": "65a918eb42dc804a210c48b4",
                "vehicle_model_id": 455,
                "vehicle_make_id": 50,
                "model": "ZAFIRA-VAN",
                "amount": "15000",
                "description": "ZAFIRA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:26:01.000Z",
                "niip_id": "901"
            },
            {
                "_id": "65a918eb42dc804a210c48b5",
                "vehicle_model_id": 456,
                "vehicle_make_id": 50,
                "model": "Astra",
                "amount": "15000",
                "description": "Astra",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:26:37.000Z",
                "niip_id": "775"
            },
            {
                "_id": "65a918eb42dc804a210c48b6",
                "vehicle_model_id": 457,
                "vehicle_make_id": 50,
                "model": "Combo",
                "amount": "20000",
                "description": "Combo",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:27:08.000Z",
                "niip_id": "1875"
            },
            {
                "_id": "65a918eb42dc804a210c48b7",
                "vehicle_model_id": 458,
                "vehicle_make_id": 50,
                "model": "Carsa",
                "amount": "15000",
                "description": "Carsa",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:27:50.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48b8",
                "vehicle_model_id": 459,
                "vehicle_make_id": 50,
                "model": "Vectra",
                "amount": "15000",
                "description": "Vectra",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:28:48.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48b9",
                "vehicle_model_id": 460,
                "vehicle_make_id": 18,
                "model": "408",
                "amount": "15000",
                "description": "408",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:05:17.000Z",
                "niip_id": "1901"
            },
            {
                "_id": "65a918eb42dc804a210c48ba",
                "vehicle_model_id": 461,
                "vehicle_make_id": 18,
                "model": "406 STATION WAGON",
                "amount": "15000",
                "description": "406 STATION WAGON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:05:45.000Z",
                "niip_id": "697"
            },
            {
                "_id": "65a918eb42dc804a210c48bb",
                "vehicle_model_id": 462,
                "vehicle_make_id": 18,
                "model": "406 saloon",
                "amount": "15000",
                "description": "406 Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:06:33.000Z",
                "niip_id": "697"
            },
            {
                "_id": "65a918eb42dc804a210c48bc",
                "vehicle_model_id": 463,
                "vehicle_make_id": 18,
                "model": "406",
                "amount": "15000",
                "description": "406",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:06:54.000Z",
                "niip_id": "697"
            },
            {
                "_id": "65a918eb42dc804a210c48bd",
                "vehicle_model_id": 464,
                "vehicle_make_id": 18,
                "model": "806",
                "amount": "15000",
                "description": "806",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:07:27.000Z",
                "niip_id": "952"
            },
            {
                "_id": "65a918eb42dc804a210c48be",
                "vehicle_model_id": 465,
                "vehicle_make_id": 18,
                "model": "508",
                "amount": "15000",
                "description": "508",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:08:40.000Z",
                "niip_id": "1198"
            },
            {
                "_id": "65a918eb42dc804a210c48bf",
                "vehicle_model_id": 466,
                "vehicle_make_id": 18,
                "model": "Pick up",
                "amount": "20000",
                "description": "pick up",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:09:14.000Z",
                "niip_id": "1071"
            },
            {
                "_id": "65a918eb42dc804a210c48c0",
                "vehicle_model_id": 467,
                "vehicle_make_id": 18,
                "model": "Boxer",
                "amount": "20000",
                "description": "Boxer",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:09:51.000Z",
                "niip_id": "1259"
            },
            {
                "_id": "65a918eb42dc804a210c48c1",
                "vehicle_model_id": 468,
                "vehicle_make_id": 18,
                "model": "ALSVIN AUTO",
                "amount": "15000",
                "description": "ALSVIN AUTO",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:10:33.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48c2",
                "vehicle_model_id": 469,
                "vehicle_make_id": 18,
                "model": "306",
                "amount": "15000",
                "description": "306",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:11:00.000Z",
                "niip_id": "779"
            },
            {
                "_id": "65a918eb42dc804a210c48c3",
                "vehicle_model_id": 470,
                "vehicle_make_id": 18,
                "model": "308",
                "amount": "15000",
                "description": "308",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:11:36.000Z",
                "niip_id": "1167"
            },
            {
                "_id": "65a918eb42dc804a210c48c4",
                "vehicle_model_id": 471,
                "vehicle_make_id": 18,
                "model": "404",
                "amount": "15000",
                "description": "404",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:12:12.000Z",
                "niip_id": "1412"
            },
            {
                "_id": "65a918eb42dc804a210c48c5",
                "vehicle_model_id": 472,
                "vehicle_make_id": 18,
                "model": "208",
                "amount": "15000",
                "description": "208",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:12:53.000Z",
                "niip_id": "3832"
            },
            {
                "_id": "65a918eb42dc804a210c48c6",
                "vehicle_model_id": 473,
                "vehicle_make_id": 51,
                "model": "TRC",
                "amount": "5000",
                "description": "TRC",
                "created_by": "",
                "created_dt": "2023-01-30T10:13:38.000Z",
                "niip_id": "739"
            },
            {
                "_id": "65a918eb42dc804a210c48c7",
                "vehicle_model_id": 474,
                "vehicle_make_id": 51,
                "model": "ANY",
                "amount": "5000",
                "description": "ANY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:16:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48c8",
                "vehicle_model_id": 475,
                "vehicle_make_id": 51,
                "model": "Keke",
                "amount": "5000",
                "description": "keke",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:16:25.000Z",
                "niip_id": "739"
            },
            {
                "_id": "65a918eb42dc804a210c48c9",
                "vehicle_model_id": 476,
                "vehicle_make_id": 51,
                "model": "KEKE NAPEP",
                "amount": "5000",
                "description": "KEKE NAPEP",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:16:54.000Z",
                "niip_id": "739"
            },
            {
                "_id": "65a918eb42dc804a210c48ca",
                "vehicle_model_id": 477,
                "vehicle_make_id": 52,
                "model": "ANY",
                "amount": "15000",
                "description": "ANY",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:25:59.000Z",
                "niip_id": "1677"
            },
            {
                "_id": "65a918eb42dc804a210c48cb",
                "vehicle_model_id": 478,
                "vehicle_make_id": 9,
                "model": "Vibe",
                "amount": "15000",
                "description": "Vibe",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:17:27.000Z",
                "niip_id": "524"
            },
            {
                "_id": "65a918eb42dc804a210c48cc",
                "vehicle_model_id": 479,
                "vehicle_make_id": 53,
                "model": "MOTORCYCLE",
                "amount": "3000",
                "description": "MOTORCYCLE",
                "created_by": "",
                "created_dt": "2023-01-30T10:18:57.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48cd",
                "vehicle_model_id": 480,
                "vehicle_make_id": 24,
                "model": "Rover",
                "amount": "15000",
                "description": "Rover",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:31:39.000Z",
                "niip_id": "788"
            },
            {
                "_id": "65a918eb42dc804a210c48ce",
                "vehicle_model_id": 481,
                "vehicle_make_id": 54,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:34:42.000Z",
                "niip_id": "532"
            },
            {
                "_id": "65a918eb42dc804a210c48cf",
                "vehicle_model_id": 482,
                "vehicle_make_id": 54,
                "model": "S/wagon",
                "amount": "15000",
                "description": "S/wagon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:35:28.000Z",
                "niip_id": "532"
            },
            {
                "_id": "65a918eb42dc804a210c48d0",
                "vehicle_model_id": 483,
                "vehicle_make_id": 54,
                "model": "Master",
                "amount": "20000",
                "description": "Master",
                "created_by": "",
                "created_dt": "2023-01-30T10:37:12.000Z",
                "niip_id": "777"
            },
            {
                "_id": "65a918eb42dc804a210c48d1",
                "vehicle_model_id": 484,
                "vehicle_make_id": 54,
                "model": "MEGANE",
                "amount": "15000",
                "description": "MEGANE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:41:39.000Z",
                "niip_id": "2539"
            },
            {
                "_id": "65a918eb42dc804a210c48d2",
                "vehicle_model_id": 485,
                "vehicle_make_id": 54,
                "model": "SCENIC",
                "amount": "15000",
                "description": "SCENIC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:42:24.000Z",
                "niip_id": "1980"
            },
            {
                "_id": "65a918eb42dc804a210c48d3",
                "vehicle_model_id": 486,
                "vehicle_make_id": 57,
                "model": "OCTAVIA",
                "amount": "15000",
                "description": "OCTAVIA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:44:10.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48d4",
                "vehicle_model_id": 487,
                "vehicle_make_id": 56,
                "model": "ALHAMBRA",
                "amount": "15000",
                "description": "ALHAMBRA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:44:42.000Z",
                "niip_id": "757"
            },
            {
                "_id": "65a918eb42dc804a210c48d5",
                "vehicle_model_id": 488,
                "vehicle_make_id": 58,
                "model": "Senke",
                "amount": "15000",
                "description": "Senke",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:46:06.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48d6",
                "vehicle_model_id": 489,
                "vehicle_make_id": 21,
                "model": "VITARA",
                "amount": "15000",
                "description": "VITARA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:48:18.000Z",
                "niip_id": "577"
            },
            {
                "_id": "65a918eb42dc804a210c48d7",
                "vehicle_model_id": 490,
                "vehicle_make_id": 21,
                "model": "Mini Bus",
                "amount": "20000",
                "description": "Mini Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:49:56.000Z",
                "niip_id": "1029"
            },
            {
                "_id": "65a918eb42dc804a210c48d8",
                "vehicle_model_id": 491,
                "vehicle_make_id": 21,
                "model": "HIJET",
                "amount": "20000",
                "description": "HIJET",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:51:47.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48d9",
                "vehicle_model_id": 492,
                "vehicle_make_id": 21,
                "model": "Grand VITARA",
                "amount": "15000",
                "description": "Grand VITARA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:52:49.000Z",
                "niip_id": "577"
            },
            {
                "_id": "65a918eb42dc804a210c48da",
                "vehicle_model_id": 493,
                "vehicle_make_id": 21,
                "model": "Every",
                "amount": "20000",
                "description": "Every",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:53:26.000Z",
                "niip_id": "2071"
            },
            {
                "_id": "65a918eb42dc804a210c48db",
                "vehicle_model_id": 494,
                "vehicle_make_id": 32,
                "model": "TIPPER",
                "amount": "100000",
                "description": "TIPPER",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:54:52.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48dc",
                "vehicle_model_id": 495,
                "vehicle_make_id": 32,
                "model": "Pick up",
                "amount": "20000",
                "description": "pick up",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:55:35.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48dd",
                "vehicle_model_id": 496,
                "vehicle_make_id": 1,
                "model": "Camry CE / LE / XLE",
                "amount": "15000",
                "description": "Camry CE / LE / XLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:59:56.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c48de",
                "vehicle_model_id": 497,
                "vehicle_make_id": 1,
                "model": "4 runner",
                "amount": "15000",
                "description": "4 runner",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:24:59.000Z",
                "niip_id": "584"
            },
            {
                "_id": "65a918eb42dc804a210c48df",
                "vehicle_model_id": 498,
                "vehicle_make_id": 1,
                "model": "Corolla CE / LE / SE",
                "amount": "15000",
                "description": "Corolla CE / LE / SE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:24:42.000Z",
                "niip_id": "589"
            },
            {
                "_id": "65a918eb42dc804a210c48e0",
                "vehicle_model_id": 499,
                "vehicle_make_id": 1,
                "model": "Sienna CE",
                "amount": "15000",
                "description": "Sienna CE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:01:25.000Z",
                "niip_id": "604"
            },
            {
                "_id": "65a918eb42dc804a210c48e1",
                "vehicle_model_id": 500,
                "vehicle_make_id": 1,
                "model": "Yaris LE / RS",
                "amount": "15000",
                "description": "Yaris LE / RS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:24:25.000Z",
                "niip_id": "744"
            },
            {
                "_id": "65a918eb42dc804a210c48e2",
                "vehicle_model_id": 501,
                "vehicle_make_id": 1,
                "model": "CARINA E",
                "amount": "15000",
                "description": "CARINA E",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:24:09.000Z",
                "niip_id": "693"
            },
            {
                "_id": "65a918eb42dc804a210c48e3",
                "vehicle_model_id": 502,
                "vehicle_make_id": 1,
                "model": "Sienna LE / XLE",
                "amount": "15000",
                "description": "Sienna LE / XLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:23:39.000Z",
                "niip_id": "604"
            },
            {
                "_id": "65a918eb42dc804a210c48e4",
                "vehicle_model_id": 503,
                "vehicle_make_id": 1,
                "model": "Yaris L / LE / SE",
                "amount": "15000",
                "description": "Yaris L / LE / SE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:23:18.000Z",
                "niip_id": "744"
            },
            {
                "_id": "65a918eb42dc804a210c48e5",
                "vehicle_model_id": 504,
                "vehicle_make_id": 1,
                "model": "Carina11",
                "amount": "15000",
                "description": "Carina11",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:05:31.000Z",
                "niip_id": "1874"
            },
            {
                "_id": "65a918eb42dc804a210c48e6",
                "vehicle_model_id": 505,
                "vehicle_make_id": 1,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:01:32.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48e7",
                "vehicle_model_id": 506,
                "vehicle_make_id": 1,
                "model": "COROLLA VERSO",
                "amount": "15000",
                "description": "COROLLA VERSO",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:57:54.000Z",
                "niip_id": "589"
            },
            {
                "_id": "65a918eb42dc804a210c48e8",
                "vehicle_model_id": 507,
                "vehicle_make_id": 1,
                "model": "Camry LE / SE / XLE",
                "amount": "15000",
                "description": "Camry LE / SE / XLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:22:58.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c48e9",
                "vehicle_model_id": 508,
                "vehicle_make_id": 1,
                "model": "HIJET",
                "amount": "20000",
                "description": "HIJET",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:02:13.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48ea",
                "vehicle_model_id": 509,
                "vehicle_make_id": 1,
                "model": "DYNA",
                "amount": "20000",
                "description": "DYNA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:02:46.000Z",
                "niip_id": "724"
            },
            {
                "_id": "65a918eb42dc804a210c48eb",
                "vehicle_model_id": 510,
                "vehicle_make_id": 1,
                "model": "P",
                "amount": "20000",
                "description": "pick up",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:03:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48ec",
                "vehicle_model_id": 511,
                "vehicle_make_id": 1,
                "model": "AVENSES",
                "amount": "15000",
                "description": "AVENSES",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:27:07.000Z",
                "niip_id": "589"
            },
            {
                "_id": "65a918eb42dc804a210c48ed",
                "vehicle_model_id": 512,
                "vehicle_make_id": 1,
                "model": "Carina",
                "amount": "15000",
                "description": "Carina",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:26:50.000Z",
                "niip_id": "693"
            },
            {
                "_id": "65a918eb42dc804a210c48ee",
                "vehicle_model_id": 513,
                "vehicle_make_id": 1,
                "model": "CALDINA",
                "amount": "15000",
                "description": "CALDINA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:21:25.000Z",
                "niip_id": "1797"
            },
            {
                "_id": "65a918eb42dc804a210c48ef",
                "vehicle_model_id": 514,
                "vehicle_make_id": 1,
                "model": "HIACE BUS",
                "amount": "20000",
                "description": "HIACE BUS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:20:49.000Z",
                "niip_id": "2087"
            },
            {
                "_id": "65a918eb42dc804a210c48f0",
                "vehicle_model_id": 515,
                "vehicle_make_id": 1,
                "model": "Verso",
                "amount": "15000",
                "description": "Verso",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:20:28.000Z",
                "niip_id": "1608"
            },
            {
                "_id": "65a918eb42dc804a210c48f1",
                "vehicle_model_id": 516,
                "vehicle_make_id": 1,
                "model": "2015",
                "amount": "15000",
                "description": "2015",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:27:00.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c48f2",
                "vehicle_model_id": 517,
                "vehicle_make_id": 1,
                "model": "Sienna Limited / XLE",
                "amount": "15000",
                "description": "Sienna Limited / XLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:04:58.000Z",
                "niip_id": "604"
            },
            {
                "_id": "65a918eb42dc804a210c48f3",
                "vehicle_model_id": 518,
                "vehicle_make_id": 1,
                "model": "Matrix Base / XR",
                "amount": "15000",
                "description": "Matrix Base / XR",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:19:55.000Z",
                "niip_id": "594"
            },
            {
                "_id": "65a918eb42dc804a210c48f4",
                "vehicle_model_id": 519,
                "vehicle_make_id": 1,
                "model": "ALTIS",
                "amount": "15000",
                "description": "ALTIS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:19:29.000Z",
                "niip_id": " 3752"
            },
            {
                "_id": "65a918eb42dc804a210c48f5",
                "vehicle_model_id": 520,
                "vehicle_make_id": 1,
                "model": "Camry Base / LE / SE",
                "amount": "15000",
                "description": "Camry Base / LE / SE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:18:49.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c48f6",
                "vehicle_model_id": 521,
                "vehicle_make_id": 1,
                "model": "PRADO",
                "amount": "15000",
                "description": "PRADO",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:04:20.000Z",
                "niip_id": "710"
            },
            {
                "_id": "65a918eb42dc804a210c48f7",
                "vehicle_model_id": 522,
                "vehicle_make_id": 1,
                "model": "Highlander Base / LE",
                "amount": "15000",
                "description": "Highlander Base / LE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:05:54.000Z",
                "niip_id": "592"
            },
            {
                "_id": "65a918eb42dc804a210c48f8",
                "vehicle_model_id": 523,
                "vehicle_make_id": 1,
                "model": "Camry SE / XLE",
                "amount": "15000",
                "description": "Camry SE / XLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:06:21.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c48f9",
                "vehicle_model_id": 524,
                "vehicle_make_id": 1,
                "model": "AVENSIS - WAGON",
                "amount": "15000",
                "description": "AVENSIS - WAGON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:07:55.000Z",
                "niip_id": "683"
            },
            {
                "_id": "65a918eb42dc804a210c48fa",
                "vehicle_model_id": 525,
                "vehicle_make_id": 1,
                "model": "HILUX 2012 MODEL",
                "amount": "20000",
                "description": "HILUX 2012 MODEL",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:08:39.000Z",
                "niip_id": "680"
            },
            {
                "_id": "65a918eb42dc804a210c48fb",
                "vehicle_model_id": 526,
                "vehicle_make_id": 1,
                "model": "DYNA CABIN",
                "amount": "20000",
                "description": "DYNA CABIN",
                "created_by": "",
                "created_dt": "2023-01-30T11:12:04.000Z",
                "niip_id": "724"
            },
            {
                "_id": "65a918eb42dc804a210c48fc",
                "vehicle_model_id": 527,
                "vehicle_make_id": 1,
                "model": "Camry Hybrid LE",
                "amount": "15000",
                "description": "Camry Hybrid LE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:18:30.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c48fd",
                "vehicle_model_id": 528,
                "vehicle_make_id": 1,
                "model": "Corolla XRS",
                "amount": "15000",
                "description": "Corolla XRS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:18:09.000Z",
                "niip_id": "589"
            },
            {
                "_id": "65a918eb42dc804a210c48fe",
                "vehicle_model_id": 529,
                "vehicle_make_id": 1,
                "model": "Highlander LE",
                "amount": "15000",
                "description": "Highlander LE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:17:52.000Z",
                "niip_id": "592"
            },
            {
                "_id": "65a918eb42dc804a210c48ff",
                "vehicle_model_id": 530,
                "vehicle_make_id": 1,
                "model": "PICNIC",
                "amount": "15000",
                "description": "PICNIC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:17:32.000Z",
                "niip_id": "716"
            },
            {
                "_id": "65a918eb42dc804a210c4900",
                "vehicle_model_id": 531,
                "vehicle_make_id": 1,
                "model": "Sienna CE / LE",
                "amount": "15000",
                "description": "Sienna CE / LE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:17:01.000Z",
                "niip_id": "604"
            },
            {
                "_id": "65a918eb42dc804a210c4901",
                "vehicle_model_id": 532,
                "vehicle_make_id": 1,
                "model": "STARLET",
                "amount": "15000",
                "description": "STARLET",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:16:28.000Z",
                "niip_id": "606"
            },
            {
                "_id": "65a918eb42dc804a210c4902",
                "vehicle_model_id": 533,
                "vehicle_make_id": 0,
                "model": "FJ Cruiser",
                "amount": null,
                "description": "FJ Cruiser",
                "created_by": "20200511103543",
                "created_dt": "2020-08-25T02:34:02.000Z",
                "niip_id": "1290"
            },
            {
                "_id": "65a918eb42dc804a210c4903",
                "vehicle_model_id": 534,
                "vehicle_make_id": 1,
                "model": "LANDCRUISIER PRADO",
                "amount": "15000",
                "description": "LANDCRUISIER PRADO",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:16:11.000Z",
                "niip_id": "710"
            },
            {
                "_id": "65a918eb42dc804a210c4904",
                "vehicle_model_id": 535,
                "vehicle_make_id": 1,
                "model": "RAV4 Base / L",
                "amount": "15000",
                "description": "RAV4 Base / L",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:15:53.000Z",
                "niip_id": "602"
            },
            {
                "_id": "65a918eb42dc804a210c4905",
                "vehicle_model_id": 536,
                "vehicle_make_id": 1,
                "model": "Highlander XLE",
                "amount": "15000",
                "description": "Highlander XLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:15:38.000Z",
                "niip_id": "592"
            },
            {
                "_id": "65a918eb42dc804a210c4906",
                "vehicle_model_id": 537,
                "vehicle_make_id": 1,
                "model": "Echo",
                "amount": "15000",
                "description": "Echo",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:15:00.000Z",
                "niip_id": "591"
            },
            {
                "_id": "65a918eb42dc804a210c4907",
                "vehicle_model_id": 538,
                "vehicle_make_id": 1,
                "model": "CELICA",
                "amount": "15000",
                "description": "CELICA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:14:19.000Z",
                "niip_id": "587"
            },
            {
                "_id": "65a918eb42dc804a210c4908",
                "vehicle_model_id": 539,
                "vehicle_make_id": 1,
                "model": "Mini Bus",
                "amount": "20000",
                "description": "Mini Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:13:35.000Z",
                "niip_id": "1459"
            },
            {
                "_id": "65a918eb42dc804a210c4909",
                "vehicle_model_id": 540,
                "vehicle_make_id": 1,
                "model": "HILUX P/UP",
                "amount": "20000",
                "description": "HILUX P/UP",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:13:07.000Z",
                "niip_id": "680"
            },
            {
                "_id": "65a918eb42dc804a210c490a",
                "vehicle_model_id": 541,
                "vehicle_make_id": 1,
                "model": "AVENSIS SALOON",
                "amount": "15000",
                "description": "AVENSIS SALOON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:12:42.000Z",
                "niip_id": "683"
            },
            {
                "_id": "65a918eb42dc804a210c490b",
                "vehicle_model_id": 542,
                "vehicle_make_id": 1,
                "model": "ESTIMA",
                "amount": "15000",
                "description": "ESTIMA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:12:22.000Z",
                "niip_id": "1890"
            },
            {
                "_id": "65a918eb42dc804a210c490c",
                "vehicle_model_id": 543,
                "vehicle_make_id": 1,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:11:45.000Z",
                "niip_id": "1459"
            },
            {
                "_id": "65a918eb42dc804a210c490d",
                "vehicle_model_id": 544,
                "vehicle_make_id": 1,
                "model": "Avenza",
                "amount": "15000",
                "description": "Avenza",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:11:26.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c490e",
                "vehicle_model_id": 545,
                "vehicle_make_id": 1,
                "model": "SEQUIA",
                "amount": "15000",
                "description": "SEQUIA",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:10:50.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c490f",
                "vehicle_model_id": 546,
                "vehicle_make_id": 1,
                "model": "Carina. E.  Wagon",
                "amount": "15000",
                "description": "Carina. E.  Wagon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:10:31.000Z",
                "niip_id": "770"
            },
            {
                "_id": "65a918eb42dc804a210c4910",
                "vehicle_model_id": 547,
                "vehicle_make_id": 61,
                "model": "Buss car 90",
                "amount": "15000",
                "description": "Buss car 90",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:16:59.000Z",
                "niip_id": "3720"
            },
            {
                "_id": "65a918eb42dc804a210c4911",
                "vehicle_model_id": 548,
                "vehicle_make_id": 59,
                "model": "Keke",
                "amount": "5000",
                "description": "keke",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:08:41.000Z",
                "niip_id": "874"
            },
            {
                "_id": "65a918eb42dc804a210c4912",
                "vehicle_model_id": 549,
                "vehicle_make_id": 59,
                "model": "TRC",
                "amount": "5000",
                "description": "TRC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:07:50.000Z",
                "niip_id": "874"
            },
            {
                "_id": "65a918eb42dc804a210c4913",
                "vehicle_model_id": 550,
                "vehicle_make_id": 59,
                "model": "King",
                "amount": "5000",
                "description": "King",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:07:18.000Z",
                "niip_id": "1704"
            },
            {
                "_id": "65a918eb42dc804a210c4914",
                "vehicle_model_id": 551,
                "vehicle_make_id": 59,
                "model": "TRICYCLE",
                "amount": "5000",
                "description": "TRICYCLE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:06:59.000Z",
                "niip_id": "874"
            },
            {
                "_id": "65a918eb42dc804a210c4915",
                "vehicle_model_id": 552,
                "vehicle_make_id": 59,
                "model": "KEKE NAPEP",
                "amount": "5000",
                "description": "KEKE NAPEP",
                "created_by": "",
                "created_dt": "2023-01-30T00:06:01.000Z",
                "niip_id": "874"
            },
            {
                "_id": "65a918eb42dc804a210c4916",
                "vehicle_model_id": 553,
                "vehicle_make_id": 59,
                "model": "Keke Tricycle",
                "amount": "5000",
                "description": "Keke Tricycle",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:05:38.000Z",
                "niip_id": "874"
            },
            {
                "_id": "65a918eb42dc804a210c4917",
                "vehicle_model_id": 554,
                "vehicle_make_id": 59,
                "model": "King Keke",
                "amount": "5000",
                "description": "King keke",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:05:10.000Z",
                "niip_id": "1704"
            },
            {
                "_id": "65a918eb42dc804a210c4918",
                "vehicle_model_id": 555,
                "vehicle_make_id": 59,
                "model": "King Tricycle",
                "amount": "5000",
                "description": "King Tric",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:04:46.000Z",
                "niip_id": "1704"
            },
            {
                "_id": "65a918eb42dc804a210c4919",
                "vehicle_model_id": 556,
                "vehicle_make_id": 59,
                "model": "1.0",
                "amount": "5000",
                "description": "1.0",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:04:06.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c491a",
                "vehicle_model_id": 557,
                "vehicle_make_id": 60,
                "model": "3.1",
                "amount": "15000",
                "description": "3.1",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:03:38.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c491b",
                "vehicle_model_id": 558,
                "vehicle_make_id": 5,
                "model": "Golf 3",
                "amount": "15000",
                "description": "Golf 3",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:39:47.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c491c",
                "vehicle_model_id": 559,
                "vehicle_make_id": 5,
                "model": "Jetta III",
                "amount": "15000",
                "description": "Jetta III",
                "created_by": "",
                "created_dt": "2023-01-30T11:38:53.000Z",
                "niip_id": "621"
            },
            {
                "_id": "65a918eb42dc804a210c491d",
                "vehicle_model_id": 560,
                "vehicle_make_id": 5,
                "model": "SHARON BUS",
                "amount": "15000",
                "description": "SHARON BUS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:37:36.000Z",
                "niip_id": "729"
            },
            {
                "_id": "65a918eb42dc804a210c491e",
                "vehicle_model_id": 561,
                "vehicle_make_id": 5,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:37:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c491f",
                "vehicle_model_id": 562,
                "vehicle_make_id": 5,
                "model": "SHARON",
                "amount": "15000",
                "description": "SHARON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:36:32.000Z",
                "niip_id": "729"
            },
            {
                "_id": "65a918eb42dc804a210c4920",
                "vehicle_model_id": 563,
                "vehicle_make_id": 5,
                "model": "Wagon",
                "amount": "15000",
                "description": "Wagon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:34:23.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4921",
                "vehicle_model_id": 564,
                "vehicle_make_id": 5,
                "model": "TRANSPOTER",
                "amount": "20000",
                "description": "TRANSPOTER",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:31:35.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4922",
                "vehicle_model_id": 565,
                "vehicle_make_id": 5,
                "model": "S/WAGON",
                "amount": "15000",
                "description": "S/WAGON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:29:24.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4923",
                "vehicle_model_id": 566,
                "vehicle_make_id": 5,
                "model": "PICNIC",
                "amount": "20000",
                "description": "PICNIC",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:27:34.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4924",
                "vehicle_model_id": 567,
                "vehicle_make_id": 5,
                "model": "Polo",
                "amount": "15000",
                "description": "Polo",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:26:13.000Z",
                "niip_id": "755"
            },
            {
                "_id": "65a918eb42dc804a210c4925",
                "vehicle_model_id": 568,
                "vehicle_make_id": 5,
                "model": "GOLF WAGON",
                "amount": "15000",
                "description": "GOLF WAGON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:25:32.000Z",
                "niip_id": "617"
            },
            {
                "_id": "65a918eb42dc804a210c4926",
                "vehicle_model_id": 569,
                "vehicle_make_id": 5,
                "model": "Passat Komfort",
                "amount": "15000",
                "description": "Passat Komfort",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:25:12.000Z",
                "niip_id": "628"
            },
            {
                "_id": "65a918eb42dc804a210c4927",
                "vehicle_model_id": 570,
                "vehicle_make_id": 5,
                "model": "SHARON - SPACE BUS",
                "amount": "15000",
                "description": "SHARON - SPACE BUS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:22:12.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4928",
                "vehicle_model_id": 571,
                "vehicle_make_id": 5,
                "model": "Golf GLS",
                "amount": "15000",
                "description": "Golf GLS",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:22:34.000Z",
                "niip_id": "617"
            },
            {
                "_id": "65a918eb42dc804a210c4929",
                "vehicle_model_id": 572,
                "vehicle_make_id": 5,
                "model": "Golf 4",
                "amount": "15000",
                "description": "Golf 4",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:20:53.000Z",
                "niip_id": "838"
            },
            {
                "_id": "65a918eb42dc804a210c492a",
                "vehicle_model_id": 573,
                "vehicle_make_id": 5,
                "model": "GOLF 3 WAGOON",
                "amount": "15000",
                "description": "GOLF 3 WAGOON",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:20:28.000Z",
                "niip_id": "618"
            },
            {
                "_id": "65a918eb42dc804a210c492b",
                "vehicle_model_id": 574,
                "vehicle_make_id": 5,
                "model": "GOLF 2",
                "amount": "15000",
                "description": "GOLF 2",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:19:30.000Z",
                "niip_id": "617"
            },
            {
                "_id": "65a918eb42dc804a210c492c",
                "vehicle_model_id": 575,
                "vehicle_make_id": 62,
                "model": "V40",
                "amount": "15000",
                "description": "V40",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:17:33.000Z",
                "niip_id": "651"
            },
            {
                "_id": "65a918eb42dc804a210c492d",
                "vehicle_model_id": 576,
                "vehicle_make_id": 1,
                "model": "Fortuner",
                "amount": "15000",
                "description": "Fortuner",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:10:00.000Z",
                "niip_id": "762"
            },
            {
                "_id": "65a918eb42dc804a210c492e",
                "vehicle_model_id": 577,
                "vehicle_make_id": 23,
                "model": "Galant",
                "amount": "15000",
                "description": "Galant",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:06:51.000Z",
                "niip_id": "435"
            },
            {
                "_id": "65a918eb42dc804a210c492f",
                "vehicle_model_id": 578,
                "vehicle_make_id": 5,
                "model": "Jetta",
                "amount": "15000",
                "description": "Jetta",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:18:47.000Z",
                "niip_id": "620"
            },
            {
                "_id": "65a918eb42dc804a210c4930",
                "vehicle_model_id": 579,
                "vehicle_make_id": 23,
                "model": "Lancer",
                "amount": "15000",
                "description": "Lancer",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:07:10.000Z",
                "niip_id": "437"
            },
            {
                "_id": "65a918eb42dc804a210c4931",
                "vehicle_model_id": 580,
                "vehicle_make_id": 4,
                "model": "ECONOLINE",
                "amount": "20000",
                "description": "ECONOLINE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:24:14.000Z",
                "niip_id": "199"
            },
            {
                "_id": "65a918eb42dc804a210c4932",
                "vehicle_model_id": 581,
                "vehicle_make_id": 2,
                "model": "Sunny",
                "amount": "15000",
                "description": "Sunny",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:19:25.000Z",
                "niip_id": "685"
            },
            {
                "_id": "65a918eb42dc804a210c4933",
                "vehicle_model_id": 582,
                "vehicle_make_id": 36,
                "model": "QX 56",
                "amount": "15000",
                "description": "QX 56",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:36:22.000Z",
                "niip_id": "774"
            },
            {
                "_id": "65a918eb42dc804a210c4934",
                "vehicle_model_id": 583,
                "vehicle_make_id": 63,
                "model": "Pickup",
                "amount": "20000",
                "description": "Pickup",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:32:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4935",
                "vehicle_model_id": 584,
                "vehicle_make_id": 17,
                "model": "H100",
                "amount": "20000",
                "description": "H100",
                "created_by": "",
                "created_dt": "2023-01-30T11:29:15.000Z",
                "niip_id": "1033"
            },
            {
                "_id": "65a918eb42dc804a210c4936",
                "vehicle_model_id": 585,
                "vehicle_make_id": 17,
                "model": "Sonata",
                "amount": "15000",
                "description": "Sonata",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:37:26.000Z",
                "niip_id": "265"
            },
            {
                "_id": "65a918eb42dc804a210c4937",
                "vehicle_model_id": 586,
                "vehicle_make_id": 46,
                "model": "Truck",
                "amount": "100000",
                "description": "Truck",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:04:01.000Z",
                "niip_id": "850"
            },
            {
                "_id": "65a918eb42dc804a210c4938",
                "vehicle_model_id": 587,
                "vehicle_make_id": 5,
                "model": "T4",
                "amount": "20000",
                "description": "T4",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:18:13.000Z",
                "niip_id": "1281"
            },
            {
                "_id": "65a918eb42dc804a210c4939",
                "vehicle_model_id": 588,
                "vehicle_make_id": 64,
                "model": "Villager",
                "amount": "15000",
                "description": "Villager",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:59:06.000Z",
                "niip_id": "426"
            },
            {
                "_id": "65a918eb42dc804a210c493a",
                "vehicle_model_id": 589,
                "vehicle_make_id": 23,
                "model": "Attrage",
                "amount": "15000",
                "description": "Attrage",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:07:32.000Z",
                "niip_id": "941"
            },
            {
                "_id": "65a918eb42dc804a210c493b",
                "vehicle_model_id": 590,
                "vehicle_make_id": 14,
                "model": "GS 300",
                "amount": "15000",
                "description": "GS 300",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:55:21.000Z",
                "niip_id": "330"
            },
            {
                "_id": "65a918eb42dc804a210c493c",
                "vehicle_model_id": 591,
                "vehicle_make_id": 11,
                "model": "Caravan",
                "amount": "15000",
                "description": "Caravan",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:58:51.000Z",
                "niip_id": "156"
            },
            {
                "_id": "65a918eb42dc804a210c493d",
                "vehicle_model_id": 592,
                "vehicle_make_id": 11,
                "model": "Citroel",
                "amount": "15000",
                "description": "Citroel",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:59:22.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c493e",
                "vehicle_model_id": 593,
                "vehicle_make_id": 65,
                "model": "Jumper",
                "amount": "20000",
                "description": "Jumper",
                "created_by": "",
                "created_dt": "2023-01-30T09:51:05.000Z",
                "niip_id": "1121"
            },
            {
                "_id": "65a918eb42dc804a210c493f",
                "vehicle_model_id": 594,
                "vehicle_make_id": 17,
                "model": "I10",
                "amount": "15000",
                "description": "i10",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:37:11.000Z",
                "niip_id": "712"
            },
            {
                "_id": "65a918eb42dc804a210c4940",
                "vehicle_model_id": 595,
                "vehicle_make_id": 66,
                "model": "GA4",
                "amount": "15000",
                "description": "GA4",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:26:47.000Z",
                "niip_id": "1680"
            },
            {
                "_id": "65a918eb42dc804a210c4941",
                "vehicle_model_id": 596,
                "vehicle_make_id": 0,
                "model": "GS3",
                "amount": null,
                "description": "GS3",
                "created_by": "20200720074306",
                "created_dt": "2021-05-18T02:07:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4942",
                "vehicle_model_id": 597,
                "vehicle_make_id": 66,
                "model": "GS3",
                "amount": "15000",
                "description": "GS3",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:27:22.000Z",
                "niip_id": "1680"
            },
            {
                "_id": "65a918eb42dc804a210c4943",
                "vehicle_model_id": 598,
                "vehicle_make_id": 66,
                "model": "GS4",
                "amount": "15000",
                "description": "GS4",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:28:08.000Z",
                "niip_id": "2500"
            },
            {
                "_id": "65a918eb42dc804a210c4944",
                "vehicle_model_id": 599,
                "vehicle_make_id": 66,
                "model": "GS8",
                "amount": "15000",
                "description": "GS8",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:28:46.000Z",
                "niip_id": "3628"
            },
            {
                "_id": "65a918eb42dc804a210c4945",
                "vehicle_model_id": 600,
                "vehicle_make_id": 2,
                "model": "Vanette",
                "amount": "20000",
                "description": "Vanette",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:20:39.000Z",
                "niip_id": "717"
            },
            {
                "_id": "65a918eb42dc804a210c4946",
                "vehicle_model_id": 601,
                "vehicle_make_id": 2,
                "model": "X-Trail",
                "amount": "15000",
                "description": "X-Trail",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:21:26.000Z",
                "niip_id": "857"
            },
            {
                "_id": "65a918eb42dc804a210c4947",
                "vehicle_model_id": 602,
                "vehicle_make_id": 6,
                "model": "4Matic",
                "amount": "15000",
                "description": "4Matic",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:52:28.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4948",
                "vehicle_model_id": 603,
                "vehicle_make_id": 36,
                "model": "QX4",
                "amount": "15000",
                "description": "QX4",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:36:03.000Z",
                "niip_id": "277"
            },
            {
                "_id": "65a918eb42dc804a210c4949",
                "vehicle_model_id": 604,
                "vehicle_make_id": 2,
                "model": "Trade",
                "amount": "20000",
                "description": "Trade",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:23:15.000Z",
                "niip_id": "767"
            },
            {
                "_id": "65a918eb42dc804a210c494a",
                "vehicle_model_id": 605,
                "vehicle_make_id": 19,
                "model": "SAVANA VAN",
                "amount": "20000",
                "description": "SAVANA VAN",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:30:43.000Z",
                "niip_id": "238"
            },
            {
                "_id": "65a918eb42dc804a210c494b",
                "vehicle_model_id": 606,
                "vehicle_make_id": 67,
                "model": "Cherokee",
                "amount": "15000",
                "description": "Cherokee",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:23:50.000Z",
                "niip_id": "305"
            },
            {
                "_id": "65a918eb42dc804a210c494c",
                "vehicle_model_id": 607,
                "vehicle_make_id": 23,
                "model": "Pajero",
                "amount": "15000",
                "description": "Pajero",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:07:52.000Z",
                "niip_id": "679"
            },
            {
                "_id": "65a918eb42dc804a210c494d",
                "vehicle_model_id": 608,
                "vehicle_make_id": 13,
                "model": "CL",
                "amount": "15000",
                "description": "CL",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:28:31.000Z",
                "niip_id": "1"
            },
            {
                "_id": "65a918eb42dc804a210c494e",
                "vehicle_model_id": 609,
                "vehicle_make_id": 54,
                "model": "LAGUNA",
                "amount": "15000",
                "description": "LAGUNA",
                "created_by": "",
                "created_dt": "2023-01-30T10:43:00.000Z",
                "niip_id": "664"
            },
            {
                "_id": "65a918eb42dc804a210c494f",
                "vehicle_model_id": 610,
                "vehicle_make_id": 6,
                "model": "ML420",
                "amount": "15000",
                "description": "ML420",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:54:39.000Z",
                "niip_id": "1017"
            },
            {
                "_id": "65a918eb42dc804a210c4950",
                "vehicle_model_id": 611,
                "vehicle_make_id": 6,
                "model": "ML450",
                "amount": "15000",
                "description": "ML450",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:53:34.000Z",
                "niip_id": "2065"
            },
            {
                "_id": "65a918eb42dc804a210c4951",
                "vehicle_model_id": 612,
                "vehicle_make_id": 15,
                "model": "E2200",
                "amount": "15000",
                "description": "E2200",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:06:40.000Z",
                "niip_id": "797"
            },
            {
                "_id": "65a918eb42dc804a210c4952",
                "vehicle_model_id": 613,
                "vehicle_make_id": 1,
                "model": "Solara",
                "amount": "15000",
                "description": "Solara",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:09:41.000Z",
                "niip_id": "605"
            },
            {
                "_id": "65a918eb42dc804a210c4953",
                "vehicle_model_id": 614,
                "vehicle_make_id": 6,
                "model": "S550",
                "amount": "15000",
                "description": "S550",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:54:58.000Z",
                "niip_id": "1846"
            },
            {
                "_id": "65a918eb42dc804a210c4954",
                "vehicle_model_id": 615,
                "vehicle_make_id": 68,
                "model": "Atkinson",
                "amount": "100000",
                "description": "Atkinson",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:45:14.000Z",
                "niip_id": "2041"
            },
            {
                "_id": "65a918eb42dc804a210c4955",
                "vehicle_model_id": 616,
                "vehicle_make_id": 15,
                "model": "MPV",
                "amount": "15000",
                "description": "MPV",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:06:45.000Z",
                "niip_id": "364"
            },
            {
                "_id": "65a918eb42dc804a210c4956",
                "vehicle_model_id": 617,
                "vehicle_make_id": 17,
                "model": "IX35",
                "amount": "15000",
                "description": "IX35",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:36:44.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c4957",
                "vehicle_model_id": 618,
                "vehicle_make_id": 14,
                "model": "IS 250",
                "amount": "15000",
                "description": "IS 250",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:55:27.000Z",
                "niip_id": "1359"
            },
            {
                "_id": "65a918eb42dc804a210c4958",
                "vehicle_model_id": 619,
                "vehicle_make_id": 6,
                "model": "280",
                "amount": "15000",
                "description": "280",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:55:03.000Z",
                "niip_id": "906"
            },
            {
                "_id": "65a918eb42dc804a210c4959",
                "vehicle_model_id": 620,
                "vehicle_make_id": 6,
                "model": "200",
                "amount": "15000",
                "description": "200",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:55:38.000Z",
                "niip_id": "689"
            },
            {
                "_id": "65a918eb42dc804a210c495a",
                "vehicle_model_id": 621,
                "vehicle_make_id": 2,
                "model": "Qashqai",
                "amount": "15000",
                "description": "Qashqai",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:24:28.000Z",
                "niip_id": "741"
            },
            {
                "_id": "65a918eb42dc804a210c495b",
                "vehicle_model_id": 622,
                "vehicle_make_id": 6,
                "model": "814",
                "amount": "100000",
                "description": "814",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:55:56.000Z",
                "niip_id": "1014"
            },
            {
                "_id": "65a918eb42dc804a210c495c",
                "vehicle_model_id": 623,
                "vehicle_make_id": 14,
                "model": "ES330",
                "amount": "15000",
                "description": "ES330",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:55:32.000Z",
                "niip_id": "1820"
            },
            {
                "_id": "65a918eb42dc804a210c495d",
                "vehicle_model_id": 624,
                "vehicle_make_id": 14,
                "model": "ES300",
                "amount": "15000",
                "description": "ES300",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:56:05.000Z",
                "niip_id": "329"
            },
            {
                "_id": "65a918eb42dc804a210c495e",
                "vehicle_model_id": 625,
                "vehicle_make_id": 1,
                "model": "LITEACE",
                "amount": "20000",
                "description": "LITEACE",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:09:23.000Z",
                "niip_id": "980"
            },
            {
                "_id": "65a918eb42dc804a210c495f",
                "vehicle_model_id": 626,
                "vehicle_make_id": 15,
                "model": "Tribute",
                "amount": "15000",
                "description": "Tribute",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:07:52.000Z",
                "niip_id": "371"
            },
            {
                "_id": "65a918eb42dc804a210c4960",
                "vehicle_model_id": 627,
                "vehicle_make_id": 69,
                "model": "Saloon",
                "amount": "15000",
                "description": "Saloon",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T00:00:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4961",
                "vehicle_model_id": 628,
                "vehicle_make_id": 67,
                "model": "Liberty",
                "amount": "15000",
                "description": "Liberty",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:24:26.000Z",
                "niip_id": "312"
            },
            {
                "_id": "65a918eb42dc804a210c4962",
                "vehicle_model_id": 629,
                "vehicle_make_id": 42,
                "model": "LR4",
                "amount": "15000",
                "description": "LR4",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:39:24.000Z",
                "niip_id": "1044"
            },
            {
                "_id": "65a918eb42dc804a210c4963",
                "vehicle_model_id": 630,
                "vehicle_make_id": 6,
                "model": "ML320",
                "amount": "15000",
                "description": "ML320",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:58:16.000Z",
                "niip_id": "1051"
            },
            {
                "_id": "65a918eb42dc804a210c4964",
                "vehicle_model_id": 631,
                "vehicle_make_id": 70,
                "model": "911",
                "amount": "15000",
                "description": "911",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:18:04.000Z",
                "niip_id": "525"
            },
            {
                "_id": "65a918eb42dc804a210c4965",
                "vehicle_model_id": 632,
                "vehicle_make_id": 6,
                "model": "ML350",
                "amount": "15000",
                "description": "ML350",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:58:33.000Z",
                "niip_id": "1051"
            },
            {
                "_id": "65a918eb42dc804a210c4966",
                "vehicle_model_id": 633,
                "vehicle_make_id": 2,
                "model": "Cabstar",
                "amount": "20000",
                "description": "Cabstar",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T09:25:08.000Z",
                "niip_id": "961"
            },
            {
                "_id": "65a918eb42dc804a210c4967",
                "vehicle_model_id": 634,
                "vehicle_make_id": 58,
                "model": "Fabia",
                "amount": "15000",
                "description": "Fabia",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:47:00.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4968",
                "vehicle_model_id": 635,
                "vehicle_make_id": 71,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:13:19.000Z",
                "niip_id": "2125"
            },
            {
                "_id": "65a918eb42dc804a210c4969",
                "vehicle_model_id": 636,
                "vehicle_make_id": 72,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:30:58.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c496a",
                "vehicle_model_id": 637,
                "vehicle_make_id": 73,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T10:04:40.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c496b",
                "vehicle_model_id": 638,
                "vehicle_make_id": 74,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-01-30T11:13:41.000Z",
                "niip_id": "1514"
            },
            {
                "_id": "65a918eb42dc804a210c496c",
                "vehicle_model_id": 639,
                "vehicle_make_id": 14,
                "model": "GS300",
                "amount": "15000",
                "description": "GS300",
                "created_by": "20200720074306",
                "created_dt": "2023-02-10T10:04:17.000Z",
                "niip_id": "330"
            },
            {
                "_id": "65a918eb42dc804a210c496d",
                "vehicle_model_id": 640,
                "vehicle_make_id": 75,
                "model": "Forester",
                "amount": "15000",
                "description": "Forester",
                "created_by": "20200417110403",
                "created_dt": "2023-02-17T07:31:34.000Z",
                "niip_id": "562"
            },
            {
                "_id": "65a918eb42dc804a210c496e",
                "vehicle_model_id": 641,
                "vehicle_make_id": 48,
                "model": "DIESEL",
                "amount": "100000",
                "description": "DIESEL",
                "created_by": "20200417110403",
                "created_dt": "2023-02-21T10:45:16.000Z",
                "niip_id": "772"
            },
            {
                "_id": "65a918eb42dc804a210c496f",
                "vehicle_model_id": 642,
                "vehicle_make_id": 76,
                "model": "P114",
                "amount": "100000",
                "description": "P114",
                "created_by": "20200417110403",
                "created_dt": "2023-05-12T04:41:16.000Z",
                "niip_id": "912"
            },
            {
                "_id": "65a918eb42dc804a210c4970",
                "vehicle_model_id": 643,
                "vehicle_make_id": 1,
                "model": "Coaster",
                "amount": "20000",
                "description": "Coaster",
                "created_by": "20200417110403",
                "created_dt": "2023-05-23T10:51:52.000Z",
                "niip_id": "725"
            },
            {
                "_id": "65a918eb42dc804a210c4971",
                "vehicle_model_id": 644,
                "vehicle_make_id": 77,
                "model": "Pick up",
                "amount": "20000",
                "description": "Pickup",
                "created_by": "20200417110403",
                "created_dt": "2023-06-20T04:20:59.000Z",
                "niip_id": "854"
            },
            {
                "_id": "65a918eb42dc804a210c4972",
                "vehicle_model_id": 645,
                "vehicle_make_id": 33,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-07-04T10:24:21.000Z",
                "niip_id": "1077"
            },
            {
                "_id": "65a918eb42dc804a210c4973",
                "vehicle_model_id": 646,
                "vehicle_make_id": 76,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-07-04T10:25:20.000Z",
                "niip_id": "2045"
            },
            {
                "_id": "65a918eb42dc804a210c4974",
                "vehicle_model_id": 647,
                "vehicle_make_id": 2,
                "model": "Urvan",
                "amount": "20000",
                "description": "Urvan",
                "created_by": "20200720074306",
                "created_dt": "2023-07-27T09:39:51.000Z",
                "niip_id": "865"
            },
            {
                "_id": "65a918eb42dc804a210c4975",
                "vehicle_model_id": 648,
                "vehicle_make_id": 2,
                "model": "Bus",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-07-27T09:40:19.000Z",
                "niip_id": "765"
            },
            {
                "_id": "65a918eb42dc804a210c4976",
                "vehicle_model_id": 649,
                "vehicle_make_id": 4,
                "model": "E250",
                "amount": "20000",
                "description": "Bus",
                "created_by": "20200720074306",
                "created_dt": "2023-08-18T02:27:45.000Z",
                "niip_id": "719"
            },
            {
                "_id": "65a918eb42dc804a210c4977",
                "vehicle_model_id": 650,
                "vehicle_make_id": 24,
                "model": "Vougue 506",
                "amount": "15000",
                "description": "Vougue 506",
                "created_by": "20200417110403",
                "created_dt": "2023-08-29T08:43:09.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4978",
                "vehicle_model_id": 651,
                "vehicle_make_id": 42,
                "model": "Range Rover Vougue 5",
                "amount": "15000",
                "description": "Range Rover Vougue 506",
                "created_by": "20200417110403",
                "created_dt": "2023-08-29T08:44:52.000Z",
                "niip_id": "327"
            },
            {
                "_id": "65a918eb42dc804a210c4979",
                "vehicle_model_id": 652,
                "vehicle_make_id": 78,
                "model": "SL200",
                "amount": "5000",
                "description": "Motorcycle",
                "created_by": "20200720074306",
                "created_dt": "2023-09-06T00:46:47.000Z",
                "niip_id": "738"
            },
            {
                "_id": "65a918eb42dc804a210c497a",
                "vehicle_model_id": 653,
                "vehicle_make_id": 1,
                "model": "Landcruiser",
                "amount": "15000",
                "description": "Landcruiser",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T10:55:24.000Z",
                "niip_id": "593"
            },
            {
                "_id": "65a918eb42dc804a210c497b",
                "vehicle_model_id": 654,
                "vehicle_make_id": 6,
                "model": "G55 AMG",
                "amount": "15000",
                "description": "G55 AMG",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T10:56:31.000Z",
                "niip_id": "3662"
            },
            {
                "_id": "65a918eb42dc804a210c497c",
                "vehicle_model_id": 655,
                "vehicle_make_id": 14,
                "model": "RX350",
                "amount": "15000",
                "description": "RX350",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:03:28.000Z",
                "niip_id": "896"
            },
            {
                "_id": "65a918eb42dc804a210c497d",
                "vehicle_model_id": 656,
                "vehicle_make_id": 3,
                "model": "MDX",
                "amount": "15000",
                "description": "MDX",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:07:09.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c497e",
                "vehicle_model_id": 657,
                "vehicle_make_id": 3,
                "model": "ILX",
                "amount": "15000",
                "description": "ILX",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:09:09.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c497f",
                "vehicle_model_id": 658,
                "vehicle_make_id": 14,
                "model": "IS350",
                "amount": "15000",
                "description": "IS350",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:11:27.000Z",
                "niip_id": "2085"
            },
            {
                "_id": "65a918eb42dc804a210c4980",
                "vehicle_model_id": 659,
                "vehicle_make_id": 17,
                "model": "Santa-fe",
                "amount": "15000",
                "description": "Santa-fe",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:14:48.000Z",
                "niip_id": "263"
            },
            {
                "_id": "65a918eb42dc804a210c4981",
                "vehicle_model_id": 660,
                "vehicle_make_id": 1,
                "model": "Rav-4",
                "amount": "15000",
                "description": "Rav-4",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:17:30.000Z",
                "niip_id": "602"
            },
            {
                "_id": "65a918eb42dc804a210c4982",
                "vehicle_model_id": 661,
                "vehicle_make_id": 17,
                "model": "Azzera",
                "amount": "15000",
                "description": "Azzera",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:18:55.000Z",
                "niip_id": "1378"
            },
            {
                "_id": "65a918eb42dc804a210c4983",
                "vehicle_model_id": 662,
                "vehicle_make_id": 14,
                "model": "GX460 & GX470",
                "amount": "15000",
                "description": "GX460 & GX470",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:20:02.000Z",
                "niip_id": "801"
            },
            {
                "_id": "65a918eb42dc804a210c4984",
                "vehicle_model_id": 663,
                "vehicle_make_id": 14,
                "model": "RX33O",
                "amount": "15000",
                "description": "RX33O",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:21:09.000Z",
                "niip_id": "709"
            },
            {
                "_id": "65a918eb42dc804a210c4985",
                "vehicle_model_id": 664,
                "vehicle_make_id": 14,
                "model": "RX330",
                "amount": "15000",
                "description": "RX330",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:21:42.000Z",
                "niip_id": "709"
            },
            {
                "_id": "65a918eb42dc804a210c4986",
                "vehicle_model_id": 665,
                "vehicle_make_id": 14,
                "model": "IS250",
                "amount": "15000",
                "description": "IS250",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:23:10.000Z",
                "niip_id": "1359"
            },
            {
                "_id": "65a918eb42dc804a210c4987",
                "vehicle_model_id": 666,
                "vehicle_make_id": 14,
                "model": "RC300",
                "amount": "15000",
                "description": "RC300",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:23:51.000Z",
                "niip_id": "338"
            },
            {
                "_id": "65a918eb42dc804a210c4988",
                "vehicle_model_id": 667,
                "vehicle_make_id": 17,
                "model": "IX350",
                "amount": "15000",
                "description": "IX350",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:25:53.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c4989",
                "vehicle_model_id": 668,
                "vehicle_make_id": 16,
                "model": "Sorrento",
                "amount": "15000",
                "description": "Sorrento",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:26:24.000Z",
                "niip_id": "701"
            },
            {
                "_id": "65a918eb42dc804a210c498a",
                "vehicle_model_id": 669,
                "vehicle_make_id": 6,
                "model": "G63 AMG",
                "amount": "15000",
                "description": "G63 AMG",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:27:15.000Z",
                "niip_id": "1465"
            },
            {
                "_id": "65a918eb42dc804a210c498b",
                "vehicle_model_id": 670,
                "vehicle_make_id": 6,
                "model": "ML 350 4MATIC",
                "amount": "15000",
                "description": "ML 350 4MATIC",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:27:48.000Z",
                "niip_id": "932"
            },
            {
                "_id": "65a918eb42dc804a210c498c",
                "vehicle_model_id": 671,
                "vehicle_make_id": 6,
                "model": "C300[4MATIC, LUXURY,",
                "amount": "15000",
                "description": "C300[4MATIC, LUXURY, SPORT]",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:28:31.000Z",
                "niip_id": "1445"
            },
            {
                "_id": "65a918eb42dc804a210c498d",
                "vehicle_model_id": 672,
                "vehicle_make_id": 6,
                "model": "C350",
                "amount": "15000",
                "description": "C350",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:29:28.000Z",
                "niip_id": "1343"
            },
            {
                "_id": "65a918eb42dc804a210c498e",
                "vehicle_model_id": 673,
                "vehicle_make_id": 6,
                "model": "E350 4MATIC",
                "amount": "15000",
                "description": "E350 4MATIC",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:30:02.000Z",
                "niip_id": "1050"
            },
            {
                "_id": "65a918eb42dc804a210c498f",
                "vehicle_model_id": 674,
                "vehicle_make_id": 6,
                "model": "GL450",
                "amount": "15000",
                "description": "GL450",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:30:42.000Z",
                "niip_id": "931"
            },
            {
                "_id": "65a918eb42dc804a210c4990",
                "vehicle_model_id": 675,
                "vehicle_make_id": 6,
                "model": "GL550",
                "amount": "15000",
                "description": "GL550",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:31:17.000Z",
                "niip_id": "1574"
            },
            {
                "_id": "65a918eb42dc804a210c4991",
                "vehicle_model_id": 676,
                "vehicle_make_id": 6,
                "model": "GLK 350",
                "amount": "15000",
                "description": "GLK 350",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T11:32:05.000Z",
                "niip_id": "1669"
            },
            {
                "_id": "65a918eb42dc804a210c4992",
                "vehicle_model_id": 677,
                "vehicle_make_id": 42,
                "model": "Range Rover LR4",
                "amount": "15000",
                "description": "Range Rover LR4",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T00:19:58.000Z",
                "niip_id": "1044"
            },
            {
                "_id": "65a918eb42dc804a210c4993",
                "vehicle_model_id": 678,
                "vehicle_make_id": 42,
                "model": "Range Rover Sport & ",
                "amount": "15000",
                "description": "Range Rover Sport & Super Charged",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T00:20:53.000Z",
                "niip_id": "327"
            },
            {
                "_id": "65a918eb42dc804a210c4994",
                "vehicle_model_id": 679,
                "vehicle_make_id": 17,
                "model": "Tucson [Sport]",
                "amount": "15000",
                "description": "Tucson [Sport]",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T00:23:44.000Z",
                "niip_id": "1005"
            },
            {
                "_id": "65a918eb42dc804a210c4995",
                "vehicle_model_id": 680,
                "vehicle_make_id": 14,
                "model": "RX450H",
                "amount": "15000",
                "description": "RX450H",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T00:24:59.000Z",
                "niip_id": "2502"
            },
            {
                "_id": "65a918eb42dc804a210c4996",
                "vehicle_model_id": 681,
                "vehicle_make_id": 42,
                "model": "Range Rover LR3, LR4",
                "amount": "15000",
                "description": "Range Rover LR3, LR4 & Range Rover Sport",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T00:26:22.000Z",
                "niip_id": "1043"
            },
            {
                "_id": "65a918eb42dc804a210c4997",
                "vehicle_model_id": 682,
                "vehicle_make_id": 6,
                "model": "GLS",
                "amount": "15000",
                "description": "GLS",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T00:44:41.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4998",
                "vehicle_model_id": 683,
                "vehicle_make_id": 2,
                "model": "Rouge",
                "amount": "15000",
                "description": "Rouge",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T00:48:12.000Z",
                "niip_id": "1282"
            },
            {
                "_id": "65a918eb42dc804a210c4999",
                "vehicle_model_id": 684,
                "vehicle_make_id": 1,
                "model": "Landcruiser Prado",
                "amount": "15000",
                "description": "Landcruiser Prado",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T00:54:31.000Z",
                "niip_id": "593"
            },
            {
                "_id": "65a918eb42dc804a210c499a",
                "vehicle_model_id": 685,
                "vehicle_make_id": 6,
                "model": "R Class",
                "amount": "15000",
                "description": "R Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:01:24.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c499b",
                "vehicle_model_id": 686,
                "vehicle_make_id": 17,
                "model": "Creta",
                "amount": "150000",
                "description": "Creta",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:02:12.000Z",
                "niip_id": "2317"
            },
            {
                "_id": "65a918eb42dc804a210c499c",
                "vehicle_model_id": 687,
                "vehicle_make_id": 6,
                "model": "B Class",
                "amount": "15000",
                "description": "B Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:02:43.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c499d",
                "vehicle_model_id": 688,
                "vehicle_make_id": 6,
                "model": "CL Class",
                "amount": "15000",
                "description": "CL Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:03:23.000Z",
                "niip_id": "406"
            },
            {
                "_id": "65a918eb42dc804a210c499e",
                "vehicle_model_id": 689,
                "vehicle_make_id": 6,
                "model": "GLE",
                "amount": "15000",
                "description": "GLE",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:03:59.000Z",
                "niip_id": "2407"
            },
            {
                "_id": "65a918eb42dc804a210c499f",
                "vehicle_model_id": 690,
                "vehicle_make_id": 5,
                "model": "Beetle",
                "amount": "15000",
                "description": "Beetle",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:04:26.000Z",
                "niip_id": "1308"
            },
            {
                "_id": "65a918eb42dc804a210c49a0",
                "vehicle_model_id": 691,
                "vehicle_make_id": 6,
                "model": "GLE Coupe",
                "amount": "15000",
                "description": "GLE Coupe",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:05:20.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49a1",
                "vehicle_model_id": 692,
                "vehicle_make_id": 6,
                "model": "M Class",
                "amount": "15000",
                "description": "M Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:05:54.000Z",
                "niip_id": "410"
            },
            {
                "_id": "65a918eb42dc804a210c49a2",
                "vehicle_model_id": 693,
                "vehicle_make_id": 6,
                "model": "GL",
                "amount": "15000",
                "description": "GL",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:07:19.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49a3",
                "vehicle_model_id": 694,
                "vehicle_make_id": 6,
                "model": "GLK",
                "amount": "15000",
                "description": "GLK",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:08:10.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49a4",
                "vehicle_model_id": 695,
                "vehicle_make_id": 6,
                "model": "G Wagon",
                "amount": "15000",
                "description": "G Wagon",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:12:26.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49a5",
                "vehicle_model_id": 696,
                "vehicle_make_id": 16,
                "model": "Rio [hatchback]",
                "amount": "15000",
                "description": "Rio [hatchback]",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:13:40.000Z",
                "niip_id": "316"
            },
            {
                "_id": "65a918eb42dc804a210c49a6",
                "vehicle_model_id": 697,
                "vehicle_make_id": 1,
                "model": "Landcruiser Prado( B",
                "amount": "15000",
                "description": "Landcruiser Prado( Bulletproof)",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:14:42.000Z",
                "niip_id": "710"
            },
            {
                "_id": "65a918eb42dc804a210c49a7",
                "vehicle_model_id": 698,
                "vehicle_make_id": 6,
                "model": "GLC",
                "amount": "15000",
                "description": "GLC",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:16:15.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49a8",
                "vehicle_model_id": 699,
                "vehicle_make_id": 6,
                "model": "Ix36",
                "amount": "15000",
                "description": "ix36",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:17:14.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49a9",
                "vehicle_model_id": 700,
                "vehicle_make_id": 17,
                "model": "Ix37",
                "amount": "15000",
                "description": "ix37",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:18:00.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49aa",
                "vehicle_model_id": 701,
                "vehicle_make_id": 17,
                "model": "Ix38",
                "amount": "15000",
                "description": "ix38",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:18:28.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49ab",
                "vehicle_model_id": 702,
                "vehicle_make_id": 17,
                "model": "Ix39",
                "amount": "15000",
                "description": "ix39",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:19:13.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49ac",
                "vehicle_model_id": 703,
                "vehicle_make_id": 17,
                "model": "Ix40",
                "amount": "15000",
                "description": "ix40",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:19:33.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49ad",
                "vehicle_model_id": 704,
                "vehicle_make_id": 17,
                "model": "Ix41",
                "amount": "15000",
                "description": "ix41",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:20:10.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49ae",
                "vehicle_model_id": 705,
                "vehicle_make_id": 17,
                "model": "Ix42",
                "amount": "15000",
                "description": "ix42",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:20:31.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49af",
                "vehicle_model_id": 706,
                "vehicle_make_id": 17,
                "model": "Ix43",
                "amount": "15000",
                "description": "ix43",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:21:52.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b0",
                "vehicle_model_id": 707,
                "vehicle_make_id": 17,
                "model": "Ix44",
                "amount": "15000",
                "description": "ix44",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:22:17.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b1",
                "vehicle_model_id": 708,
                "vehicle_make_id": 17,
                "model": "Ix45",
                "amount": "15000",
                "description": "ix45",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:22:41.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b2",
                "vehicle_model_id": 709,
                "vehicle_make_id": 17,
                "model": "Ix46",
                "amount": "15000",
                "description": "ix46",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:23:08.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b3",
                "vehicle_model_id": 710,
                "vehicle_make_id": 17,
                "model": "Ix47",
                "amount": "15000",
                "description": "ix47",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:23:28.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b4",
                "vehicle_model_id": 711,
                "vehicle_make_id": 17,
                "model": "Ix48",
                "amount": "15000",
                "description": "ix48",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:23:49.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b5",
                "vehicle_model_id": 712,
                "vehicle_make_id": 17,
                "model": "Ix49",
                "amount": "15000",
                "description": "ix49",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:24:08.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b6",
                "vehicle_model_id": 713,
                "vehicle_make_id": 17,
                "model": "Ix50",
                "amount": "15000",
                "description": "ix50",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:24:28.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b7",
                "vehicle_model_id": 714,
                "vehicle_make_id": 17,
                "model": "Ix51",
                "amount": "15000",
                "description": "ix51",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:24:53.000Z",
                "niip_id": "699"
            },
            {
                "_id": "65a918eb42dc804a210c49b8",
                "vehicle_model_id": 715,
                "vehicle_make_id": 1,
                "model": "Corrolla",
                "amount": "15000",
                "description": "Corrolla",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:27:58.000Z",
                "niip_id": "589"
            },
            {
                "_id": "65a918eb42dc804a210c49b9",
                "vehicle_model_id": 716,
                "vehicle_make_id": 1,
                "model": "Sequoia ( Bulletproo",
                "amount": "15000",
                "description": "Sequoia ( Bulletproof)",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:29:10.000Z",
                "niip_id": "603"
            },
            {
                "_id": "65a918eb42dc804a210c49ba",
                "vehicle_model_id": 717,
                "vehicle_make_id": 1,
                "model": "Landcruiser (Bulletp",
                "amount": "15000",
                "description": "Landcruiser (Bulletproof)",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:30:31.000Z",
                "niip_id": "593"
            },
            {
                "_id": "65a918eb42dc804a210c49bb",
                "vehicle_model_id": 718,
                "vehicle_make_id": 6,
                "model": "SLK",
                "amount": "15000",
                "description": "SLK",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:32:33.000Z",
                "niip_id": "414"
            },
            {
                "_id": "65a918eb42dc804a210c49bc",
                "vehicle_model_id": 719,
                "vehicle_make_id": 1,
                "model": "Venza ( with heater)",
                "amount": "15000",
                "description": "Venza ( with heater)",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:33:26.000Z",
                "niip_id": "692"
            },
            {
                "_id": "65a918eb42dc804a210c49bd",
                "vehicle_model_id": 720,
                "vehicle_make_id": 26,
                "model": "X5",
                "amount": "15000",
                "description": "X5",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:34:25.000Z",
                "niip_id": "45"
            },
            {
                "_id": "65a918eb42dc804a210c49be",
                "vehicle_model_id": 721,
                "vehicle_make_id": 6,
                "model": "C230",
                "amount": "15000",
                "description": "C230",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:36:05.000Z",
                "niip_id": "893"
            },
            {
                "_id": "65a918eb42dc804a210c49bf",
                "vehicle_model_id": 722,
                "vehicle_make_id": 23,
                "model": "Asx",
                "amount": "15000",
                "description": "Asx",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:36:37.000Z",
                "niip_id": "863"
            },
            {
                "_id": "65a918eb42dc804a210c49c0",
                "vehicle_model_id": 723,
                "vehicle_make_id": 20,
                "model": "A7",
                "amount": "15000",
                "description": "A7",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:37:38.000Z",
                "niip_id": "2203"
            },
            {
                "_id": "65a918eb42dc804a210c49c1",
                "vehicle_model_id": 724,
                "vehicle_make_id": 20,
                "model": "A1",
                "amount": "15000",
                "description": "A1",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:38:43.000Z",
                "niip_id": "2097"
            },
            {
                "_id": "65a918eb42dc804a210c49c2",
                "vehicle_model_id": 725,
                "vehicle_make_id": 20,
                "model": "A3",
                "amount": "15000",
                "description": "A3",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:39:22.000Z",
                "niip_id": "1689"
            },
            {
                "_id": "65a918eb42dc804a210c49c3",
                "vehicle_model_id": 726,
                "vehicle_make_id": 20,
                "model": "A4",
                "amount": "15000",
                "description": "A4",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:39:50.000Z",
                "niip_id": "25"
            },
            {
                "_id": "65a918eb42dc804a210c49c4",
                "vehicle_model_id": 727,
                "vehicle_make_id": 20,
                "model": "A5",
                "amount": "15000",
                "description": "A5",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:40:19.000Z",
                "niip_id": "2310"
            },
            {
                "_id": "65a918eb42dc804a210c49c5",
                "vehicle_model_id": 728,
                "vehicle_make_id": 20,
                "model": "A6",
                "amount": "15000",
                "description": "A6",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:40:50.000Z",
                "niip_id": "26"
            },
            {
                "_id": "65a918eb42dc804a210c49c6",
                "vehicle_model_id": 729,
                "vehicle_make_id": 16,
                "model": "Picanto",
                "amount": "15000",
                "description": "Picanto",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:42:25.000Z",
                "niip_id": "732"
            },
            {
                "_id": "65a918eb42dc804a210c49c7",
                "vehicle_model_id": 730,
                "vehicle_make_id": 16,
                "model": "Mohave",
                "amount": "15000",
                "description": "Mohave",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:42:54.000Z",
                "niip_id": "1035"
            },
            {
                "_id": "65a918eb42dc804a210c49c8",
                "vehicle_model_id": 731,
                "vehicle_make_id": 23,
                "model": "Eclipse Cross",
                "amount": "15000",
                "description": "Eclipse Cross",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:43:43.000Z",
                "niip_id": "433"
            },
            {
                "_id": "65a918eb42dc804a210c49c9",
                "vehicle_model_id": 732,
                "vehicle_make_id": 23,
                "model": "L200",
                "amount": "15000",
                "description": "L200",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:44:23.000Z",
                "niip_id": "861"
            },
            {
                "_id": "65a918eb42dc804a210c49ca",
                "vehicle_model_id": 733,
                "vehicle_make_id": 23,
                "model": "Outlander",
                "amount": "15000",
                "description": "Outlander",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:44:50.000Z",
                "niip_id": "442"
            },
            {
                "_id": "65a918eb42dc804a210c49cb",
                "vehicle_model_id": 734,
                "vehicle_make_id": 23,
                "model": "Pajero (Sport)",
                "amount": "15000",
                "description": "Pajero (Sport)",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:46:01.000Z",
                "niip_id": "679"
            },
            {
                "_id": "65a918eb42dc804a210c49cc",
                "vehicle_model_id": 735,
                "vehicle_make_id": 67,
                "model": "Wrangler",
                "amount": "15000",
                "description": "Wrangler",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:47:10.000Z",
                "niip_id": "314"
            },
            {
                "_id": "65a918eb42dc804a210c49cd",
                "vehicle_model_id": 736,
                "vehicle_make_id": 67,
                "model": "Wrangler 4xe",
                "amount": "15000",
                "description": "Wrangler 4xe",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:47:38.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49ce",
                "vehicle_model_id": 737,
                "vehicle_make_id": 1,
                "model": "Aventis",
                "amount": "15000",
                "description": "Aventis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:48:05.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49cf",
                "vehicle_model_id": 738,
                "vehicle_make_id": 14,
                "model": "LX 570",
                "amount": "15000",
                "description": "LX 570",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:48:31.000Z",
                "niip_id": "897"
            },
            {
                "_id": "65a918eb42dc804a210c49d0",
                "vehicle_model_id": 739,
                "vehicle_make_id": 14,
                "model": "RX 351",
                "amount": "15000",
                "description": "RX 351",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:50:35.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49d1",
                "vehicle_model_id": 740,
                "vehicle_make_id": 14,
                "model": "RX 352",
                "amount": "15000",
                "description": "RX 352",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:51:04.000Z",
                "niip_id": "896"
            },
            {
                "_id": "65a918eb42dc804a210c49d2",
                "vehicle_model_id": 741,
                "vehicle_make_id": 14,
                "model": "RX 400H",
                "amount": "15000",
                "description": "RX 400H",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:51:27.000Z",
                "niip_id": "1532"
            },
            {
                "_id": "65a918eb42dc804a210c49d3",
                "vehicle_model_id": 742,
                "vehicle_make_id": 4,
                "model": "Fiesta",
                "amount": "15000",
                "description": "Fiesta",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:53:56.000Z",
                "niip_id": "1320"
            },
            {
                "_id": "65a918eb42dc804a210c49d4",
                "vehicle_model_id": 743,
                "vehicle_make_id": 3,
                "model": "Acura MDX",
                "amount": "15000",
                "description": "Acura MDX",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:54:39.000Z",
                "niip_id": "1302"
            },
            {
                "_id": "65a918eb42dc804a210c49d5",
                "vehicle_model_id": 744,
                "vehicle_make_id": 3,
                "model": "Acura ILX",
                "amount": "15000",
                "description": "Acura ILX",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:55:04.000Z",
                "niip_id": "1302"
            },
            {
                "_id": "65a918eb42dc804a210c49d6",
                "vehicle_model_id": 745,
                "vehicle_make_id": 2,
                "model": "QX60",
                "amount": "15000",
                "description": "QX60",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:55:33.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49d7",
                "vehicle_model_id": 746,
                "vehicle_make_id": 2,
                "model": "QX6O",
                "amount": "15000",
                "description": "QX6O",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:56:07.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49d8",
                "vehicle_model_id": 747,
                "vehicle_make_id": 2,
                "model": "Patrol",
                "amount": "15000",
                "description": "Patrol",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:56:27.000Z",
                "niip_id": "1039"
            },
            {
                "_id": "65a918eb42dc804a210c49d9",
                "vehicle_model_id": 748,
                "vehicle_make_id": 6,
                "model": "Benz G Class",
                "amount": "15000",
                "description": "Benz G Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:56:52.000Z",
                "niip_id": "409"
            },
            {
                "_id": "65a918eb42dc804a210c49da",
                "vehicle_model_id": 749,
                "vehicle_make_id": 6,
                "model": "Benz G55",
                "amount": "15000",
                "description": "Benz G55",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T01:57:13.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49db",
                "vehicle_model_id": 750,
                "vehicle_make_id": 6,
                "model": "Benz G500",
                "amount": "15000",
                "description": "Benz G500",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:00:15.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49dc",
                "vehicle_model_id": 751,
                "vehicle_make_id": 6,
                "model": "Benz G550",
                "amount": "15000",
                "description": "Benz G550",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:00:42.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49dd",
                "vehicle_model_id": 752,
                "vehicle_make_id": 6,
                "model": "Benz G63",
                "amount": "15000",
                "description": "Benz G63",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:02:31.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49de",
                "vehicle_model_id": 753,
                "vehicle_make_id": 6,
                "model": "Benz G65",
                "amount": "15000",
                "description": "Benz G65",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:03:04.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49df",
                "vehicle_model_id": 754,
                "vehicle_make_id": 6,
                "model": "Benz G65 AMG",
                "amount": "15000",
                "description": "Benz G65 AMG",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:03:33.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49e0",
                "vehicle_model_id": 755,
                "vehicle_make_id": 6,
                "model": "Benz E Class",
                "amount": "15000",
                "description": "Benz E Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:03:58.000Z",
                "niip_id": "408"
            },
            {
                "_id": "65a918eb42dc804a210c49e1",
                "vehicle_model_id": 756,
                "vehicle_make_id": 6,
                "model": "Benz C Class",
                "amount": "15000",
                "description": "Benz C Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:04:26.000Z",
                "niip_id": "405"
            },
            {
                "_id": "65a918eb42dc804a210c49e2",
                "vehicle_model_id": 757,
                "vehicle_make_id": 6,
                "model": "Benz GL Class",
                "amount": "15000",
                "description": "Benz GL Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:05:28.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49e3",
                "vehicle_model_id": 758,
                "vehicle_make_id": 6,
                "model": "Benz GLS Class",
                "amount": "15000",
                "description": "Benz GLS Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:06:05.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49e4",
                "vehicle_model_id": 759,
                "vehicle_make_id": 6,
                "model": "Benz GLC Class",
                "amount": "15000",
                "description": "Benz GLC Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:20:14.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49e5",
                "vehicle_model_id": 760,
                "vehicle_make_id": 6,
                "model": "Benz GLK 350",
                "amount": "15000",
                "description": "Benz GLK 350",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:20:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49e6",
                "vehicle_model_id": 761,
                "vehicle_make_id": 6,
                "model": "Benz A Class",
                "amount": "15000",
                "description": "Benz A Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:21:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49e7",
                "vehicle_model_id": 762,
                "vehicle_make_id": 6,
                "model": "Benz CL Class",
                "amount": "15000",
                "description": "Benz CL Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:21:38.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49e8",
                "vehicle_model_id": 763,
                "vehicle_make_id": 6,
                "model": "Benz S Class",
                "amount": "15000",
                "description": "Benz S Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:22:10.000Z",
                "niip_id": "412"
            },
            {
                "_id": "65a918eb42dc804a210c49e9",
                "vehicle_model_id": 764,
                "vehicle_make_id": 6,
                "model": "Benz CLS Class",
                "amount": "15000",
                "description": "Benz CLS Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:22:34.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49ea",
                "vehicle_model_id": 765,
                "vehicle_make_id": 42,
                "model": "Discovery",
                "amount": "15000",
                "description": "Discovery",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:23:54.000Z",
                "niip_id": "5645"
            },
            {
                "_id": "65a918eb42dc804a210c49eb",
                "vehicle_model_id": 766,
                "vehicle_make_id": 42,
                "model": "Evoque",
                "amount": "15000",
                "description": "Evoque",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:24:34.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49ec",
                "vehicle_model_id": 767,
                "vehicle_make_id": 42,
                "model": "Sport",
                "amount": "15000",
                "description": "Sport",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:26:35.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49ed",
                "vehicle_model_id": 768,
                "vehicle_make_id": 42,
                "model": "Range Rover",
                "amount": "15000",
                "description": "Range Rover",
                "created_by": "20200720074306",
                "created_dt": "2023-09-08T02:27:25.000Z",
                "niip_id": "327"
            },
            {
                "_id": "65a918eb42dc804a210c49ee",
                "vehicle_model_id": 769,
                "vehicle_make_id": 5,
                "model": "Bettle",
                "amount": "15000",
                "description": "Bettle",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:11:26.000Z",
                "niip_id": "1308"
            },
            {
                "_id": "65a918eb42dc804a210c49ef",
                "vehicle_model_id": 770,
                "vehicle_make_id": 20,
                "model": "Q7",
                "amount": "15000",
                "description": "Q7",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:12:10.000Z",
                "niip_id": "1240"
            },
            {
                "_id": "65a918eb42dc804a210c49f0",
                "vehicle_model_id": 771,
                "vehicle_make_id": 20,
                "model": "Q5",
                "amount": "15000",
                "description": "Q5",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:12:37.000Z",
                "niip_id": "799"
            },
            {
                "_id": "65a918eb42dc804a210c49f1",
                "vehicle_model_id": 772,
                "vehicle_make_id": 20,
                "model": "Q8",
                "amount": "15000",
                "description": "Q8",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:13:04.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49f2",
                "vehicle_model_id": 773,
                "vehicle_make_id": 67,
                "model": "Patriot",
                "amount": "15000",
                "description": "Patriot",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:14:23.000Z",
                "niip_id": "1510"
            },
            {
                "_id": "65a918eb42dc804a210c49f3",
                "vehicle_model_id": 774,
                "vehicle_make_id": 67,
                "model": "Compass",
                "amount": "15000",
                "description": "Compass",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:19:12.000Z",
                "niip_id": "1589"
            },
            {
                "_id": "65a918eb42dc804a210c49f4",
                "vehicle_model_id": 775,
                "vehicle_make_id": 67,
                "model": "Grand Cherokee",
                "amount": "15000",
                "description": "Grand Cherokee",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:19:46.000Z",
                "niip_id": "308"
            },
            {
                "_id": "65a918eb42dc804a210c49f5",
                "vehicle_model_id": 776,
                "vehicle_make_id": 1,
                "model": "Camry XLE Hybrid",
                "amount": "15000",
                "description": "Camry XLE Hybrid",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:20:17.000Z",
                "niip_id": "586"
            },
            {
                "_id": "65a918eb42dc804a210c49f6",
                "vehicle_model_id": 777,
                "vehicle_make_id": 14,
                "model": "RX 350 Base",
                "amount": "15000",
                "description": "RX 350 Base",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:21:36.000Z",
                "niip_id": "896"
            },
            {
                "_id": "65a918eb42dc804a210c49f7",
                "vehicle_model_id": 778,
                "vehicle_make_id": 14,
                "model": "RX 350 F Sport",
                "amount": "15000",
                "description": "RX 350 F Sport",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:22:03.000Z",
                "niip_id": "896"
            },
            {
                "_id": "65a918eb42dc804a210c49f8",
                "vehicle_model_id": 779,
                "vehicle_make_id": 2,
                "model": "QX 60",
                "amount": "15000",
                "description": "QX 60",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:22:26.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49f9",
                "vehicle_model_id": 780,
                "vehicle_make_id": 6,
                "model": "Benz GLK Class 350",
                "amount": "15000",
                "description": "Benz GLK Class 350",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:22:49.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c49fa",
                "vehicle_model_id": 781,
                "vehicle_make_id": 5,
                "model": "Bora",
                "amount": "15000",
                "description": "Bora",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:23:19.000Z",
                "niip_id": "766"
            },
            {
                "_id": "65a918eb42dc804a210c49fb",
                "vehicle_model_id": 782,
                "vehicle_make_id": 5,
                "model": "Beetie",
                "amount": "15000",
                "description": "Beetie",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:23:47.000Z",
                "niip_id": "1308"
            },
            {
                "_id": "65a918eb42dc804a210c49fc",
                "vehicle_model_id": 783,
                "vehicle_make_id": 67,
                "model": "Jeep Patriot",
                "amount": "15000",
                "description": "Jeep Patriot",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:24:13.000Z",
                "niip_id": "1510"
            },
            {
                "_id": "65a918eb42dc804a210c49fd",
                "vehicle_model_id": 784,
                "vehicle_make_id": 67,
                "model": "Jeep Compass",
                "amount": "15000",
                "description": "Jeep Compass",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:24:41.000Z",
                "niip_id": "1589"
            },
            {
                "_id": "65a918eb42dc804a210c49fe",
                "vehicle_model_id": 785,
                "vehicle_make_id": 67,
                "model": "Jeep Liberty",
                "amount": "15000",
                "description": "Jeep Liberty",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:25:07.000Z",
                "niip_id": "312"
            },
            {
                "_id": "65a918eb42dc804a210c49ff",
                "vehicle_model_id": 786,
                "vehicle_make_id": 79,
                "model": "V8 Vantage",
                "amount": "15000",
                "description": "V8 Vantage",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:27:07.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a00",
                "vehicle_model_id": 787,
                "vehicle_make_id": 79,
                "model": "DBS",
                "amount": "15000",
                "description": "DBS",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:27:37.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a01",
                "vehicle_model_id": 788,
                "vehicle_make_id": 79,
                "model": "DB9",
                "amount": "15000",
                "description": "DB9",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:28:05.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a02",
                "vehicle_model_id": 789,
                "vehicle_make_id": 79,
                "model": "Rapide",
                "amount": "15000",
                "description": "Rapide",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:28:28.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a03",
                "vehicle_model_id": 790,
                "vehicle_make_id": 79,
                "model": "V12 Vantage",
                "amount": "15000",
                "description": "V12 Vantage",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:28:51.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a04",
                "vehicle_model_id": 791,
                "vehicle_make_id": 79,
                "model": "Virage",
                "amount": "15000",
                "description": "Virage",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:35:22.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a05",
                "vehicle_model_id": 792,
                "vehicle_make_id": 79,
                "model": "Vanquish",
                "amount": "15000",
                "description": "Vanquish",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:35:58.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a06",
                "vehicle_model_id": 793,
                "vehicle_make_id": 26,
                "model": "1 Series",
                "amount": "15000",
                "description": "1 Series",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:36:24.000Z",
                "niip_id": "37"
            },
            {
                "_id": "65a918eb42dc804a210c4a07",
                "vehicle_model_id": 794,
                "vehicle_make_id": 26,
                "model": "7 Series",
                "amount": "15000",
                "description": "7 Series",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:36:50.000Z",
                "niip_id": "40"
            },
            {
                "_id": "65a918eb42dc804a210c4a08",
                "vehicle_model_id": 795,
                "vehicle_make_id": 26,
                "model": "X6",
                "amount": "15000",
                "description": "X6",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:37:20.000Z",
                "niip_id": "1024"
            },
            {
                "_id": "65a918eb42dc804a210c4a09",
                "vehicle_model_id": 796,
                "vehicle_make_id": 79,
                "model": "DB11",
                "amount": "15000",
                "description": "DB11",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:41:23.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a0a",
                "vehicle_model_id": 797,
                "vehicle_make_id": 79,
                "model": "Lagonda",
                "amount": "15000",
                "description": "Lagonda",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:41:54.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a0b",
                "vehicle_model_id": 798,
                "vehicle_make_id": 79,
                "model": "Vantage",
                "amount": "15000",
                "description": "Vantage",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:42:22.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a0c",
                "vehicle_model_id": 799,
                "vehicle_make_id": 79,
                "model": "V8",
                "amount": "15000",
                "description": "V8",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:42:49.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a0d",
                "vehicle_model_id": 800,
                "vehicle_make_id": 79,
                "model": "Vanquish S",
                "amount": "15000",
                "description": "Vanquish S",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:43:12.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a0e",
                "vehicle_model_id": 801,
                "vehicle_make_id": 79,
                "model": "Vanquish Zagato",
                "amount": "15000",
                "description": "Vanquish Zagato",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:43:39.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a0f",
                "vehicle_model_id": 802,
                "vehicle_make_id": 79,
                "model": "DBX",
                "amount": "15000",
                "description": "DBX",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:44:08.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a10",
                "vehicle_model_id": 803,
                "vehicle_make_id": 79,
                "model": "Model S",
                "amount": "15000",
                "description": "Model S",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T07:48:10.000Z",
                "niip_id": "3618"
            },
            {
                "_id": "65a918eb42dc804a210c4a11",
                "vehicle_model_id": 804,
                "vehicle_make_id": 12,
                "model": "Roadster",
                "amount": "15000",
                "description": "Roadster",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:11:51.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a12",
                "vehicle_model_id": 805,
                "vehicle_make_id": 12,
                "model": "Model X",
                "amount": "15000",
                "description": "Model X",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:12:33.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a13",
                "vehicle_model_id": 806,
                "vehicle_make_id": 12,
                "model": "Model 3",
                "amount": "15000",
                "description": "Model 3",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:28:15.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a14",
                "vehicle_model_id": 807,
                "vehicle_make_id": 12,
                "model": "Model Y",
                "amount": "15000",
                "description": "Model Y",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:33:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a15",
                "vehicle_model_id": 808,
                "vehicle_make_id": 80,
                "model": "XJ",
                "amount": "15000",
                "description": "XJ",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:36:13.000Z",
                "niip_id": "295"
            },
            {
                "_id": "65a918eb42dc804a210c4a16",
                "vehicle_model_id": 809,
                "vehicle_make_id": 80,
                "model": "XF",
                "amount": "15000",
                "description": "XF",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:37:24.000Z",
                "niip_id": "1557"
            },
            {
                "_id": "65a918eb42dc804a210c4a17",
                "vehicle_model_id": 810,
                "vehicle_make_id": 80,
                "model": "XK",
                "amount": "15000",
                "description": "XK",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:39:31.000Z",
                "niip_id": "303"
            },
            {
                "_id": "65a918eb42dc804a210c4a18",
                "vehicle_model_id": 811,
                "vehicle_make_id": 80,
                "model": "X-Type",
                "amount": "15000",
                "description": "X-Type",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:39:58.000Z",
                "niip_id": "294"
            },
            {
                "_id": "65a918eb42dc804a210c4a19",
                "vehicle_model_id": 812,
                "vehicle_make_id": 80,
                "model": "S-Type",
                "amount": "15000",
                "description": "S-Type",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:40:23.000Z",
                "niip_id": "292"
            },
            {
                "_id": "65a918eb42dc804a210c4a1a",
                "vehicle_model_id": 813,
                "vehicle_make_id": 80,
                "model": "F-Type",
                "amount": "15000",
                "description": "F-Type",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:40:47.000Z",
                "niip_id": "2136"
            },
            {
                "_id": "65a918eb42dc804a210c4a1b",
                "vehicle_model_id": 814,
                "vehicle_make_id": 80,
                "model": "Vanden Plas",
                "amount": "15000",
                "description": "Vanden Plas",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:41:08.000Z",
                "niip_id": "293"
            },
            {
                "_id": "65a918eb42dc804a210c4a1c",
                "vehicle_model_id": 815,
                "vehicle_make_id": 80,
                "model": "XK8",
                "amount": "15000",
                "description": "XK8",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:41:31.000Z",
                "niip_id": "303"
            },
            {
                "_id": "65a918eb42dc804a210c4a1d",
                "vehicle_model_id": 816,
                "vehicle_make_id": 80,
                "model": "XJR",
                "amount": "15000",
                "description": "XJR",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:42:03.000Z",
                "niip_id": "300"
            },
            {
                "_id": "65a918eb42dc804a210c4a1e",
                "vehicle_model_id": 817,
                "vehicle_make_id": 80,
                "model": "XE",
                "amount": "15000",
                "description": "XE",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:42:45.000Z",
                "niip_id": "2230"
            },
            {
                "_id": "65a918eb42dc804a210c4a1f",
                "vehicle_model_id": 818,
                "vehicle_make_id": 80,
                "model": "F-Pace",
                "amount": "15000",
                "description": "F-Pace",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:43:11.000Z",
                "niip_id": "2136"
            },
            {
                "_id": "65a918eb42dc804a210c4a20",
                "vehicle_model_id": 819,
                "vehicle_make_id": 80,
                "model": "Super V8",
                "amount": "15000",
                "description": "Super V8",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:43:33.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a21",
                "vehicle_model_id": 820,
                "vehicle_make_id": 80,
                "model": "XJ8",
                "amount": "15000",
                "description": "XJ8",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:43:55.000Z",
                "niip_id": "299"
            },
            {
                "_id": "65a918eb42dc804a210c4a22",
                "vehicle_model_id": 821,
                "vehicle_make_id": 80,
                "model": "XJ6",
                "amount": "15000",
                "description": "XJ6",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:44:24.000Z",
                "niip_id": "298"
            },
            {
                "_id": "65a918eb42dc804a210c4a23",
                "vehicle_model_id": 822,
                "vehicle_make_id": 80,
                "model": "XJS",
                "amount": "15000",
                "description": "XJS",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:44:47.000Z",
                "niip_id": "302"
            },
            {
                "_id": "65a918eb42dc804a210c4a24",
                "vehicle_model_id": 823,
                "vehicle_make_id": 80,
                "model": "E-PACE",
                "amount": "15000",
                "description": "E-PACE",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:45:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a25",
                "vehicle_model_id": 824,
                "vehicle_make_id": 80,
                "model": "I-PACE",
                "amount": "15000",
                "description": "I-PACE",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:45:43.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a26",
                "vehicle_model_id": 825,
                "vehicle_make_id": 80,
                "model": "XJ12",
                "amount": "15000",
                "description": "XJ12",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:46:11.000Z",
                "niip_id": "297"
            },
            {
                "_id": "65a918eb42dc804a210c4a27",
                "vehicle_model_id": 826,
                "vehicle_make_id": 80,
                "model": "XKR",
                "amount": "15000",
                "description": "XKR",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:46:43.000Z",
                "niip_id": "304"
            },
            {
                "_id": "65a918eb42dc804a210c4a28",
                "vehicle_model_id": 827,
                "vehicle_make_id": 81,
                "model": "Quattroporte",
                "amount": "15000",
                "description": "Quattroporte",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:48:34.000Z",
                "niip_id": "1720"
            },
            {
                "_id": "65a918eb42dc804a210c4a29",
                "vehicle_model_id": 828,
                "vehicle_make_id": 81,
                "model": "Granturismo",
                "amount": "15000",
                "description": "Granturismo",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:49:01.000Z",
                "niip_id": "2290"
            },
            {
                "_id": "65a918eb42dc804a210c4a2a",
                "vehicle_model_id": 829,
                "vehicle_make_id": 81,
                "model": "Coupe",
                "amount": "15000",
                "description": "Coupe",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:49:29.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a2b",
                "vehicle_model_id": 830,
                "vehicle_make_id": 81,
                "model": "Spyder",
                "amount": "15000",
                "description": "Spyder",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:49:49.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a2c",
                "vehicle_model_id": 831,
                "vehicle_make_id": 81,
                "model": "Ghibli",
                "amount": "15000",
                "description": "Ghibli",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:50:14.000Z",
                "niip_id": "2337"
            },
            {
                "_id": "65a918eb42dc804a210c4a2d",
                "vehicle_model_id": 832,
                "vehicle_make_id": 81,
                "model": "Levante",
                "amount": "15000",
                "description": "Levante",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:50:34.000Z",
                "niip_id": "3705"
            },
            {
                "_id": "65a918eb42dc804a210c4a2e",
                "vehicle_model_id": 833,
                "vehicle_make_id": 81,
                "model": "Merak",
                "amount": "15000",
                "description": "Merak",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:50:55.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a2f",
                "vehicle_model_id": 834,
                "vehicle_make_id": 81,
                "model": "Biturbo",
                "amount": "15000",
                "description": "Biturbo",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:51:22.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a30",
                "vehicle_model_id": 835,
                "vehicle_make_id": 81,
                "model": "TC",
                "amount": "15000",
                "description": "TC",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:51:50.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a31",
                "vehicle_model_id": 836,
                "vehicle_make_id": 81,
                "model": "430",
                "amount": "15000",
                "description": "430",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:52:15.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a32",
                "vehicle_model_id": 837,
                "vehicle_make_id": 81,
                "model": "228",
                "amount": "15000",
                "description": "228",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:52:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a33",
                "vehicle_model_id": 838,
                "vehicle_make_id": 81,
                "model": "MC20",
                "amount": "15000",
                "description": "MC20",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:53:03.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a34",
                "vehicle_model_id": 839,
                "vehicle_make_id": 82,
                "model": "Phantom",
                "amount": "15000",
                "description": "Phantom",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:55:15.000Z",
                "niip_id": "927"
            },
            {
                "_id": "65a918eb42dc804a210c4a35",
                "vehicle_model_id": 840,
                "vehicle_make_id": 82,
                "model": "Ghost",
                "amount": "15000",
                "description": "Ghost",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:55:42.000Z",
                "niip_id": "868"
            },
            {
                "_id": "65a918eb42dc804a210c4a36",
                "vehicle_model_id": 841,
                "vehicle_make_id": 82,
                "model": "Wraith",
                "amount": "15000",
                "description": "Wraith",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:56:16.000Z",
                "niip_id": "295"
            },
            {
                "_id": "65a918eb42dc804a210c4a37",
                "vehicle_model_id": 842,
                "vehicle_make_id": 82,
                "model": "Silver Dawn",
                "amount": "15000",
                "description": "Silver Dawn",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:56:38.000Z",
                "niip_id": "3621"
            },
            {
                "_id": "65a918eb42dc804a210c4a38",
                "vehicle_model_id": 843,
                "vehicle_make_id": 82,
                "model": "Silver Spur",
                "amount": "15000",
                "description": "Silver Spur",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:57:14.000Z",
                "niip_id": "2134"
            },
            {
                "_id": "65a918eb42dc804a210c4a39",
                "vehicle_model_id": 844,
                "vehicle_make_id": 82,
                "model": "Silver Spirit",
                "amount": "15000",
                "description": "Silver Spirit",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:57:44.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a3a",
                "vehicle_model_id": 845,
                "vehicle_make_id": 82,
                "model": "Touring Limousine",
                "amount": "15000",
                "description": "Touring Limousine",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:58:02.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a3b",
                "vehicle_model_id": 846,
                "vehicle_make_id": 82,
                "model": "Corniche",
                "amount": "15000",
                "description": "Corniche",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:58:27.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a3c",
                "vehicle_model_id": 847,
                "vehicle_make_id": 82,
                "model": "Park Ward",
                "amount": "15000",
                "description": "Park Ward",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:58:58.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a3d",
                "vehicle_model_id": 848,
                "vehicle_make_id": 82,
                "model": "Silver Seraph",
                "amount": "15000",
                "description": "Silver Seraph",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:59:21.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a3e",
                "vehicle_model_id": 849,
                "vehicle_make_id": 82,
                "model": "Dawn",
                "amount": "15000",
                "description": "Dawn",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T08:59:45.000Z",
                "niip_id": "3621"
            },
            {
                "_id": "65a918eb42dc804a210c4a3f",
                "vehicle_model_id": 850,
                "vehicle_make_id": 82,
                "model": "Camargue",
                "amount": "15000",
                "description": "Camargue",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:00:18.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a40",
                "vehicle_model_id": 851,
                "vehicle_make_id": 82,
                "model": "Cullinan",
                "amount": "15000",
                "description": "Cullinan",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:00:44.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a41",
                "vehicle_model_id": 852,
                "vehicle_make_id": 82,
                "model": "Flying Spur",
                "amount": "15000",
                "description": "Flying Spur",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:01:10.000Z",
                "niip_id": "2134"
            },
            {
                "_id": "65a918eb42dc804a210c4a42",
                "vehicle_model_id": 853,
                "vehicle_make_id": 83,
                "model": "R series",
                "amount": "15000",
                "description": "R series",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:23:59.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a43",
                "vehicle_model_id": 854,
                "vehicle_make_id": 83,
                "model": "S Series",
                "amount": "15000",
                "description": "S Series",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:24:53.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a44",
                "vehicle_model_id": 855,
                "vehicle_make_id": 84,
                "model": "Hot Rod",
                "amount": "15000",
                "description": "Hot Rod",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:26:36.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a45",
                "vehicle_model_id": 856,
                "vehicle_make_id": 84,
                "model": "La Vita",
                "amount": "15000",
                "description": "La Vita",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:27:14.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a46",
                "vehicle_model_id": 857,
                "vehicle_make_id": 6,
                "model": "Sprinter",
                "amount": "20000",
                "description": "Sprinter",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:28:24.000Z",
                "niip_id": "959"
            },
            {
                "_id": "65a918eb42dc804a210c4a47",
                "vehicle_model_id": 858,
                "vehicle_make_id": 6,
                "model": "SL-Class",
                "amount": "15000",
                "description": "SL-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:28:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a48",
                "vehicle_model_id": 859,
                "vehicle_make_id": 6,
                "model": "SLK-Class",
                "amount": "15000",
                "description": "SLK-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:29:05.000Z",
                "niip_id": "414"
            },
            {
                "_id": "65a918eb42dc804a210c4a49",
                "vehicle_model_id": 860,
                "vehicle_make_id": 6,
                "model": "CLS-Class",
                "amount": "15000",
                "description": "CLS-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:29:55.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a4a",
                "vehicle_model_id": 861,
                "vehicle_make_id": 6,
                "model": "CLA-Class",
                "amount": "15000",
                "description": "CLA-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:30:21.000Z",
                "niip_id": "3719"
            },
            {
                "_id": "65a918eb42dc804a210c4a4b",
                "vehicle_model_id": 862,
                "vehicle_make_id": 6,
                "model": "GLA-Class",
                "amount": "15000",
                "description": "GLA-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:30:43.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a4c",
                "vehicle_model_id": 863,
                "vehicle_make_id": 6,
                "model": "S-Class",
                "amount": "15000",
                "description": "S-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:48:37.000Z",
                "niip_id": "412"
            },
            {
                "_id": "65a918eb42dc804a210c4a4d",
                "vehicle_model_id": 864,
                "vehicle_make_id": 6,
                "model": "SLS-Class",
                "amount": "15000",
                "description": "SLS-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:49:33.000Z",
                "niip_id": "4425"
            },
            {
                "_id": "65a918eb42dc804a210c4a4e",
                "vehicle_model_id": 865,
                "vehicle_make_id": 6,
                "model": "B-Class",
                "amount": "15000",
                "description": "B-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:50:06.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a4f",
                "vehicle_model_id": 866,
                "vehicle_make_id": 6,
                "model": "CL-Class",
                "amount": "15000",
                "description": "CL-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:53:41.000Z",
                "niip_id": "406"
            },
            {
                "_id": "65a918eb42dc804a210c4a50",
                "vehicle_model_id": 867,
                "vehicle_make_id": 6,
                "model": "CLK-Class",
                "amount": "15000",
                "description": "CLK-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:59:03.000Z",
                "niip_id": "407"
            },
            {
                "_id": "65a918eb42dc804a210c4a51",
                "vehicle_model_id": 868,
                "vehicle_make_id": 6,
                "model": "SLR McLaren",
                "amount": "15000",
                "description": "SLR McLaren",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T09:59:33.000Z",
                "niip_id": "1927"
            },
            {
                "_id": "65a918eb42dc804a210c4a52",
                "vehicle_model_id": 869,
                "vehicle_make_id": 6,
                "model": "R-Class",
                "amount": "15000",
                "description": "R-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:00:24.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a53",
                "vehicle_model_id": 870,
                "vehicle_make_id": 6,
                "model": "GLC-Class",
                "amount": "15000",
                "description": "GLC-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:01:13.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a54",
                "vehicle_model_id": 871,
                "vehicle_make_id": 6,
                "model": "GLE-Class",
                "amount": "15000",
                "description": "GLE-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:01:40.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a55",
                "vehicle_model_id": 872,
                "vehicle_make_id": 6,
                "model": "METRIS",
                "amount": "15000",
                "description": "METRIS",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:02:10.000Z",
                "niip_id": "2551"
            },
            {
                "_id": "65a918eb42dc804a210c4a56",
                "vehicle_model_id": 873,
                "vehicle_make_id": 6,
                "model": "SLC-Class",
                "amount": "15000",
                "description": "SLC-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:02:33.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a57",
                "vehicle_model_id": 874,
                "vehicle_make_id": 6,
                "model": "ML-Class",
                "amount": "15000",
                "description": "ML-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:03:00.000Z",
                "niip_id": "411"
            },
            {
                "_id": "65a918eb42dc804a210c4a58",
                "vehicle_model_id": 875,
                "vehicle_make_id": 6,
                "model": "GLS-Class",
                "amount": "15000",
                "description": "GLS-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:03:56.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a59",
                "vehicle_model_id": 876,
                "vehicle_make_id": 6,
                "model": "300",
                "amount": "15000",
                "description": "300",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:21:48.000Z",
                "niip_id": "929"
            },
            {
                "_id": "65a918eb42dc804a210c4a5a",
                "vehicle_model_id": 877,
                "vehicle_make_id": 6,
                "model": "500",
                "amount": "15000",
                "description": "500",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:28:13.000Z",
                "niip_id": "395"
            },
            {
                "_id": "65a918eb42dc804a210c4a5b",
                "vehicle_model_id": 878,
                "vehicle_make_id": 6,
                "model": "L1013",
                "amount": "15000",
                "description": "L1013",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:28:58.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a5c",
                "vehicle_model_id": 879,
                "vehicle_make_id": 6,
                "model": "L1113",
                "amount": "15000",
                "description": "L1113",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:29:32.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a5d",
                "vehicle_model_id": 880,
                "vehicle_make_id": 6,
                "model": "L1116",
                "amount": "15000",
                "description": "L1116",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:30:32.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a5e",
                "vehicle_model_id": 881,
                "vehicle_make_id": 6,
                "model": "L1316",
                "amount": "15000",
                "description": "L1316",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:31:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a5f",
                "vehicle_model_id": 882,
                "vehicle_make_id": 6,
                "model": "L1418",
                "amount": "15000",
                "description": "L1418",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:31:32.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a60",
                "vehicle_model_id": 883,
                "vehicle_make_id": 6,
                "model": "L1117",
                "amount": "15000",
                "description": "L1117",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:32:34.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a61",
                "vehicle_model_id": 884,
                "vehicle_make_id": 6,
                "model": "L1317",
                "amount": "15000",
                "description": "L1317",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:33:16.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a62",
                "vehicle_model_id": 885,
                "vehicle_make_id": 6,
                "model": "L1419",
                "amount": "15000",
                "description": "L1419",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:33:52.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a63",
                "vehicle_model_id": 886,
                "vehicle_make_id": 6,
                "model": "LP1419",
                "amount": "15000",
                "description": "LP1419",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:34:38.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a64",
                "vehicle_model_id": 887,
                "vehicle_make_id": 6,
                "model": "LPS1525",
                "amount": "15000",
                "description": "LPS1525",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:35:03.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a65",
                "vehicle_model_id": 888,
                "vehicle_make_id": 6,
                "model": "LP1219",
                "amount": "15000",
                "description": "LP1219",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:35:31.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a66",
                "vehicle_model_id": 889,
                "vehicle_make_id": 6,
                "model": "L1319",
                "amount": "15000",
                "description": "L1319",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:36:23.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a67",
                "vehicle_model_id": 890,
                "vehicle_make_id": 6,
                "model": "240",
                "amount": "15000",
                "description": "240",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:37:29.000Z",
                "niip_id": "907"
            },
            {
                "_id": "65a918eb42dc804a210c4a68",
                "vehicle_model_id": 891,
                "vehicle_make_id": 6,
                "model": "380",
                "amount": "15000",
                "description": "380",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T10:38:02.000Z",
                "niip_id": "389"
            },
            {
                "_id": "65a918eb42dc804a210c4a69",
                "vehicle_model_id": 892,
                "vehicle_make_id": 6,
                "model": "400",
                "amount": "15000",
                "description": "400",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:48:19.000Z",
                "niip_id": "391"
            },
            {
                "_id": "65a918eb42dc804a210c4a6a",
                "vehicle_model_id": 893,
                "vehicle_make_id": 6,
                "model": "600",
                "amount": "15000",
                "description": "600",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:51:38.000Z",
                "niip_id": "402"
            },
            {
                "_id": "65a918eb42dc804a210c4a6b",
                "vehicle_model_id": 894,
                "vehicle_make_id": 6,
                "model": "350",
                "amount": "15000",
                "description": "350",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:54:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a6c",
                "vehicle_model_id": 895,
                "vehicle_make_id": 6,
                "model": "420",
                "amount": "15000",
                "description": "420",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:56:14.000Z",
                "niip_id": "394"
            },
            {
                "_id": "65a918eb42dc804a210c4a6d",
                "vehicle_model_id": 896,
                "vehicle_make_id": 6,
                "model": "560",
                "amount": "15000",
                "description": "560",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:56:59.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a6e",
                "vehicle_model_id": 897,
                "vehicle_make_id": 6,
                "model": "260",
                "amount": "15000",
                "description": "260",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:57:40.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a6f",
                "vehicle_model_id": 898,
                "vehicle_make_id": 6,
                "model": "GLB-Class",
                "amount": "15000",
                "description": "GLB-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:58:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a70",
                "vehicle_model_id": 899,
                "vehicle_make_id": 6,
                "model": "EQC-Class",
                "amount": "15000",
                "description": "EQC-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:59:04.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a71",
                "vehicle_model_id": 900,
                "vehicle_make_id": 6,
                "model": "EQS-Class",
                "amount": "15000",
                "description": "EQS-Class",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T11:59:31.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a72",
                "vehicle_model_id": 901,
                "vehicle_make_id": 85,
                "model": "Sprinter",
                "amount": "15000",
                "description": "Sprinter",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:01:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a73",
                "vehicle_model_id": 902,
                "vehicle_make_id": 85,
                "model": "MB Chassis",
                "amount": "15000",
                "description": "MB Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:01:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a74",
                "vehicle_model_id": 903,
                "vehicle_make_id": 85,
                "model": "MC 45 Chassis",
                "amount": "15000",
                "description": "MC 45 Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:02:11.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a75",
                "vehicle_model_id": 904,
                "vehicle_make_id": 85,
                "model": "XC Chassis",
                "amount": "15000",
                "description": "XC Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:03:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a76",
                "vehicle_model_id": 905,
                "vehicle_make_id": 85,
                "model": "XC-S Straight Rail R",
                "amount": "15000",
                "description": "XC-S Straight Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:03:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a77",
                "vehicle_model_id": 906,
                "vehicle_make_id": 85,
                "model": "VCL Chassis",
                "amount": "15000",
                "description": "VCL Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:04:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a78",
                "vehicle_model_id": 907,
                "vehicle_make_id": 85,
                "model": "MT 35 Chassis",
                "amount": "15000",
                "description": "MT 35 Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:04:32.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a79",
                "vehicle_model_id": 908,
                "vehicle_make_id": 85,
                "model": "MT 45 Chassis",
                "amount": "15000",
                "description": "MT 45 Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:04:53.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a7a",
                "vehicle_model_id": 909,
                "vehicle_make_id": 85,
                "model": "MT 55 Chassis",
                "amount": "15000",
                "description": "MT 55 Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:05:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a7b",
                "vehicle_model_id": 910,
                "vehicle_make_id": 85,
                "model": "ER Rear Engine Bus C",
                "amount": "15000",
                "description": "ER Rear Engine Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:05:38.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a7c",
                "vehicle_model_id": 911,
                "vehicle_make_id": 85,
                "model": "XB Chassis",
                "amount": "15000",
                "description": "XB Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:06:10.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a7d",
                "vehicle_model_id": 912,
                "vehicle_make_id": 85,
                "model": "FS 65 Chassis",
                "amount": "15000",
                "description": "FS 65 Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:06:41.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a7e",
                "vehicle_model_id": 913,
                "vehicle_make_id": 85,
                "model": "FB 65 Chassis",
                "amount": "15000",
                "description": "FB 65 Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:07:05.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a7f",
                "vehicle_model_id": 914,
                "vehicle_make_id": 85,
                "model": "MBO Chassis",
                "amount": "15000",
                "description": "MBO Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:07:59.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a80",
                "vehicle_model_id": 915,
                "vehicle_make_id": 85,
                "model": "OMC Chassis",
                "amount": "15000",
                "description": "OMC Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:08:25.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a81",
                "vehicle_model_id": 916,
                "vehicle_make_id": 85,
                "model": "XCA Chassis",
                "amount": "15000",
                "description": "XCA Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:09:36.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a82",
                "vehicle_model_id": 917,
                "vehicle_make_id": 85,
                "model": "EF Front Engine Bus ",
                "amount": "15000",
                "description": "EF Front Engine Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:14:30.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a83",
                "vehicle_model_id": 918,
                "vehicle_make_id": 85,
                "model": "MB 55 Chassis",
                "amount": "15000",
                "description": "MB 55 Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:15:27.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a84",
                "vehicle_model_id": 919,
                "vehicle_make_id": 85,
                "model": "B2 Bus Chassis",
                "amount": "15000",
                "description": "B2 Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:15:49.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a85",
                "vehicle_model_id": 920,
                "vehicle_make_id": 85,
                "model": "XC Formed Rail Rear ",
                "amount": "15000",
                "description": "XC Formed Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:16:12.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a86",
                "vehicle_model_id": 921,
                "vehicle_make_id": 85,
                "model": "XC Modular Rail Rear",
                "amount": "15000",
                "description": "XC Modular Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:16:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a87",
                "vehicle_model_id": 922,
                "vehicle_make_id": 85,
                "model": "XC Raised Rail Rear ",
                "amount": "15000",
                "description": "XC Raised Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:19:23.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a88",
                "vehicle_model_id": 923,
                "vehicle_make_id": 85,
                "model": "XC Raised Rail (Lowe",
                "amount": "15000",
                "description": "XC Raised Rail (Lowerer Engine) Rear Engine Motor ",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:20:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a89",
                "vehicle_model_id": 924,
                "vehicle_make_id": 85,
                "model": "FBX 106 Shuttle Bus ",
                "amount": "15000",
                "description": "FBX 106 Shuttle Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:20:21.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a8a",
                "vehicle_model_id": 925,
                "vehicle_make_id": 85,
                "model": "XB Straight Rail Rea",
                "amount": "15000",
                "description": "XB Straight Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:20:44.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a8b",
                "vehicle_model_id": 926,
                "vehicle_make_id": 85,
                "model": "MT 45 HEV Chassis",
                "amount": "15000",
                "description": "MT 45 HEV Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:21:06.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a8c",
                "vehicle_model_id": 927,
                "vehicle_make_id": 85,
                "model": "XC-F Formed Rail Rea",
                "amount": "15000",
                "description": "XC-F Formed Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:23:14.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a8d",
                "vehicle_model_id": 928,
                "vehicle_make_id": 85,
                "model": "XC Raised Rail (Lowe",
                "amount": "15000",
                "description": "XC Raised Rail (Lowerer Engine) Rear Engine Motor ",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:34:53.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a8e",
                "vehicle_model_id": 929,
                "vehicle_make_id": 85,
                "model": "XC Raised Rail (Lowe",
                "amount": "15000",
                "description": "XC Raised Rail (Lowerer Engine) Rear Engine Motor ",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:35:15.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a8f",
                "vehicle_model_id": 930,
                "vehicle_make_id": 85,
                "model": "XC Raised Rail (Lowe",
                "amount": "15000",
                "description": "XC Raised Rail (Lowerer Engine) Rear Engine Motor ",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:35:44.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a90",
                "vehicle_model_id": 931,
                "vehicle_make_id": 85,
                "model": "XC Raised Rail (Lowe",
                "amount": "15000",
                "description": "XC Raised Rail (Lowerer Engine) Rear Engine Motor ",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:36:49.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a91",
                "vehicle_model_id": 932,
                "vehicle_make_id": 85,
                "model": "XC Raised Rail (Lowe",
                "amount": "15000",
                "description": "XC Raised Rail (Lowerer Engine) Rear Engine Motor ",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:37:57.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a92",
                "vehicle_model_id": 933,
                "vehicle_make_id": 85,
                "model": "FBX 106 Shuttle Bus ",
                "amount": "15000",
                "description": "FBX 106 Shuttle Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:39:04.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a93",
                "vehicle_model_id": 934,
                "vehicle_make_id": 85,
                "model": "XC-M Modular Rail Re",
                "amount": "15000",
                "description": "XC-M Modular Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:43:03.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a94",
                "vehicle_model_id": 935,
                "vehicle_make_id": 85,
                "model": "XC-R Raised Rail Rea",
                "amount": "15000",
                "description": "XC-R Raised Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:44:28.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a95",
                "vehicle_model_id": 936,
                "vehicle_make_id": 85,
                "model": "MC Front Engine Moto",
                "amount": "15000",
                "description": "MC Front Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:45:17.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a96",
                "vehicle_model_id": 937,
                "vehicle_make_id": 85,
                "model": "S2 106 Bus Chassis",
                "amount": "15000",
                "description": "S2 106 Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:45:47.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a97",
                "vehicle_model_id": 938,
                "vehicle_make_id": 85,
                "model": "XB Raised Rail Rear ",
                "amount": "15000",
                "description": "XB Raised Rail Rear Engine Shuttle Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T00:46:26.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a98",
                "vehicle_model_id": 939,
                "vehicle_make_id": 85,
                "model": "XC-P Powerliner Rais",
                "amount": "15000",
                "description": "XC-P Powerliner Raise Rail Rear Engine Motor Home ",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:38:38.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a99",
                "vehicle_model_id": 940,
                "vehicle_make_id": 85,
                "model": "XC-L Lowered Rail Re",
                "amount": "15000",
                "description": "XC-L Lowered Rail Rear Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:39:22.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a9a",
                "vehicle_model_id": 941,
                "vehicle_make_id": 85,
                "model": "MT-55 HEV Chassis (H",
                "amount": "15000",
                "description": "MT-55 HEV Chassis (Hybrid Electric Vehicle)",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:40:00.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a9b",
                "vehicle_model_id": 942,
                "vehicle_make_id": 85,
                "model": "MT 45G Front Gasolin",
                "amount": "15000",
                "description": "MT 45G Front Gasoline Engine Walk in Van Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:41:34.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a9c",
                "vehicle_model_id": 943,
                "vehicle_make_id": 85,
                "model": "MCG Front Gasoline E",
                "amount": "15000",
                "description": "MCG Front Gasoline Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:42:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a9d",
                "vehicle_model_id": 944,
                "vehicle_make_id": 85,
                "model": "MC HEV (Hybrid Elect",
                "amount": "15000",
                "description": "MC HEV (Hybrid Electric Vehicle) Front Engine Moto",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:45:37.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a9e",
                "vehicle_model_id": 945,
                "vehicle_make_id": 85,
                "model": "B2 HEV 106 CONVENTIO",
                "amount": "15000",
                "description": "B2 HEV 106 CONVENTIONAL BUS CHASSIS",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:46:10.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4a9f",
                "vehicle_model_id": 946,
                "vehicle_make_id": 85,
                "model": "MBC Front Engine Com",
                "amount": "15000",
                "description": "MBC Front Engine Commercial Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:46:42.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa0",
                "vehicle_model_id": 947,
                "vehicle_make_id": 85,
                "model": "XBP Rear Engine Comm",
                "amount": "15000",
                "description": "XBP Rear Engine Commercial Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T01:55:53.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa1",
                "vehicle_model_id": 948,
                "vehicle_make_id": 85,
                "model": "MCL Front Engine Mot",
                "amount": "15000",
                "description": "MCL Front Engine Motor Home Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:21:44.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa2",
                "vehicle_model_id": 949,
                "vehicle_make_id": 85,
                "model": "MT-55 HHV Chassis (H",
                "amount": "15000",
                "description": "MT-55 HHV Chassis (Hydraulic Hybrid Vehicle)",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:44:47.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa3",
                "vehicle_model_id": 950,
                "vehicle_make_id": 85,
                "model": "S2C 106 Conventional",
                "amount": "15000",
                "description": "S2C 106 Conventional Cab & Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:45:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa4",
                "vehicle_model_id": 951,
                "vehicle_make_id": 85,
                "model": "S2RV 106 Conventiona",
                "amount": "15000",
                "description": "S2RV 106 Conventional cab & Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:46:25.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa5",
                "vehicle_model_id": 952,
                "vehicle_make_id": 85,
                "model": "MT45EV (Electric Veh",
                "amount": "15000",
                "description": "MT45EV (Electric Vehicle)",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:46:55.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa6",
                "vehicle_model_id": 953,
                "vehicle_make_id": 85,
                "model": "XC Rear Engine Motor",
                "amount": "15000",
                "description": "XC Rear Engine Motor Home Chassis GLIDER",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:47:30.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa7",
                "vehicle_model_id": 954,
                "vehicle_make_id": 85,
                "model": "EFX Front Engine Bus",
                "amount": "15000",
                "description": "EFX Front Engine Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:48:29.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa8",
                "vehicle_model_id": 955,
                "vehicle_make_id": 85,
                "model": "S2G Conventional Ful",
                "amount": "15000",
                "description": "S2G Conventional Full Cab and Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:49:28.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aa9",
                "vehicle_model_id": 956,
                "vehicle_make_id": 85,
                "model": "MT 55G Front Gasolin",
                "amount": "15000",
                "description": "MT 55G Front Gasoline Engine Walk in Van Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:50:00.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aaa",
                "vehicle_model_id": 957,
                "vehicle_make_id": 85,
                "model": "XBS Straight Rail Re",
                "amount": "15000",
                "description": "XBS Straight Rail Rear Engine Shuttle Bus Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-11T02:50:31.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aab",
                "vehicle_model_id": 958,
                "vehicle_make_id": 85,
                "model": "FLB",
                "amount": "15000",
                "description": "FLB",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:26:55.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aac",
                "vehicle_model_id": 959,
                "vehicle_make_id": 85,
                "model": "Argosy",
                "amount": "15000",
                "description": "Argosy",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:27:33.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aad",
                "vehicle_model_id": 960,
                "vehicle_make_id": 85,
                "model": "C112",
                "amount": "15000",
                "description": "C112",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:28:18.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aae",
                "vehicle_model_id": 961,
                "vehicle_make_id": 85,
                "model": "C120",
                "amount": "15000",
                "description": "C120",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:28:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aaf",
                "vehicle_model_id": 962,
                "vehicle_make_id": 85,
                "model": "Columbia",
                "amount": "15000",
                "description": "Columbia",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:28:59.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab0",
                "vehicle_model_id": 963,
                "vehicle_make_id": 85,
                "model": "CST112",
                "amount": "15000",
                "description": "CST112",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:29:21.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab1",
                "vehicle_model_id": 964,
                "vehicle_make_id": 85,
                "model": "FLD112",
                "amount": "15000",
                "description": "FLD112",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:29:41.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab2",
                "vehicle_model_id": 965,
                "vehicle_make_id": 85,
                "model": "FLD120",
                "amount": "15000",
                "description": "FLD120",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:30:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab3",
                "vehicle_model_id": 966,
                "vehicle_make_id": 85,
                "model": "FLD132",
                "amount": "15000",
                "description": "FLD132",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:30:19.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab4",
                "vehicle_model_id": 967,
                "vehicle_make_id": 85,
                "model": "FL112",
                "amount": "15000",
                "description": "FL112",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:30:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab5",
                "vehicle_model_id": 968,
                "vehicle_make_id": 85,
                "model": "FL50",
                "amount": "15000",
                "description": "FL50",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:30:58.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab6",
                "vehicle_model_id": 969,
                "vehicle_make_id": 85,
                "model": "FL60",
                "amount": "15000",
                "description": "FL60",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:31:26.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab7",
                "vehicle_model_id": 970,
                "vehicle_make_id": 85,
                "model": "FL70",
                "amount": "15000",
                "description": "FL70",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:31:43.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab8",
                "vehicle_model_id": 971,
                "vehicle_make_id": 85,
                "model": "FL80",
                "amount": "15000",
                "description": "FL80",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:32:01.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ab9",
                "vehicle_model_id": 972,
                "vehicle_make_id": 85,
                "model": "FL106",
                "amount": "15000",
                "description": "FL106",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:32:20.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aba",
                "vehicle_model_id": 973,
                "vehicle_make_id": 85,
                "model": "FC70",
                "amount": "15000",
                "description": "FC70",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:32:39.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4abb",
                "vehicle_model_id": 974,
                "vehicle_make_id": 85,
                "model": "FC80",
                "amount": "15000",
                "description": "FC80",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:33:23.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4abc",
                "vehicle_model_id": 975,
                "vehicle_make_id": 85,
                "model": "RIV",
                "amount": "15000",
                "description": "RIV",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:33:47.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4abd",
                "vehicle_model_id": 976,
                "vehicle_make_id": 85,
                "model": "Sport Chassis",
                "amount": "15000",
                "description": "Sport Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:34:07.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4abe",
                "vehicle_model_id": 977,
                "vehicle_make_id": 85,
                "model": "Condor",
                "amount": "15000",
                "description": "Condor",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:34:50.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4abf",
                "vehicle_model_id": 978,
                "vehicle_make_id": 85,
                "model": "Coronado",
                "amount": "15000",
                "description": "Coronado",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:35:13.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac0",
                "vehicle_model_id": 979,
                "vehicle_make_id": 85,
                "model": "M2",
                "amount": "15000",
                "description": "M2",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:35:42.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac1",
                "vehicle_model_id": 980,
                "vehicle_make_id": 85,
                "model": "Classic",
                "amount": "15000",
                "description": "Classic",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:36:11.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac2",
                "vehicle_model_id": 981,
                "vehicle_make_id": 85,
                "model": "Cascadia",
                "amount": "15000",
                "description": "Cascadia",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:36:31.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac3",
                "vehicle_model_id": 982,
                "vehicle_make_id": 85,
                "model": "MD109",
                "amount": "15000",
                "description": "MD109",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T11:36:52.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac4",
                "vehicle_model_id": 983,
                "vehicle_make_id": 85,
                "model": "114SD",
                "amount": "15000",
                "description": "114SD",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:23:59.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac5",
                "vehicle_model_id": 984,
                "vehicle_make_id": 85,
                "model": "108SD",
                "amount": "15000",
                "description": "108SD",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:27:35.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac6",
                "vehicle_model_id": 985,
                "vehicle_make_id": 85,
                "model": "CST120",
                "amount": "15000",
                "description": "CST120",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:27:57.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac7",
                "vehicle_model_id": 986,
                "vehicle_make_id": 85,
                "model": "FLS112 Legacy",
                "amount": "15000",
                "description": "FLS112 Legacy",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:28:56.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac8",
                "vehicle_model_id": 987,
                "vehicle_make_id": 85,
                "model": "Unimog",
                "amount": "15000",
                "description": "Unimog",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:29:15.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ac9",
                "vehicle_model_id": 988,
                "vehicle_make_id": 85,
                "model": "MC Chassis",
                "amount": "15000",
                "description": "MC Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:29:56.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4aca",
                "vehicle_model_id": 989,
                "vehicle_make_id": 85,
                "model": "VC Chassis",
                "amount": "15000",
                "description": "VC Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:30:29.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4acb",
                "vehicle_model_id": 990,
                "vehicle_make_id": 85,
                "model": "SBFD",
                "amount": "15000",
                "description": "SBFD",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:30:49.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4acc",
                "vehicle_model_id": 991,
                "vehicle_make_id": 85,
                "model": "SBRD Chassis",
                "amount": "15000",
                "description": "SBRD Chassis",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:31:07.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4acd",
                "vehicle_model_id": 992,
                "vehicle_make_id": 85,
                "model": "L-Line",
                "amount": "15000",
                "description": "L-Line",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:31:25.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ace",
                "vehicle_model_id": 993,
                "vehicle_make_id": 85,
                "model": "M-Line",
                "amount": "15000",
                "description": "M-Line",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:31:52.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4acf",
                "vehicle_model_id": 994,
                "vehicle_make_id": 85,
                "model": "V-Line",
                "amount": "15000",
                "description": "V-Line",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:33:29.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ad0",
                "vehicle_model_id": 995,
                "vehicle_make_id": 85,
                "model": "X-Line",
                "amount": "15000",
                "description": "X-Line",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:33:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ad1",
                "vehicle_model_id": 996,
                "vehicle_make_id": 85,
                "model": "S-Line",
                "amount": "15000",
                "description": "S-Line",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:34:05.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ad2",
                "vehicle_model_id": 997,
                "vehicle_make_id": 85,
                "model": "U-Line",
                "amount": "15000",
                "description": "U-Line",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:34:56.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ad3",
                "vehicle_model_id": 998,
                "vehicle_make_id": 85,
                "model": "T-Line",
                "amount": "15000",
                "description": "T-Line",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:36:20.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ad4",
                "vehicle_model_id": 999,
                "vehicle_make_id": 85,
                "model": "USF-1E",
                "amount": "15000",
                "description": "USF-1E",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:37:47.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ad5",
                "vehicle_model_id": 1000,
                "vehicle_make_id": 85,
                "model": "High COE",
                "amount": "15000",
                "description": "High COE",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:38:45.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ad6",
                "vehicle_model_id": 1001,
                "vehicle_make_id": 85,
                "model": "Long Conv.",
                "amount": "15000",
                "description": "Long Conv.",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:39:08.000Z"
            },
            {
                "_id": "65a918eb42dc804a210c4ad7",
                "vehicle_model_id": 1002,
                "vehicle_make_id": 85,
                "model": "Med. Conv.",
                "amount": "15000",
                "description": "Med. Conv.",
                "created_by": "20200720074306",
                "created_dt": "2023-09-13T07:39:30.000Z"
            }
        ]
    

        function createobj(){
            let obj = {};
            let colors_ = [];
            let vehicle_make_ = [];
            let vehicle_model_ = [];

            
            // let sql = "INSERT INTO mytable(make, model) VALUES";
            // vehicle_make.forEach((stt, i) =>{

            //     vehicle_models.forEach((lgvt, i)=>{
            //         if(stt['vehicle_make_id'] === lgvt['vehicle_make_id']){
            //             sql += "('" + stt['make'] + "','" + lgvt['model'] +   "'),";

            //         }
            //     })

            // })
            // let sql = "INSERT INTO mytable(make_name) VALUES"

            vehicle_make.forEach((v, i)=>{
                vehicle_make_.push(v["make"]);
                // sql += "('" + v['make']  + "'),";
            })
            // colors.forEach((v, i)=>{
            //     colors_.push(v["color"]);
            // })

            // let sql = "INSERT INTO mytable(state, local_name) VALUES"
            // state.forEach((stt, i) =>{

            //     lg.forEach((lgvt, i)=>{
            //         if(stt['state_id'] === lgvt['state_id']){
            //             sql += "('" + stt['state'] + "','" + lgvt['local_name'] +   "'),";

            //         }
            //     })

            // })
            // state.forEach((stt, i)=>{
            //     let obj2 = {};
            //     lg.forEach((lgvt, i)=>{
            //         if(stt['state_id'] === lgvt['state_id']){
            //             obj2[lgvt['local_name']] = lgvt['lga_id']
            //         }

            //     })
            //     obj2["state_id"] = stt['state_id'] ;
            //     obj2["state_code"] = stt['state_code'] ;
            //     obj[stt['state']] = obj2
            //     // console.log(i);
            // });
            // console.log(vehicle_make_);
            document.getElementById("show").innerHTML = JSON.stringify(vehicle_make_)
        }
        createobj();
    </script>
</html>