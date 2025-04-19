function calculate(){
    var result = 0;
    var answer = [2,1,4,2,3,3,3,3,2,2,1,2,2,3,3,3,1,2,3,4];
    for(var i = 1 ; i <= 20 ; i++){
        var question = document.getElementById("qu"+i+"An"+answer[(i-1)]);
        var allRadios = document.getElementsByName("qu"+i);
        if(question.checked){
            result++;
            question.parentElement.parentElement.style.border="3px solid green";
        }else{
            question.parentElement.parentElement.style.border="3px solid red";
            for(var j = 0; j < allRadios.length; j++){
                if(allRadios[j].checked){
                    document.querySelector("label[for='" + allRadios[j].id + "']").style.color = "red";
                }
            }
        }
        document.querySelector("label[for='qu" + i + "An" + answer[(i-1)] + "']").style.color = "green";
        for(var j = 0; j < allRadios.length; j++){
            allRadios[j].disabled = true;
        }
    
    }
    document.getElementById('submit').style.display = "none";
    document.getElementById('result').style.display = "flex";
    document.getElementById('resultvalue').innerHTML = result;
    window.scrollTo(0, 0);
}

function retake(){
    document.getElementById('submit').style.display = "block";
    document.getElementById('result').style.display = "none";
    for(var i = 1; i <= 20; i++){
        var allRadios = document.getElementsByName("qu"+i);
        for(var j = 0; j < allRadios.length; j++){
            allRadios[j].disabled = false;
            allRadios[j].checked = false;
            var label = document.querySelector("label[for='" + allRadios[j].id + "']");
            if(label) {
                label.style.color = "";
            }
        }
        var questionContainer = document.getElementById("question"+i);
        if(questionContainer) {
            questionContainer.style.border = "";
        }
    }
    
    window.scrollTo(0, 0);
}