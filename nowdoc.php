<?php 
//nowdocはヒアドキュメントの宣言をシングルコートで囲ったバージョン
//基本の使い方はヒアドキュメントと同じだが前提がシングルコートで文章を囲っている認識

$name = '山田';

//例１（ヒアドキュメントのパターン）
echo <<< test1
これは例１です。この例ではヒアドキュメントを使用します。
名前は$name です。山田が表示されていますか？表示されていますね。
改行を入れてみます\n改行されているか確認しましょう。\n改行が確認出来ました。
次はタブです\t余白が左にありますか？ありますね。
次はバックスラッシュです\\左に表示されていますか？\が表示されていますね。

test1;

//上記出力結果
// これは例１です。この例ではヒアドキュメントを使用します。
// 名前は山田 です。山田が表示されていますか？表示されていますね。
// 改行を入れてみます
// 改行されているか確認しましょう。
// 改行が確認出来ました。
// 次はタブです    余白が左にありますか？ありますね。
// 次はバックスラッシュです\左に表示されていますか？\が表示されていますね。

//=====================================================
echo "\n";
echo "\n";

//例2（Nowdocのパターン）
echo <<< 'test2'
これは例2です。この例ではヒアドキュメントを使用します。
名前は$name です。山田が表示されていますか？変数がそのまま文字列になっていますね。
改行を入れてみます\n改行されているか確認しましょう。\n改行が確認出来ません。
次はタブです\t余白が左にありますか？ありません。
次はバックスラッシュです\\左に表示されていますか？\が2つ表示されていますね。

test2;

// 出力結果
// これは例2です。この例ではヒアドキュメントを使用します。
// 名前は$name です。山田が表示されていますか？変数がそのまま文字列になっていますね。
// 改行を入れてみます\n改行されているか確認しましょう。\n改行が確認出来ません。
// 次はタブです\t余白が左にありますか？ありません。
// 次はバックスラッシュです\\左に表示されていますか？\が2つ表示されていますね。


echo "これはドルを表示するテストです。{$name}山田が表示される。{${$name}}ドル山田が表示されない";
echo "This is the value of the var named $name: {${$name}}";//{{}}で囲った$や変数は表示されない
