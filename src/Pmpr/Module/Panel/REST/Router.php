<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d844be96f8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Panel\Data\Route; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\x72\x6f\165\x74\x65"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x6c\x69\x73\164", ["\x61\x72\x67\163" => [], "\x6d\x65\x74\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\154\154\142\141\x63\x6b" => [$this, "\143\x69\165\147\x77\157\157\x61\163\x61\161\x63\x79\167\x61\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $ikamsuaiikaggcga = []; $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\160\x61\x6e\145\154")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\165\x73\145\x72")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\x55\x73\x65\x72", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::aqykgqywgikckyee)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\162\157\146\151\154\x65")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\125\x73\145\162\x20\120\x72\x6f\146\x69\154\x65", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::cecmwyoccokoqwum)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\x65\162\163\x6f\156\141\154")->wiskakymeaywyeuw(false)->saemoowcasogykak(IconFontawesomeInterface::aqykgqywgikckyee)->gswweykyogmsyawy(__("\x50\x65\162\x73\x6f\x6e\x61\x6c\40\x49\x6e\x66\157\162\155\141\164\151\x6f\x6e", PR__MDL__PANEL))->gucwmccyimoagwcm(__("\x55\x70\x64\141\x74\x65\40\171\157\165\162\40\160\145\162\x73\157\156\x61\x6c\x20\x69\156\x66\157\162\x6d\x61\x74\151\157\156", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\141\143\x63\157\x75\x6e\x74")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x55\x73\x65\162\x20\101\143\143\157\x75\x6e\164", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::kcoakwwwiwekcami)->gucwmccyimoagwcm(__("\123\x65\x65\40\x79\157\165\162\40\x61\143\x63\x6f\165\x6e\164\x20\151\x6e\146\x6f\162\155\x61\x74\151\157\156", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x61\x73\163\x77\157\162\144")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\103\x68\x61\156\x67\145\x20\120\141\x73\x73\x77\157\x72\x64", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::gioykuwgksiseqwg)->gucwmccyimoagwcm(__("\x43\150\x61\156\147\145\x20\171\x6f\165\x72\x20\x61\x63\143\x6f\x75\156\x74\x20\160\141\x73\x73\167\x6f\x72\144", PR__MDL__PANEL))))); $ikamsuaiikaggcga[] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\145\x6c\x5f\x72\145\163\x74\x5f\142\141\163\x65\137\162\157\x75\164\145"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); $ikamsuaiikaggcga[] = $this->oeuiuocwuggewqmk("\x70\x61\x6e\145\x6c\137\141\165\x74\150")->qksaqgcokiqamueg("\x2f")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x41\x75\164\150\145\x6e\164\151\143\141\164\151\157\x6e", PR__MDL__PANEL))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x6c\x6f\147\151\156")->giwmekimakcaawsq("\x61\x75\x74\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x4c\x6f\147\151\x6e\40\164\x6f\40\101\x63\x63\x6f\165\156\164", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x72\x65\x67\x69\x73\164\x65\162")->giwmekimakcaawsq("\141\165\164\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x52\x65\x67\x69\x73\x74\x65\x72\40\101\156\x20\101\143\143\x6f\x75\x6e\164", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\146\x6f\162\x67\x6f\164")->giwmekimakcaawsq("\141\165\x74\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\106\157\x72\x67\157\x74\40\115\171\40\x50\x61\x73\163\x77\157\162\x64", PR__MDL__PANEL))); $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x6e\x65\154\137\x72\145\163\164\x5f\162\157\165\164\145\163"), $ikamsuaiikaggcga, $this, $mkucggyaiaukqoce); $suuagcecoyuweoqk = []; foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { if (!$cociqcumeacycoeq instanceof Route) { goto qgoiooayqmqqsiok; } $uomewyckeuqoqocu = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [self::qgeesceacsmeqacu => $aqmwamyiwgeeymqa, self::meksegaoamowuwoq => $mkucggyaiaukqoce]); $suuagcecoyuweoqk[$cociqcumeacycoeq->cisyiemkeykgkomc()] = $uomewyckeuqoqocu; qgoiooayqmqqsiok: qogqewiwmwiwskgm: } qiaqsassksqiuyae: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
