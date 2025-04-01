<div class="container mt-4">
    <!-- News/Announcement Section -->
    <div class="alert alert-info mb-4" role="alert">
        <h4 class="alert-heading text-center">🌙 MAT RI YAAAAA 🌙</h4>
        <p class="text-center mb-0">Selamat Hari Raya Maaf Zahir dan Batin</p>
        <hr>
        <p class="small text-center mb-0">
            Kami (mior muhammad adib) mengucapkan Selamat Hari Raya kepada semua pengguna AnswerSpace (<?= count($data["users"])." orang!!!" ;?>). 
            Semoga kita semua diberkati dengan kebahagiaan dan kesejahteraan.
        </p>
    </div>

    <h1 class="display-3 mb-4">About AnswerSpace</h1>
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4">What is AnswerSpace?</h2>
                    <p class="card-text">
                        AnswerSpace is a community-driven platform where users can share knowledge and insights. 
                        Think of it as a collaborative space where questions meet answers, creating a valuable 
                        knowledge repository for everyone.
                    </p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4">Latest Updates</h2>
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Platform Launch</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">AnswerSpace is now officially launched! Join our growing community.</p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">New Features Coming Soon</h5>
                                <small class="text-muted">1 week ago</small>
                            </div>
                            <p class="mb-1">Stay tuned for exciting new features and improvements.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4">How It Works</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center mb-3">
                                <i class="fas fa-edit fs-2 text-primary mb-2"></i>
                                <h5>Post Answers</h5>
                                <p class="small">Share your knowledge and expertise with the community</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center mb-3">
                                <i class="fas fa-users fs-2 text-primary mb-2"></i>
                                <h5>Connect</h5>
                                <p class="small">Engage with other users and build your network</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center mb-3">
                                <i class="fas fa-lightbulb fs-2 text-primary mb-2"></i>
                                <h5>Learn</h5>
                                <p class="small">Discover new perspectives and expand your knowledge</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4">Our Mission</h2>
                    <p class="card-text">
                        We believe in the power of shared knowledge. Our mission is to create a space where 
                        everyone can contribute their expertise and learn from others. Whether you're a 
                        beginner or an expert, AnswerSpace is your platform to grow and share.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title h4">Quick Stats</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-users text-primary me-2"></i>
                            <strong>Active Community Members</strong>
                            <p class="small text-muted ms-4 mb-0">Growing everyday</p>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-comment-dots text-primary me-2"></i>
                            <strong>Growing Answer Database</strong>
                            <p class="small text-muted ms-4 mb-0">Knowledge at your fingertips</p>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-clock text-primary me-2"></i>
                            <strong>24/7 Available</strong>
                            <p class="small text-muted ms-4 mb-0">Access anytime, anywhere</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title h4">Join Our Community</h2>
                    <p class="card-text">
                        Ready to be part of our growing community? Start sharing your knowledge today!
                    </p>
                    <a href="<?= BASEURL ?>/answer" class="btn btn-primary w-100">Post Your First Answer</a>
                </div>
            </div>
        </div>
    </div>
</div>
