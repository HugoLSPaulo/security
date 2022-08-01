<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
               
                 $randSequence[0]=0;
                 $HashSequence[0]="";
                 $messager="kkkkqqqqmmmm";
                 $ft="";
                 echo hash("sha512",$messager)."<br>";
                 
                CreatSequence(100,$randSequence,$HashSequence,$messager);
                 
function CreatSequence($root,&$randSequence,&$hSequence,$mess){
                   
    srand($root);
                   $index=0;
                   $second_index=0;
                   $tam=32;
                   $hReal="";
                   
                   $controlOperation=0;
                   
                   while($index<$tam){
                       
                     $controlOperation==0 ?($randSequence[$index]=rand()%130):0; 
                     $index==1 && $controlOperation==1 ? $index=4:0;
                     if($index==31 && $controlOperation==0){
                         
                         $index=0; $controlOperation=1; $tam=128;
                         $hReal=hash("sha512",$mess);
                     } 
                       $index!=0 && $controlOperation!=1 ?checkRepeatedElem($randSequence,$index):0;
                       
                       if($controlOperation==1){
                           
                           
      //                     printf("%d\n",$index);
                            $hSequence[$randSequence[$second_index]]=  substr($hReal, $index, 4);
                         $second_index++;  
                        }
                        $controlOperation==1 ? $index+=4:$index++;
                   }
               }
function checkRepeatedElem($middleArray,&$currentPostion){
    
    $ind=-1;
    //printf("aqui\n");
    while (++$ind<$currentPostion){
        
        if($middleArray[$ind]==$middleArray[$currentPostion]){
            
            $currentPostion--;
            break;
        }
    }
}
    
    print_r($HashSequence);
        ?>
    </body>
</html>