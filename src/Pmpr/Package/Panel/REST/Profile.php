<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bbc3b001ef             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\x70\162\x6f\x66\151\x6c\x65"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\x2f\x75\x70\144\x61\164\x65", ["\141\162\147\163" => [], "\155\145\164\x68\x6f\x64\163" => self::qucyckeykeuuaquw, "\143\x61\154\x6c\x62\x61\x63\x6b" => [$this, "\165\160\144\x61\164\145"]]); $this->register("\x2f\x67\x65\164\x2d\146\x69\145\x6c\x64\x73", ["\141\162\147\163" => [], "\155\145\x74\x68\x6f\144\x73" => self::uigoseacoukemwqc, "\143\141\154\154\142\x61\143\153" => [$this, "\x75\147\155\143\x65\x63\143\147\167\x61\x61\141\151\147\x69\x79"]]); $this->register("\57\x70\x72\x65\x76\x69\x65\167\163", ["\x61\162\147\x73" => [], "\x6d\145\x74\x68\157\x64\163" => self::uigoseacoukemwqc, "\x63\x61\x6c\154\142\x61\143\x6b" => [$this, "\165\155\x67\147\167\141\167\145\143\x73\x61\x69\x63\x65\161\143"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto eegqyykygiccaoeo; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto miyqyeiwquwsacsm; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); qkcyqocqqwmqgqww: } ssoucoucsgccekwe: miyqyeiwquwsacsm: eegqyykygiccaoeo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto acaqummmoyiemqss; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto suswcqoyyqkkquuo; acaqummmoyiemqss: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto wmmggowmigekyoso; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\145\x67\x6d\145\156\164\x20\x66\x69\x65\154\x64\x20\151\163\40\151\x73\x20\155\151\163\x73\151\x6e\x67", PR__PKG__PANEL), 400); goto soqqemyioggmoakg; wmmggowmigekyoso: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto ywqgcegomwaiuquc; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x72\x6f\x66\x69\x6c\145\x20\x75\160\144\141\164\x65\40\163\165\143\x63\x65\x73\x73\x66\165\154\x6c\171\x2e", PR__PKG__PANEL)); ywqgcegomwaiuquc: soqqemyioggmoakg: suswcqoyyqkkquuo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\x61\x63\143\x6f\165\156\164" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\x73\x65\162\156\141\x6d\145", PR__PKG__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\x75\163\145\x72\137\154\157\147\151\156")), Form::ymuegqgyuagyucws("\162\x65\x67\151\x73\164\145\162\x65\144", __("\103\x72\145\x61\x74\x65\x20\x41\143\x63\x6f\165\156\164\x20\104\141\x74\145", PR__PKG__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\165\163\145\162\x5f\162\145\x67\x69\163\x74\x65\x72\x65\x64")), ManipulateSetting::uyomwmskouyyqyyq()))], "\x70\141\x73\163\167\157\162\x64" => [Form::ymuegqgyuagyucws("\143\x75\162\x72\x65\156\164\x5f\160\141\x73\x73\167\157\162\x64", __("\103\165\x72\162\x65\156\164\40\x50\x61\x73\163\167\x6f\162\144", PR__PKG__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\156\145\x77\137\160\141\x73\163\167\157\x72\144", __("\x4e\x65\x77\40\120\141\163\x73\167\157\x72\x64", PR__PKG__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x76\145\x72\151\x66\x79\137\x70\141\x73\x73\167\x6f\162\x64", __("\126\x65\x72\151\146\171\40\120\x61\x73\x73\167\x6f\162\x64", PR__PKG__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\x70\x65\x72\163\x6f\156\x61\x6c" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\145\154\137\160\162\x6f\x66\151\154\x65\137\x73\145\147\x6d\x65\156\164\163\x5f\x66\x69\x65\154\144\163"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
