<?php
session_start();

if(empty($_SESSION["message"])){
    header('Location:check_lang.php?message=EN');
}
if($_SESSION["message"] == "EN")
{
	include("eng.php");
}
else
{
	include("vn.php");
}


?>


<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "amasis";

  $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  mysqli_set_charset($objCon,"utf8");
/////////////////////////////1////////////////////////////////////////////

/////////////////////////////1////////////////////////////////////////////
  
$sqli1 = "SELECT * FROM select_img  where id = 0 ";
$objQuery1 = mysqli_query($objCon,$sqli1);
  $Result1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
  $res= $Result1['id_image'];


$sqli2 = "SELECT * FROM img_logis where id = $res " ;
$objQuery2 = mysqli_query($objCon,$sqli2);
$Result2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
/////////////////////////////1////////////////////////////////////////////
  
$sqli1 = "SELECT * FROM select_img  where id = 0 ";
$objQuery1 = mysqli_query($objCon,$sqli1);
  $Result1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
  $res= $Result1['id_image'];


$sqli2 = "SELECT * FROM img_logis where id = $res " ;
$objQuery2 = mysqli_query($objCon,$sqli2);
$Result2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
/////////////////////////////1////////////////////////////////////////////
  
  
$sqli43 = "SELECT * FROM select_img where id = 22 ";
$objQuery43 = mysqli_query($objCon,$sqli43);
  $Result43 = mysqli_fetch_array($objQuery43,MYSQLI_ASSOC);
  $res21= $Result43['id_image'];
  

    $sqli44 = "SELECT * FROM img_logis where id = $res21 " ;
    $objQuery44  = mysqli_query($objCon,$sqli44 );
    $Result44  = mysqli_fetch_array($objQuery44 ,MYSQLI_ASSOC);



    
////////////////////////////////2//////////////////////////////////////////
  
$sqli45 = "SELECT * FROM select_img where id = 23 ";
$objQuery45 = mysqli_query($objCon,$sqli45);
  $Result45 = mysqli_fetch_array($objQuery45,MYSQLI_ASSOC);
  $res22= $Result45['id_image'];
  

    $sqli46 = "SELECT * FROM img_logis where id = $res22 " ;
    $objQuery46  = mysqli_query($objCon,$sqli46 );
    $Result46  = mysqli_fetch_array($objQuery46 ,MYSQLI_ASSOC);

    //////////////////////////////3////////////////////////////////////////////
    $sqli47 = "SELECT * FROM select_img where id = 24 ";
    $objQuery47 = mysqli_query($objCon,$sqli47 );
      $Result47  = mysqli_fetch_array($objQuery47 ,MYSQLI_ASSOC);
      $res23= $Result47 ['id_image'];

    $sqli48 = "SELECT * FROM img_logis  where id =$res23" ;
    $objQuery48 = mysqli_query($objCon,$sqli48);
    $Result48= mysqli_fetch_array($objQuery48,MYSQLI_ASSOC);

    ///////////////////////////////4//////////////////////////////////////////
    $sqli49= "SELECT * FROM select_img where id = 25 ";
    $objQuery49 = mysqli_query($objCon,$sqli49);
      $Result49 = mysqli_fetch_array($objQuery49,MYSQLI_ASSOC);
      $res24= $Result49['id_image'];

    $sqli50= "SELECT * FROM img_logis  where id =$res24" ;
    $objQuery50 = mysqli_query($objCon,$sqli50);
    $Result50= mysqli_fetch_array($objQuery50,MYSQLI_ASSOC);

    /////////////////////////////5 ////////////////////////////////////////////
    $sqli51 = "SELECT * FROM select_img where id = 26";
    $objQuery51  = mysqli_query($objCon,$sqli51 );
    $Result51  = mysqli_fetch_array($objQuery51 ,MYSQLI_ASSOC);
      $res25= $Result51 ['id_image'];

    $sqli52 = "SELECT * FROM img_logis  where id =$res25" ;
    $objQuery52  = mysqli_query($objCon,$sqli52 );
    $Result52 = mysqli_fetch_array($objQuery52 ,MYSQLI_ASSOC);

        ////////////////////////////6////////////////////////////////////////////
        $sqli53  = "SELECT * FROM select_img where id = 27";
        $objQuery53  = mysqli_query($objCon,$sqli53 );
        $Result53  = mysqli_fetch_array($objQuery53 ,MYSQLI_ASSOC);
          $res26= $Result53 ['id_image'];
    
        $sqli54 = "SELECT * FROM img_logis  where id =$res26" ;
        $objQuery54 = mysqli_query($objCon,$sqli54);
        $Result54= mysqli_fetch_array($objQuery54,MYSQLI_ASSOC);
    


        /////////////////////////////7////////////////////////////////////////////
          
        $sqli55 = "SELECT * FROM select_img where id =28 ";
        $objQuery55 = mysqli_query($objCon,$sqli55);
          $Result55 = mysqli_fetch_array($objQuery55,MYSQLI_ASSOC);
          $res27= $Result55['id_image'];
          

            $sqli56 = "SELECT * FROM img_logis where id = $res27 " ;
            $objQuery56  = mysqli_query($objCon,$sqli56 );
            $Result56  = mysqli_fetch_array($objQuery56 ,MYSQLI_ASSOC);



    
