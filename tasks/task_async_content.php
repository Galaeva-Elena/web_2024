<form>
    <textarea cols = 40 rows = 5 name = "task"></textarea><br>
</form>
<button onclick="read()">Получить данные</button>
<button onclick="send()">Отправить данные</button>
<div id = "textFromServer"></div>
<script>
    //Get data
    async function read() 
    {
        let response = await fetch("get_task.php");
        if (response.ok) {
            let answer = await response.text();
            console.log("Ответ" + answer);
            textFromServer.innerHTML = answer;
        } else {
            console.log("Ошибка HTTP: " + response.status);
        }
    } 

    //Send new data
    async function send() {
        try {
            let response = await fetch("add_task.php", {
                method: 'POST',
                body: new FormData(document.forms[0])
            });
            
            if (response.ok) {
                document.forms[0].reset();
            } else {
                console.log("HTTP Error: " + response.status);
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }

    //Refresh every 3 sec
    setInterval(read, 3000); 
</script>