<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d844be96f8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\160\x72\157\x66\x69\x6c\145"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\x2f\165\x70\144\x61\164\x65", ["\141\x72\x67\x73" => [], "\155\145\164\150\157\144\x73" => self::qucyckeykeuuaquw, "\x63\141\x6c\154\142\x61\143\153" => [$this, "\x75\160\x64\141\164\x65"]]); $this->register("\57\x67\145\x74\x2d\x66\x69\x65\x6c\144\163", ["\x61\x72\x67\x73" => [], "\x6d\x65\x74\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\x61\x6c\x6c\x62\x61\x63\x6b" => [$this, "\165\147\x6d\143\x65\x63\x63\147\167\141\x61\141\x69\x67\151\x79"]]); $this->register("\x2f\160\x72\145\x76\151\x65\167\163", ["\x61\x72\147\x73" => [], "\x6d\x65\164\150\157\144\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\154\142\x61\x63\153" => [$this, "\165\155\x67\x67\x77\x61\167\x65\143\163\141\x69\143\145\161\x63"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto eegqyykygiccaoeo; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto miyqyeiwquwsacsm; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); qkcyqocqqwmqgqww: } ssoucoucsgccekwe: miyqyeiwquwsacsm: eegqyykygiccaoeo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto acaqummmoyiemqss; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto suswcqoyyqkkquuo; acaqummmoyiemqss: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto wmmggowmigekyoso; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\145\x67\155\x65\x6e\164\x20\146\x69\x65\154\144\x20\151\x73\40\x69\x73\x20\x6d\151\x73\x73\151\x6e\x67", PR__MDL__PANEL), 400); goto soqqemyioggmoakg; wmmggowmigekyoso: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto ywqgcegomwaiuquc; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x50\162\x6f\146\151\154\x65\x20\x75\x70\x64\x61\x74\x65\x20\163\x75\x63\x63\x65\163\163\x66\x75\154\154\x79\56", PR__MDL__PANEL)); ywqgcegomwaiuquc: soqqemyioggmoakg: suswcqoyyqkkquuo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\141\143\x63\x6f\x75\156\164" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\x55\163\x65\x72\156\141\155\145", PR__MDL__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\x75\x73\x65\162\137\154\157\x67\x69\156")), Form::ymuegqgyuagyucws("\x72\145\x67\151\x73\x74\145\x72\145\x64", __("\x43\162\145\x61\164\145\40\101\143\x63\157\x75\156\x74\40\104\x61\x74\145", PR__MDL__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\x75\163\x65\162\137\162\145\147\151\x73\164\x65\162\145\144")), ManipulateSetting::uyomwmskouyyqyyq()))], "\x70\x61\163\x73\167\x6f\162\x64" => [Form::ymuegqgyuagyucws("\143\165\162\162\145\x6e\x74\137\160\141\163\163\x77\157\162\144", __("\103\x75\x72\162\x65\x6e\x74\x20\x50\x61\163\x73\167\x6f\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x6e\145\167\137\x70\141\163\163\167\x6f\162\144", __("\x4e\145\167\40\120\141\x73\163\167\x6f\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x76\x65\x72\151\x66\x79\x5f\x70\x61\x73\163\x77\x6f\162\144", __("\126\x65\x72\x69\146\171\40\120\x61\163\x73\167\157\x72\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\x70\145\162\x73\x6f\x6e\141\154" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\156\x65\x6c\x5f\x70\162\157\x66\151\154\145\137\163\x65\147\155\145\156\164\x73\x5f\146\151\145\154\x64\x73"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
