<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6530ee7c413b2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Header; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Media; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Error; class User extends Container { const uymswsomcyoqsegc = "\x70\150\157\156\x65\x5f\156\165\155\142\x65\x72"; const meweoeakkqyiwuyy = "\165\x73\x65\x72\x5f\141\x76\x61\164\x61\162"; const akoagooquksouwka = "\x75\x73\145\162\x5f\x65\x6d\141\x69\x6c"; const kagqiwogmiguosiw = "\146\x69\x72\x73\x74\137\x6e\141\155\145"; const scagkwwiiquocimc = "\154\141\x73\x74\137\x6e\x61\x6d\145"; const ccyqsqcgksyckkcm = "\x75\x73\145\x72\137\x75\162\154"; const gmyemowoaqyoqwme = "\x6e\x69\143\x6b\x6e\x61\x6d\145"; const cigcassgekcaiigg = "\137\x76\x65\x72\x69\x66\x69\145\144"; const iuwkkyuoyukacwwy = "\156\141\x74\151\x6f\156\141\x6c\137\x63\x6f\144\145"; const kmyciqicaqsgiwga = "\x6e\141\x74\x69\x6f\156\141\154\x5f\143\141\x72\x64"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\137\141\x76\x61\x74\x61\x72\137\144\x61\164\x61", [$this, "\x6f\161\163\155\x79\x75\167\x77\x67\157\151\171\x61\x73\145\x75"], 999, 2); $this->aqaqisyssqeomwom("\160\x61\x6e\145\x6c\x5f\165\x73\x65\162\137\147\x65\x74\137\146\x69\x65\154\x64\163", [$this, "\165\147\x6d\143\145\x63\x63\147\x77\x61\141\141\x69\147\151\171"], 10, 2); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\x68\x6f\x77\x5f\x75\163\x65\x72\x5f\x70\x72\x6f\146\151\x6c\x65", [$this, "\x61\x77\x6b\161\153\x71\x61\x75\x77\167\x75\161\x67\145\x77\165"])->qcsmikeggeemccuu("\145\144\x69\164\137\x75\x73\145\x72\x5f\160\162\x6f\x66\151\x6c\145", [$this, "\x61\x77\153\161\153\161\x61\165\167\x77\x75\x71\x67\x65\x77\165"])->qcsmikeggeemccuu("\160\145\162\x73\x6f\156\141\x6c\137\157\160\164\x69\157\156\x73\x5f\165\160\144\141\x74\145", [$this, "\155\x73\171\163\147\x71\x65\145\x77\153\x71\147\x73\x63\167\x65"])->qcsmikeggeemccuu("\x65\x64\151\x74\137\x75\163\x65\x72\137\160\x72\x6f\146\151\x6c\145\137\x75\160\x64\x61\x74\x65", [$this, "\155\163\171\163\x67\161\x65\145\x77\x6b\x71\x67\163\143\x77\x65"]); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto sockeswygwcskeuq; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto uaukmuiwskcemcsw; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if (isset($_POST[$aokagokqyuysuksm])) { goto gmwykkouysyaqwqm; } $eqgoocgaqwqcimie = 0; goto ugqwuugsweqgmywk; gmwykkouysyaqwqm: $eqgoocgaqwqcimie = 1; ugqwuugsweqgmywk: $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); uaukmuiwskcemcsw: cogywoqcqummsyus: } eekcoeikaeaaeyii: sockeswygwcskeuq: $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); if (!$ikgwqyuyckaewsow) { goto isgwkwacoyimiauk; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Media && !$aiowsaccomcoikus instanceof Header)) { goto cscusseysqygsoiy; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($aokagokqyuysuksm, ''); $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); cscusseysqygsoiy: uaqackioaiqwcocy: } mkwkkmkgiqiamacc: isgwkwacoyimiauk: } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if (!$this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie()) { goto wusciwkkckmqigms; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Media && !$aiowsaccomcoikus instanceof Header)) { goto kqswcsysqawkcgye; } if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto ewscugeuicukkycc; } $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = $this->caokeucsksukesyo()->wmkogisswkckmeua()->wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg($this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce) ? self::ON : self::OFF); $eqgoocgaqwqcimie = $aiowsaccomcoikus->qooeaookuemoqecm(); $wwgucssaecqekuek = ["\x63\154\141\x73\163" => "\x6d\x74\55\62"]; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($aiowsaccomcoikus instanceof Media) { goto cgyakcqgugqgkqiw; } $eqgoocgaqwqcimie = $swqimwqeweekeusq->ciuuiyckmsygceis($eqgoocgaqwqcimie, $wwgucssaecqekuek); goto eeyyskqsmquyquqw; cgyakcqgugqgkqiw: $wwgucssaecqekuek["\163\162\143"] = $eqgoocgaqwqcimie; $wwgucssaecqekuek[self::qomookamaskuoswk] = 120; $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", "\151\155\147\x2d\x66\x6c\165\151\144"); $mcqieaigyeeyaksm = $swqimwqeweekeusq->qgsekwygcgawekeq("\151\155\147", $wwgucssaecqekuek); $eqgoocgaqwqcimie = $swqimwqeweekeusq->yuawgssgauywkiia($mcqieaigyeeyaksm, $eqgoocgaqwqcimie, ["\164\141\162\147\145\164" => "\x5f\142\154\x61\156\x6b"]); eeyyskqsmquyquqw: $uiyqiwmskuuaiayw[] = [self::gouqcwikiiygyasc => $omuyquqsuicwkeic, self::gsqoooskigukokks => $ieqeegkcmgkmoiyq->render(), self::ciyoccqkiamemcmm => sprintf(__("\126\x61\x6c\x75\x65\x20\x6f\146\40\x25\x73\x3a\40\45\163", PR__MDL__PANEL), $aiowsaccomcoikus->qcgakseyaikigqco(), $eqgoocgaqwqcimie), self::uissasisiuymwsmu => sprintf(__("\126\x65\x72\x69\146\x79\x20\x25\x73", PR__MDL__PANEL), $aiowsaccomcoikus->qcgakseyaikigqco())]; ewscugeuicukkycc: kqswcsysqawkcgye: uegouoiuyoqkcscg: } mggeqkcksyaymcsa: wusciwkkckmqigms: $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Media && !$aiowsaccomcoikus instanceof Header)) { goto amgsueumgaguceaa; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->oocoemuigcmgeymo($aiowsaccomcoikus); if (!$ssigsiuwyemcwmys) { goto mwysseaekcsiesmm; } $ssigsiuwyemcwmys->qigsyyqgewgskemg("\x77\x2d\x6d\144\55\x35\x30\40\167\x2d\x6c\x67\55\x32\x35"); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->usuqmwksoeaayaig(''); $yoagueksskqiewiq[] = [self::gouqcwikiiygyasc => $aokagokqyuysuksm, self::gsqoooskigukokks => $ssigsiuwyemcwmys->render(), self::uissasisiuymwsmu => $aiowsaccomcoikus->uikgwcuascgeissw()]; mwysseaekcsiesmm: amgsueumgaguceaa: ukkcmocamwgiqayu: } iiiccouaaqsyikae: if (!$yoagueksskqiewiq) { goto gygwewcqsmwqismo; } echo $this->iuygowkemiiwqmiw("\x70\162\x6f\x66\151\154\x65", [self::qescuiwgsyuikume => __("\x49\x6e\146\157\x72\x6d\141\164\151\157\x6e\x20\126\x65\x72\151\x66\x69\x63\x61\x74\x69\x6f\x6e", PR__MDL__PANEL), self::ymckmcsiymwqucoq => $yoagueksskqiewiq, "\166\x65\x72\x69\146\x69\x63\141\164\151\157\156\x73" => $uiyqiwmskuuaiayw, "\x76\x65\x72\x69\x66\x69\143\x61\x74\x69\x6f\156\163\137\x74\x69\x74\x6c\145" => __("\x56\145\x72\151\146\151\141\142\x6c\145\x20\x66\151\145\154\144\163", PR__MDL__PANEL)]); gygwewcqsmwqismo: } public function oocoemuigcmgeymo($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(self::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [self::squoamkioomemiyi => $sqeykgyoooqysmca]; return $this->caokeucsksukesyo()->wmkogisswkckmeua()->ocegoqcckecwgays($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->ocksiywmkyaqseou("\x70\141\x6e\x65\154\x5f\x75\x73\x65\162\x5f\160\162\145\x76\x69\145\167\163", $mcgmicqwgaaqqqcw); if (!$mcgmicqwgaaqqqcw) { goto ucqmumuygcywwqma; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if (!($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw, true))) { goto ukqocwewouckikso; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); ukqocwewouckikso: gommacygsykyussk: } uougwgeyiokewkkm: ucqmumuygcywwqma: return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $sqwmoeogqwooeukc) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->mikwgiscckkeomia($sqwmoeogqwooeukc); if (!($yoiguusocukqeayg->is($mkucggyaiaukqoce) && ($mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($sqwmoeogqwooeukc, self::meweoeakkqyiwuyy)))) { goto uykousayyomcaeaa; } $ywmkwiwkosakssii[self::auqoykcmsiauccao] = $mowgokyeuymuwiew; uykousayyomcaeaa: return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ogomymegcoacqisg = $yoiguusocukqeayg->igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ogomymegcoacqisg)) { goto uimeeckqksqeekqq; } $ogomymegcoacqisg = $this->quyeyqecsuasocgs($yoiguusocukqeayg->igawqaomowicuayw($uusmaiomayssaecw . self::mswocgcucqoaesaa, $mkucggyaiaukqoce)); uimeeckqksqeekqq: return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if (!$aiooqyausygaasqm) { goto iuuuususuuuaieem; } $ogomymegcoacqisg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->uikkssqcoewckces((int) $aiooqyausygaasqm), 0); iuuuususuuuaieem: return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto oimkeqocuguqqsqk; } $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto wsesqmcqoiyyqkqi; } if (!(!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa())) { goto iesekaeqeomeuaui; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->ewcsyqaaigkicgse("\x70\x61\156\x65\154\x5f\165\163\x65\x72\137\163\x61\x76\145\137\146\x69\145\x6c\144", $aiowsaccomcoikus, $euwkouuykmaieusi); $this->ewcsyqaaigkicgse("\x70\141\156\x65\x6c\137\x75\163\x65\x72\x5f\163\141\x76\x65\137\146\151\145\x6c\144\137{$aokagokqyuysuksm}", $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case self::meweoeakkqyiwuyy: case self::kmyciqicaqsgiwga: if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto gamqcwuwkikwqoay; } $aiooqyausygaasqm = ManipulateFile::lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { goto yiowgigkkwsoqcci; } $sogksuscggsicmac[self::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); goto ieqesiiageaauiuw; yiowgigkkwsoqcci: $ogomymegcoacqisg = $this->quyeyqecsuasocgs($aiooqyausygaasqm); $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, $ogomymegcoacqisg, $ycoeoaakqyskgykq); $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $aiooqyausygaasqm, $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; ieqesiiageaauiuw: gamqcwuwkikwqoay: goto qukocuwgakemmyga; case self::ccyqsqcgksyckkcm: case self::gmyemowoaqyoqwme: case self::scagkwwiiquocimc: case self::kagqiwogmiguosiw: case self::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; goto qukocuwgakemmyga; default: if ($aokagokqyuysuksm === self::iuwkkyuoyukacwwy && !$cwaqscoiqkokyase->iuceiykuqcqkwsoa($euwkouuykmaieusi) || $aokagokqyuysuksm === self::uymswsomcyoqsegc && !$cwaqscoiqkokyase->qawecuimqqcqwgsw($euwkouuykmaieusi)) { goto mscyggqcesgqqksu; } $yoiguusocukqeayg->ksmqawcowkmegigw($aokagokqyuysuksm, esc_attr($euwkouuykmaieusi), $ycoeoaakqyskgykq); goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $this->yqkwsouguwgoywcw(sprintf(__("\x25\x73\40\151\x73\40\156\157\164\x20\141\x20\166\141\x6c\x69\x64\40\x25\x73", PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->uikgwcuascgeissw())); oyeyomcgkmgymogq: goto qukocuwgakemmyga; } sioekkmekwygemyc: qukocuwgakemmyga: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf("\45\163\74\142\162\x3e\45\x73", __("\146\x61\151\154\145\x64\40\x75\x70\x64\141\x74\x65\40\160\x72\x6f\146\151\x6c\x65\72", PR__MDL__PANEL), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)), 400); } iesekaeqeomeuaui: wsesqmcqoiyyqkqi: uqokiksoqcwwqgio: } kocqqoyymosmuksu: if ($ecukkacusqswqoem) { goto mogkoocsoeuyoqqa; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\x65\162\145\x20\x69\163\x20\156\157\164\x68\x69\156\x67\40\146\157\x72\x20\165\x70\x64\x61\x74\x65", PR__MDL__PANEL), 400); goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->update($mkucggyaiaukqoce); wkwamkgkwykeqkec: oimkeqocuguqqsqk: return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ocywegekakimmwcq; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = $gkyciwoiiisgywcs->get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { goto gswcoeiisamakwii; } $sogksuscggsicmac = $this->ocksiywmkyaqseou("\160\141\156\x65\154\137\x70\x72\157\x66\x69\154\x65\137\166\x61\x6c\151\x64\141\x74\x69\157\x6e\x5f\x69\156\160\165\x74", true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto yoqakewookqoqacm; } switch ($aokagokqyuysuksm) { case self::ccyqsqcgksyckkcm: if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto uckewycoogsogwiy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\x65\40\x55\162\154\x20\x79\157\x75\x20\145\x6e\164\x65\162\x65\144\40\151\x73\40\x6e\x6f\x74\x20\x76\141\x6c\151\144", PR__MDL__PANEL), 400); uckewycoogsogwiy: goto yykqaowwsqgqysmq; case self::akoagooquksouwka: if ($okguqgiiewywyoaq->qkgmsqgmwoamekyk($euwkouuykmaieusi)) { goto ikuuiauwouuqawuw; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\145\x20\105\155\141\151\154\40\171\157\x75\40\x65\x6e\x74\x65\x72\145\x64\x20\151\x73\40\156\157\x74\x20\x76\x61\154\x69\x64", PR__MDL__PANEL), 400); ikuuiauwouuqawuw: goto yykqaowwsqgqysmq; } kwiggogcgciwuwqk: yykqaowwsqgqysmq: yoqakewookqoqacm: goto yuimwyoywaiiqacs; gswcoeiisamakwii: $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\45\163\x20\151\x73\40\141\40\x72\145\161\165\151\x72\145\x20\146\151\145\x6c\x64", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw()), 400); goto oeocukauoyosicso; yuimwyoywaiiqacs: ocywegekakimmwcq: suqceasgacskcmkc: } oeocukauoyosicso: return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [ self::meksegaoamowuwoq => null, self::aisguagukaewucii => self::ckmqoekmugkggeym, self::mgsccwumkcawaqcy => self::ALL, self::ackcaikowcokggsc => [], self::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[self::mgsccwumkcawaqcy]) { case self::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); goto emqswoaawgeyosmi; case self::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); goto emqswoaawgeyosmi; } iwsmmkqaoksmocok: emqswoaawgeyosmi: $mkucggyaiaukqoce = $ywmkwiwkosakssii[self::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou("\160\x61\156\x65\x6c\x5f\160\162\157\146\151\x6c\x65\137\x70\x65\162\163\x6f\156\x61\154\x5f\x66\x69\x65\154\x64\163", $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[self::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if (!$kmogksmigykusaem) { goto esikeyqyuikmaiek; } $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); esikeyqyuikmaiek: $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto aueaceeyommgkicu; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!(!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum, true))) { goto zayqqeqgcwkekwws; } switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::ckmqoekmugkggeym: if (!$kmogksmigykusaem) { goto aiccyaswigkaycqk; } if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco, true)) { goto yqagomygmeoecwey; } if ($aiowsaccomcoikus instanceof Header) { goto qsgqwyqaqiowkmco; } $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (!in_array($aokagokqyuysuksm, $okaqsamoiqqumygk, true)) { goto mscgewkcqcoowweg; } $aiowsaccomcoikus->eumecwmqmukqgyea(); mscgewkcqcoowweg: if (!in_array($aokagokqyuysuksm, $gcygmsqykaykyyim, true)) { goto wwukgaquuyoissgy; } $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if (!$yoiguusocukqeayg->igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { goto suqcsgaosywaauuu; } $aiowsaccomcoikus->cekywgkuyuckekeg(); suqcsgaosywaauuu: wwukgaquuyoissgy: if (!$mkucggyaiaukqoce) { goto gsygwgsiawgmqiyi; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm)); gsygwgsiawgmqiyi: qsgqwyqaqiowkmco: goto qikaewekoecykeou; yqagomygmeoecwey: $muocgugcqiewywag = false; qikaewekoecykeou: if (!$aiowsaccomcoikus instanceof Header) { goto usymasgsyqgsuocg; } if (!(isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu)) { goto eucqomyqykgoiuge; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); eucqomyqykgoiuge: $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; usymasgsyqgsuocg: aiccyaswigkaycqk: if (!$muocgugcqiewywag) { goto sqyokemumceysegy; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; sqyokemumceysegy: goto esaqcqqwuussiiwo; case self::emgcgiseaoouacge: default: if ($aiowsaccomcoikus instanceof Header) { goto oqousikwiiqagoyw; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); oqousikwiiqagoyw: goto esaqcqqwuussiiwo; } ikqeeaysmqgcgawq: esaqcqqwuussiiwo: zayqqeqgcwkekwws: aueaceeyommgkicu: qiiigwkqeoewsuwm: } okkmcocqokkskasy: if (!($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]))) { goto mysueeoswqgccmui; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); mysueeoswqgccmui: return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\x55\163\145\x72\40\x49\156\146\157", PR__MDL__PANEL)), $gusoaiguqeaommcc->quaegkgkucwyeiqg(self::meweoeakkqyiwuyy)->gswweykyogmsyawy(__("\101\x76\141\164\x61\162", PR__MDL__PANEL))->scmsukieucuekmki()->wsacuksekeaemucu(204800), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::kagqiwogmiguosiw)->gswweykyogmsyawy(__("\x46\151\162\163\164\40\x4e\x61\x6d\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::scagkwwiiquocimc)->gswweykyogmsyawy(__("\x4c\x61\163\164\x20\x4e\141\155\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::gmyemowoaqyoqwme)->gswweykyogmsyawy(__("\x4e\151\x63\x6b\x20\116\141\155\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\103\157\156\x74\x61\x63\x74\40\x49\x6e\146\157", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::akoagooquksouwka)->gswweykyogmsyawy(__("\x45\155\x61\x69\154", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::yeegwaaeowmycesi)->mkiaygiogeeyogqm(), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::ccyqsqcgksyckkcm)->gswweykyogmsyawy(__("\127\x65\142\163\x69\164\x65", PR__MDL__PANEL))->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->ymuegqgyuagyucws(self::uymswsomcyoqsegc)->gswweykyogmsyawy(__("\115\157\x62\151\154\x65", PR__MDL__PANEL))->smigkcmumwkgamkk()->saemoowcasogykak(IconInterface::iacqisugsscswegy), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__("\x56\x65\x72\151\x66\151\x63\x61\164\x69\x6f\156\40\x49\156\x66\x6f\162\155\141\164\151\157\156", PR__MDL__PANEL)), $gusoaiguqeaommcc->ymuegqgyuagyucws(self::iuwkkyuoyukacwwy)->gswweykyogmsyawy(__("\116\141\164\x69\157\156\141\x6c\x20\x43\x6f\x64\x65", PR__MDL__PANEL))->igmaewykumgwoaoy("\x6d\x61\170\x6c\x65\x6e\147\x74\150", 10)->kqqqugemmqagucuq()->suaookwiwycuwmuk("\156\141\x74\x69\x6f\156\x61\154\x2d\x63\x6f\144\145"), $gusoaiguqeaommcc->quaegkgkucwyeiqg(self::kmyciqicaqsgiwga)->gswweykyogmsyawy(__("\116\141\x74\151\x6f\x6e\x61\154\x20\103\141\x72\144", PR__MDL__PANEL))->ycueqsmmommygueu()->wsacuksekeaemucu(204800)]; return (array) $this->ocksiywmkyaqseou("\160\x61\x6e\x65\154\x5f\x75\163\145\x72\137\x63\165\x73\164\x6f\155\x5f\146\x69\x65\x6c\x64\x73", $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto yuuyikiacmmueosu; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); yuuyikiacmmueosu: ucuoeymyqeokgsya: } egmayaiikwsskgmy: return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw) { if (in_array($uusmaiomayssaecw, [self::meweoeakkqyiwuyy, self::kmyciqicaqsgiwga], true)) { goto syuaummumssgwwee; } if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { goto sguskaeaaqcagqgc; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); goto agkmiayuawacakau; sguskaeaaqcagqgc: $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; agkmiayuawacakau: goto oocuemosmeeekgas; syuaummumssgwwee: $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); oocuemosmeeekgas: return $eqgoocgaqwqcimie; } }
