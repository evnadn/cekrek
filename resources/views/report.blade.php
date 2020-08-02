@extends('layout/forlogin')

@section('title','Cekrek - Lapor Penipuan')

@section('report')
<div class="container">
    <article class="card-body mx-auto mt-4" style="max-width: 400px;">
        <form>
            <h5>Pelapor</h5>
            <hr class="my-0 pb-4">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-user"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Nama lengkap anda" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-phone"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="No telepon anda" type="text">
            </div> <!-- form-group// -->
            <h5 class="mt-4">Terlapor</h5>
            <hr class="my-0 pb-4">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-user"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Nama pemilik rekening penipuan" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-university"></i> </span>
                </div>
                <select class="selectpicker form-control" searchable="Cari Bank" data-live-search="true"
                    data-width="fit" name="" required>
                    <option value="" disabled selected>--- Pilih Bank ---</option>
                    <option value="014">
                        Bank BCA</option>
                    <option value="008">
                        Bank MANDIRI</option>
                    <option value="009">
                        Bank BNI</option>
                    <option value="427">
                        Bank BNI Syariah</option>
                    <option value="002">
                        Bank BRI</option>
                    <option value="451">
                        Bank SYARIAH MANDIRI (BSM)</option>
                    <option value="0221">
                        Bank CIMB NIAGA SYARIAH</option>
                    <option value="022">
                        Bank CIMB NIAGA</option>
                    <option value="147">
                        Bank MUAMALAT</option>
                    <option value="422">
                        Bank BRI SYARIAH</option>
                    <option value="200">
                        Bank TABUNGAN NEGARA (BTN)</option>
                    <option value="013">
                        Bank PERMATA</option>
                    <option value="011">
                        Bank DANAMON</option>
                    <option value="016">
                        Bank BII MAYBANK</option>
                    <option value="426">
                        Bank MEGA</option>
                    <option value="153">
                        Bank SINARMAS</option>
                    <option value="950">
                        Bank COMMONWEALTH</option>
                    <option value="028">
                        Bank OCBC NISP</option>
                    <option value="441">
                        Bank BUKOPIN</option>
                    <option value="536">
                        Bank BCA SYARIAH</option>
                    <option value="026">
                        Bank LIPPO</option>
                    <option value="031">
                        CITIBANK</option>
                    <option value="213">
                        Bank BTPN</option>
                    <option value="2131">
                        JENIUS</option>
                    <option value="789">
                        INDOSAT DOMPETKU</option>
                    <option value="911">
                        TELKOMSEL TCASH</option>
                    <option value="110">
                        Bank JABAR</option>
                    <option value="111">
                        Bank DKI JAKARTA</option>
                    <option value="112">
                        BPD DIY (YOGYAKARTA)</option>
                    <option value="113">
                        Bank JATENG (JAWA TENGAH)</option>
                    <option value="114">
                        Bank JATIM (JAWA TIMUR)</option>
                    <option value="115">
                        BPD JAMBI</option>
                    <option value="116">
                        BPD ACEH</option>
                    <option value="117">
                        Bank SUMUT</option>
                    <option value="118">
                        Bank NAGARI</option>
                    <option value="119">
                        Bank RIAU KEPRI</option>
                    <option value="120">
                        Bank SUMSEL BABEL</option>
                    <option value="121">
                        Bank LAMPUNG</option>
                    <option value="122">
                        BPD KALSEL</option>
                    <option value="123">
                        BPD KALIMANTAN BARAT</option>
                    <option value="124">
                        BPD KALTIM</option>
                    <option value="125">
                        BPD KALTENG</option>
                    <option value="126">
                        BPD SULSEL</option>
                    <option value="127">
                        Bank SULUT</option>
                    <option value="128">
                        BPD NTB</option>
                    <option value="129">
                        BPD BALI</option>
                    <option value="130">
                        Bank NTT</option>
                    <option value="131">
                        Bank MALUKU</option>
                    <option value="132">
                        BPD PAPUA</option>
                    <option value="133">
                        Bank BENGKULU</option>
                    <option value="134">
                        Bank SULAWESI TENGAH</option>
                    <option value="135">
                        Bank SULTRA</option>
                    <option value="003">
                        Bank EKSPOR INDONESIA</option>
                    <option value="019">
                        Bank PANIN</option>
                    <option value="020">
                        Bank ARTA NIAGA KENCANA</option>
                    <option value="023">
                        Bank UOB INDONESIA (Bank BUANA INDONESIA)</option>
                    <option value="030">
                        AMERICAN EXPRESS BANK LTD</option>
                    <option value="031">
                        CITIBANK N.A.</option>
                    <option value="032">
                        JP. MORGAN CHASE BANK, N.A.</option>
                    <option value="033">
                        Bank of AMERICA, N.A.</option>
                    <option value="034">
                        ING INDONESIA BANK</option>
                    <option value="036">
                        Bank MULTICOR</option>
                    <option value="037">
                        Bank ARTHA GRAHA INTERNASIONAL</option>
                    <option value="039">
                        Bank CREDIT AGRICOLE INDOSUEZ</option>
                    <option value="040">
                        THE BANGKOK BANK COMP. LTD</option>
                    <option value="041">
                        THE HONGKONG &amp; SHANGHAI B.C. (BANK HSBC)</option>
                    <option value="042">
                        THE BANK OF TOKYO MITSUBISHI UFJ LTD</option>
                    <option value="045">
                        BANK SUMITOMO MITSUI INDONESIA</option>
                    <option value="046">
                        BANK DBS INDONESIA</option>
                    <option value="047">
                        BANK RESONA PERDANIA</option>
                    <option value="048">
                        BANK MIZUHO INDONESIA</option>
                    <option value="050">
                        STANDARD CHARTERED BANK</option>
                    <option value="052">
                        BANK ABN AMRO</option>
                    <option value="053">
                        BANK KEPPEL TATLEE BUANA</option>
                    <option value="054">
                        BANK CAPITAL INDONESIA</option>
                    <option value="057">
                        BANK BNP PARIBAS INDONESIA</option>
                    <option value="023">
                        BANK UOB INDONESIA</option>
                    <option value="059">
                        KOREA EXCHANGE BANK DANAMON</option>
                    <option value="060">
                        RABOBANK INTERNASIONAL INDONESIA</option>
                    <option value="061">
                        Bank ANZ INDONESIA</option>
                    <option value="067">
                        DEUTSCHE BANK AG.</option>
                    <option value="068">
                        BANK WOORI SAUDARA</option>
                    <option value="069">
                        BANK OF CHINA</option>
                    <option value="076">
                        BANK BUMI ARTA</option>
                    <option value="087">
                        BANK EKONOMI</option>
                    <option value="088">
                        BANK ANTARDAERAH</option>
                    <option value="089">
                        BANK HAGA</option>
                    <option value="093">
                        BANK IFI</option>
                    <option value="095">
                        BANK CENTURY</option>
                    <option value="097">
                        BANK MAYAPADA</option>
                    <option value="000">
                        Other</option>
                    <option value="547">
                        Bank BTPN Syariah</option>
                    <option value="521">
                        Bank BUKOPIN SYARIAH</option>
                    <option value="911">
                        LINKAJA</option>
                    <option value="1161">
                        BPD ACEH SYARIAH</option>
                    <option value="1281">
                        Bank NTB SYARIAH</option>
                    <option value="137">
                        Bank BPD BANTEN</option>
                    <option value="517">
                        Bank PANIN DUBAI SYARIAH</option>
                    <option value="0461">
                        DIGIBANK</option>
                    <option value="145">
                        Bank NUSANTARA PARAHYANGAN</option>
                    <option value="146">
                        Bank SWADESI (BANK OF INDIA INDONESIA)</option>
                    <option value="151">
                        BANK MESTIKA DHARMA</option>
                    <option value="152">
                        BANK SHINHAN INDONESIA (BANK METRO EXPRESS)</option>
                    <option value="157">
                        BANK MASPION INDONESIA</option>
                    <option value="159">
                        BANK HAGAKITA</option>
                    <option value="161">
                        BANK GANESHA</option>
                    <option value="162">
                        BANK WINDU KENTJANA</option>
                    <option value="164">
                        BANK ICBC INDONESIA (HALIM INDONESIA BANK)</option>
                    <option value="166">
                        BANK HARMONI INTERNATIONAL</option>
                    <option value="167">
                        BANK QNB KESAWAN (BANK QNB INDONESIA)</option>
                    <option value="212">
                        BANK HIMPUNAN SAUDARA 1906</option>
                    <option value="405">
                        BANK SWAGUNA</option>
                    <option value="459">
                        BANK BISNIS INTERNASIONAL</option>
                    <option value="466">
                        BANK SRI PARTHA</option>
                    <option value="472">
                        BANK JASA JAKARTA</option>
                    <option value="484">
                        BANK BINTANG MANUNGGAL</option>
                    <option value="485">
                        BANK MNC INTERNASIONAL (BANK BUMIPUTERA)</option>
                    <option value="490">
                        BANK YUDHA BHAKTI</option>
                    <option value="491">
                        BANK MITRANIAGA</option>
                    <option value="494">
                        BANK BRI AGRO NIAGA</option>
                    <option value="498">
                        BANK SBI INDONESIA (BANK INDOMONEX)</option>
                    <option value="501">
                        BANK ROYAL INDONESIA</option>
                    <option value="503">
                        BANK NATIONAL NOBU (BANK ALFINDO)</option>
                    <option value="506">
                        BANK MEGA SYARIAH</option>
                    <option value="513">
                        BANK INA PERDANA</option>
                    <option value="517">
                        BANK HARFA</option>
                    <option value="520">
                        PRIMA MASTER BANK</option>
                    <option value="521">
                        BANK PERSYARIKATAN INDONESIA</option>
                    <option value="525">
                        BANK AKITA</option>
                    <option value="526">
                        LIMAN INTERNATIONAL BANK</option>
                    <option value="531">
                        ANGLOMAS INTERNASIONAL BANK</option>
                    <option value="523">
                        BANK SAHABAT SAMPEORNA (BANK DIPO INTERNATIONAL)</option>
                    <option value="535">
                        BANK KESEJAHTERAAN EKONOMI</option>
                    <option value="542">
                        BANK ARTOS INDONESIA</option>
                    <option value="547">
                        BANK PURBA DANARTA</option>
                    <option value="548">
                        BANK MULTI ARTA SENTOSA</option>
                    <option value="553">
                        BANK MAYORA INDONESIA</option>
                    <option value="555">
                        BANK INDEX SELINDO</option>
                    <option value="566">
                        BANK VICTORIA INTERNATIONAL</option>
                    <option value="558">
                        BANK EKSEKUTIF</option>
                    <option value="559">
                        CENTRATAMA NASIONAL BANK</option>
                    <option value="562">
                        BANK FAMA INTERNASIONAL</option>
                    <option value="564">
                        BANK MANDIRI TASPEN POS (BANK SINAR HARAPAN BALI)</option>
                    <option value="567">
                        BANK HARDA</option>
                    <option value="945">
                        BANK AGRIS (BANK FINCONESIA)</option>
                    <option value="946">
                        BANK MERINCORP</option>
                    <option value="947">
                        BANK MAYBANK INDOCORP</option>
                    <option value="948">
                        BANK OCBC INDONESIA</option>
                    <option value="949">
                        BANK CTBC (CHINA TRUST) INDONESIA</option>
                    <option value="425">
                        BANK BJB SYARIAH</option>
                    <option value="688">
                        BPR KS (KARYAJATNIKA SEDAYA)</option>
                </select>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-user-edit"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="No rekening penipuan" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-phone"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="No telepon penipuan" type="text">
            </div> <!-- form-group// -->
            <h5 class="mt-4">Kejadian yang dilaporkan</h5>
            <hr class="my-0 pb-4">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-icons"></i> </span>
                </div>
                <select class="form-control">
                    <option value="" disabled selected>-- Pilih Platform --</option>
                    <option value="1">
                        Telepon</option>
                    <option value="2">
                        Line</option>
                    <option value="3">
                        Instagram</option>
                    <option value="4">
                        WhatsApp</option>
                    <option value="5">
                        Facebook</option>
                    <option value="6">
                        BBM</option>
                    <option value="7">
                        Twitter</option>
                    <option value="8">
                        Situs</option>
                    <option value="9">
                        Lainnya</option>
                </select>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-box-open"></i> </span>
                </div>
                <select class="form-control">
                    <option value="" disabled selected>-- Pilih Produk --</option>
                    <option value="1">
                        Mainan dan Hobi</option>
                        <option value="2">
                        Barang Elektronik</option>
                        <option value="3">
                        Kendaraan</option>
                        <option value="4">
                        Makanan atau Minuman</option>
                        <option value="5">
                        Investasi</option>
                        <option value="7">
                        Produk Digital</option>
                         <option value="8">
                        Pulsa atau Paket Internet</option>
                        <option value="9">
                        Fashion dan Kecantikan</option>
                        <option value="10">
                        Tiket Event atau Wisata</option>
                        <option value="11">
                        Penipuan Berhadiah</option>
                        <option value="12">
                        Perlengkapan Rumah Tangga</option>
                        <option value="13">
                        Obat-Obatan</option>
                        <option value="14">
                        Jam dan Arloji</option>
                        <option value="15">
                        Perlengkapan Bayi dan Anak</option>
                        <option value="16">
                        Olahraga dan Outdoor</option>
                        <option value="17">
                            Lainnya</option>
                </select>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-pen"></i> </span>
                </div>
                <textarea name="" class="form-control" placeholder="Ceritakan kronologi penipuan" type="text"
                    rows="5"></textarea>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-fw fa-money-bill"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Total kerugian yang anda alami" type="text">
            </div> <!-- form-group// -->
            <h5 class="mt-4">Bukti penipuan</h5>
            <hr class="my-0 pb-4">
            <div class="form-group file-upload-wrapper">
                <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="5M" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Laporkan</button>
            </div> <!-- form-group// -->
        </form>
    </article>
</div>
<!--container end.//-->
@endsection
