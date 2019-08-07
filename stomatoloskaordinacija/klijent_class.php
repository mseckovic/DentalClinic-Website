<?php // pocetak php koda

class Klijent{ // pocetak klase klijent 
    
    public $ime;//definisemo atribut klase IME koji ce iz html formu da uzima vrednost koju korisnik unese u html polje ime koje se nalazi u registracija
    public $prezime;//definisemo atribut klase PREZIME koji ce iz html forme da uzime vrednost koju korisnik unese u html polje prezime koje se nalazi u registracija
    public $pol;//definisemo atribut klase POL koji ce iz html formu da uzima vrednost koju korisnik unese u html polje ime koje se nalazi u registracija
    public $email;//definisemo atribut klase Email koji ce iz html formu da uzima vrednost koju korisnik unese u html polje ime koje se nalazi u registracija
    public $username;//definisemo atribut klase USERNAME koji ce iz html formu da uzima vrednost koju korisnik unese u html polje ime koje se nalazi u registracija
    public $password;//definisemo atribut klase PASSWORD koji ce iz html formu da uzima vrednost koju korisnik unese u html polje ime koje se nalazi u registracija
    public $conf_password;//definisemo atribut klase conf_password koji ce iz html formu da uzima vrednost koju korisnik unese u html polje ime koje se nalazi u registracija,polje za proveru password
    public $datum;//definisemo atribut klase Datum koji ce iz html formu da uzima vrednost koju korisnik unese u html polje ime koje se nalazi u registracija

    //ako u nekom slucaju koristimo private ili protected onda moramo da pravimo get i set metode 
    //razlika izmedju public,private i protected je 
    //public je svima dostupan i lako je zloupotrebiti podatke 
    //private je zasticen i nemogu im svi pristupiti,creator odredjuje ko moze da pristupi 
    //protected je zasticena ali mogu im svi pristupiti(ali moraju se praviti get i set metode )
    
    function __constructor(){}//prazan konstruktor on ne uzima podatke,niti atrubute klase,ali preko njega mozemo pozvati bilo koju funkciju iz klase,takodje moze pozvati i nasledjene funkcije iz druge klase,override ili overlord
    
