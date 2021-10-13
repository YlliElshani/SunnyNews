<!DOCTYPE html>
<html>
    <head>
        <title>
            Advertisment
        </title>
        <link rel="stylesheet" href="../CSSfiles/HeaderStyle.css">
        <link rel="stylesheet" href="../CSSfiles/FooterStyle.css">
        <link rel="stylesheet" href="../CSSfiles/Advert Style.css">
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

        <div class="formDiv">
            <p>
                Submit a paid Advertisment request
            </p>
            <b>
                Fields marked with * are required
            </b>
            <form action="../buisnessLogic/advertLogic.php" method="POST">

                <label>
                   * Your Company name
                </label>
                <input required min="0" max="40" name="cName">


                <br/>


                <label>
                 * Your email:
                </label>
                <input required min="0" max="40" type="email" name="email">

                <br/>

                <label>
                    Your phone number:
                </label>
                <input min="0" max="40" required name="phoneNr">


                <br/>

                <label>
                    Length of contract
                </label>
                <select name="cLength" id="cat" required >
                    <option value="badInfo1"></option>
                    <option value="1 month">1 month</option>
                    <option value="2 month">2 months</option>
                    <option value="3 month">3 months</option>
                    <option value="4 month">4 months</option>
                  </select>
                  <br/>
                  <h3>Please select your preffered type of Advertisment</h3>
                    <input type="radio" id="Ad" name="adType" value="Banner">
                    <label for="Banner">Banner Ad</label><br>
                    <input type="radio" id="Ad" name="adType" value="SideBar">
                    <label for="SideBar">SideBar Ad</label><br>
                    <input type="radio" id="Ad" name="adType" value="newsAd">
                    <label for="newsAd">News Advert</label>
                    <input type="radio" id="Ad" name="adType" value="newsAd">
                <label>
                    Additional Info:
                </label>
                <textarea  min="0" max="40" name="moreInfo">
                </textarea>
                <input type="submit" class="btn" name="submitBtn">
            </form>
        </div>

        <?php
        include('../Re-Usable/footer.php');
      ?>
    </body>
</html>