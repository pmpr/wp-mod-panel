<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6c42424a8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Panel\Data\Route; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\x72\x6f\165\x74\145"; parent::__construct(); } public function register_routes() { $this->register("\x2f\154\x69\163\x74", ["\141\162\147\x73" => [], "\155\x65\x74\x68\157\x64\x73" => self::uigoseacoukemwqc, "\143\141\154\154\x62\x61\143\x6b" => [$this, "\x63\x69\x75\x67\x77\x6f\157\141\163\x61\x71\143\171\167\141\163"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $ikamsuaiikaggcga = []; $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\x70\141\156\x65\154")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\165\x73\x65\162")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\125\x73\x65\x72", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::aqykgqywgikckyee)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\162\157\x66\151\154\x65")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\125\x73\145\162\x20\x50\x72\x6f\x66\x69\x6c\145", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::cecmwyoccokoqwum)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\145\162\x73\x6f\x6e\x61\154")->wiskakymeaywyeuw(false)->saemoowcasogykak(IconFontawesomeInterface::aqykgqywgikckyee)->gswweykyogmsyawy(__("\120\x65\162\163\157\156\x61\154\40\x49\x6e\x66\x6f\162\x6d\141\164\x69\157\x6e", PR__MDL__PANEL))->gucwmccyimoagwcm(__("\x55\160\144\x61\164\x65\x20\x79\x6f\x75\162\x20\160\x65\x72\163\157\156\x61\x6c\x20\151\156\x66\157\x72\x6d\141\164\x69\x6f\x6e", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\141\143\x63\157\x75\x6e\164")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\125\163\145\162\x20\101\x63\x63\157\165\156\164", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::kcoakwwwiwekcami)->gucwmccyimoagwcm(__("\x53\x65\x65\40\x79\157\x75\x72\40\x61\143\x63\157\165\x6e\x74\40\151\x6e\146\157\162\155\141\164\151\157\x6e", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\x61\x73\x73\x77\x6f\x72\x64")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\103\150\x61\x6e\x67\x65\x20\120\141\x73\x73\x77\157\162\x64", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::gioykuwgksiseqwg)->gucwmccyimoagwcm(__("\103\x68\x61\156\x67\x65\40\x79\157\x75\162\40\x61\x63\143\x6f\x75\156\x74\40\160\x61\163\163\x77\x6f\162\144", PR__MDL__PANEL))))); $ikamsuaiikaggcga[] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\145\154\137\x72\x65\163\x74\x5f\x62\141\x73\x65\137\x72\157\165\164\x65"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); $ikamsuaiikaggcga[] = $this->oeuiuocwuggewqmk("\160\141\156\x65\x6c\x5f\x61\165\x74\x68")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\101\x75\x74\150\145\x6e\164\x69\143\141\x74\151\157\156", PR__MDL__PANEL))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\154\157\147\x69\156")->giwmekimakcaawsq("\141\165\164\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x4c\157\x67\x69\x6e\x20\164\157\40\x41\x63\143\x6f\x75\x6e\164", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x72\x65\x67\151\163\164\145\x72")->giwmekimakcaawsq("\141\x75\x74\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\122\x65\x67\x69\163\164\145\x72\x20\101\x6e\x20\x41\x63\x63\x6f\165\156\x74", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\146\157\x72\147\157\x74")->giwmekimakcaawsq("\141\165\164\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x46\157\x72\147\x6f\x74\x20\115\171\x20\x50\x61\163\x73\167\157\162\144", PR__MDL__PANEL))); $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\x6e\145\x6c\137\162\x65\x73\164\137\x72\157\x75\164\145\163"), $ikamsuaiikaggcga, $this, $mkucggyaiaukqoce); $suuagcecoyuweoqk = []; foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { if (!$cociqcumeacycoeq instanceof Route) { goto wsesqmcqoiyyqkqi; } $uomewyckeuqoqocu = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [self::qgeesceacsmeqacu => $aqmwamyiwgeeymqa, self::meksegaoamowuwoq => $mkucggyaiaukqoce]); $suuagcecoyuweoqk[$cociqcumeacycoeq->cisyiemkeykgkomc()] = $uomewyckeuqoqocu; wsesqmcqoiyyqkqi: iesekaeqeomeuaui: } oyeyomcgkmgymogq: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
