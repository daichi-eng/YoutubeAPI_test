@extends('app')

@section('active-panel')
　テスト実行者
@endsection

@section('title')
　YouTubeAPI_test
@endsection

@section('content')

{{-- メインコンテンツ --}}
<div id="contents">
    <section>
        <h2>YOUTUBE TEST フォーム</h2>

        <!-- フォームの情報はここからです -->
        <form name="form1" enctype="multipart/form-data" method="post" action="">
            <input type="hidden" name="mode" value="form">
            <table class="ta1">
                <!-- 入力／確認 -->
                <!--<tr><th class="tamidashi" colspan="2">お問い合わせフォーム</th></tr>-->
                <tr>
                    <th width="150">お名前<span style="color:red">※</span></th>
                    <td>
                        <input name="item1" value="" type="text" size="40" maxlength="500" class="ws">
                    </td>
                </tr>
                <tr>
                    <th width="150">メールアドレス<span style="color:red">※</span></th>
                    <td>
                        <input name="item2" value="" type="text" size="40" maxlength="500" class="ws">
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容<span style="color:red">※</span></th>
                    <td>
                        <textarea name="item3" cols="40" rows="10" class="wl"></textarea>
                    </td>
                </tr>
            </table>
            <div class="c">
                <input type="submit" value="内容を確認する" class="btn">
                &nbsp;
                <input type="reset" value="リセット" class="btn">
            </div>
        </form>
    </section>
</div>
@endsection
