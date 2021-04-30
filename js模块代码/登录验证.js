var answers=[]
var questions=[]
function requestQuestion()
{
    var index=Math.random()*questions.length
    var current_question=questions[index]
    return current_question
}
//根据是否正确返回值 验证
function verify(user_answer)
{
    if(user_answer)
    {
        return true
    }
    else
    {
        return false
    }
}