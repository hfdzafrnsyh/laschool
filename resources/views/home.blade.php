<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laraschool</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand text-white" href="#">Laraschool</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link text-white" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/login">Login</a>
            </li>
    
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/back1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/back2.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/back3.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
      
        <section id="content">

            <div class="about-content">
                <div class="container">
                    <div class="about">
                        <h5><b>About</b></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptate quis perspiciatis nemo error. Ducimus officia eveniet ullam corporis asperiores quo laboriosam, atque eaque, perspiciatis suscipit iusto repellat pariatur nulla?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cupiditate suscipit accusantium, iure distinctio rem dignissimos nobis, perspiciatis natus aspernatur soluta eligendi repellendus, minus illum quo ut? Commodi, accusamus quos.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia minus est, cumque esse molestias magni expedita nam recusandae! Illum labore molestias rem nobis doloremque fugiat cumque, saepe temporibus sint soluta.
                        </p>
                    </div>
                </div>
            </div>

            <div class="about-pendaftaran">
                <div class="row">
                    <div class="col-lg-5 text-center">
                       <h5>Daftar Siswa</h5>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur maiores tempore asperiores ipsa autem sint sequi, voluptates repellat? Vero, harum alias. Blanditiis sit eum labore, dignissimos voluptate maxime repudiandae temporibus?
                           Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia nisi accusamus ut placeat, provident rem possimus nemo quod, harum non atque totam, debitis magnam! Odit necessitatibus in explicabo non quae!
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laudantium aliquid et accusamus, commodi qui, sit ab sequi corporis, nisi voluptatem! Reprehenderit ex ipsum ratione fugiat nisi, nostrum impedit quisquam!
                       </p>
                    </div>
                
                    <div class="col-lg-7">
                         <div class="header-form text-center mb-4">
                            <h5>Pendaftaran</h5>
                        </div>

                <form action="/siswa/daftar" method="post" enctype="multipart/form-data">
                @method('post')
                @csrf
                    <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" placeholder="Nama Depan" name="nama_depan" required id="nama_depan" class="form-control round-form @error('nama_depan') is-invalid @enderror" >
                                    @error('nama_depan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                            </div>
                        
                        </div>
                      <div class="form-group">
                              
                                      <div class="col-sm-12">
                                          <input type="text" placeholder="Nama Belakang" name="nama_belakang" required id="nama_belakang" class="form-control round-form @error('nama_belakang') is-invalid @enderror" >
                                          @error('nama_belakang')
                                  <div class="invalid-feedback">
                                      {{$message}}
                                  </div>
                                  @enderror
                                  </div>
                              
                              </div>
                              <div class="form-group">
                              
                                  <div class="col-sm-12">
                                      <input type="email" placeholder="Email" name="email" required id="email" class="form-control round-form @error('email') is-invalid @enderror" >
                                      @error('email')
                              <div class="invalid-feedback">
                                  {{$message}}
                              </div>
                              @enderror
                              </div>
                          
                          </div>     
                              <div class="form-group">
                              
                                  <div class="col-sm-12">
                                      <input type="password" placeholder="password" name="password" required id="password" class="form-control round-form @error('password') is-invalid @enderror" >
                                      @error('password')
                              <div class="invalid-feedback">
                                  {{$message}}
                              </div>
                              @enderror
                              </div>
                          
                          </div>     
                      <div class="form-group">
                              
                                   <div class="col-sm-12">
                                          <input type="text" placeholder="Agama" name="agama" required id="agama" class="form-control round-form @error('agama') is-invalid @enderror" >
                                          @error('agama')
                                  <div class="invalid-feedback">
                                      {{$message}}
                                  </div>
                                  @enderror
                                  </div>
                              
                              </div>
                        
                         
                          <div class="form-group">
                             <div class="col-sm-12">
                              <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
                              <select name="jenis_kelamin" id="form-control" class="form-select">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                             </div>
                            </div>

                            <div class="form-group">
                      
                              <div class="col-sm-12">
                                  <input type="text" placeholder="Phone" name="phone" required id="phone" class="form-control round-form @error('phone') is-invalid @enderror" >
                                  @error('phone')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                          @enderror
                          </div>
                      </div>

                      
                      <div class="form-group">
                            
                          <div class="col-sm-12">
                              <input type="text" placeholder="Alamat" name="alamat" required id="alamat" class="form-control round-form @error('alamat') is-invalid @enderror" >
                              @error('alamat')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>
                      @enderror
                      </div>
                  </div>


                    <div class="form-footer text-center">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>

        </form>
                    </div>
                </div>
            </div>

        </section>

      <footer>
          <div class="footer text-center bg-primary">
              <p>Copyright &copy; Develop By @hfdz</p>
          </div>
      </footer>
    


     

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
      
</body>
</html>