  
function CheckAll(chk)  
{ 
  for (var i=0;i<chk.length;i++) chk[i].checked=true; 
} 
  
function CheckAllkill(chk)  
{ 
  for (var i=0;i<chk.length;i++) chk[i].checked=false; 
} 
  
function CheckAllfan(chk)   
{ 
  for (var i=0;i<chk.length;i++)  
  if (chk[i].checked==true) 
   { 
   chk[i].checked=false; 
   }else 
   chk[i].checked=true; 
}

function Trow(chk,f,e,oc) 
{
  if(oc==0)
  {
    for (var i=f;i<=e;i++)
	{
	   chk[i].checked=true; 
	}
  }
  if(oc==1)
  {
    for (var i=f;i<=e;i++)
	{
	   chk[i].checked=false; 
	}
  }
}
 
function Trun(n) 
{
  f=1;
  for(i=1;i<=n;i++)
  f*=i;
  return f;
}

function Tcount(b,c) 
{
  var s;
   
  document.all('sum').innerhtm="";
  if(b==null || b<2 || b>49)
  {
    document.all('sum').innerhtm="�����������1��С�ڻ����49";
	return false;
  }

  if(c==null || c<2 || c>10)
  {
    document.all('sum').innerhtm="ÿע���ű������1��С�ڻ����10";
	return false;
  }
    
  s=Math.round(Trun(b)/Trun(b-c)/Trun(c));
  
  if(s<1)
  {
    document.all('sum').innerhtm="������ÿע���С�ˡ�";
	return false;
  }
  document.all('sum').innerhtm="����ȫ��ʽ��"+s+"ע";  
  
}


function Fushi(chkno)

{
  var s;
  var pb;
  var ssum=0;
  var tshu=document.all('shu').value; 
  var cball=new Array();  
  var init=new Array();  
  var pvx; 
  var exc=0;  
  var jub; 
  var mp; 

  for (var i=1;i<=tshu;i++)
  {
    init[i]=i; 
  }
  
  for (var i=0;i<chkno.length;i++)
  {  
  if (chkno[i].checked==true) 
   {
   ssum+=1;
   cball[ssum]=chkno[i].value; 
   }
  }
   if(tshu>=ssum)
   {
     document.all('tishi').innerhtm="��ѡ����������Ҫ��ÿ�������࣡";
	 return false;
   }
   s=Math.round(Trun(ssum)/Trun(ssum-tshu)/Trun(tshu)); 
   
   if(s>500000)
   {
     document.all('tishi').innerhtm="��ϳ���50��ע���ݲ��ṩ�������Ǹ��";
	 return false;
   }



   for(var i=1;i<=s;i++)
   {
document.write('<br>');
     for(var p=1;p<=tshu;p++)
  {
    pb=cball[init[p]];
    if(pb<10)
    {
             pb="0"+pb;
           }
document.write(pb+' '); 
  }
  
  if(i%10000==0)
  {
    alert('�������'+i+'����ϣ�ʣ�ࣺ'+(s-i));
  }
       exc=parseInt(tshu); 
       jub=true;
  
  while((exc>0)&(jub==true))
  {
           mp=ssum-tshu+exc; 
    if(init[exc]<mp)
    {             
      pvx=init[exc];
   for(var gox=exc;gox<=tshu;gox++)
   {
     init[gox]=pvx+1;                
     pvx+=1;
   }
   jub=false;
    }
    exc-=1;
           
  }
    }

document.write('<br>������ϣ�����'+s+'ע<br><a href="index.html">���¼���</a>');

}