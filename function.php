<?php

function random_ua() {
    $tiposDisponiveis = array("Chrome", "Firefox", "Opera", "Explorer");
    $tipoNavegador = $tiposDisponiveis[array_rand($tiposDisponiveis)];
    switch ($tipoNavegador) {
        case 'Chrome':
            $navegadoresChrome = array("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36",
                'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36',
                'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36',
                'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36',
                'Mozilla/5.0 (iPhone; CPU iPhone OS 14_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
                'Mozilla/5.0 (iPad; CPU OS 14_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
                'Mozilla/5.0 (iPod; CPU iPhone OS 14_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
                'Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36',
                'Mozilla/5.0 (Linux; Android 10; SM-A205U) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36',
                'Mozilla/5.0 (Linux; Android 10; SM-A102U) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36',
                'Mozilla/5.0 (Linux; Android 10; SM-G960U) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36',
                'Mozilla/5.0 (Linux; Android 10; SM-N960U) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36',
            );
            return $navegadoresChrome[array_rand($navegadoresChrome)];
            break;
        case 'Firefox':
            $navegadoresFirefox = array("Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0",
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 11.1; rv:84.0) Gecko/20100101 Firefox/84.0',
                'Mozilla/5.0 (X11; Linux i686; rv:84.0) Gecko/20100101 Firefox/84.0',
                'Mozilla/5.0 (Linux x86_64; rv:84.0) Gecko/20100101 Firefox/84.0',
                'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:84.0) Gecko/20100101 Firefox/84.0',
                'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:84.0) Gecko/20100101 Firefox/84.0',
                'Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:84.0) Gecko/20100101 Firefox/84.0',
                'Mozilla/5.0 (iPhone; CPU iPhone OS 11_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/30.0 Mobile/15E148 Safari/605.1.15',
                'Mozilla/5.0 (iPad; CPU OS 11_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/30.0 Mobile/15E148 Safari/605.1.15',
                'Mozilla/5.0 (iPod touch; CPU iPhone OS 11_1 like Mac OS X) AppleWebKit/604.5.6 (KHTML, like Gecko) FxiOS/30.0 Mobile/15E148 Safari/605.1.15',
                'Mozilla/5.0 (Android 11; Mobile; rv:68.0) Gecko/68.0 Firefox/84.0',
                'Mozilla/5.0 (Android 11; Mobile; LG-M255; rv:84.0) Gecko/84.0 Firefox/84.0',
            );
            return $navegadoresFirefox[array_rand($navegadoresFirefox)];
            break;
        case 'Opera':
            $navegadoresOpera = array("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 OPR/73.0.3856.329",
                'Mozilla/5.0 (Windows NT 10.0; WOW64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 OPR/73.0.3856.329',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 OPR/73.0.3856.329',
                'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 OPR/73.0.3856.329',
                'Mozilla/5.0 (Linux; Android 10; VOG-L29) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36 OPR/61.1.3076.56625',
                'Mozilla/5.0 (Linux; Android 10; SM-G970F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36 OPR/61.1.3076.56625',
                'Mozilla/5.0 (Linux; Android 10; SM-N975F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36 OPR/61.1.3076.56625',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
        case 'Explorer':
            $navegadoresExplorer = array("Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko",
                'Mozilla/5.0 (Windows NT 6.2; Trident/7.0; rv:11.0) like Gecko',
                'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko',
                'Mozilla/5.0 (Windows NT 10.0; Trident/7.0; rv:11.0) like Gecko',
                'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2)',
                'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)',
            );
            return $navegadoresExplorer[array_rand($navegadoresExplorer)];
            break;
    }
}
?>
