# Installation
Contr�le de robots aspirateurs via IFTTT  
WORKS WITH IFTTT : iRobot, Neato, Samsung...  
    
### Pr�requis 
  
R�cup�rer le code Key du service Webhooks de IFTTT.  
Dans IFTTT.com, apr�s avoir cr�� un compte le cas �ch�ant, recherchez (rubrique Search) le service Webhooks, et r�cup�rez votre code personnel KEY dans la rubrique Documentation.  
  
Cr�er les applets n�cessaires sous IFTTT pour le contr�le des trois actions sur le robot aspirateur : Start, Stop, Dock
  
Exemple pour les aspirateurs Roomba d'iRobot :   
  
  * Dans IFTTT.com, cr�ez un nouvel Applet dans la rubrique My Applets (Bouton NEW APPLET)
  * Pour la partie +THIS, cherchez Webhooks, s�lectionnez "Receive a Web Request", et nommez le d�clencheur (Trigger) "vacuum_start"  
  * Pour la partie +THAT, cherchez iRobot, appareillez votre compte iRobot le cas �ch�ant puis s�lectionnez "Start"  
  * Sauvegarder votre Applet IFTTT
  
  * Cr�ez deux autres applets similaires pour les webhooks "vacuum_stop" et "vacuum_dock"  
  
    
### Ajout du p�riph�rique eedomus
Cliquez sur "Configuration" / "Ajouter ou supprimer un p�riph�rique" / "Store eedomus" / "Vacuum IFTTT" / "Cr�er"  

  
*Voici la donn�e � renseigner:*

* [Obligatoire] - Le code Key du service Webhooks IFTTT
  
Une fois le p�riph�rique cr��, r�cup�rez son code API dans son �cran de configuration.  
  
Retournez dans IFTTT.com et cr�ez un nouvel applet :  

  * Pour la partie +THIS, cherchez iRobot, s�lectionnez "Mission Complete", et validez    
  * Pour la partie +THAT, cherchez Webhooks, s�lectionnez "Make a web resquest", et saisissez l'URL suivante :  
  * <https://api.eedomus.com/set?action=periph.value&periph_id=123456&value=99&api_user=XXXXXX&api_secret=yyyyyy>
  * O� 123456 est le code API du nouveau p�riph�rique eedomus install�, et XXXXX et YYYYY vos codes API eedomus
  * Sauvegarder votre Applet IFTTT
  
  
  
Influman 2018  
therealinfluman@gmail.com  
[Paypal Me](https://www.paypal.me/influman "paypal.me")  
  

