/!\ Penser à ne pas oublier d'utiliser bootstrap quand on créer une vue /!\

mega tuto boostrap -> http://bootstrap-doc.prauds.fr/index1.php  + balises/classes à la fin
icones bootstrap -> https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp


Pour le tp4 il reste à :


----- partie commune -----


----- Nicolas -----
+ un formulaire pour l'avatar, php et ajax fonctionnel. (il faut que le lien de l'image existe sinon l'utilisateur est notifié d'une erreur)
+ une méthode qui récuppère tous les chats plus récent qu'un certain id
+ chat rafraichit toutes les 10 secondes
+ si un nouveau chat est reçus la fenetre de chat clignote et est mise à jour
+ faire un accueil avec des messages random

----- Mathieu -----
+ Re gérer la pagination 
+ Finaliser Ajax sur partager
+ Finaliser Ajax pour envoie Messages
+ Ajouter l'ajout d'un fichier sur les messages
+ Finaliser Ajax pour la gestion des like


------- Bugfix ----------
- Description:
	-Aller sur la dernière page sur un quelconque profil
	-Ecrire entre 1 et 5 messages pour créer une nouvelle page

	Actual:
		Pas d'ajax pour remettre à jour la pagination dès que nouvelle page créée

	Expected:
		Pagination mise à jour proprement

	Flemme ?
