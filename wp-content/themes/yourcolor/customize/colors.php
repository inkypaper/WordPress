.topHead{border-color:<?php echo get_option('MoviesColor')?>;}.search-box form button {background-color:<?php echo get_option('MoviesColorSearchBTN')?> !important;}.cp-menu {background-color:<?php echo get_option('MoviesColor')?> !important;}.sectionTop .filmBlock span{background-color:<?php echo get_option('MoviesColorSharp')?> !important;}.sectionTop .filmBlock .views{background-color:<?php echo get_option('MoviesColorSliderSpan')?> !important;}.moviefilm .movief{background-color:<?php echo get_option('MoviesColorMOVIEFTITLE')?> !important;color:<?php echo get_option('MoviesColorMOVIEFTITLETXT')?> !important;}.moviefilm .movief a{color:<?php echo get_option('MoviesColorMOVIEFTITLETXT')?> !important;}.sectionTop{background-color:<?php echo get_option('MoviesColorSlider')?> !important;}.footer > .MASs .alignright{color:#eee;}.footer > .MASs .alignleft{color:#eee;}.detailsMovie > .tags span{color:white;}#viewMovie button{background-color:<?php echo get_option('MoviesColorMOVIEF')?>;}h2.module_title span{color:<?php echo get_option('MoviesColor')?>;}.header .inside {background-color:<?php echo get_option('MoviesColorMenu')?>;}@font-face{font-family:'FontAwesome';src:url('<?php echo get_template_directory_uri()?>/fonts/fontawesome-webfont.eot?v=4.3.0');src:url('<?php echo get_template_directory_uri()?>/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0') format('embedded-opentype'), url('<?php echo get_template_directory_uri()?>/fonts/fontawesome-webfont.woff2?v=4.3.0') format('woff2'), url('<?php echo get_template_directory_uri()?>/fonts/fontawesome-webfont.woff?v=4.3.0') format('woff'), url('<?php echo get_template_directory_uri()?>/fonts/fontawesome-webfont.ttf?v=4.3.0') format('truetype'), url('<?php echo get_template_directory_uri()?>/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal;}
.content-site {
    background:transparent !important;
}
<?php if( get_option('show_topbar') == 'hide' ) { ?>
.search-box {
	top:auto !important;
    bottom: 52px !important;
}
<?php } ?>
<?php if( get_option('header_style') == 'simple' ) { ?>
.topHead {
<? if( !wp_is_mobile() ) { ?>
  height:172px !important;
<? }else { ?>
  height:272px !important;
<? } ?>
}
<? if( wp_is_mobile() ) { ?>
.header .logo {
  bottom:80px !important;
}
<? } ?>
.header .logo {
  right: 0 !important;
  margin-right: 0 !important;
  background-color: rgba(0, 0, 0, 0.71) !important;
}
<?php } ?>
.post-ratings {
    filter: alpha(opacity=100);
    -moz-opacity: 1;
    opacity: 1;
    font-size: 0px;
    margin-top: -1px;
    display:inline-block;
    margin-left:15px;
}
.post-ratings-loading {
	display: none;
	height: 16px;
	text-align: left;
}
.moviefilm .ribbon {
    position: absolute;
    top: 30px;
    left: -112px;
    font-family: Font Bold;
    width: 300px;
    background-color: <?php echo get_option('MoviesColorSharp')?>;
    transform: rotate(-50deg);
}
.post-ratings-image {
    border: 0px;
    width: 33px;
}
.post-ratings IMG, .post-ratings-loading IMG, .post-ratings-image IMG {
  width: 32px;
	border: 0px;
	padding: 0px;
	margin: 0px;
}
.post-ratings-text {
}
.post-ratings-comment-author {
	font-weight: normal;
	font-style: italic;
}
form#Rport {
    display: inline-block;
    float: left;
}

