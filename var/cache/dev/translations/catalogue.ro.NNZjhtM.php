<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ro', array (
  'validators' => 
  array (
    'This value should be false.' => 'Această valoare ar trebui să fie falsă (false).',
    'This value should be true.' => 'Această valoare ar trebui să fie adevărată (true).',
    'This value should be of type {{ type }}.' => 'Această valoare ar trebui să fie de tipul {{ type }}.',
    'This value should be blank.' => 'Această valoare ar trebui sa fie goală.',
    'The value you selected is not a valid choice.' => 'Valoarea selectată nu este o opțiune validă.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Trebuie să selectați cel puțin {{ limit }} opțiune.|Trebuie să selectați cel puțin {{ limit }} opțiuni.|Trebuie să selectați cel puțin {{ limit }} de opțiuni',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Trebuie să selectați cel mult {{ limit }} opțiune.|Trebuie să selectați cel mult {{ limit }} opțiuni.|Trebuie să selectați cel mult {{ limit }} de opțiuni.',
    'One or more of the given values is invalid.' => 'Una sau mai multe dintre valorile furnizate sunt invalide.',
    'This field was not expected.' => 'Acest câmp nu era de aşteptat.',
    'This field is missing.' => 'Acest câmp este lipsă.',
    'This value is not a valid date.' => 'Această valoare nu reprezintă o dată validă.',
    'This value is not a valid datetime.' => 'Această valoare nu reprezintă o dată și oră validă.',
    'This value is not a valid email address.' => 'Această valoare nu reprezintă o adresă de e-mail validă.',
    'The file could not be found.' => 'Fișierul nu a putut fi găsit.',
    'The file is not readable.' => 'Fișierul nu poate fi citit.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fișierul este prea mare ({{ size }} {{ suffix }}). Dimensiunea maximă permisă este {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Tipul fișierului este invalid ({{ type }}). Tipurile permise de fișiere sunt ({{ types }}).',
    'This value should be {{ limit }} or less.' => 'Această valoare ar trebui să fie cel mult {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caracter.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caractere.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} de caractere.',
    'This value should be {{ limit }} or more.' => 'Această valoare ar trebui să fie cel puțin {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caracter.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caractere.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} de caractere.',
    'This value should not be blank.' => 'Această valoare nu ar trebui să fie goală.',
    'This value should not be null.' => 'Această valoare nu ar trebui să fie nulă (null).',
    'This value should be null.' => 'Această valoare ar trebui să fie nulă (null).',
    'This value is not valid.' => 'Această valoare nu este validă.',
    'This value is not a valid time.' => 'Această valoare nu reprezintă o oră validă.',
    'This value is not a valid URL.' => 'Această valoare nu reprezintă un URL (link) valid.',
    'The two values should be equal.' => 'Cele două valori ar trebui să fie egale.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fișierul este prea mare. Mărimea maximă permisă este {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fișierul este prea mare.',
    'The file could not be uploaded.' => 'Fișierul nu a putut fi încărcat.',
    'This value should be a valid number.' => 'Această valoare nu reprezintă un număr valid.',
    'This file is not a valid image.' => 'Acest fișier nu este o imagine validă.',
    'This is not a valid IP address.' => 'Această valoare nu este o adresă IP validă.',
    'This value is not a valid language.' => 'Această valoare nu reprezintă o limbă corectă.',
    'This value is not a valid locale.' => 'Această valoare nu reprezintă un dialect (o limbă) corect.',
    'This value is not a valid country.' => 'Această valoare nu este o țară validă.',
    'This value is already used.' => 'Această valoare este folosită deja.',
    'The size of the image could not be detected.' => 'Mărimea imaginii nu a putut fi detectată.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Lățimea imaginii este prea mare ({{ width }}px). Lățimea maximă permisă este de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Lățimea imaginii este prea mică ({{ width }}px). Lățimea minimă permisă este de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Înălțimea imaginii este prea mare ({{ height }}px). Înălțimea maximă permisă este de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Înălțimea imaginii este prea mică ({{ height }}px). Înălțimea minimă permisă este de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Această valoare trebuie să fie parola curentă a utilizatorului.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Această valoare trebuie să conțină exact {{ limit }} caracter.|Această valoare trebuie să conțină exact {{ limit }} caractere.|Această valoare trebuie să conțină exact {{ limit }} de caractere.',
    'The file was only partially uploaded.' => 'Fișierul a fost încărcat parțial.',
    'No file was uploaded.' => 'Nu a fost încărcat nici un fișier.',
    'No temporary folder was configured in php.ini.' => 'Nu este configurat nici un director temporar in php.ini.',
    'Cannot write temporary file to disk.' => 'Nu a fost posibilă scrierea fișierului temporar pe disk.',
    'A PHP extension caused the upload to fail.' => 'O extensie PHP a prevenit încărcarea cu succes a fișierului.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Această colecție trebuie să conțină cel puțin {{ limit }} element.|Această colecție trebuie să conțină cel puțin {{ limit }} elemente.|Această colecție trebuie să conțină cel puțin {{ limit }} de elemente.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Această colecție trebuie să conțină cel mult {{ limit }} element.|Această colecție trebuie să conțină cel mult {{ limit }} elemente.|Această colecție trebuie să conțină cel mult {{ limit }} de elemente.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Această colecție trebuie să conțină {{ limit }} element.|Această colecție trebuie să conțină {{ limit }} elemente.|Această colecție trebuie să conțină {{ limit }} de elemente.',
    'Invalid card number.' => 'Numărul card invalid.',
    'Unsupported card type or invalid card number.' => 'Tipul sau numărul cardului nu sunt valide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Acesta nu este un cod IBAN (International Bank Account Number) valid.',
    'This value is not a valid ISBN-10.' => 'Această valoare nu este un cod ISBN-10 valid.',
    'This value is not a valid ISBN-13.' => 'Această valoare nu este un cod ISBN-13 valid.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Această valoare nu este un cod ISBN-10 sau ISBN-13 valid.',
    'This value is not a valid ISSN.' => 'Această valoare nu este un cod ISSN valid.',
    'This value is not a valid currency.' => 'Această valoare nu este o monedă validă.',
    'This value should be equal to {{ compared_value }}.' => 'Această valoare trebuie să fie egală cu {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Această valoare trebuie să fie mai mare de {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Această valoare trebuie să fie mai mare sau egală cu {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Această valoare trebuie identică cu {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Această valoare trebuie să fie mai mică de {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Această valoare trebuie să fie mai mică sau egală cu {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Această valoare nu trebuie să fie egală cu {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Această valoare nu trebuie să fie identică cu {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Raportul imaginii este prea mare ({{ ratio }}). Raportul maxim permis este {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Raportul imaginii este prea mic ({{ ratio }}). Raportul minim permis este {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Imaginea este un pătrat ({{ width }}x{{ height }}px). Imaginile pătrat nu sunt permise.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Imaginea are orientarea peisaj ({{ width }}x{{ height }}px). Imaginile cu orientare peisaj nu sunt permise.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Imaginea are orientarea portret ({{ width }}x{{ height }}px). Imaginile cu orientare portret nu sunt permise.',
    'An empty file is not allowed.' => 'Nu se permite un fișier gol.',
    'The host could not be resolved.' => 'Numele host nu a putut fi rezolvat către o adresă IP.',
    'This value does not match the expected {{ charset }} charset.' => 'Această valoare nu corespunde setului de caractere {{ charset }} așteptat.',
    'This is not a valid Business Identifier Code (BIC).' => 'Codul BIC (Business Identifier Code) nu este valid.',
    'Error' => 'Eroare',
    'This is not a valid UUID.' => 'Identificatorul universal unic (UUID) nu este valid.',
    'This value should be a multiple of {{ compared_value }}.' => 'Această valoare trebuie să fie un multiplu de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Codul BIC (Business Identifier Code) nu este asociat cu codul IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Această valoare trebuie să fie un JSON valid.',
    'This collection should contain only unique elements.' => 'Acest set ar trebui să conțină numai elemente unice.',
    'This value should be positive.' => 'Această valoare ar trebui să fie pozitivă.',
    'This value should be either positive or zero.' => 'Această valoare trebuie să fie pozitivă sau zero.',
    'This value should be negative.' => 'Această valoare ar trebui să fie negativă.',
    'This value should be either negative or zero.' => 'Această valoare trebuie să fie negativă sau zero.',
    'This value is not a valid timezone.' => 'Această valoare nu este un fus orar valid.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Această parolă a fost compromisă și nu poate fi utilizată. Vă rugăm să utilizați o altă parolă.',
    'This value should be between {{ min }} and {{ max }}.' => 'Această valoare trebuie să fie între {{ min }} și {{ max }}.',
    'This value is not a valid hostname.' => 'Această valoare nu este un numele gazdei valid.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Numărul de elemente din această colecție ar trebui să fie un multiplu al {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Această valoare trebuie să îndeplinească cel puțin una dintre următoarele reguli:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Fiecare element din acest set ar trebui să îndeplinească propriul set de reguli.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Această valoare nu este un număr internațional de identificare (ISIN) valabil.',
    'This value should be a valid expression.' => 'Această valoare ar trebui să fie o expresie validă.',
    'This value is not a valid CIDR notation.' => 'Această valoare nu este o notație CIDR validă.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Valoarea netmask-ului trebuie sa fie intre {{ min }} si {{ max }}.',
    'This form should not contain extra fields.' => 'Acest formular nu ar trebui să conțină câmpuri suplimentare.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Fișierul încărcat a fost prea mare. Vă rugăm sa încărcați un fișier mai mic.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token-ul CSRF este invalid. Vă rugăm să retrimiteți formularul.',
    'This value is not a valid HTML5 color.' => 'Această valoare nu este un cod de culoare HTML5 valid.',
    'Please enter a valid birthdate.' => 'Vă rugăm să introduceți o dată de naștere validă.',
    'The selected choice is invalid.' => 'Valoarea selectată este invalidă.',
    'The collection is invalid.' => 'Colecția nu este validă.',
    'Please select a valid color.' => 'Vă rugăm să selectați o culoare validă.',
    'Please select a valid country.' => 'Vă rugăm să selectați o țară validă.',
    'Please select a valid currency.' => 'Vă rugăm să selectați o monedă validă.',
    'Please choose a valid date interval.' => 'Vă rugăm să selectați un interval de zile valid.',
    'Please enter a valid date and time.' => 'Vă rugăm să introduceți o dată și o oră validă.',
    'Please enter a valid date.' => 'Vă rugăm să introduceți o dată validă.',
    'Please select a valid file.' => 'Vă rugăm să selectați un fișier valid.',
    'The hidden field is invalid.' => 'Câmpul ascuns este invalid.',
    'Please enter an integer.' => 'Vă rugăm să introduceți un număr întreg.',
    'Please select a valid language.' => 'Vă rugăm să selectați o limbă validă.',
    'Please select a valid locale.' => 'Vă rugăm să selectați o setare locală validă.',
    'Please enter a valid money amount.' => 'Vă rugăm să introduceți o valoare monetară corectă.',
    'Please enter a number.' => 'Vă rugăm să introduceți un număr.',
    'The password is invalid.' => 'Parola nu este validă.',
    'Please enter a percentage value.' => 'Vă rugăm să introduceți o valoare procentuală.',
    'The values do not match.' => 'Valorile nu coincid.',
    'Please enter a valid time.' => 'Vă rugăm să introduceți o oră validă.',
    'Please select a valid timezone.' => 'Vă rugăm să selectați un fus orar valid.',
    'Please enter a valid URL.' => 'Vă rugăm să introduceți un URL valid.',
    'Please enter a valid search term.' => 'Vă rugăm să introduceți un termen de căutare valid.',
    'Please provide a valid phone number.' => 'Vă rugăm să introduceți un număr de telefon valid.',
    'The checkbox has an invalid value.' => 'Bifa nu are o valoare validă.',
    'Please enter a valid email address.' => 'Vă rugăm să introduceți o adresă de email validă.',
    'Please select a valid option.' => 'Vă rugăm să selectați o opțiune validă.',
    'Please select a valid range.' => 'Vă rugăm să selectați un interval valid.',
    'Please enter a valid week.' => 'Vă rugăm să introduceți o săptămână validă.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'flasher' => 
  array (
    'success' => 'Success',
    'error' => 'Error',
    'warning' => 'Warning',
    'info' => 'Info',
    'The resource was created' => 'The :resource was created',
    'The resource was updated' => 'The :resource was updated',
    'The resource was saved' => 'The :resource was saved',
    'The resource was deleted' => 'The :resource was deleted',
    'resource' => 'resource',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
