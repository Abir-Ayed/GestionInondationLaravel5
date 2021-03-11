 


<script src="js/jsExcel.js">
   var wb = XLSX.utils. table_to_book ( document. getElementById ( 'example1' ) , { sheet: "Sheet JS" } ) ;
        var wbout = XLSX. write ( wb, { bookType: 'xlsx' , bookSST: true, type: 'binary' } ) ;


        fonction s2ab ( s ) { 
                        var buf = new ArrayBuffer ( s.length ) ;
                        var view = new Uint8Array ( buf ) ;
                        pour ( var i = 0 ; i <s.longueur; i ++ ), vue [ i ] = s. charCodeAt ( i ) & 0xFF ; 
                        retour buf;
        }

        $ ( "# bouton-a" ) . click ( fonction () {
        saveAs ( nouveau Blob ( [ s2ab ( wbout ) ]] , { type: "application / octet-stream" } ) , 'test.xlsx' );
       ) }  ;
</script> 