    function proveraPassword($password,$conf_password){// pravimo funkciju koja ce da proverava da li je korisnik uneo password isto kao sto je uneo u polse conf_password odnosno polje potvrdite password
        if(!(isset($password)&& isset($conf_password)) && empty($password) && empty($conf_password)){
            //u ovoj if petlji proveravamo da je li password popunjen,prvo isset proverava da li je nesto uneto a empty proverava da li je polje prazno
            //ako nije unet password ili nije unet conf_password ili ako je prazan password ili ako je pazam conf_password
            echo "<script type='text/JavaScript'>alert('PROVERITE ISPRAVNOST PASSWORD-A');window.location='registracija.html'</script>";//uradi ovo 
            return false;
            //ovo u echo je JavaScript ona samo ispisuje obavestenje i vraca na registracija.html u ovom slucaju ce da vrati false da bih kasnije mogao da korisnim pri proveri za registrovanje 
        }else{
            return true;//ako je sve uredu onda vraca true vrednost i nastavlja sa izvrsavanjem skripte 
        }
        
    }//kraj funkcije proveraPassword
    function proveriMail($email){ // FUNKCIJA KAKO ARGUMENTE UZIMA ATRIBUT EMAIL U KOJEM JE SMESTENA VREDNOST IZ HTML FORME IZ REGISTRACIJE 
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){// AKO EMAIL NIJE DOBAR ONDA URADI SLEDECE
            echo "<script type='text/JavaScript'>alert('Proveri ispravnost email');window.location='registracija.html'</script>";//isto kao iza provera passworda funkcija
            return false; // vraca false 
        }else{
            return true;//vraca true ako je sve okej 
        }
    }// kraj funkcije proveriMail
    function registracija($ime,$prezime,$pol,$email,$username,$password,$conf_password,$datum){// pocetak funkcije za registraciju 
        $db = new mysqli('localhost','root','','zubnaordinacija');//povezivanje sa bazom podataka na objektno orijentisani nacin,pomocu konstruktora mysqli koji uzima 4. parametra prvi se odnosi na tip domena(localhost) , drugi se odnosi na username konekcije sa bazom podataka,treci se odnosi na password konekcije sa bazom podataka i ctvrti se odnosi na bazu podataka 
        if(mysqli_connect_errno()){// ako dodje do greske pri konekcije sledi 
            throw new exception("Doslo je do greske do konekcije sa bazom podataka",1);//izbacuje obavestenje(izuzetak) korisniku da se nemoze povezati sa bazom,ako je sve uredi ide dalje 
        }
        $select1 = "SELECT * FROM klijent where username = '$username';";// postavljamo upit koji proverava da li u bazi podataka postoji korinik sa istim username-mom
        $rezultat_select1 = $db->query($select1);//Pozivamo upit nad bazom podataka,preko funkcije za izvrsavanje upita QUERY 
        if(!$rezultat_select1){ //Proveravamo da li je sve uredu sa upitom ako nije sledi 
            throw new exception("Nesto nije useru sa upitom za username ",2);//ispisuje obavestenje(izuzetak) klijentu,u sturotnom ako nema greske onda funkcija nastavlja sa daljim izvrsavanjem 
        }
        if($rezultat_select1->num_rows > 0){ // ako postoji korisnik sa istim username u bazi podataka u tabeli klijent onda izvrsava sledece
            echo "<script type='text/JavaScript'>alert('Username vec postoji ');</script>";//postavice alert da korinik vec postoji 
        }
        if($this->proveriMail($email) == false && $this->proveriPassword($password,$conf_password) == false ){// proverava da li su mail i passowrd uredu ako nisu 
            echo "Niste uneli lepo password ili email,proverite podatke";//uradice ovaj ispis
        }
        elseif($rezultat_select1->num_rows <= 0){//ako nema klijenta sa tim imenom onda uradi sledece 
            $insert1 = "Insert into klijent(username,password,imeK,prezimeK,email,pol,datum_rodjenja)
            VALUES('$username','$password','$ime','$prezime','$email','$pol','$datum');"; // upisi podatke u tabelu klijent,NAPOMENA mora istim redosledom kao sto je definisano u navicatu zato sto ovo sve salje kao asocijativni niz 
            $rezultat_insert1 = $db->query($insert1);//izvrsavanje upita
            if(!$rezultat_insert1){// proverava da li je sve uredu sa upitom 
                echo "Error"."ar".$db->error;//da je kompletno obavesteje sta nije uredu sa upitamo 
            }
        }
        $_SESSION['username'] = $username;//smestanje promenjive username u sessiju pod nazivom username 
        //ovo pod jednostrukim navodnicima je naziv sesisije ['username']-naziv sesije  
        echo "<legend style='color:White;'>Vasi licni podaci</legend>";//ispisujemo obicnu poruku u legend 
        echo "<p>Vase ime: ".$ime."<br/>";//ispisujemo ime 
        echo "<p>Vase prezime: ".$prezime."<br/>"; // uspisujemo prezime 
        echo "<p>Vase pol: ".$pol."<br/>";// ispisujemo pol
        echo "<p>Vase email: ".$email."<br/>"; // ispisujemo email
        echo "<p>Vase username: ".$username."<br/>"; // ispisujemo username
        echo "<p>Vase password: ".$password."<br/>"; // ispisujemo password
        echo "<p>Vase datum rodjenja: ".$datum."<br/>"; // ispisusjemo datum rodjenja 
        //za ovo ispisivanje mozete da dodate nove dve klase pa preko njih da stilizujete,ali onda ce localhost malo bagovati trebace mu vremena da obrise sve iz cache memorije.najlakse je da definisete style na licu mesta kako sto sam ja za legend 
    }//kraj funkcije za registraciju  
    function login($username,$password){// pocetak funkcije logovanje sa dva parametra 
        $db = new mysqli('localhost','root','','zubnaordinacija');//pravimo konekciju preko mysqli konstruktora sa 4. parametra 
        if(mysqli_connect_errno()){ // proveravamo da li je konekcija uspostavljena 
            throw new exception("Greska prilikom konekcije na bazu podataka !!!",3);
        }
         $loginQuery = "SELECT * FROM klijent WHERE username = '$username' and password = '$password';";// postavljanje upita da proverimo da li korisnik postoji pod tim username i password-om
            $rezultat = $db->query($loginQuery); // izvrsavanje upita 
            if($rezultat->num_rows>0){ // ako postoji korisnik sa tim username i tim passwordom koji je uneo 
                while($row = $rezultat->fetch_assoc()){ // sve dok ima redova u tabeli 
                    $_SESSION['username'] = $row['username']; // smestamo username iz baze u sesiju
                    
                    echo "<p><legend style='color:White;'>USPEŠNO STE SE LOGOVALI</legend> <br/> 
                           Ime: " . $row['imeK'] . "<br/>";//ispisujemo ime iz baze
                    echo " Prezime: " . $row['prezimeK'] . "<br/>"; // ispisujemo prezime iz baze 
                    echo " Datum rođenja: " . $row['email'] . "<br/>"; // ispisujemo email iz baze 
                    echo " Pol: " . $row['pol'] . "<br/>"; // ispisujemo pol iz baze 
                    echo " Email: " . $row['username'] . "<br/>";// ispisujemo username iz baze 
                    echo " username: " . $row['datum_rodjenja'] . "<br/>"; // ispisujemo datum rodjenja iz baze 
                    echo " Password: " . $row['password']. "<br/>";// ispisujemo passsword iz baze 
                    echo " Broj zakazanih pregleda: " . $row['broj_zakazivanja']. "<br/>";// ispisujemo broj zakazanih pregleda iz baze 
                    echo "<br/>";//break line 
                    echo "<hr/>";//crta 
                    echo "Trenutni datum i vreme: ".date("Y-m-d H:i:s");// trenutno vreme i datum u formatu godina mesec dan sati minuti sekunde
                   
                }
            }elseif($rezultat->num_rows<=0){ // ako ne postoji korisnik u bazi 
              
                echo "<p>NALOG NE POSTOJI, PROBAJTE PONOVO !</p>";//ispisuje obavestenje da korisnik ne postoji i da proba ponovo
                return false; // vraca netacno ako nesto nije uredu sa logovanjem 
                
            }
        $db->close(); // zatvaranje baze  |OBAVEZNO !!!! |
        return true;// vraca tacno ako je sve okej
        
    }
    function zakaziTermin($username,$doktor,$lokacija,$datum){ // pocetak funkcije zakazi termin 
        $id_lokacija; // setujemo promenjivu id_lokacija
        $db = new mysqli('localhost','root','','zubnaordinacija');
        if(mysqli_connect_errno()){
            echo "Greska !!!";
        }
        $upit1 = "Select * from pregled where username='$username' and datum_pregleda='$datum';";
        $rezultatUpit1 = $db->query($upit1);
        if(!$rezultatUpit1){
            echo "Greska u upitu nad bazom podataka";
        }
        if($rezultatUpit1->num_rows > 0){
            
        }else if($rezultatUpit1->num_rows <= 0){
            
            $selectDoktor = "Select * from doktor where strucna_sprema = '$doktor';";
            $rezultatSelect = $db->query($selectDoktor);
            if(!$rezultatSelect){
                echo "GRESKA !!! ";
            }
            if($rezultatSelect->num_rows > 0){
                while($row=$rezultatSelect->fetch_assoc()){
                    $id_Doktor = $row['ID_doktor'];
                }
            }
            
            
            $selectLokacija = "SELECT * FROM ordinacija where adresa = '$lokacija';";
            $rezultatSelect1 = $db->query($selectLokacija);
            if(!$rezultatSelect1){
                echo "Greska !!!";
            }
            if($rezultatSelect1->num_rows > 0){
                while($row2 = $rezultatSelect1->fetch_assoc()){
                    $id_lokacija = $row2['ID_ordinacija'];
                }
            }
            
            $insert1 = 
            "INSERT INTO pregled(username,ID_doktor,datum_pregleda,ID_ordinacija)
            VALUES('$username','$id_Doktor','$datum','$id_lokacija');";
            $rezultat = $db->query($insert1);
            if(!$rezultat){
                echo "DIE";
            }
        }
        $insertPopust="insert into popust(username)value('$username');";
        $rezultatInser = $db->query($insertPopust) or die("DIE DIE");
        
        $updatePopust = "Update popust inner join klijent 
        on popust.username = klijent.username
        set popusti = 
        case 
        when broj_zakazivanja > 5 then 10
        when broj_zakazivanja > 10 then 20
        end 
        where klijent.username = '$username';
        ";
        $rezultatUpdate= $db->query($updatePopust);
        if(!$rezultatUpdate){
             echo "DIE";
        }
        $update2 = "update klijent set broj_zakazivanja = broj_zakazivanja + 1 where username = '$username';";
        $db->query($update2) or die("UMRO !!!");
        
        
        
        $selectInner = 
        "Select * from klijent k inner join pregled p
        on k.username = p.username 
        inner join ordinacija o 
        on p.ID_ordinacija = o.ID_ordinacija
        inner join doktor d 
        on p.ID_doktor = d.ID_doktor
        inner join popust po
        on k.username = po.username
        where k.username = '$username' limit 0,1;
        ";
        $rezultatSelectInner = $db->query($selectInner);
        if(!$rezultatSelectInner){
            echo "greska DIE DIE DIE !!!!".$db->error;
        }
        if($rezultatSelectInner->num_rows > 0){
            while($row3 = $rezultatSelectInner->fetch_assoc()){
                
                echo "<div style='background-color:#2b96cc; color:white;font-weight:bold;float:left;width:350px;margin-bottom:10px;margin-left:30px;'>";
                echo "<legend style='padding-top:10px;padding-left:10px;'>Vaše lične informacije</legend>";
                echo "<p style='padding-left:10px;'>Ime: ".$row3['imeK']."<br/>";
                echo "Prezime: ".$row3['prezimeK']."<br/>";
                echo "Email: ".$row3['email']."<br/>";
                echo "Pol: ".$row3['pol']."<br/>";
                echo "Username: ".$row3['username']."<br/>";
                echo "Password: ".$row3['password']."<br/>";
                echo "Broj zakazivanja: ".$row3['broj_zakazivanja']."<br/>";
                echo "Datum rodjenja: ".$row3['datum_rodjenja'];
                echo "<hr/>";
                echo "Trenutno vreme i datum: ".date("Y-m-d H:i:s");
                echo "</p></div>";
                
                echo "<div style='background-color:#2b96cc; color:white;font-weight:bold;float:left;width:350px;margin-left:10px;margin-bottom:10px;'>";
                echo "<legend style='padding-top:10px;padding-left:10px;'>Informacije o lekaru</legend>";
                echo "<p style='padding-left:10px;'>Ime: ".$row3['ime']."<br/>";
                echo "Prezime: ".$row3['prezime']."<br/>";
                echo "Strucna sprema: ".$row3['strucna_sprema']."<br/>";
                echo "<br/><br/><br/><br/><br/>";
                echo "<hr/>";
                echo "Trenutno vreme i datum: ".date("Y-m-d H:i:s");
                echo "</p></div>";
                
                echo "<div style='background-color:#2b96cc; color:white;font-weight:bold;float:left;width:350px;margin-left:10px;margin-bottom:10px;'>";
                echo "<legend style='padding-top:10px;padding-left:10px;font-size:19.5px;'>Informacije o zakazanom pregledu</legend>";
                echo "<p style='padding-left:10px;'>Datum pregleda: ".$row3['datum_pregleda']."<br/>";
                echo "Lokacija pregleda: ".$row3['adresa']."<br/>";
                $cenaPregleda = 1500 * $row3['broj_zakazivanja'];
                
                $popust = $cenaPregleda * ($row3['popusti']/100);
                
                $ukupnaCena = $cenaPregleda - $popust; 
                echo "Cena pregleda: ".$cenaPregleda."<br/>";
                echo "Ukupna cena sa popustom: ".$ukupnaCena."<br/>";
                echo "<br/>";
                echo "<br/><br/><br/>";
                echo "<hr/>";
                echo "Trenutno vreme i datum: ".date("Y-m-d H:i:s");
                echo "</p></div>";
                
            }
        }
        
    }// kraj funkcije zakazi termin 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}// kraj klase klijent

//kraj php koda
?>