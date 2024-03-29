<?php exit; ?>
1436379757
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 3 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
51813
a:1:{i:0;a:11:{s:8:"style_id";s:1:"3";s:8:"theme_id";s:1:"3";s:10:"theme_data";s:51386:"/*  phpBB3 Style Sheet
	--------------------------------------------------------------
	Style name:			Artodia: Ultra Blue
	Based on style:		prosilver (the default phpBB 3.0.x style)
	Original author:	Tom Beddard ( http://www.subblue.com/ )
	Modified by:		Vjacheslav Trushkin ( http://www.artodia.com/ )
	--------------------------------------------------------------
*/
/*
	Global CSS definitions, overall layout
*/


/*
	CSS Reset
*/
html, body.phpbb, .phpbb div, .phpbb span, .phpbb applet, .phpbb object, .phpbb iframe, .phpbb
h1, .phpbb h2, .phpbb h3, .phpbb h4, .phpbb h5, .phpbb h6, .phpbb p, .phpbb blockquote, .phpbb pre, .phpbb
a, .phpbb abbr, .phpbb acronym, .phpbb address, .phpbb big, .phpbb cite, .phpbb code, .phpbb
del, .phpbb dfn, .phpbb em, .phpbb img, .phpbb ins, .phpbb kbd, .phpbb q, .phpbb s, .phpbb samp, .phpbb
small, .phpbb strike, .phpbb strong, .phpbb sub, .phpbb sup, .phpbb tt, .phpbb var, .phpbb
b, .phpbb u, .phpbb i, .phpbb center, .phpbb
dl, .phpbb dt, .phpbb dd, .phpbb ol, .phpbb ul, .phpbb li, .phpbb
fieldset, .phpbb form, .phpbb label, .phpbb legend, .phpbb
table, .phpbb caption, .phpbb tbody, .phpbb tfoot, .phpbb thead, .phpbb tr, .phpbb th, .phpbb td, .phpbb
article, .phpbb aside, .phpbb canvas, .phpbb details, .phpbb embed, .phpbb 
figure, .phpbb figcaption, .phpbb footer, .phpbb header, .phpbb hgroup, .phpbb 
menu, .phpbb nav, .phpbb output, .phpbb ruby, .phpbb section, .phpbb summary, .phpbb
time, .phpbb mark, .phpbb audio, .phpbb video, .phpbb meter {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
.phpbb article, .phpbb aside, .phpbb details, .phpbb figcaption, .phpbb figure, .phpbb 
footer, .phpbb header, .phpbb hgroup, .phpbb menu, .phpbb nav, .phpbb section {
	display: block;
}
body.phpbb {
	line-height: 1em;
}
.phpbb ol, .phpbb ul {
	list-style: none;
}
.phpbb blockquote, .phpbb q {
	quotes: none;
}
.phpbb blockquote:before, .phpbb blockquote:after, .phpbb
q:before, .phpbb q:after {
	content: '';
	content: none;
}
.phpbb table {
	border-collapse: collapse;
	border-spacing: 0;
}

/*
	Font
*/
body.phpbb {
	font-family: Verdana;
	font-size: 12px;
}
body.simple {
	padding: 8px;
}

/*
	Common stuff
*/
.phpbb .clear, .phpbb span.corners-bottom {
	display: block;
	clear: both;
	height: 0;
	overflow: hidden;
}
.phpbb .right {
	text-align: right;
}
.phpbb .nowrap {
	white-space: nowrap;
}

.phpbb p {
	padding: 6px 0;
	line-height: 1.5em;
}

.phpbb .rightside {
	float: right;
	text-align: right;
}
.phpbb .leftside {
	float: left;
	text-align: left;
}
.phpbb .left-box {
	display: block;
	float: left;
	margin-right: 5px;
}
.phpbb .right-box {
	display: block;
	float: right;
	margin-left: 5px;
}

.phpbb hr {
	border-width: 0;
	border-top: 1px solid transparent;
	margin-left: 20px;
	margin-right: 20px;
}



/*
	Layout
*/
.phpbb .wrap-top {
	height: 800px;
}
.phpbb .wrap-top-top {
	border-bottom: 1px solid transparent;
}
.phpbb .wrap-top-top div, .phpbb .wrap-top-mid, .phpbb .wrap-top-mid .right {
	background: transparent none left top repeat-x;
	height: 399px;
}
.phpbb .wrap-top-mid {
	border-top: 1px solid transparent;
	padding: 0 15px;
}
.phpbb .wrap-top-mid .left {
	background: transparent none left top no-repeat;
	margin: -1px auto 0;
}
.phpbb.fixed-width .wrap-top-mid .left {
	width: 1010px;
}
.phpbb .wrap-top-mid .right {
	background: transparent none right top no-repeat;
}

.phpbb .content-wrapper {
	margin: -800px auto 0;
	padding: 0 20px;
}
.phpbb.fixed-width .content-wrapper {
	width: 1000px;
}
.phpbb .logo {
	text-align: center;
	padding: 10px 0 0;
}
.phpbb .logo h1 {
	display: none; /* remove this line to show forum name in header */
	font-size: 24px;
	font-weight: normal;
	padding: 10px;
}

.phpbb .sitenav {
	margin: 0 240px;
	padding: 13px 0 11px;
	background: transparent none left bottom repeat-x;
	position: relative;
}
.phpbb .sitenav:before, .phpbb .sitenav:after {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	width: 240px;
	pointer-events: none;
}
.phpbb .sitenav:before {
	left: -240px;
	background: transparent none 0 100% no-repeat;
}
.phpbb .sitenav:after {
	right: -240px;
	background: transparent none -240px 100% no-repeat;
}
.ie7 .phpbb .sitenav {
	margin: 0;
	margin-top: 9px;
	padding-top: 4px;
	border: 1px solid transparent;
	border-width: 0 1px;
}
.phpbb .sitenav h2 {
	display: block;
	font-size: 16px;
	font-family: Arial;
	font-weight: 300;
	margin: 6px 0 0 -230px;
	padding: 0;
	padding-left: 15px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	background: transparent none 0 50% no-repeat;
}
.ie7 .phpbb .sitenav h2 {
	margin-left: 10px;
}
.phpbb .sitenav .links {
	position: absolute;
	top: 6px;
	bottom: 0;
	right: -240px;
	z-index: 2;
}
.ie7 .phpbb .sitenav .links {
	right: 10px;
	top: -2px;
}
.phpbb .sitenav .links a {
	display: block;
	float: left;
	height: 20px;
	padding: 7px 2px 0 0;
	margin: 9px 25px 0 10px;
	background: transparent none 0 0 repeat-x;
	white-space: nowrap;
	text-decoration: none !important;
	position: relative;
}
.ie7 .phpbb .sitenav .links a {
	margin: 9px 0 0 10px;
	padding: 7px 8px 0;
	border: 1px solid transparent;
	border-width: 0 1px;
}
.phpbb .sitenav .links a:before, .phpbb .sitenav .links a:after {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
}
.phpbb .sitenav .links a:before {
	width: 10px;
	left: -10px;
	background: transparent none 0 -60px no-repeat;
}
.phpbb .sitenav .links a:after {
	width: 20px;
	right: -20px;
	background: transparent none 0 -90px no-repeat;
}

.phpbb .sitenav .links a:hover { background-position: 0 -30px; }
.phpbb .sitenav .links a:hover:before { background-position: -10px -60px; }
.phpbb .sitenav .links a:hover:after { background-position: 0 -120px; }

.phpbb .page-content {
	min-height: 780px;
	padding: 8px 8px 12px;
}
.phpbb .page-content > h3 {
	clear: both;
}

/*
	Footer
*/
.phpbb p.time {
	margin-bottom: 6px;
	padding: 0;
}
.phpbb p.time.first {
	float: right;
	text-align: right;
}
.phpbb .footer {
	background: transparent none 0 0 repeat;
	border-top: 1px solid transparent;
}
.phpbb .footer > .inner {
	background: transparent none 0 0 repeat-x;
	border-top: 1px solid transparent;
}
.phpbb .footer .inner > div {
	margin: 0 auto;
	padding: 10px 28px;
}
.phpbb.fixed-width .footer .inner > div {
	width: 984px;
}

.phpbb .footer .left { 
	float: left; 
	padding: 0;
}
.phpbb .footer .copyright { 
	float: right;
	text-align: right;
	padding: 0;
}
.oldie .phpbb .footer .copyright {
	float: none;
}
.phpbb .footer .arty, .phpbb .footer .phpbb-group {
	display: block;
	float: right;
	width: 0;
	height: 0;
	overflow: hidden;
	margin: 0;
	padding: 0;
	padding-top: 28px;
	padding-left: 60px;
	background: transparent none 0 0 no-repeat;
	opacity: 0.5;
}
.phpbb .footer .arty { 
	background-position: -60px 0;
}
.phpbb .footer .arty:hover, .phpbb .footer .phpbb-group:hover {
	opacity: 1;
}

/*
	Menu
*/
.phpbb ul.menu {
	float: left;
}
.phpbb ul.menu.right {
	float: right;
}

.phpbb .menu > li {
	display: block;
	float: left;
}

.phpbb .menu > li > a {
	display: block;
	float: left;
	background: transparent none 0 0 repeat-x;
	text-decoration: none !important;
	white-space: nowrap;
	padding: 5px 0 0;
	margin: 0 10px 0 15px;
	height: 20px;
	line-height: 1.2em;
	position: relative;
}
.ie7 .phpbb .menu > li > a {
	margin: 0 0 0 5px;
	border: 1px solid transparent;
	border-width: 0 1px;
	padding: 5px 8px 0;
	cursor: pointer;
}
.phpbb .menu > li > a:before, .phpbb .menu > li > a:after {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	left: -10px;
	width: 10px;
	background-position: 0 -120px;
	background-repeat: no-repeat;
}
.phpbb .menu > li > a:after {
	left: auto;
	right: -10px;
	background-position: -17px -90px;
}
.phpbb .menu.left > li:first-child > a {
	margin-left: 0;
}

.phpbb .menu > li > a > span {
	white-space: nowrap;
	max-width: 200px;
	overflow: hidden;
	text-overflow: ellipsis;
	display: inline-block;
}

.phpbb .menu > li.active > a { background-position: 0 -60px; }
.phpbb .menu > li.active > a:before { background-position: -60px -120px; }
.phpbb .menu > li.active > a:after { background-position: -77px -90px; }

.phpbb .menu > li:hover > a { background-position: 0 -30px; }
.phpbb .menu > li:hover > a:before { background-position: -30px -120px; }
.phpbb .menu > li:hover > a:after { background-position: -47px -90px; }

/* Menu: login */
.phpbb .menu > li > a.menu-login { 
	margin-left: 30px;
	padding-left: 2px;
}
.phpbb .menu > li > a.menu-login:before { 
	background-position: 0 -180px;
	left: -25px;
	width: 25px;
}
.phpbb .menu > li.active > a.menu-login:before { background-position: -60px -180px; }
.phpbb .menu > li:hover > a.menu-login:before { background-position: -30px -180px; }

/* Menu: pm */
.phpbb .menu > li > a.menu-pm { 
	margin-left: 30px;
	padding-left: 3px;
}
.phpbb .menu > li > a.menu-pm:before { 
	background-position: 0 -210px;
	left: -25px;
	width: 25px;
}
.phpbb .menu > li.active > a.menu-pm:before { background-position: -60px -210px; }
.phpbb .menu > li:hover > a.menu-pm:before { background-position: -30px -210px; }

.ie7 .phpbb .menu > li > a.menu-login, .ie7 .phpbb .menu > li > a.menu-pm { 
	padding-left: 6px; 
	margin-left: 5px;
}


/* Menu: icons */
.phpbb .menu > li > a.menu-home, .phpbb .menu > li > a.menu-search, .phpbb .menu > li > a.menu-users, .phpbb .menu > li > a.menu-faq, .phpbb .menu > li > a.menu-ucp, .phpbb .menu > li > a.menu-down {
	width: 0;
	height: 0;
	margin: 0;
	margin-left: 5px;
	padding: 25px 0 0 27px;
	overflow: hidden;
	background-position: 0 -360px;
	background-repeat: no-repeat;
	border-width: 0 !important;
}
.phpbb .menu > li > a.menu-home span, .phpbb .menu > li > a.menu-search span, .phpbb .menu > li > a.menu-users span, .phpbb .menu > li > a.menu-faq span, .phpbb .menu > li > a.menu-ucp span, .phpbb .menu > li > a.menu-down span { display: none; }

.phpbb .menu > li > a.menu-home:before, .phpbb .menu > li > a.menu-search:before, .phpbb .menu > li > a.menu-users:before, .phpbb .menu > li > a.menu-faq:before, .phpbb .menu > li > a.menu-ucp:before, .phpbb .menu > li > a.menu-down:before,
.phpbb .menu > li > a.menu-home:after, .phpbb .menu > li > a.menu-search:after, .phpbb .menu > li > a.menu-users:after, .phpbb .menu > li > a.menu-faq:after, .phpbb .menu > li > a.menu-ucp:after, .phpbb .menu > li > a.menu-down:after {
	display: none;
}
.phpbb .menu > li.active > a.menu-down { background-position: -60px -360px; }
.phpbb .menu > li:hover > a.menu-down { background-position: -30px -360px; }

/* Menu: home */
.phpbb .menu > li > a.menu-home { background-position: 0 -390px; }
.phpbb .menu > li.active > a.menu-home { background-position: -60px -390px; }
.phpbb .menu > li:hover > a.menu-home { background-position: -30px -390px; }

/* Menu: search */
.phpbb .menu > li > a.menu-search { background-position: 0 -240px; }
.phpbb .menu > li.active > a.menu-search { background-position: -60px -240px; }
.phpbb .menu > li:hover > a.menu-search { background-position: -30px -240px; }

/* Menu: users */
.phpbb .menu > li > a.menu-users { background-position: 0 -270px; }
.phpbb .menu > li.active > a.menu-users { background-position: -60px -270px; }
.phpbb .menu > li:hover > a.menu-users { background-position: -30px -270px; }

/* Menu: faq */
.phpbb .menu > li > a.menu-faq { background-position: 0 -300px; }
.phpbb .menu > li.active > a.menu-faq { background-position: -60px -300px; }
.phpbb .menu > li:hover > a.menu-faq { background-position: -30px -300px; }

/* Menu: ucp */
.phpbb .menu > li > a.menu-ucp { background-position: 0 -330px; }
.phpbb .menu > li.active > a.menu-ucp { background-position: -60px -330px; }
.phpbb .menu > li:hover > a.menu-ucp { background-position: -30px -330px; }

/*
	Navbar
*/
.phpbb .navbar, .phpbb .linkmcp {
	margin: 6px 0;
	padding: 6px;
	border: 1px solid transparent;
	border-radius: 5px;
	clear: both;
}
.ie7 .phpbb .navbar, .ie7 .phpbb .linkmcp {
	height: 12px;
}
.phpbb .navbar:after, .phpbb .linklist:after, .phpbb .topic-actions:after, .phpbb #tabs ul:after, .phpbb #minitabs ul:after, .phpbb dl.details:after {
	content: '';
	display: block;
	clear: both;
}
.phpbb .navbar .left {
	float: left;
}
.phpbb .navbar .right {
	float: right;
}
.phpbb .navbar a {
	text-decoration: none;
}
.phpbb .navbar a:hover {
	text-decoration: underline;
}
.phpbb .linkmcp {
	text-align: right;
}
/*
	Page specific code
*/

/*
	Forums list
*/
.phpbb .topiclist {
	clear: both;
}
.phpbb .topiclist .header, .phpbb h2.header {
	display: block;
	margin: 6px 0;
	padding: 0;
	background: transparent none 0 0 repeat-x;
	border-radius: 6px;
}
.phpbb .topiclist .header {
	margin-bottom: 2px;
}
.phpbb .topiclist .header dl {
	display: block;
	background: transparent none 0 -30px no-repeat;
}
.ie7 .phpbb .topiclist .header {
	border-width: 0;
}
.ie7 .phpbb .topiclist .header dt {
	height: 23px;
	width: 100% !important;
	padding-left: 0 !important;
	padding-right: 0 !important;
	background-position: 0 0;
	background-repeat: repeat-x;
}

.phpbb .topiclist .header dd {
	display: none !important;
}
.phpbb .topiclist .header dt, .phpbb h2.header {
	clear: both;
	display: block;
	background: transparent none right -60px no-repeat;
	font-size: 16px;
	font-family: Arial;
	line-height: 1em;
	white-space: nowrap;
	text-align: center;
	height: 23px;
	padding-top: 6px !important;
	padding-bottom: 0;
}
.phpbb h2.header {
	background: none 0 -30px no-repeat, none right -60px no-repeat, none 0 0 repeat-x;
}
.oldie .phpbb h2.header {
	background: transparent none 0 0 repeat-x;
}

.phpbb .topiclist .header a, .phpbb h2.header a, .phpbb .post h3 a {
	text-decoration: none;
}
.phpbb .topiclist .header a:hover, .phpbb h2.header a:hover, .phpbb .post h3 a:hover {
	text-decoration: underline;
}

.phpbb .topiclist {
	display: block;
}
.phpbb .topiclist:after, .phpbb .post:after {
	content: '';
	display: block;
	clear: both;
}

.phpbb .topiclist > li {
	margin: 2px 0;
	padding: 4px 0;
	border: 1px solid transparent;
	border-radius: 6px;
}

.phpbb .topiclist dl {
	display: table;
	width: 100%;
}
.phpbb .topiclist dt, .phpbb .topiclist dd {
	display: table-cell;
	vertical-align: middle;
	line-height: 1.5em;
	height: 33px;
	padding: 2px 6px;
}
.phpbb .topiclist .icon dt {
	padding-left: 40px;
}
.phpbb .topiclist .header .icon dt {
	padding-left: 6px;
}

.phpbb .topiclist dd {
	border-left: 1px solid transparent;
	text-align: center;
	line-height: 1.3em;
	width: 50px;
}

.phpbb .topiclist dd.info, .phpbb .topiclist dd.time {
	min-width: 220px;
	font-size: 11px;
	line-height: 1.5em;
}
.phpbb .topiclist dd.lastpost, .phpbb .topiclist dd.redirect {
	min-width: 220px;
	text-align: left;
	font-size: 11px;
	line-height: 1.5em;
}
.phpbb .topiclist dd.moderation {
	width: 40%;
	text-align: left;
}
.phpbb .topiclist dd.empty {
	display: none;
}

.ie7 .phpbb .topiclist dl {
	display: block;
	height: 1%;
}
.ie7 .phpbb .topiclist dl.icon {
	min-height: 35px;
}
.ie7 .phpbb .topiclist dt, .ie7 .phpbb .topiclist dd {
	display: block;
	float: left;
}
.ie7 .phpbb .topiclist dt {
	width: 50%;
	height: 1%;
}
.ie7 .phpbb .topiclist dd {
	width: 8%;
}
.ie7 .phpbb .topiclist dd.lastpost {
	width: 25%;
}	 


.phpbb .topiclist .topics dfn, .phpbb .topiclist .posts dfn, .phpbb .topiclist .views dfn {
	text-transform: lowercase;
	display: block;
	font-size: 11px;
}
.phpbb span.forum-image {
	float: left;
	padding-right: 6px;
}
.phpbb dl.icon {
	background: transparent none 7px 50% no-repeat;
}
.phpbb dl.icon dt {
	background: transparent none 5px 80% no-repeat;
}

.phpbb a.forumtitle, .phpbb a.topictitle {
	display: inline-block;
	font-family: Helvetica, Arial;
	font-size: 16px;
	font-weight: 400;
	text-decoration: none;
	line-height: 1.5em;
}
.phpbb a.forumtitle:hover, .phpbb a.topictitle:hover {
	text-decoration: underline;
}

.phpbb p.subforums, .phpbb p.moderators {
	padding: 2px 0 0;
}
.phpbb p.subforums strong, .phpbb p.moderators strong {
	font-weight: normal;
}

/*
	Small arrows
*/
.phpbb a.subforum {
	padding-left: 14px;
	background: transparent none 0 50% no-repeat;
}

/*
	Content blocks
*/
.phpbb h2, .phpbb h3 {
	margin: 12px 0 4px;
	font-size: 16px;
	font-family: Helvetica, Arial;
	font-weight: 400;
	line-height: 1.2em;
}

.ie7 .phpbb .panel, .ue7 .phpbb div.rules {
	clear: both;
}
.phpbb .panel, .phpbb div.rules, .phpbb .cp-mini {
	margin: 6px 0;
	padding: 0;
	border: 1px solid transparent;
	border-radius: 6px;
	background: transparent none 0 0 repeat-x;
}
.phpbb .pm-panel-message {
	margin: 0;
	padding: 0;
	border-width: 0;
}
.phpbb .panel .inner, .phpbb .panel .content {
	padding: 4px;
}
.phpbb div.rules .inner {
	padding: 10px;
	line-height: 1.5em;
}
.phpbb #information.rules .inner {
	text-align: center;
	padding: 20px;
}

.phpbb .panel-wrapper {
	border-width: 0;
}
.phpbb .panel-wrapper > .inner {
	padding: 4px 0;
}

.phpbb .panel h2, .phpbb .panel h3 {
	margin: 0;
	padding: 6px 0 0;
}
.phpbb .panel h2:first-child, .phpbb .panel h3:first-child,
.phpbb .panel .corners-top + h2, .phpbb .panel .corners-top + h3 {
	padding-top: 2px;
}
.phpbb .panel p {
	padding: 3px 0;
}
.phpbb .panel.stats > .inner {
	background: transparent none 6px 50% no-repeat;
	padding-left: 40px;
}
.phpbb div.rules span+strong {
	font-family: Helvetica, Arial;
	font-size: 16px;
	display: inline-block;
	padding-bottom: 4px;
}

.phpbb #message.panel, .phpbb #confirm .panel {
	padding: 10px;
	line-height: 1.5em;
	font-size: 13px;
}

/*
	Tables
*/
.phpbb table.table1 {
	margin: 6px 0;
	width: 100%;
	border-collapse: separate;
	border-spacing: 2px;
}
.phpbb table.table1 td, .phpbb table.table1 th {
	border: 1px solid transparent;
	border-radius: 5px;
	padding: 4px;
	vertical-align: middle;
}
.phpbb table.table1 th {
	background: transparent none 0 0 repeat-x;
}
.phpbb td.posts, .phpbb td.info {
	text-align: center;
}

/*
	Arrows
*/
.phpbb a.left, .phpbb a.right, .phpbb a.up, .phpbb a.down {
	background: none transparent 0 50% no-repeat;
	padding-left: 10px;
	text-decoration: none;
	line-height: 1em;
	font-size: 12px;
	font-family: Arial;
	transition: background-position 0.25s ease;
	-moz-transition: background-position 0.25s ease;
	-webkit-transition: background-position 0.25s ease;
	-o-transition: background-position 0.25s ease;
	-ms-transition: background-position 0.25s ease;
}
.phpbb a.left:hover, .phpbb a.up:hover, .phpbb a.down:hover {
	background-position: 2px 50%;
}
.phpbb a.right, .phpbb a.right-box.up, .phpbb a.right-box.down {
	background-position: 100% 50%;
	padding-left: 0;
	padding-right: 10px;
}
.phpbb a.right:hover, .phpbb a.right-box.up:hover, .phpbb a.right-box.down:hover {
	background-position: calc(100% - 2px) 50%;
	background-position: -moz-calc(100% - 2px) 50%;
}
.phpbb .submit-buttons a.up {
	margin-top: 6px;
}


/*
	Pagination, topic actions, reported/unapproved posts
*/
.phpbb .display-options {
	text-align: center;
	clear: both;
}
.phpbb .display-options a {
	margin-top: 6px;
}
.phpbb .pagination {
	margin: 0;
	padding: 0;
	line-height: 1em;
}
.ie7 .phpbb .topic-actions {
	min-height: 28px;
}
.phpbb .topic-actions .pagination {
	float: right;
	padding-left: 6px;
	padding-top: 4px;
}
.phpbb .row .pagination {
	float: right;
}
.phpbb .pagination span.page-sep, .phpbb .pagination span.page-dots { display: none; }
.phpbb .pagination span a, .phpbb .pagination span strong {
	display: inline-block;
	margin: 0 1px;
	text-align: center;
	min-width: 10px;
	padding: 2px 3px 3px;
	border-radius: 5px;
	text-decoration: none;
	opacity: 0.8;
	font-weight: normal;
	visibility: visible;
}
.phpbb .pagination span strong { pointer-events: none; }
.phpbb .pagination span a:hover {
	opacity: 1;
}

.phpbb a.unapproved, .phpbb a.reported {
	float: right;
	display: block;
	margin-top: -2px;
	padding-left: 6px;
	opacity: 0.8;
}
.phpbb a.unapproved img, .phpbb a.reported img {
	display: block;
}
.phpbb a.unapproved:hover, .phpbb a.reported:hover {
	opacity: 1;
}
.phpbb div.buttons {
	float: left;
}
.phpbb .inner > div.buttons {
	float: none;
}
.phpbb div.buttons > div {
	margin-right: 5px;
	float: left;
}
.phpbb .topic-actions .search-box {
	float: left;
}

.phpbb #jumpbox, .phpbb .jumpbox, .phpbb #jumpbox + form, .phpbb .js-jumpbox {
	display: block;
	float: right;
	text-align: right;
	clear: right;
	margin: 4px 0;
}
.phpbb .jumpbox-js label {
	float: left;
	display: block;
	padding-top: 8px;
	padding-right: 4px;
}
.phpbb .jumpbox a.button {
	white-space: nowrap;
	max-width: 300px;
	overflow: hidden;
	text-overflow: ellipsis;
}

/*
	Posting form
*/
.phpbb #format-buttons {
	padding: 2px 0;
}
.phpbb #smiley-box {
	float: right;
	width: 200px;
}
.phpbb #message-box {
	margin-right: 210px;
}
.phpbb #qr_editor_div #message-box {
	margin-right: 0;
}
.phpbb #message-box textarea {
	width: 98%;
	width: calc(100% - 6px);
	width: -moz-calc(100% - 6px);
}

