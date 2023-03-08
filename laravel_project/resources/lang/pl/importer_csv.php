<?php
return array (
  'seo' =>
  array (
    'upload' => 'Pulpit nawigacyjny - prześlij plik CSV - :site_name',
    'csv-data-index' => 'Pulpit nawigacyjny - Historia przesyłania CSV - :site_name',
    'csv-data-edit' => 'Pulpit nawigacyjny - analizuj dane CSV - :site_name',
    'item-index' => 'Pulpit nawigacyjny - Import aukcji - :site_name',
    'item-edit' => 'Pulpit nawigacyjny - Edytuj aukcję Importuj - :site_name',
  ),
  'alert' =>
  array (
    'upload-success' => 'Plik został przesłany pomyślnie',
    'upload-empty-file' => 'Przesłany plik ma pustą zawartość',
    'fully-parsed' => 'Plik CSV został w pełni przeanalizowany, nie można go ponownie przeanalizować',
    'parsed-success' => 'Dane pliku CSV zostały pomyślnie przeanalizowane do tymczasowej bazy danych list, przejdź do Menu paska bocznego> Narzędzia> Importer> Lista, aby rozpocząć ostateczny import',
    'csv-file-deleted' => 'Plik CSV został usunięty z magazynu plików serwera',
    'import-item-updated' => 'Importuj informacje o aukcji zostały pomyślnie zaktualizowane',
    'import-item-deleted' => 'Importowanie informacji o aukcji zostało pomyślnie usunięte',
    'import-process-success' => 'Informacje o liście zostały pomyślnie zaimportowane do listy witryn internetowych',
    'import-process-error' => 'Wystąpił błąd podczas przetwarzania importu. Szczegółowe informacje znajdziesz w dzienniku błędów',
    'import-all-process-completed' => 'Proces importowania wszystkich aukcji zakończony',
    'import-item-cannot-edit-success-processed' => 'Nie można edytować importowanych informacji o liście, które zostały pomyślnie zaimportowane',
    'import-process-completed' => 'Proces importowania zakończony',
    'import-process-no-listing-selected' => 'Wybierz aukcje przed rozpoczęciem procesu importowania',
    'import-process-no-categories-selected' => 'Przed rozpoczęciem procesu importowania wybierz jedną lub więcej kategorii',
    'import-listing-process-in-progress' => 'W toku, poczekaj na zakończenie',
    'delete-import-listing-process-no-listing-selected' => 'Wybierz aukcje przed rozpoczęciem procesu usuwania',
  ),
  'sidebar' =>
  array (
    'importer' => 'Importer',
    'upload-csv' => 'Prześlij plik CSV',
    'upload-history' => 'Historia przesyłania',
    'listings' => 'Aukcje',
  ),
  'show-upload' => 'Prześlij plik CSV',
  'show-upload-desc' => 'Ta strona umożliwia przesłanie pliku CSV i przetworzenie go w nieprzetworzone dane wykazu w celu zaimportowania w późniejszych krokach.',
  'csv-for-model' => 'Plik CSV dla',
  'csv-for-model-listing' => 'Wymienianie kolejno',
  'choose-csv-file' => 'Wybierz plik',
  'choose-csv-file-help' => 'Obsługiwane typy plików: csv, txt, maksymalny rozmiar: 10mb',
  'upload' => 'Przekazać plik',
  'csv-skip-first-row' => 'Pomiń pierwszy wiersz',
  'filename' => 'Nazwa pliku',
  'progress' => 'Analiza postępu',
  'uploaded-at' => 'Przesłane w',
  'model-for' => 'Model',
  'import-csv-data-index' => 'Historia przesyłania plików CSV',
  'import-csv-data-index-desc' => 'Ta strona pokazuje wszystkie przesłane pliki CSV i ich przeanalizowany postęp.',
  'parse' => 'Analizować',
  'import-csv-data-edit' => 'Przeanalizuj dane pliku CSV',
  'import-csv-data-edit-desc' => 'Ta strona umożliwia przeanalizowanie danych przesłanego pliku CSV.',
  'start-parse' => 'Rozpocznij analizę',
  'import-csv-data-parse-error' => 'Wystąpił błąd. Załaduj ponownie stronę, aby kontynuować analizowanie pozostałych wierszy.',
  'parsed-percentage' => ':parsed_count z :total_count rekordów przeanalizowanych',
  'column' => 'Kolumna',
  'column-item-title' => 'tytuł aukcji',
  'column-item-slug' => 'notowanie ślimaka',
  'column-item-address' => 'adres aukcji',
  'column-item-city' => 'lista miasta',
  'column-item-state' => 'stan aukcji',
  'column-item-country' => 'kraj listy',
  'column-item-lat' => 'wymieniając lat',
  'column-item-lng' => 'notowanie lng',
  'column-item-postal-code' => 'wymieniając kod pocztowy',
  'column-item-description' => 'Opis Ogłoszenia',
  'column-item-phone' => 'lista numerów telefonów',
  'column-item-website' => 'lista witryn internetowych',
  'column-item-facebook' => 'lista facebooka',
  'column-item-twitter' => 'notowanie twittera',
  'column-item-linkedin' => 'notowanie linkedin',
  'column-item-youtube-id' => 'wymieniając identyfikator youtube',
  'delete-file' => 'Usunąć plik',
  'csv-file' => 'Plik CSV',
  'import-errors' =>
  array (
    'user-not-exist' => 'Użytkownik nie istnieje',
    'item-status-not-exist' => 'Aukcja musi mieć status przesłany, opublikowany lub zawieszony',
    'item-featured-not-exist' => 'Polecana pozycja musi mieć wartość tak lub nie',
    'country-not-exist' => 'Kraj nie istnieje, dodaj kraj w Lokalizacja> Kraj> Dodaj kraj',
    'state-not-exist' => 'Stan nie istnieje, dodaj stan w lokalizacji> Stan> Dodaj stan',
    'city-not-exist' => 'Miasto nie istnieje, dodaj je w opcji Lokalizacja> Miasto> Dodaj miasto',
    'item-title-required' => 'Tytuł aukcji jest wymagany',
    'item-description-required' => 'Opis aukcji jest wymagany',
    'item-postal-code-required' => 'Kod pocztowy aukcji jest wymagany',
    'categories-required' => 'Aukcja musi być przypisana do co najmniej jednej kategorii',
    'import-item-cannot-process-success-processed' => 'Nie można przetwarzać informacji o importowaniu wykazów, które zostały pomyślnie zaimportowane',
  ),
  'import-listing-index' => 'Importuj aukcje',
  'import-listing-index-desc' => 'Ta strona pokazuje wszystkie przeanalizowane dane listy z pliku CSV. Są to nieprzetworzone dane ofert, które można zaimportować do wykazów witryn internetowych.',
  'import-listing-status-not-processed' => 'Nieprzetworzony',
  'import-listing-status-success' => 'Przetworzono z powodzeniem',
  'import-listing-status-error' => 'Przetworzono z błędem',
  'import-listing-order-newest-processed' => 'Najnowsze przetworzone',
  'import-listing-order-oldest-processed' => 'Najstarsze przetworzone',
  'import-listing-order-newest-parsed' => 'Najnowsze przeanalizowane',
  'import-listing-order-oldest-parsed' => 'Najstarsze przeanalizowane',
  'import-listing-order-title-a-z' => 'Tytuł (AZ)',
  'import-listing-order-title-z-a' => 'Tytuł (ZA)',
  'import-listing-order-city-a-z' => 'Miasto (AZ)',
  'import-listing-order-city-z-a' => 'Miasto (ZA)',
  'import-listing-order-state-a-z' => 'Stan (AZ)',
  'import-listing-order-state-z-a' => 'Stan (ZA)',
  'import-listing-order-country-a-z' => 'Kraj (AZ)',
  'import-listing-order-country-z-a' => 'Kraj (ZA)',
  'select' => 'Wybierz',
  'import-listing-title' => 'Tytuł',
  'import-listing-city' => 'Miasto',
  'import-listing-state' => 'Stan',
  'import-listing-country' => 'Kraj',
  'import-listing-status' => 'Status',
  'import-listing-detail' => 'Szczegół',
  'import-listing-slug' => 'Ślimak',
  'import-listing-address' => 'Adres',
  'import-listing-lat' => 'Szerokość',
  'import-listing-lng' => 'Długość geograficzna',
  'import-listing-postal-code' => 'Kod pocztowy',
  'import-listing-description' => 'Opis',
  'import-listing-phone' => 'Telefon',
  'import-listing-website' => 'Stronie internetowej',
  'import-listing-facebook' => 'Facebook',
  'import-listing-twitter' => 'Świergot',
  'import-listing-linkedin' => 'LinkedIn',
  'import-listing-youtube-id' => 'Identyfikator YouTube',
  'import-listing-do-not-parse' => 'NIE PARSE',
  'import-listing-source' => 'Źródło',
  'import-listing-source-csv' => 'Przesyłanie pliku CSV',
  'import-listing-error-log' => 'Dziennik błędów',
  'import-listing-edit' => 'Edytuj import aukcji',
  'import-listing-edit-desc' => 'Ta strona umożliwia edycję informacji z listy importu, a także przetwarzanie poszczególnych informacji z listy importu na listę w witrynie internetowej.',
  'import-listing-information' => 'Informacje o imporcie',
  'choose-import-listing-preference' => 'Importuj do aukcji',
  'choose-import-listing-categories' => 'Wybierz jedną lub więcej kategorii',
  'choose-import-listing-owner' => 'Właściciel aukcji',
  'choose-import-listing-status' => 'Status aukcji',
  'choose-import-listing-featured' => 'Polecane aukcje',
  'import-listing-button' => 'Importuj teraz',
  'choose-import-listing-preference-selected' => 'Importuj wybrane do aukcji',
  'import-listing-selected-button' => 'Importuj wybrane',
  'import-listing-selected-modal-title' => 'Importuj wybrane aukcje',
  'import-listing-selected-total' => 'Razem do zaimportowania',
  'import-listing-selected-success' => 'Powodzenie',
  'import-listing-selected-error' => 'Błąd',
  'import-listing-per-page-10' => '10 rzędów',
  'import-listing-per-page-25' => '25 rzędów',
  'import-listing-per-page-50' => '50 rzędów',
  'import-listing-per-page-100' => '100 rzędów',
  'import-listing-per-page-250' => '250 rzędów',
  'import-listing-per-page-500' => '500 rzędów',
  'import-listing-per-page-1000' => '1000 rzędów',
  'import-listing-select-all' => 'Zaznacz wszystko',
  'import-listing-un-select-all' => 'Odznacz wszystko',
  'csv-parse-in-progress' => 'Trwa analizowanie pliku CSV, poczekaj na zakończenie',
  'error-notify-modal-close-title' => 'Błąd',
  'error-notify-modal-close' => 'Blisko',
  'csv-file-upload-listing-instruction' => 'Instrukcja',
  'csv-file-upload-listing-instruction-columns' => 'Kolumny do zestawienia: tytuł, slug (opcja), adres (opcja), miasto, stan, kraj, szerokość geograficzna (opcja), długość geograficzna (opcja), kod pocztowy, opis, telefon (opcja), strona internetowa (opcja), facebook (opcja) ), twitter (opcja), linkedin (opcja), identyfikator youtube (opcja).',
  'csv-file-upload-listing-instruction-tip-1' => 'Chociaż proces analizy pliku CSV postara się jak najlepiej odgadnąć, upewnij się, że nazwa miasta, stanu i kraju jest zgodna z danymi o lokalizacji (Pasek boczny> Lokalizacja> Kraj, stan, miasto) Twojej witryny.',
  'csv-file-upload-listing-instruction-tip-2' => 'Jeśli Twoja witryna jest hostowana na serwerze współdzielonym, spróbuj przesłać plik CSV zawierający mniej niż 15 000 wierszy za każdym razem, aby uniknąć błędu przekroczenia maksymalnego czasu wykonania.',
  'csv-file-upload-listing-instruction-tip-3' => 'Dla wygody pogrupuj pliki CSV według kategorii. Na przykład restauracje w jednym pliku CSV o nazwie restauracja.csv i hotele w innym pliku CSV o nazwie hotel.csv.',
  'import-listing-delete-selected' => 'Usuń wybrane',
  'import-listing-delete-progress' => 'Usuwam ... proszę czekać',
  'import-listing-delete-progress-deleted' => 'usunięte',
  'import-listing-delete-complete' => 'Gotowe',
  'import-listing-delete-error' => 'Wystąpił błąd, załaduj ponownie stronę, aby kontynuować usuwanie pozostałych rekordów.',
  'import-listing-import-button-progress' => 'Importowanie ... proszę czekać',
  'import-listing-import-button-complete' => 'Gotowe',
  'import-listing-import-button-error' => 'Wystąpił błąd, załaduj ponownie stronę, aby kontynuować importowanie pozostałych rekordów.',
  'import-listing-markup' => 'Narzut',
  'import-listing-markup-help' => 'Podaj kilka słów, aby odróżnić je od innych partii plików',
  'import-listing-markup-all' => 'Wszystkie znaczniki',
);