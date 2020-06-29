<!--  
function initArray() {  
  this.length = initArray.arguments.length  
  for (var i = 0; i < this.length; i++)  
  this[i+1] = initArray.arguments[i]  
}  
 
function havinev(ev,ho,nap) {  
if (ho==1)  
  { var napok = new initArray("Az ÚJÉV első napja, Fruzsina neve","Ábel","Genovéva és Benjámin", 
        "Titusz és Leona","Simon","Boldizsár","Attila és Ramóna","Gyöngyvér","Marcell", 
        "Melánia","Ágota","Ernő","Veronika","Bódog","Lóránt és Loránd",
        "Gusztáv","Antal és Antónia","Piroska","Sára és Márió","Fábián és Sebestyén",
        "Ágnes","Vince és Artúr","Zelma és Rajmund","Timót","Pál","Vanda és Paula",
        "Angelika","Károly és Karola","Adél","Martina és Gerda","Marcella","") }  
if (ho==2)  
  { var napok=new initArray("Ignác","Karolina, Aida","Balázs","Ráhel, Csenge", 
        "Ágota, Ingrid","Dorottya, Dóra","Tódor, Rómeó","Aranka","Abigél, Alex","Elvira",  
        "Bertold, Marietta","Lívia, Lídia","Ella, Linda","Bálint, Valentin",  
        "Kolos, Georgina","Julianna, Lilla","Donát","Bernadett","Zsuzsanna",  
        "Aladár, Álmos","Eleonóra","Gerzson","Alfréd",  
        "Mátyás","Géza","Edina","Ákos, Bátor","Elemér","","")  }  
if (ho==3)  
  { var napok=new initArray("Albin","Lujza","Kornélia","Kázmér","Adorján és Adrián",
        "Leonóra és Inez","Tamás","Nemzetközi nőnap, egyébként Zoltán","Franciska és Fanni","Ildikó",
        "Szilárd","Gergely","Krisztián és Ajtony","Matild","NEMZETI ÜNNEP, Kristóf",
        "Henrietta","Gertrúd és Patrik","Sándor és Ede","József és Bánk","Klaudia",
        "Benedek","Beáta és Izolda","Emoke","Gábor és Karina","Irén és Irisz",
        "Emánuel","Hajnalka","Gedeon és Johanna","Auguszta","Zalán","Árpád","" ) } 
if (ho==4)  
  { var napok=new initArray("Hugó","Áron","Buda és Richárd","Izidor","Vince",
        "Vilmos és Bíborka","Herman","Dénes","Erhard","Zsolt","Leó és Szaniszló","Gyula",
        "Ida","Tibor","Anasztázia és Tas","Csongor","Rudolf","Andrea és Ilma","Emma",
        "Tivadar","Konrád","Csilla és Noémi","Béla","György","Márk","Ervin",
        "Zita","Valéria","Péter","Katalin és Kitti","" )} 
if (ho==5)  
  { var napok=new initArray("A MUNKA ÜNNEPE egyébként Fülöp és Jakab","Zsigmond","Tímea és Irma",
        "Mónika és Flórián","Györgyi","Ivett és Frida","Gizella","Mihály","Gergely",
        "Ármin és Pálma","Ferenc","Pongrác","Szervác és Imola","Bonifác",
	"Gólya nap! Zsófia és Szonja neve","Mózes és Botond","Paszkál","Erik és Alexandra",
	"Ivó és Milán","Bernát és Felícia","Konstantin","Júlia és Rita","Dezső","Eszter és Eliza",
        "Orbán","Fülöp és Evelin","Hella","Emil és Csanád","Magdolna",
        "Janka és Zsanett","Angéla és Petronella","" )}  
if (ho==6)  
  { var napok=new initArray("Tünde","Kármen és Anita","Klotild","Bulcsú","Fatime",
        "Norbert és Cintia","Róbert","Medárd","Félix","Margit és Gréta","Barnabás",
        "Villo","Antal és Anett","Vazul","Jolán és Vid","Jusztin","Laura és Alida",
        "Arnold és Levente","Gyárfás","Rafael","Alajos és Leila","Paulina",
        "Zoltán","Iván","Vilmos","János és Pál","László","Levente és Irén",
        "Péter és Pál","Pál","" ) }  
if (ho==7)  
  { var napok=new initArray("Tihamér és Annamária","Ottó","Kornél és Soma","Ulrik",
        "Emese és Sarolta","Csaba","Appolónia","Ellák","Lukrécia","Amália",
        "Nóra és Lili","Izabella és Dalma","Jenő","Őrs és Stella","Henrik és Roland","Valter",
        "Endre és Elek","Frigyes","Emília","Illés","Dániel és Daniella",
        "Magdolna","Lenke","Kinga és Kincső","Kristóf és Jakab","Anna és Anikó",
        "Olga és Liliána","Szabolcs","Márta és Flóra","Judit és Xénia","Oszkár","" )}  
if (ho==8)  
  { var napok=new initArray("Boglárka","Lehel","Hermina","Domonkos és Dominika",
        "Krisztina","Berta és Bettina","Ibolya","László","Emod","Lörinc",
        "Zsuzsanna és Tiborc","Klára","Ipoly","Marcell","Mária","Ábrahám",
        "Jácint","Ilona","Huba","A MAGYAR ALKOTMÁNY ÜNNEPE, István","Sámuel és Hajna",
        "Menyhért és Mirjam","Bence","Bertalan","Lajos és Patrícia","Izsó",
        "Gáspár","Ágoston","Beatrix és Erna","Rózsa","Erika és Bella","") }  
if (ho==9)  
  { var napok= new initArray("Egyed és Egon","Rebeka és Dorina","Hilda","Rozália",
        "Viktor és Lorinc","Zakariás","Regina","Mária és Adrienn","Ádám","Nikolett és Hunor",
        "Teodóra","Mária","Kornél","Szeréna és Roxána","Enikő és Melitta","Edit",
        "Zsófia","Diána","Vilhelmina","Friderika","Máté és Mirella","Móric",  
        "Tekla","Gellért és Mercédesz","Eufrozina és Kende","Jusztina","Adalbert",
        "Vencel","Mihály","Jeromos","","" )}  
if (ho==10)  
  { var napok= new initArray("Malvin","Petra","Helga","Ferenc","Aurél","Brúnó és Renáta",
	"Amália","Koppány","Dénes","Gedeon","Brigitta","Miksa","Kálmán és Ede","Helén",
	"Teréz","Gál","Hedvig","Lukács","Nándor","Vendel","Orsolya","Előd",
	"Az 56-os Forradalom Ünnepe és Gyöngyi neve","Salamon","Blanka és Bianka","Dömötör","Szabina",
	"Simon és Szimonetta","Nárcisz","Alfonz","Farkas","" )}  
if (ho==11)  
  { var napok=new initArray("Marianna","Achilles","Győző","Károly","Imre","Lénárd",
        "Rezso","Zsombor","Tivadar","Réka","Márton","Jónás és Renátó","Szilvia",
        "Aliz","Albert és Lipót","Ödön","Hortenzia és Gergő","Jenő","Erzsébet",
        "Jolán","Olivér","Cecília","Kelemen és Klementina","Emma","Katalin",
        "Virág","Virgil","Stefánia","Taksony","András és Andor","" )}  
if (ho==12)  
  { var napok=new initArray("Elza","Melinda és Vivien","Ferenc és Olívia","Borbála és Barbara",
        "Vilma","Miklós","Ambrus","Mária","Natália","Judit","Árpád","Gabriella",
        "Luca és Otília","Szilárda","Valér","Etelka és Aletta","Lázár és Olimpia",
        "Auguszta","Viola","Teofil","Tamás","Zéno","Viktória","Ádám és Éva",
        "KARÁCSONY estéje és Eugénia","KARÁCSONY és István","János","Kamilla",
        "Tamás és Tamara","Dávid","Szilveszter","" ) }  
   return napok[nap]; 
}  
   
