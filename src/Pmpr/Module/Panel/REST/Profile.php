<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6264e3ce728f4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\x70\162\x6f\146\x69\x6c\x65"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\57\165\160\144\141\x74\x65", ["\141\162\147\163" => [], "\x6d\x65\x74\150\157\144\x73" => self::qucyckeykeuuaquw, "\143\x61\154\154\142\x61\143\x6b" => [$this, "\165\x70\144\x61\164\145"]]); $this->register("\x2f\147\x65\164\x2d\146\x69\x65\x6c\144\163", ["\x61\x72\x67\x73" => [], "\x6d\x65\x74\150\157\144\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\x62\x61\x63\x6b" => [$this, "\x75\147\155\x63\x65\x63\143\147\x77\x61\x61\141\151\147\151\x79"]]); $this->register("\x2f\x70\x72\145\166\151\145\x77\x73", ["\x61\x72\x67\163" => [], "\x6d\x65\x74\150\157\144\x73" => self::uigoseacoukemwqc, "\143\141\154\x6c\142\x61\x63\x6b" => [$this, "\x75\155\x67\147\x77\x61\x77\x65\143\x73\141\151\143\x65\x71\143"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto acaqummmoyiemqss; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto soqqemyioggmoakg; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); wmmggowmigekyoso: } ywqgcegomwaiuquc: soqqemyioggmoakg: acaqummmoyiemqss: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto foeeqckqsyockkak; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto iekumemscwieugqw; foeeqckqsyockkak: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto eeqesooyqagwawae; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x65\x67\x6d\x65\x6e\164\x20\146\x69\x65\x6c\x64\40\151\x73\x20\x69\163\40\x6d\x69\163\163\151\156\147", PR__MDL__PANEL), 400); goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto suswcqoyyqkkquuo; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x72\157\x66\x69\x6c\x65\x20\165\x70\144\141\x74\145\x20\x73\x75\x63\143\145\x73\163\146\165\154\154\x79\x2e", PR__MDL__PANEL)); suswcqoyyqkkquuo: oqugqwcyomiaaoqu: iekumemscwieugqw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\141\143\x63\x6f\x75\x6e\164" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\x73\x65\x72\x6e\x61\x6d\145", PR__MDL__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\x75\x73\x65\162\x5f\154\157\x67\151\x6e")), Form::ymuegqgyuagyucws("\162\x65\147\151\x73\x74\x65\162\x65\x64", __("\x43\162\145\141\x74\145\x20\101\x63\143\157\x75\x6e\164\40\x44\x61\164\x65", PR__MDL__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\165\x73\145\x72\x5f\x72\x65\x67\x69\x73\164\145\x72\x65\x64")), ManipulateSetting::uyomwmskouyyqyyq()))], "\x70\141\x73\x73\x77\157\162\x64" => [Form::ymuegqgyuagyucws("\x63\x75\x72\x72\x65\156\x74\137\x70\141\x73\163\167\157\162\x64", __("\x43\x75\162\x72\x65\156\164\40\120\x61\x73\163\167\x6f\162\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\156\x65\x77\x5f\160\141\x73\163\167\157\162\x64", __("\116\145\x77\x20\x50\141\x73\x73\x77\x6f\162\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x76\145\x72\x69\x66\x79\x5f\160\141\x73\163\x77\x6f\x72\144", __("\x56\x65\x72\151\146\x79\40\x50\141\163\163\167\x6f\x72\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\x70\x65\162\x73\157\x6e\x61\x6c" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\x65\154\x5f\160\x72\157\146\151\154\145\137\163\145\x67\x6d\145\156\164\x73\137\146\x69\x65\x6c\144\x73"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
