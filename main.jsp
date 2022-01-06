<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1561.6">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 16.0px; font: 13.0px Menlo; color: #000088; -webkit-text-stroke: #000088; background-color: #eeeeee}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 16.0px; font: 13.0px Menlo; color: #313131; -webkit-text-stroke: #313131; background-color: #eeeeee}
    p.p3 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 16.0px; font: 13.0px Menlo; color: #313131; -webkit-text-stroke: #313131; background-color: #eeeeee; min-height: 15.0px}
    span.s1 {font-kerning: none}
    span.s2 {font-kerning: none; color: #313131; -webkit-text-stroke: 0px #313131}
    span.s3 {font-kerning: none; color: #000088; -webkit-text-stroke: 0px #000088}
    span.s4 {font-kerning: none; color: #666600; -webkit-text-stroke: 0px #666600}
    span.s5 {font-kerning: none; color: #008800; -webkit-text-stroke: 0px #008800}
  </style>
</head>
<body>
<p class="p1"><span class="s1">&lt;html&gt;</span></p>
<p class="p1"><span class="s2"><span class="Apple-converted-space">   </span></span><span class="s1">&lt;head&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">      </span></span><span class="s3">&lt;title&gt;</span><span class="s1">Using GET Method to Read Form Data</span><span class="s3">&lt;/title&gt;</span></p>
<p class="p1"><span class="s2"><span class="Apple-converted-space">   </span></span><span class="s1">&lt;/head&gt;</span></p>
<p class="p3"><span class="s1"><span class="Apple-converted-space">   </span></span></p>
<p class="p1"><span class="s2"><span class="Apple-converted-space">   </span></span><span class="s1">&lt;body&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">      </span></span><span class="s3">&lt;h1&gt;</span><span class="s1">Using GET Method to Read Form Data</span><span class="s3">&lt;/h1&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">      </span></span><span class="s3">&lt;ul&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">         </span></span><span class="s3">&lt;li&gt;&lt;p&gt;&lt;b&gt;</span><span class="s1">First Name:</span><span class="s3">&lt;/b&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">            </span></span><span class="s4">&lt;%=</span><span class="s1"> request</span><span class="s4">.</span><span class="s1">getParameter</span><span class="s4">(</span><span class="s5">"first_name"</span><span class="s4">)</span><span class="s1">%&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">         </span></span><span class="s3">&lt;/p&gt;&lt;/li&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">         </span></span><span class="s3">&lt;li&gt;&lt;p&gt;&lt;b&gt;</span><span class="s1">Last<span class="Apple-converted-space">  </span>Name:</span><span class="s3">&lt;/b&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">            </span></span><span class="s4">&lt;%=</span><span class="s1"> request</span><span class="s4">.</span><span class="s1">getParameter</span><span class="s4">(</span><span class="s5">"last_name"</span><span class="s4">)</span><span class="s1">%&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">         </span></span><span class="s3">&lt;/p&gt;&lt;/li&gt;</span></p>
<p class="p2"><span class="s1"><span class="Apple-converted-space">      </span></span><span class="s3">&lt;/ul&gt;</span></p>
<p class="p3"><span class="s1"><span class="Apple-converted-space">   </span></span></p>
<p class="p1"><span class="s2"><span class="Apple-converted-space">   </span></span><span class="s1">&lt;/body&gt;</span></p>
<p class="p1"><span class="s1">&lt;/html&gt;</span></p>
</body>
</html>
