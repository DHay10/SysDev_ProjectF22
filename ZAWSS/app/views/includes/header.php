<ul class="navbar">
    <h1>ZAWSS</h1>
    <li><a href=''>Home</a></li>
    <li><a href='/User/book'>Book</a></li>
    <button class="dropbtn">More</button>
    <div class="dropdown-content">
        <li><a href=''>About Us</a></li>
        <li><a href='/Main/faq'>FAQ</a></li>
        <li><a href=''>Contact Us</a></li>
    </div>
    <?php if(isset($_SESSION['user_id'])) { ?>
        <li style="float:right"><a href="">Log out</a></li>
    <?php } else { ?>
        <li style="float:right"><a href="">Sign In</a></li>
    <?php } ?>
</ul>

<style>
    /* Dropdown Button */
    .dropbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
    position: relative;
    display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>