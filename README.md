# U04 TO-DO-APP

Chasacademy Fullstack 2020

## Uppgift

Skapa ett webbprojekt som är en att-göra-lista där listan sparas och läses in från en databas. 

### Funktionalitet:
- PHP, HTML och CSS med koppling till en MySQL-databas med en tabell för uppgifter
- varje uppgift ska ha:
	- [x] ett unikt id
	- [x] en titel
	- [x] en uppgiftstext
- användaren ska kunna:
	- [x] visa alla uppgifter
	- [x] lägga till en uppgift
	- [x] ändra en uppgift
	- [x] ta bort en uppgift
	- [x] markera en uppgift som klar
- [x] alla ändringar ska sparas i databasen
- [x] grundläggande design av formulär och uppgiftslista med CSS
- [x] minst ett HTML-formulär som med hjälp av PHP kan hantera uppgifterna och uppdateringen av dem

Utökad funktionalitet (ej krav)
- ~~Gör det möjligt att skapa användarnamn och flera listor knutna till en specifikt användarnamn (obs ej autentisering med lösenord)~~
- ~~Gör funktionalitet för att ta bort alla färdiga uppgifter~~
- ~~Gör funktionalitet för att markera alla uppgifter~~

I detta moment kommer ni enskilt att få skapa en digital att-göra-lista i en dynamisk webbplats, efter egen design, med PHP, HTML och CSS för att vidareutveckla era kunskaper i webbutveckling. Den här uppgiften går ut på att i bygga en webbplats som nyttjar en databas i PHP.

### Mål
- [x] En webbplats skriven med PHP, HTML och CSS samt en databas i MySQL (JS får användas men är inte ett krav, JS får dock ej användas på serversidan)
- [x] En MySQL databas med tabeller och data
- [x] Hantera uppgifter
	- [x] Skapa (Create)
	- [x] Läsa (Read)
	- [x] Uppdatera (Update)
	- [x] Ta bort (Delete)
	- [x] Markera uppgift som klar
- [x] Minst ett formulär som hanterar CRUD (se ovan) för uppgifterna
- [x] Design är inte en prioriterad del av uppgiften men grundläggande design av formulär och uppgiftslista är önskvärt
- [x] Versionshantering med Git (inte en commit på slutet av uppgiften, utan regelbundna commits med kommentarer kring vad som implementerats)

### Inlämning
Den färdiga inlämningen ska laddas upp på [GitHub classroom](https://classroom.github.com/a/dqO0d3MU)  med relevanta filer för PHP, HTML och CSS  samt instruktioner i separat(a) sql-fil(er) med SQL-kod som skapar den databas och de tabeller som används för inlämningen. Databasen behöver inte innehålla någon data men applikationen ska gå att köra med de inställningar som skickas med.

### Betygsättning
Den här inlämningen ger underlag för följande kursmål. 
- BE 1.1 PHP
- BE 1.7 Relationsdatabaser, SQL och ER-modellering
- BE 1.12 XML och andra dataformat
- BE 1.13 Webbservrar
- BE 2.1 Webbutveckla med objektorienterad PHP
- BE 2.4 Hantera, administrera och strukturera databaser
- BE 3.1 Arbeta som Fullstack-webbutvecklare med backendutveckling

#### Godkänd
För att nå Godkänd som betyg på denna inlämning ska du:
- [x] utför alla färdigheter som uppgiften har som mål med gott handlag
- [x] Med gott handlag syftas det till att inlämnad kod ska enhetligt följa standard (förslagsvis PSR-2)

#### Väl godkänd
För att nå Väl godkänd som betyg på denna inlämning ska du:
- [ ] utför alla färdigheter som uppgiften har som mål med mycket gott handlag
- [ ] Mycket gott handlag omfattar godkänd nivå men inlämning innehåller även utförlig och enhetlig dokumentation för hela kodbasen (i både kod och separat dokumentation), samt väldesignad struktur för kod och databas.
