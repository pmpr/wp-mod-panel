<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66585f664f2fb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormGenerator\Field; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\x65\x67\151\x73\164\145\x72"; const soawgaqmsgmysyma = "\x72\145\163\x65\x74\x5f\160\x61\x73\x73\x77\x6f\162\x64"; const igswqqsosoeiociu = "\x66\157\x72\147\157\164\137\160\x61\163\163\167\157\x72\x64"; const scagkwwiiquocimc = "\x6c\x61\163\164\137\156\x61\155\145"; const kagqiwogmiguosiw = "\x66\x69\162\x73\164\137\156\x61\155\x65"; const miqkwqsewyogmsak = "\x75\163\x65\162\137\x6c\x6f\x67\x69\156"; const iqgqyoowkoeugsck = "\165\163\x65\x72\x5f\160\x61\163\163\167\x6f\162\x64"; const oysqakmiwsaqskce = "\162\145\160\x65\x61\164\137\x70\141\163\163\167\157\x72\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\x75\164\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160\x5f\x6c\157\147\x6f\x75\164", [$this, "\x6f\171\167\x77\x6d\x77\167\167\x71\x65\x75\151\157\155\x6b\141"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\x65\x73\145\164\137\x70\162\x65\137\144\151\x73\160\x61\x74\x63\x68", [$this, "\171\x77\163\x69\151\151\x6b\x75\163\167\x6f\171\157\x77\x61\x77"])->cecaguuoecmccuse("\144\x65\164\145\x72\x6d\x69\156\x65\137\143\165\162\x72\145\x6e\164\137\165\x73\145\162", [$this, "\141\x65\151\143\x65\153\x61\x73\x67\157\153\165\x75\x6f\x71\155"]); $this->aqaqisyssqeomwom("\147\145\164\x5f\x6a\167\164\x5f\x61\165\x74\150\x5f\165\163\x65\x72", [$this, "\x69\x73\x73\x73\x73\165\171\x67\171\145\x77\165\141\x73\x77\141"])->aqaqisyssqeomwom("\x67\145\164\x5f\152\167\x74\137\141\165\x74\150\x5f\x74\x6f\x6b\x65\x6e", [$this, "\163\171\x67\145\145\x71\x67\167\x79\x77\155\x79\x67\163\171\165"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymsasggoakmgguqk(); $wigqmiauciuswcom = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); if (!(strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\x70\x61\x6e\x65\x6c\57\x61\165\x74\x68\57\166\x65\x72\x69\146\171"))) { goto suswcqoyyqkkquuo; } $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() != "\x6e\157\137\141\165\164\x68\x5f\x68\x65\x61\144\145\162") { goto soqqemyioggmoakg; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; goto acaqummmoyiemqss; soqqemyioggmoakg: $this->yauwooaeicgosquo($keccaugmemegoimu); acaqummmoyiemqss: suswcqoyyqkkquuo: return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\x2f\x67\145\x74\x2d\146\x69\145\x6c\x64\163", [self::wwgusigoaksqmwsm => [$this, "\165\147\x6d\x63\145\x63\143\x67\167\x61\141\x61\151\x67\x69\171"]]); $this->register("\57\x6d\x65", [self::wwgusigoaksqmwsm => [$this, "\141\x75\x6f\x73\171\x69\x73\165\141\153\147\x75\x79\x69\x6d\167"]]); $this->register("\x2f\x6c\157\x67\x69\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x6b\153\155\153\x63\x79\163\171\x63\145\x79\151\167\x73\153\161"]]); $this->register("\x2f\162\145\x67\151\163\x74\145\x72", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x6d\145\157\x77\143\x75\x6d\165\x65\x69\145\145\x63\x65\x65\x61"]]); $this->register("\57\x6c\x6f\x67\x6f\165\164", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\x69\x61\155\x67\153\151\145\167\167\x61\153\x6f\x65\147\171"]]); $this->register("\x2f\166\145\x72\151\x66\x79", [self::wwgusigoaksqmwsm => [$this, "\x75\x73\163\157\x77\153\x69\x67\x75\x6d\x6f\x61\x6f\157\167\157"]]); $this->register("\x2f\143\x68\141\156\147\x65\x2d\x70\141\x73\x73\167\x6f\162\x64", [self::oaggieeykyaoiiyw => self::ouuaeeeqeqkagcgi, self::wwgusigoaksqmwsm => [$this, "\141\147\x63\x79\167\x6b\167\141\157\161\x6b\153\143\143\147\x6b"]]); $this->register("\57\162\145\163\x65\164\55\160\x61\163\x73\x77\x6f\162\144", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x73\161\141\x6f\161\x71\x6f\157\x71\x6f\167\x75\x67\155\x63\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { goto usquiuuyiyqaeyiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x63\x61\x6e\40\x6e\157\x74\x20\146\x6f\x75\156\144\x20\x72\x65\161\165\145\x73\164\x65\x64\40\146\x69\145\154\x64\163\x2e", PR__MDL__PANEL), 404); goto qicwaskssogcokgm; usquiuuyiyqaeyiu: foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto kymkucucyeoeikim; } $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\146\157\x72\155\x2d\x63\x6f\156\164\162\157\154\x2d\163\x6f\154\151\x64\x20\146\157\x6e\x74\x2d\163\151\x7a\145\x2d\150\64\40\x68\55\141\165\x74\x6f\x20\160\55\65")->gkkgsyeumismsyse("\x66\x6f\156\x74\x2d\163\x69\x7a\x65\x2d\x68\x36\40\x66\x6f\156\x74\x2d\x77\145\151\x67\x68\164\x2d\142\157\x6c\144\x65\162\x20\x74\145\170\x74\55\144\x61\162\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if (!($ccamueccusigaaio == self::gagkiiqqiysqqgmc)) { goto hoeeyiowekaeemko; } $aiowsaccomcoikus->smcqugueqiumkygs(); hoeeyiowekaeemko: kymkucucyeoeikim: iekumemscwieugqw: } foeeqckqsyockkak: $this->ocksiywmkyaqseou("\x70\x61\156\x65\x6c\x5f\141\165\164\150\x5f{$ymqmyyeuycgmigyo}\x5f\x66\151\x65\x6c\x64\163", $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); oqugqwcyomiaaoqu: } eeqesooyqagwawae: $keccaugmemegoimu = $ikgwqyuyckaewsow; qicwaskssogcokgm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if (!$ikgwqyuyckaewsow) { goto aegysmeecgcgayyw; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto gaomwagkcciesyqy; } $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if (!($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie)) { goto esuiysskoweawsue; } $icwicymcioeyeyek = false; goto uguigkcmukuouway; esuiysskoweawsue: $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; gaomwagkcciesyqy: uqqaiagaeqgqgaiy: } uguigkcmukuouway: aegysmeecgcgayyw: return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = self::ALL) : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $owaiikyuwwwmswgc = $gusoaiguqeaommcc->ymuegqgyuagyucws(self::muqaqimusmckkieq)->gswweykyogmsyawy(__("\x45\155\141\151\x6c", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\x6d\x61\151\154\x40\x61\x64\x64\162\145\163\x73\x2e\143\x6f\x6d")->mkiaygiogeeyogqm(); $ikgwqyuyckaewsow = [self::yuguikokwoymmqem => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::miqkwqsewyogmsak)->gswweykyogmsyawy(__("\x45\x6d\x61\x69\154\x20\157\x72\x20\125\x73\x65\x72\x6e\x61\155\x65", PR__MDL__PANEL))->kyiucygqsgequoys("\145\155\141\151\x6c\100\x61\144\x64\x72\x65\163\163\x2e\143\x6f\x6d")->kqqqugemmqagucuq(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iqgqyoowkoeugsck)->gswweykyogmsyawy(__("\x50\x61\x73\x73\167\x6f\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\106\x69\x72\x73\164\156\x61\155\145", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\x4c\141\163\x74\156\141\155\x65", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\x55\x73\x65\x72\x6e\x61\155\145", PR__MDL__PANEL))->kqqqugemmqagucuq(), $owaiikyuwwwmswgc, $gusoaiguqeaommcc->ymuegqgyuagyucws(self::akywgoyaseymiyka)->gswweykyogmsyawy(__("\120\x61\163\163\x77\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::oysqakmiwsaqskce)->gswweykyogmsyawy(__("\x52\x65\160\145\x61\164\x20\x50\x61\x73\x73\167\x6f\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\x61\156\145\x6c\137\141\165\x74\150\x5f\146\x69\x65\x6c\144\163", $ikgwqyuyckaewsow); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muqaqimusmckkieq); $keccaugmemegoimu = []; if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->qkgmsqgmwoamekyk($owaiikyuwwwmswgc)) { goto wiysogeqqwgioyka; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\150\145\40\105\x6d\x61\151\154\40\x79\157\x75\x20\x65\x6e\x74\x65\162\x65\144\x20\151\163\x20\x6e\x6f\x74\x20\x76\x61\x6c\x69\x64\56", PR__MDL__PANEL), 400); goto skkamseieeusycye; wiysogeqqwgioyka: if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { goto suqkuqygkkgwyaie; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\157\x20\165\163\x65\x72\40\x66\x6f\x75\x6e\144\x20\167\151\164\150\x20\x74\150\x69\x73\40\145\155\x61\x69\x6c\x20\141\x64\144\162\x65\x73\x73\56", PR__MDL__PANEL), 404); goto soaccwqimeksgwiw; suqkuqygkkgwyaie: try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $iewosgggaueeyymg) { return $this->oemauiimmycumcsk($this->kyacickkomkioeyu($iewosgggaueeyymg), 500); } soaccwqimeksgwiw: skkamseieeusycye: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto ooeausyowguqicuo; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto egyyiccaeeiooaua; ooeausyowguqicuo: $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\165\162\x72\x65\156\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { goto wmywuusgukmmaams; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4d\x69\163\163\151\x6e\147\x20\x70\x61\162\x61\155\145\164\145\162\56", PR__MDL__PANEL), 400); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: if ($yeacayasgueouoqc === $qqwegysogaocgeww) { goto ewymsmkkiksgwysk; } if ($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->eoiyuwsiwqyqiyom($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { goto syiqkaasoueowwui; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\164\x65\x72\x65\144\x20\x63\x75\162\162\145\x6e\164\40\x70\141\x73\163\x77\x6f\x72\144\40\151\x73\x20\x6e\157\164\40\143\x6f\162\162\145\143\164\x2e", PR__MDL__PANEL), 400); goto giaacoqqqsekcayy; syiqkaasoueowwui: $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\141\x6c\151\x64\x61\x74\145\x5f\x70\141\x73\163\x77\x6f\x72\x64\137\162\x65\163\x65\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if ($keccaugmemegoimu->has_errors()) { goto cgiscsqwwgqqaeqi; } $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sqaoqqooqowugmcw($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = [self::ciywsqoeiymemsys => 200, self::eoskkkieowogacws => __("\120\141\163\x73\167\x6f\x72\144\x20\143\x68\x61\156\147\145\x64\40\x73\x75\143\143\x65\x73\163\x66\x75\x6c\x6c\x79", PR__MDL__PANEL)]; cgiscsqwwgqqaeqi: giaacoqqqsekcayy: goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\x6e\x74\145\x72\145\x64\x20\x63\165\162\x72\145\x6e\164\40\160\x61\x73\x73\x77\157\x72\144\x20\x61\156\144\40\x6e\x65\x77\40\160\141\163\x73\167\x6f\x72\144\x20\151\x73\x20\x73\x61\x6d\145\x2e", PR__MDL__PANEL), 400); cmegwsegsosyqcai: gkyawqqcmigqgaiq: egyyiccaeeiooaua: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\143\143\x65\163\x73\x2d\x43\x6f\x6e\164\x72\x6f\x6c\55\101\154\154\x6f\167\x2d\110\x65\x61\x64\145\162\x73\x2c\x20\x43\x6f\156\164\x65\x6e\x74\x2d\124\x79\160\145\54\x20\101\165\164\150\x6f\x72\x69\x7a\141\x74\151\157\156"; header(sprintf("\x41\143\143\x65\x73\163\x2d\103\x6f\x6e\x74\162\157\154\x2d\x41\154\x6c\157\x77\55\110\x65\x61\144\x65\x72\x73\x3a\x20\45\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (!is_wp_error($iswcokucwmiosiaq)) { goto scisgsyemmsekgos; } $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; scisgsyemmsekgos: return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { goto owmuceyswmgueasi; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x45\x6e\x74\x65\162\x65\144\x20\x76\141\x6c\x75\145\x73\x20\151\163\40\156\157\x74\x20\x76\x61\x6c\x69\x64\56", PR__MDL__PANEL), 400); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $owaiikyuwwwmswgc = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::muqaqimusmckkieq); $qqwegysogaocgeww = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::akywgoyaseymiyka); $yewiaiaauukwsgku = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::csiaccacwgeeqwwo); if ($ewgmommeawggyaek->uyoiiusukoigeusy($owaiikyuwwwmswgc)) { goto wakmayaoqoskekqy; } if ($ewgmommeawggyaek->wskwomgayscmiwqy($yewiaiaauukwsgku)) { goto sggawugoykqcmsug; } $assuqkuiuewumqyu = $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { goto kqgcyoscsusgoaqi; } $oeucsuyqysaciasy = $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() ? self::qkimqmacosgcwmug : "\163\x75\142\163\143\162\151\x62\145\x72"; $sogksuscggsicmac = $ewgmommeawggyaek->gesyeyeaqmiskuoo($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (is_wp_error($sogksuscggsicmac)) { goto wgewmqieuamsoayy; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { goto omqiayeucoioqoao; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\125\163\x65\x72\x20\x6e\x6f\164\x20\x66\x6f\165\x6e\x64", PR__MDL__PANEL)); goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; igooksugieceoege: } cewmoqyysgsmuiya: $ewgmommeawggyaek->update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\x59\157\165\162\x20\141\143\x63\x6f\x75\x6e\164\x20\143\x72\x65\x61\164\145\144\40\x73\165\x63\x63\145\x73\163\x66\x75\x6c\154\x79", PR__MDL__PANEL), $mkucggyaiaukqoce); ugqaaewwmkocwwgy: wgewmqieuamsoayy: goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\x61\163\163\167\157\162\x64\x73\40\141\162\145\40\x6e\x6f\x74\x20\x73\x61\x6d\145", PR__MDL__PANEL), 400); ueigkucgaucgeimc: goto wkeuuycukmuqiaom; sggawugoykqcmsug: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\125\x73\145\162\156\x61\155\x65\40\x61\154\x72\x65\x61\x64\171\40\x65\x78\x69\x73\x74\163\x2c\40\160\154\145\x61\x73\x65\40\x65\x6e\164\x65\162\x20\x61\x6e\x6f\164\x68\x65\162\40\165\x73\145\162\x6e\x61\155\x65", PR__MDL__PANEL), 400); wkeuuycukmuqiaom: goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\x6d\x61\x69\154\40\141\154\x72\x65\141\x64\171\40\x65\x78\151\x73\164\x73\54\x20\x70\x6c\145\x61\x73\x65\40\164\x72\171\x20\x46\157\x72\x67\x65\164\40\120\141\163\x73\167\157\x72\144", PR__MDL__PANEL), 400); qmuwoecuacmkwgem: mwsmsguqqkcwiiuk: return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aiamgkiewwakoegy(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\x67\147\x65\144\x20\x6f\165\164", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto qoqskyuuwueqkquk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\112\127\124\x20\x69\x73\40\156\157\164\x20\x63\157\156\146\x69\147\165\162\145\144\x20\x70\162\x6f\x70\145\x72\154\x79\56", PR__MDL__PANEL), 500); goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::yuguikokwoymmqem); if ($icwicymcioeyeyek) { goto msemumccgceyugmg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\156\164\145\x72\145\144\40\x76\x61\x6c\165\x65\x73\x20\151\x73\40\156\157\x74\40\x76\x61\x6c\x69\144\56", PR__MDL__PANEL), 400); goto wagqgeqymeqoeuyi; msemumccgceyugmg: try { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $ewgmommeawggyaek->aiamgkiewwakoegy(); $mkucggyaiaukqoce = $ewgmommeawggyaek->hmisgsqkawsgmqou($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { goto eeauyscekuckoues; } $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->ocksiywmkyaqseou("\x70\141\156\145\154\137\x61\x75\164\150\x5f\x63\x6f\157\153\151\x65\137\145\x78\x70\151\x72\x61\164\151\157\x6e", DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\163\x73" => $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(self::auqoykcmsiauccao), "\151\141\164" => $ggmuwmqmcisegoea, "\156\x62\x66" => $ggmuwmqmcisegoea, "\145\170\160" => $wekousyuiguacggm, "\x64\141\164\141" => [self::meksegaoamowuwoq => [self::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), "\x74\157\153\145\156" => $mgegoogckgsumooq, "\x65\170\x70\x69\x72\145" => $wekousyuiguacggm]; $ewgmommeawggyaek->kkkuqwaqakeaykmo($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); $ewgmommeawggyaek->qsgmugaqymqgqayy($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\160\137\154\157\147\151\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); goto eogwckcymuugikuy; eeauyscekuckoues: $keccaugmemegoimu = $this->oemauiimmycumcsk($mkucggyaiaukqoce->get_error_message(), 401); eogwckcymuugikuy: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } wagqgeqymeqoeuyi: iwsuawwqomaowuii: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto wcugqegqsuuuwqao; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), "\164\x6f\153\x65\156" => $mgegoogckgsumooq]; wcugqegqsuuuwqao: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto asiqwuoswmigcaki; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), self::uiwqcumqkgikqyue => [self::ciywsqoeiymemsys => 200], self::vswoiouoaykswgym => "\x61\165\164\x68\137\147\145\164\x5f\x6d\145", "\x61\143\x63\x6f\165\156\x74" => []]; asiqwuoswmigcaki: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
