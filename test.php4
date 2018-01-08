<?php
$adresse = "http://shop.ebay.fr/i.html?_adv=1&_nkw=&_in_kw=1&_ex_kw=&_sacat=11232&LH_Complete=1&_udlo=&_udhi=&_samilow=&_samihi=&LH_SALE_CURRENCY=0&_sop=12&_dmd=1&_ipg=50";
$page = file_get_contents ($adresse);

preg_match_all ("#<td class='lv-ps'><div class='lv-dvpr'><div class='lv-pb5 cm-clg'><b>(.*?)€</b></div><p class='lv-sd'>#", $page, $prix);


		var_dump($prix);

		for($i = 0; $i < count($prix[1]); $i++)
        {
                echo ($prix[1][$i]); // On affiche le prix
		} ?>