# Package Laravel "Salutation"

Le package Laravel "Salutation" permet de retourner un message de salutation en fonction de l'heure de la journée. Il retourne des messages tels que "Bonjour", "Bonsoir" etc.

## Installation

Pour installer ce package, exécutez la commande suivante dans le terminal à la racine de votre projet Laravel :

<code> composer require nom_utilisateur/salutation </code>


## Configuration

Après avoir installé le package, publiez le fichier de configuration en exécutant la commande suivante :

<code> php artisan vendor:publish --provider="NomUtilisateur\Salutation\SalutationServiceProvider" --tag="config" </code>


Cela créera un fichier `config/salutation.php` que vous pouvez personnaliser selon vos préférences.

## Utilisation

### Facade

Vous pouvez utiliser le package en faisant appel à la façade `Salutation` :

```php
use NomUtilisateur\Salutation\Facades\Salutation;

// Retourner le message de salutation en fonction de l'heure actuelle
$message = Salutation::greet();

```


### Helper


Vous pouvez également utiliser la fonction helper salutation() pour retourner le message de salutation :

// Retourner le message de salutation en fonction de l'heure actuelle
<code> $message = salutation(); </code>

### Blade Directive

Le package fournit également une directive Blade pour afficher le message de salutation directement dans vos vues :

<code> @salutation </code>

### Personnalisation

Vous pouvez personnaliser les messages de salutation et les plages horaires en modifiant le fichier de configuration config/salutation.php :

```php
return [
    'greetings' => [
        'morning' => 'Bonjour',
        'afternoon' => 'Bon après-midi',
        'evening' => 'Bonsoir',
        'night' => 'Bonne nuit',
    ],

    'time_ranges' => [
        'morning' => ['start' => '05:00', 'end' => '11:59'],
        'afternoon' => ['start' => '12:00', 'end' => '17:59'],
        'evening' => ['start' => '18:00', 'end' => '21:59'],
        'night' => ['start' => '22:00', 'end' => '04:59'],
    ],
];
```

### Licence

Ce package est publié sous la licence MIT.


