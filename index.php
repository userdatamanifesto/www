<?php
date_default_timezone_set('America/New_York');

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
require('campaigner/libcampaigner.php');

$response=CAMPAIGNER::listener();
//echo('<center><span class="notify">'.$response.'</span></center>');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>User Data Manifesto</title>
<link rel="stylesheet" href="style.css" type="text/css"  />
<link rel="stylesheet" href="campaigner/style.css" type="text/css"  />
</head>
<body bgcolor="#EEEEEE">

<?php

  echo('<center><span class="notify">'.$response.'</span></center>');


?>


<table border="0" width="100%"><tr><td></td><td width="620px">
<a href="/"><img src="udm.png" align="left" border="0" >&nbsp;&nbsp;<span class="head1">user data manifesto</span><br /></a>

<span class="head2">&nbsp;&nbsp;defining basic rights for people to control their own data in the internet age</span>
<br />
<br />


<p class="mainitem">1. Own the data<br />
<span class="subitem">The data that someone directly or indirectly creates belongs to the person who created it.</span>
</p>

<p class="mainitem">2. Know where the data is stored<br />
<span class="subitem">Everybody should be able to know: where their personal data is physically stored, how long, on which server,  in what country, and what laws apply.</span>
</p>

<p class="mainitem">3. Choose the storage location<br />
<span class="subitem">Everybody should always be able to migrate their personal data to a different provider, server or their own machine at any time without being locked in to a specific vendor.</span>
</p>

<p class="mainitem">4. Control access<br />
<span class="subitem">Everybody should be able to know, choose and control who has access to their own data to see or modify it.</span>
</p>

<p class="mainitem">5. Choose the conditions<br />
<span class="subitem">If someone chooses to share their own data, then the owner of the data selects the sharing license and conditions.</span>
</p>

<p class="mainitem">6. Invulnerability of data<br />
<span class="subitem">
Everybody should be able to protect their own data against surveillance and to federate their own data for backups to prevent data loss or for any other reason.
</span>
</p>

<p class="mainitem">7. Use it optimally<br />
<span class="subitem">Everybody should be able to access and use their own data at all times with any device they choose and in the most convenient and easiest way for them.</span>
</p>


<p class="mainitem">8. Server software transparency<br />
<span class="subitem">Server software should be free and open source software so that the source code of the software can be inspected to confirm that it works as specified.</span>
</p>






<br />
<span class="related">Services, projects, software that respects the user data rights and this manifesto. Contact us to have a software or project added to this list.</span><br />
<ul class="list">
<li><a href="http://diasporaproject.org/">Diaspora</a></li>
<li><a href="http://tent.io/">tent.io</a></li>
<li><a href="http://unhosted.org/">All Unhosted apps</a></li>
<li><a href="http://status.net/">status.net</a></li>
<li><a href="http://sparkleshare.org">Sparkleshare</a></li>
<li><a href="http://open-xchange.com">Open-Xchange</a></li>
<li><a href="http://buddycloud.com">buddycloud</a></li>
<li><a href="http://owncloud.org">ownCloud</a></li>
</ul>



<?php

CAMPAIGNER::show();


?>


<br /><br />
<span class="contact">contact: frank.karlitschek (at) userdatamanifesto.org</span>


</td><td></td></tr></table>

</body>
</html>
