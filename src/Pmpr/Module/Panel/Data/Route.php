<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cefafa30515             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\Data; use Pmpr\Common\Foundation\Data\Data; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Module\Panel\Panel; class Route extends Data { use ToArrayTrait; protected $parent = null; protected $redirect = false; protected ?array $meta = []; protected int $priority = 1; protected ?string $key = null; protected bool $enable = true; protected ?string $link = null; protected ?string $name = null; protected ?string $icon = null; protected ?string $path = null; protected bool $divider = false; protected ?string $title = null; protected ?array $children = []; protected bool $showInMenu = true; protected ?string $component = null; protected ?string $description = null; public function __construct(string $uusmaiomayssaecw = null) { $this->key = $uusmaiomayssaecw; $this->qksaqgcokiqamueg($uusmaiomayssaecw); } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qmgcisuuikgmqcsu() : ?string { return $this->link; } public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self { $this->faioisokmmaeimoo(); $this->link = $iwywmkygwewiamwm; return $this; } public function wywmmeyauqkeskeq(bool $oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { $this->giwmekimakcaawsq(self::eqkeooqcsscoggia, $ukwokcuqauuosmoo); $this->description = $ukwokcuqauuosmoo; return $this; } public function faioisokmmaeimoo($ioakuqckwescecsy = true) : self { if ($ioakuqckwescecsy) { goto hoeeyiowekaeemko; } $this->giwmekimakcaawsq("\162\x65\144\151\162\x65\x63\x74", true); goto kymkucucyeoeikim; hoeeyiowekaeemko: $this->redirect = true; kymkucucyeoeikim: return $this; } public function esccuisocaaouywi($gwqgmkqcgwwmweom) : self { $this->redirect = $gwqgmkqcgwwmweom; return $this; } public function yqeeiukmseiyuici() : array { $gwqgmkqcgwwmweom = []; $okcscwesammossuq = $this->mmoaikqueyiwcesm(); if (empty($okcscwesammossuq)) { goto qicwaskssogcokgm; } $wcgsoqmmciswkmiq = reset($okcscwesammossuq); if (!($wcgsoqmmciswkmiq instanceof Route && !$wcgsoqmmciswkmiq->cqyswgsawqcqagee())) { goto usquiuuyiyqaeyiu; } $gwqgmkqcgwwmweom = [self::NAME => $wcgsoqmmciswkmiq->eyeeaqcaaugamymu()]; usquiuuyiyqaeyiu: qicwaskssogcokgm: return $gwqgmkqcgwwmweom; } public function eyeeaqcaaugamymu() : ?string { $aiieyweysaukqemc = $this->cisyiemkeykgkomc(); $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia(); if (!$omwmuycmeqcqokom instanceof Route) { goto uguigkcmukuouway; } $egcmyoygeaayoowa = $omwmuycmeqcqokom->eyeeaqcaaugamymu(); $aiieyweysaukqemc = "{$egcmyoygeaayoowa}\x5f{$aiieyweysaukqemc}"; uguigkcmukuouway: return $aiieyweysaukqemc; } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->meta[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function gwckcieqcmsaysow($uusmaiomayssaecw) : bool { return isset($this->meta[$uusmaiomayssaecw]); } public function kygqaqiwaucqacqm() : bool { return $this->showInMenu; } public function wiskakymeaywyeuw(bool $cyiwaggmwimigmcc) : self { $this->showInMenu = $cyiwaggmwimigmcc; return $this; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function cqusmgskowmesgcg() : ?string { return $this->component; } public function askmmuauqcuuqsea(?string $wksoawcgagcgoask) : self { $this->component = $wksoawcgagcgoask; return $this; } public function cqyswgsawqcqagee() : bool { return $this->divider; } public function gckcwqgiewywsgeq() : self { $this->divider = true; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; $this->giwmekimakcaawsq(self::qgqyauaqwqmqseim, $wkaqekwwgqsqwcoi); return $this; } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qksaqgcokiqamueg(?string $mkomwsiykqigmqca) : self { $this->path = $mkomwsiykqigmqca; return $this; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->giwmekimakcaawsq(self::qescuiwgsyuikume, $meqocwsecsywiiqs); $this->title = $meqocwsecsywiiqs; return $this; } public function mmoaikqueyiwcesm() : ?array { return $this->children; } public function kkisyguyosoyymqs() : bool { return !empty($this->mmoaikqueyiwcesm()); } public function pmouaioykaoceyag(Route $wcgsoqmmciswkmiq) : self { $wcgsoqmmciswkmiq->mmuyuqussqkgkega($this); $this->children[$wcgsoqmmciswkmiq->cisyiemkeykgkomc()] = $wcgsoqmmciswkmiq; return $this; } public function eswyoccyuiyiqkco(array $okcscwesammossuq) : Route { foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->pmouaioykaoceyag($wcgsoqmmciswkmiq); esuiysskoweawsue: } uqqaiagaeqgqgaiy: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->name = $this->eyeeaqcaaugamymu(); if ($this->cqyswgsawqcqagee()) { goto aegysmeecgcgayyw; } if (!(!$this->cqusmgskowmesgcg() && !$this->qmgcisuuikgmqcsu())) { goto gaomwagkcciesyqy; } $this->askmmuauqcuuqsea(ucfirst(ManipulateString::qoqowykumameucwa($this->aakmagwggmkoiiyu()))); gaomwagkcciesyqy: goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $this->qksaqgcokiqamueg(''); suqkuqygkkgwyaie: $gwqgmkqcgwwmweom = $this->redirect; if (is_bool($gwqgmkqcgwwmweom) && $gwqgmkqcgwwmweom) { goto wiysogeqqwgioyka; } if (!$this->gwckcieqcmsaysow("\162\x65\144\151\x72\x65\143\164")) { goto soaccwqimeksgwiw; } $this->giwmekimakcaawsq("\162\145\x64\151\x72\145\x63\x74", $this->yqeeiukmseiyuici()); soaccwqimeksgwiw: goto skkamseieeusycye; wiysogeqqwgioyka: $this->redirect = $this->yqeeiukmseiyuici(); skkamseieeusycye: $mkucggyaiaukqoce = ManipulateArray::get($ywmkwiwkosakssii, self::meksegaoamowuwoq); $aqmwamyiwgeeymqa = ManipulateArray::get($ywmkwiwkosakssii, self::qgeesceacsmeqacu); $okcscwesammossuq = DecoratorHook::sscegwueamckwmcy("\160\141\x6e\145\x6c\137\x72\x6f\x75\x74\145\x5f{$this->cisyiemkeykgkomc()}\137\x63\x68\x69\154\x64\x72\145\x6e", $this->mmoaikqueyiwcesm(), $mkucggyaiaukqoce, $aqmwamyiwgeeymqa); if (!$okcscwesammossuq) { goto ewymsmkkiksgwysk; } $sacmkccceuywoqsq = []; foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { if (!$wcgsoqmmciswkmiq instanceof Route) { goto giaacoqqqsekcayy; } $wcgsoqmmciswkmiq->mmuyuqussqkgkega($this); $sacmkccceuywoqsq[$wcgsoqmmciswkmiq->cisyiemkeykgkomc()] = $wcgsoqmmciswkmiq->sacmkccceuywoqsq(true, $ywmkwiwkosakssii); giaacoqqqsekcayy: syiqkaasoueowwui: } cgiscsqwwgqqaeqi: $this->children = ManipulateArray::yaeiiwwyckwugsem($sacmkccceuywoqsq); ewymsmkkiksgwysk: if (!$this->ygqycmmkoiuocoia() instanceof Route) { goto cmegwsegsosyqcai; } $this->mmuyuqussqkgkega($this->ygqycmmkoiuocoia()->cisyiemkeykgkomc()); cmegwsegsosyqcai: } }
