
// getting a particular food and the other.
var foods = ['Rice', 'Beans & plantain', 'Yam', 'Potato',];

console.log(foods[1], foods[3]);

for (var i = 0; i < 11; i++) {
    // console.log(i);
}

foods.forEach(element => {
    console.log(element);
});

function test() {
    alert("i was called");
    document.getElementById("test").innerHTML = "Done";
    var amount = document.getElementById("amount").value
    alert(amount);
}