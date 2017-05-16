<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lotus Pond</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/page_animations.css"/>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,300italic|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body class="theme_1" style="background: url('img/bg.jpg') center 0 no-repeat;background-size: cover;background-attachment: fixed;">
	<!-- Wrapper -->
	<div id="wrapper">
		<div class="container">
			<!-- Row -->
			<div class="row">
				<div class="language-links-mobile"><a href="index-cn.php" class="language-link-chinese">中文</a><a href="index.php" class="language-link-english">English</a></div>

				<!-- Main Menu -->
				<div class="main_menu col-md-1">
					<div class="responsive_menu_btn"><span class="fa fa-bars"></span></div>
					<div class="row">
						<div class="english-content">
						<ul class="main-menu-links">
							<li>
								<a href="#home" class="active home" data-id="1"><i class="fa fa-home"></i><span>Home</span></a>
							</li>
							<li>
								<a href="#about" class="about" data-id="2"><i class="fa fa-user"></i><span>Bios</span></a>
							</li>
							<li>
								<a href="#resume" class="resume" data-id="3"><i class="fa fa-tasks"></i><span>About</span></a>
							</li>
							<li>
								<a href="#portfolio" class="portfolio" data-id="4"><i class="fa fa-picture-o"></i><span>Projects</span></a>
							</li>
							<li>
								<a href="#contact" class="contact" data-id="6"><i class="fa fa-envelope"></i><span>Contact</span></a>
							</li>
						</ul>
					</div>
					<div class="chinese-content">
						<ul class="main-menu-links">
							<li>
								<a href="#home" class="active home" data-id="1"><i class="fa fa-home"></i><span>主页</span></a>
							</li>
							<li>
								<a href="#about" class="about" data-id="2"><i class="fa fa-user"></i><span>管理层介绍</span></a>
							</li>
							<li>
								<a href="#resume" class="resume" data-id="3"><i class="fa fa-tasks"></i><span>关于</span></a>
							</li>
							<li>
								<a href="#portfolio" class="portfolio" data-id="4"><i class="fa fa-picture-o"></i><span>项目</span></a>
							</li>
							<li>
								<a href="#contact" class="contact" data-id="6"><i class="fa fa-envelope"></i><span>联系方式</span></a>
							</li>
						</ul>
					</div>
						<ul class="language-icons">
							<li>
								<a href="#home" class="language-link-chinese" data-id="1"><img src="img/chinese.gif" alt="Chinese"></a>
							</li>
							<li>
								<a href="#home" class="language-link-english" data-id="1"><img src="img/english.gif" alt="English"></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /Main Menu -->

				<!-- Main Content -->
				<div class="main_content col-md-10">
					<div class="content col-md-12">

						<!-- Home Page -->
						<div id="home" class="pt-page-current col-md-12">
							<!-- Slider -->
							<div class="main_slider">
								<div style="width: 100%; height: 445px;"
	data-vide-bg="mp4: video.mp4, webm: video.webm, ogv: video.ogv, poster: video.jpg" data-vide-options="posterType: jpg, loop: true, muted: false, position: 100% 50%">
</div>
								<div class="overlay">
									<div class="inner">
										<div class="name">
											<img src="img/logo.png" alt="Lotus Pond" />
										</div>
										<div class="description">

											<!-- Description Rotator -->
											<div class="rotate">
											</div>
											<!-- /Description Rotator -->

										</div>
									</div>
								</div>
							</div>
							<!-- /Slider -->
							<div class="english-content">
								<div class="resume_btn goto_page_btn col-md-6" data-page="resume"><i class="fa fa-list"></i>Introduction & About Us</div>
								<div class="cv_download_btn col-md-6 goto_page_btn" data-page="blog"><i class="fa fa-newspaper-o"></i>Our Blog</div>
							</div>
						<!-- /Home Page -->
						<div class="chinese-content">

							<div class="resume_btn goto_page_btn col-md-6" data-page="resume"><i class="fa fa-list"></i>简介&关于我们</div>
							<div class="cv_download_btn col-md-6 goto_page_btn" data-page="blog"><i class="fa fa-newspaper-o"></i>博客</div>
						</div>
					</div>
						<!-- About Page -->
						<div id="about" class="col-md-12">
							<div class="english-content">
							<h1 class="title color col-md-12"><span class="text">BIOs</span><span class="bio-link-sashi">Sashi Reddi (Partner)</span><span class="bio-link-rudy">Rudy Rupak (Partner)</span></h1>

							<div class="sashi-bio">
							<!-- Left Side -->
							<div class="col-md-8 alpha left_side">
								<!-- Who i am -->
								<div class="box who_i_am">
									<div class="title">
										<div class="icon"><i class="fa fa-user"></i></div>
										<div class="text">Sashi Reddi, Partner</div>
										<div class="clear"></div>
									</div>

									<!-- Description -->
									<div class="text">
										<cms:editable name='sashi_bio_top' type='richtext'>Sashi Reddi is a successful serial technology entrepreneur, business leader, and investor in various technology and media start-ups.  Sashi’s experience in business, administration, technology, fundraising, and the entertainment industry culminate in the formation of Lotus Pond entertainment. <br /><br />
										Sashi founded India’s first video game developer, FXLabs, which was eventually acquired by Foundation 9 Entertainment. A Francisco Partners backed company, Foundation 9 Entertainment, was the largest independent game developer in North America. He is the first professional investor in YuppTV. YuppTV has has been billed as the “Netflix of India”. Sashi is a business partner to Suresh Productions, a leading Indian cinema producer. Suresh Productions is also a film distributor, managing over 400 theater screens in South India.  Sashi's other media holdings include multiple online media properties such as Indian News Site, SiliconIndia.com, and citizen journalist web site, Oximity.com . <br /><br />

	Previously, Sashi was the founder and CEO of AppLabs, the world’s largest independent software testing company. AppleLabs was acquired by CSC. Prior to AppLabs, Sashi founded EZPower Systems.  EZPower System was a web content management pioneer. EZPower systems was acquired by DocuCorp. It eventually became a part of Oracle and iCoop (group purchasing dotcom). <br /><br />

	Sashi currently serves on the advisory board of Wharton Entrepreneurship, board of Ben Franklin Technology Partners, as well as on the board of T-Hub, India’s largest incubator for start-ups. He has a broad reaching network of industry professionals, investors, and professional talent.  He is a charter member of TiE Philadelphia and TiE Hyderabad. He also runs a charitable organization, SRI Trust, that supports the educational and overall development needs of 600 children in three schools in India. <br /><br />

	In addition to the above, Sashi is a competent fiction writer. Lotus Pond allows him to develop good stories that will let him challenge the status quo of Hollywood domination.  He saw the vision of combining the strengths of China and India together to create Lotus Pond.
