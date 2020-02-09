function myFunction(countDownDate){
    var v1=countDownDate.split("-");
    var currentdate=new Date();
    var year=currentdate.getFullYear();
    var month=currentdate.getMonth()+1;
    var day=currentdate.getDate();
    
    var hours=currentdate.getHours();
    var hour = 24 ;
    var x;
    if(v1[0]>year)
    {
    distance=v1[0]-year;
    document.getElementsByClassName("Demo")[1].innerHTML = distance+" year left";
    }
    else
    if(v1[1]>month)
    {
        if(v1[2]>=day)
        {
          distance=v1[1]-month;
          distance1=v1[2]-day;
        
          document.getElementsByClassName("Demo")[1].innerHTML = distance+" month "+distance1+" days"+" to go";
        }
    }
    else
    if(v1[2]>day && v1[2]-day!=1)
    {
        distance=v1[2]-day;
        distance2=hour-hours;
        document.getElementsByClassName("Demo")[1].innerHTML = distance+" days "+distance2+" hours"+" to go";
    }
    else 
    if(v1[2]-day==1)
    {
    distance=hour-hours;
    if (distance < 0) {
    document.getElementsByClassName("Demo")[1].innerHTML = "EXPIRED";
    }
    else
    if(distance>0)
    {
        document.getElementsByClassName("Demo")[1].innerHTML = distance+" hours left";
    }

    else  {
        document.getElementsByClassName("Demo")[1].innerHTML = "EXPIRED";
      }
    }
    if(v1[2]==day)
    {
        document.getElementsByClassName("Demo")[1].innerHTML = "EXPIRED";  
    }
    alert('hhh');
}