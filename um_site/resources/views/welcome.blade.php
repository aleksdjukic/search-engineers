<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raziskovalci EU</title>
    <meta property="og:title"
          content="Raziskovalci EU">
    <meta property="og:image" content="https://xxx/resources/images/share-image.jpg">
    <meta property="og:url" content="https://xxx/sr">
    <meta name="og:description"
          content="xxx">
    <meta name="description"
          content="xxx">
    <meta name="author" content="Raziskovalci">
    <link rel="mask-icon" href="" color="#AFDFE4">
    <meta name="msapplication-config" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Raziskovalci">
    <meta property="og:image:alt" content="Image">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="keywords" content="Raziskovalci"/>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-navbutton-color" content="#006385">
    <meta name="apple-mobile-web-app-status-bar-style" content="#006385">
    <meta name="theme-color" content="#AFDFE4">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
</head>
<body>
<div class="s009">
    <div class="container clear-top">
        <div class="row mb-3 align-items-end">
            <div class="col-sm-12 text-center">
                <h1 class="title">Raziskovalci</h1>
            </div>
        </div>
        <div class="row mb-5 align-items-end">
            <div class="col-12">
                <form>
                    <div class="inner-form">
                        <div class="basic-search">
                            <div class="input-field">
                                <input id="search" type="text"
                                       placeholder="Vnesite ime, priimek ali šifro ARRS (neobvezno polje)"/>
                                <div class="icon-wrap">
                                    <svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true"
                                         data-prefix="fas" data-icon="search" role="img"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="advance-search">
                            <span class="desc">ADVANCED SEARCH</span>
                            <div class="row">
                                <div class="input-field">
                                    <div class="input-select">
                                        <select data-trigger="" name="choices-single-defaul">
                                            <option placeholder="" value="">Izberi ...</option>
                                            <option value="RSR">Raziskovalec</option>
                                            <option value="YNG">Mladi raziskovalec</option>
                                            <option value="EXP">Raziskovalec v tujini</option>
                                            <option value="TCH">Strokovni ali tehnični sodelavec</option>
                                            <option value="PRI">Zasebni raziskovalec</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <div class="input-select">
                                        <select data-trigger="" name="choices-single-defaul">
                                            <option placeholder="" value="">Izberi ...</option>
                                            <option value="ACT">Aktiven</option>
                                            <option value="RET">Upokojen</option>
                                            <option value="RIP">Pokojni</option>
                                            <option value="NAC">Neaktiven</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <div class="input-select">
                                        <select data-trigger="" name="choices-single-defaul">
                                            <option placeholder="" value="">Izberi ...</option>
                                            <option value="BCB">Diploma (1. Bolonjska stopnja)</option>
                                            <option value="BC[D1]">Diploma</option>
                                            <option value="MSB">Magisterij (2. Bolonjska stopnja)</option><option value="SPC">Specializacija</option>
                                            <option value="MS[D1]">Magisterij</option><option value="DOD">Doktorat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row second">
                                <div class="input-field">
                                    <div class="input-select">
                                        <select data-trigger="" name="choices-single-defaul">
                                            <option placeholder="vedo" value="">Izberi vedo ...</option>
                                            <option value="1">1 Naravoslovje</option>
                                            <option value="2">2 Tehnika</option>
                                            <option value="3">3 Medicina</option>
                                            <option value="4">4 Biotehnika</option>
                                            <option value="5">5 Družboslovje</option>
                                            <option value="6">6 Humanistika</option>
                                            <option value="7">7 Interdisciplinarne raziskave</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <div class="input-select">
                                        <select data-trigger="" name="choices-single-defaul">
                                            <option placeholder="" value="">Izberi področje ...</option>
                                            <option>Last time</option>
                                            <option>Today</option>
                                            <option>This week</option>
                                            <option>This month</option>
                                            <option>This year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <div class="input-select">
                                        <select data-trigger="" name="choices-single-defaul">
                                            <option placeholder="" value="">Izberi podpodročje ...</option>
                                            <option>Subject b</option>
                                            <option>Subject c</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row third">
                                <div class="input-field">
                                    <div class="result-count">
                                        <span>108 </span>results
                                    </div>
                                    <div class="group-btn">
                                        <button class="btn-delete" id="delete">RESET</button>
                                        <button class="btn-search">SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div id="footer">
    <div class="container">
        <div class="row mb-3 mu-row-text align-items-end">
            <div class="col-sm-12 p-3 container text-center border rounded mu-border-text">
                <p class="mt-2">Podpora razvoja regionalnega inovacijskega sistema za Vzhodno Slovenijo (št. operacije OP20.04346/3,
                    2019-2022, MIZŠ Republike Slovenije, Evropski strukturni in investicijski skladi).
                </p>
                <p>The activities were realized through the work of the program group P6-0372 (Slovenska identiteta in
                    kulturna zavest v jezikovno in etnično stičnih prostorih v preteklosti in sedanjosti).</p>
            </div>
        </div>

    </div>
    <div class="row mb-3 align-items-center mu-row-text ">
        <div class="col-sm-12 col-lg-4 text-center">
            <img class="img-fluid footer-logo"
                 src="{{ asset('assets/images/republika-slovenija-ministrstvo-za-izobrazevanje.png') }}" alt="">
        </div>
        <div class="col-sm-12 col-lg-4 text-center">
            <img class="img-fluid footer-logo" src="{{ asset('assets/images/logo.svg') }}" alt="">
        </div>
        <div class="col-sm-12 col-lg-4 text-center">
            <img class="img-fluid footer-logo" src="{{ asset('assets/images/evropska-unija-socialni-sklad.png') }}" alt="">
        </div>
    </div>

</div>

<script src="{{ asset('assets/js/extention/choices.js') }}"></script>
<script>
    const customSelects = document.querySelectorAll("select");
    const deleteBtn = document.getElementById('delete')
    const choices = new Choices('select',
        {
            searchEnabled: false,
            itemSelectText: '',
            removeItemButton: true,
        });
    deleteBtn.addEventListener("click", function (e) {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++) {
            deleteAll[i].click();
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
