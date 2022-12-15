<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: SAMEORIGIN");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " tercero"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " tercero"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/sys__NM__img__NM__oie_transparent (1).png">
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
            <meta name="viewport" content="minimal-ui, width=300, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="apple-touch-icon"   sizes="57x57" href="">
            <link rel="apple-touch-icon"   sizes="60x60" href="">
            <link rel="apple-touch-icon"   sizes="72x72" href="">
            <link rel="apple-touch-icon"   sizes="76x76" href="">
            <link rel="apple-touch-icon" sizes="114x114" href="">
            <link rel="apple-touch-icon" sizes="120x120" href="">
            <link rel="apple-touch-icon" sizes="144x144" href="">
            <link rel="apple-touch-icon" sizes="152x152" href="">
            <link rel="apple-touch-icon" sizes="180x180" href="">
            <link rel="icon" type="image/png" sizes="192x192" href="">
            <link rel="icon" type="image/png"   sizes="32x32" href="">
            <link rel="icon" type="image/png"   sizes="96x96" href="">
            <link rel="icon" type="image/png"   sizes="16x16" href="">
            <meta name="msapplication-TileColor" content="___">
            <meta name="msapplication-TileImage" content="">
            <meta name="theme-color" content="___">
            <meta name="apple-mobile-web-app-status-bar-style" content="___">
            <link rel="shortcut icon" href=""> <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
            <?php
               if ($_SESSION['scriptcase']['display_mobile'] && $_SESSION['scriptcase']['device_mobile']) {
                   $forced_mobile = (isset($_SESSION['scriptcase']['force_mobile']) && $_SESSION['scriptcase']['force_mobile']) ? 'true' : 'false';
                   $sc_app_data   = json_encode([
                       'forceMobile' => $forced_mobile,
                       'appType' => 'form',
                       'improvements' => true,
                       'displayOptionsButton' => false,
                       'displayScrollUp' => true,
                       'scrollUpPosition' => 'A',
                       'toolbarOrientation' => 'H',
                       'mobilePanes' => 'true',
                       'navigationBarButtons' => unserialize('a:3:{i:0;s:2:"NP";i:1;s:2:"FL";i:2;s:2:"RC";}'),
                       'mobileSimpleToolbar' => true,
                       'bottomToolbarFixed' => true
                   ]); ?>
            <input type="hidden" id="sc-mobile-app-data" value='<?php echo $sc_app_data; ?>' />
            <script type="text/javascript" src="../_lib/lib/js/nm_modal_panes.jquery.js"></script>
            <script type="text/javascript" src="../_lib/lib/js/nm_form_mobile.js"></script>
            <link rel='stylesheet' href='../_lib/lib/css/nm_form_mobile.css' type='text/css'/>
            <script>
                $(document).ready(function(){

                    bootstrapMobile();

                });
            </script>
            <?php } ?> <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