////////////////////////////////8/////////////////////////////////////////
    $sqli57 = "SELECT * FROM select_img where id =29 ";
    $objQuery57 = mysqli_query($objCon,$sqli57);
      $Result57 = mysqli_fetch_array($objQuery57,MYSQLI_ASSOC);
      $res28= $Result57['id_image'];

    $sqli58 = "SELECT * FROM img_logis  where id =$res28" ;
    $objQuery58 = mysqli_query($objCon,$sqli58);
    $Result58= mysqli_fetch_array($objQuery58,MYSQLI_ASSOC);

    //////////////////////////////9///////////////////////////////////////////
    $sqli59 = "SELECT * FROM select_img where id = 30";
    $objQuery59 = mysqli_query($objCon,$sqli59);
      $Result59 = mysqli_fetch_array($objQuery59,MYSQLI_ASSOC);
      $res29= $Result59['id_image'];

    $sqli60 = "SELECT * FROM img_logis  where id =$res29" ;
    $objQuery60 = mysqli_query($objCon,$sqli60);
    $Result60= mysqli_fetch_array($objQuery60,MYSQLI_ASSOC);

    ////////////////////////////10////////////////////////////////////////
    $sqli61 = "SELECT * FROM select_img where id =31 ";
    $objQuery61 = mysqli_query($objCon,$sqli61);
      $Result61 = mysqli_fetch_array($objQuery61,MYSQLI_ASSOC);
      $res30= $Result61['id_image'];

    $sqli62 = "SELECT * FROM img_logis  where id =$res30" ;
    $objQuery62 = mysqli_query($objCon,$sqli62);
    $Result62= mysqli_fetch_array($objQuery62,MYSQLI_ASSOC);

    ///////////////////////////11//////////////////////////////////////////
    $sqli63 = "SELECT * FROM select_img where id =32 ";
    $objQuery63 = mysqli_query($objCon,$sqli63);
      $Result63 = mysqli_fetch_array($objQuery63,MYSQLI_ASSOC);
      $res31= $Result63['id_image'];

    $sqli64 = "SELECT * FROM img_logis  where id =$res31" ;
    $objQuery64 = mysqli_query($objCon,$sqli64);
    $Result64= mysqli_fetch_array($objQuery64,MYSQLI_ASSOC);
        ///////////////////////////12///////////////////////////////////////////

        $sqli65 = "SELECT * FROM select_img where id =33 ";
        $objQuery65 = mysqli_query($objCon,$sqli65);
          $Result65 = mysqli_fetch_array($objQuery65,MYSQLI_ASSOC);
          $res32= $Result65['id_image'];
    
        $sqli66 = "SELECT * FROM img_logis  where id =$res32" ;
        $objQuery66 = mysqli_query($objCon,$sqli66);
        $Result66= mysqli_fetch_array($objQuery66,MYSQLI_ASSOC);

        ////////////////////////////13///////////////////////////////////////////
  
$sqli67 = "SELECT * FROM select_img where id = 34";
$objQuery67  = mysqli_query($objCon,$sqli67);
  $Result67  = mysqli_fetch_array($objQuery67,MYSQLI_ASSOC);
  $res33= $Result67['id_image'];
  

    $sqli68 = "SELECT * FROM img_logis where id = $res33" ;
    $objQuery68 = mysqli_query($objCon,$sqli68);
    $Result68 = mysqli_fetch_array($objQuery68,MYSQLI_ASSOC);



    