</cms:editable>
									</div>
									<!-- /Description -->

								</div>
								<!-- /Who i am -->

								<div class="box awards">
									<div class="awards">
										<div class="award">
											<div class="date">Game Producer</div>
											<cms:editable name='sashi_games' type='richtext'>
											<div class="body">
												<div class="award_title">Game Name</div>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
											</div>
											<div class="body">
												<div class="award_title">Game Name</div>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
											</div>
											</cms:editable>
											<div class="clear"></div>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<!-- /Left Side -->

							<!-- Right Side -->
							<div class="col-md-4 omega right_side">

								<!-- About Pictures -->
								<div class="box pictures">
									<div class="pictures_inner cycle-slideshow">
									    <img src="img/sashi.jpg" class="first" alt="img" />
									</div>
								</div>
								<!-- /About Pictures -->

								<!-- My Services -->
								<div class="box my_services">
									<div class="title">
										<div class="icon"><i class="fa fa-wrench"></i></div>
										<div class="text">Links</div>
										<div class="clear"></div>
									</div>
									<a href="https://www.linkedin.com/in/sashireddi" class="btn"><i class="fa fa-linkedin"></i> LinkedIn</a>
									<a href="https://www.facebook.com/sashi.reddi.14" class="btn"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="https://twitter.com/sashi_reddi" class="btn"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
								<!-- /My Services -->

								<span class="btn bio-link-rudy">Continue to Rudy Rupak</span>
								<!-- /Testimonials -->

							</div>
							<!-- /Right Side -->
						</div>

						<div class="rudy-bio">
						<!-- Left Side -->
						<div class="col-md-8 alpha left_side">
							<!-- Who i am -->
							<div class="box who_i_am">
								<div class="title">
									<div class="icon"><i class="fa fa-user"></i></div>
									<div class="text">Rudy Rupak, Partner</div>
									<div class="clear"></div>
								</div>

								<!-- Description -->
								<div class="text">
									<cms:editable name='rudy_bio_top' type='richtext'>Rudy Rupak, serial entrepreneur and self-taught programmer, sold his first company, a desktop publishing template, to Corel Corp (makers of CorelDraw and Wordperfect) at the age of 17.  He dropped out of medical school to pursue his passion of film; first learning the business side of film production by working for Canada's largest film distributor, Cinema Plus.  Rudy worked in film sales and acquisitions, eventually moving on to Telescene Productions. He helped sell the foreign distribution rights to their first television series, Urban Angel.<br /><br />

									Rudy Rupak, serial entrepreneur and self-taught programmer, sold his first company, a desktop publishing template, to Corel Corp (makers of CorelDraw and Wordperfect) at the age of 17.  He dropped out of medical school to pursue his passion of film; first learning the business side of film production by working for Canada's largest film distributor, Cinema Plus.  Rudy worked in film sales and acquisitions, eventually moving on to Telescene Productions. He helped sell the foreign distribution rights to their first television series, Urban Angel. <br />

Seeking greater challenge, Rudy moved to Astral Group's Productions Heroux (now a part of Bell Canada) where he worked on Euro-Canadian co-production financing. He organized the multimedia division of Astral, overseeing 16 Euro-Canadian co-productions. While working at these production companies, Rudy wrote over 17 screenplays.  In 1995 Rudy started his own production company, Millennium Multimedia. The company produced Canada's first fully studio-financed feature film—Snowboard Academy. Snowboard Academy was released by Columbia TriStar. Rudy followed up with She's Too Tall 4 Me, which was released by MGM Home Video. <br />

Snowboard Academy was released when Rudy was only 25 years old. He was recognized as Canada's youngest film producer.  Snowboard Academy was one of the fastest selling videos in 1996. US sales reached over one million units. It was the third best-selling video in Canada that year. Rudy also helped finance The Final Goal, which launched the career of John Cassar, the director of the Fox series 24. <br />

In addition to feature film and television projects, Millennium Multimedia was heavily involved in the gaming and multimedia space.  Rudy created the Leonard Nimoy and Isaac Asimov collaboration, Primortals, as a videogame/interactive comic for Sierra Online and Quebecor Media.  In 1995, he became a senior advisor to Quebecor, directing its media and web strategy. His last project for Quebecor was a game that combined elements of Cirque du Soleil and Thrashin', a console game for Playstation. Based on Snowboard Academy, it was the first snowboarding genre video game.   Millenium Multimedia was acquired by reverse merger and became public on the NASDAQ Bulletin Board Exchange under the trading symbol PINC. The game was abandoned during this process. As CEO of Millennium, Rudy steered the company away from games and into software services.  Rudy left PINC to become the first CTO of American Apparel. <br />

Rudy returned to media by becoming an advisor to Malaysia-based handheld game developer, WEGOTGAME. This led him to collaborate with Sashi Reddi at FxLabs.  Rudy drifted away from entertainment and world media to form the world's first Medical Tourism facilitation company, PlanetHospital.  Rudy Rupak later formed Massive Attack, a mobile and web app development agency.  In 2015, Rudy saw the opportunity for a collaboration between Indian and Chinese film partner. Rudy Rupak joined with Sashi Reddi to form Lotus Pond entertainment to take advantage of improved market condition and reduced world focus on U.S. centric media.
								</cms:editable>
								</div>
								<!-- /Description -->

							</div>
							<!-- /Who i am -->

							<div class="box awards">
								<div class="awards">
									<div class="award">
										<div class="date">Filmography</div>
										<cms:editable name='rudy_filmography' type='richtext'>
										<div class="body">
											<div class="award_title">Movie Name</div>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
										</div>
										<div class="body">
											<div class="award_title">Movie Name</div>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
										</div>
										</cms:editable>
										<div class="clear"></div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<!-- /Left Side -->

						<!-- Right Side -->
						<div class="col-md-4 omega right_side">

							<!-- About Pictures -->
							<div class="box pictures">
								<div class="pictures_inner cycle-slideshow">
										<img src="img/rudy.png" class="first" alt="img" />
								</div>
							</div>
							<!-- /About Pictures -->

							<!-- My Services -->
							<div class="box my_services">
								<div class="title">
									<div class="icon"><i class="fa fa-wrench"></i></div>
									<div class="text">Links</div>
									<div class="clear"></div>
								</div>
								<a href="https://www.linkedin.com/in/rudyrupak" class="btn"><i class="fa fa-linkedin"></i> LinkedIn</a>
								<a href="https://www.facebook.com/RudyRupak" class="btn"><i class="fa fa-facebook"></i> Facebook</a>
								<a href="https://twitter.com/rudyrupak" class="btn"><i class="fa fa-twitter"></i> Twitter</a>
							</div>
							<!-- /My Services -->

							<span class="btn bio-link-rudy">Continue to Sashi Reddi</span>

						</div>
						<!-- /Right Side -->
					</div>

							<div class="clear"></div>
						</div>
						<div class="chinese-content">
							<h1 class="title color col-md-12"><span class="text">BIOs</span><span class="bio-link-sashi">合伙人：撒西 Reddi</span><span class="bio-link-rudy">合伙人：鲁迪 Rupak</span></h1>

							<div class="sashi-bio">
							<!-- Left Side -->
							<div class="col-md-8 alpha left_side">
								<!-- Who i am -->
								<div class="box who_i_am">
									<div class="title">
										<div class="icon"><i class="fa fa-user"></i></div>
										<div class="text">合伙人：撒西 Reddi</div>
										<div class="clear"></div>
									</div>

									<!-- Description -->
									<div class="text">
										<cms:editable name='sashi_bio_top_chinese' type='richtext'>Sashi Reddi是一个成功的连续创业投资人，商界领袖，科技及传媒业创新企业投资家。 Sashi将他在商业、管理、技术、集资和娱乐行业中积累的经验运用于荷塘月色娱乐传媒管理中。<br /><br />
										Sashi成立了印度的第一个视频游戏开发商-FXLabs，这家公司后来被第9娱乐收购。第9娱乐传媒是北美最大的独立游戏开发商Francisco Partners的子公司。SaShi是YuppTV首位专业投资人。 YuppTV被标榜为“印度的Netflix”。 Sashi是苏雷什制作（印度闻名的电影制片商）的商业伙伴。苏雷什制作同时经营影视发行，拥有南印度400多家影院的发行管理权。 Sashi同时拥有网络媒体，包括印度新闻网站：SiliconIndia.com和公民记者网站：Oximity.com。<br /><br />
