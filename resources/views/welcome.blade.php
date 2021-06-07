@extends('app')

@section('active-panel')
　テスト実行者
@endsection

@section('title')
　Twitter　API
@endsection

@section('content')

{{-- メインコンテンツ --}}
<main>
    <section>
        <div class="container">
            <h2 class="underline">Twitter API のテストプログラム（twiter_api_0100）</h2>
		    <form action="" method="post">
                <p>
                <label for="name">お名前</label>
                <input class="full-width" type="text" id="name" name="name">
                </p>
                <p>
                <label for="email">メールアドレス</label>
                <input class="full-width" type="email" id="email" name="email">
                </p>
                <p>
                <label for="message">お問い合わせ内容</label>
                    <textarea class="full-width" id="textarea" name="textarea"></textarea>
                </p>
                <p>
                <input class="button" type="submit" value="送信">
                </p>
            </form>
		</div>
    </section>

</main>
@endsection