////////////////////////////////14///////////////////////////////////////
    $sqli69 = "SELECT * FROM select_img where id =35";
    $objQuery69 = mysqli_query($objCon,$sqli69);
      $Result69 = mysqli_fetch_array($objQuery69,MYSQLI_ASSOC);
      $res34= $Result69['id_image'];

    $sqli70 = "SELECT * FROM img_logis  where id =$res34" ;
    $objQuery70 = mysqli_query($objCon,$sqli70);
    $Result70= mysqli_fetch_array($objQuery70,MYSQLI_ASSOC);

    //////////////////////////////15//////////////////////////////////////////
    $sqli71 = "SELECT * FROM select_img where id = 36";
    $objQuery71 = mysqli_query($objCon,$sqli71);
      $Result71 = mysqli_fetch_array($objQuery71,MYSQLI_ASSOC);
      $res35= $Result71['id_image'];

    $sqli72 = "SELECT * FROM img_logis  where id =$res35" ;
    $objQuery72 = mysqli_query($objCon,$sqli72);
    $Result72= mysqli_fetch_array($objQuery72,MYSQLI_ASSOC);

    ////////////////////////////////16/////////////////////////////////////////
    $sqli73= "SELECT * FROM select_img where id = 37 ";
    $objQuery73 = mysqli_query($objCon,$sqli73);
      $Result73 = mysqli_fetch_array($objQuery73,MYSQLI_ASSOC);
      $res36= $Result73['id_image'];

    $sqli74 = "SELECT * FROM img_logis  where id =$res36" ;
    $objQuery74= mysqli_query($objCon,$sqli74);
    $Result74= mysqli_fetch_array($objQuery74,MYSQLI_ASSOC);

    /////////////////////////////17////////////////////////////////////////////
    $sqli75 = "SELECT * FROM select_img where id =38";
    $objQuery75 = mysqli_query($objCon,$sqli75);
    $Result75 = mysqli_fetch_array($objQuery75,MYSQLI_ASSOC);
      $res37= $Result75['id_image'];

    $sqli76 = "SELECT * FROM img_logis  where id =$res37" ;
    $objQuery76 = mysqli_query($objCon,$sqli76);
    $Result76= mysqli_fetch_array($objQuery76,MYSQLI_ASSOC);

 
        /////////////////////////////18///////////////////////////////////////////
  
$sqli77 = "SELECT * FROM select_img where id = 39";
$objQuery77  = mysqli_query($objCon,$sqli77 );
  $Result77  = mysqli_fetch_array($objQuery77 ,MYSQLI_ASSOC);
  $res38= $Result77 ['id_image'];
  

    $sqli78 = "SELECT * FROM img_logis where id = $res38 " ;
    $objQuery78 = mysqli_query($objCon,$sqli78);
    $Result78 = mysqli_fetch_array($objQuery78,MYSQLI_ASSOC);



    
////////////////////////////////19/////////////////////////////////////////
    $sqli79 = "SELECT * FROM select_img where id =40";
    $objQuery79 = mysqli_query($objCon,$sqli79);
      $Result79 = mysqli_fetch_array($objQuery79,MYSQLI_ASSOC);
      $res39= $Result79['id_image'];

    $sqli80 = "SELECT * FROM img_logis  where id =$res39" ;
    $objQuery80 = mysqli_query($objCon,$sqli80);
    $Result80= mysqli_fetch_array($objQuery80,MYSQLI_ASSOC);

    //////////////////////////////20//////////////////////////////////////////
    $sqli81 = "SELECT * FROM select_img where id = 41 ";
    $objQuery81 = mysqli_query($objCon,$sqli81);
      $Result81 = mysqli_fetch_array($objQuery81,MYSQLI_ASSOC);
      $res40= $Result81['id_image'];

    $sqli82 = "SELECT * FROM img_logis  where id =$res40" ;
    $objQuery82 = mysqli_query($objCon,$sqli82);
    $Result82= mysqli_fetch_array($objQuery82,MYSQLI_ASSOC);

    ///////////////////////////////21/////////////////////////////////////////
    $sqli83 = "SELECT * FROM select_img where id = 42 ";
    $objQuery83 = mysqli_query($objCon,$sqli83);
      $Result83 = mysqli_fetch_array($objQuery83,MYSQLI_ASSOC);
      $res41= $Result83['id_image'];

    $sqli84 = "SELECT * FROM img_logis  where id =$res41" ;
    $objQuery84 = mysqli_query($objCon,$sqli84);
    $Result84= mysqli_fetch_array($objQuery84,MYSQLI_ASSOC);

    //////////////////////////////22 ////////////////////////////////////////////
    $sqli85 = "SELECT * FROM select_img where id =43";
    $objQuery85 = mysqli_query($objCon,$sqli85);
    $Result85 = mysqli_fetch_array($objQuery85,MYSQLI_ASSOC);
      $res42= $Result85['id_image'];

    $sqli86 = "SELECT * FROM img_logis  where id =$res42" ;
    $objQuery86  = mysqli_query($objCon,$sqli86 );
    $Result86 = mysqli_fetch_array($objQuery86 ,MYSQLI_ASSOC);

        //////////////////////////////23///////////////////////////////////////////
        $sqli87 = "SELECT * FROM select_img where id =44";
        $objQuery87 = mysqli_query($objCon,$sqli87);
        $Result87 = mysqli_fetch_array($objQuery87,MYSQLI_ASSOC);
          $res43= $Result87['id_image'];
    
        $sqli88 = "SELECT * FROM img_logis  where id =$res43" ;
        $objQuery88 = mysqli_query($objCon,$sqli88);
        $Result88= mysqli_fetch_array($objQuery88,MYSQLI_ASSOC);

        /////////////////////////////24////////////////////////////////////////////
  
