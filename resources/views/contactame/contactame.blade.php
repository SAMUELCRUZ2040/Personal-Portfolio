<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Open+Sans:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Open+Sans:wght@300&display=swap');
body{
    overflow-x: hidden;
    background: #141415;
}
h1,
h2,
h3,
h4,
h5 {
    font-family: 'Montserrat', sans-serif;
}

p {
    font-family: 'Open Sans', sans-serif;
}

.container-message {
    position: absolute;
    top: 24px;
    left: 24px;
    width: calc(100% - 48px);
    height: calc(100vh - 48px);
    background: #2a2a2e;
}

.container-message .titlle-information {
    width: 100%;
    font-size: 30px;
    font-family: 700;
    letter-spacing: 2px;
    color: #fff;
    text-align: center
}

.container-message .titlle-information h2 {
    color: transparent;
    -webkit-text-stroke: 2px #4d4d4e;
    font-size: 40px;
    font-weight: 600;
    letter-spacing: 1px;
}

.container-message .titlle-information h1 {
    font-size: 45px;
    font-weight: 800;
    letter-spacing: 1px;
    position: relative;
}

.container-message .titlle-information .main-tittle::after {
    content: '';
    position: absolute;
    top: 100%;
    left: 48%;
    width: 8%;
    height: 3px;
    background: #50a8a1;
}
.container-message .information{
    width: calc(100% - 40px);
    height: calc(100% - 30vh);
    position: absolute;
    left: 20px;
    background: #00000082;
}
.container-message .information p {
    font-size: 15px;
    font-weight: 200;
    margin-left: 3vh;  
    letter-spacing: 1px;
    color: #fff;
}
</style>
<body>
    <div class="container-message container">
            <div class="titlle-information">
                <h2 class="titlle-top">MESSAGE</h2>
                <h1 class="main-tittle">NEW MESSAGE</h1>
            </div>
            <div class="information">
                <p><span>Name: </span> {{$contacto['name']}}</p>
                <p><span>Email: </span> {{$contacto['gmail']}}</p>
                <p><span>Subject: </span> {{$contacto['subject']}}</p>
                <p><span>Messaje: </span> {{$contacto['message']}}</p>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>