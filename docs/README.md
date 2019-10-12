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
<div class="separator" style="clear: both; text-align: center;">

</div>

