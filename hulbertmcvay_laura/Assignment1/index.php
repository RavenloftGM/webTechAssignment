<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - UCLAN SU Shop</title>
</head>

<body id="homepageContent">
    <!--Logo & core nav links-->
    <header class="header">
        <nav>
            <div class="navbar">
            <figure class="logo"><img src="./images/logo.svg" alt="UCLan logo"></figure>
              <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="cart.html">Cart</a></li>
              </ul>
            </div>
          </nav>
    </header>


    <!--Welcome info & videos-->
    <main class="homepage">
        <section id="universityIntro">
            <div class="container">
                <h1>UCLan</h1>

<p>Hello <?php echo htmlspecialchars($_SESSION['name']);?> <p>

                <p>The University of Central Lancashire is the international, multi-campus university tracing its roots
                    back
                    to 1828 and leading the way in modern learning today.</p>
                <h3>LEADING THE WAY IN MODERN LEARNING</h3>
                <p>Whoever you are, wherever you’re from, you can expect a warm welcome at the University of
                    Central Lancashire. You’ll be joining a thriving community of over 42,000 students and staff from
                    more
                    than 100 countries. This makes our university a vibrant place to learn, connect with new people and
                    have
                    fun. We’re proud of our Lancashire spirit and you’ll notice how approachable and supportive everyone
                    is
                    here. You’ll soon feel right at home.</p>
                <p>We started life in Preston and have since grown the number of our UK campuses. As well as Preston, we
                    are
                    also based in Burnley (East Lancashire), Westlakes (West Cumbria) and London. We were honoured to
                    establish the first British university in Cyprus in 2012 having been granted an academic license by
                    the
                    Cyprus Ministry of Education and Culture.</p>
                <p>Below, you'll find an introductory video to the university.</p>
                <video width="420" height="315" controls>
                    <source src="./video/video.mp4" type="video/mp4">Your browser does not support the video tag.
                </video><br>
            </div>
        </section>

        <section id="prestonIntro">
            <div class="container">
                <h1>Preston</h1>
                <p>Preston, city and nonmetropolitan district, administrative and historic county of Lancashire,
                    northwestern England. It is located at the lowest bridging point of the River Ribble estuary before
                    it
                    flows into the Irish Sea.</p>
                <h3>PRINCEPS PACIS</h3>
                <p>The town of Preston grew near the site of a Roman fort at Walton-le-Dale, on a ridge overlooking the
                    river. The name Preston is derived from Priests’ Town, suggesting early settlement of religious
                    origin
                    dating back to the Anglo-Saxon period. By the 1086 Domesday survey, Preston had become an important
                    market town and administrative centre. Its Market Place still occupies the same location some 1,000
                    years later. In 1179 Preston’s first Royal Charter was granted.</p>
                <p>Preston boasts some of the oldest parks and open spaces in the region, notably Avenham and Miller
                    parks.
                    Winckley Square, centred on open gardens, is the site of notable Georgian architecture and lies at
                    the
                    heart of the city centre. Also of architectural significance is the Preston Bus Station, an example
                    of
                    New Brutalist design.</p>
                <p>Below, you'll find an introductory video to the city of Preston.</p>
                <iframe width="420" height="315" src="https://youtube.com/embed/EI_lco-qdw8"></iframe>
            </div>
        </section>
    </main>

    <!--button that takes you to the top of the page if you scroll too far-->
    <footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="footerbutton.js"></script>
    </footer>

</body>

</html>