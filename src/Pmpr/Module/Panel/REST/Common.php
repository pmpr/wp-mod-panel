<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678aa1314cdd1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if (!$this->eaiyocyuoiwqykkq()) { $this->namespace .= "\57\160\141\156\145\154"; } } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if ($aqmwamyiwgeeymqa instanceof WP_REST_Request) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\110\x54\124\x50\137\x41\125\124\110\117\122\111\x5a\x41\x54\x49\x4f\x4e"); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\122\x45\104\111\x52\x45\x43\124\137\x48\x54\124\120\137\x41\x55\124\110\117\x52\x49\132\101\x54\x49\117\116"); } } if (!$mimkcuccekumiiqm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\x54\124\x50\137\x41\125\124\x48\x4f\122\111\x5a\x41\x54\x49\117\x4e", false); if (!$mimkcuccekumiiqm) { $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x52\105\104\111\122\x45\103\x54\x5f\x48\124\124\120\x5f\x41\x55\x54\x48\x4f\x52\111\x5a\101\x54\x49\117\x4e", false); } } if ($mimkcuccekumiiqm) { [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\x42\x65\141\x72\145\x72\40\x25\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\156\165\154\x6c") { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\x48\123\x32\65\x36"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\x72\154")) { if (isset($osyqkeauyomigiuu->data->user->id)) { $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\x72\40\x49\104\40\156\157\164\40\146\157\x75\156\x64\40\151\156\40\x74\150\x65\40\164\157\153\145\x6e", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\40\151\x73\163\x20\144\x6f\40\x6e\x6f\164\40\x6d\x61\x74\x63\150\x20\167\x69\164\x68\40\164\150\151\x73\x20\x73\x65\162\x76\145\162", PR__MDL__PANEL), 401); } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\127\x54\x20\151\163\x20\x6e\x6f\164\x20\143\x6f\x6e\146\151\x67\x75\162\145\x64\40\160\162\157\x70\x65\162\x6c\x79\x2e", PR__MDL__PANEL), 503); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\165\164\150\157\162\x69\x7a\x61\x74\151\x6f\x6e\40\x68\x65\x61\x64\145\162\x20\155\x61\154\146\x6f\x72\x6d\x65\x64\x2e", PR__MDL__PANEL), 401); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\165\164\x68\x6f\162\151\x7a\x61\x74\151\157\156\40\x68\x65\x61\144\145\162\40\156\x6f\164\x20\x66\157\x75\x6e\144", PR__MDL__PANEL), 401); } return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if ($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce[2] ?? 0); if (!$mkucggyaiaukqoce) { $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\x72\40\x6e\157\164\40\146\x6f\165\156\x64", PR__MDL__PANEL), 401); } else { if ($aqykuigiuwmmcieu === Constants::gouqcwikiiygyasc) { $mkucggyaiaukqoce = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); } } } return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\123\x45\103\x55\x52\105\x5f\x41\x55\x54\110\x5f\113\x45\x59", "\141\165\164\x68\x2d\163\145\x63\162\145\x74\x2d\153\x65\x79"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\x61\143\x63\157\165\x6e\164" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\x72\145\x67\151\x73\164\145\x72\145\144" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\x70\145\162\163\x6f\x6e\141\154" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
