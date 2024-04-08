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

## Step 3: Add acme_event_api to sulu_admin.yaml

Add the following configuration to sulu_admin.yaml

    acme_event_api:
        resource: "@AcmeEventBundle/config/routing_api.yml"
        type: rest
        prefix: /admin/api


## Step 4: Update the database schema

```
php bin/console doctrine:schema:update --force --complete
```

## Step 5: Modify user roles

Modify your user roles and grant permissions to make the Event tab visible to admins.

## Step 6 (optional): Continue with the sulu-demo setup

Chances are you use this bundle together with [`sulu/sulu-demo`](https://github.com/sulu/sulu-demo). In this case, continue with the installation steps there to get the Sulu demo CMS up and running.
