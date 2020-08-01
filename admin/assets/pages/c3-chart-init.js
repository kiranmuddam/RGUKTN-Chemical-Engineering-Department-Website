/*
 Template Name: Upcube - Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: C3 Chart init js
 */

!function(e){"use strict";var a=function(){};a.prototype.init=function(){c3.generate({bindto:"#chart",data:{columns:[["Desktop",150,80,70,152,250,95],["Mobile",200,130,90,240,130,220],["Tablet",300,200,160,400,250,250]],type:"bar",colors:{Desktop:"#4c84ff",Mobile:"#6fd088",Tablet:"#f75285"}}}),c3.generate({bindto:"#combine-chart",data:{columns:[["SonyVaio",30,20,50,40,60,50],["iMacs",200,130,90,240,130,220],["Tablets",300,200,160,400,250,250],["iPhones",200,130,90,240,130,220],["Macbooks",130,120,150,140,160,150]],types:{SonyVaio:"bar",iMacs:"bar",Tablets:"spline",iPhones:"line",Macbooks:"bar"},colors:{SonyVaio:"#4c84ff",iMacs:"#6fd088",Tablets:"#f75285",iPhones:"#67a8e4",Macbooks:"#a8cdf0"},groups:[["SonyVaio","iMacs"]]},axis:{x:{type:"categorized"}}}),c3.generate({bindto:"#roated-chart",data:{columns:[["Revenue",30,200,100,400,150,250],["Pageview",50,20,10,40,15,25]],types:{Revenue:"bar"},colors:{Revenue:"#77c949",Pageview:"#f32f53"}},axis:{rotated:!0,x:{type:"categorized"}}}),c3.generate({bindto:"#chart-stacked",data:{columns:[["Revenue",130,120,150,140,160,150,130,120,150,140,160,150],["Pageview",200,130,90,240,130,220,200,130,90,240,130,220]],types:{Revenue:"area-spline",Pageview:"area-spline"},colors:{Revenue:"#dddddd",Pageview:"#67a8e4"}}}),c3.generate({bindto:"#donut-chart",data:{columns:[["Desktops",78],["Smart Phones",55],["Mobiles",40],["Tablets",25]],type:"donut"},donut:{title:"Candidates",width:30,label:{show:!1}},color:{pattern:["#4c84ff","#ebeff2","#6fd088","#f75285"]}}),c3.generate({bindto:"#pie-chart",data:{columns:[["Desktops",78],["Smart Phones",55],["Mobiles",40],["Tablets",25]],type:"pie"},color:{pattern:["#0097a7","#ebeff2","#f32f53","#ffbb44"]},pie:{label:{show:!1}}})},e.ChartC3=new a,e.ChartC3.Constructor=a}(window.jQuery),function(e){"use strict";e.ChartC3.init()}(window.jQuery);