此前，Sashi是世界上最大的独立软件测试公司AppLabs的创始人兼首席执行官。 AppleLabs后被CSC收购。在成立AppLabs之前，Sashi成立了EZPower系统，EZPower系统是网络内容管理的先驱。 EZPower系统后被DocuCorp收购。它最终成为Oracle和iCoop（集团采购网络公司）的一部分。 <br /><br />
Sashi目前担任沃顿商学院，本杰明·富兰克林技术合作伙伴董事会的顾问委员，他还是印度最大的初创企业孵化器T-HUB的董事会成员。他与业内专业人士，投资者和专业人才有着广泛的联系。Sashi是费城TIE协会的创建人员，TiE海得拉巴组织的创始成员。他还管理着一家慈善组织—SRI信托基金，其基金为设立在印度的三所学校里面600个孩子的教育和全面发展提供需要的资金。 <br /><br />
此外，Sashi还是一位优秀作家。荷塘月色娱乐传媒让他得以用开发出来的优秀影视故事挑战好莱坞影视一统天下的局面。他预见通过中国和印度的强强联手，定能共同打造出享誉全球的荷塘月色娱乐传媒。

									</cms:editable>
									</div>
									<!-- /Description -->
								</div>
								<!-- /Who i am -->

								<div class="box awards">
									<div class="awards">
										<div class="award">
											<div class="date">Game Producer</div>
											<cms:editable name='sashi_games_chinese' type='richtext'>
											<div class="body">
												<div class="award_title">Game Name</div>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
											</div>
											<div class="body">
												<div class="award_title">Game Name</div>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
											</div>
											</cms:editable>
											<div class="clear"></div>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<!-- /Left Side -->

							<!-- Right Side -->
							<div class="col-md-4 omega right_side">

								<!-- About Pictures -->
								<div class="box pictures">
									<div class="pictures_inner cycle-slideshow">
									    <img src="img/sashi.jpg" class="first" alt="img" />
									</div>
								</div>
								<!-- /About Pictures -->

								<!-- My Services -->
								<div class="box my_services">
									<div class="title">
										<div class="icon"><i class="fa fa-wrench"></i></div>
										<div class="text">Links</div>
										<div class="clear"></div>
									</div>
									<a href="https://www.linkedin.com/in/sashireddi" class="btn"><i class="fa fa-linkedin"></i> LinkedIn</a>
									<a href="https://www.facebook.com/sashi.reddi.14" class="btn"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="https://twitter.com/sashi_reddi" class="btn"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
								<!-- /My Services -->

								<span class="btn bio-link-rudy">Continue to Rudy Rupak</span>
								<!-- /Testimonials -->

							</div>
							<!-- /Right Side -->
						</div>

						<div class="rudy-bio">
						<!-- Left Side -->
						<div class="col-md-8 alpha left_side">
							<!-- Who i am -->
							<div class="box who_i_am">
								<div class="title">
									<div class="icon"><i class="fa fa-user"></i></div>
									<div class="text">合伙人：鲁迪 Rupak</div>
									<div class="clear"></div>
								</div>

								<!-- Description -->
								<div class="text">
									<cms:editable name='rudy_bio_top_chinese' type='richtext'>鲁迪Rupak，连续创业者，一个自学成才的程序员，在他17岁的时候就卖掉了自己的第一家桌面出版模板给Corel公司（CorelDraw中和WordPerfect制造商）。他放弃学医转而的追求他的电影梦想，最早了解电影生产经营是受益于为加拿大最大的电影发行公司工作。他学习从电影销售和收购，最终到现场电视制作。他负责他们制作的第一个电视连续剧“城市天使”的海外发行销售。<br /><br />
									为了寻求更大的挑战，鲁迪转战到Heroux星际集团制作（现为加拿大贝尔公司的一部分），鲁迪负责在欧洲和加拿大联合拍摄的融资工作，他负责管理集团的多媒体事业部，涉及16个欧洲-加拿大联合制作项目。在此期间，鲁迪为这些项目写出17个剧本。在 1995年鲁迪开创了自己的制作公司-千年多媒体公司，该公司生产了加拿大第一个纯工作室出产故事片《滑雪学院》，此故事片由哥伦比亚三星推广发布。鲁迪又拍摄了《她比我高太多》，并由米高梅家庭视频发布。 <br /><br />
发行《滑雪学院》时鲁迪年仅25岁。他被认为是加拿大最年轻的电影制作人。《滑雪学院》在1996年的美国市场成为销售速度最快的视频之一。加拿大当年最畅销视频第三名。鲁迪还帮助融资《最终目标》，奠定了约翰·卡萨尔，在福克斯系列24的导演生涯。 <br /><br />
除了拥有影视项目，千年多媒体公司积极参与了游戏和多媒体制作。鲁迪创造了视频游戏/互动漫画人物伦纳德·Nimoy和艾萨克·阿西莫夫，Primortals，他们是塞拉利昂在线和魁北克媒体的代表人物。 1995年，他成为魁北克地区一名高级顾问，指导其媒体和网络战略。他在魁北克完成的最后项目是一个结合太阳马戏团和Thrashin的游戏，其灵感来源于《滑雪学院》，这是第一个滑雪类型的视频游戏。千年多媒体被反向并购后在在纳斯达克股票交易所上市其股票代码为PINC。作为千年首席执行官的鲁迪带领公司最终进入软件服务的行业。鲁迪后来离开PINC成为美国服装第一个CTO。 <br /><br />
鲁迪作为一家马来西亚的掌机游戏开发商WEGOTGAME的顾问重新回到媒体行业。这促成他与Sashi Reddi在FxLabs的合作，开发世界上第一个医疗旅游的公司PlanetHospital，从而离开娱乐媒体一段时间。2015年，鲁迪看到了印度和中国电影合作的契机，与Sashi Reddi合作组建荷塘月色娱乐传媒，通过运用市场正在转移到中印两国的优势为两国同美国竞争世界媒体中心做出贡献。
</cms:editable>
								</div>
								<!-- /Description -->


							</div>
							<!-- /Who i am -->
							<!-- /What i do -->
							<div class="box awards">
								<div class="awards">
									<div class="award">
										<div class="date">Filmography</div>
										<cms:editable name='rudy_filmography_chinese' type='richtext'>
										<div class="body">
											<div class="award_title">Movie Name</div>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
										</div>
										<div class="body">
											<div class="award_title">Movie Name</div>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum sed elit vitae tristique. Aliquam erat volutpat. Nunc sit amet cursus libero. In fringilla egestas ornare. Vivamus enim tortor, ultricies nec lectus eget, interdum elementum elit. Ut laoreet neque sit amet velit auctor tempus. In ac lectus felis.
										</div>
									</cms:editable>
										<div class="clear"></div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<!-- /Left Side -->

						<!-- Right Side -->
						<div class="col-md-4 omega right_side">

							<!-- About Pictures -->
							<div class="box pictures">
								<div class="pictures_inner cycle-slideshow">
										<img src="img/rudy.png" class="first" alt="img" />
								</div>
							</div>
							<!-- /About Pictures -->

							<!-- My Services -->
							<div class="box my_services">
								<div class="title">
									<div class="icon"><i class="fa fa-wrench"></i></div>
									<div class="text">Links</div>
									<div class="clear"></div>
								</div>
								<a href="https://www.linkedin.com/in/rudyrupak" class="btn"><i class="fa fa-linkedin"></i> LinkedIn</a>
								<a href="https://www.facebook.com/RudyRupak" class="btn"><i class="fa fa-facebook"></i> Facebook</a>
								<a href="https://twitter.com/rudyrupak" class="btn"><i class="fa fa-twitter"></i> Twitter</a>
							</div>
							<!-- /My Services -->

							<span class="btn bio-link-rudy">Continue to Sashi Reddi</span>

						</div>
						<!-- /Right Side -->
					</div>

							<div class="clear"></div>
						</div>
						</div>
						<!-- /About Page -->

						<!-- Resume Page -->
						<div id="resume" class="col-md-12">
							<div class="english-content">
							<h1 class="title color"><span class="text">About</span></h1>

							<!-- Left Side -->
							<div class="col-md-12 alpha left_side">
<cms:editable name='about_page_buttons' type='richtext'><a href="#section1" class="btn">Creating Global Entertainment</a><a href="#section2" class="btn">What Lotus Pond Can offer its Chinese Partners</a><a href="#section3" class="btn">What Lotus Pond Seeks from its Chinese Partners</a><a href="#section4" class="btn">How We Both Benefit</a><a href="#section5" class="btn">Chinese Film Market Snapshot</a><a href="#section6" class="btn">Indian Entertainment Market Snapshot</a><a href="#section7" class="btn">Can there be International Demand for Projects Made In China and India?</a></cms:editable>
								<!-- Education -->
								<div class="education lists">
									<div class="items"><cms:editable name='about_page' type='richtext'>
										<div id="section1" class="item">
											<img src="img/lotus1.jpg" alt="Lotus Pond" class="responsive-img" />
											<div class="title">Creating Global Entertainment</div>
											<div class="text">
												While the export growth for both Chinese and Indian media is attributed to consumption by their respective diasporas, Lotus Pond’s objective is to harness the creative and business talent in both countries. Lotus Pond will create entertainment properties made in China and India that will excite a global audience and challenge Hollywood’s domination of world class entertainment. <br /><br />