$sqli89 = "SELECT * FROM select_img where id = 45 ";
$objQuery89 = mysqli_query($objCon,$sqli89);
  $Result89 = mysqli_fetch_array($objQuery89,MYSQLI_ASSOC);
  $res44= $Result89['id_image'];
  

    $sqli90 = "SELECT * FROM img_logis where id = $res44 " ;
    $objQuery90 = mysqli_query($objCon,$sqli90);
    $Result90 = mysqli_fetch_array($objQuery90,MYSQLI_ASSOC);



    
////////////////////////////////25//////////////////////////////////////////
    $sqli91 = "SELECT * FROM select_img where id =46 ";
    $objQuery91 = mysqli_query($objCon,$sqli91);
      $Result91 = mysqli_fetch_array($objQuery91,MYSQLI_ASSOC);
      $res45= $Result91['id_image'];

    $sqli92 = "SELECT * FROM img_logis  where id =$res45" ;
    $objQuery92 = mysqli_query($objCon,$sqli92);
    $Result92= mysqli_fetch_array($objQuery92,MYSQLI_ASSOC);


    ///////////////////////////////27//////////////////////////////////////////
    $sqli95 = "SELECT * FROM select_img where id = 48";
    $objQuery95 = mysqli_query($objCon,$sqli95);
      $Result95 = mysqli_fetch_array($objQuery95,MYSQLI_ASSOC);
      $res47= $Result95['id_image'];

    $sqli96 = "SELECT * FROM img_logis  where id =$res47" ;
    $objQuery96 = mysqli_query($objCon,$sqli96);
    $Result96= mysqli_fetch_array($objQuery96,MYSQLI_ASSOC);

    /////////////////////////////28////////////////////////////////////////////
    $sqli97 = "SELECT * FROM select_img where id = 49";
    $objQuery97 = mysqli_query($objCon,$sqli97);
    $Result97 = mysqli_fetch_array($objQuery97,MYSQLI_ASSOC);
      $res48= $Result97['id_image'];

    $sqli98 = "SELECT * FROM img_logis  where id =$res48" ;
    $objQuery98  = mysqli_query($objCon,$sqli98 );
    $Result98 = mysqli_fetch_array($objQuery98 ,MYSQLI_ASSOC);

        //////////////////////////////29///////////////////////////////////////////
        $sqli99 = "SELECT * FROM select_img where id = 50";
        $objQuery99 = mysqli_query($objCon,$sqli99);
        $Result99 = mysqli_fetch_array($objQuery99,MYSQLI_ASSOC);
          $res49= $Result99['id_image'];
    
        $sqli100 = "SELECT * FROM img_logis  where id =$res49" ;
        $objQuery100 = mysqli_query($objCon,$sqli100);
        $Result100= mysqli_fetch_array($objQuery100,MYSQLI_ASSOC);



        ////////////////////////////30///////////////////////////////////////////
  
$sqli101 = "SELECT * FROM select_img where id = 51 ";
$objQuery101 = mysqli_query($objCon,$sqli101);
  $Result101 = mysqli_fetch_array($objQuery101,MYSQLI_ASSOC);
  $res50= $Result101['id_image'];
  

    $sqli102 = "SELECT * FROM img_logis where id = $res50" ;
    $objQuery102 = mysqli_query($objCon,$sqli102);
    $Result102 = mysqli_fetch_array($objQuery102,MYSQLI_ASSOC);



    
