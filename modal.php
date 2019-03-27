<!-- // cta modal -->
<div class="container">
    <div class="cta-big cta-big--center">
        <a onclick="document.getElementById('formmodal').style.display='block'" class="">Jetzt ausleihen</a>
    </div>
</div>


<!-- // modal -->
<div id="formmodal" class="w3-modal">
    <div class="w3-modal-content w3-animate-opacity">

        <header>
            <span onclick="document.getElementById('formmodal').style.display='none'"
            class="">CLOSE</span>
            <h2>Hol’ Moonshot in dein Unternehmen!</h2>
        </header>

          <div class="w3-section">
            <form class="" action="formmailer.php" method="post">
              <input class="" type="text" placeholder="Name" name="name" required>
              <input class="" type="mail" placeholder="E-Mail" name="mail" required>
              <input class="" type="text" placeholder="Organisation" name="organisation" required>
              <input class="" type="text" placeholder="Straße und Hausnummer" name="street" required>
              <input class="" type="text" placeholder="Postleitzahl" name="street" required>
              <input class="" type="text" placeholder="Ort" name="place" required>

              <textarea class="" id="subject" type="text" name="subject" placeholder="Möchtest du uns noch etwas sagen?" style="height:100px"></textarea>

              <input class="" type="checkbox" required><small>Ich bin damit einverstanden, dass meine Angaben zur Beantwortung meiner Anfrage elektronisch erhoben und gespeichert werden. Hier geht es zur Datenschutzerklärung.</small>
              <input class="" type="checkbox" required><small>Hiermit möchte ich das Innovationsspiel für zehn Tage ausleihen. Das Angebot ist kostenlos. Den Rückversand übernehmen wir.</small>

              <input type="submit" name="absenden" value="Absenden">
            </form>
          </div>

    </div>
</div>
<!-- // modal end -->
