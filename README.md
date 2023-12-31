# 課題 - PHPによる登録処理画面 -　

## ①課題の内容（どんな作品）
- MVPの部品として、PHPとLaravelを使ったサーバーサイド(フロントエンド)の一部を作った。
- 下図、赤線で囲った部分の一部
    - ![image](https://github.com/seimei-san/wip_app_1/assets/53326909/d0e4913f-4761-40db-8bfd-fe20f8835eee)

- 今回は、MVCモデルに従って、以下の情報を登録、参照、削除するための、M:ModelとC:Conrollerの一部を作った。
    - ユーザー (user)
    - 組織情報 (domain)
    - ユーザーグループ (group)
    - ユーザープロファイル (profile)
    - ユーザーとグループの紐付け (user group)
- V:Viewを作る時間がなかったので、とりあえずMとCの動作を確認するために、ヤマザキ先生のビデオで紹介されたViewを改造して作った。
    - ユーザー (user)
        - ![image](https://github.com/seimei-san/wip_app_1/assets/53326909/c382eaec-d06d-40c5-bd01-a446be1e21ef)
    - 組織情報 (domain)
        - ![image](https://github.com/seimei-san/wip_app_1/assets/53326909/68cd08da-a153-43d7-998a-12638384994b)
    - ユーザーグループ (group)    - 
        - ![image](https://github.com/seimei-san/wip_app_1/assets/53326909/c6fc0c3b-81be-459f-bc4e-ab3f116ea09f)


## ②工夫した点・こだわった点
- 以下の機能を実装しても、Laravelのフレームワーク上で正常に動作させることに成功した
    - セキュリティーを向上させるために各テーブルのIDを独自のIDに変更した。
        - AutoincrementのIntの変わりに、アルファベットと数字をランダムに組み合わせてStringとしてIDを生成した。
    - Blade上のチェックボックスをDBと連携して表示。更新されるようにした。
    - BreezeでUser管理の基本形を活用して、独自のユーザー管理機能を実装した
      

## ③難しかった点・次回トライしたいこと(又は機能)
- Laravel のフレームワークを理解し、基本的な活用ができるようになるのにとても苦労した。
    - ヤマザキ先生のビデオを参考にしながらも、自走で使えるようになるにはかなり苦労した。
- 上記の主キーを独自の文字列にする際、Laravel標準の主キーの属性やフィールドを変える方法を見つけるのに２日を溶かした。
- 主キーを変更したことで、Model、Controller、View（Blade）の連携を全ていじることになり、多発するエラーを解決するのにほとんどの時間を時間を費やした。
- 上記のチェックボックスが、Offの時にデーターベースに反映しない原因を見つけるのに苦労した。
  


## ④質問・疑問・感想、シェアしたいtips等なんでも
[質問]

[疑問]　
Viewを作るのにBootstrap5のテンプレートの活用を試みたが、購入したソースコードの展開方法が分からなかった。
HTMLとCSSの展開方法には多くの文献があったが、ソースコードの展開方法は見つけられなかった。　


[感想]　
  

[tips]　
  

[参考記事]
