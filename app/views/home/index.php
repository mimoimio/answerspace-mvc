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
    </div>
    <?= $this->rayafication($this->component('news')); ?>
    <div class="">
        <div class="row">
            <?php foreach ($data["answers"] as $answer) : ?>
                <?= $this->rayafication($this->component('answer_card', $answer)); ?>
            <?php endforeach; ?>
        </div>
    </div>
