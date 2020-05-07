<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />

    <style type="text/css">
        html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,*:before,*:after{background:transparent !important;color:#000 !important;-webkit-box-shadow:none !important;box-shadow:none !important;text-shadow:none !important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}pre,blockquote{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}tr,img{page-break-inside:avoid}img{max-width:100% !important}p,h2,h3{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000 !important}.label{border:1px solid #000}.table{border-collapse:collapse !important}.table td,.table th{background-color:#fff !important}.table-bordered th,.table-bordered td{border:1px solid #ddd !important}}@font-face{font-family:'Glyphicons Halflings';src:url('../fonts/glyphicons-halflings-regular.eot');src:url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'),url('../fonts/glyphicons-halflings-regular.woff') format('woff'),url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'),url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\002a"}.glyphicon-plus:before{content:"\002b"}.glyphicon-euro:before,.glyphicon-eur:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before{content:"\e227"}.glyphicon-btc:before{content:"\e227"}.glyphicon-xbt:before{content:"\e227"}.glyphicon-yen:before{content:"\00a5"}.glyphicon-jpy:before{content:"\00a5"}.glyphicon-ruble:before{content:"\20bd"}.glyphicon-rub:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive,.thumbnail>img,.thumbnail a>img,.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role="button"]{cursor:pointer}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:normal;line-height:1;color:#777}h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small{font-size:65%}h4,.h4,h5,.h5,h6,.h6{margin-top:10px;margin-bottom:10px}h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small{font-size:75%}h1,.h1{font-size:36px}h2,.h2{font-size:30px}h3,.h3{font-size:24px}h4,.h4{font-size:18px}h5,.h5{font-size:14px}h6,.h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}small,.small{font-size:85%}mark,.mark{background-color:#fcf8e3;padding:.2em}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:hover,a.text-primary:focus{color:#286090}.text-success{color:#3c763d}a.text-success:hover,a.text-success:focus{color:#2b542c}.text-info{color:#31708f}a.text-info:hover,a.text-info:focus{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:hover,a.text-warning:focus{color:#66512c}.text-danger{color:#a94442}a.text-danger:hover,a.text-danger:focus{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:hover,a.bg-primary:focus{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:hover,a.bg-success:focus{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:hover,a.bg-info:focus{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:hover,a.bg-warning:focus{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:hover,a.bg-danger:focus{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ul,ol{margin-top:0;margin-bottom:10px}ul ul,ol ul,ul ol,ol ol{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none;margin-left:-5px}.list-inline>li{display:inline-block;padding-left:5px;padding-right:5px}dl{margin-top:0;margin-bottom:20px}dt,dd{line-height:1.42857143}dt{font-weight:bold}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[title],abbr[data-original-title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote p:last-child,blockquote ul:last-child,blockquote ol:last-child{margin-bottom:0}blockquote footer,blockquote small,blockquote .small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote footer:before,blockquote small:before,blockquote .small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;border-right:5px solid #eee;border-left:0;text-align:right}.blockquote-reverse footer:before,blockquote.pull-right footer:before,.blockquote-reverse small:before,blockquote.pull-right small:before,.blockquote-reverse .small:before,blockquote.pull-right .small:before{content:''}.blockquote-reverse footer:after,blockquote.pull-right footer:after,.blockquote-reverse small:after,blockquote.pull-right small:after,.blockquote-reverse .small:after,blockquote.pull-right .small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.25)}kbd kbd{padding:0;font-size:100%;font-weight:bold;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;word-break:break-all;word-wrap:break-word;color:#333;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1200px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>th,.table>caption+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>td,.table>thead:first-child>tr:first-child>td{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*="col-"]{position:static;float:none;display:table-column}table td[class*="col-"],table th[class*="col-"]{position:static;float:none;display:table-cell}.table>thead>tr>td.active,.table>tbody>tr>td.active,.table>tfoot>tr>td.active,.table>thead>tr>th.active,.table>tbody>tr>th.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>tbody>tr.active>td,.table>tfoot>tr.active>td,.table>thead>tr.active>th,.table>tbody>tr.active>th,.table>tfoot>tr.active>th{background-color:#f5f5f5}.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover,.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr.active:hover>th{background-color:#e8e8e8}.table>thead>tr>td.success,.table>tbody>tr>td.success,.table>tfoot>tr>td.success,.table>thead>tr>th.success,.table>tbody>tr>th.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>tbody>tr.success>td,.table>tfoot>tr.success>td,.table>thead>tr.success>th,.table>tbody>tr.success>th,.table>tfoot>tr.success>th{background-color:#dff0d8}.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover,.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr.success:hover>th{background-color:#d0e9c6}.table>thead>tr>td.info,.table>tbody>tr>td.info,.table>tfoot>tr>td.info,.table>thead>tr>th.info,.table>tbody>tr>th.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>tbody>tr.info>td,.table>tfoot>tr.info>td,.table>thead>tr.info>th,.table>tbody>tr.info>th,.table>tfoot>tr.info>th{background-color:#d9edf7}.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover,.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr.info:hover>th{background-color:#c4e3f3}.table>thead>tr>td.warning,.table>tbody>tr>td.warning,.table>tfoot>tr>td.warning,.table>thead>tr>th.warning,.table>tbody>tr>th.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>tbody>tr.warning>td,.table>tfoot>tr.warning>td,.table>thead>tr.warning>th,.table>tbody>tr.warning>th,.table>tfoot>tr.warning>th{background-color:#fcf8e3}.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover,.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr.warning:hover>th{background-color:#faf2cc}.table>thead>tr>td.danger,.table>tbody>tr>td.danger,.table>tfoot>tr>td.danger,.table>thead>tr>th.danger,.table>tbody>tr>th.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>tbody>tr.danger>td,.table>tfoot>tr.danger>td,.table>thead>tr.danger>th,.table>tbody>tr.danger>th,.table>tfoot>tr.danger>th{background-color:#f2dede}.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover,.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr.danger:hover>th{background-color:#ebcccc}.table-responsive{overflow-x:auto;min-height:0.01%}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}fieldset{padding:0;margin:0;border:0;min-width:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:bold}input[type="search"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type="radio"],input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal}input[type="file"]{display:block}input[type="range"]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type="file"]:focus,input[type="radio"]:focus,input[type="checkbox"]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{border:0;background-color:transparent}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type="search"]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type="date"].form-control,input[type="time"].form-control,input[type="datetime-local"].form-control,input[type="month"].form-control{line-height:34px}input[type="date"].input-sm,input[type="time"].input-sm,input[type="datetime-local"].input-sm,input[type="month"].input-sm,.input-group-sm input[type="date"],.input-group-sm input[type="time"],.input-group-sm input[type="datetime-local"],.input-group-sm input[type="month"]{line-height:30px}input[type="date"].input-lg,input[type="time"].input-lg,input[type="datetime-local"].input-lg,input[type="month"].input-lg,.input-group-lg input[type="date"],.input-group-lg input[type="time"],.input-group-lg input[type="datetime-local"],.input-group-lg input[type="month"]{line-height:46px}}.form-group{margin-bottom:15px}.radio,.checkbox{position:relative;display:block;margin-top:10px;margin-bottom:10px}.radio label,.checkbox label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:normal;cursor:pointer}.radio input[type="radio"],.radio-inline input[type="radio"],.checkbox input[type="checkbox"],.checkbox-inline input[type="checkbox"]{position:absolute;margin-left:-20px;margin-top:4px \9}.radio+.radio,.checkbox+.checkbox{margin-top:-5px}.radio-inline,.checkbox-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;vertical-align:middle;font-weight:normal;cursor:pointer}.radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}input[type="radio"][disabled],input[type="checkbox"][disabled],input[type="radio"].disabled,input[type="checkbox"].disabled,fieldset[disabled] input[type="radio"],fieldset[disabled] input[type="checkbox"]{cursor:not-allowed}.radio-inline.disabled,.checkbox-inline.disabled,fieldset[disabled] .radio-inline,fieldset[disabled] .checkbox-inline{cursor:not-allowed}.radio.disabled label,.checkbox.disabled label,fieldset[disabled] .radio label,fieldset[disabled] .checkbox label{cursor:not-allowed}.form-control-static{padding-top:7px;padding-bottom:7px;margin-bottom:0;min-height:34px}.form-control-static.input-lg,.form-control-static.input-sm{padding-left:0;padding-right:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}textarea.input-sm,select[multiple].input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm textarea.form-control,.form-group-sm select[multiple].form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}textarea.input-lg,select[multiple].input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg textarea.form-control,.form-group-lg select[multiple].form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback,.input-group-lg+.form-control-feedback,.form-group-lg .form-control+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback,.input-group-sm+.form-control-feedback,.form-group-sm .form-control+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline,.has-success.radio label,.has-success.checkbox label,.has-success.radio-inline label,.has-success.checkbox-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;border-color:#3c763d;background-color:#dff0d8}.has-success .form-control-feedback{color:#3c763d}.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline,.has-warning.radio label,.has-warning.checkbox label,.has-warning.radio-inline label,.has-warning.checkbox-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;border-color:#8a6d3b;background-color:#fcf8e3}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline,.has-error.radio label,.has-error.checkbox label,.has-error.radio-inline label,.has-error.checkbox-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;border-color:#a94442;background-color:#f2dede}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.form-inline .input-group .form-control{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .radio,.form-inline .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .radio label,.form-inline .checkbox label{padding-left:0}.form-inline .radio input[type="radio"],.form-inline .checkbox input[type="checkbox"]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline{margin-top:0;margin-bottom:0;padding-top:7px}.form-horizontal .radio,.form-horizontal .checkbox{min-height:27px}.form-horizontal .form-group{margin-left:-15px;margin-right:-15px}@media (min-width:768px){.form-horizontal .control-label{text-align:right;margin-bottom:0;padding-top:7px}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}.btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;padding:6px 12px;font-size:14px;line-height:1.42857143;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.btn:focus,.btn:active:focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn.active.focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:hover,.btn:focus,.btn.focus{color:#333;text-decoration:none}.btn:active,.btn.active{outline:0;background-image:none;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;opacity:.65;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none}a.btn.disabled,fieldset[disabled] a.btn{pointer-events:none}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:focus,.btn-default.focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default:active:hover,.btn-default.active:hover,.open>.dropdown-toggle.btn-default:hover,.btn-default:active:focus,.btn-default.active:focus,.open>.dropdown-toggle.btn-default:focus,.btn-default:active.focus,.btn-default.active.focus,.open>.dropdown-toggle.btn-default.focus{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled.focus,.btn-default[disabled].focus,fieldset[disabled] .btn-default.focus{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary:focus,.btn-primary.focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active:hover,.btn-primary.active:hover,.open>.dropdown-toggle.btn-primary:hover,.btn-primary:active:focus,.btn-primary.active:focus,.open>.dropdown-toggle.btn-primary:focus,.btn-primary:active.focus,.btn-primary.active.focus,.open>.dropdown-toggle.btn-primary.focus{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled.focus,.btn-primary[disabled].focus,fieldset[disabled] .btn-primary.focus{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success:focus,.btn-success.focus{color:#fff;background-color:#449d44;border-color:#255625}.btn-success:hover{color:#fff;background-color:#449d44;border-color:#398439}.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success:active:hover,.btn-success.active:hover,.open>.dropdown-toggle.btn-success:hover,.btn-success:active:focus,.btn-success.active:focus,.open>.dropdown-toggle.btn-success:focus,.btn-success:active.focus,.btn-success.active.focus,.open>.dropdown-toggle.btn-success.focus{color:#fff;background-color:#398439;border-color:#255625}.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled.focus,.btn-success[disabled].focus,fieldset[disabled] .btn-success.focus{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info:focus,.btn-info.focus{color:#fff;background-color:#31b0d5;border-color:#1b6d85}.btn-info:hover{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info:active:hover,.btn-info.active:hover,.open>.dropdown-toggle.btn-info:hover,.btn-info:active:focus,.btn-info.active:focus,.open>.dropdown-toggle.btn-info:focus,.btn-info:active.focus,.btn-info.active.focus,.open>.dropdown-toggle.btn-info.focus{color:#fff;background-color:#269abc;border-color:#1b6d85}.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled.focus,.btn-info[disabled].focus,fieldset[disabled] .btn-info.focus{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning:focus,.btn-warning.focus{color:#fff;background-color:#ec971f;border-color:#985f0d}.btn-warning:hover{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning:active:hover,.btn-warning.active:hover,.open>.dropdown-toggle.btn-warning:hover,.btn-warning:active:focus,.btn-warning.active:focus,.open>.dropdown-toggle.btn-warning:focus,.btn-warning:active.focus,.btn-warning.active.focus,.open>.dropdown-toggle.btn-warning.focus{color:#fff;background-color:#d58512;border-color:#985f0d}.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled.focus,.btn-warning[disabled].focus,fieldset[disabled] .btn-warning.focus{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger:focus,.btn-danger.focus{color:#fff;background-color:#c9302c;border-color:#761c19}.btn-danger:hover{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger:active:hover,.btn-danger.active:hover,.open>.dropdown-toggle.btn-danger:hover,.btn-danger:active:focus,.btn-danger.active:focus,.open>.dropdown-toggle.btn-danger:focus,.btn-danger:active.focus,.btn-danger.active.focus,.open>.dropdown-toggle.btn-danger.focus{color:#fff;background-color:#ac2925;border-color:#761c19}.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled.focus,.btn-danger[disabled].focus,fieldset[disabled] .btn-danger.focus{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{color:#337ab7;font-weight:normal;border-radius:0}.btn-link,.btn-link:active,.btn-link.active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active{border-color:transparent}.btn-link:hover,.btn-link:focus{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:hover,fieldset[disabled] .btn-link:hover,.btn-link[disabled]:focus,fieldset[disabled] .btn-link:focus{color:#777;text-decoration:none}.btn-lg,.btn-group-lg>.btn{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-sm,.btn-group-sm>.btn{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-xs,.btn-group-xs>.btn{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type="submit"].btn-block,input[type="reset"].btn-block,input[type="button"].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-property:height, visibility;-o-transition-property:height, visibility;transition-property:height, visibility;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-top:4px solid \9;border-right:4px solid transparent;border-left:4px solid transparent}.dropup,.dropdown{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;list-style:none;font-size:14px;text-align:left;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,0.175);box-shadow:0 6px 12px rgba(0,0,0,0.175);-webkit-background-clip:padding-box;background-clip:padding-box}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:normal;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{text-decoration:none;color:#262626;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{color:#fff;text-decoration:none;outline:0;background-color:#337ab7}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{color:#777}.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{text-decoration:none;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);cursor:not-allowed}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{left:auto;right:0}.dropdown-menu-left{left:0;right:auto}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;left:0;right:0;bottom:0;top:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{border-top:0;border-bottom:4px dashed;border-bottom:4px solid \9;content:""}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}@media (min-width:768px){.navbar-right .dropdown-menu{left:auto;right:0}.navbar-right .dropdown-menu-left{left:0;right:auto}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group>.btn,.btn-group-vertical>.btn{position:relative;float:left}.btn-group>.btn:hover,.btn-group-vertical>.btn:hover,.btn-group>.btn:focus,.btn-group-vertical>.btn:focus,.btn-group>.btn:active,.btn-group-vertical>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn.active{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-top-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-bottom-left-radius:0;border-top-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-top-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-bottom-left-radius:0;border-top-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-left:8px;padding-right:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-left:12px;padding-right:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-right-radius:4px;border-top-left-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-right-radius:0;border-top-left-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-right-radius:0;border-top-left-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{float:none;display:table-cell;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle="buttons"]>.btn input[type="radio"],[data-toggle="buttons"]>.btn-group>.btn input[type="radio"],[data-toggle="buttons"]>.btn input[type="checkbox"],[data-toggle="buttons"]>.btn-group>.btn input[type="checkbox"]{position:absolute;clip:rect(0, 0, 0, 0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*="col-"]{float:none;padding-left:0;padding-right:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn,select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn,select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn{height:auto}.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell}.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:normal;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type="radio"],.input-group-addon input[type="checkbox"]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:last-child>.btn-group:not(:last-child)>.btn{border-bottom-right-radius:0;border-top-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:first-child>.btn-group:not(:first-child)>.btn{border-bottom-left-radius:0;border-top-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:hover,.input-group-btn>.btn:focus,.input-group-btn>.btn:active{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:hover,.nav>li>a:focus{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:hover,.nav>li.disabled>a:focus{color:#777;text-decoration:none;background-color:transparent;cursor:not-allowed}.nav .open>a,.nav .open>a:hover,.nav .open>a:focus{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{color:#555;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent;cursor:default}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{text-align:center;margin-bottom:5px}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{text-align:center;margin-bottom:5px}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-right-radius:0;border-top-left-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1);-webkit-overflow-scrolling:touch}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block !important;height:auto !important;padding-bottom:0;overflow:visible !important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:200px}}.container>.navbar-header,.container-fluid>.navbar-header,.container>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-header,.container-fluid>.navbar-header,.container>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top,.navbar-fixed-bottom{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;padding:15px 15px;font-size:18px;line-height:20px;height:50px}.navbar-brand:hover,.navbar-brand:focus{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu>li>a,.navbar-nav .open .dropdown-menu .dropdown-header{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:hover,.navbar-nav .open .dropdown-menu>li>a:focus{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{margin-left:-15px;margin-right:-15px;padding:10px 15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);margin-top:8px;margin-bottom:8px}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn,.navbar-form .input-group .form-control{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .radio,.navbar-form .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .radio label,.navbar-form .checkbox label{padding-left:0}.navbar-form .radio input[type="radio"],.navbar-form .checkbox input[type="checkbox"]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;border:0;margin-left:0;margin-right:0;padding-top:0;padding-bottom:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-right-radius:0;border-top-left-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-right-radius:4px;border-top-left-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-left:15px;margin-right:15px}}@media (min-width:768px){.navbar-left{float:left !important}.navbar-right{float:right !important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:hover,.navbar-default .navbar-nav>li>a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:hover,.navbar-default .navbar-nav>.active>a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:hover,.navbar-default .navbar-nav>.disabled>a:focus{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:hover,.navbar-default .navbar-nav>.open>a:focus{background-color:#e7e7e7;color:#555}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#ccc;background-color:transparent}}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:hover,.navbar-default .btn-link:focus{color:#333}.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:hover,.navbar-default .btn-link[disabled]:focus,fieldset[disabled] .navbar-default .btn-link:focus{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:hover,.navbar-inverse .navbar-nav>li>a:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>.active>a:focus{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:hover,.navbar-inverse .navbar-nav>.disabled>a:focus{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:focus{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a:focus{background-color:#080808;color:#fff}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:hover,.navbar-inverse .btn-link:focus{color:#fff}.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:hover,.navbar-inverse .btn-link[disabled]:focus,fieldset[disabled] .navbar-inverse .btn-link:focus{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{content:"/\00a0";padding:0 5px;color:#ccc}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;line-height:1.42857143;text-decoration:none;color:#337ab7;background-color:#fff;border:1px solid #ddd;margin-left:-1px}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-bottom-right-radius:4px;border-top-right-radius:4px}.pagination>li>a:hover,.pagination>li>span:hover,.pagination>li>a:focus,.pagination>li>span:focus{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{z-index:3;color:#fff;background-color:#337ab7;border-color:#337ab7;cursor:default}.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:#777;background-color:#fff;border-color:#ddd;cursor:not-allowed}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-bottom-left-radius:6px;border-top-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-bottom-right-radius:6px;border-top-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-bottom-left-radius:3px;border-top-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-bottom-right-radius:3px;border-top-right-radius:3px}.pager{padding-left:0;margin:20px 0;list-style:none;text-align:center}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:hover,.pager li>a:focus{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:hover,.pager .disabled>a:focus,.pager .disabled>span{color:#777;background-color:#fff;cursor:not-allowed}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:bold;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:hover,a.label:focus{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:hover,.label-default[href]:focus{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:hover,.label-primary[href]:focus{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:hover,.label-success[href]:focus{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:hover,.label-info[href]:focus{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:hover,.label-warning[href]:focus{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:hover,.label-danger[href]:focus{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:bold;color:#fff;line-height:1;vertical-align:middle;white-space:nowrap;text-align:center;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-xs .badge,.btn-group-xs>.btn .badge{top:0;padding:1px 5px}a.badge:hover,a.badge:focus{color:#fff;text-decoration:none;cursor:pointer}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron h1,.jumbotron .h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron,.container-fluid .jumbotron{border-radius:6px;padding-left:15px;padding-right:15px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron,.container-fluid .jumbotron{padding-left:60px;padding-right:60px}.jumbotron h1,.jumbotron .h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail>img,.thumbnail a>img{margin-left:auto;margin-right:auto}a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:bold}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{background-color:#dff0d8;border-color:#d6e9c6;color:#3c763d}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{background-color:#d9edf7;border-color:#bce8f1;color:#31708f}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{background-color:#fcf8e3;border-color:#faebcc;color:#8a6d3b}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{background-color:#f2dede;border-color:#ebccd1;color:#a94442}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{overflow:hidden;height:20px;margin-bottom:20px;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1)}.progress-bar{float:left;width:0%;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-striped .progress-bar,.progress-bar-striped{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress.active .progress-bar,.progress-bar.active{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{zoom:1;overflow:hidden}.media-body{width:10000px}.media-object{display:block}.media-object.img-thumbnail{max-width:none}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-left,.media-right,.media-body{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{margin-bottom:20px;padding-left:0}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-right-radius:4px;border-top-left-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item,button.list-group-item{color:#555}a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading{color:#333}a.list-group-item:hover,button.list-group-item:hover,a.list-group-item:focus,button.list-group-item:focus{text-decoration:none;color:#555;background-color:#f5f5f5}button.list-group-item{width:100%;text-align:left}.list-group-item.disabled,.list-group-item.disabled:hover,.list-group-item.disabled:focus{background-color:#eee;color:#777;cursor:not-allowed}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>.small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:hover .list-group-item-text,.list-group-item.active:focus .list-group-item-text{color:#c7ddef}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success,button.list-group-item-success{color:#3c763d}a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:hover,button.list-group-item-success:hover,a.list-group-item-success:focus,button.list-group-item-success:focus{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,button.list-group-item-success.active,a.list-group-item-success.active:hover,button.list-group-item-success.active:hover,a.list-group-item-success.active:focus,button.list-group-item-success.active:focus{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info,button.list-group-item-info{color:#31708f}a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:hover,button.list-group-item-info:hover,a.list-group-item-info:focus,button.list-group-item-info:focus{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,button.list-group-item-info.active,a.list-group-item-info.active:hover,button.list-group-item-info.active:hover,a.list-group-item-info.active:focus,button.list-group-item-info.active:focus{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning,button.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:hover,button.list-group-item-warning:hover,a.list-group-item-warning:focus,button.list-group-item-warning:focus{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,button.list-group-item-warning.active,a.list-group-item-warning.active:hover,button.list-group-item-warning.active:hover,a.list-group-item-warning.active:focus,button.list-group-item-warning.active:focus{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger,button.list-group-item-danger{color:#a94442}a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:hover,button.list-group-item-danger:hover,a.list-group-item-danger:focus,button.list-group-item-danger:focus{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,button.list-group-item-danger.active,a.list-group-item-danger.active:hover,button.list-group-item-danger.active:hover,a.list-group-item-danger.active:focus,button.list-group-item-danger.active:focus{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.05);box-shadow:0 1px 1px rgba(0,0,0,0.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-right-radius:3px;border-top-left-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>a,.panel-title>small,.panel-title>.small,.panel-title>small>a,.panel-title>.small>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-right-radius:3px;border-top-left-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{border-top-right-radius:0;border-top-left-radius:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.table,.panel>.table-responsive>.table,.panel>.panel-collapse>.table{margin-bottom:0}.panel>.table caption,.panel>.table-responsive>.table caption,.panel>.panel-collapse>.table caption{padding-left:15px;padding-right:15px}.panel>.table:first-child,.panel>.table-responsive:first-child>.table:first-child{border-top-right-radius:3px;border-top-left-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table:last-child,.panel>.table-responsive:last-child>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-left-radius:3px;border-bottom-right-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child th,.panel>.table>tbody:first-child>tr:first-child td{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{border:0;margin-bottom:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.panel-body,.panel-group .panel-heading+.panel-collapse>.list-group{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive iframe,.embed-responsive embed,.embed-responsive object,.embed-responsive video{position:absolute;top:0;left:0;bottom:0;height:100%;width:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,0.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:bold;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.2;filter:alpha(opacity=20)}.close:hover,.close:focus{color:#000;text-decoration:none;cursor:pointer;opacity:.5;filter:alpha(opacity=50)}button.close{padding:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none}.modal{display:none;overflow:hidden;position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transform:translate(0, -25%);-ms-transform:translate(0, -25%);-o-transform:translate(0, -25%);transform:translate(0, -25%);-webkit-transition:-webkit-transform 0.3s ease-out;-o-transition:-o-transform 0.3s ease-out;transition:transform 0.3s ease-out}.modal.in .modal-dialog{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;border:1px solid #999;border:1px solid rgba(0,0,0,0.2);border-radius:6px;-webkit-box-shadow:0 3px 9px rgba(0,0,0,0.5);box-shadow:0 3px 9px rgba(0,0,0,0.5);-webkit-background-clip:padding-box;background-clip:padding-box;outline:0}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{opacity:0;filter:alpha(opacity=0)}.modal-backdrop.in{opacity:.5;filter:alpha(opacity=50)}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-left:5px;margin-bottom:0}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,0.5);box-shadow:0 5px 15px rgba(0,0,0,0.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-weight:normal;letter-spacing:normal;line-break:auto;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;white-space:normal;word-break:normal;word-spacing:normal;word-wrap:normal;font-size:12px;opacity:0;filter:alpha(opacity=0)}.tooltip.in{opacity:.9;filter:alpha(opacity=90)}.tooltip.top{margin-top:-3px;padding:5px 0}.tooltip.right{margin-left:3px;padding:0 5px}.tooltip.bottom{margin-top:3px;padding:5px 0}.tooltip.left{margin-left:-3px;padding:0 5px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{bottom:0;right:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-weight:normal;letter-spacing:normal;line-break:auto;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;white-space:normal;word-break:normal;word-spacing:normal;word-wrap:normal;font-size:14px;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2)}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{margin:0;padding:8px 14px;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{border-width:10px;content:""}.popover.top>.arrow{left:50%;margin-left:-11px;border-bottom-width:0;border-top-color:#999;border-top-color:rgba(0,0,0,0.25);bottom:-11px}.popover.top>.arrow:after{content:" ";bottom:1px;margin-left:-10px;border-bottom-width:0;border-top-color:#fff}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-left-width:0;border-right-color:#999;border-right-color:rgba(0,0,0,0.25)}.popover.right>.arrow:after{content:" ";left:1px;bottom:-10px;border-left-width:0;border-right-color:#fff}.popover.bottom>.arrow{left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,0.25);top:-11px}.popover.bottom>.arrow:after{content:" ";top:1px;margin-left:-10px;border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,0.25)}.popover.left>.arrow:after{content:" ";right:1px;border-right-width:0;border-left-color:#fff;bottom:-10px}.carousel{position:relative}.carousel-inner{position:relative;overflow:hidden;width:100%}.carousel-inner>.item{display:none;position:relative;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>img,.carousel-inner>.item>a>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform 0.6s ease-in-out;-o-transition:-o-transform 0.6s ease-in-out;transition:transform 0.6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.next,.carousel-inner>.item.active.right{-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0);left:0}.carousel-inner>.item.prev,.carousel-inner>.item.active.left{-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0);left:0}.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right,.carousel-inner>.item.active{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);left:0}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;left:0;bottom:0;width:15%;opacity:.5;filter:alpha(opacity=50);font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6);background-color:rgba(0,0,0,0)}.carousel-control.left{background-image:-webkit-linear-gradient(left, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.0001) 100%);background-image:-o-linear-gradient(left, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.0001) 100%);background-image:-webkit-gradient(linear, left top, right top, color-stop(0, rgba(0,0,0,0.5)), to(rgba(0,0,0,0.0001)));background-image:linear-gradient(to right, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.0001) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1)}.carousel-control.right{left:auto;right:0;background-image:-webkit-linear-gradient(left, rgba(0,0,0,0.0001) 0, rgba(0,0,0,0.5) 100%);background-image:-o-linear-gradient(left, rgba(0,0,0,0.0001) 0, rgba(0,0,0,0.5) 100%);background-image:-webkit-gradient(linear, left top, right top, color-stop(0, rgba(0,0,0,0.0001)), to(rgba(0,0,0,0.5)));background-image:linear-gradient(to right, rgba(0,0,0,0.0001) 0, rgba(0,0,0,0.5) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1)}.carousel-control:hover,.carousel-control:focus{outline:0;color:#fff;text-decoration:none;opacity:.9;filter:alpha(opacity=90)}.carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right{position:absolute;top:50%;margin-top:-10px;z-index:5;display:inline-block}.carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left{left:50%;margin-left:-10px}.carousel-control .icon-next,.carousel-control .glyphicon-chevron-right{right:50%;margin-right:-10px}.carousel-control .icon-prev,.carousel-control .icon-next{width:20px;height:20px;line-height:1;font-family:serif}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;margin-left:-30%;padding-left:0;list-style:none;text-align:center}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;border:1px solid #fff;border-radius:10px;cursor:pointer;background-color:#000 \9;background-color:rgba(0,0,0,0)}.carousel-indicators .active{margin:0;width:12px;height:12px;background-color:#fff}.carousel-caption{position:absolute;left:15%;right:15%;bottom:20px;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-prev,.carousel-control .icon-next{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{left:20%;right:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.clearfix:before,.clearfix:after,.dl-horizontal dd:before,.dl-horizontal dd:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after,.btn-toolbar:before,.btn-toolbar:after,.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after,.pager:before,.pager:after,.panel-body:before,.panel-body:after,.modal-header:before,.modal-header:after,.modal-footer:before,.modal-footer:after{content:" ";display:table}.clearfix:after,.dl-horizontal dd:after,.container:after,.container-fluid:after,.row:after,.form-horizontal .form-group:after,.btn-toolbar:after,.btn-group-vertical>.btn-group:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after,.pager:after,.panel-body:after,.modal-header:after,.modal-footer:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right !important}.pull-left{float:left !important}.hide{display:none !important}.show{display:block !important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none !important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none !important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none !important}@media (max-width:767px){.visible-xs{display:block !important}table.visible-xs{display:table !important}tr.visible-xs{display:table-row !important}th.visible-xs,td.visible-xs{display:table-cell !important}}@media (max-width:767px){.visible-xs-block{display:block !important}}@media (max-width:767px){.visible-xs-inline{display:inline !important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block !important}table.visible-sm{display:table !important}tr.visible-sm{display:table-row !important}th.visible-sm,td.visible-sm{display:table-cell !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block !important}table.visible-md{display:table !important}tr.visible-md{display:table-row !important}th.visible-md,td.visible-md{display:table-cell !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block !important}}@media (min-width:1200px){.visible-lg{display:block !important}table.visible-lg{display:table !important}tr.visible-lg{display:table-row !important}th.visible-lg,td.visible-lg{display:table-cell !important}}@media (min-width:1200px){.visible-lg-block{display:block !important}}@media (min-width:1200px){.visible-lg-inline{display:inline !important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block !important}}@media (max-width:767px){.hidden-xs{display:none !important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none !important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none !important}}@media (min-width:1200px){.hidden-lg{display:none !important}}.visible-print{display:none !important}@media print{.visible-print{display:block !important}table.visible-print{display:table !important}tr.visible-print{display:table-row !important}th.visible-print,td.visible-print{display:table-cell !important}}.visible-print-block{display:none !important}@media print{.visible-print-block{display:block !important}}.visible-print-inline{display:none !important}@media print{.visible-print-inline{display:inline !important}}.visible-print-inline-block{display:none !important}@media print{.visible-print-inline-block{display:inline-block !important}}@media print{.hidden-print{display:none !important}}


        #scrollUp {
            border: 3px solid rgba(0, 0, 0, 0.1);
            border-radius: 100%;
            bottom: 15px;
            box-sizing: content-box;
            color: #fff;
            font-size: 20px;
            height: 50px;
            line-height: 63px;
            position: fixed;
            right: 15px;
            text-align: center;
            transition: all 0.3s ease 0s;
            width: 50px;
            z-index: 200;
        }
        #scrollUp:hover {} @-webkit-keyframes scroll-ani-to-top {
                               0% {
                                   opacity: 0;
                                   bottom: 0;
                               }
                               50% {
                                   opacity: 1;
                                   bottom: 50%;
                               }
                               100% {
                                   opacity: 0;
                                   bottom: 75%;
                               }
                           }
        @-moz-keyframes scroll-ani-to-top {
            0% {
                opacity: 0;
                bottom: 0;
            }
            50% {
                opacity: 1;
                bottom: 50%;
            }
            100% {
                opacity: 0;
                bottom: 75%;
            }
        }
        @keyframes scroll-ani-to-top {
            0% {
                opacity: 0;
                bottom: 0;
            }
            50% {
                opacity: 1;
                bottom: 50%;
            }
            100% {
                opacity: 0;
                bottom: 75%;
            }
        }
        #scrollUp:hover i {
            animation: 800ms linear 0s normal none infinite running scroll-ani-to-top;
            height: 100%;
            left: 0;
            margin-bottom: -25px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        #scrollUp i {
            color: #fff;
            font-size: 36px;
        }
        #scrollUp {
            background: #cfcecc none repeat scroll 0 0;
        }
        /*---------------------------------------
  End Scroll To Top
----------------------------------------*/
        /*---------------------------------------
  03. Product Area
----------------------------------------*/

        .pro__thumb a {
            display: block;
        }
        .product__action li a span {
            color: #666666;
            font-size: 20px;
            transition: all 0.3s ease 0s;
            margin-top: 14px;
            display: inline-block;
        }
        .home-6 .product__action li a span {
            margin-top: 0px;
            font-size: 18px;
        }
        .home-6.popular__product--6 .product__action li {
            border-radius: 50px;
            box-shadow: none;
        }
        .product__action li:first-child::before {
            background: #666666 none repeat scroll 0 0;
            content: "";
            height: 24px;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
        }
        .another-product-style .product__action li::before {
            background: #666666 none repeat scroll 0 0;
            content: "";
            height: 24px;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
        }
        .another-product-style .product__action li:last-child::before {
            content: none;
        }
        .another-product-style .product__action {
            width: 155px;
        }
        .another-product-style .product__details {
            text-align: center;
        }
        .another-product-style .product__price {
            display: block;
        }
        .another-product-style .product__price li {
            display: inline-block;
        }
        .product__action li {
            position: relative;
            width: 50%;
        }
        .product__action li a span:hover {
            color: #fd3f0f;
        }
        .product:hover .product__hover__info {
            opacity: 1;
            top: 50%;
        }
        .add__to__wishlist a span {
            color: #000000;
            font-size: 14px;
            transition: all 0.4s ease 0s;
        }
        .add__to__wishlist a span:hover {
            color: #ff4136;
        }
        .product__details h2 {
            color: #444444;
            font-size: 14px;
            font-weight: 500;
        }
        .product__price li {
            color: #ff4136;
            font-size: 16px;
        }
        .product__price li.new__price {
            padding-left: 12px;
        }
        .product__price li.old__price {
            color: #9c9b9b;
            text-decoration: line-through;
        }
        .product__menu {
            text-align: center;
        }
        .product__menu button {
            background: transparent none repeat scroll 0 0;
            border: 0 none;
            color: #666666;
            font-size: 17px;
            font-weight: 500;
            line-height: 20px;
            padding: 0 20px;
            text-transform: uppercase;
            transition: all 0.4s ease 0s;
        }
        .product__filter--7 .product__menu button:first-child {
            padding-left: 0;
        }
        .product__filter--7 .product__menu button:last-child {
            padding-right: 0;
        }
        .product__menu button:hover {
            color: #ff4136;
        }
        .product__menu button.is-checked {
            color: #ff4136;
        }
        /* single product */

        .product-details-style2 .product__big__images {
            display: block;
            max-width: 100%;
            overflow: hidden;
        }
        .product-details-style2 .product__details__container {
            display: block;
        }
        .product-details-style2 .product__small__images {
            margin-top: 30px;
        }
        .product-details-style2 .pot-small-img {
            display: inline-block;
            margin-right: 22px;
            margin-top: 0;
            width: 22%;
        }
        .product-details-style2 .pot-small-img:last-child {
            margin-right: 0px;
        }
        .product-details-style2 .product__small__images {
            min-width: inherit;
            padding-right: 0;
        }
        .sin-product-details-slider a > img {
            border: 1px solid #ddd;
        }
        .product-details-style3 .product__details__container {
            margin-right: 5px;
        }
        .product-details-style3 .pro__rating {
            display: block;
            padding-right: 0px;
        }
        .product-details-style3 .pro__dtl__btn,
        .product-details-style3 .product-action-wrap,
        .product-details-style3 .pro__social__share,
        .product-details-style3 .pro__dtl__prize,
        .product-details-style3 .pro__dtl__rating {
            display: block;
        }
        .product-details-style3 .pro__choose__color li,
        .product-details-style3 .pro__choose__size > li,
        .product-details-style3 .pro__dtl__btn li,
        .product-details-style3 .pro__social__share h2,
        .product-details-style3 .pro__soaial__link li,
        .product-details-style3 .pro__soaial__link,
        .product-details-style3 .product-quantity,
        .product-details-style3 .prodict-statas,
        .product-details-style3 .pro__dtl__prize li,
        .product-details-style3 .pro__rating > li,
        .product-details-style3 .title__5,
        .product-details-style3 .pro__choose__size,
        .product-details-style3 .pro__choose__color {
            display: inline-block;
        }
        .product-details-slider.owl-carousel .owl-nav div {
            background-color: #fff;
            border: 1px solid #fff;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            color: #333;
            font-size: 25px;
            height: 40px;
            line-height: 40px;
            opacity: 0;
            position: absolute;
            right: 0;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
            transition: all 0.5s ease 0s;
            width: 40px;
        }
        .product-details-slider.owl-carousel .owl-nav div.owl-prev {
            left: 0;
            right: auto;
        }
        .product-details-slider:hover .owl-nav div {
            opacity: 1;
        }
        .product-details-style3 .pro__details p {
            margin: 0 auto;
            width: 71%;
        }
        .single-portfolio-details {
            float: left;
            padding: 5px;
            width: 50%;
        }
        .single-portfolio-details a > img {
            border: 1px solid #ddd;
            width: 100%;
        }
        .product__details__container.product-details-5 {
            display: block;
        }
        .scroll-single-product > img {
            width: 100%;
        }
        .sidebar-active {
            will-change: min-height;
        }
        .sidebarinner {
            transform: translate(0, 0);
            will-change: position, transform;
        }
        .is-affixed .inner-wrapper-sticky {
            padding-left: 15px;
        }
        .product-video-position {
            position: relative;
        }
        .product-video {
            bottom: 0;
            left: 0;
            padding: 0 0 50px 20px;
            position: absolute;
            content: "";
            z-index: 99;
        }
        .product-video a {
            border: 1px solid #ddd;
            display: inline-block;
            padding: 7px 20px 4px;
        }
        .product-video a i {
            display: inline-block;
            float: left;
            margin-right: 5px;
            margin-top: 4px;
        }
        .on-sale {
            content: "";
            position: absolute;
            right: 20px;
            top: 20px;
        }
        .on-sale span {
            background-color: #ff4136;
            border-radius: 50px;
            color: #fff;
            display: inline-block;
            line-height: 1;
            padding: 5px 9px;
            text-transform: capitalize;
        }



        .product-categories-title > h3 {
            border-left: 1px solid rgba(129, 129, 129, 0.2);
            border-right: 1px solid rgba(129, 129, 129, 0.2);
            border-top: 2px solid #ff4136;
            color: #303030;
            font-size: 17px;
            font-weight: 500;
            padding: 15px;
            position: relative;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }
        .product-categories-menu {
            background: #ffffff none repeat scroll 0 0;
            border: 1px solid rgba(129, 129, 129, 0.2);
            padding: 20px 0;
            width: 100%;
        }
        .product-categories-menu ul li {
            position: relative;
        }
        .product-categories-menu ul li a {
            background-color: #fff;
            color: #333;
            display: block;
            font-size: 14px;
            letter-spacing: 0.4px;
            padding: 7px 20px;
            text-transform: capitalize;
            transition: all 0.3s ease 0s;
        }
        .product-categories-menu ul li a:hover {
            color: #ff4136;
        }
        .product-tab-list {
            border-color: #ff4136 rgba(129, 129, 129, 0.2) rgba(129, 129, 129, 0.2);
            border-style: solid;
            border-width: 2px 1px 1px;
            padding: 14px 20px 10px;
        }
        .product-slider-active .col-lg-4,
        .product-slider-active .col-sm-4,
        .product-slider-active .col-md-4,
        .product-slider-active .col-xa-12 {
            width: 100%;
        }
        .tab-style > li {
            display: inline-block;
        }
        .product-slider-active .product {
            margin-top: 30px;
        }
        .tab-menu-text > h4 {
            color: #303030;
            font-size: 16px;
            font-weight: 400;
            padding: 0 30px 0 0;
            position: relative;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }
        .product-tab-list ul li.active .tab-menu-text > h4,
        .product-tab-list ul li .tab-menu-text > h4:hover {
            color: #ff4136;
        }
        .product-style-tab {
            position: relative;
        }
        .product-slider-active.owl-carousel .owl-nav div {
            font-size: 25px;
            opacity: 1;
            position: absolute;
            right: 45px;
            text-align: center;
            top: -37px;
            transition: all 0.3s ease 0s;
            visibility: visible;
            width: 30px;
            color: #303030;
        }
        .product-slider-active.owl-carousel .owl-nav div:hover {
            color: #ff4136;
        }
        .product-slider-active.owl-carousel .owl-nav div.owl-next {
            left: auto;
            right: 20px;
        }
        .deal-area {
            padding-top: 96px;
        }
        .timer span {
            border: 1px solid #666;
            display: inline-block;
            float: left;
            font-size: 25px;
            margin-right: 20px;
            padding: 10px 20px;
            font-weight: 600;
        }
        .timer span p {
            font-size: 15px;
        }
        .timer {
            display: block;
            margin: 30px 0;
            overflow: hidden;
            text-align: center;
        }
        .deal-area > h2 {
            font-size: 60px;
            font-weight: 600;
            line-height: 1;
            margin-bottom: 15px;
        }
        .deal-area > p {
            font-size: 25px;
            letter-spacing: 2px;
        }
        .deal-area > a {
            background-color: #303030;
            color: #fff;
            display: inline-block;
            line-height: 1;
            padding: 12px 20px 11px;
            text-transform: uppercase;
        }
        .deal-area > a:hover {
            background-color: #ff4136;
        }
        .banner-img > img {
            width: 100%;
        }
        .tab-style.product-tab-list-btn {
            display: inline-block;
            float: left;
        }
        .all-product-btn {
            text-align: right;
        }
        .all-product-btn a {
            color: #303030;
            font-size: 17px;
            font-weight: 500;
            padding: 0;
            position: relative;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }
        .all-product-btn a:hover {
            color: #ff4136;
        }
        .product-slider-active2 .product {
            margin-top: 30px;
        }
        .tab-content.jump > .tab-pane {
            display: block;
            height: 0;
            opacity: 0;
            overflow: hidden;
        }
        .tab-content.jump > .tab-pane.active {
            display: block;
            height: auto;
            opacity: 1;
            overflow: visible;
        }




        /*------------------------------
  04. Log In Register Area
--------------------------------*/

        .single__tabs__panel.tab-pane:not(.active) {
            display: none;
        }
        .login__register__menu {
            display: flex;
            justify-content: center;
            margin: 0 auto 51px;
            max-width: 370px;
        }
        .login__register__menu li a {
            color: #000000;
            font-size: 30px;
            transition: all 0.4s ease 0s;
        }
        .login__register__menu li {
            padding: 0 20px;
        }
        .login__register__menu li.active a {
            color: #ff4136;
        }
        .login__register__menu li a:hover {
            color: #ff4136;
        }
        .htc__login__register__wrap {
            margin: 0 auto;
            max-width: 370px;
        }
        .login input {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: currentcolor currentcolor #8e8e8e;
            border-image: none;
            border-style: none none solid;
            border-width: 0 0 1px;
            color: #686868;
            font-size: 16px;
            height: 40px;
            line-height: 40px;
            padding: 0 15px;
            width: 100%;
            background: transparent;
        }
        .login input + input {
            margin-bottom: 20px;
            margin-top: 40px;
        }
        .tabs__checkbox span.forget a {
            float: right;
            color: #ff4136;
            font-size: 12px;
        }
        .tabs__checkbox label {
            bottom: 2px;
            color: #999;
            font-size: 15px;
            padding-left: 9px;
            position: relative;
            text-transform: capitalize;
            font-weight: normal;
            cursor: pointer;
        }
        .tabs__checkbox {
            margin-bottom: 20px;
        }
        .tabs__checkbox span {
            color: #686868;
            text-transform: capitalize;
            padding-left: 5px;
        }
        .htc__login__btn a {
            border: 1px solid #d5d5d5;
            display: inline-block;
            font-size: 20px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            text-transform: capitalize;
            transition: all 0.5s ease 0s;
            width: 150px;
            color: #4b4b4b;
            text-transform: uppercase;
        }
        .htc__login__btn {
            text-align: center;
        }
        .login input:last-child {
            margin-top: 14px;
        }
        .htc__social__connect h2 {
            color: #000;
            font-size: 16px;
            margin-bottom: 25px;
            margin-top: 50px;
            text-transform: capitalize;
            font-weight: 500;
        }
        .htc__soaial__list {
            display: flex;
            justify-content: center;
        }
        .htc__soaial__list li a {
            display: block;
            height: 35px;
            line-height: 35px;
            text-align: center;
            transition: all 0.5s ease 0s;
            width: 35px;
        }
        .user__meta__inner .htc__soaial__list {
            justify-content: space-between;
        }
        .htc__soaial__list li a i {
            color: #fff;
            font-size: 16px;
        }
        .htc__social__connect {
            text-align: center;
        }
        .htc__soaial__list li + li {
            margin-left: 10px;
        }
        .login input::-moz-placeholder {
            color: #686868 !important;
            font-size: 16px !important;
        }
        .htc__login__btn a:hover {
            background: #ff4136;
            color: #fff;
            border: 1px solid #ff4136;
        }
        /*------------------------------
  05. Bradcaump Area
--------------------------------*/

        .ht__bradcaump__wrap {
            align-items: center;
            display: flex;
            height: 320px;
        }
        .bradcaump-title {
            color: #343434;
            font-size: 36px;
            font-weight: 400;
            line-height: 40px;
            text-transform: capitalize;
        }
        .breadcrumb-item {
            color: #343434;
            font-size: 18px;
            text-transform: capitalize;
        }
        .breadcrumb-item.active {
            color: #343434;
            font-size: 18px;
            text-transform: capitalize;
        }
        .brd-separetor {
            padding: 0 5px;
        }
        .bradcaump-inner {
            margin-top: 23px;
        }
        /*------------------------------
  06. Quickview Area
--------------------------------*/

        #quickview-wrapper {
            position: relative;
        }
        .modal-dialog.modal__container {
            width: 1170px;
        }
        .modal-product {
            display: flex;
            padding-top: 20px;
        }
        .product-images {
            min-width: 50%;
            padding-right: 50px;
        }
        .product-info h1 {
            font-size: 20px;
            margin-bottom: 10px;
            text-transform: capitalize;
        }
        .rating__and__review {
            display: flex;
            margin-bottom: 15px;
        }
        .rating {
            display: inline-block;
            padding-right: 13px;
        }
        .rating li span {
            color: #ff4136;
        }
        .rating li {
            display: inline-block;
        }
        .rating li + li {
            margin-left: 3px;
        }
        .review a {
            color: #999;
        }
        .s-price-box span.new-price {
            color: #ff4136;
            font-size: 23px;
            margin-right: 5px;
        }
        .s-price-box span.old-price {
            color: #999;
            font-size: 15px;
            text-decoration: line-through;
        }
        .product-info {
            padding-left: 50px;
            width: 50%;
        }
        .quick-desc {
            color: #999;
            margin-bottom: 30px;
            margin-top: 30px;
            width: 83%;
        }
        .select__color {
            display: flex;
        }
        .color__list {
            align-items: center;
            display: flex;
            margin-left: 30px;
        }
        .color__list li + li {
            margin-left: 15px;
        }
        .color__list li a {
            background: #f10 none repeat scroll 0 0;
            border-radius: 100%;
            display: block;
            height: 30px;
            line-height: 31px;
            text-align: center;
            width: 30px;
        }
        .select__size {
            display: flex;
        }
        .color__list li.gold a {
            background: #cc9900 none repeat scroll 0 0;
        }
        .color__list li.orange a {
            background: #cc6600 none repeat scroll 0 0;
        }
        .select__color ul.color__list li a {
            text-indent: 999px;
        }
        .select__color h2 {
            align-items: center;
            display: flex;
            font-size: 16px;
            text-transform: capitalize;
        }
        .select__size h2 {
            align-items: center;
            display: flex;
            font-size: 16px;
            text-transform: capitalize;
        }
        .select__size {
            margin-bottom: 25px;
            margin-top: 25px;
        }
        .select__size ul.color__list li a {
            background: #f1f1f1 none repeat scroll 0 0;
            color: #999;
        }
        .widget.widget_socialsharing_widget {
            display: flex;
        }
        .social-icons {
            display: flex;
            margin-left: 30px;
        }
        h3.widget-title-modal {
            align-items: center;
            display: flex;
            font-size: 16px;
            text-transform: capitalize;
        }
        .social-icons li a {
            border-radius: 100%;
            color: #999;
            display: block;
            line-height: 30px;
            text-align: center;
            transition: all 0.3s ease 0s;
        }
        .social-icons li + li {
            margin-left: 30px;
        }
        .social-icons li a i {
            font-size: 23px;
        }
        .social-icons li a:hover {
            color: #ff4136;
        }
        .addtocart-btn {
            margin-top: 66px;
            text-align: left;
        }
        .addtocart-btn a {
            background: #333 none repeat scroll 0 0;
            color: #fff;
            display: inline-block;
            font-size: 20px;
            height: 60px;
            line-height: 60px;
            padding: 0 87px;
            text-transform: capitalize;
            transition: all 0.5s ease 0s;
        }
        .addtocart-btn a:hover {
            background: #ff4136 none repeat scroll 0 0;
            color: #fff;
        }
        /*------------------------------
  07. New Product Area
--------------------------------*/

        .new__product {
            position: relative;
        }
        .new__product__details {
            left: 30px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .new__product__thumb a img {
            width: 100%;
        }
        .new__product__details h2 {
            font-size: 22px;
            text-transform: capitalize;
        }
        .htc__btn.shop__now__btn {
            color: #3a3a3a;
            font-family: Dosis;
            font-size: 16px;
            font-weight: 500;
            padding-right: 30px;
            position: relative;
            text-transform: uppercase;
            transition: all 0.5s ease 0s;
        }
        .htc__btn.shop__now__btn::before {
            background: #000 none repeat scroll 0 0;
            content: "";
            height: 1px;
            position: absolute;
            right: 0;
            top: 50%;
            transition: all 0.5s ease 0s;
            width: 20px;
        }
        .htc__btn.shop__now__btn:hover {
            color: #ff4136;
        }
        .htc__btn.shop__now__btn:hover::before {
            background: #ff4136 none repeat scroll 0 0;
            width: 25px;
        }
        .new__product__btn {
            margin-top: 8px;
        }
        .new__product.text__align--left .new__product__details {
            left: 60px;
        }
        .new__product.text__align--left .new__product__btn {
            text-align: left;
        }
        /*------------------------------
  08. Best Product Area
--------------------------------*/

        .best__product__thumb a {
            display: flex;
        }
        .best__product__inner {
            position: relative;
            z-index: 2;
        }
        .bst__pro__hover__info {
            border: 7px solid #f3f3f3;
            height: 100%;
            opacity: 0;
            position: absolute;
            text-align: center;
            top: 0;
            transition: all 0.5s ease 0s;
            width: 100%;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 99;
        }
        .bst__pro__action {
            align-items: center;
            background: #fff none repeat scroll 0 0;
            display: flex;
            height: 38px;
            justify-content: space-around;
            margin: auto;
            width: 160px;
        }
        .bst__pro__hover__info h2 {
            color: #444;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
        }
        .bst__pro__hover__info span.bst__pro__prize {
            color: #636363;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 23px;
            margin-top: 7px;
        }
        .bst__pro__hover__info::before {
            background: #dbdbdb none repeat scroll 0 0;
            content: "";
            height: 100%;
            left: 0;
            opacity: 0.81;
            position: absolute;
            top: 0;
            transition: all 0.5s ease 0s;
            width: 100%;
            z-index: -1;
        }
        .bst__pro__action li {
            position: relative;
            width: 33.33%;
        }
        .bst__pro__action li a {
            display: block;
        }
        .bst__pro__action li + li::before {
            background: #666666 none repeat scroll 0 0;
            content: "";
            height: 75%;
            left: 0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
        }
        .bst__pro__action li a span {
            color: #666666;
            font-size: 17px;
            height: 38px;
            line-height: 38px;
            transition: all 0.3s ease 0s;
        }
        .bst__pro__action li a:hover span {
            color: #ff4e43;
        }
        .bst__pro__hover__action {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
        }
        .best__product:hover .bst__pro__hover__info {
            opacity: 1;
        }
        .best__product__thumb a img {
            width: 100%;
        }
        .best__product {
            margin-top: 30px;
        }
        .section__title .title__line {
            color: #303030;
            font-size: 30px;
            line-height: 30px;
        }
        /*------------------------------
  09. Blog Area
--------------------------------*/

        .blog__thumb a img {
            width: 100%;
        }
        .blog__inner {
            position: relative;
        }
        .blog__hover__info {
            bottom: 0;
            left: 0;
            opacity: 0;
            padding: 30px 20px;
            position: absolute;
            transition: all 0.5s ease 0s;
        }
        .blog__thumb {
            position: relative;
        }
        .blog__post__time {
            left: 20px;
            opacity: 0;
            position: absolute;
            top: 20px;
            transition: all 0.4s ease 0s;
        }
        .blog:hover .blog__post__time {
            opacity: 1;
        }
        .blog__post__time {
            background: #fff none repeat scroll 0 0;
            height: 65px;
            padding: 5px;
            text-align: center;
            width: 65px;
        }
        .blog__post__time span.date {
            display: block;
            font-size: 20px;
            font-weight: 500;
        }
        .blog__post__time span.month {
            color: #303030;
            font-size: 14px;
            text-transform: capitalize;
        }
        .bl__meta {
            display: flex;
            margin-bottom: 7px;
        }
        .bl__meta li {
            font-size: 12px;
            font-weight: 500;
            position: relative;
        }
        .bl__meta li + li {
            margin-left: 10px;
            padding-left: 10px;
        }
        .bl__meta li + li::before {
            background: #000 none repeat scroll 0 0;
            content: "";
            height: 10px;
            left: 0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
        }
        .blog__hover__action p.blog__des {
            font-size: 17px;
            font-weight: 500;
            line-height: 28px;
            margin-bottom: 7px;
        }
        .read__more__btn {
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 0.5s ease 0s;
        }
        .blog:hover .blog__hover__info {
            opacity: 1;
        }
        .post__time--inner {
            border: 1px solid #f3f3f3;
            padding-top: 3px;
            padding-bottom: 2px;
        }
        .blog--page .blog {
            margin-top: 30px
        }
        .blog--page {
            margin-top: -30px;
        }
        /*--------------------------
    Blog Style 2
----------------------------*/

        .blog--2 .blog__post__time {
            background: #f2f2f2 none repeat scroll 0 0;
        }
        .blog--2 .post__time--inner {
            border: 1px solid #fff;
        }
        .blog--2 .blog__post__time {
            margin-bottom: 176px;
        }
        /*------------------------------
  10. Feature Product Area
--------------------------------*/

        .feature__thumb a {
            display: block;
        }
        .feature__thumb a img {
            width: 100%;
        }
        .feature {
            position: relative;
        }
        .feature__details {
            bottom: 40px;
            left: 40px;
            position: absolute;
        }
        .feature__details h4 {
            color: #000;
            font-size: 22px;
            text-transform: capitalize;
        }
        .feature__btn {
            margin-top: 7px;
        }
        .feature__thumb--2 a img {
            min-height: 330px;
        }
        .feature.text__pos--top .feature__details {
            top: 40px;
        }
        /*------------------------------
  11. Popular Product Area
--------------------------------*/

        .product__details span.popular__pro__prize {
            color: #9c9b9b;
            display: inline-block;
            font-size: 16px;
            margin-top: 11px;
        }
        .section__title.section__title--2 p {
            color: #666666;
            font-size: 15px;
            line-height: 26px;
            margin: 27px auto auto;
            width: 46%;
        }
        .popular__product__wrap .product {
            margin-top: 60px;
        }
        .popular__product__wrap .col-lg-4 {
            width: 100%;
        }
        .popular__product__wrap {
            position: relative;
        }
        .popular__product__wrap.owl-carousel .owl-nav div {
            background: #9999 none repeat scroll 0 0;
            border-radius: 100%;
            color: #f5f6f8;
            height: 30px;
            left: -30px;
            line-height: 42px;
            margin: 0;
            padding: 0;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 30px;
        }
        .popular__product__wrap.owl-carousel .owl-nav div.owl-next {
            left: auto;
            position: absolute;
            right: -30px;
        }
        .popular__product__wrap.owl-carousel .owl-nav div i {
            color: #fff;
            font-size: 27px;
        }
        .popular__product__wrap.owl-theme .owl-nav [class*="owl-"]:hover {
            background: #444 none repeat scroll 0 0;
        }
        .wrap__box__style--1 {
            padding-right: 60px;
            padding-bottom: 60px;
            padding-left: 60px;
            background: #fff;
        }
        .custop__container {
            padding-left: 45px;
            padding-right: 45px;
            padding-top: 100px;
        }
        /*---------------------------------
    Popular Product Style 2
----------------------------------*/

        .popular__product--2 .popular__product__container .product__action::before,
        .product__style--7 .product__action::before {
            box-shadow: 0 0 20px 1px rgb(234, 234, 235);
            content: "";
            height: 100%;
            left: 0;
            opacity: 1;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1;
        }
        .popular__product--2 .product__action li,
        .product__style--7 .product__action li {
            text-align: center;
        }
        .product-hover-4 .popular__product__hover__info {
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: -30px;
            transition: all 0.5s ease 0s;
        }
        .product-hover-4.popular__product--2 .product:hover .popular__product__hover__info {
            opacity: 1;
            top: 0;
        }
        .popular__product__hover__info {
            opacity: 0;
            position: absolute;
            right: 20px;
            top: 0;
            transition: all 0.5s ease 0s;
        }
        .product__style--7 .popular__product__hover__info {
            opacity: 0;
            position: absolute;
            right: 0;
            top: -20px;
            transition: all 0.5s ease 0s;
        }
        .popular__product--2 .product:hover .popular__product__hover__info {
            opacity: 1;
            right: 0;
        }
        .product__style--7 .product:hover .popular__product__hover__info {
            opacity: 1;
            top: 0;
        }
        .popular__product__container .single__pro {
            padding: 0 15px;
            width: 20%;
            float: left;
            overflow: hidden;
        }
        .popular__product__container {
            margin-right: -15px;
            margin-left: -15px;
        }
        .popular__product--2 .product {
            margin-top: 30px;
        }
        .popular__product--2.product-hover-4 .product__details {
            bottom: 20px;
            left: 0;
            padding: 0;
            position: absolute;
            right: 0;
            text-align: center;
        }
        .popular__product--2 .product__details {
            bottom: 20px;
            left: 26px;
            padding: 0;
            position: absolute;
        }
        .popular__product--2 .product,
        .product__style--7 .product {
            position: relative;
        }
        .popular__product--2 .product__details span.popular__pro__prize {
            margin-top: 8px;
        }
        .popular__product--2 .product__menu {
            text-align: left;
            margin-left: -15px;
            margin-right: -15px;
        }
        .pro__thumb a img {
            width: 100%;
        }
        .popular__product--2 .product__action li:first-child::before,
        .product__style--7 .product__action li:first-child::before {
            display: none;
        }
        .popular__product--2 .product__action li a span,
        .product__style--7 .product__action li a span {
            font-size: 16px;
        }
        .variation_product .product__details {
            text-align: left;
        }
        /*---------------------------------
    Popular Product Style 3
----------------------------------*/

        .popular__product--2 .product__menu {
            text-align: center;
        }
        .popular__product__container {
            margin-left: 0;
            margin-right: 0;
        }
        .popular__product--2 .product__action::before {
            background: #fff none repeat scroll 0 0;
            opacity: 0.85;
        }
        /*---------------------------------
    Popular Product Style 4
----------------------------------*/

        .popular__product--4 .product__action {
            display: block;
            height: 100%;
            line-height: 29px;
            width: 40px;
        }
        .popular__product--4 .product__action li {
            width: 100%;
        }
        .popular__product--4 .product:hover .popular__product__hover__info {
            right: 30px;
            top: 20px;
        }
        .popular__product--4 .popular__product__hover__info {
            right: 0;
            top: 0;
        }
        .popular__product--4 .product__action li {
            height: 50%;
            line-height: 58px;
            width: 100%;
        }
        .popular__product--4 .product__action li + li::before {
            background: #666666 none repeat scroll 0 0;
            content: "";
            height: 1px;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            width: 61%;
        }
        .popular__product--4 .product__action li a span {
            font-size: 20px;
        }
        .popular__product--4 .product__details {
            opacity: 0;
            transition: 0.5s;
            bottom: -50px;
        }
        .popular__product--4 .product:hover .product__details {
            opacity: 1;
            bottom: 20px;
        }
        .popular__product--4 .product__action {
            padding: 0;
        }
        .popular__product--4 .pro__thumb a img {
            width: auto;
        }
        .popular__product--4 .pro__thumb {
            text-align: center;
        }
        /*---------------------------------
    Popular Product Style 6
----------------------------------*/

        .wrap__box__style--2 {
            background: #fff none repeat scroll 0 0;
            padding-bottom: 100px;
            padding-left: 160px;
            padding-right: 160px;
        }
        .custop__container--2 {
            padding-left: 0;
            padding-right: 0;
            padding-top: 0;
        }
        .popular__product--6 .product {
            margin-top: 4px;
        }
        .popular__product--6 .product__list div[class*="col-"] {
            padding-right: 2px;
            padding-left: 2px;
        }
        .popular__product--6 .product__list {
            margin-left: -2px;
            margin-right: -2px;
        }
        .popular__product--6 .product__action li:first-child::before {
            display: none;
        }
        .popular__product--6 .popular__product__hover__info {
            position: absolute;
            right: inherit;
            top: -60px;
            transition: all 0.5s ease 0s;
            opacity: 0;
            left: 40px
        }
        .popular__product--6 .product__action li + li {
            margin-left: 5px;
        }
        .popular__product--6 .product__action {
            width: auto;
        }
        .popular__product--6 .product__action li {
            background: #fff none repeat scroll 0 0;
            border-radius: 6px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: inline-block;
            height: 40px;
            line-height: 47px;
            position: relative;
            text-align: center;
            width: 40px;
        }
        .popular__product--6 .product:hover .popular__product__hover__info {
            top: 40px;
            opacity: 1;
        }
        .popular__product--6 .product__action::before {
            display: none;
        }
        .product {
            position: relative;
        }
        .popular__product--6 .product__details {
            bottom: -40px;
            left: 40px;
            opacity: 0;
            position: absolute;
            transition: all 0.5s ease 0s;
        }
        .product__style--7 .product__details {
            bottom: -40px;
            left: 0px;
            opacity: 0;
            position: absolute;
            transition: all 0.5s ease 0s;
            right: 0;
            text-align: center;
        }
        .popular__product--6 .product:hover .product__details,
        .product__style--7 .product:hover .product__details {
            bottom: 40px;
            opacity: 1;
        }
        .popular__product--6 .product {
            margin-top: 4px;
        }
        /*.popular__product--5*/

        .product__style--5 .pro__thumb a {
            position: relative;
            display: block;
        }
        .product__style--5 .small__display--center {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .popular__product--2 .product {
            margin-top: 60px;
        }
        .product__style--5 .product__list--5 {
            display: flex;
            flex-flow: row wrap;
        }
        .product__menu.product__tab.tab__style--1 {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .product__menu.product__tab.tab__style--1 li {
            padding: 0 20px;
        }
        .product__menu.product__tab.tab__style--1 li a {
            font-size: 17px;
            color: #666666;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 0.4s ease 0s;
        }
        .product__menu.product__tab.tab__style--1 li.active a {
            color: #ff4136;
        }
        .product__with__filter .popular__product__container {
            margin-left: -15px;
            margin-right: -15px;
        }
        /*----------------------
product__style--7
---------------------*/

        .product__style--7 .product:hover .product__details {
            bottom: 20px;
        }
        .product__style--7 .product__details {
            bottom: -20px;
        }
        .product__style--7 .product {
            margin-top: 20px;
        }
        .product__style--7 {
            margin-top: 30px;
        }
        .htc__loadmore__btn.loadmore__2 a {
            border: 1px solid #666666;
            color: #4b4b4b;
        }
        /*------------------------------
  12. Load More Area
--------------------------------*/

        .htc__loadmore__btn {
            text-align: center;
        }
        .htc__loadmore__btn a {
            border: 1px solid #eeeeee;
            color: #4b4b4b;
            display: inline-block;
            height: 45px;
            letter-spacing: 1px;
            line-height: 42px;
            padding: 0 44px;
            text-transform: uppercase;
            transition: all 0.5s ease 0s;
        }
        .htc__loadmore__btn a:hover {
            border: 1px solid #ff4136;
            color: #fff;
            background: #ff4136;
        }
        /*------------------------------
  13. Newsletter Area
--------------------------------*/

        .htc__newsletter__area .newsletter__container {
            padding: 120px 0;
            position: relative;
            text-align: center;
            z-index: 2;
        }
        .htc__newsletter__area .newsletter__container h4 {
            color: #ffffff;
            font-size: 20px;
            text-transform: capitalize;
        }
        .htc__newsletter__area .newsletter__container h2 {
            color: #ffffff;
            font-size: 36px;
            letter-spacing: 3px;
            line-height: 30px;
            margin-bottom: 30px;
            margin-top: 22px;
            text-transform: capitalize;
        }
        .htc__newsletter__area .newsletter__form {
            margin: 0 auto;
            width: 300px;
        }
        .htc__newsletter__area .input__box input {
            background: transparent none repeat scroll 0 0;
            border-left: 1px solid #fff;
            color: #afafaf;
        }
        .htc__newsletter__area .input__box input::-moz-placeholder {
            color: #afafaf !important;
        }
        .htc__newsletter__area .subscribe__btn input.bst__btn {
            background-image: url("images/icons/send-2.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 29% auto;
            position: relative;
            text-indent: -999px;
            z-index: 5;
        }
        /*------------------------------
  14. Choose Us Area
--------------------------------*/

        .store__btn {
            margin-top: 47px;
            text-align: center;
        }
        .store__btn a {
            border: 1px solid #d5d5d5;
            display: inline-block;
            font-size: 14px;
            height: 45px;
            line-height: 41px;
            padding: 0 40px;
            text-transform: uppercase;
            transition: 0.4s;
        }
        .store__btn a:hover {
            background: #ff4136;
            border: 1px solid #ff4136;
            color: #fff;
        }
        .video__wrap {
            margin-left: -15px;
            margin-right: -15px;
            padding: 220px 0;
        }
        .htc__choose__wrap {
            margin-left: -15px;
            margin-right: -15px;
        }
        .video__inner {
            text-align: center;
            position: relative;
        }
        .video-popup {
            position: relative;
            z-index: 987698;
        }
        .video__inner a i {
            background: #fff none repeat scroll 0 0;
            border-radius: 100%;
            font-size: 46px;
            height: 60px;
            line-height: 59px;
            padding-left: 4px;
            text-align: center;
            width: 60px;
        }
        .htc__choose__wrap h2 {
            color: #505050;
            font-size: 30px;
            text-transform: capitalize;
        }
        .htc__choose__wrap {
            padding: 114px 120px;
        }
        .choose__container {
            display: flex;
            margin-top: 38px;
        }
        .single__chooose {
            margin-top: -40px;
        }
        .choose__us {
            display: flex;
            margin-top: 40px;
        }
        .choose__icon span {
            color: #505050;
            font-size: 36px;
        }
        .choose__icon {
            margin-right: 20px;
        }
        .choose__icon {
            min-width: 37px;
        }
        .choose__details h4 {
            color: #505050;
            font-size: 22px;
            margin-bottom: 9px;
            text-transform: capitalize;
        }
        .choose__container .single__chooose + .single__chooose {
            margin-left: 80px;
        }
        .video__inner {
            position: relative;
            z-index: 1;
        }
        /*------------------------------
  15. Team Area
--------------------------------*/

        .team__thum a {
            display: block;
        }
        .team__thum a img {
            width: 100%;
        }
        .team {
            margin-left: -15px;
            margin-right: -15px;
            position: relative;
        }
        .team__hover__info {
            bottom: 0;
            padding: 30px;
            position: absolute;
            text-align: center;
            transform: scaleY(0);
            transition: all 0.5s ease 0s;
            width: 100%;
            z-index: 4;
        }
        .team__hover__action {
            background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
            padding: 30px 0;
            right: 30px;
            z-index: 2;
        }
        .team__hover__action h2 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 14px;
            text-transform: capitalize;
        }
        .team__hover__action .social__icon {
            justify-content: center;
        }
        .team__hover__action .social__icon li {
            padding: 0 17px;
        }
        .team__hover__action .social__icon li a i {
            border: 0 solid transparent;
            border-radius: 100%;
            color: #fff;
            font-size: 14px;
            height: auto;
            line-height: 20px;
            width: auto;
        }
        .team__hover__action .social__icon li a:hover i {
            background: transparent none repeat scroll 0 0;
            border: 0 solid transparent;
            color: #ff4136;
        }
        .team:hover .team__hover__info {
            transform: scaleY(1);
        }
        .team__wrap {
            padding-left: 15px;
            padding-right: 15px;
        }
        .team__thumb a img {
            -webkit-filter: grayscale(100%);
            /* Safari 6.0 - 9.0 */

            filter: grayscale(100%);
        }
        .team:hover .team__thumb a img {
            -webkit-filter: grayscale(0%);
            /* Safari 6.0 - 9.0 */

            filter: grayscale(00%);
        }
        .htc__team__page .team {
            margin-left: 0;
            margin-right: 0;
            margin-top: 30px;
        }
        .htc__team__page .team__wrap {
            margin-top: -30px;
        }
        /*------------------------------
  16. Testimonial Area
--------------------------------*/

        .testimonial__wrap {
            position: relative;
            text-align: center;
            z-index: 2;
        }
        .testimonial__thumb {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
        }
        .testimonial__details p {
            color: #ffffff;
            font-size: 20px;
            line-height: 39px;
            padding: 0 16%;
        }
        .test__info span {
            color: #ffffff;
            font-size: 21px;
            text-transform: capitalize;
        }
        .test__info span a {
            color: #fff;
            transition: 0.4s;
        }
        .test__info span a:hover {
            color: #ff4136;
        }
        .test__info {
            margin-top: 20px;
        }
        .testimonial__wrap.owl-carousel .owl-item img {
            display: block;
            width: auto;
        }
        /*------------------------------
  17. Our Brand Area
--------------------------------*/

        .brand__list {
            display: flex;
            justify-content: space-between;
        }
        .brand__list a {
            display: block;
        }
        /*------------------------------
  18. Our Shop Area
--------------------------------*/

        .shop__page .product__menu {
            text-align: left;
        }
        .shop__page .product__menu button:first-child {
            padding-left: 0;
        }
        .filter__menu__container {
            display: flex;
            justify-content: space-between;
        }
        .filter__box a {
            color: #666666;
            font-size: 17px;
            text-transform: uppercase;
        }
        .filter__wrap.filter__menu__on {
            opacity: 1;
            right: calc(0px - 16px);
        }
        .filter__wrap {
            background: #ffffff none repeat scroll 0 0;
            box-shadow: 0 0 85px rgba(0, 0, 0, 0.2);
            display: block;
            height: 100vh;
            opacity: 0;
            overflow-y: scroll;
            position: fixed;
            right: -100%;
            top: 0;
            transition: all 0.25s ease 0s;
            width: 500px;
            z-index: 99999;
        }
        .filter__cart__inner {
            height: 100%;
            padding: 130px 50px 60px;
        }
        .filter__menu__close__btn {
            background-color: #fff;
            left: 0;
            padding: 50px 50px 24px;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 10;
        }
        .fiter__content__inner {
            display: flex;
            flex-flow: row wrap;
            justify-content: space-between;
        }
        .single__filter {
            margin-top: 50px;
            width: 50%;
        }
        .filter__content {
            margin-top: -40px;
        }
        .single__filter h2 {
            font-size: 22px;
            margin-bottom: 13px;
            text-transform: uppercase;
        }
        .filter__list li span {
            color: #999;
            font-size: 15px;
            text-transform: capitalize;
        }
        .filter__list li + li {
            padding-top: 5px;
        }
        .filter__list li a {
            color: #999;
            transition: all 0.3s ease 0s;
        }
        .filter__list li:hover a,
        .filter__menu__close__btn a:hover i {
            color: #ff4136;
        }
        .filter__menu__close__btn a i {
            color: #999;
            font-size: 36px;
            transition: 0.3s;
        }
        .filter__list.sidebar__list li {
            line-height: 24px;
        }
        /*------------------------------
  19. Our Shop Sidebar
--------------------------------*/

        .section-title-4 {
            font-size: 18px;
            margin-bottom: 25px;
            text-transform: uppercase;
        }
        .htc__shop__cat {
            border-bottom: 1px solid #b7b7b7;
            margin-bottom: 57px;
            padding-bottom: 32px;
        }
        .htc-grid-range {
            border-bottom: 1px solid #b7b7b7;
            margin-bottom: 60px;
            padding-bottom: 40px;
        }
        .sidebar__list li {
            color: #575757;
            font-size: 14px;
            font-weight: 300;
            line-height: 34px;
            text-transform: capitalize;
        }
        .sidebar__list li span {
            float: right;
        }
        .sidebar__list li i {
            padding-right: 20px;
        }
        .sidebar__list li.black i {
            color: #000000;
        }
        .sidebar__list li.blue i {
            color: #0000ff;
        }
        .sidebar__list li.brown i {
            color: #b2aaaa;
        }
        .sidebar__list li.red i {
            color: #ff0000;
        }
        .sidebar__list li.orange i {
            color: #ffba00;
        }
        .htc__tags {
            display: flex;
            flex-flow: row wrap;
            font-weight: 300;
            margin-left: -13px;
            margin-right: -13px;
        }
        .htc__tags li a {
            color: #575757;
            font-size: 14px;
            text-transform: capitalize;
            transition: 0.3s;
        }
        .htc__tags li a:hover {
            color: #ff4136;
        }
        .htc__tags li {
            margin-bottom: 10px;
            padding: 0 13px;
        }
        .ui-slider-horizontal {
            height: 5px;
            margin-top: 20px;
        }
        .ui-widget-header {
            background: #b7b7b7 none repeat scroll 0 0;
            border: 1px solid #b7b7b7;
            color: #b7b7b7;
        }
        .ui-slider.ui-slider-horizontal.ui-widget.ui-widget-content.ui-corner-all {
            background: #ddd none repeat scroll 0 0;
            border: 0 none;
            border-radius: 0;
            height: 3px;
        }
        .ui-slider-range.ui-widget-header.ui-corner-all {
            background: #b7b7b7 none repeat scroll 0 0;
        }
        .ui-slider-handle.ui-state-default.ui-corner-all {
            background: #fff none repeat scroll 0 0;
            border: 2px solid #b7b7b7;
            border-radius: 100%;
            height: 13px;
            top: 50%;
            transform: translateY(-50%);
            width: 13px;
        }
        .price__output--wrap {
            align-items: center;
            display: flex;
            justify-content: space-between;
        }
        .price--output input {
            border: medium none;
        }
        .price--output > span {
            float: left;
        }
        .price--filter a {
            font-family: poppins;
            text-transform: uppercase;
        }
        .price--output > * {
            display: inline-block;
            float: left;
        }
        .price--output input {
            padding-left: 10px;
            width: 70%;
        }
        .slider__range--output {
            margin-top: 18px;
        }
        /*--------------------------
    Shop Right SideBar
----------------------------*/

        .producy__view__container {
            display: flex;
            justify-content: space-between;
        }
        .view__mode {
            display: flex;
            justify-content: flex-end;
        }
        .product__list__option {
            display: flex;
        }
        select.select-color {
            border: 0 none;
            color: #606060;
            font-size: 14px;
        }
        .shp__pro__show {
            align-items: center;
            display: flex;
        }
        .shp__pro__show span {
            color: #606060;
            font-size: 14px;
        }
        .view__mode li a i {
            background: #f3f3f3 none repeat scroll 0 0;
            border: 1px solid #f3f3f3;
            color: #606060;
            font-size: 20px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            transition: all 0.3s ease 0s;
            width: 35px;
        }
        .view__mode li + li {
            margin-left: 10px;
        }
        .view__mode li.active a i {
            background: transparent none repeat scroll 0 0;
            border: 1px solid #b7b7b7;
        }
        .order-single-btn {
            align-items: center;
            display: flex;
        }
        .view__mode li a:hover i {
            background: transparent none repeat scroll 0 0;
            border: 1px solid #b7b7b7;
        }
        .single-grid-view.tab-pane:not(.active) {
            display: none;
        }
        .single-grid-view .product {
            margin-top: 50px;
        }
        /*------------------------------
  20. Our Contact Area
--------------------------------*/

        #googleMap {
            height: 633px;
            width: 100%;
        }
        .contact__title {
            color: #666666;
            font-size: 20px;
            margin-bottom: 38px;
            text-transform: uppercase;
        }
        .contact__address__inner {
            display: flex;
            justify-content: space-between;
        }
        .single__contact__address {
            display: flex;
        }
        .contact__icon {
            margin-right: 20px;
            min-width: 60px;
        }
        .contact__icon span {
            border: 1px solid #cbcbcb;
            border-radius: 100%;
            color: #393939;
            display: block;
            font-size: 24px;
            height: 60px;
            line-height: 54px;
            text-align: center;
            width: 60px;
        }
        .contact__address__inner + .contact__address__inner {
            margin-top: 30px;
        }
        .htc__contact__address {
            margin-bottom: 58px;
        }
        .contact__details p {
            color: #666666;
            font-size: 18px;
            line-height: 28px;
        }
        .contact__details p a {
            color: #666;
            transition: all 0.4s ease 0s;
        }
        .contact__details p a:hover {
            color: #ff4136;
        }
        .contact-box input {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: currentcolor currentcolor #c1c1c1;
            border-image: none;
            border-style: none none solid;
            border-width: 0 0 1px;
            color: #666666;
            font-size: 12px;
            padding-bottom: 15px;
        }
        .single-contact-form {
            margin-top: 30px;
        }
        .contact-box.name {
            display: flex;
            justify-content: space-between;
        }
        .contact-box.name input {
            margin: 0 15px;
            width: 50%;
        }
        .contact-box.name {
            margin-left: -15px;
            margin-right: -15px;
        }
        .contact-box.message textarea {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background: transparent none repeat scroll 0 0;
            border-color: currentcolor currentcolor #c1c1c1;
            border-image: none;
            border-style: none none solid;
            border-width: 0 0 1px;
            min-height: 85px;
            padding: 0;
        }
        .contact-box.message {
            margin-bottom: 40px;
        }
        .contact-btn .fv-btn {
            background: transparent none repeat scroll 0 0;
            border: 1px solid #d5d5d5;
            color: #4b4b4b;
            font-size: 14px;
            height: 45px;
            letter-spacing: 2px;
            line-height: 45px;
            padding: 0 70px;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }
        .contact-btn .fv-btn:hover {
            border: 1px solid #ff4136;
            color: #fff;
            background: #ff4136;
        }
        .contact-form-wrap > form {
            margin-top: -9px;
        }
        .contact-box input::-moz-placeholder {
            color: #666666 !important;
        }
        .contact-box textarea::-moz-placeholder {
            color: #666666 !important;
            opacity: 1;
        }
        /*-----------------------------------------------
  21. Our Product Details Area
---------------------------------------------------*/

        .product__details__container {
            display: flex;
        }
        .product__small__images {
            min-width: 20%;
            padding-right: 10px;
        }
        .product__big__images {
            max-width: 80%;
        }
        .pot-small-img a {
            display: block;
        }
        .pot-small-img a img {
            width: 100%;
        }
        .pot-small-img {
            margin-top: 10px;
        }
        .product__small__images {
            margin-top: -10px;
        }
        .product__tab__content:not(.active) {
            display: none;
        }
        .product__deatils__tab {
            border-bottom: 1px solid #d5d5d5;
            display: flex;
            justify-content: center;
        }
        .product__deatils__tab li a {
            color: #505050;
            font-size: 20px;
            line-height: 30px;
            padding-bottom: 17px;
            position: relative;
            text-transform: capitalize;
            display: block;
        }
        .product__deatils__tab li {
            padding: 0 30px;
        }
        .product__deatils__tab li a::before {
            background: #ff4136 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            position: absolute;
            transition: all 0.5s ease 0s;
            width: 0;
        }
        .product__deatils__tab li.active a::before {
            width: 100%;
        }
        .product__deatils__tab li a:hover {
            width: 100%;
        }
        .title__6 {
            color: #505050;
            font-size: 24px;
            line-height: 30px;
            margin-bottom: 28px;
            text-transform: capitalize;
        }
        .product__desc p {
            color: #666666;
            font-size: 14px;
            line-height: 26px;
        }
        /*-----------------------------------------------
  22. Wrapper Sidebar
---------------------------------------------------*/

        .wrapper__sidebar .container-fluid {
            width: 90%;
        }
        .sidebar--content {
            background: #f2f2f2 none repeat scroll 0 0;
            height: 100vh;
            min-height: 100vh;
            padding-bottom: 160px;
            padding-top: 100px;
            position: fixed;
            text-align: center;
            top: 0;
            width: 445px;
            z-index: 999;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            -webkit-flex-direction: column;
            -moz-flex-direction: column;
            -ms-flex-direction: column;
            -o-flex-direction: column;
            flex-direction: column;
            justify-content: space-between;
        }
        .wrapper--content {
            width: calc(100% - 450px);
        }
        .wrapper__sidebar--left .sidebar--content {
            left: 0;
            margin-right: 5px;
        }
        .wrapper__sidebar--left .wrapper--content {
            margin-left: 450px;
        }
        .wrapper__sidebar--right .sidebar--content {
            right: 0;
            margin-left: 5px;
        }
        .wrapper__sidebar--right .wrapper--content {
            margin-right: 450px;
        }
        .sidebar--logo {
            padding-bottom: 60px;
        }
        /* Menu Style */

        .wrapper__sidebar .main__menu {
            display: flex;
            flex-flow: column wrap;
        }
        .wrapper__sidebar .main__menu > li {
            padding: 0;
        }
        .wrapper__sidebar .main__menu > li > a {
            font-weight: 500;
            line-height: 44px;
            text-transform: uppercase;
        }
        .wrapper__sidebar .main__menu > li:hover > a,
        .wrapper__sidebar .main__menu > li.current > a {
            background: #fff none repeat scroll 0 0;
            color: #ff4136;
        }
        .wrapper__sidebar .sidebar--nav {
            margin-bottom: 50px;
            max-height: 350px;
        }
        /* Tools */

        .wrapper__sidebar .menu-extra {
            justify-content: center;
        }
        .wrapper__sidebar .sidebar--tools {
            margin-bottom: 40px;
        }
        .wrapper__sidebar .sidebar--social__network .social__icon {
            justify-content: center;
        }
        .social__icon li:last-child {
            padding-right: 0;
        }
        @media (min-width: 1170px) and (max-width: 1500px) {
            .wrapper__sidebar .container-fluid {
                width: 95%;
            }
            .wrapper--content {
                width: calc(100% - 350px);
            }
            .wrapper__sidebar--left .wrapper--content {
                margin-left: 350px;
            }
            .wrapper__sidebar--right .wrapper--content {
                margin-right: 350px;
            }
            .sidebar--content {
                width: 345px;
            }
        }
        @media (min-width: 991px) and (max-width: 1169px) {
            .wrapper__sidebar .container-fluid {
                width: 95%;
            }
            .wrapper--content {
                width: calc(100% - 300px);
            }
            .wrapper__sidebar--left .wrapper--content {
                margin-left: 300px;
            }
            .wrapper__sidebar--right .wrapper--content {
                margin-right: 300px;
            }
            .sidebar--content {
                width: 295px;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .wrapper__sidebar .container-fluid {
                width: 100%;
            }
            .wrapper--content {
                width: 100%;
            }
            .wrapper__sidebar--left .wrapper--content {
                margin-left: 253px;
            }
            .wrapper__sidebar--right .wrapper--content {
                margin-right: 0;
            }
            .sidebar--content {
                width: 250px;
            }
            .sidebar--content .newsletter__form {
                display: none;
            }
            .slider--7 .slider__fornt__images {
                display: none;
            }
            .slider--7 .slider__inner h1 {
                font-size: 40px;
                line-height: 55px;
            }
            .slider--7 .slider__full--screen {
                height: 60vh;
            }
            .product__filter--7 .filter__menu__container {
                display: block;
            }
            .product__filter--7 .product__menu {
                text-align: left;
            }
            .product__filter--7 .filter__box {
                margin-top: 20px;
            }
        }
        @media (max-width: 767px) {
            .wrapper__sidebar .container-fluid {
                width: 100%;
            }
            .wrapper--content {
                width: 100%;
            }
            .wrapper__sidebar--left .wrapper--content {
                margin-left: 0;
            }
            .wrapper__sidebar--right .wrapper--content {
                margin-right: 0;
            }
            .sidebar--content {
                width: 0px;
                display: none;
            }
        }
        /*---------------------------------------
  26. Our Cart Area
----------------------------------------*/

        .cart-title-area {
            padding-top: 30px;
        }
        .car-header-title h2 {
            font-size: 20px;
            margin: 0;
            text-transform: uppercase;
        }
        .table-content table {
            background: #fff none repeat scroll 0 0;
            border-color: #c1c1c1;
            border-radius: 0;
            border-style: solid;
            border-width: 1px 0 0 1px;
            margin: 0 0 50px;
            text-align: center;
            width: 100%;
        }
        .table-content table th {
            border-top: medium none;
            font-weight: bold;
            padding: 20px 10px;
            text-align: center;
            text-transform: uppercase;
            vertical-align: middle;
            white-space: nowrap;
        }
        .table-content table th,
        .table-content table td {
            border-bottom: 1px solid #c1c1c1;
            border-right: 1px solid #c1c1c1;
        }
        .table-content table td {
            border-top: medium none;
            padding: 20px 10px;
            vertical-align: middle;
            font-size: 13px;
        }
        .table-content table td input {
            background: #e5e5e5 none repeat scroll 0 0;
            border: medium none;
            border-radius: 3px;
            color: #6f6f6f;
            font-size: 15px;
            font-weight: normal;
            height: 40px;
            padding: 0 5px 0 10px;
            width: 60px;
        }
        .table-content table td.product-subtotal {
            font-size: 14px;
            font-weight: bold;
            width: 120px;
            color: #777;
        }
        .table-content table td.product-name a {
            font-size: 14px;
            font-weight: 700;
            margin-left: 10px;
            color: #6f6f6f;
        }
        .table-content table td.product-name {
            width: 270px;
        }
        .table-content table td.product-thumbnail {
            width: 130px;
        }
        .table-content table td.product-remove i {
            color: #919191;
            display: inline-block;
            font-size: 20px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            width: 40px;
        }
        .table-content table .product-price .amount {
            font-size: 15px;
            font-weight: 700;
            color: #777;
        }
        .table-content table td.product-remove i:hover {
            color: #252525
        }
        .table-content table td.product-quantity {
            width: 180px;
        }
        .table-content table td.product-remove {
            width: 150px;
        }
        .table-content table td.product-price {
            width: 130px;
        }
        .table-content table td.product-name a:hover,
        .buttons-cart a:hover {
            color: #ff4136
        }
        .buttons-cart input,
        .coupon input[type="submit"],
        .buttons-cart a,
        .coupon-info p.form-row input[type="submit"] {
            background: #252525 none repeat scroll 0 0;
            border: medium none;
            border-radius: 0;
            box-shadow: none;
            color: #fff;
            display: inline-block;
            float: left;
            font-size: 12px;
            font-weight: 700;
            height: 40px;
            line-height: 40px;
            margin-right: 15px;
            padding: 0 15px;
            text-shadow: none;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
            white-space: nowrap;
        }
        .buttons-cart input:hover,
        .coupon input[type=submit]:hover,
        .buttons-cart a:hover {
            background: #ff4136;
            color: #fff !important;
        }
        .buttons-cart a {
            color: #fff;
            float: left;
            height: 40px;
            line-height: 40px;
        }
        .cart_totals {
            float: left;
            text-align: right;
            width: 100%;
        }
        .cart_totals h2 {
            border-bottom: 2px solid #c1c1c1;
            display: inline-block;
            font-size: 30px;
            margin: 0 0 35px;
            text-transform: uppercase;
        }
        .cart_totals table {
            border: medium none;
            float: right;
            margin: 0;
            text-align: right;
        }
        .cart_totals table th {
            border: medium none;
            font-size: 14px;
            font-weight: bold;
            padding: 0 20px 12px 0;
            text-align: right;
            text-transform: uppercase;
            vertical-align: top;
        }
        .cart_totals table td {
            border: medium none;
            padding: 0 0 12px;
            vertical-align: top;
        }
        .cart_totals table td .amount {
            color: #252525;
            float: right;
            font-size: 13px;
            font-weight: bold;
            margin-left: 5px;
            text-align: right;
            text-transform: uppercase;
        }
        .cart_totals table td ul#shipping_method {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }
        .cart_totals table td ul#shipping_method li {
            float: left;
            margin: 0 0 10px;
            padding: 0;
            text-indent: 0;
            width: 100%;
        }
        .cart_totals table td ul#shipping_method li input {
            margin: 0;
            position: relative;
            top: 2px;
        }
        .cart_totals table tr.order-total th,
        .cart_totals table tr.order-total .amount {
            font-size: 20px;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .wc-proceed-to-checkout a {
            background: #252525 none repeat scroll 0 0;
            color: #fff;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            height: 50px;
            line-height: 50px;
            margin-top: 20px;
            padding: 0 30px;
            text-transform: none;
        }
        .wc-proceed-to-checkout a:hover {
            background: #ff4136;
            color: #fff !important;
        }
        .owl-theme .owl-controls .owl-page span {
            background: #ffffff none repeat scroll 0 0;
            border: 1px solid #c1c1c1;
            border-radius: 100%;
            display: block;
            height: 13px;
            margin: 3px;
            width: 13px;
            transition: 0.3s;
        }
        .owl-theme .owl-controls .owl-page.active span,
        .owl-theme .owl-controls.clickable .owl-page:hover span {
            border: 2px solid #c1c1c1;
        }
        /*---------------------------------------
  27. Our Checkout Page
----------------------------------------*/

        .single-checkout-box input[type="text"],
        .single-checkout-box input[type="email"],
        .single-checkout-box input[type="password"] {
            background: transparent none repeat scroll 0 0;
            border: 1px solid #c1c1c1;
            border-radius: 0;
            color: #767676;
            font-size: 12px;
            height: 40px;
            line-height: 40px;
            padding-left: 20px;
            width: 47.5%;
            margin-bottom: 40px;
        }
        .single-checkout-box textarea {
            background: transparent none repeat scroll 0 0;
            border: 1px solid #c1c1c1;
            border-radius: 0;
            font-size: 12px;
            min-height: 160px;
            padding: 10px;
            resize: none;
            width: 100%;
            padding-left: 20px;
        }
        .single-checkout-box textarea::-moz-placeholder {
            opacity: 1 !important;
        }
        .single-checkout-box select {
            margin-right: 30px;
            width: 48%;
        }
        .radio input[type="radio"],
        .radio-inline input[type="radio"],
        .checkbox input[type="checkbox"],
        .checkbox-inline input[type="checkbox"] {
            margin-left: 0;
        }
        .checkbox .radio label,
        .checkbox .checkbox label {
            font-size: 14px;
        }
        .single-checkout-box input + input {
            margin-left: 34px;
        }
        .payment-menu li + li {
            margin-left: 30px;
        }
        .payment-menu li {
            border: 1px solid transparent;
            padding: 2px;
            transition: all 0.3s ease 0s;
        }
        .payment-menu li:hover {
            border: 1px solid #ff4136;
        }
        .single-checkout-box select {
            -moz-appearance: none;
            -webkit-appearance: none;
            -o-appearance: none;
            background: rgba(0, 0, 0, 0) url("images/icons/select-option.png") no-repeat scroll 96% 14px / 11px 9px;
            border: 1px solid #c1c1c1;
            height: 40px;
            line-height: 40px;
            padding-left: 20px;
        }
        .payment-form-inner .single-checkout-box.select-option {
            margin-top: 0;
        }
        .payment-form p {
            margin-top: 15px;
        }
        .our-important-note p {
            margin-bottom: 30px;
            margin-top: 20px;
        }
        .important-note li a i {
            font-size: 14px;
            margin-right: 10px;
        }
        .important-note li + li {
            margin-top: 20px;
        }
        .puick-contact-area {
            background: #f6f6f6 none repeat scroll 0 0;
            padding: 40px 0;
            text-align: center;
            width: 370px;
        }
        .puick-contact-area a {
            color: #777474;
            display: inline-block;
            font-size: 18px;
            font-weight: 700;
            margin-top: 15px;
            transition: all 0.3s ease 0s;
        }
        .puick-contact-area a:hover {
            color: #ff4136;
        }
        .another-product-section .tab-style > li {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: currentcolor #eee #eee;
            border-image: none;
            border-style: none solid solid;
            border-width: medium 1px 1px;
            display: block;
        }
        .another-product-section .tab-style > li a .tab-menu-text {
            padding: 18px 20px 16px;
        }
        .another-product-section .tab-style > li.active {
            border-right: 0px solid #fff;
        }
        .another-product-section .product-tab-list {
            border: inherit;
            padding: 0;
        }
        .another-product-section .product-categories-title > h3 {
            background-color: #f9f9f9;
        }
        .another-product-section .product-slider-active .product {
            margin-top: 52px;
        }
        :focus {
            outline: -webkit-focus-ring-color auto 0px;
        }
    </style>
    <?php $this->head() ?>

</head>
<body>
<div class="wrapper fixed__footer ptb--0">

    <div class="body__overlay ptb--0"></div>
    <!-- Start Bradcaump area -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center ptb--30">
                            <a href="<?=\yii\helpers\Url::home(); ?>"><h2 class="bradcaump-title">STORE.LOC</h2></a>
                        </div>
                        <div class="pro__details">
                            <h3>Здравствуйте, <?=$order->name?></h3>
                            <h4 style="color: #0b0b0b">Ваш номер заказа - <?= $order->id?></h4>
                            <p>Товары уже готовятся к отправке — мы пришлем уведомление, как только покупки можно будет забрать. Если появятся вопросы, вы сможете найти ответ в разделе помощи покупателям.</p>
                        </div>
                        <div style="color: #0b0b0b; font-size: 18px">
                            <p>Дата оформления заказа: <?=$order->created_at?></p>
                            <p>Получатель: <?=$order->name?></p>
                            <p>Номер для связи: <?=$order->phone?></p>
                            <p>Адрес доставки: <?=$order->address?></p>
                            <p>Количество товаров в заказе: <?=$order->qty?></p>
                            <p>Стоимость заказа: <?=$order->sum?></p>
                        </div>
                    </div>
                </div>
            </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--10 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="table-content table-responsive cart-table">
                        <table>
                            <thead>
                            <tr>
                                <!--<th class="product-thumbnail">Фото</th>-->
                                <th class="product-name">Товар</th>
                                <th class="product-price">Цена</th>
                                <th class="product-quantity">Количество</th>
                                <th class="product-subtotal">Итого</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($session['cart'] as $id => $item):?>
                                    <tr>
                                        <?php /*<td class="product-thumbnail">
                                            <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $item['id']], true); ?>">
                                                <img src="<?php $message->embed(Swift_EmbeddedFile::fromPath($imgContainer[$item['id']])) ?>" alt="<?=$item['name']?>"/>
                                            </a>
                                        </td> */?>
                                        <td class="product-name"><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $item['id']], true); ?>"><?=$item['name']?></a></td>
                                        <td class="product-price"><span class="amount"><?=$item['price']/100?></span></td>
                                        <td class="product-price"><span class="amount"><?=$item['qty']?></span></td>
                                        <td class="product-subtotal"><?=$item['price']/100*$item['qty']?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
</div>
</body>
</html>