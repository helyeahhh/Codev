# Codev
 Applicant Exam

<h2>To run this application Follow the steps below</h2>
<ul>
 <li>Put the downloaded project folder on your Xampp/htdocs
 <li>Rename the .env.example file to <b>.env</b> located at the root folder of the project this is the database credentials</li>
<li>Modify the .env file code line 11 - 13<br />
DB_DATABASE=codev<br />
DB_USERNAME=root<br />
DB_PASSWORD=
</li>
 <li>Go to your command line press windows + R then type cmd</li>
 <li>Locate the downloaded project folder</li>
 <li>Install Composer Dependencies <b>composer install</b></li>
  <li>run this command <b>php artisan key:generate</b></li>
 <li>run this command <b>php artisan migrate</b></li>
 </ul>
 We need a localhost to access the project in my case I used XAMPP open Xampp and start Apache and MySQL then access the project using this URL http://localhost/Codev-master/public/
 
To load all the images we need to do one more thing on our CMD
<ul>
<li>Run this command <b>php artisan storage:link</b></li>
<li>Copy and paste the storage/galleries folder to public/storage</li>
<li>Refresh the page and the image will now load</li>
</ul>

To easily login use this two credentials <br />
Email: arvinnespanto@gmail.com<br />
password: 123456<br />
<br /><br />
Email: linc.burrows@gmail.com<br />
password: qwerty<br />