button.reportMovie {
    background-color: <?php echo get_option('MoviesColorBG')?>;
    color: <?php echo get_option('MoviesColorTEXT')?>;
    cursor:pointer;
    border: 0;
    font-family: Font Bold;
    font-size: 17px;
    margin-top: -6px;
    border-radius: 1px;
    padding: 4px 15px;
}
.screen-graphic {
    height: 631px !important;
}
.serverDownload {
}
.serverDownload > a {
    color: white;
    background-color: rgba(12, 140, 18, 1);
    font-family: Font Bold , Arial Black;
    display: inline-block;
    padding: 6px 20px;
    font-size: 22px;
}
.detailsMovie.vieeed {
    width: 100% !important;
}
.serverD {
    width: calc(100% - 109px) !important;
    height: calc(100% - 93px) !important;
}
.centered-view {
	max-width: 840px;
    display: table;
    float: right;
}
body {
	background-image:linear-gradient(to left, rgba(0, 0, 0, 0.2) 0%, rgba(45, 44, 45, 0) 30%, rgba(255, 255, 255, 0.15) 50%, rgba(0, 0, 0, 0) 70%, rgba(0, 0, 0, 0.21) 100%) !important;
    background-color:<?php echo get_option('MoviesColorBG')?> !important;
}
.topbar * {
    list-style: none;
}
span.po1 {
    font-size: 26px !important;
    top: 4px !important;
}
span.po2 {
    font-size: 36px !important;
    top: 6px !important;
    margin-left: 10px;
}
span.po3 {
    font-size: 36px !important;
    top: 6px !important;
    margin-right: 10px;
}
span.po4 {
    font-size: 26px !important;
    top: 4px !important;
}
.boxFirstOne {
    background-color: rgba(255, 255, 255, 0.13);
    padding: 20px 20px 6px;
    box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.38);
    position: relative;
}
.alignleft {
	float:left;
}
.alignright {
	float:right;
}
.menuTOpper .tags{
    display: inline-block;
    margin-right: 8px;
}
.menuTOpper .tags span{
font-family: Font Bold;
}
.menuTOpper .tags a{
  background-color: <?php echo get_option('MoviesColorBG')?>;
  color: <?php echo get_option('MoviesColorTEXT')?>;
  display: inline-block;
  padding: 0px 12px;
  border-radius: 2px;
}
.menuTOpper {
  height: 60px;
  background-color: <?php echo get_option('MoviesColorMenu')?>;
  padding: 15px;
  box-sizing: border-box;
}
.boxModuletiTle .moviefilm {
    width: 222px;
}
h2.module_title {
    font-size: 30px;
    font-family: Font Bold;
    margin-bottom: 20px;
}
.header.fixx {
margin-bottom:53px;
}
.footer.fixx {
  position: fixed;
  bottom: 0;
  z-index: 100000;
  left: 0;
}
.social-shares > span {
  position: relative;
  top: -14px;
  right: -6px;
  font-family: Font Bold , Arial Black;
}
h2.module_title span {
    color: <?php echo get_option('MoviesColorBG')?>;
}
.episodesList a:hover {
    background-color: <?php echo get_option('MoviesColorBG')?>;
}
.boxModuletiTle {
  background-color: <?php echo get_option('MoviesColorMenu')?>;
  padding: 20px;
  text-align: center;
  margin-bottom:20px;
}
#contactForm > ol > li label {
    background: <?php echo get_option('MoviesColorMenu')?> !important;
}
#contactForm button[type="submit"] {
    background-color: <?php echo get_option('MoviesColorMenu')?> !important;
    border: 3px solid rgba(0, 0, 0, 0.07) !IMPORTANT;
    font-family: Font Bold !important;
    width: auto !important;
    padding: 4px 21px !important;
}
.moviefilm > span.category a {
	color:white;
}
.moviefilm > span.category {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 40px;
    background-color: rgb(39, 39, 39);
    z-index: 10;
    line-height: 39px;
}
.pagination li {position:relative;}
.pagination li span.current {
    display: block;
    background-color: <?php echo get_option('MoviesColorMenu')?>;
    position: relative;
    margin: -3px -13px;
    height: 37px;
    padding: 0px 12px;
    line-height: 38px;
    margin-bottom: -4px;
}
.social-shares ul{
    margin-bottom: 0px;
    margin-top: -4px;
    text-align: center;
    display:inline-block;
    margin-left: -11px;
}
.social-shares li{
    list-style: none !important;
    margin-left: 5px;
    display: inline-block;
    float: right;
}
.social-shares li a{
    display: block;
    width: 60px;
    border-radius: 3px;
    height: 39px;
    padding-top: 9px;
    font-size: 21px;
    color: white;
    box-sizing: border-box;
}
.social-shares li a img{
    display: block;
    margin: 12px auto 0;
}
.social-facebook a{
	background:#45619C;
}
.social-twitter a{
	background:#00ACEE;
}
.social-google a{
	background:#DD4B39;
}
.social-pinterest a{
	background:#BD1E23;
}
.social-linkedin a{
	background: #1D87BD;
}
.menuBOttomer .tags{
    display: inline-block;
    margin-right: 8px;
}
.menuBOttomer .tags span{
font-family: Font Bold;
}
.menuBOttomer .tags a{
  background-color: <?php echo get_option('MoviesColorBG')?>;
  color: <?php echo get_option('MoviesColorTEXT')?>;
  display: inline-block;
  padding: 0px 12px;
  border-radius: 2px;
}
.menuBOttomer {
  height: 60px;
  background-color: <?php echo get_option('MoviesColorMenu')?>;
  padding: 15px;
  box-sizing: border-box;
}
.menuBOttomer {
    height: 60px;
    background-color: #1e1e1e;
    margin-bottom: 20px;
}
.Ad250 {
  float: left;
  margin-bottom: 70px;
}
.moviefilm:hover .topbarFilms {
  top: 10px;
}
h2.sepTItle span {
	font-family:arial black;
    position:relative;
}
body {
	<?php if( get_option('bgsite') != '' ) { ?>
	background-image:url('<?php echo get_option('bgsite')?>') !important;
    <?php if( get_option('bgsite_repeat') == 'fixed' ) { ?>
    background-attachment:fixed !important;
    background-size:100% 100% !important;
    background-position:top center !important;
    <?php }else { ?>
    background-repeat:<?php echo get_option('bgsite_repeat')?>;
    background-size:<?php echo get_option('bgsite_width')?>px <?php echo get_option('bgsite_height')?>px !important;
    <?php } ?>
    <?php } ?>
	color:<?php echo get_option('MoviesColorTEXT')?>;
}
.sitemap_list {
  list-style: none;
}
.Ad160 {
    float: right;
    width:160px;
    height:600px;
}
.Ad160-left {
    float: left;
    width:160px;
    height:600px;
}
.screen-graphic {
    width: 840px;
    float: right;
    background-size: 106% 100% !important;
    background-position: top center;
}
.arrowsNextPrev {
  position: absolute !important;
  top: 220.5px !important;
  width: calc(100% - 14px) !important;
  right: 7px !important;
}
.sitemap_list > li {
    background-color: rgba(0, 0, 0, 0.19);
    width: 49%;
    display: inline-block;
    margin-bottom: 5px;
    padding: 7px;
    box-sizing: border-box;
}
.Ad728 {
    display: table;
    margin: 0 auto 20px;
}
.sitemap_list > li a {
  color: white;
  font-family: Font Bold , Arial Black;
}
.pageContent {}
.pageContent > p {
	  margin-bottom: 20px;
}
.sepTItleSld {
    background-color: transparent !important;
    margin: -20px 0 20px !important;
    font-family: Font Bold !important;
    text-shadow:0px 2px 5px black;
	text-align: center;
}
.reportError {
    background-color: rgb(205, 13, 13);
    margin-bottom: 10px;
    font-family: Font Bold;
    padding: 10px 16px;
}
.reportSuccess {
    background-color: rgb(26, 161, 10);
    margin-bottom: 10px;
    font-family: Font Bold;
    padding: 10px 16px;
}
h2.sepTItle {
	text-align: center;
    font-family: Font Bold , Arial Black;
    padding-bottom: 18px;
    text-shadow:0px 2px 5px black;
    padding-top: 0px;
}
.topbar {
    background-color: rgb(31, 31, 31);
}
.topbar > div ul li {
    display: inline-block;
    padding: 10px 12px 9px;
    font-size: 14px;
    font-family: Font Bold , Arial Black;
    border-left: 1px solid rgba(255, 255, 255, 0.21);
}
.topbar > div ul li a {
    color: white;
}
.topbar > div ul {
}
.topbar > div {
    width: 1200px;
    margin: 0 auto;
}
.topHead {
	border-color:<?php echo get_option('MoviesColorBG')?> !important;
}
.topbarFilms {
    position: absolute;
    top: -25px;
    left: 10px;
    transition: .3s all ease;
    z-index: 10;
    line-height: 24px;
}
.topbarFilms span a {
	color:white;
}
.topbarFilms span {
    font-size: 12px;
    margin-bottom:5px;
    background-color: rgba(0, 0, 0, 0.71);
    display: inline-block;
    color: white;
    font-family: Font Bold, Arial Black;
    padding: 0px 6px;
}
.topbarFilms span.category {
background:<?php echo get_option('MoviesColorCategory')?>;
}
.topbarFilms span.views {
background:<?php echo get_option('MoviesColorViews')?>;
}
.polygon{
    stroke:<?php echo get_option('MoviesColorPat')?> !important;
}
.moviefilm {
    border-radius: 0px !important;
    border: 0 !important;
    box-shadow: 0px 7px 25px rgba(0, 0, 0, 0.8) !important;
}
.moviefilmColum2 {
    width: 48%;
    margin-right: .5%;
    margin-left: .5%;
    height: 239px;
    display: inline-block;
    overflow: hidden;
    margin-bottom: 1%;
    background-color: <?php echo get_option('MoviesColorDesc')?>;
}
.moviefilmColum2 > a img {
    width: 100%;
    height: 100%;
}
.bottombarFilms .view {
    background-color: <?php echo get_option('MoviesColorViews')?>;
    position: absolute;
    left: -4px;
    top: 0;
    padding: 5px 16px 5px 21px;
    font-family: Font Bold;
    transform: skew(0, 0deg);
}
h2.noThumb {
    text-align: center;
    width: calc(100% - 55px);
    margin: 101px auto 0;
    text-align: center;
    position: relative;
    right: 11px;
    color: rgba(0, 0, 0, 0.35);
    font-size: 21px;
    font-family: Font Bold;
}
.moviefilm.col3 {
  width: 32%;
  height: 540px;
}
.moviefilm.col4 {
    width: 23.8%;
    height: 440px;
}
.moviefilm.col6 {
    width: 15%;
    height: 300px;
}
.boxlx:after {
    content: '';
    position: absolute;
    top: 0;
    left: -16px;
    height: 100%;
    width: 20px;
    background-color: <?php echo get_option('MoviesColorDesc')?>;
}
.moviefilmColum2 > a {
    width: 214px;
    height: 242px;
    margin: 0;
    border-top: 0 !IMPORTANT;
    float: right;
    transform: skew(-10deg);
    background-color: rgb(232, 232, 232);
    border: 3px solid #fff;
    margin-left: 26px;
    margin-right: -24px;
    box-sizing: border-box;
    overflow: hidden;
}
.boxlx .movief a {
    color: white;
}
.boxlx .movieDesc {
    font-size: 13px;
    text-align: right;
    color:<?php echo get_option('MoviesColorDescC')?>;
    margin-right: -17px;
    font-family: Font Bold , Arial Black;
    padding-left: 13px;
}
.boxlx .movief{
    background-color: rgba(0, 0, 0, 0.60);
    margin-bottom: 10px;
    padding: 6px;
    font-family: Font Bold , Arial Black;
    font-size: 14px;
    text-align: right;
    transform: skew(-10deg);
    margin-right: -26px;
}
.boxlx {
    float: right;
    width: calc(100% - 221px);
    margin-top: 12px;
    color: white;
    height: calc(100% - 22px);
    position: relative;
    box-sizing: border-box;
}
.bottombarFilms a {
    color: white;
    transform: skew(10deg);
    display: block;
}
.bottombarFilms {
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: right;
    background-color: <?php echo get_option('MoviesColorCategory')?>;
    padding: 5px 13px;
    overflow: hidden;
    box-sizing: border-box;
    transform: skew(-10deg);
}
<?php if( get_option('hide_description') == 'hide' ) { ?>
.moviefilm:hover .movief {
  bottom: 0px;
  -webkit-animation: rotateOutDownRight 1s both ease;
  animation: rotateOutDownRight 1s both ease;
}
<?php }else { ?>
.moviefilm:hover .movief {
  bottom: 110px;
}
<?php } ?>
<?php if( get_option('hide_description') != 'hide' ) { ?>
.moviefilm:hover .movieDesc {
  bottom: 0px;
}
<?php } ?>
.moviefilm.col6 .movieDesc{
	height:90px;
}
.moviefilm.col6:hover .movief {
	bottom:00px;
}
.moviefilm .movieDesc {
  line-height: 26px;
  height: 116px;
  overflow: hidden;
  width: 100%;
  position: absolute;
  bottom: -120px;
  left: 0;
  transition: .5s all ease;
  background-color: <?php echo get_option('MoviesColorDesc')?>;
  color: <?php echo get_option('MoviesColorDescC')?>;
  text-align: center;
  font-size: 13px;
  padding: 8px 11px 11px;
  font-family: Font Bold , Arial Black;
  box-sizing: border-box;
}
.moviefilm .movief {
  transform: initial !important ;
<?php if( get_option('hide_description') != 'hide' ) { ?>
  -webkit-animation: initial !important;
  <?php } ?>
}
.moviefilm:hover img {}
.moviefilm img {}
#watch-prev, #watch-next {
	padding-top:20px !important;
}
/* PATTERN */

.pattern {
	position: fixed;
	z-index: -1;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.pattern--hidden {
	visibility: hidden;
	opacity: 0;
}

.pattern--hidden .polygon {
	transition-duration: 0ms;
}

.pattern svg {
	width: 100%;
	height: 100%;
}

.polygon {
	transition: -webkit-transform 300ms ease-in-out, opacity 300ms ease-in-out;
	transition: transform 300ms ease-in-out, opacity 300ms ease-in-out;
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transform-origin: center bottom;
	transform-origin: center bottom;
	fill: transparent;
}

.polygon--hidden {
	opacity: 0;
	-webkit-transform: scale(0);
	transform: scale(0);
}
/* disable scale on firefox */

.ff .polygon {
	-webkit-transform: scale(1)!important;
	transform: scale(1)!important;
}
