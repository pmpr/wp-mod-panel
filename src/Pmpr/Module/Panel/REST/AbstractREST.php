<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb19f36008             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\ORM\DB\Model; use WP_REST_Request; abstract class AbstractREST extends Common { public function __construct() { $this->abstract = true; parent::__construct(); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->issssuygyewuaswa($aqmwamyiwgeeymqa)); } public function agqsmkyeogkaeaww(WP_REST_Request $aqmwamyiwgeeymqa, Model $meywaqqsugaoeyys, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa)); $siykeiywomwwuoiw = $meywaqqsugaoeyys->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); return $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, $ywmkwiwkosakssii); } public function wigcmmuseymwogeg($mkomwsiykqigmqca, $meqocwsecsywiiqs = null) { $iwywmkygwewiamwm = ManipulateServer::oiucukewkckkwiqc($mkomwsiykqigmqca, self::ismwwqmwgmqqocke); if (!$meqocwsecsywiiqs) { goto cecuyayqoioasumi; } $iwywmkygwewiamwm = ManipulateHTML::yuawgssgauywkiia($meqocwsecsywiiqs, $iwywmkygwewiamwm); cecuyayqoioasumi: return $iwywmkygwewiamwm; } }
