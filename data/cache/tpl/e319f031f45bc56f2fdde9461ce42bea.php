<?php exit;?>001551854627d8e09fff684d57b63aef651e033f07ecs:9200:"a:2:{s:8:"template";s:9136:"﻿
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
	<ul class="am-slides">
		<?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"mobileSlider", "order"=>"giveOrder asc"));  if(is_array($listList)) foreach($listList as $list){ ?>
		<li>
			<a href="<?php echo $list["link"];?>" target="_blank" title="<?php echo $list["description"];?>">
				<img src="<?php echo $list["img"];?>" class="am-img-responsive" alt="<?php echo $list["description"];?>"/>
			</a>
		</li>
		<?php } ?>
	</ul>
</div>

<section class="theory am-padding-sm">
	<h3><span class="leftBrackets">[</span><span class="core">华章理念</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>

	<p>上海华章MBA考前辅导机构，以“全程个性化辅导、专业教务管理、把握联考信息、精选全国导师、联考高通过率”等优势而闻名于联考培训领域。</br>华章秉承“不仅通过联考，更要受益终身”的办学理念，圆您名校MBA之梦，成就辉煌人生！</p>

	<img src="/assets/img/4.png" class="am-img-responsive am-center am-margin-vertical-sm" alt="" />

	<ul class="am-avg-sm-3">
		<li><a href="/list-mba.html"><span>MBA</span><span> > MORE < </span></a></li>
		<li><a href="/list-emba.html"><span>EMBA</span><span> > MORE < </span></a></li>
		<li><a href="/list-mpa.html"><span>MPA</span><span> > MORE < </span></a></li>
		<li><a href="/list-mpacc.html" class="am-margin-bottom-0"><span>MPAcc</span><span> > MORE < </span></a></li>
		<li><a href="/list-mem.html" class="am-margin-bottom-0"><span>MEM</span><span> > MORE < </span></a></li>
		<li><a href="/page-mianShiKeCheng.html" class="am-margin-bottom-0"><span class="fontSm">提前面试</span><span> > MORE < </span></a></li>
	</ul>
</section>

<section class="lecture am-padding-horizontal-sm">
	<a href="/list-shiTingKeKeCheng.html" class="morePlus">more</a>
	<h3><span class="leftBrackets">[</span><span class="core">试听课</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>
	<div class="layerBox targetLayer">
		<?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "expand_id"=>8, "order"=>"time desc" , "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
		<article class="layer">
			<a href="<?php echo $list["aurl"];?>">
				<div class="calender">
					<span><?php echo $list["week"];?></span><span><?php echo date('d',$list["begTime"]);?></span>
				</div>
				<div class="classContent">
					<p class="am-text-truncate"><?php echo $list["subject"];?>课程</p>
					<p class="am-text-truncate"><?php echo $list["subject"];?>导师-<?php echo $list["Instructor"];?>授课<?php echo $list["class"];?></p>
					<span>免费试听</span>
				</div>

				<p class="targetHiddenTime"><span class="year"><?php echo date('Y',$list["time"]);?></span><span class="month"><?php echo date('m',$list["time"]);?></span><span class="day"><?php echo date('d',$list["time"]);?></span></p>

			</a>

		</article>
		<?php } ?>

	</div>
</section>

<section class="teacher am-padding-sm">

	<a href="/list-huazhangdaoshi.html" class="morePlus">more</a>

	<h3><span class="leftBrackets">[</span><span class="core">导师介绍</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>

	<div data-am-widget="slider" class="am-slider am-slider-default" data-am-flexslider="{itemWidth:100, itemMargin: 5, minItems:3, maxItems:3, slideshow: true,animationLoop: true, slideshow: true}" >
		<ul class="am-slides">
			<?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>7, "expand_id"=>7, "order"=>"time asc" , "limit"=>12));  if(is_array($listList)) foreach($listList as $list){ ?>
			<li>
				<a href="<?php echo $list["aurl"];?>">
					<img src="<?php echo $list["image"];?>" />
					<span><?php echo $list["title"];?></span>
				</a>
			</li>
			<?php } ?>

		</ul>
	</div>
</section>

