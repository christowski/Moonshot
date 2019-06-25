<!-- // modal -->
<div id="formmodal" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">

        <header>
            <span onclick="document.getElementById('formmodal').style.display='none'"
            class="">
              <img src="media/icon-close.svg" alt="Close" title="Close this modal">
            </span>
            <h2>Hol’ Moonshot in dein Unternehmen!</h2>
        </header>

          <div class="w3-section">
            <form class="" action="formmailer.php" method="post">
              <input class="" type="text" placeholder="Name *" name="Name" required>
              <input class="" type="mail" placeholder="E-Mail *" name="Mail" required>
              <input class="" type="text" placeholder="Organisation *" name="Organisation" required>
              <input class="" type="text" placeholder="Straße und Hausnummer *" name="Strasse" required>
              <input class="" type="text" placeholder="Postleitzahl, Ort *" name="Ort" required>

              <textarea class="" id="subject" type="text" name="Nachricht" placeholder="Möchtest du uns noch etwas sagen?" style="height:50px"></textarea>

              <div class="modal-checkbox inline-label-form">
                <div class="field-boxes">

                  <label>
                    <input class="" type="checkbox" required>
                    <span>Ich bin damit einverstanden, dass meine Angaben zur Beantwortung meiner Anfrage elektronisch erhoben und gespeichert werden. Hier geht es zur <a href="impressum.php">Datenschutzerklärung</a>.</span>
                  </label>

                  <label>
                    <input class="" type="checkbox" required>
                    <span>Hiermit möchte ich das Innovationsspiel für zehn Tage ausleihen. Das Angebot ist kostenlos. Den Rückversand übernehmen wir.</span>
                  </label>

                </div>
              </div>

              <input type="submit" value="Absenden">
            </form>
          </div>

    </div>
</div>
<!-- // modal end -->
