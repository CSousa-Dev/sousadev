<x-layouts.layout
    description="Entre em contato com a SousaDev e tire suas dúvidas, faça sugestões ou solicite um orçamento."
    title="SousaDev Contato">
    <main id="contact"> 
        <section id="contact-form-section" class="m-b-3">
            <div>
                <h1 class="text-md x-bold secondary m-b-1">
                    Entre em contato
                    <br><span class="text-md x-bold tertiary">Conosco</span>
                </h1>
                <form id="contact-form" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" required placeholder="Nome Sobrenome">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" name="phone" id="phone" required placeholder="(11) 90940-9090">
                    <div class="form-group"></div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required placeholder="email@email.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea name="message" id="message" required placeholder="Deixe sua mensagem aqui!"></textarea>
                    </div>
                    <div id="feedback"></div>
                    <button id="btn-submit-message" type="submit">
                        <span id="btn-submit-text">Enviar</span>
                        <span id="contact-form-spinner" class='hidden spinner'>
                    </p>
                </form>
            </div>
    </section>
    <section id="links">
            <img
                src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731350/contact_owdjmp.svg"
                alt="Entre em contato"
            />
            <div class="icons">
                <a href="https://wa.me/5511997470204" target="_blank">
                    <img class="icon" src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731357/whatsapp_gyiabx.svg" alt="icone para whatsapp"/>
                </a>
                <a href="https://www.linkedin.com/in/renato-sousa2602" target="_blank">
                    <img class="icon" src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731350/linkedin_dqscks.svg" alt="icone para linkedin"/>
                </a>
                <a href="mailto:renatosousa@sousadev.me">
                    <img class="icon" src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731352/email_vixk7b.svg" alt="icone para email"/>
                </a>
            </div>
    </section>
</main>
</x-layouts.layout>