<section class="news am-padding-horizontal-sm">
	<h3><span class="leftBrackets">[</span><span class="core">最新动态</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>
	<ul class="am-avg-sm-2">
		<li>
			<div class="innerBox">
				<a href="/list-consultation.html">
					<p>宣讲会/教育展</p>
					<img src="/assets/img/22.png" alt="常见问题" />
				</a>
			</div>
		</li>

		<li>
			<div class="innerBox">
				<a href="/list-faq.html">
					<p>常见问题</p>
					<img src="/assets/img/23.png" alt="常见问题" />
				</a>
			</div>
		</li>

		<li>
			<div class="innerBox">
				<a href="/list-registerAndInterview.html">
					<p>报考·面试</p>
					<img src="/assets/img/24.png" alt="报考·面试" />
				</a>
			</div>
		</li>

		<li>
			<div class="innerBox">
				<a href="/list-policy.html">
					<p>政策动态</p>
					<img src="/assets/img/25.png" alt="政策动态" />
				</a>
			</div>
		</li>

		<li>
			<div class="innerBox">
				<a href="/list-yuanXiaoXinXi.html">
					<p>合作院校</p>
					<img src="/assets/img/26.png" alt="合作院校" />
				</a>

			</div>
		</li>

		<li>
			<div class="innerBox">
				<a href="/list-articles.html">
					<p>原创文章</p>
					<img src="/assets/img/27.png" alt="原创文章" />
				</a>

			</div>
		</li>
	</ul>
</section>

<section class="class am-padding-sm">
	<h3><span class="leftBrackets">[</span><span class="core">课程介绍</span><span class="rightBrackets">]</span><span class="borderBottom"></span></h3>

	<div class="am-tabs am-margin-top-lg" data-am-tabs>
		<ul class="am-tabs-nav am-nav am-nav-tabs am-avg-sm-3">
			<li class="am-active"><a href="#tab1">笔试班</a></li>
			<li><a href="#tab2">面试班</a></li>
			<li><a href="#tab3">订制班</a></li>
		</ul>

		<div class="am-tabs-bd">
			<div class="am-tab-panel am-fade am-in am-active" id="tab1">
				<ul class="am-avg-sm-2">
					<li>
						<article class="innerBox">
							<a href="/list-writtenTest.html">
								<div>
									<span>【导学阶段】</span>
								</div>
								<p>查看详情</p>
							</a>
						</article>
					</li>
					<li>
						<article class="innerBox">
							<a href="/page-jichu.html">
								<div>
									<span>【基础阶段】</span>
								</div>
								<p>查看详情</p>
							</a>
						</article>
					</li>
					<li>
						<article class="innerBox">
							<a href="/list-writtenTest.html">
								<div>
									<span>【系统阶段】</span>
								</div>
								<p>查看详情</p>
							</a>
						</article>
					</li>

					<li>
						<article class="innerBox">
							<a href="/list-writtenTest.html">
								<div>
									<span>【模考冲刺阶段】</span>
								</div>
								<p>查看详情</p>
							</a>
						</article>
					</li>

				</ul>
			</div>
			<div class="am-tab-panel am-fade" id="tab2">
				<ul class="am-avg-sm-2">
					<li>
						<article class="innerBox">
							<a href="/page-mianShiKeCheng.html">
								<div><span>【面试材料准备】</span></div>
								<p>查看详情</p>
							</a>
						</article>
					</li>
					<li>
						<article class="innerBox">
							<a href="/page-mianShiKeCheng.html">
								<div><span>【面试综合能力】</span></div>
								<p>查看详情</p>
							</a>
						</article>
					</li>
					<li>
						<article class="innerBox">
							<a href="/page-mianShiKeCheng.html">
								<div><span>【高校面试特色课程】</span></div>
								<p>查看详情</p>
							</a>
						</article>
					</li>

					<li>
						<article class="innerBox">
							<a href="/page-mianShiKeCheng.html">
								<div><span>【全真模拟演练】</span></div>
								<p>查看详情</p>
							</a>
						</article>
					</li>

				</ul>
			</div>
			<div class="am-tab-panel am-fade" id="tab3">
				<ul class="am-avg-sm-2">
					<li>
						<article class="innerBox">
							<a href="/list-writtenTest.html">
								<div><span>【笔试+面试全程班】</span></div>
								<p>查看详情</p>
							</a>
						</article>
					</li>
					<li>
						<article class="innerBox">
							<a href="http://www.hzmba.net/topic-dingzhi">
								<div><span>【30人小班】</span></div>
								<p>查看详情</p>
							</a>
						</article>
					</li>
					<li>
						<article class="innerBox">
							<a href="http://www.hzmba.net/topic-dingzhi">
								<div><span>【笔试私人定制班】</span></div>
								<p>查看详情</p>
							</a>
						</article>
					</li>

					<li>
						<article class="innerBox">
							<a href="http://www.hzmba.net/topic-dingzhi">
								<div><span>【面试私人定制班】</span></div>
								<p>查看详情</p>
							</a>
						</article>
					</li>

				</ul>
			</div>
		</div>
	</div>
</section>

  

<?php $__Template->display("themes/mobile/firmIntroBox"); ?>

<?php $__Template->display("themes/mobile/ending"); ?>

";s:12:"compile_time";i:1520318627;}";