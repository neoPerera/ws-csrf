<h3>
what is CSRF ?</h3>
expanded name: Cross Site Request Forgery. A attacking trick, that tricks a web browser into executing an unwanted action in an application to which a user is logged in.

<!--more-->In this assignment, our task were to develop a system, which is not vulnerable to CSRF (AKA XSRF) attacks.
There are 2 main methods to prevent CSRF attacks.
<ol>
<li>Double submit cookie</li>
<li>synchronized CSRF token </li>
</ol>
<div style="text-align: center;">

</div>
<div style="text-align: left;">

</div>
there are both solutions in my submission.

<div class="separator" style="clear: both; text-align: center;">
<a href="https://1.bp.blogspot.com/-xSzxvsK1iSk/XaFzZ02UkpI/AAAAAAAAxgU/heC9nmN1LTgPQDLzDYQ6-WbgXOsCZLbpwCEwYBhgL/s1600/1st.jpeg" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="406" data-original-width="783" src="https://1.bp.blogspot.com/-xSzxvsK1iSk/XaFzZ02UkpI/AAAAAAAAxgU/heC9nmN1LTgPQDLzDYQ6-WbgXOsCZLbpwCEwYBhgL/s1600/1st.jpeg" /></a></div>
i simply hard coded user login credentials.

<i><b>to try "synchronized token method", use these credentials to log.</b></i>
<i><b>username: aaa</b></i>
<i><b>password: aaa</b></i>
<i><b>
</b></i> <i><b>to try Double submit cookie, use these credentials to log.</b></i>
<i><b>username: sss</b></i>
<i><b>password: sss</b></i>


<h2>
Double Submit Cookie</h2>
when a user logging in, i created a random value and saved as a cookie in my browser.
<div class="separator" style="clear: both; text-align: center;">
<a href="https://1.bp.blogspot.com/-o-5fS3cnhKI/XaF1TeY7buI/AAAAAAAAxgo/YN-AADbnSikT6Sw92IVLHIX8XJCaXFnjQCEwYBhgL/s1600/2.jpeg" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="131" data-original-width="669" src="https://1.bp.blogspot.com/-o-5fS3cnhKI/XaF1TeY7buI/AAAAAAAAxgo/YN-AADbnSikT6Sw92IVLHIX8XJCaXFnjQCEwYBhgL/s1600/2.jpeg" /></a></div>
<div class="separator" style="clear: both; text-align: left;">
<b><i><u>$_SESSION['token'] is used for debugging purpose(ignore it).</u></i></b></div>
<div class="separator" style="clear: both; text-align: left;">

</div>
i created a cookie named 'tokenCookie' and inserted my random value to it. the token will expire in 1 hour.
<div class="separator" style="clear: both; text-align: center;">
<a href="https://1.bp.blogspot.com/-fRTO2ddFmsM/XaF3XnPNObI/AAAAAAAAxgw/M1eT-1lKEwgANikzDSloNsN1PDFAf60xQCLcBGAsYHQ/s1600/3.jpeg" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="213" data-original-width="619" src="https://1.bp.blogspot.com/-fRTO2ddFmsM/XaF3XnPNObI/AAAAAAAAxgw/M1eT-1lKEwgANikzDSloNsN1PDFAf60xQCLcBGAsYHQ/s1600/3.jpeg" /></a></div>
<div class="separator" style="clear: both; text-align: center;">
</div>
that created cookie will be added to a hidden field in my every form via javascript.
<div class="separator" style="clear: both; text-align: center;">
<a href="https://1.bp.blogspot.com/-DAKMA4nMLuE/XaF32AEdc7I/AAAAAAAAxg4/EDcHbe1p-Hcyu7JPXqu_CRIH6KqRPC9fQCLcBGAsYHQ/s1600/4.jpeg" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="339" data-original-width="808" src="https://1.bp.blogspot.com/-DAKMA4nMLuE/XaF32AEdc7I/AAAAAAAAxg4/EDcHbe1p-Hcyu7JPXqu_CRIH6KqRPC9fQCLcBGAsYHQ/s1600/4.jpeg" /></a></div>
when ever i submitted the form, both hidden value and my cookie will be send to the server side.
in server side, i check if both are same or not.
<div class="separator" style="clear: both; text-align: center;">
<a href="https://1.bp.blogspot.com/-QxwwbXvCE0U/XaF4PiPc2dI/AAAAAAAAxhE/v775exKMu_88xjFRxdXUZcjHurSvjzGngCLcBGAsYHQ/s1600/5.jpeg" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="489" data-original-width="410" src="https://1.bp.blogspot.com/-QxwwbXvCE0U/XaF4PiPc2dI/AAAAAAAAxhE/v775exKMu_88xjFRxdXUZcjHurSvjzGngCLcBGAsYHQ/s1600/5.jpeg" /></a></div>
if both are same, no interruption happened. if not, it is a CSRF attack.
user will be notified about this.
&nbsp; 
