# ImageSharing

This is a simple image sharing website based on LAN, the uploaded images will be move to local fordel 'test/saved' on the server side, and the demo website will show 5 recently added images. As below is an example.
<div  align="center">   
<img src="https://raw.githubusercontent.com/alexch1/ImageSharing/master/demo.JPG" width="50%" height="50%">
</div>
You may follow the rules below to test the function.

1. change line 99, 121 in index.html into your server path
   eg: "http://YourServerDocumentationRoute:yourport/imagesharing/php_test.php"

2. change line 4 in php_constants_test.php to measure the host file structure into apache documentation root
   eg:  "/Applications/MAMP/htdocs/imagesharing/"

3. the real local (lan) ip addr need to be set in the localhost2ip.js file before testing this project in your MAMP env.

4. im still working on the fuction in localhost2ip.js called getmyIP() which is desinged to obtain the local (lan) ip automatically.

The codes are partly adapted from the work of @ljx213101212, thx him a lot.
Checking https://github.com/ljx213101212/CS5342_TEAM3 for other applications.