////////////////////////////////31//////////////////////////////////////////
    $sqli103 = "SELECT * FROM select_img where id =52 ";
    $objQuery103 = mysqli_query($objCon,$sqli103);
      $Result103 = mysqli_fetch_array($objQuery103,MYSQLI_ASSOC);
      $res51= $Result103['id_image'];

    $sqli104 = "SELECT * FROM img_logis  where id =$res51" ;
    $objQuery104 = mysqli_query($objCon,$sqli104);
    $Result104= mysqli_fetch_array($objQuery104,MYSQLI_ASSOC);

    /////////////////////////////32////////////////////////////////////////////
    $sqli105 = "SELECT * FROM select_img where id = 53 ";
    $objQuery105 = mysqli_query($objCon,$sqli105);
      $Result105 = mysqli_fetch_array($objQuery105,MYSQLI_ASSOC);
      $res52= $Result105['id_image'];

    $sqli106 = "SELECT * FROM img_logis  where id =$res52" ;
    $objQuery106 = mysqli_query($objCon,$sqli106);
    $Result106= mysqli_fetch_array($objQuery106,MYSQLI_ASSOC);

    ////////////////////////////////33/////////////////////////////////////////
    $sqli107 = "SELECT * FROM select_img where id =54";
    $objQuery107 = mysqli_query($objCon,$sqli107);
      $Result107 = mysqli_fetch_array($objQuery107,MYSQLI_ASSOC);
      $res53= $Result107['id_image'];

    $sqli108 = "SELECT * FROM img_logis  where id =$res53" ;
    $objQuery108 = mysqli_query($objCon,$sqli108);
    $Result108= mysqli_fetch_array($objQuery108,MYSQLI_ASSOC);

    //////////////////////////////34 ////////////////////////////////////////////
    $sqli109 = "SELECT * FROM select_img where id =55";
    $objQuery109 = mysqli_query($objCon,$sqli109);
      $Result109 = mysqli_fetch_array($objQuery109,MYSQLI_ASSOC);
      $res54= $Result109['id_image'];

    $sqli110 = "SELECT * FROM img_logis  where id =$res54" ;
    $objQuery110 = mysqli_query($objCon,$sqli110);
    $Result110= mysqli_fetch_array($objQuery110,MYSQLI_ASSOC);

        /////////////////////////////35///////////////////////////////////////////
        $sqli111 = "SELECT * FROM select_img where id =56";
        $objQuery111 = mysqli_query($objCon,$sqli111);
        $Result111 = mysqli_fetch_array($objQuery111,MYSQLI_ASSOC);
          $res55= $Result111['id_image'];
    
        $sqli112 = "SELECT * FROM img_logis  where id =$res55" ;
        $objQuery112 = mysqli_query($objCon,$sqli112);
        $Result112= mysqli_fetch_array($objQuery112,MYSQLI_ASSOC);
        /////////////////////////////36////////////////////////////////////////////
  
        $sqli113 = "SELECT * FROM select_img where id = 57 ";
        $objQuery113 = mysqli_query($objCon,$sqli113);
          $Result113 = mysqli_fetch_array($objQuery113,MYSQLI_ASSOC);
          $res56= $Result113['id_image'];
          
        
            $sqli114 = "SELECT * FROM img_logis where id = $res56 " ;
            $objQuery114 = mysqli_query($objCon,$sqli114);
            $Result114 = mysqli_fetch_array($objQuery114,MYSQLI_ASSOC);
        
        
        
            
        ///////////////////////////////37//////////////////////////////////////////
            $sqli115 = "SELECT * FROM select_img where id =58";
            $objQuery115 = mysqli_query($objCon,$sqli115);
              $Result115 = mysqli_fetch_array($objQuery115,MYSQLI_ASSOC);
              $res57= $Result115['id_image'];
        
            $sqli116 = "SELECT * FROM img_logis  where id =$res57" ;
            $objQuery116 = mysqli_query($objCon,$sqli116);
            $Result116= mysqli_fetch_array($objQuery116,MYSQLI_ASSOC);
        
            //////////////////////////////38///////////////////////////////////////////
            $sqli117 = "SELECT * FROM select_img where id = 59";
            $objQuery117 = mysqli_query($objCon,$sqli117);
              $Result117 = mysqli_fetch_array($objQuery117,MYSQLI_ASSOC);
              $res58= $Result117['id_image'];
        
            $sqli118 = "SELECT * FROM img_logis  where id =$res58" ;
            $objQuery118 = mysqli_query($objCon,$sqli118);
            $Result118= mysqli_fetch_array($objQuery118,MYSQLI_ASSOC);
        
            ////////////////////////////////39//////////////////////////////////////////
            $sqli119 = "SELECT * FROM select_img where id = 60";
            $objQuery119 = mysqli_query($objCon,$sqli119);
              $Result119 = mysqli_fetch_array($objQuery119,MYSQLI_ASSOC);
              $res59= $Result119['id_image'];
        
            $sqli120 = "SELECT * FROM img_logis  where id =$res59" ;
            $objQuery120 = mysqli_query($objCon,$sqli120);
            $Result120= mysqli_fetch_array($objQuery120,MYSQLI_ASSOC);
        
            /////////////////////////////40////////////////////////////////////////////
            $sqli121 = "SELECT * FROM select_img where id = 61";
            $objQuery121 = mysqli_query($objCon,$sqli121);
            $Result121 = mysqli_fetch_array($objQuery121,MYSQLI_ASSOC);
              $res60= $Result121['id_image'];
        
            $sqli122 = "SELECT * FROM img_logis  where id =$res60" ;
            $objQuery122 = mysqli_query($objCon,$sqli122);
            $Result122= mysqli_fetch_array($objQuery122,MYSQLI_ASSOC);
        
                /////////////////////////////41////////////////////////////////////////////
                $sqli123 = "SELECT * FROM select_img where id = 62";
                $objQuery123 = mysqli_query($objCon,$sqli123);
                $Result123 = mysqli_fetch_array($objQuery123,MYSQLI_ASSOC);
                  $res61= $Result123['id_image'];
            
                $sqli124 = "SELECT * FROM img_logis  where id =$res61" ;
                $objQuery124  = mysqli_query($objCon,$sqli124 );
                $Result124 = mysqli_fetch_array($objQuery124 ,MYSQLI_ASSOC);



                /////////////////////////////42////////////////////////////////////////////
  
