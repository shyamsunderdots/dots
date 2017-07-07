<!-- GeoTrust QuickSSL [tm] Smart  Icon tag. Do not edit. -->
<script language="javascript" type="text/javascript" src="//smarticon.geotrust.com/si.js"></script>
<!-- end  GeoTrust Smart Icon tag -->
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {

            });
            
            // Example-1            
            function PersonA(name) {
                this.name = name;
            }
            
            PersonA.prototype.sayHello = function () {
                alert(this.name + " says hello");
            };

            var jamesA = new PersonA("Example-1");
            //jamesA.sayHello(); 
            
            // Example-2            
            function PersonB(name) {
                this.name = name;
                this.sayHello = function () {
                    alert(this.name + " says hello");
                };
            }            

            var jamesB = new PersonB("Example-2");
            //jamesB.sayHello(); 
        </script>
    </head>
    <body>
        <p>If you click on me, I will disappear.</p>
        <p>Click me away!</p>
        <p>Click me too!</p>
    </body>
</html>