.phpbb p.error, .phpbb dd.error {
	padding: 6px;
}

/*
	Poll
*/
.phpbb .polls {
	margin: 4px 0 0;
}
.phpbb .polls dl {
	display: table;
	width: 100%;
	border-top: 1px solid transparent;
}
.phpbb .polls dl.votes {
	border-top-width: 0;
}
.phpbb .polls dt, .phpbb .polls dd {
	display: table-cell;
	margin: 0;
	padding: 4px 0 4px 4px;
}
.phpbb .polls dt {
	width: 95%;
	clear: left;
	padding-left: 0;
}
.phpbb .polls dd {
	width: 20%;
}
.phpbb .polls dd.resultbar {
	width: 50%;
	padding-left: 10px;
	padding-right: 10px;
}

.ie7 .phpbb .polls dl, .ie7 .phpbb .polls dt, .ie7 .phpbb .polls dd {
	display: block;
}
.ie7 .phpbb .polls dt, .ie7 .phpbb .polls dd {
	float: left;
}
.ie7 .phpbb .polls dt {
	width: 30%;
}
.ie7 .phpbb .polls dd {
	width: 10%;
}
.ie7 .phpbb .polls dd.resultbar {
	width: 45%;
}

.phpbb .polls dd.resultbar > div {
	min-width: 10px;
	padding: 2px 4px 1px;
	border: 1px solid transparent;
	border-radius: 5px;
	text-align: right;
	line-height: 1em;
	font-size: 12px;
	font-family: Arial;
	background: transparent none 0 50% repeat-x;
}