$sqli125 = "SELECT * FROM select_img where id = 63 ";
$objQuery125  = mysqli_query($objCon,$sqli125 );
  $Result125  = mysqli_fetch_array($objQuery125 ,MYSQLI_ASSOC);
  $res62= $Result125 ['id_image'];
  

    $sqli126= "SELECT * FROM img_logis where id = $res62 " ;
    $objQuery126= mysqli_query($objCon,$sqli126);
    $Result126 = mysqli_fetch_array($objQuery126,MYSQLI_ASSOC);



    
////////////////////////////////43///////////////////////////////////////
    $sqli127 = "SELECT * FROM select_img where id =64 ";
    $objQuery127 = mysqli_query($objCon,$sqli127);
      $Result127 = mysqli_fetch_array($objQuery127,MYSQLI_ASSOC);
      $res63= $Result127['id_image'];

    $sqli128 = "SELECT * FROM img_logis  where id =$res63" ;
    $objQuery128 = mysqli_query($objCon,$sqli128);
    $Result128= mysqli_fetch_array($objQuery128,MYSQLI_ASSOC);

    //////////////////////////////44///////////////////////////////////////////
    $sqli129 = "SELECT * FROM select_img where id = 65 ";
    $objQuery129 = mysqli_query($objCon,$sqli129);
      $Result129 = mysqli_fetch_array($objQuery129,MYSQLI_ASSOC);
      $res64= $Result129['id_image'];

    $sqli130 = "SELECT * FROM img_logis  where id =$res64" ;
    $objQuery130 = mysqli_query($objCon,$sqli130);
    $Result130= mysqli_fetch_array($objQuery130,MYSQLI_ASSOC);

    ////////////////////////////////45/////////////////////////////////////////
    $sqli131 = "SELECT * FROM select_img where id =66";
    $objQuery131 = mysqli_query($objCon,$sqli131);
      $Result131 = mysqli_fetch_array($objQuery131,MYSQLI_ASSOC);
      $res65= $Result131['id_image'];

    $sqli132 = "SELECT * FROM img_logis  where id =$res65" ;
    $objQuery132  = mysqli_query($objCon,$sqli132 );
    $Result132 = mysqli_fetch_array($objQuery132 ,MYSQLI_ASSOC);

    /////////////////////////////46////////////////////////////////////////////
    $sqli133 = "SELECT * FROM select_img where id = 67";
    $objQuery133 = mysqli_query($objCon,$sqli133);
    $Result133 = mysqli_fetch_array($objQuery133,MYSQLI_ASSOC);
      $res66= $Result133['id_image'];

    $sqli134= "SELECT * FROM img_logis  where id =$res66" ;
    $objQuery134 = mysqli_query($objCon,$sqli134);
    $Result134= mysqli_fetch_array($objQuery134,MYSQLI_ASSOC);

        //////////////////////////////47////////////////////////////////////////////
        $sqli135 = "SELECT * FROM select_img where id = 68";
        $objQuery135 = mysqli_query($objCon,$sqli135);
        $Result135 = mysqli_fetch_array($objQuery135,MYSQLI_ASSOC);
          $res67= $Result135['id_image'];
    
        $sqli136= "SELECT * FROM img_logis  where id =$res67" ;
        $objQuery136 = mysqli_query($objCon,$sqli136);
        $Result136= mysqli_fetch_array($objQuery136,MYSQLI_ASSOC);

        /////////////////////////////48////////////////////////////////////////////
  
$sqli137 = "SELECT * FROM select_img where id = 69 ";
$objQuery137 = mysqli_query($objCon,$sqli137);
  $Result137 = mysqli_fetch_array($objQuery137,MYSQLI_ASSOC);
  $res68= $Result137['id_image'];
  

    $sqli138 = "SELECT * FROM img_logis where id = $res68 " ;
    $objQuery138 = mysqli_query($objCon,$sqli138);
    $Result138 = mysqli_fetch_array($objQuery138,MYSQLI_ASSOC);



    
