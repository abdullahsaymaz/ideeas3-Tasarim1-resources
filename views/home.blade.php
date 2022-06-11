@extends('layouts.app')

@section('content')
    <div class="section container mt-5">
        <div class="section-title h2 pb-2">
            <span class="st-fill">Kontrol paneli</span>&nbsp;
        </div>
        <div class="section-content row py-2 m-0">

            <?php

            $option_href = array(
                'product_performance',
                'product_performance_compare',
                'income_report',
                'sales_report',
                'customer_sales_report',
                'customer_report',
                'most_sold_report'
            );

            $option_icons = array(
                '<i class="fa-brands fa-cloudscale"></i>',
                '<i class="fa-solid fa-scale-unbalanced-flip"></i>',
                '<i class="fa-solid fa-sack-dollar"></i>',
                '<i class="fa-brands fa-sellsy"></i>',
                '<i class="fa-solid fa-cart-shopping"></i>',
                '<i class="fa-solid fa-people-group"></i>',
                '<i class="fa-solid fa-ranking-star"></i>'
            );

            $option_title = array(
                'Ürün performansları',
                'Ürün performanslarını karşılaştır',
                'Gelir raporu',
                'Satış raporu',
                'Müşterilere göre sipariş raporu',
                'Müşteri raporu',
                'En çok satış/kazanç vs. getiren ürünler'
            );

            $option_extra = array();

            $option_inline_extra = array();

            for($i = 0;$i < count($option_icons);$i++)
            {
                echo '

                    <a class="section-option col-sm-4 col-lg-2 p-3 d-block" href="' . URL::to('/') . '/' . $option_href[$i] . '" '
                        .($option_inline_extra[$option_title[$i]] ?? ' ') . '>
                        <div class="so-icon h1 d-flex align-items-center justify-content-center mb-3">
                            ' . $option_icons[$i] . '
                        </div>
                        <div class="so-title text-center">
                            ' . $option_title[$i] . '
                        </div>
                        ' . ($option_extra[$option_title[$i]] ?? ' ') . '
                    </a>

                ';
            }

            ?>

        </div>
    </div>
    <div class="section container" style="margin-top: 100px;">
        <div class="section-title h2 pb-2">
            <span class="st-fill">Başlık</span>&nbsp;
        </div>
        <div class="section-content row py-2 m-0">

            <?php

            $option_href = array(
                'products',
                'dealers',
                'send_offer',
                'offers'
            );

            $option_icons = array(
                '<i class="fa-solid fa-box"></i>',
                '<i class="fa-solid fa-users"></i>',
                '<i class="fa-solid fa-paper-plane"></i>',
                '<i class="fa-solid fa-envelopes-bulk"></i>'
            );

            $option_title = array(
                'Ürünler',
                'Bayiler',
                'Teklif gönder',
                'Teklifler'
            );

            $option_extra = array();

            $option_inline_extra = array();

            for($i = 0;$i < count($option_icons);$i++)
            {
                echo '

                            <a class="section-option col-sm-4 col-lg-2 p-3 d-block" href="' . URL::to('/') . '/' . $option_href[$i] . '" '
                                 .($option_inline_extra[$option_title[$i]] ?? ' ') . '>
                                <div class="so-icon h1 d-flex align-items-center justify-content-center mb-3">
                                    ' . $option_icons[$i] . '
                                </div>
                                <div class="so-title text-center">
                                    ' . $option_title[$i] . '
                                </div>
                                ' . ($option_extra[$option_title[$i]] ?? ' ') . '
                            </a>

                ';
            }

            ?>

        </div>
    </div>
    <div class="section container" style="margin-top: 100px;">
        <div class="section-title h2 pb-2">
            <span class="st-fill">Kullanıcı</span>&nbsp;
        </div>
        <div class="section-content row py-2 m-0">

            <?php

            $option_href = array(
                'user',
                'admin'
            );

            $option_icons = array(
                '<i class="fa-solid fa-user"></i>',
                '<i class="fa-solid fa-user-gear"></i>'
            );

            $option_title = array(
                'Bilgiler',
                'Admin'
            );

            $option_extra = array();

            $option_inline_extra = array();

            for($i = 0;$i < count($option_icons);$i++)
            {

                echo '

                            <a class="section-option col-sm-4 col-lg-2 p-3 d-block" href="' . URL::to('/') . '/' . $option_href[$i] . '" '
                                .($option_inline_extra[$option_title[$i]] ?? ' ') . '>
                                <div class="so-icon h1 d-flex align-items-center justify-content-center mb-3">
                                    ' . $option_icons[$i] . '
                                </div>
                                <div class="so-title text-center">
                                    ' . $option_title[$i] . '
                                </div>
                                ' . ($option_extra[$option_title[$i]] ?? ' ') . '
                            </a>

                ';

            }

            ?>

            <a class="section-option col-sm-4 col-lg-2 p-3 d-block" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <div class="so-icon h1 d-flex align-items-center justify-content-center mb-3">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
                <div class="so-title text-center">
                    Çıkış
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>

        </div>
    </div>
@endsection
