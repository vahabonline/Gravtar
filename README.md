# Gravtar
Gravtar fo WHMCS

هوک گراوتار برای whmcs
هوک را در مسیر زیر آپلود کنید
<pre>
whmcs_dir/includes/hooks
</pre>
سپس از کد زیر در هر جایی از سایت خواستید استفاده کنید
<pre>
{vogravatar email=$clientsdetails.email rating="PG" size="60" }
</pre>
برای مثال به این شکل آنرا در تصویر فراخوانی نمایید
<pre>
&lt;img src=&quot;{vogravatar email=$clientsdetails.email rating=&quot;PG&quot; size=&quot;60&quot; }&quot; alt=&quot;user image&quot;&gt;
</pre>