<style type="text/css">
.ui-datepicker { z-index: 6 !important }
</style>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/viewerjs/viewer.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/viewerjs/viewer.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_te_fnacimiento button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
<style type="text/css">
	.sc.switch {
		position: relative;
		display: inline-flex;
	}

	.sc.switch span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.switch span {
		background: #DFDFDF;
		width: 22px;
		height: 14px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		padding: 0 3px;
		transition: all .2s linear;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.switch span:before {
		content: '\2713';
		display: inline-block;
		color: white;
		font-size: 10px;
		z-index: 0;
		position: absolute;
		top: 0;
		left: 4px;
	}

	.sc.switch span:after {
		content: '';
		background: white;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 1px;
		left: 1px;
		border-radius: 15px;
		transition: all .2s linear;
		z-index: 1;
	}

	.sc.switch input {
		margin-right: 10px;
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.switch input:disabled + span {
		opacity: 0.35;
	}

	.sc.switch input:checked + span {
		background: #66AFE9;
	}

	.sc.switch input:checked + span:after {
		left: calc(100% - 1px);
		transform: translateX(-100%);
	}

	.sc.radio {
		position: relative;
		display: inline-flex;
	}

	.sc.radio span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.radio span {
		background: #ffffff;
		border: 1px solid #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.radio span:after {
		content: '';
		background: #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		z-index: 1;
		transform: scale(0);
	}

	.sc.radio input {
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.radio input:disabled + span {
		opacity: 0.35;
	}

	.sc.radio input:checked + span {
		background: #66AFE9;
	}

	.sc.radio input:checked + span:after {
		transform: translateX(-100%);
		transform: scale(1);
	}
</style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_tercero/form_tercero_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_tercero_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['last'] : 'off'); ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       if ("off" == Nav_binicio_macro_disabled) { $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       if ("off" == Nav_bretorna_macro_disabled) { $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       if ("off" == Nav_bfinal_macro_disabled) { $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       if ("off" == Nav_bavanca_macro_disabled) { $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
<?php

include_once('form_tercero_mob_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>

<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys.inc.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys_setup.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
<script type="text/javascript">

function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     if ($('#t').length>0) {
         scQuickSearchKeyUp('t', null);
     }
     $("#fast_search_f0_t").select2({
        containerCssClass: 'scGridQuickSearchDivResult',
        dropdownCssClass: 'scGridQuickSearchDivDropdown',
        placeholder: '<?php echo $this->Ini->Nm_lang['lang_srch_all_fields'] ?>',
    });
     $("#cond_fast_search_f0_t").select2({
        containerCssClass: 'scGridQuickSearchDivResult',
        dropdownCssClass: 'scGridQuickSearchDivDropdown',
        minimumResultsForSearch: -1
    });
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchKeyUp(sPos, e) {
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
       else
       {
           $('#SC_fast_search_submit_'+sPos).show();
       }
     }
   }
   function nm_gp_submit_qsearch(pos)
   {
        nm_move('fast_search', pos);
   }
   function nm_gp_open_qsearch_div(pos)
   {
        if (typeof nm_gp_open_qsearch_div_mobile == 'function') {
            return nm_gp_open_qsearch_div_mobile(pos);
        }
        if($('#SC_fast_search_dropdown_' + pos).hasClass('fa-caret-down'))
        {
            if(($('#quicksearchph_' + pos).offset().top+$('#id_qs_div_' + pos).height()+10) >= $(document).height())
            {
                $('#id_qs_div_' + pos).offset({top:($('#quicksearchph_' + pos).offset().top-($('#quicksearchph_' + pos).height()/2)-$('#id_qs_div_' + pos).height()-4)});
            }

            nm_gp_open_qsearch_div_store_temp(pos);
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-down').addClass('fa-caret-up');
        }
        else
        {
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-up').addClass('fa-caret-down');
        }
        $('#id_qs_div_' + pos).toggle();
   }

   var tmp_qs_arr_fields = [], tmp_qs_arr_cond = "";
   function nm_gp_open_qsearch_div_store_temp(pos)
   {
        tmp_qs_arr_fields = [], tmp_qs_str_cond = "";

        if($('#fast_search_f0_' + pos).prop('type') == 'select-multiple')
        {
            tmp_qs_arr_fields = $('#fast_search_f0_' + pos).val();
        }
        else
        {
            tmp_qs_arr_fields.push($('#fast_search_f0_' + pos).val());
        }

        tmp_qs_str_cond = $('#cond_fast_search_f0_' + pos).val();
   }

   function nm_gp_cancel_qsearch_div_store_temp(pos)
   {
        $('#fast_search_f0_' + pos).val('');
        $("#fast_search_f0_" + pos + " option").prop('selected', false);
        for(it=0; it<tmp_qs_arr_fields.length; it++)
        {
            $("#fast_search_f0_" + pos + " option[value='"+ tmp_qs_arr_fields[it] +"']").prop('selected', true);
        }
        $("#fast_search_f0_" + pos).change();
        tmp_qs_arr_fields = [];

        $('#cond_fast_search_f0_' + pos).val(tmp_qs_str_cond);
        $('#cond_fast_search_f0_' + pos).change();
        tmp_qs_str_cond = "";

        nm_gp_open_qsearch_div(pos);
   } if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_tercero']['error_buffer']) && '' != $_SESSION['scriptcase']['form_tercero']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_tercero']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_tercero_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" enctype="multipart/form-data" 
               action="form_tercero_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="te_id" value="<?php  echo $this->form_encode_input($this->te_id) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_tercero_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_tercero_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php if (isset($this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'])) {echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'];} ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['bcancelar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['bcancelar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['bcancelar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['bcancelar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['bcancelar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = ($this->nmgp_botoes['reload'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['breload']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['breload']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['breload']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['breload']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['breload'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "breload", "scBtnFn_sys_format_reload()", "scBtnFn_sys_format_reload()", "sc_b_reload_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-22';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-23';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-24';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-25';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-26';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><input type="hidden" name="te_foto_ul_name" id="id_sc_field_te_foto_ul_name" value="<?php echo $this->form_encode_input($this->te_foto_ul_name);?>">
<input type="hidden" name="te_foto_ul_type" id="id_sc_field_te_foto_ul_type" value="<?php echo $this->form_encode_input($this->te_foto_ul_type);?>">
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">INFORMACIÓN BÁSICA</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_tidentificacion']))
   {
       $this->nm_new_label['te_tidentificacion'] = "TIPO IDENTIFICACION";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_tidentificacion = $this->te_tidentificacion;
   $sStyleHidden_te_tidentificacion = '';
   if (isset($this->nmgp_cmp_hidden['te_tidentificacion']) && $this->nmgp_cmp_hidden['te_tidentificacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_tidentificacion']);
       $sStyleHidden_te_tidentificacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_tidentificacion = 'display: none;';
   $sStyleReadInp_te_tidentificacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_tidentificacion']) && $this->nmgp_cmp_readonly['te_tidentificacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_tidentificacion']);
       $sStyleReadLab_te_tidentificacion = '';
       $sStyleReadInp_te_tidentificacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_tidentificacion']) && $this->nmgp_cmp_hidden['te_tidentificacion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_tidentificacion" value="<?php echo $this->form_encode_input($this->te_tidentificacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_tidentificacion_line" id="hidden_field_data_te_tidentificacion" style="<?php echo $sStyleHidden_te_tidentificacion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_tidentificacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_tidentificacion_label" style=""><span id="id_label_te_tidentificacion"><?php echo $this->nm_new_label['te_tidentificacion']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_tidentificacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_tidentificacion'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_tidentificacion"]) &&  $this->nmgp_cmp_readonly["te_tidentificacion"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion'] = array(); 
    }

   $old_value_te_fnacimiento = $this->te_fnacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_te_fnacimiento = $this->te_fnacimiento;

   $te_autoriza_val_str = "''";
   if (!empty($this->te_autoriza))
   {
       if (is_array($this->te_autoriza))
       {
           $Tmp_array = $this->te_autoriza;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_autoriza);
       }
       $te_autoriza_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_autoriza_val_str)
          {
             $te_autoriza_val_str .= ", ";
          }
          $te_autoriza_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $te_antecedentes_val_str = "''";
   if (!empty($this->te_antecedentes))
   {
       if (is_array($this->te_antecedentes))
       {
           $Tmp_array = $this->te_antecedentes;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_antecedentes);
       }
       $te_antecedentes_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_antecedentes_val_str)
          {
             $te_antecedentes_val_str .= ", ";
          }
          $te_antecedentes_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT Codigo, Tipo  FROM tipodocumento  ORDER BY Tipo";

   $this->te_fnacimiento = $old_value_te_fnacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_tidentificacion'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $te_tidentificacion_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_tidentificacion_1))
          {
              foreach ($this->te_tidentificacion_1 as $tmp_te_tidentificacion)
              {
                  if (trim($tmp_te_tidentificacion) === trim($cadaselect[1])) { $te_tidentificacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_tidentificacion) === trim($cadaselect[1])) { $te_tidentificacion_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="te_tidentificacion" value="<?php echo $this->form_encode_input($te_tidentificacion) . "\">" . $te_tidentificacion_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_te_tidentificacion();
   $x = 0 ; 
   $te_tidentificacion_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_tidentificacion_1))
          {
              foreach ($this->te_tidentificacion_1 as $tmp_te_tidentificacion)
              {
                  if (trim($tmp_te_tidentificacion) === trim($cadaselect[1])) { $te_tidentificacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_tidentificacion) === trim($cadaselect[1])) { $te_tidentificacion_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($te_tidentificacion_look))
          {
              $te_tidentificacion_look = $this->te_tidentificacion;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_te_tidentificacion\" class=\"css_te_tidentificacion_line\" style=\"" .  $sStyleReadLab_te_tidentificacion . "\">" . $this->form_format_readonly("te_tidentificacion", $this->form_encode_input($te_tidentificacion_look)) . "</span><span id=\"id_read_off_te_tidentificacion\" class=\"css_read_off_te_tidentificacion" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_te_tidentificacion . "\">";
   echo " <span id=\"idAjaxSelect_te_tidentificacion\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_te_tidentificacion_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_te_tidentificacion\" name=\"te_tidentificacion\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->te_tidentificacion) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->te_tidentificacion)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_tidentificacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_tidentificacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_identificacion']))
    {
        $this->nm_new_label['te_identificacion'] = "IDENTIFICACION";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_identificacion = $this->te_identificacion;
   $sStyleHidden_te_identificacion = '';
   if (isset($this->nmgp_cmp_hidden['te_identificacion']) && $this->nmgp_cmp_hidden['te_identificacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_identificacion']);
       $sStyleHidden_te_identificacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_identificacion = 'display: none;';
   $sStyleReadInp_te_identificacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_identificacion']) && $this->nmgp_cmp_readonly['te_identificacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_identificacion']);
       $sStyleReadLab_te_identificacion = '';
       $sStyleReadInp_te_identificacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_identificacion']) && $this->nmgp_cmp_hidden['te_identificacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_identificacion" value="<?php echo $this->form_encode_input($te_identificacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_identificacion_line" id="hidden_field_data_te_identificacion" style="<?php echo $sStyleHidden_te_identificacion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_identificacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_identificacion_label" style=""><span id="id_label_te_identificacion"><?php echo $this->nm_new_label['te_identificacion']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_identificacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_identificacion'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_identificacion"]) &&  $this->nmgp_cmp_readonly["te_identificacion"] == "on") { 

 ?>
<input type="hidden" name="te_identificacion" value="<?php echo $this->form_encode_input($te_identificacion) . "\">" . $te_identificacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_identificacion" class="sc-ui-readonly-te_identificacion css_te_identificacion_line" style="<?php echo $sStyleReadLab_te_identificacion; ?>"><?php echo $this->form_format_readonly("te_identificacion", $this->form_encode_input($this->te_identificacion)); ?></span><span id="id_read_off_te_identificacion" class="css_read_off_te_identificacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_identificacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_te_identificacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_identificacion" type=text name="te_identificacion" value="<?php echo $this->form_encode_input($te_identificacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_identificacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_identificacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_nombres']))
    {
        $this->nm_new_label['te_nombres'] = "NOMBRES";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_nombres = $this->te_nombres;
   $sStyleHidden_te_nombres = '';
   if (isset($this->nmgp_cmp_hidden['te_nombres']) && $this->nmgp_cmp_hidden['te_nombres'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_nombres']);
       $sStyleHidden_te_nombres = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_nombres = 'display: none;';
   $sStyleReadInp_te_nombres = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_nombres']) && $this->nmgp_cmp_readonly['te_nombres'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_nombres']);
       $sStyleReadLab_te_nombres = '';
       $sStyleReadInp_te_nombres = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_nombres']) && $this->nmgp_cmp_hidden['te_nombres'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_nombres" value="<?php echo $this->form_encode_input($te_nombres) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_nombres_line" id="hidden_field_data_te_nombres" style="<?php echo $sStyleHidden_te_nombres; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_nombres_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_nombres_label" style=""><span id="id_label_te_nombres"><?php echo $this->nm_new_label['te_nombres']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_nombres']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_nombres'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_nombres"]) &&  $this->nmgp_cmp_readonly["te_nombres"] == "on") { 

 ?>
<input type="hidden" name="te_nombres" value="<?php echo $this->form_encode_input($te_nombres) . "\">" . $te_nombres . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_nombres" class="sc-ui-readonly-te_nombres css_te_nombres_line" style="<?php echo $sStyleReadLab_te_nombres; ?>"><?php echo $this->form_format_readonly("te_nombres", $this->form_encode_input($this->te_nombres)); ?></span><span id="id_read_off_te_nombres" class="css_read_off_te_nombres<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_nombres; ?>">
 <input class="sc-js-input scFormObjectOdd css_te_nombres_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_nombres" type=text name="te_nombres" value="<?php echo $this->form_encode_input($te_nombres) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_nombres_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_nombres_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_apellidos']))
    {
        $this->nm_new_label['te_apellidos'] = "APELLIDOS";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_apellidos = $this->te_apellidos;
   $sStyleHidden_te_apellidos = '';
   if (isset($this->nmgp_cmp_hidden['te_apellidos']) && $this->nmgp_cmp_hidden['te_apellidos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_apellidos']);
       $sStyleHidden_te_apellidos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_apellidos = 'display: none;';
   $sStyleReadInp_te_apellidos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_apellidos']) && $this->nmgp_cmp_readonly['te_apellidos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_apellidos']);
       $sStyleReadLab_te_apellidos = '';
       $sStyleReadInp_te_apellidos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_apellidos']) && $this->nmgp_cmp_hidden['te_apellidos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_apellidos" value="<?php echo $this->form_encode_input($te_apellidos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_apellidos_line" id="hidden_field_data_te_apellidos" style="<?php echo $sStyleHidden_te_apellidos; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_apellidos_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_apellidos_label" style=""><span id="id_label_te_apellidos"><?php echo $this->nm_new_label['te_apellidos']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_apellidos']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_apellidos'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_apellidos"]) &&  $this->nmgp_cmp_readonly["te_apellidos"] == "on") { 

 ?>
<input type="hidden" name="te_apellidos" value="<?php echo $this->form_encode_input($te_apellidos) . "\">" . $te_apellidos . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_apellidos" class="sc-ui-readonly-te_apellidos css_te_apellidos_line" style="<?php echo $sStyleReadLab_te_apellidos; ?>"><?php echo $this->form_format_readonly("te_apellidos", $this->form_encode_input($this->te_apellidos)); ?></span><span id="id_read_off_te_apellidos" class="css_read_off_te_apellidos<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_apellidos; ?>">
 <input class="sc-js-input scFormObjectOdd css_te_apellidos_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_apellidos" type=text name="te_apellidos" value="<?php echo $this->form_encode_input($te_apellidos) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_apellidos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_apellidos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_direccion']))
    {
        $this->nm_new_label['te_direccion'] = "DIRECCIÓN";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_direccion = $this->te_direccion;
   $sStyleHidden_te_direccion = '';
   if (isset($this->nmgp_cmp_hidden['te_direccion']) && $this->nmgp_cmp_hidden['te_direccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_direccion']);
       $sStyleHidden_te_direccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_direccion = 'display: none;';
   $sStyleReadInp_te_direccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_direccion']) && $this->nmgp_cmp_readonly['te_direccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_direccion']);
       $sStyleReadLab_te_direccion = '';
       $sStyleReadInp_te_direccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_direccion']) && $this->nmgp_cmp_hidden['te_direccion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_direccion" value="<?php echo $this->form_encode_input($te_direccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_direccion_line" id="hidden_field_data_te_direccion" style="<?php echo $sStyleHidden_te_direccion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_direccion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_direccion_label" style=""><span id="id_label_te_direccion"><?php echo $this->nm_new_label['te_direccion']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_direccion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_direccion'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_direccion"]) &&  $this->nmgp_cmp_readonly["te_direccion"] == "on") { 

 ?>
<input type="hidden" name="te_direccion" value="<?php echo $this->form_encode_input($te_direccion) . "\">" . $te_direccion . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_direccion" class="sc-ui-readonly-te_direccion css_te_direccion_line" style="<?php echo $sStyleReadLab_te_direccion; ?>"><?php echo $this->form_format_readonly("te_direccion", $this->form_encode_input($this->te_direccion)); ?></span><span id="id_read_off_te_direccion" class="css_read_off_te_direccion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_direccion; ?>">
 <input class="sc-js-input scFormObjectOdd css_te_direccion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_direccion" type=text name="te_direccion" value="<?php echo $this->form_encode_input($te_direccion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_direccion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_telefono']))
    {
        $this->nm_new_label['te_telefono'] = "TELÉFONO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_telefono = $this->te_telefono;
   $sStyleHidden_te_telefono = '';
   if (isset($this->nmgp_cmp_hidden['te_telefono']) && $this->nmgp_cmp_hidden['te_telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_telefono']);
       $sStyleHidden_te_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_telefono = 'display: none;';
   $sStyleReadInp_te_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_telefono']) && $this->nmgp_cmp_readonly['te_telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_telefono']);
       $sStyleReadLab_te_telefono = '';
       $sStyleReadInp_te_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_telefono']) && $this->nmgp_cmp_hidden['te_telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_telefono" value="<?php echo $this->form_encode_input($te_telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_telefono_line" id="hidden_field_data_te_telefono" style="<?php echo $sStyleHidden_te_telefono; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_telefono_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_telefono_label" style=""><span id="id_label_te_telefono"><?php echo $this->nm_new_label['te_telefono']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_telefono']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_telefono'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_telefono"]) &&  $this->nmgp_cmp_readonly["te_telefono"] == "on") { 

 ?>
<input type="hidden" name="te_telefono" value="<?php echo $this->form_encode_input($te_telefono) . "\">" . $te_telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_telefono" class="sc-ui-readonly-te_telefono css_te_telefono_line" style="<?php echo $sStyleReadLab_te_telefono; ?>"><?php echo $this->form_format_readonly("te_telefono", $this->form_encode_input($this->te_telefono)); ?></span><span id="id_read_off_te_telefono" class="css_read_off_te_telefono<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd css_te_telefono_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_telefono" type=text name="te_telefono" value="<?php echo $this->form_encode_input($te_telefono) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_telefono_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_telefono_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_departamento']))
   {
       $this->nm_new_label['te_departamento'] = "DEPARTAMENTO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_departamento = $this->te_departamento;
   $sStyleHidden_te_departamento = '';
   if (isset($this->nmgp_cmp_hidden['te_departamento']) && $this->nmgp_cmp_hidden['te_departamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_departamento']);
       $sStyleHidden_te_departamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_departamento = 'display: none;';
   $sStyleReadInp_te_departamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_departamento']) && $this->nmgp_cmp_readonly['te_departamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_departamento']);
       $sStyleReadLab_te_departamento = '';
       $sStyleReadInp_te_departamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_departamento']) && $this->nmgp_cmp_hidden['te_departamento'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_departamento" value="<?php echo $this->form_encode_input($this->te_departamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_departamento_line" id="hidden_field_data_te_departamento" style="<?php echo $sStyleHidden_te_departamento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_departamento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_departamento_label" style=""><span id="id_label_te_departamento"><?php echo $this->nm_new_label['te_departamento']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_departamento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_departamento'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_departamento"]) &&  $this->nmgp_cmp_readonly["te_departamento"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento'] = array(); 
    }

   $old_value_te_fnacimiento = $this->te_fnacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_te_fnacimiento = $this->te_fnacimiento;

   $te_autoriza_val_str = "''";
   if (!empty($this->te_autoriza))
   {
       if (is_array($this->te_autoriza))
       {
           $Tmp_array = $this->te_autoriza;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_autoriza);
       }
       $te_autoriza_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_autoriza_val_str)
          {
             $te_autoriza_val_str .= ", ";
          }
          $te_autoriza_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $te_antecedentes_val_str = "''";
   if (!empty($this->te_antecedentes))
   {
       if (is_array($this->te_antecedentes))
       {
           $Tmp_array = $this->te_antecedentes;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_antecedentes);
       }
       $te_antecedentes_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_antecedentes_val_str)
          {
             $te_antecedentes_val_str .= ", ";
          }
          $te_antecedentes_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT CodigoDepartamento, NombreDepartamento  FROM departamentos  ORDER BY NombreDepartamento";

   $this->te_fnacimiento = $old_value_te_fnacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $te_departamento_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_departamento_1))
          {
              foreach ($this->te_departamento_1 as $tmp_te_departamento)
              {
                  if (trim($tmp_te_departamento) === trim($cadaselect[1])) { $te_departamento_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_departamento) === trim($cadaselect[1])) { $te_departamento_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="te_departamento" value="<?php echo $this->form_encode_input($te_departamento) . "\">" . $te_departamento_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_te_departamento();
   $x = 0 ; 
   $te_departamento_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_departamento_1))
          {
              foreach ($this->te_departamento_1 as $tmp_te_departamento)
              {
                  if (trim($tmp_te_departamento) === trim($cadaselect[1])) { $te_departamento_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_departamento) === trim($cadaselect[1])) { $te_departamento_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($te_departamento_look))
          {
              $te_departamento_look = $this->te_departamento;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_te_departamento\" class=\"css_te_departamento_line\" style=\"" .  $sStyleReadLab_te_departamento . "\">" . $this->form_format_readonly("te_departamento", $this->form_encode_input($te_departamento_look)) . "</span><span id=\"id_read_off_te_departamento\" class=\"css_read_off_te_departamento" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_te_departamento . "\">";
   echo " <span id=\"idAjaxSelect_te_departamento\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_te_departamento_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_te_departamento\" name=\"te_departamento\" size=\"10\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->te_departamento) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->te_departamento)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_departamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_departamento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_municipio']))
   {
       $this->nm_new_label['te_municipio'] = "MUNICIPIO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_municipio = $this->te_municipio;
   $sStyleHidden_te_municipio = '';
   if (isset($this->nmgp_cmp_hidden['te_municipio']) && $this->nmgp_cmp_hidden['te_municipio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_municipio']);
       $sStyleHidden_te_municipio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_municipio = 'display: none;';
   $sStyleReadInp_te_municipio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_municipio']) && $this->nmgp_cmp_readonly['te_municipio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_municipio']);
       $sStyleReadLab_te_municipio = '';
       $sStyleReadInp_te_municipio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_municipio']) && $this->nmgp_cmp_hidden['te_municipio'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_municipio" value="<?php echo $this->form_encode_input($this->te_municipio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_municipio_line" id="hidden_field_data_te_municipio" style="<?php echo $sStyleHidden_te_municipio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_municipio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_municipio_label" style=""><span id="id_label_te_municipio"><?php echo $this->nm_new_label['te_municipio']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_municipio']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_municipio'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_municipio"]) &&  $this->nmgp_cmp_readonly["te_municipio"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio'] = array(); 
    }

   $old_value_te_fnacimiento = $this->te_fnacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_te_fnacimiento = $this->te_fnacimiento;

   $nm_comando = "SELECT CodigoCiudad, NombreCiudad  FROM municipios WHERE Departamento = (select NombreDepartamento from departamentos where CodigoDepartamento = '$this->te_departamento') ORDER BY NombreCiudad";

   $this->te_fnacimiento = $old_value_te_fnacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $te_municipio_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_municipio_1))
          {
              foreach ($this->te_municipio_1 as $tmp_te_municipio)
              {
                  if (trim($tmp_te_municipio) === trim($cadaselect[1])) { $te_municipio_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_municipio) === trim($cadaselect[1])) { $te_municipio_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="te_municipio" value="<?php echo $this->form_encode_input($te_municipio) . "\">" . $te_municipio_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_te_municipio();
   $x = 0 ; 
   $te_municipio_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_municipio_1))
          {
              foreach ($this->te_municipio_1 as $tmp_te_municipio)
              {
                  if (trim($tmp_te_municipio) === trim($cadaselect[1])) { $te_municipio_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_municipio) === trim($cadaselect[1])) { $te_municipio_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($te_municipio_look))
          {
              $te_municipio_look = $this->te_municipio;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_te_municipio\" class=\"css_te_municipio_line\" style=\"" .  $sStyleReadLab_te_municipio . "\">" . $this->form_format_readonly("te_municipio", $this->form_encode_input($te_municipio_look)) . "</span><span id=\"id_read_off_te_municipio\" class=\"css_read_off_te_municipio" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_te_municipio . "\">";
   echo " <span id=\"idAjaxSelect_te_municipio\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_te_municipio_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_te_municipio\" name=\"te_municipio\" size=\"10\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->te_municipio) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->te_municipio)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_municipio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_municipio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_gsangre']))
   {
       $this->nm_new_label['te_gsangre'] = "GRUPO SANGUINEO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_gsangre = $this->te_gsangre;
   $sStyleHidden_te_gsangre = '';
   if (isset($this->nmgp_cmp_hidden['te_gsangre']) && $this->nmgp_cmp_hidden['te_gsangre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_gsangre']);
       $sStyleHidden_te_gsangre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_gsangre = 'display: none;';
   $sStyleReadInp_te_gsangre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_gsangre']) && $this->nmgp_cmp_readonly['te_gsangre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_gsangre']);
       $sStyleReadLab_te_gsangre = '';
       $sStyleReadInp_te_gsangre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_gsangre']) && $this->nmgp_cmp_hidden['te_gsangre'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_gsangre" value="<?php echo $this->form_encode_input($this->te_gsangre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_gsangre_line" id="hidden_field_data_te_gsangre" style="<?php echo $sStyleHidden_te_gsangre; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_gsangre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_gsangre_label" style=""><span id="id_label_te_gsangre"><?php echo $this->nm_new_label['te_gsangre']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_gsangre']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_gsangre'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_gsangre"]) &&  $this->nmgp_cmp_readonly["te_gsangre"] == "on") { 

$te_gsangre_look = "";
 if ($this->te_gsangre == "A") { $te_gsangre_look .= "A" ;} 
 if ($this->te_gsangre == "B") { $te_gsangre_look .= "B" ;} 
 if ($this->te_gsangre == "AB") { $te_gsangre_look .= "AB" ;} 
 if ($this->te_gsangre == "O") { $te_gsangre_look .= "O" ;} 
 if (empty($te_gsangre_look)) { $te_gsangre_look = $this->te_gsangre; }
?>
<input type="hidden" name="te_gsangre" value="<?php echo $this->form_encode_input($te_gsangre) . "\">" . $te_gsangre_look . ""; ?>
<?php } else { ?>
<?php

$te_gsangre_look = "";
 if ($this->te_gsangre == "A") { $te_gsangre_look .= "A" ;} 
 if ($this->te_gsangre == "B") { $te_gsangre_look .= "B" ;} 
 if ($this->te_gsangre == "AB") { $te_gsangre_look .= "AB" ;} 
 if ($this->te_gsangre == "O") { $te_gsangre_look .= "O" ;} 
 if (empty($te_gsangre_look)) { $te_gsangre_look = $this->te_gsangre; }
?>
<span id="id_read_on_te_gsangre" class="css_te_gsangre_line"  style="<?php echo $sStyleReadLab_te_gsangre; ?>"><?php echo $this->form_format_readonly("te_gsangre", $this->form_encode_input($te_gsangre_look)); ?></span><span id="id_read_off_te_gsangre" class="css_read_off_te_gsangre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap; <?php echo $sStyleReadInp_te_gsangre; ?>">
 <span id="idAjaxSelect_te_gsangre" class="<?php echo $this->classes_100perc_fields['span_select'] ?>"><select class="sc-js-input scFormObjectOdd css_te_gsangre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_gsangre" name="te_gsangre" size="10" alt="{type: 'select', enterTab: false}">
 <option  value="A" <?php  if ($this->te_gsangre == "A") { echo " selected" ;} ?>>A</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_gsangre'][] = 'A'; ?>
 <option  value="B" <?php  if ($this->te_gsangre == "B") { echo " selected" ;} ?>>B</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_gsangre'][] = 'B'; ?>
 <option  value="AB" <?php  if ($this->te_gsangre == "AB") { echo " selected" ;} ?>>AB</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_gsangre'][] = 'AB'; ?>
 <option  value="O" <?php  if ($this->te_gsangre == "O") { echo " selected" ;} ?>>O</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_gsangre'][] = 'O'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_gsangre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_gsangre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_rhsangre']))
   {
       $this->nm_new_label['te_rhsangre'] = "FACTOR RH";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_rhsangre = $this->te_rhsangre;
   $sStyleHidden_te_rhsangre = '';
   if (isset($this->nmgp_cmp_hidden['te_rhsangre']) && $this->nmgp_cmp_hidden['te_rhsangre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_rhsangre']);
       $sStyleHidden_te_rhsangre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_rhsangre = 'display: none;';
   $sStyleReadInp_te_rhsangre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_rhsangre']) && $this->nmgp_cmp_readonly['te_rhsangre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_rhsangre']);
       $sStyleReadLab_te_rhsangre = '';
       $sStyleReadInp_te_rhsangre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_rhsangre']) && $this->nmgp_cmp_hidden['te_rhsangre'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_rhsangre" value="<?php echo $this->form_encode_input($this->te_rhsangre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_rhsangre_line" id="hidden_field_data_te_rhsangre" style="<?php echo $sStyleHidden_te_rhsangre; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_rhsangre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_rhsangre_label" style=""><span id="id_label_te_rhsangre"><?php echo $this->nm_new_label['te_rhsangre']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_rhsangre']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_rhsangre'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_rhsangre"]) &&  $this->nmgp_cmp_readonly["te_rhsangre"] == "on") { 

$te_rhsangre_look = "";
 if ($this->te_rhsangre == "+") { $te_rhsangre_look .= "+" ;} 
 if ($this->te_rhsangre == "-") { $te_rhsangre_look .= "-" ;} 
 if (empty($te_rhsangre_look)) { $te_rhsangre_look = $this->te_rhsangre; }
?>
<input type="hidden" name="te_rhsangre" value="<?php echo $this->form_encode_input($te_rhsangre) . "\">" . $te_rhsangre_look . ""; ?>
<?php } else { ?>
<?php

$te_rhsangre_look = "";
 if ($this->te_rhsangre == "+") { $te_rhsangre_look .= "+" ;} 
 if ($this->te_rhsangre == "-") { $te_rhsangre_look .= "-" ;} 
 if (empty($te_rhsangre_look)) { $te_rhsangre_look = $this->te_rhsangre; }
?>
<span id="id_read_on_te_rhsangre" class="css_te_rhsangre_line"  style="<?php echo $sStyleReadLab_te_rhsangre; ?>"><?php echo $this->form_format_readonly("te_rhsangre", $this->form_encode_input($te_rhsangre_look)); ?></span><span id="id_read_off_te_rhsangre" class="css_read_off_te_rhsangre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap; <?php echo $sStyleReadInp_te_rhsangre; ?>">
 <span id="idAjaxSelect_te_rhsangre" class="<?php echo $this->classes_100perc_fields['span_select'] ?>"><select class="sc-js-input scFormObjectOdd css_te_rhsangre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_rhsangre" name="te_rhsangre" size="10" alt="{type: 'select', enterTab: false}">
 <option  value="+" <?php  if ($this->te_rhsangre == "+") { echo " selected" ;} ?>>+</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_rhsangre'][] = '+'; ?>
 <option  value="-" <?php  if ($this->te_rhsangre == "-") { echo " selected" ;} ?>>-</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_rhsangre'][] = '-'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_rhsangre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_rhsangre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_eps']))
   {
       $this->nm_new_label['te_eps'] = "EPS";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_eps = $this->te_eps;
   $sStyleHidden_te_eps = '';
   if (isset($this->nmgp_cmp_hidden['te_eps']) && $this->nmgp_cmp_hidden['te_eps'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_eps']);
       $sStyleHidden_te_eps = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_eps = 'display: none;';
   $sStyleReadInp_te_eps = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_eps']) && $this->nmgp_cmp_readonly['te_eps'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_eps']);
       $sStyleReadLab_te_eps = '';
       $sStyleReadInp_te_eps = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_eps']) && $this->nmgp_cmp_hidden['te_eps'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_eps" value="<?php echo $this->form_encode_input($this->te_eps) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_eps_line" id="hidden_field_data_te_eps" style="<?php echo $sStyleHidden_te_eps; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_eps_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_eps_label" style=""><span id="id_label_te_eps"><?php echo $this->nm_new_label['te_eps']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_eps']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_eps'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_eps"]) &&  $this->nmgp_cmp_readonly["te_eps"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps'] = array(); 
    }

   $old_value_te_fnacimiento = $this->te_fnacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_te_fnacimiento = $this->te_fnacimiento;

   $te_autoriza_val_str = "''";
   if (!empty($this->te_autoriza))
   {
       if (is_array($this->te_autoriza))
       {
           $Tmp_array = $this->te_autoriza;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_autoriza);
       }
       $te_autoriza_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_autoriza_val_str)
          {
             $te_autoriza_val_str .= ", ";
          }
          $te_autoriza_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $te_antecedentes_val_str = "''";
   if (!empty($this->te_antecedentes))
   {
       if (is_array($this->te_antecedentes))
       {
           $Tmp_array = $this->te_antecedentes;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_antecedentes);
       }
       $te_antecedentes_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_antecedentes_val_str)
          {
             $te_antecedentes_val_str .= ", ";
          }
          $te_antecedentes_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT EP_RSOCIAL, EP_RSOCIAL  FROM eps  ORDER BY EP_RSOCIAL";

   $this->te_fnacimiento = $old_value_te_fnacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_eps'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $te_eps_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_eps_1))
          {
              foreach ($this->te_eps_1 as $tmp_te_eps)
              {
                  if (trim($tmp_te_eps) === trim($cadaselect[1])) { $te_eps_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_eps) === trim($cadaselect[1])) { $te_eps_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="te_eps" value="<?php echo $this->form_encode_input($te_eps) . "\">" . $te_eps_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_te_eps();
   $x = 0 ; 
   $te_eps_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_eps_1))
          {
              foreach ($this->te_eps_1 as $tmp_te_eps)
              {
                  if (trim($tmp_te_eps) === trim($cadaselect[1])) { $te_eps_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_eps) === trim($cadaselect[1])) { $te_eps_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($te_eps_look))
          {
              $te_eps_look = $this->te_eps;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_te_eps\" class=\"css_te_eps_line\" style=\"" .  $sStyleReadLab_te_eps . "\">" . $this->form_format_readonly("te_eps", $this->form_encode_input($te_eps_look)) . "</span><span id=\"id_read_off_te_eps\" class=\"css_read_off_te_eps" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_te_eps . "\">";
   echo " <span id=\"idAjaxSelect_te_eps\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_te_eps_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_te_eps\" name=\"te_eps\" size=\"10\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->te_eps) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->te_eps)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_eps_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_eps_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_regimen']))
   {
       $this->nm_new_label['te_regimen'] = "RÉGIMEN";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_regimen = $this->te_regimen;
   $sStyleHidden_te_regimen = '';
   if (isset($this->nmgp_cmp_hidden['te_regimen']) && $this->nmgp_cmp_hidden['te_regimen'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_regimen']);
       $sStyleHidden_te_regimen = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_regimen = 'display: none;';
   $sStyleReadInp_te_regimen = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_regimen']) && $this->nmgp_cmp_readonly['te_regimen'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_regimen']);
       $sStyleReadLab_te_regimen = '';
       $sStyleReadInp_te_regimen = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_regimen']) && $this->nmgp_cmp_hidden['te_regimen'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_regimen" value="<?php echo $this->form_encode_input($this->te_regimen) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_regimen_line" id="hidden_field_data_te_regimen" style="<?php echo $sStyleHidden_te_regimen; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_regimen_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_regimen_label" style=""><span id="id_label_te_regimen"><?php echo $this->nm_new_label['te_regimen']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_regimen']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_regimen'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_regimen"]) &&  $this->nmgp_cmp_readonly["te_regimen"] == "on") { 

$te_regimen_look = "";
 if ($this->te_regimen == "SUBSIDIADO") { $te_regimen_look .= "SUBSIDIADO" ;} 
 if ($this->te_regimen == "CONTRIBUTIVO") { $te_regimen_look .= "CONTRIBUTIVO" ;} 
 if (empty($te_regimen_look)) { $te_regimen_look = $this->te_regimen; }
?>
<input type="hidden" name="te_regimen" value="<?php echo $this->form_encode_input($te_regimen) . "\">" . $te_regimen_look . ""; ?>
<?php } else { ?>
<?php

$te_regimen_look = "";
 if ($this->te_regimen == "SUBSIDIADO") { $te_regimen_look .= "SUBSIDIADO" ;} 
 if ($this->te_regimen == "CONTRIBUTIVO") { $te_regimen_look .= "CONTRIBUTIVO" ;} 
 if (empty($te_regimen_look)) { $te_regimen_look = $this->te_regimen; }
?>
<span id="id_read_on_te_regimen" class="css_te_regimen_line"  style="<?php echo $sStyleReadLab_te_regimen; ?>"><?php echo $this->form_format_readonly("te_regimen", $this->form_encode_input($te_regimen_look)); ?></span><span id="id_read_off_te_regimen" class="css_read_off_te_regimen<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap; <?php echo $sStyleReadInp_te_regimen; ?>">
 <span id="idAjaxSelect_te_regimen" class="<?php echo $this->classes_100perc_fields['span_select'] ?>"><select class="sc-js-input scFormObjectOdd css_te_regimen_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_regimen" name="te_regimen" size="10" alt="{type: 'select', enterTab: false}">
 <option  value="SUBSIDIADO" <?php  if ($this->te_regimen == "SUBSIDIADO") { echo " selected" ;} ?>>SUBSIDIADO</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_regimen'][] = 'SUBSIDIADO'; ?>
 <option  value="CONTRIBUTIVO" <?php  if ($this->te_regimen == "CONTRIBUTIVO") { echo " selected" ;} ?>>CONTRIBUTIVO</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_regimen'][] = 'CONTRIBUTIVO'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_regimen_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_regimen_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_fnacimiento']))
    {
        $this->nm_new_label['te_fnacimiento'] = "FECHA NACIMIENTO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_fnacimiento = $this->te_fnacimiento;
   $sStyleHidden_te_fnacimiento = '';
   if (isset($this->nmgp_cmp_hidden['te_fnacimiento']) && $this->nmgp_cmp_hidden['te_fnacimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_fnacimiento']);
       $sStyleHidden_te_fnacimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_fnacimiento = 'display: none;';
   $sStyleReadInp_te_fnacimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_fnacimiento']) && $this->nmgp_cmp_readonly['te_fnacimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_fnacimiento']);
       $sStyleReadLab_te_fnacimiento = '';
       $sStyleReadInp_te_fnacimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_fnacimiento']) && $this->nmgp_cmp_hidden['te_fnacimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_fnacimiento" value="<?php echo $this->form_encode_input($te_fnacimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_fnacimiento_line" id="hidden_field_data_te_fnacimiento" style="<?php echo $sStyleHidden_te_fnacimiento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_fnacimiento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_fnacimiento_label" style=""><span id="id_label_te_fnacimiento"><?php echo $this->nm_new_label['te_fnacimiento']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_fnacimiento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_fnacimiento'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_fnacimiento"]) &&  $this->nmgp_cmp_readonly["te_fnacimiento"] == "on") { 

 ?>
<input type="hidden" name="te_fnacimiento" value="<?php echo $this->form_encode_input($te_fnacimiento) . "\">" . $te_fnacimiento . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_fnacimiento" class="sc-ui-readonly-te_fnacimiento css_te_fnacimiento_line" style="<?php echo $sStyleReadLab_te_fnacimiento; ?>"><?php echo $this->form_format_readonly("te_fnacimiento", $this->form_encode_input($te_fnacimiento)); ?></span><span id="id_read_off_te_fnacimiento" class="css_read_off_te_fnacimiento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_fnacimiento; ?>"><?php
$tmp_form_data = $this->field_config['te_fnacimiento']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_te_fnacimiento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_fnacimiento" type=text name="te_fnacimiento" value="<?php echo $this->form_encode_input($te_fnacimiento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['te_fnacimiento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['te_fnacimiento']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '<?php echo $tmp_form_data; ?>', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_fnacimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_fnacimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_te_fnacimiento_dumb = ('' == $sStyleHidden_te_fnacimiento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_te_fnacimiento_dumb" style="<?php echo $sStyleHidden_te_fnacimiento_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">DATOS DEL CONTACTO</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_nombre_contacto']))
    {
        $this->nm_new_label['te_nombre_contacto'] = "NOMBRES";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_nombre_contacto = $this->te_nombre_contacto;
   $sStyleHidden_te_nombre_contacto = '';
   if (isset($this->nmgp_cmp_hidden['te_nombre_contacto']) && $this->nmgp_cmp_hidden['te_nombre_contacto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_nombre_contacto']);
       $sStyleHidden_te_nombre_contacto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_nombre_contacto = 'display: none;';
   $sStyleReadInp_te_nombre_contacto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_nombre_contacto']) && $this->nmgp_cmp_readonly['te_nombre_contacto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_nombre_contacto']);
       $sStyleReadLab_te_nombre_contacto = '';
       $sStyleReadInp_te_nombre_contacto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_nombre_contacto']) && $this->nmgp_cmp_hidden['te_nombre_contacto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_nombre_contacto" value="<?php echo $this->form_encode_input($te_nombre_contacto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_nombre_contacto_line" id="hidden_field_data_te_nombre_contacto" style="<?php echo $sStyleHidden_te_nombre_contacto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_nombre_contacto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_nombre_contacto_label" style=""><span id="id_label_te_nombre_contacto"><?php echo $this->nm_new_label['te_nombre_contacto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_nombre_contacto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_nombre_contacto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_nombre_contacto"]) &&  $this->nmgp_cmp_readonly["te_nombre_contacto"] == "on") { 

 ?>
<input type="hidden" name="te_nombre_contacto" value="<?php echo $this->form_encode_input($te_nombre_contacto) . "\">" . $te_nombre_contacto . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_nombre_contacto" class="sc-ui-readonly-te_nombre_contacto css_te_nombre_contacto_line" style="<?php echo $sStyleReadLab_te_nombre_contacto; ?>"><?php echo $this->form_format_readonly("te_nombre_contacto", $this->form_encode_input($this->te_nombre_contacto)); ?></span><span id="id_read_off_te_nombre_contacto" class="css_read_off_te_nombre_contacto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_nombre_contacto; ?>">
 <input class="sc-js-input scFormObjectOdd css_te_nombre_contacto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_nombre_contacto" type=text name="te_nombre_contacto" value="<?php echo $this->form_encode_input($te_nombre_contacto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_nombre_contacto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_nombre_contacto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_telefono_contacto']))
    {
        $this->nm_new_label['te_telefono_contacto'] = "TELÉFONO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_telefono_contacto = $this->te_telefono_contacto;
   $sStyleHidden_te_telefono_contacto = '';
   if (isset($this->nmgp_cmp_hidden['te_telefono_contacto']) && $this->nmgp_cmp_hidden['te_telefono_contacto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_telefono_contacto']);
       $sStyleHidden_te_telefono_contacto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_telefono_contacto = 'display: none;';
   $sStyleReadInp_te_telefono_contacto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_telefono_contacto']) && $this->nmgp_cmp_readonly['te_telefono_contacto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_telefono_contacto']);
       $sStyleReadLab_te_telefono_contacto = '';
       $sStyleReadInp_te_telefono_contacto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_telefono_contacto']) && $this->nmgp_cmp_hidden['te_telefono_contacto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_telefono_contacto" value="<?php echo $this->form_encode_input($te_telefono_contacto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_telefono_contacto_line" id="hidden_field_data_te_telefono_contacto" style="<?php echo $sStyleHidden_te_telefono_contacto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_telefono_contacto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_telefono_contacto_label" style=""><span id="id_label_te_telefono_contacto"><?php echo $this->nm_new_label['te_telefono_contacto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_telefono_contacto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_telefono_contacto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_telefono_contacto"]) &&  $this->nmgp_cmp_readonly["te_telefono_contacto"] == "on") { 

 ?>
<input type="hidden" name="te_telefono_contacto" value="<?php echo $this->form_encode_input($te_telefono_contacto) . "\">" . $te_telefono_contacto . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_telefono_contacto" class="sc-ui-readonly-te_telefono_contacto css_te_telefono_contacto_line" style="<?php echo $sStyleReadLab_te_telefono_contacto; ?>"><?php echo $this->form_format_readonly("te_telefono_contacto", $this->form_encode_input($this->te_telefono_contacto)); ?></span><span id="id_read_off_te_telefono_contacto" class="css_read_off_te_telefono_contacto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_telefono_contacto; ?>">
 <input class="sc-js-input scFormObjectOdd css_te_telefono_contacto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_telefono_contacto" type=text name="te_telefono_contacto" value="<?php echo $this->form_encode_input($te_telefono_contacto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_telefono_contacto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_telefono_contacto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_departamento_contacto']))
   {
       $this->nm_new_label['te_departamento_contacto'] = "DEPARTAMENTO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_departamento_contacto = $this->te_departamento_contacto;
   $sStyleHidden_te_departamento_contacto = '';
   if (isset($this->nmgp_cmp_hidden['te_departamento_contacto']) && $this->nmgp_cmp_hidden['te_departamento_contacto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_departamento_contacto']);
       $sStyleHidden_te_departamento_contacto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_departamento_contacto = 'display: none;';
   $sStyleReadInp_te_departamento_contacto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_departamento_contacto']) && $this->nmgp_cmp_readonly['te_departamento_contacto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_departamento_contacto']);
       $sStyleReadLab_te_departamento_contacto = '';
       $sStyleReadInp_te_departamento_contacto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_departamento_contacto']) && $this->nmgp_cmp_hidden['te_departamento_contacto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_departamento_contacto" value="<?php echo $this->form_encode_input($this->te_departamento_contacto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_departamento_contacto_line" id="hidden_field_data_te_departamento_contacto" style="<?php echo $sStyleHidden_te_departamento_contacto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_departamento_contacto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_departamento_contacto_label" style=""><span id="id_label_te_departamento_contacto"><?php echo $this->nm_new_label['te_departamento_contacto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_departamento_contacto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_departamento_contacto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_departamento_contacto"]) &&  $this->nmgp_cmp_readonly["te_departamento_contacto"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto'] = array(); 
    }

   $old_value_te_fnacimiento = $this->te_fnacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_te_fnacimiento = $this->te_fnacimiento;

   $te_autoriza_val_str = "''";
   if (!empty($this->te_autoriza))
   {
       if (is_array($this->te_autoriza))
       {
           $Tmp_array = $this->te_autoriza;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_autoriza);
       }
       $te_autoriza_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_autoriza_val_str)
          {
             $te_autoriza_val_str .= ", ";
          }
          $te_autoriza_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $te_antecedentes_val_str = "''";
   if (!empty($this->te_antecedentes))
   {
       if (is_array($this->te_antecedentes))
       {
           $Tmp_array = $this->te_antecedentes;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_antecedentes);
       }
       $te_antecedentes_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_antecedentes_val_str)
          {
             $te_antecedentes_val_str .= ", ";
          }
          $te_antecedentes_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT CodigoDepartamento, NombreDepartamento  FROM departamentos  ORDER BY NombreDepartamento";

   $this->te_fnacimiento = $old_value_te_fnacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_departamento_contacto'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $te_departamento_contacto_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_departamento_contacto_1))
          {
              foreach ($this->te_departamento_contacto_1 as $tmp_te_departamento_contacto)
              {
                  if (trim($tmp_te_departamento_contacto) === trim($cadaselect[1])) { $te_departamento_contacto_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_departamento_contacto) === trim($cadaselect[1])) { $te_departamento_contacto_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="te_departamento_contacto" value="<?php echo $this->form_encode_input($te_departamento_contacto) . "\">" . $te_departamento_contacto_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_te_departamento_contacto();
   $x = 0 ; 
   $te_departamento_contacto_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_departamento_contacto_1))
          {
              foreach ($this->te_departamento_contacto_1 as $tmp_te_departamento_contacto)
              {
                  if (trim($tmp_te_departamento_contacto) === trim($cadaselect[1])) { $te_departamento_contacto_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_departamento_contacto) === trim($cadaselect[1])) { $te_departamento_contacto_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($te_departamento_contacto_look))
          {
              $te_departamento_contacto_look = $this->te_departamento_contacto;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_te_departamento_contacto\" class=\"css_te_departamento_contacto_line\" style=\"" .  $sStyleReadLab_te_departamento_contacto . "\">" . $this->form_format_readonly("te_departamento_contacto", $this->form_encode_input($te_departamento_contacto_look)) . "</span><span id=\"id_read_off_te_departamento_contacto\" class=\"css_read_off_te_departamento_contacto" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_te_departamento_contacto . "\">";
   echo " <span id=\"idAjaxSelect_te_departamento_contacto\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_te_departamento_contacto_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_te_departamento_contacto\" name=\"te_departamento_contacto\" size=\"10\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->te_departamento_contacto) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->te_departamento_contacto)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_departamento_contacto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_departamento_contacto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_municipio_contacto']))
   {
       $this->nm_new_label['te_municipio_contacto'] = "MUNICIPIO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_municipio_contacto = $this->te_municipio_contacto;
   $sStyleHidden_te_municipio_contacto = '';
   if (isset($this->nmgp_cmp_hidden['te_municipio_contacto']) && $this->nmgp_cmp_hidden['te_municipio_contacto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_municipio_contacto']);
       $sStyleHidden_te_municipio_contacto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_municipio_contacto = 'display: none;';
   $sStyleReadInp_te_municipio_contacto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_municipio_contacto']) && $this->nmgp_cmp_readonly['te_municipio_contacto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_municipio_contacto']);
       $sStyleReadLab_te_municipio_contacto = '';
       $sStyleReadInp_te_municipio_contacto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_municipio_contacto']) && $this->nmgp_cmp_hidden['te_municipio_contacto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_municipio_contacto" value="<?php echo $this->form_encode_input($this->te_municipio_contacto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_municipio_contacto_line" id="hidden_field_data_te_municipio_contacto" style="<?php echo $sStyleHidden_te_municipio_contacto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_municipio_contacto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_municipio_contacto_label" style=""><span id="id_label_te_municipio_contacto"><?php echo $this->nm_new_label['te_municipio_contacto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_municipio_contacto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_municipio_contacto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_municipio_contacto"]) &&  $this->nmgp_cmp_readonly["te_municipio_contacto"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto'] = array(); 
    }

   $old_value_te_fnacimiento = $this->te_fnacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_te_fnacimiento = $this->te_fnacimiento;

   $nm_comando = "SELECT CodigoCiudad, NombreCiudad  FROM municipios WHERE Departamento = (select NombreDepartamento from departamentos where CodigoDepartamento = '$this->te_departamento_contacto') ORDER BY NombreCiudad";

   $this->te_fnacimiento = $old_value_te_fnacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_municipio_contacto'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $te_municipio_contacto_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_municipio_contacto_1))
          {
              foreach ($this->te_municipio_contacto_1 as $tmp_te_municipio_contacto)
              {
                  if (trim($tmp_te_municipio_contacto) === trim($cadaselect[1])) { $te_municipio_contacto_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_municipio_contacto) === trim($cadaselect[1])) { $te_municipio_contacto_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="te_municipio_contacto" value="<?php echo $this->form_encode_input($te_municipio_contacto) . "\">" . $te_municipio_contacto_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_te_municipio_contacto();
   $x = 0 ; 
   $te_municipio_contacto_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_municipio_contacto_1))
          {
              foreach ($this->te_municipio_contacto_1 as $tmp_te_municipio_contacto)
              {
                  if (trim($tmp_te_municipio_contacto) === trim($cadaselect[1])) { $te_municipio_contacto_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_municipio_contacto) === trim($cadaselect[1])) { $te_municipio_contacto_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($te_municipio_contacto_look))
          {
              $te_municipio_contacto_look = $this->te_municipio_contacto;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_te_municipio_contacto\" class=\"css_te_municipio_contacto_line\" style=\"" .  $sStyleReadLab_te_municipio_contacto . "\">" . $this->form_format_readonly("te_municipio_contacto", $this->form_encode_input($te_municipio_contacto_look)) . "</span><span id=\"id_read_off_te_municipio_contacto\" class=\"css_read_off_te_municipio_contacto" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_te_municipio_contacto . "\">";
   echo " <span id=\"idAjaxSelect_te_municipio_contacto\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_te_municipio_contacto_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_te_municipio_contacto\" name=\"te_municipio_contacto\" size=\"10\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->te_municipio_contacto) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->te_municipio_contacto)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_municipio_contacto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_municipio_contacto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_direccion_contacto']))
    {
        $this->nm_new_label['te_direccion_contacto'] = "DIRECCIÓN";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_direccion_contacto = $this->te_direccion_contacto;
   $sStyleHidden_te_direccion_contacto = '';
   if (isset($this->nmgp_cmp_hidden['te_direccion_contacto']) && $this->nmgp_cmp_hidden['te_direccion_contacto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_direccion_contacto']);
       $sStyleHidden_te_direccion_contacto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_direccion_contacto = 'display: none;';
   $sStyleReadInp_te_direccion_contacto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_direccion_contacto']) && $this->nmgp_cmp_readonly['te_direccion_contacto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_direccion_contacto']);
       $sStyleReadLab_te_direccion_contacto = '';
       $sStyleReadInp_te_direccion_contacto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_direccion_contacto']) && $this->nmgp_cmp_hidden['te_direccion_contacto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_direccion_contacto" value="<?php echo $this->form_encode_input($te_direccion_contacto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_direccion_contacto_line" id="hidden_field_data_te_direccion_contacto" style="<?php echo $sStyleHidden_te_direccion_contacto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_direccion_contacto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_direccion_contacto_label" style=""><span id="id_label_te_direccion_contacto"><?php echo $this->nm_new_label['te_direccion_contacto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_direccion_contacto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_direccion_contacto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_direccion_contacto"]) &&  $this->nmgp_cmp_readonly["te_direccion_contacto"] == "on") { 

 ?>
<input type="hidden" name="te_direccion_contacto" value="<?php echo $this->form_encode_input($te_direccion_contacto) . "\">" . $te_direccion_contacto . ""; ?>
<?php } else { ?>
<span id="id_read_on_te_direccion_contacto" class="sc-ui-readonly-te_direccion_contacto css_te_direccion_contacto_line" style="<?php echo $sStyleReadLab_te_direccion_contacto; ?>"><?php echo $this->form_format_readonly("te_direccion_contacto", $this->form_encode_input($this->te_direccion_contacto)); ?></span><span id="id_read_off_te_direccion_contacto" class="css_read_off_te_direccion_contacto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_direccion_contacto; ?>">
 <input class="sc-js-input scFormObjectOdd css_te_direccion_contacto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_te_direccion_contacto" type=text name="te_direccion_contacto" value="<?php echo $this->form_encode_input($te_direccion_contacto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_direccion_contacto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_direccion_contacto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_parentesco_contacto']))
   {
       $this->nm_new_label['te_parentesco_contacto'] = "PARENTESCO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_parentesco_contacto = $this->te_parentesco_contacto;
   $sStyleHidden_te_parentesco_contacto = '';
   if (isset($this->nmgp_cmp_hidden['te_parentesco_contacto']) && $this->nmgp_cmp_hidden['te_parentesco_contacto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_parentesco_contacto']);
       $sStyleHidden_te_parentesco_contacto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_parentesco_contacto = 'display: none;';
   $sStyleReadInp_te_parentesco_contacto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_parentesco_contacto']) && $this->nmgp_cmp_readonly['te_parentesco_contacto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_parentesco_contacto']);
       $sStyleReadLab_te_parentesco_contacto = '';
       $sStyleReadInp_te_parentesco_contacto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_parentesco_contacto']) && $this->nmgp_cmp_hidden['te_parentesco_contacto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_parentesco_contacto" value="<?php echo $this->form_encode_input($this->te_parentesco_contacto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_parentesco_contacto_line" id="hidden_field_data_te_parentesco_contacto" style="<?php echo $sStyleHidden_te_parentesco_contacto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_parentesco_contacto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_parentesco_contacto_label" style=""><span id="id_label_te_parentesco_contacto"><?php echo $this->nm_new_label['te_parentesco_contacto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_parentesco_contacto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['php_cmp_required']['te_parentesco_contacto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_parentesco_contacto"]) &&  $this->nmgp_cmp_readonly["te_parentesco_contacto"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto'] = array(); 
    }

   $old_value_te_fnacimiento = $this->te_fnacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_te_fnacimiento = $this->te_fnacimiento;

   $te_autoriza_val_str = "''";
   if (!empty($this->te_autoriza))
   {
       if (is_array($this->te_autoriza))
       {
           $Tmp_array = $this->te_autoriza;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_autoriza);
       }
       $te_autoriza_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_autoriza_val_str)
          {
             $te_autoriza_val_str .= ", ";
          }
          $te_autoriza_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $te_antecedentes_val_str = "''";
   if (!empty($this->te_antecedentes))
   {
       if (is_array($this->te_antecedentes))
       {
           $Tmp_array = $this->te_antecedentes;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_antecedentes);
       }
       $te_antecedentes_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_antecedentes_val_str)
          {
             $te_antecedentes_val_str .= ", ";
          }
          $te_antecedentes_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT DESCRIPCION, DESCRIPCION  FROM parentescos  ORDER BY DESCRIPCION";

   $this->te_fnacimiento = $old_value_te_fnacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_parentesco_contacto'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $te_parentesco_contacto_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_parentesco_contacto_1))
          {
              foreach ($this->te_parentesco_contacto_1 as $tmp_te_parentesco_contacto)
              {
                  if (trim($tmp_te_parentesco_contacto) === trim($cadaselect[1])) { $te_parentesco_contacto_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_parentesco_contacto) === trim($cadaselect[1])) { $te_parentesco_contacto_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="te_parentesco_contacto" value="<?php echo $this->form_encode_input($te_parentesco_contacto) . "\">" . $te_parentesco_contacto_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_te_parentesco_contacto();
   $x = 0 ; 
   $te_parentesco_contacto_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->te_parentesco_contacto_1))
          {
              foreach ($this->te_parentesco_contacto_1 as $tmp_te_parentesco_contacto)
              {
                  if (trim($tmp_te_parentesco_contacto) === trim($cadaselect[1])) { $te_parentesco_contacto_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->te_parentesco_contacto) === trim($cadaselect[1])) { $te_parentesco_contacto_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($te_parentesco_contacto_look))
          {
              $te_parentesco_contacto_look = $this->te_parentesco_contacto;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_te_parentesco_contacto\" class=\"css_te_parentesco_contacto_line\" style=\"" .  $sStyleReadLab_te_parentesco_contacto . "\">" . $this->form_format_readonly("te_parentesco_contacto", $this->form_encode_input($te_parentesco_contacto_look)) . "</span><span id=\"id_read_off_te_parentesco_contacto\" class=\"css_read_off_te_parentesco_contacto" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_te_parentesco_contacto . "\">";
   echo " <span id=\"idAjaxSelect_te_parentesco_contacto\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_te_parentesco_contacto_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_te_parentesco_contacto\" name=\"te_parentesco_contacto\" size=\"10\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->te_parentesco_contacto) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->te_parentesco_contacto)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_parentesco_contacto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_parentesco_contacto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_te_parentesco_contacto_dumb = ('' == $sStyleHidden_te_parentesco_contacto) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_te_parentesco_contacto_dumb" style="<?php echo $sStyleHidden_te_parentesco_contacto_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">FOTO</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['te_foto']))
    {
        $this->nm_new_label['te_foto'] = "FOTO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_foto = $this->te_foto;
   $sStyleHidden_te_foto = '';
   if (isset($this->nmgp_cmp_hidden['te_foto']) && $this->nmgp_cmp_hidden['te_foto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_foto']);
       $sStyleHidden_te_foto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_foto = 'display: none;';
   $sStyleReadInp_te_foto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_foto']) && $this->nmgp_cmp_readonly['te_foto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_foto']);
       $sStyleReadLab_te_foto = '';
       $sStyleReadInp_te_foto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_foto']) && $this->nmgp_cmp_hidden['te_foto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="te_foto" value="<?php echo $this->form_encode_input($te_foto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_te_foto_line" id="hidden_field_data_te_foto" style="<?php echo $sStyleHidden_te_foto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_foto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_foto_label" style=""><span id="id_label_te_foto"><?php echo $this->nm_new_label['te_foto']; ?></span></span><br>
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_te_foto" => $out1_te_foto); ?><script>var var_ajax_img_te_foto = '<?php echo $out1_te_foto; ?>';</script><input type="hidden" name="temp_out_te_foto" value="<?php echo $this->form_encode_input($out_te_foto); ?>" /><input type="hidden" name="temp_out1_te_foto" value="<?php echo $this->form_encode_input($out1_te_foto); ?>" /><?php if (!empty($out_te_foto)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_te_foto, '" . $this->nmgp_return_img['te_foto'][0] . "', '" . $this->nmgp_return_img['te_foto'][1] . "')\"><img id=\"id_ajax_img_te_foto\"  border=\"0\" src=\"$out_te_foto\"></a>"; } else {  echo "<img id=\"id_ajax_img_te_foto\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_foto"]) &&  $this->nmgp_cmp_readonly["te_foto"] == "on") { 

 ?>
<img id=\"te_foto_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="te_foto" value="<?php echo $this->form_encode_input($te_foto) . "\">" . $te_foto . ""; ?>
<?php } else { ?>
<span id="id_read_off_te_foto" class="css_read_off_te_foto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_te_foto; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-te_foto" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_te_foto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="te_foto[]" id="id_sc_field_te_foto" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<?php
   $sCheckInsert = "";
?>
<span id="chk_ajax_img_te_foto"<?php if ($this->nmgp_opcao == "novo" || empty($te_foto)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="te_foto_limpa" value="<?php echo $te_foto_limpa . '" '; if ($te_foto_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};<?php echo $sCheckInsert ?>"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="te_foto_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_te_foto" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_te_foto" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_foto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_foto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_te_foto_dumb = ('' == $sStyleHidden_te_foto) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_te_foto_dumb" style="<?php echo $sStyleHidden_te_foto_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">ANTECEDENTES</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_antecedentes']))
   {
       $this->nm_new_label['te_antecedentes'] = "ANTECEDENTES";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_antecedentes = $this->te_antecedentes;
   $sStyleHidden_te_antecedentes = '';
   if (isset($this->nmgp_cmp_hidden['te_antecedentes']) && $this->nmgp_cmp_hidden['te_antecedentes'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_antecedentes']);
       $sStyleHidden_te_antecedentes = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_antecedentes = 'display: none;';
   $sStyleReadInp_te_antecedentes = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_antecedentes']) && $this->nmgp_cmp_readonly['te_antecedentes'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_antecedentes']);
       $sStyleReadLab_te_antecedentes = '';
       $sStyleReadInp_te_antecedentes = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_antecedentes']) && $this->nmgp_cmp_hidden['te_antecedentes'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_antecedentes" value="<?php echo $this->form_encode_input($this->te_antecedentes) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php  $this->te_antecedentes_1 = explode(";", trim($this->te_antecedentes)) ; ?>
    <TD class="scFormDataOdd css_te_antecedentes_line" id="hidden_field_data_te_antecedentes" style="<?php echo $sStyleHidden_te_antecedentes; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_antecedentes_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_antecedentes_label" style=""><span id="id_label_te_antecedentes"><?php echo $this->nm_new_label['te_antecedentes']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_antecedentes"]) &&  $this->nmgp_cmp_readonly["te_antecedentes"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes'] = array(); 
    }

   $old_value_te_fnacimiento = $this->te_fnacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_te_fnacimiento = $this->te_fnacimiento;

   $te_autoriza_val_str = "''";
   if (!empty($this->te_autoriza))
   {
       if (is_array($this->te_autoriza))
       {
           $Tmp_array = $this->te_autoriza;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_autoriza);
       }
       $te_autoriza_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_autoriza_val_str)
          {
             $te_autoriza_val_str .= ", ";
          }
          $te_autoriza_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $te_antecedentes_val_str = "''";
   if (!empty($this->te_antecedentes))
   {
       if (is_array($this->te_antecedentes))
       {
           $Tmp_array = $this->te_antecedentes;
       }
       else
       {
           $Tmp_array = explode(";", $this->te_antecedentes);
       }
       $te_antecedentes_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $te_antecedentes_val_str)
          {
             $te_antecedentes_val_str .= ", ";
          }
          $te_antecedentes_val_str .= "'$Tmp_val_cmp'";
       }
   }
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
   {
       $nm_comando = "SELECT AN_ID, concat(AN_TIPO, '-', AN_DESCRIPCION)  FROM antecedentes  ORDER BY AN_TIPO, AN_DESCRIPCION";
   }
   else
   {
       $nm_comando = "SELECT AN_ID, AN_TIPO||'-'||AN_DESCRIPCION  FROM antecedentes  ORDER BY AN_TIPO, AN_DESCRIPCION";
   }

   $this->te_fnacimiento = $old_value_te_fnacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_antecedentes'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $te_antecedentes_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->te_antecedentes_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $te_antecedentes_look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="te_antecedentes" value="<?php echo $this->form_encode_input($te_antecedentes) . "\">" . $te_antecedentes_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_te_antecedentes();
   $x = 0 ; 
   $te_antecedentes_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->te_antecedentes_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $te_antecedentes_look .= $cadaselect[0] . "<br>";
                  break;
              }
          }
          $x++; 
   }
          if (empty($te_antecedentes_look))
          {
              $te_antecedentes_look = $this->te_antecedentes;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_te_antecedentes\" class=\"css_te_antecedentes_line\" style=\"" .  $sStyleReadLab_te_antecedentes . "\">" . $this->form_format_readonly("te_antecedentes", $this->form_encode_input($te_antecedentes_look)) . "</span><span id=\"id_read_off_te_antecedentes\" class=\"css_read_off_te_antecedentes" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_te_antecedentes . "\">";
   echo " <span id=\"idAjaxSelect_te_antecedentes\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_te_antecedentes_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_te_antecedentes\" name=\"te_antecedentes[]\" size=\"1\" alt=\"{type: 'select', enterTab: false}\" multiple>" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          foreach ($this->te_antecedentes_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  echo " selected" ; 
                  break;
              }
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->te_antecedentes)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_antecedentes_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_antecedentes_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_te_antecedentes_dumb = ('' == $sStyleHidden_te_antecedentes) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_te_antecedentes_dumb" style="<?php echo $sStyleHidden_te_antecedentes_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">CONSENTIMIENTO</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['te_autoriza']))
   {
       $this->nm_new_label['te_autoriza'] = "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $te_autoriza = $this->te_autoriza;
   $sStyleHidden_te_autoriza = '';
   if (isset($this->nmgp_cmp_hidden['te_autoriza']) && $this->nmgp_cmp_hidden['te_autoriza'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['te_autoriza']);
       $sStyleHidden_te_autoriza = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_te_autoriza = 'display: none;';
   $sStyleReadInp_te_autoriza = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['te_autoriza']) && $this->nmgp_cmp_readonly['te_autoriza'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['te_autoriza']);
       $sStyleReadLab_te_autoriza = '';
       $sStyleReadInp_te_autoriza = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['te_autoriza']) && $this->nmgp_cmp_hidden['te_autoriza'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="te_autoriza" value="<?php echo $this->form_encode_input($this->te_autoriza) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->te_autoriza_1 = explode(";", trim($this->te_autoriza));
  } 
  else
  {
      if (empty($this->te_autoriza))
      {
          $this->te_autoriza_1= array(); 
          $this->te_autoriza= "NO";
      } 
      else
      {
          $this->te_autoriza_1= $this->te_autoriza; 
          $this->te_autoriza= ""; 
          foreach ($this->te_autoriza_1 as $cada_te_autoriza)
          {
             if (!empty($te_autoriza))
             {
                 $this->te_autoriza.= ";"; 
             } 
             $this->te_autoriza.= $cada_te_autoriza; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_te_autoriza_line" id="hidden_field_data_te_autoriza" style="<?php echo $sStyleHidden_te_autoriza; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_te_autoriza_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_te_autoriza_label" style=""><span id="id_label_te_autoriza"><?php echo $this->nm_new_label['te_autoriza']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["te_autoriza"]) &&  $this->nmgp_cmp_readonly["te_autoriza"] == "on") { 

$te_autoriza_look = "";
 if ($this->te_autoriza == "SI") { $te_autoriza_look .= "" ;} 
 if (empty($te_autoriza_look)) { $te_autoriza_look = $this->te_autoriza; }
?>
<input type="hidden" name="te_autoriza" value="<?php echo $this->form_encode_input($te_autoriza) . "\">" . $te_autoriza_look . ""; ?>
<?php } else { ?>

<?php

$te_autoriza_look = "";
 if ($this->te_autoriza == "SI") { $te_autoriza_look .= "" ;} 
 if (empty($te_autoriza_look)) { $te_autoriza_look = $this->te_autoriza; }
?>
<span id="id_read_on_te_autoriza" class="css_te_autoriza_line" style="<?php echo $sStyleReadLab_te_autoriza; ?>"><?php echo $this->form_format_readonly("te_autoriza", $this->form_encode_input($te_autoriza_look)); ?></span><span id="id_read_off_te_autoriza" class="css_read_off_te_autoriza css_te_autoriza_line" style="<?php echo $sStyleReadInp_te_autoriza; ?>"><?php echo "<div id=\"idAjaxCheckbox_te_autoriza\" style=\"display: inline-block\" class=\"css_te_autoriza_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_te_autoriza_line"><?php $tempOptionId = "id-opt-te_autoriza" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-te_autoriza sc-ui-checkbox-te_autoriza" name="te_autoriza[]" value="SI"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['Lookup_te_autoriza'][] = 'SI'; ?>
<?php  if (in_array("SI", $this->te_autoriza_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
<span class="scFormDataTagOdd" style="display: block">¿AUTORIZA EL USO SOBRE SUS DATOS?</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_te_autoriza_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_te_autoriza_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-27';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-28';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-29';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-30';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none;" class='scDebugWindow'><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage({title: '', message: "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", isModal: false, timeout: 0, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: true, showBodyIcon: false, isToast: false, toastPos: ""});
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_tercero_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_tercero_mob");
 parent.scAjaxDetailHeight("form_tercero_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_tercero_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_tercero_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-16").length && $("#sc_b_new_t.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-17").length && $("#sc_b_ins_t.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-18").length && $("#sc_b_sai_t.sc-unique-btn-18").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-19").length && $("#sc_b_upd_t.sc-unique-btn-19").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-5").length && $("#sc_b_del_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_del_t.sc-unique-btn-20").length && $("#sc_b_del_t.sc-unique-btn-20").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-20").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_reload() {
		if ($("#sc_b_reload_t.sc-unique-btn-6").length && $("#sc_b_reload_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_reload_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scAjax_formReload();
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_reload_t.sc-unique-btn-21").length && $("#sc_b_reload_t.sc-unique-btn-21").is(":visible")) {
		    if ($("#sc_b_reload_t.sc-unique-btn-21").hasClass("disabled")) {
		        return;
		    }
			scAjax_formReload();
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-11").length && $("#sc_b_sai_t.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-22").length && $("#sc_b_sai_t.sc-unique-btn-22").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-22").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-23").length && $("#sc_b_sai_t.sc-unique-btn-23").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-23").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-24").length && $("#sc_b_sai_t.sc-unique-btn-24").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-24").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-25").length && $("#sc_b_sai_t.sc-unique-btn-25").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-25").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-26").length && $("#sc_b_sai_t.sc-unique-btn-26").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-26").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq() {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
		    if ($("#brec_b").hasClass("disabled")) {
		        return;
		    }
			nm_navpage(document.F1.nmgp_rec_b.value, 'P'); document.F1.nmgp_rec_b.value = '';
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-12").length && $("#sc_b_ini_b.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ini_b.sc-unique-btn-27").length && $("#sc_b_ini_b.sc-unique-btn-27").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-27").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-13").length && $("#sc_b_ret_b.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-28").length && $("#sc_b_ret_b.sc-unique-btn-28").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-28").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-14").length && $("#sc_b_avc_b.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-29").length && $("#sc_b_avc_b.sc-unique-btn-29").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-29").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-15").length && $("#sc_b_fim_b.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-30").length && $("#sc_b_fim_b.sc-unique-btn-30").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-30").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			toggleToolbar(event, true); return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_tercero_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
