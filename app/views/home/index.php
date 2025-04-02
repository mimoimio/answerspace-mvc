<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="jumbotron mt-4">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap');

            .masked-heading {
                background-image: linear-gradient(45deg,
                        #007bff, #00ff95, #007bff, #00ff95, #007bff);
                background-size: 300%;
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
                font-weight: bold;
                text-align: center;
                animation: gradientMove 10s linear infinite;
            }

            @keyframes gradientMove {
                0% {
                    background-position: 0% 50%;
                }

                100% {
                    background-position: 300% 50%;
                }
            }

            /* Optional: Add a subtle text shadow for depth */
            .masked-heading {
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            }

            h1.display-1 {
                font-family: 'Jaro', cursive;
            }
        </style>
        <h1 class="display-1 text-center mb-5 masked-heading ">AnswerSpace</h1>
        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p> -->
    </div>
    <?php $this->component('news'); ?>
    <div class="container">
        <div class="row">
            <?php foreach ($data["answers"] as $answer) : ?>
                <div class="col-md-4  mb-4 ">
                    <a href="/answer/<?= $answer['answer_id'] ?>" class="text-decoration-none">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title text-truncate"><?= $answer["answer_text"] ?></h5>
                                <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;"><?= $answer["answer_text"] ?></p>
                                <p class="card-text">By <?= $answer["username"] ?></p>
                                <h6 class="card-subtitle mb-2 text-muted"> <?= $answer["time_created"] ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>