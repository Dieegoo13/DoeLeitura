<?php
include ('templates/header.php'); 

?>
   <main>
        <section id="home" class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1><span>Doe</span>Leitura</h1>
                        <p>
                        Desenvolvido para fins educacionais e pedagógicos, com o objetivo de promover a doação de livros, estimular a leitura e a reciclagem de materiais.
                        </p>
                        <div class="btn-doar">
                            <a href="#formulario">
                                <button>Fazer uma doação de livros</button>
                            </a>
                        </div>
                    </div>
                    <div class="img-topo-site">
                        <img src="img/stack-livros.jpg" alt="pilha de livros">
                    </div>
                </div>
            </div>
        </section>

        <section id="como-funciona" class="como-funciona">
            <div class="interface">
                <h2 class="titulo">Como Funciona ?</h2>
                <div class="flex">
                    <div class="doar-box">
                        <div class="doar-item">
                            <img src="img/pilha-livros.jpg" alt="">
                            <div class="texto">
                                <h3>Como doar e onde doar?</h3>
                                <p>O doador entra em contato conosco através do Site, agendamos o melhor dia e horário para a entrega do material, em total segurança. <br> O ponto de doação é na escola municipal Pedro Aleixo, Endereço: Rua Osvaldo 25, Bairro: Liberdade.</p>
                            </div>
                        </div>
                        <div class="doar-item">
                            <img src="img/livro-aberto.jpg" alt="">
                            <div class="texto">
                                <h3>Para onde vão os livros que você doa?</h3>
                                <p>Os materiais são direcionados para a própria instituição, <br> bibliotecas, ONGs. Materiais em mau estado são enviados para reciclagem. Nada é perdido.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section id="sobre" class="sobre"> 
             <div class="txt-sobre">
                 <h2 class="titulo">Sobre o Projeto</h2>
                 <h4>Estimulamos à leitura através de doações</h4>
                 <p>
                    Este projeto foi criado com o propósito de estimular a leitura e reduzir o desperdício de materiais recicláveis, promovendo a doação de livros para uma escola pública. <br> A iniciativa visa não apenas fornecer recursos educacionais, mas também fomentar a conscientização sobre a importância da reciclagem e da reutilização, contribuindo <br> para um ambiente mais sustentável e enriquecendo a experiência de aprendizado dos alunos.
                 </p>
                    <br>
                 <p>
                    NOSSAS REDES:
                 </p>
                 <div class="btn-social">
                    <a href="#"><button><i class="bi bi-instagram"></i></button></a>
                    <a href="#"><button><i class="bi bi-facebook"></i></button></a>
                    <a href="#"><button><i class="bi bi-whatsapp"></i></button></a>
                 </div>
             </div>
         </section>

         <section id="formulario" class="formulario">
            <div class="interface">
                <h2 class="titulo">Contato</h2>
                <h4>AGENDAR DOAÇÃO</h4>
                <p>
                   Caso tenha qualquer dúvida antes de solicitar a doação pode nos enviar uma mensagem. <br>Por favor, informe no campo mensagem a data e o horário da visita. As visitas podem ser agendadas de <br> segunda a sexta, das 9h às 18h.
                </p>

                <form action="send_email.php" method="post">
                    <input type="text" name="nome" placeholder="Seu nome completo" required>
                    <input type="text" name="telefone" placeholder="Telefone" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="mensagem" placeholder="Sua mensagem" required></textarea>
                    <div class="btn-enviar"><input type="submit" value="AGENDAR"></div>
                </form>
            </div>
         </section>
   </main>
<?php include ('templates/footer.php'); ?>
