Google Analytics API ile gerçek zamanlı ziyaretci ve Analytics günlük kullanıcı sayısı istatistiklerini getirme

### API Almak için

1.) https://console.cloud.google.com adresine giriyoruz ve yeni proje oluştur diyerek bir isim belirleyip projemizi oluşturuyoruz.
2.) Daha sonra sol menüden Kitaplık bölümüne giriyoruz. İlgili link: https://console.cloud.google.com/apis/library
3.) Analytics diye aratıp Analytics API’yı buluyoruz ve içine girip aktif et diyoruz.
4.) Aktif ettikten sonra yine sol menüden tekrardan Kimlik bilgileri kısmına giriyoruz. 
    İlgili link: https://console.cloud.google.com/apis/credentials
5.) Burada bir tane “Hizmet hesabı anahtarı” oluşturuyoruz.

Açılan sayfada yeni hizmet hesabı deyip bir hesap adı belirleyin. Ve alttaki anahtar türünün json olduğundan emin olun. Diğerlerine dokunmanıza gerek yok. Oluştur deyin, çıkan uyarıda da yine rolsüz oluştur deyin. Oluşturma işlemi bittiğinde bir json dosyası indirilecek otomatik olarak. Onu saklayın, çünkü google’ın cloud servislerine bağlanmak için onu kullanacaksınız.