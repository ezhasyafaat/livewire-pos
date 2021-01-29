<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>{{ config('app.name') }}</title>
      <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
      <meta name="author" content="pixelcave">
      <meta name="robots" content="noindex, nofollow">
      <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
      <meta property="og:site_name" content="Codebase">
      <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
      <meta property="og:type" content="website">
      <meta property="og:url" content="">
      <meta property="og:image" content="">
      <link rel="shortcut icon" href="codebase/media/favicons/favicon.png">
      <link rel="icon" type="image/png" sizes="192x192" href="codebase/media/favicons/favicon-192x192.png">
      <link rel="apple-touch-icon" sizes="180x180" href="codebase/media/favicons/apple-touch-icon-180x180.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
      <link rel="stylesheet" id="css-main" href="codebase/css/codebase.min.css">
   </head>
   <body>
      <div id="page-container" class="main-content-boxed">
         <!-- Main Container -->
         <main id="main-container">
            <!-- Page Content -->
            <div class="bg-gd-dusk">
               <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                  <!-- Header -->
                  <div class="py-30 px-5 text-center">
                     <a class="link-effect font-w700" href="index.html">
                     <i class="si si-fire"></i>
                     <span class="font-size-xl text-primary-dark">{{ config('app.first_name') }}</span><span class="font-size-xl">{{ config('app.last_name') }}</span>
                     </a>
                     <h1 class="h2 font-w700 mt-50 mb-10">Welcome to {{ config('app.name') }} </h1>
                     <h2 class="h4 font-w400 text-muted mb-0">Please sign in</h2>
                  </div>
                  <!-- END Header -->
                  <!-- Sign In Form -->
                  <div class="row justify-content-center px-5">
                     <div class="col-sm-8 col-md-6 col-xl-4">
                        <form class="js-validation-signin" action="{{ route('login') }}" method="post">
                            @csrf
                           <div class="form-group row">
                              <div class="col-12">
                                 <div class="form-material floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email" value="{{ old('email') }}">
                                    <label for="login-username">{{ __('E-Mail Address') }}</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-12">
                                 <div class="form-material floating">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="login-password" name="password">
                                    <label for="login-password">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row gutters-tiny">
                              <div class="col-12 mb-10">
                                 <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                    <i class="si si-login mr-10"></i> Sign In
                                 </button>
                              </div>
                              <div class="col-sm-6 mb-5">
                                 <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('register') }}">
                                 <i class="fa fa-plus text-muted mr-5"></i> {{ __('Register') }}
                                 </a>
                              </div>
                              <div class="col-sm-6 mb-5">
                                 <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('password.request') }}">
                                 <i class="fa fa-warning text-muted mr-5"></i> {{ __('Forgot Password?') }}
                                 </a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- END Sign In Form -->
               </div>
            </div>
            <!-- END Page Content -->
         </main>
         <!-- END Main Container -->
      </div>
      <!-- END Page Container -->
      <script src="codebase/js/codebase.core.min.js"></script>
      <script src="codebase/js/codebase.app.min.js"></script>
      <script src="codebase/js/plugins/jquery-validation/jquery.validate.min.js"></script>
      <script src="codebase/js/pages/op_auth_signin.min.js"></script>
   </body>
</html>
