
            $(function($) {

            });
            function CallPrint(strid)
             {
                
                var WinPrint = window.open('', '', 'left=0,top=0,width=1000,height=1000,toolbar=0,scrollbars=0,status=0');
                WinPrint.document.write(strid.innerHTML);
                WinPrint.document.close();
                WinPrint.focus();
                WinPrint.print();
                WinPrint.close();
              }
