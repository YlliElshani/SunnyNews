<!DOCTYPE html>
<html>
    <head>
        <title>
            News in Detail
        </title>
        <link rel="stylesheet" href="../CSSfiles/HeaderStyle.css">
        <link rel="stylesheet" href="../CSSfiles/ContactUs.css">
        <link rel="stylesheet" href="../CSSfiles/FooterStyle.css">
        <link rel="stylesheet" href="../CSSfiles/NewsDetail.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php
        include('../Re-Usable/header.php');
      ?>
    </body>

    <div class="LeftDiv">
        <b>
            Title of News: Movie about man stuck in airport, will he get out?
        </b>

        <img src="../Pics/comedy1.jpg">

        <p>
            Lorem ipsum dolor sit amet,
             consectetur adipiscing elit. Vestibulum at porta nisi.
              Pellentesque nec interdum elit. Aliquam lobortis neque velit,
               id tempor tortor blandit ac. Mauris fermentum ac ligula sed rutrum.
                Suspendisse quam eros, vestibulum laoreet libero 
                efficitur, hendrerit porttitor urna.
                 Nunc condimentum tortor neque, sed aliquam ligula finibus sit amet. Praesent 
                 porttitor maximus
                  odio ut lacinia. Morbi eget efficitur enim. Donec vel tristique lorem. In rhoncus,
                   mauris eu ullamcorper
                   vulputate, lectus massa malesuada diam, quis scelerisque augue erat non dolor. In tempus
                    vestibulum sollicitudin
                   . Nunc nibh metus, vestibulum vitae libero a, fringilla vehicula nunc. Proin sit amet arcu 
                   lorem. Donec accumsan,
                    nisi vel euismod vulputate, lectus massa laoreet magna, vel pharetra eros odio non magna.
                    Ut sodales suscipit turpis, eget feugiat eros molestie pellentesque. Proin ac laoreet metus.
                     Sed ullamcorper, tellus non convallis convallis, nisl sapien fermentum nisi, vitae mollis
                      nulla purus eget urna. Quisque rutrum vel nisi vel efficitur. Nam efficitur ligula non neque
                       consequat, vel blandit sapien imperdiet. Phasellus a elementum ligula. Maecenas sollicitudin
                       ut risus sit amet egestas. Integer ornare aliquet mi eget aliquet. Quisque venenatis eget eros
                        eu porttitor. Pellentesque sed viverra nisi, ac blandit justo. Suspendisse id fermentum nunc.
        </p>

        <div class="formDiv" id="modal">
            <p>
                Think something is wrong or missing in this article?
            </p>
            <b>
                Contact us for support!
            </b>
            <br/>
            <b>
                Fields marked with * are required
            </b>
            <form action="../buisnessLogic/Logic/rContactLogic.php" method="post">

                <label>
                   * Your name and last name:
                </label>
                <input required min="0" max="40" name="name">


                <br/>


                <label>
                 * Your email:
                </label>
                <input required min="0" max="40" type="email" name="email">

                <br/>

                <label>
                    Your phone number:
                </label>
                <input min="0" max="40" name="phoneNr">


                <br/>

                <label>
                    Category of support
                </label>
                <select name="category" id="cat">
                    <option value="badInfo1"></option>
                    <option value="badInfo">Disinformation</option>
                    <option value="defamation">Defamation</option>
                    <option value="crAbuse">Copyright Issues</option>
                    <option value="itSupport">It Support</option>
                  </select>
                  <br/>


                <label>
                  *  Your message:
                </label>
                <textarea required min="0" max="40" name="message">
                </textarea>

                <input type="submit" class="btn" name="submitBtn">

            </form>
        </div>
    </div>

    <div class="RightBox">
        <p class="MR">
            Most read
        </p>
        <div>
            <img src="../Pics/pic7.jpeg">
            <a href="#">
                Pellentesque habitant morbi tristique senectus et 
                netus et malesuada fames ac turpis egestas. Curabitur ipsum ligula,
                vehicula et magna nec, dapibus sagittis dolor.
            </a>
        </div>


        <div>
            <img src="../Pics/pic7.jpeg">
            <a href="#">
                Pellentesque habitant morbi tristique senectus et 
                netus et malesuada fames ac turpis egestas. Curabitur ipsum ligula,
                vehicula et magna nec, dapibus sagittis dolor.
            </a>
        </div>


        <div>
            <img src="../Pics/pic7.jpeg">
            <a href="#">
                Pellentesque habitant morbi tristique senectus et 
                netus et malesuada fames ac turpis egestas. Curabitur ipsum ligula,
                vehicula et magna nec, dapibus sagittis dolor.
            </a>
        </div>


        <div>
            <img src="../Pics/pic7.jpeg">
            <a href="#">
                Pellentesque habitant morbi tristique senectus et 
                netus et malesuada fames ac turpis egestas. Curabitur ipsum ligula,
                vehicula et magna nec, dapibus sagittis dolor.
            </a>
        </div>

        <div>
            <img src="../Pics/pic7.jpeg">
            <a href="#">
                Pellentesque habitant morbi tristique senectus et 
                netus et malesuada fames ac turpis egestas. Curabitur ipsum ligula,
                vehicula et magna nec, dapibus sagittis dolor.
            </a>
        </div>
    </div>


    <?php
        include('../Re-Usable/footer.php');
      ?>
</html>

<script>
    document.getElementById('modal')
</script>