<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a7d22958e             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Panel\Data\Route; use Pmpr\Package\Panel\Setting as OptionsSetting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\162\x6f\x75\164\x65"; parent::__construct(); } public function register_routes() { $this->register("\57\154\151\x73\x74", ["\x61\x72\147\x73" => [], "\x6d\x65\x74\x68\x6f\144\x73" => self::READABLE, "\143\x61\154\154\x62\141\143\x6b" => [$this, "\143\x69\165\x67\x77\157\x6f\141\x73\141\x71\x63\171\167\x61\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { goto ciucewqgyoiouesq; oyiuyywyeoskckuw: foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { goto uoeasoimegouymka; aoquoewagkseayug: oocuemosmeeekgas: goto osuscoaaomwcqkew; egsycocugqyyswsi: $suuagcecoyuweoqk[$cociqcumeacycoeq->aakmagwggmkoiiyu()] = $cociqcumeacycoeq->sacmkccceuywoqsq(true, ["\162\x65\161\x75\x65\x73\164" => $aqmwamyiwgeeymqa, self::USER => $mkucggyaiaukqoce]); goto qiaimmucomukkeka; qiaimmucomukkeka: qkcsykuocwuyaice: goto aoquoewagkseayug; uoeasoimegouymka: if (!$cociqcumeacycoeq instanceof Route) { goto qkcsykuocwuyaice; } goto egsycocugqyyswsi; osuscoaaomwcqkew: } goto goqmywuiicciasyk; cgmgqucewwssmicq: $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\154\x61\171\x6f\x75\164")->faioisokmmaeimoo()->qksaqgcokiqamueg("\x2f")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\x6e\x65\154\x4c\141\x79\157\x75\x74")->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x75\163\145\x72")->faioisokmmaeimoo()->askmmuauqcuuqsea("\120\x61\x6e\145\154\x55\163\x65\162")->gswweykyogmsyawy(__("\x55\163\x65\x72", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\162\157\146\151\x6c\145")->faioisokmmaeimoo()->askmmuauqcuuqsea("\x50\141\x6e\x65\154\120\162\157\x66\x69\x6c\145")->gswweykyogmsyawy(__("\x55\x73\x65\x72\40\x50\162\157\146\151\x6c\145", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_PEN)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\157\x76\145\162\166\x69\x65\167")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\x61\x6e\x65\154\x50\x72\157\x66\151\x6c\145\117\166\145\x72\166\x69\145\x77")->gswweykyogmsyawy(__("\120\x72\157\146\x69\154\145\40\x4f\x76\145\x72\x76\151\x65\167", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_LAYERS))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\145\162\163\x6f\x6e\141\x6c")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\156\x65\154\x50\x72\x6f\x66\x69\154\145\x50\x65\162\163\x6f\156\x61\154")->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->gswweykyogmsyawy(__("\120\x65\x72\x73\x6f\x6e\141\154\x20\111\x6e\x66\x6f\x72\155\141\164\151\157\x6e", PR__PKG__PANEL))->gucwmccyimoagwcm(__("\125\x70\x64\x61\164\x65\40\x79\157\165\x72\40\x70\x65\x72\x73\x6f\156\x61\154\40\x69\x6e\146\x6f\x72\155\141\164\x69\157\156", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\141\143\143\x6f\x75\x6e\164")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\156\x65\x6c\x50\x72\x6f\146\x69\x6c\x65\x41\x63\x63\157\165\x6e\x74")->gswweykyogmsyawy(__("\101\x63\143\157\165\x6e\164\40\111\x6e\x66\157\x72\x6d\x61\x74\x69\x6f\x6e", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_CIRCLE_USER)->gucwmccyimoagwcm(__("\x53\x65\145\x20\171\x6f\165\x72\x20\141\x63\x63\x6f\x75\156\x74\x20\x69\x6e\146\157\x72\x6d\x61\164\x69\x6f\x6e", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\141\x73\163\167\x6f\x72\x64")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\x50\141\156\x65\154\120\x72\157\x66\151\x6c\x65\120\x61\x73\x73\167\x6f\162\144")->gswweykyogmsyawy(__("\103\150\x61\x6e\x67\x65\40\x50\141\163\x73\x77\157\162\x64", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_UNLOCK_KEYHOLE)->gucwmccyimoagwcm(__("\x43\x68\141\x6e\x67\x65\x20\171\x6f\x75\x72\x20\141\x63\143\157\165\156\x74\x20\x70\x61\163\163\x77\x6f\162\x64", PR__PKG__PANEL)))))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x6d\157\x64\165\x6c\145")->faioisokmmaeimoo()->jyumyyugiwwiqomk(50)->askmmuauqcuuqsea("\x50\x61\x6e\145\x6c\115\157\144\x75\x6c\x65")->gswweykyogmsyawy(__("\x4d\157\144\165\154\145\163", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG)); goto mkomygccqkmkumsi; wkgskiuiukiuyque: $suuagcecoyuweoqk = []; goto oyiuyywyeoskckuw; ussceseaimqywuiy: $ssygqisoeqwgkquw = OptionsSetting::eiwcuqigayigimak(OptionsSetting::ADD_ADMIN_TO, []); goto oyiuemaaykgkqqam; gqmewagyagamokok: $woaeeewomgcuesaa->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\162\x65\144\151\x72\x65\x63\x74\55\x61\x64\x6d\x69\156")->qoowicksguscqyks(get_admin_url())->wiskakymeaywyeuw(true)->jyumyyugiwwiqomk(PHP_INT_MAX)->gswweykyogmsyawy(__("\101\x64\155\151\x6e\40\x41\x72\x65\141", PR__PKG__PANEL))->saemoowcasogykak(IconBrandInterface::ICON_WORDPRESS)); goto sqmoqymckwsogsqg; ceiwqkyquikcemmo: $woaeeewomgcuesaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\x6e\x65\154\137\x72\145\163\x74\137\x62\x61\x73\x65\137\x72\157\x75\x74\145"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); goto ukomuiwukymcoaso; oyiuemaaykgkqqam: if (!($ssygqisoeqwgkquw && ManipulateUser::esmswawesuyogmik($ssygqisoeqwgkquw, $mkucggyaiaukqoce))) { goto sguskaeaaqcagqgc; } goto gqmewagyagamokok; mkomygccqkmkumsi: if (is_wp_error($mkucggyaiaukqoce)) { goto agkmiayuawacakau; } goto ussceseaimqywuiy; ukomuiwukymcoaso: $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\x6e\x65\x6c\x5f\x72\145\x73\164\x5f\x72\157\165\x74\x65\x73"), [$woaeeewomgcuesaa], $this, $woaeeewomgcuesaa, $mkucggyaiaukqoce); goto wkgskiuiukiuyque; siecswkggyikqkga: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); goto qkuiwoqksgayqqmg; ciucewqgyoiouesq: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto cgmgqucewwssmicq; uycesqqkoeamocgm: agkmiayuawacakau: goto ceiwqkyquikcemmo; sqmoqymckwsogsqg: sguskaeaaqcagqgc: goto uycesqqkoeamocgm; goqmywuiicciasyk: syuaummumssgwwee: goto siecswkggyikqkga; qkuiwoqksgayqqmg: } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
