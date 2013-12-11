function kirim_form(){
    $('#pesan_kirim').html('Loading ...');
    $('#pesan_kirim').slideDown('slow');
     
    var F302  = $('#F302').val();
	var F303  = $('#F303').val();
	var F304  = $('input[name=F304]:checked').val();
	var F401 = $('input[name=F401]:checked').map(function(){return $(this).val();}).get();
	var F402 = $('input[name=F402]:checked').map(function(){return $(this).val();}).get();
	var F403 = $('input[name=F403]:checked').map(function(){return $(this).val();}).get();
	var F404 = $('input[name=F404]:checked').map(function(){return $(this).val();}).get();
	var F405 = $('input[name=F405]:checked').map(function(){return $(this).val();}).get();
	var F406 = $('input[name=F406]:checked').map(function(){return $(this).val();}).get();
	var F407 = $('input[name=F407]:checked').map(function(){return $(this).val();}).get();
	var F408 = $('input[name=F408]:checked').map(function(){return $(this).val();}).get();
	var F409 = $('input[name=F409]:checked').map(function(){return $(this).val();}).get();
	var F410 = $('input[name=F410]:checked').map(function(){return $(this).val();}).get();
	var F411 = $('input[name=F411]:checked').map(function(){return $(this).val();}).get();
	var F412 = $('input[name=F412]:checked').map(function(){return $(this).val();}).get();
	var F413 = $('input[name=F413]:checked').map(function(){return $(this).val();}).get();
	var F414 = $('input[name=F414]:checked').map(function(){return $(this).val();}).get();
	var F415 = $('input[name=F415]:checked').map(function(){return $(this).val();}).get();
	var F416 = $('#F416').val();
	var F502  = $('#F502').val();
	var F503  = $('#F503').val();
	var F6  = $('#F6').val();
	var F7  = $('#F7').val();
	var F8  = $('input[name=F8]:checked').val();
	var F901 = $('input[name=F901]:checked').map(function(){return $(this).val();}).get();
	var F902 = $('input[name=F902]:checked').map(function(){return $(this).val();}).get();
	var F903 = $('input[name=F903]:checked').map(function(){return $(this).val();}).get();
	var F904 = $('input[name=F904]:checked').map(function(){return $(this).val();}).get();
	var F905 = $('input[name=F905]:checked').map(function(){return $(this).val();}).get();
	var F906 = $('#F906').val();
	var F1001  = $('input[name=F1001]:checked').val();
	var F1002 = $('#F1002').val();
	var F1101  = $('input[name=F1101]:checked').val();
	var F1102 = $('#F1102').val();
	var F1301 = $('#F1301').val();
	var F1302 = $('#F1302').val();
	var F1303 = $('#F1303').val();
	var F14  = $('input[name=F14]:checked').val();
	var F15  = $('input[name=F15]:checked').val();
	var F1601 = $('input[name=F1601]:checked').map(function(){return $(this).val();}).get();
	var F1602 = $('input[name=F1602]:checked').map(function(){return $(this).val();}).get();
	var F1603 = $('input[name=F1603]:checked').map(function(){return $(this).val();}).get();
	var F1604 = $('input[name=F1604]:checked').map(function(){return $(this).val();}).get();
	var F1605 = $('input[name=F1605]:checked').map(function(){return $(this).val();}).get();
	var F1606 = $('input[name=F1606]:checked').map(function(){return $(this).val();}).get();
	var F1607 = $('input[name=F1607]:checked').map(function(){return $(this).val();}).get();
	var F1608 = $('input[name=F1608]:checked').map(function(){return $(this).val();}).get();
	var F1609 = $('input[name=F1609]:checked').map(function(){return $(this).val();}).get();
	var F1610 = $('input[name=F1610]:checked').map(function(){return $(this).val();}).get();
	var F1611 = $('input[name=F1611]:checked').map(function(){return $(this).val();}).get();
	var F1612 = $('input[name=F1612]:checked').map(function(){return $(this).val();}).get();
	var F1613 = $('input[name=F1613]:checked').map(function(){return $(this).val();}).get();
	var F1614 = $('#F1614').val();	
	var F1701  = $('input[name=F1701]:checked').val();
	var F1702  = $('input[name=F1702]:checked').val();
	var F1703  = $('input[name=F1703]:checked').val();
	var F1704  = $('input[name=F1704]:checked').val();
	var F1705  = $('input[name=F1705]:checked').val();
	var F1706  = $('input[name=F1706]:checked').val();
	var F1707  = $('input[name=F1707]:checked').val();
	var F1708  = $('input[name=F1708]:checked').val();
	var F1709  = $('input[name=F1709]:checked').val();
	var F1710  = $('input[name=F1710]:checked').val();
	var F1711  = $('input[name=F1711]:checked').val();
	var F1712  = $('input[name=F1712]:checked').val();
	var F1713  = $('input[name=F1713]:checked').val();
	var F1714  = $('input[name=F1714]:checked').val();
	var F1715  = $('input[name=F1715]:checked').val();
	var F1716  = $('input[name=F1716]:checked').val();
	var F1717  = $('input[name=F1717]:checked').val();
	var F1718  = $('input[name=F1718]:checked').val();
	var F1719  = $('input[name=F1719]:checked').val();
	var F1720  = $('input[name=F1720]:checked').val();
	var F1721  = $('input[name=F1721]:checked').val();
	var F1722  = $('input[name=F1722]:checked').val();
	var F1723  = $('input[name=F1723]:checked').val();
	var F1724  = $('input[name=F1724]:checked').val();
	var F1725  = $('input[name=F1725]:checked').val();
	var F1726  = $('input[name=F1726]:checked').val();
	var F1727  = $('input[name=F1727]:checked').val();
	var F1728  = $('input[name=F1728]:checked').val();
	var F1729  = $('input[name=F1729]:checked').val();
	var F1730  = $('input[name=F1730]:checked').val();
	var F1731  = $('input[name=F1731]:checked').val();
	var F1732  = $('input[name=F1732]:checked').val();
	var F1733  = $('input[name=F1733]:checked').val();
	var F1734  = $('input[name=F1734]:checked').val();
	var F1735  = $('input[name=F1735]:checked').val();
	var F1736  = $('input[name=F1736]:checked').val();
	var F1737  = $('input[name=F1737]:checked').val();
	var F1738  = $('input[name=F1738]:checked').val();
	var F1739  = $('input[name=F1739]:checked').val();
	var F1740  = $('input[name=F1740]:checked').val();
	var F1741  = $('input[name=F1741]:checked').val();
	var F1742  = $('input[name=F1742]:checked').val();
	var F1743  = $('input[name=F1743]:checked').val();
	var F1744  = $('input[name=F1744]:checked').val();
	var F1745  = $('input[name=F1745]:checked').val();
	var F1746  = $('input[name=F1746]:checked').val();
	var F1747  = $('input[name=F1747]:checked').val();
	var F1748  = $('input[name=F1748]:checked').val();
	var F1749  = $('input[name=F1749]:checked').val();
	var F1750  = $('input[name=F1750]:checked').val();
	var F1751  = $('input[name=F1751]:checked').val();
	var F1752  = $('input[name=F1752]:checked').val();
	var F1753  = $('input[name=F1753]:checked').val();
	var F1754  = $('input[name=F1754]:checked').val();
	
   
    $.ajax({
        //Alamat url harap disesuaikan dengan lokasi script pada komputer anda
        url      : 'proses.php',
        type     : 'POST',
        dataType : 'html',
        data     : '&F302='+F302+'&F303='+F303+'&F304='+F304+'&F401='+F401+'&F402='+F402+'&F403='+F403+'&F404='+F404+'&F405='+F405+'&F406='+F406+'&F407='+F407+'&F408='+F408+'&F409='+F409+'&F410='+F410+'&F411='+F411+'&F412='+F412+'&F413='+F413+'&F414='+F414+'&F415='+F415+'&F416='+F416+'&F502='+F502+'&F503='+F503+'&F6='+F6+'&F7='+F7+'&F8='+F8+'&F901='+F901+'&F902='+F902+'&F903='+F903+'&F904='+F904+'&F905='+F905+'&F906='+F906+'&F1001='+F1001+'&F1002='+F1002+'&F1101='+F1101+'&F1102='+F1102+'&F1301='+F1301+'&F1302='+F1302+'&F1303='+F1303+'&F14='+F14+'&F15='+F15+'&F1601='+F1601+'&F1602='+F1602+'&F1603='+F1603+'&F1604='+F1604+'&F1605='+F1605+'&F1606='+F1606+'&F1607='+F1607+'&F1608='+F1608+'&F1609='+F1609+'&F1610='+F1610+'&F1611='+F1611+'&F1612='+F1612+'&F1613='+F1613+'&F1614='+F1614+'&F1701='+F1701+'&F1702='+F1702+'&F1703='+F1703+'&F1704='+F1704+'&F1705='+F1705+'&F1706='+F1706+'&F1707='+F1707+'&F1708='+F1708+'&F1709='+F1709+'&F1710='+F1710+'&F1711='+F1711+'&F1712='+F1712+'&F1713='+F1713+'&F1714='+F1714+'&F1715='+F1715+'&F1716='+F1716+'&F1717='+F1717+'&F1718='+F1718+'&F1719='+F1719+'&F1720='+F1720+'&F1721='+F1721+'&F1722='+F1722+'&F1723='+F1723+'&F1724='+F1724+'&F1725='+F1725+'&F1726='+F1726+'&F1727='+F1727+'&F1728='+F1728+'&F1729='+F1729+'&F1730='+F1730+'&F1731='+F1731+'&F1732='+F1732+'&F1733='+F1733+'&F1734='+F1734+'&F1735='+F1735+'&F1736='+F1736+'&F1737='+F1737+'&F1738='+F1738+'&F1739='+F1739+'&F1740='+F1740+'&F1741='+F1741+'&F1742='+F1742+'&F1743='+F1743+'&F1744='+F1744+'&F1745='+F1745+'&F1746='+F1746+'&F1747='+F1747+'&F1748='+F1748+'&F1749='+F1749+'&F1750='+F1750+'&F1751='+F1751+'&F1752='+F1752+'&F1753='+F1753+'&F1754='+F1754,
        success  : function(respons){
            $('#pesan_kirim').html('Simpan Data Berhasil');
        },
    })
}