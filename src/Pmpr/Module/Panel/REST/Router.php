<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b88690a1d08             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Panel\Data\Route; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\x72\157\x75\x74\145"; parent::__construct(); } public function register_routes() { $this->register("\x2f\154\151\x73\x74", ["\x61\162\x67\163" => [], "\155\x65\x74\x68\x6f\144\163" => self::uigoseacoukemwqc, "\143\x61\154\154\142\141\143\153" => [$this, "\143\x69\x75\x67\167\x6f\x6f\141\163\x61\161\x63\171\167\x61\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $ikamsuaiikaggcga = []; $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\x70\x61\x6e\145\x6c")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x75\x73\x65\x72")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\x55\163\145\162", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::aqykgqywgikckyee)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x72\x6f\x66\151\154\x65")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\125\x73\x65\x72\x20\x50\x72\157\x66\x69\154\145", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::cecmwyoccokoqwum)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x65\x72\163\157\x6e\x61\154")->wiskakymeaywyeuw(false)->saemoowcasogykak(IconFontawesomeInterface::aqykgqywgikckyee)->gswweykyogmsyawy(__("\120\x65\162\163\157\156\x61\x6c\x20\x49\156\x66\x6f\x72\x6d\141\x74\x69\x6f\x6e", PR__MDL__PANEL))->gucwmccyimoagwcm(__("\x55\160\x64\x61\x74\145\40\171\x6f\165\x72\x20\x70\145\x72\163\x6f\x6e\141\154\40\x69\156\x66\x6f\162\155\x61\164\151\x6f\156", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x61\x63\143\x6f\x75\156\x74")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x55\x73\x65\x72\x20\x41\143\x63\x6f\x75\x6e\x74", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::kcoakwwwiwekcami)->gucwmccyimoagwcm(__("\x53\x65\145\40\171\x6f\x75\162\x20\x61\x63\143\x6f\165\x6e\164\40\x69\156\146\157\162\155\141\164\151\157\156", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\x61\163\163\x77\x6f\162\x64")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\103\x68\x61\x6e\x67\145\40\120\x61\163\163\x77\157\x72\x64", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::gioykuwgksiseqwg)->gucwmccyimoagwcm(__("\103\x68\141\156\147\145\x20\171\x6f\x75\162\40\x61\143\143\x6f\165\156\164\40\x70\x61\163\x73\x77\157\162\x64", PR__MDL__PANEL))))); $ikamsuaiikaggcga[] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\156\145\x6c\137\162\x65\x73\164\x5f\x62\141\x73\145\137\162\157\x75\x74\145"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); $ikamsuaiikaggcga[] = $this->oeuiuocwuggewqmk("\160\141\156\145\x6c\137\141\x75\164\150")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\101\x75\x74\x68\x65\x6e\x74\x69\x63\141\x74\x69\157\x6e", PR__MDL__PANEL))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x6c\157\147\151\x6e")->giwmekimakcaawsq("\141\165\x74\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\114\157\147\x69\x6e\40\x74\157\x20\101\143\x63\157\165\156\x74", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\162\145\x67\151\x73\x74\x65\162")->giwmekimakcaawsq("\x61\x75\x74\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x52\145\147\x69\163\x74\x65\x72\x20\x41\156\x20\x41\143\143\x6f\165\156\x74", PR__MDL__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\146\x6f\x72\x67\x6f\x74")->giwmekimakcaawsq("\141\165\164\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x46\157\x72\x67\x6f\164\40\x4d\x79\40\120\141\163\x73\x77\x6f\162\x64", PR__MDL__PANEL))); $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\156\x65\x6c\x5f\162\x65\x73\x74\137\162\157\165\x74\145\163"), $ikamsuaiikaggcga, $this, $mkucggyaiaukqoce); $suuagcecoyuweoqk = []; foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { if (!$cociqcumeacycoeq instanceof Route) { goto kwagwqyusyiyoaqs; } $uomewyckeuqoqocu = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [self::qgeesceacsmeqacu => $aqmwamyiwgeeymqa, self::meksegaoamowuwoq => $mkucggyaiaukqoce]); $suuagcecoyuweoqk[$cociqcumeacycoeq->cisyiemkeykgkomc()] = $uomewyckeuqoqocu; kwagwqyusyiyoaqs: eqkauqciwewmgeoi: } sciwggaeogcoesiu: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
