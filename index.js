elem = document.getElementById("heading-spark")
var x = 0;
var spark="The Spark Foundation Bank"
dynamic_name = () => {
    elem.innerText = "T"+spark.slice(1, x % spark.length+1)+"|";
    x += 1;
}

setInterval(dynamic_name, 200);
