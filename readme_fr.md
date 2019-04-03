# Installation
Contrôle de robots aspirateurs via IFTTT  
WORKS WITH IFTTT : iRobot, Neato, Samsung...  
    
### Prérequis 
  
Récupérer le code Key du service Webhooks de IFTTT.  
Dans IFTTT.com, après avoir créé un compte le cas échéant, recherchez (rubrique Search) le service Webhooks, et récupérez votre code personnel KEY dans la rubrique Documentation.  
  
Créer les applets nécessaires sous IFTTT pour le contrôle des trois actions sur le robot aspirateur : Start, Stop, Dock
  
Exemple pour les aspirateurs Roomba d'iRobot :   
  
  * Dans IFTTT.com, créez un nouvel Applet dans la rubrique My Applets (Bouton NEW APPLET)
  * Pour la partie +THIS, cherchez Webhooks, sélectionnez "Receive a Web Request", et nommez le déclencheur (Trigger) "vacuum_start"  
  * Pour la partie +THAT, cherchez iRobot, appareillez votre compte iRobot le cas échéant puis sélectionnez "Start"  
  * Sauvegarder votre Applet IFTTT
  
  * Créez 1 autre applet similaire pour le webhook "vacuum_stop"  
  * Créez 1 autre applet similaire pour le webhook "vacuum_dock"  
 
  
    
### Ajout du périphérique eedomus
Cliquez sur "Configuration" / "Ajouter ou supprimer un périphérique" / "Store eedomus" / "Vacuum IFTTT" / "Créer"  

  
*Voici la donnée à renseigner:*

* [Obligatoire] - Le code Key du service Webhooks IFTTT
  
Une fois le périphérique créé, récupérez son code API dans son écran de configuration.  
  
Retournez dans IFTTT.com et créez un nouvel applet :  

  * Pour la partie +THIS, cherchez iRobot, sélectionnez "Mission Complete", et validez    
  * Pour la partie +THAT, cherchez Webhooks, sélectionnez "Make a web resquest", et saisissez l'URL suivante :  
  * <https://api.eedomus.com/set?action=periph.value&periph_id=123456&value=99&api_user=XXXXXX&api_secret=yyyyyy>
  * Où 123456 est le code API du nouveau périphérique eedomus installé, et XXXXX et YYYYY vos codes API eedomus
  * Sauvegarder votre Applet IFTTT
  
  
  
Influman 2018  
therealinfluman@gmail.com  
[Paypal Me](https://www.paypal.me/influman "paypal.me")  
  

