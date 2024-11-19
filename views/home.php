<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            height: auto;
            width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        nav {
            position: sticky;
            z-index: 1020;
            top: 0;
            width: 1200px;
            height: 63px;
            background-color: rgb(232, 232, 232);
            align-items: center;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        nav form {
            text-align: center;
        }

        form input[type='text'] {
            width: 300px;
            margin: 25px;
            border: none;
            padding: 5px;
            /* transition: .5s; */
        }

        /* form input[type='text']:focus{
            background-color: pink; 
            outline:none;   
            width: 500px;
        } */
        form input[type='submit'] {
            border-radius: 5px;
            cursor: pointer;
        }

        .right {
            display: flex;
            padding-left: 20px;
        }

        /* .right button{
            
            
        } */
        .right button a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .right ul {
            display: flex;
            border: none;
            background-color: rgb(232, 232, 232);
            margin: 10px;
        }

        .right ul li {
            margin: 10px;
            list-style: none;

        }

        .right ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            position: relative;
        }

        .right ul li a::before {
            content: "";
            position: absolute;
            width: 0%;
            height: 6px;
            left: 0;
            bottom: 100%;
            background-color: red;
            border-radius: 6px;
            transition: .6s;
        }

        .right ul li a:hover::before {
            width: 50%;
            transform: translate(100%);
        }

        aside ul {
            padding: 0;
        }

        aside ul li {
            list-style: none;
            /* margin: 10px; */
            padding: 10px;
            border-bottom: 1px solid black;
        }

        aside ul li:hover {
            background-color: white;
        }

        aside ul li a {
            text-decoration: none;
            color: black;
            position: relative;
        }

        aside ul li a::before {
            content: "";
            position: absolute;
            width: 0;
            top: 100%;
            height: 5px;
            background-color: red;
            transition: .5s;
        }

        aside ul li a:hover::before {
            width: 50%;
            transform: translate(100%);
        }

        .content {
            display: flex;
            width: 1200px;
        }

        aside {
            background-color: rgb(232, 232, 232);
            width: 200px;
            margin: 0;
        }

        aside ul {
            padding: 0;
        }

        aside ul li {
            list-style: none;
            /* margin: 10px; */
            padding: 10px;
            border-bottom: 1px solid black;
        }

        aside ul li:hover {
            background-color: white;
        }

        aside ul li a {
            text-decoration: none;
            color: black;
            position: relative;
        }

        aside ul li a::before {
            content: "";
            position: absolute;
            width: 0;
            top: 100%;
            height: 5px;
            background-color: red;
            transition: .5s;
        }

        aside ul li a:hover::before {
            width: 50%;
            transform: translate(100%);
        }

        aside ul li a:hover {
            color: black;
        }

        article {
            width: 1000px;
            margin-left: 10px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 20px;
        }

        h2 {
            text-align: center;
            padding: 10px;
            text-transform: uppercase;
        }

        .card {
            width: 230px;
            height: 310px;
            text-align: center;
            margin-bottom: 10px;
            overflow: hidden;
            position: relative;
        }

        .card:hover {
            /* border: 6px solid rgb(203, 251, 255); */
            background-color: rgb(232, 232, 232);
        }

        .card a {
            text-decoration: none;
            color: black;
        }

        .card a:hover {
            color: orangered;
            text-decoration: underline;
        }

        .card-thumb {
            padding-top: 10px;
            height: 210px;
            /* transition: .6s; */
        }

        .card img:hover {
            transform: rotateY(180deg);
            transform: preserve-3d;
            transition: transform 1s;
        }

        /* .card-thumb img:hover{
            filter: blur(1px);
        } */
        .card-name {
            font-weight: bold;
            /* font-size: 21px;
            height: 63px; */
        }

        .card-price {
            color: red;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 0px;
        }

        .bottom {
            display: flex;
            justify-content: space-around;
        }

        .card .details {
            position: absolute;
            bottom: -225px;
            width: 100%;
            left: 0;
            background-color: #fff;
            transition: .5s;
        }

        .card .details:hover {
            bottom: 0;
            top: 0;
        }

        .cart {
            width: 100%;
            background-color: green;
            padding: 10px;
            margin: 10px;
            justify-content: center;
            text-align: center;
            transition: .6s;
        }

        .cart:hover {
            background-color: blue;
            /* transform: translate(100%); */
        }

        a.cart {
            color: white;
        }

        a.cart:hover {
            color: white;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Hello</h1>
</div>
</body>

</html>