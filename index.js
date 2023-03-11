elem = document.getElementById("heading-spark")
var x = 0;
var spark = "The Spark Foundation Bank"
var flag = 1;
dynamic_name = () => {
    elem.innerText = spark.slice(0, x % spark.length+1);
    if (flag == 1)
        x += 1;
    else
        x -= 1;    
    if (x == spark.length-1)
        flag = 0;
    if (x == 0)
        flag = 1;    
}

setInterval(dynamic_name, 150);
