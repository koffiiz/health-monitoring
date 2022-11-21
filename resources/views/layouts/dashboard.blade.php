<!-- <?php include 'header.php';?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <style>
         h2{
            font-weight: 600;
            font-size: 16px;
            line-height: 21px;
        }
        .content{
            width: 100%;
        }
        .dashboard h6{
            color: #ADA4A5;
            margin-bottom: 5px;
        }
        .radial--section--contaier{
            background: linear-gradient(274.42deg, #92A3FD 0%, #9DCEFF 124.45%);
            border-radius: 20px;
            position: relative;
            margin-top: 30px;
            width: 100%;
        }

        .dot-overlay{
            background-image: url(assets/background-dots.png);
            background-position: center bottom;
            position: absolute;
            left: 0;
            bottom: 0;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
        }
        .radial--section--row{
            width: 100%;
            display: flex;
            padding: 10px;
            position: relative;
            color: #fff;
        }
        .radial--section--row p{
            text-align: start;
            color: #fff;
            margin-bottom: 15px;
        }
        .radial--circle--container p{
            position: absolute;
            top: 34%;
            left: 73%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .radial--col--one{
            width: 70%;
            padding: 5px;
        }
        .radial--col--two{
            width: 30%;
            padding: 5px;
            position: relative;
        }

        .radial--full--circle{
            background-color: #fff;
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            top: 54%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            padding:20px;
        }

        .radial--half--circle{
            background-color: #fff;
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            top: 54%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            padding:20px;
            background:repeating-conic-gradient(
                from 0deg,
                #EEA4CE 0deg 90deg,
                transparent 50deg 360deg
            );
        }
        .radial--col--one h2{
            margin-bottom: 5px;
        }

        .radial--col--one button.btn-pink{
            width: 95px;
            border-radius: 50px;
            font-weight: 600;
            width: 95px;
        }
        .target-check-row{
            width: 100%;
        }
        .target-check-content{
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 18px 20px;
            background-color: rgba(151,180,254, 0.2);
            border-radius: 16px;
            align-items: center;
            margin: 30px 0;
        }
        .target-check-content button{
            width: 68px;
            height: 28px;
            font-weight: 400;
            font-size: 12px;
            line-height: 18px;
        }
        .target-check-content h2{
            font-weight: 500;
            font-size: 14px;
            line-height: 21px;
        }
        .target--check--row h1{
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
            color: var(--black);
        }
        .barcontainer{
            background-color: #181818;
            position: relative;
            width: 30px;
            height: auto;
            background: #F7F8F8;
            border-radius: 30px;
        }
        .bar{
            background: linear-gradient(180deg, #C58BF2 -83.11%, #B4C0FE 60.6%);
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 80%;
            border-top: 6px solid #FFF;
            box-sizing: border-box;
            animation: grow 1.5s ease-out forwards;
            transform-origin: bottom;
            border-radius: 30px;
        }
        @keyframes grow{
            from{
                transform: scaleY(0);
            }
        }
        .target--col-one{
            display: flex;
        }
  
        .content-box-item .target--check--row{
            width: 100%;
            display: flex;
            padding: 20px 8px 20px 20px;
            box-shadow: 0px 10px 40px rgba(29, 36, 42, 0.05);
            border-radius: 20px;
            margin-right: 20px;
        }
        .target--col-one{
            margin-right: 20px;
        }
        .content-box-item{
            width: 50%;
        }
        .target--col-three{
            width: 50%;
            margin-left: 15px;
        }
        .target-check-cotnent{
            width: 100%;
            margin-bottom: 30px;
            margin-top: 30px;
        }
        .target-check-cotnent h1{
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
        }
        .progress-boxes h2{
            font-weight: 500;
            font-size: 12px;
            line-height: 18px;
            color: var(--black);
            margin-bottom: 5px;
        }
        .progress-boxes h1{
            font-weight: 600;
            font-size: 14px;
            line-height: 21px;
            color: #9DCEFF;
            margin-bottom: 10px;
        }
        .target__col__two__row__three p{
            text-align: start;
        }
        .target__col__two__row__three ul{
            margin-top: 5px;
            padding-left: 20px;
        }
        .target__col__two__row__three li{
            margin-bottom: 3px;
            font-weight: 400;
            font-size: 11px;
            line-height: 12px;
        }
        .target__col__two__row__three ul p{
            margin-bottom: 10px;
            font-weight: 400;
            font-size: 11px;
            line-height: 12px;
            color: #EEA4CE;
        }
        .progress-boxes {
            width: 100%;
            display: flex;
        }
        .target__col__three__row__one{
            box-shadow: 0px 10px 40px rgb(29 36 42 / 5%);
            border-radius: 20px;
            padding: 20px;
        }
        .target__col__three__row__two{
            box-shadow: 0px 10px 40px rgb(29 36 42 / 5%);
            border-radius: 20px;
            padding: 20px;
        }
        .target__col__three__row__one img{
            width: 100%;
        }
        .pin{
            position: absolute;
            top: 30px;
            right: 20px;

        }
        .pin button{
            background: transparent;
            font-size: 25px;
            padding: 0;
            color: #ADA4A5;
        }

        .navi-botoom-container{
            width: 100%;
        }
        .navi-container-item{
            width: 100%;
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }
        .navi-container-item .item-navi-icon{
            color: #ADA4A5;
            font-size: 20px;
        }

        .search-nav-bottom{
            padding: 13px 18px;
            background: linear-gradient(274.42deg, #92A3FD 0%, #9DCEFF 124.45%);
            border-radius: 50%;
            color: var(--white);
        }

        .item-navi-icon.item-navi-search {
            margin-top: -20px;
        }
        
    </style>
</head>
<body>

<section id="dashboard-page">
    <div class="container">
        <div class="row">
            <div class="content dashboard">
            <h6>Welcome Back</h6>
            <h1>Kofiiz</h1>
            <div class="pin"><button><i class="fa-solid fa-bell"></i></button></div>
            <div class="radial--section--contaier">
                <div class="radial--section--row">
                    <div class="dot-overlay"></div>
                    <div class="radial--col--one">
                        <h2>BMI (Body Mass Index)</h2>
                        <p>You have a normal weight</p>
                        <button class="btn-pink">View More</button>
                    </div>
                    <div class="radial--col--two">
                        <div class="radial--full--circle"></div>
                        <div class="radial--half--circle"></div>
                        <div class="radial--circle--container">
                            <p>20,1</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="target--check--section">
                <div class="target--check--row">
                    <div class="target-check-content">
                    <h2>Today Target</h2>
                    <button>Check</button>
                </div>
                </div>
                <div class="target-check-cotnent">
                    <h1>Activity Status</h1>
                </div>
                <div class="progress-boxes">
                <div class="content-box-item">
                <div class="target--check--row">
                    <div class="target--col-one">
                        <div class="barcontainer">
                            <div class="bar">
                            </div>
                        </div>
                    </div>                 
                    <div class="target__col__two__row__three">
                        <div class="target__col__two__row__two">
                        </div>
                            <h2>Water Intake</h2>
                            <h1>4 Liters</h1>
                            <p>Real time updates</p>
                            <ul>
                                <li>6am - 8am</li>
                                <p>600ml</p>
                                <li>9am - 11am</li>
                                <p>500ml</p>
                                <li>11am - 2pm</li>
                                <p>1000ml</p>
                                <li>2pm - 4pm</li>
                                <p>700ml</p>
                                <li>4pm - now</li>
                                <p>900ml</p>
                            </ul>
                    </div>
                </div>
            </div>
                    <div class="target--col-three">
                        <div class="target__col__three__row__one">
                            <h2>Sleep</h2>
                            <h1>8h 20m</h1>
                            <img src="{{ asset('/assets/images/Sleep-Graph.png')  }}">
                        </div>
                        <div class="target__col__three__row__two">
                            <h2>Calories</h2>
                            <h1>760 kCal</h1>
                            <img src="{{ asset('/assets/images/calories-pie.png')  }}">
                        </div>
                    </div>
                </div>
            </div>
            </div> 
        </div> 
    </div>
</div>
</section>
    <div class="container">
        <div class="row">
            <div class="navi-botoom-container">
                <div class="navi-container-item">
                    <div class="item-navi-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="item-navi-icon">
                        <i class="fa-brands fa-facebook-messenger"></i>
                    </div>
                    <div class="item-navi-icon item-navi-search">
                        <span class="search-nav-bottom">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                    <div class="item-navi-icon">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <div class="item-navi-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section>
    
</section>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
<script src="custom.js"></script>
</body>
</html>

<!-- <?php include 'footer.php';?> -->