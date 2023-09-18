<!DOCTYPE html>
<?php date_default_timezone_set('America/New_York'); ?>
<html>
<head> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<style>
	.site-footer
        {
            background-color:#33353d;
            padding:45px 0 20px;
            font-size:15px;
            line-height:24px;
            color:white;
        }
        .site-footer hr
        {
            border-top-color:#bbb;
            opacity:0.5
        }
        .site-footer hr.small
        {
            margin:20px 0
        }
        .site-footer h6
        {
            color:white;
            font-size:16px;
            text-transform:uppercase;
            margin-top:5px;
            letter-spacing:2px
        }
        .site-footer a
        {
            color:white;
        }
        .site-footer a:hover
        {
            color:#3366cc;
            text-decoration:none;
        }
        .footer-links
        {
            padding-left:0;
            list-style:none
        }
        .footer-links li
        {
            display:block
        }
        .footer-links a
        {
            color:white;
        }
        .footer-links a:active,.footer-links a:focus,.footer-links a:hover
        {
            color: white;
            text-decoration:none;
        }
        .footer-links.inline li
        {
            display:inline-block
        }
                .copyright-text
        {
            margin:0
        }
        @media (max-width:991px)
        {
            .site-footer [class^=col-]
            {
                margin-bottom:30px
            }
        }
        @media (max-width:767px)
        {
            .site-footer
            {
                padding-bottom:0
            }
            .site-footer .copyright-text,.site-footer .social-icons
            {
                text-align:center
            }
        }
       
</style>

</head>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">College Admissions Predictor uses the average SAT score and GPA of admitted students from prepscholar.com to determine admissions predictions. Warning: This predictor uses only two aspects of the college admissions process which involves more aspects such as extracurriculars, awards, sports and essays. </p>
                <p class="text-justify">Contact Us: <br>
                    Phone Number: 123-456-7890 <br>
                    Email Address: totallyrealemail@colleges.edu
                </p>

            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="./colleges.php">Home</a></li>
                    <li><a href="./collegeAdmissions.php">View Our College Database</a></li>
                 </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
                    <a href="https://github.com/ZyadKhan05" target="_blank">Zyad Khan</a>.
                </p>
            </div>
        </div>
    </div>
</footer>


</html>
