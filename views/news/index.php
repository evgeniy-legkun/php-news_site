<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>News Site</title>
    <link rel="stylesheet" href="/template/css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/template/css/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/template/css/grid.css" type="text/css" media="screen"/>

</head>

<body>
<div id="wrapper">
    <div id="header">
        <div class="inner container_12 clearfix">
            <div id="logo" class="grid_5">
                <h1><a href="#" title="Apple News"><span class="black">Apple News</span></a></h1>
            </div><!-- end logo -->
        </div><!-- end header inner -->
    </div><!-- end header -->

    <div id="nav" class="container_12 clearfix">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div><!-- end nav -->

    <div id="content">
        <div class="inner container_12 clearfix">
            <div id="main" class="grid_8">
                <h2>Apple Inc.</h2>
                <p><strong>Apple is an American multinational technology company headquartered in Cupertino, California,
                        that designs, develops, and sells consumer electronics, computer software, and online services.
                        Its hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal
                        computer, the iPod portable media player, the Apple Watch smartwatch, and the Apple TV digital
                        media player. Apple's consumer software includes the macOS and iOS operating systems, the iTunes
                        media player, the Safari web browser, and the iLife and iWork creativity and productivity
                        suites. Its online services include the iTunes Store, the iOS App Store and Mac App Store, Apple
                        Music, and iCloud.</strong></p>

                <p>Apple was founded by Steve Jobs, Steve Wozniak, and Ronald Wayne in April 1976 to develop and sell
                    personal computers. It was incorporated as Apple Computer, Inc. in January 1977, and was renamed as
                    Apple Inc. in January 2007 to reflect its shifted focus toward consumer electronics. Apple (NASDAQ:
                    AAPL) joined the Dow Jones Industrial Average in March 2015.</p>

                <div id="home-bottom" class="clearfix">

                    <h2>Latest News</h2>

                    <?php foreach ($newsList as $newsItem): ?>
                        <div id="col1" class="grid_7">
                            <h5><a href="/news/<?php echo $newsItem['id']; ?>"><?php echo $newsItem['title']; ?></a>
                            </h5>
                            <p><?php echo $newsItem['date']; ?></p>
                            <p><?php echo $newsItem['short_content']; ?></p>
                            <p style="text-align: right;"><a href="/news/<?php echo $newsItem['id']; ?>">Read More</a>
                            </p>
                        </div>
                    <?php endforeach; ?>

                </div><!-- end home-bottom -->
            </div><!-- end main -->
            <div id="sidebar" class="grid_4">
                <div class="inner">

                    <img src="/template/images/image1.jpg" alt="image" class="imgborder"/>

                    <div id="address">
                        <h3>Contact Information:</h3>
                        <p>Vinnitsa town <br/></p>
                        <p><strong>Phone:</strong> (098)814-17-18 <br/>
                        <p><strong>E-mail:</strong> evgeniy_legkun@ukr.net</p>
                    </div><!-- end address -->
                </div><!-- end sidebar inner -->

            </div><!-- end sidebar -->
        </div><!-- end content inner -->
    </div><!-- end content -->

    <div id="footer">
        <div class="inner container_12 clearfix">

            <p>Copyright 2017. <!-- Please Do not remove -->Template by <a
                        href="http://www.electrictowelrail.org.uk/chrome-towel-radiator/" target="_blank">Chrome Towel
                    Radiator</a><!-- end --><br/>
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a
                        href="http://validator.w3.org/check/referer"
                        title="This page validates as XHTML 1.0 Transitional"><abbr
                            title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a
                        href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3"
                        title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>

        </div><!-- end footer inner -->
    </div><!-- end footer -->

</div><!-- end wrapper -->
</body>
</html>
