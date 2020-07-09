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
 <li>run this command <b>php artisan serve</b> and copy the url that will generate there ex. (http://127.0.0.1:8000)</li>
 </ul>
 
 You can use my downloaded image for testing located at storage/galleries

<h2>Thank you!</h2>