////////////////////////////////49//////////////////////////////////////////
    $sqli139 = "SELECT * FROM select_img where id =70 ";
    $objQuery139  = mysqli_query($objCon,$sqli139 );
      $Result139  = mysqli_fetch_array($objQuery139 ,MYSQLI_ASSOC);
      $res69= $Result139 ['id_image'];

    $sqli140 = "SELECT * FROM img_logis  where id =$res69" ;
    $objQuery140 = mysqli_query($objCon,$sqli140);
    $Result140= mysqli_fetch_array($objQuery140,MYSQLI_ASSOC);

    /////////////////////////////50////////////////////////////////////////////
    $sqli141 = "SELECT * FROM select_img where id =71 ";
    $objQuery141  = mysqli_query($objCon,$sqli141);
      $Result141  = mysqli_fetch_array($objQuery141 ,MYSQLI_ASSOC);
      $res70= $Result141['id_image'];

    $sqli142= "SELECT * FROM img_logis  where id =$res70" ;
    $objQuery142 = mysqli_query($objCon,$sqli142);
    $Result142= mysqli_fetch_array($objQuery142,MYSQLI_ASSOC);
    ////////////////////////////////51/////////////////////////////////////////
    $sqli143 = "SELECT * FROM select_img where id = 72 ";
    $objQuery143 = mysqli_query($objCon,$sqli143);
      $Result143 = mysqli_fetch_array($objQuery143,MYSQLI_ASSOC);
      $res71= $Result143['id_image'];

    $sqli144 = "SELECT * FROM img_logis  where id =$res71" ;
    $objQuery144 = mysqli_query($objCon,$sqli144);
    $Result144= mysqli_fetch_array($objQuery144,MYSQLI_ASSOC);

    //////////////////////////////52////////////////////////////////////////////
    $sqli145 = "SELECT * FROM select_img where id =73";
    $objQuery145 = mysqli_query($objCon,$sqli145);
    $Result145 = mysqli_fetch_array($objQuery145,MYSQLI_ASSOC);
      $res72= $Result145['id_image'];

    $sqli146 = "SELECT * FROM img_logis  where id =$res72" ;
    $objQuery146 = mysqli_query($objCon,$sqli146);
    $Result146= mysqli_fetch_array($objQuery146,MYSQLI_ASSOC);

        //////////////////////////////53////////////////////////////////////////////
        $sqli147 = "SELECT * FROM select_img where id =74";
        $objQuery147 = mysqli_query($objCon,$sqli147);
        $Result147 = mysqli_fetch_array($objQuery147,MYSQLI_ASSOC);
          $res73= $Result147['id_image'];
    
        $sqli148 = "SELECT * FROM img_logis  where id =$res73" ;
        $objQuery148 = mysqli_query($objCon,$sqli148);
        $Result148= mysqli_fetch_array($objQuery148,MYSQLI_ASSOC);

        /////////////////////////////54///////////////////////////////////////////
  
$sqli149 = "SELECT * FROM select_img where id = 75 ";
$objQuery149 = mysqli_query($objCon,$sqli149);
  $Result149= mysqli_fetch_array($objQuery149,MYSQLI_ASSOC);
  $res74= $Result149['id_image'];
  

    $sqli150 = "SELECT * FROM img_logis where id = $res74 " ;
    $objQuery150 = mysqli_query($objCon,$sqli150);
    $Result150 = mysqli_fetch_array($objQuery150,MYSQLI_ASSOC);



    