For many years, China has exported martial arts movies that have found an audience amongst the non-Chinese. China is responsible for mainstream Hollywood stars such as Jet Li, Stephen Chow, and Jackie Chan.  These films have always been in the Chinese languages and featured Chinese themes (such as Crouch Tiger, Hidden Dragon, or KungFu Hustle).  India’s domestic hits haven’t surpassed China’s recent numbers, but India’s entertainment reaches far more countries. Its “Bollywood” song and dance films are equivalent to the martial arts films of China in terms of popularity, plus the overall volume of films help India reach close to China’s entertainment export revenue. <br /><br />

We seek development and production partners in China who shares our vision. Together will combine our strengths to create entertainment that goes beyond martial arts or Bollywood. We want China and India to break beyond their own domestic offerings and provide serious competition to the Hollywood entertainment industry.  China and India will tell stories that resonate with an international market.  Lotus Pond has the business knowledge, the technical ability, and the talent to make this vision into a reality. <br /><br />

<strong>Ultimately, the right partnership would involve a combination of financing from India and China plus licensing to one or two major markets and tax credits so that the remainder of the world becomes our profit center that we share equitably.</strong>
											</div>
										</div>
										<div class="item">
											<div id="section2" class="title">What Lotus Pond Can offer its Chinese Partners:</div>
											<div class="text">
												<img src="img/lotus3.jpg" alt="Lotus Pond" class="responsive-img left-img" />
												<strong>Developed Projects:</strong>	Lotus Pond has several projects in various stages of development that has strong international appeal, and has the capital to add bankable talent to these projects based on mutual interests by its potential partners. <br /><br />

<strong>Development Capital:</strong>	Lotus Pond will finance or co-finance development costs from optioning properties to screenplays to talent acquisitions. These include our properties being considered by our co-production partners as long as these projects have international appeal. <br /><br />

<strong>Co-financing with India:</strong>		If India is a potential location, we can offer studio services in exchange for Indian territorial rights.  We can also offer state of the art VFX, post-production, and animation. <br /><br />

<strong>International Licensing:</strong>		Rudy Rupak, partner of Lotus Pond has had over seven years of experience in obtaining studio financing, television financing, and international rights sales to help finance a production or generate profits for existing projects prior to production. Rudy also has knowledge and experience with tax credit financing in Canada, Europe, UK, and various US states. He will work on co-production financing on all properties that we agree to develop together. <br /><br />

<strong>Film Financing:</strong>		Sashi Reddi, partner of Lotus Pond has strong financing connections to provide debt financing/factoring against contracts from studios and television entities.  We will work with our partners to make sure our projects are not only a reality but also work to make sure that the projects are profitable.
											</div>
										</div>
										<div id="section3" class="item">
											<div class="title">What Lotus Pond Seeks from its Chinese Partners:</div>
											<div class="text">
												<strong>Projects in Development:</strong>	While Lotus Pond has several projects in development and we want our potential partners to feel the same enthusiasm as we do for the projects we have developed, we are open to exploring projects by our potential Chinese partners provided such properties have strong international appeal and not just regional appeal.  Projects made in China and India for the global market should be our shared mission. <br /><br />

<strong>Chinese Production Infrastructure:</strong>	If a project can be shot in China we would want our potential partner to guide us through the process, lead the talent development, and production.  These costs would be borne by our partner in China <br /><br />

<strong>China Production Costs:</strong>		We would expect our Chinese partners to have strong connectivity with the various Chinese broadcasters, streaming services and filmed media outlets who would be willing to license the cost of shooting in China so that there is little risk to our partners.
											</div>
										</div>
										<div id="section4" class="item">
											<div class="title">How We Both Benefit</div>
											<div class="text">
												By creating properties with international appeal whose production costs can be covered by China, India and the sales to a few territories, together we stand to make significant profits from global exploitation of such properties.											</div>
										</div>
										<div id="section5" class="item">
											<div class="title">Chinese Film Market Snapshot</div>
											<div class="text">
												In 2012, China became the second largest theatrical film market in the world after the USA. The Chinese market now accounts for just over 13% of global box office revenues. The film and television industries contribute an estimated 146 billion yuan to the Chinese GDP. <br /><br />

Box office receipts continue to grow at high rates. In 2014, total takings in 2014 were 4.8 times higher than in 2009. In the last twelve months, revenues expanded by 36 percent, reaching 29.6 billion yuan (US $4.8 billion). If inflation is accounted, real box office revenues were almost 4 times higher in 2014 than they were in 2009. <br /><br />

The total television audiences in China was over 1.277 billion in the year of 2013. In the past 10 years, Chinese TV viewers spent on average 130-170 minutes watching TV every day. Over 3000 television stations operate across 16 television and radio companies. <br /><br />

Combined television and radio revenues more than doubled between 2009 and 2014. Television industry revenues have increased 87% (inflation-adjusted) from 2009-2014 with an estimated 2.1 billion yuan in export receipts in 2014. Film and television industry exports were the equivalent to 0.15% of total national exports of services (2014). Of this, 90% was generated by the film industry, with the remaining 10% generated by the television industry.
											</div>
										</div>
										<div id="section6" class="item">
											<div class="title">Indian Entertainment Market Snapshot</div>
											<div class="text">
												India’s vibrant Media and Entertainment (M&E) industry provides attractive growth opportunities for global corporations. The country produces more than 600 television channels, 100 million pay-tv households, and 1,000 films annually. High volumes of consumption and economic liberalization have enticed many of the world’s media giants to the Indian market for more than two decades. In recent years, near double-digit annual growth and a fast-growing middle class has renewed the surge investments into the country by global companies. <br /><br />

The growth in popularity of digital media continues to surge. In 2014 the industry saw significant growth in digital advertising, 44.5% over 2013 figures. At the same time, traditional media continued to exhibit healthy growth rates, with the television sector continuing on its path of cable digitization. Advertising across media, buoyed up by general election spends and the emergence of e-commerce as a significant new category. Advertising revenues in 2014 grew 14.2% over 2013, to reach INR 414 billion ($623,020,734 USD) of which print (43%) and television (37%) captured the lion’s share. <br /><br />

The bulk of M&E industry revenues are generated by the filmed entertainment sector, followed by games, and music. In 2015, India’s film industry was valued at 138.2 billion Rupees ($2.1 Billion USD compared to the US box office total of 10.84 billion).  The industry is projected to grow by a staggering 64% by 2020.  India’s box office revenue weighed in at 111 billion Rupees (1,668,258,000 USD) in 2015.  Box office revenue is expected to climb 58% by 2020. India’s television industry was worth an estimated 6.93 billion U.S. dollars in 2013. <br /><br />

The Indian film industry has grown remarkably since the beginning of the twenty-first century.  New Indian diasporas in North America, the UK, Asian, and Arabic countries have led to the growth of exports at 30-50% annually. <br /><br />

For both countries, the growth in box office receipts and TV revenue is the result of a substantial surge in demand for film and TV entertainment. High population, strong economic growth, rising incomes, and a growing middle class drive growth in domestic entertainment sectors. Combined with the expansion of Indian and Chinese diasporas, film and entertainment revenues are projected to continue their trend of steady increase.
											</div>
										</div>
										<div id="section7" class="item">
											<div class="title">Can there be International Demand for Projects Made In China and India?</div>
											<div class="text">
												It all starts with “A Good Story, Well Told.”  If we can identify strong properties with international appeal then there is no reason that it cannot be made for the international market with Chinese and Indian talent as well as an international cast.  Take for example a television series such as Dao Mu Bi Ji.  While this story of  young archeologist Wu Xie who is sent abroad for his own safety from those who murdered his parents and becomes interested in historical relics that may lead him to the mystery of his parents murder.  While this series is hugely popular in China it is definitely a story with international appeal.  Imagine if it were also shot in English, and had some international actors in it, then Dao Mu Bi Ji could have been licensed to other countries outside of China making a popular and profitable show even more profitable and popular.  A portion of the show could have been shot in India to add production value.  Or imagine a western TV series such as BBC’s MERLIN which scores an 8/10 on Douban.com.  While the story may be British in character, imagine if your company could shoot such a project in China with an international cast but with Chinese production and special effects talent (but not necessarily on screen talent).  There is no conceivable reason such a series could not be shot in China and THEN sold to the BBC, SyFy Channel in the US and others.  China could still broadcast this series in China with “Made in China” pride and it could have still achieved the 8/10 score on Douban.com but the difference would be that instead of it being an imported television series it could be a formidable exported one from China. This is the kind of thinking we want to encourage in our potential partner.
											</div>
										</div>
										<img src="img/lotus2.jpg" alt="Lotus Pond" class="responsive-img" />
									</cms:editable>
									</div>
								</div>
								<!-- /Education -->

							</div>
							<!-- /Left Side -->

							<div class="clear"></div>
						</div>
						<div class="chinese-content">
							<h1 class="title color"><span class="text">About</span></h1>

							<!-- Left Side -->
							<div class="col-md-12 alpha left_side">
