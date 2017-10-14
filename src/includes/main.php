<?php
/**
* simpleEditor
* ================================================
* Web: liuxhui.cn
* ================================================
* Author: liuhui
* Date: 2017-10-13
*/
?>
	<div id="ubb">
		<img src="img/fontsize.gif" title="字体大小" alt="字体大小" />
		<img src="img/space.gif" title="线条" alt="线条" />
		<img src="img/bold.gif" title="粗体" />
		<img src="img/italic.gif" title="斜体" />
		<img src="img/underline.gif" title="下划线" />
		<img src="img/strikethrough.gif" title="删除线" />
		<img src="img/space.gif" />
		<img src="img/color.gif" title="颜色" />
		<img src="img/url.gif" title="超链接" />
		<img src="img/email.gif" title="邮件" />
		<img src="img/image.gif" title="图片" />
		<img src="img/swf.gif" title="flash" />
		<img src="img/movie.gif" title="影片" />
		<img src="img/space.gif" />
		<img src="img/left.gif" title="左区域" />
		<img src="img/center.gif" title="中区域" />
		<img src="img/right.gif" title="右区域" />
		<img src="img/space.gif" />
		<img src="img/increase.gif" title="扩大输入区" />
		<img src="img/decrease.gif" title="缩小输入区" />
		<img src="img/help.gif" />
	</div>
	<div id="font">
		<strong>12px</strong>
		<strong>14px</strong>
		<strong>16px</strong>
		<strong>18px</strong>
		<strong>20px</strong>
		<strong>22px</strong>
		<strong>24px</strong>
		<strong class="input-font" id="input-font">输入</strong>
	</div>
	<div id="color">
		<strong title="黑色" style="background:#000" data-color="#000"></strong>
		<strong title="褐色" style="background:#930" data-color="#930"></strong>
		<strong title="橄榄树" style="background:#330" data-color="#330"></strong>
		<strong title="深绿" style="background:#030" data-color="#030"></strong>
		<strong title="深青" style="background:#036" data-color="#036"></strong>
		<strong title="深蓝" style="background:#000080" data-color="#000080"></strong>
		<strong title="靓蓝" style="background:#339" data-color="#339"></strong>
		<strong title="灰色-80%" style="background:#333" data-color="#333"></strong>
		<strong title="深红" style="background:#800000" data-color="#800000"></strong>
		<strong title="橙红" style="background:#f60" data-color="#f60"></strong>
		<strong title="深黄" style="background:#808000" data-color="#000"></strong>
		<strong title="深绿" style="background:#008000" data-color="#808000"></strong>
		<strong title="绿色" style="background:#008080" data-color="#008080"></strong>
		<strong title="蓝色" style="background:#00f" data-color="#00f"></strong>
		<strong title="蓝灰" style="background:#669" data-color="#669"></strong>
		<strong title="灰色-50%" style="background:#808080" data-color="#808080"></strong>
		<strong title="红色" style="background:#f00" data-color="#f00"></strong>
		<strong title="浅橙" style="background:#f90" data-color="#f90"></strong>
		<strong title="酸橙" style="background:#9c0" data-color="#9c0"></strong>
		<strong title="海绿" style="background:#396" data-color="#396"></strong>
		<strong title="水绿色" style="background:#3cc" data-color="#3cc"></strong>
		<strong title="浅蓝" style="background:#36f" data-color="#36f"></strong>
		<strong title="紫罗兰" style="background:#800080" data-color="#800080"></strong>
		<strong title="灰色-40%" style="background:#999" data-color="#999"></strong>
		<strong title="粉红" style="background:#f0f" data-color="#f0f"></strong>
		<strong title="金色" style="background:#fc0" data-color="#fc0"></strong>
		<strong title="黄色" style="background:#ff0" data-color="#ff0"></strong>
		<strong title="鲜绿" style="background:#0f0" data-color="#0f0"></strong>
		<strong title="青绿" style="background:#0ff" data-color="#0ff"></strong>
		<strong title="天蓝" style="background:#0cf" data-color="#0cf"></strong>
		<strong title="梅红" style="background:#936" data-color="#936"></strong>
		<strong title="灰度-20%" style="background:#c0c0c0" data-color="#c0c0c0"></strong>
		<strong title="玫瑰红" style="background:#f90" data-color="#f90"></strong>
		<strong title="茶色" style="background:#fc9" data-color="#fc9"></strong>
		<strong title="浅黄" style="background:#ff9" data-color="#ff9"></strong>
		<strong title="浅绿" style="background:#cfc" data-color="#cfc"></strong>
		<strong title="浅青绿" style="background:#cff" data-color="#cff"></strong>
		<strong title="浅蓝" style="background:#9cf" data-color="#9cf"></strong>
		<strong title="淡紫" style="background:#c9f" data-color="#c9f"></strong>
		<strong title="白色" style="background:#fff" data-color="#fff"></strong>
		<strong class="input-color" id="input-color">输入</strong>
	</div>
	<div id="pic">
		<?php
			foreach(range(1,48) as $i){
				echo '<img src="./pic/'.$i.'.gif" class="pic"/>';
			};
		?>
	</div>