.phpbb .polls dl.votes dt { 
	display: none; 
}
.phpbb .polls dl.votes dd { 
	text-align: center;
	width: 100%;
	padding-top: 0;
}
.phpbb .content p.author {
	color: #808080;
}


/*
	Posts
*/
.phpbb .post+hr.divider {
	display: none;
}

.phpbb p.author {
	font-size: 12px;
	line-height: 1.5em;
	padding: 0;
}

.phpbb .post {
	margin: 6px 0;
	clear: both;
	position: relative;
}
.phpbb .post > .inner {
	display: table;
	width: 100%;
	max-width: 100%;
}
.phpbb .post > .inner > span {
	display: none;
}
.phpbb .post > .inner > .postbody {
	display: table-cell;
	vertical-align: top;
	width: 100%;
	padding-bottom: 10px;
}
.phpbb .profile + .postbody {
	border-left: 1px solid transparent;
	padding-left: 10px;
	padding-right: 6px;
}
.phpbb .post {
	border: 1px solid transparent;
	border-radius: 5px;
	padding: 4px;
	word-wrap: break-word;
}
.phpbb .post > .inner > .postprofile, .phpbb .post > .inner > .profile {
	display: table-cell;
	vertical-align: top;
	min-width: 190px;
	vertical-align: top;
	padding-bottom: 10px;
}
.phpbb .post .postprofile {
	padding: 0 4px 4px 0;
	word-wrap: break-word;
}