<cms:editable name='about_page_buttons_chinese' type='richtext'><a href="#section1" class="btn">创建享誉全球的娱乐媒体</a><a href="#section2" class="btn">荷塘月色娱乐传媒能为中国合作伙伴提供</a><a href="#section3" class="btn">荷塘月色娱乐传媒希望中国合作伙伴提供</a><a href="#section4" class="btn">如何共同获利</a><a href="#section5" class="btn">中国电影业概览</a><a href="#section6" class="btn">印度电影业概览</a><a href="#section7" class="btn">中印是否能做出国际水平的影视产品</a></cms:editable>
								<!-- Education -->
								<div class="education lists">
									<div class="items"><cms:editable name='about_page_chinese' type='richtext'>
										<div id="section1" class="item">
											<img src="img/lotus1.jpg" alt="Lotus Pond" class="responsive-img" />
											<div class="title">创建享誉全球的娱乐媒体</div>
											<div class="text">
												荷塘月色娱乐传媒将创造出具有国际竞争力的，产自中国和印度的顶级影视产品，在推向全世界的同时也挑战好莱坞对全球影视的影响力。 <br /><br />

我们寻求志同道合的中国影视制作伙伴。 <br /><br />

结合武打片和宝莱坞歌舞片的优势，中国和印度将两者充分融合，开发出引起国际市场共鸣的影片。荷塘月色娱乐传媒通过其商业知识，技术能力和人才，使这一设想变成现实。 <br /><br />

<strong>最终，正确的合作伙伴关系将包含印度和中国的资金加上一两个主要市场的发行和退税，
这样我们的利润来自世界上未售出的国家地区,我们双方共享此利润。</strong>
											</div>
										</div>
										<div class="item">
											<div id="section2" class="title">荷塘月色娱乐传媒能为中国合作伙伴提供</div>
											<div class="text">
												<img src="img/lotus3.jpg" alt="Lotus Pond" class="responsive-img left-img" />
												<strong>开发项目：</strong>	荷塘月色备有几个处于不同阶段的项目。这些项目具有极高的国际吸引力和吸金力。我们愿意与有潜力的中国伙伴共同开发并分享成果。 <br /><br />

<strong>投资资金：</strong> 荷塘月色可根据所选项目独资或合资，雇请优秀作家根据影视产品国际性的原则完成润色。荷塘月色也可以给已经开始制作合格影视产品的中国合伙人提供合作资金。 <br /><br />

<strong>分享印度制作资源：</strong>	鉴于印度本土具有强大的开发潜力。我们可以提供影视产品后期制作所需要的特效、剪接、动画等服务以获得该影视产品印度国内的发行权。 <br /><br />

<strong>国际授权：</strong>	荷塘月色合伙人鲁迪Rupak，具有七年以上演播室筹资，电视台融资和国际版权销售的营销经验，他能够在影视产品制作完成之前将所有发行步骤安排完善。鲁迪熟悉加拿大、欧洲及美国境内不同地区的税收信贷融资等方面的规定。他将负责处理所有合作项目的资本运作。 <br /><br />

<strong>电影融资：</strong> 荷塘月色合伙人撒西Reddi,有极强的融资能力，确保影视产品生产的连贯性。结合发行方面的优势，确保我们及合作伙伴共同获得优厚的利润。
											</div>
										</div>
										<div id="section3" class="item">
											<div class="title">荷塘月色娱乐传媒希望中国合作伙伴提供：</div>
											<div class="text">
												<strong>可供开发的项目：</strong>	荷塘月色希望中方合伙人同我们一样渴望开发国际性的影视产品，并且已经拥有一些可待开发的项目。中国和印度出产的影视作品具有国际竞争力是我们共同努力的目标。 <br /><br />

<strong>中方影视流程运作：</strong>	如果项目在中国拍摄，荷塘月色希望我们中方合作者指导我们了解，帮助完成生产发行的所有流程运作以及分享中国境内的发行权。 <br /><br />

<strong>中方资本运作：</strong>	荷塘月色期望中国的合作伙伴具有广播电视，新闻媒体，影视发行方面极强的沟通处理能力，以减少外方投资者的风险。 <br /><br />

<strong>中方制作发行：</strong>	我们希望中方分担投资成本，也分享全球发行利润。至关重要的是，中印合作双方要同步了解合作影视产品的制作发行销售信息。 <br /><br />
											</div>
										</div>
										<div id="section4" class="item">
											<div class="title">如何共同获利：</div>
											<div class="text">
												中印双方共同分担投资制作成本和发行销售，并分享影视产品全球发行的利润。											</div>
										</div>
										<div id="section5" class="item">
											<div class="title">中国电影业概览</div>
											<div class="text">
												In 2012, China became the second largest theatrical film market in the world after the USA. The Chinese market now accounts for just over 13% of global box office revenues. The film and television industries contribute an estimated 146 billion yuan to the Chinese GDP. <br /><br />

Box office receipts continue to grow at high rates. In 2014, total takings in 2014 were 4.8 times higher than in 2009. In the last twelve months, revenues expanded by 36 percent, reaching 29.6 billion yuan (US $4.8 billion). If inflation is accounted, real box office revenues were almost 4 times higher in 2014 than they were in 2009. <br /><br />

The total television audiences in China was over 1.277 billion in the year of 2013. In the past 10 years, Chinese TV viewers spent on average 130-170 minutes watching TV every day. Over 3000 television stations operate across 16 television and radio companies. <br /><br />

Combined television and radio revenues more than doubled between 2009 and 2014. Television industry revenues have increased 87% (inflation-adjusted) from 2009-2014 with an estimated 2.1 billion yuan in export receipts in 2014. Film and television industry exports were the equivalent to 0.15% of total national exports of services (2014). Of this, 90% was generated by the film industry, with the remaining 10% generated by the television industry.
											</div>
										</div>
										<div id="section6" class="item">
											<div class="title">印度电影业概览</div>
											<div class="text">
												India’s vibrant Media and Entertainment (M&E) industry provides attractive growth opportunities for global corporations. The country produces more than 600 television channels, 100 million pay-tv households, and 1,000 films annually. High volumes of consumption and economic liberalization have enticed many of the world’s media giants to the Indian market for more than two decades. In recent years, near double-digit annual growth and a fast-growing middle class has renewed the surge investments into the country by global companies. <br /><br />

The growth in popularity of digital media continues to surge. In 2014 the industry saw significant growth in digital advertising, 44.5% over 2013 figures. At the same time, traditional media continued to exhibit healthy growth rates, with the television sector continuing on its path of cable digitization. Advertising across media, buoyed up by general election spends and the emergence of e-commerce as a significant new category. Advertising revenues in 2014 grew 14.2% over 2013, to reach INR 414 billion ($623,020,734 USD) of which print (43%) and television (37%) captured the lion’s share. <br /><br />

The bulk of M&E industry revenues are generated by the filmed entertainment sector, followed by games, and music. In 2015, India’s film industry was valued at 138.2 billion Rupees ($2.1 Billion USD compared to the US box office total of 10.84 billion).  The industry is projected to grow by a staggering 64% by 2020.  India’s box office revenue weighed in at 111 billion Rupees (1,668,258,000 USD) in 2015.  Box office revenue is expected to climb 58% by 2020. India’s television industry was worth an estimated 6.93 billion U.S. dollars in 2013. <br /><br />

