<?php

use Illuminate\Database\Seeder;
use App\CountryList;

class CountryListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sfx=0;SAVEIFS=$IFS; IFS=$'\n';for i in $(cat countrylist.txt); do ST2=$(echo $i | sed 's/.*"\(.*\)".*/\1/'); CNTR=$(echo $i | sed 's/.*">\(.*\)<.*/\1/'); echo "\$cntr$sfx = new CountryList();"; echo "\$cntr$sfx->name = \"$CNTR\";"; echo "\$cntr$sfx->code2 = \"$ST2\";"; echo "\$cntr$sfx->save();";echo;sfx=$(($sfx + 1)); done; IFS=$SAVEIFS
        $cntr0 = new CountryList();
        $cntr0->name = "AFGHANISTAN";
        $cntr0->code2 = "AF";
        $cntr0->save();

        $cntr1 = new CountryList();
        $cntr1->name = "ALBANIA";
        $cntr1->code2 = "AL";
        $cntr1->save();

        $cntr2 = new CountryList();
        $cntr2->name = "ALGERIA";
        $cntr2->code2 = "DZ";
        $cntr2->save();

        $cntr3 = new CountryList();
        $cntr3->name = "AMERICAN SAMOA";
        $cntr3->code2 = "AS";
        $cntr3->save();

        $cntr4 = new CountryList();
        $cntr4->name = "ANDORRA";
        $cntr4->code2 = "AD";
        $cntr4->save();

        $cntr5 = new CountryList();
        $cntr5->name = "ANGOLA";
        $cntr5->code2 = "AO";
        $cntr5->save();

        $cntr6 = new CountryList();
        $cntr6->name = "ANGUILLA";
        $cntr6->code2 = "AA";
        $cntr6->save();

        $cntr7 = new CountryList();
        $cntr7->name = "ANTIGUA";
        $cntr7->code2 = "AG";
        $cntr7->save();

        $cntr8 = new CountryList();
        $cntr8->name = "ARGENTINA";
        $cntr8->code2 = "AR";
        $cntr8->save();

        $cntr9 = new CountryList();
        $cntr9->name = "ARMENIA";
        $cntr9->code2 = "AM";
        $cntr9->save();

        $cntr10 = new CountryList();
        $cntr10->name = "ARUBA";
        $cntr10->code2 = "AB";
        $cntr10->save();

        $cntr11 = new CountryList();
        $cntr11->name = "AUSTRALIA";
        $cntr11->code2 = "AU";
        $cntr11->save();

        $cntr12 = new CountryList();
        $cntr12->name = "AUSTRIA";
        $cntr12->code2 = "AT";
        $cntr12->save();

        $cntr13 = new CountryList();
        $cntr13->name = "AZERBAIJAN";
        $cntr13->code2 = "AZ";
        $cntr13->save();

        $cntr14 = new CountryList();
        $cntr14->name = "BAHAMAS";
        $cntr14->code2 = "BS";
        $cntr14->save();

        $cntr15 = new CountryList();
        $cntr15->name = "BAHRAIN";
        $cntr15->code2 = "BH";
        $cntr15->save();

        $cntr16 = new CountryList();
        $cntr16->name = "BANGLADESH";
        $cntr16->code2 = "BD";
        $cntr16->save();

        $cntr17 = new CountryList();
        $cntr17->name = "BARBADOS";
        $cntr17->code2 = "BB";
        $cntr17->save();

        $cntr18 = new CountryList();
        $cntr18->name = "BELARUS";
        $cntr18->code2 = "BL";
        $cntr18->save();

        $cntr19 = new CountryList();
        $cntr19->name = "BELGIUM";
        $cntr19->code2 = "BE";
        $cntr19->save();

        $cntr20 = new CountryList();
        $cntr20->name = "BELIZE";
        $cntr20->code2 = "BZ";
        $cntr20->save();

        $cntr21 = new CountryList();
        $cntr21->name = "BENIN";
        $cntr21->code2 = "BJ";
        $cntr21->save();

        $cntr22 = new CountryList();
        $cntr22->name = "BERMUDA";
        $cntr22->code2 = "BM";
        $cntr22->save();

        $cntr23 = new CountryList();
        $cntr23->name = "BHUTAN";
        $cntr23->code2 = "BT";
        $cntr23->save();

        $cntr24 = new CountryList();
        $cntr24->name = "BOLIVIA";
        $cntr24->code2 = "BO";
        $cntr24->save();

        $cntr25 = new CountryList();
        $cntr25->name = "BOSNIA-HERZEGOVINA";
        $cntr25->code2 = "BA";
        $cntr25->save();

        $cntr26 = new CountryList();
        $cntr26->name = "BOTSWANA";
        $cntr26->code2 = "BW";
        $cntr26->save();

        $cntr27 = new CountryList();
        $cntr27->name = "BRAZIL";
        $cntr27->code2 = "BR";
        $cntr27->save();

        $cntr28 = new CountryList();
        $cntr28->name = "BRITISH ANTARCTIC TERRITORY";
        $cntr28->code2 = "BQ";
        $cntr28->save();

        $cntr29 = new CountryList();
        $cntr29->name = "BRITISH INDIAN OCEAN TERRITORY";
        $cntr29->code2 = "IO";
        $cntr29->save();

        $cntr30 = new CountryList();
        $cntr30->name = "BRITISH VIRGIN ISLANDS";
        $cntr30->code2 = "VG";
        $cntr30->save();

        $cntr31 = new CountryList();
        $cntr31->name = "BRUNEI";
        $cntr31->code2 = "BN";
        $cntr31->save();

        $cntr32 = new CountryList();
        $cntr32->name = "BULGARIA";
        $cntr32->code2 = "BG";
        $cntr32->save();

        $cntr33 = new CountryList();
        $cntr33->name = "BURKINA FASO";
        $cntr33->code2 = "BF";
        $cntr33->save();

        $cntr34 = new CountryList();
        $cntr34->name = "BURUNDI";
        $cntr34->code2 = "BI";
        $cntr34->save();

        $cntr35 = new CountryList();
        $cntr35->name = "CAMBODIA";
        $cntr35->code2 = "KA";
        $cntr35->save();

        $cntr36 = new CountryList();
        $cntr36->name = "CAMEROON";
        $cntr36->code2 = "CM";
        $cntr36->save();

        $cntr37 = new CountryList();
        $cntr37->name = "CANADA";
        $cntr37->code2 = "CA";
        $cntr37->save();

        $cntr38 = new CountryList();
        $cntr38->name = "CANTON & ENDERBURY ISLANDS";
        $cntr38->code2 = "CT";
        $cntr38->save();

        $cntr39 = new CountryList();
        $cntr39->name = "CAPE VERDE";
        $cntr39->code2 = "CV";
        $cntr39->save();

        $cntr40 = new CountryList();
        $cntr40->name = "CAYMAN ISLANDS";
        $cntr40->code2 = "KY";
        $cntr40->save();

        $cntr41 = new CountryList();
        $cntr41->name = "CENTRAL AFRICAN REPUBLIC";
        $cntr41->code2 = "CF";
        $cntr41->save();

        $cntr42 = new CountryList();
        $cntr42->name = "CHAD";
        $cntr42->code2 = "TD";
        $cntr42->save();

        $cntr43 = new CountryList();
        $cntr43->name = "CHANNEL ISLANDS";
        $cntr43->code2 = "CD";
        $cntr43->save();

        $cntr44 = new CountryList();
        $cntr44->name = "CHILE";
        $cntr44->code2 = "CL";
        $cntr44->save();

        $cntr45 = new CountryList();
        $cntr45->name = "CHINA";
        $cntr45->code2 = "CN";
        $cntr45->save();

        $cntr46 = new CountryList();
        $cntr46->name = "CHRISTMAS ISLAND";
        $cntr46->code2 = "CX";
        $cntr46->save();

        $cntr47 = new CountryList();
        $cntr47->name = "COCOS KEELING ISLAND";
        $cntr47->code2 = "CC";
        $cntr47->save();

        $cntr48 = new CountryList();
        $cntr48->name = "COLOMBIA";
        $cntr48->code2 = "CO";
        $cntr48->save();

        $cntr49 = new CountryList();
        $cntr49->name = "COMOROS";
        $cntr49->code2 = "KM";
        $cntr49->save();

        $cntr50 = new CountryList();
        $cntr50->name = "CONGO";
        $cntr50->code2 = "CG";
        $cntr50->save();

        $cntr51 = new CountryList();
        $cntr51->name = "COOK ISLANDS";
        $cntr51->code2 = "CK";
        $cntr51->save();

        $cntr52 = new CountryList();
        $cntr52->name = "COSTA RICA";
        $cntr52->code2 = "CR";
        $cntr52->save();

        $cntr53 = new CountryList();
        $cntr53->name = "CROATIA";
        $cntr53->code2 = "CB";
        $cntr53->save();

        $cntr54 = new CountryList();
        $cntr54->name = "CUBA";
        $cntr54->code2 = "CU";
        $cntr54->save();

        $cntr55 = new CountryList();
        $cntr55->name = "CYPRUS";
        $cntr55->code2 = "CY";
        $cntr55->save();

        $cntr56 = new CountryList();
        $cntr56->name = "CZECH REPUBLIC";
        $cntr56->code2 = "CZ";
        $cntr56->save();

        $cntr57 = new CountryList();
        $cntr57->name = "D.P.R. KOREA";
        $cntr57->code2 = "KP";
        $cntr57->save();

        $cntr58 = new CountryList();
        $cntr58->name = "DENMARK";
        $cntr58->code2 = "DK";
        $cntr58->save();

        $cntr59 = new CountryList();
        $cntr59->name = "DJIBOUTI";
        $cntr59->code2 = "DJ";
        $cntr59->save();

        $cntr60 = new CountryList();
        $cntr60->name = "DOMINICA";
        $cntr60->code2 = "DM";
        $cntr60->save();

        $cntr61 = new CountryList();
        $cntr61->name = "DOMINICAN REPUBLIC";
        $cntr61->code2 = "DO";
        $cntr61->save();

        $cntr62 = new CountryList();
        $cntr62->name = "EAST TIMOR";
        $cntr62->code2 = "TP";
        $cntr62->save();

        $cntr63 = new CountryList();
        $cntr63->name = "ECUADOR";
        $cntr63->code2 = "EC";
        $cntr63->save();

        $cntr64 = new CountryList();
        $cntr64->name = "EGYPT";
        $cntr64->code2 = "EG";
        $cntr64->save();

        $cntr65 = new CountryList();
        $cntr65->name = "EL SALVADOR";
        $cntr65->code2 = "SV";
        $cntr65->save();

        $cntr66 = new CountryList();
        $cntr66->name = "EQUATORIAL GUINEA";
        $cntr66->code2 = "GQ";
        $cntr66->save();

        $cntr67 = new CountryList();
        $cntr67->name = "ERITREA";
        $cntr67->code2 = "ER";
        $cntr67->save();

        $cntr68 = new CountryList();
        $cntr68->name = "ESTONIA";
        $cntr68->code2 = "EN";
        $cntr68->save();

        $cntr69 = new CountryList();
        $cntr69->name = "ETHIOPIA";
        $cntr69->code2 = "ET";
        $cntr69->save();

        $cntr70 = new CountryList();
        $cntr70->name = "FAEROE ISLANDS";
        $cntr70->code2 = "FO";
        $cntr70->save();

        $cntr71 = new CountryList();
        $cntr71->name = "FALKLAND ISLANDS";
        $cntr71->code2 = "FK";
        $cntr71->save();

        $cntr72 = new CountryList();
        $cntr72->name = "FIJI";
        $cntr72->code2 = "FJ";
        $cntr72->save();

        $cntr73 = new CountryList();
        $cntr73->name = "FINLAND";
        $cntr73->code2 = "FI";
        $cntr73->save();

        $cntr74 = new CountryList();
        $cntr74->name = "FRANCE";
        $cntr74->code2 = "FR";
        $cntr74->save();

        $cntr75 = new CountryList();
        $cntr75->name = "FRENCH GUIANA";
        $cntr75->code2 = "GF";
        $cntr75->save();

        $cntr76 = new CountryList();
        $cntr76->name = "FRENCH POLYNESIA";
        $cntr76->code2 = "PF";
        $cntr76->save();

        $cntr77 = new CountryList();
        $cntr77->name = "FRENCH SOUTHERN & ANTARCTIC TERRITORIES";
        $cntr77->code2 = "FQ";
        $cntr77->save();

        $cntr78 = new CountryList();
        $cntr78->name = "GABON";
        $cntr78->code2 = "GA";
        $cntr78->save();

        $cntr79 = new CountryList();
        $cntr79->name = "GAMBIA";
        $cntr79->code2 = "GM";
        $cntr79->save();

        $cntr80 = new CountryList();
        $cntr80->name = "GAZA";
        $cntr80->code2 = "GZ";
        $cntr80->save();

        $cntr81 = new CountryList();
        $cntr81->name = "GEORGIA";
        $cntr81->code2 = "GO";
        $cntr81->save();

        $cntr82 = new CountryList();
        $cntr82->name = "GERMANY";
        $cntr82->code2 = "DG";
        $cntr82->save();

        $cntr83 = new CountryList();
        $cntr83->name = "GHANA";
        $cntr83->code2 = "GH";
        $cntr83->save();

        $cntr84 = new CountryList();
        $cntr84->name = "GIBRALTAR";
        $cntr84->code2 = "GI";
        $cntr84->save();

        $cntr85 = new CountryList();
        $cntr85->name = "GREECE";
        $cntr85->code2 = "GR";
        $cntr85->save();

        $cntr86 = new CountryList();
        $cntr86->name = "GREENLAND";
        $cntr86->code2 = "GL";
        $cntr86->save();

        $cntr87 = new CountryList();
        $cntr87->name = "GRENADA";
        $cntr87->code2 = "GD";
        $cntr87->save();

        $cntr88 = new CountryList();
        $cntr88->name = "GUADELOUPE";
        $cntr88->code2 = "GP";
        $cntr88->save();

        $cntr89 = new CountryList();
        $cntr89->name = "GUAM";
        $cntr89->code2 = "GU";
        $cntr89->save();

        $cntr90 = new CountryList();
        $cntr90->name = "GUATEMALA";
        $cntr90->code2 = "GT";
        $cntr90->save();

        $cntr91 = new CountryList();
        $cntr91->name = "GUERNSEY";
        $cntr91->code2 = "GK";
        $cntr91->save();

        $cntr92 = new CountryList();
        $cntr92->name = "GUINEA";
        $cntr92->code2 = "GN";
        $cntr92->save();

        $cntr93 = new CountryList();
        $cntr93->name = "GUINEA-BISSAU";
        $cntr93->code2 = "GW";
        $cntr93->save();

        $cntr94 = new CountryList();
        $cntr94->name = "GUYANA";
        $cntr94->code2 = "GY";
        $cntr94->save();

        $cntr95 = new CountryList();
        $cntr95->name = "HAITI";
        $cntr95->code2 = "HT";
        $cntr95->save();

        $cntr96 = new CountryList();
        $cntr96->name = "HEARD & MCDONALD ISLAND";
        $cntr96->code2 = "HM";
        $cntr96->save();

        $cntr97 = new CountryList();
        $cntr97->name = "HONDURAS";
        $cntr97->code2 = "HN";
        $cntr97->save();

        $cntr98 = new CountryList();
        $cntr98->name = "HONG KONG";
        $cntr98->code2 = "HK";
        $cntr98->save();

        $cntr99 = new CountryList();
        $cntr99->name = "HONG KONG SAR";
        $cntr99->code2 = "HS";
        $cntr99->save();

        $cntr100 = new CountryList();
        $cntr100->name = "HUNGARY";
        $cntr100->code2 = "HU";
        $cntr100->save();

        $cntr101 = new CountryList();
        $cntr101->name = "ICELAND";
        $cntr101->code2 = "IS";
        $cntr101->save();

        $cntr102 = new CountryList();
        $cntr102->name = "INDIA";
        $cntr102->code2 = "IN";
        $cntr102->save();

        $cntr103 = new CountryList();
        $cntr103->name = "INDONESIA";
        $cntr103->code2 = "ID";
        $cntr103->save();

        $cntr104 = new CountryList();
        $cntr104->name = "IRAN";
        $cntr104->code2 = "IR";
        $cntr104->save();

        $cntr105 = new CountryList();
        $cntr105->name = "IRAQ";
        $cntr105->code2 = "IQ";
        $cntr105->save();

        $cntr106 = new CountryList();
        $cntr106->name = "IRELAND";
        $cntr106->code2 = "IE";
        $cntr106->save();

        $cntr107 = new CountryList();
        $cntr107->name = "ISLE OF MAN";
        $cntr107->code2 = "MM";
        $cntr107->save();

        $cntr108 = new CountryList();
        $cntr108->name = "ISRAEL";
        $cntr108->code2 = "IL";
        $cntr108->save();

        $cntr109 = new CountryList();
        $cntr109->name = "ITALY";
        $cntr109->code2 = "IT";
        $cntr109->save();

        $cntr110 = new CountryList();
        $cntr110->name = "IVORY COAST";
        $cntr110->code2 = "CI";
        $cntr110->save();

        $cntr111 = new CountryList();
        $cntr111->name = "JAMAICA";
        $cntr111->code2 = "JM";
        $cntr111->save();

        $cntr112 = new CountryList();
        $cntr112->name = "JAPAN";
        $cntr112->code2 = "JP";
        $cntr112->save();

        $cntr113 = new CountryList();
        $cntr113->name = "JOHNSTON ISLAND";
        $cntr113->code2 = "JT";
        $cntr113->save();

        $cntr114 = new CountryList();
        $cntr114->name = "JORDAN";
        $cntr114->code2 = "JO";
        $cntr114->save();

        $cntr115 = new CountryList();
        $cntr115->name = "KAZAKHSTAN";
        $cntr115->code2 = "KZ";
        $cntr115->save();

        $cntr116 = new CountryList();
        $cntr116->name = "KENYA";
        $cntr116->code2 = "KE";
        $cntr116->save();

        $cntr117 = new CountryList();
        $cntr117->name = "KIRGHIZIA";
        $cntr117->code2 = "KG";
        $cntr117->save();

        $cntr118 = new CountryList();
        $cntr118->name = "KIRIBATI";
        $cntr118->code2 = "KI";
        $cntr118->save();

        $cntr119 = new CountryList();
        $cntr119->name = "KOREA, SOUTH";
        $cntr119->code2 = "KR";
        $cntr119->save();

        $cntr120 = new CountryList();
        $cntr120->name = "KOSOVO";
        $cntr120->code2 = "KV";
        $cntr120->save();

        $cntr121 = new CountryList();
        $cntr121->name = "KUWAIT";
        $cntr121->code2 = "KW";
        $cntr121->save();

        $cntr122 = new CountryList();
        $cntr122->name = "KYRGYZSTAN";
        $cntr122->code2 = "KS";
        $cntr122->save();

        $cntr123 = new CountryList();
        $cntr123->name = "LAOS";
        $cntr123->code2 = "LA";
        $cntr123->save();

        $cntr124 = new CountryList();
        $cntr124->name = "LATVIA";
        $cntr124->code2 = "LV";
        $cntr124->save();

        $cntr125 = new CountryList();
        $cntr125->name = "LEBANON";
        $cntr125->code2 = "LB";
        $cntr125->save();

        $cntr126 = new CountryList();
        $cntr126->name = "LESOTHO";
        $cntr126->code2 = "LS";
        $cntr126->save();

        $cntr127 = new CountryList();
        $cntr127->name = "LIBERIA";
        $cntr127->code2 = "LR";
        $cntr127->save();

        $cntr128 = new CountryList();
        $cntr128->name = "LIBYA";
        $cntr128->code2 = "LY";
        $cntr128->save();

        $cntr129 = new CountryList();
        $cntr129->name = "LIECHTENSTEIN";
        $cntr129->code2 = "LI";
        $cntr129->save();

        $cntr130 = new CountryList();
        $cntr130->name = "LITHUANIA";
        $cntr130->code2 = "LH";
        $cntr130->save();

        $cntr131 = new CountryList();
        $cntr131->name = "LUXEMBOURG";
        $cntr131->code2 = "LU";
        $cntr131->save();

        $cntr132 = new CountryList();
        $cntr132->name = "MACAO";
        $cntr132->code2 = "MO";
        $cntr132->save();

        $cntr133 = new CountryList();
        $cntr133->name = "MACAU SAR";
        $cntr133->code2 = "MF";
        $cntr133->save();

        $cntr134 = new CountryList();
        $cntr134->name = "MACEDONIA";
        $cntr134->code2 = "MB";
        $cntr134->save();

        $cntr135 = new CountryList();
        $cntr135->name = "MADAGASCAR";
        $cntr135->code2 = "MG";
        $cntr135->save();

        $cntr136 = new CountryList();
        $cntr136->name = "MALAWI";
        $cntr136->code2 = "MW";
        $cntr136->save();

        $cntr137 = new CountryList();
        $cntr137->name = "MALAYSIA";
        $cntr137->code2 = "MY";
        $cntr137->save();

        $cntr138 = new CountryList();
        $cntr138->name = "MALDIVES";
        $cntr138->code2 = "MV";
        $cntr138->save();

        $cntr139 = new CountryList();
        $cntr139->name = "MALI";
        $cntr139->code2 = "ML";
        $cntr139->save();

        $cntr140 = new CountryList();
        $cntr140->name = "MALTA";
        $cntr140->code2 = "MT";
        $cntr140->save();

        $cntr141 = new CountryList();
        $cntr141->name = "MARSHALL ISLANDS";
        $cntr141->code2 = "MH";
        $cntr141->save();

        $cntr142 = new CountryList();
        $cntr142->name = "MARTINIQUE";
        $cntr142->code2 = "MQ";
        $cntr142->save();

        $cntr143 = new CountryList();
        $cntr143->name = "MAURITANIA";
        $cntr143->code2 = "MR";
        $cntr143->save();

        $cntr144 = new CountryList();
        $cntr144->name = "MAURITIUS";
        $cntr144->code2 = "MU";
        $cntr144->save();

        $cntr145 = new CountryList();
        $cntr145->name = "MAYOTTE";
        $cntr145->code2 = "ME";
        $cntr145->save();

        $cntr146 = new CountryList();
        $cntr146->name = "MEXICO";
        $cntr146->code2 = "MX";
        $cntr146->save();

        $cntr147 = new CountryList();
        $cntr147->name = "MIDWAY ISLANDS";
        $cntr147->code2 = "MI";
        $cntr147->save();

        $cntr148 = new CountryList();
        $cntr148->name = "MOLDOVA";
        $cntr148->code2 = "MD";
        $cntr148->save();

        $cntr149 = new CountryList();
        $cntr149->name = "MONACO";
        $cntr149->code2 = "MC";
        $cntr149->save();

        $cntr150 = new CountryList();
        $cntr150->name = "MONGOLIA";
        $cntr150->code2 = "MN";
        $cntr150->save();

        $cntr151 = new CountryList();
        $cntr151->name = "MONTSERRAT";
        $cntr151->code2 = "MS";
        $cntr151->save();

        $cntr152 = new CountryList();
        $cntr152->name = "MOROCCO";
        $cntr152->code2 = "MA";
        $cntr152->save();

        $cntr153 = new CountryList();
        $cntr153->name = "MOZAMBIQUE";
        $cntr153->code2 = "MZ";
        $cntr153->save();

        $cntr154 = new CountryList();
        $cntr154->name = "MYANMAR";
        $cntr154->code2 = "BU";
        $cntr154->save();

        $cntr155 = new CountryList();
        $cntr155->name = "NAMIBIA";
        $cntr155->code2 = "NA";
        $cntr155->save();

        $cntr156 = new CountryList();
        $cntr156->name = "NAURU";
        $cntr156->code2 = "NR";
        $cntr156->save();

        $cntr157 = new CountryList();
        $cntr157->name = "NEPAL";
        $cntr157->code2 = "NP";
        $cntr157->save();

        $cntr158 = new CountryList();
        $cntr158->name = "NETHERLANDS";
        $cntr158->code2 = "NL";
        $cntr158->save();

        $cntr159 = new CountryList();
        $cntr159->name = "NETHERLANDS ANTILILLES";
        $cntr159->code2 = "AN";
        $cntr159->save();

        $cntr160 = new CountryList();
        $cntr160->name = "NEW CALEDONIA";
        $cntr160->code2 = "NC";
        $cntr160->save();

        $cntr161 = new CountryList();
        $cntr161->name = "NEW ZEALAND";
        $cntr161->code2 = "NZ";
        $cntr161->save();

        $cntr162 = new CountryList();
        $cntr162->name = "NICARAGUA";
        $cntr162->code2 = "NI";
        $cntr162->save();

        $cntr163 = new CountryList();
        $cntr163->name = "NIGER";
        $cntr163->code2 = "NE";
        $cntr163->save();

        $cntr164 = new CountryList();
        $cntr164->name = "NIGERIA";
        $cntr164->code2 = "NG";
        $cntr164->save();

        $cntr165 = new CountryList();
        $cntr165->name = "NIUE ISLAND";
        $cntr165->code2 = "NU";
        $cntr165->save();

        $cntr166 = new CountryList();
        $cntr166->name = "NORFOLK ISLAND";
        $cntr166->code2 = "NF";
        $cntr166->save();

        $cntr167 = new CountryList();
        $cntr167->name = "NORWAY";
        $cntr167->code2 = "NO";
        $cntr167->save();

        $cntr168 = new CountryList();
        $cntr168->name = "OMAN";
        $cntr168->code2 = "OM";
        $cntr168->save();

        $cntr169 = new CountryList();
        $cntr169->name = "PACIFIC ISLAND TRUST TERRITORY";
        $cntr169->code2 = "PC";
        $cntr169->save();

        $cntr170 = new CountryList();
        $cntr170->name = "PAKISTAN";
        $cntr170->code2 = "PK";
        $cntr170->save();

        $cntr171 = new CountryList();
        $cntr171->name = "PALAU";
        $cntr171->code2 = "PW";
        $cntr171->save();

        $cntr172 = new CountryList();
        $cntr172->name = "PALESTINE";
        $cntr172->code2 = "PS";
        $cntr172->save();

        $cntr173 = new CountryList();
        $cntr173->name = "PANAMA";
        $cntr173->code2 = "PA";
        $cntr173->save();

        $cntr174 = new CountryList();
        $cntr174->name = "PANAMA CANAL ZONE";
        $cntr174->code2 = "PZ";
        $cntr174->save();

        $cntr175 = new CountryList();
        $cntr175->name = "PAPUA NEW GUINEA";
        $cntr175->code2 = "PG";
        $cntr175->save();

        $cntr176 = new CountryList();
        $cntr176->name = "PARAGUAY";
        $cntr176->code2 = "PY";
        $cntr176->save();

        $cntr177 = new CountryList();
        $cntr177->name = "PERU";
        $cntr177->code2 = "PE";
        $cntr177->save();

        $cntr178 = new CountryList();
        $cntr178->name = "PHILIPPINES";
        $cntr178->code2 = "PH";
        $cntr178->save();

        $cntr179 = new CountryList();
        $cntr179->name = "PITCAIRN ISLAND";
        $cntr179->code2 = "PN";
        $cntr179->save();

        $cntr180 = new CountryList();
        $cntr180->name = "POLAND";
        $cntr180->code2 = "PL";
        $cntr180->save();

        $cntr181 = new CountryList();
        $cntr181->name = "PORTUGAL";
        $cntr181->code2 = "PT";
        $cntr181->save();

        $cntr182 = new CountryList();
        $cntr182->name = "PUERTO RICO";
        $cntr182->code2 = "PR";
        $cntr182->save();

        $cntr183 = new CountryList();
        $cntr183->name = "QATAR";
        $cntr183->code2 = "QA";
        $cntr183->save();

        $cntr184 = new CountryList();
        $cntr184->name = "REUNION";
        $cntr184->code2 = "RE";
        $cntr184->save();

        $cntr185 = new CountryList();
        $cntr185->name = "ROMANIA";
        $cntr185->code2 = "RO";
        $cntr185->save();

        $cntr186 = new CountryList();
        $cntr186->name = "RUSSIA";
        $cntr186->code2 = "RF";
        $cntr186->save();

        $cntr187 = new CountryList();
        $cntr187->name = "RWANDA";
        $cntr187->code2 = "RW";
        $cntr187->save();

        $cntr188 = new CountryList();
        $cntr188->name = "SAMOA";
        $cntr188->code2 = "WS";
        $cntr188->save();

        $cntr189 = new CountryList();
        $cntr189->name = "SAN MARINO";
        $cntr189->code2 = "SM";
        $cntr189->save();

        $cntr190 = new CountryList();
        $cntr190->name = "SAO TOME & PRINCIPE";
        $cntr190->code2 = "ST";
        $cntr190->save();

        $cntr191 = new CountryList();
        $cntr191->name = "SAUDI ARABIA";
        $cntr191->code2 = "SA";
        $cntr191->save();

        $cntr192 = new CountryList();
        $cntr192->name = "SENEGAL";
        $cntr192->code2 = "SN";
        $cntr192->save();

        $cntr193 = new CountryList();
        $cntr193->name = "SEYCHELLES";
        $cntr193->code2 = "SC";
        $cntr193->save();

        $cntr194 = new CountryList();
        $cntr194->name = "SIERRA LEONE";
        $cntr194->code2 = "SL";
        $cntr194->save();

        $cntr195 = new CountryList();
        $cntr195->name = "SLOVAK REPUBLIC";
        $cntr195->code2 = "SK";
        $cntr195->save();

        $cntr196 = new CountryList();
        $cntr196->name = "SLOVENIA";
        $cntr196->code2 = "SI";
        $cntr196->save();

        $cntr197 = new CountryList();
        $cntr197->name = "SOLOMON ISLANDS";
        $cntr197->code2 = "SB";
        $cntr197->save();

        $cntr198 = new CountryList();
        $cntr198->name = "SOMALIA";
        $cntr198->code2 = "SO";
        $cntr198->save();

        $cntr199 = new CountryList();
        $cntr199->name = "SOUTH AFRICA";
        $cntr199->code2 = "ZA";
        $cntr199->save();

        $cntr200 = new CountryList();
        $cntr200->name = "SPAIN";
        $cntr200->code2 = "ES";
        $cntr200->save();

        $cntr201 = new CountryList();
        $cntr201->name = "SRI LANKA";
        $cntr201->code2 = "LK";
        $cntr201->save();

        $cntr202 = new CountryList();
        $cntr202->name = "ST. HELENA";
        $cntr202->code2 = "SH";
        $cntr202->save();

        $cntr203 = new CountryList();
        $cntr203->name = "ST. KITTS-NEVIS";
        $cntr203->code2 = "KN";
        $cntr203->save();

        $cntr204 = new CountryList();
        $cntr204->name = "ST. LUCIA";
        $cntr204->code2 = "LC";
        $cntr204->save();

        $cntr205 = new CountryList();
        $cntr205->name = "ST. PIERRE & MIQUELON";
        $cntr205->code2 = "PM";
        $cntr205->save();

        $cntr206 = new CountryList();
        $cntr206->name = "ST. VINCENT";
        $cntr206->code2 = "VC";
        $cntr206->save();

        $cntr207 = new CountryList();
        $cntr207->name = "SUDAN";
        $cntr207->code2 = "SD";
        $cntr207->save();

        $cntr208 = new CountryList();
        $cntr208->name = "SURINAME";
        $cntr208->code2 = "SR";
        $cntr208->save();

        $cntr209 = new CountryList();
        $cntr209->name = "SWAZILAND";
        $cntr209->code2 = "SZ";
        $cntr209->save();

        $cntr210 = new CountryList();
        $cntr210->name = "SWEDEN";
        $cntr210->code2 = "SE";
        $cntr210->save();

        $cntr211 = new CountryList();
        $cntr211->name = "SWITZERLAND";
        $cntr211->code2 = "CH";
        $cntr211->save();

        $cntr212 = new CountryList();
        $cntr212->name = "SYRIA";
        $cntr212->code2 = "SY";
        $cntr212->save();

        $cntr213 = new CountryList();
        $cntr213->name = "TADZHIKISTAN";
        $cntr213->code2 = "TJ";
        $cntr213->save();

        $cntr214 = new CountryList();
        $cntr214->name = "TAIWAN";
        $cntr214->code2 = "TW";
        $cntr214->save();

        $cntr215 = new CountryList();
        $cntr215->name = "TAJIKISTAN";
        $cntr215->code2 = "TI";
        $cntr215->save();

        $cntr216 = new CountryList();
        $cntr216->name = "TANZANIA";
        $cntr216->code2 = "TZ";
        $cntr216->save();

        $cntr217 = new CountryList();
        $cntr217->name = "THAILAND";
        $cntr217->code2 = "TH";
        $cntr217->save();

        $cntr218 = new CountryList();
        $cntr218->name = "TOGO";
        $cntr218->code2 = "TG";
        $cntr218->save();

        $cntr219 = new CountryList();
        $cntr219->name = "TOKELAU ISLANDS";
        $cntr219->code2 = "TK";
        $cntr219->save();

        $cntr220 = new CountryList();
        $cntr220->name = "TONGA";
        $cntr220->code2 = "TO";
        $cntr220->save();

        $cntr221 = new CountryList();
        $cntr221->name = "TRINIDAD & TOBAGO";
        $cntr221->code2 = "TT";
        $cntr221->save();

        $cntr222 = new CountryList();
        $cntr222->name = "TUNISIA";
        $cntr222->code2 = "TN";
        $cntr222->save();

        $cntr223 = new CountryList();
        $cntr223->name = "TURKEY";
        $cntr223->code2 = "TR";
        $cntr223->save();

        $cntr224 = new CountryList();
        $cntr224->name = "TURKMENISTAN";
        $cntr224->code2 = "TM";
        $cntr224->save();

        $cntr225 = new CountryList();
        $cntr225->name = "TURKS & CAICOS ISLANDS";
        $cntr225->code2 = "TC";
        $cntr225->save();

        $cntr226 = new CountryList();
        $cntr226->name = "TUVALU";
        $cntr226->code2 = "TV";
        $cntr226->save();

        $cntr227 = new CountryList();
        $cntr227->name = "UGANDA";
        $cntr227->code2 = "UG";
        $cntr227->save();

        $cntr228 = new CountryList();
        $cntr228->name = "UKRAINE";
        $cntr228->code2 = "UR";
        $cntr228->save();

        $cntr229 = new CountryList();
        $cntr229->name = "UNITED ARAB EMIRATES";
        $cntr229->code2 = "AE";
        $cntr229->save();

        $cntr230 = new CountryList();
        $cntr230->name = "UNITED KINGDOM";
        $cntr230->code2 = "GB";
        $cntr230->save();

        $cntr231 = new CountryList();
        $cntr231->name = "UNITED STATES";
        $cntr231->code2 = "US";
        $cntr231->save();

        $cntr232 = new CountryList();
        $cntr232->name = "UNKNOWN";
        $cntr232->code2 = "UN";
        $cntr232->save();

        $cntr233 = new CountryList();
        $cntr233->name = "UPPER VOLTA";
        $cntr233->code2 = "HV";
        $cntr233->save();

        $cntr234 = new CountryList();
        $cntr234->name = "URUGUAY";
        $cntr234->code2 = "UY";
        $cntr234->save();

        $cntr235 = new CountryList();
        $cntr235->name = "US VIRGIN ISLANDS";
        $cntr235->code2 = "VI";
        $cntr235->save();

        $cntr236 = new CountryList();
        $cntr236->name = "UZBEKISTAN";
        $cntr236->code2 = "UZ";
        $cntr236->save();

        $cntr237 = new CountryList();
        $cntr237->name = "VANUATU";
        $cntr237->code2 = "VU";
        $cntr237->save();

        $cntr238 = new CountryList();
        $cntr238->name = "VATICAN CITY STATE";
        $cntr238->code2 = "VA";
        $cntr238->save();

        $cntr239 = new CountryList();
        $cntr239->name = "VENEZUELA";
        $cntr239->code2 = "VE";
        $cntr239->save();

        $cntr240 = new CountryList();
        $cntr240->name = "VIETNAM";
        $cntr240->code2 = "VN";
        $cntr240->save();

        $cntr241 = new CountryList();
        $cntr241->name = "WAKE ISLAND";
        $cntr241->code2 = "WK";
        $cntr241->save();

        $cntr242 = new CountryList();
        $cntr242->name = "WALLIS AND FUTUNA";
        $cntr242->code2 = "WF";
        $cntr242->save();

        $cntr243 = new CountryList();
        $cntr243->name = "WESTERN SAHARA";
        $cntr243->code2 = "EH";
        $cntr243->save();

        $cntr244 = new CountryList();
        $cntr244->name = "YEMEN";
        $cntr244->code2 = "YM";
        $cntr244->save();

        $cntr245 = new CountryList();
        $cntr245->name = "YUGOSLAVIA";
        $cntr245->code2 = "YU";
        $cntr245->save();

        $cntr246 = new CountryList();
        $cntr246->name = "ZAIRE";
        $cntr246->code2 = "ZR";
        $cntr246->save();

        $cntr247 = new CountryList();
        $cntr247->name = "ZAMBIA";
        $cntr247->code2 = "ZM";
        $cntr247->save();

        $cntr248 = new CountryList();
        $cntr248->name = "ZIMBABWE";
        $cntr248->code2 = "ZW";
        $cntr248->save();

    }
}
