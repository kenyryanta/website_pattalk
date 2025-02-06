<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PetTalk</title>
    <link rel="icon" href="{{'images/logo.jpg'}}" />
    <!-- ./assets/images/logo.jpg -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{'css/login.css'}}" />
    <!-- ./assets/css/style.css -->
  </head>
  <body>
    @include('sweetalert::alert')
    <div class="wrapper">
      <div class="container main">
        <div class="row shadow-lg">
          <div class="col-md-6 side-image">
            <div class="text text-white pt-2 bg-dark opacity-75 text-center">
              <p>
                Get Professional Advice for Your Pet at <strong>Pettalk</strong>
              </p>
            </div>
          </div>
          @csrf
          <div class="col-md-6 right">
            <div class="input-box">
              <header>Login account</header>
              <form action="/signin" method="POST">
                @csrf
                  <div class="input-field">
                    <input
                      type="email"
                      class="input"
                      id="email"
                      required
                      autocomplete="off"
                      name="email"
                    />
                    <label for="email">Email Addres</label>
                  </div>
                  <div class="input-field">
                    <input type="password" class="input" id="pass" name="password" required />
                    <label for="pass">Password</label>
                  </div>
                  <div class="input-field">
                    <input type="submit" class="submit" value="Login" />

                  </div>
              </form>
              <div class="signin">
              <span
                  >Don't have an account?
                  <a href="/signup">Sign up here</a></span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
