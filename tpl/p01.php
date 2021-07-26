<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- seo && twitter -->
  <meta property="og:title" content="Eliminate Waste">
  <meta property="og:type" content="website">
  <meta property="og:url" content="p01.php">
  <meta property="og:image" content="img/myIcon.png">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:creator" content="@syuto_niimi">
  <!-- css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- icon -->
  <link rel="icon" type="image/png" sizes="310x310" href="img/myIcon.png">
  <title><?php echo $idea ?></title>
</head>

<body>
  <div class="mx-auto container-xl">
    <header class="container px-0 p-4 fw-bold" id="Top">
      <div class="d-flex flex-row justify-content-between align-items-center">
        <a href="#Top"><span class="fs-3">feris nyannyan</span></a>
        <nav>
          <a href="#Story" class="col-2 px-0 me-5">Story</a>
          <a href="#Character" class="col-2 px-0 me-5">Character</a>
          <a href="#Works" class="col-2 px-0 me-5">Works</a>
          <a href=" #Links" class="col-2 px-0 me-5">Links</a>
        </nav>
      </div>
    </header>
    <main class="border-bottom">
      <article class="vh-100 d-flex flex-row align-items-center">
        <h1 class="fs-6 fw-normal ms-5 h-25">
          <span class="d-block fs-3 mb-3">働きたくないです。今日も酒が美味い</span>
          お金ください、休みください、サボりたいです、不労所得ください。
        </h1>
      </article>
      <article id="Story" class="mb-5">
        <h2 class="text-center mb-5"><a>Story</a></h2>
        <div class="ms-5 fw-bold pb-5">
          <p class="mb-0">人が苦手でゲームばかりしていたferisちゃん。</p>
          <p class="mb-0">社会復帰する為に接客業を志すも体力も気力も無く</p>
          <p>気疲れしてしまい、エンジニアを目指す事に。</p>
          <p>無駄が多い生き方...それも人生()</p>
        </div>
      </article>
      <article id="Character" class="mb-5">
        <h2 class="text-center mb-5">Character</h2>
        <section class="mb-5 fw-bold">
          <h3 class="visually-hidden">自己紹介:性格</h3>
          <div class="d-flex flex-row align-items-center pb-5">
            <div class="w-50 d-flex flex-column align-items-center">
              <div class="w-75 border-end">
                <p><img src="img/myIcon.png" alt="自己キャラクター画像" class="img-fluid" loading="lazy"></p>
              </div>
              <div>
                <p class="mb-0">.like</p>
                <ul class="d-flex flex-row list-unstyled">
                  <li class="px-2"><a href=" https://soundcloud.com/syuto-niimi/sets/fav" target="_brank"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                        <title>soundcloud</title>
                        <path d="M7 17.939h-1v-8.068c.308-.231.639-.429 1-.566v8.634zm3 0h1v-9.224c-.229.265-.443.548-.621.857l-.379-.184v8.551zm-2 0h1v-8.848c-.508-.079-.623-.05-1-.01v8.858zm-4 0h1v-7.02c-.312.458-.555.971-.692 1.535l-.308-.182v5.667zm-3-5.25c-.606.547-1 1.354-1 2.268 0 .914.394 1.721 1 2.268v-4.536zm18.879-.671c-.204-2.837-2.404-5.079-5.117-5.079-1.022 0-1.964.328-2.762.877v10.123h9.089c1.607 0 2.911-1.393 2.911-3.106 0-2.233-2.168-3.772-4.121-2.815zm-16.879-.027c-.302-.024-.526-.03-1 .122v5.689c.446.143.636.138 1 .138v-5.949z" />
                      </svg></a></li>
                  <li class="px-3"><a href="https://kadobun.jp/feature/readings/dbox7xuv5tkw.html" target="_brank"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                        <title>book</title>
                        <path d="M23 5v13.883l-1 .117v-16c-3.895.119-7.505.762-10.002 2.316-2.496-1.554-6.102-2.197-9.998-2.316v16l-1-.117v-13.883h-1v15h9.057c1.479 0 1.641 1 2.941 1 1.304 0 1.461-1 2.942-1h9.06v-15h-1zm-12 13.645c-1.946-.772-4.137-1.269-7-1.484v-12.051c2.352.197 4.996.675 7 1.922v11.613zm9-1.484c-2.863.215-5.054.712-7 1.484v-11.613c2.004-1.247 4.648-1.725 7-1.922v12.051z" />
                      </svg></a></li>
                  <li class="px-3"><a href="onclick#sound" target="_brank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <title>sound</title>
                        <path d="M19.803 13.207l-.829 1.093-1.554-3.826c-.077-.189-.244-.306-.437-.306-.157 0-.356.084-.444.321l-1.356 3.664-1.872-8.759c-.062-.291-.288-.394-.462-.394-.203 0-.428.131-.473.424l-1.629 10.581-1.658-6.968c-.067-.282-.291-.382-.463-.382-.167 0-.374.092-.453.349l-1.453 4.753-1.07-2.53c-.078-.185-.245-.299-.436-.299-.154 0-.294.076-.385.209l-1.257 1.805-.087.058h-2.985c-.276 0-.5.224-.5.5s.224.5.5.5h3.284c.152 0 .296-.074.386-.206l.948-1.353 1.24 2.929c.079.187.241.299.433.299.211 0 .39-.138.455-.35l1.324-4.332 1.814 7.629c.068.283.282.384.46.384.203 0 .428-.131.473-.425l1.605-10.425 1.673 7.83c.058.272.277.395.467.395.202 0 .366-.12.441-.321l1.5-4.049 1.426 3.51c.077.189.245.306.438.306.152 0 .292-.075.382-.206l1.146-1.583.087-.046h3.026c.272 0 .492-.22.492-.492s-.22-.494-.492-.494h-3.322c-.151 0-.294.077-.383.207z" />
                      </svg></a></li>
                </ul>
              </div>
            </div>
            <div>
              <div class="col">
                <p class="mb-0">HAL大阪IT学部WEB開発学科に通う2年生。</p>
                <p class="mb-0">小さい頃もあまり人の話を聞かなかったらしい</p>
                <p class="mb-0">最近もあまり聞いていないが聞こうと努力はしているらしい。</p>
                <p class="mb-0">好きな事は模倣、本、可愛い、音楽。</p>
                <p class="mb-0">soundcloudでremixされた良曲を探しつつよく聞いている。</p>
                <p>@tonari_machi_を推している。</p>
              </div>
              <div class="col">
                <p class="mb-0">意識しないとすぐサボりがち</p>
                <p>年取ってガタがこないような真っ当な人間を目指したい()</p>
              </div>
              <div class="col">
                <p class="mb-0">Qualitification</p>
                <ul>
                  <li>基本情報技術者 合格</li>
                  <li>日本漢字検定2級 合格</li>
                  <li>日本英語検定2級 合格</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="pb-5 fw-bold d-flex flex-row justify-content-center">
          <h3 class="visually-hidden">自己紹介:経歴</h3>
          <div class="w-75 ms-5">
            <div class="position-relative border-start border-dark border-2 float-start h-100" style="left:17px;z-index:-1"></div>
            <ul class="d-grid gap-3 list-unstyled">
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(1995)</span>
                <span class="ms-2">生まれる</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2011)</span>
                <span class="ms-2">履正社高校へ</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2013)</span>
                <span class="ms-2">履正社高校中退(入学時偏差値70あったものの落ちていった)</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2013)</span>
                <span class="ms-2">つくば開成高校転入(1日4限の人生夏休み開始)</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2014)</span>
                <span class="ms-2">中部大学入学(遊ぶのもどこか開き直れず、中途半端な感じ)</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2015/10)</span>
                <span class="ms-2">中部大学中退 バイトしていた喫茶店で店員に。</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2016/2)</span>
                <span class="ms-2">お客さんの世話になりすぎてこのままでは駄目だと思い大阪に戻ることに</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2017)</span>
                <span class="ms-2">バイトを何個かやっていく間に先輩に誘われ新聞屋に就職する事に。</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2019)</span>
                <span class="ms-2">出前館、佐川急便の事業の提携の話が出てくるものの体力的に持たなくなってきた為退職。某アプリであった女の子にスマホのサポートサービスの仕事を紹介され働き始める。</span>
              </li>
              <li>
                <div class="rounded-circle bg-gray float-start me-5" style="width:2rem;height:2rem"></div>
                <span>(2020~)</span>
                <span class="ms-2">HAL大阪入学</span>
              </li>
            </ul>
          </div>
        </section>
      </article>
      <article id="Works" class="mb-5">
        <h2 class="text-center mb-5">Works</h2>
        <section class="pb-5 fw-bold d-flex flex-row align-items-center justify-content-center">
          <div class="border p-5">
            <p>to be continued...</p>
          </div>
        </section>
      </article>
      <article id="Links" class="mb-5">
        <h2 class="text-center mb-5">Links</h2>
        <section class="pb-5">
          <h3 class="visually-hidden">自己紹介:サイト、SNSリンク</h3>
          <ul class="d-flex flex-row align-items-center justify-content-center list-unstyled">
            <li class="p-3"><a target="_brank" href="https://github.com/ooitanojohn"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                  <title>github</title>
                  <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg></a></li>
            <li class="p-3"><a href="https://twitter.com/syuto_niimi" target="_brank"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                  <title>twitter</title>
                  <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg></a></li>

            <li class="p-3"><a href="http://ooitanojohn.wp.xdomain.jp/" target="_brank"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                  <title>wordpress</title>
                  <path d="M2.597 7.81l4.911 13.454c-3.434-1.668-5.802-5.19-5.802-9.264 0-1.493.32-2.91.891-4.19zm16.352 3.67c0-1.272-.457-2.153-.849-2.839-.521-.849-1.011-1.566-1.011-2.415 0-.978.747-1.88 1.862-1.819-1.831-1.677-4.271-2.701-6.951-2.701-3.596 0-6.76 1.845-8.601 4.64.625.02 1.489.032 3.406-.118.555-.034.62.782.066.847 0 0-.558.065-1.178.098l3.749 11.15 2.253-6.756-1.604-4.394c-.555-.033-1.08-.098-1.08-.098-.555-.033-.49-.881.065-.848 2.212.17 3.271.171 5.455 0 .555-.033.621.783.066.848 0 0-.559.065-1.178.098l3.72 11.065 1.027-3.431c.444-1.423.783-2.446.783-3.327zm-6.768 1.42l-3.089 8.975c.922.271 1.898.419 2.908.419 1.199 0 2.349-.207 3.418-.583-.086-.139-3.181-8.657-3.237-8.811zm8.852-5.839c.224 1.651-.099 3.208-.713 4.746l-3.145 9.091c3.061-1.784 5.119-5.1 5.119-8.898 0-1.79-.457-3.473-1.261-4.939zm2.967 4.939c0 6.617-5.384 12-12 12s-12-5.383-12-12 5.383-12 12-12 12 5.383 12 12zm-.55 0c0-6.313-5.137-11.45-11.45-11.45s-11.45 5.137-11.45 11.45 5.137 11.45 11.45 11.45 11.45-5.137 11.45-11.45z" />
                </svg></a></li>
            <li class="p-3"><a href="https://qiita.com/ooitanojohn" target="_brank"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" viewBox="0 0 24 24">
                  <title>Qiita</title>
                  <path d="M3.57 8.343a3.653 3.653 0 0 0-1.376.269 3.585 3.585 0 0 0-1.14.738 3.503 3.503 0 0 0-.773 1.102A3.297 3.297 0 0 0 0 11.814a3.28 3.28 0 0 0 .281 1.357 3.535 3.535 0 0 0 .775 1.107A3.636 3.636 0 0 0 3.6 15.29a3.731 3.731 0 0 0 .987-.13 3.657 3.657 0 0 0 .888-.374l.687.698a.579.579 0 0 0 .824 0 .58.58 0 0 0 0-.817l-.624-.624a3.533 3.533 0 0 0 .613-1.022 3.282 3.282 0 0 0 .226-1.208 3.297 3.297 0 0 0-.282-1.362 3.488 3.488 0 0 0-.775-1.102A3.614 3.614 0 0 0 5 8.612a3.657 3.657 0 0 0-1.398-.27 3.653 3.653 0 0 0-.031 0zm11.306.185v1.484h-.765v1.063h.765v2.142c0 .419.053.761.159 1.028a1.56 1.56 0 0 0 .433.63 1.511 1.511 0 0 0 .643.317 2.676 2.676 0 0 0 .694.086h.853v-1.013h-.736a1.25 1.25 0 0 1-.352-.048.713.713 0 0 1-.291-.169.81.81 0 0 1-.2-.324 1.575 1.575 0 0 1-.074-.519v-2.13h1.666v-1.063h-1.66V8.528zM9.4 8.856a.69.69 0 0 0-.69.691.69.69 0 0 0 .69.69.69.69 0 0 0 .691-.69.69.69 0 0 0-.69-.691zm2.771 0a.69.69 0 0 0-.69.691.69.69 0 0 0 .69.69.69.69 0 0 0 .691-.69.69.69 0 0 0-.69-.691zm-8.6.538a2.324 2.324 0 0 1 .03 0 2.35 2.35 0 0 1 .93.187 2.346 2.346 0 0 1 1.264 1.28 2.463 2.463 0 0 1 .186.957 2.444 2.444 0 0 1-.186.957 2.384 2.384 0 0 1-.506.767 2.363 2.363 0 0 1-1.688.698 2.324 2.324 0 0 1-.93-.186 2.376 2.376 0 0 1-.755-.512 2.427 2.427 0 0 1-.699-1.723 2.44 2.44 0 0 1 .699-1.727 2.384 2.384 0 0 1 .756-.511 2.324 2.324 0 0 1 .898-.187zm17.648.773a2.69 2.69 0 0 0-1.02.201 2.49 2.49 0 0 0-.815.552 2.432 2.432 0 0 0-.525.814 2.678 2.678 0 0 0-.186.998 2.644 2.644 0 0 0 .186.997 2.485 2.485 0 0 0 .525.814 2.436 2.436 0 0 0 .815.546 2.697 2.697 0 0 0 1.059.2 2.42 2.42 0 0 0 .518-.056 2.524 2.524 0 0 0 .46-.146 2.426 2.426 0 0 0 .394-.213 2.394 2.394 0 0 0 .329-.263l.065.53H24v-4.829h-.976l-.068.533a2.498 2.498 0 0 0-.322-.26 2.25 2.25 0 0 0-.394-.217 2.616 2.616 0 0 0-.462-.145 2.404 2.404 0 0 0-.521-.056 2.69 2.69 0 0 0-.038 0zm-12.375.844v4.138h1.113V11.01zm2.77 0v4.138h1.114V11.01zm9.72.145a1.592 1.592 0 0 1 .024 0 1.557 1.557 0 0 1 1.098.445 1.495 1.495 0 0 1 .334.495 1.61 1.61 0 0 1 .121.631 1.632 1.632 0 0 1-.121.64 1.551 1.551 0 0 1-.331.498 1.47 1.47 0 0 1-.49.324 1.642 1.642 0 0 1-1.207 0 1.502 1.502 0 0 1-.493-.324 1.52 1.52 0 0 1-.333-.5 1.64 1.64 0 0 1-.122-.638 1.628 1.628 0 0 1 .12-.637 1.524 1.524 0 0 1 .328-.495 1.474 1.474 0 0 1 .49-.323 1.592 1.592 0 0 1 .581-.116z"></path>
                </svg></a></li>
          </ul>
        </section>
      </article>
    </main>
    <footer class="p-3 text-center">
      <blockquote cite="https://ganyariya.netlify.app/">
        <small class="d-block">© 2021 feris</small>
        <cite>模写元:<a href="https://ganyariya.netlify.app/">ganyariya</a></cite>
      </blockquote>
    </footer>
  </div>

</body>

</html>