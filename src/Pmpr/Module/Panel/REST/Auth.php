<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a16411f57b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\162\145\147\151\x73\x74\145\162"; const soawgaqmsgmysyma = "\162\145\x73\x65\164\x5f\160\x61\163\163\167\157\162\x64"; const igswqqsosoeiociu = "\146\x6f\162\x67\x6f\164\137\x70\x61\x73\163\x77\157\162\x64"; const scagkwwiiquocimc = "\x6c\141\x73\x74\x5f\156\141\155\145"; const kagqiwogmiguosiw = "\146\151\x72\x73\x74\x5f\156\x61\155\145"; const miqkwqsewyogmsak = "\x75\163\x65\x72\x5f\x6c\x6f\x67\151\x6e"; const iqgqyoowkoeugsck = "\x75\163\x65\x72\137\x70\141\163\x73\x77\157\x72\144"; const oysqakmiwsaqskce = "\x72\145\160\145\141\164\137\x70\x61\163\163\167\x6f\162\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\x61\165\x74\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\137\154\x6f\x67\157\x75\164", [$this, "\157\x79\x77\x77\x6d\x77\167\167\x71\145\165\151\x6f\155\x6b\141"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\145\163\x65\164\137\x70\x72\145\x5f\x64\151\x73\x70\141\x74\x63\150", [$this, "\171\167\x73\151\151\151\x6b\x75\x73\167\x6f\171\157\167\x61\x77"])->cecaguuoecmccuse("\144\x65\x74\x65\x72\x6d\151\156\145\137\x63\x75\x72\162\x65\156\x74\x5f\165\163\145\162", [$this, "\141\145\x69\x63\145\153\x61\163\147\157\x6b\x75\165\x6f\x71\155"]); $this->aqaqisyssqeomwom("\147\145\164\137\x6a\x77\164\x5f\141\x75\x74\x68\137\165\163\145\162", [$this, "\x69\163\163\x73\x73\x75\171\147\171\x65\167\x75\x61\x73\x77\141"])->aqaqisyssqeomwom("\147\x65\x74\x5f\x6a\167\164\x5f\141\165\x74\150\137\x74\x6f\x6b\x65\x6e", [$this, "\x73\171\x67\145\x65\161\147\x77\x79\167\x6d\171\x67\x73\x79\x75"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (!(strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\x70\x61\156\x65\154\57\141\165\164\x68\x2f\166\145\x72\151\146\171"))) { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() != "\x6e\157\x5f\x61\165\x74\x68\137\150\x65\141\144\145\x72") { goto kuicqywysciceggs; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; goto mkwskuycuyguqqok; kuicqywysciceggs: $this->yauwooaeicgosquo($keccaugmemegoimu); mkwskuycuyguqqok: sciwggaeogcoesiu: return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\x2f\x67\145\164\55\146\x69\x65\154\x64\x73", [self::wwgusigoaksqmwsm => [$this, "\x75\147\155\143\x65\143\x63\147\x77\x61\141\141\151\x67\151\x79"]]); $this->register("\57\155\145", [self::wwgusigoaksqmwsm => [$this, "\x61\165\157\163\171\151\163\x75\141\153\147\x75\171\x69\155\x77"]]); $this->register("\57\x6c\x6f\x67\151\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\153\x6b\x6d\153\143\x79\x73\x79\143\145\171\151\167\163\153\161"]]); $this->register("\x2f\162\145\x67\151\163\164\x65\162", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\155\x65\157\x77\143\x75\x6d\165\145\x69\x65\x65\x63\145\145\141"]]); $this->register("\x2f\x6c\x6f\x67\157\x75\164", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\151\x61\155\x67\x6b\151\x65\167\x77\x61\153\157\145\147\x79"]]); $this->register("\x2f\x76\x65\x72\151\x66\x79", [self::wwgusigoaksqmwsm => [$this, "\x75\163\x73\x6f\x77\x6b\151\x67\165\155\157\x61\157\157\167\x6f"]]); $this->register("\x2f\143\x68\141\x6e\147\145\x2d\160\141\x73\x73\167\x6f\x72\144", [self::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, self::wwgusigoaksqmwsm => [$this, "\141\x67\x63\171\x77\153\x77\141\157\x71\153\x6b\x63\143\147\153"]]); $this->register("\57\162\x65\x73\x65\x74\x2d\x70\141\163\x73\x77\157\x72\x64", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\163\161\141\x6f\x71\161\157\157\161\157\x77\165\x67\155\x63\167"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { goto eequksumcoogyoem; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x63\141\156\40\156\x6f\x74\x20\146\157\165\156\144\x20\x72\145\x71\165\145\163\x74\x65\144\40\146\x69\145\x6c\x64\x73\56", PR__MDL__PANEL), 404); goto uukumskkeggaowck; eequksumcoogyoem: foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto sqiciiuwmykocycc; } $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\157\x72\155\x2d\143\x6f\156\x74\162\x6f\154\55\x73\x6f\x6c\x69\x64\x20\x66\157\156\x74\55\163\151\x7a\145\55\150\64\40\x68\x2d\x61\x75\164\x6f\40\x70\55\65")->gkkgsyeumismsyse("\146\157\156\164\55\163\x69\172\145\x2d\x68\x36\40\146\157\x6e\164\55\167\145\x69\x67\x68\164\55\142\x6f\154\144\x65\162\40\x74\145\170\164\x2d\x64\141\x72\153"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if (!($ccamueccusigaaio == self::gagkiiqqiysqqgmc)) { goto iomcaiwewsawiamu; } $aiowsaccomcoikus->smcqugueqiumkygs(); iomcaiwewsawiamu: sqiciiuwmykocycc: kiqogmwcgcamwiig: } yowsmsiyimmimemc: $this->ocksiywmkyaqseou("\160\x61\x6e\145\x6c\137\141\x75\x74\150\137{$ymqmyyeuycgmigyo}\137\x66\151\145\x6c\144\163", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); kwagwqyusyiyoaqs: } eqkauqciwewmgeoi: $keccaugmemegoimu = $ikgwqyuyckaewsow; uukumskkeggaowck: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if (!$ikgwqyuyckaewsow) { goto meawswgwagoqgkye; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto goacqqsgaaigyuaw; } $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if (!($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie)) { goto yiwiqaqmwiogawym; } $icwicymcioeyeyek = false; goto cggowoquuiwqkyew; yiwiqaqmwiogawym: $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; goacqqsgaaigyuaw: ocokwuuquaokmasc: } cggowoquuiwqkyew: meawswgwagoqgkye: return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = self::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(self::muqaqimusmckkieq)->gswweykyogmsyawy(__("\x45\x6d\x61\x69\x6c", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\x6d\141\x69\x6c\100\x61\144\144\162\x65\x73\163\x2e\x63\x6f\155")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [self::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\x45\155\x61\x69\x6c\x20\157\162\40\125\x73\145\x72\156\x61\x6d\x65", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\155\x61\x69\154\x40\141\144\144\x72\x65\163\x73\56\x63\x6f\x6d")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\120\x61\163\x73\167\157\162\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\106\151\162\163\164\x6e\141\155\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\x4c\x61\163\164\x6e\141\x6d\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\x55\163\x65\x72\x6e\x61\155\x65", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(self::akywgoyaseymiyka)->gswweykyogmsyawy(__("\x50\141\x73\163\167\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\x52\145\160\x65\x61\164\x20\120\x61\x73\163\x77\157\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\x61\x6e\x65\x6c\x5f\141\165\x74\x68\x5f\146\151\145\154\x64\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { goto mswsoaimesegiiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\40\105\x6d\141\x69\x6c\40\x79\157\165\x20\x65\x6e\164\x65\162\x65\144\x20\x69\x73\x20\156\x6f\164\x20\x76\x61\154\151\144\x2e", PR__MDL__PANEL), 400); goto egasokooagakisiy; mswsoaimesegiiic: if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { goto wcesymwqykqoyuqk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\x6f\x20\165\x73\145\x72\40\146\x6f\165\x6e\x64\40\167\x69\x74\x68\x20\x74\x68\151\163\40\145\155\x61\x69\x6c\x20\141\x64\144\x72\145\x73\x73\56", PR__MDL__PANEL), 404); goto usqgaogkqgemuima; wcesymwqykqoyuqk: try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $iewosgggaueeyymg) { return $this->oemauiimmycumcsk($this->kyacickkomkioeyu($iewosgggaueeyymg), 500); } usqgaogkqgemuima: egasokooagakisiy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto ygkcacsyyckescqs; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\165\x72\x72\x65\156\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { goto ickcmqoiosquugwe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4d\x69\x73\x73\x69\x6e\x67\x20\160\x61\x72\x61\x6d\145\x74\145\162\56", PR__MDL__PANEL), 400); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: if ($yeacayasgueouoqc === $qqwegysogaocgeww) { goto goeoymmqqqeeoime; } if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { goto qgegkeomwscwwiuw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\164\x65\x72\145\x64\40\143\165\x72\162\x65\x6e\164\x20\160\x61\163\163\167\157\162\144\x20\151\x73\x20\156\x6f\x74\40\x63\x6f\162\162\145\143\164\x2e", PR__MDL__PANEL), 400); goto qmiwsequckckoaei; qgegkeomwscwwiuw: $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\x61\x6c\151\x64\141\164\145\x5f\x70\x61\163\x73\167\x6f\162\x64\x5f\162\x65\x73\145\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if ($keccaugmemegoimu->has_errors()) { goto kecwuwwcwokuksyq; } $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [self::ciywsqoeiymemsys => 200, self::eoskkkieowogacws => __("\x50\141\x73\163\x77\157\x72\144\x20\143\x68\x61\x6e\147\145\x64\x20\163\x75\143\x63\145\x73\x73\146\x75\154\x6c\171", PR__MDL__PANEL)]; kecwuwwcwokuksyq: qmiwsequckckoaei: goto eiawsoasmscmqswa; goeoymmqqqeeoime: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\x6e\164\x65\162\x65\144\x20\x63\x75\x72\162\145\x6e\164\40\x70\x61\x73\163\x77\157\162\x64\x20\141\x6e\x64\40\156\145\167\40\160\141\163\163\x77\157\x72\144\40\151\163\40\x73\141\x6d\145\x2e", PR__MDL__PANEL), 400); eiawsoasmscmqswa: qmeoaqmsuseueqiy: cuoqqgaygogsmmic: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\x41\143\143\145\x73\x73\55\x43\x6f\x6e\164\x72\x6f\154\x2d\101\154\154\x6f\167\55\110\x65\141\144\145\162\163\54\40\103\x6f\156\x74\x65\156\x74\55\124\171\x70\145\54\40\x41\165\x74\x68\157\162\151\x7a\141\x74\x69\x6f\156"; header(sprintf("\x41\143\x63\145\x73\x73\55\103\x6f\x6e\164\x72\157\x6c\x2d\101\x6c\154\x6f\167\x2d\x48\145\141\144\145\x72\163\72\40\x25\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (!is_wp_error($iswcokucwmiosiaq)) { goto cgewcsueoyaeikgm; } $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; cgewcsueoyaeikgm: return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { goto siqagquguiemuoku; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\156\164\x65\x72\x65\144\x20\x76\x61\x6c\x75\145\x73\40\151\x73\40\156\x6f\x74\x20\x76\x61\x6c\151\144\x2e", PR__MDL__PANEL), 400); goto ycakugokkqkuqyiu; siqagquguiemuoku: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { goto ieumumsgyguceusy; } if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { goto qcessicwuikwqsis; } $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { goto kooskuwkuayiuose; } $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? self::qkimqmacosgcwmug : "\x73\165\x62\x73\x63\x72\151\x62\145\x72"; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (is_wp_error($sogksuscggsicmac)) { goto twkmiuomimomscew; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { goto mqccmesakuemceqi; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\125\163\145\x72\40\156\157\164\x20\x66\x6f\165\x6e\x64", PR__MDL__PANEL)); goto eyiamcekkgkiawqy; mqccmesakuemceqi: $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; igymseewwyiocoug: } sukskmcwsoysiuqu: $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\x59\157\165\x72\40\x61\x63\x63\x6f\x75\156\164\x20\143\162\145\x61\x74\145\x64\x20\163\x75\x63\x63\x65\163\163\146\x75\154\154\x79", PR__MDL__PANEL), $mkucggyaiaukqoce); eyiamcekkgkiawqy: twkmiuomimomscew: goto qwcegcuowwgiccos; kooskuwkuayiuose: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\141\163\x73\167\x6f\162\144\x73\x20\x61\162\x65\40\156\x6f\164\40\163\141\x6d\145", PR__MDL__PANEL), 400); qwcegcuowwgiccos: goto yssscwioiyygssec; qcessicwuikwqsis: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x55\163\145\162\x6e\141\x6d\x65\x20\141\154\162\145\x61\x64\171\40\145\x78\x69\x73\164\163\54\x20\x70\x6c\x65\141\x73\145\x20\145\156\164\x65\162\40\x61\156\x6f\164\x68\x65\162\40\165\163\145\x72\156\141\x6d\145", PR__MDL__PANEL), 400); yssscwioiyygssec: goto coywmiyqgsweuiic; ieumumsgyguceusy: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x45\155\141\151\154\x20\x61\x6c\x72\145\x61\x64\171\x20\x65\x78\151\x73\x74\163\x2c\40\160\154\145\x61\163\x65\40\164\x72\x79\x20\106\x6f\162\147\145\x74\40\120\141\x73\163\167\x6f\x72\x64", PR__MDL__PANEL), 400); coywmiyqgsweuiic: ycakugokkqkuqyiu: return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\x6f\147\x67\x65\144\x20\157\165\164", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto wwkgkaecgiwggcck; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4a\127\x54\x20\x69\x73\40\x6e\x6f\x74\40\143\x6f\x6e\146\x69\147\165\162\x65\144\x20\x70\162\x6f\x70\145\x72\x6c\171\56", PR__MDL__PANEL), 500); goto umgaesggesswoaqe; wwkgkaecgiwggcck: $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::yuguikokwoymmqem); if ($icwicymcioeyeyek) { goto gygawoqywkukmqee; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\156\x74\145\162\145\x64\40\x76\141\154\165\145\x73\40\x69\x73\x20\156\x6f\164\x20\x76\x61\x6c\x69\x64\x2e", PR__MDL__PANEL), 400); goto kciouyuaqkyqomam; gygawoqywkukmqee: try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { goto oouoqimaaqcmccay; } $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\x70\x61\156\x65\x6c\x5f\141\165\x74\x68\x5f\143\x6f\157\153\x69\x65\x5f\145\x78\x70\151\162\x61\164\151\157\x6e", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\x69\x73\x73" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::auqoykcmsiauccao), "\x69\x61\164" => $ggmuwmqmcisegoea, "\x6e\142\x66" => $ggmuwmqmcisegoea, "\145\170\x70" => $wekousyuiguacggm, "\x64\x61\x74\x61" => [self::meksegaoamowuwoq => [self::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), "\164\157\153\x65\156" => $mgegoogckgsumooq, "\x65\x78\x70\151\x72\x65" => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\x77\160\137\x6c\x6f\x67\151\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); goto sycygoiaiqqageym; oouoqimaaqcmccay: $keccaugmemegoimu = $this->oemauiimmycumcsk($mkucggyaiaukqoce->get_error_message(), 401); sycygoiaiqqageym: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } kciouyuaqkyqomam: umgaesggesswoaqe: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qsygcycwieukkgwc; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), "\x74\157\x6b\x65\156" => $mgegoogckgsumooq]; qsygcycwieukkgwc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kiwqkcaekqqyuegq; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), self::uiwqcumqkgikqyue => [self::ciywsqoeiymemsys => 200], self::vswoiouoaykswgym => "\141\x75\x74\x68\137\x67\145\x74\137\x6d\145", "\x61\143\143\x6f\165\156\x74" => []]; kiwqkcaekqqyuegq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
