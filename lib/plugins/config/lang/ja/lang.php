<?php
/**
 * japanese language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author Yuji Takenaka <webmaster@davilin.com>
 * @author Christopher Smith <chris@jalakai.co.uk>
 * @author Ikuo Obataya <i.obataya@gmail.com>
 * @author Daniel Dupriest <kououken@gmail.com>
 * @author Kazutaka Miyasaka <kazmiya@gmail.com>
 */
$lang['menu']                  = 'サイト設定';
$lang['error']                 = '不正な値が存在するため、設定は更新されませんでした。入力値を確認してから、再度更新してください。
                       <br />不正な値が入力されている項目は赤い線で囲まれています。';
$lang['updated']               = '設定は正しく更新されました。';
$lang['nochoice']              = '（他の選択肢はありません）';
$lang['locked']                = '設定用ファイルを更新できません。もし意図して変更不可にしているのでなければ、<br />
                       ローカル設定ファイルの名前と権限を確認して下さい。';
$lang['danger']                = '危険：この設定を変更するとウィキや設定管理画面にアクセスできなくなる恐れがあります。';
$lang['warning']               = '注意：この設定を変更すると意図しない作動につながる可能性があります。';
$lang['security']              = '警告：この設定を変更するとセキュリティに悪影響する恐れがあります。';
$lang['_configuration_manager'] = '設定管理';
$lang['_header_dokuwiki']      = 'DokuWiki';
$lang['_header_plugin']        = 'プラグイン';
$lang['_header_template']      = 'テンプレート';
$lang['_header_undefined']     = 'その他';
$lang['_basic']                = '基本';
$lang['_display']              = '表示';
$lang['_authentication']       = '認証';
$lang['_anti_spam']            = 'スパム対策';
$lang['_editing']              = '編集';
$lang['_links']                = 'リンク';
$lang['_media']                = 'メディア';
$lang['_advanced']             = '高度な設定';
$lang['_network']              = 'ネットワーク';
$lang['_plugin_sufix']         = 'プラグイン設定';
$lang['_template_sufix']       = 'テンプレート設定';
$lang['_msg_setting_undefined'] = '設定のためのメタデータがありません。';
$lang['_msg_setting_no_class'] = '設定クラスがありません。';
$lang['_msg_setting_no_default'] = '初期値が設定されていません。';
$lang['fmode']                 = 'ファイル作成マスク';
$lang['dmode']                 = 'フォルダ作成マスク';
$lang['lang']                  = '使用言語';
$lang['basedir']               = 'ベースディレクトリ';
$lang['baseurl']               = 'ベースURL';
$lang['savedir']               = '保存ディレクトリ';
$lang['start']                 = 'スタートページ名';
$lang['title']                 = 'WIKIタイトル';
$lang['template']              = 'テンプレート';
$lang['license']               = '作成した内容をどのライセンスでリリースしますか？';
$lang['fullpath']              = 'ページのフッターに絶対パスを表示';
$lang['recent']                = '最近の変更表示数';
$lang['breadcrumbs']           = 'トレース（パンくず）表示数';
$lang['youarehere']            = '現在位置を表示';
$lang['typography']            = 'タイポグラフィー変換';
$lang['htmlok']                = 'HTML埋め込み';
$lang['phpok']                 = 'PHP埋め込み';
$lang['dformat']               = '日付フォーマット（PHPの<a href="http://www.php.net/strftime">strftime</a>関数を参照）';
$lang['signature']             = '署名';
$lang['toptoclevel']           = '目次 トップレベル見出し';
$lang['tocminheads']           = '目次を生成するための最小見出し数';
$lang['maxtoclevel']           = '目次 表示限度見出し';
$lang['maxseclevel']           = '編集可能見出し';
$lang['camelcase']             = 'キャメルケースリンク';
$lang['deaccent']              = 'ページ名アクセント';
$lang['useheading']            = '最初の見出しをページ名とする';
$lang['refcheck']              = 'メディア参照元チェック';
$lang['refshow']               = 'メディア参照元表示数';
$lang['allowdebug']            = 'デバッグモード（<b>必要で無いときは無効にしてください</b>）';
$lang['usewordblock']          = '単語リストに基づくスパムブロック';
$lang['indexdelay']            = 'インデックスを許可（何秒後）';
$lang['relnofollow']           = 'rel="nofollow"を付加';
$lang['mailguard']             = 'メールアドレス保護';
$lang['iexssprotect']          = 'アップロードファイルに悪意のあるJavaScriptやHTMLが含まれていないかチェックする';
$lang['showuseras']            = '最終編集者の情報として表示する内容';
$lang['useacl']                = 'アクセス管理を行う（ACL）';
$lang['autopasswd']            = 'パスワードの自動生成（ACL）';
$lang['authtype']              = '認証方法（ACL）';
$lang['passcrypt']             = '暗号化方法（ACL）';
$lang['defaultgroup']          = 'デフォルトグループ（ACL）';
$lang['superuser']             = 'スーパーユーザー（ACL）';
$lang['manager']               = 'マネージャー（特定の管理機能を使用可能なユーザーもしくはグループ）';
$lang['profileconfirm']        = 'プロフィール変更時に現在のパスワードを要求（ACL）';
$lang['disableactions']        = 'DokuWiki の動作を無効にする';
$lang['disableactions_check']  = 'チェック';
$lang['disableactions_subscription'] = '登録 / 解除';
$lang['disableactions_wikicode'] = 'ソース閲覧 / 生データ出力';
$lang['disableactions_other']  = 'その他の動作（カンマ区切り）';
$lang['sneaky_index']          = 'デフォルトでは索引にすべての名前空間を表示しますが、この機能はユーザーに閲覧権限のない名前空間を非表示にします。ただし、閲覧が可能な副名前空間まで表示されなくなるため、ACLの設定が適正でない場合は索引機能が使えなくなる場合があります。';
$lang['auth_security_timeout'] = '認証タイムアウト設定（秒）';
$lang['securecookie']          = 'クッキーをHTTPSにてセットする場合は、ブラウザよりHTTPS経由で送信された場合にみに制限しますか？ログインのみをSSLで行う場合は、この機能を無効にしてください。';
$lang['xmlrpc']                = 'XML-RPCインターフェースを有効/無効にする';
$lang['xmlrpcuser']            = 'XML-RPCアクセスを指定グループとユーザーに制限します（半角コンマ区切り）。　すべての人にアクセスを許可する場合は空のままにしてください。';
$lang['updatecheck']           = 'DokuWikiの更新とセキュリティに関する情報をチェックしますか？ この機能は splitbrain.org への接続が必要です。';
$lang['userewrite']            = 'URLの書き換え';
$lang['useslash']              = 'URL上の名前空間の区切りにスラッシュを使用';
$lang['usedraft']              = '編集中の自動保存（ドラフト）機能を使用';
$lang['sepchar']               = 'ページ名の単語区切り文字';
$lang['canonical']             = 'canonical URL（正準URL）を使用';
$lang['fnencode']              = '非アスキーファイル名のエンコーディング方法';
$lang['autoplural']            = '自動複数形処理';
$lang['compression']           = 'アーカイブファイルの圧縮方法';
$lang['cachetime']             = 'キャッシュ保持時間（秒）';
$lang['locktime']              = 'ファイルロック期限（秒）';
$lang['fetchsize']             = '外部からのダウンロード最大サイズ';
$lang['notify']                = '変更を通知するメールアドレス';
$lang['registernotify']        = '新規ユーザー登録を通知するメールアドレス';
$lang['mailfrom']              = 'メール送信時の送信元アドレス';
$lang['mailprefix']            = '自動メールの題名に使用する接頭語';
$lang['gzip_output']           = 'xhtmlに対するコンテンツ圧縮（gzip）を使用';
$lang['gdlib']                 = 'GDlibバージョン';
$lang['im_convert']            = 'ImageMagick変換ツールへのパス';
$lang['jpg_quality']           = 'JPG圧縮品質（0-100）';
$lang['subscribers']           = '更新通知機能';
$lang['subscribe_time']        = '購読リストと概要を送信する期間（秒）。「最近の変更とする期間」で指定した期間より小さくしてください。';
$lang['compress']              = 'CSSとJavaScriptを圧縮';
$lang['hidepages']             = '非公開ページ（Regex）';
$lang['send404']               = '文書が存在しないページに"HTTP404/Page Not Found"を使用';
$lang['sitemap']               = 'Googleサイトマップ作成頻度（日数）';
$lang['broken_iua']            = 'ignore_user_abort関数が破損している恐れがあります。そのため、検索インデックスが動作しない可能性があります。IIS+PHP/CGIの組み合わせで破損することが判明しています。詳しくは<a href="http://bugs.splitbrain.org/?do=details&amp;task_id=852">Bug 852</a>を参照してください。';
$lang['xsendfile']             = 'ウェブサーバーが静的ファイルを生成するために X-Sendfile ヘッダーを使用しますか？なお、この機能をウェブサーバーがサポートしている必要があります。';
$lang['renderer_xhtml']        = 'Wikiの出力（xhtml）にレンダラーを使用する';
$lang['renderer__core']        = '%s （Dokuwikiコア）';
$lang['renderer__plugin']      = '%s （プラグイン）';
$lang['rememberme']            = 'ログイン用クッキーを永久に保持することを許可（ログインを保持）';
$lang['rss_type']              = 'RSSフィード形式';
$lang['rss_linkto']            = 'RSS内リンク先';
$lang['rss_content']           = 'XMLフィードに何を表示させますか？';
$lang['rss_update']            = 'RSSフィードの更新間隔（秒）';
$lang['recent_days']           = '最近の変更とする期間（日数）';
$lang['rss_show_summary']      = 'フィードのタイトルにサマリーを表示';
$lang['target____wiki']        = '内部リンクの表示先';
$lang['target____interwiki']   = 'InterWikiリンクの表示先';
$lang['target____extern']      = '外部リンクの表示先';
$lang['target____media']       = 'メディアリンクの表示先';
$lang['target____windows']     = 'Windowsリンクの表示先';
$lang['proxy____host']         = 'プロキシ - サーバー名';
$lang['proxy____port']         = 'プロキシ - ポート';
$lang['proxy____user']         = 'プロキシ - ユーザー名';
$lang['proxy____pass']         = 'プロキシ - パスワード';
$lang['proxy____ssl']          = 'プロキシへの接続にsslを使用';
$lang['proxy____except']       = 'スキップするプロキシのURL正規表現';
$lang['safemodehack']          = 'セーフモード対策を行う';
$lang['ftp____host']           = 'FTP サーバー名（セーフモード対策）';
$lang['ftp____port']           = 'FTP ポート（セーフモード対策）';
$lang['ftp____user']           = 'FTP ユーザー名（セーフモード対策）';
$lang['ftp____pass']           = 'FTP パスワード（セーフモード対策）';
$lang['ftp____root']           = 'FTP ルートディレクトリ（セーフモード対策）';
$lang['license_o_']            = '選択されていません';
$lang['typography_o_0']        = '無し';
$lang['typography_o_1']        = '二重引用符（ダブルクオート）のみ';
$lang['typography_o_2']        = 'すべての引用符（動作しない場合があります）';
$lang['userewrite_o_0']        = '使用しない';
$lang['userewrite_o_1']        = '.htaccess';
$lang['userewrite_o_2']        = 'DokuWikiによる設定';
$lang['deaccent_o_0']          = '指定しない';
$lang['deaccent_o_1']          = 'アクセントを除去';
$lang['deaccent_o_2']          = 'ローマナイズ';
$lang['gdlib_o_0']             = 'GDを利用できません';
$lang['gdlib_o_1']             = 'バージョン 1.x';
$lang['gdlib_o_2']             = '自動検出';
$lang['rss_type_o_rss']        = 'RSS 0.91';
$lang['rss_type_o_rss1']       = 'RSS 1.0';
$lang['rss_type_o_rss2']       = 'RSS 2.0';
$lang['rss_type_o_atom']       = 'Atom 0.3';
$lang['rss_type_o_atom1']      = 'Atom 1.0';
$lang['rss_content_o_abstract'] = '概要';
$lang['rss_content_o_diff']    = '差分（Unified Diff）';
$lang['rss_content_o_htmldiff'] = '差分（HTML形式）';
$lang['rss_content_o_html']    = '完全なHTMLページ';
$lang['rss_linkto_o_diff']     = '変更点のリスト';
$lang['rss_linkto_o_page']     = '変更されたページ';
$lang['rss_linkto_o_rev']      = 'リビジョンのリスト';
$lang['rss_linkto_o_current']  = '現在のページ';
$lang['compression_o_0']       = '圧縮しない';
$lang['compression_o_gz']      = 'gzip';
$lang['compression_o_bz2']     = 'bz2';
$lang['xsendfile_o_0']         = '使用しない';
$lang['xsendfile_o_1']         = 'lighttpd ヘッダー（リリース1.5以前）';
$lang['xsendfile_o_2']         = '標準 X-Sendfile ヘッダー';
$lang['xsendfile_o_3']         = 'Nginx X-Accel-Redirect ヘッダー';
$lang['showuseras_o_loginname'] = 'ログイン名';
$lang['showuseras_o_username'] = 'ユーザーのフルネーム';
$lang['showuseras_o_email']    = 'ユーザーのメールアドレス（メールガード設定による難読化）';
$lang['showuseras_o_email_link'] = 'ユーザーのメールアドレスをリンクにする';
$lang['useheading_o_0']        = '使用しない';
$lang['useheading_o_navigation'] = 'ナビゲーションのみ';
$lang['useheading_o_content']  = 'Wikiの内容のみ';
$lang['useheading_o_1']        = '常に使用する';
$lang['readdircache']          = 'readdir キャッシュの最大保持期間（秒）';
