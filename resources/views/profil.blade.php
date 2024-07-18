
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
        @include('layouts.navbar')
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">profile</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-primary px-4 py-3" href="#!">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download profile
                                </a>
                            </div>
                            @foreach ($jobs as $jb)
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">{{ $jb->starting_year }} - {{ $jb->year_end}}</div>
                                                <div class="small fw-bolder">{{ $jb->field }}</div>
                                                <div class="small text-muted">{{ $jb->company }}</div>
                                                <div class="small text-muted">{{ $jb->address }}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div>{{ $jb->work_description }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </section>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2019 - 2022</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">SMA N 1 TURI</div>
                                                    <div class="small text-muted">Gununganyar, Donokerto, Kapanewon Turi, Sleman, Yogyakarta 55551</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Telepon:(0274) 4461539</div>
                                                    <div class="small text-muted">sman1turi@yahoo.com</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>"Dengan budi pekerti, tiap-tiap manusia berdiri sebagai manusia merdeka (berpribadi), yang dapat memerintah atau menguasai diri sendiri. Inilah manusia beradab dan itulah maksud dan tujuan pendidikan dalam garis besarnya."</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Education Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2022 - 2024</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Universitas MercuBuana Yogyakarta</div>
                                                    <div class="small text-muted">Jl. Jembatan Merah No. 84C Gejayan, Yogyakarta 55283</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Telp: 0274-584922, 550703, 550704</div>
                                                    <div class="small text-muted">@mercubuana-yogya.ac.id</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Meraih gelar pendidikan tinggi Anda di Universitas Mercu Buana Yogyakarta. Bersama kami, Anda akan menemukan pengalaman belajar yang memadukan pendalaman ilmu pengetahuan untuk membentuk karakter yang berintegritas, serta didukung dengan lingkungan belajar yang kondusif untuk mengembangkan potensi Anda.</div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SEO/SEM Marketing</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Statistical Analysis</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network Security</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Software Suite</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface Design</div></div>
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Ruby</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto"><div class="small m-0">
                            <span>Copyright &copy; <a href=href="https://www.instagram.com/rrchristawani?igsh=MWxkOXBhcmJ1cXN0eA==" target="_blank">rrchristawani</a>  {{ now()->year }}</span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a class="small" href="https://policies.google.com/privacy?hl=id">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="https://policies.google.com/terms?hl=en-US">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="contact">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
