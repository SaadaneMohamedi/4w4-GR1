Épreuve finale du cours de :
Conception d’interfaces et développement Web - 4W4
Durée de l’épreuve : 3 heures  
Compte pour 20% de la note globale du cours

Auteur: Saadane Mohamedi

À remettre : 
•	Sur Github une branche epreuve-finale de minimum 5 commits. Pour être corrigé il faut que les commits s’étalent pendant toutes la durée de l’épreuve. Faite un push vers votre Github seulement à la fin de l’épreuve
•	Sur Siteground votre site fonctionnel avec
o	la nouvelle version du thème
les champs personnalisés
o	les images en avant plan
o	le texte des ateliers

Ce qui est fourni :
•	Toutes les images sont fournies 
•	Le texte de la description des ateliers est fourni

Objectifs :  Utilisez la structure de thème de votre TP2 pour réaliser le développement de l’épreuve finale. 
Ce que vous devez réaliser
1.	5 pages décrivant chacune un atelier de perfectionnement offert par le département. Les 5 pages « atelier » seront créer à partir du modèle « template-atelier.php »
a.	Le contenu de chaque page, mise à part le titre de la page et le résumé de l’atelier est entièrement défini par des champs personnalisés
i.	Formateur (liste)
ii.	Date de début de l’atelier (date)
iii.	Heure de début (heure)
iv.	Durée d’une séance d’atelier (nombre)
v.	Local ou se déroulera l’atelier (radio bouton)
b.	Chacune des pages décrivant un atelier contient une image mise en avant. Vous devez utiliser les images fournies.
c.	Chacune des pages atelier à une zone « aside-atelier » qui sera définit dans un nouveau « template-part ». 
2.	Créer une nouvelle structure de menu animé permettant d’accéder aux pages décrivant les ateliers. Ce menu sera accessible à partir de la page d’accueil.
a.	Chaque item du menu contient
i.	Titre
ii.	Description
iii.	Une image (l’image mise en avant sur la page atelier)
Barème de correction sur 20 points
1.	Les 5 pages annonçant les ateliers (3 points)        
a.	Le contenu de chacune des pages contient l’ensemble des 5 champs personnalisé
b.	Chacune des page s’affiche comme sur la maquette et la vidéo

2.	template-atelier.php (3 points) 
a.	organisation du code
b.	fonctionnement

3.	La zone aside (3 points)
a.	Le template-part « aside-atelier.php » permet de créer la zone aside pour les pages atelier.
b.	Affiche l’image mise en avant de l’atelier
c.	Le menu simplifier permettant d’accéder à chacun des ateliers
d.	Le format ressemble à l’exemple de la maquette


4.	Le menu des ateliers de la page d’accueil (3 points)
a.	Le menu est fonctionnel
b.	Titre, description sont présents dans chacun des éléments 
c.	Les images mise en avant ont été bien intégrées dans chacun des blocs du menu
d.	Les éléments du menu sont animés

5.	Niveau d’intégration global (3 points)
a.	Qualité du design
b.	Qualité de l’intégration

6.	Github : 5 commits dans la branche epreuve-finale sur votre dépôt du cours 4w4 (5 points)
a.	Étalement des commits pendant les trois heures de EF (pas dans les 5 dernières minutes de l’EF)
b.	Chaque commit devrait contenir un état fonctionnel de votre développement
c.	Chaque commit est commenté et préfixé par «ef-vos initial» et un commentaire décrivant la modification
d.	Un readme.md contenant une description de l’épreuve et des modification apportés
e.	Le lien vers votre dépôt github est indiqué dans l’entête de votre thème
Aides :
Dans header.php pour permettre une zone aside aux pages qui ont été générées par template-atelier.php
  $nouvelle_classe = "";
  if  (is_front_page() || 
      (! in_category("cours") && ! in_category("4w4")) ){
        $nouvelle_classe = 'no-aside';
      }
  if (is_page_template('template-atelier.php')) {
       $nouvelle_classe = '';
  }

Remarques importantes :
Fraude et plagiat (PDEA)
La fraude ou le plagiat entraînent la note zéro (0) pour l’épreuve finale. La participation ou la collaboration au plagiat peuvent également entraîner la note zéro (0). Les sanctions institutionnelles qui peuvent être appliquées dans les cas de fraude et plagiat, ainsi que les recours possibles pour l'étudiant, peuvent être consultées à partir d'Omnivox dans la section « Documents de référence ».



##### Liens de référence
- https://github.com/SaadaneMohamedi/4w4-GR1
- https://github.com/SaadaneMohamedi/4W4-GR1-Carrousel
- https://cidweb36.sg-host.com