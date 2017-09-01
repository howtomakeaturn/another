@extends('layout')

@section('head')



<style>

</style>

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <a href='#'>« Back To Dashboard: Just Another Demo Project</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-10">
                        <h2 class="main-title">
                            ■ 關於「自訂過濾器」的未來變動 ■
                        </h2>
                    </div>
                    <div class="col-md-2">
                        <div style="margin-top: 25px;">
                            <span class="label label-success _size-20">Open</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="issue-box" style="margin-bottom: 20px;">
                    <div>
                                                    ■ 關於「自訂過濾器」的未來變動：8月6號（日）以後註冊的用戶，需要成為贊助會員才能使用「自訂過濾器」■<br>
                        <br>
                        **8月6號（日）以前註冊的5,000多位現有用戶不受影響**<br>
                        <br>
                        **「自訂過濾器」以外的功能不受影響**<br>
                        <br>
                        大家好，Cafe Nomad 從去年11月上線至今滿9個月了<br>
                        <br>
                        我其實還有很多功能想做，希望可以全職投入 Cafe Nomad 的開發工作<br>
                        <br>
                        目前是一邊接案一邊經營 Cafe Nomad，投入開發的時間有限<br>
                        <br>
                        私心希望能多利用網站的部份進階功能得到贊助收入，支持網站的長期開發跟營運<br>
                        <br>
                        因此做出這項變動：8月6號（日）以前註冊的5,000多位現有用戶不受影響，但是8月6號（日）以後註冊的用戶，需要成為贊助會員（300元/1年）才能使用「自訂過濾器」<br>
                        <br>
                        有任何問題或是想法歡迎再留言or私訊跟我說<br>
                        <br>
                        希望大家能理解這項決定，謝謝 &lt;( _ _ )&gt;
                    </div>
                </div>
                <div class="issue-box" style="margin-bottom: 20px;">

                                                想請問大家，如果一個人在咖啡廳待一整天工作時，<br>
                    需要暫時離開位置，例如上廁所等等，<br>
                    電腦與包包、一些重要物品等等，沒有人幫忙顧該怎麼辦呢？<br>
                    <br>
                    還有午飯、晚飯通常也會選擇在同家店用餐嗎？<br>
                    如果離開出外用餐，回來位置可能不一定有位，<br>
                    或者是已經吃飽喝足又要再點一杯。<br>
                    <br>
                    一直好奇大家在咖啡廳一人工作是什麼樣的情況？

                </div>
                <div class="issue-box" style="margin-bottom: 20px;">

                                                陳依琳的問題也是我常遇到的問題呢~<br>
                    一個人要離開真的不太方便，特別是帶筆電，<br>
                    至於待上一整天，我會選服務比較親切的咖啡廳，請店員幫忙顧一下~(心裡還是會怕怕的)<br>
                    <br>
                    至於餐點~我多半會點全餐(有飲料+正餐+點心)，可以慢慢吃一個下午~<br>
                    免得工作到累了~桌上空空的心裡很空虛<br>
                    <br>
                    有時約朋友一起去工作或看書，東西有人顧了~結果朋友就聊起天來也好困擾~<br>

                </div>

                <div class="issue-box">

                    <form method="post" action="/reply-post" style="margin: 0;">
                        <textarea placeholder="回覆內容..." class="form-control" style='height: 200px; margin-bottom: 15px;' name='content' required></textarea>

                        {{csrf_field()}}
                        <input type='submit' value='Comment' class="btn btn-primary btn-lg btn-block" onclick="this.disabled=true; this.value='處理中，請稍候...'; this.form.submit();">
                    </form>

                </div>


            </div>
            <div class="col-md-4">
                <a class="btn btn-default btn-block _size-20" href='#'>Close Issue</a>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
