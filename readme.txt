Sveiki,

Aciu už suteikta galimybe tobuleti, Jusu užduotis tikrai priverte nemažai išmokti. 

Pasirinkau Backend, užduoti del to, kad tai mane labiau domina ir turiu daugiau patirties. 


Bonus - papildomi balai
Atlikta:
Projekta ikeliau i GitHub kartu SQL failais ir nearchyvuota, kaip ir prašete. Deja, nepatalpinau viešai, taciau jei domina, aplankykite mano svetaine www.montechristo.site 
prisijungimo duomenys:
vartotojo vardas: NFQakademija
slaptažodis: nfqftw

Pasirinkau BackEnd užduoti, nes tai labiau domina. 
Stengiausi, kur imanoma, išspresti viska SQL užklausomis. Pvz. laika eileje skirsciau pagal prieš klienta esancius id ir pagal specialisto pavadinima.
Lankytojo puslapiui panaudojau pavyzdi: https://www.w3schools.com/howto/howto_js_countdown.asp, siekdamas parodyti, kad truputi suprantu javascript. 
Naudoju framework Datatables savo lentelems, atsigulsiu pats, nemuškit. :) 

Igyvendinau:
Minimalus lygis:
Svetaine susidaro iš keturiu puslapiu
index.php -> registracijos forma naujiems klientams
aptarnavimas.php -> specialisams skirtas puslapis
svieslente.php -> skirta matyti neaptarnautiems klientams ir laikui iki ju priemimo.
lankytojo_puslapis.php -> lankytojas gali ivesti savo id, panaudojant GET metoda, parodomas laikas jam asmeniškai. 


 Administravimo puslapis, skirtas ivesti nauja klienta i eile (Klientas turi ivesti bent jau savo varda)
 Švieslentes puslapis skirtas rodyti greitai sulauksiancius klientus
 Specialisto puslapis, kur jis gali pažymeti, kad aptarnavo klienta
 

Techniniai kriterijai:

Yra failas duomenu bazes strukturai 
Yra failas prisijungimui prie duomenu bazes ( config file )
Panaudotas POST HTTP metodas (index.php -> line 5)
Panaudotas GET HTTP metodas (lankytojas_handler.php -> line 3 )
Irašoma i duomenu baze
Skaitoma iš duomenu bazes (su rikiavimu)
Ištrinimas iš duomenu bazes (WHERE salyga)
Keli budai atvaizduoti tuos pacius duomenis (LIMIT salyga)
(atlikta)  Panaudotas sudetingesne SQL struktura (kelios lenteles susietos ryšiais (1:daug))


Extra puslapis

Lankytojo puslapis, kur jis mato laika iki savo eiles 

Techniniai kriterijai:

Specialistui aptarnavus klienta, vietoj duomenu ištrynimo, pažymima, kad klientas aptarnautas
Švieslenteje rodomi tik neaptarnauti klientai

(atlikta nepilnai) Švieslenteje rodoma, kiek laiko liko klientui laukti (vidurkis pagal laukimo laika per specialista)
Lankytojas gaves nuoroda (ar ivedes savo numeri kažkokioje formoje) mato tik jam skirta laukti laika
(neprireike, nes naudojama countdown funkcija) Lankytojo puslapyje numatomas laikas patikslinamas kas 5s (JavaScript arba HTML meta)
Užregistravus nauja klienta turi išvesti Užregistruota sekmingai arba Ivyko klaida, kreipkites telefonu
 
3 lygio nelieciau, pritrukau laiko. 

Žinomi trukumai.
susipainiojau su laiko formatais, kadangi laiko aritmetiniams veiksmams nekonvertavau visko i sekundes (pvz.: prie datos pridejau minutes), puslapyje svieslente.php rodomi laikai yra neteisingi. Taciau jei pakeisite eilutes nuo 70 iki 74 svieslente.php puslapyje i :
-------
echo $trukme;
-------
pamatysite, kad laikas rodomas teisingas. 

Pritruko dienos kad pabaigti (Jusu el. laiška pamaciau tik antradienio vakare), prašau, atsižvelkite.  

Pagarbiai, 
Karolis Petrikas








 

 