.ie7 .phpbb .post > .inner {
	display: block;
}
.ie7 .phpbb .post > .inner > .profile {
	display: block;
	float: left;
	width: 190px;
}
.ie7 .phpbb .post > .inner > .postbody {
	display: block;
	margin-left: 200px;
	clear: none;
	width: auto;
}
.ie7 .phpbb #topicreview .post .postbody, .ie7 .phpbb #preview.post .postbody {
	margin-left: 0;
}

.phpbb .post > .inner > .back2top {
	display: block;
	position: absolute;
	z-index: 2;
	right: 8px;
	bottom: 6px;
}
.phpbb .post > .inner > .back2top a {
	display: inline-block;
	text-decoration: none;
	padding-right: 14px;
	font-size: 11px;
	white-space: nowrap;
	background: transparent none 100% 50% no-repeat;
}

.phpbb .post .content {
	padding-bottom: 4px;
	word-wrap: break-word;
	overflow: hidden;
}

.phpbb .postprofile dt {
	text-align: center;
	font-size: 16px;
	font-family: Arial;
	line-height: 1.2em;
	padding-top: 1px;
	white-space: nowrap;
}
.phpbb .postprofile dt a, .phpbb .postprofile dt a:visited {
	text-decoration: none;
}
.phpbb .postprofile dt a:hover {
	text-decoration: underline;
}
.phpbb .postprofile dt .popup {
	top: 20px;
}
.phpbb .postprofile dt .popup a {
	min-width: 162px;
}
.phpbb .postprofile dd {
	font-size: 11px;
	line-height: 1.1em;
	padding: 4px 6px 0;
}
.phpbb .postprofile dd.poster-rank {
	text-align: center;
	padding-top: 0;
	white-space: nowrap;
}
.phpbb .postprofile dd.poster-online {
	text-align: center;
	padding-top: 4px;
}
.phpbb .poster-avatar {
	text-align: center;
	margin: 4px 10px 4px 6px;
	padding: 4px 0 0;
}
.phpbb .poster-avatar.empty {
	min-height: 90px;
	min-width: 90px;
	background: transparent none 50% 0 no-repeat;
	opacity: 0.8;
	transition: opacity 0.25s ease;
	-moz-transition: opacity 0.25s ease;
	-webkit-transition: opacity 0.25s ease;
	-o-transition: opacity 0.25s ease;
	-ms-transition: opacity 0.25s ease;
}
.phpbb .post:hover .poster-avatar.empty {
	opacity: 1;
}

.phpbb .postbody h3, .phpbb .content h2:first-child {
	clear: none;
	margin: 0;
	padding: 3px 0 1px;
}
.phpbb .postbody .author {
	font-size: 11px;
	margin: 0 0 6px;
}
.phpbb .postbody .author img {
	margin-right: 2px;
}

.phpbb .postbody .searchresults {
	float: right;
	text-align: right;
}

/*
	Post buttons
*/
.phpbb .postbody .profile-icons {
	float: right;
}
.phpbb .postbody .profile-icons li {
	float: left;
	width: auto !important;
	background: none !important;
}

.phpbb .profile-icons a {
	display: block;
	float: left;
	margin: 0 0 0 4px;
	padding: 0;
	text-decoration: none !important;
	width: 21px;
	height: 21px;
	overflow: hidden;
	background: transparent none 0 0 no-repeat;
	outline-style: none;
}
.phpbb .profile-icons a:hover, .phpbb .profile-icons a:active {
	background-position: 0 -21px;
	outline-style: none;
}
.phpbb .profile-icons span {
	display: none;
}

.phpbb .profile-icons .edit-icon a {
	width: {IMG_ICON_POST_EDIT_WIDTH}px;
}
.phpbb .profile-icons .quote-icon a {
	width: {IMG_ICON_POST_QUOTE_WIDTH}px;
}
.phpbb .profile-icons .info-icon a {
	background-position: -21px 0;
}
.phpbb .profile-icons .info-icon a:hover {
	background-position: -21px -21px;
}
.phpbb .profile-icons .report-icon a {
	background-position: -42px 0;
}
.phpbb .profile-icons .report-icon a:hover {
	background-position: -42px -21px;
}
.phpbb .profile-icons .warn-icon a {
	background-position: -63px 0;
}
.phpbb .profile-icons .warn-icon a:hover {
	background-position: -63px -21px;
}

