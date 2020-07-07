# Codev
 Applicant Exam

<h2>To run this application Follow the steps below</h2>
<b>Setup Xampp and Create Database</b>
<ul>
 <li>Download and install Xampp here https://www.apachefriends.org/index.html</li>
 <li>After downloading Xampp Locate your Xampp folder at your local disk C: drive and Run <b>xampp-control</b></li>
 <li>Xampp control panel will be opened just start Apache and MySQL</li>
 <li>Go to phpmyadmin page using your localhost http://localhost/phpmyadmin/</li>
 <li>On the left sidebar click "New"</li>
 <li>Just fill up the Database name to "codev" then create</li>
 </ul>
 <b>Test the application</b>
<ul>
 <li>Put the downloaded project folder on your Xampp/htdocs</li>
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
Access the project using this URL http://localhost/Codev-master/public/ or any url of your localhost
 
 
To load all the images we need to do one more thing on our CMD
<ul>
<li>Run this command <b>php artisan storage:link</b></li>
<li>Copy and paste the storage/galleries folder to public/storage</li>
<li>Refresh the page and the image will now load</li>
</ul>

To easily login use this two credentials <br />
Email: arvinnespanto@gmail.com<br />
password: 123456<br />
<br />
Email: linc.burrows@gmail.com<br />
password: qwerty<br />

<h2>Thank you!</h2>
