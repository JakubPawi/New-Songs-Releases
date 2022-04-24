## <p align="center" style="text-size:72px">New Songs Releases</p>
<img src="https://img.shields.io/badge/tests-passed-green.svg">      <img       src="https://img.shields.io/badge/made%20with-PHP-purple.svg"> <img src="https://img.shields.io/badge/made%20with-jQuery-yellow.svg"><img src="https://img.shields.io/badge/License-MIT-red.svg">
           

<p align="center">
</p>
<br>

## <p align="center">O aplikacji</p>

Aplikacja New Songs Relases (w skrócie NSR) informuje użytkownika o nowych utworach artysty. Należy wpisać nazwę artysty, by móc na bieżąco śledzić nowości danej osoby. Strona aplikacji posiada wyszukiwarkę, gdzie można wpisać nazwę wykonawcy. Za pomocą ogólnodostępnego (API ze Spotify) wyświetli się dany wykonawca z nowym utworem.

![image](https://user-images.githubusercontent.com/101893519/164735954-76599537-585b-4006-a6e3-880579de5a17.png)

## <p align="center">Uruchomienie</p>
Aby uruchomić aplikację musimy przygotować plik .env i w miejsce CLIENT_ID i CLIENT_ID_SECRET wkleić otrzymane wartości od Spotify Web API. Następnie musimy wykonać w CMD następujące komendy: 

```
composer install
npm install
php artisan key:generate
php migrate 
php artisan serve
```

## <p align="center">Licencja</p>
<p align="center>
          Visual Studio Code (IDE)
          

New Songs Releases jest open-sourcowym projektem na licencji MIT. Do utworzenia projektu został użyty framework Laravel na licencji MIT, biblioteka [Spotify-Web-Api-PHP](https://github.com/jwilsson/spotify-web-api-php) również na licencji MIT i Spotify Web Api użyte w celach edukacyjnych. 

## <p align="center">Autorzy</p> 
[Hubert Łebkowski](https://github.com/lebkowskih)<br>
[Szymon Ludwiński](https://github.com/szymonlud)<br>
[Jakub Pawiński](https://github.com/JakubPawi)

## <p align="center"> Specyfikacja wymagań </p>
<table>
  
  <tr>
    <th>Definicja wymagania(scenariusz)</th>
    <td>Użytkownik wyszukuje blibliotekę piosenek i albumów, a wśród nich najnowsze wydanie</td>
  </tr>
  
  <tr>
    <th>Aktorzy</th>
    <td>Użytkownik chcący wyszukać najnowszy utwór</td>
  </tr>
  
   <tr>
    <th>Warunki początkowe</th>
    <td>Użytkownik wchodzący na stronę internetową</td>
  </tr>
   
  <tr>
    <th>Przebieg realizacji scenariusza</th>
    <td>
      <ul>
      <li>Użytkownik wchodzi na stronę internetową</li>
      <li>W odpowiednim polu wpisuje nazwę artysty, którego chce wyszukać i klika przycisk</li>
      <li>System wyświetla katalog piosenek i albumów, wskazując najnowszy(zmieniając tło na żółte)</li>   
      </ul>
      </td>
  </tr>
</table>
<br>
<b>Wymagania funkcjonalne</b>
<ul>
  <li>użytkownik będzie mógł przeszukać katalog utwórów i albumów danego artysty </li>
  <li>strona internetowa udostępni katalog utwóró i albumów danego artysty</li>
</ul>
<br>
<b>Wymagania niefunkcjonalne</b>
<ul>
  <li>dostępność/niezawodność - strona powinna być dostępna cały czas</li>
  <li>wydajność - strona powinna w szybkim czasie zwracać katalog utworów i albumów</li>
  <li>użyteczność - po wyszukaniu od razu mamy informację, który utwór jest najnowszy</li>
</ul>

## <p align="center">Architektura systemu</p>
<p align="center"><b>Stos technologiczny - architektura rozwojowa</b></p>
<ul>
                                                         
<li>Visual Studio Code (IDE)</li>
<li>Laravel</li>
<li>Spotify Web API</li>
                 
</ul>

                                     
<p align="center"><b>Stos technologiczny - architektura uruchomieniowa</b></p>
<ul>
                    <li>PHP,CSS,JavaScript</li>
                    <li>Laravel,jQuery</li>
                    <li>BootStrap 4</li>
                    <li>npm, artisan</li>
                    <li>MySQL</li>
                    <li>Git</li>
</ul>
                 
## <p align="center">Testy</p>               
<ul>
                 
<li>Test sprawdzający czy Token został dodany do bazy danych co ma kluczowe znaczenie dla działania całej aplikacji</li>
                    
</ul>
                    
<img src="https://i.imgur.com/YEMgQDj.png">
