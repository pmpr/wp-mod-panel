<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63977d9ae0ed5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\x70\162\x6f\146\x69\x6c\145"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\57\165\x70\144\x61\164\145", ["\x61\162\147\x73" => [], "\155\x65\x74\150\x6f\x64\163" => self::qucyckeykeuuaquw, "\143\141\154\x6c\142\141\143\153" => [$this, "\x75\x70\144\x61\x74\145"]]); $this->register("\57\147\x65\164\x2d\146\151\x65\x6c\144\163", ["\x61\x72\147\x73" => [], "\155\145\x74\150\157\144\x73" => self::uigoseacoukemwqc, "\x63\x61\x6c\x6c\x62\141\143\x6b" => [$this, "\165\x67\155\143\145\x63\143\147\167\141\x61\141\151\147\151\x79"]]); $this->register("\x2f\160\x72\x65\x76\x69\145\x77\x73", ["\x61\162\147\x73" => [], "\x6d\145\164\150\x6f\144\x73" => self::uigoseacoukemwqc, "\x63\x61\154\154\x62\141\x63\153" => [$this, "\165\x6d\147\147\x77\x61\167\145\143\163\141\151\x63\x65\x71\x63"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kkumywowcoycymeo; } $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (!is_array($wsqkgswwooewwekw)) { goto guykyqecgswcsmws; } foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); wyuemgggaqogsmsq: } samwkqgwouggsguc: guykyqecgswcsmws: kkumywowcoycymeo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto ogsaaqsaogcqiouy; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { goto kqqiegkuqagcqsya; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\145\147\155\145\156\x74\x20\x66\151\145\154\144\40\151\x73\40\151\163\40\155\x69\x73\x73\x69\x6e\x67", PR__MDL__PANEL), 400); goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (is_wp_error($keccaugmemegoimu)) { goto miweggwqeiaeweia; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x50\x72\157\146\151\x6c\145\x20\165\x70\x64\141\164\145\40\x73\165\x63\x63\x65\163\163\146\165\154\x6c\171\x2e", PR__MDL__PANEL)); miweggwqeiaeweia: ousiuuwgwkiyikyq: iwekmyyccgiyuecc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $wsqkgswwooewwekw = ["\141\143\143\157\165\156\x74" => [Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\x73\145\162\156\x61\155\145", PR__MDL__PANEL))->oykaosmaegqwmoga()->sqcsseccsaqsoyqy()->iygyugseyaqwywyg(ManipulateArray::get($mkucggyaiaukqoce, "\165\163\x65\x72\137\x6c\157\147\x69\x6e")), Form::ymuegqgyuagyucws("\x72\x65\x67\151\x73\x74\x65\x72\145\144", __("\x43\162\145\x61\x74\145\40\x41\x63\143\x6f\x75\x6e\x74\x20\104\x61\x74\x65", PR__MDL__PANEL))->oykaosmaegqwmoga()->iygyugseyaqwywyg($this->eciukqcoqmyacwow(strtotime(ManipulateArray::get($mkucggyaiaukqoce, "\x75\x73\145\162\137\x72\145\147\151\x73\164\x65\x72\145\144")), ManipulateSetting::uyomwmskouyyqyyq()))], "\160\x61\163\163\167\157\162\x64" => [Form::ymuegqgyuagyucws("\x63\165\x72\162\145\156\x74\137\160\141\x73\x73\x77\x6f\162\x64", __("\103\165\x72\x72\x65\x6e\x74\x20\120\141\163\163\167\157\x72\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\156\x65\x77\137\160\x61\163\163\167\x6f\x72\144", __("\x4e\145\167\x20\x50\x61\x73\x73\x77\x6f\x72\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), Form::ymuegqgyuagyucws("\x76\145\x72\x69\146\x79\x5f\160\x61\x73\163\x77\x6f\162\144", __("\x56\x65\162\x69\x66\x79\40\x50\141\x73\x73\167\157\162\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\160\145\x72\x73\157\x6e\141\154" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\x6e\145\154\137\160\162\157\x66\151\154\x65\x5f\x73\145\147\x6d\x65\x6e\x74\x73\137\x66\151\145\154\x64\163"), $wsqkgswwooewwekw); return ManipulateArray::get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
