<?php $this->layout("app", ["title" => $title]) ?>
<section class="py-4 py-md-5">
    <div class="container px-4 px-md-5">
        <div class="bg-light rounded-4 py-4 py-md-5 px-3 px-md-5">

            <div class="text-center mb-4 mb-md-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                    <i class="bi bi-envelope"></i>
                </div>
                <h1 class="fw-bolder">Entre em contato</h1>
                <p class="lead fw-normal text-muted mb-0">Vamos trabalhar juntos!</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <form name="" action="" method="">

                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text"
                                   placeholder="Informe seu nome" required/>
                            <label for="name">Nome Completo</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email"
                                   placeholder="name@example.com" required/>
                            <label for="email">E-mail</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel"
                                   placeholder="(99) 9 9956-7890" required/>
                            <label for="phone">Telefone / WhatsApp</label>
                        </div>

                        <div class="form-floating mb-4">
                            <textarea class="form-control" id="message" name="message"
                                      placeholder="Me conte mais sobre o seu projeto..."
                                      style="height: 10rem;" required></textarea>
                            <label for="message">Mensagem</label>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">
                                <i class="bi bi-send me-2"></i>Enviar
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>