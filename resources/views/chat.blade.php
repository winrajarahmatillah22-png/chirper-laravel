```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>WRR Chat</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<style>

body{
    margin:0;
    padding:0;
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
    padding:25px;
}

.logo{
    font-size:38px;
    font-weight:bold;
    color:#ff4dff;
}

.sub{
    color:#bbb;
}

.chat-list{
    padding:20px;
    padding-bottom:120px;
}

.chat-card{
    display:flex;
    align-items:center;
    gap:15px;

    background:rgba(255,255,255,.05);

    border:1px solid rgba(255,255,255,.08);

    backdrop-filter:blur(15px);

    border-radius:25px;

    padding:18px;

    margin-bottom:15px;

    text-decoration:none;

    color:white;
}

.avatar{
    width:70px;
    height:70px;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:32px;
}

.ai{
    background:
    linear-gradient(
        to bottom,
        #ff00ff,
        #7b00ff
    );
}

.user{
    background:
    linear-gradient(
        to bottom,
        #00cfff,
        #004dff
    );
}

.name{
    font-size:20px;
    font-weight:bold;
}

.status{
    color:#ccc;
    margin-top:5px;
}

.bottom-nav{
    position:fixed;
    bottom:0;
    left:0;

    width:100%;
    height:75px;

    background:#12001f;

    border-top:1px solid rgba(255,255,255,.08);

    display:flex;
    justify-content:space-around;
    align-items:center;
}

.nav-item{
    color:white;
    text-decoration:none;
    font-size:24px;
}

.active{
    color:#ff4dff;
}

</style>
</head>

<body>

<div class="bg"></div>

<div class="header">

<div class="logo">
💬 WRR Chat
</div>

<p class="sub">
Hanabiku AI & Teman WRR
</p>

</div>

<div class="chat-list">

<a href="/chat-ai" class="chat-card">


<img
src="/images/hanabi.jpeg"
class="avatar"
style="
width:65px;
height:65px;
border-radius:50%;
object-fit:cover;
border:3px solid #ff00ff;
">


<div>

<div class="name">
Hanabiku Sayankku AI
</div>

<div class="status">
Online • Tekan untuk mulai ngobrol 💜
</div>

</div>

</a>

<a href="/messages" class="chat-card">

<div class="avatar user">
👤
</div>

<div>

<div class="name">
Chat Pengguna WRR
</div>

<div class="status">
Lihat teman & pesan masuk
</div>

</div>

</a>

</div>

<div class="bottom-nav">

<a href="/home" class="nav-item">
🏠
</a>

<a href="/games" class="nav-item">
🎮
</a>

<a href="/create" class="nav-item">
➕
</a>

<a href="/chat" class="nav-item active">
💬
</a>

<a href="/profile" class="nav-item">
👤
</a>

</div>

</body>
</html>
```