The Indian film industry has grown remarkably since the beginning of the twenty-first century.  New Indian diasporas in North America, the UK, Asian, and Arabic countries have led to the growth of exports at 30-50% annually. <br /><br />

For both countries, the growth in box office receipts and TV revenue is the result of a substantial surge in demand for film and TV entertainment. High population, strong economic growth, rising incomes, and a growing middle class drive growth in domestic entertainment sectors. Combined with the expansion of Indian and Chinese diasporas, film and entertainment revenues are projected to continue their trend of steady increase.
											</div>
										</div>
										<div id="section7" class="item">
											<div class="title">中印是否能做出国际水平的影视产品</div>
											<div class="text">
												It all starts with “A Good Story, Well Told.”  If we can identify strong properties with international appeal then there is no reason that it cannot be made for the international market with Chinese and Indian talent as well as an international cast.  Take for example a television series such as Dao Mu Bi Ji.  While this story of  young archeologist Wu Xie who is sent abroad for his own safety from those who murdered his parents and becomes interested in historical relics that may lead him to the mystery of his parents murder.  While this series is hugely popular in China it is definitely a story with international appeal.  Imagine if it were also shot in English, and had some international actors in it, then Dao Mu Bi Ji could have been licensed to other countries outside of China making a popular and profitable show even more profitable and popular.  A portion of the show could have been shot in India to add production value.  Or imagine a western TV series such as BBC’s MERLIN which scores an 8/10 on Douban.com.  While the story may be British in character, imagine if your company could shoot such a project in China with an international cast but with Chinese production and special effects talent (but not necessarily on screen talent).  There is no conceivable reason such a series could not be shot in China and THEN sold to the BBC, SyFy Channel in the US and others.  China could still broadcast this series in China with “Made in China” pride and it could have still achieved the 8/10 score on Douban.com but the difference would be that instead of it being an imported television series it could be a formidable exported one from China. This is the kind of thinking we want to encourage in our potential partner.
											</div>
										</div>
										<img src="img/lotus2.jpg" alt="Lotus Pond" class="responsive-img" />
										</cms:editable>
									</div>
								</div>
								<!-- /Education -->

							</div>
							<!-- /Left Side -->

							<div class="clear"></div>
						</div>
						</div>
						<!-- /Resume Page -->

						<!-- Portfolio Page -->
						<div id="portfolio" class="col-md-12">
							<div class="english-content">
							<h1 class="page_title title color"><span class="text">Portfolio</span></h1>

							<div class="row">
								<img src="img/the-company.jpg" alt="The Company" class="responsive-img" />
								<!-- Description --><!--
								<div class="page_info col-md-12">
									<cms:editable name='portfolio_page' type='richtext'>These are just some of the many television, film products, and online media projects that Lotus Pond has developed.  We are open to partnering on Chinese projects that have strong international potential without a focus on martial arts.</cms:editable>
								</div> -->
								<!-- /Description -->

								<!-- Portfolio Items Type Selector -->
								<!--<ul class="portfolio_selector col-md-12">
								    <li class="filter active btn" data-filter="*">All</li>
								    <li class="filter btn" data-filter=".webdesign">Web Design</li>
								    <li class="filter btn" data-filter=".webdevelopment">Web Development</li>
								    <li class="filter btn" data-filter=".logodesign">Logo Design</li>
								</ul>-->
								<!-- /Portfolio Items Type Selector -->

								<!-- Portfolio Items -->
								<div class="clear"></div>
							<!--	<div class="portfolio_grid 4cols col-md-12">
								    <div class="mix logodesign">
								    	<a href="#" class="quickview_portfolio_item" data-mfp-src="img/portfolio_1_r.jpg" data-title="The Company" data-description="The Company is a dark historical comedy about the British East India Company; an organisation with its own military that was profoundly corrupt and beyond reproach. The British East India Company helped build the British Empire’s finances while committing outrageous atrocities with complete impunity and the complicity of the British crown and parliament. Their goal was to dominate the world, especially India and China, for fun and profit... and they succeeded in horrific and twistedly hilarious ways.">
								    		<img src="img/portfolio_1.jpg" alt="img" />
								    		<div class="main">
								    			<div class="inner">
									    			<i class="fa fa-picture-o licon"></i>
									    			<i class="fa fa-search ricon"></i>
									    		</div>
								    		</div>
								    	</a>
								    </div>
								    <div class="mix logodesign">
								    	<a href="#" class="quickview_portfolio_item" data-mfp-src="img/portfolio_2_r.jpg" data-title="Life on Mars" data-description="Life on Mars is not science fiction, but science fact.  In less than a decade, 96 people will be sent on a one-way journey to colonise and live on Mars.  This television series production will explore WHAT IF scenarios.  Each week our cast is faced with a difficult and unbelievably challenging ordeal, from a virus that is spreading from the air vents, to mars-quakes, to in-fighting, supply ships crashing and rationing, more in-fighting, politics, and more. Our pilot begins with a murder.  Why would someone get murdered on Mars? What is the motivation?  How would the colonist find the killer and what would a trial outside of a justice system look like?  How would the colonist punish the guilty?  In addition to this story arch, Life on Mars will deal with other challenges posed by living on Mars. Life on Mars can be China and India’s Star Trek.">
								    		<img src="img/portfolio_2.jpg" alt="img" />
								    		<div class="main">
								    			<div class="inner">
									    			<i class="fa fa-video-camera licon"></i>
									    			<i class="fa fa-search ricon"></i>
									    		</div>
								    		</div>
								    	</a>
								    </div>
								    <div class="mix logodesign">
								    	<a href="#" class="quickview_portfolio_item" data-mfp-src="img/portfolio_2_r.jpg" data-title="Face Job" data-description="Every month, a bunch of white, washed-up actors and actresses visit China and India to work in office commercials, films, and television.  We follow the actors in  semi-documentary style (think The Office).  Face Job characters are loveable idiots with giant egos who believe the whole industry revolves around them.  Every week, we watch their bewilderment as they struggle to adapt themselves to Chinese and Indian film culture. We will watch them audition, take on various roles, practice their Bollywood dance skills, and get knocked down a peg when they act superior to others.">
								    		<img src="img/portfolio_3.jpg" alt="img" />
								    		<div class="main">
								    			<div class="inner">
									    			<i class="fa fa-video-camera licon"></i>
									    			<i class="fa fa-search ricon"></i>
									    		</div>
								    		</div>
								    	</a>
								    </div>
								    <div class="mix logodesign">
								    	<a href="#" class="quickview_portfolio_item" data-mfp-src="img/portfolio_4_r.jpg" data-title="Nonstop" data-description="There has never been a series or movie about the adventures of a pilot before.  We will follow the antics of a hard-drinking, hard-living party animal, the kind that Martin Scorsese would direct and Leo DiCaprio would play.   Our aviation hero is certifiably crazy, but we cannot stop looking at him, cheering him on, and wondering what he will do next.  He goes from country to country, acting arrogant, charming and bedding women like  James Bond, and committing petty crimes... all while trying to climb up the corporate ladder to become CEO. Our “hero” is a power hungry, social climbing, pathologically criminal fly-boy, but we love him anyway. <br /><br />These are just some of the many television, film products, and online media projects that Lotus Pond has developed.  We are open to partnering on Chinese projects that have strong international potential without a focus on martial arts.">
								    		<img src="img/portfolio_4.jpg" alt="img" />
								    		<div class="main">
								    			<div class="inner">
									    			<i class="fa fa-picture-o licon"></i>
									    			<i class="fa fa-search ricon"></i>
									    		</div>
								    		</div>
								    	</a>
								    </div>
								</div>
								<!-- /Portfolio Items -->
							</div>

							<div id="portfolio_popup" class="zoom-anim-dialog mfp-hide"></div>
							<div class="clear"></div>
						</div>
						<div class="chinese-content">
							<h1 class="page_title title color"><span class="text">Portfolio</span></h1>

							<div class="row">
								<img src="img/the-company.jpg" alt="The Company" class="responsive-img" />
								<!-- Description --><!--
								<div class="page_info col-md-12">
									<cms:editable name='portfolio_page' type='richtext'>These are just some of the many television, film products, and online media projects that Lotus Pond has developed.  We are open to partnering on Chinese projects that have strong international potential without a focus on martial arts.</cms:editable>
								</div>
								<!-- /Description -->

								<!-- Portfolio Items Type Selector -->
								<!--<ul class="portfolio_selector col-md-12">
								    <li class="filter active btn" data-filter="*">All</li>
								    <li class="filter btn" data-filter=".webdesign">Web Design</li>
								    <li class="filter btn" data-filter=".webdevelopment">Web Development</li>
								    <li class="filter btn" data-filter=".logodesign">Logo Design</li>
								</ul>-->
								<!-- /Portfolio Items Type Selector -->

								<!-- Portfolio Items -->
								<div class="clear"></div>
								<!--<div class="portfolio_grid 4cols col-md-12">
								    <div class="mix webdesign">
								    	<a href="#" class="quickview_portfolio_item" data-mfp-src="img/portfolio_1_r.jpg" data-title="The Company" data-description="The Company is a dark historical comedy about the British East India Company; an organisation with its own military that was profoundly corrupt and beyond reproach. The British East India Company helped build the British Empire’s finances while committing outrageous atrocities with complete impunity and the complicity of the British crown and parliament. Their goal was to dominate the world, especially India and China, for fun and profit... and they succeeded in horrific and twistedly hilarious ways.">
								    		<img src="img/portfolio_1.jpg" alt="img" />
								    		<div class="main">
								    			<div class="inner">
									    			<i class="fa fa-picture-o licon"></i>
									    			<i class="fa fa-search ricon"></i>
									    		</div>
								    		</div>
								    	</a>
								    </div>
								    <div class="mix webdesign">
								    	<a href="#" class="quickview_portfolio_item" data-mfp-src="img/portfolio_2_r.jpg" data-title="Life on Mars" data-description="Life on Mars is not science fiction, but science fact.  In less than a decade, 96 people will be sent on a one-way journey to colonise and live on Mars.  This television series production will explore WHAT IF scenarios.  Each week our cast is faced with a difficult and unbelievably challenging ordeal, from a virus that is spreading from the air vents, to mars-quakes, to in-fighting, supply ships crashing and rationing, more in-fighting, politics, and more. Our pilot begins with a murder.  Why would someone get murdered on Mars? What is the motivation?  How would the colonist find the killer and what would a trial outside of a justice system look like?  How would the colonist punish the guilty?  In addition to this story arch, Life on Mars will deal with other challenges posed by living on Mars. Life on Mars can be China and India’s Star Trek.">
								    		<img src="img/portfolio_2.jpg" alt="img" />
								    		<div class="main">
								    			<div class="inner">
									    			<i class="fa fa-video-camera licon"></i>
									    			<i class="fa fa-search ricon"></i>
									    		</div>
								    		</div>
								    	</a>
								    </div>
								    <div class="mix webdevelopment">
								    	<a href="#" class="quickview_portfolio_item" data-mfp-src="img/portfolio_2_r.jpg" data-title="Face Job" data-description="Every month, a bunch of white, washed-up actors and actresses visit China and India to work in office commercials, films, and television.  We follow the actors in  semi-documentary style (think The Office).  Face Job characters are loveable idiots with giant egos who believe the whole industry revolves around them.  Every week, we watch their bewilderment as they struggle to adapt themselves to Chinese and Indian film culture. We will watch them audition, take on various roles, practice their Bollywood dance skills, and get knocked down a peg when they act superior to others.">
								    		<img src="img/portfolio_3.jpg" alt="img" />
								    		<div class="main">
								    			<div class="inner">
									    			<i class="fa fa-video-camera licon"></i>
									    			<i class="fa fa-search ricon"></i>
									    		</div>
								    		</div>
								    	</a>
								    </div>
								    <div class="mix logodesign">
								    	<a href="#" class="quickview_portfolio_item" data-mfp-src="img/portfolio_4_r.jpg" data-title="Nonstop" data-description="There has never been a series or movie about the adventures of a pilot before.  We will follow the antics of a hard-drinking, hard-living party animal, the kind that Martin Scorsese would direct and Leo DiCaprio would play.   Our aviation hero is certifiably crazy, but we cannot stop looking at him, cheering him on, and wondering what he will do next.  He goes from country to country, acting arrogant, charming and bedding women like  James Bond, and committing petty crimes... all while trying to climb up the corporate ladder to become CEO. Our “hero” is a power hungry, social climbing, pathologically criminal fly-boy, but we love him anyway. <br /><br />These are just some of the many television, film products, and online media projects that Lotus Pond has developed.  We are open to partnering on Chinese projects that have strong international potential without a focus on martial arts.">
								    		<img src="img/portfolio_4.jpg" alt="img" />
								    		<div class="main">
								    			<div class="inner">
									    			<i class="fa fa-picture-o licon"></i>
									    			<i class="fa fa-search ricon"></i>
									    		</div>
								    		</div>
								    	</a>
								    </div>
								</div>
								<!-- /Portfolio Items -->
							</div>

							<div id="portfolio_popup" class="zoom-anim-dialog mfp-hide"></div>
							<div class="clear"></div>
						</div>
						</div>
						<!-- /Portfolio Page -->

						<!-- Blog Page -->
						<div id="blog" class="col-md-12">
							<div class="english-content">
							<h1 class="title color"><span class="text">Blog</span></h1>

							<!-- Blog Posts -->
							<div class="blog_posts left_side col-md-8 alpha">
								<div class="back_to_blog btn">Back to blog</div>


								<!-- Blog Post -->
								<cms:repeatable name='blog_post' >

									<div class="post_data">
										<div class="box_title title">
											<div class="icon"><i class="fa fa-picture-o"></i></div>
											<div class="text"><cms:editable type='nicedit' label='Title' name='blog_title'>Lorem ipsum dolor sit amet</cms:editable></div>
											<div class="clear"></div>
										</div>
										<div class="info">
											<div class="meta user">
												<i class="fa fa-user"></i><span><cms:editable type='nicedit' label='Authon' name='blog_user'>user</cms:editable></span>
											</div>
											<div class="meta date">
												<i class="fa fa-calendar"></i><span><cms:editable type='nicedit' label='Title' name='date'>2 hours ago</cms:editable></span>
											</div>
										</div>
										<div class="preview_body body">
											<cms:editable type='nicedit' label='Content' name='blog_content'>
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
											</cms:editable>
										</div>
										</div>
									<div class="clear"></div>
							</cms:repeatable>
						</div>
								<!-- /Blog Post -->
							<div class="clear"></div>
						</div>
						</div>
						<div class="chinese-content">
							<h1 class="title color"><span class="text">Blog</span></h1>

							<!-- Blog Posts -->
							<div class="blog_posts left_side col-md-8 alpha">
								<div class="back_to_blog btn">Back to blog</div>


								<!-- Blog Post -->
								<cms:editable name='blog_page_chinese' type='richtext'>
								<div class="post anim_element" data-animation="flipInX">
									<div class="media">
										<img src="img/blog_img5.jpg" alt="img" />
									</div>
									<div class="post_data">
										<div class="box_title title">
											<div class="icon"><i class="fa fa-picture-o"></i></div>
											<div class="text"><a href="#" class="read_more_btn">Lorem ipsum dolor sit amet</a></div>
											<div class="clear"></div>
										</div>
										<div class="info">
											<div class="meta user">
												<i class="fa fa-user"></i><span><a href="#">user</a></span>
											</div>
											<div class="meta date">
												<i class="fa fa-calendar"></i><span>2 hours ago</span>
											</div>
										</div>
										<div class="preview_body body">
											Lorem ipsum dolor sit amet, consectetur
											adipiscing elit. Praesent condimentum sed elit
											vitae tristique. Aliquam erat volutpat. Nunc sit
											amet cursus libero. In fringilla egestas ornare.
										</div>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</cms:editable>
								<!-- /Blog Post -->
							<div class="clear"></div>
						</div>
						</div>
						<!-- /Blog Page -->

						<!-- Contact Page -->
						<div id="contact" class="col-md-12">
							<div class="english-content">
							<h1 class="title color"><span class="text">Contact</span></h1>
							<cms:editable name='contact_page' type='richtext'>
							<!-- Description -->
							<p>
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit. Praesent condimentum sed elit
								vitae tristique. Aliquam erat volutpat. Nunc sit
								amet cursus libero. In fringilla egestas ornare.

							</p>
							<!-- /Description -->

							<img src="img/lotus4.jpg" alt="Lotus Pond" class="responsive-img" /></cms:editable>
							<!-- /Info -->

							<!-- Contact Form -->
							<div class="contact_form_outer">
								<h1 class="title color"><cms:editable name='email_me_title' type='text'><span class="text">Email Me</span></cms:editable></h1>
								<cms:editable name='email_me_text' type='richtext'><p>
									Lorem ipsum dolor sit amet, consectetur
									adipiscing elit. Praesent condimentum sed elit
									vitae tristique.
								</p></cms:editable>
								<div class="contact_form">
									<input type="text" value="" placeholder="Your Name" class="name" />
									<input type="email" value="" placeholder="Your Email" class="email" />
									<textarea class="message" placeholder="Your Message"></textarea>
									<input type="button" value="Send Message" class="btn send_message_btn" name="submit" />
									<span class="message"></span>
								</div>
							</div>
							<!-- /Contact Form -->

							<!-- Social Buttons -->
							<div class="contact_social_btns">
								<a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
								<a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
								<a href="#"><i class="fa fa-google-plus"></i><span>Google+</span></a>
								<a href="#"><i class="fa fa-youtube"></i><span>YouTube</span></a>
								<a href="#"><i class="fa fa-github"></i><span>Github</span></a>
								<a href="#"><i class="fa fa-dribbble"></i><span>Dribbble</span></a>
								<a href="#"><i class="fa fa-flickr"></i><span>Flickr</span></a>
								<a href="#"><i class="fa fa-tumblr"></i><span>Tumblr</span></a>
								<a href="#"><i class="fa fa-vk"></i><span>VK</span></a>
								<a href="#"><i class="fa fa-skype"></i><span>Skype</span></a>
								<a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
								<a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
							</div>
							<div class="app-logos-contact">
									<a href="#portfolio" data-id="4"><img src="img/renren.gif" alt="Renren" /></a>
									<a href="#portfolio" data-id="4"><img src="img/wechat.gif" alt="Wechat" /></a>
									<a href="#portfolio" data-id="4"><img src="img/douban.gif" alt="Douban" /></a>
									<a href="#portfolio" data-id="4"><img src="img/youku.gif" alt="Youku" /></a>
							</div>
							<!-- /Social Buttons -->

						</div>
						<!-- /Contact Page -->
						<div class="chinese-content">
							<h1 class="title color"><span class="text">Contact</span></h1>
							<cms:editable name='contact_page_chinese' type='richtext'>
							<!-- Description -->
							<p>
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit. Praesent condimentum sed elit
								vitae tristique. Aliquam erat volutpat. Nunc sit
								amet cursus libero. In fringilla egestas ornare.
							</p>
							<!-- /Description -->

							<!-- Google Map -->
							<img src="img/lotus4.jpg" alt="Lotus Pond" class="responsive-img" /></cms:editable>
							<!-- /Google Map -->

							<!-- Contact Form -->
							<div class="contact_form_outer">
								<h1 class="title color"><cms:editable name='email_me_title_chinese' type='text'><span class="text">Email Me</span></cms:editable></h1>
								<cms:editable name='email_me_text_chinese' type='richtext'><p>
									Lorem ipsum dolor sit amet, consectetur
									adipiscing elit. Praesent condimentum sed elit
									vitae tristique.
								</p></cms:editable>
								<div class="contact_form">
									<input type="text" value="" placeholder="Your Name" class="name" />
									<input type="email" value="" placeholder="Your Email" class="email" />
									<textarea class="message" placeholder="Your Message"></textarea>
									<input type="button" value="Send Message" class="btn send_message_btn" name="submit" />
									<span class="message"></span>
								</div>
							</div>
							<!-- /Contact Form -->

							<!-- Social Buttons -->
							<div class="contact_social_btns">
								<a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
								<a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
								<a href="#"><i class="fa fa-google-plus"></i><span>Google+</span></a>
								<a href="#"><i class="fa fa-youtube"></i><span>YouTube</span></a>
								<a href="#"><i class="fa fa-github"></i><span>Github</span></a>
								<a href="#"><i class="fa fa-dribbble"></i><span>Dribbble</span></a>
								<a href="#"><i class="fa fa-flickr"></i><span>Flickr</span></a>
								<a href="#"><i class="fa fa-tumblr"></i><span>Tumblr</span></a>
								<a href="#"><i class="fa fa-vk"></i><span>VK</span></a>
								<a href="#"><i class="fa fa-skype"></i><span>Skype</span></a>
								<a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
								<a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
							</div>
							<div class="app-logos-contact">
									<a href="#portfolio" data-id="4"><img src="img/renren.gif" alt="Renren" /></a>
									<a href="#portfolio" data-id="4"><img src="img/wechat.gif" alt="Wechat" /></a>
									<a href="#portfolio" data-id="4"><img src="img/douban.gif" alt="Douban" /></a>
									<a href="#portfolio" data-id="4"><img src="img/youku.gif" alt="Youku" /></a>
							</div>
							<!-- /Social Buttons -->

						</div>
						<!-- /Contact Page -->
						</div>

						<input type="hidden" value="" id="hdn_page_id" />

					</div>
					<div class="clear"></div>
				</div>
				<!-- /Main Content -->

				<!-- Social Buttons -->
				<div class="social_icons col-md-1">
					<div class="row">
						<ul>
							<li>
								<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li class="more_social_icons_li">
								<a href="#" class="plus more_social_icons_btn"><i class="fa fa-plus"></i></a>
								<ul class="more_social_icons">
									<li>
										<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
									</li>
									<li>
										<a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i></a>
									</li>
									<li>
										<a href="#" class="github"><i class="fa fa-youtube"></i></a>
									</li>
								</ul>
							</li>
						</ul>
						<ul class="app-logos">
							<li>
								<a href="#portfolio" data-id="4"><img src="img/renren.gif" alt="Renren" /></a>
							</li>
							<li>
								<a href="#portfolio" data-id="4"><img src="img/wechat.gif" alt="Wechat" /></a>
							</li>
							<li>
								<a href="#portfolio" data-id="4"><img src="img/douban.gif" alt="Douban" /></a>
							</li>
							<li>
								<a href="#portfolio" data-id="4"><img src="img/youku.gif" alt="Youku" /></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /Social Buttons -->

				<div class="clear"></div>

			</div>

			<div class="clear"></div>
		</div>

		<div class="clear"></div>
	</div>
	<!-- /Wrapper -->

	<!-- Footer -->
	<div class="footer col-md-12">
		<cms:editable name='footer_text' type='richtext'>2016 &copy; Lotus Pond</cms:editable>
	</div>
	<!-- /Footer -->

	<!-- Loading Overlay
	<div class="loading_overlay">
		<div><img class="loading" src="img/loading.gif" alt="img" /></div>
	</div>
	<!-- /Loading Overlay -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific_popup.js"></script>
    <script type="text/javascript" src="js/tweetie.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.7"></script>
    <script type="text/javascript" src="js/maplace.js"></script>
    <script type="text/javascript" src="js/jquery.ba-hashchange.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
		<script src="js/jquery.vide.min.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
		<script type="text/javascript">
		$( document ).ready(function() {
		    $(".rudy-bio").hide();
				$('.bio-link-rudy').click(function(){
					$(".sashi-bio").hide();
					$(".rudy-bio").show();
				});
				$('.bio-link-sashi').click(function(){
					$(".rudy-bio").hide();
					$(".sashi-bio").show();
				});
				$('.chinese-content').hide();
				$(".language-link-chinese").click(function(e){
					e.preventDefault();
					$('.english-content').fadeOut(1500);
					$('.chinese-content').delay(1500).fadeIn(1500);
				});
				$(".language-link-english").click(function(e){
					e.preventDefault();
					$('.chinese-content').fadeOut(1500);
					$('.english-content').delay(1500).fadeIn(1500);
				});
		});
		</script>
</body>
</html>
<?php COUCH::invoke(); ?>