/*
	Other icons
*/
.phpbb .profile-icons > li.pm-icon, .phpbb .profile-icons > li.email-icon, .phpbb .profile-icons > li.web-icon, .phpbb .profile-icons > li.msnm-icon, .phpbb .profile-icons > li.icq-icon, .phpbb .profile-icons > li.yahoo-icon, .phpbb .profile-icons > li.aim-icon, .phpbb .profile-icons > li.jabber-icon {
	display: none;
}

.phpbb .profile-icons > li.pm-icon a, .phpbb .profile-icons > li.email-icon a, .phpbb .profile-icons > li.web-icon a, .phpbb .profile-icons > li.msnm-icon a, .phpbb .profile-icons > li.icq-icon a, .phpbb .profile-icons > li.yahoo-icon a, .phpbb .profile-icons > li.aim-icon a, .phpbb .profile-icons > li.jabber-icon a {
	display: inline;
	width: auto;
	height: auto;
	background-color: transparent !important;
	background-image: none !important;
	text-decoration: underline !important;
}
.phpbb .profile-icons > li.pm-icon span, .phpbb .profile-icons > li.email-icon span, .phpbb .profile-icons > li.web-icon span, .phpbb .profile-icons > li.msnm-icon span, .phpbb .profile-icons > li.icq-icon span, .phpbb .profile-icons > li.yahoo-icon span, .phpbb .profile-icons > li.aim-icon span, .phpbb .profile-icons > li.jabber-icon span {
	display: inline;
}

/*
	Post content
*/
.phpbb .postbody .content {
	font-size: 13px;
	line-height: 1.5em;
}

.phpbb .postbody img, .phpbb .postbody .attach-image {
	max-width: 640px;
	overflow: auto;
}
.phpbb .postbody .attach-image img {
	max-width: none;
}
.phpbb .postbody .rules {
	border: 1px solid transparent;
	margin: 5px 20px;
	padding: 6px;
	font-size: 12px;
}
.phpbb .postbody .rules img {
	vertical-align: top;
}
.phpbb .postbody .rules a {
	display: inline-block;
	padding-top: 2px;
	font-weight: bold;
	text-decoration: none;
}
.phpbb .postbody .rules a:hover {
	text-decoration: underline;
}

.phpbb .signature, .phpbb .notice {
	font-size: 12px;
	border-top: 1px solid transparent;
	padding-top: 4px;
	margin-top: 10px;
	line-height: 1.5em;
}

/*
	BBCode
*/
.phpbb blockquote, .phpbb .attachbox, .phpbb .codebox, .phpbb .inline-attachment {
	border: 1px solid transparent;
	margin: 5px 20px;
	padding: 4px;
}
.phpbb blockquote {
	font-size: 12px;
}
.phpbb blockquote cite, .phpbb .attachbox dt, .phpbb .codebox dt {
	display: block;
	border-bottom: 1px solid transparent;
	margin-bottom: 4px;
	line-height: 1em;
	padding: 2px 0 6px;
}
.phpbb .file dt {
	border-bottom-width: 0;
	margin: 0;
	padding-bottom: 6px;
}
.phpbb .codebox dt a {
	display: block;
	float: right;
}

.phpbb .content ul {
    list-style-type: disc;
}
.phpbb .content ol {
    list-style-type: decimal;
}
.phpbb .content li {
    display: list-item;
    margin: 0 0 0 20px;
}

.phpbb .content ul ul, .phpbb .content ol ul {
    list-style-type: circle;
}

.phpbb .content ol ol ul, .phpbb .content ol ul ul, .phpbb .content ul ol ul, .phpbb .content ul ul ul {
    list-style-type: square;
} 

/*
	Forms
*/
.phpbb fieldset {
	line-height: 1.1em;
}
.phpbb fieldset dl {
	padding: 4px 0;
	clear: left;
}
.ie7 .phpbb fieldset dl {
	height: 1%;
}
.phpbb fieldset dt {
	float: left;
	width: 40%;
}
.phpbb fieldset.fields1 dt {
	width: 180px;
}
.phpbb fieldset dd {
	margin-bottom: 3px;
	margin-left: 41%;
	vertical-align: top;
}
.phpbb fieldset.fields1 dd {
	margin-left: 185px;
}

/*
	Lists
*/
.phpbb .linklist li {
	float: left;
}
.phpbb .linklist li.rightside {
	float: right;
}

/*
	Tabs
*/
.phpbb #tabs ul, .phpbb #minitabs ul {
	clear: both;
	display: block;
	margin: 10px 6px -6px;
}
.ie7 .phpbb #tabs ul, .ie7 .phpbb #minitabs ul {
	height: 1%;
}
.phpbb #tabs ul.main-tabs, .phpbb #tabs.cp-tabs ul {
	margin-bottom: 0;
}
.phpbb #tabs.cp-tabs ul {
	margin-left: 0;
}
.phpbb #tabs ul + ul {
	margin-top: 2px;
}
.phpbb #tabs li, .phpbb #minitabs li {
	display: block;
	float: left;
	margin: 0 1px;
	padding: 0;
}
.phpbb #tabs li a, .phpbb #minitabs li a {
	display: block;
	padding: 5px 6px;
	border: 1px solid transparent;
	background: transparent none 0 0 repeat-x;
	border-bottom-width: 0;
	border-top-left-radius: 6px;
	border-top-right-radius: 6px;
	text-decoration: none;
}
.phpbb #tabs .main-tabs li a, .phpbb #tabs.cp-tabs li a {
	border-bottom-width: 1px;
	border-radius: 6px;
}

/*
	Control panel
*/
.phpbb .cp-content {
	clear: both;
}

.phpbb .cp-mini {
	float: left;
	margin: 5px;
	margin-left: 0;
	padding: 5px;
}
.phpbb dl.mini {
	max-height: 140px;
	min-width: 140px;
	min-height: 60px;
	overflow: auto;
}
.phpbb dl.mini dt {
	padding-bottom: 3px;
}

.phpbb #cp-main {
	clear: both;
}

.phpbb dl.pmlist dt {
	width: 40% !important;
}
.phpbb dl.pmlist dt textarea {
	width: 99%;
	width: calc(100% - 6px);
	width: -moz-calc(100% - 6px);
}
.phpbb dl.pmlist dd {
	margin-bottom: 2px;
	margin-left: 41% !important;
}

.phpbb .pm-legend {
	border-left: 10px solid transparent;
	padding: 4px;
	white-space: nowrap;
}
.phpbb .topiclist.pmlist > li > dl {
	padding-left: 4px;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}
.phpbb .topiclist.pmlist > li > dl dt {
	border-left: 4px solid transparent;
}
.phpbb .topiclist.pmlist > li > dl.icon {
	background-position: 15px 50%;
}
.phpbb .topiclist.pmlist > li > dl dt {
	padding-left: 44px;
	background-position: 9px 80%;
}

.phpbb dl.details {
	line-height: 1.5em;
}
.phpbb span.corners-top + dl.details.left-box {
	width: 100% !important;
}
.phpbb dl.details dt {
	clear: left;
	float: left;
	width: 30%;
	text-align: right;
}
.phpbb dl.details dd {
	float: left;
	width: 65%;
	margin: 0 0 5px;
	padding-left: 5px;
}

/*
	Groups
*/
.phpbb table.table1 .name {
	text-align: left;
}
.phpbb table.table1 span.rank-img {
	float: right;
}

/*
	FAQ
*/
.phpbb dl.faq {
	padding-top: 6px;
	line-height: 1.5em;
}
.phpbb dl.faq:first-child {
	padding-top: 0;
}
.phpbb dl.faq dt {
	padding-bottom: 4px;
	font-size: 13px;
	line-height: 1.5em;
	font-weight: bold;
}
.phpbb #faqlinks .column1, .phpbb #faqlinks .column2 {
	float: left;
	width: 49%;
}

/*
	Avatars gallery
*/
.phpbb #gallery label {
	display: block;
	float: left;
	margin: 10px;
	padding: 5px;
	text-align: center;
	border: 1px solid transparent;
}

