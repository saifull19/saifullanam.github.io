@extends('layouts.main')

@section('container')

  
  
  <div class="card  shadow-lg mb-5 rounded border border-primary">
    
    
      <section id="jumbotron" class="jumbotron pt-5  text-center" style="background-color: #e2edff;"> 
        
        <img data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" src="/img/f.jpeg" class="rounded-circle prof img-thumbnail" alt="" width="200"> 
        <h1 class="display-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">Saiful Anam</h1>
        <ul class="nav justify-content-center">
          <li class="nav-item" data-aos="fade-down-right" data-aos-duration="1000" data-aos-delay="600">
            <a class="nav-link text-secondary" href="/categories">Web Developer</a>
          </li> | 
          <li class="nav-item" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="600">
            <a class="nav-link text-secondary" href="/categories">Digital Marketing</a>
          </li>
        </ul>
        {{-- <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="10" d="M0,192L48,181.3C96,171,192,149,288,160C384,171,480,213,576,224C672,235,768,213,864,192C960,171,1056,149,1152,138.7C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> 
      </section>

      <section id="about">
        <div class="container " >
          <div class="row text-center mb-4">
            <div class="col">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            <div class="col-4" data-aos="fade-right" data-aos-duration="1000">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad id quia itaque ut dolores. Harum deleniti accusantium maxime eligendi dolores.</p>
            </div>
            <div class="col-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad id quia itaque ut dolores. Harum delenitiitaque ut dolores. Harum deleniti accusantium maxime eligendi dolores.</p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="10" d="M0,192L48,181.3C96,171,192,149,288,160C384,171,480,213,576,224C672,235,768,213,864,192C960,171,1056,149,1152,138.7C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>

        <section id="projects" style="background-color: #e2edff;">
          <div class="container">
            <div class="row text-center mb-4">
              <div class="col">
                <h2>My Projects</h2>
              </div>
            </div>
            
            <div class="row">
                {{-- post skip untuk menampilkan postingan yang terakhir kali di tambahkan --}}
                @foreach ($posts->skip(1) as $post)
                    <div class="col-sm-4 mb-3">
                      <div class="card project">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                          {{-- /posts?category= untuk searching awal sebelumnya /categories/ --}}
                          <a class="text-decoration-none text-white" href="/posts?category={{ $posts[0]->category->slug }}">{{ $post->category->name }}</a>
                        </div>
                                  @if ($post->image)
                                  <div style="max-height: 350px; overflow:hidden;">
                                      <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                                  </div>
                                  @else    
                                  
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }} " class="card-img-top" alt="{{ $post->category->name }} ">
                                  @endif
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title }}</h5>
                          <small>
                            By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                          </small>
                          <p class="card-text">{{ $post->excerpt }}</p>
                          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                    </div>
                @endforeach
              </div>
      
          

          {{-- untuk membuat links pada paginations --}}
          <div class="justify-content-center">
            {{ $posts->links() }}
          </div>
  
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="10" d="M0,160L48,138.7C96,117,192,75,288,90.7C384,107,480,181,576,186.7C672,192,768,128,864,122.7C960,117,1056,171,1152,160C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </section>


    <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Gallery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?computer" alt="">
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?design" alt="">
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?home" alt="">
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?web" alt="">
            </a>
          </div>
          
          <div class="my-2"></div>

          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?photography" alt="">
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?computer" alt="">
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?personal" alt="">
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?progamming" alt="">
            </a>
          </div>
          
          <div class="my-2"></div>
          
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?developer" alt="">
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img class="img-fluid gallery-img" src="https://source.unsplash.com/300x300?web-design" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>


    <section id="contact mt-5">
      <div class="container">
        <div class="row mt-5 text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-6">

            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Terima Kasih!</strong> Pesan anda sudah kami terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <form name="blogs-submit-to-google-sheet">
              <div class="mb-3">
                <label for="name" class="form-label">Name Lengkap</label>
                <input type="text" class="form-control" id="name" name="nama" >
                <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea type="email" name="pesan" rows="3" class="form-control" id="pesan" aria-describedby="emailHelp">
                </textarea>
              </div>

              
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,32L20,69.3C40,107,80,181,120,186.7C160,192,200,128,240,122.7C280,117,320,171,360,186.7C400,203,440,181,480,154.7C520,128,560,96,600,101.3C640,107,680,149,720,176C760,203,800,213,840,186.7C880,160,920,96,960,80C1000,64,1040,96,1080,90.7C1120,85,1160,43,1200,64C1240,85,1280,171,1320,170.7C1360,171,1400,85,1420,42.7L1440,0L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    </section>

    <footer id="footer" class="text-center bg-primary text-white pb-5">
      <p>Created with love <i class="bi bi-heart-fill text-danger"></i> by <a href="" class="text-white text-decoration-none fw-bold ">Saiful Anam</a></p>
    </footer>

  </div>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzxB0g0mFTWoeqIwG4HyXwB9RQ0Z0orMciRohBuWBSmexvLVvYZ23eMYRnEiSppGos3Kw/exec'
  const form = document.forms['blogs-submit-to-google-sheet']

  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');

  form.addEventListener('submit', e => {
    e.preventDefault();
    // ketika tombol kirim di submit
    // tampilkan tombol loading hilangkan tombol kirim
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');

    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        // tampilkan tombol kirim, hilangkan tombol loading
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        // tampilkan alert 
        myAlert.classList.toggle('d-none');
        // risert isi form nya, hilangkan isinya
        form.reset();
        console.log('Success!', response);
        })
      .catch(error => console.error('Error!', error.message))
  })

  
</script>
  @endsection