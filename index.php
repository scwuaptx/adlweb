<?php
include_once("image.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
		<title>Advanced Defense Lab</title>
		<link href="adl.ico" rel="SHORTCUT ICON">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="animate.css">
		<link href='http://fonts.googleapis.com/css?family=Dosis:500' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="javascripts/main.js"></script>
</head>
<body>
	<div class="container animated fadeInUp">
		<div id="middle">
			<img id="mainimg" src="adl.png">
		</div>
		<div id="title">
					<h1>Advance Defense Lab</h1>
					<HR>
				<h3>先進防禦實驗室</h3>
		</div>
		<div id="enter">
			<button type="button" class="btn btn-lg btn-outline" onclick="Hide()">Enter</button>
		</div>
	</div>
<nav id="bar" class="navbar navbar-inverse" role="navigation">
	<div class="container">
	<div class="container-fluid">


		<div class="navbar-header">


		<img class="navbar-brand" id="PicofNavbar" src="adl.png">

			<a class="navbar-brand" id="name" href="#">Advance Defense Lab</a>
	</div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul id="menu" class="nav navbar-nav">



				<li><a onclick=showContent("#Home") href="#">Home</a></li>
				<li><a onclick=showContent("#About") href="#">About ADL</a><li>
				<li><a onclick=showContent("#Faculty") href="#">Faculty</a></li>
				<li><a onclick=showContent("#Publication") href="#">Publication</a></li>
				<li><a onclick=showContent("#Presentation") href="#">Presentation</a></li>
				<li><a onclick=showContent("#Alumni") href="#">Alumni</a></li>
				<li><a onclick=showContent("#Students") href="#">Students</a></li>
				<li><a href="http://adl.csie.ncu.edu.tw/album3/">Album</a></li>
				<li><a href="http://adl.csie.ncu.edu.tw/wiki/">Wiki</a></li>
				<li><a onclick=showContent("#LTG") href="#">Lab Tour Guide</a></li>


			</ul>
		
		</div>
	</div>
	</div>
</nav>
<div class="page" id="Home">
	<div class="container">
		<h2>Congratulations</h2>
		<p>
		ADL參加 <a href="http://security.cisanet.org.tw/news/">第五屆資安金盾獎</a> 「PyADL」（張凱翔、張 至、張 竟）勇奪第三名佳績！<br>
		ADL參加 <a href="http://security.cisanet.org.tw/news/">第五屆資安金盾獎</a> 「Kernel Panic!!!!!」（許齊顯、陳立函、左昌國）勇奪光芒畢露獎！ <br>
		ADL參加 <a href="http://security.cisanet.org.tw/news/">第五屆資安金盾獎</a> 「why so serious?」（王傳陞、陳介文、徐裕量）勇奪潛力無窮獎！<br>
		ADL參加 <a href="http://security.cisanet.org.tw/news/">九十七年度國科會</a> 自由軟體暨嵌入式系統計畫榮獲績優團隊獎！ <br>
		ADL參加 <a href="http://www.trend.org/fd/tabid/112/Default.aspx">趨勢科技騰雲駕霧比賽</a> 「★男神★★加菲★」（李家豪、李佩瑄、陳介文、游宗樺）勇奪決賽入圍獎！<br>
		ADL參加 <a href="http://security.cisanet.org.tw/news_detail.asp?id=21">第四屆資安金盾獎</a> 「Kernel Panic!!!!」（許齊顯、陳立函、左昌國）勇奪第三名佳績！ <br>
		ADL參加 <a href="http://security.cisanet.org.tw/news_detail.asp?id=21">第四屆資安金盾獎</a> 「why so serious?」（顏志豪、王傳陞、黃浩倫）勇奪潛力無窮獎！ <br>
		ADL參加 <a href="http://www.trend.org/fd/tabid/112/Default.aspx">趨勢科技騰雲駕霧比賽</a> 「Copy'n'Paste」〔洪健惟、張凱翔、徐培霖、蔡旻嶧〕勇奪第六名佳績！及特別獎！ <br>
		ADL參加 <a href="http://security.cisanet.org.tw/">第三屆資安金盾獎</a> 勇奪第三名佳績！恭喜 QQ！黃政憲、林佳潤、葉怡群。<br>
		ADL參加第二屆資安金盾獎 勇奪第四名佳績！恭喜Kernel Panic！張繼軒、陳立函、許齊顯。 	<br>
		</p>
		<h2>Research Areas</h2>
		<p>
		Research at ADL focuses on Networking and System Security. We try to solve the following problems from the point of view of Operatin Systems<br>
		e.g. Linux and Windows, or System Programs, e.g. compilers and libraries, or Network Protocols.<br>
		<ul>
		<li>Buffer Overflow Attacks, Return-into-libc Attacks, and Format String Attacks.</li>
		<li>Web Page Defacement</li>
		<li>Click Fraud</li>
		<li>SQL Injection and XSS</li>
		<li>Worms</li>
		<li>DoS/DDoS Attacks</li>
		<li>IP Spoofing</li>
		<li>TCP Session Hijacking</li>
		<li>DNS Attacks</li>
		<li>Malware (e.g. Rootkit, backdoors, spyware, ... and so on.)</li>
		<li>Attack Redirection</li>
		<li>OS Fingerprinting and Port Scanning.</li>
		<li>Wireless Network Security</li>
		<li>Cellular Phone Malware</li>
		<li>Botnet</li>
		<li>Virus</li>
		<li>... and so on.</li></ul>
		</p>
	</div>
</div>
<div class="page" id="About">
	<div class="container">
		<div class="col-md-12">
			<h1>About ADL</h1>
		</div>
		<div class="col-md-4 col-md-offset-2">
			<img src="http://adl.csie.ncu.edu.tw/adlab/graph/lab-poster.jpg">	
		</div>
		<div class="col-md-6">
				<h2>Founding Date</h2>
					<p>August 2005</p>
				<h2>Location</h2>
					<p>
						Room A303-1<br>
						Engineering Building 5<br>
						Computer Science and Information Engineering Department<br>
						National Central University, Taoyuan County, Taiwan, R.O.C.<br> </p>
				<h2>Phone Number</h2>
					<p>+886-3-4227151 ext 35321 </p>	
		</div>
	</div>
</div>
<div class="page" id="Faculty">
	<div class="container">
		<div class>
		<h1>Faculty</h1>
		</div>

		<div class="col-md-12 StuPic">
			<div class="col-md-4 col-md-offset-2">
				<img id="TeacherPic" src="Hsufh-head.jpg">
			</div>
			<div class="col-md-6">		
				<h3>Dr.<a href="http://www.csie.ncu.edu.tw/~hsufh/"> 許富皓 (Fu-Hau Hsu)</a></h3>
			</div>
		</div>
	</div>
</div>
<div id="Publication" class="page">
		<div class="container">
			<h1>Pubication</h1>
			<h3><font color="yellow">SCI</font> Journal</h3>
			<p><ul>
				<li><b>Fu-Hau Hsu</b>, Min-Hao Wu, Cheng-Hsing Yang, and Shiuh-Jeng Wang, ``Image reversibility in data embedding on the basis of blocking-predictions,'' Peer-to-Peer Networking and Applications, Accepted and to be published. </li>
				<li><b>Fu-Hau Hsu</b>, Min-Hao Wu, and Shiuh-Jeng Wang*,
				 ``<a href="http://link.springer.com/article/10.1007%2Fs11042-012-1047-7#">
					Reversible Data Hiding Using Side-match Predictions on Steganographic Images,</a>''
				 Multimedia Tools and Applications, Volume 67, Issue 3, pp 571-591, December 2013. </li>
				<li><b>Fu-Hau Hsu</b>, Min-Hao Wu, and Shiuh-Jeng Wang*, Chia-Ling Huang,
				 ``<a href="http://link.springer.com/article/10.1007%2Fs11227-013-0896-9">
				Reversibility of Image with balanced Fidelity and Capacity upon Pixels Differencing Expansion</a>,''
				<i>Journal of Supercomputing</i>, Volume 66, Issue 2, pp 812-828, November 2013 .
				<ul>
					<li>NSC 101-2221-E-008-028-MY2</li>
				</ul>
				<li>Li-Han Chen*, <b>Fu-Hau Hsu</b>, Yanling Hwang, Mu-Chun Su, Wei-Shinn Ku, and Chi-Hsuan Chang, 
				``<a href="http://www.sciencedirect.com/science/article/pii/S0045790612001309">
				ARMORY: An Automatic Security Testing Tool for Buffer Overflow Bug Detection</a>,''
				<i>Computers & Electrical Engineering</i>, Volume 39, Issue 7, Pages 2233–2242, October 2013.</li>
					<li><b>Fu-Hau Hsu</b>*, Min-Hao Wu, Chang-Kuo Tso, Chi-Hsien Hsu, Chieh-Wen Chen,
				  ``<a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6226454">Antivirus Software 
				  Shield against Antivirus Terminators</a>,'' <i>IEEE Transactions on Information Forensics and Security</i>, 
				  VOL. 7, NO.5, Pages 1439 - 1447, October 2012.
				  <ul>
	 			<li>IF:  1.895 [2012]
				  </li><li>NSC 100-2221-E-008-077-, NSC 100-2218-E-008-013-MY3, and NSC 101-2221-E-008-028-MY2
				  </li></ul>
				  </li><li>Jieh-Haur Chen*, Mu-Chun Su, Chang-Yi Chen, <b>Fu-Hau Hsu</b>, Chin-Chao Wu, 
				  ``<a href="http://www.sciencedirect.com/science/article/pii/S0926580511000380">
				  Application of Neural Networks for Detecting Erroneous Tax Reports from Construction
				  Companies </a>,'' <i>Automation in Construction</i>, Volume 20, Issue 7,
				  Pages 935-939, November 2011.
				  <ul>
				  <li>IF:  1.5 [2011]
				  </li></ul>
				  </li><li><b>Fu-Hau Hsu</b>*, Chang-Kuo Tso, Yi-Chun Yeh, Wei-Jen Wang, and Li-Han Chen,
				  `` <a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=5963164">BrowserGuard:  A
				  Behavior-based  Solution  to  Drive-by-Download Attacks</a>,''
				  <i>IEEE Journal on Selected Areas in Communications</i>, Volume 29, Issue:7, pages 1461 - 1468, 
				  August 2011. 
				  <ul>
				  <li>IF: 3.413 [2011]
				  </li><li>NSC 99-2220-E-008-001 and NSC 99-2219-E-008-001
				  </li></ul>
			</ul></p>
			<h2>Non-SCI Journal</h2>
			<h3><font color="yellow">EI</font> Journal</h3>
			<ul>
				<li>Chuan-Sheng Wang*, <b>Fu-Hau Hsu</b>, Shih-Jen Chen, Yan-Ling Hwang and Min-Hao Wu, 
				``<a href="http://www.scientific.net/AMM.479-480.916">Detecting Phishing Sites Using URLs Collected from Emails</a>,''
				<i>Applied Mechanics and Materials (Applied Science and Precision Engineering Innovation)</i>, Vols. 479-480, pp 916-922, 2014. 
				</li>
				<li>Li-Han Chen*, <b>Fu-Hau Hsu</b>, Shih-Jen Chen, Chia-Jun Lin and Yan-Ling Hwang, 
				``<a href="http://www.scientific.net/AMM.479-480.923">Serum System: An Automatic Curing System for Worms and Buffer Overflow-Based Botnets</a>,''
				<i>Applied Mechanics and Materials (Applied Science and Precision Engineering Innovation)</i>, Vols. 479-480, pp 923-927, 2014.
				</li>
				<li>Ruei-Min Jiang, Jia-Sian Jhang, <b>Fu-Hau Hsu</b>*, YanLing Hwang, Peiwen Huang, Yung-Hoh Sheu, 
				``<a href="http://www.scientific.net/AMM.284-287.3454">JokerBot - An Android-Based Botnet</a>,''
				<i>Applied Mechanics and Materials (Innovation for Applied Science and Technology)</i>, Vols. 284-287, pp 3454-3458, 2013. 
				</li>
				<li>Chien-Wei Hung, <b>Fu-Hau Hsu</b>*, Shih-Jen Chen, Yan-Ling Hwang, Chang-Kuo Tso, Li-Pin Hsu,
				``<a href="http://www.scientific.net/AMM.284-287.3385">Defend a System against Keyloggers with a        Privilege-limited Account</a>,'' 
				<i>Applied Mechanics and Materials (Innovation for Applied Science and Technology)</i>, Vols. 284-287, pp 3385-3389, 2013. 
				</li>
				<li>Chien-Hsing Chou*, Mu-Chun Su, Yu-Xiang Zhao, and <b>Fu-Hau Hsu</b>, 
				``<a href="http://www2.tku.edu.tw/~tkjse/14-2/07-EE9902.pdf">A Reinforcement-Learning Approach to Color Quantization</a>,''
				<i>Tamkang Journal of Science and Engineering</i>, Vol. 14, No. 2, pp. 141-150,  June, 2011.
				</li>
			</ul>
			<h3>Non-EI Journal</h3>
			<ul>
				<li>Mu-Chun Su, Shao-Jui Wang, Chen-Ko Huang, Pa-Chun Wang, and <b>Fu-Hau Hsu</b>,
				"<a href="http://www.fujipress.jp/finder/xslt.php?mode=present&inputfile=JACII001400050011.xml">A Signal-Representation-Based Parser to Extract Text-based Information from the Web</a>," 
				<i>Journal of Advanced Computational Intelligence and Intelligent Informatics, Special issue on Software Engineering for Web Intelligence</i>, Vol.14, No.5, pp. 531-539, July, 2010. 				</li>
				<li>Hung-Yi Wu, <b>Fu-Hau Hsu</b>*, Hong-Wei Chen, Yu-Liang Hsu, and Chia-Jun Lin,
				``<a href="http://www.serialspublications.com/contentnormal.asp?jid=439&amp;jtype=1">IP Spoofing Detector with High Precision</a>,'' 
				<i> International Journal of Computer Science and Information Engineering</i>,Volume 1, Number 1, Pages 71-81, June, 2010.
				</li>
			</ul>
			<h2>Domestic Journal</h2>
			<ul>
				<li>Chang-Kuo Tso, Shih-Jen Chen, <b>Fu-Hau Hsu</b>*, ''A Browser-side Solution to Drive-by-Download-Based Malicious Web Pages,'' 
				<i>Communications of the CCISA</i>, Vol. 15, No. 4, pp. 70-79, Oct., 2009. </li>
				<li>Chung-Li Lin, Li-Han Chen, Cheng-Hsien Huang, Chih-Wen Ou, <b>Fu-Hau Hsu</b>*, 
				``A Novel Method of Detecting Buffer Overflow Attacks,'' 
				<i>Communications of the CCISA</i>, Vol. 14, No. 2, pp. 99-111, April, 2008. 
			</ul>
			<h2>International Conference</h2>
			<ul>
				<li>Tien-Hao Tsai, Yu-Sheng Su, Shih-Jen Chen, Yan-Ling Hwang, 
				<b>Fu-Hau Hsu</b>*, and Min-Hao Wu,``A Network-based Solution to Kaminsky DNS Cache Poisoning Attacks,'' 
				<i>The Fifth International Conference on Evolving Internet (INTERNET 2013)</i>, Nice, France,July 21 - 26, 2013. 
				<font color="yellow">(Acceptance Ratio: 26%)</font> </li>
				<li><b>Fu-Hau Hsu</b>, Min-Hao Wu, and Shiuh-Jeng Wang*, ``Dual-watermarking by QR-code Applications in Image Processing,'' 
				<i>The 9th IEEE International Conference on Ubiquitous Intelligence and Computing</i> (UIC 2012), Fukuoka, Japan, Sep. 4 - 7, 2012.</li>
				<li>Chien-Wei Hung, <b>Fu-Hau Hsu</b>*, Shih-Jen Chen, Chang-Kuo Tso, Yan-Ling Hwang, Po-Ching Lin, andLi-Pin Hsu ''A QTE-based Solution to Keylogger Attacks,'' 
				<i>The Sixth International Conference on Emerging Security Information, Systems and Technologies</i> 
				(SECURWARE 2012), Rome, Italy, August 19 - 24, 2012. (<a href="http://www.csie.ncu.edu.tw/~hsufh/PUBLICATION/2012/QTE.ppt">ppt</a>)
				(<a href="http://www.csie.ncu.edu.tw/~hsufh/PUBLICATION/2012/QTE.pptx">pptx</a>)
				<font color="yellow">(Acceptance Ratio: 27%)</font>.</li>
				<li>Kai-Xiang Zhang, Chia-Jun Lin, Shih-Jen Chen, Yanling Hwang, Hao-Lun Huang, and <b>Fu-Hau Hsu</b>,
				``TransSQL: A Translation and Validation-based Solution for SQL-Injection Attacks,'' In 
				<i>Proceedings of the First International Conference on Robot, Vision and Signal Processing</i>, Kaohsiung, Taiwan, November 21-23, 2011.
				<b><font color="yellow">EI</font></b></li>
				<li>Min-Hao Wu, <b>Fu-Hau Hsu</b>, Cheng-Hsing Yang, and Shiuh-Jeng Wang, ``Reversible Watermarking Scheme with Visibility Using Randomize Distance,''
				In <i>Proceedings of the fifth International Conference on Genetic and Evolutionary Computing</i>,
				Kinmen, Taiwan, August 29 ~ August 30, 2011, Xiamen, China, August 31 ~ September 1, 2011. 
				<b><font color="yellow">EI</font></b></li>
				<li>Yanling Hwang, Peiwen Huang, Shih-Jen Chen, <b>Fu-Hau Hsu</b>, 
				``The Perceptions of Cooperative Learning in Computer-Assisted Language Learning Environmnets,'' 
				<i>The Global Chinese Conference on Computers in Education</i> (GCCCE), Hangzhou, China, May, 29-31, 2011. 
				<b><font color="yellow">EI</font></b></li>
				<li>Chen-Hsing Yang, <b>Fu-Hau Hsu</b>, Min-Hao Wu, and Shiuh-Jeng Wang,
				``<a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&amp;arnumber=5715520">Improving Histogram-based Reversible Data Hiding By Tictactoemidlet Predictions</a>,''
				In <i>Proceedings of the fourth International Conference on Genetic and Evolutionary Computing</i>,
				Dec. 13-15, 2010, Shenzhen, China. <b><font color="yellow">EI</font></b></li>
				<li>Wei-Jen Wang, Carlos Varela, <b>Fu-Hau Hsu</b>, and Cheng-Hsien Tang, 
				"<a href="http://wcl.cs.rpi.edu/papers/GPC10-1569275509.pdf">Actor Garbage Collection Using Vertex-Preserving Actor-to-Object Graph Transformations</a>",
				<i>Lecture Notes in Computer Science</i>,
				6104 Springer, 2010, ISBN 978-3-642-13066-3. <b><font color="yellow">EI</font></b></li>
				<li><b>Fu-Hau Hsu</b>, Fanglu Guo, and Tzi-cker Chiueh,`` 
				<a href="http://www.ecsl.cs.sunysb.edu/tr/TR206.pdf" target="_blank">Scalable Network-based Buffer Overflow Attack Detection</a>,``
				in <i>Proceedings of ACM/IEEE Symposium on Architectures for Networking and Communications Systems (ANCS 2006)</i>,
				San Jose, California, USA, December 4-5, 2006. 
				<a href="http://www.ecsl.cs.sunysb.edu/tr/ANCS2006_HSU.ppt" target="_blank">(ppt)</a>
				<font color="yellow">(Acceptance Ratio: 19.6% = 19/97)</font>. <b><font color="yellow">EI</font></b>
				</li>
				<li><b>Fu-Hau Hsu</b> and Tzi-cker Chiueh, 
				``<a href="http://www.ecsl.cs.sunysb.edu/tr/TR158.pdf" target="_blank">CTCP:A Transparent Centralized TCP/IP Architecturefor Network Security</a>,``
		 		in <i>Proceedings of Annual Computer Security Application Conference (ACSAC 2004)</i>, Tucson, Arizona, USA, Dec. 6-10, 2004. 
				<font color="yellow">(Acceptance Ratio: 26%=35/134)</font>. <b><font color="yellow">EI</font></b></li>
				<li><b>Fu-Hau Hsu</b> and Tzi-cker Chiueh,
				``<a href="http://www.ecsl.cs.sunysb.edu/tr/TR110.pdf" target="_blank">A Path Information Caching and Aggregation Approach to Traffic Source Identification</a>,`` 
				in <i>Proceedings of the 23rd IEEE International Conference on Distributed Computing Systems (ICDCS 2003)</i>, Providence, Rhode Island, USA, May 19-22, 2003.
				<font color="yellow">(Acceptance Ratio: 17.7% = 72/406)</font>. <b><font color="yellow">EI</font></b></li>
				<li>T.-C. Chiueh, K. Gopalan, A. Neogi, C. Li, S. Sharma, S.-M. Shan, J. Chen,W. Li, N. Joukov, J. Zhang, 
				<b>F.-H. Hsu</b>, F. Guo, and S.-I. Doong, ``Sago: A Network Resource Management System for Real-Time Content Distribution,''
				in <i>Proceedngs of International Conference on Parallel and Distributed Systems (ICPADS 2002)</i>,
				National Central University, Taiwan, ROC, Dec., 2002.</li>
				<li>Tzi-Cker Chiueh and <b>Fu-Hau Hsu</b>,``
				<a href="http://www.ecsl.cs.sunysb.edu/tr/TR96.pdf" target="_blank">RAD:A Compile-time Solution to Buffer Overflow Attacks,</a>`` 
				in <i>Proceedings of the 21st IEEE International Conference on Distributed Computing Systems (ICDCS 2001)</i>,
				 Phoenix, Arizona, USA, April 16-19, 2001. 
				<b><font color="yellow">Google Scholar Citation: 225</font></b></li>
			</ul>
			<h2>Domestic Conference</h2>
			<ul>
			<li>Syun-Cheng Ou, <b>Fu-Hau Hsu</b>, Shih-Jen Chen, Yu-Sheng Su, Min-Hao Wu, ``STEALTH: A Method of Hiding and Encrypting Files in NTFS,'' National Computer Symposium , 
			TaiChung, Taiwan, R.O.C., 13 ~ 14, Dec., 2013.</li>
			<li><b>許富皓</b>, 陳立函, 張嘉顯, 江瑞敏, 凌宗廷, 左昌國, 許齊顯, ``傀儡網佈建技術研究,'' 
			102年度屆國防科技學術研討會, 桃園, 14th, Nov., 2013.</li>
			<li>廖緯玲, 陳世仁, 蘇育生, 許富皓, 吳敏豪, 
			``Watch Your Money：A Solution to Protect Your Android from Sending Unknown SMS Messages,''
			Taiwan Academic Network Conference (TANET), Tai-Chung, Taiwan, 23rd ~ 25th Oct. 2013. </li>
			<li>Jhen-Li Wang, Shih-Jen Chen, Chia-Hao Lee, and <b>Fu-Hau Hsu</b>,``A Server-Side Solution for HTTP Cookie-Stealing-Based XSS Attacks,''
			In <i>proceedings of 2010 International Security Technology and Management Conference</i>, Taipei, Taiwan, September, 8, 2010.</li>
			<li>Chuan Sheng Wang, Shih-Jen Chen, and <b>Fu-Hau Hsu</b>, ``Phishing Detection from Spam Mails,''
			In <i>proceedings of 2010 International Security Technology and Management Conference</i>, Taipei,         Taiwan, September, 8, 2010.</li>
			<li>趙禧綠, 趙梨華, <b>許富皓</b>, 顏志豪, 蔡天浩,
			``Windows誘捕網情蒐之核心技術與回追技術軟體發展,''
			第18屆國防科技學術研討會, 桃園, 八德, 27th, Dec., 2009.</li>
			</ul>
			<h2>Technical Report</h2>
			<ul>
				<li><b>Fu-Hau Hsu</b>, ``<a href="http://www.ecsl.cs.sunysb.edu/tr/TR163.pdf" target="_blank">
			Sky-walker:An Integrated Solution for Network and Computer Security</a>,
			``Ph.D. Dissertation, SUNY at Stony Brook, Dec., 2004.</li>
			<li><b>Fu-Hau Hsu</b>, ``<a href="http://www.ecsl.cs.sunysb.edu/tr/TR87.ps" target="_blank">
			The         Principle, Attack Patterns, and Defense Methods of Buffer Overflow Attacks</a>,
			`` RPE report, SUNY at Stony              Brook, October, 2000.</li>
			</ul>
	</div>
</div>
<div id="Presentation" class="page">
	<div class="container">
		<h1>Presentation</h1>
	</div>
</div>
<div id="Alumni" class="page">
	<div class="container">
		<div class="col-md-12">
			<h1>Alumni</h1>
			<HR></HR>
			<h2>Master Student</h2>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<h3>Class of 2007</h3>
			<h4>Full-time</h4>
			<ul>
				<li>邱秉誠 (BingCheng Chiou)
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=945202019" target="_blank">Thesis:</a>
					<ul>
						<li>SCP: A System Call Protector against Buffer Overflow Attacks </li>
						<li>以保護系統呼叫為基礎防禦緩衝區溢位攻擊 </li>
					</ul></li>
					<li>趨勢科技</li>
				</ul></li>
				<li>林忠立 (ChungLi Lin)
				<ul>
					<li>
					<a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=945202061" target="_blank">Thesis:</a>
					<ul>
						<li>MP: A Memory Protector against Stack-Based Buffer Overflow Attacks </li>
						<li>記憶體保護者用來防禦堆疊型緩衝區溢位攻擊 </li>
					</ul></li>
					<li>聯詠科技</li>
					</ul></li>
				<li>吳宏毅 (HungI Wu)
				<ul>
					<li>
					<a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=945202047" target="_blank">Thesis:</a>
					<ul>
						<li>IP Spoofing Detector </li>
						<li>一精確度可至單一主機單一Port之IP Spoofing 偵測法</li>
					</ul></li>
				<li>建漢科技</li></ul>
				</li>
				<li>張源平 (YuanPing Chang)
				<ul>
					<li>
					<a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=945202080" target="_blank">Thesis:</a>
					<ul>
						<li>CFD: A TCP Splicing-based Solution to Click Fraud Attacks </li>
					<li>建構於系統核心之點擊造假攻擊防禦系統</li>
					</ul></li>
				<li>盛達電業</li>
				</ul></li>
			</ul>
			<h3>Class of 2008</h3>
			<h4>Full-time</h4>
			<ul>
				<li><a href="../~momo/" target="_blank">吳孟容 (MengJung Wu)</a>
				<ul>
					<li>
					<a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=955202016" target="_blank">Thesis:</a>
					<ul>
						<li>一個根植於作業系統核心之防止網頁竄改機制 </li>
						<li>WsP: A Website Protector Against Web Defacement Attacks</li>
					</ul></li>
					<li>中華電信研究所</li>
				</ul></li>
				<li><a href="../~jychen/" target="_blank">陳俊佑 (JyunYou Chen)</a>
				<ul>
				<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=955202076" target="_blank">Thesis:</a>
					<ul>
						<li>一個以TCP連線行為基礎來防禦後門程式的機制 </li>
						<li>A Novel Behavior-Based Solution to Backdoors </li>
					</ul>
				</li><li>趨勢科技</li>
				</ul></li>
				<li><a href="../~musou/" target="_blank">張繼軒 (ChiSyuan Chang)</a>
					<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=955202044" target="_blank">Thesis:</a>
						<ul>
							<li>自動偵測程式緩衝區溢位錯誤的測試輔助工具 </li>
							<li>ARMORY: An Auxiliary Testing Tool for Automatic Buffer Overflow Vulnerability Detection </li></ul>
					</li>
					<li>中華電信研究所</li>
				</ul></li>
				<li><a href="../~militan/" target="_blank">林佳潤 (ChiaJun Lin)</a>
					<ul>
						<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=955202094" target="_blank">Thesis:</a>
						<ul>
							<li>Infections Real-time Serum System: Automatic Worm Curing System</li>
							<li>即時血清系統: 具攻性防壁之自動化蠕蟲治癒系統</li>
						</ul></li>
					<li>中央大學資訊工程系博士班 </li>
					<li>Carnegie Mellon University</li>
				</ul></li>
				<li><a href="../~nfsnfs/" target="_blank">陳立函 (LiHan Chen)</a>
					<ul>
						<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=955202031" target="_blank">Thesis:</a>
						<ul>
							<li>網路惡意攻擊誘餌與自我保護之攻擊轉向系統</li>
							<li>Attack-Redirector: A Server Protection and Honeypot Bait System</li>
						</ul></li>
					<li>中央大學資訊工程系博士班</li>
					</ul></li>
				<li><a href="../~frankou/" target="_blank">歐智文 (ChihWen Ou)</a>
					<ul>
						<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=955202041" target="_blank">Thesis:</a>
						<ul>
							<li>針對遠端緩衝區溢位攻擊之自動化即時反擊系統</li>
							<li>ARCS: Automatic Real-Time Counterback System against Remote Buffer Overflow Attacks</li>
						</ul></li>
					<li>中央大學資訊工程系博士班</li>
					<li>中華電信研究所</li>
					</ul></li>
			</ul>
			<h3>Class of 2009</h3>
			<h4>Full-time</h4>
			<ul>
				<li><a href="../~lausai/" target="_blank">劉思奇 (SzuChi Liu)</a>
				<ul>
				<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=965202020" target="_blank">Thesis:</a>
					<ul>
					<li>A more accurate and sybil resistant reputation system for products</li>
					</ul>
				</li>
				<li>HTC</li>
				</ul></li>
		
				<li><a href="../~tscki/" target="_blank">王貞力 (JhenLi Wang)</a>
				<ul>
				<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=965202017" target="_blank">Thesis:</a>
					<ul>
						<li>A Server Solution for Cookie-Stealing-Based XSS Attacks </li>
						<li>一個伺服器端關於cookie竊取之XSS攻擊的防禦機制</li>
					</ul></li>
				<li>資訊工業策進會</li>
				<li>中華電信研究所</li>
				</ul></li>

				<li><a href="../~kyletso/" target="_blank">左昌國 (ChangKuo Tso)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=965202036" target="_blank">Thesis:</a>
					<ul>
						<li>一種在瀏覽器端偵測並阻擋網頁惡意程式的解決方案</li>
						<li>A Browser-side Solution to Drive-by-Download-Based Malicious Web Pages</li>
					</ul></li>
					<li>中央大學資訊工程系博士班</li>
					</ul></li>
	
				<li><a href="../~unary/" target="_blank">葉怡群 (YiChun Yeh)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=965202083" target="_blank">Thesis:</a>
					<ul>
						<li>在行動裝置上以攔截檔案處理函式機制防止病毒擴散</li>
						<li>Kernel-mode File Monitoring on Windows Mobile Device</li>
					</ul></li>
					<li>ASUS</li>
					</ul></li>
				
				<li><a href="../~ernieshu/" target="_blank">許齊顯  (ChiHsien Hsu)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=965202064" target="_blank">Thesis:</a>
					<ul>
						<li>Return Protector: A Protection Mechanism for Return-into-libc Attacks by Checking the Return Address</li>
					</ul></li>
					<li>中央大學資訊工程系博士班</li>
					</ul></li>
				</ul>

			<h3>Class of 2010</h3>
			<h4>Full-time</h4>
			<ul>
				<li><a href="../~razor/" target="_blank">黃浩倫 (HaoLun Huang)</a>
				<ul>
				<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=975202010" target="_blank">Thesis:</a>
					<ul>
					<li>TransSQL: A Translation and Validation-based Solution for SQL-Injection Attacks</li>
					</ul></li>
				<li>趨勢科技</li>
			</ul></li>
			
			<li><a href="../~skillsyen/" target="_blank">顏志豪 (ChihHao Yan)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=975202022" target="_blank">Thesis:</a>
					<ul>
						<li>A Spam Mail-based Solution for Botnet Detection and Network Bandwidth Protection</li>
					</ul></li>
				<li>HTC</li>
			</ul></li>

			<li><a href="../~peter/" target="_blank">蔡天浩 (Tienhao Tsai)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=975202001" target="_blank">Thesis:</a>
					<ul>
						<li>DNSPD: Entrap Botnets Through DNS Cache Poisoning Detection</li>
					</ul></li>
				<li>中華電信研究所</li>
				</ul></li>

			<li><a href="../~wangcs/" target="_blank">王傳陞 (ChuanSheng Wang)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=975202074" target="_blank">Thesis:</a>
					<ul>
						<li>Shark: Phishing Information Recycling from Spam Mails</li>
					</ul></li>
					<li>國立中央大學資訊工程學系博士班</li>
					<li>中華電信研究所</li>
				</ul></li>
			</ul>
		
			<h4>Part-time</h4>
			<ul>
				<li>林郁展
				<ul>
					<li>Thesis:
					<ul>
						<li>Block Active Shell Style Backdoors</li>
					</ul></li>
				</ul></li>
			</ul>

			<h3>Class of 2011</h3>
			<h4>Full-time</h4>
			<ul>
				<li><a href="../~plp456/" target="_blank">李佩瑄 (PeiHsun Lee)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=985202086" target="_blank">Thesis:</a>
					<ul>
						<li>MAC-YURI : My ACcount, YoUr ResponsIbility</li>
					</ul></li>
					<li>服役</li>
				</ul></li>
			
				<li><a href="../~winest/" target="_blank">洪健惟 (ChienWei Hung)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=985202089" target="_blank">Thesis:</a>
					<ul>
						<li>KKBB: Kernel Keylogger Bye-Bye</li>
					</ul></li>
					<li>趨勢科技</li>
				</ul></li>
				
				<li><a href="../~diolee/" target="_blank">李家豪 (ChiaHao LEE)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=985202092" target="_blank">Thesis:</a>
					<ul>
						<li>CIDP Treatment: An Innovative Mobile Botnet Covert Channel based on Caller IDs with P8 Treatment</li>
					</ul></li>
					<li>中華電信數據分公司</li>
				</ul></li>

				<li><a href="../~tubalpha/" target="_blank">林松輝 (SongHui Lin)</a>
					<ul>
						<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=985202065" target="_blank">Thesis:</a>
						<ul>
							<li>FFRTD: Beat Fast-Flux by Response Time Differences</li>
						</ul></li>
						<li>台灣積體電路製造公司</li>
					</ul></li>

				<li><a href="../~drop_qa/" target="_blank">陳介文 (ChiehWen Chen)</a>
					<ul>
						<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=985202072" target="_blank">Thesis:</a>
						<ul>
							<li>Antivirus Software Shield against Antivirus Terminators</li>
						</ul></li>
					<li>中華電信研究所</li>
				</ul></li>
			</ul>
			<h4>Part-time</h4>
			<ul>
				<li>廖世傑 (ShihChieh Liao)
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=985302030" target="_blank">Thesis:</a>
					<ul>
						<li>USB WORM KILLER: Cure USB Flash Worms Through a USB Flash Worm</li>
					</ul></li>
				<li>趨勢科技</li>
				</ul></li>
			</ul>

			<h3>Class of 2012</h3>	
			<h4>Full-time</h4>
			<ul>
				<li><a href="http://adl.csie.ncu.edu.tw/~shunming/website/" target="_blank">張逸文 (I-Wen Chang)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=995202068" target="_blank">Thesis:</a>
					<ul>
						<li>PrivacyGuard: A Kernel-based Solution to Enhance the User Privacy When Using Private Browsing</li>
					</ul></li>
				<li>中華電信研究所</li>
				</ul></li>

				<li><a href="../~husky" target="_blank">趙亞略 (YaLyue Jhao)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=995202073" target="_blank">Thesis:</a>
					<ul>
						<li>DEH : dynamic extensible two-way honeypot</li>
					</ul></li>
					<li>中山科學研究院</li>
				</ul></li>

				<li><a href="../~xue" target="_blank">薛宇翔 (YuHsiang Hsneh)</a>
					<ul>
						<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=995202093" target="_blank">Thesis:</a>
						<ul>
							<li>LETDoWN : A client-based solution to detect an evil twin access point</li>
						</ul></li>
					<li>威盛電子</li>
					</ul></li>
			</ul>
			
			<h3>Class of 2013</h3>
			<h4>Full-time</h4>
			<ul>
				<li><a href="http://adl.csie.ncu.edu.tw/~ohsc98/" target="_blank">歐巡丞 (SyunCheng Ou)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=100522073" target="_blank">Thesis:</a>
					<ul>
						<li>STEALTH: A Method of Hiding and Encrypting Files in NTFS</li>
					</ul></li>
				<li>鴻璟科技</li>
				</ul></li>
			
				<li><a href="http://adl.csie.ncu.edu.tw/~jhhe/" target="_blank">何儒軒 (JuHsuan He)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=100522060" target="_blank">Thesis:</a>
					<ul>
						<li>Windows AutoUpdate Service Guardian</li>
					</ul></li>
				<li>京晨科技</li>
				</ul></li>
		
				<li><a href="http://adl.csie.ncu.edu.tw/~awashharp/" target="_blank">曾毓傑 (YuJie Tseng)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=100522039" target="_blank">Thesis:</a>
					<ul>
						<li>Security.</li>
					</ul></li>
				<li>中華電信研究所</li>
				</ul></li>
		
				<li><a href="http://adl.csie.ncu.edu.tw/~light/" target="_blank">李佳恆 (ChiaHeng Li)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=100522078" target="_blank">Thesis:</a>
					<ul>
						<li>Hawkeye : Finding Spamming Accounts Hidden in Normal Mail Servers</li>
					</ul></li>
				<li>中華電信研究所</li>
				</ul></li>

				<li><a href="http://adl.csie.ncu.edu.tw/~kthac1218/" target="_blank">陳安琪 (AnChi Chen)</a>
				<ul>
					<li><a href="http://thesis.lib.ncu.edu.tw/ETD-db/ETD-search-c/view_etd?URN=100522068" target="_blank">Thesis:</a>
					<ul>
						<li>SMS Guardian: Protect a Smartphone against Incoming SMS Message Interception.</li>
					</ul></li>
					<li>鴻海科技</li>
					</ul></li>
				</ul>
			</ul>
			<h4>Part-time</h4>
			<ul>
				<li><a href="http://" target="_blank">廖緯玲</a>
				<ul>
					<li>Thesis:
					<ul>
						<li>  </li>
					</ul></li>
					<li>中華電信研究所 </li>
				</ul></li>
			</ul>

			</div>
	</div>
	</div>
	<div id="Students" class="page">
		<div class="container">
			<div class="col-md-12">
					<h1>Students</h1>
					<HR></HR>
					<h2>Ph.D.Student</h2>
					<br>
			</div>
			<div class="col-md-12 StuPic">
			<h3>Class of 2012</h3>
			<h4>Part-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('#');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu">黃政憲 (ChengHsien Huang)</b>
					<ul>
						<li>Automatic Virus Classifier </li>
						<li>Defense a System against Kernel-Level Rootkit</li>
					</ul></li>
				</ul>	
				</div>
			</div>
			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('kent@scu.edu.tw');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="../~kent/index.htm" target="_blank">徐裕量 (Yuliang Hsu)</a></b>
					<ul>
						<li>Reputation System/Recommendation System</li>
						<li>Click Fraud</li>
					</ul></li>
				</ul>
				</div>
			</div>
			<div class="col-md-12 StuPic">
			<h3>Class of 2013</h3>
			<h4>Full-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('nfsnfs@gmail.com');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="../~nfsnfs/" target="_blank">陳立函 (LiHan Chen)</a></b>
					<ul>
						<li>Attack Redirection </li>
						<li>Honeypot </li>
						<li>Honeypot Bait Design </li>
						<li>Android </li>
						<li>Multi-core Based Security Systems </li>
					</ul></li>
				</ul>
				</div>
			</div>
			<div class="col-md-12 StuPic">
			<h3>Class of 2014</h3>
			<h4>Full-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('cktso@csie.ncu.edu.tw');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="../~kyletso/" target="_blank">左昌國 (ChangKuo Tso)</a></b>
					<ul>
						<li>Web Security</li>
					</ul></li>
				</ul>
				</div>
			</div>
			
			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('985402017@cc.ncu.edu.tw ');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="../~ernieshu/" target="_blank">許齊顯 (ChiHsien Hsu)</a></b>
					<ul>
						<li>Symbian</li>
					</ul></li>
				</ul>
				</div>	
			</div>

			<div class="col-md-12 StuPic">
			<h3>Class of 2015</h3>
			<h4>Full-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('975202074@cc.ncu.edu.tw');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="../~wangcs/" target="_blank">王傳陞 (ChuanSheng Wang)</a></b>
						<ul>
							<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('995402015@cc.ncu.edu.tw ');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="../~mhwu/" target="_blank">吳敏豪 (MinHao Wu)</a></b>
					<ul>
						<li>Information Hiding</li>
					</ul></li>
				</ul>
				</div>
			</div>	
			
			<div class="col-md-12 StuPic">
			<h3>Class of 2017</h3>
			<h4>Full-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('solars@cl.ncu.edu.tw');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~solars/" target="_blank">鄭有為</a></b>
					<ul>
						<li> </li>
					</ul></li>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<h2>Master Student</h2>
				<h3>Class of 2009</h3>
				<h4>Part-time</h4>

				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('#');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu">蔡其宏</b>
					<ul>
						<li>DoS/DDoS Attacks</li>
					</ul></li>
				</ul>
				</div>
			</div>

			
			<div class="col-md-12 StuPic">
			<h3>Class of 2010</h3>
			<h4>Part-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('#');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu">盧郁中</b>
					<ul>
						<li>Internet Banking : Attack and Defense Based on the Use of Smart Card Transactions</li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
			<h3>Class of 2011</h3>
			<h4>Part-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('#');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu">陳漢平 (HanPing Chen)</b>
					<ul>
						<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('# ');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://" target="_blank">黃郁偉</a></b>
					<ul>
						<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>


			<div class="col-md-12 StuPic">
			<h3>Class of 2013</h3>
			<h4>Part-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('#');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://" target="_blank">胡睿麟</a></b>
					<ul>
						<li>Security.</li>
					</ul></li>
				</ul>
				</div>
			</div>


			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('# ');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://" target="_blank">張雅晴 (YaChing Chang)</a></b>
					<ul>
						<li>Security.</li>
					</ul></li>
				</ul>
				</div>
			</div>

			
			<div class="col-md-12 StuPic">
			<h3>Class of 2014</h3>
			<h4>Full-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('timlingtw@gmail.com');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~timling/" target="_blank">凌宗廷 (TzungTing Lin)</a></b>
					<ul>
						<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('101522065@cc.ncu.edu.tw');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~fred104" target="_blank">張嘉顯 (JiaSian Jhang)</a></b>
					<ul>
						<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>


			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('mike820324@gmail.com');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~mike820324/" target="_blank">江瑞敏 (RueiMin Jiang)</a></b>
					<ul>
						<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('# ');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~jeremy/" target="_blank">黃建瑋 (ChiehWei Huang)</a></b>
					<ul>
						<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('101522087@cc.ncu.edu.tw');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~h4353062/" target="_blank">鍾怡傑 (YiChieh Chung)</a></b>
					<ul>
						<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('# ');?>">
				</div>
				<div class="col-md-6">
				<ul>
				<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~inscy/" target="_blank">顏孟加 (MengJia Yan)</a></b>
					<ul>
						<li> </li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
			<h3>Class of 2015</h3>
			<h4>Full-time</h4>
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('102522038@cc.ncu.edu.tw ');?>">
				</div>
	
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~sohjiro0122/" target="_blank">廖克軒 (KerHsuan Liao)</a></b>
					<ul>
						<li>尚未決定</li>
					</ul></li>
				</ul>
				</div>
			</div>


			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('# ');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~linliang/personal_web/" target="_blank">林良軒 (LiangHsuan Lin)</a></b>
					<ul>
						<li></li>
					</ul></li>	
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('102522096"at"cc.ncu.edu.tw

');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://140.115.53.5/~wuhaocheng/wuhaochengwebsite/index.php?" target="_blank">吳昊澄 (HaoCheng Wu)</a></b>
					<ul>
						<li>待研究</li>
					</ul></li>
				</ul>
				</div>
			</div>


			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('enco31437@gmail.com');?>">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.tw/~irene/personal_info.html" target="_blank">羅婷 (Ting Luo)</a></b>
					<ul>
						<li>Security.</li>
					</ul></li>
				</ul>
				</div>
			</div>

			<div class="col-md-12 StuPic">
				<div class="col-md-4 col-md-offset-2">
					<img src="<?php echo get_gravatar('sntc06@gmail.com');?>;">
				</div>
				<div class="col-md-6">
				<ul>
					<li><b class="NameofStu"><a href="http://adl.csie.ncu.edu.tw/~sntc06" target="_blank">蔡維泰 (Weitai Cai)</a></b>
					<ul>
					<li>Security.</li>
					</ul></li>
				</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="LTG" class="page">
			<div class="container">
					<div class="col-md-12">
							<h1>Lab Tour Guide</h1>
					</div>
					<div class="col-md-8 col-md-offset-2">
						<iframe width="640" height="480" src="//www.youtube.com/embed/d4pj7iz7ak0" frameborder="0" allowfullscreen></iframe>	
					</div>
			</div>
	</div>

</div>
</body>
</html>
