Sveiki,

Aciu u� suteikta galimybe tobuleti, Jusu u�duotis tikrai priverte nema�ai i�mokti. 

Pasirinkau Backend, u�duoti del to, kad tai mane labiau domina ir turiu daugiau patirties. 


Bonus - papildomi balai
Atlikta:
Projekta ikeliau i GitHub kartu SQL failais ir nearchyvuota, kaip ir pra�ete. Deja, nepatalpinau vie�ai, taciau jei domina, aplankykite mano svetaine www.montechristo.site 
prisijungimo duomenys:
vartotojo vardas: NFQakademija
slapta�odis: nfqftw

Pasirinkau BackEnd u�duoti, nes tai labiau domina. 
Stengiausi, kur imanoma, i�spresti viska SQL u�klausomis. Pvz. laika eileje skirsciau pagal prie� klienta esancius id ir pagal specialisto pavadinima.
Lankytojo puslapiui panaudojau pavyzdi: https://www.w3schools.com/howto/howto_js_countdown.asp, siekdamas parodyti, kad truputi suprantu javascript. 
Naudoju framework Datatables savo lentelems, atsigulsiu pats, nemu�kit. :) 

Igyvendinau:
Minimalus lygis:
Svetaine susidaro i� keturiu puslapiu
index.php -> registracijos forma naujiems klientams
aptarnavimas.php -> specialisams skirtas puslapis
svieslente.php -> skirta matyti neaptarnautiems klientams ir laikui iki ju priemimo.
lankytojo_puslapis.php -> lankytojas gali ivesti savo id, panaudojant GET metoda, parodomas laikas jam asmeni�kai. 


 Administravimo puslapis, skirtas ivesti nauja klienta i eile (Klientas turi ivesti bent jau savo varda)
 �vieslentes puslapis skirtas rodyti greitai sulauksiancius klientus
 Specialisto puslapis, kur jis gali pa�ymeti, kad aptarnavo klienta
 

Techniniai kriterijai:

Yra failas duomenu bazes strukturai 
Yra failas prisijungimui prie duomenu bazes ( config file )
Panaudotas POST HTTP metodas (index.php -> line 5)
Panaudotas GET HTTP metodas (lankytojas_handler.php -> line 3 )
Ira�oma i duomenu baze
Skaitoma i� duomenu bazes (su rikiavimu)
I�trinimas i� duomenu bazes (WHERE salyga)
Keli budai atvaizduoti tuos pacius duomenis (LIMIT salyga)
(atlikta)  Panaudotas sudetingesne SQL struktura (kelios lenteles susietos ry�iais (1:daug))


Extra puslapis

Lankytojo puslapis, kur jis mato laika iki savo eiles 

Techniniai kriterijai:

Specialistui aptarnavus klienta, vietoj duomenu i�trynimo, pa�ymima, kad klientas aptarnautas
�vieslenteje rodomi tik neaptarnauti klientai

(atlikta nepilnai) �vieslenteje rodoma, kiek laiko liko klientui laukti (vidurkis pagal laukimo laika per specialista)
Lankytojas gaves nuoroda (ar ivedes savo numeri ka�kokioje formoje) mato tik jam skirta laukti laika
(neprireike, nes naudojama countdown funkcija) Lankytojo puslapyje numatomas laikas patikslinamas kas 5s (JavaScript arba HTML meta)
U�registravus nauja klienta turi i�vesti U�registruota sekmingai arba Ivyko klaida, kreipkites telefonu
 
3 lygio nelieciau, pritrukau laiko. 

�inomi trukumai.
susipainiojau su laiko formatais, kadangi laiko aritmetiniams veiksmams nekonvertavau visko i sekundes (pvz.: prie datos pridejau minutes), puslapyje svieslente.php rodomi laikai yra neteisingi. Taciau jei pakeisite eilutes nuo 70 iki 74 svieslente.php puslapyje i :
-------
echo $trukme;
-------
pamatysite, kad laikas rodomas teisingas. 

Pritruko dienos kad pabaigti (Jusu el. lai�ka pamaciau tik antradienio vakare), pra�au, atsi�velkite.  

Pagarbiai, 
Karolis Petrikas








 

 