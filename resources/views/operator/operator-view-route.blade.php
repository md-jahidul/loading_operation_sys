<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <!---- font設定 ---->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700%7CNoto+Serif+JP:400,500,700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700%7CNoto+Serif+JP:400,500,700&display=swap" media="print" onload="this.media='all'" />
    <!---- CSS設定 ---->
    <link rel="stylesheet" href="{{ asset('assets/css/main/main.css') }}">
</head>

<body>
    <div class="page_top l-page f_yc" id="page_operator">
        <div class="l-page__inner">
            <header>
                オペレータID：{{ $id }}　
{{--                名前：{{ operator_name }}--}}
            </header>

            <form action="{{ url("operator-change-status/$id") }}" method="post">
                @csrf
                @method('post')
                <section class="main">
                    <div class="sec-main">
                        <div class="sec-main__inner">
                            <div class="slips__wrap wrap x_start">
                                @foreach($data as $index => $item)
                                    <label for="loadingData[{{ $index }}]" class="slip_elem f_xc column txt_sm">
                                        <input type="radio" value="{{ $item->id }}" name="loadingData" class="" id="loadingData[{{ $index }}]" style="display: none;">
                                        <p class="vehicle_number"><b>{{ $item->vehicle_number }}</b></p>
                                        <div class="between">
                                            <p class="product_name"><b>{{ $item->product_name_code }}</p></b>
                                            <p class="product_amount">{{ $item->specified_quantity }}</p>
                                        </div>
                                        <p class="delivery_name"><b>{{ $item->masterDelivery['delivery_name'] ?? null }}</b></p>
                                    </label>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </section>
                <footer>
                    <div class="sec__inner">
                        <div class="btn__wrap x_end">
                            <a class="w20p f_cc txt_md" href="">全製品表示</a>
                            <a class="w20p f_cc txt_md" href="">品目選択</a>
                            <button type="submit" class="w30p f_cc txt_lg" href="">決定</button>
                            <a class="w10p f_cc txt_md" href="">前項</a>
                            <a class="w10p f_cc txt_md" href="">次項</a>
                        </div>
                    </div>
                </footer>
            </form>

        </div>
    </div>
</body>

</html>