////////////////////////////////55//////////////////////////////////////////
    $sqli151 = "SELECT * FROM select_img where id =76 ";
    $objQuery151  = mysqli_query($objCon,$sqli151 );
      $Result151  = mysqli_fetch_array($objQuery151 ,MYSQLI_ASSOC);
      $res75= $Result151 ['id_image'];

    $sqli152 = "SELECT * FROM img_logis  where id =$res75" ;
    $objQuery152 = mysqli_query($objCon,$sqli152);
    $Result152= mysqli_fetch_array($objQuery152,MYSQLI_ASSOC);

    //////////////////////////////56////////////////////////////////////////////
    $sqli153 = "SELECT * FROM select_img where id = 77 ";
    $objQuery153 = mysqli_query($objCon,$sqli153);
      $Result153 = mysqli_fetch_array($objQuery153,MYSQLI_ASSOC);
      $res76= $Result153['id_image'];

    $sqli154 = "SELECT * FROM img_logis  where id =$res76" ;
    $objQuery154 = mysqli_query($objCon,$sqli154);
    $Result154= mysqli_fetch_array($objQuery154,MYSQLI_ASSOC);

    ///////////////////////////////57//////////////////////////////////////////
    $sqli155 = "SELECT * FROM select_img where id = 78 ";
    $objQuery155 = mysqli_query($objCon,$sqli155);
      $Result155 = mysqli_fetch_array($objQuery155,MYSQLI_ASSOC);
      $res77= $Result155['id_image'];

    $sqli156 = "SELECT * FROM img_logis  where id =$res77" ;
    $objQuery156 = mysqli_query($objCon,$sqli156);
    $Result156= mysqli_fetch_array($objQuery156,MYSQLI_ASSOC);

    //////////////////////////////58 ////////////////////////////////////////////
    $sqli157 = "SELECT * FROM select_img where id =79";
    $objQuery157 = mysqli_query($objCon,$sqli157);
    $Result157 = mysqli_fetch_array($objQuery157,MYSQLI_ASSOC);
      $res78= $Result157['id_image'];

    $sqli158 = "SELECT * FROM img_logis  where id =$res78" ;
    $objQuery158 = mysqli_query($objCon,$sqli158);
    $Result158= mysqli_fetch_array($objQuery158,MYSQLI_ASSOC);

        /////////////////////////////59////////////////////////////////////////////
        $sqli159 = "SELECT * FROM select_img where id =80";
        $objQuery159 = mysqli_query($objCon,$sqli159);
        $Result159 = mysqli_fetch_array($objQuery159,MYSQLI_ASSOC);
          $res79= $Result159['id_image'];
    
        $sqli160 = "SELECT * FROM img_logis  where id =$res79" ;
        $objQuery160 = mysqli_query($objCon,$sqli160);
        $Result160= mysqli_fetch_array($objQuery160,MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>image</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/stylehome.css">
  <link rel="stylesheet" href="../css/font.css">
  <link rel="stylesheet" href="../css/img.css">
  <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Farsan' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top">
<div class = "container">
 <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> 
      <div class="zoom">
             <a class="navbar-brand" href="home.php">
                   <img src="../img_logis/<?php echo $Result2['pro_image'];?> " class="responsive" style="width:125px " >
                   </a></div></div>

    <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav navbar-right"><br>
                
               <li><a href="INCOTERM.php"><?php echo $var4;?></a></li>
               <li><a href="service.php"><?php echo $var5;?></a></li>
               <li><a  href="contact.php"><?php echo $var6;?></a></li>
               <li><a  href="portfolio.php"><?php echo $var7;?></a></li>
               <a href="check_lang.php?message=EN"method="get" class ="active"><?php echo $var1;?>|</a>
               <a href="check_lang.php?message=VN"method="get"><?php echo $var2;?></a>
             </div>
           </ul>
      </div>
    </div>
  </nav>
  </div>
<br><br>

<div class = "parallax-4">
<!-- Header -->
<div class="header" id="myHeader">
  <h1><font color="#ffffff">Image Grid</font></h1>
  <p><font color="#ffffff">Click on the buttons to change the grid view.</font></p>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->
<div class = "container">
<div class="thumbnail" style="opacity: 0.92">
<div class="row"> 
<div class="col-sm-2"></div>
<div class="col-sm-8">
<div class="row"> 
  <div class="column">
    <img src="../img_logis/<?php echo $Result44['pro_image'];?>"style="width:100%">
    <img src="../img_logis/<?php echo $Result46['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result48['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result50['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result52['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result54['pro_image'];?>" style="width:100%">
  </div>
  <div class="column">
    <img src="../img_logis/<?php echo $Result58['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result60['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result62['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result64['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result66['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result68['pro_image'];?>" style="width:100%">
    
  </div>  
  <div class="column">
    <img src="../img_logis/<?php echo $Result70['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result72['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result74['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result76['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result78['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result80['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result82['pro_image'];?>" style="width:100%">
  </div>
  <div class="column">
    <img src="../img_logis/<?php echo $Result84['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result86['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result88['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result90['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result92['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result56['pro_image'];?>" style="width:100%">
  </div>
  <div class="column">
    <img src="../img_logis/<?php echo $Result96['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result98['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result100['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result102['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result104['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result106['pro_image'];?>" style="width:100%">
  </div>
  <div class="column">
    <img src="../img_logis/<?php echo $Result108['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result110['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result112['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result114['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result116['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result118['pro_image'];?>" style="width:100%">
  </div>
  <div class="column">
    <img src="../img_logis/<?php echo $Result120['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result122['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result124['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result126['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result128['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result130['pro_image'];?>" style="width:100%">
  </div>
  <div class="column">
    <img src="../img_logis/<?php echo $Result132['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result134['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result136['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result138['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result140['pro_image'];?>" style="width:100%">
    <img src="../img_logis/<?php echo $Result142['pro_image'];?>" style="width:100%">
  </div>
</div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;
// Two images side by side
function two() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "50%";  // IE10
        elements[i].style.flex = "50%";
    }
}

// Four images side by side
function four() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "25%";  // IE10
        elements[i].style.flex = "25%";
    }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class="col-sm-6">
<iframe width="300" height="240" src="https://www.youtube.com/embed/SKP8UfSvSoA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
<center>
<a href ="https://www.facebook.com/Pacific-Star-Group-Vietnam-745001085551278/"><img src="../IMG/social/facebook.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;</a>
<img src="../IMG/social/ig.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;
<img src="../IMG/social/twitter.png"  width="30" height="30"> &nbsp;&nbsp;&nbsp;
</center><br>
<i class="material-icons">&#xe8b4;</i>&nbsp;&nbsp;&nbsp;<?php echo $var74;?><br>
<i class="material-icons">&#xe0cd;</i>&nbsp;&nbsp;&nbsp;<?php echo $var78;?><br>
<i class="material-icons">&#xe0e1;</i>&nbsp;&nbsp;&nbsp;<?php echo $var76;?><br>
</div>
<br>
<center><?php echo $var38;?></p></center>
</footer>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "573046396208213", // Facebook page ID
            call_to_action: "contact us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

</script>
</body>
</html>
