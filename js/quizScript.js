function calculate(){
    var result = 0;
    var answer = [2,1,4,2,3,3,3,3,2,2,1,2,2,3,3,3,1,2,3,4];
    for(var i = 1 ; i <= 20 ; i++){
        var question = document.getElementById("qu"+i+"An"+answer[(i-1)]);
        if(question.checked){
            result++;
            document.getElementById("question"+i).style.backgroundColor="lightgreen";
        }else{
            document.getElementById("question"+i).style.backgroundColor="#FFAAAA";
        }
    
    }
    window.alert(result);
    console.log(result);
    
}