## Bienvenue sur Tonton Gazon

Tonton Gazon est un site qui a était développé à l'occasion d'un projet de deuxième année MMI par Mathieu Dondaine et Dimitry Pierru.
Ce site a pour objectif de mettre en relation des particuliers afin d'échanger un service (la tonte de gazon) contre de l'argent.

## Comment ça fonctionne ?

Il y a deux types de personnes sur Tonton Gazon :

- Les **Tondus** qui publient une annonce avec le descriptif de leur jardin, la surface et le prix de la tonte.
- Les **Tondeurs** qui répondent à une annonce publiée par un **tondeur** en échange d'argent.

## Comment voir le projet sur mon ordinateur ?

Le projet n'est pas encore disponible sur Internet car il n'est pas totalement fini et que nous voulons nous assurer de la sécurité avant de le publier.
Vous pouvez cependant l'ouvrir sur votre ordinateur. Pour cela :

- [**Composer**](https://getcomposer.org/) doit être installé sur votre Ordinateur.
- [**Wamp**](http://www.wampserver.com/) ou autre logiciel pouvant soutenir une base de données doit être lancé sur votre Ordinateur.
- Vérifiez que votre fichier [.env](https://github.com/laravel/laravel/blob/master/.env.example) est relié à votre base de données. Si vous n'avez pas de [.env](https://github.com/laravel/laravel/blob/master/.env.example), telechargez [cette exemple](https://github.com/laravel/laravel/blob/master/.env.example) et modifiez le pour le lier à votre base de données
- Placez-vous dans le repertoire du fichier et creez la base de données à l'aide de la commande : **php artisan migrate**
- Remplissez la base de données avec la commande : **php artisan db:seed**
- Lancer le serveur avec la commande **php artisan serve**
- Vous pouvez maintenant lancer le site internet avec l'**addresse indiquée** en reponse au php artisan serve


## Merci