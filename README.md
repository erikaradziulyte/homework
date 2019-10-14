## Funkcijos

calculateHomeWorkSum: prints 6.2 nes nera nustatyto kintamuju tipo, todel visi argumentai verciami i skaitines reiksmes.
Nfq\Akademija\NotTyped\calculateHomeWorkSum: prints 6 , argumentai gali ateiti bet kokie, taciau rezultatas grazinamas sveikasis skaicius, todel 6.2 paverciamas i 6.
Nfq\Akademija\Soft\calculateHomeWorkSum: prints 6, nes jau argumentai paverciami i sveikaji skaiciu, todel argumentas 2.2 paverciamas i 2
Nfq\Akademija\Strict\calculateHomeWorkSum: prints 0, nes nepriema argumentu ne sveikuju skaiciu. Iskart fiksuoja TypeError ir grazina 0