/*
	RSS feed
*/
.phpbb a.feed-icon-forum {
	display: block;
	float: right;
	width: 0;
	height: 0;
	overflow: hidden;
	margin: 0;
	padding: 18px 0 0 18px;
	background: transparent none 0 0 no-repeat;
}
.phpbb a.feed-icon-forum:hover {
	background-position: 0 -20px;
}

/*
	Link to switch to mobile style
*/
.mobile-style-switch a {
	display: inline-block;
	padding: 5px 10px 6px;
	border: 1px solid #D8D8D8;
	border-radius: 10px;
	background: #F8F8F8;
}

/*
	Zoom in image
*/
span.zoom-container {
	position: relative;
	display: inline-block;
	min-height: 34px;
}
span.zoom-image { 
	display: none; 
    transition: opacity 0.25s ease;
    -webkit-transition: opacity 0.25s ease;
    -moz-transition: opacity 0.25s ease;
    -o-transition: opacity 0.25s ease;
    -ms-transition: opacity 0.25s ease;
	opacity: 0.7;
}
img.zoom + span.zoom-image {
	display: block;
	position: absolute;
	top: 2px;
	left: 2px;
	width: 30px;
	height: 30px;
	background: url("{T_THEME_PATH}/images/zoom.png") 0 0 no-repeat;
	cursor: pointer;
}
.zoom-container:hover span.zoom-image { opacity: 1; }
img.zoom.zoomed-in + span.zoom-image { 
	background-position: 0 -30px;
	opacity: 0;
}
.zoom-container:hover img.zoom.zoomed-in + span.zoom-image { opacity: 0.7; }
/*
	Forms
*/

.phpbb input[type="text"], .phpbb input[type="password"], .phpbb input[type="email"], .phpbb textarea, .phpbb select, .phpbb input[type="submit"], .phpbb .button1, .phpbb .button2, .phpbb .buttons a, .phpbb a.button {
	margin: 0;
	padding: 0;
	font-family: Verdana;
	font-size: 13px;
	line-height: 1.2em;
	outline-style: none;
	border: 1px solid transparent;
	background-position: 0 50%;
}
.phpbb textarea {
	line-height: 1.4em;
}
.phpbb input[type="text"], .phpbb input[type="password"], .phpbb input[type="email"], .phpbb textarea, .phpbb input[type="submit"], .phpbb .button1, .phpbb .button2 {
	-webkit-appearance: none;
}

.phpbb a.button1, .phpbb a.button2, .phpbb .buttons a, .phpbb a.button {
	display: inline-block;
	text-decoration: none;
}
.phpbb .button2 {
	background-position: 100% 50%;
}

.phpbb input[type="text"], .phpbb input[type="password"], .phpbb input[type="email"], .phpbb textarea, .phpbb select {
	padding: 1px 2px 2px;
}
.phpbb input[type="text"]:invalid, .phpbb input[type="password"]:invalid, .phpbb input[type="email"]:invalid, .phpbb textarea:invalid {
	box-shadow: none;
}

.phpbb input[type="submit"], .phpbb .button1, .phpbb .button2, .phpbb .buttons a, .phpbb a.button {
	line-height: 1.4em;
	padding: 2px 8px 3px;
	cursor: pointer;
	border-width: 0;
	border-radius: 5px;
}
.ie7 .phpbb input[type="submit"], .ie7 .phpbb .button1, .ie7 .phpbb .button2 {
	padding-top: 0;
	padding-bottom: 1px;
	margin-top: 0;
}
.phpbb a.button1, .phpbb a.button2, .phpbb .buttons a, .phpbb a.button {
	line-height: 1em;
	padding: 4px 10px 0;
	height: 19px;
}
.oldie .phpbb a.button1, .oldie .phpbb a.button2, .oldie .phpbb .buttons a, .oldie .phpbb a.button {
	padding-top: 5px;
}
.ie7 .phpbb a.button1, .ie7 .phpbb a.button2, .ie7 .phpbb .buttons a, .ie7 .phpbb a.button {
	padding-top: 4px;
	padding-bottom: 0;
}
.ie7 .phpbb .popup a.button1, .ie7 .phpbb .popup a.button2 {
	position: relative;
	top: 2px;
}

.phpbb input[type="checkbox"], .phpbb input[type="radio"] {
	margin-top: 0;
	margin-bottom: 0;
}

.phpbb select {
	max-width: 250px;
}
.ie7 .phpbb select {
	width: 250px;
}

.phpbb fieldset.submit-buttons {
	text-align: center;
	padding: 4px 0;
}
.phpbb #format-buttons .button2 {
	border-width: 1px;
	width: auto !important;
}
.ie7 .phpbb #format-buttons .button2 {
	padding: 0;
}

.phpbb #search_keywords {
	padding-left: 19px;
	background-position: 4px 50%;
	background-repeat: no-repeat;
}

.phpbb #edit_reason {
	width: 90%;
}

/*
	Buttons
*/
.phpbb .buttons a, .phpbb a.button {
	padding-left: 28px;
	padding-right: 12px;
	position: relative;
}
.phpbb .buttons a:after, .phpbb a.button:after {
	content: '';
	display: block;
	position: absolute;
	left: 5px;
	top: 0;
	bottom: 0;
	width: 20px;
	background: transparent none 0 50% no-repeat;
	opacity: 0.9;
}
.phpbb .buttons a:hover:after, .phpbb a.button:after:hover {
	opacity: 1;
}
.phpbb .buttons .newpm-icon a:after {
	background-position: -20px 50%;
}
.phpbb .buttons .post-icon a:after {
	background-position: -40px 50%;
	opacity: 1;
}
.phpbb .jumpbox a.button {
	padding-left: 26px;
}
.phpbb .jumpbox a.button:after {
	background-position: -60px 50%;
}
/*
	Popups
*/
.phpbb .popup-trigger {
	position: relative;
}

.phpbb .popup {
	display: none;
	position: absolute;
	left: 0;
	top: 27px;
	z-index: 10;
	padding: 4px 5px 6px;
	margin: 0;
	border: 1px solid transparent;
	border-radius: 5px;
	min-width: 150px;
	white-space: nowrap;
	text-align: left;
	font-size: 12px;
	line-height: 1em;
	font-family: Verdana;
}
.ie7 .phpbb .popup {
	top: 24px;
}
.phpbb .menu.left .popup {
	left: 5px;
}
.phpbb .menu.left li:first-child .popup {
	left: 0;
}
.phpbb .popup-up .popup {
	top: auto;
	bottom: 0;
}
.phpbb .popup-list {
	padding: 2px 5px 4px;
}
.phpbb .right .popup {
	left: auto;
	right: 0;
}

.phpbb .popup-trigger:hover .popup, .phpbb .popup.active {
	display: block;
}

.phpbb .popup:before {
	content: '';
	display: block;
	height: 2px;
	position: relative;
	top: -7px;
	left: -6px;
}
.phpbb .popup-list:before {
	top: -5px;
}
.phpbb .right .popup:before {
	left: auto;
	right: -6px;
}

.phpbb .popup p {
	padding: 2px 0;
}

/*
	Links
*/
.phpbb .popup-list li {
	padding: 1px 0;
}
.ie7 .phpbb .popup-list a {
	width: 100%;
}

.phpbb .popup-list li > a:first-child, .phpbb .popup-list li.nolink {
	display: block;
	padding: 3px 10px 4px 5px;
	border: 1px solid transparent;
	border-radius: 6px;
	text-decoration: none !important;
	max-width: 200px;
	overflow: hidden;
	text-overflow: ellipsis;
}
.phpbb .popup-list li.nolink {
	margin: 1px 0;
}

.phpbb .popup-list ol {
	display: table-row;
}
.phpbb .popup-list ol > li {
	display: table-cell;
	padding-right: 4px;
}
.phpbb .popup-list ol > li:last-child {
	padding-right: 0;
}

/*
	Definition lists
*/
.phpbb .popup dl {
	clear: both;
	width: 254px;
	margin: 0;
	padding: 4px;
}
.phpbb .popup dt {
	float: left;
	width: 100px;
	margin: 0;
	padding: 3px 0 0;
}
.phpbb .popup dd {
	width: 150px;
	margin: 0;
	margin-left: 104px;
	padding: 0;
}
.ie7 .phpbb .popup dd {
	margin-left: 0;
}
.phpbb .popup dd input {
	width: 140px;
}
/*
	Colours, URLs
*/

