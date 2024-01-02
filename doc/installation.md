# Installation of AcmeEventBundle

## Step 1: Download the bundle

Add the repository to your `composer.json`:

```json
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/christophberger/acme-event-bundle.git"
        }
    ],
```

Then run `composer require`:

```
composer require acme/event-bundle:dev-main
```

## Step 2: Enable the bundle

Enable the bundle by adding it to the list of registered bundles in the `config/bundles.php` file of your Sulu project.

```
Acme\EventBundle\AcmeEventBundle::class => ['all' => true],
```

## Step 3: Update the database schema

```
php bin/console doctrine:schema:update --force --complete
```

## Step 4: Modify user roles

Modify your user roles and grant permissions to make the Event tab visible to admins.
