<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cefafa30515             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\x72\x65\147\x69\163\x74\x65\x72"; const soawgaqmsgmysyma = "\x72\145\x73\x65\x74\137\160\141\x73\163\167\157\162\x64"; const igswqqsosoeiociu = "\146\x6f\x72\x67\157\164\137\160\x61\163\163\167\x6f\x72\144"; const scagkwwiiquocimc = "\154\x61\x73\x74\137\x6e\x61\x6d\145"; const kagqiwogmiguosiw = "\146\151\x72\163\x74\x5f\156\x61\155\x65"; const miqkwqsewyogmsak = "\165\163\145\162\x5f\x6c\157\147\151\x6e"; const iqgqyoowkoeugsck = "\165\x73\x65\x72\137\x70\x61\x73\163\x77\157\x72\144"; const oysqakmiwsaqskce = "\x72\145\x70\x65\141\164\x5f\x70\141\163\x73\x77\157\x72\144"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\x75\x74\150"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160\137\154\x6f\147\x6f\165\164", [$this, "\157\171\x77\167\x6d\167\x77\167\x71\145\x75\x69\x6f\x6d\x6b\141"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\145\x73\145\x74\137\x70\x72\x65\137\x64\x69\163\160\141\164\x63\x68", [$this, "\171\x77\x73\151\151\151\x6b\x75\x73\x77\x6f\x79\x6f\167\x61\167"])->cecaguuoecmccuse("\x64\x65\x74\145\162\x6d\151\x6e\x65\x5f\143\165\162\162\145\x6e\164\137\165\x73\x65\162", [$this, "\x61\145\151\143\x65\153\141\163\x67\157\x6b\165\165\157\x71\x6d"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\x65\164\x5f\152\167\164\137\x61\165\164\150\137\x75\x73\145\162"), [$this, "\151\163\x73\x73\163\x75\171\147\171\x65\x77\165\x61\163\x77\141"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\x65\164\x5f\152\x77\x74\137\141\165\164\x68\137\x74\x6f\x6b\145\156"), [$this, "\163\171\x67\145\145\161\x67\167\x79\167\155\171\x67\163\x79\x75"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = rest_get_url_prefix(); $wigqmiauciuswcom = ManipulateServer::ekcymmyqoceukosc(); if (!(strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\57\160\141\x6e\145\x6c\x2f\141\x75\164\x68\x2f\x76\x65\162\x69\x66\x79"))) { goto ooeausyowguqicuo; } $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() != "\156\157\137\x61\x75\x74\150\137\x68\x65\141\x64\145\162") { goto wmywuusgukmmaams; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $this->yauwooaeicgosquo($keccaugmemegoimu); gkyawqqcmigqgaiq: ooeausyowguqicuo: return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\x67\x65\164\55\x66\151\x65\154\x64\x73", ["\x61\162\147\163" => [], "\155\145\164\x68\157\144\163" => self::uigoseacoukemwqc, "\143\x61\154\154\142\141\143\x6b" => [$this, "\165\147\155\143\145\x63\143\147\167\141\x61\x61\x69\147\x69\x79"]]); $this->register("\57\155\145", ["\x61\x72\x67\x73" => [], "\x6d\x65\164\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\143\x61\x6c\154\142\x61\143\153" => [$this, "\141\165\x6f\x73\x79\x69\x73\x75\x61\x6b\147\165\171\x69\x6d\167"]]); $this->register("\57\154\157\147\151\156", ["\141\162\147\x73" => [], "\155\145\x74\150\157\144\x73" => self::qucyckeykeuuaquw, "\143\x61\154\x6c\x62\x61\143\153" => [$this, "\153\x6b\155\153\143\171\163\x79\x63\x65\x79\x69\x77\163\153\x71"]]); $this->register("\x2f\162\x65\x67\x69\x73\x74\x65\x72", ["\141\162\147\x73" => [], "\155\x65\x74\x68\157\x64\163" => self::qucyckeykeuuaquw, "\143\141\154\154\x62\141\143\x6b" => [$this, "\x6d\x65\157\167\143\x75\x6d\x75\145\x69\145\x65\x63\145\145\x61"]]); $this->register("\x2f\154\157\147\x6f\x75\164", ["\x61\x72\147\163" => [], "\x6d\x65\x74\150\x6f\144\163" => self::qucyckeykeuuaquw, "\x63\141\x6c\154\142\x61\x63\x6b" => [$this, "\141\151\x61\x6d\147\x6b\151\x65\x77\x77\141\x6b\157\145\147\x79"]]); $this->register("\x2f\x76\x65\162\x69\146\x79", ["\141\162\x67\163" => [], "\155\x65\x74\x68\x6f\144\x73" => self::uigoseacoukemwqc, "\143\x61\x6c\154\142\x61\143\153" => [$this, "\x75\163\163\157\x77\153\x69\x67\x75\x6d\157\x61\157\x6f\167\x6f"]]); $this->register("\57\x63\150\141\x6e\147\145\x2d\160\141\x73\163\167\157\x72\144", ["\x61\x72\x67\x73" => [], "\155\145\x74\x68\157\x64\163" => self::ouuaeeeqeqkagcgi, "\143\x61\x6c\154\x62\x61\x63\x6b" => [$this, "\141\x67\x63\171\167\153\x77\x61\x6f\161\153\x6b\143\x63\147\153"]]); $this->register("\57\162\x65\163\145\164\x2d\x70\141\x73\163\x77\x6f\162\144", ["\x61\162\x67\163" => [], "\x6d\145\164\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\143\x61\154\154\142\x61\143\x6b" => [$this, "\163\161\141\157\x71\161\x6f\157\161\x6f\167\165\x67\155\x63\167"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { goto wgewmqieuamsoayy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\143\x61\156\40\156\x6f\164\40\x66\x6f\x75\x6e\x64\x20\x72\145\x71\x75\145\163\x74\145\x64\40\x66\x69\145\x6c\x64\163\x2e", PR__MDL__PANEL), 404); goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ugqaaewwmkocwwgy; } $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\157\162\155\x2d\143\x6f\156\164\x72\x6f\x6c\x2d\x73\x6f\154\151\144\40\146\157\156\x74\x2d\x73\151\172\145\55\150\x34\40\150\x2d\141\165\x74\157\x20\x70\x2d\x35")->gkkgsyeumismsyse("\146\x6f\156\x74\55\x73\x69\x7a\145\55\150\x36\40\146\157\156\x74\x2d\x77\145\151\147\x68\164\55\142\157\154\144\145\162\x20\164\x65\170\x74\x2d\x64\141\x72\x6b"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if (!($ccamueccusigaaio == self::gagkiiqqiysqqgmc)) { goto omqiayeucoioqoao; } $aiowsaccomcoikus->smcqugueqiumkygs(); omqiayeucoioqoao: ugqaaewwmkocwwgy: igooksugieceoege: } cewmoqyysgsmuiya: $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\145\154\137\141\165\x74\x68\x5f{$ymqmyyeuycgmigyo}\x5f\146\x69\x65\154\144\163"), $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); scisgsyemmsekgos: } egyyiccaeeiooaua: $keccaugmemegoimu = $ikgwqyuyckaewsow; kqgcyoscsusgoaqi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if (!$ikgwqyuyckaewsow) { goto qmuwoecuacmkwgem; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto wakmayaoqoskekqy; } $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if (!($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie)) { goto wkeuuycukmuqiaom; } $icwicymcioeyeyek = false; goto ueigkucgaucgeimc; wkeuuycukmuqiaom: $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; wakmayaoqoskekqy: sggawugoykqcmsug: } ueigkucgaucgeimc: qmuwoecuacmkwgem: return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = self::ALL) : array { $owaiikyuwwwmswgc = Form::ymuegqgyuagyucws(self::muqaqimusmckkieq, __("\105\x6d\x61\151\154", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\x6d\141\x69\154\100\x61\x64\144\x72\x65\x73\163\x2e\143\157\155")->mkiaygiogeeyogqm(false); $ikgwqyuyckaewsow = [self::yuguikokwoymmqem => [Form::ymuegqgyuagyucws(self::miqkwqsewyogmsak, __("\x45\x6d\x61\151\x6c\x20\x6f\162\x20\125\x73\145\162\156\141\155\145", PR__MDL__PANEL))->kyiucygqsgequoys("\x65\x6d\141\x69\x6c\100\x61\144\144\162\x65\163\x73\56\x63\x6f\x6d")->sqcsseccsaqsoyqy(), Form::ymuegqgyuagyucws(self::iqgqyoowkoeugsck, __("\x50\141\163\x73\x77\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\106\151\x72\163\164\156\141\x6d\x65", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\114\141\163\x74\x6e\x61\x6d\145", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\x55\163\145\x72\156\141\155\145", PR__MDL__PANEL))->sqcsseccsaqsoyqy(), $owaiikyuwwwmswgc, Form::ymuegqgyuagyucws(self::akywgoyaseymiyka, __("\x50\141\x73\163\167\x6f\162\x64", PR__MDL__PANEL))->sqsumkuougquscyg(), Form::ymuegqgyuagyucws(self::oysqakmiwsaqskce, __("\122\x65\160\x65\x61\x74\x20\120\x61\163\x73\x77\157\x72\144", PR__MDL__PANEL))->sqsumkuougquscyg()], self::soawgaqmsgmysyma => [], self::igswqqsosoeiociu => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\145\154\x5f\141\x75\164\150\137\146\151\x65\154\144\163"), $ikgwqyuyckaewsow); return ManipulateArray::get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muqaqimusmckkieq); $keccaugmemegoimu = []; if (is_email($owaiikyuwwwmswgc)) { goto eeauyscekuckoues; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\x20\105\155\141\x69\154\40\171\157\165\x20\145\x6e\x74\145\x72\145\x64\x20\151\163\40\156\157\x74\x20\166\x61\x6c\x69\x64\56", PR__MDL__PANEL), 400); goto eogwckcymuugikuy; eeauyscekuckoues: if (email_exists($owaiikyuwwwmswgc)) { goto owmuceyswmgueasi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\x6f\40\x75\163\145\162\40\146\157\165\156\144\x20\167\x69\164\x68\40\x74\150\151\x73\x20\x65\155\141\x69\154\x20\x61\144\x64\x72\x65\x73\x73\x2e", PR__MDL__PANEL), 404); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $iewosgggaueeyymg) { return $this->oemauiimmycumcsk($this->kyacickkomkioeyu($iewosgggaueeyymg), 500); } mwsmsguqqkcwiiuk: eogwckcymuugikuy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto mqicocmqegwukkwg; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\165\162\162\x65\156\164"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { goto asiqwuoswmigcaki; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\115\151\x73\x73\151\x6e\x67\40\x70\141\162\141\155\x65\x74\x65\x72\x2e", PR__MDL__PANEL), 400); goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: if ($yeacayasgueouoqc === $qqwegysogaocgeww) { goto iwsuawwqomaowuii; } if (wp_check_password($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { goto wagqgeqymeqoeuyi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\x6e\x74\145\162\x65\144\x20\143\165\162\x72\x65\156\x74\x20\x70\141\x73\x73\x77\157\162\x64\40\x69\x73\x20\156\x6f\164\40\143\x6f\x72\x72\145\x63\x74\56", PR__MDL__PANEL), 400); goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\x76\x61\154\151\144\x61\x74\145\137\160\141\x73\x73\x77\157\x72\x64\137\162\145\x73\x65\164", $keccaugmemegoimu, $mkucggyaiaukqoce); if ($keccaugmemegoimu->has_errors()) { goto msemumccgceyugmg; } reset_password($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = ["\155\145\x73\163\x61\147\145" => __("\x50\x61\163\x73\x77\157\x72\144\40\143\150\141\156\x67\x65\144\x20\x73\x75\143\143\145\x73\163\146\165\x6c\154\171", PR__MDL__PANEL), "\x73\x74\141\x74\165\163" => 200]; msemumccgceyugmg: qoqskyuuwueqkquk: goto wcugqegqsuuuwqao; iwsuawwqomaowuii: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\156\x74\x65\x72\145\x64\40\x63\165\162\x72\145\156\164\x20\160\141\163\163\x77\x6f\162\x64\x20\141\156\144\40\x6e\145\167\x20\x70\x61\163\163\167\x6f\162\144\x20\151\163\40\x73\141\155\x65\x2e", PR__MDL__PANEL), 400); wcugqegqsuuuwqao: ciykoyeioqgyaeqo: qgeugwymkkiacwoc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\x63\x63\145\163\163\x2d\x43\157\x6e\x74\x72\157\154\55\x41\x6c\x6c\157\167\x2d\x48\145\x61\144\145\162\x73\54\x20\x43\x6f\x6e\x74\x65\156\164\55\x54\x79\160\145\54\40\x41\x75\164\x68\x6f\x72\151\x7a\141\164\151\x6f\x6e"; header(sprintf("\x41\x63\x63\x65\x73\x73\55\103\157\x6e\164\162\157\x6c\55\101\154\154\157\x77\55\x48\145\141\x64\x65\162\x73\72\x20\45\163", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (!is_wp_error($iswcokucwmiosiaq)) { goto emmsycooskoqmgeg; } $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; emmsycooskoqmgeg: return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { goto ogsaaqsaogcqiouy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\x6e\x74\x65\x72\x65\144\40\x76\x61\x6c\165\145\163\40\x69\163\40\x6e\157\164\40\166\141\154\151\144\56", PR__MDL__PANEL), 400); goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $owaiikyuwwwmswgc = ManipulateArray::unset($icwicymcioeyeyek, self::muqaqimusmckkieq); $qqwegysogaocgeww = ManipulateArray::unset($icwicymcioeyeyek, self::akywgoyaseymiyka); $yewiaiaauukwsgku = ManipulateArray::unset($icwicymcioeyeyek, self::csiaccacwgeeqwwo); if (email_exists($owaiikyuwwwmswgc)) { goto kqqiegkuqagcqsya; } if (username_exists($yewiaiaauukwsgku)) { goto kkumywowcoycymeo; } $assuqkuiuewumqyu = ManipulateArray::unset($icwicymcioeyeyek, self::oysqakmiwsaqskce); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { goto wyuemgggaqogsmsq; } $oeucsuyqysaciasy = ManipulateWoocommerce::ayseokmqycoqaigc() ? "\143\165\163\164\157\x6d\145\162" : "\x73\x75\x62\163\x63\x72\151\x62\145\x72"; $sogksuscggsicmac = wp_create_user($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (is_wp_error($sogksuscggsicmac)) { goto samwkqgwouggsguc; } $mkucggyaiaukqoce = ManipulateUser::get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { goto acsqgiuageaasiyy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\125\x73\145\162\x20\156\157\164\x20\x66\x6f\x75\156\x64", PR__MDL__PANEL)); goto oomguqikqokqwgku; acsqgiuageaasiyy: $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; mugqyyeayeyggqqk: } ouamogymawucwswu: DecoratorUser::update($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\131\x6f\x75\162\40\x61\x63\x63\x6f\x75\x6e\164\40\x63\x72\x65\x61\164\145\144\40\x73\x75\x63\x63\145\163\163\146\165\x6c\154\x79", PR__MDL__PANEL), $mkucggyaiaukqoce); oomguqikqokqwgku: samwkqgwouggsguc: goto guykyqecgswcsmws; wyuemgggaqogsmsq: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x50\141\163\x73\167\157\162\144\x73\x20\x61\162\x65\40\x6e\x6f\x74\x20\163\141\x6d\x65", PR__MDL__PANEL), 400); guykyqecgswcsmws: goto miweggwqeiaeweia; kkumywowcoycymeo: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\125\163\145\x72\156\141\x6d\145\x20\141\x6c\162\145\x61\144\171\40\145\x78\x69\x73\164\x73\x2c\40\x70\x6c\x65\141\163\145\x20\x65\x6e\164\145\x72\x20\x61\156\157\x74\150\145\162\40\165\163\145\x72\156\141\155\x65", PR__MDL__PANEL), 400); miweggwqeiaeweia: goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\155\x61\151\x6c\40\141\x6c\x72\x65\141\144\x79\40\x65\170\x69\x73\164\163\54\40\x70\154\x65\x61\x73\145\x20\x74\x72\171\40\x46\x6f\x72\147\145\164\40\x50\141\163\163\x77\157\x72\x64", PR__MDL__PANEL), 400); ousiuuwgwkiyikyq: iwekmyyccgiyuecc: return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { wp_logout(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\147\147\x65\144\40\x6f\165\164", PR__MDL__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto ogqmesokykywseys; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\112\127\124\x20\151\163\x20\156\x6f\164\x20\143\157\156\x66\151\x67\x75\162\145\x64\40\160\162\x6f\160\x65\x72\x6c\x79\56", PR__MDL__PANEL), 500); goto ykomgumacooyomsk; ogqmesokykywseys: $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::yuguikokwoymmqem); if ($icwicymcioeyeyek) { goto cwwmimggaaecmucw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\x6e\x74\x65\162\x65\x64\x20\x76\141\x6c\x75\145\163\40\x69\x73\40\156\x6f\x74\x20\x76\x61\154\x69\144\56", PR__MDL__PANEL), 400); goto awoaooyoeoyeeqee; cwwmimggaaecmucw: try { wp_logout(); $mkucggyaiaukqoce = wp_signon($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { goto ikqqskkqqwmwssoo; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\145\x6c\x5f\x61\165\x74\150\137\x63\x6f\x6f\153\151\x65\137\145\170\160\x69\x72\x61\x74\151\x6f\x6e"), DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\151\x73\163" => get_bloginfo("\165\162\x6c"), "\x69\141\164" => $ggmuwmqmcisegoea, "\x6e\142\146" => $ggmuwmqmcisegoea, "\x65\x78\160" => $wekousyuiguacggm, "\x64\x61\x74\141" => [self::meksegaoamowuwoq => [self::gouqcwikiiygyasc => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), "\x74\x6f\x6b\x65\x6e" => $mgegoogckgsumooq, "\x65\x78\160\x69\162\145" => $wekousyuiguacggm]; wp_set_current_user($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); wp_set_auth_cookie($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\x77\x70\137\154\157\147\151\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); goto aomysykcgikegiau; ikqqskkqqwmwssoo: $keccaugmemegoimu = $this->oemauiimmycumcsk($mkucggyaiaukqoce->get_error_message(), 401); aomysykcgikegiau: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } awoaooyoeoyeeqee: ykomgumacooyomsk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mqkmcysgoiaouiwm; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), "\164\x6f\x6b\x65\x6e" => $mgegoogckgsumooq]; mqkmcysgoiaouiwm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kosaqwikueyksqmw; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = [self::meksegaoamowuwoq => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), self::uiwqcumqkgikqyue => [self::ciywsqoeiymemsys => 200], self::vswoiouoaykswgym => "\x61\165\x74\150\x5f\x67\x65\x74\x5f\155\145", "\141\x63\143\157\x75\156\x74" => []]; kosaqwikueyksqmw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
