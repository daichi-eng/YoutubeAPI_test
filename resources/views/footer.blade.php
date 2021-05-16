<footer>

	<div id="footermenu">
		<ul>
		<li class="title">タイトル</li>
			<li><a class="btn text-light" href="https://twitter.com/Daichi_Started"><i class="mr-1 fab fa-twitter"></i>Twitter</a></li>
			<li><a class="btn text-light" href="https://github.com/daichi-eng"><i class="mr-1 fab fa-github"></i>Github</a></li>
			<li><a class="btn text-light" href="https://restarted.site/"><i class="mr-1 fas fa-blog"></i>ブログ</a></li>
		</ul>
		<ul>
			<li class="title">タイトル</li>
			<li><a class="btn text-light" href="{{-- route('admin.home') --}}">システム管理者ページ</a></li>
			<li><a class="btn text-light" href="{{-- route('user.home') --}}">一般ユーザーページ</a></li>
		</ul>
	</div>
	<!--/#footermenu-->

	<div id="copyright">
		<small>Copyright&copy; <a href="index.html">daichi-eng</a> All Rights Reserved.</small>
		<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
	</div>
	<!--/#copyright-->

</footer>
{{-- End footer --}}


<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　900px以下-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

<!--子メニュー-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr2", "menubar-s2");
}
</script>