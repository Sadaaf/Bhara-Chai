<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">BharaChai</span> Ltd</h1>
        </div>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li class="current"><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>You can visit our market</h1>
        <nav>
          <form>
            <button type="nav" class="button_1" ><a href="allcars.php">View Market</a></button>
          </form>
        </nav>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">3 Largest Online Companies</h1>
          <ul id="services">
            <li>
              <h3>Bharachai Ltd</h3>
              <p>Bharachai  Company, commonly referred to as  bharachai.com, is an American multinational corporation headquartered in Detroit that designs, manufactures and markets homes spaces and home appliences, and sells other services, with global headquarters in Detroit's Renaissance Center. It was originally founded by William C. Durant on September 16, 1908 as a holding company. The company is the largest American space provider, and one of the world's largest. As of 2018,  is ranked #10 on the Fortune 500 rankings of the largest United States corporations by total revenue.</p>
            </li>
            <li>
              <h3>Bikroy</h3>
              <p>Bikroy.com was launched in 2012 and has sections dedicated to private and business advertisements for cars and vehicles, property, electronics, home appliances and personal items, sport and hobby items, and jobs, among others.

Classified advertisements are currently placed on Bikroy.com and remain on the site for a period of 60 days.</p>
            </li>
            <li>
              <h3>Evaly</h3>
              <p>Evaly.com.bd (Bengali: ইভ্যালি.কম.বিডি); is a Bangladeshi online marketplace and logistics company, founded in 2018.[1] Evaly is a B2C platform following the market place model. Evaly, the country's largest online shopping mall.[2] It has been retailing a wide range of electronic and lifestyle products such as - clothing, footwear, jewelry, accessories, electronics, appliance, health care, beauty products etc.</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Login to your Account</h3>
            <form class="quote" action="check.php" method="POST">
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Email Address" name="email" required>
  						</div>
              <div>
                <label>Password</label><br>
                <input type="password" placeholder="Password" name="password" required>
              </div>

				<div>

              <div>
                <h5> </h5>
              </div>
  						<button class="button_1" type="submit">login</button>
			</form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p> CSE471 Project </p>
    </footer>
  </body>
</html>