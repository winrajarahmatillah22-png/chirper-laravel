<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Hanabiku Sayankku AI</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<style>

body{
    margin:0;
    background:#090011;
    color:white;
    font-family:sans-serif;
}

.bg{
    position:fixed;
    inset:0;

    background:
    linear-gradient(
        rgba(0,0,0,.75),
        rgba(0,0,0,.9)
    ),
    url('https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1400&auto=format&fit=crop');

    background-size:cover;
    background-position:center;

    z-index:-1;
}

.header{
    display:flex;
    align-items:center;
    gap:15px;

    padding:20px;

    background:rgba(0,0,0,.3);

    backdrop-filter:blur(10px);
}

.avatar{
    width:60px;
    height:60px;

    border-radius:50%;

    background:
    linear-gradient(
        to bottom,
        #ff00ff,
        #7b00ff
    );

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:28px;
}

.chat-box{
    padding:20px;
    padding-bottom:130px;
}

.ai-message{
    background:#5b21b6;
    padding:12px;
    border-radius:15px;
    margin-bottom:10px;
    width:fit-content;
    max-width:80%;
}

.input-area{
    position:fixed;
    bottom:0;
    left:0;

    width:100%;

    background:#12001f;

    padding:15px;

    display:flex;
    gap:10px;
}

.input-area input{
    flex:1;
    padding:12px;
    border-radius:12px;
    border:none;
}

.input-area button{
    padding:12px 18px;
    border:none;
    border-radius:12px;
    background:#ff00ff;
    color:white;
}

</style>

</head>

<body>

<div class="bg"></div>

<div class="header">

<a href="/chat" style="color:white;text-decoration:none;">
←
</a>

<img
src="/images/hanabi.jpeg"
style="
width:60px;
height:60px;
border-radius:50%;
object-fit:cover;
border:3px solid #ff00ff;
">

<div>

<h2>
Hanabiku Sayankku AI
</h2>

<p style="color:#ccc;">
Online
</p>

</div>

</div>

<div
id="chatBox"
class="chat-box"
>

<div class="ai-message">
Halo sayankku 😘💜
Aku Hanabiku Sayankku AI.
Ada yang ingin kamu tanyakan?
</div>

</div>

<div class="input-area">

<input
id="message"
type="text"
placeholder="Tulis pesan..."
>

<button onclick="askAI()">
Kirim
</button>

</div>

<script>

function askAI()
{
    let text =
    document.getElementById('message').value;

    fetch('/girls-ai',{

        method:'POST',

        headers:{
            'Content-Type':'application/json',
            'X-CSRF-TOKEN':'{{ csrf_token() }}'
        },

        body:JSON.stringify({
            message:text
        })

    })

    .then(res=>res.json())

    .then(data=>{

        document.getElementById('chatBox')
        .innerHTML +=
        `
        <div style="
        text-align:right;
        margin-bottom:10px;
        ">
            <div style="
            display:inline-block;
            background:#2563eb;
            padding:12px;
            border-radius:15px;
            ">
                ${text}
            </div>
        </div>

        <div class="ai-message">
            ${data.reply}
        </div>
        `;

        document.getElementById('message').value='';

    });
}

</script>

</body>
</html>