.phpbb h2, .phpbb h3 {
	color: #d34e05;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2);
}

.phpbb hr {
	border-top-color: #d0d0d0;
}



/*
	Links
*/
.phpbb a, .phpbb a:visited { 
	color: #d34e05;
}
.phpbb a:hover, .phpbb a:active {
	color: #af2a2a;
}

.phpbb a.forumtitle, .phpbb a.topictitle {
	text-shadow: 1px 1px 1px rgba(128, 128, 128, 0.1);
}

/*
	Layout
*/
body.phpbb, body.simple {
	background: #f8f8f8;
}

.phpbb .wrap-top-top {
	background-color: #d34e05;
	background-image: url("{T_THEME_PATH}/images/pattern.png");
	border-bottom-color: #224467;
}
.phpbb .wrap-top-top div, .phpbb .wrap-top-mid {
	background-image: url("{T_THEME_PATH}/images/gradient400.png");
}
.phpbb .wrap-top-mid {
	border-top-color: #fff;
}
.phpbb .wrap-top-mid .left {
	background-image: url("{T_THEME_PATH}/images/c_shadow1.png");
}
.phpbb .wrap-top-mid .right {
	background-image: url("{T_THEME_PATH}/images/c_shadow2.png");
}

.phpbb .logo h1 {
	color: rgba(255, 255, 255, 0.8);
	text-shadow: 1px 1px 0 rgba(29, 77, 126, 0.4);
}
.oldie .phpbb .logo h1 {
	color: #dde4ea;
}

.phpbb .sitenav {
	background-image: url("{T_THEME_PATH}/images/header_bg.png");
}
.phpbb .sitenav:before, .phpbb .sitenav:after {
	background-image: url("{T_THEME_PATH}/images/header_sides.png");
}
.ie7 .phpbb .sitenav {
	border-color: #a1afbf;
}

.phpbb .sitenav h2 {
	background-image: url("{T_THEME_PATH}/images/header_arrow.png");
	color: rgba(255, 255, 255, 0.8);
	text-shadow: 1px 1px 0 rgba(29, 77, 126, 0.4);
}
.oldie .phpbb .sitenav h2 {
	color: #dde4ea;
}

.phpbb .sitenav .links a, .phpbb .sitenav .links a:before, .phpbb .sitenav .links a:after {
	background-image: url("{T_THEME_PATH}/images/buttons.png");
	text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
	color: rgba(255, 255, 255, 0.8);
}
.oldie .phpbb .sitenav .links a {
	color: #dde4ea;
}
.phpbb .sitenav .links a:hover {
	color: #fff;
}
.ie7 .phpbb .sitenav .links a {
	border-color: #889cb1;
}

.phpbb .page-content {
	background-color: rgba(248, 248, 248, 0.95);
}
.oldie .phpbb .page-content {
	background-color: #f8f8f8;
}

.phpbb .footer {
	border-top-color: #fff;
	background-color: #d34e05;
	background-image: url("{T_THEME_PATH}/images/pattern.png");
}
.phpbb .footer, .phpbb .footer a, .phpbb .footer a:visited {
	color: #92a8be;
	text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
}
.phpbb .footer a:hover {
	color: #fff;
}
.phpbb .footer .inner {
	border-top-color: #224467;
	background-image: url("{T_THEME_PATH}/images/gradient400.png");
}

.phpbb .footer .arty, .phpbb .footer .phpbb-group {
	background-image: url("{T_THEME_PATH}/images/copyrights.png");
}

/*
	Menu
*/

.phpbb .time {
	color: rgba(0, 0, 0, 0.5);
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5);
}
.oldie .phpbb .time {
	color: #808080;
}

.phpbb .menu > li > a, .phpbb .menu > li > a:before, .phpbb .menu > li > a:after {
	background-image: url("{T_THEME_PATH}/images/menu.png");
	color: #d34e05;
}
.phpbb .menu > li.active > a, .phpbb .menu > li:hover > a, .phpbb .menu > li:hover > a {
	color: #fff;
}

.ie7 .phpbb .menu > li > a {
	border-color: #9caec0;
}
.ie7 .phpbb .menu > li.active > a {
	border-color: #af2a2a;
}
.ie7 .phpbb .menu > li > a:hover {
	border-color: #43688e;
}

/*
	Navbar
*/
.phpbb .navbar, .phpbb .linkmcp {
	border-color: #d0d0d0;
	background-color: #f8f8f8;
	color: #8aa2bb;
}

/*
	Popups
*/
.phpbb .popup {
	background-color: rgba(248, 248, 248, 0.9);
	border-color: #9caec0;
	box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
}
.oldie .phpbb .popup {
	background-color: #f8f8f8;
}
.phpbb .popup-list li > a:first-child, .phpbb .popup-list li.nolink {
	border-color: #d0d0d0;
	background-color: #f8f8f8;
}
.phpbb .popup-list li > a:first-child:hover, .phpbb .show-levels li.level-root > a:first-child, .phpbb .popup-list li.row-new > a:first-child:hover {
	color: #fff;
	border-color: #43688e;
	background-color: #43688e;
}

.phpbb .show-levels li.level-root > a:first-child:hover, .phpbb .popup-list li.row-new > a:first-child {
	color: #fff;
	border-color: #af2a2a;
	background-color: #af2a2a;
}

/*
	Forms
*/
.phpbb input[type="text"], .phpbb input[type="password"], .phpbb input[type="email"], .phpbb textarea, .phpbb select {
	color: #808080;
	background-color: #fff;
	border-color: #d0d0d0;
}
.phpbb input[type="text"]:hover, .phpbb input[type="password"]:hover, .phpbb input[type="email"]:hover, .phpbb textarea:hover, .phpbb select:hover {
	color: #000;
	border-color: #9caec0;
}
.phpbb input[type="text"]:focus, .phpbb input[type="password"]:focus, .phpbb input[type="email"]:focus, .phpbb textarea:focus, .phpbb select:focus {
	color: #000;
	border-color: #af2a2a;
}
.phpbb input[type="text"]:invalid, .phpbb input[type="password"]:invalid, .phpbb input[type="email"]:invalid, .phpbb textarea:invalid {
	color: #af2a2a;
}
.phpbb input[type="submit"], .phpbb .button1, .phpbb .button2, .phpbb .buttons a, .phpbb a.button {
	color: #fff !important;
	background-color: #d34e05;
	background-image: url("{T_THEME_PATH}/images/buttons_bg.png");
	border-color: #d34e05;
	text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.25);
}
.phpbb input[type="submit"]:hover, .phpbb .button1:hover, .phpbb .button2:hover, .phpbb .buttons a:hover, .phpbb a.button:hover {
	background-color: #af2a2a;
	border-color: #af2a2a;
}
.phpbb #search_keywords {
	background-image: url("{T_THEME_PATH}/images/search.png");
	color: #a8a8a8;
}
.phpbb #search_keywords:hover, .phpbb #search_keywords:focus {
	color: #000;
}

.phpbb p.error, .phpbb dd.error {
	background-color: #af2a2a;
}
.phpbb p.error, .phpbb p.error a, .phpbb dd.error, .phpbb dd.error a {
	color: #fff !important;
}


/*
	Buttons
*/
.phpbb #format-buttons .button2 {
	background-color: #f8f8f8;
	background-image: url("{T_THEME_PATH}/images/white10.png");
	color: #808080 !important;
	border-color: #d0d0d0;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2);
}
.phpbb #format-buttons .button2:hover {
	background-color: #d34e05;
	border-color: #d34e05;
	color: #fff !important;
	text-shadow: none;
}

.phpbb .buttons a:after, .phpbb a.button:after {
	background-image: url("{T_THEME_PATH}/images/button_icons.png");
}


