Stellen Sie sicher, dass Docker bzw. Docker Compose in Ihrer Umgebung installiert ist.

Überprüfen Sie, ob die Datei .env im Stammverzeichnis des Ordners vorhanden ist.

Wechseln Sie im Terminal in das Stammverzeichnis des Ordners.

Führen Sie den folgenden Befehl aus: docker compose build

Wenn dabei kein Fehler auftritt:

  Führen Sie den Befehl docker compose up -d aus.

  (optional) Um zu prüfen, ob die Container aktiv sind, führen Sie docker ps aus.

   Sie sollten die drei Container db, php und nginx sehen.

Öffnen Sie Ihren Browser und rufen Sie die Adresse http://localhost:8080
 auf.