function honev(ho) {  
   var month = new initArray("Január","Február","Március","Április","Május",  
   "Junius","Július","Augusztus","Szeptember","Október","November","December");  
   return month[ho]  
   }  
   
function napnev(szam) {  
   var napok = new initArray("Vasárnap","Hétfő","Kedd","Szerda","Csütörtök", 
                             "Péntek","Szombat","Vasárnap")  
   return napok[szam]  
   }  
  
  var ido=new Date()  
  var ev=ido.getYear()  
  var ho=ido.getMonth()+1  
  var nap=ido.getDate()
  var ora=ido.getHours();
  if (ev<1900) ev+=1900;  
  if (ho<3)
    document.write("<font color=aaffff>");
  else if (ho<6)
    document.write("<font color=55ff88>");
    else if (ho<9)
      document.write("<font color=eeff00>");
      else if (ho<12)
        document.write("<font color=bbddee>");
        else
          document.write("<font color=ffffff>");
  if (ho==2, nap==29)
    document.writeln("Idén szökőévünk van, ma van " + honev(ho) + " " + nap + ".-e!")
  else if (ora>=0 && ora<4)
    document.writeln("Ma már "+napnev(ido.getDay()+1)+" van, "+honev(ho)+" "+nap+". <b>"+havinev(ev,ho,nap)+"</b> napja.");
    else if (ora<10)
      document.writeln("Ma reggel "+honev(ho)+" "+nap+". "+napnev(ido.getDay()+1)+" van, <b>"+havinev(ev,ho,nap)+"</b> napja.");
      else 
	document.writeln("Ma van "+honev(ho)+" "+nap+". "+napnev(ido.getDay()+1)+", <b>"+havinev(ev,ho,nap)+"</b> napja.");
document.write("</font>");   
//-->