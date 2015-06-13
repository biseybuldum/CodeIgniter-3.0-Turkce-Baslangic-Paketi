# CodeIgniter-3.0-Turkce-Baslangic-Paketi
CodeIgniter 3.0 için çoklu dil seçeneği, Türkçeleştirilmiş dil dosyaları ve birkaç özelliğe daha sahip bir başlangıç paketidir.

1 - Kısa Tanıtım
Bu paket, CodeIgniter ile geliştirme yapacak olan yazılımcılar için hazırlanmış bir başlangıç paketidir. CodeIgniter 3.0 versiyonu kullanılmıştır. Bu dökümanda, tamamen başlangıç düzeyinde olan kullanıcılara yönelik bir anlatım yapılmıştır.

2 - Paket İçeriği
  - CodeIgniter 3.0
  - Örnek veritabanı
  
3 - Özellikler
  - Çoklu dil seçeneği
  - Çoklu dil yapısına uygun veritabanı
  - Sık kullanılan kütüphane ve yardımcı dosyaları barındıran autoload dosyası
  - URL'deki "index.php" yapısını ortadan kaldıran .htaccess dosyası
  - Türkçeleştirilmiş dil dosyaları
  - Yabancı karakter ayarlamaları

4 - Detaylı Bilgileri
  - Sistem CodeIgniter 3.0 üzerine kurulmuş bir başlangıç paketidir. İçeriğinde yüklü gelen tüm dil dosyalarının Türkçe halleri mevcuttur. Bu dosyalar aşağıda sıralanmıştır:
    - calendar_lang.php
    - date_lang.php
    - db_lang.php
    - email_lang.php
    - form_validation_lang.php
    - ftp_lang.php
    - imglib_lang.php
    - migration_lang.php
    - number_lang.php
    - pagination_lang.php
    - profiler_lang.php
    - unit_test_lang.php
    - upload_lang.php
    
  - Sistemde öntanımlı olarak iki dil mevcut olup, bunlar Türkçe ve İngilizcedir. Sistemin ana dili Türkçe olarak ayarlanmıştır. Bunu değiştirmek isterseniz application/config/config.php dosyasının 74. satırında bulunan değişkeni kullanabilirsiniz.
  - Sisteme yeni bir dil eklemek ya da mevcut dillerin kodlarını değiştirmek için yapmanız gerekenler aşağıda sıralanmıştır:
    - system/language dizini altına, yeni diliniz için bir klasör oluşturun ve diğer dizinlerdeki(english veya turkce dizinlerinden bir tanesinin) tüm dosyaları, bu dizine kopyalayın. Aksi durumda hata mesajlarını alamazsınız. 
    - application/core/MY_Lang.php dosyasının 25. satırında "'tr' => 'turkce'" kodunu göreceksiniz. Yeni bir dil eklemek isterseniz yine aynı yapıda olacak şekilde bir satır ekleyin. İlk değer URL'de görüntülenecek kısa kod(Örn. http://www.siteadresi.com/tr/home gibi), ikinci değer ise system/languages altındaki dizin ismidir.
    - Veritabanınız üzerinde daha önceden oluşturduğunuz tabloların, yeni dil kodunuz prefix olacak şekilde birer örneğini oluşturun. Paketin içinden çıkan örnek veritabanı üzerinden gidecek olursak 'fr' => 'french' şeklinde bir ekleme yaptıysanız, veritabanı tablolarınızdaki prefix "fr_" olmalıdır.
    
  - application/config/autoload.php üzerinden önyükleme yaptırılan kütüphaneler(library) aşağıda listelenmiştir:
    - session
    - form_validation
    - email
    - pagination
    - database
    
  - application/config/autoload.php üzerinden önyükleme yaptırılan yardımcılar(helper) aşağıda listelenmiştir:
    - url
    - form
    - security
    - language
    - text
    - html
    - string
    
    Bu kütüphane ve yardımcıları, en çok kullanılanlar olduğu için tanımladım. Eğer bir değişiklik yapacaksanız, aşağıdakileri kaldırmanız durumunda hatalar meydana gelecektir:
      - url(yardımcı)
      - language(yardımcı)
      - database(kütüphane)
      
  - Sistemin URL yapısı şu sıra ile ilerler: hostname/dil/path
  
  - system/language dizini altında bulunan turkce ve english dizinleri altında birer adet main_lang.php dosyası göreceksiniz. Bu dosyalar, kendi özelleştirmeleriniz için eklenmiş olup, autoload dosyası ile yüklenmiştir. Eğer bu dosyaları kullanmayacaksanız application/config/autoload.php dosyasının 123. satırındaki "$autoload['language'] = array('main');" kodunu, "$autoload['language'] = array();" olarak değiştirebilirsiniz.
  
  - application/config/foreign_chars.php dosyasındaki yabancı karakter düzenlemeleri, Türkçe için uygun hale getirilmiştir. Yapılan düzenlemeler aşağıdadır:
    - '/ä|æ|ǽ/' => 'a',
    - '/ö|œ/' => 'o',
    - '/ü/' => 'u',
    - '/Ä/' => 'a',
    - '/Ü/' => 'u',
    - '/Ö/' => 'o',
  
  - ana dizinde bulunan .htaccess dosyasında rewrite kullanılarak, URL yapısından "index.php" çıkartılmıştır. Şu an için .htaccess dosyası, kök dizinde çalışma yapısına uygun haldedir. Eğer bir alt dizinde çalışma yapacaksanız (Örn. www.siteadresi.com/foo gibi), .htaccess dosyasında aşağıdaki düzenlemeleri yapmanız gereklidir:
    - 8. satırdaki "RewriteRule (.*?)index\.php/*(.*) /$1$2 [R=301,NE,L]" kısmını, "RewriteRule (.*?)index\.php/*(.*) /foo/$1$2 [R=301,NE,L]" olarak değiştirin.
    - 13. satırdaki "RewriteRule ^(.*)$ /index.php/$1 [L]" kısmını, "RewriteRule ^(.*)$ /foo/index.php/$1 [L]" olarak değiştirin.
  
	 Hepsi bu kadar!
	  
	
