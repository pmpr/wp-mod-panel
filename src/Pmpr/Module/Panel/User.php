<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63977d9ae0ed5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Field\File; use Pmpr\Common\Foundation\FormMaker\Front\Field\Header; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Error; use WP_User; class User extends Container { const uymswsomcyoqsegc = "\160\x68\x6f\156\145\137\x6e\x75\155\x62\x65\162"; const meweoeakkqyiwuyy = "\165\163\145\162\137\141\x76\x61\164\141\162"; const akoagooquksouwka = "\x75\163\x65\x72\x5f\x65\x6d\141\151\x6c"; const kagqiwogmiguosiw = "\146\x69\162\x73\x74\137\156\x61\155\x65"; const scagkwwiiquocimc = "\x6c\x61\x73\164\137\156\x61\155\145"; const ccyqsqcgksyckkcm = "\x75\x73\x65\x72\137\165\x72\x6c"; const gmyemowoaqyoqwme = "\x6e\x69\143\x6b\x6e\141\x6d\x65"; const cigcassgekcaiigg = "\137\166\145\162\151\x66\x69\x65\144"; const iuwkkyuoyukacwwy = "\156\141\164\x69\157\x6e\x61\154\x5f\x63\157\144\145"; const kmyciqicaqsgiwga = "\156\141\164\x69\157\x6e\141\x6c\x5f\x63\x61\162\144"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\164\137\141\166\x61\164\141\162\137\x64\x61\x74\x61", [$this, "\157\161\x73\155\x79\165\167\x77\x67\157\151\171\141\x73\x65\165"], 999, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x70\x61\x6e\145\154\x5f\165\163\145\162\x5f\x67\145\x74\x5f\x66\151\x65\154\x64\163"), [$this, "\165\147\x6d\x63\145\x63\x63\x67\167\141\x61\x61\x69\147\151\171"], 10, 2); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\x68\157\x77\137\165\163\x65\x72\x5f\160\162\x6f\x66\x69\154\x65", [$this, "\x61\167\x6b\161\x6b\161\x61\x75\x77\x77\165\x71\147\145\167\165"])->qcsmikeggeemccuu("\x65\x64\x69\x74\x5f\165\163\145\x72\137\160\x72\157\146\x69\x6c\x65", [$this, "\141\x77\x6b\x71\x6b\161\x61\x75\x77\167\165\161\147\145\167\165"])->qcsmikeggeemccuu("\x70\145\162\163\157\156\x61\x6c\137\157\160\x74\151\157\156\x73\137\x75\160\x64\x61\x74\x65", [$this, "\155\163\x79\x73\x67\161\145\x65\167\153\161\x67\163\143\x77\145"])->qcsmikeggeemccuu("\x65\144\151\x74\137\165\x73\145\x72\137\x70\x72\157\146\x69\154\x65\137\x75\x70\x64\x61\x74\145", [$this, "\x6d\x73\x79\x73\147\x71\145\145\167\153\161\x67\x73\143\x77\x65"]); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { if (!DecoratorUser::scmcyesmmikkucie()) { goto myoicgcuugciueis; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto qwigomakwmyiwkgo; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if (isset($_POST[$aokagokqyuysuksm])) { goto qogqewiwmwiwskgm; } $eqgoocgaqwqcimie = 0; goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $eqgoocgaqwqcimie = 1; qgoiooayqmqqsiok: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); qwigomakwmyiwkgo: qiaqsassksqiuyae: } cecuyayqoioasumi: myoicgcuugciueis: $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); if (!$ikgwqyuyckaewsow) { goto mkwskuycuyguqqok; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto kuicqywysciceggs; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm, ''); $quuosgimaqwocmmk = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm . self::mswocgcucqoaesaa, ''); if (!($aiowsaccomcoikus instanceof File && is_numeric($quuosgimaqwocmmk))) { goto cuykwgmswkskqkyi; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $quuosgimaqwocmmk, $mkucggyaiaukqoce); cuykwgmswkskqkyi: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); kuicqywysciceggs: csscmcacoikwsecs: } asmecuqiyyswueqe: mkwskuycuyguqqok: } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if (!DecoratorUser::scmcyesmmikkucie()) { goto sqiciiuwmykocycc; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto iomcaiwewsawiamu; } if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto kiqogmwcgcamwiig; } $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = MetaBox::wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg(ManipulateUser::igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce) ? "\x6f\x6e" : "\157\x66\146"); $eqgoocgaqwqcimie = $aiowsaccomcoikus->qooeaookuemoqecm(); $wwgucssaecqekuek = ["\143\x6c\141\x73\163" => "\155\164\x2d\x32"]; if ($aiowsaccomcoikus instanceof File) { goto kwagwqyusyiyoaqs; } $eqgoocgaqwqcimie = ManipulateHTML::ciuuiyckmsygceis($eqgoocgaqwqcimie, $wwgucssaecqekuek); goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: $wwgucssaecqekuek["\x73\162\x63"] = $eqgoocgaqwqcimie; $wwgucssaecqekuek[self::qomookamaskuoswk] = 120; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\x73", "\x69\x6d\x67\x2d\x66\x6c\165\151\x64"); $mcqieaigyeeyaksm = ManipulateHTML::qgsekwygcgawekeq("\151\155\147", $wwgucssaecqekuek); $eqgoocgaqwqcimie = ManipulateHTML::yuawgssgauywkiia($mcqieaigyeeyaksm, $eqgoocgaqwqcimie, ["\164\141\162\147\x65\x74" => "\137\142\154\141\156\x6b"]); yowsmsiyimmimemc: $uiyqiwmskuuaiayw[] = [self::gouqcwikiiygyasc => $omuyquqsuicwkeic, self::gsqoooskigukokks => $ieqeegkcmgkmoiyq->render(), self::ciyoccqkiamemcmm => sprintf(__("\126\x61\154\165\x65\x20\157\x66\40\x25\x73\72\40\x25\x73", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw(), $eqgoocgaqwqcimie), self::uissasisiuymwsmu => sprintf(__("\x56\145\162\x69\146\x79\x20\x25\163", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw())]; kiqogmwcgcamwiig: iomcaiwewsawiamu: eqkauqciwewmgeoi: } sciwggaeogcoesiu: sqiciiuwmykocycc: $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto ocokwuuquaokmasc; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->qackogceeomyqyya($aiowsaccomcoikus); if (!$ssigsiuwyemcwmys) { goto cggowoquuiwqkyew; } $ssigsiuwyemcwmys->qigsyyqgewgskemg("\167\x2d\155\144\x2d\65\x30\40\167\55\154\x67\x2d\x32\x35"); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->usuqmwksoeaayaig(''); $yoagueksskqiewiq[] = [self::gouqcwikiiygyasc => $aokagokqyuysuksm, self::gsqoooskigukokks => $ssigsiuwyemcwmys->render(), self::uissasisiuymwsmu => $aiowsaccomcoikus->uikgwcuascgeissw()]; cggowoquuiwqkyew: ocokwuuquaokmasc: uukumskkeggaowck: } eequksumcoogyoem: if (!$yoagueksskqiewiq) { goto yiwiqaqmwiogawym; } echo $this->iuygowkemiiwqmiw("\160\162\157\146\x69\154\x65", [self::qescuiwgsyuikume => __("\x49\x6e\x66\157\x72\x6d\141\x74\x69\157\156\x20\x56\x65\x72\151\146\151\x63\141\x74\x69\x6f\x6e", PR__MDL__PANEL), self::ymckmcsiymwqucoq => $yoagueksskqiewiq, "\x76\145\162\x69\x66\151\143\141\x74\x69\157\x6e\x73" => $uiyqiwmskuuaiayw, "\x76\145\162\151\146\151\143\141\x74\x69\157\156\163\x5f\x74\x69\164\154\x65" => __("\126\x65\x72\151\x66\x69\x61\142\x6c\145\x20\x66\151\145\x6c\x64\x73", PR__MDL__PANEL)]); yiwiqaqmwiogawym: } public function qackogceeomyqyya($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(self::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [self::squoamkioomemiyi => $sqeykgyoooqysmca]; return MetaBox::okmsgamiiemyesao($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\156\x65\154\x5f\x75\x73\x65\162\137\x70\162\x65\x76\x69\145\167\163"), $mcgmicqwgaaqqqcw); if (!$mcgmicqwgaaqqqcw) { goto usqgaogkqgemuima; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if (!($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw, true))) { goto wcesymwqykqoyuqk; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); wcesymwqykqoyuqk: meawswgwagoqgkye: } goacqqsgaaigyuaw: usqgaogkqgemuima: return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $sqwmoeogqwooeukc) { $mkucggyaiaukqoce = ManipulateUser::mikwgiscckkeomia($sqwmoeogqwooeukc); if (!(ManipulateUser::is($mkucggyaiaukqoce) && ($mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($sqwmoeogqwooeukc, self::meweoeakkqyiwuyy)))) { goto mswsoaimesegiiic; } $ywmkwiwkosakssii[self::auqoykcmsiauccao] = $mowgokyeuymuwiew; mswsoaimesegiiic: return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ogomymegcoacqisg = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if (ManipulateValidation::wmcwegoisyeeosqu($ogomymegcoacqisg)) { goto egasokooagakisiy; } $ogomymegcoacqisg = $this->quyeyqecsuasocgs(ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw . self::mswocgcucqoaesaa, $mkucggyaiaukqoce)); egasokooagakisiy: return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if (!$aiooqyausygaasqm) { goto kecwuwwcwokuksyq; } $ogomymegcoacqisg = ManipulateArray::get(ManipulateAttachment::uikkssqcoewckces((int) $aiooqyausygaasqm), 0); kecwuwwcwokuksyq: return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto twkmiuomimomscew; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto igymseewwyiocoug; } if (!(!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa())) { goto sukskmcwsoysiuqu; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\160\141\x6e\x65\x6c\x5f\165\163\x65\162\x5f\x73\x61\x76\145\137\x66\x69\145\x6c\144"), $aiowsaccomcoikus, $euwkouuykmaieusi); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x70\x61\156\x65\x6c\x5f\165\163\145\162\x5f\163\x61\166\x65\x5f\x66\x69\145\154\x64\137{$aokagokqyuysuksm}"), $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case self::meweoeakkqyiwuyy: case self::kmyciqicaqsgiwga: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto ygkcacsyyckescqs; } $aiooqyausygaasqm = ManipulateFile::lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { goto ickcmqoiosquugwe; } $sogksuscggsicmac[self::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $ogomymegcoacqisg = $this->quyeyqecsuasocgs($aiooqyausygaasqm); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $ogomymegcoacqisg, $ycoeoaakqyskgykq); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $aiooqyausygaasqm, $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; qmeoaqmsuseueqiy: ygkcacsyyckescqs: goto goeoymmqqqeeoime; case self::ccyqsqcgksyckkcm: case self::gmyemowoaqyoqwme: case self::scagkwwiiquocimc: case self::kagqiwogmiguosiw: case self::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; goto goeoymmqqqeeoime; default: if ($aokagokqyuysuksm === self::iuwkkyuoyukacwwy && !ManipulateValidation::iuceiykuqcqkwsoa($euwkouuykmaieusi) || $aokagokqyuysuksm === self::uymswsomcyoqsegc && !ManipulateValidation::ggkeeqsuoskqeimq($euwkouuykmaieusi)) { goto cuoqqgaygogsmmic; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, esc_attr($euwkouuykmaieusi), $ycoeoaakqyskgykq); goto cgewcsueoyaeikgm; cuoqqgaygogsmmic: $this->yqkwsouguwgoywcw(sprintf(__("\x25\163\x20\x69\x73\x20\156\x6f\x74\40\141\40\166\x61\x6c\151\x64\x20\x25\163", PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->uikgwcuascgeissw())); cgewcsueoyaeikgm: goto goeoymmqqqeeoime; } eiawsoasmscmqswa: goeoymmqqqeeoime: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf("\x25\x73\74\x62\162\x3e\x25\163", __("\146\x61\x69\154\145\x64\40\x75\x70\x64\141\164\x65\x20\x70\x72\x6f\146\x69\x6c\145\x3a", PR__MDL__PANEL), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)), 400); } sukskmcwsoysiuqu: igymseewwyiocoug: qmiwsequckckoaei: } qgegkeomwscwwiuw: if ($ecukkacusqswqoem) { goto mqccmesakuemceqi; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\145\162\x65\40\x69\x73\x20\156\157\164\150\151\x6e\147\40\x66\x6f\x72\40\165\x70\x64\x61\164\x65", PR__MDL__PANEL), 400); goto eyiamcekkgkiawqy; mqccmesakuemceqi: DecoratorUser::update($mkucggyaiaukqoce); eyiamcekkgkiawqy: twkmiuomimomscew: return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto sycygoiaiqqageym; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { goto ycakugokkqkuqyiu; } $sogksuscggsicmac = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\145\x6c\x5f\x70\x72\x6f\x66\151\x6c\x65\137\166\141\154\x69\144\141\164\x69\157\156\x5f\x69\x6e\160\165\164"), true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto siqagquguiemuoku; } switch ($aokagokqyuysuksm) { case self::ccyqsqcgksyckkcm: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto ieumumsgyguceusy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\145\40\x55\x72\154\40\171\x6f\165\x20\145\156\164\145\x72\145\x64\x20\151\x73\40\156\x6f\x74\x20\166\141\154\151\144", PR__MDL__PANEL), 400); ieumumsgyguceusy: goto qcessicwuikwqsis; case self::akoagooquksouwka: if (ManipulateValidation::qkgmsqgmwoamekyk($euwkouuykmaieusi)) { goto coywmiyqgsweuiic; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\124\x68\x65\x20\105\155\141\151\154\40\171\157\x75\x20\x65\x6e\164\145\x72\145\144\40\151\163\40\156\157\164\40\x76\141\x6c\151\144", PR__MDL__PANEL), 400); coywmiyqgsweuiic: goto qcessicwuikwqsis; } yssscwioiyygssec: qcessicwuikwqsis: siqagquguiemuoku: goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x25\163\40\x69\x73\40\141\x20\x72\x65\161\x75\151\162\x65\x20\146\x69\145\x6c\144", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw()), 400); goto kooskuwkuayiuose; oouoqimaaqcmccay: sycygoiaiqqageym: qwcegcuowwgiccos: } kooskuwkuayiuose: return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [ self::meksegaoamowuwoq => null, self::aisguagukaewucii => self::ckmqoekmugkggeym, self::mgsccwumkcawaqcy => self::ALL, self::ackcaikowcokggsc => [], self::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[self::mgsccwumkcawaqcy]) { case self::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); goto gygawoqywkukmqee; case self::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); goto gygawoqywkukmqee; } kciouyuaqkyqomam: gygawoqywkukmqee: $mkucggyaiaukqoce = $ywmkwiwkosakssii[self::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\x65\154\x5f\160\x72\157\146\151\154\x65\x5f\160\x65\x72\x73\157\x6e\141\154\x5f\x66\x69\145\x6c\144\x73"), $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[self::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if (!$kmogksmigykusaem) { goto wwkgkaecgiwggcck; } $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); wwkgkaecgiwggcck: $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto miyqyeiwquwsacsm; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!(!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum, true))) { goto qkcyqocqqwmqgqww; } switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::ckmqoekmugkggeym: if (!$kmogksmigykusaem) { goto iggyqogweyosuikc; } if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco, true)) { goto mosqsmqimqgqoase; } if ($aiowsaccomcoikus instanceof Header) { goto ayyweymyuuiauamo; } $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (!in_array($aokagokqyuysuksm, $okaqsamoiqqumygk, true)) { goto iqcogmsguwoikame; } $aiowsaccomcoikus->eumecwmqmukqgyea(); iqcogmsguwoikame: if (!in_array($aokagokqyuysuksm, $gcygmsqykaykyyim, true)) { goto cmqucgoewuyieoyk; } $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if (!ManipulateUser::igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { goto gimmuoqwckiseaik; } $aiowsaccomcoikus->cekywgkuyuckekeg(); gimmuoqwckiseaik: cmqucgoewuyieoyk: if (!$mkucggyaiaukqoce) { goto yqykqysmiquwoasu; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm)); yqykqysmiquwoasu: ayyweymyuuiauamo: goto omugkkesagcyagmk; mosqsmqimqgqoase: $muocgugcqiewywag = false; omugkkesagcyagmk: if (!$aiowsaccomcoikus instanceof Header) { goto kqksuugcgsyeoayy; } if (!(isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu)) { goto ygcsmkuycoagwyou; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); ygcsmkuycoagwyou: $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; kqksuugcgsyeoayy: iggyqogweyosuikc: if (!$muocgugcqiewywag) { goto qqewoyookaskiuek; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; qqewoyookaskiuek: goto kiwqkcaekqqyuegq; case self::emgcgiseaoouacge: default: if ($aiowsaccomcoikus instanceof Header) { goto ssoucoucsgccekwe; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); ssoucoucsgccekwe: goto kiwqkcaekqqyuegq; } quwcqmyokicssyew: kiwqkcaekqqyuegq: qkcyqocqqwmqgqww: miyqyeiwquwsacsm: qsygcycwieukkgwc: } umgaesggesswoaqe: if (!($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]))) { goto eegqyykygiccaoeo; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); eegqyykygiccaoeo: return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { return [Form::wowyaacgaccyeici(__("\x55\163\x65\x72\40\111\x6e\x66\x6f", PR__MDL__PANEL)), Form::kimoeccokowuaiic(self::meweoeakkqyiwuyy, __("\x41\166\x61\164\141\162", PR__MDL__PANEL))->scmsukieucuekmki()->wsacuksekeaemucu(204800), Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\x46\151\162\163\x74\40\x4e\141\x6d\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\x4c\141\163\164\x20\116\x61\155\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::gmyemowoaqyoqwme, __("\x4e\151\143\x6b\40\116\x61\155\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::wowyaacgaccyeici(__("\x43\x6f\156\x74\141\x63\x74\40\111\x6e\x66\157", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::akoagooquksouwka, __("\105\155\x61\x69\154", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::yeegwaaeowmycesi)->mkiaygiogeeyogqm(false), Form::ymuegqgyuagyucws(self::ccyqsqcgksyckkcm, __("\x57\145\x62\x73\x69\164\x65", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $ikgwqyuyckaewsow = [Form::ymuegqgyuagyucws(self::uymswsomcyoqsegc, __("\115\x6f\142\x69\154\145", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::iacqisugsscswegy)->smigkcmumwkgamkk(), Form::wowyaacgaccyeici(__("\126\145\162\151\x66\x69\x63\141\164\x69\157\x6e\x20\111\156\146\157\162\x6d\141\x74\x69\157\156", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::iuwkkyuoyukacwwy, __("\x4e\x61\x74\151\x6f\x6e\x61\x6c\x20\x43\157\144\x65", PR__MDL__PANEL))->igmaewykumgwoaoy("\155\141\170\154\x65\x6e\x67\164\x68", 10)->sqcsseccsaqsoyqy()->suaookwiwycuwmuk("\156\x61\164\x69\x6f\156\x61\154\x2d\x63\157\x64\145"), Form::kimoeccokowuaiic(self::kmyciqicaqsgiwga, __("\116\141\164\151\x6f\156\141\154\40\x43\141\x72\144", PR__MDL__PANEL))->esauscaiuyiikmgc()->wsacuksekeaemucu(204800)]; return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\145\154\x5f\165\163\x65\162\x5f\x63\165\163\164\157\x6d\x5f\x66\151\x65\154\144\163"), $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto soqqemyioggmoakg; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); soqqemyioggmoakg: wmmggowmigekyoso: } ywqgcegomwaiuquc: return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw) { if (in_array($uusmaiomayssaecw, [self::meweoeakkqyiwuyy, self::kmyciqicaqsgiwga], true)) { goto eeqesooyqagwawae; } if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { goto acaqummmoyiemqss; } $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); goto suswcqoyyqkkquuo; acaqummmoyiemqss: $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; suswcqoyyqkkquuo: goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); oqugqwcyomiaaoqu: return $eqgoocgaqwqcimie; } }
