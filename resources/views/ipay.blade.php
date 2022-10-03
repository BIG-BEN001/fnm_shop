<?php
// $datastring =  $live.$order_id.$invoice.$total.$phone.$email.$vid.$curr.$p1.$p2.$p3.$p4.$cbk.$cst.$crl;
// /**********************************************************************************************************/
// $hashkey = "yoursecuritykey"; //Supply to us during iPay account registration;
// $datastring; //This is a string generated from the data to be posted (see above)
// $hashid = hash_hmac("sha1", $datastring, $hashkey); //Set hashing algorithm to SHA1;
// /**********************************************************************************************************/



//     /*
//     This is a sample PHP script of how you would ideally integrate with iPay Payments Gateway and also handling the 
//     callback from iPay and doing the IPN check

//     ----------------------------------------------------------------------------------------------------
//                 ************(A.) INTEGRATING WITH iPAY ***********************************************
//     ----------------------------------------------------------------------------------------------------
//     */
//     //Data needed by iPay a fair share of it obtained from the user from a form e.g email, number etc...
$generated_hash = "";
$fields = array();

<<<<<<< HEAD
    $fields = array("live"=> "1",
                    "oid"=> "112",
                    "inv"=> "112020102292999",
                    "ttl"=> "900",
=======
    $fields = array("live"=> "0",
                    "oid"=> "112",
                    "inv"=> "112020102292999",
                    "ttl"=> "1",
>>>>>>> da708e9 (updated on ipay)
                    "tel"=> "254741112070",
                    "eml"=> "benjaminochieng99@gmail.com",
                    "vid"=> "demo",
                    "curr"=> "KES",
                    // "p1"=> "airtel",
                    // "p2"=> "020102292999",
                    // "p3"=> "",
                    // "p4"=> "900",
                    "cbk"=> $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"],
                    "cst"=> "1",
                    "crl"=> "2"
                    );
    // /*
    // ----------------------------------------------------------------------------------------------------
    // ************(b.) GENERATING THE HASH PARAMETER FROM THE DATASTRING *********************************
    // ----------------------------------------------------------------------------------------------------

    // The datastring IS concatenated from the data above
    // */
    $datastring =  $fields['live'].$fields['oid'].$fields['inv'].$fields['ttl'].$fields['tel'].$fields['eml'].$fields['vid'].$fields['curr'].$fields['cbk'].$fields['cst'].$fields['crl'];
<<<<<<< HEAD
    $hashkey ="edgecityk58d8e8dd";//use "demoCHANGED" for testing where vid is set to "demo"
=======
    $hashkey ="demoCHANGED";//use "demoCHANGED" for testing where vid is set to "demo"
>>>>>>> da708e9 (updated on ipay)

    // /********************************************************************************************************
    // * Generating the HashString sample
    // */
    $generated_hash = hash_hmac('sha1', $datastring, $hashkey);

    ?>

       {{-- /*    Generate the form BELOW   */ --}}
           <FORM action="https://payments.ipayafrica.com/v3/ke">
            <?php  
                 foreach ($fields as $key => $value) {
                     echo $key;
                     echo ':<input name="'.$key.'" type="text" value="'.$value.'"></br>';
                 }
                ?>

            
            <INPUT name="hsh" type="text" value="<?php echo $generated_hash ?>">
            <button type="submit">  Lipa  </button>
            
         </FORM>