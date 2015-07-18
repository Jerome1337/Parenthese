<!-- MODAL -->
<div id="formConfirm" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <p class="lead">Etes-vous sûr que les informations renseignées sont correctes ?</p>
    <div class="text-center">
        <button id="sendForm" data-reveal-id="formSuccess" class="modalButton">Oui</button>
        <button id="changeForm" class="modalButton">Non</button>
    </div>
</div>
<div id="formSuccess" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" aria-hidden="true" role="dialog">
    <p class="lead"><?php echo $modalMessage ?></p>
    <button id="endForm" class="modalButton">Fermer</button>
</div>