<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038c06b5ba             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\x65\x67\x69\x73\164\145\x72"; const soawgaqmsgmysyma = "\162\145\x73\145\x74\137\x70\x61\163\x73\x77\x6f\162\144"; const igswqqsosoeiociu = "\146\x6f\162\147\x6f\x74\x5f\160\x61\163\163\167\157\x72\144"; const scagkwwiiquocimc = "\x6c\x61\x73\x74\137\156\x61\x6d\x65"; const kagqiwogmiguosiw = "\x66\151\x72\x73\x74\137\156\x61\x6d\145"; const miqkwqsewyogmsak = "\x75\x73\x65\x72\x5f\154\x6f\147\x69\x6e"; const iqgqyoowkoeugsck = "\x75\x73\145\x72\137\160\141\163\x73\167\x6f\x72\x64"; const oysqakmiwsaqskce = "\162\145\160\x65\141\x74\x5f\160\141\163\x73\x77\x6f\162\x64"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\165\164\150"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70\137\154\x6f\x67\x6f\x75\164", [$this, "\x6f\x79\167\167\x6d\167\167\167\x71\145\165\151\x6f\155\x6b\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\x65\163\145\x74\x5f\x70\162\145\137\144\151\163\160\141\164\x63\150", [$this, "\171\x77\163\151\x69\x69\x6b\x75\x73\x77\157\171\157\x77\x61\x77"])->cecaguuoecmccuse("\x64\145\164\145\x72\155\151\x6e\x65\x5f\143\x75\x72\162\x65\156\164\x5f\x75\163\x65\162", [$this, "\x61\x65\x69\x63\x65\153\141\x73\x67\x6f\153\x75\x75\157\x71\x6d"]); $this->aqaqisyssqeomwom("\147\x65\x74\137\x6a\167\x74\x5f\141\x75\164\150\137\165\x73\145\x72", [$this, "\x69\x73\163\x73\x73\x75\171\147\x79\x65\167\x75\141\x73\167\x61"])->aqaqisyssqeomwom("\x67\145\x74\137\152\167\x74\137\x61\x75\164\x68\x5f\x74\x6f\x6b\x65\x6e", [$this, "\x73\x79\x67\145\x65\x71\x67\x77\171\x77\155\171\x67\x73\x79\x75"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\160\141\156\145\154\x2f\x61\x75\x74\150\57\x76\x65\162\x69\146\x79")) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() !== "\156\x6f\x5f\141\x75\164\x68\137\x68\x65\141\x64\145\x72") { $this->yauwooaeicgosquo($keccaugmemegoimu); } else { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; } } return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\147\145\x74\x2d\x66\x69\x65\x6c\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x67\155\143\x65\143\143\147\167\141\141\x61\151\147\151\171"]]); $this->register("\57\155\x65", [Constants::wwgusigoaksqmwsm => [$this, "\x61\x75\157\163\171\151\x73\165\x61\153\x67\165\171\x69\155\x77"]]); $this->register("\57\154\x6f\x67\151\x6e", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6b\x6b\155\153\x63\x79\x73\171\143\x65\171\x69\x77\163\x6b\x71"]]); $this->register("\x2f\x72\x65\147\151\163\x74\x65\162", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6d\x65\157\167\x63\x75\x6d\165\x65\x69\x65\145\x63\x65\x65\x61"]]); $this->register("\57\x6c\x6f\147\x6f\x75\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\141\x69\x61\x6d\147\153\151\x65\167\167\x61\153\157\145\x67\171"]]); $this->register("\x2f\166\145\162\151\x66\171", [Constants::wwgusigoaksqmwsm => [$this, "\x75\163\163\157\167\153\151\x67\165\155\157\141\157\x6f\167\x6f"]]); $this->register("\57\143\150\141\156\x67\145\x2d\x70\141\x73\x73\x77\x6f\x72\144", [Constants::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, Constants::wwgusigoaksqmwsm => [$this, "\141\x67\x63\x79\167\153\167\x61\x6f\x71\153\153\x63\143\147\153"]]); $this->register("\x2f\x72\x65\x73\x65\x74\55\x70\x61\163\x73\167\x6f\x72\x64", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x73\x71\x61\x6f\161\161\157\x6f\x71\x6f\167\x75\147\155\143\167"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\146\x6f\x72\x6d\x2d\143\x6f\156\164\162\157\x6c\55\x73\x6f\x6c\151\x64\40\146\x6f\156\x74\55\x73\151\x7a\x65\55\x68\64\40\x68\x2d\141\165\x74\157\x20\160\55\x35")->gkkgsyeumismsyse("\146\157\156\x74\55\x73\x69\x7a\145\55\x68\66\40\x66\x6f\x6e\164\55\167\x65\151\x67\150\164\x2d\x62\157\154\x64\145\162\40\x74\x65\x78\164\55\144\x61\x72\153"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if ($ccamueccusigaaio == self::gagkiiqqiysqqgmc) { $aiowsaccomcoikus->smcqugueqiumkygs(); } } } $this->ocksiywmkyaqseou("\x70\x61\x6e\x65\154\x5f\x61\x75\164\x68\x5f{$ymqmyyeuycgmigyo}\x5f\x66\151\145\154\x64\x73", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); } $keccaugmemegoimu = $ikgwqyuyckaewsow; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\143\141\x6e\40\x6e\x6f\x74\40\x66\157\165\x6e\x64\x20\162\x65\x71\x75\145\x73\x74\x65\x64\40\146\151\x65\154\x64\163\56", PR__MDL__PANEL), 404); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if ($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie) { $icwicymcioeyeyek = false; break; } $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; } } } return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = Constants::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->gswweykyogmsyawy(__("\105\155\141\x69\154", PR__MDL__PANEL))->kyiucygqsgequoys("\145\x6d\x61\151\154\100\141\x64\144\x72\x65\x73\163\x2e\143\157\x6d")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [Constants::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\x45\x6d\141\x69\154\x20\157\162\40\x55\x73\x65\x72\156\141\x6d\x65", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\x61\151\x6c\100\141\144\x64\x72\145\x73\163\56\143\x6f\x6d")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\120\x61\x73\x73\x77\x6f\x72\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\106\x69\162\x73\164\x6e\141\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\114\x61\x73\x74\156\x61\x6d\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\125\x73\x65\x72\x6e\x61\155\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->gswweykyogmsyawy(__("\120\141\x73\163\167\157\162\144", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\122\x65\x70\145\x61\x74\40\x50\141\x73\x73\x77\157\162\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\141\156\145\154\x5f\141\165\164\x68\x5f\x66\151\x65\x6c\144\x73", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $wgaoewqkwgomoaai) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\116\x6f\40\165\x73\145\x72\x20\x66\157\x75\156\144\40\x77\151\164\150\40\164\x68\x69\x73\40\145\155\141\151\154\40\x61\x64\144\x72\145\163\x73\x2e", PR__MDL__PANEL), 404); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\x20\x45\155\141\151\154\x20\171\x6f\x75\40\x65\156\164\145\x72\145\144\40\x69\163\x20\156\x6f\x74\x20\x76\141\x6c\151\x64\56", PR__MDL__PANEL), 400); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\165\162\162\x65\156\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { if ($yeacayasgueouoqc === $qqwegysogaocgeww) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\x6e\164\145\162\145\x64\x20\x63\165\162\162\145\x6e\164\40\160\141\163\163\x77\157\x72\x64\40\141\156\144\x20\156\145\167\x20\160\141\x73\x73\x77\x6f\x72\x64\40\x69\163\x20\x73\x61\x6d\x65\x2e", PR__MDL__PANEL), 400); } else { if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\141\154\151\x64\141\x74\145\137\x70\141\163\163\x77\157\x72\x64\x5f\162\145\x73\145\x74", $keccaugmemegoimu, $mkucggyaiaukqoce); if (!$keccaugmemegoimu->has_errors()) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => __("\120\141\x73\x73\x77\157\x72\144\x20\143\x68\141\156\x67\x65\x64\40\x73\165\143\143\x65\x73\163\146\x75\x6c\x6c\171", PR__MDL__PANEL)]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\x74\x65\x72\x65\x64\x20\x63\x75\x72\162\145\x6e\164\x20\x70\141\163\163\x77\x6f\162\x64\40\x69\163\40\x6e\157\164\40\x63\157\162\162\x65\x63\x74\x2e", PR__MDL__PANEL), 400); } } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x4d\x69\x73\163\151\x6e\x67\x20\x70\x61\x72\x61\x6d\x65\164\145\x72\x2e", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\x63\143\x65\x73\163\55\x43\x6f\156\164\162\x6f\154\55\101\x6c\154\157\x77\x2d\110\x65\141\144\145\x72\x73\x2c\x20\x43\x6f\156\x74\x65\x6e\x74\55\x54\171\160\x65\x2c\x20\x41\x75\164\150\157\x72\151\x7a\141\x74\151\x6f\156"; header(sprintf("\x41\143\x63\x65\x73\163\55\x43\157\x6e\164\x72\157\154\55\101\x6c\x6c\x6f\167\55\110\x65\141\144\x65\162\x73\72\x20\x25\x73", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (is_wp_error($iswcokucwmiosiaq)) { $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; } return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, Constants::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\155\x61\151\x6c\x20\141\154\162\x65\141\144\x79\x20\145\x78\151\x73\x74\x73\54\x20\160\x6c\x65\x61\163\x65\40\x74\x72\x79\x20\106\x6f\x72\x67\145\x74\x20\x50\141\x73\x73\167\x6f\162\144", PR__MDL__PANEL), 400); } else { if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\145\x72\156\x61\x6d\x65\40\x61\x6c\x72\145\141\x64\171\40\145\170\151\x73\164\163\x2c\x20\160\154\x65\141\163\145\x20\x65\x6e\x74\145\x72\40\141\156\157\164\150\x65\162\x20\165\x73\145\x72\156\141\x6d\145", PR__MDL__PANEL), 400); } else { $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x61\x73\163\167\157\x72\x64\x73\x20\141\162\145\x20\x6e\157\164\x20\x73\x61\x6d\x65", PR__MDL__PANEL), 400); } else { $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? Constants::qkimqmacosgcwmug : Constants::kuqwimiimiqsimgo; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (!is_wp_error($sogksuscggsicmac)) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\131\x6f\x75\162\x20\141\x63\143\x6f\x75\156\164\x20\143\162\145\141\x74\x65\144\x20\163\165\143\143\145\x73\x73\x66\x75\154\154\171", PR__MDL__PANEL), $mkucggyaiaukqoce); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\162\x20\x6e\157\x74\40\x66\157\165\156\x64", PR__MDL__PANEL)); } } } } } } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\105\156\164\145\x72\x65\x64\x20\166\141\154\x75\145\x73\40\151\163\40\x6e\157\164\40\166\x61\x6c\151\x64\56", PR__MDL__PANEL), 400); } return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\x6f\147\x67\145\x64\40\x6f\165\x74", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, Constants::yuguikokwoymmqem); if ($icwicymcioeyeyek) { try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mkucggyaiaukqoce->get_error_message(), 401); } else { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\160\x61\x6e\x65\x6c\x5f\141\165\164\150\137\143\x6f\157\153\151\x65\x5f\x65\x78\x70\x69\162\141\x74\x69\x6f\156", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\x69\x73\163" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auqoykcmsiauccao), "\x69\x61\x74" => $ggmuwmqmcisegoea, "\x6e\142\146" => $ggmuwmqmcisegoea, "\x65\x78\x70" => $wekousyuiguacggm, "\144\141\x74\x61" => [Constants::meksegaoamowuwoq => [Constants::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq, Constants::uikygkewwaiowmwe => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\x77\x70\137\x6c\x6f\x67\151\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\164\x65\x72\x65\x64\x20\166\141\154\x75\x65\x73\40\151\x73\x20\x6e\157\164\x20\166\141\154\151\144\56", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\x57\x54\40\151\x73\40\x6e\157\164\x20\143\x6f\x6e\146\x69\x67\165\162\x65\144\40\160\x72\x6f\160\145\162\x6c\171\x2e", PR__MDL__PANEL), 500); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::sygmkaeayiiouiwm => $mgegoogckgsumooq]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [Constants::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), Constants::uiwqcumqkgikqyue => [Constants::ciywsqoeiymemsys => 200], Constants::vswoiouoaykswgym => "\x61\165\164\150\137\147\x65\164\137\x6d\145", "\x61\x63\143\x6f\165\156\164" => []]; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