/*
	Forums list
*/
.phpbb .topiclist .header, .phpbb h2.header, .oldie .phpbb h2.header, .phpbb table.table1 th, .ie7 .phpbb .topiclist .header dt {
	background-color: #d34e05;
}
.phpbb h2.header {
	background-image: url("{T_THEME_PATH}/images/category.png"), url("{T_THEME_PATH}/images/category.png"), url("{T_THEME_PATH}/images/category.png");
}
.phpbb .topiclist .header, .phpbb .topiclist .header dl, .phpbb .topiclist .header dt, .oldie .phpbb h2.header, .phpbb table.table1 th {
	background-image: url("{T_THEME_PATH}/images/category.png");
}
.phpbb .topiclist .header, .phpbb .topiclist .header a, .phpbb .topiclist .header a:visited, .phpbb h2.header, .phpbb h2.header a, .phpbb h2.header a:visited,
.phpbb table.table1 th, .phpbb table.table1 th a, .phpbb table.table1 th a:visited {
	color: rgba(255, 255, 255, 0.9);
	text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.3);
}
.oldie .phpbb .topiclist .header, .oldie .phpbb .topiclist .header a, .oldie .phpbb .topiclist .header a:visited, .oldie .phpbb h2.header, .oldie .phpbb h2.header a,
.phpbb .topiclist .header a:hover, .phpbb h2.header a:hover, .oldie .phpbb table.table1 th, .oldie .phpbb table.table1 th a, .oldie .phpbb table.table1 th a:visited .phpbb table.table1 th a:hover {
	color: #fff;
}

.ie7 .phpbb .topiclist .header, .ie7 .phpbb .topiclist .header dl {
	background-color: transparent;
	background-image: none;
}


.phpbb .topiclist > li {
	background-color: #f8f8f8;
	border-color: #d0d0d0;
}
.phpbb .topiclist > li.row2 {
	background-color: #fafafa;
}
.phpbb .topiclist > li.reported {
	border-color: #d17e7e;
}
.phpbb .topiclist dd {
	border-color: #e8e8e8;
	color: #444;
}
.phpbb .topiclist .reported dd {
	border-color: #e7c7c7;
}
.phpbb .topiclist .topics dfn, .phpbb .topiclist .posts dfn, .phpbb .topiclist .views dfn, .phpbb .topiclist .lastpost dfn, .phpbb .topiclist .by, .phpbb .topiclist .bull {
	color: #999;
}

.phpbb a.topictitle, .phpbb a.forumtitle {
	color: #d34e05;
}
.phpbb .unread a.topictitle, .phpbb .unread a.forumtitle, .phpbb a.topictitle:hover, .phpbb a.forumtitle:hover, .phpbb a.subforum.unread {
	color: #af2a2a;
}

.phpbb p.subforums strong, .phpbb p.moderators strong {
	color: #808080;
}

/*
	Blocks
*/
.phpbb .panel, .phpbb .post, .phpbb table.table1 td, .phpbb .cp-mini {
	background-color: #f8f8f8;
	border-color: #d8d8d8;
}
.phpbb .panel.stats > .inner {
	background-image: url("{T_THEME_PATH}/images/stats.png");
}

.phpbb div.rules, .phpbb .postbody .rules {
	background-color: #eddede;
	border-color: #c66d6d;
}
.phpbb div.rules span+strong {
	color: #af2a2a;
}

.phpbb .panel-wrapper {
	background-color: transparent;
	background-image: none;
}


/*
	Arrows
*/
.phpbb a.subforum {
	background-image: url("{IMG_ICON_POST_TARGET_SRC}");
}
.phpbb a.subforum.unread {
	background-image: url("{IMG_ICON_POST_TARGET_UNREAD_SRC}");
}
.phpbb a.left {
	background-image: url("{T_THEME_PATH}/images/arrow_left.png");
}
.phpbb a.right {
	background-image: url("{T_THEME_PATH}/images/arrow_right.png");
}
.phpbb a.up {
	background-image: url("{T_THEME_PATH}/images/arrow_up.png");
}
.phpbb a.down {
	background-image: url("{T_THEME_PATH}/images/arrow_down.png");
}

.phpbb .post > .inner > .back2top a {
	background-image: url("{IMG_ICON_BACK_TOP_SRC}");
}


/*
	Pagination
*/
.phpbb .pagination span {
	color: #999;
}
.phpbb .pagination span a, .phpbb .pagination span strong {
	background-color: #43688e;
	color: #fff;
}
.phpbb .pagination span strong, .phpbb .pagination span a:hover {
	background-color: #af2a2a;
}

/*
	Poll
*/
.phpbb .polls dl {
	border-color: #e0e0e0;
}
.phpbb .polls dd.resultbar > div {
	color: #fff;
	background-color: #d34e05;
	background-image: url("{T_THEME_PATH}/images/white20.png");
}
.phpbb .polls .voted dd.resultbar > div {
	background-color: #af2a2a;
}

/*
	Post
*/
.phpbb .poster-rank {
	color: #888;
}
.phpbb .postprofile dd strong, .phpbb .postprofile li > strong, .phpbb .postbody .author {
	font-weight: normal;
	color: #606060;
}
.phpbb .profile .poster-avatar.empty {
	background-image: url("{T_THEME_PATH}/images/avatar.png");
}
.phpbb .post > .inner > .postbody {
	border-color: #e8e8e8;
}

.phpbb .profile-icons a {
	background-image: url("{T_THEME_PATH}/images/buttons_post.png");
}
.phpbb .profile-icons .edit-icon a {
	background-image: url("{IMG_ICON_POST_EDIT_SRC}");
}
.phpbb .profile-icons .quote-icon a {
	background-image: url("{IMG_ICON_POST_QUOTE_SRC}");
}

.phpbb .signature, .phpbb .notice {
	color: #444;
	border-color: #e8e8e8;
}

.phpbb .posthilit {
	background-color: #e3e37f;
}

/*
	BBCode
*/
.phpbb blockquote, .phpbb blockquote cite, .phpbb .attachbox, .phpbb .attachbox dt, .phpbb .codebox, .phpbb .codebox dt, .phpbb .inline-attachment {
	border-color: #e0e0e0;
}
.phpbb blockquote, .phpbb .attachbox, .phpbb .codebox, .phpbb .inline-attachment {
	background-color: #f4f4f4;
}
.phpbb blockquote blockquote, .phpbb blockquote .attachbox, .phpbb blockquote .codebox {
	background-color: #f8f8f8;
}
.phpbb blockquote, .phpbb .attachbox dt, .phpbb .codebox dt {
	color: #606060;
}
.phpbb blockquote cite {
	color: #000;
}

/*
	Tabs
*/
.phpbb #tabs li a, .phpbb #minitabs li a {
	background-color: #f8f8f8;
	border-color: #d8d8d8;
}
.phpbb #tabs li a:hover, .phpbb #minitabs li a:hover {
	background-color: #43688e;
	border-color: #43688e;
	color: #fff;
}
.phpbb #tabs li.activetab a, .phpbb #tabs #active-subsection a, .phpbb #minitabs li.activetab a {
	background-color: #43688e;
	border-color: #43688e;
	background-image: url("{T_THEME_PATH}/images/category.png");
	color: #fff;
}
.phpbb #tabs li.activetab a:hover, .phpbb #tabs #active-subsection a:hover, .phpbb #minitabs li.activetab a:hover {
	background-color: #af2a2a;
	border-color: #af2a2a;
	color: #fff;
}

/*
	Control panel
*/
.phpbb .cp-content {
	border-color: #d8d8d8;
}

.phpbb .pm_marked_colour, .phpbb .topiclist > li.pm_marked_colour > dl dt {
	border-color: #982aaf;
}
.phpbb .pm_replied_colour, .phpbb .topiclist > li.pm_replied_colour > dl dt {
	border-color: #43688e;
}
.phpbb .pm_friend_colour, .phpbb .topiclist > li.pm_friend_colour > dl dt {
	border-color: #2aaf30;
}
.phpbb .pm_foe_colour, .phpbb .topiclist > li.pm_foe_colour > dl dt {
	border-color: #af2a2a;
}

.phpbb dl.details dt {
	color: #808080;
}
 
/*
	Avatars gallery
*/
.phpbb #gallery label:hover {
	border-color: #d0d0d0;
	background-color: #fafafa;
}

/*
	RSS feed
*/
.phpbb a.feed-icon-forum {
	background-image: url("{T_THEME_PATH}/images/rss.png");
}";s:10:"theme_path";s:14:"art_ultra_blue";s:10:"theme_name";s:19:"Artodia: Ultra Blue";s:11:"theme_mtime";s:10:"1359902984";s:11:"imageset_id";s:1:"3";s:13:"imageset_name";s:19:"Artodia: Ultra Blue";s:18:"imageset_copyright";s:18:"&copy; Artodia.com";s:13:"imageset_path";s:14:"art_ultra_blue";s:13:"template_path";s:14:"art_ultra_blue";}}