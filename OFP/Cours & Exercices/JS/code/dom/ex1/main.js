/*document.getElementById('checkbox').addEventListener('click', function() {
let checkBox = document.getElementById('checkbox');
})
if (checkBox.checked == true){
    password.type = "text";
} else {
    password.type = "password";
}*/

document.getElementById('checkbox').onclick = function() {
    if ( this.checked ) {
        document.getElementById('input').type = "text";
    } else {
        document.getElementById('input').type = "password";
    }
};